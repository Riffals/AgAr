<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Farmer Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .top-section {
            background-color: #c1e6c0;
            padding: 40px 20px;
        }

        .welcome-text {
            color: #5bb4dd;
            font-size: 2.5rem;
            line-height: 1.2;
        }

        .main-section {
            background-color: #fff5e0;
            flex: 1;
            padding: 40px 20px;
        }

        .input-container {
            
          margin: 20px auto;
            max-width: 400px;
            width: 100%;
        }

        .input-field {
            background: white;
            border-radius: 25px;
            padding: 15px;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .icon {
            width: 20px;
            height: 20px;
            margin-right: 10px;
            color: #888;
        }

        input {
            border: none;
            outline: none;
            width: 100%;
            font-size: 1rem;
            color: #666;
            background: transparent;
        }

        .sign-in-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 30px 20px;
        }

        .sign-in-text {
            font-size: 2rem;
            color: #444;
            font-weight: bold;
        }

        .arrow-button {
            width: 50px;
            height: 50px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
        }

        .arrow {
            border: solid #444;
            border-width: 0 2px 2px 0;
            display: inline-block;
            padding: 3px;
            transform: rotate(-45deg);
            width: 8px;
            height: 8px;
        }

        .bottom-links {
            display: flex;
            margin-top: 3rem;
            justify-content: space-between;
            padding: 20px;
            font-size: 1rem;
        }

        .bottom-links a {
            color: #444;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="top-section">
            <h1 class="welcome-text">Welcome<br>Smart Farmer</h1>
        </div>
        
        <div class="main-section">
            <div class="input-container">
                <div class="input-field">
                    <div class="icon">👤</div>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <div class="icon">🔑</div>
                    <input type="password" placeholder="Password">
                </div>
            </div>

            <div class="sign-in-container">
                <div class="sign-in-text">Sign In</div>
                <button class="arrow-button">
                    <span class="arrow"></span>
                </button>
            </div>

            <div class="bottom-links">
                <a href="#">Sign up</a>
                <a href="#">Forgot Password</a>
            </div>
        </div>
    </div>
</body>
</html>