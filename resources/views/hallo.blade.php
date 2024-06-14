<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .gift {
            width: 200px;
            height: 200px;
            margin: 20px 0;
        }
        .button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Jika kamu Yudha, klik tombol di bawah</h1>
        <video src="assets/img/verycat-twitch-cat-twitch-emote.webm" autoplay loop muted class="gift"></video>
        <button class="button" onclick="showPopup()">Masuk</button>
    </div>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showPopup() {
            Swal.fire({
                title: 'Identifikasi jika kamu Yudha',
                html: `<video src="/assets/img/alpha-chad.webm" autoplay loop muted class="gift"></video>
                       <p>Apakah Anda hitam?</p>`,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, saya hitam',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "/congratulation";
                }
            });
        }
    </script>
</body>
</html>