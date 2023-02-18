<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function store(Request $request)
    {
        $tempval = $request->session()->get('cart');
        $value = $tempval ? $tempval : [];
        $priceMultiplier = 1;

        switch ($request->size) {
            case 'Small':
                $priceMultiplier = 0.8;
                break;
            case 'Large':
                $priceMultiplier = 1.2;
                break;
        }

        array_push($value,['id' => $request->id,'size' => $request->size,'multiplier' => $priceMultiplier]);
        $request->session()->put('cart', $value);
        return redirect(route('products.index'));
    }

    public function show(Request $request)
    {
        $tempval = $request->session()->get('cart');
        $value = $tempval ? $tempval : [];
        $cart = [];
        $total = 0;
        foreach ($value as $item) {
            $dbItem = Product::find($item["id"]);
            array_push($cart,['id' => $item["id"],'size' => $item['size'],'img' => $dbItem['image'],'name' => $dbItem['name'],'price' => $dbItem['price']*$item['multiplier']]);
        }

        foreach ($cart as $item) {
            $total += $item['price'];
        }
        if (Auth::check()) {
            $user = auth()->user();
            $person = Person::find($user["id"]);
            return view('products/cart', ['cart' => $cart, 'total' => $total, 'person' => $person]);
        }
        return view('products/cart', ['cart' => $cart, 'total' => $total]);

    }
    public function clear(Request $request)
    {
        $request->session()->forget('cart');
        return redirect(route('session.show'));
    }
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         */
    public function destroy(Request $request, $id){
        $tempval = $request->session()->get('cart');
        $values = $tempval ? $tempval : [];
        unset($values[$id]);
//        for ($x = 0; $x < count($values); $x++) {
//            if($id == $values[$x]['id']){
//                unset($values[$x]);
//            }
//        }
//
        $request->session()->flash('cart', $values);
        return $this->show($request);
    }
}
