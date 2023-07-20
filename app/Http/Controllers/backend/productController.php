<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\brand;
use App\Models\category;
use App\Models\product;
use App\Models\unit;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

use function Ramsey\Uuid\v1;

class productController extends Controller
{
    // Show All Products 

    public function index()
    {
        $products = product::paginate(15);
        $brands = brand::get()->all();
        $category = category::get()->all();
        $unit = unit::get()->all();
        $data = compact('products', 'brands', 'category', 'unit');
        return view('backend.productlist')->with($data);
    }

    //    add Product

    public function addproduct()
    {
        $brands = brand::get()->all();
        $category = category::get()->all();
        $unit = unit::get()->all();
        $urll = '/admin/product/store';
        $btn = 'Add product';
        $data = compact('urll', 'btn', 'brands', 'category', 'unit');
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
        $table['name'] = $req['name'];
        $table['sku'] = $req['sku'];
        $table['model'] = $req['model'];
        $table['brand'] = $req['brand'];
        $table['ct'] = $req['category'];
        $table['unit'] = $req['unit'];
        $table['uq'] = $req['unit_quantity'];
        $table['sq'] = $req['stock_quantity'];
        $table['saq'] = $req['stock_alert_quantity'];
        $table['sdes'] = $req['short_description'];
        $table['des'] = $req['description'];
        $table['price'] = $req['price'];
        $table['dis'] = $req['discount'];
        $table['sdis'] = $req['discout_price_start'];
        $table['edis'] = $req['discout_price_end'];
        //   $table['stock'] = $req['stock'];
        //   $table['status'] = $req['name'];

        if (!file_exists(public_path('assets/img/products'))) {
            mkdir(public_path('assets/img/products'), 0777, true);
        }


        if (!empty($req->product_image)) {

            $image = $req->product_image;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/img/products');
            $image->move($destination, $imagename);
            $table['pimg'] = 'assets/img/products/' . $imagename;
        }
        if (!empty($req->thumb_image)) {

            $image = $req->thumb_image;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/img/products');
            $image->move($destination, $imagename);
            $table['ptham'] = 'assets/img/products/' . $imagename;
        }
        if (!empty($req->g1)) {

            $image = $req->g1;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/img/products');
            $image->move($destination, $imagename);
            $table['g1'] = 'assets/img/products/' . $imagename;
        }
        if (!empty($req->g2)) {

            $image = $req->g2;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/img/products');
            $image->move($destination, $imagename);
            $table['g2'] = 'assets/img/products/' . $imagename;
        }
        if (!empty($req->g3)) {

            $image = $req->g3;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/img/products');
            $image->move($destination, $imagename);
            $table['g3'] = 'assets/img/products/' . $imagename;
        }
        if (!empty($req->g4)) {

            $image = $req->g4;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/img/products');
            $image->move($destination, $imagename);
            $table['g4'] = 'assets/img/products/' . $imagename;
        }


        $table->save();
        return redirect()->route('products');
    }


    // Edit product

    public function editproduct($id)
    {
        $value = product::find($id);
        $brands = brand::get()->all();
        $category = category::get()->all();
        $unit = unit::get()->all();
        $urll = '/admin/product/update/' . $id;
        $btn = 'Update product';
        $data = compact('urll', 'btn', 'brands', 'category', 'unit', 'value');
        return view("backend.addproduct")->with($data);
    }

    // update Category 

    public function updateproduct(Request $req, $id)
    {
        $req->validate([
            'name' => "required",
            'brand' => "required|numeric",
            'category' => "required|numeric",
            'brand' => "required|numeric",
            'stock_quantity' => "required|numeric",
            'description' => "required",
            'price' => "required|numeric",

        ]);
        if (!empty($req->product_image)) {
            $req->validate([
                'product_image' => "required"
            ]);
        }
        $table = product::find($id);
        $table['name'] = $req['name'];
        $table['sku'] = $req['sku'];
        $table['model'] = $req['model'];
        $table['brand'] = $req['brand'];
        $table['ct'] = $req['category'];
        $table['unit'] = $req['unit'];
        $table['uq'] = $req['unit_quantity'];
        $table['sq'] = $req['stock_quantity'];
        $table['saq'] = $req['stock_alert_quantity'];
        $table['sdes'] = $req['short_description'];
        $table['des'] = $req['description'];
        $table['price'] = $req['price'];
        $table['dis'] = $req['discount'];
        $table['sdis'] = $req['discout_price_start'];
        $table['edis'] = $req['discout_price_end'];
        if (isset($req->flash)) {
            $table['flash'] = 1;
        }
        if (isset($req->new)) {
            $table['new'] = 1;
        }

        if (!file_exists(public_path('assets/img/products'))) {
            mkdir(public_path('assets/img/products'), 0777, true);
        }


        if (!empty($req->product_image)) {

            $image = $req->product_image;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/img/products');
            $image->move($destination, $imagename);
            $table['pimg'] = 'assets/img/products/' . $imagename;
        }
        if (!empty($req->thumb_image)) {

            $image = $req->thumb_image;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/img/products');
            $image->move($destination, $imagename);
            $table['ptham'] = 'assets/img/products/' . $imagename;
        }
        if (!empty($req->g1)) {

            $image = $req->g1;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/img/products');
            $image->move($destination, $imagename);
            $table['g1'] = 'assets/img/products/' . $imagename;
        }
        if (!empty($req->g2)) {

            $image = $req->g2;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/img/products');
            $image->move($destination, $imagename);
            $table['g2'] = 'assets/img/products/' . $imagename;
        }
        if (!empty($req->g3)) {

            $image = $req->g3;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/img/products');
            $image->move($destination, $imagename);
            $table['g3'] = 'assets/img/products/' . $imagename;
        }
        if (!empty($req->g4)) {

            $image = $req->g4;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/img/products');
            $image->move($destination, $imagename);
            $table['g4'] = 'assets/img/products/' . $imagename;
        }
        $table->update();
        return redirect()->route('products');
    }
    // Change Brand Status

    public function change_status(Request $req, $id)
    {
        if ($req->inactive) {
            $table = product::find($id);
            $table['status'] = 1;
            $table->update();
            $data = json_encode(["status" => true]);
            echo $data;
        }
        if ($req->active) {
            $table = product::find($id);
            $table['status'] = 0;
            $table->update();
            $data = json_encode(["status" => false]);
            echo $data;
        }
    }
    // Filter & search
    public function filter(Request $req)
    {
        $farray = [];
        if (!$req->select == "") {
            if ($req->select == 1) {
                $farray['flash'] = $req->select;
            }
            if ($req->select == 2) {
                $farray['new'] = 1;
            }
        }
        if (!$req->brand == "") {
            $farray['brand'] = $req->brand;
        }
        if (!$req->cate == "") {
            $farray['ct'] = $req->cate;
        }
        $table = product::where($farray)->where('name', 'LIKE', '%' . $req->sval . '%')->get();
        $brands = brand::get()->all();
        $category = category::get()->all();
        $data = "";
        if (count($table) > 0) {
            $i = 0;
            foreach ($table as $item) {
                $data .= ' <tr class="border-b">
           <td class="p-4">
               <div class="bimg flex justify-center items-center">
                   <img class="h-5 " src="' . Url($item['pimg']) . '" alt="">
               </div>
           </td>
           <td class="p-4">';

                $data .= substr($item['name'], 0, 10);
                $data .= '</td>
           <td class="p-4">
           ' . $item['sku'] . '
           </td>
           <td class="p-4">';
                foreach ($brands as $bvalue) {
                    if ($bvalue['bid'] == $item['brand']) {
                        $data .= $bvalue['bname'];
                    }
                }
                $data .= '</td>
           <td class="p-4">';
                foreach ($category as $bvalue) {
                    if ($bvalue['id'] == $item['ct']) {
                        $data .= $bvalue['cname'];
                    }
                }
                $data .= '</td>
           <td class="p-4">
           ' . $item['price'] . '
           </td>
           <td class="p-4">
               <label class="switch">
                   <input type="checkbox" class="switch_chekbox product_status" data-attr="';
                $data .= $item['pid'] . '" ';
                if ($item['status'] == 1) {
                    $data .= 'checked';
                }
                $data .= '>
                   <span class="slider round"></span>
               </label>
           </td>
           <td class="p-4 flex justify-evenly text-[16px]">
               <a class="border-blue-500 text-blue-500 px-1 border hover:bg-blue-500 hover:text-white"
                   href="'.url('admin/product/edit/'.$item['pid']).'"><i class="fa-regular fa-pen-to-square"></i></a>
               <a class="border-red-500 text-red-500 px-1  border hover:bg-red-500 hover:text-white"
                   href="'.url('admin/product/update/'.$item['pid']).'"><i class="fa-solid fa-trash"></i></a>
           </td>
       </tr>';
            }
        } else {
            $data .= '<tr><td colspan="8" ><h1 class="text-center text-red-500">No products Found !</h1></td></tr>';
        }
        echo $data;
    }

    // Delete Category

    public function deleteproduct($id)
    {
        product::find($id)->delete();
        return redirect()->route('products');
    }
}
