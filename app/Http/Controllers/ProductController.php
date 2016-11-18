<?php

namespace App\Http\Controllers;

use Collective\Html\HtmlServiceProvider;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use Html;
use View;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /*$products = Product::all();
        return View('product.index')
        ->with('users', $users  );*/
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       $users = User::all();
        $admins = Admin::all();

          return View('products.create')
        ->with('admins', Admin::all(),User::all())
        ->with('users', User::all());
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
            $products             = new Product;
            $products->name       = Input::get('name');
            $products->user->id      = Input::get('user_id');
            $products->save();

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
          $products= Product::find($id);

        // show the view and pass the nerd to it
        return View::make('product.show')
            ->with('products', $products);

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
       /* $users = User::find($id);

        // show the edit form and pass the nerd
        return View::make('user.edit')
            ->with('users', $users);*/
    
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
          /*  $users = User::find($id);
            $users->name     = Input::get('name');
            $users->email    = Input::get('email');
             $users->password   = Input::get('password');
            $users->save();

                return redirect('user/create');*/
         
  
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


       /* // delete
        $users = User::find($id);
        $users->delete();

        // redirect
       return redirect('user');*/
    }
}
