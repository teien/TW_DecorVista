<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\DesignerProfile;
use App\Models\InteriorDesigner;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function registerHomeowner(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
        ]);


        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'password' => bcrypt($validatedData['password']),
            'role' => 'Homeowner',
        ]);


        event(new Registered($user));
        Auth::login($user);
        return redirect()->route('dashboard');

    }

    public function registerDesigner(Request $request)
    {
        // Validate và xử lý form Interior Designer
        $validatedData = $request->validate([
            'specialization' => 'required|string|max:255',
            'portfolio_url' => 'required|url',
            'years_of_experience' => 'required|integer|min:0',
            'password' => 'required|string|min:8|confirmed',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:15',
        ]);
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'password' => bcrypt($validatedData['password']),
            'role' => 'InteriorDesigner',
        ]);

        $interiorDesigner = InteriorDesigner::create([
            'user_id' => $user->id,
            'specialization' => $validatedData['specialization'],
            'portfolio' => $validatedData['portfolio_url'],
            'years_of_experience' => $validatedData['years_of_experience'],
        ]);
        DesignerProfile::create([
            'designer_id' => $interiorDesigner->designer_id,
            'first_name' => '',
            'last_name' => '',
            'bio' => '',
            'company_name' => '',
            'website_url' => '',
            'fb_url' => '',
            'twitter_url' => '',
            'instagram' => '',
            'linkedin' => '',
            'skype' => '',
            'profile_image_url' => '',
            'contact_number' => '',
            'contact_email' => '',
        ]);


        event(new Registered($user));
        Auth::login($user);
        return redirect()->route('dashboard.designer', ['id' => $interiorDesigner->designer_id]);

    }
}
