<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentra - Dashboard</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php include '../app/views/component/sidebar.php'; ?>

        <main class="main-content">
            <header class="header">
                <div class="welcome">
                    <h1>👋 Welcome, <?= $_SESSION['user']['name'] ?? 'Admin'; ?></h1>
                </div>
                <div class="search-bar">
                    <input type="text" placeholder="Search for events...">
                </div>
            </header>

            <div class="action-buttons">
                <button class="btn btn-create">+ Create Event</button>
                <button class="btn btn-announcement">📣 Announcement</button>
            </div>

            <section class="stats-grid">
                <div class="stat-card">
                    <p>Total Events</p>
                    <h3>10</h3>
                </div>
                <div class="stat-card">
                    <p>Participants</p>
                    <h3>200+</h3>
                </div>
                <div class="stat-card">
                    <p>Upcoming Events</p>
                    <h3>1</h3>
                </div>
            </section>

            <section class="section">
                <div class="section-header">
                    <h3>Ongoing Events</h3>
                </div>
                
                <a href="<?= BASEURL; ?>/event/1" style="text-decoration: none; color: inherit; display: block;">
                    <div class="hero-card">
                        <div class="hero-img-placeholder">
                            <h2 style="color: var(--dark-teal);">Sekolah XYZ - Class Meeting</h2>
                        </div>
                        <div class="hero-info">
                            <h4>Class Meeting</h4>
                            <p>12 - 19 Desember 20XX</p>
                            <div class="hero-badges">
                                <span class="badge-ongoing">Ongoing</span>
                                <div class="capacity-info" style="display: flex; gap: 15px; font-weight: 600; color: var(--text-muted);">
                                    <span>👥 45/100</span>
                                    <span>🏸 20/30</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </section>

            <section class="section">
                <div class="section-header">
                    <h3>All Events</h3>
                    <a href="#" class="view-all">View All ></a>
                </div>
                <div class="events-grid">
                    <div class="mini-card">
                        <div class="mini-thumb"></div>
                        <div class="mini-content">
                            <h4>Futsal Tournament</h4>
                            <p>10 Des 20XX</p>
                            <span class="badge-ongoing">Ongoing</span>
                        </div>
                    </div>
                    <div class="mini-card">
                        <div class="mini-thumb"></div>
                        <div class="mini-content">
                            <h4>Science Fair</h4>
                            <p>5-7 Des 20XX</p>
                            <span class="badge-ongoing" style="background: #e3f2fd; color: #1976d2;">Upcoming</span>
                        </div>
                    </div>
                    <div class="mini-card">
                        <div class="mini-thumb"></div>
                        <div class="mini-content">
                            <h4>Art Exhibition</h4>
                            <p>2 Des 20XX</p>
                            <span class="badge-ongoing" style="background: #ffebee; color: #c62828;">Full</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <h3>Quick Insights</h3>
                <div class="insights-box">
                    <p>🔥 Futsal Tournament is almost full</p>
                    <p>📅 Tomorrow: Wiradana Workshop</p>
                    <p>🕒 Class Meeting ends in 3 days</p>
                </div>
            </section>
        </main>
    </div>
</body>
</html>