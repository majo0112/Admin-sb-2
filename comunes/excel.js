
    document.getElementById('importButton').addEventListener('click', function () {
        // Muestra el campo de entrada de archivo y espera a que el usuario seleccione un archivo
        document.getElementById('fileInput').click();
    });

    // Maneja el evento de cambio de archivo de entrada
    document.getElementById('fileInput').addEventListener('change', function (event) {
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();

            reader.onload = function (e) {
                var data = e.target.result;
                var workbook = XLSX.read(data, { type: 'binary' });

                // Aquí puedes procesar los datos del archivo Excel y agregarlos a tu tabla
                // Por ejemplo, puedes recorrer las filas y columnas del archivo Excel y agregarlas a la tabla.

                // Ejemplo de procesamiento de datos (puedes personalizarlo según tus necesidades):
                var sheet = workbook.Sheets[workbook.SheetNames[0]];
                var table = document.getElementById('datatablesSimple2').getElementsByTagName('tbody')[0];

                for (var i = 1; i < sheet.length; i++) {
                    var newRow = table.insertRow(table.rows.length);
                    var cell1 = newRow.insertCell(0);
                    var cell2 = newRow.insertCell(1);
                    var cell3 = newRow.insertCell(2);
                    var cell4 = newRow.insertCell(3);
                    var cell5 = newRow.insertCell(4);

                    cell1.innerHTML = i; 
                    cell2.innerHTML = sheet[i][0];
                    cell3.innerHTML = sheet[i][1]; 
                    cell4.innerHTML = sheet[i][2];
                    cell5.innerHTML = '<a href="#">Editar</a>'; 
                }
            };

            reader.readAsBinaryString(file);
        }
    });




