<?php
$file = 'pweb285_poll.txt';
if (file_exists($file)) {
  $data = json_decode(file_get_contents($file), true);
} else {
  echo "Belum ada data polling.";
  exit();
}
$total = array_sum($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Hasil Polling Pantai</title>
  <link rel="stylesheet" href="pweb285_style.css" />
</head>
<body>
  <div class="container">
    <h1>📊 Hasil Polling</h1>
    <ul style="text-align: left;">
      <?php foreach ($data as $pantai => $suara) : ?>
        <li><?= htmlspecialchars($pantai) ?>: <?= $suara ?> suara</li>
      <?php endforeach; ?>
    </ul>
    <p><strong>Total suara:</strong> <?= $total ?></p>
    <a href="pweb285_index.html"><button>Kembali Voting</button></a>
  </div>
</body>
</html>
