<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Element;

class SiteController extends Controller
{
    public function renderDemoPage(){
        $items_slider = Element::where('page', 'index')->where('position', 'slider')->where('enabled', 1)->orderBy('sort', 'asc')->get();
        $items_feature = Element::where('page', 'index')->where('position', 'feature')->where('enabled', 1)->orderBy('sort', 'asc')->get();
    

    return view('index',compact('items_feature','items_slider'));
    
        
}}
