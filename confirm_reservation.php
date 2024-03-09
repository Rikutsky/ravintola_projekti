<?php
session_start();

if (!isset($_SESSION["reservation_date"]) || !isset($_SESSION["reservation_time"]) || 
    !isset($_POST["name"]) || !isset($_POST["contact"]) || !isset($_POST["num_guests"])) {
    header("Location: varaukset.php");
    exit();
}

$reservation_date = $_SESSION["reservation_date"];
$reservation_time = $_SESSION["reservation_time"];
$name = $_POST["name"];
$contact = $_POST["contact"];
$num_guests = $_POST["num_guests"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "varaukset_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO reservations (reservation_date, reservation_time, name, contact, num_guests)
        VALUES ('$reservation_date', '$reservation_time', '$name', '$contact', '$num_guests')";

if ($conn->query($sql) === TRUE) {
    $success_message = "Varaus tallennettu onnistuneesti.";
} else {
    $error_message = "Virhe: " . $sql . "<br>" . $conn->error;
}

$conn->close();

session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html class=dark lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ravintola Kosmo</title>
    <link rel="icon" type="image/png" sizes="32x32" href="Logo Files\For Web\Favicons\browser.png">
    
    <link rel="icon" type="image/png" sizes="192x192" href="Logo Files\For Web\Favicons\Android.png">
    
    <link rel="apple-touch-icon" sizes="180x180" href="Logo Files\For Web\Favicons\iPhone.png">

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased text-slate-500 dark:text-slate-400 bg-white dark:bg-slate-900">
<div class="sticky top-0 z-40 w-full backdrop-blur flex-none border-b border-slate-200/5">
<nav class="text-sm leading-6 font-bold dark:text-slate-200 py-4">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between">
    <div>
        <a href="index.php" class="flex items-center text-white text-xl">
            <img src="kosmo.png" alt="Logo" class="h-12 w-12 mr-2">
    </div>
    <div class="hidden md:flex">
    <a href="lounas.php" class="text-white hover:text-sky-500 lb px-3 py-2">Lounas</a>
    <a href="illallinen.php" class="text-white hover:text-sky-500 lb px-3 py-2">Illallinen</a>
    <a href="kokoukset.php" class="text-white hover:text-sky-500 lb px-3 py-2">Kokoukset</a>
    <a href="juhlat.php" class="text-white hover:text-sky-500 lb px-3 py-2">Juhlat</a>
    <a href="ajankohtaista.php" class="text-white hover:text-sky-500 lb px-3 py-2">Ajankohtaista</a>
    <a href="varaukset.php" class="text-white hover:text-sky-500 lb px-3 py-2">Varaukset</a>
</div>
<div class="md:hidden">
                    <button class="text-white hover: focus:outline-none focus:bg-gray-700 px-3 py-2">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
</nav>
</div>
<div class="text-3xl sm:text-4xl font-extrabold dark:text-slate-200 py-4 justify-center text-center">
    <h2>Varauksen varmistus</h2>
    <p class="mt-2 text-lg dark:text-slate-400 font-semibold">Päivämäärä: <?php echo $reservation_date; ?></p>
    <p class="mt-2 text-lg dark:text-slate-400 font-semibold">Aika: <?php echo $reservation_time; ?></p>
    <p class="mt-2 text-lg dark:text-slate-400 font-semibold">Nimi: <?php echo $name; ?></p>
    <p class="mt-2 text-lg dark:text-slate-400 font-semibold">Yhteystiedot: <?php echo $contact; ?></p>
    <p class="mt-2 text-lg dark:text-slate-400 font-semibold">Ruokailijoiden määrä: <?php echo $num_guests; ?></p>
    <p class="mt-2 text-lg dark:text-slate-400 font-semibold">Kiitos varauksestasi!</p>

    <a class="relative bg-slate-900 hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-400 
        focus:ring-offset-2 text-sm text-white font-semibold h-12 px-6 rounded-lg dark:bg-slate-700 dark:hover:bg-slate-600 cursor-pointer" href="index.php">&laquo; Takaisin</a>

    
<br><br>
    <?php if (isset($success_message)) { ?>
        <p style="color: green;"><?php echo $success_message; ?></p>
    <?php } ?>
    <?php if (isset($error_message)) { ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php } ?>

<footer class="text-sm font-normal leading-6 mt-16 mb-16">
<div class="pt-10 pb-0 border-t border-slate-200/5 text-slate-500 flex justify-center">
    <div class="text-center">
    <p>Ravintola Kosmo</p>
    <p>Kosmokatu 4, Linnunrata</p>
<br>
    <p>myynti@ravintolakosmo.fi</p>
    <p>050 609 5010</p>
<br>
    <h3>Olemme avoinna:</h3>
<br>
    <p>Ma-to klo 10:00-21:00</p>
    <p>Pe klo 10:00-22:00</p>
    <p>La klo 12:00-22:00</p>
</div>
</div>
</footer>
</body>
</html>