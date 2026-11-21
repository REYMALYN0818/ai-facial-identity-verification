<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification History | AI Face Verify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark" style="background:#0f172a;">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">
            AI FACE VERIFY
        </a>
    </div>
</nav>

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold">Verification History</h3>
            <p class="text-secondary">Your submitted verification requests.</p>
        </div>
        <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary">
            Back to Dashboard
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            @if ($requests->isEmpty())
                <div class="text-center py-5">
                    <h5>No Verification Records Yet</h5>
                    <p class="text-secondary">
                        Your submitted requests will appear here.
                    </p>
                    <a href="{{ route('verification.create') }}"
                       class="btn btn-primary">
                        Start Verification
                    </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Request ID</th>
                                <th>Date Submitted</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $request)
                                <tr>
                                    <td>#{{ $request->id }}</td>
                                    <td>{{ $request->created_at->format('M d, Y h:i A') }}</td>
                                    <td>
                                        <span class="badge bg-warning text-dark">
                                            {{ ucfirst($request->status) }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>

</body>
</html>