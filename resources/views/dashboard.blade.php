<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | AI Face Verify</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f7fb;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #0f172a;
        }

        .navbar-brand {
            color: white;
            font-weight: bold;
        }

        .welcome {
            background: linear-gradient(135deg, #0f172a, #1d4ed8);
            color: white;
            padding: 35px;
            border-radius: 15px;
        }

        .dashboard-card {
            background: white;
            border: none;
            border-radius: 14px;
            padding: 25px;
            height: 100%;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        .dashboard-card p {
            color: #64748b;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            AI FACE VERIFY
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-light btn-sm" type="submit">
                Logout
            </button>
        </form>
    </div>
</nav>

<div class="container py-5">

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="welcome mb-4">
        <h2 class="fw-bold">
            Welcome, {{ auth()->user()->name }}!
        </h2>
        <p class="mb-0">
            Manage your account and facial identity verification activities.
        </p>
    </div>

    <h4 class="fw-bold mb-4">Your Dashboard</h4>

    @if (auth()->user()->role === 'admin')
        <div class="mb-4">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-dark">
                Go to Admin Dashboard
            </a>
        </div>
    @endif

    <div class="row g-4">

        <div class="col-md-4">
            <div class="dashboard-card">
                <h5 class="fw-bold">Facial Profile</h5>
                <p>Register and manage your facial profile.</p>
                <a href="{{ route('facial-profile.create') }}"
                   class="btn btn-primary btn-sm">
                    Register Facial Profile
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="dashboard-card">
                <h5 class="fw-bold">Identity Verification</h5>
                <p>Submit an image for identity verification.</p>
                <a href="{{ route('verification.create') }}"
                   class="btn btn-primary btn-sm">
                    Start Verification
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="dashboard-card">
                <h5 class="fw-bold">Verification History</h5>
                <p>Review your previous verification requests.</p>
                <a href="{{ route('verification.history') }}"
                   class="btn btn-primary btn-sm">
                    View History
                </a>
            </div>
        </div>

    </div>

    <div class="text-center mt-5">
        <p class="text-secondary">
            AI-Based Facial Identity Verification and Anti-Impersonation System
        </p>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>