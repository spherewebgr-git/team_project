<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function  index()
    {
        $users=User::all();
        return view('test',['users'=>$users]);

    }
}
