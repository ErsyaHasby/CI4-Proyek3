<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
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

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th {
            background: #4e73df;
            color: white;
            padding: 12px;
            text-align: center;
        }

        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f1f5ff;
        }

        a {
            text-decoration: none;
            padding: 6px 12px;
            background: #1cc88a;
            color: white;
            border-radius: 4px;
            font-size: 14px;
        }

        a:hover {
            background: #17a673;
        }

        .empty-row {
            text-align: center;
            padding: 20px;
            color: #888;
        }
    </style>
</head>

<body>
    <h1>📋 Daftar Mahasiswa</h1>
    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
        <?php if (!empty($mahasiswa)): ?>
            <?php foreach ($mahasiswa as $m): ?>
                <tr>
                    <td><?= esc($m['NIM']); ?></td>
                    <td><?= esc($m['nama']); ?></td>
                    <td><?= esc($m['umur']); ?></td>
                    <td>
                        <a href="/mahasiswa/detail/<?= esc($m['NIM']); ?>">Detail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" class="empty-row">Belum ada data mahasiswa</td>
            </tr>
        <?php endif; ?>
    </table>
</body>

</html>