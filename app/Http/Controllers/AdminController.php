<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function category()
    {
        $category_list = Category::all();
        $jumlah_category = Category::count();
        return view('admin.category', compact('category_list', 'jumlah_category'));
    }

    public function detail_category(Category $category)
    {       
        return view('admin.detail_category', compact('category'));
    }

    public function create_category()
    {
        return view('admin.create_category');
    }

    public function save_category(CategoryRequest $request)
    {
        $input = $request->all();

        // Simpan data category
        $category = Category::create($input);

        return redirect('admin/category');
    }

    public function edit_category(Category $category)
    {
        return view('admin.edit_category', compact('category'));
    }

    public function update_category(Category $category, CategoryRequest $request)
    {
        $input = $request->all();

        // Update data category
        $category->update($input);

        return redirect('admin/category');
    }

    public function delete_category(Category $category)
    {
        $category->delete();
        return redirect('admin/category');
    }

    public function product()
    {
        return view('admin.product');
    }

    public function create_product()
    {
        return view('admin.create_product');
    }
}
