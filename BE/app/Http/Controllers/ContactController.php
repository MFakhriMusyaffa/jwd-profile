<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
     public function store(Request $request)
    {
       $validator = Validator::make($request->all(), [
        'name'    => 'required|string|max:255',
        'email'   => 'required|email',
        'message' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'errors' => $validator->errors()
        ], 422);
    }

    Contact::create($validator->validated());

    return response()->json([
        'message' => 'Pesan berhasil dikirim'
    ], 201);
    }
}
