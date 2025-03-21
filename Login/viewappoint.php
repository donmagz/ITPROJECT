<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appointment Scheduling System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="viewappoint.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
            <img class="logo me-2" src="../img/Alogo1.png" alt="Logo">
                <span class="text-white ms-2">Appointment Scheduling System</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="\itproject\Admin\admin.php">Admin Panel</a></li>
                    <li class="nav-item"><a class="nav-link" href="\itproject\aboutus.php">About Us</a></li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-light text-dark" href="\itproject\Login\login.php">
                            <i class="fa-regular fa-user"></i> Log in
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container d-flex justify-content-center">
        <div class="container3">
            <h1>Scheduled Appointments</h1>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>User</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2024-12-01</td>
                        <td>10:00 AM</td>
                        <td>891249617</td>
                        <td>Meeting with advisor</td>
                    </tr>
                    <tr>
                        <td>2024-12-02</td>
                        <td>2:00 PM</td>
                        <td>891249617</td>
                        <td>Project presentation</td>
                    </tr>
                    <tr>
                        <td>2024-12-03</td>
                        <td>9:00 AM</td>
                        <td>891249617</td>
                        <td>Discussion on progress</td>
                    </tr>
                </tbody>
            </table>
            <a href="\itproject\Login\addappoint.php" class="btn btn-danger mt-3" aria-label="Go back to Admin Panel">Back</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
