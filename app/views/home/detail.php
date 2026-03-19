<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Detail - Sentra</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>
<body>
    <div class="container">
        

        <main class="main-content">
            <header class="header">
                <div class="welcome">
                    <a href="<?= BASEURL; ?>/home" style="text-decoration: none; color: var(--primary-teal); font-weight: bold;">
                        ← Back to Dashboard
                    </a>
                    <h1 style="margin-top: 10px;">Event Detail</h1>
                </div>
                <div class="search-bar">
                    <input type="text" placeholder="Search competition...">
                </div>
            </header>

            <section class="hero-card" style="margin-bottom: 30px;">
                <div style="width: 100%; height: 350px; position: relative; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=1200" 
                         alt="Banner" 
                         style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 40px; background: linear-gradient(transparent, rgba(0,0,0,0.7)); color: white;">
                        <h4 style="font-size: 2.5rem; margin: 0;">CLASS MEETING 2026</h4>
                        <p style="opacity: 0.8;">Sekolah XYZ Tournament</p>
                    </div>
                </div>
            </section>

            <div class="detail-grid" style="display: grid; grid-template-columns: 2fr 1fr; gap: 25px;">
                
                <div class="content-left">
                    <div class="hero-card" style="padding: 30px; margin-bottom: 25px;">
                        <div class="section-header">
                            <h4 style="font-size: 1.5rem;">Deskripsi Event</h4>
                            <span class="badge-ongoing">Ongoing</span>
                        </div>
                        <p style="color: var(--text-muted); margin-top: 15px;">
                            Class meeting adalah ajang kompetisi antar kelas yang bertujuan untuk meningkatkan sportivitas 
                            dan kreativitas siswa Sekolah XYZ melalui berbagai cabang lomba.
                        </p>
                        
                        <div class="hero-badges" style="margin-top: 25px;">
                            <span style="font-size: 0.9rem; color: var(--text-muted);">📅 12-19 Des 2026</span>
                            <span style="font-size: 0.9rem; color: var(--text-muted);">📍 Lapangan Utama</span>
                        </div>
                    </div>

                    <div class="hero-card" style="padding: 30px;">
                        <h4 style="margin-bottom: 20px;">Ikuti Kompetisi</h4>
                        <div style="display: flex; gap: 15px;">
                            <select style="flex: 1; padding: 12px; border-radius: 12px; border: 1px solid #ddd; outline: none;">
                                <option>Pilih Lomba...</option>
                                <option>Futsal</option>
                                <option>Badminton</option>
                            </select>
                            <button class="btn btn-create">Join Now</button>
                        </div>
                    </div>
                </div>

                <div class="content-right">
                    <div class="hero-card" style="padding: 25px;">
                        <h4 style="margin-bottom: 20px; font-size: 1.1rem;">Statistik Peserta</h4>
                        
                        <div style="margin-bottom: 20px;">
                            <div style="display: flex; justify-content: space-between; font-size: 0.8rem; margin-bottom: 5px; font-weight: bold;">
                                <span>Futsal</span>
                                <span style="color: var(--primary-teal);">75/100</span>
                            </div>
                            <div style="width: 100%; height: 8px; background: #eee; border-radius: 10px; overflow: hidden;">
                                <div style="width: 75%; height: 100%; background: var(--primary-teal);"></div>
                            </div>
                        </div>

                        <div style="margin-bottom: 20px;">
                            <div style="display: flex; justify-content: space-between; font-size: 0.8rem; margin-bottom: 5px; font-weight: bold;">
                                <span>Badminton</span>
                                <span style="color: var(--primary-teal);">40/100</span>
                            </div>
                            <div style="width: 100%; height: 8px; background: #eee; border-radius: 10px; overflow: hidden;">
                                <div style="width: 40%; height: 100%; background: var(--primary-teal);"></div>
                            </div>
                        </div>

                        <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">
                        <p style="text-align: center; font-size: 0.8rem; color: var(--text-muted);">
                            Total Joined: <b>115 Students</b>
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>