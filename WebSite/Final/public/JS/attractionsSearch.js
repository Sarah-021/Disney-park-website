document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const rideListItems = document.querySelectorAll('#ridesList > li');

    searchInput.addEventListener('input', function () {
        const query = searchInput.value.toLowerCase();

        rideListItems.forEach(function (ride) {
            // Obtenir le texte du nom de l'attraction
            const rideNameElement = ride.querySelector('strong').nextSibling;
            const rideName = rideNameElement.textContent.trim().toLowerCase();

            if (rideName.includes(query)) {
                ride.style.display = 'list-item';
            } else {
                ride.style.display = 'none';
            }
        });
    });
});
