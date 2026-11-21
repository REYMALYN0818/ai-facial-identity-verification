<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Face Verify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f4f7fb; font-family: Arial, sans-serif; }
        .navbar { background: #0f172a; }
        .hero {
            min-height: 85vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #0f172a, #1d4ed8);
            color: white;
        }
        .hero h1 { font-size: 45px; font-weight: bold; }
        .hero p { color: #dbeafe; font-size: 18px; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand text-white fw-bold" href="/">AI FACE VERIFY</a>
        <div class="ms-auto">
            <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
        </div>
    </div>
</nav>

<section class="hero">
    <div class="container">
        <h1>AI-Based Facial Identity Verification</h1>
        <p class="mt-3">
            A web-based system designed to support identity verification
            and help prevent online impersonation.
        </p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg mt-3">Get Started</a>
    </div>
</section>

<section class="container py-5">
    <h2 class="text-center fw-bold mb-4">Our System Features</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card p-4 h-100">
                <h5>User Authentication</h5>
                <p>Secure registration and login management.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 h-100">
                <h5>Facial Profile</h5>
                <p>Register and manage facial profile information with consent.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 h-100">
                <h5>Verification Management</h5>
                <p>Submit verification requests and monitor their status.</p>
            </div>
        </div>
    </div>
</section>

<footer class="text-center bg-dark text-white p-3">
    AI-Based Facial Identity Verification and Anti-Impersonation System
</footer>

</body>
</html>