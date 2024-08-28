<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css" rel="stylesheet">

    </head>
<body>
    <div class="container">
        <div class="row">
            <h2>Crud de Loterías</h2>
        </div>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#loterianacional" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Lotería Nacional</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#loteriaelectronica" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Lotería Electronica</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="loterianacional" role="tabpanel" aria-labelledby="loterianacional" tabindex="0">
    <!-- CONTENIDO DE LOTERIA NACIONAL -->
    <table id="resultados" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Sorteo</th>
                <th>Primer Premio</th>
                <th>Letras</th>
                <th>Serie</th>
                <th>Folio</th>
                <th>Segundo Premio</th>
                <th>Tercer Premio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php

                $servername = "carbonzero.lat";
                $username = "carbrxww_produccion";
                $password = "produccion$123";
                $dbname = "carbrxww_panaloto";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

            $query_nacional = "SELECT * FROM resultados_loteria ORDER BY id_sorteo DESC";
            $nacional = $conn->query($query_nacional);

                foreach ($nacional as $key => $value) {
                    echo '<tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="">Editar</a>
                            <a class="btn btn-sm btn-danger" href="">Borrar</a>
                        </td>
                    </tr>';
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
            <th>Fecha</th>
                <th>Sorteo</th>
                <th>Primer Premio</th>
                <th>Letras</th>
                <th>Serie</th>
                <th>Folio</th>
                <th>Segundo Premio</th>
                <th>Tercer Premio</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>
  </div>
  <div class="tab-pane fade" id="loteriaelectronica" role="tabpanel" aria-labelledby="loteriaelectronica" tabindex="0">
    <!-- CONTENIDO DE LOTERIA ELECTRONICA -->

  </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    new DataTable('#resultados');
</script>
</body>
</html>