<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toluca 2026 - Corporación Azul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero { background: #004a99; color: white; padding: 80px 0; }
        .btn-primary { background-color: #004a99; border: none; }
    </style>
</head>
<body class="bg-light">

    <div class="hero text-center shadow-sm">
        <h1 class="display-4 fw-bold">TOLUCA 2026 RUN</h1>
        <p class="lead">Official Registration - Corporación Azul</p>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-4">Register Now</h2>
                        <form action="{{ route('register.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="John Doe" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="john@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">T-Shirt Size</label>
                                <select name="talla" class="form-select" required>
                                    <option value="S">Small</option>
                                    <option value="M" selected>Medium</option>
                                    <option value="L">Large</option>
                                    <option value="XL">Extra Large</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100 mt-3 shadow">Proceed to Payment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>