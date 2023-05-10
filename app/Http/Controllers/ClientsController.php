<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class ClientsController extends Controller
{
    public function index()
    {
        return Inertia::render('Clients/Index', [
            'filters' => Request::all('search', 'trashed'),
            'clients' => User::where('role_id', 1)->paginate(20)
        ]);
    }
}
