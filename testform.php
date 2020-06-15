<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_REQUEST['boton'])) {
        echo "El apellido introducido es: " . $_GET['apellido'];
    } else {

    ?>
        <script>
            function ajax() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("demo").innerHTML = this.responseText;
                    }
                }
                valor = document.getElementById("apellido").value;
                xhttp.open("GET", "testform.php?boton=kk&apellido=" + valor, true);
                xhttp.send();

            }
        </script>
        <form>
            <input type="text" name="apellido" id="apellido" />
            <input type="button" name="botoncito" value="ejecutar" onclick="ajax()" />
        </form>
        <div id="demo"></div>
    <?php
    }
    ?>
</body>

</html>