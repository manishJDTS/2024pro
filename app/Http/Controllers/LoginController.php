<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function authenticate(Request $request)
    {
        return view('login');
        // $credentials = $request->only('roll_number', 'password');

        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended('/dashboard'); // Redirect to a dashboard or a protected area
        // }

        // // Authentication failed
        // return back()->withInput()->withErrors(['credentials' => 'Invalid credentials']);
    }
    public function authenticates(Request $request)
    {
        $roll_number = $request->roll_number;
        $password = $request->password;

        $student = Student::where('roll_number', $roll_number)
            ->where('password', $password)
            ->first();

        if ($student) {
            // Password matched for the provided roll_number
            // return response()->json(['password' => $student->password]);
            return redirect('blogs');
        } else {
            // Handle case where student with provided roll number and password is not found
            return response()->json(['error' => 'Invalid credentials'], 404);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Redirect to the login page after logout
    }
}
