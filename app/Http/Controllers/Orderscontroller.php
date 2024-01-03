<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class Orderscontroller extends Controller
{
    //
   public function ordersView(){
        //    echo $name
        $student=["Tope", "Jade", "Kemi","Tope", "Jade", "Kemi","Tope", "Jade", "Kemi","Tope", "Jade", "Kemi","Tope", "Jade", "Kemi","Tope", "Jade", "Kemi","Tope", "Jade"];
        //    return view('order',['data'=>$student]);
        // return view('page1',['data'=>$student]);
        return Blade::render("<h1 style='color:red;'>Top G</h1>");
        }

        public function getData(Request $request){
            // $data = $request->input();
            // return dd($data);
            $data = $request->validate([
                'email'=>'required|min:3|email',
                'password'=>'required|min:3|max:15',
            ]); 

            return json_encode($data);
        }
}
