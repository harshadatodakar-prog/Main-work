<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html"); // redirect back if not logged in
    exit();
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DabbaCartel Dashboard</title>

    
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>


    <aside class="sidebar">

        <div class="logo-section">
      <div class="logo-icon">
    <img src="d:\logo.jpeg" alt="My logo">
     <br>

      </div>

            <div>
                <br>
                <h2>DabbaCartel</h2>
                <p>Cartel of Kindness, One Dabba at a Time</p>
            </div>
        </div>



        <nav class="sidebar-menu">

            <a href="#" class="menu-item active">
                <i class="fa-solid fa-house"></i>
                <span>Dashboard</span>
            </a>

            <a href="#" class="menu-item">
                <i class="fa-solid fa-circle-plus"></i>
                <span>List Food</span>
            </a>

            <a href="#" class="menu-item">
                <i class="fa-solid fa-cube"></i>
                <span>My Listings</span>
            </a>

            <a href="#" class="menu-item">
                <i class="fa-solid fa-box-open"></i>
                <span>My Bookings</span>
            </a>

            <a href="#" class="menu-item">
                <i class="fa-regular fa-comment"></i>
                <span>Messages</span>
            </a>


            <a href="#" class="menu-item">
                <i class="fa-regular fa-user"></i>
                <span>Profile</span>
            </a>

            <a href="#" class="menu-item">
                <i class="fa-solid fa-gear"></i>
                <span>Settings</span>
            </a>

            <a href="login.html" class="menu-item logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </a>

        </nav>

    </aside>



 <main class="main-content">


<header class="topbar">

            <div class="welcome-section">

                <button class="menu-button">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <div>
                    <h1>Welcome back, Shreyash! 👋</h1>

                    <p>
                        Together, let's reduce waste and feed more people.
                    </p>
                </div>

            </div>


            <div class="topbar-right">

                <div class="location">
                    <i class="fa-solid fa-location-dot"></i>

                    <span>Mumbai, Maharashtra</span>

                    <i class="fa-solid fa-chevron-down"></i>
                </div>

                <div class="notification">
                    <i class="fa-regular fa-bell"></i>
                </div>

                <div class="profile-image">
                    <i class="fa-solid fa-user"></i>
                </div>

            </div>

        </header>


        <section class="stats-container">

            <!-- Card 1 -->

            <div class="stat-card">

                <div class="stat-icon green">
                    <i class="fa-solid fa-bowl-food"></i>
                </div>

                <div class="stat-info">
                    <h2>00</h2>
                    <p>Food Listing This<br>Month</p>
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon orange">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                </div>

                <div class="stat-info">
                    <h2>00</h2>
                    <p>Successful<br>Donations This Month</p>
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon blue">
                    <i class="fa-solid fa-people-group"></i>
                </div>

                <div class="stat-info">
                    <h2>00</h2>
                    <p>Meals Served<br>This Month</p>
                </div>

            </div>

            <div class="stat-card">

                <div class="stat-icon light-green">
                    <i class="fa-solid fa-leaf"></i>
                </div>

                <div class="stat-info">
                    <h2>00</h2>
                    <p>People Helped<br>This Month</p>
                </div>

            </div>

        </section>


        <section class="dashboard-grid">

            <div class="dashboard-card recent-listings">

                <div class="card-header">

                    <h2>Recent Food Listings</h2>

                    <a href="#">View All</a>

                </div>


                <div class="empty-listing">

                    <div class="plus-circle">
                        <i class="fa-solid fa-plus"></i>
                    </div>

                    <h3>List New Food</h3>

                </div>

            </div>


            <div class="dashboard-card nearby-requests">

                <div class="card-header">

                    <h2>Nearby Requests</h2>

                    <a href="#">View Map</a>

                </div>


                <div class="map-container">

                    <div class="map-placeholder">

                        <i class="fa-solid fa-map-location-dot"></i>

                        <span>Nearby Requests</span>

                    </div>

                </div>


                <div class="request-item">

                    <div class="ngo-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <div class="ngo-details">

                        <h3>PROUDINDIAN</h3>

                        <p>NGO</p>

                        <span>⭐ 4.8 (108)</span>

                    </div>

                    <div class="request-right">

                        <p>2.8 km away</p>

                        <button>View Request</button>

                    </div>

                </div>

            </div>


            <div class="dashboard-card recent-activity">

                <div class="card-header">

                    <h2>Recent Activity</h2>

                    <a href="#">View All</a>

                </div>


                <div class="activity-empty">

                    <i class="fa-regular fa-clock"></i>

                    <p>No recent activity</p>

                </div>

            </div>


            <div class="dashboard-card quick-actions">

                <div class="card-header">

                    <h2>Quick Actions</h2>

                </div>


                <div class="actions-grid">

                    <a href="#" class="action">

                        <div class="action-icon green">
                            <i class="fa-solid fa-circle-plus"></i>
                        </div>

                        <span>List Food</span>

                    </a>


                    <a href="#" class="action">

                        <div class="action-icon blue">
                            <i class="fa-solid fa-cube"></i>
                        </div>

                        <span>My Bookings</span>

                    </a>


                    <a href="#" class="action">

                        <div class="action-icon light-blue">
                            <i class="fa-regular fa-comment"></i>
                        </div>

                        <span>Messages</span>

                    </a>


                    <a href="#" class="action">

                        <div class="action-icon green">
                            <i class="fa-solid fa-chart-column"></i>
                        </div>

                        <span>My Listings</span>

                    </a>

                </div>

            </div>

        </section>


        <section class="bottom-banner">

            <div>

                <h2>
                    Be a hero. Share food. Spread smiles.
                </h2>

                <p>
                    Your small action can bring a big change.
                </p>

            </div>


            <a href="#" class="list-food-button">

                List Food Now

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </section>


    </main>

</body>
</html>
