<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Exception;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        // validate input

        // ddd($newsletter);
        request()->validate(['email' => 'required|email']);

        try{

            // call a subscribe method
            $newsletter->subscribe(request('email'));

        } catch (Exception $e){
            throw ValidationException::withMessages(['email' => 'This email could not be added']);
        }

        // redirect home with a success message
        return redirect('/')->with('success','You are now signed up for our newsletter');
    }
}
