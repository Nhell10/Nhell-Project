<?php

namespace App\Http\Controllers\documentation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Documentation extends Controller
{
  public function index()
  {
    return view('content.documentation.docu-documentation');
  }
}
