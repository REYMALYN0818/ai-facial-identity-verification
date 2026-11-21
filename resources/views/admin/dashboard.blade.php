<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | AI Face Verify</title>
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
        .dashboard-card, .table-container {
            background: white;
            border-radius: 14px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
            AI FACE VERIFY - ADMIN
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

    <h2 class="fw-bold">Admin Dashboard</h2>
    <p class="text-secondary mb-4">
        Manage and review identity verification requests.
    </p>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            Please check the submitted information.
        </div>
    @endif

    <div class="dashboard-card mb-4">
        <h5>Total Verification Requests</h5>
        <h2>{{ $requests->count() }}</h2>
    </div>

    <div class="table-container">
        <h5 class="fw-bold mb-3">Verification Records</h5>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Email</th>
                        <th>Date Submitted</th>
                        <th>Status</th>
                        <th>Admin Review</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($requests as $request)
                        <tr>
                            <td>{{ $request->id }}</td>
                            <td>{{ $request->user->name ?? 'Unknown' }}</td>
                            <td>{{ $request->user->email ?? 'N/A' }}</td>
                            <td>{{ $request->created_at->format('M d, Y') }}</td>

                            <td>
                                @if ($request->status === 'approved')
                                    <span class="badge bg-success">Approved</span>
                                @elseif ($request->status === 'rejected')
                                    <span class="badge bg-danger">Rejected</span>
                                @else
                                    <span class="badge bg-warning text-dark">Pending</span>
                                @endif
                            </td>

                            <td>
                                <form method="POST"
                                      action="{{ route('admin.verification.update', $request->id) }}">
                                    @csrf
                                    @method('PATCH')

                                    <select name="status" class="form-select form-select-sm mb-2" required>
                                        <option value="approved">Approve</option>
                                        <option value="rejected">Reject</option>
                                    </select>

                                    <textarea name="admin_notes"
                                              class="form-control form-control-sm mb-2"
                                              placeholder="Admin notes (optional)"
                                              rows="2"></textarea>

                                    <button type="submit" class="btn btn-primary btn-sm">
                                        Update Status
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                No verification requests found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>