<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\InteriorDesigner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{

//    public function indexForHomeowner()
//    {
//        $user = Auth::user();
//        $consultations = Consultation::where('homeowner_id', $user->id)->get();
//
//        return view('dashboard.interior_design.index', compact('consultations'));
//    }

    public function accept($id)
    {
        $consultation = Consultation::find($id);

        if ($consultation && $consultation->designer_id == Auth::user()->interiorDesigner->designer_id) {
            $consultation->status = 'confirmed';
            $consultation->save();

            return redirect()->back()->with('success', 'Consultation accepted successfully.');
        }

        return redirect()->back()->with('error', 'Consultation not found or unauthorized.');
    }
    public function complete($id)
    {
        $consultation = Consultation::find($id);

        if ($consultation && $consultation->designer_id == Auth::user()->interiorDesigner->designer_id) {
            $consultation->status = 'complete';
            $consultation->save();

            return redirect()->back()->with('success', 'Consultation completed successfully.');
        }

        return redirect()->back()->with('error', 'Consultation not found or unauthorized.');
    }

    // Từ chối cuộc hẹn cho Designer
    public function reject($id)
    {
        $consultation = Consultation::find($id);

        if ($consultation && $consultation->designer_id == Auth::user()->interiorDesigner->designer_id) {
            $consultation->status = 'cancelled';
            $consultation->save();

            return redirect()->back()->with('success', 'Consultation rejected successfully.');
        }

        return redirect()->back()->with('error', 'Consultation not found or unauthorized.');
    }

    public function create($designer_id)
    {

        return view('consultation.create', ['designer_id' => $designer_id]);
    }
    public function store(Request $request)
    {
        // Validate dữ liệu
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'designer_id' => 'required|exists:interior_designers,designer_id',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'notes' => 'nullable|string',
        ]);

        // Lưu lịch hẹn
        Consultation::create([
            'user_id' => $validated['user_id'],
            'designer_id' => $validated['designer_id'],
            'start_time' => $validated['start_time'],
            'end_time' => $validated['end_time'],
            'status' => 'pending',
            'notes' => $validated['notes'],
        ]);


        return redirect()->route('welcome')->with('success', 'Consultation created successfully.');
    }
}
