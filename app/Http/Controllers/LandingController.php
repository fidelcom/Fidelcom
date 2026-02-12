<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $testimonials = Testimonial::all();
        $partners = Partner::all();
        $contacts = Contact::first();
        return view('index', compact('projects', 'testimonials', 'partners', 'contacts'));
    }
}
