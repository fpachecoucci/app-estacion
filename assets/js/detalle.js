document.addEventListener("DOMContentLoaded", () => { cargarDetalle(); });

async function cargarDetalle() {
    const loading = document.getElementById("loading");
    const card = document.getElementById("detalle-card");
    if (!CHIPID) return;

    try {
        const response = await fetch(`${API_URL}estacion/${CHIPID}`);
        if (!response.ok) throw new Error("Error API");
        const data = await response.json();

        document.getElementById("estacion-apodo").textContent = data.apodo || "Sin apodo";
        document.getElementById("estacion-ubicacion").textContent = data.ubicacion || "Desconocida";
        loading.style.display = "none";
        card.classList.remove("hidden");
    } catch (e) {
        loading.textContent = "❌ Error al cargar el detalle.";
    }
}
