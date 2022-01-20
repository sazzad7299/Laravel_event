<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\Event;

class IndexController extends Controller
{
    public function index(){
        $sliders = Slider::where('status','1')->get();
        $sliderCount = Slider::where('status','1')->count();
        return view('index')->with(compact('sliders','sliderCount'));
    }

    public function about(){
        return view('about_us');
    }

    public function gallery(){
        return view('gallery');
    }

    public function schedules(){
        $events=Event::latest(4);
        return view('schedules',['events'=>$events]);
    }
    
}
