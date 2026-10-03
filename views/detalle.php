<section class="detalle-section">
    <a href="<?= BASE_URL ?>panel" class="btn-back">← Volver al Panel</a>
    <div id="loading" class="spinner">Cargando información...</div>
    <article id="detalle-card" class="card-detalle hidden">
        <span class="chipid-header">CHIPID: <strong id="chipid-val"><?= htmlspecialchars($chipid ?? '') ?></strong></span>
        <h1 id="estacion-apodo">--</h1>
        <p class="location-info">📍 <span id="estacion-ubicacion">--</span></p>
    </article>
</section>

<script>
    const API_URL = "<?= API_URL ?>";
    const CHIPID = "<?= htmlspecialchars($chipid ?? '') ?>";
</script>
<script src="<?= BASE_URL ?>assets/js/detalle.js"></script>
