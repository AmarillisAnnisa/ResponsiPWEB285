<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['pantai']) && !empty($_POST['pantai'])) {
    $pilihan = $_POST['pantai'];
    $file = 'pweb285_poll.txt';

    if (file_exists($file)) {
      $data = json_decode(file_get_contents($file), true);
    } else {
      $data = [
        "Pantai Kayu Arum" => 0,
        "Pantai Watulawang" => 0,
        "Pantai Trenggole" => 0,
        "Pantai Drini" => 0
      ];
    }

    if (isset($data[$pilihan])) {
      $data[$pilihan]++;
    } else {
      echo "Pilihan tidak valid. <a href='pweb285_index.html'>Kembali</a>";
      exit();
    }

    file_put_contents($file, json_encode($data));
    header("Location: pweb285_result.php");
    exit();

  } else {
    echo "Kamu belum memilih pantai! <a href='pweb285_index.html'>Kembali</a>";
    exit();
  }
} else {
  echo "Akses tidak valid. <a href='pweb285_index.html'>Kembali ke polling</a>";
  exit();
}
?>
