<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\Slide;
use App\Models\Categories;
use App\Models\Featured;
use App\Models\Shop;

// use Auth;

class BackController extends Controller
{


    public function Redirect(){
        if (Auth::id()) {
          if (Auth::user()->usertype=='0') {
              return view('back.index');
          }
          else {
              return view('front.home.inc.Content');

          }
        }

    }
    public function logout(){
        Auth::logout();
        return Redirect()->route('login')->with('success','User Logout');
    }
    // slide

    public function dashboard()
    {

        return view('back.index');
    }
    public function slide()
    {
        $slide=Slide::all();

        return view('back.homPage.slide.slide', compact('slide'));
    }

    public function add_slide()
    {
        return view('back.homPage.slide.addSlide');
    }
    public function upload_slide(Request $request)
    {
        $validated = $request->validate([
            'name'=>'max:40|min:3|string|required ',
            'title'=>'max:40|min:3|string|required ',
            'image' => 'required|image|mimes:png,jpg,jpeg,svg',
        ]
        ,[
            //
        ]);
        $slide= new Slide();
        // name
        $slide->name=$request->name;
        // title
        $slide->title=$request->title;
        // desc
        $slide->desc=$request->desc;

        // // image
        // $image =$request->file('image');
        // $image_name= time().$image->getClientOriginalName();
        // $image->move('images', $image_name);
        // $slide->image="images/$image_name";
        if ($request->hasFile("image")) {
            $image =$request->file('image');
            $image_name= time().$image->getClientOriginalName();
            $image->move('images', $image_name);
            $slide->image="images/$image_name";
        } else {
            $image_name= "";
            $slide->image= "";
        }
        $slide->save();

        return redirect()->back();
    }


 public function up_slide($id)
 {
     $slide= slide::find($id);

     return view('back.homPage.slide.upSlide', compact('slide'));
 }

 public function edit_slide(Request $request, $id)
 {
     $validated = $request->validate([
           // 'name'=>'max:40|min:3|string|required ',
           // 'title'=>'max:40|min:3|string|required ',
           'file' => 'image',
       ], [

         ]);
     $slide= slide::find($id);
     $slide->name=$request->name;
     $slide->desc=$request->desc;
     $slide->title=$request->title;
     // image

     if ($request->hasFile("image")) {
         $image =$request->file('image');
         $image_name= time().$image->getClientOriginalName();
         $image->move('images', $image_name);
         $slide->image="images/$image_name";
     } else {
         $image_name= $slide->image;
         $slide->image= $slide->image;
     }

     $slide->save();

     return redirect()->back();
 }
 public function delete_slide($id)
 {
     $slide= Slide::find($id);
     $slide->delete();
     return redirect()->back();
 }
//  Categories
    public function Categories()
    {
        $Categories=Categories::all();

        return view('back.homPage.Categories.Categories', compact('Categories'));
    }

    public function add_Categories()
    {
        return view('back.homPage.Categories.addCategories');
    }
    public function upload_Categories(Request $request)
    {
        $validated = $request->validate([
            'name'=>'max:40|min:3|string|required ',
            'image' => 'required|image|mimes:png,jpg,jpeg,svg',
        ]
        ,[
            //
        ]);
        $Categories= new Categories();
        // name
        $Categories->name=$request->name;
        // image
        if ($request->hasFile("image")) {
            $image =$request->file('image');
            $image_name= time().$image->getClientOriginalName();
            $image->move('images', $image_name);
            $Categories->image="images/$image_name";
        } else {
            $image_name= "";
            $Categories->image= "";
        }
        $Categories->save();

        return redirect()->back();
    }


 public function up_Categories($id)
 {
     $Categories= Categories::find($id);

     return view('back.homPage.Categories.upCategories', compact('Categories'));
 }

 public function edit_Categories(Request $request, $id)
 {
     $validated = $request->validate([
           // 'name'=>'max:40|min:3|string|required ',
           // 'title'=>'max:40|min:3|string|required ',
           'file' => 'image',
       ], [

         ]);
     $Categories= Categories::find($id);
     $Categories->name=$request->name;

     // image

     if ($request->hasFile("image")) {
         $image =$request->file('image');
         $image_name= time().$image->getClientOriginalName();
         $image->move('images', $image_name);
         $Categories->image="images/$image_name";
     } else {
         $image_name= $Categories->image;
         $Categories->image= $Categories->image;
     }

     $Categories->save();

     return redirect()->back();
 }
 public function delete_Categories($id)
 {
     $Categories= Categories::find($id);
     $Categories->delete();
     return redirect()->back();
 }

  // Featured
  public function Featured()
  {
      $Featured=Featured::all();

      return view('back.homPage.Featured.Featured', compact('Featured'));
  }

  public function add_Featured()
  {
      return view('back.homPage.Featured.addFeatured');
  }
  public function upload_Featured(Request $request)
  {
      $validated = $request->validate([
          'name'=>'max:40|min:3|string|required ',
          'price'=>'max:40|min:3|string|required ',
          'desc'=>'min:3|string|required ',
          'image' => 'required|image|mimes:png,jpg,jpeg,svg',
      ]
      ,[
          //
      ]);
      $Featured= new Featured();
      // name
      $Featured->name=$request->name;
      // title
      $Featured->price=$request->price;
      // desc
      $Featured->desc=$request->desc;

      // image
      if ($request->hasFile("image")) {
        $image =$request->file('image');
        $image_name= time().$image->getClientOriginalName();
        $image->move('images', $image_name);
        $Featured->image="images/$image_name";
    } else {
        $image_name= "";
        $Featured->image= "";
    }
    $Featured->save();

      return redirect()->back();
  }


public function up_Featured($id)
{
   $Featured= Featured::find($id);

   return view('back.homPage.Featured.upFeatured', compact('Featured'));
}

public function edit_Featured(Request $request, $id)
{
   $validated = $request->validate([
         // 'name'=>'max:40|min:3|string|required ',
         // 'title'=>'max:40|min:3|string|required ',
         'file' => 'image',
     ], [

       ]);
   $Featured= Featured::find($id);
   $Featured->name=$request->name;
   $Featured->desc=$request->desc;
   $Featured->price=$request->price;
   // image

   if ($request->hasFile("image")) {
       $image =$request->file('image');
       $image_name= time().$image->getClientOriginalName();
       $image->move('images', $image_name);
       $Featured->image="images/$image_name";
   } else {
       $image_name= $Featured->image;
       $Featured->image= $Featured->image;
   }

   $Featured->save();

   return redirect()->back();
}
public function delete_Featured($id)
{
   $Featured= Featured::find($id);
   $Featured->delete();
   return redirect()->back();
}
//Shop
public function Shop()
{
    $Shop=Shop::all();

    return view('back.shopPage.shop', compact('Shop'));
}

public function add_Shop()
{
    return view('back.shopPage.addShop');
}
public function upload_Shop(Request $request)
{
    $validated = $request->validate([
        'name'=>'max:40|min:3|string|required ',
        'price'=>'max:40|min:3|string|required ',
        'desc'=>'min:3|string|required ',
        'image' => 'required|image|mimes:png,jpg,jpeg,svg',
    ]
    ,[
        //
    ]);
    $Shop= new Shop();
    // name
    $Shop->name=$request->name;
    // title
    $Shop->price=$request->price;
    // desc
    $Shop->desc=$request->desc;
    $Shop->size=$request->size;

    // image
    if ($request->hasFile("image")) {
      $image =$request->file('image');
      $image_name= time().$image->getClientOriginalName();
      $image->move('images', $image_name);
      $Shop->image="images/$image_name";
  } else {
      $image_name= "";
      $Shop->image= "";
  }
  $Shop->save();

    return redirect()->back();
}


public function up_Shop($id)
{
 $Shop= Shop::find($id);

 return view('back.shopPage.upShop', compact('Shop'));
}

public function edit_Shop(Request $request, $id)
{
 $validated = $request->validate([
       // 'name'=>'max:40|min:3|string|required ',
       // 'title'=>'max:40|min:3|string|required ',
       'file' => 'image',
   ], [

     ]);
 $Shop= Shop::find($id);
 $Shop->name=$request->name;
 $Shop->desc=$request->desc;
 $Shop->price=$request->price;
 // image

 if ($request->hasFile("image")) {
     $image =$request->file('image');
     $image_name= time().$image->getClientOriginalName();
     $image->move('images', $image_name);
     $Shop->image="images/$image_name";
 } else {
     $image_name= $Shop->image;
     $Shop->image= $Shop->image;
 }

 $Shop->save();

 return redirect()->back();
}
public function delete_Shop($id)
{
 $Shop= Shop::find($id);
 $Shop->delete();
 return redirect()->back();
}
}
