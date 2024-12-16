<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            width: 50%;
            background: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        .container h1 {
            color: teal;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        label {
            display: block;
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        textarea {
            resize: none;
            height: 100px;
        }
        .form-actions {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        button {
            background-color: teal;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
        }
        button:hover {
            background-color: #004d40;
        }
        footer {
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>BUKU TAMU</h1>
        <form action="simpanbukutamu.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea id="pesan" name="pesan" required></textarea>
            </div>
            <div class="form-actions">
                <button type="submit">KIRIM</button>
                <button type="reset">BATAL</button>
            </div>
        </form>
        <footer>
            Copyright © 2024
        </footer>
    </div>
</body>
</html>
