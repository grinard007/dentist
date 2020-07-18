<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Newsletter;
use Session;

class NewletterController extends Controller
{
    
    public function viewSubscriber(Request $request)
    {
      if (! Newsletter::isSubscribed($request->user_email) ) {
            Newsletter::subscribePending($request->user_email);
            Session::flash('successMsg','Thanks for subscribing!');
            return redirect()->back();
          }
          Session::flash('successMsg','Subscriber email already exists');
          return redirect()->back();
    }

}
