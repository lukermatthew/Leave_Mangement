<?php

namespace App\Http\Controllers\Admin;
use App\Recommendation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecommendationController extends Controller
{
    //
    public function index(){

    $recommendations = Recommendation::all();
    return view('admin.recommendation.index',compact('recommendations'));

    }
}
