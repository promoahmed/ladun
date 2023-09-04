<?php

namespace App\Http\Controllers;

use App\Http\Requests\JoinUsRequest;
use App\Models\JoinUs;
use Illuminate\Http\Request;

class JoinUsController extends Controller
{
    /**
     * @param JoinUsRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function store(JoinUsRequest $request)
    {
        $joinUs = JoinUs::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'qualification' => $request->qualification,
                'specialization' => $request->specialization,
                'jop' => $request->jop]
        );
        $joinUs->addMedia($request->cv)->toMediaCollection('join');

        return response([
            'message' => 'success',
            'status' => '200',
            'joinUsData' => JoinUs::with('media')->get()
       ]);
    }

    public function index()
    {
        return response([
            'joinUs'=>JoinUs::with('media')->get()
        ]);
    }
}
