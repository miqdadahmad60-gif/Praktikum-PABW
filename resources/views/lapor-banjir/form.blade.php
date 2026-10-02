<!DOCTYPE html>
<html>
<head>
    <title>Ada Banjir?? Ya laporan ke Lapor Banjir Lahhhhhh</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 300px;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #d08686;
        }

        ul {
            color: red;
        }
    </style>
</head>

<body>

    <h1>Ada Banjir?? Ya laporan ke Lapor Banjir Lahhhhhh</h1>

    <p>Silakan isi form laporan banjir berikut. Wlee</p>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/lapor-banjir" method="POST">

        @csrf

        <label>Nama Pelapor</label>
        <br>
        <input type="text" name="nama">
        <br><br>

        <label>Kecamatan</label>
        <br>
        <input type="text" name="kecamatan">
        <br><br>

        <label>Desa</label>
        <br>
        <input type="text" name="desa">
        <br><br>

        <label>Tinggi Genangan (cm)</label>
        <br>
        <input type="number" name="tinggi_genangan">
        <br><br>

        <button type="submit">
            Kirim Laporan
        </button>

    </form>

</body>
</html>