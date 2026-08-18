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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            background: white;
            border-radius: 20px;
            padding: 50px 40px;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
            text-align: center;
        }
        .avatar {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
        }
        h1 { color: #2d3748; font-size: 1.6rem; margin-bottom: 12px; }
        p { color: #718096; margin-bottom: 30px; line-height: 1.6; }
        a {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 14px 36px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1rem;
            display: inline-block;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 15px rgba(102,126,234,0.4);
        }
        a:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102,126,234,0.5);
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="avatar">🎓</div>
        <h1>Mabuhay Mahaltana!<br>Welcome sa aking student page</h1>
        <p>Click ang nakahighlight na link para ma-view ang aking student profile.</p>
        <nav>
            <a href="<?= site_url('student/profile') ?>">View Profile</a>
        </nav>
    </div>
</body>
</html>
