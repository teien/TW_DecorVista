<?php

namespace App\Http\Controllers;
use App\Models\Consultation;
use App\Models\InteriorDesigner;
use Illuminate\Support\Facades\Auth;
use App\Models\DesignerProfile;
use Illuminate\Http\Request;

class DesignerProfileController extends Controller
{
    public function show($designer_id)
    {

        $designerProfile = DesignerProfile::find($designer_id);

        $userName= $designerProfile->InteriorDesigner->user->name ?? 'Unknown';

        $designer = Auth::user()->interiorDesigner;
        if (!$designerProfile) {
            return redirect()->back()->with('error', 'Designer profile not found');
        }
        $consultations = Consultation::where('designer_id', optional($designer)->designer_id)->get();


        return view('dashboard.designer', [
            'profile' => $designerProfile,
            'userName' => $userName,
            'consultations' => $consultations
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
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:12048',
            'contact_number' => 'nullable|string|max:15',
            'contact_email' => 'nullable|email|max:255',
        ]);

        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'You need to be logged in to update your profile.');
        }

        // Tìm InteriorDesigner của người dùng hiện tại
        $interiorDesigner = InteriorDesigner::where('user_id', $user->id)->first();

        if (!$interiorDesigner) {
            return redirect()->back()->with('error', 'No designer profile found for this user.');
        }

        // Tìm DesignerProfile theo designer_id
        $profile = DesignerProfile::where('designer_id', $interiorDesigner->designer_id)->first();

        // Kiểm tra và xử lý ảnh đại diện nếu có
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');

            // Đặt tên file bằng thời gian hiện tại và phần mở rộng của file
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();

            // Lưu file ảnh vào thư mục public/avatars
            $avatar->move(public_path('avatars'), $avatarName);

            // Cập nhật đường dẫn của ảnh vào cột profile_image_url
            $profile->profile_image_url = 'avatars/' . $avatarName;
        }

        // Điền các dữ liệu khác vào profile, ngoại trừ avatar
        $profile->fill($validatedData);

        // Lưu lại thay đổi
        $profile->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }


}
