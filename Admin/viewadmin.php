<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appointment Scheduling</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="viewadmin.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="#">
            <img src="../img/Alogo1.jpg" alt="Logo"> Appointment Scheduling
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="\itproject\Admin\admin.php">Admin Panel</a></li>
                <li class="nav-item"><a class="nav-link" href="\itproject\aboutus.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link btn btn-outline-light" href="\itproject\Login\login.php"><i class="fa-regular fa-user"></i> Log in</a></li>
            </ul>
        </div>
    </nav>

    <div class="container3">
        <h1>PANEL</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>User</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>2024-12-01</td><td>10:00 AM</td><td>John Doe</td><td>Meeting with advisor</td></tr>
                    <tr><td>2024-12-02</td><td>2:00 PM</td><td>Jane Smith</td><td>Project presentation</td></tr>
                    <tr><td>2024-12-03</td><td>9:00 AM</td><td>Alex Johnson</td><td>Discussion on progress</td></tr>
                    <tr><td>2024-12-01</td><td>10:00 AM</td><td>Emily Brown</td><td>Meeting with advisor</td></tr>
                    <tr><td>2024-12-02</td><td>2:00 PM</td><td>Michael Green</td><td>Project presentation</td></tr>
                    <tr><td>2024-12-03</td><td>9:00 AM</td><td>Sarah White</td><td>Discussion on progress</td></tr>
                    <tr><td>2024-12-03</td><td>9:00 AM</td><td>Chris Black</td><td>Discussion on progress</td></tr>
                </tbody>
            </table>
        </div>
        <a href="\itproject\Admin\admin.php" class="btn btn-danger btn-logout">Log Out</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
