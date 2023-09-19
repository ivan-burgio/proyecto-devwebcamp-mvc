if(document.querySelector('#mapa')) {
    const lat = -34.8630626;
    const lng = -56.1533598;
    const zoom = 16;

    const map = L.map('mapa').setView([lat, lng], zoom);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([lat, lng]).addTo(map)
        .bindPopup(`
            <h2 class="mapa_heading">DevWebCamp</h2>
            <p class="mapa__texto">Antel Arena</p><br>
            <p class="mapa__texto">Montevideo, Uruguay</p>
        `)
        .openPopup();
}