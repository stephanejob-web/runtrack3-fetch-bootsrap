<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Utilisateurs</title>
</head>
<body>
    <h1>Liste des Utilisateurs</h1>

    <button id="updateBtn">Update</button>

    <table id="usersTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody id="usersBody">
        </tbody>
    </table>

    <script>
        async function updateUsers() {
            try {
                const response = await fetch('users.php');
                const data = await response.json();
                const tbody = document.getElementById('usersBody');
                tbody.innerHTML = '';
                data.map(user => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${user.id}</td>
                        <td>${user.nom}</td>
                        <td>${user.prenom}</td>
                        <td>${user.email}</td>
                    `;
                    tbody.appendChild(row);
                });
            } catch (error) {
                console.error('Erreur:', error);
                alert('Erreur lors de la récupération des données');
            }
        }
        document.getElementById('updateBtn').addEventListener('click', updateUsers);
    </script>
</body>
</html>
