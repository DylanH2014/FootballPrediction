<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ScheduleController extends Controller
{

    public function index() {

        return view('picker');

        $params = [
            'games'=>$games
        ];

        return view('picker', $params);

    }

    public function test() {

        $games = [
            
        ];

        $params = [

        ];


        return view('test', $params);

    }

}
