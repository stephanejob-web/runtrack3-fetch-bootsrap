// Récupération du formulaire et du bouton
const form = document.getElementById('inscriptionForm');
const submitBtn = document.getElementById('submitBtn');

// Récupération des inputs
const nomInput = document.getElementById('nom');
const prenomInput = document.getElementById('prenom');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('confirmPassword');
const adresseInput = document.getElementById('adresse');
const codepostalInput = document.getElementById('codepostal');

// Récupération des éléments d'erreur
const passwordError = document.getElementById('passwordError');
const confirmPasswordError = document.getElementById('confirmPasswordError');

// Fonction pour valider tous les champs
function validateForm() {
    let isValid = true;


    if (passwordInput.value.length > 0 && passwordInput.value.length < 8) {
        passwordError.textContent = 'Le mot de passe doit contenir au moins 8 caractères';
        isValid = false;
    } else {
        passwordError.textContent = '';
    }

    if (confirmPasswordInput.value.length > 0) {
        if (confirmPasswordInput.value !== passwordInput.value) {
            confirmPasswordError.textContent = 'Les mots de passe ne correspondent pas';
            isValid = false;
        } else {
            confirmPasswordError.textContent = '';
        }
    }

    if (!nomInput.value || !prenomInput.value || !emailInput.value ||
        !passwordInput.value || !confirmPasswordInput.value ||
        !adresseInput.value || !codepostalInput.value) {
        isValid = false;
    }

    if (passwordInput.value.length < 8) {
        isValid = false;
    }

    if (passwordInput.value !== confirmPasswordInput.value) {
        isValid = false;
    }

    submitBtn.disabled = !isValid;
}

// Validation en temps réel sur tous les champs
nomInput.addEventListener('input', validateForm);
prenomInput.addEventListener('input', validateForm);
emailInput.addEventListener('input', validateForm);
adresseInput.addEventListener('input', validateForm);

passwordInput.addEventListener('input', function() {validateForm();});
confirmPasswordInput.addEventListener('input', function() {validateForm();});

codepostalInput.addEventListener('input', function() {
    if (this.value.length > 5) {
        this.value = this.value.slice(0, 5);
    }
    validateForm();
});

// Soumission du formulaire
form.addEventListener('submit', function(e) {
    e.preventDefault();

    // Récupération des valeurs
    const userData = {
        nom: nomInput.value,
        prenom: prenomInput.value,
        email: emailInput.value,
        password: passwordInput.value,
        adresse: adresseInput.value,
        codepostal: codepostalInput.value
    };


    alert('Inscription réussie!\nNom: ' + userData.nom + '\nPrénom: ' + userData.prenom + '\nEmail: ' + userData.email);
    form.reset();
    passwordError.textContent = '';
    confirmPasswordError.textContent = '';
    submitBtn.disabled = true;
});
