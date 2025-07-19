<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Simple file-based storage for tutors
define('TUTORS_FILE', 'tutors.json');

function load_tutors() {
    if (!file_exists(TUTORS_FILE)) return [];
    $json = file_get_contents(TUTORS_FILE);
    return json_decode($json, true) ?: [];
}

function save_tutors($tutors) {
    file_put_contents(TUTORS_FILE, json_encode($tutors, JSON_PRETTY_PRINT));
}

$tutors = load_tutors();
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $role = trim($_POST['role'] ?? '');
    $desc = trim($_POST['desc'] ?? '');
    $img = $_FILES['photo'] ?? null;
    $img_path = '';

    if ($name && $role && $desc && $img && $img['tmp_name']) {
        $ext = strtolower(pathinfo($img['name'], PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'webp'];
        if (in_array($ext, $allowed)) {
            $img_path = 'uploads/tutor_' . time() . '_' . rand(1000,9999) . '.' . $ext;
            if (!is_dir('uploads')) mkdir('uploads');
            move_uploaded_file($img['tmp_name'], $img_path);
            $tutors[] = [
                'name' => $name,
                'role' => $role,
                'desc' => $desc,
                'img' => $img_path
            ];
            save_tutors($tutors);
            header('Location: admin_tutors.php');
            exit;
        } else {
            $error = 'Invalid image type. Allowed: jpg, jpeg, png, webp.';
        }
    } else {
        $error = 'All fields are required.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Manage Tutors</title>
  <link rel="stylesheet" href="./assets/css/style.css">
  <style>
    body { background: #f7f7f7; }
    .admin-container { max-width: 700px; margin: 2rem auto; background: #fff; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.07); padding: 2rem; }
    h2 { text-align: center; margin-bottom: 2rem; }
    .tutor-list-admin { margin-bottom: 2.5rem; }
    .tutor-admin-card { display: flex; align-items: center; gap: 1.5rem; background: #f3f3f3; border-radius: 8px; padding: 1rem; margin-bottom: 1rem; }
    .tutor-admin-card img { width: 90px; height: 90px; object-fit: cover; border-radius: 0; background: #e0e0e0; }
    .tutor-admin-info { flex: 1; }
    .admin-form label { display: block; margin-top: 1rem; font-weight: 500; }
    .admin-form input[type="text"], .admin-form textarea { width: 100%; padding: 0.5rem; border-radius: 4px; border: 1px solid #ccc; margin-top: 0.25rem; }
    .admin-form input[type="file"] { margin-top: 0.5rem; }
    .admin-form button { margin-top: 1.5rem; padding: 0.7rem 2rem; background: #4a90e2; color: #fff; border: none; border-radius: 6px; font-size: 1rem; cursor: pointer; }
    .admin-form button:hover { background: #357ab8; }
    .error-msg { color: #c00; margin-top: 1rem; }
  </style>
</head>
<body>
  <div class="admin-container">
    <h2>Manage Tutors</h2>
    <div class="tutor-list-admin">
      <h3>Current Tutors</h3>
      <?php if (count($tutors) === 0): ?>
        <p>No tutors added yet.</p>
      <?php else: ?>
        <?php foreach ($tutors as $t): ?>
          <div class="tutor-admin-card">
            <img src="<?= htmlspecialchars($t['img']) ?>" alt="Tutor Photo">
            <div class="tutor-admin-info">
              <strong><?= htmlspecialchars($t['name']) ?></strong><br>
              <span><?= htmlspecialchars($t['role']) ?></span><br>
              <small><?= htmlspecialchars($t['desc']) ?></small>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <form class="admin-form" method="post" enctype="multipart/form-data">
      <h3>Add New Tutor</h3>
      <label for="photo">Photo (jpg, jpeg, png, webp):</label>
      <input type="file" name="photo" id="photo" accept="image/*" required>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required>
      <label for="role">Role:</label>
      <input type="text" name="role" id="role" required>
      <label for="desc">Description:</label>
      <textarea name="desc" id="desc" rows="3" required></textarea>
      <?php if ($error): ?><div class="error-msg"><?= htmlspecialchars($error) ?></div><?php endif; ?>
      <button type="submit">Add Tutor</button>
    </form>
  </div>
</body>
</html>