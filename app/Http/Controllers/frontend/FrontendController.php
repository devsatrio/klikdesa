<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\backend\GaleriModel;
use App\models\backend\ArtikelModel;
use App\models\backend\SliderModel;
use Image;
use File;
use DB;


class FrontendController extends Controller
{

    //=================================================================
    public function index()
    {
        $data = GaleriModel::orderby('id','desc')->get();
        $data_artikel = ArtikelModel::orderby('id','desc')->get();
        $count_slider = DB::table('slider')->count();
        $data_slider = SliderModel::select(DB::raw('slider.*'))->limit(1)->get();
        return view('frontend.home',['data'=>$data , 'hitung'=>$count_slider , 'slider'=>$data_slider , 'artikel'=>$data_artikel]);
    }
}
