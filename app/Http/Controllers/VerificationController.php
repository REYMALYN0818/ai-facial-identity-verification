<?php

namespace App\Http\Controllers;

use App\Models\VerificationRequest;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function showForm()
    {
        return view('verification.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'verification_image' => 'required|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        $imagePath = $request->file('verification_image')
            ->store('verification-requests', 'local');

        VerificationRequest::create([
            'user_id' => auth()->id(),
            'submitted_image_path' => $imagePath,
            'status' => 'pending',
        ]);

        return redirect()->route('dashboard')
            ->with('success', 'Verification request submitted successfully. Status: Pending.');
    }

    public function history()
    {
    $requests = VerificationRequest::where('user_id', auth()->id())
        ->latest()
        ->get();

    return view('verification.history', compact('requests'));
    }
    
}