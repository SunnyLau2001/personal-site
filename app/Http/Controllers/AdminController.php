<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class AdminController extends Controller
{
    //
    public function admin_dashboard(): Response
    {
        return Inertia::render("Admin/Dashboard",[]);
    }
}
