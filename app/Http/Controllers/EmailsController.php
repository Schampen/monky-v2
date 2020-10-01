<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emails;
use Illuminate\Support\Facades\Validator;

class EmailsController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|unique:emails'
        ]);

        if ($validator->fails()) {
            $registered = false;
            return redirect(url()->previous() .'#form')
                    ->withErrors($validator)
                    ->withInput();
        }

        $emails = new Emails();
        $emails->email = request('email');
        $emails->save();

        return redirect('/')->with('registered');
    }
}
