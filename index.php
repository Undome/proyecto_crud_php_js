<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud con Php y Javascript</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="alerts">
            <div class="alert alert-success">gg</div>
            <div class="alert alert-danger">ee</div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <h1>Crud con Php y Javascript</h1>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>Estudiantes ( <span id="total"></span> )</h4>
                    <button class="btn btn-primary" id="create">Crear</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Pais</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                   
                </tbody>
            </table>
        </div>
    </div>

    <!-- create student model -->

    <!-- <div class="container"> -->
    <div class="modal" id="create-student">
        <div class="modal-body">
            <h3>Crear estudiante</h3>
            <div class="form-group">
                <label for=""><b>Introduce tu nombre</b></label>
                <input type="text" placeholder="Enter your name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for=""><b>Introduce tu edad</b></label>
                <input type="number" placeholder="Enter your age" id="age" class="form-control">
            </div>
            <div class="form-group">
                <label for=""><b>Introduce tu pais</b></label>
                <input type="text" placeholder="Enter your country" id="country" class="form-control">
            </div>
            <div class="form-group buttons">
                <button class="btn btn-success" type="submit" id="save">Salvar</button>
                <button class="btn btn-danger" type="submit" id="close">Cerrar</button>
            </div>
        </div>
    </div>
    <!-- </div> -->

    <!-- edit student -->
    <div class="modal" id="update-student">
        <div class="modal-body">
            <h3>Actualizar estudiante</h3>
            <div class="form-group">
                <label for=""><b>Introduce tu nombre</b></label>
                <input type="text" placeholder="Enter your name" id="edit_name" class="form-control">
                <input type="hidden" placeholder="Id" id="id" class="form-control">
            </div>
            <div class="form-group">
                <label for=""><b>Introduce tu edad</b></label>
                <input type="number" placeholder="Enter your age" id="edit_age" class="form-control">
            </div>
            <div class="form-group">
                <label for=""><b>Introduce tu pais</b></label>
                <input type="text" placeholder="Enter your country" id="edit_country" class="form-control">
            </div>
            <div class="form-group buttons">
                <button class="btn btn-success" id="update" type="submit">Actualizar</button>
                <button class="btn btn-danger" type="submit" id="update_close">Cerrar</button>
            </div>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>

</html>
