<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NewsletterSubscriber;

class NewsletterControllor extends Controller
{
    public function checkSubscriber(Request $request){
               if($request->ajax()){
               	   $data = $request->all();
               	   //echo "<pre>"; print_r($data); die;
               	   $subscriberCount = NewsletterSubscriber::where('email',$data['nl_email'])->count();
                     if($subscriberCount >0){
                          echo "exists";
                     }
               }
    }
    public function addSubscriber(Request $request){
               if($request->ajax()){
               	   $data = $request->all();
               	   //echo "<pre>"; print_r($data); die;
               	   $subscriberCount = NewsletterSubscriber::where('email',$data['nl_email'])->count();
                     if($subscriberCount >0){
                          echo "exists";
                     }else{
                     	//Add New Email in Newsletter_Subscriber table
                     	$newsletter = new NewsletterSubscriber;
                     	$newsletter->nl_email  = $data['nl_email'];
                     	$newsletter->status =1;
                     	$newsletter->save();
                     	echo "Saved";
                     }
               }
    }
    public function viewSubscriber(){
    	 $newsletter = NewsletterSubscriber::get();
    	 return view('view_newsletter',compact('newsletter'));
    }

}
