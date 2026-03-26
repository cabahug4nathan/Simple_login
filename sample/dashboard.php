<?php
session_start();
$user_name = $_SESSION['user_name'] ?? 'User';
$current_date = date('F d, Y');
$current_time = date('H:i:s');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Dashboard</h1>
            <div class="header-info">
                <p>Welcome, <strong><?php echo htmlspecialchars($user_name); ?></strong></p>
                <p><?php echo $current_date; ?></p>
            </div>
        </header>
        
        <div class="dashboard-grid">
            <div class="card">
                <div class="card-icon">📊</div>
                <div class="card-title">Total Users</div>
                <div class="card-value">1,234</div>
                <div class="card-subtitle">↑ 12% from last month</div>
            </div>
            
            <div class="card">
                <div class="card-icon">💰</div>
                <div class="card-title">Revenue</div>
                <div class="card-value">$12.5K</div>
                <div class="card-subtitle">↑ 8% from last month</div>
            </div>
            
            <div class="card">
                <div class="card-icon">✅</div>
                <div class="card-title">Completed Tasks</div>
                <div class="card-value">856</div>
                <div class="card-subtitle">↑ 5% from last month</div>
            </div>
            
            <div class="card">
                <div class="card-icon">⚙️</div>
                <div class="card-title">System Status</div>
                <div class="card-value">Online</div>
                <div class="card-subtitle">All systems operational</div>
            </div>
        </div>
    </div>
</body>
</html>