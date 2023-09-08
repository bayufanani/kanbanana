<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;

class ProjectsController extends Controller
{
    public function index(): Response
    {
        $projects = DB::select("SELECT * FROM projects WHERE user_id=" . auth()->user()->id . " ORDER BY created_at DESC");
        return Inertia::render('Projects/index', ['projects' => $projects]);
    }

    public function create(): Response
    {
        return Inertia::render(('Projects/Create'));
    }

    public function store(Request $req)
    {
        // insert using eloquent query builder to table projects with nama, deskripsi and current user session id
        DB::table('projects')->insert([
            'name' => $req->nama,
            'deskripsi' => $req->deskripsi,
            'user_id' => auth()->user()->id
        ]);
        return to_route('projects.index');
    }
}
