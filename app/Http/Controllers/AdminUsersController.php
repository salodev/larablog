<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class AdminUsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
		
		if(\Auth::user()->role != 'ADMIN') {
			return view('customer.denied');
		}
		$users = DB::table('users')->where('id', '=', $id)->delete();
		return redirect('/home');
		return view('admin.home', array('users' => $users));
        
    }
}
