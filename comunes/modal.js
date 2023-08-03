

    
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






