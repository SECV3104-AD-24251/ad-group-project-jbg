@ -1,11 +1,193 @@
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .header {
            background-color: #007bff;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        .sidebar {
            background-color: #0056b3;
            color: white;
            height: 100vh;
            padding: 15px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 10px 0;
        }

        .sidebar a:hover {
            text-decoration: underline;
        }

        .main-content {
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <!-- Header -->
    <div class="header">
        <h1>University Venue Management System</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 sidebar">
                <h4>Navigation</h4>
                <a href="#">Dashboard</a>
                <a href="#">Manage Venues</a>
                <a href="#">Bookings</a>
                <a href="#">Reports</a>
                <a href="#">Settings</a>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 col-lg-10 px-md-4">
                <div class="main-content">
                    <h2>Welcome to the Venue Management System</h2>
                    <p>Here you can manage venues, view bookings, and generate reports easily.</p>

                    <!-- Example Table -->
                    <h3>Upcoming Bookings</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Venue</th>
                                <th>Date</th>
                                <th>Event</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Auditorium</td>
                                <td>2024-12-20</td>
                                <td>Workshop</td>
                                <td><span class="badge bg-success">Confirmed</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Conference Room</td>
                                <td>2024-12-22</td>
                                <td>Meeting</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</html>