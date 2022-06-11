<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Newsletter;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.pages.dashboard');
    }

    // public function newsletter()
    // {
    //     $subscribers = Newsletter::orderBy('id', 'desc')->get();
    //     return view('backend.pages.newsletter')->withData($subscribers);
    // }
}
