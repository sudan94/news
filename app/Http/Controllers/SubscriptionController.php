<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;
class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        $this->validate(request(),[
            'email' => 'required',
            'password' =>'required|min:6'
        ]);
        Subscription::create([
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        Session()->flash('message','Subscription done successfully');
        return redirect()->back();
    }
}
