<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Cart;

class CartController extends Controller
{
    //
    
    public function addToCart($id)
    {
    $event=Event::find($id);
    Cart::add(['id' => $event->id, 'name' => $event->title, 'qty' => 1, 'price' =>$event->price, 'weight'=>$event->price ,'options' => ['image' => $event->image]]);
    return  Cart::content();
    }
}
