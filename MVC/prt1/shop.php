<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startpagina</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000000;
            color: #ffffff;
        }

        header {
            background-color: #000000;
            color: rgb(194, 194, 194);
            padding: 1rem 2rem;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #c6c6c6;
            padding: 0.5rem;
        }

        nav a {
            color: rgb(0, 0, 0);
            text-decoration: none;
            margin: 0 1rem;
            font-size: 1rem;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #ffd700;
        }

        main {
            padding: 2rem;
            text-align: center;
        }

        footer {
            background-color: #bcbcbc;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 1rem 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .welcome {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .cta {
            margin-top: 2rem;
        }

        .cta button {
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            color: rgb(0, 0, 0);
            background-color: #bebebe;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .cta button:hover {
            background-color: #b2b2b2;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welkom op de Startpagina</h1>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#">Over Ons</a>
        <a href="#">Diensten</a>
        <a href="#">Contact</a>
        <a href="index.php">Log Uit</a>
    </nav>
    <main>
        <p class="welcome">Je bent succesvol ingelogd. Kies een optie uit het menu om verder te gaan.</p>
        <div class="cta">
            <button onclick="alert('Bedankt voor je bezoek!')">Klik hier</button>
        </div>
    </main>
    <footer>
        &copy; 2025 Mijn Website. Alle rechten voorbehouden.
    </footer>
</body>
</html>
