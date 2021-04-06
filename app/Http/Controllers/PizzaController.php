<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
use Validator;
class PizzaController extends Controller{

    public function show()
    {
        //$data = Pizza::paginate(5);
        $pizza = Pizza::all();
       return view('pizzas', ['pizzas' => $pizza]);
    }

    function delete($id)
    {
        $pizza=Pizza::find($id);
        $pizza->delete();
        return redirect('users');
    }

    function showData($id)
    {
        $pizza= Pizza::find($id);
       return view('edit',['pizza'=>$pizza]);
    }

    function update(Request $req)
    {
        $pizza=Pizza::find($req->id);
        $pizza->firstName = $req->firstName;
        $pizza->secondName = $req->secondName;
        $pizza->birthDate = $req->birthDate;
        $pizza->expireDate = $req->expireDate;
        $pizza->price = $req->price;
        $pizza->save();
        return redirect('/users');
    }


    function addData(Request $req)
    {
        $pizza = new Pizza;
        $pizza->id = $req->id;
        $pizza->firstName = $req->firstName;
        $pizza->secondName = $req->secondName;
        $pizza->birthDate = $req->birthDate;
        $pizza->expireDate = $req->expireDate;
        $pizza->image = $req->image->store('public/image');
        $pizza->price = $req->price;
        $pizza->save();

        return redirect('add');
    }
}

