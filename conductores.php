<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONDUCTORE</title>
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
    <a href="index.html">Inicio</a>
    <a href="nosotros.html">Nosotros</a>
    <a href="conductores.php">Conductores</a>
    <a href="campanas.php">Campañas</a>
    <a href="contacto.html">Contactos</a>
    </nav>
    </header>

    <section class="banner-titulo-conductores">
    <h1>CONDUCTORES</h1>
    </section>
    
    <section class="tabla-campanas">
    <h2 class="titulo-campanas">Lista de Conductores</h2>
    <div class="tabla-responsive">
        <table class="tabla-estilizada">
        <thead>
            <tr>
            <th>CODIGO</th>
            <th>NOMBRES</th>
            <th>PERMISOS </th>
            <th>HORA INICIO</th>
            <th>HORA FIN</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "conexion.php";
            $sql = $conexion->query("SELECT c.idconductor,
       CONCAT(p.nombre, ' ', p.apepaterno, ' ', p.apematerno) AS nombre,
       c.permiso,
       hc.horainicio,
       hc.horasalida
        FROM conductores c
        INNER JOIN persona p
        ON p.idpersona = c.idpersona
        INNER JOIN horarioconductores hc
            ON hc.idconductor = c.idconductor;
        ");
            while($carga = $sql->fetch_object()){ ?>
            <tr>
                <td><?= $carga->idconductor ?></td>
                <td><?= $carga->nombre ?></td>
                <td><?= $carga->permiso ?></td>
                <td><?= $carga->horainicio ?></td>
                <td><?= $carga->horasalida ?></td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
    </section>


    <footer class="footer">
    <div class="footer-col">
        <h4>NUESTRA UBICACIÓN</h4>
        <p>Mz C Lote 4, Urb. Habitad – Túpac Amaru Inca</p>

        <h4>TELÉFONO</h4>
        <p>(+51) 954 154 838</p>

        <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <div class="footer-col">
        <h4>PÁGINA CREADA POR</h4>
        <p>Wilian Gabriel Chipana Huamani</p>
        <p>Poll Quispe Olivares</p>
        <p><strong>Docente:</strong> Julio Genaro Mélendez Ramos</p>
    </div>

    <div class="footer-col">
        <h4>DESTINOS</h4>
        <ul>
        <li><a href="#">Paracas</a></li>
        <li><a href="#">Ica</a></li>
        <li><a href="#">Nazca</a></li>
        </ul>
    </div>
    </footer>
</body>
</html>