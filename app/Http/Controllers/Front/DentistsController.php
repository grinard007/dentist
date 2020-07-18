<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Appointment;
use Session;


class DentistsController extends Controller
{
    public function dentistindex(){
        return view('index');
    }
    public function dentistabout(){
        return view('about');
    }
    public function blog(){
        return view('blog');
    }
    public function blogD(){
        return view('blog-details');
    }
    public function contact(){
        return view('contact');
    }
    public function services(){
        return view('service');
    }
    public function prices(){
        return view('pricing');
    }
    public function appointMent(Request $request){
         if($request->isMethod('post')){
             $data = $request->all();

             $appointment = new Appointment;

             $appointment->yourname = $data['yourname'];
             $appointment->yourphone = $data['yourphone'];
             $appointment->youremail = $data['youremail'];
             $appointment->youraddress = $data['youraddress'];
             $appointment->yourscheldule = $data['yourscheldule'];
             $appointment->yourday = $data['yourday'];
             $appointment->yourmessage = $data['yourmessage'];
             $appointment->save();
             Session::flash('successMsg','Thanks for booking appointment with Us!');
             return view('appointment');
           
             
         }else{
            return redirect('dental');
         }
         //$appointment = Appointment::where('id',$id)->first();
         //return view('appointment')->with(compact('appointment'));
    }

}
