<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
  public function activity(Request $request) {
    $redis = app()->make('redis');
    $redis->LPUSH('activity', $request['activity']);
    $test = $redis->lrange('activity', 0, -1);
  }
}
