<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facial Profile | AI Face Verify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f7fb;
            font-family: Arial, sans-serif;
        }
        .form-card {
            background: white;
            border-radius: 15px;
            padding: 35px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="form-card mx-auto" style="max-width: 650px;">

        <h2 class="fw-bold mb-2">Facial Profile Registration</h2>
        <p class="text-secondary">
            Register your facial profile for identity verification.
        </p>

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="alert alert-info">
            Your facial image is sensitive biometric information.
            Submit it only if you understand and agree to its use for this project.
        </div>

        <form action="{{ route('facial-profile.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label class="form-label fw-bold">Upload Facial Image</label>
                <input
                    type="file"
                    name="face_image"
                    class="form-control"
                    accept=".jpg,.jpeg,.png"
                    required
                >
                <small class="text-secondary">
                    JPG, JPEG, or PNG only. Maximum 5 MB.
                </small>
            </div>

            <div class="form-check mb-4">
                <input
                    type="checkbox"
                    name="consent"
                    value="1"
                    class="form-check-input"
                    id="consent"
                    required
                >
                <label class="form-check-label" for="consent">
                    I understand and consent to submitting my facial image
                    for this project's identity verification workflow.
                </label>
            </div>

            <button type="submit" class="btn btn-primary w-100">
                Register Facial Profile
            </button>

            <a href="{{ route('dashboard') }}"
               class="btn btn-outline-secondary w-100 mt-2">
                Back to Dashboard
            </a>

        </form>
    </div>
</div>

</body>
</html>