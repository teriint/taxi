<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Auth;
    class UserController extends Controller
    {
        /**
        * Create a new controller instance.
        *
        * @return void
        */
        public function __construct()
        {
            $this->middleware('isUser');
        }
       /**
       * Show the application dashboard.
       *
       * @return \Illuminate\Http\Response
       */
       public function index()
       {
           dd( Auth::guard('user')->user());
       }
    }