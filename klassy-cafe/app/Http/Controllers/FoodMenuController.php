<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodMenuController extends Controller
{
    function show(Request $req){
        if( $req->has('add') ){
            if( $req->add === 'foodmenu' ){
                $this->add($req);
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
            return view('dashboard.foodmenu');
        }
    }

    function add($req){
        ?>

            <p>food-menu-name: <?php echo $req['food-menu-name']?></p>
            <p>food-menu-price: <?php echo $req['food-menu-price']?></p>
            <p>food-menu-desc: <?php echo $req['food-menu-desc']?></p>

        <?php
    }

    function edit($req){
        ?>

            <p>food-menu-name: <?php echo $req['food-menu-name']?></p>
            <p>food-menu-price: <?php echo $req['food-menu-price']?></p>
            <p>food-menu-desc: <?php echo $req['food-menu-desc']?></p>

        <?php
    }

    function delete($id){
        echo $id;
    }
}