<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class ActivityController extends Controller
{
  public function activity(Request $request) {
    $redis = app()->make('redis');
    $redis->LPUSH('activity', json_encode(array('activity'=>$request['activity'], 'user'=>$request['user'])));
    $test = $redis->lrange('activity', 0, -1);
    var_dump($test);
  }

  public function getActivity(){
    if(!$id = Auth::user()->id){

      return false;
    }
    $redis = app()->make('redis');
    $test = $redis->lrange('activity', 0, -1);

    $decoded = array();
    foreach ($test as $value) {


      $decode = json_decode($value, true);

      if($decode['user'] == $id){
        $decoded[] = $decode;
      }
    }


    $output = '<html><title>Activity</title><head></head><body>';
    foreach($decoded as $value){

      $output .= '<p>'.$value['activity'].'</p>';
    }
    $output .= '</body></html>';

    echo $output;
  }
}