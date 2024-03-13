<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Cotización</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
</head>
<body>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">LOGO</div>
                <div class="col-sm-4">Buscador</div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Nuevo Presupuesto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nueva Factura</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Presupuestos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Facturas</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-auto">
                    <span>COSAS</span>
                </div>
                <div class="col-md-auto">
                    <span>COSAS</span>
                </div>
            </div>
        </div>
    </section>
    <h1>Alta de Cotización</h1>
    <form action="controladores/registro.php" method="post">
        <label for="Nombre">Nombre de Cliente: </label>
        <input type="text" id="Nombre" name="Nombre" placeholder="Ingresar Nombre">
    </form>
    <script src="js/bootstrap.min.js"></script>    
</body>
</html>