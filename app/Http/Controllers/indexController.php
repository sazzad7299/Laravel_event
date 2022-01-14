<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $sliders = Slider::where('status','1')->get();
        $sliderCount = Slider::where('status','1')->count();
        return view('index')->with(compact('sliders','sliderCount'));
    }
    
}
