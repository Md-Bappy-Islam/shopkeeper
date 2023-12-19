<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function add(){
        $categorys=DB::table("categorys")->get();
        return view('pages.addProduct',["categorys"=>$categorys]);
    }
    public function store(Request $request){
        //validation
        $this->validate($request,[
            "title"=>"required|string|max:50",
            "price"=>"required",
            "description"=>"required|string|max:255",
            "stock"=>"required",
            "discount"=>"required",
            "brands"=>"required",
            "image"=>"required|image|mimes:jpg,gpeg,png,svg,gif|max:4000",

        ]);
        //image
        if($request->hasFile("image")){
            $image=$request->file("image");
            $imageName="product".time().$image->getClientOriginalName();
            $image->move(public_path("asset/images/products"),$imageName);

        }

            DB::table("products")->insert([
                "user_id"=>1,
                "title"=> $request->input('title'),
                "description"=> $request->input('description'),
                "price"=> $request->input('price'),
                "stock"=> $request->input('stock'),
                "discount"=> $request->input('discount'),
                "category_id"=>$request->input('category'),
                "brand_name"=> $request->input('brands'),
                "image"=> "asset/images/products/".$imageName,
            ]);
            return redirect()->route('product.all')->with('success', 'product stored successfully!');
    }
    public function allProduct(){
        $products=DB::table("products")->get();
        return view('pages.products',["products"=>$products]);
        
    }
    public function show($id){
        $product=DB::table("products")->where("id",$id)->first();
        $productDetails=DB::table("products")->select("*")->where("id",$id)
        ->get();
        return view("pages.productDetails",["products"=>$product,"productDetails"=>$productDetails]);
    }
    public function destroy($id){
        $product=DB::table("products")->where("id",$id)->first();
        $removeFile=unlink(public_path($product->image));
        if($removeFile){
            DB::table("products")->where("id",$id)->delete();
            return redirect()->back()->with('success','product delete successfully');
        }
    }
    public function updateForm($id){
        $product=DB::table("products")->where("id",$id)->first();
        $productDetails=DB::table("products")->select("*")->where("id",$id)->get();
        $categorys=DB::table("categorys")->get();
        return view("pages.productUpdate",["products"=>$product,"productDetails"=>$productDetails,"categorys"=>$categorys]);
    }
    public function update(Request $request,$id){
        $product=DB::table("products")->where("id",$id)->first();
        $this->validate($request,[
            "title"=>"required|string|max:50",
            "price"=>"required",
            "stock"=>"required",
            "discount"=>"required",

        ]);

        if($request->hasFile("image")){
            $image=$request->file("image");
            $imageName= "asset/images/products/"."product".time().$image->getClientOriginalName();
            $image->move(public_path("asset/images/products"),$imageName);

       
        DB::table("products")->where('id',$id)->update([
            "user_id"=>1,
            "title"=> $request->input('title'),
            "description"=> $request->input('description'),
            "price"=> $request->input('price'),
            "stock"=> $request->input('stock'),
            "discount"=> $request->input('discount'),
            "category_id"=>$request->input('category'),
            "brand_name"=> $request->input('brands'),
            "image"=>$imageName,
            
        ]);
    }else{
        DB::table("products")->where('id',$id)->update([
            "user_id"=>1,
            "title"=> $request->input('title'),
            "description"=> $request->input('description'),
            "price"=> $request->input('price'),
            "stock"=> $request->input('stock'),
            "discount"=> $request->input('discount'),
            "category_id"=>$request->input('category'),
            "brand_name"=> $request->input('brands'),
            
        ]);
    }
        return redirect()->route('product.show',$product->id)->with('success', 'product update successfully!');


    }





    
}
