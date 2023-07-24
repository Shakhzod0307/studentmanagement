<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('users.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userlogin(Request $request)
    {
     $credetials = [
        'username'=>$request->username,
        'password'=>$request->password,
     ];
     if(Auth::attempt($credetials))
     {
        return view('users.profile');
     }
     return back()->with('error','Username or password incorrect!');

    }

    public function register()
    {
        return view('users.register');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function userregister(Request $request)
    {
        $check_email = User::where('email',$request->email)->first();
        if($check_email){
            return back()->with('error','Email already exits');
        };
        $user = User::create([
            'username'=>$request->username,
            'name'=>$request->name,
            'phone'=>$request->phone,
            'group'=>$request->group,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        $credentials = [
            'username'=>$user->username,
            'password'=>$request->password,
        ];
        Auth::attempt($credentials);
        return view('users.profile')->with('success','Congratulations! Your account can be used!');
    }

    /**
     * Display the specified resource.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function profile()
    {
        return view('users.profile');
    }

    public function settings()
    {
        return view('users.settings');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $username = $request->input('username');
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $mobile = $request->input('mobile');
        $role = $request->input('role');
        $group = $request->input('group');
        $address = $request->input('address');
        $bio = $request->input('bio');
        $internet = $request->input('internet');
        $github = $request->input('github');
        $twitter = $request->input('twitter');
        $instagram = $request->input('instagram');
        $facebook = $request->input('facebook');

        DB::table('users')
        ->where('id', '=', Auth::user()->id)
        ->update([
            'username' => $username,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'mobile' => $mobile,
            'role' => $role,
            'group' => $group,
            'address' => $address,
            'bio' => $bio,
            'internet' => $internet,
            'github' => $github,
            'twitter' => $twitter,
            'instagram' => $instagram,
            'facebook' => $facebook,
        ]);
        return back()->with('success','Profile updated successfully!')->with('error','Something went wrong! try again');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
