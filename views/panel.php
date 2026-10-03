<section class="panel-section">
    <h2>Estaciones Meteorológicas Activas</h2>
    <div id="loading" class="spinner">Cargando estaciones...</div>
    <div id="estaciones-container" class="grid-estaciones"></div>
</section>

<template id="tpl-estacion">
    <article class="card-estacion">
        <div class="card-header">
            <span class="chipid-tag"></span>
            <span class="visitas-badge">👁️ <span class="visitas-num">0</span></span>
        </div>
        <h3 class="apodo"></h3>
        <p class="ubicacion">📍 <span></span></p>
        <button class="btn-detalle">Ver Detalle ➔</button>
    </article>
</template>

<script>
    const API_URL = "<?= API_URL ?>";
    const BASE_URL = "<?= BASE_URL ?>";
</script>
<script src="<?= BASE_URL ?>assets/js/panel.js"></script>
