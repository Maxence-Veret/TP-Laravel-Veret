<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController
{
    public function contact() {
        return view('Form.contact');
    }
}
