<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 04 - Formulaire stylisé avec Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white p-4 shadow-lg">
        <nav class="flex justify-between items-center max-w-4xl mx-auto">
            <h1 class="text-xl font-bold">Mon Site</h1>
            <ul class="flex space-x-4">
                <li><a href="index.php" class="hover:text-blue-200 transition">Accueil</a></li>
                <li><a href="index.php" class="hover:text-blue-200 transition">Inscription</a></li>
                <li><a href="index.php" class="hover:text-blue-200 transition">Connexion</a></li>
                <li><a href="index.php" class="hover:text-blue-200 transition">Rechercher</a></li>
            </ul>
        </nav>
    </header>

    <section class="p-8">
        <h1 class="text-3xl font-bold text-center mb-8 text-gray-800">Création de compte</h1>
        <form action="#" method="post" class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-xl">
            <fieldset class="mb-6">
                <legend class="text-lg font-semibold mb-4 text-gray-700">Civilité</legend>
                <div class="flex space-x-6">
                    <div class="flex items-center">
                        <input type="radio" id="monsieur" name="civilite" value="monsieur" class="mr-2 text-blue-600 focus:ring-blue-500">
                        <label for="monsieur" class="text-gray-700">Monsieur</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" id="madame" name="civilite" value="madame" class="mr-2 text-blue-600 focus:ring-blue-500">
                        <label for="madame" class="text-gray-700">Madame</label>
                    </div>
                </div>
            </fieldset>

            <div class="mb-6 relative">
                <label for="prenom" class="block text-gray-700 font-medium mb-2">Prénom</label>
                <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2 focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-200">
                    <i class="fas fa-user text-gray-400 mr-2"></i>
                    <input type="text" id="prenom" name="prenom" required class="w-full outline-none">
                </div>
            </div>

            <div class="mb-6 relative">
                <label for="nom" class="block text-gray-700 font-medium mb-2">Nom</label>
                <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2 focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-200">
                    <i class="fas fa-user-tag text-gray-400 mr-2"></i>
                    <input type="text" id="nom" name="nom" required class="w-full outline-none">
                </div>
            </div>

            <div class="mb-6 relative">
                <label for="adresse" class="block text-gray-700 font-medium mb-2">Adresse</label>
                <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2 focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-200">
                    <i class="fas fa-map-marker-alt text-gray-400 mr-2"></i>
                    <input type="text" id="adresse" name="adresse" required class="w-full outline-none">
                </div>
            </div>

            <div class="mb-6 relative">
                <label for="email" class="block text-gray-700 font-medium mb-2">Adresse email</label>
                <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2 focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-200">
                    <i class="fas fa-envelope text-gray-400 mr-2"></i>
                    <input type="email" id="email" name="email" required class="w-full outline-none">
                </div>
            </div>

            <div class="mb-6 relative">
                <label for="password" class="block text-gray-700 font-medium mb-2">Mot de passe</label>
                <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2 focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-200">
                    <i class="fas fa-lock text-gray-400 mr-2"></i>
                    <input type="password" id="password" name="password" required class="w-full outline-none">
                </div>
            </div>

            <div class="mb-6 relative">
                <label for="confirm_password" class="block text-gray-700 font-medium mb-2">Confirmer le mot de passe</label>
                <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2 focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-200">
                    <i class="fas fa-lock text-gray-400 mr-2"></i>
                    <input type="password" id="confirm_password" name="confirm_password" required class="w-full outline-none">
                </div>
            </div>

            <fieldset class="mb-6">
                <legend class="text-lg font-semibold mb-4 text-gray-700">Passions</legend>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center">
                        <input type="checkbox" id="informatique" name="passions[]" value="informatique" class="mr-2 text-blue-600 focus:ring-blue-500">
                        <label for="informatique" class="text-gray-700">Informatique</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="voyages" name="passions[]" value="voyages" class="mr-2 text-blue-600 focus:ring-blue-500">
                        <label for="voyages" class="text-gray-700">Voyages</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="sport" name="passions[]" value="sport" class="mr-2 text-blue-600 focus:ring-blue-500">
                        <label for="sport" class="text-gray-700">Sport</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="lecture" name="passions[]" value="lecture" class="mr-2 text-blue-600 focus:ring-blue-500">
                        <label for="lecture" class="text-gray-700">Lecture</label>
                    </div>
                </div>
            </fieldset>

            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition shadow-lg">Valider</button>
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