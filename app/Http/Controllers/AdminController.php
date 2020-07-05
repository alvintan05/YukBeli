<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Admin;
use App\User;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Session;
use Storage;

class AdminController extends Controller
{
    public function index()
    {        
        
    }   

    public function logout()
    {
        Session::flush();
        return redirect('admin');
    }

    public function dashboard()
    {        
        if(Session::get('login') && Session::get('role') == 'admin'){
            return view('admin.dashboard');
        }
        else{
            return redirect('admin');            
        }  
    }

    public function category()
    {
        $category_list = Category::orderBy('category_name', 'asc')->paginate(4);
        $jumlah_category = Category::count();
        return view('admin.category.category', compact('category_list', 'jumlah_category'));
    }

    public function detail_category(Category $category)
    {       
        return view('admin.category.detail_category', compact('category'));
    }

    public function create_category()
    {
        return view('admin.category.create_category');
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
        return view('admin.category.edit_category', compact('category'));
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
        $product_list = Product::orderBy('product_name', 'asc')->paginate(4);
        $jumlah_product = Product::count();
        return view('admin.product.product', compact('product_list', 'jumlah_product'));
    }
    
    public function detail_product(Product $product)
    {       
        return view('admin.product.detail_product', compact('product'));
    }

    public function create_product()
    {        
        return view('admin.product.create_product');
    }

    public function save_product(ProductRequest $request)
    {
        $input = $request->except('description');

        // Simpan Foto
        if($request->hasFile('photo')){
            $input['photo'] = $this->uploadPhoto($request);
        }        

        $pecah = explode("\r\n\r\n", $request->input('description'));

        // string kosong inisialisasi
        $description = "";
            
        // untuk setiap substring hasil pecahan, sisipkan <p> di awal dan </p> di akhir
        // lalu menggabungnya menjadi satu string utuh $description
        for ($i=0; $i<=count($pecah)-1; $i++)
        {
            $part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p>", $pecah[$i]);
            $description .= $part;
        }        

        // Simpan data category
        $product = Product::create($input + ['description'=>$description]);

        return redirect('admin/product');
    }

    public function edit_product(Product $product)
    {
        return view('admin.product.edit_product', compact('product'));
    }

    public function update_product(Product $product, ProductRequest $request)
    {
        $input = $request->all();

        // Update Foto        )
        if ($request->hasFile('photo')) {
            $input['photo'] = $this->updatePhoto($product, $request);            
        }

        // Update data product
        $product->update($input);

        return redirect('admin/product');
    }

    public function delete_product(Product $product)
    {
        // Hapus foto
        $this->deletePhoto($product);        

        $product->delete();
        return redirect('admin/product');
    }

    public function user_list()
    {
        $user_list = User::all();
        $jumlah_user = User::count();
        return view('admin.user', compact('user_list', 'jumlah_user'));
    }

    public function profile()
    {
        $admin = Admin::findOrFail(Session::get('id'));
        return view('admin.profile', compact('admin'));
    }

    private function uploadPhoto(ProductRequest $request){
        $photo = $request->file('photo');
        $ext = $photo->getClientOriginalExtension();

        if($request->file('photo')->isValid()){
            $photo_name = date('YmdHis'). ".$ext";
            $upload_path = 'product';
            $request->file('photo')->move($upload_path, $photo_name);            
            return $photo_name;
        }

        return false;
    }

    private function updatePhoto(Product $product, ProductRequest $request){
        // Jika user mengisi foto
        if ($request->hasFile('photo')){
            // Hapus foto lama jika ada foto baru
            $exist = Storage::disk('photo')->exists($product->photo);
            if(isset($product->photo) && $exist){
                $delete = Storage::disk('photo')->delete($product->photo);
            }

            // Upload foto baru
            $photo = $request->file('photo');
            $ext = $photo->getClientOriginalExtension();
            if($request->file('photo')->isValid()){
                $photo_name = date('YmdHis'). ".$ext";
                $upload_path = 'product';
                $request->file('photo')->move($upload_path, $photo_name);
                return $photo_name;
            }
        }
    }

    private function deletePhoto(Product $product){
        $exist = Storage::disk('photo')->exists($product->photo);

        if($exist){
            $delete = Storage::disk('photo')->delete($product->photo);
        }
    }
}
