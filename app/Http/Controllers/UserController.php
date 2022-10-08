<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $model;
    public function __construct(user $user)
    {
        $this->model =$user;
    }
    public function index(Request $request)
    {
        $users =$this->model
                        ->getUsers(
                            search: $request->search ?? ''
                        );

        // dd($request->search);
        // $dados =$this->model->where('name','like',"%$request->name%")->toSql();
        // $dados =$this->model->get();
        // dd($dados);
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        // $dados=$this->model->where('id', '=',$id)->first();
        if (!$user = $this->model->find($id)) {
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
        $user =$this->model->create($data);
        return redirect()->route('users.show', ['id'=>$user->id]);


        // $user = new User;
        // $user->name = $request->name;
        // $user->emaiL = $request->email;
        // $user->password = $request->password;
        // $user->save();
    }

    public function edit($id)
    {
        if (!$user=$this->model->find($id)) {
            return redirect()->route('users.index');
        }
        return view('users.edit', compact('user'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if (!$user=$this->model->find($id)) {
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
        // $dados=$this->model->where('id', '=',$id)->first();
        // if (!$user = $this->model->find($id)->delete()) {
        if (!$user = $this->model->find($id)) {
            return redirect()->route('users.index');
        }
        $user->delete();
        return redirect()->route('users.index');
    }
}
