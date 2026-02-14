<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgAr</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
    margin: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center; 
    /* background: linear-gradient(0deg, #CCFFCC 0%, #87CEEB 60%); */
    background: linear-gradient(to bottom, #a8e6cf, #dcedc1 50%, #F5F5DC 50%);
}

.container {
    /* text-align: center; */
    margin-top: 225px;
    max-width: 400px;
}

img {
    width: 100%;
    max-width: 300px; 
    /* margin-bottom: 100px; */
}

p {
    margin-top: 300px;
    font-family: "Inter", sans-serif;
    font-weight: bold;
    color: #555;
    text-align: center;
    font-size: 150%;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .container {
        padding: 20px;
    }
}
</style>
<body>
    <div class="container">
        <img class="wel1" src="<?php echo e(asset('storage/logo_agar.png')); ?>" alt="AgAr Logo">
        <p>Powered by Indobot</p>
    </div>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\AgAr_Indobot\resources\views/loading.blade.php ENDPATH**/ ?>