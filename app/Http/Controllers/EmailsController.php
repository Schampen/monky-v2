<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emails;

class EmailsController extends Controller
{
    public function store()
    {
        request()->validate([
            'email' => 'required'
        ]);
        
        $emails = new Emails();
        $emails->email = request('email');
        $emails->save();

        return redirect('/');
    }
}
