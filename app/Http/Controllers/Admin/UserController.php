<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Section;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        // if(Auth::user()->id == $id){
        //     return redirect()->route('admin.users.index');
        // }

        return view('admin.users.edit')->with(['user' => User::find($id), 'roles' => Role::all(), 
                                                'sections' => Section::all() ]);
    }

    public function profile(User $user)
    {
        $user = Auth::user(); 
        // dd($user->roles);
        return view('admin.users.profile')->withUser($user);
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

    public function update_profile(User $user, Request $request)
    {

        $user = Auth::user(); 

        $user->war_name = $request->input('war_name');
        $user->birthday = $request->input('birthday');
        $user->about = $request->input('about');
        $user->phone = $request->input('phone');
        $user->cell_phone = $request->input('cell_phone');
        $user->email = $request->input('email');

        //save image
        if ($request->hasfile('featured_photo')) {
            //add new report
            $user_photo = $request->file('featured_photo');
            $filename = time() . '.' . $user_photo->getClientOriginalExtension();

            $location = public_path('photos/');
            $user_photo->move($location, $filename);

            $oldPhoto = $user->user_photo;
            //update the database

            $user->user_photo = $filename;
            //delete the old photo
            Storage::delete($oldPhoto);
        }

        // dd($user);
        $user->save();
        
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
