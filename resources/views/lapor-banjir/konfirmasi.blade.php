<!DOCTYPE html>
<html>
<head>
    <title>HEII UDAH KEKIRIM INI LAPORAN NYA!!</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        p {
            margin-bottom: 10px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        a:hover {
            background-color: #d08686;
        }
    </style>
</head>

<body>

    <h1>Laporan Berhasil Dikirim</h1>

    <p>Berikut data laporan yang telah dikirim:</p>

    <p>
        <strong>Nama Pelapor:</strong>
        {{ $laporan['nama'] }}
    </p>

    <p>
        <strong>Kecamatan:</strong>
        {{ $laporan['kecamatan'] }}
    </p>

    <p>
        <strong>Desa:</strong>
        {{ $laporan['desa'] }}
    </p>

    <p>
        <strong>Tinggi Genangan:</strong>
        {{ $laporan['tinggi_genangan'] }} cm
    </p>

    <p>
        Data hanya ditampilkan sementara dan tidak disimpan ke database.
    </p>

    <a href="/lapor-banjir">
        Buat laporan baru
    </a>

</body>
</html>