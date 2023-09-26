
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("enviarBtn").addEventListener("click", function () {
      
        const form = document.getElementById("justificarForm");

     
        const formData = new FormData(form);

        fetch("../php/guardar-certificado.php", {
            
            method: "POST",
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Justificación enviada con éxito.");
        
                document.getElementById("certificadoModal").classList.remove("show");
                document.body.classList.remove("modal-open");
                document.querySelector(".modal-backdrop").remove();
            
                form.reset();
            } else {
                alert("Error al enviar la justificación: " + data.error);
            }
        })
        .catch(error => {
            console.error("Error en la solicitud AJAX: " + error);
        });
    });
});


