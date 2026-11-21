<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACT Student Enrollment Portal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f1f5f9;
            font-family: Arial, sans-serif;
        }

        .enrollment-card {
            max-width: 750px;
            margin: 50px auto;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .header {
            background: #173b67;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .form-body {
            padding: 35px;
        }

        .form-label {
            font-weight: 600;
        }

        .btn-submit {
            background: #173b67;
            color: white;
            padding: 12px;
            font-weight: bold;
        }

        .btn-submit:hover {
            background: #102b4c;
            color: white;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card enrollment-card">

        <div class="header">
            <h2>ACT Student Enrollment Portal</h2>
            <p class="mb-0">Student Enrollment Application Form</p>
        </div>

        <div class="form-body">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <strong>Please correct the following errors:</strong>
                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('enrollment.submit') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text"
                           name="fullname"
                           class="form-control"
                           value="{{ old('fullname') }}"
                           placeholder="Enter your full name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Student ID</label>
                    <input type="text"
                           name="student_id"
                           class="form-control"
                           value="{{ old('student_id') }}"
                           placeholder="Enter your 8-digit Student ID">
                </div>

                <div class="mb-3">
                    <label class="form-label">Track / Program</label>
                    <select name="track" class="form-select">
                        <option value="">Select your track</option>
                        <option value="web2" {{ old('track') == 'web2' ? 'selected' : '' }}>
                            Web Technologies 2
                        </option>
                        <option value="network" {{ old('track') == 'network' ? 'selected' : '' }}>
                            Network Administration
                        </option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="{{ old('email') }}"
                           placeholder="Enter your email address">
                </div>

                <div class="mb-3">
                    <label class="form-label">Number of Units</label>
                    <input type="number"
                           name="units"
                           class="form-control"
                           value="{{ old('units') }}"
                           min="3"
                           max="21"
                           placeholder="Enter units (3-21)">
                </div>

                <div class="form-check mb-4">
                    <input type="checkbox"
                           name="terms"
                           value="1"
                           class="form-check-input"
                           {{ old('terms') ? 'checked' : '' }}>
                    <label class="form-check-label">
                        I confirm that the information provided is correct.
                    </label>
                </div>

                <button type="submit" class="btn btn-submit w-100">
                    Submit Enrollment
                </button>

            </form>

        </div>
    </div>

</div>

</body>
</html>