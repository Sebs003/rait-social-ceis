<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Service;
use App\Models\Message;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_patients' => Patient::count(),
            'total_appointments' => Appointment::count(),
            'pending_appointments' => Appointment::status('pending')->count(),
            'unread_messages' => Message::unread()->where('receiver_id', auth()->id())->count(),
        ];

        $upcoming_appointments = Appointment::with(['patient', 'service'])
            ->upcoming()
            ->take(5)
            ->get();

        $recent_patients = Patient::latest()
            ->take(5)
            ->get();

        $active_services = Service::active()
            ->withCount('appointments')
            ->get();

        return view('dashboard.index', compact(
            'stats',
            'upcoming_appointments',
            'recent_patients',
            'active_services'
        ));
    }
}
