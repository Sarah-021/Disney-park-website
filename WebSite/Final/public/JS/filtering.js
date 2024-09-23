document.addEventListener('DOMContentLoaded', function () {

    // Sélectionnez l'élément de sélection du type d'attraction
    var selectType = document.getElementById('all-attractions');

    // Sélectionnez la liste des attractions
    var attractionsList = document.getElementById('Attraction');

    // Écoutez les changements dans la sélection du type d'attraction
    selectType.addEventListener('change', function () {
        var selectedType = selectType.value; // Récupérer la valeur sélectionnée

        // Parcourir tous les enfants de la liste des attractions
        for (var i = 0; i < attractionsList.children.length; i++) {
            var attraction = attractionsList.children[i];
            var type = attraction.getAttribute("data-type");  // Récupération du type de l'attraction

            // Si l'option sélectionnée est "all" ou si le type de l'attraction correspond à l'option sélectionnée
            if (selectedType === 'all' || type === selectedType) {
                attraction.style.display = "list-item"; // Afficher l'attraction
            } else {
                attraction.style.display = "none"; // Masquer l'attraction
            }
        }
    });
});


