<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RCGI | VIEW ATTENDANCE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="icon" href="pics\rcgiph_logo.jpg" type="logo">
<style>
body {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 15px;
            background: #F3F4F6;
        }

        /* Navbar */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: white;
            padding: 15px 20px;
            border-bottom: 1px solid #DFDDDD;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }

        /* Left Section */
        .navbar .left {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 18px;
            font-weight: bold;
        }

        /* Icons */
        .navbar .left i {
            font-size: 22px;
        }

        /* Right Section */
        .navbar .right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        /* Bell Icon */
        .navbar .right i {
            font-size: 20px;
            cursor: pointer;
        }

        /* Profile Icon */
        .navbar .profile {
            width: 35px;
            height: 35px;
            background: black;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        /* Sidebar */
        .sidebar {
            background-color: #f8f9fa;
            height: 100vh; /* Full height */
            display: flex;
            flex-direction: column;
            border-right: 1px solid #ddd;
            padding-top: 20px;
            position: fixed; /* Keep sidebar fixed */
            left: 0;
            top: 80px;
            width: 250px; /* Fixed width */
            z-index: 1000;
        }

        .list-group-item {
            background: none;
            border: none;
            padding: 12px 20px;
            font-weight: bold;
            display: flex;
            align-items: center;
            color: #000;
            transition: background 0.3s ease-in-out;
        }

        .list-group-item:hover {
            background: #e0e0e0;
        }

        .list-group-item.active {
            background-color: #99A191;
            color: white;
            border-radius: 5px;
        }

        .sidebar-icon {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px; /* Adjust for sidebar */
            padding: 20px;
        }

        .card {
            border: 1px solid #DFDDDD;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.25);
            border-radius: 3px;
        }

        .col-md-4 h4 {
            margin-left: 30px;
            font-family: 'Inika', serif;
            font-weight: 400;
            font-size: 13px;
            line-height: 17px;
            color: #000000;
        }

        .col-md-4 p {
            margin-top: -10px;
            margin-left: 40px;
            font-family: 'Inika', serif;
            font-weight: 400;
            font-size: 36px;
            color: #000000;
        }
        
        .search-bar {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .search-bar .btn {
            background-color: #99A191;
            color: white;
        }
        .search-bar .btn i {
            margin-right: 5px;
        }
        
    </style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <div class="left">
        <i class="fas fa-building"></i>
        <span>Dashboard</span>
    </div>
    <div class="right">
        <i class="fas fa-bell"></i>
        <div class="profile">
            <i class="fas fa-user"></i>
        </div>
    </div>
</div>

<!-- Sidebar -->
<div class="sidebar">
    <div class="list-group">
        <a href="dashboard.php" class="list-group-item list-group-item-action">
            <i class="fas fa-tachometer-alt sidebar-icon"></i> Dashboard
        </a>
        <a href="view-attendance.php" class="list-group-item list-group-item-action active">
            <i class="fas fa-clock sidebar-icon"></i> View Attendance
        </a>
        <a href="manage-employee.php" class="list-group-item list-group-item-action">
            <i class="fas fa-users sidebar-icon"></i> Manage Employees
        </a>
        <a href="settings.php" class="list-group-item list-group-item-action">
            <i class="fas fa-cog sidebar-icon"></i> Settings
        </a>
        <a href="logoutpage.php" class="list-group-item list-group-item-action">
            <i class="fas fa-sign-out-alt sidebar-icon"></i> Logout
        </a>
    </div>
</div>

<div class="main-content">
    <div class="row">
        <h1>Attendance Record</h1>
        <p>View and manage employee attendance records</p>
        <div class="col-md-4">
            <label><strong>Date Range</strong></label>
            <div class="d-flex">
                <input type="date" class="form-control" value="2025-01-01" />
                <input type="date" class="form-control ms-2" value="2025-12-31" />
            </div>  
        </div>

        <div class="col-md-4">
            <label><strong>Employee ID</strong></label>
            <select class="form-control">
                <option selected>Select Employee ID</option>
            </select>
        </div>

        <div class="col-md-4">
                <label><strong>Search Employee</strong></label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search by name..." />
                </div>
        </div>

        <!-- Search Button & Export Options -->
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search Record" />
                </div>
            </div>
            <div class="col-md-4 d-flex gap-2">
                <button class="btn btn-outline-dark">
                    <i class="fas fa-file-export"></i> Export CSV
                </button>
                <button class="btn btn-outline-dark">
                    <i class="fas fa-print"></i> Print
                </button>
            </div>
        </div>
    </div>
    

    <!-- Recent Table -->
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <table class="table text-center order-table" style="width: 1200px; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th><label>Employee ID</label></th>
                                <th><label>Name</label></th>
                                <th><label>Date</label></th>
                                <th><label>Time In</label></th>
                                <th><label>Status</label></th>
                                <th><label>Time Out</label></th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                <td>EMP001</td>
                                <td>Sharleen Olags</td>
                                <td>02/24/2025</td>
                                <td>9:00 AM</td>
                                <td><button class="btn statusBtn">On-Time</button></td> 
                                <td>6:00 PM</td> 
                                </tr>

                                <tr>
                                <td>EMP002</td>
                                <td>Francois Lopz</td>
                                <td>02/24/2025</td>
                                <td>9:30 AM</td> 
                                <td><button class="btn statusBtn">Late</button></td>
                                <td>6:00 PM</td> 
                                </tr>

                                <tr>
                                <td>EMP003</td>
                                <td>Shai Man</td>
                                <td>02/24/2025</td>
                                <td>9:00 AM</td> 
                                <td><button class="btn statusBtn">On-Time</button></td>
                                <td>6:00 PM</td> 
                                </tr>
                            </tbody>
                    </table>
                    <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center px-3">
                            <span>Showing 1 to 3 of 3 results</span>
                            <div>
                                <button class="btn btn-light btn-sm">Previous</button>
                                <button class="btn btn-light btn-sm">Next</button>
                            </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>

</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let statusButtons = document.querySelectorAll(".statusBtn");

        statusButtons.forEach(button => {
            let statusText = button.innerText.trim();

            if (statusText === "On-Time") {
                button.classList.add("btn-success"); // Green color
            } else if (statusText === "Late") {
                button.classList.add("btn-warning"); // Yellow color
            }
        });
    });
</script>
</body>
</html>