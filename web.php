    <?php
    class pagina_Web
    {
        var $titulo;
        function setTitulo($titulo = "Titulo por defecto")
        {
            $this->titulo = $titulo;
        }
        function getTitulo()
        {
            return $this->titulo;
        }
        function cabecera()
        {
            echo ("<!doctype html>\n<html>\n<head>\n<title>");
            echo $this->titulo;
            echo ("</title>\n</head>\n<body>\n");
            echo ("<h1>Encabezamiento pagina</h1>");
        }
        function cuerpo()
        {
            echo ("Este es el cuerpo de la pagina web");
            echo ("<p>Mas del detalle</p>");
        }
        function pie()
        {
            echo ("\n</body>\n</html>");
        }
        function mostrar_pagina()
        {
            $this->cabecera();
            $this->cuerpo();
            $this->pie();
        }
    }
    class pagina_Web_formulario extends pagina_Web
    {
        function formulario_inicio($accion)
        {
            echo ("<form action=\"$accion\">");
        }
        function formulario_fin()
        {
            echo ("</form>");
        }
        function formulario_caja_texto($nombre)
        {
            echo ("$nombre <input type=\"text\" name=\"$nombre\">");
        }
        function formulario_boton()
        {
            echo ("<input type=\"submit\" name=\"Submit\"value = \"Enviar\">");
        }
        function mostrar_pagina()
        {
            $this->cabecera();
            $this->formulario_inicio("fran2.html");
            $this->formulario_caja_texto("Nombre");
            $this->formulario_boton();
            $this->formulario_fin();
            $this->pie();
        }
    }
    ?>