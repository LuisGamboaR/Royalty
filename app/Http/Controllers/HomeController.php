<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $clientlist = Client::All();
        $clients = $clientlist->count();

        $userlist = User::All();
        $users = $userlist->count();



        return view('home', compact('clients', 'users'));
   
    }
}
