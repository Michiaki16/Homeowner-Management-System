<?php

namespace App\Http\Controllers;

use App\Models\Homeowner;
use App\Models\Event;
use App\Models\Complaint;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $homeownersCount = Homeowner::count();
        $eventsCount = Event::count();
        $complaintsCount = Complaint::count();

        return view('layout', compact('homeownersCount', 'eventsCount', 'complaintsCount'));
    }
}
