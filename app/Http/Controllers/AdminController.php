<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function AdminDashboard(){
      $fetch_user = User::select('users.*')->get();
    return view('dashboard', compact('fetch_user'));
   }
}
