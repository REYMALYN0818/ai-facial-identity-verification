<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EnrollmentRequest;

class EnrollmentController extends Controller
{
    public function showForm()
    {
        return view('enrollment');
    }

    public function submitForm(EnrollmentRequest $request)
    {
        $data = $request->validated();

        $trackName = $data['track'] === 'web2'
            ? 'Web Technologies 2'
            : 'Network Administration';

        return redirect()
            ->route('enrollment.form')
            ->with(
                'success',
                'Application submitted successfully for '
                . $data['fullname']
                . ' (Student ID: ' . $data['student_id'] . ') — '
                . $trackName
                . ', ' . $data['units'] . ' units.'
            );
    }
}