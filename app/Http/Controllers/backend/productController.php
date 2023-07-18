<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
       // Show All Products 

   public function index()
   {
       $products = product::paginate(15);
       $data = compact('products');
       return view('backend.productlist')->with($data);
   }

   //    add Product

   public function addproduct()
   {
       $urll = '/admin/product/store';
       $btn = 'Add product';
       $data = compact('urll', 'btn');
       return view("backend.addproduct")->with($data);
   }

      // Store product

      public function storeproduct(Request $req)
      {
          $req->validate([
              'name' => "required",
              'brand' => "required|numeric",
              'category' => "required|numeric",
              'brand' => "required|numeric",
              'stock_quantity' => "required|numeric",
              'description' => "required",
              'price' => "required|numeric",
              'product_image' => "required"
          ]);
          $table = new product();
          $table['uname'] = $req['name'];
   
        
          $table->save();
          return redirect()->route('products');
      }
   
   
      // Edit product
   
      public function editproduct($id)
      {
          $urll = '/admin/product/update/' . $id;
          $btn = 'Update product';
          $value = product::find($id);
          $data = compact('urll', 'btn', 'value');
          return view("backend.addproduct")->with($data);
      }
   
      // update Category 
   
      public function updateproduct(Request $req, $id)
      {
          $req->validate([
              'name' => "required",
          ]);
          $table = product::find($id);
          $table['uname'] = $req['name'];
   
   
          
          $table->update();
          return redirect()->route('products');
      }
   
   
      // Delete Category
   
      public function deleteproduct($id)
      {
          product::find($id)->delete();
          return redirect()->route('products');
      }
}
