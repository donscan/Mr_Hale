<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Study;

class StudyController extends Controller
{
    public function study()
    {
      return view('study');
    }
}
