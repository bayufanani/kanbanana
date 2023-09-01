<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ProjectsController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Projects/index');
    }

    public function create(): Response
    {
        return Inertia::render(('Projects/Create'));
    }
}
