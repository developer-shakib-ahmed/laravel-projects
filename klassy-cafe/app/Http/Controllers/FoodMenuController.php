<?php

namespace App\Http\Controllers;

use App\Models\Foodmenu;
use Illuminate\Http\Request;

class FoodMenuController extends Controller
{
    function show(Request $req){
        if( $req->has('add') ){
            if( $req->add === 'foodmenu' ){
                $this->add($req);
                return redirect()->back()->with('message', 'New Foodmenu Added!');
            }else{
                return view('dashboard.foodmenu_add');
            }
        }
        elseif( $req->has('edit') ){
            if( $req->edit === 'foodmenu' ){
                $this->add($req);
            }else{
                return view('dashboard.foodmenu_edit');
            }
        }        
        elseif( $req->has('delete') ){
            $this->delete($req->delete);
        }
        else{
            $data = Foodmenu::paginate(1);
            return view('dashboard.foodmenu', compact('data'));
        }
    }

    function add($req){
        $req->validate([
            'name'  => 'required',
            'price' => 'required',
            'desc'  => 'required',
        ]);

        $foodMenu = new Foodmenu;

        $foodMenu->name = $req->name;
        $foodMenu->price = $req->price;
        $foodMenu->desc = $req->desc;

        $foodMenu->save();
    }

    function edit($req){
        ?>
            <p>Name: <?php echo $req['name']?></p>
            <p>Price: <?php echo $req['price']?></p>
            <p>Desc: <?php echo $req['desc']?></p>
        <?php
    }

    function delete($id){
        echo $id;
    }
}