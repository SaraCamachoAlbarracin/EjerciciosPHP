<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio</title>

    <?php include ("includes/imports.php"); ?>

</head>

<body>

    <div id="wrapper">

    <?php include ("includes/barra-navegacion.php"); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registro Paciente</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Datos Basicos del Paciente
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post" action="../../Controlador/pacienteController.php?action=crear">
                                        <div class="form-group">
                                            <label>Nombres</label>
                                            <input required maxlength="60" id="Nombre" name="Nombre" minlength="2" class="form-control" placeholder="Ingrese Sus Nombres Completos">
                                        </div>
                                        <div class="form-group">
                                            <label>Apellidos</label>
                                            <input required maxlength="60" id="Apellidos" name="Apellidos" minlength="2" class="form-control" placeholder="Ingrese Sus Apellidos Completos">
                                        </div>
                                        <div class="form-group">
                                            <label>Direccion</label>
                                            <input required maxlength="60" id="Direccion" name="Direccion" minlength="7" class="form-control" placeholder="Ingrese su direccion de residencia">
                                        </div>

                                        <div class="form-group">
                                            <label>Tipo Documento</label>
                                            <select required id="TipoDocumento" name="TipoDocumento" class="form-control">
                                                <option>Seleccione</option>
                                                <option value="C.C">Cedula de Ciudadania</option>
                                                <option value="T.I">Tarjeta de Identidad</option>
                                                <option value="C.E">Cedula de Extranjeria</option>
                                                <option value="RegistroCivil">Registro Civil</option>
                                                <option value="RUT">Registro Unico Tributario</option>
                                                <option value="Otro">Otro</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Documento</label>
                                            <input type="number" required max="3000000000" min="1000000" maxlength="12" id="Documento" name="Documento" minlength="7" class="form-control" placeholder="Ingrese Documento Completo">
                                        </div>

                                        <label>Email</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="email" required maxlength="45" id="Email" name="Email" minlength="7" class="form-control" placeholder="Ingrese su correo electronico">
                                        </div>

                                        <div class="form-group">
                                            <label>Genero</label>
                                            <select required id="Genero" name="Genero" class="form-control">
                                                <option>Seleccione</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                                <option value="Indefinido">Indefinido</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Estado</label>
                                            <select required id="Estado" name="Estado" class="form-control">
                                                <option>Seleccione</option>
                                                <option value="Activo">Activo</option>
                                                <option value="Inactivo">Inactivo</option>

                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                        <button type="reset" class="btn btn-warning">Cancelar</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->

    </div>

    <?php include ("includes/includes-footer.php"); ?>

</body>

</html>
