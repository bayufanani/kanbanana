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
        return Inertia::render('Projects/index');
    }

    public function create(): Response
    {
        return Inertia::render(('Projects/Create'));
    }

    public function store(Request $req)
    {
        // insert using eloquent query builder to table projects with nama, deskripsi and current user session id
        DB::table('projects')->insert([
            'nama' => $req->nama,
            'deskripsi' => $req->deskripsi,
            'user_id' => auth()->user()->id
        ]);
        return json_encode(['status' => 'ok']);
    }
}
