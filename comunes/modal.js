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
