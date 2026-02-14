<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Farmer Login</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

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
            background-color: #fff5e0;
            padding: 40px 20px;
        }

        .welcome-text {
            color: #5bb4dd;
            font-size: 2.5rem;
            line-height: 1.2;
            margin-top: 50px;
        }

        .main-section {
            background-color: #c1e6c0;
            flex: 1;
            padding: 40px 20px;
        }

        .input-container {
            
            margin: 20px auto;
            margin-top: 100px;
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
                {{-- <label for="input-group-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
                <div class="relative mb-6">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                        <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                    </svg>
                </div>
                <input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com">
                </div>
                <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                <div class="flex">
                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                    </svg>
                </span>
                <input type="text" id="website-admin" class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="elonmusk">
                </div>             --}}
                <!DOCTYPE html>
    <div class="iot-container">
        <label for="iot-location" class="iot-label">IoT Location</label>
        <input type="text" id="iot-location" placeholder="Input your IoT location" class="iot-input">
    </div>

    <div class="iot-container" id="cont_2">
        <label for="iot-location" class="iot-label">IoT Location</label>
        <input type="text" id="iot-location" placeholder="Input your IoT location" class="iot-input">
    </div>
                {{-- <div class="input-field">
                    <div class="icon">👤</div>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <div class="icon">🔑</div>
                    <input type="password" placeholder="Password">
                </div> --}}
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

<style>
    .iot-container {
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 20px;
    width: 350px;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.iot-label {
    font-size: 1.2em;
    font-weight: bold;
    margin-bottom: 10px;
    display: block;
    color: #333;
}

.iot-input {
    width: 100%;
    padding: 10px;
    font-size: 1em;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

#cont_2 {
    margin-top: 50px;   
}
</style>