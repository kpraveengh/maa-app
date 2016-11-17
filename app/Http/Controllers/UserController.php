<?php

namespace App\Http\Controllers;

use Collective\Html\HtmlServiceProvider;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Product;
use Html;
use View;
use Response;

class UserController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\Response
     */

    /*All restaurant Owners*/

    public function owners()
    {
        $users = User::all()->where('user_type', 'owner');
        return View('user.index')
        ->with('users', $users  );         
    }

   /* All End Users*/

    public function users()
    {
        $users = User::all();
         return View('user.allusers', compact('users'))
        ->with('users', $users  );

     /* return Response::json(array(
        'error' => false,
        'users' => $users->toArray()),
        200
    );    */   


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            $users             = new User;
            $users->name       = Input::get('name');
            $users->email      = Input::get('email');
            $users->password   = Hash::make(Input::get('password'));
            $users->save();

                return redirect('user/');           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
          $users= User::find($id);
            return View::make('user.show')
            ->with('users', $users);
           

           /* return response()->json($users, 200) 
            ->header('Content-Type', 'text/plain');*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $users = User::find($id);
        return View::make('user.edit')
            ->with('users', $users);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
            $users           = User::find($id);
            $users->name     = Input::get('name');
            $users->email    = Input::get('email');
            $users->password  = Input::get('password');
            $users->save();

                return redirect('user/create');         
  
          /* return Response::json(array(
                'error' => false,
                'users' => $users->toArray()),
                200
            );*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $users = User::find($id);
        $users->delete();

        // redirect
       return redirect('user');
    }
    
}
