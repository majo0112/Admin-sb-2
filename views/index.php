<?php
include '../comunes/permisos.php';

$title = "SENA | Servicio Nacional de Aprendizaje";

ob_start(); 
?>
    <div class="container-fluid px-4">
        <h1>BIENVENIDO</h1>
        <h2>EST IPSAM</h2>
        <P>Lorem ipsum dolor sit amet. Eos earum quam qui necessitatibus quasi quo sint facilis aut totam maxime qui minima corporis.<P>
        <ul>
            <li>Aut fuga totam et modi quaerat sed odit molestias sed minima eligendi.</li>
            <li>Est provident illo aut odit nesciunt qui quasi saepe.</li>
            <li>Et magni nulla ut unde repellendus.</li>
            <li>Aut consequuntur cumque est assumenda provident aut libero totam sit corrupti reprehenderit.</li>
            <li>Non omnis dolorem ex voluptatem distinctio.</li>
        </ul>
        <p>Et rerum odio aut repellendus quisquam est officiis odit ea aperiam aspernatur aut totam cumque. Ut veritatis vero vel magnam odio et consequatur tempora a voluptatum modi et illum molestiae qui distinctio voluptates.</p>
        <ol>
            <li>Ab dolore facilis in eveniet voluptate.</li>
            <li>Rem explicabo repellat eos aperiam corrupti est rerum iste.</li>
            <li>Sit amet galisum qui magnam consequuntur ut natus nostrum in sunt quia.</li>
            <li>Et obcaecati asperiores At numquam quasi.</li>
            <li>Vel nesciunt animi ad pariatur tempore aut sequi nostrum.</li>
        </ol>
    </div>
<?php
$content = ob_get_clean(); 
include '../views/layout.php';
?>

