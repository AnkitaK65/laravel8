<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        //return view('contactForm');
        return redirect('/#footer');
        // return redirect()->route('users.index');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create($request->all());
        // message by request
        // return redirect('/#footer')
        //     ->with(['success' => 'Thank you for contacting us. We will contact you shortly.']);
    
        //Ajax call
        return response()->json(['success'=>'Successfully']);
    }
}
