<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Subscriber;
use Mail;
use App\Mail\EmailManager;

class NewsletterController extends Controller
{
    public function index(Request $request)
    {
    	$users = User::whereNotNull('email')->get();
        $subscribers = Subscriber::all();
    	return view('newsletters.index', compact('users', 'subscribers'));
    }

    public function send(Request $request)
    {
        //sends newsletter to selected users
    	foreach ($request->user_emails as $key => $email) {
            $array['view'] = 'emails.newsletter';
            $array['subject'] = $request->subject;
            $array['from'] = env('MAIL_USERNAME');
            $array['content'] = $request->content;

            Mail::to($email)->queue(new EmailManager($array));
    	}

        //sends newsletter to subscribers
        foreach ($request->subscriber_emails as $key => $email) {
            $array['view'] = 'emails.newsletter';
            $array['subject'] = $request->subject;
            $array['from'] = env('MAIL_USERNAME');
            $array['content'] = $request->content;

            Mail::to($email)->queue(new EmailManager($array));
    	}

    	flash(__('Newsletter has been send'))->success();
    	return redirect()->route('admin.dashboard');
    }
}
