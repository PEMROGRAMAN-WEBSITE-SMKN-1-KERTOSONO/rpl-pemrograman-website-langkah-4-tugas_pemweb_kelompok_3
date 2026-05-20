<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil CV</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap');

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Lato', sans-serif;
      background: #f0ebe3;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px 16px;
    }

    .cv {
      background: #fff;
      width: 100%;
      max-width: 680px;
      border: 2px solid #2d6a4f;
      box-shadow: 8px 8px 0 #2d6a4f;
    }

    .cv-header {
      background: #2d6a4f;
      color: #f0ebe3;
      padding: 36px 40px;
      position: relative;
    }

    .cv-header h1 {
      font-family: 'Playfair Display', serif;
      font-size: 2.4rem;
    }

    .cv-header .sub {
      font-size: 0.75rem;
      letter-spacing: 4px;
      text-transform: uppercase;
      color: #b7e4c7;
      margin-top: 4px;
    }

    .cv-header .badge {
      position: absolute;
      top: 20px;
      right: 28px;
      background: #f4a261;
      color: #1a1a2e;
      font-size: 0.6rem;
      letter-spacing: 2px;
      text-transform: uppercase;
      padding: 4px 10px;
      border-radius: 2px;
      font-weight: 700;
    }

    .cv-body { padding: 36px 40px; }

    .section { margin-bottom: 28px; }

    .section-title {
      font-family: 'Playfair Display', serif;
      font-size: 1.1rem;
      color: #2d6a4f;
      border-bottom: 2px solid #2d6a4f;
      padding-bottom: 6px;
      margin-bottom: 14px;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .info-grid {
      display: grid;
      grid-template-columns: 160px 1fr;
      gap: 8px 0;
    }

    .key {
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 1px;
      color: #888;
      text-transform: uppercase;
      padding-top: 2px;
    }

    .val { font-size: 0.95rem; color: #1a1a2e; }

    .val-block {
      font-size: 0.95rem;
      color: #333;
      line-height: 1.7;
      white-space: pre-line;
    }

    .back-btn {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 22px;
      background: #2d6a4f;
      color: #f0ebe3;
      text-decoration: none;
      font-size: 0.78rem;
      letter-spacing: 2px;
      text-transform: uppercase;
      border: 2px solid #2d6a4f;
      transition: background 0.2s;
    }

    .back-btn:hover { background: #f4a261; border-color: #f4a261; color: #1a1a2e; }
  </style>
</head>
<body>
<?php
  // Tugas 2: $_POST[] diubah menjadi $_GET[]
  $nama       = isset($_GET['nama'])       ? htmlspecialchars($_GET['nama'])       : '-';
  $ttl        = isset($_GET['ttl'])        ? htmlspecialchars($_GET['ttl'])        : '-';
  $jk         = isset($_GET['jk'])         ? htmlspecialchars($_GET['jk'])         : '-';
  $agama      = isset($_GET['agama'])      ? htmlspecialchars($_GET['agama'])      : '-';
  $alamat     = isset($_GET['alamat'])     ? htmlspecialchars($_GET['alamat'])     : '-';
  $telp       = isset($_GET['telp'])       ? htmlspecialchars($_GET['telp'])       : '-';
  $email      = isset($_GET['email'])      ? htmlspecialchars($_GET['email'])      : '-';
  $pendidikan = isset($_GET['pendidikan']) ? htmlspecialchars($_GET['pendidikan']) : '-';
  $keahlian   = isset($_GET['keahlian'])   ? htmlspecialchars($_GET['keahlian'])   : '-';
  $pengalaman = isset($_GET['pengalaman']) ? htmlspecialchars($_GET['pengalaman']) : '-';
?>
<div class="cv">
  <div class="cv-header">
    <h1><?= $nama ?></h1>
    <p class="sub">Curriculum Vitae</p>
    <span class="badge">Via GET</span>
  </div>
  <div class="cv-body">

    <div class="section">
      <div class="section-title">Data Pribadi</div>
      <div class="info-grid">
        <span class="key">Nama Lengkap</span>      <span class="val"><?= $nama ?></span>
        <span class="key">Tempat / Tgl Lahir</span> <span class="val"><?= $ttl ?></span>
        <span class="key">Jenis Kelamin</span>      <span class="val"><?= $jk ?></span>
        <span class="key">Agama</span>              <span class="val"><?= $agama ?></span>
        <span class="key">Alamat</span>             <span class="val"><?= $alamat ?></span>
        <span class="key">Telepon</span>            <span class="val"><?= $telp ?></span>
        <span class="key">Email</span>              <span class="val"><?= $email ?></span>
      </div>
    </div>

    <div class="section">
      <div class="section-title">Pendidikan</div>
      <p class="val-block"><?= $pendidikan ?></p>
    </div>

    <div class="section">
      <div class="section-title">Keahlian</div>
      <p class="val-block"><?= $keahlian ?></p>
    </div>

    <div class="section">
      <div class="section-title">Pengalaman Kerja</div>
      <p class="val-block"><?= $pengalaman ?></p>
    </div>

    <a href="form_cv_get.php" class="back-btn">&larr; Kembali ke Form</a>
  </div>
</div>
</body>
</html>