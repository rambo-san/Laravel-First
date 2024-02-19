<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class FirstController extends Controller{
    function homepage(){
        $names =["Ram"];
        return view('homepage',['names'=> $names]);
    }
    function about(){
        return view('about');
    }
}
?>