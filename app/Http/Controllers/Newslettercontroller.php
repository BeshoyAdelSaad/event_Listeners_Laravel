<?php

namespace App\Http\Controllers;

use App\Events\UserSubscribed;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class Newslettercontroller extends Controller
{
    public function index()
    {
        return View('index');
    }
    
    public function subscribe(Request $request)
    {
        $request->validate([
           'email' => 'required|unique:newsletter,email' 
        ]);   
        
        event(new UserSubscribed($request->input('email')));
        return back();
    }
 



}