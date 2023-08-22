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




