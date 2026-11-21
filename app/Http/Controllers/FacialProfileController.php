<?php

namespace App\Http\Controllers;

use App\Models\FacialProfile;
use Illuminate\Http\Request;

class FacialProfileController extends Controller
{
    public function showForm()
    {
        return view('facial_profiles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'face_image' => 'required|image|mimes:jpg,jpeg,png|max:5120',
            'consent' => 'accepted',
        ]);

        $imagePath = $request->file('face_image')
            ->store('facial-profiles', 'local');

        FacialProfile::updateOrCreate(
            ['user_id' => auth()->id()],
            [
                'image_path' => $imagePath,
                'consent_at' => now(),
            ]
        );

        return redirect('/dashboard')
            ->with('success', 'Facial profile registered successfully!');
    }
}