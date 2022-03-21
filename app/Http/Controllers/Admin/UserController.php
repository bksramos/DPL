<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Section;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index')->with('users', User::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        if(Auth::user()->id == $id){
            return redirect()->route('admin.users.index');
        }

        return view('admin.users.edit')->with(['user' => User::find($id), 'roles' => Role::all(), 
                                                'sections' => Section::all() ]);
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
        if (Auth::user()->id == $id) {
            return redirect()->route('admin.users.index');
        }

        $user= User::find($id);
        $user->roles()->sync($request->roles);
        $user->sections()->sync($request->sections);
        $user->status = $request->input('status');
        $user->update();
        //dd($user);

        return redirect()->route('admin.users.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->id == $id) {
            return redirect()->route('admin.users.index');
        }

        $user = User::find($id);

        if($user){
            $user->roles()->detach();
            $user->sections()->detach();
            $user->delete();
            return redirect()->route('admin.users.index')->with('sucess', 'Usuário foi deletado');
        }

        User::destroy($id);
        return redirect()->route('admin.users.index')->with('warning', 'Este usuário não pode ser deletado');
    }
}
