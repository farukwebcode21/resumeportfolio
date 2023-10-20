<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller {

    public function contactRequewst(Request $request) {
        return Contact::insert($request->input());
    }
}
