<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identity Verification | AI Face Verify</title>
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
    <div class="form-card mx-auto" style="max-width: 600px;">
        <h2 class="fw-bold mb-2">Identity Verification</h2>
        <p class="text-secondary">
            Submit an image for identity verification review.
        </p>

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ route('verification.store') }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-bold">
                    Upload Verification Image
                </label>
                <input type="file"
                       name="verification_image"
                       class="form-control"
                       accept=".jpg,.jpeg,.png"
                       required>
                <small class="text-secondary">
                    JPG, JPEG, or PNG only. Maximum 5 MB.
                </small>
            </div>

            <div class="alert alert-info">
                Your submission will be marked Pending until reviewed.
                This page does not perform automated AI face matching yet.
            </div>

            <button type="submit" class="btn btn-primary w-100">
                Submit Verification
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