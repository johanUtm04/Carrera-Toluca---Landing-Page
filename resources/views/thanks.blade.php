<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center vh-100 bg-white">
    <div class="text-center">
        <div class="mb-4">
            <span class="display-1 text-success">✔</span>
        </div>
        <h1 class="fw-bold">Registration Successful!</h1>
        <p class="lead text-muted">Thank you, <strong>{{ session('runner_name') }}</strong>. We've sent your confirmation to your email.</p>
        <a href="/" class="btn btn-outline-primary mt-3">Back to Home</a>
    </div>
</body>
</html>