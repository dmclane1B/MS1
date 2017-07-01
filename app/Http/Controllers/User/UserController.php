<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Auth\User\User;
use Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::guest()){
            return redirect('/login');              
        }
        else {           
            
            if( \Auth::user() ) {
            	
                return view('user.sections.dashboard');
            }
            else {
                return Redirect::to('/danny'); 
            }  
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sendmail(Request $request)
    {
    	
    }
    
    /**
     * Show the create new application form
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function newClientApplication()
    {
    	if(\Auth::guest()){
            return redirect('/login');              
        }
        else {           
            
            if( \Auth::user() ) {
            	
                return view('user.sections.new_client_application');
            }
            else {
                return Redirect::to('/danny'); 
            }  
        }
    }
}
