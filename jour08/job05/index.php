<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linus Torvalds - Le Génie derrière Linux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up { animation: fadeInUp 0.6s ease-out; }
        
        /* Effets Parallax */
        .parallax-bg {
            will-change: transform;
        }
        
        .parallax-element {
            will-change: transform;
        }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-black text-white min-h-screen">
    <!-- Header -->
    <header class="bg-gray-900/90 backdrop-blur-md border-b border-gray-700 sticky top-0 z-50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/01/LinuxCon_Europe_Linus_Torvalds_03_%28cropped%29.jpg/220px-LinuxCon_Europe_Linus_Torvalds_03_%28cropped%29.jpg" alt="Linus Torvalds" class="w-12 h-12 rounded-full mr-3 border-2 border-gray-400 grayscale">
                    <h1 class="text-2xl font-bold text-white">Linus Torvalds</h1>
                </div>
                <div class="hidden md:flex md:space-x-8">
                    <a href="#hero" class="hover:text-gray-300 px-3 py-2 text-sm font-medium transition-colors">Accueil</a>
                    <a href="#biographie" class="hover:text-gray-300 px-3 py-2 text-sm font-medium transition-colors">Biographie</a>
                    <a href="#realisations" class="hover:text-gray-300 px-3 py-2 text-sm font-medium transition-colors">Réalisations</a>
                    <a href="#citations" class="hover:text-gray-300 px-3 py-2 text-sm font-medium transition-colors">Citations</a>
                    <a href="#competences" class="hover:text-gray-300 px-3 py-2 text-sm font-medium transition-colors">Compétences</a>
                    <a href="#exemples-noyau" class="hover:text-gray-300 px-3 py-2 text-sm font-medium transition-colors">Code Linux</a>
                    <a href="#exemples-git" class="hover:text-gray-300 px-3 py-2 text-sm font-medium transition-colors">Code Git</a>
                </div>
                <div class="md:hidden">
                    <button class="text-white hover:text-gray-300">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="relative py-32 overflow-hidden bg-gray-900">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.03"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] parallax-bg" data-speed="0.3"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="animate-fade-in-up">
                <div class="w-40 h-40 bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-8 shadow-2xl parallax-element" data-speed="0.2">
                    <i class="fas fa-user text-8xl text-gray-300"></i>
                </div>
                <h1 class="text-6xl md:text-8xl font-extrabold mb-6 text-white parallax-element" data-speed="0.1">
                    Linus Torvalds
                </h1>
                <p class="text-2xl md:text-3xl mb-8 text-gray-400 font-light">
                    Le Visionnaire derrière Linux
                </p>
                <p class="text-lg md:text-xl max-w-4xl mx-auto text-gray-500 leading-relaxed mb-12">
                    Programmeur finlandais légendaire, créateur du noyau Linux en 1991. Son génie a révolutionné l'informatique open source et façonné le monde numérique d'aujourd'hui.
                </p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="#biographie" class="bg-white text-black px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-200 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Découvrir son Histoire
                    </a>
                    <a href="#realisations" class="border-2 border-gray-600 text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-800 transition-all duration-300">
                        Ses Réalisations
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Biographie Section -->
    <section id="biographie" class="py-24 bg-gray-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5 parallax-bg" data-speed="0.1" style="background-image: radial-gradient(circle at 20% 80%, rgba(255,255,255,0.1) 0%, transparent 50%), radial-gradient(circle at 80% 20%, rgba(255,255,255,0.05) 0%, transparent 50%);"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white parallax-element" data-speed="0.05">Biographie</h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">L'histoire d'un génie qui a changé le monde de l'informatique</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="space-y-8">
                    <div class="bg-gray-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-700 animate-fade-in-up">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gray-600 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-birthday-cake text-white"></i>
                            </div>
                            <h3 class="text-2xl font-semibold text-white">Naissance et Origines</h3>
                        </div>
                        <p class="text-gray-300 leading-relaxed">
                            Né le 28 décembre 1969 à Helsinki, en Finlande, Linus Benedict Torvalds grandit dans une famille intellectuelle. Son grand-père, un statisticien, lui offre son premier ordinateur à l'âge de 11 ans, allumant la flamme de sa passion pour la programmation.
                        </p>
                    </div>
                    <div class="bg-gray-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-700 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gray-600 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-graduation-cap text-white"></i>
                            </div>
                            <h3 class="text-2xl font-semibold text-white">Études et Débuts</h3>
                        </div>
                        <p class="text-gray-300 leading-relaxed">
                            Étudiant en informatique à l'Université d'Helsinki, Linus commence à explorer les systèmes d'exploitation. Frustré par les limitations des systèmes existants, il décide de créer le sien, donnant naissance à Linux en 1991.
                        </p>
                    </div>
                </div>
                <div class="space-y-8">
                    <div class="bg-gray-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-700 animate-fade-in-up" style="animation-delay: 0.4s;">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gray-600 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-code text-white"></i>
                            </div>
                            <h3 class="text-2xl font-semibold text-white">La Création de Linux</h3>
                        </div>
                        <p class="text-gray-300 leading-relaxed">
                            Le 25 août 1991, Linus poste un message historique sur Usenet : "I'm doing a (free) operating system (just a hobby, won't be big and professional like gnu) for 386(486) AT clones." Ce "hobby" deviendra Linux, le système d'exploitation le plus utilisé au monde.
                        </p>
                    </div>
                    <div class="bg-gray-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-700 animate-fade-in-up" style="animation-delay: 0.6s;">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gray-600 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-trophy text-white"></i>
                            </div>
                            <h3 class="text-2xl font-semibold text-white">Reconnaissance Mondiale</h3>
                        </div>
                        <p class="text-gray-300 leading-relaxed">
                            Aujourd'hui, Linus est récompensé par d'innombrables prix, dont le Millennium Technology Prize en 2012. Il continue à diriger le développement de Linux depuis la Linux Foundation, restant fidèle à ses principes open source.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Réalisations Section -->
    <section id="realisations" class="py-24 bg-black relative overflow-hidden">
        <div class="absolute inset-0 opacity-3 parallax-bg" data-speed="0.2" style="background-image: linear-gradient(45deg, rgba(255,255,255,0.02) 25%, transparent 25%), linear-gradient(-45deg, rgba(255,255,255,0.02) 25%, transparent 25%), linear-gradient(45deg, transparent 75%, rgba(255,255,255,0.02) 75%), linear-gradient(-45deg, transparent 75%, rgba(255,255,255,0.02) 75%); background-size: 20px 20px;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white parallax-element" data-speed="0.08">Réalisations Majeures</h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">L'héritage d'un visionnaire qui a transformé l'informatique</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-800/50 p-8 rounded-2xl border border-gray-700 hover:border-gray-600 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl animate-fade-in-up">
                    <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <i class="fas fa-linux text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-white">Noyau Linux</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Créé en 1991, le noyau Linux est aujourd'hui au cœur de millions de systèmes, des smartphones aux superordinateurs.
                    </p>
                    <div class="text-gray-400 font-semibold">Impact : Révolutionnaire</div>
                </div>
                <div class="bg-gray-800/50 p-8 rounded-2xl border border-gray-700 hover:border-gray-600 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <i class="fas fa-code-branch text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-white">Git</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Développé en 2005 pour gérer le code de Linux, Git est devenu l'outil de contrôle de version le plus populaire au monde.
                    </p>
                    <div class="text-gray-400 font-semibold">Impact : Essentiel</div>
                </div>
                <div class="bg-gray-800/50 p-8 rounded-2xl border border-gray-700 hover:border-gray-600 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl animate-fade-in-up" style="animation-delay: 0.4s;">
                    <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <i class="fas fa-globe text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-white">Open Source</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Champion de l'open source, Linus a popularisé le modèle de développement collaboratif qui a changé l'industrie du logiciel.
                    </p>
                    <div class="text-gray-400 font-semibold">Impact : Transformatif</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Citations Section -->
    <section id="citations" class="py-24 bg-gray-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-2 parallax-bg" data-speed="0.15" style="background-image: repeating-linear-gradient(90deg, rgba(255,255,255,0.01), rgba(255,255,255,0.01) 1px, transparent 1px, transparent 50px);"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white parallax-element" data-speed="0.06">Citations Légendaires</h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">La sagesse d'un maître programmeur</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-800/50 p-8 rounded-2xl border border-gray-700 hover:border-gray-600 transition-all duration-300 animate-fade-in-up">
                    <div class="text-gray-400 text-6xl mb-4 opacity-50">"</div>
                    <blockquote class="text-xl italic text-white mb-6 leading-relaxed">
                        Les paroles sont faciles. Montre-moi le code.
                    </blockquote>
                    <cite class="text-gray-400 font-semibold text-lg">- Linus Torvalds</cite>
                </div>
                <div class="bg-gray-800/50 p-8 rounded-2xl border border-gray-700 hover:border-gray-600 transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="text-gray-400 text-6xl mb-4 opacity-50">"</div>
                    <blockquote class="text-xl italic text-white mb-6 leading-relaxed">
                        Le logiciel est comme le sexe : c'est mieux quand c'est gratuit.
                    </blockquote>
                    <cite class="text-gray-400 font-semibold text-lg">- Linus Torvalds</cite>
                </div>
                <div class="bg-gray-800/50 p-8 rounded-2xl border border-gray-700 hover:border-gray-600 transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.4s;">
                    <div class="text-gray-400 text-6xl mb-4 opacity-50">"</div>
                    <blockquote class="text-xl italic text-white mb-6 leading-relaxed">
                        L'intelligence est la capacité d'éviter de travailler, tout en accomplissant le travail.
                    </blockquote>
                    <cite class="text-gray-400 font-semibold text-lg">- Linus Torvalds</cite>
                </div>
                <div class="bg-gray-800/50 p-8 rounded-2xl border border-gray-700 hover:border-gray-600 transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.6s;">
                    <div class="text-gray-400 text-6xl mb-4 opacity-50">"</div>
                    <blockquote class="text-xl italic text-white mb-6 leading-relaxed">
                        Les mauvais programmeurs s'inquiètent du code. Les bons programmeurs s'inquiètent des structures de données et de leurs relations.
                    </blockquote>
                    <cite class="text-gray-400 font-semibold text-lg">- Linus Torvalds</cite>
                </div>
                <div class="bg-gray-800/50 p-8 rounded-2xl border border-gray-700 hover:border-gray-600 transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.8s;">
                    <div class="text-gray-400 text-6xl mb-4 opacity-50">"</div>
                    <blockquote class="text-xl italic text-white mb-6 leading-relaxed">
                        Seuls les mauviettes utilisent des sauvegardes sur bande : les vrais hommes uploadent leurs trucs importants sur FTP et laissent le reste du monde les mirroirer.
                    </blockquote>
                    <cite class="text-gray-400 font-semibold text-lg">- Linus Torvalds</cite>
                </div>
                <div class="bg-gray-800/50 p-8 rounded-2xl border border-gray-700 hover:border-gray-600 transition-all duration-300 animate-fade-in-up" style="animation-delay: 1s;">
                    <div class="text-gray-400 text-6xl mb-4 opacity-50">"</div>
                    <blockquote class="text-xl italic text-white mb-6 leading-relaxed">
                        Je fais un système d'exploitation (gratuit) (juste un hobby, ne sera pas grand et professionnel comme GNU) pour clones AT 386(486).
                    </blockquote>
                    <cite class="text-gray-400 font-semibold text-lg">- Linus Torvalds (1991)</cite>
                </div>
                <div class="bg-gray-800/50 p-8 rounded-2xl border border-gray-700 hover:border-gray-600 transition-all duration-300 animate-fade-in-up" style="animation-delay: 1.2s;">
                    <div class="text-gray-400 text-6xl mb-4 opacity-50">"</div>
                    <blockquote class="text-xl italic text-white mb-6 leading-relaxed">
                        Avec suffisamment d'yeux, tous les bugs sont superficiels.
                    </blockquote>
                    <cite class="text-gray-400 font-semibold text-lg">- Linus Torvalds</cite>
                </div>
                <div class="bg-gray-800/50 p-8 rounded-2xl border border-gray-700 hover:border-gray-600 transition-all duration-300 animate-fade-in-up" style="animation-delay: 1.4s;">
                    <div class="text-gray-400 text-6xl mb-4 opacity-50">"</div>
                    <blockquote class="text-xl italic text-white mb-6 leading-relaxed">
                        La philosophie Linux est 'Rire au visage du danger'. Oups. Fausse. 'Fais-le toi-même'. Oui, c'est ça.
                    </blockquote>
                    <cite class="text-gray-400 font-semibold text-lg">- Linus Torvalds</cite>
                </div>
                <div class="bg-gray-800/50 p-8 rounded-2xl border border-gray-700 hover:border-gray-600 transition-all duration-300 animate-fade-in-up" style="animation-delay: 1.6s;">
                    <div class="text-gray-400 text-6xl mb-4 opacity-50">"</div>
                    <blockquote class="text-xl italic text-white mb-6 leading-relaxed">
                        Je ne fais pas de déclarations de vision.
                    </blockquote>
                    <cite class="text-gray-400 font-semibold text-lg">- Linus Torvalds</cite>
                </div>
            </div>
        </div>
    </section>

    <!-- Compétences de Programmation -->
    <section id="competences" class="py-24 bg-black relative overflow-hidden">
        <div class="absolute inset-0 opacity-3 parallax-bg" data-speed="0.1" style="background-image: radial-gradient(circle at 50% 50%, rgba(255,255,255,0.05) 0%, transparent 50%);"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white parallax-element" data-speed="0.05">Compétences en Programmation</h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">L'expertise technique d'un maître programmeur</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-800/50 p-8 rounded-2xl border border-gray-700 hover:border-gray-600 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl animate-fade-in-up">
                    <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <i class="fas fa-code text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-white">Langage C</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Maître absolu du C, langage dans lequel il a créé le noyau Linux. Expert en programmation système de bas niveau.
                    </p>
                    <div class="text-gray-400 font-semibold">Maîtrise : Expert</div>
                </div>
                <div class="bg-gray-800/50 p-8 rounded-2xl border border-gray-700 hover:border-gray-600 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <i class="fab fa-linux text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-white">Assembleur</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Programmation en assembleur x86 pour optimiser les performances critiques du noyau Linux.
                    </p>
                    <div class="text-gray-400 font-semibold">Maîtrise : Avancée</div>
                </div>
                <div class="bg-gray-800/50 p-8 rounded-2xl border border-gray-700 hover:border-gray-600 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl animate-fade-in-up" style="animation-delay: 0.4s;">
                    <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <i class="fas fa-terminal text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-white">Shell Scripting</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Bash et autres shells Unix pour l'automatisation et les scripts de build du noyau Linux.
                    </p>
                    <div class="text-gray-400 font-semibold">Maîtrise : Expert</div>
                </div>
                <div class="bg-gray-800/50 p-8 rounded-2xl border border-gray-700 hover:border-gray-600 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl animate-fade-in-up" style="animation-delay: 0.6s;">
                    <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <i class="fab fa-git-alt text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-white">C++</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Utilisé pour certains composants de Git et d'autres projets open source.
                    </p>
                    <div class="text-gray-400 font-semibold">Maîtrise : Intermédiaire</div>
                </div>
                <div class="bg-gray-800/50 p-8 rounded-2xl border border-gray-700 hover:border-gray-600 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl animate-fade-in-up" style="animation-delay: 0.8s;">
                    <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <i class="fab fa-python text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-white">Perl & Python</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Scripts utilitaires et outils d'automatisation. Perl largement utilisé dans les premiers scripts Git.
                    </p>
                    <div class="text-gray-400 font-semibold">Maîtrise : Avancée</div>
                </div>
                <div class="bg-gray-800/50 p-8 rounded-2xl border border-gray-700 hover:border-gray-600 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl animate-fade-in-up" style="animation-delay: 1s;">
                    <div class="w-16 h-16 bg-gray-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <i class="fas fa-cogs text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-white">Systèmes d'Exploitation</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Expert en architecture de systèmes d'exploitation, gestion de la mémoire, scheduling, et optimisation des performances.
                    </p>
                    <div class="text-gray-400 font-semibold">Maîtrise : Maître</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Exemples du Noyau Linux -->
    <section id="exemples-noyau" class="py-24 bg-gray-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-2 parallax-bg" data-speed="0.08" style="background-image: repeating-linear-gradient(45deg, rgba(255,255,255,0.01), rgba(255,255,255,0.01) 2px, transparent 2px, transparent 20px);"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white parallax-element" data-speed="0.04">Exemples du Noyau Linux</h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">Plongez dans le code source du système d'exploitation le plus utilisé au monde</p>
            </div>

            <div class="space-y-12">
                <!-- Exemple 1: Hello World Module -->
                <div class="bg-gray-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-700 animate-fade-in-up">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gray-600 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-code text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-semibold text-white">Module "Hello World"</h3>
                            <p class="text-gray-400">Le célèbre exemple d'introduction aux modules du noyau</p>
                        </div>
                    </div>
                    <div class="bg-black rounded-lg p-6 font-mono text-sm text-green-400 overflow-x-auto">
                        <pre><code>/*
 * hello.c - Le module "Hello World" classique
 */
#include &lt;linux/module.h&gt;
#include &lt;linux/kernel.h&gt;

int init_module(void)
{
    printk(KERN_INFO "Hello, world!\n");
    return 0;
}

void cleanup_module(void)
{
    printk(KERN_INFO "Goodbye, world!\n");
}

MODULE_LICENSE("GPL");
MODULE_AUTHOR("Linus Torvalds");
MODULE_DESCRIPTION("A simple Hello World kernel module");</code></pre>
                    </div>
                    <p class="text-gray-300 mt-4 leading-relaxed">
                        Ce module simple démontre la structure de base d'un module du noyau Linux. La fonction <code>printk</code> est l'équivalent du <code>printf</code> dans l'espace noyau.
                    </p>
                </div>

                <!-- Exemple 2: Gestion des processus -->
                <div class="bg-gray-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-700 animate-fade-in-up" style="animation-delay: 0.3s;">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gray-600 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-cogs text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-semibold text-white">Gestion des Processus</h3>
                            <p class="text-gray-400">Extrait du scheduler Linux (include/linux/sched.h)</p>
                        </div>
                    </div>
                    <div class="bg-black rounded-lg p-6 font-mono text-sm text-green-400 overflow-x-auto">
                        <pre><code>struct task_struct {
    volatile long state;    /* -1 unrunnable, 0 runnable, &gt;0 stopped */
    void *stack;
    atomic_t usage;
    unsigned int flags;     /* per process flags */
    unsigned int ptrace;

    int prio, static_prio, normal_prio;
    unsigned int rt_priority;
    const struct sched_class *sched_class;

    struct sched_entity se;
    struct sched_rt_entity rt;

#ifdef CONFIG_CGROUPS
    struct task_group *sched_task_group;
#endif
    // ... nombreux autres champs
};</code></pre>
                    </div>
                    <p class="text-gray-300 mt-4 leading-relaxed">
                        La structure <code>task_struct</code> représente un processus dans le noyau Linux. Elle contient toutes les informations nécessaires à la gestion d'un processus, incluant son état, sa priorité et ses ressources.
                    </p>
                </div>

                <!-- Exemple 3: Gestion mémoire -->
                <div class="bg-gray-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-700 animate-fade-in-up" style="animation-delay: 0.6s;">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gray-600 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-memory text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-semibold text-white">Gestion de la Mémoire</h3>
                            <p class="text-gray-400">Allocation mémoire dans le noyau (mm/slab.c)</p>
                        </div>
                    </div>
                    <div class="bg-black rounded-lg p-6 font-mono text-sm text-green-400 overflow-x-auto">
                        <pre><code>/**
 * kmalloc - allocate memory
 * @size: how many bytes of memory are required
 * @flags: the type of memory to allocate
 *
 * kmalloc is the normal method of allocating memory
 * for objects smaller than page size in the kernel.
 */
void *kmalloc(size_t size, gfp_t flags)
{
    void *ret;

    if (__builtin_constant_p(size)) {
        if (size &gt; KMALLOC_MAX_CACHE_SIZE)
            return kmalloc_large(size, flags);
        ret = __kmalloc(size, flags);
    } else {
        ret = __kmalloc(size, flags);
    }

    return ret;
}</code></pre>
                    </div>
                    <p class="text-gray-300 mt-4 leading-relaxed">
                        La fonction <code>kmalloc</code> est l'équivalent du <code>malloc</code> dans l'espace noyau. Elle gère l'allocation de mémoire pour les objets de petite taille avec différents drapeaux de priorité.
                    </p>
                </div>

                <!-- Exemple 4: Drivers -->
                <div class="bg-gray-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-700 animate-fade-in-up" style="animation-delay: 0.9s;">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gray-600 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-hdd text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-semibold text-white">Pilotes de Périphériques</h3>
                            <p class="text-gray-400">Structure de base d'un pilote de périphérique</p>
                        </div>
                    </div>
                    <div class="bg-black rounded-lg p-6 font-mono text-sm text-green-400 overflow-x-auto">
                        <pre><code>static struct file_operations my_driver_fops = {
    .owner = THIS_MODULE,
    .open = my_driver_open,
    .release = my_driver_release,
    .read = my_driver_read,
    .write = my_driver_write,
    .ioctl = my_driver_ioctl,
};

static int __init my_driver_init(void)
{
    int ret;

    ret = register_chrdev(MAJOR_NUM, DEVICE_NAME, &my_driver_fops);
    if (ret &lt; 0) {
        printk(KERN_ALERT "Failed to register device\n");
        return ret;
    }

    return 0;
}

module_init(my_driver_init);
module_exit(my_driver_exit);</code></pre>
                    </div>
                    <p class="text-gray-300 mt-4 leading-relaxed">
                        Exemple de structure d'un pilote de périphérique caractère. Les <code>file_operations</code> définissent les fonctions que le pilote implémente pour interagir avec les applications utilisateur.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Code Source de Git -->
    <section id="exemples-git" class="py-24 bg-black relative overflow-hidden">
        <div class="absolute inset-0 opacity-2 parallax-bg" data-speed="0.08" style="background-image: repeating-linear-gradient(45deg, rgba(255,255,255,0.01), rgba(255,255,255,0.01) 2px, transparent 2px, transparent 20px);"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white parallax-element" data-speed="0.04">Code Source de Git</h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">Découvrez le code qui a révolutionné la gestion de versions</p>
            </div>

            <div class="space-y-12">
                <!-- Exemple 1: Fonction de hash SHA-1 -->
                <div class="bg-gray-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-700 animate-fade-in-up">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gray-600 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-hashtag text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-semibold text-white">Fonction de Hash SHA-1</h3>
                            <p class="text-gray-400">Le cœur du système de hachage de Git (sha1.c)</p>
                        </div>
                    </div>
                    <div class="bg-black rounded-lg p-6 font-mono text-sm text-blue-400 overflow-x-auto">
                        <pre><code>/*
 * SHA1 implementation
 */
#define SHA1_BLOCK_SIZE 20

void sha1_init(struct sha1_ctx *ctx)
{
    ctx->state[0] = 0x67452301;
    ctx->state[1] = 0xEFCDAB89;
    ctx->state[2] = 0x98BADCFE;
    ctx->state[3] = 0x10325476;
    ctx->state[4] = 0xC3D2E1F0;
    ctx->count = 0;
}

void sha1_update(struct sha1_ctx *ctx, const void *data, unsigned long len)
{
    unsigned int i, j;

    j = (ctx->count >> 3) & 63;
    ctx->count += len << 3;

    if ((j + len) > 63) {
        memcpy(&ctx->buffer[j], data, (i = 64 - j));
        sha1_transform(ctx->state, ctx->buffer);
        for (; i + 63 < len; i += 64) {
            sha1_transform(ctx->state, &data[i]);
        }
        j = 0;
    } else
        i = 0;
    memcpy(&ctx->buffer[j], &data[i], len - i);
}</code></pre>
                    </div>
                    <p class="text-gray-300 mt-4 leading-relaxed">
                        L'implémentation SHA-1 de Git utilise cette structure pour calculer les empreintes uniques des objets. Chaque commit, arbre et blob possède un hash SHA-1 unique de 40 caractères.
                    </p>
                </div>

                <!-- Exemple 2: Gestion des objets -->
                <div class="bg-gray-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-700 animate-fade-in-up" style="animation-delay: 0.3s;">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gray-600 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-database text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-semibold text-white">Gestion des Objets</h3>
                            <p class="text-gray-400">Lecture d'objets depuis le dépôt (object.c)</p>
                        </div>
                    </div>
                    <div class="bg-black rounded-lg p-6 font-mono text-sm text-blue-400 overflow-x-auto">
                        <pre><code>struct object *parse_object(const unsigned char *sha1)
{
    unsigned long size;
    enum object_type type;
    int eaten;
    const unsigned char *buf = read_sha1_file(sha1, &type, &size);

    if (!buf)
        return NULL;

    if (check_sha1_signature(sha1, buf, size, typename(type)) < 0) {
        error("sha1 mismatch %s", sha1_to_hex(sha1));
        return NULL;
    }

    eaten = 0;
    switch (type) {
    case OBJ_COMMIT:
        return parse_commit_buffer(the_repository, sha1, buf, size, &eaten);
    case OBJ_TREE:
        return parse_tree_buffer(the_repository, sha1, buf, size, &eaten);
    case OBJ_BLOB:
        return parse_blob_buffer(the_repository, sha1, buf, size, &eaten);
    case OBJ_TAG:
        return parse_tag_buffer(the_repository, sha1, buf, size, &eaten);
    default:
        error("unknown object type %d", type);
        return NULL;
    }
}</code></pre>
                    </div>
                    <p class="text-gray-300 mt-4 leading-relaxed">
                        Cette fonction analyse les objets Git (commits, arbres, blobs, tags) en lisant leur contenu depuis les fichiers stockés dans .git/objects/. Chaque objet est vérifié par son hash SHA-1.
                    </p>
                </div>

                <!-- Exemple 3: Commande commit -->
                <div class="bg-gray-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-700 animate-fade-in-up" style="animation-delay: 0.6s;">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gray-600 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-code-commit text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-semibold text-white">Création d'un Commit</h3>
                            <p class="text-gray-400">Logique de création d'un commit (commit.c)</p>
                        </div>
                    </div>
                    <div class="bg-black rounded-lg p-6 font-mono text-sm text-blue-400 overflow-x-auto">
                        <pre><code>static int commit_tree(struct commit *commit, struct object_id *result)
{
    struct strbuf buffer = STRBUF_INIT;
    unsigned char tree_sha1[20];

    if (write_cache_as_tree(tree_sha1, 0, NULL) < 0)
        return -1;

    strbuf_addf(&buffer, "tree %s\n", sha1_to_hex(tree_sha1));

    if (commit->parents) {
        struct commit_list *parent = commit->parents;
        while (parent) {
            strbuf_addf(&buffer, "parent %s\n",
                       oid_to_hex(&parent->item->object.oid));
            parent = parent->next;
        }
    }

    if (commit->author) {
        strbuf_addf(&buffer, "author %s\n", commit->author);
    }

    if (commit->committer) {
        strbuf_addf(&buffer, "committer %s\n", commit->committer);
    }

    strbuf_addch(&buffer, '\n');
    if (commit->message)
        strbuf_addstr(&buffer, commit->message);

    if (write_object_file(buffer.buf, buffer.len, commit_type, result) < 0) {
        strbuf_release(&buffer);
        return -1;
    }

    strbuf_release(&buffer);
    return 0;
}</code></pre>
                    </div>
                    <p class="text-gray-300 mt-4 leading-relaxed">
                        Cette fonction crée un objet commit en assemblant l'arbre des fichiers modifiés, les parents (commits précédents), l'auteur, le committer et le message de commit dans un format standard.
                    </p>
                </div>

                <!-- Exemple 4: Index (staging area) -->
                <div class="bg-gray-800/50 backdrop-blur-sm p-8 rounded-2xl border border-gray-700 animate-fade-in-up" style="animation-delay: 0.9s;">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gray-600 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-list text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-semibold text-white">Gestion de l'Index</h3>
                            <p class="text-gray-400">Lecture et écriture de l'index Git (read-cache.c)</p>
                        </div>
                    </div>
                    <div class="bg-black rounded-lg p-6 font-mono text-sm text-blue-400 overflow-x-auto">
                        <pre><code>struct index_state *read_index(struct index_state *istate)
{
    int fd;
    struct stat st;
    unsigned long src_offset;
    struct cache_header *hdr;
    const char *mmap;
    size_t mmap_size;

    if (istate->initialized)
        return istate;

    fd = open(istate->cache_file, O_RDONLY);
    if (fd < 0) {
        if (errno == ENOENT)
            return istate;
        die_errno("index file open failed");
    }

    if (fstat(fd, &st))
        die_errno("cannot stat the open index");

    mmap_size = xsize_t(st.st_size);
    mmap = xmmap(NULL, mmap_size, PROT_READ, MAP_PRIVATE, fd, 0);
    close(fd);

    hdr = (struct cache_header *)mmap;
    if (verify_hdr(hdr, mmap_size) < 0)
        die("bad index file");

    istate->cache_nr = ntohl(hdr->hdr_entries);
    istate->cache_alloc = alloc_nr(istate->cache_nr);
    istate->cache = xcalloc(istate->cache_alloc, sizeof(*istate->cache));

    src_offset = sizeof(*hdr);
    for (unsigned int i = 0; i < istate->cache_nr; i++) {
        struct cache_entry *ce = read_one_entry(istate, mmap, mmap_size, &src_offset);
        if (!ce)
            die("unable to read index entry");
        set_index_entry(istate, i, ce);
    }

    istate->initialized = 1;
    munmap((void *)mmap, mmap_size);
    return istate;
}</code></pre>
                    </div>
                    <p class="text-gray-300 mt-4 leading-relaxed">
                        L'index (staging area) est un fichier binaire qui stocke l'état des fichiers dans le répertoire de travail. Cette fonction lit l'index pour connaître quels fichiers sont stagés pour le prochain commit.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 py-12 border-t border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="flex justify-center items-center mb-6">
                    <i class="fas fa-linux text-3xl text-gray-400 mr-3"></i>
                    <h3 class="text-2xl font-bold text-white">Linus Torvalds</h3>
                </div>
                <p class="text-gray-500 mb-6 max-w-2xl mx-auto">
                    Hommage au génie qui a révolutionné l'informatique. Créé avec ❤️ et Tailwind CSS.
                </p>
                <div class="flex justify-center space-x-6">
                    <a href="#" class="text-gray-500 hover:text-gray-300 transition-colors">
                        <i class="fab fa-github text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-300 transition-colors">
                        <i class="fab fa-linux text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-300 transition-colors">
                        <i class="fas fa-globe text-2xl"></i>
                    </a>
                </div>
                <p class="text-gray-600 mt-8">&copy; 2025 Hommage à Linus Torvalds. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Effet Parallax
        document.addEventListener('DOMContentLoaded', function() {
            const parallaxElements = document.querySelectorAll('.parallax-bg, .parallax-element');
            
            function updateParallax() {
                const scrolled = window.pageYOffset;
                
                parallaxElements.forEach(element => {
                    const speed = element.dataset.speed || 0.5;
                    const yPos = -(scrolled * speed);
                    element.style.transform = `translateY(${yPos}px)`;
                });
            }
            
            window.addEventListener('scroll', updateParallax);
            
            // Animation d'entrée pour les éléments
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in-up');
                    }
                });
            }, observerOptions);
            
            // Observer tous les éléments avec la classe animate-fade-in-up
            document.querySelectorAll('.animate-fade-in-up').forEach(el => {
                el.classList.remove('animate-fade-in-up');
                observer.observe(el);
            });
        });
    </script>
</body>
</html>