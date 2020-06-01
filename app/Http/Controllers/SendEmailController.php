<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\User;

class SendEmailController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


   public function index ()
    {

        $users = User::all();
        return view('emails.send_email')->with('users',$users);


    }

    public function autocomplete(Request $request)
    {
        $data = User::select("name")
                ->where("name","LIKE","%{$request->input('query')}%")
                ->get();

        return view('emails.send_email')->response()->json($data);
    }


    // public function indexes()
    // {
    //     $users = User::latest()->paginate(5);

    //     return view('emails.send_email',compact('users'))
    //         ->with('i', (request()->input('page', 1) - 1) * 5);
    // }

    public  function send(Request $request)
    {

$this->validate($request, [
    //   'user_name'     =>  'required',
      'name'     =>  'required',
      'email'  =>  'required|email',
    //   'user_email'  =>  'required|email',
      'message' =>  'required',
    //   'user_message' =>  'required'
     ]);


        $data = array(
            'name'      =>  $request->name,
            'email'      =>  $request->email,
            'message'   =>   $request->message
        );
    //  $userdata = array(
    //         'user_name'      =>  $request->name,
    //         'user_email'      =>  $request->email,
    //         'user_message'   =>   $request->message

    //     );

    //  Mail::to($request->email)->send(new SendMail($data,$userdata));
    //  return back()->with('success', 'Thanks for contacting us!');



     Mail::to([$request->email])->send(new SendMail($data));
     return back()->with('success', 'Send Email Successful');

    }


}
