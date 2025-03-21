<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appointment Scheduling System</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="addappoint.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img class="logo me-2" src="../img/Alogo1.png" alt="Logo">
                <span>Appointment Scheduling System</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="\itproject\Admin\admin.php">Admin Panel</a></li>
                    <li class="nav-item"><a class="nav-link" href="\itproject\aboutus.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="\itproject\Login\login.php">Log in</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Appointment Form Container -->
    <div class="container d-flex justify-content-center align-items-center flex-column" style="margin-top: 100px;">
        <div class="card p-4 shadow-lg" style="max-width: 400px; width: 100%;">
            <h2 class="text-center">Educational Appointments</h2>
            <form>
                <div class="mb-3">
                    <label for="appointment-date" class="form-label">Date</label>
                    <input type="date" id="appointment-date" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="appointment-time" class="form-label">Time</label>
                    <input type="time" id="appointment-time" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="appointment-description" class="form-label">Subject/Meeting Reason</label>
                    <input type="text" id="appointment-description" class="form-control" placeholder="Enter details">
                </div>

                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-success">Add Appointment</button>
                    <a href="\itproject\Login\viewappoint.php" class="btn btn-primary">View Appointment</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
