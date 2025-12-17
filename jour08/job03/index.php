<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 03 - Footer avec Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="bg-blue-600 text-white p-4">
        <nav class="flex justify-between items-center max-w-4xl mx-auto">
            <h1 class="text-xl font-bold">Mon Site</h1>
            <ul class="flex space-x-4">
                <li><a href="index.php" class="hover:text-blue-200">Accueil</a></li>
                <li><a href="index.php" class="hover:text-blue-200">Inscription</a></li>
                <li><a href="index.php" class="hover:text-blue-200">Connexion</a></li>
                <li><a href="index.php" class="hover:text-blue-200">Rechercher</a></li>
            </ul>
        </nav>
    </header>

    <section class="p-4">
        <h1 class="text-2xl font-bold mb-4">Création de compte</h1>
        <form action="#" method="post" class="max-w-md mx-auto">
            <fieldset class="mb-4">
                <legend class="font-semibold">Civilité</legend>
                <div class="flex space-x-4">
                    <div>
                        <input type="radio" id="monsieur" name="civilite" value="monsieur" class="mr-2">
                        <label for="monsieur">Monsieur</label>
                    </div>
                    <div>
                        <input type="radio" id="madame" name="civilite" value="madame" class="mr-2">
                        <label for="madame">Madame</label>
                    </div>
                </div>
            </fieldset>

            <div class="mb-4">
                <label for="prenom" class="block">Prénom</label>
                <input type="text" id="prenom" name="prenom" required class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <label for="nom" class="block">Nom</label>
                <input type="text" id="nom" name="nom" required class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <label for="adresse" class="block">Adresse</label>
                <input type="text" id="adresse" name="adresse" required class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <label for="email" class="block">Adresse email</label>
                <input type="email" id="email" name="email" required class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <label for="password" class="block">Mot de passe</label>
                <input type="password" id="password" name="password" required class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <label for="confirm_password" class="block">Confirmer le mot de passe</label>
                <input type="password" id="confirm_password" name="confirm_password" required class="w-full p-2 border border-gray-300 rounded">
            </div>

            <fieldset class="mb-4">
                <legend class="font-semibold">Passions</legend>
                <div class="flex flex-wrap space-x-4">
                    <div>
                        <input type="checkbox" id="informatique" name="passions[]" value="informatique" class="mr-2">
                        <label for="informatique">Informatique</label>
                    </div>
                    <div>
                        <input type="checkbox" id="voyages" name="passions[]" value="voyages" class="mr-2">
                        <label for="voyages">Voyages</label>
                    </div>
                    <div>
                        <input type="checkbox" id="sport" name="passions[]" value="sport" class="mr-2">
                        <label for="sport">Sport</label>
                    </div>
                    <div>
                        <input type="checkbox" id="lecture" name="passions[]" value="lecture" class="mr-2">
                        <label for="lecture">Lecture</label>
                    </div>
                </div>
            </fieldset>

            <button type="submit" class="bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Valider</button>
        </form>
    </section>

    <footer class="bg-gray-800 text-white p-4 mt-8">
        <div class="max-w-4xl mx-auto">
            <ul class="flex justify-center space-x-6">
                <li><a href="index.php" class="hover:text-gray-300 transition duration-300">Accueil</a></li>
                <li><a href="index.php" class="hover:text-gray-300 transition duration-300">Inscription</a></li>
                <li><a href="index.php" class="hover:text-gray-300 transition duration-300">Connexion</a></li>
                <li><a href="index.php" class="hover:text-gray-300 transition duration-300">Rechercher</a></li>
            </ul>
            <p class="text-center mt-4 text-gray-400">&copy; 2025 Mon Site. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>