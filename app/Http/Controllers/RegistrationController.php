<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Mail\UserRegistrationMail;
use App\Mail\AdminNotificationMail;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:registrations,email',
            'phone' => 'required|string|max:20',
            'company' => 'required|string|max:255',
            'terms' => 'required|accepted'
        ]);

        // Crear el registro
        $registration = Registration::create([
            'name' => $validated['name'],
            'lastname' => $validated['lastname'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'company' => $validated['company'],
            'terms_accepted' => true,
            'trial_expires_at' => Carbon::parse('2025-12-01'),
            'email_sent' => false
        ]);

        // Preparar datos para los emails
        $userData = [
            'name' => $registration->name,
            'lastname' => $registration->lastname,
            'email' => $registration->email,
            'phone' => $registration->phone,
            'company' => $registration->company
        ];

        try {
            // Enviar email al usuario
            Mail::to($registration->email)->send(new UserRegistrationMail($userData));
            
            // Enviar email de notificación a admin
            Mail::to('admin@advis.com')->send(new AdminNotificationMail($userData));
            
            // Marcar como email enviado
            $registration->update(['email_sent' => true]);
            
        } catch (\Exception $e) {
            // Log del error pero no fallar el registro
            \Log::error('Error enviando emails de registro: ' . $e->getMessage());
        }

        return redirect()->route('registration.success')->with('registration', $registration);
    }
}
