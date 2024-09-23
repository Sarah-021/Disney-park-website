<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/styles.css">
    @yield("css")
    <link rel="icon" type="image/x-icon" href="/logo.png">
    <title>Accueil - Parcs d'attraction</title>
</head>

<body>
    <header>
        <h1><a href="/">Parcs d'attraction</a></h1>
        <h2>
            <link rel="icon" type="image/x-icon" href="/logo.png">
        </h2>
        <nav>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/search">Recherche</a></li>
                <li><a href="/destination">Annuaire</a></li>
                <li><a href="/rides">Attractions</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield ("content")
    </main>
    <footer>
        <p>&copy; 2024 Qiraouani Boucetta Sarah | WEBR</p>
    </footer>
</body>

</html>