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
    const deleteButton = document.getElementById('deleteButton');
    const userId = deleteButton.getAttribute('data-bs-user-id'); 

    deleteButton.addEventListener('click', function () {
        const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
        deleteModal.show();
    });

    const deleteConfirmButton = document.getElementById('deleteConfirmButton');

    deleteConfirmButton.addEventListener('click', function () {
        
        window.location.href = `../php/eliminar-usuario.php?id=${userId}`;
    });
});


//Modal eliminar curso
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtonsC = document.querySelectorAll('.deleteButtonC');

    deleteButtonsC.forEach((deleteButtonC) => {
        deleteButtonC.addEventListener('click', function () {
            const userId = deleteButtonC.getAttribute('data-bs-user-id');
            const deleteModal = new bootstrap.Modal(document.getElementById('deleteModalCurso'));
            deleteModal.show();

            const deleteConfirmButton = document.getElementById('deleteConfirmCurso');

            deleteConfirmButton.addEventListener('click', function () {
              
                window.location.href = `../php/eliminar-curso.php?id=${userId}`;
            });
        });
    });
});



