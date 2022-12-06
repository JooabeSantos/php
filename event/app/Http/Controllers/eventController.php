<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;

class eventController {
    public function index(){

      $events = event::all();
      return view('index')->with('events', $events);
      
    }

    public function show($id)
    {
        echo "<h1>Visualizar a máquina $id.</h1>";
    }
}
