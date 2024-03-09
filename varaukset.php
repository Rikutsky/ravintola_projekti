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

<div id="varaukset" class="text-3xl sm:text-4xl font-extrabold dark:text-slate-200 py-4 justify-center text-center">
    <h2>Varaa pöytä</h2>
<div class="text-sm dark:text-slate-400 font-semibold justify-center text-center">
<br>

<p class="mt-2 text-lg dark:text-slate-400">Varaa pöytä helposti 1-8 hengelle Ravintola Kosmosta käyttämällä alla olevaa varausjärjestelmää. <br><br>
Suuremmille ryhmille tai jos sinulla on kysyttävää tai erikoistoiveita, ole yhteydessä suoraan myyntiimme: <br>
myynti@ravintolakosmo.fi tai 050 609 5010.<br><br>
Varmista ajankohtainen varaustilanne soittamalla, mikäli haluamasi ajankohta näyttää täyteenvaratulta – <br>kaikki pöydät eivät ole myynnissä varausjärjestelmän kautta.<br><br>

Valitse varauskalenterista päivämäärä ja kellonaika, jonka jälkeen "Continue" näppäintä painamalla sivu vie sinut eteenpäin lisäämään yhteystietosi.</p>
<br><br>
<p class="text-3xl sm:text-4xl font-extrabold dark:text-slate-200">
    Varauskalenteri
</p>
<br>

</ol>
</p>
    <form action="process_reservation.php" method="POST">
        <label for="reservation_date">Valitse päivämäärä:</label>
        <input type="date" id="reservation_date" name="reservation_date" required class="mt-1 p-2 border border-gray-300 bg-slate-900 hover:bg-slate-700 rounded-md"><br><br>
        <label for="reservation_time">Valitse kellonaika:</label>
        <select id="reservation_time" name="reservation_time" required class="mt-1 p-2 border border-gray-300 bg-slate-900 hover:bg-slate-700 rounded-md">>
            <option value="">Valitse kellonaika
            <option value="10:30">10:30</option>
            <option value="11:00">11:00</option>
            <option value="11:30">11:30</option>
            <option value="12:00">12:00</option>
            <option value="12:30">12:30</option>
            <option value="13:00">13:00</option>
            <option value="13:30">13:30</option>
            <option value="14:00">14:00</option>
            <option value="14:00">14:30</option>
            <option value="15:00">15:00</option>
            <option value="15:30">15:30</option>
            <option value="16:00">16:00</option>
            <option value="16:00">16:30</option>
            <option value="17:00">17:00</option>
            <option value="17:30">17:30</option>
            <option value="18:00">18:00</option>
            <option value="18:30">18:30</option>
            <option value="19:00">19:00</option>
            <option value="19:30">19:30</option>
            <option value="20:00">20:00</option>
            <option value="20:30">20:30</option>
            <option value="21:00">21:00</option>
            <option value="21:30">21:30</option></select><br><br>
        <button type="submit" name="submit" class="relative bg-slate-900 hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-400 
        focus:ring-offset-2 text-sm text-white font-semibold h-12 px-6 rounded-lg dark:bg-slate-700 dark:hover:bg-slate-600">
            Continue
        </button>
    </form>
</div>
</div>

<footer class="text-sm leading-6 mt-16 mb-16">
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