<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\DesignerProfile;
use Illuminate\Http\Request;

class DesignerProfileController extends Controller
{
    public function show($designer_id)
    {

        $designerProfile = DesignerProfile::find($designer_id);

        $userName= $designerProfile->user->name ?? 'unknown';


        return view('dashboard.designer', [
            'profile' => $designerProfile,
            'userName' => $userName,
        ]);
    }



    public function update(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'company_name' => 'nullable|string|max:255',
            'website_url' => 'nullable|string|max:255',
            'fb_url' => 'nullable|string|max:255',
            'twitter_url' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'skype' => 'nullable|string|max:255',
            'profile_image_url' => 'nullable|string|max:255',
            'contact_number' => 'nullable|string|max:15',
            'contact_email' => 'nullable|email|max:255',
        ]);

        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'You need to be logged in to update your profile.');
        }

        $profile = DesignerProfile::where('designer_id', $user->id)->first();

        if (!$profile) {
            $profile = new DesignerProfile();
            $profile->designer_id = $user->id;
        }
        $profile->fill($validatedData);
        $profile->save();
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
