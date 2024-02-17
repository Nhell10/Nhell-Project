<?php

namespace App\Http\Controllers\Logistics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogisticsData extends Controller
{
  public function index()
  {
    return view('content.logistics.logistics-data');
  }
}
