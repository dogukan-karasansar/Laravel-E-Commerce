<?php

namespace App\Http\Controllers;

use App\Models\Cart as ModelsCart;
use App\Models\Order;
use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {
        $cartItems = Cart::session(auth()->user()->id)->getContent();
        $orders = Order::where('user', auth()->user()->id)->with('carts')->get();
        return view('cart.index', compact('cartItems', 'orders'));
    }

    public function add(Product $product) {
        if(auth()->guest()) {
            Cart::add(array(
                'id' => uniqid($product->id),
                'name' => $product->name,
                'description' => $product->description,
                'stock' => $product->stock,
                'quantity' => 4,
                'price' => $product->price,
                'attributes' => array(
                    'image' => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/macbook-air-silver-select-201810?wid=892&hei=820&&qlt=80&.v=1603332212000'
                ),
                'associatedModel' => $product
            ));
        } else {
            Cart::session(auth()->user()->id)->add(array(
                'id' => uniqid($product->id),
                'name' => $product->name,
                'description' => $product->description,
                'stock' => $product->stock,
                'quantity' => 4,
                'price' => $product->price,
                'attributes' => array(
                    'image' => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/macbook-air-silver-select-201810?wid=892&hei=820&&qlt=80&.v=1603332212000'
                ),
                'associatedModel' => $product
            ));
        }

        return back();
    }

    public function destroy($id) {
        Cart::session(auth()->user()->id)->remove($id);

        return back();
    }

    public function update($id) {
        Cart::session(auth()->user()->id)->update($id, [
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity'),
            ),
        ]);

        return back();
    }

    public function save() {
        $items = Cart::session(auth()->user()->id)->getContent();
        $cart =  ModelsCart::create([
            'user' => auth()->user()->id,
            'cart_data' => $items,
        ]);

        Order::create([
            'user' => auth()->user()->id,
            'cart' => $cart->id
        ]);
        Cart::session(auth()->user()->id)->clear();


        return redirect()->route('index');
    }
}
