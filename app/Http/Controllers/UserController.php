<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search=$request->search;
        $dados = User::where(function ($query) use ($search) {
            if ($search) {
                
                $query ->where('name', '=', "{$search}");
                $query ->orWhere('email', 'like', "%{$search}%");
            }
        })->get();
        // dd($request->search);
        // $dados =user::where('name','like',"%$request->name%")->toSql();
        // $dados =user::get();
        // dd($dados);
        return view('users.index', compact('dados'));
    }

    public function show($id)
    {
        // $dados=User::where('id', '=',$id)->first();
        if (!$user = User::find($id)) {
            return redirect()->route('users.index');
        }
    //    dd($user);
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data =$request ->all();
        $data['password']= bcrypt($request->Password);
        $user =user::create($data);
        return redirect()->route('users.show', ['id'=>$user->id]);


        // $user = new User;
        // $user->name = $request->name;
        // $user->emaiL = $request->email;
        // $user->password = $request->password;
        // $user->save();
    }

    public function edit($id)
    {
        if (!$user=User::find($id)) {
            return redirect()->route('users.index');
        }
        return view('users.edit', compact('user'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if (!$user=User::find($id)) {
            return redirect()->route('users.index');
        }
        $data =$request->only('name', 'email');
        if ($request->password) {
            $data['password']= bcrypt($request->Password);
        }
        // dd($request->all());
        $user->update($data);
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        // $dados=User::where('id', '=',$id)->first();
        // if (!$user = User::find($id)->delete()) {
        if (!$user = User::find($id)) {
            return redirect()->route('users.index');
        }
        $user->delete();
        return redirect()->route('users.index');
    }
}
