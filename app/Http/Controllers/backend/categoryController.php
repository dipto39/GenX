<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Subcategories;
use Illuminate\Http\Request;

class categoryController extends Controller
{

    public function categories()
    {
        $categories = category::get()->all();
        $subcategories = Subcategories::get()->all();
        $data = compact('categories', 'subcategories');
        return view('backend.categories')->with($data);
    }
    // add New Category

    public function addcategory()
    {
        $urll = '/admin/categories/store';
        $btn = 'Add Categories';
        $c_or_s = 'c';
        $data = compact('urll', 'btn', 'c_or_s');
        return view("backend.addcate")->with($data);
    }

    // Store Categories

    public function storecategory(Request $req)
    {
        $req->validate([
            'cname' => "required",
            'cimg' => "required"
        ]);
        $table = new category();
        $table['cname'] = $req['cname'];

        if (!file_exists(public_path('assets/img/cicon'))) {
            mkdir(public_path('assets/img/cicon'), 0777, true);
        }


        if (!empty($req->cimg)) {

            $image = $req->cimg;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/img/cicon');
            $image->move($destination, $imagename);
            $table['cimg'] = 'assets/img/cicon/' . $imagename;
        }
        $table->save();
        return redirect()->route('categories');
    }

    // Edit Category

    public function eidtcategory($id)
    {
        $urll = '/admin/categories/update/' . $id;
        $btn = 'Update Categories';
        $cvalue = category::get()->all();
        $c_or_s = 'c';
        $data = compact('urll', 'btn', 'cvalue', 'c_or_s');
        return view("backend.addcate")->with($data);
    }

    // update Category 

    public function updatecategory(Request $req, $id)
    {
        $req->validate([
            'cname' => "required"
        ]);
        $table = category::find($id);
        $table['cname'] = $req['cname'];

        if (!file_exists(public_path('assets/img/cicon'))) {
            mkdir(public_path('assets/img/cicon'), 0777, true);
        }


        if (!empty($req->cimg)) {

            $image = $req->cimg;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/img/cicon');
            $image->move($destination, $imagename);
            $table['cimg'] = 'assets/img/cicon/' . $imagename;
        }
        $table->update();
        return redirect()->route('categories');
    }
    // Delete Category

    public function deletecategory($id)
    {
        category::find($id)->delete();
        return redirect()->route('categories');
    }


    // add New Sub Category

    public function addsubcategory()
    {
        $urll = '/admin/subcategories/store';
        $btn = 'Add Sub Categories';
        $categories = category::get()->all();
        $c_or_s = 's';
        $data = compact('urll', 'btn', 'c_or_s', 'categories');
        return view("backend.addcate")->with($data);
    }
    // Store SubCategories

    public function storesubcategory(Request $req)
    {
        $req->validate([
            'cate' => "required",
            'cname' => "required"
        ]);
        $table = new Subcategories();
        $table['subcname'] = $req['cname'];
        $table['cid'] = $req['cate'];


        $table->save();
        return redirect()->route('categories');
    }

    // Edit SubCategory

    public function eidtsubcategory($id)
    {
        $urll = '/admin/subcategories/update/' . $id;
        $btn = 'Update Sub Categories';
        $scvalue = Subcategories::get()->all();
        $c_or_s = 's';
        $data = compact('urll', 'btn', 'c_or_s', 'scvalue');
        return view("backend.addcate")->with($data);
    }

    // update Category 

    public function updatesubcategory(Request $req, $id)
    {
        $req->validate([
            'cname' => "required"
        ]);
        $table = Subcategories::find($id);
        $table['subcname'] = $req['cname'];

        $table->update();
        return redirect()->route('categories');
    }
    // Delete Category

    public function deletesubcategory($id)
    {
        Subcategories::find($id)->delete();
        return redirect()->route('categories');
    }
}
