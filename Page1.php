<!doctype html>
<html lang="fr-BE">
<head>
    <meta charset="utf-8">
<title>Travail fin d'année</title>
<link rel="stylesheet" type="text/css" href="style1.css">
<body>
<header>
    <nav class="navbar navbar-expand-md bg-primary mb-2" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="Page2.php"> Aller à la page de contenu</a>
            <a class="navbar-brand" href="Page-de-contact.php"> Aller à la page de contact</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav-underline">
                    <li class="nav-item">
                        <a class="nav-link" href="Page2.php">Page de contenue</a>
                    </li>
                    <li class="nav-item">
                        <a href="Page-de-contact.php" class="nav-link">Page de contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
<h1>Le top 10 des<em> meilleurs <em>films 2023:</h1>

    <main>
        <form action="http://zamboyle.synology.me:2727/forms/exercices/exercice10-1.php" method="get">
            <label for="nom">Nom : </label><input type="text" name="nom" id="nom" required>
            <br>
            <br>
            <label for="prenom">Prènom : </label><input type="text" name="prenom" id="prenom" required>
            <br>
            <br>
            <label for="email">Email : </label><input type="email" name="email" id="email" required>
            <br>
            <br>
            <label for="age">Âge : </label>
            <input type="number" id="age" name="age">
            <br>
            <br>
            <label>Genre : </label>
            <br>
            <input type="radio" id="masculin" name="userGender" checked value="masculin"><label for="masculin"> Homme
                <br>
                <input type="radio" id="feminin" name="userGender" value="feminin"><label for="feminin">Femme</label><br>
                <br>
                <label for="commentaires">Commentaires :</label><br>
                <textarea id="commentaires" name="commentaires"></textarea>
                <br>
                <br>
                <label for="userCountry">Choix du pays:</label><br>
                <select id="userCountry" name="userCountry">
                    <option value="Belgique" selected>Belgique</option>
                    <option value="France">France</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Maroc">Maroc</option>
                </select><br>
                <br>
                <input type="submit">
        </form>
    </main>





</main>
<footer>

    <p>Site créer par KB</p>

</footer>
</body>
</html>