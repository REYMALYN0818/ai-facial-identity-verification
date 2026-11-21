<?php

namespace App\Http\Controllers;

use App\Models\VerificationRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        abort_unless(auth()->user()->role === 'admin', 403);

        $requests = VerificationRequest::with('user')
            ->latest()
            ->get();

        return view('admin.dashboard', compact('requests'));
    }

    public function updateStatus(Request $request, VerificationRequest $verificationRequest)
    {
        abort_unless(auth()->user()->role === 'admin', 403);

        $validated = $request->validate([
            'status' => 'required|in:approved,rejected',
            'admin_notes' => 'nullable|string|max:1000',
        ]);

        $verificationRequest->update([
            'status' => $validated['status'],
            'admin_notes' => $validated['admin_notes'] ?? null,
            'reviewed_by' => auth()->id(),
            'reviewed_at' => now(),
        ]);

        return back()->with('success', 'Verification request updated successfully.');
    }
}
