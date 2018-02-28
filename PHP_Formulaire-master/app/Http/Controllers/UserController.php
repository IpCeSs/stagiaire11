<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.formulaire');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new User();
       $user-> firstname = $request->input('firstname');
         $user-> lastname = $request->input('lastname');
          $user-> gender = $request->input('gender');
           $user->newsletter = $request->input('newsletter');
            $user-> mood = $request->input('mood');
            $user->save();
        $data = [
            'user' => [
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'),
                'gender' => $request->input('gender'),
                'newsletter' => $request->input('newsletter'),
                'mood' => $request->input('mood'),
            ],
        ];

        return view('user.result', $data);

    }


    public function show()

    {



    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
