<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
    public function create() {
        return view('category/category');
       }
       public function save(Request $request) {
        $category = new CategoryModel;
        $category->category = $request->input('category');
        $category->save();
        return redirect(route('category-list'));
       }
    public function list() {
        $category = CategoryModel::all();
        return view("category/category", ['tbl_category' => $category]);
    }
    
    public function update(Request $request, $id) {
     $category = CategoryModel::find($id);
     $response = [
        'tbl_category' => $category
     ];
        return view('category/edit-category', $response);
    }

    public function saveUpdate(Request $request, $id) {
        $data = [
            'category' => $request->input()['category']
        ];
        $update_category = CategoryModel::where('id', $id)->update($data);
        return redirect(route('category-list'));
    }

    public function delete($id) {
        $category = CategoryModel::find($id);
        $category->delete();
        return redirect(route('category-list'));
    }
}
