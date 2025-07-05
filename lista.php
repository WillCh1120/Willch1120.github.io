<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <header class="navbar">
    <!-- Logo e nombre de la empresa -->
    <div class="logo-container">
    <img src="logo.jpg" alt="Logo LOS LIBERTADORES SAC" class="logo">
    <span class="company-name">LOS LIBERTADORES SAC</span>
    </div>
    <!-- Enlaces de navegación -->
    <nav class="nav-links">
    <a href="Index.html">Inicio</a>
    <a href="nosotros.html">Nosotros</a>
    <a href="conductores.html">Conductores</a>
    <a href="campañas.html">Campañas</a>
    <a href="contacto.html">Contactos</a>
    </nav>
    </header>
    <h1>LISTA PRODUCTOS</h1>

    <table class = "tabla">
        <thead class = "fondo superior">
            <tr>
                <tr>CODIGO</tr>
                <tr>NOMBRE</tr>
                <tr>DESCRIPCION</tr>
                <tr>FECHAINICIO</tr>
                <tr>FECHAFIN</tr>
            </tr>
        </thead>
        <?php

        include "conexion.php";
        $sql = $conexion->query("select * from campanas");
        while($carga = $sql->fetch_object()){ ?>

            <tbody>
                <td><?= $carga-> idcampana ?></td>
                <td><?= $carga-> nombre ?></td>
                <td><?= $carga-> descripcion ?></td>
                <td><?= $carga-> fechainicio ?></td>
                <td><?= $carga-> fechafin ?></td>
            </tbody>
        <?php }

        ?>
        
        </table>


    </section>
</body>
</html>