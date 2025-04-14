<?php

namespace App\Http\Controllers;


use App\Http\Requests\RegistrationRequest;
use App\Mail\RegistrationEmail;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function register(RegistrationRequest $request)
    {

        // Retrieve the validated input data...
        $validatedData = $request->validated();

        Mail::to('hajar@captainacademy.com.sa')
            ->cc('Abdulrahman@captainacademy.com.sa')
            ->send(new RegistrationEmail($validatedData));
        return response()->json($request, 200);
    }
}
