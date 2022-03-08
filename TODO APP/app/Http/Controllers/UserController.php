<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;


class UserController extends Controller
{

    public function uploadAvatar()
    {
        if(request()->hasfile('image'))
        {
            $filename=request()->image->getClientOriginalName();
            $this->deleteoldimage();
            request()->image->storeAs('images',$filename,'public');
            auth()->user()->update(['avatar'=>$filename]);
            request()->session()->flash('message','Image uploaded');
            return redirect()->back();
        }
        request()->session()->flash('error','Image not uploaded');
        return redirect()->back();
    }

    protected function deleteoldimage(){
        if(auth()->user()->avatar)
        {
            storage::delete('/public/images/'.auth()->user()->avatar);
        }
    }

    public function index()
    {
        //DB::insert('insert into users (name,email,password) values(?,?,?)',['kish','kish@g','123']);

        //$det=DB::select('select * from users');
        //return $det;

        //DB::update('update users set name= ? where id =1',['k']);

        //$det=DB::select('select * from users');

        //DB::delete('delete from users where id=1');

        //$det=DB::select('select * from users');
        //return $det;

        //return ('hi');

        //$user = new User();
        //dd($user);

        //$user->name = 'kisho';
        //$user->email = 'kisho@kk';
        //$user->password = bcrypt('777');
        //$user->save();

        $data=[
            'name'=>'hii',
            'email'=>'hi@',
            'password'=>'000',
        ];
        User::create($data);

        $user=User::all();
        return $user;

        //User::where('id',1)->delete();

        //User::where('id',1)->update(['name'=> 'loo']);
        //$user=User::all();
        //return $user;
    }
}
