<?php
session_start();

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="static/css/style.css" />
  <title>home page</title>
</head>

<body>
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button"
            class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
          
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
      
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex flex-shrink-0 items-center">
            <img width="40" height="40" src="https://img.icons8.com/ios/50/ffd500/london-cab.png" alt="logo" />
          </div>
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Le
                mie prenotazioni</a>
              <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Viaggi
                disponibili</a>
              <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Zona
                recensioni</a>
              <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Guidi
                tu?</a>

              <a href="static/pages/policy/newsletter.html"
                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Newsletter</a>

              <a href="static/pages/policy/chiSiamo.html"
                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Chi
                siamo?</a>
            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <!-- Profile dropdown -->
          <div class="relative ml-3">
            <div>
              <button type="button"
                class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Open user menu</span>
                <img width="24" height="24" src="https://img.icons8.com/forma-light-filled/24/FFFFFF/user.png"
                  alt="user" />
              </button>
            </div>

            <div id="user-menu"
              class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
              role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <!-- Active: "bg-gray-100", Not Active: "" -->

              <?php

              if (isset($_SESSION["username"])) {
                echo "<a
                  href='static/pages/accesso/logout.php'
                  class='block px-4 py-2 text-sm text-gray-700'
                  role='menuitem'
                  tabindex='-1'
                  id='user-menu-item-0'
                  >Sign out</a";


              } else {


                echo "
                
                <a
                href='static/pages/accesso/signIn.php'
                class='block px-4 py-2 text-sm text-gray-700'
                role='menuitem'
                tabindex='-1'
                id='user-menu-item-0'
                >Sign in</a
              >
              <a
                href='static/pages/accesso/signUp.php'
                class='block px-4 py-2 text-sm text-gray-700'
                role='menuitem'
                tabindex='-1'
                id='user-menu-item-1'
                >Sign up</a
              >
                
                ";

              }
              ?>


            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="flex items-center justify-center bg-[url('/static/img/background.jpg')] bg-cover bg-center max-w-full h-screen">
      <div class="bg-[#00509D] w-7/12 h-2/3 rounded-2xl opacity-50">
        <form action="visualizzaViaggi.php" method="post">
          <div id="dati-viaggio">
            <h2 class="text-white text-3xl">il tuo viaggio</h2>
            <input class="block w-80 h-10 p-2 m-2 rounded-md" type="text" name="partenza" id="partenza"
              placeholder="città di partenza" />

            <input class="block w-80 h-10 p-2 m-2 rounded-md" type="text" name="arrivo" id="arrivo"
              placeholder="città di arrivo" />

            <input class="block w-80 h-10 p-2 m-2 rounded-md" type="date" name="data" id="data" />

            <input class="block w-40 h-10 p-2 m-2 rounded-md bg-white" type="submit" value="cerca" />
          </div>
        </form>
      </div>
    </div>

    <script>
      document
        .querySelector("#user-menu-button")
        .addEventListener("click", function () {
          let userMenu = document.querySelector("#user-menu");
          userMenu.classList.toggle("hidden");
        });
    </script>
</body>

</html>