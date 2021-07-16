<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller {
    public function __invoke(Newsletter $newsletter) {
        request()->validate(
            ['email' => 'required|email']
        );

        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) {
            throw \Illuminate\Validation\ValidationException::withMessages(
                ['email' => 'Error during subscribe this email']
            );
        }

        return redirect('/');
    }
}
