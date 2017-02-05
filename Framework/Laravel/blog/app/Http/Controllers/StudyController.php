<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StudyController extends Controller
{
    public function index()
    {
      return view('user.index');
    }
    public function user()
    {
      return view('user.user');
    }
}
