<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AddProductController extends Controller
{

    /*
        >>this function do the view all product from databes products table.
    */
    public function viewProduct()
    {
        return view('backend.product.view_product', ['products' => Product::all()]);
    }

    /*
        >>this function do the view add products page .
    */
    public function addProduct()
    {
        return view('backend.product.add_product');
    }

    /*
        >>this function do the work store product with products table input by admin.
    */
    public function store(Request $request)
    {
        //form validation...........
        $request->validate([
            'title' => 'required | max:30',
            'price' => 'required | numeric | min:2 | not_in:0',
            'image' => 'image | mimes:jpg,png',
            'description' => 'min:10 | max:100',
            'rating' => 'min:1 | numeric',
        ], [
            'title.required' => 'please give a title',
            'title.max' => 'title must be less than 20 charecters!',
            'price.required' => 'please a give price.',
            'price.min' => 'price must be minimum two digit',
            'price.numeric' => 'only input the positive number',
            //'price.max' => 'price must be maximum four digit',
            'rating.min' => 'rating must be a minimum one digit',
            'image.mimes' => 'image extension must be a jpg and png',

        ]);


        //  dd($request->title);   //dump and die
        $image                 = $request->image;
        //  return $image->extension();
        //  return $image->getClientOrginalName();

        $product               = new Product();
        $product->title        = $request->title;
        $product->description  = $request->description;
        $product->price        = $request->price;
        $product->rating       = $request->rating;
        //$product->image        = $image->getClientOriginalName();
        if($image){
        //    $imgName = 'database-images/product-image'.time().rand().'.'.$image->extension();
           $imgName = 'product-image'.time().rand().'.'.$image->extension();
           $image->move('product-images/',$imgName); //two perametter: directory name and image name
           $product->image = 'product-images/'.$imgName;
        }
        $product->save();

        //return "product add successfully";
        //return to_route('add_product');
        return back()->with('notification', 'product added successfully');
    }

    /*
        >>this function do the route edit page.
    */
    public function edit(int $id){
        $product = Product::where('id',$id)->first();
        return view('backend.product.edit',['products' => $product]);
    }
    /*
        >>this function do the update product.
    */
    public function update(Request $request, int $id){
        $request->validate([
            'title' => 'required | max:30',
            'price' => 'required | numeric | min:2 | not_in:0',
            'image' => 'image | mimes:jpg,png',
            'description' => 'min:10 | max:100',
            'rating' => 'min:1 | numeric',
        ], [
            'title.required' => 'please give a title',
            'title.max' => 'title must be less than 20 charecters!',
            'price.required' => 'please a give price.',
            'price.min' => 'price must be minimum two digit',
            'price.numeric' => 'only input the positive number',
            //'price.max' => 'price must be maximum four digit',
            'rating.min' => 'rating must be a minimum one digit',
            'image.mimes' => 'image extension must be a jpg and png',

        ]);

        $product = Product::find($id);
        $image   = $request->image;
        $product->title       = $request->title;
        $product->description = $request->description;
        $product->price       = $request->price;
        $product->rating      = $request->rating;
        if($image){
            if(file_exists($product->image)){
                unlink($product->image);
            }
            $imgName = 'product-image'.time().rand().'.'.$image->extension();
            $image->move('product-images/',$imgName); //two perametter: directory name and image name
            $product->image = 'product-images/'.$imgName;

           /*  $image->move('database-images/product-images',time().$image->getClientOriginalName());
            $product->image = $image->getClientOriginalName(); */
        }
        $product->save();
        return to_route('viewProducts')->with('notification', 'product updated successfully');
    }


    /*
        >>this function do the delete product from databes products table.
    */
    public function destroy(int $id)
    {
        /* $product = Product::where('title','number one shampoo')->get();  */
        $product = Product::find($id);
        /* return $product; */
        if($product->image){
            if(file_exists($product->image)){
                unlink($product->image);
            }
        }
        $product->delete();
        return back()->with('notification', 'product deleted successfully');
    }
    /*
        >>this function do the details product.
    */
    public function details(int $id)
    {
        $product = Product::find($id);
        return view('frontend.product.details',['products' => $product]);
    }
}
