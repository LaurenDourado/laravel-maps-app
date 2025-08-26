var mapCenter = [-23.5505, -46.6333]; // fallback São Paulo
if (locations.length > 0) {
    mapCenter = [locations[0].latitude, locations[0].longitude];
}
var map = L.map('map').setView(mapCenter, 10);
locations.forEach(function(location) {
    var markerIcon = L.AwesomeMarkers.icon({
        icon: 'map-marker-alt',
        prefix: 'fa',
        markerColor: location.category === 'Restaurante' ? 'red' :
                      location.category === 'Parque' ? 'green' : 'blue'
    });

    var marker = L.marker([location.latitude, location.longitude], { icon: markerIcon })
        .addTo(map)
        .bindPopup(`
            <div class="text-center">
                <h6><strong>${location.name}</strong></h6>
                ${location.category ? `<p class="badge bg-secondary">${location.category}</p>` : ''}
                ${location.address ? `<p><i class="fas fa-map-pin"></i> ${location.address}</p>` : ''}
                ${location.description ? `<p>${location.description}</p>` : ''}
                <div class="mt-2">
                    <a href="/locations/${location.id}" class="btn btn-sm btn-primary">Ver Detalhes</a>
                </div>
            </div>
        `);

    markers.push(marker);
});
map.on('click', function(e) {
    var lat = e.latlng.lat.toFixed(6);
    var lng = e.latlng.lng.toFixed(6);

    // Se existirem inputs no form
    if (document.getElementById('latitude') && document.getElementById('longitude')) {
        document.getElementById('latitude').value = lat;
        document.getElementById('longitude').value = lng;
    }

    // Opcional: adicionar um marcador temporário
    if (window.newMarker) {
        map.removeLayer(window.newMarker);
    }
    window.newMarker = L.marker([lat, lng]).addTo(map);
});
