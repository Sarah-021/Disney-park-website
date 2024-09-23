document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById('search-input');
    const searchResultsContainer = document.getElementById('results-list');
    const resultsSection = document.getElementById('results');

    // Écouteur d'événement pour le changement de saisie dans la barre de recherche
    searchInput.addEventListener('input', function () {
        // Récupération de la valeur de la recherche en supprimant les espaces vides au début et à la fin
        const query = searchInput.value.trim();
        if (query.length > 0) {
            // Requête AJAX pour récupérer les résultats de recherche basés sur la valeur de la recherche
            fetch(`/api/parks/${query}`)
                .then(response => response.json())
                .then(parks => {
                    // Nettoyage des résultats précédents
                    searchResultsContainer.innerHTML = "";
                    if (parks.length > 0) {
                        parks.forEach(park => {
                            const resultElement = document.createElement("li");  // Création d'un élément de liste
                            resultElement.classList.add("results"); //ajout results 
                            resultElement.innerHTML = `
                                <h3><a href="/parks/${park.id}">${park.name}</a></h3>
                            `;
                            searchResultsContainer.appendChild(resultElement); // Ajout de l'élément à la liste des résultats
                        });
                        resultsSection.style.display = 'block'; // Affiche la section des résultats
                    } else {
                        searchResultsContainer.innerHTML = "<p class='noResult'> Aucun résultat trouvé.</p>";

                    }
                })
                .catch(error => {
                    console.error('Error during search:', error);
                    searchResultsContainer.innerHTML = "<p>Erreur lors du chargement des résultats.</p>";
                    resultsSection.style.display = 'none'; // Masque la section des résultats en cas d'erreur
                });
        } else {
            searchResultsContainer.innerHTML = "";  // Clear results if input is cleared
            resultsSection.style.display = 'none'; // Masque la section des résultats si la recherche est vide
        }
    });
});
