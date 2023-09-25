window.addEventListener('DOMContentLoaded', event => {
    const datatablesSimple1 = document.getElementById('datatablesSimple1');
    if (datatablesSimple1) {
        new simpleDatatables.DataTable(datatablesSimple1, {
            labels: {
                placeholder: "Buscar...",
                searchTitle: "Buscar dentro de la tabla",
                pageTitle: "Página {page}",
                perPage: "entradas por página",
                noRows: "No se encontraron entradas",
                info: "Mostrando {start} a {end} de {rows} entradas",
                noResults: "No se encontraron resultados que coincidan con tu búsqueda",
            }
        });
    }
});

window.addEventListener('DOMContentLoaded', event => {
    const datatablesSimple2 = document.getElementById('datatablesSimple2');
    if (datatablesSimple2) {
        new simpleDatatables.DataTable(datatablesSimple2, {
            labels: {
                placeholder: "Buscar...",
                searchTitle: "Buscar dentro de la tabla",
                pageTitle: "Página {page}",
                perPage: "entradas por página",
                noRows: "No se encontraron entradas",
                info: "Mostrando {start} a {end} de {rows} entradas",
                noResults: "No se encontraron resultados que coincidan con tu búsqueda",
            }
        });
    }
});

window.addEventListener('DOMContentLoaded', event => {
    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple, {
            labels: {
                placeholder: "Buscar...",
                searchTitle: "Buscar dentro de la tabla",
                pageTitle: "Página {page}",
                perPage: "entradas por página",
                noRows: "No se encontraron entradas",
                info: "Mostrando {start} a {end} de {rows} entradas",
                noResults: "No se encontraron resultados que coincidan con tu búsqueda",
            }
        });
    }
});