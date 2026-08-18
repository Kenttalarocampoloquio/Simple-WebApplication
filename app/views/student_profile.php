<?php
/**
 * @var string $student_id
 * @var string $name
 * @var string $course
 * @var string $year
 * @var string $section
 * @var string $email
 * @var string $address
 * @var string $contact_number
 * @var string $hobbies
 * @var array  $social_media
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ang aking Student Profile</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        .card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        }
        .header {
            background: linear-gradient(135deg, #667eea, #764ba2);
            padding: 40px;
            text-align: center;
            color: white;
        }
        .avatar {
            width: 90px;
            height: 90px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            margin: 0 auto 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            border: 3px solid rgba(255,255,255,0.5);
        }
        .header h1 { font-size: 1.6rem; margin-bottom: 4px; }
        .header p { opacity: 0.85; font-size: 0.95rem; }
        .body { padding: 30px; }
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-bottom: 20px;
        }
        .info-item {
            background: #f7fafc;
            border-radius: 12px;
            padding: 14px 16px;
        }
        .info-item.full { grid-column: 1 / -1; }
        .info-label {
            font-size: 0.75rem;
            color: #a0aec0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }
        .info-value { color: #2d3748; font-weight: 600; font-size: 0.95rem; }
        .section-title {
            font-size: 0.8rem;
            color: #a0aec0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin: 20px 0 10px;
        }
        .social-links { display: flex; gap: 10px; flex-wrap: wrap; }
        .social-links a {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 8px 18px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 600;
            transition: transform 0.2s;
        }
        .social-links a:hover { transform: translateY(-2px); }
        .back-btn {
            display: inline-block;
            margin-top: 20px;
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
        }
        .back-btn:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <div class="avatar">🎓</div>
                <h1><?= $name ?></h1>
                <p><?= $course ?> — <?= $year ?>, <?= $section ?></p>
            </div>
            <div class="body">
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Student ID</div>
                        <div class="info-value"><?= $student_id ?></div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Contact</div>
                        <div class="info-value"><?= $contact_number ?></div>
                    </div>
                    <div class="info-item full">
                        <div class="info-label">Email</div>
                        <div class="info-value"><?= $email ?></div>
                    </div>
                    <div class="info-item full">
                        <div class="info-label">Address</div>
                        <div class="info-value"><?= $address ?></div>
                    </div>
                    <div class="info-item full">
                        <div class="info-label">Hobbies</div>
                        <div class="info-value"><?= $hobbies ?></div>
                    </div>
                </div>

                <div class="section-title">Social Media</div>
                <div class="social-links">
                    <?php foreach ($social_media as $platform => $link): ?>
                        <a href="<?= $link ?>" target="_blank"><?= ucfirst($platform) ?></a>
                    <?php endforeach; ?>
                </div>

                <nav>
                    <a href="<?= site_url('student') ?>" class="back-btn">← Back to Home</a>
                </nav>
            </div>
        </div>
    </div>
</body>
</html>
