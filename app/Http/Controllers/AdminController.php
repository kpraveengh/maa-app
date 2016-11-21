<?php


namespace App\Http\Controllers;

use Collective\Html\HtmlServiceProvider;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use Html;
use View;

class AdminController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $users = User::all();
          $admins = Admin::all();

          return View('admins.index')
        ->with('admins', Admin::all(),User::all())
        ->with('users', User::all());

        // load the view and pass the nerds
        /*$users = DB::table('users')->where('user_type', 'generaluser')->first();*/
     /*   return View::make('admins.index')
            ->with('admins', $admins)
             ->with('users', $users);

            return response()->json($admins);*/
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View::make('admins.create');
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
            $admins             = new Admin;
            $admins->name       = Input::get('name');
            $admins->email      = Input::get('email');
            $admins->password   = Hash::make(Input::get('password'));
            $admins->save();

          //      return redirect('admins/adminusers');
           
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
          $admins= Admin::find($id);
            return View::make('admins.show')
            ->with('admins', $admins);

            /*return response()->json($users, 200) 
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
        $admins = Admin::find($id);

        // show the edit form and pass the nerd
        return View::make('admins.edit')
            ->with('admins', $admins);
    
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
            $admins = Admin::find($id);
            $admins->name     = Input::get('name');
            $admins->email    = Input::get('email');
            $admins->save();
            return redirect('admins/adminusers');

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
        $admins = Admin::find($id);
        $admins->delete();
        return redirect('admins');

        $users = User::find($id);
        $users->delete();

        // redirect
       return redirect('admins/adminusers');
    }
       public function getadmins()
    {
        //
          $admins = Admin::all();

          return View('admins.list')
        ->with('admins', $admins);

         
    }
     public function owners()
    {
        //
         $users = User::all()->where('user_type', 'owner');

          return View('admins.owners')
        ->with('admins', Admin::all(),User::all()->where('user_type', 'owner'))
        ->with('users', User::all()->where('user_type', 'owner'));

       
         
    }


}
