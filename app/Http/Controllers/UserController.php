<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\DesignerProfile;
use App\Models\InteriorDesigner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show()
    {
        //lấy ds InteriorDesigner
        $designers = DesignerProfile::all();
        //lay name trong bang designer_profile
        return view('dashboard.homeowner.pages.info.designerList', compact('designers'));
    }
    public function view()
    {

        $consultations = Consultation::where('user_id', Auth::user()->id)->get();
        return view('dashboard.homeowner.pages.info.schedule', compact('consultations'));
    }
    public function cancel($id)
    {
        $consultation = Consultation::find($id);

        if ($consultation && $consultation->user_id == Auth::user()->id) {
            $consultation->status = 'cancelled';
            $consultation->save();

            return redirect()->back()->with('success', 'Consultation cancelled successfully.');
        }

        return redirect()->back()->with('error', 'Consultation not found or unauthorized.');
    }




}
