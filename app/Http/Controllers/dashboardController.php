<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public  function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard.home');
    }
}
