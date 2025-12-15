// Récupérer les éléments du formulaire
const inputId = document.getElementById('id');
const inputNom = document.getElementById('nom');
const selectType = document.getElementById('type');
const btnFiltrer = document.getElementById('filtrer');
const listeResultats = document.getElementById('resultats');

let pokemonData = [];

async function chargerPokemons() {
  try {
    const response = await fetch('pokemon.json');
    const data = await response.json();
    pokemonData = data;
  } catch (error) {
    console.error('Erreur :', error);
  }
}

chargerPokemons();


btnFiltrer.addEventListener('click', () => {
  const idValue = inputId.value.trim();
  const nomValue = inputNom.value.trim();
  const typeValue = selectType.value;

  let resultats;

  if (idValue) {
    resultats = pokemonData.filter(pokemon => pokemon.id === parseInt(idValue));
  } else if (nomValue) {
    resultats = pokemonData.filter(pokemon =>
      pokemon.name === nomValue
    );
  } else if (typeValue) {
    resultats = pokemonData.filter(pokemon => pokemon.type.includes(typeValue));
  } else {
    resultats = pokemonData;
  }

 
  listeResultats.innerHTML = '';

  resultats.forEach(pokemon => {
    const li = document.createElement('li');
    li.textContent = `#${pokemon.id} - ${pokemon.name.french} (${pokemon.type.join(', ')})`;
    listeResultats.appendChild(li);
  });
});
