<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form CV - Method GET</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lato:wght@300;400;700&display=swap');

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

    .container {
      background: #fff;
      border-radius: 2px;
      box-shadow: 8px 8px 0px #2d6a4f;
      border: 2px solid #2d6a4f;
      width: 100%;
      max-width: 620px;
      overflow: hidden;
    }

    .header {
      background: #2d6a4f;
      color: #f0ebe3;
      padding: 28px 36px;
    }

    .header h1 {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      letter-spacing: 1px;
    }

    .header p {
      font-size: 0.78rem;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: #b7e4c7;
      margin-top: 4px;
    }

    .badge {
      display: inline-block;
      margin-top: 10px;
      background: #f4a261;
      color: #1a1a2e;
      font-size: 0.65rem;
      letter-spacing: 2px;
      text-transform: uppercase;
      padding: 3px 10px;
      border-radius: 2px;
      font-weight: 700;
    }

    .notice {
      background: #fff3cd;
      border-left: 4px solid #f4a261;
      padding: 12px 36px;
      font-size: 0.82rem;
      color: #6b4f00;
      line-height: 1.5;
    }

    form {
      padding: 32px 36px;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .field { display: flex; flex-direction: column; gap: 6px; }

    label {
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: #555;
    }

    input, textarea, select {
      border: 1.5px solid #ccc;
      border-radius: 2px;
      padding: 10px 14px;
      font-family: 'Lato', sans-serif;
      font-size: 0.95rem;
      color: #1a1a2e;
      background: #faf9f7;
      transition: border-color 0.2s;
      outline: none;
    }

    input:focus, textarea:focus, select:focus {
      border-color: #2d6a4f;
      background: #fff;
    }

    textarea { resize: vertical; min-height: 90px; }

    .row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }

    .section-label {
      font-family: 'Playfair Display', serif;
      font-size: 1.05rem;
      color: #2d6a4f;
      border-bottom: 2px solid #2d6a4f;
      padding-bottom: 6px;
      margin-top: 4px;
    }

    button[type="submit"] {
      background: #2d6a4f;
      color: #f0ebe3;
      border: 2px solid #2d6a4f;
      padding: 14px;
      font-family: 'Lato', sans-serif;
      font-size: 0.85rem;
      font-weight: 700;
      letter-spacing: 3px;
      text-transform: uppercase;
      cursor: pointer;
      border-radius: 2px;
      transition: background 0.2s, color 0.2s;
      margin-top: 8px;
    }

    button[type="submit"]:hover {
      background: #f4a261;
      border-color: #f4a261;
      color: #1a1a2e;
    }
  </style>
</head>
<body>
<div class="container">
  <div class="header">
    <h1>Curriculum Vitae</h1>
    <p>Formulir Data Diri</p>
    <span class="badge">Method: GET</span>
  </div>
  <div class="notice">
    ⚠️ Perhatikan: Dengan method <strong>GET</strong>, data yang Anda isi akan terlihat di URL browser (query string).
  </div>

  <!-- Tugas 2: method diubah dari "post" menjadi "get" -->
  <form action="hasil_cv_get.php" method="get">

    <p class="section-label">Data Pribadi</p>

    <div class="row">
      <div class="field">
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" placeholder="Nama Anda" required>
      </div>
      <div class="field">
        <label for="ttl">Tempat, Tanggal Lahir</label>
        <input type="text" id="ttl" name="ttl" placeholder="Jakarta, 01-01-2000">
      </div>
    </div>

    <div class="row">
      <div class="field">
        <label for="jk">Jenis Kelamin</label>
        <select id="jk" name="jk">
          <option value="">-- Pilih --</option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
      <div class="field">
        <label for="agama">Agama</label>
        <input type="text" id="agama" name="agama" placeholder="Islam">
      </div>
    </div>

    <div class="field">
      <label for="alamat">Alamat</label>
      <textarea id="alamat" name="alamat" placeholder="Jl. Contoh No. 1, Jakarta..."></textarea>
    </div>

    <div class="row">
      <div class="field">
        <label for="telp">No. Telepon</label>
        <input type="text" id="telp" name="telp" placeholder="08xxxxxxxxxx">
      </div>
      <div class="field">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="email@contoh.com">
      </div>
    </div>

    <p class="section-label">Pendidikan & Keahlian</p>

    <div class="field">
      <label for="pendidikan">Pendidikan Terakhir</label>
      <input type="text" id="pendidikan" name="pendidikan" placeholder="S1 Teknik Informatika - Universitas XYZ">
    </div>

    <div class="field">
      <label for="keahlian">Keahlian</label>
      <textarea id="keahlian" name="keahlian" placeholder="Sebutkan keahlian Anda..."></textarea>
    </div>

    <div class="field">
      <label for="pengalaman">Pengalaman Kerja</label>
      <textarea id="pengalaman" name="pengalaman" placeholder="Jabatan - Perusahaan (Tahun)..."></textarea>
    </div>

    <button type="submit">Buat CV &rarr;</button>

  </form>
</div>
</body>
</html>