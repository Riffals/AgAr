<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgAr</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to bottom, #a8e6cf, #dcedc1 50%, #fffbf1 50%);
        }

        .circle {
            width: 120vw; /* Larger than the viewport */
            height: 120vw; /* Larger than the viewport */
            border-radius: 50%;
            background: linear-gradient(to bottom, #a8e6cf 0%, #dcedc1 50%, #fffbf1 100%);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        h1 {
            font-family: 'Arial', sans-serif;
            color: #555555;
            font-size: 2rem; /* Responsive font size */
            text-align: center;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="circle">
        <img class="wel1" src="{{ asset('storage/logo_agar.png') }}" alt="AgAr Logo">
        <h1>Powered by Indobot</h1>
    </div>
</body>
</html>
