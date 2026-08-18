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
    <title>Ang aking Student Profile</title>
</head>
<body>
    <h1>Student Information</h1>
    <p>Student ID: <?= $student_id ?></p>
    <p>Name: <?= $name ?></p>
    <p>Course: <?= $course ?></p>
    <p>Year Level: <?= $year ?></p>
    <p>Section: <?= $section ?></p>
    <p>Email: <?= $email ?></p>
    <p>Address: <?= $address ?></p>
    <p>Contact Number: <?= $contact_number ?></p>
    <p>Hobbies: <?= $hobbies ?></p>

    <p>Social Media:</p>
    <ul>
        <?php foreach ($social_media as $platform => $link): ?>
            <li><?= ucfirst($platform) ?>: <a href="<?= $link ?>" target="_blank"><?= $link ?></a></li>
        <?php endforeach; ?>
    </ul>
    <nav>
        <a href="<?= site_url('student') ?>">Home</a>
    </nav>
</body>
</html>
