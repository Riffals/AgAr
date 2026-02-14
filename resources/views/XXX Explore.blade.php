<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Farming</title>
    <style>
        body {
            background-color: #FFFFE0;
            font-family: sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Mengatur ukuran gambar */
        img {
            width: 80%; /* Mengurangi ukuran gambar menjadi 80% dari kontainer */
            height: auto; /* Menjaga aspek rasio gambar */
            margin-bottom: 1em; /* Memberi jarak antara gambar dan teks */
        }

        h1 {
            color: #4682B4;
            font-size: 2.5em;
            margin-bottom: 1em;
        }
        p {
            color: #4682B4;
            font-size: 1.2em;
            margin-bottom: 2em;
        }

        /* Mengatur gaya tombol */
        button {
            background-color: #FFFFFF; /* Warna latar belakang putih */
            color: #8B4513; /* Warna teks coklat */
            padding: 1em 2em;
            border: 2px solid #8B4513; /* Border coklat */
            border-radius: 20px; /* Membuat sudut melengkung */
            font-size: 1.2em;
            font-weight: bold;
            cursor: pointer;
            width: 50%; /* Mengatur tombol menjadi 50% dari lebar kontainer */
        }

        /* Responsive adjustments for smaller screens */
        @media screen and (max-width: 400px) {
            h1 {
                font-size: 2em;
            }
            p {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('storage/Explore.png') }}" alt="Explore">
        <h1>Smart Farming</h1>
        <p>Enhancing agriculture with innovative solutions</p>
        <button>Explore</button>
    </div>
</body>
</html>
