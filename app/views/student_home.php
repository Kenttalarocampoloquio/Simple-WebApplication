<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Student Home' ?></title>
</head>
<body>
    <h1>Mabuhay Mahaltana! Welcome sa aking student page</h1>
    <p>Click ang nakahighlight na link para ma-view ang aking student profile.</p>

    <nav>
        <a href="<?= site_url('student/profile') ?>">Profile</a>
    </nav>
</body>
</html>
