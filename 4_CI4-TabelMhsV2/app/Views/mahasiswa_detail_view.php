<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Detail Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .card {
            width: 400px;
            margin: 0 auto;
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .card p {
            font-size: 16px;
            margin: 10px 0;
            color: #444;
        }

        .card strong {
            color: #222;
        }

        .btn-back {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 16px;
            background: #4e73df;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            transition: background 0.3s;
        }

        .btn-back:hover {
            background: #2e59d9;
        }

        .not-found {
            text-align: center;
            font-size: 16px;
            color: #888;
        }
    </style>
</head>

<body>
    <h1>📖 Detail Mahasiswa</h1>

    <div class="card">
        <?php if (!empty($mahasiswa)): ?>
            <p><strong>NIM:</strong> <?= esc($mahasiswa['NIM']); ?></p>
            <p><strong>Nama:</strong> <?= esc($mahasiswa['nama']); ?></p>
            <p><strong>Umur:</strong> <?= esc($mahasiswa['umur']); ?></p>
        <?php else: ?>
            <p class="not-found">Data mahasiswa tidak ditemukan.</p>
        <?php endif; ?>

        <a href="/mahasiswa/display" class="btn-back">⬅ Kembali ke Daftar</a>
    </div>
</body>

</html>