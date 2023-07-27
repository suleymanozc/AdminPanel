<?php

namespace App\Http\Controllers\Sliders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    public function getSliders(){
        return view('backend.slider.sliders');
    }

    public function getSlidersAdd(){
        return view('backend.slider.slider-add');
    }

    public function getSlidersEdit(){
        return view('backend.settings.setting-edit');
    }
}
