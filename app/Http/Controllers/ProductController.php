<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProductModel;
use App\Models\CategoryModel;
use App\Models\UnitModel;

class ProductController extends Controller
{
    //

    public function search(Request $request)
    {
        $search = $request->input('search');
        $products = ProductModel::select('name', 'price', 'description', 'unit', 'availability', 'quantity', 'category')
             ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.id')
             ->join('tbl_units', 'tbl_products.unit_id', '=', 'tbl_units.id')
             ->where('tbl_products.name', 'like', '%' . $search . '%')
             ->get();

        $categories = CategoryModel::all();
        $units = UnitModel::all();

        return view('products/index', ['products' => $products, 'categories' => $categories, 'units' => $units]);
    }

    public function get($id)
    {
        $product = ProductModel::with(['tbl_category', 'tbl_units'])->findorfail($id);
        return view('products/edit-product', ['product' => $product]);
    }

    public function save(Request $request)
    {
       
        $product = new ProductModel;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->unit_id = $request->input('unit_id');
        $number = 0;
        if($request->input('availability') == 'Available')
        {
            $number = 1;
        }
        $product->availability = $number;
        $product->quantity = $request->input('quantity');
        $product->category_id = $request->input('category_id');
        $product->save();
        return redirect()->route('search-product')->with('success', 'Product added successfully');
    }

    public function update(Request $request, $id)
    {
        try {
            $product = ProductModel::findorfail($id);
            $data = [
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'description' => $request->input('description'),
                'unit_id' => $request->input('unit_id'),
                'availability' => $request->input('availability'),
                'quantity' => $request->input('quantity'),
                'category_id' => $request->input('category_id'),
            ];

            $product->update($data);
            return redirect()->route('search-product')->with('success', 'Product update successfully');
        } catch (\Exception $e) {
            return redirect()->route('search-product')->with('error', 'Failed to update the product');
        }
    }

    public function delete($id)
    {
        try {
            $product = ProductModel::find($id);
            $product->delete();
            return redirect()->route('search-product')->with('success', 'Product deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('search-product')->with('error', 'Failed to delete the product');
        }
    }
}