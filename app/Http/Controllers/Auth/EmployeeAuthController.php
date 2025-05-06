<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.employee.login');
    }
    public function login(Request $request)
    {
        // $credentials = $request->only('email', 'password');

        // if (Auth::guard('employee')->attempt($credentials)) {
        //     return redirect()->intended(route('auth.employee.dashboard'));
        // }

        // return back()->withErrors([
        //     'email' => 'Invalid credentials.',
        // ]);
        $credentials = $request->only('email', 'password');

        // Get the user by email
        $user = \App\Models\Employee::where('email', $credentials['email'])->first();
        
        // Direct password comparison (UNSAFE - for testing only!)
        if ($user && $credentials['password'] === $user->password) {
            Auth::guard('employee')->login($user);
            return redirect()->intended(route('auth.employee.dashboard'));  // Make sure this matches your route name
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    public function dashboard()
    {
        return view('employee.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('employee')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('employee.login');
    }
}
