<script setup>
import { ref } from 'vue';

const isActive = ref(false);
const isFinished = ref(false);

const handleClick = () => {
    if (!isActive.value) {
        isActive.value = true;
    }
};

const handleTransitionEnd = (event) => {
    // y que estamos en estado activo para pasar a finalizado.
    if (event.propertyName === 'width' && isActive.value) {
        isFinished.value = true;
        // Opcional: Si quieres reiniciar el botón después de unos segundos, descomenta esto:
        setTimeout(() => {
            isActive.value = false;
            isFinished.value = false;
        }, 2000);
    }
};
</script>

<template>
    <button 
        type="button"
        class="button btn btn-dash rounded-md px-5 py-3 text-sm font-medium bg-white text-neutral-900 hover:bg-neutral-200 transition-colors inline-flex items-center gap-2 relative overflow-hidden"
        :class="{ 'active': isActive, 'finished': isFinished }"
        @click="handleClick"
        @transitionend="handleTransitionEnd"
    >
        <svg v-if="!isActive && !isFinished" class="w-4 h-4 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
        </svg>

        <span class="submit">Descargar CV</span>
        
        <span class="loading">
            <i class="fa fa-refresh"></i>
        </span>
        
        <span class="check">
            <i class="fa fa-check"></i>
        </span>
    </button>
</template>

<style scope>
.button {
    width: 160px;
}
/* --- BARRA DE PROGRESO (Fondo) --- */
.button:before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0%;
    height: 100%;
    background-color: #8b8b8b; /* Color de la barra de carga */
    z-index: 0;
    transition: width 0s;
}

/* --- ELEMENTOS INTERNOS (Iconos y Texto) --- */
.button span {
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    text-align: center;
    z-index: 1;
    transition: all 0.3s ease;
}

/* Estado Inicial del texto */
.button .submit {
    position: static; /* Mantiene el flujo natural y el ancho del botón */
    z-index: 2; /* Asegura que el texto sea clicable/visible */
}

/* Iconos ocultos inicialmente */
.button .loading,
.button .check {
    top: 100%;
    opacity: 0;
}

/* --- ESTADO ACTIVO (Cargando) --- */
.active {
    background-color: white !important;
    color: black !important;
    cursor: wait; /* Feedback visual para el usuario */
}

.active:before {
    width: 100%;
    transition: width 3s linear; /* Duración de la carga */
}

/* El texto sube y desaparece */
.active .submit {
    position: absolute; /* Lo sacamos del flujo */
    top: -100%;
    transform: translateY(-50%);
    opacity: 0;
}

/* El icono de carga entra */
.active .loading {
    top: 50%;
    transform: translateY(-50%);
    opacity: 1;
}

.active .loading i {
    animation: spin 500ms linear infinite;
    font-size: 1.2em; /* Relativo a la fuente */
}

/* --- ESTADO FINALIZADO (Éxito) --- */
.finished {
    background-color: white !important;
    cursor: default;
}

/* Ocultamos elementos innecesarios */
.finished .submit,
.finished .loading,
.finished:before {
    display: none; /* Ocultamos la barra de carga al terminar */
}

/* El check entra */
.finished .check {
    top: 30%;
    transform: translateY(-50%);
    opacity: 1;
    display: block !important;
    font-size: 1.5em; /* Relativo */
    animation: popScale 2s linear;
}

/* --- ANIMACIONES --- */
@keyframes spin {
    100% { transform: rotate(360deg); }
}

@keyframes popScale {
    0% { transform: scale(10); opacity: 0; }
    50% { transform: scale(0.2); opacity: 1; }
    70% { transform: scale(1.2); }
    100% { transform: scale(1); }
}

</style>