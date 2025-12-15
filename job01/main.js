const button = document.getElementById('button')

async function fetchdata() {
    console.log("Data ans 1 seconde")
    setTimeout(() => {
            fetch('expression.txt')
            .then(response => response.text())
            .then(data => {
            console.log(data); 
  })
  .catch(error => console.error('Erreur:', error));
    }, 1000);

}


button.addEventListener("click",() =>{fetchdata()})

