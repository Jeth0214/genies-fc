<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsPostRequest;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function sendMessage(ContactUsPostRequest $request)
    {
        // Retrieve the validated input data...
        $validatedData = $request->validated();

        Mail::to('contactus@captainacademy.com.sa')
            ->cc('Abdulrahman@captainacademy.com.sa')
            ->send(new ContactUs($validatedData));

        return response()->json($request, 200);


        // Mail::to('rolandjethrosuyom@gmail.com')
        //     ->send(new ContactUs($validatedData));

        // return response()->json($request, 200);
    }
}
