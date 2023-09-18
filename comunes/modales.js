    //Modal cerrar sesión

    document.addEventListener('DOMContentLoaded', function () {
       
        const logoutButton = document.getElementById('logoutButton');

       
        logoutButton.addEventListener('click', function () {
            
            const logoutModal = new bootstrap.Modal(document.getElementById('logoutModal'));
            logoutModal.show();
        });

       
        const logoutConfirmButton = document.getElementById('logoutConfirmButton');

       
        logoutConfirmButton.addEventListener('click', function () {
          
            window.location.href = '../comunes/logout.php';
        });
    });

    
//Modal eliminar usuario

document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.deleteButton');
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteConfirmButton = document.getElementById('deleteConfirmButton');

    deleteButtons.forEach(deleteButton => {
        deleteButton.addEventListener('click', function () {
            const userId = deleteButton.getAttribute('data-bs-user-id');
            deleteConfirmButton.setAttribute('data-bs-user-id', userId);
            deleteModal.show();
        });
    });

    deleteConfirmButton.addEventListener('click', function () {
        const userId = this.getAttribute('data-bs-user-id');
        window.location.href = `../php/eliminar-usuario.php?id=${userId}`;
    });
});


//Modal curso

document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.deleteButtonC');
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModalCurso'));
    const deleteConfirmCurso = document.getElementById('deleteConfirmCurso');

    deleteButtons.forEach(deleteButton => {
        deleteButton.addEventListener('click', function () {
            const cursoId = deleteButton.getAttribute('data-bs-curso-id');
            deleteConfirmCurso.setAttribute('data-bs-curso-id', cursoId);
            deleteModal.show();
        });
    });

    deleteConfirmCurso.addEventListener('click', function () {
        const cursoId = this.getAttribute('data-bs-curso-id');
        window.location.href = `../php/eliminar-curso.php?id=${cursoId}`;
    });
});


//Modal ficha

document.addEventListener('DOMContentLoaded', function () {
    const deleteButtonsF = document.querySelectorAll('.deleteButtonF');
    const deleteModalFicha = new bootstrap.Modal(document.getElementById('deleteModalFicha'));
    const deleteConfirmFicha = document.getElementById('deleteConfirmFicha');

    deleteButtonsF.forEach(deleteButtonF => {
        deleteButtonF.addEventListener('click', function () {
            const fichaId = deleteButtonF.getAttribute('data-bs-ficha-id');
            deleteConfirmFicha.setAttribute('data-bs-ficha-id', fichaId);
            deleteModalFicha.show();
        });
    });

    deleteConfirmFicha.addEventListener('click', function () {  
        const fichaId = this.getAttribute('data-bs-ficha-id');
        window.location.href = `../php/eliminar-ficha.php?id=${fichaId}`;
    });
});


//Modal Aprendiz

document.addEventListener('DOMContentLoaded', function () {
    const deleteButtonsAprendiz = document.querySelectorAll('.deleteButtonAprendiz');
    const deleteModalAprendiz = new bootstrap.Modal(document.getElementById('deleteModalAprendiz'));
    const deleteConfirmAprendiz = document.getElementById('deleteConfirmAprendiz');

    deleteButtonsAprendiz.forEach(deleteButtonAprendiz => {
        deleteButtonAprendiz.addEventListener('click', function () {
            const aprendizId = deleteButtonAprendiz.getAttribute('data-bs-aprendiz-id');
            deleteConfirmAprendiz.setAttribute('data-bs-aprendiz-id', aprendizId);
            deleteModalAprendiz.show();
        });
    });

    deleteConfirmAprendiz.addEventListener('click', function () {  
        const aprendizId = this.getAttribute('data-bs-aprendiz-id');
        window.location.href = `../php/eliminar-aprendiz.php?id=${aprendizId}`;
    });
});
