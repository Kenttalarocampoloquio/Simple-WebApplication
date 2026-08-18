<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Student Home' ?></title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #0a0a0a;
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        nav.topbar {
            position: fixed;
            top: 0; left: 0; right: 0;
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(10,10,10,0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid #1a1a1a;
            z-index: 100;
        }
        .logo { font-size: 1.4rem; font-weight: 800; }
        .logo span { color: #ff6b35; }
        .hero {
            text-align: center;
            padding: 40px 20px;
            max-width: 700px;
        }
        .badge {
            display: inline-block;
            border: 1px solid #333;
            border-radius: 50px;
            padding: 6px 18px;
            font-size: 0.8rem;
            color: #aaa;
            margin-bottom: 30px;
            letter-spacing: 1px;
        }
        .badge span { color: #ff6b35; }
        h1 {
            font-size: 3.5rem;
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 20px;
        }
        h1 span { color: #ff6b35; }
        p {
            color: #888;
            font-size: 1.1rem;
            line-height: 1.7;
            margin-bottom: 40px;
        }
        .btn {
            background: #ff6b35;
            color: white;
            padding: 16px 40px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1rem;
            display: inline-block;
            transition: background 0.2s, transform 0.2s;
        }
        .btn:hover { background: #e85d2a; transform: translateY(-2px); }
        .grid {
            display: flex;
            gap: 20px;
            margin-top: 80px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .feature {
            background: #111;
            border: 1px solid #1e1e1e;
            border-radius: 12px;
            padding: 24px;
            width: 160px;
            text-align: center;
        }
        .feature .icon { font-size: 1.8rem; margin-bottom: 10px; }
        .feature .label { font-size: 0.85rem; color: #aaa; }
        .feature .value { font-weight: 800; font-size: 1.1rem; color: #ff6b35; }
    </style>
</head>
<body>
    <nav class="topbar">
        <div class="logo">Lava<span>Lust</span></div>
        <a href="<?= site_url('student/profile') ?>" class="btn" style="padding: 10px 24px; font-size:0.9rem;">View Profile →</a>
    </nav>

    <div class="hero">
        <div class="badge">✦ <span>STUDENT PAGE</span> — NOW AVAILABLE</div>
        <h1>Mabuhay<br><span>Mahaltana!</span></h1>
        <p>Welcome sa aking student page. Click ang link para ma-view ang aking student profile at makita ang aking impormasyon.</p>
        <a href="<?= site_url('student/profile') ?>" class="btn">View My Profile →</a>
    </div>

    <div class="grid">
        <div class="feature">
            <div class="icon">🎓</div>
            <div class="value">BSIT</div>
            <div class="label">Course</div>
        </div>
        <div class="feature">
            <div class="icon">📅</div>
            <div class="value">3rd Year</div>
            <div class="label">Year Level</div>
        </div>
        <div class="feature">
            <div class="icon">🏫</div>
            <div class="value">F2</div>
            <div class="label">Section</div>
        </div>
        <div class="feature">
            <div class="icon">📍</div>
            <div class="value">MCC</div>
            <div class="label">School</div>
        </div>
    </div>
</body>
</html>
