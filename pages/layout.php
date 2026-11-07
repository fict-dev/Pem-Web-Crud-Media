<?php
require_once "../config/auth.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Demonstrasi layout CSS - Web Programming 1">
  <title>Layout Lab | Web Programming 1</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  <header>
    <h1>Web Programming 1</h1>
    <p>Praktikum Pemrograman Web</p>
  </header>
  <nav>
    <a href="dashboard.php">Dashboard</a>
    <a href="index.php">Biodata</a>
    <a href="layout.php">Layout Lab</a>
    <a href="data_mahasiswa.php">Data Mahasiswa</a>
    <a href="form_mahasiswa.php">Tambah Mahasiswa</a>
    <a href="../crud/index.php">CRUD Mahasiswa</a>
    <a href="../crud-media/index.php">CRUD Media</a>
    <a href="../proses/logout.php">Logout</a>
  </nav>
  <main>
    <section>
      <h2>Demonstrasi Layout CSS Box Model</h2>
      <p>Halaman ini mendemonstrasikan penggunaan CSS Box Model: <code>margin</code>, <code>padding</code>, <code>border</code>, dan <code>box-sizing</code>.</p>

      <div class="layout-demo">
        <div class="box box-margin">Margin</div>
        <div class="box box-padding">Padding</div>
        <div class="box box-border">Border</div>
      </div>
    </section>

    <section>
      <h2>Display Experiment</h2>

      <a class="demo-link" href="#">HTML</a>
      <a class="demo-link" href="#">CSS</a>
      <a class="demo-link" href="#">JavaScript</a>
    </section>
  </main>
  <footer>
    <p>Web Programming 1</p>
  </footer>
</body>
</html>
