<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4; /* Warna latar belakang yang lembut */
        }
        .login-container {
            padding: 30px; /* Padding lebih besar untuk simetri */
            border: 1px solid #ccc;
            border-radius: 10px; /* Sudut yang lebih bulat */
            background-color: #fff; /* Latar belakang putih untuk kontainer */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan halus */
        }
        h2 {
            text-align: center; /* Pusatkan judul */
            margin-bottom: 20px; /* Spasi bawah untuk judul */
        }
        input {
            width: calc(100% - 20px); /* Mengurangi lebar untuk padding */
            padding: 10px;
            margin: 10px 0; /* Margin yang sama atas dan bawah */
            border: 1px solid #ccc;
            border-radius: 5px; /* Sudut input yang membulat */
        }
        button {
            width: 100%;
            padding: 10px;
            margin: 10px 0; /* Margin yang sama atas dan bawah */
            border: none; /* Menghilangkan border default */
            border-radius: 5px;
            background-color: burlywood; /* Warna tombol */
            color: white; /* Teks putih */
            font-weight: bold; /* Teks tebal */
            cursor: pointer; /* Pointer saat hover */
        }
        button:hover {
            background-color: goldenrod; /* Warna tombol saat hover */
        }
        </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>
