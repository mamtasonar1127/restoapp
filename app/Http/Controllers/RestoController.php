<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Restaurant;
Use Session;

class RestoController extends Controller
{
    //
    function index()
    {
        return view('home');
    }
    function list()
    {
        $data = Restaurant::all();
        return view('list',["data"=>$data]);
    }
    function addRestuarant(Request $req)
    {
        //return $req->input();

        $resto = new Restaurant;
        $resto->name=$req->input('restuarantname');
        $resto->email=$req->input('email');
        $resto->address=$req->input('address');
        $resto->save();
        $req->session()->flash('status','Restaurant Submitted Successfully');
        return redirect('list');
    }

    function delete($id)
    {
       Restaurant::find($id)->delete();
       Session::flash('status','Restaurant Deleted Successfully');
        return redirect('list');
    }
}
