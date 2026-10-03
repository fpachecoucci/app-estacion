document.addEventListener("DOMContentLoaded", () => { cargarEstaciones(); });

async function cargarEstaciones() {
    const container = document.getElementById("estaciones-container");
    const template = document.getElementById("tpl-estacion");
    const loading = document.getElementById("loading");

    try {
        const response = await fetch(`${API_URL}estaciones`);
        if (!response.ok) throw new Error("Error API");
        const estaciones = await response.json();
        loading.style.display = "none";

        estaciones.forEach(est => {
            const clone = template.content.cloneNode(true);
            clone.querySelector(".apodo").textContent = est.apodo || "Sin apodo";
            clone.querySelector(".ubicacion span").textContent = est.ubicacion || "Desconocida";
            clone.querySelector(".visitas-num").textContent = est.visitas ?? 0;
            clone.querySelector(".chipid-tag").textContent = `#${est.chipid}`;
            clone.querySelector(".btn-detalle").addEventListener("click", () => {
                window.location.href = `${BASE_URL}detalle/${est.chipid}`;
            });
            container.appendChild(clone);
        });
    } catch (e) {
        loading.textContent = "❌ Error al cargar estaciones.";
    }
}
