<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use App\Models\Categories;
use App\Models\Featured;
use App\Models\Cart;
use App\Models\Shop;
use App\Models\Contact;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    

    public function index(){
        $slide=Slide::all();
        $Categories=Categories::latest()->paginate(3);
        $Featured=Featured::latest()->paginate(3);
        $Cart_qty=Cart::all();

        return view('front.home.index',compact('slide','Categories','Featured','Cart_qty'));
    }



    public function about(){
        $Cart_qty=Cart::all();
        return view('front.about.about',compact('Cart_qty'));
    }

    public function shop(){
        $Cart_qty=Cart::all();
        $Shop=Shop::latest()->paginate(9);

        return view('front.shop.shop',compact('Shop','Cart_qty'));
    }
    public function contact(){
        $Cart_qty=Cart::all();
        return view('front.contact.contact',compact('Cart_qty'));
    }
    public function uploadContact(Request $request)
    {
        $validated = $request->validate([
            'name'=>'max:40|min:3|string|required ',
            'email'=>'max:40|email|string|required ',
        ]
        ,[
            //
        ]);
        $Contact= new Contact();
        // name
        $Contact->name=$request->name;
        // title
        $Contact->email=$request->email;
        // desc
        $Contact->Subject=$request->Subject;

        // desc
        $Contact->desc=$request->desc;



        $Contact->save();

        return redirect()->back()->with('message','Thank you for contacting us');

    }
    public function single_shop($id){
        $Cart_qty=Cart::all();

        $Cart= Cart::find($id);
        return view('front.cart.singleShop',compact('Cart','Cart_qty'));
    }
    public function edit_cart(Request $request, $id){
        $Cart= Cart::find($id);
        $Cart->size=$request->size;
        $Cart->quantity=$request->quantity;
        if ($Cart->price) {
            $Cart->total=$Cart->price;
            $Cart->total=$Cart->price * $request->quantity;
        }

    $Cart->save();

    return redirect()->back();

}
public function delete_cart($id)
{
    $Cart= Cart::find($id);
    $Cart->delete();
    return redirect()->back();
}
    public function single_feat($id){
        $Cart_qty=Cart::all();
        $data= Featured::find($id);
        return view('front.home.singleShop',compact('data','Cart_qty'));
}
    public function single_Featured($id){
        $Cart_qty=Cart::all();
        $data= Featured::find($id);
        $data= Shop::find($id);
        return view('front.shop.singleShop',compact('data','Cart_qty'));

        // return Redirect()->route('single_Featured');

    }

    public function cart_featured(Request $request , $id){
        $Featured=Featured::find($id);
        $Cart= new Cart();
        $Cart->size=$request->size;
        $Cart->quantity=$request->quantity;
        $Cart->name=$Featured->name;
        $Cart->image=$Featured->image;
        $Cart->price=$Featured->price;
        if ($Featured->price) {
            $Cart->total=$Featured->price;
            $Cart->total=$Featured->price * $request->quantity;
        }



            $Cart->desc=$Featured->desc;

        $Cart->save();
        return redirect()->back()->with('message','Added to cart successfully');
    }
    public function cart(Request $request , $id){
        $Shop=Shop::find($id);
        $Cart= new Cart();
        $Cart->size=$request->size;
        $Cart->quantity=$request->quantity;
        $Cart->name=$Shop->name;
        $Cart->image=$Shop->image;
        $Cart->price=$Shop->price;
        if ($Shop->price) {
            $Cart->total=$Shop->price;
            $Cart->total=$Shop->price * $request->quantity;
        }



            $Cart->desc=$Shop->desc;

        $Cart->save();
        return redirect()->back()->with('message','Added to cart successfully');
    }

        public function cart_page(){
            $Cart=Cart::latest()->paginate(10);
          $Cart_qty=Cart::all();

            return view('front.cart.cart',compact('Cart','Cart_qty'));
        }
        public function Search(Request $request ){

            $Search=$request->Search;
            $Cart_qty=Cart::all();
            if ($Search="") {

                $Shop=Shop::latest()->paginate(9);

                return view('front.shop.shop',compact('Shop','Cart_qty'));
            }
            $Shop=Shop::where('name','Like','%'.$Search.'%')->get();
            return view('front.shop.shop',compact('Shop','Cart_qty'));
        }

}
