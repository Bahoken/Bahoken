<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Product;




class HomeController extends Controller
{
    public function redirect(){
        $usertype=Auth::user()->usertype;

        if($usertype=='1'){
            return view('admin.home');
        }else{

            $data = product::paginate(10);

            return view('user.home',compact('data'));
        }
    }

    public function index(){
        if(Auth::id()){
            return redirect('redirect');
        }
        else{

            $data = product::paginate(10);

            return view('user.home',compact('data'));
        }
        
    }

    public function addproduct(){
        return view('user.addproduct');
    }

    public function addproduct_script(Request $request){
        
        $data=new product;
        
        $image=$request->file;
        
        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('productimage',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;
    
        $data->price=$request->price;
        
        $data->description=$request->description;

        $data->quantity=$request->quantity;

        $data->save();

        return redirect('redirect');

    }
    public function trashproduct($id)
    {
        $data = product::find($id);

        $data->delete();

        return redirect('redirect');
    }
    public function viewupdate($id)
    {
    
        $data = product::find($id);

        return view('user.viewupdate',compact('data'));
    }
    public function updateproduct_script(Request $request, $id)
    {
    
        $data = product::find($id);

        $image=$request->file;
        

        if($image)
        {
        
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->file->move('productimage',$imagename);

            $data->image=$imagename;

        }
        $data->title=$request->title;
    
        $data->price=$request->price;
        
        $data->description=$request->description;

        $data->quantity=$request->quantity;

        $data->save();

        return redirect('redirect');



    }
}
