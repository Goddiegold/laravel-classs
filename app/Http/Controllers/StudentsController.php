<?php

namespace App\Http\Controllers;
use App\Models\Student;
// use App\Http\Controllers\HTTP;
// use Illuminate\Support\Facades\Http;
use Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    //
    function homeView($name){
    //    echo $name
    $student=["Tope", "Jade", "Kemi","Tope", "Jade", "Kemi","Tope", "Jade", "Kemi","Tope", "Jade", "Kemi","Tope", "Jade", "Kemi","Tope", "Jade", "Kemi","Tope", "Jade"];
       return view('home',['data'=>$student]);
    }

    function getPayment(){
        return view('students.payment');
    }


    public function index(){
        $data = DB::select("select * from students");
        // json_encode($data)w
        return data;
    }

    public function getUsers(){
        // return Student::all()
        // return Student::find('email');W
        return Student::find(1,'email');
    }

    //HTTP client
    public function getHttp(){
        $result= Http::get("reqres.in/api/users");
        return view('users',['users'=>$result['data']]);
        // return HTTP::get("http://example.com/users");
    }

    public function studentRecord(){
        $students = Student::all();
        return view('students',['users'=>$students]);
    }

    public function getSession(Request $request) {
        $data = $request->input();
        $request->session()->put('keyvalue',$data);
        // dd(session('keyvalue'));
        // return $data['name'];
        if(session('keyvalue')){
          return redirect('profile');
        }
    }

    public function uploadFile(Request $request){
       $request->file("photo")->store('photos','public');
    //    $request->file("photo")->store('public');
       dd($request);
    // return $request;
    }

}
?>
 