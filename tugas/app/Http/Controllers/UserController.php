<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datas = User::all();
        return view('user.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new User;
        return view('user.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new User;
        $model -> Username = $request-> Username;
        $model -> Email = $request-> Email;
        $model -> Password = $request -> Password;
        $model -> Nama= $request -> Nama;
        $model -> save();


        $userDetail = new UserDetail;
        $userDetail -> id_user = $model -> id;
        $userDetail -> no_handphone = $request-> no_handphone;
        $userDetail -> save();
        return redirect('user')-> with('success','Data berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = User::find($id);
        return view('user.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = User::find($id);
        return view('user.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
   
        $model = User::find($id);
        $model -> Username = $request-> Username;
        $model -> Email = $request-> Email;
        if(request('Password')) $model -> Password = bcrypt(request('Password'));
        $model -> Nama= $request -> Nama;
        $model -> save();


        return redirect('user') -> with('success','Data berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = User::find($id);
        $model->delete();
        return redirect('user') -> with('success','Data berhasil Dihapus');
    }
}
