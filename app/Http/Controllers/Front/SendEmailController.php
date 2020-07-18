<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Session;

class SendEmailController extends Controller
{
    public function contact(Request $request)
    {
        if($request->isMethod('post')){
           $data = $request->all();
        //    echo "<pre>"; print_r($data); die;
          $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'message' =>'required'
          ]);
          $data =array(
              'name' => $request->name,
              'message' =>$request->message
          );
          Mail::to('grinardprog007@gmail.com')->send(new ContactFormMail($data));
          return redirect()->back()->with('successMsg','Thanks for contacting Us!');

        }
        return view('contact');
    }
    public function appointMent(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
         //    echo "<pre>"; print_r($data); die;
        //    $this->validate($request,[
        //      'yourname' => 'required',
        //      'yourphone' => 'required',
        //      'youremail' => 'required|email',
        //      'youraddress' => 'required',
        //      'yourscheldule' => 'required',
        //      'yourday' => 'required',
        //      'yourmessage' =>'required'
        //    ]);
           $data =array(
               'yourname' => $request->yourname,
               'yourphone' => $request->yourphone,
               'youremail' => $request->youremail,
               'youraddress' => $request->youraddress,
               'yourscheldule' => $request->yourscheldule,
               'yourday' => $request->yourday,
               'yourmessage' =>$request->yourmessage
           );
           Mail::to('grinardprog007@gmail.com')->send(new ContactFormMail($data));
           return redirect('appoint')->with('successMsg',
           'Thanks for booking appointment with Us!');
 
         }else{
             return redirect('home');
         }
         return view('index');
    }
}
