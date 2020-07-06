<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Wishlist;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Session;
use Storage;

class UserController extends Controller
{
    public function index()
    {
       
    }

    public function register()
    {
        return view('user.register.register');
    }

    public function register_post(RegisterRequest $request)
    {
        $input = $request->except('password');
        $password = md5($request->input('password'));

        // Simpan Foto
        if($request->hasFile('photo')){
            $input['photo'] = $this->uploadPhoto($request);
        }        

        $user = User::create($input + ['password'=>$password]);

        return redirect('/');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }

    public function dashboard()
    {
        if(Session::get('login') && Session::get('role') == 'user'){
            return view('user.dashboard');
        }
        else{
            return redirect('/');            
        }        
    }

    public function product()
    {
        $product_list = Product::orderBy('product_name', 'asc')->paginate(8);
        $jumlah_product = Product::count();
        return view('user.product.product', compact('product_list', 'jumlah_product'));
    }

    public function detail_product(Product $product)
    {
        return view('user.product.detail_product', compact('product'));
    }

    public function save_wishlist(Request $request)
    {        
        $id_user = Session::get('id');
        $id_product = $request->input('id');
        
        $wishlist = Wishlist::create([
            'id_user' => $id_user,
            'id_product' => $id_product
        ]);

        return redirect('user/product');
    }

    public function wishlist()
    {           
        $wishlist_list = Wishlist::all()->where('id_user', Session::get('id'));        
        return view('user.wishlist.wishlist', compact('wishlist_list'));
    }

    public function profile()
    {
        $user = User::findOrFail(Session::get('id'));
        return view('user.profile.profile', compact('user'));
    }

    public function update_profile(UserRequest $request)
    {
        $input = $request->all();
        $user = User::findOrFail(Session::get('id'));

        // Update Foto        )
        if ($request->hasFile('photo')) {
            $input['photo'] = $this->updatePhoto($user, $request);  
            Session::put('photo',$input['photo']);          
        }

        // Update data user
        $user->update($input);        

        return redirect('user/profile');
    }

    private function uploadPhoto(RegisterRequest $request){
        $photo = $request->file('photo');
        $ext = $photo->getClientOriginalExtension();

        if($request->file('photo')->isValid()){
            $photo_name = date('YmdHis'). ".$ext";
            $upload_path = 'user';
            $request->file('photo')->move($upload_path, $photo_name);            
            return $photo_name;
        }

        return false;
    }

    private function updatePhoto(User $user, UserRequest $request){
        // Jika user mengisi foto
        if ($request->hasFile('photo')){
            // Hapus foto lama jika ada foto baru
            $exist = Storage::disk('photo')->exists($user->photo);
            if(isset($user->photo) && $exist){
                $delete = Storage::disk('photo')->delete($user->photo);
            }

            // Upload foto baru
            $photo = $request->file('photo');
            $ext = $photo->getClientOriginalExtension();
            if($request->file('photo')->isValid()){
                $photo_name = date('YmdHis'). ".$ext";
                $upload_path = 'user';
                $request->file('photo')->move($upload_path, $photo_name);
                return $photo_name;                
            }
        }
    }

}
