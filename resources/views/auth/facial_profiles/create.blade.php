<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facial Profile Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="card shadow-sm border-0 mx-auto" style="max-width: 600px;">
        <div class="card-body p-4">
            <h3 class="fw-bold mb-2">Facial Profile Registration</h3>
            <p class="text-secondary">
                Register a facial image for your identity verification profile.
            </p>

            @if ($errors->any())
                <div class="alert alert-danger">
                    Please check the form and try again.
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('facial-profile.store') }}"
                  enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold">Upload Facial Image</label>
                    <input type="file" name="face_image"
                           class="form-control" accept=".jpg,.jpeg,.png" required>
                    <small class="text-secondary">JPG or PNG, maximum 5 MB.</small>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox"
                           name="consent" value="1" id="consent" required>
                    <label class="form-check-label" for="consent">
                        I consent to the secure collection and storage of my facial image
                        for this project's identity verification process.
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
</div>

</body>
</html>