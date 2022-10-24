<?php
include_once '../includes/db.php';
$objeto = new DB();
$conexion = $objeto->connect();


$consultaReteFuente = "SELECT * FROM retenciofuente";
$resultadoRetefuente = $conexion->prepare($consultaReteFuente);
$resultadoRetefuente->execute();
$dataRetefuente=$resultadoRetefuente->fetchAll(PDO::FETCH_ASSOC);

$consultaTipoUnidad = "SELECT * FROM unidades";
$resultadoTipoUnidad = $conexion->prepare($consultaTipoUnidad);
$resultadoTipoUnidad->execute();
$dataTipoUnidad=$resultadoTipoUnidad->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NobuTIC</title>
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="/demo/Content/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/demo/Content/css/hover/hover-min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="/demo/Content/css/styles.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />


    <!-- Footer Scripts -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/demo/Content/js/moment/moment-with-locales.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/demo/Content/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@9.5.4/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="/demo/Content/js/tabledit/jquery.tabledit.min.js"></script>
    <script type="text/javascript" src="/demo/Content/js/custom.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="/demo/Content/images/favicon.png">

</head>


<body>




    <div class="container-fluid header">
        <div class="row">
            <div class="col-sm-9 logo">
                <img src="/demo/Content/images/logo.png" class="img-fluid" />
            </div>
            <div class="col-sm-3 headerUser text-right">
                <div class="d-block d-sm-none mobileMenu" data-toggle="collapse" href="#navBar">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="homeBtn">
                    
                </div>
                <div class="notifBtn">
                    
                </div>
                <a class="userMenu" data-toggle="collapse" href="#collapseExample"><i class="fa fa-user-circle"></i> <span class="nameOpts">Maria Alejandra Afanador </span> <i class="fa fa-caret-right"></i></a>
                <div class="dropdownMenuUser collapse" id="collapseExample">
                    <ul>
                        <li><a href="#">Mi perfil</a></li>
                        
                        <li><a href="/demo/Inicio/CambiarClave">Cambiar Clave</a></li>
                        <li><a href="../Includes/logout.php">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid menubar collapse dont-collapse-sm" id="navBar">
        <ul>



                <li>
                    <a href="#">ADMINISTRACIÓN</a>
                    <ul>
                        <li><a href="/demo/Gestion/Productos.php">Productos / Servicios</a></li>
                        <li><a href="/demo/Gestion/TipoUnidades.php">Tipos de unidades</a></li>
                        <li><a href="/demo/Gestion/Terceros.php">Terceros</a></li>
                        <li><a href="/demo/Nomina/Empleados.php">Empleados</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">FACTURACIÓN</a>
                    <ul>
                        <li><a href="/demo/Gestion/Inicio">Inicio</a></li>
                        <li><a href="/demo/Gestion/NuevaFactura">Nueva factura</a></li>
                        <li><a href="/demo/Gestion/FacturasBorrador">Facturas borrador</a></li>
                        <li><a href="/demo/Gestion/FacturasFinalizadas">Facturas finalizadas</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">NOTA CRÉDITO</a>
                    <ul>
                        <li><a href="/demo/Gestion/NotaCredito">Nota crédito</a></li>
                        <li><a href="/demo/Gestion/NotasCreditoBorrador">Notas crédito borrador</a></li>
                        <li><a href="/demo/Gestion/NotasCreditoFinalizadas">Notas crédito finalizadas</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">COMPRAS</a>
                    <ul>
                        
                        <li><a href="/demo/Compras/Inicio">Recepción</a></li>
                        <li><a href="/demo/Compras/SoportesBorrador">Soportes borrador</a></li>
                        <li><a href="/demo/Compras/SoportesFinalizadas">Soportes finalizadas</a></li>

                        <li><a href="/demo/Compras/NotaCredito">Nota crédito</a></li>
                        <li><a href="/demo/Compras/NotasCreditoBorrador">Notas crédito borrador</a></li>
                        <li><a href="/demo/Compras/NotasCreditoFinalizadas">Notas crédito finalizadas</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#">INFORMES</a>
                    <ul>
                        <li><a href="/demo/Informes/Informe01">Consulta por cliente</a></li>
                        <li><a href="/demo/Informes/Informe02">Consulta por articulo</a></li>
                        <li><a href="/demo/Informes/Informe03">Clientes frecuentes</a></li>
                        <li><a href="/demo/Informes/Informe04">Items mas vendidos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">NÓMINA</a>
                    <ul>
                        <li><a href="/demo/Nomina/Nominas">Nómina</a></li>
                    </ul>
                </li>





        </ul>
    </div>
    
    <div class="container-fluid content">

        <div class="row">

            <div class="col-sm">

                

<script src="/demo/Scripts/jquery.validate.min.js" type="text/javascript"></script>
<script src="/demo/Scripts/jquery.validate.unobtrusive.min.js" type="text/javascript"></script>
<script src="/demo/Scripts/expressive.annotations.validate.min.js" type="text/javascript"></script>
<link href="/demo/Content/css/Validaciones.css" rel="stylesheet" type="text/css" />




<script>

    function filterFloat(evt, input) {
        // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
        var key = window.Event ? evt.which : evt.keyCode;
        var chark = String.fromCharCode(key);
        var tempValue = input.value + chark;
        if (key >= 48 && key <= 57) {
            if (filter(tempValue) === false) {
                return false;
            } else {
                return true;
            }
        } else {
            if (key == 8 || key == 13 || key == 0) {
                return true;
            } else if (key == 44) {
                if (filter(tempValue) === false) {
                    return false;
                } else {
                    return true;
                }
            } else {
                return false;
            }
        }
    }
    function filter(__val__) {
        var preg = /^([0-9]+\,?[0-9]{0,2})$/;
        if (preg.test(__val__) === true) {
            return true;
        } else {
            return false;
        }

    }

</script>







<form action="../Controller/Create.php" class="col-md-12" method="post">
    <div class="row">
        <div class="col-md-12">
            <h3>Nuevo producto</h3>
            <hr />
        </div>
    </div>
    <div class="row">

        <div class="col-md-6">
            <label for="Referencia" class="required">Referencia</label>
            <input class="form-control text-box single-line" data-val="true" data-val-required="El campo referencia es obligatorio" id="Referencia" maxlength="20" name="Referencia" type="text" value="" />
        </div>

        <div class="col-md-6">
            <label for="Nombre" class="required">Nombre</label>
            <input class="form-control text-box single-line" data-val="true" data-val-required="El campo nombre es obligatorio" id="Nombre" maxlength="100" name="Nombre" type="text" value="" />
        </div>

    </div>
    <br />
    <div class="row">

        <div class="col-md-6">
            <span class="field-validation-valid" data-valmsg-for="Referencia" data-valmsg-replace="true"></span>
        </div>

        <div class="col-md-6">
            <span class="field-validation-valid" data-valmsg-for="Nombre" data-valmsg-replace="true"></span>
        </div>

    </div>
    <br />
    <div class="row">
        <div class="col-md-12">
            <label for="Descripcion" class="required">Descripción</label>
            <textarea id="Descripcion" name="Descripcion" maxlength="1000" class="form-control" style="height: 129px;"></textarea>
        </div>
    </div>
    <br />
    <div class="row">

        <div class="col-md-12">
            <span class="field-validation-valid" data-valmsg-for="Descripcion" data-valmsg-replace="true"></span>
        </div>

    </div>
    <br />
    <div class="row">
        <div class="col-md-6">
            <label for="IdTipoUnidad" class="required">Tipo unidades</label>
            <select class="form-control" data-val="true" data-val-number="The field IdTipoUnidad must be a number." data-val-required="The IdTipoUnidad field is required." id="IdTipoUnidad" name="IdTipoUnidad">
                <option selected="selected" value="0">SELECCIONE</option>
                <?php
                    foreach($dataTipoUnidad as $dat){
                        echo '<option value="'.$dat[idunidad].'">'.$dat[nombre].'</option>';
                    }
                ?>
            </select>
        </div>

        <div class="col-md-3">
            <label for="PrecioVenta" class="required">Precio</label>
            <input class="form-control text-box single-line" data-val="true" data-val-required="El campo precio de venta es obligatorio" id="sPrecioVenta" maxlength="10" name="sPrecioVenta" onkeypress="return Tools.SoloNumeros_Enteros_Decimales(event);" onkeyup="Tools.Formatear_enteros_decimales(this);" type="text" value="" />
        </div>

        <div class="col-md-3">
            <label for="IdTipoMoneda" class="required">Tipo de moneda</label>
            <select class="form-control" data-val="true" data-val-number="The field IdTipoMoneda must be a number." data-val-required="The IdTipoMoneda field is required." id="IdTipoMoneda" name="IdTipoMoneda">
                <option selected="selected" value="0">SELECCIONE</option>
                <option value="1">Pesos Colombianos</option>
                <option value="2">D&#243;lares Americanos</option>
            </select>
        </div>

    </div>
    <br />
    <div class="row">

        <div class="col-md-6">
        </div>

        <div class="col-md-3">
            <span class="field-validation-valid" data-valmsg-for="sPrecioVenta" data-valmsg-replace="true"></span>
        </div>

        <div class="col-md-3">
        </div>

    </div>
    <br />
    <div id="dvImpuestos">

        <div class="row">

            <div class="col-md-6">
                <label for="ImpuestoVentas" class="required">Tarifa  Impuesto de Ventas</label>
                <select class="form-control" data-val="true" data-val-number="The field IdTipoTarifa must be a number." data-val-required="The IdTipoTarifa field is required." id="IdTipoTarifa" name="IdTipoTarifa"><option selected="selected" value="-1">SELECCIONE</option>
                    <option value="0">0%</option>
                    <option value="5">5%</option>
                    <option value="19">19%</option>
                    <option value="16">16%</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="ImpuestoConsumo" class="required">Tarifa Impuesto al Consumo</label>
                <select class="form-control" data-val="true" data-val-number="The field IdTipoImpoconsumo must be a number." data-val-required="The IdTipoImpoconsumo field is required." id="IdTipoImpoconsumo" name="IdTipoImpoconsumo"><option value="-1">SELECCIONE</option>
                    <option value="1">No aplica 0 %</option>
                    <option value="2">Tarifa especial 2 %</option>
                    <option value="3">Tarifa especial 4 %</option>
                    <option value="4">Tarifa general 8 %</option>
                    <option value="5">Tarifa especial 16 %</option>
                </select>
            </div>

            <div id="dvValorFijo" class="col-md-2">
                <label for="ValorFijo" class="required">Valor</label>
                <input class="form-control text-box single-line" id="sValorFijo" maxlength="10" name="sValorFijo" onkeypress="return Tools.SoloNumeros_Enteros_Decimales(event);" onkeyup="Tools.Formatear_enteros_decimales(this);" type="text" value="" />
            </div>

        </div>
        <br />

        <div class="row">

            <div class="col-md-6">
                <label for="SwPrecioIncluidoImpuestos" class="required">¿El valor del impuesto está incluido en el precio del producto?</label>
                <select id="SwPrecioIncluidoImpuestos" name="SwPrecioIncluidoImpuestos" class="form-control">
                    <option value="1">SI</option>
                    <option value="0">NO</option>
                </select>
            </div>

            <div class="col-md-5">
                <label>Tarifa Retención en la fuente</label>
                <select id="IdTipoRetefuente" name="IdTipoRetefuente" class="form-control">
                    <option value="0">SELECCIONE</option>
                    <?php
                        foreach($dataRetefuente as $dat){
                            echo '<option value="'.$dat[id].'">'.$dat[concepto].'</option>';
                        }
                    ?>
                </select>

            </div>

            <!-- <div class="col-md-5">
                <label for="IdTipoRetefuente" class="required">Tarifa  Retención en la Fuente</label>
                <input id="IdTipoRetefuente" name="IdTipoRetefuente" value="0" hidden type="text" />
                <input ReadOnly="true" class="form-control text-box single-line" data-val="true" data-val-required="El campo retefuente es obligatorio" id="Retefuente" name="Retefuente" onclick="oForm.Mostrar();" type="text" value="" />
            </div>

            <div class="col-md-1">
                <a class="btnOption BotonBuscar" href="#" title="Agregar" onclick="oForm.Mostrar();"><i class="fa fa-search" aria-hidden="true"></i></a>
            </div> -->

        </div>
        <br />


        <div class="row">

            <div class="col-md-6">
            </div>

            <div class="col-md-6">
                <span class="field-validation-valid" data-valmsg-for="Retefuente" data-valmsg-replace="true"></span>
            </div>

        </div>
        <br />






        <div class="row">

            <div class="col-md-3">

                <label for="SwFactura" class="required">¿Permitir para facturas?</label>
                <select id="SwFactura" class="form-control" name="SwFactura">
                    <option value="-1">Seleccione</option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>

            </div>

            <div class="col-md-3">

                <label for="SwCompra" class="required">¿Permitir para compras?</label>
                <select id="SwCompra" class="form-control" name="SwCompra">
                    <option value="-1">Seleccione</option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>

            </div>

        </div>
        <br />




    </div>
    <div class="row">

        <div class="col-md-6">

            <a href="/demo/Gestion/Productos.php">Cancelar, regresar al listado</a>

        </div>

        <div class="col-md-6" style="text-align: right;">

            <button class="btn btn-primary" type="submit" name="insert_producto">
                Guardar
            </button>

        </div>

    </div>
    <br />
</form>










<div id="mAsistente" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tipos de retefuente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="divBusqueda">

                    <label for="Descripcion" class="obligatorio">Buscar por CONCEPTO</label>
                    <div class="row">
                        <div class="col-md-6">
                            <input class="form-control tt-query" name="txtBuscar" id="txtBuscar" type="text" placeholder="">
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary" onclick="oForm.Buscar();">Buscar</button>
                        </div>
                    </div>
                    <br />


                    <div class="row">
                        <div class="col-md-12">
                            <div id="vDatos">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label id="Mensaje" class="active"></label>
                    </div>
                </div>
                <br />

            </div>
            <div class="modal-footer">
                <input type="button" id="btnCancelar" onclick="oForm.cerrarAsistente();" class="btn btn-secondary" value="Cancelar" />
            </div>
        </div>
    </div>
</div>




<script src="/demo/Libs/Tools.js" type="text/javascript"></script>



<script type="text/javascript">



        $(document).ready(function () {

            oForm.init();

        });



        var oForm = new function () {



            this.Url = null;
            this.lstTipos = [];







            this.init = function () {



                if ($("#IdTipoMoneda").val() == 2) {

                    $("#dvImpuestos").hide();

                } else {

                    $("#dvImpuestos").show();

                }





                if ($("#IdTipoImpoconsumo").val() == 99) {

                    $("#dvValorFijo").show();

                } else {

                    $("#dvValorFijo").hide();

                }







                $("#IdTipoMoneda").change(function () {

                    if ($("#IdTipoMoneda").val() == 2) {

                        $("#dvImpuestos").hide();

                    } else {

                        $("#dvImpuestos").show();

                    }

                });






                $("#IdTipoImpoconsumo").change(function () {

                    if ($("#IdTipoImpoconsumo").val() == 99) {

                        $("#dvValorFijo").show();

                    } else {

                        $("#dvValorFijo").hide();

                    }

                });



                


                $(document).ready(function () {
                    $('input[type=text]').bind('copy paste', function (e) {
                        e.preventDefault();
                    });

                    $('input').attr('autocomplete', 'off');

                    $('input,textarea').bind('cut copy paste', function (e) {
                        e.preventDefault(); //disable cut,copy,paste
                    });
                });




            };







            this.Mostrar = function () {

                $("#txtBuscar").val("");
                $("#vDatos").html("");
                $("#mAsistente").modal({ show: true  });

            };

            this.cerrarAsistente = function () {

                $("#mAsistente").modal("hide");
                
            };

            this.Buscar = function () {

                var jsData = '{"b":"' + $("#txtBuscar").val().trim() + '" }';

                $.ajax({
                    url: this.Url + "BuscarRetefuente",
                    dataType: 'json',
                    contentType: "application/json",
                    type: "POST",
                    data: jsData,
                    success: function (data) {

                        oForm.lstTipos = data;
                        oForm.mostrarTipos();

                    }
                });


            };

            this.mostrarTipos = function () {

                var htmlContent = "";

                if (this.lstTipos.length > 0) {

                    var htmlContent = "<table class='table table-striped table-bordered dataTable no-footer dtr-inline collapsed' cellpadding='10' cellspacing='5'>";
                    htmlContent += "<thead><th>#</th><th>Concepto</th><th class='text-center' >Agregar</th></thead>";
                    htmlContent += "<tbody>";

                    for (var i = 0; i < this.lstTipos.length; i++) {

                        var item = this.lstTipos[i];

                        htmlContent += "<tr>";
                        htmlContent += "<td>" + item.IdTipo + "</td>";
                        htmlContent += "<td>" + item.Concepto + "</td>";
                        htmlContent += "<td class='text-center' ><a class='btnOption'   onclick='oForm.agregar(this);' oData='" + JSON.stringify(item) + "' href='#' title='Agregar'><i class='fa fa-plus-circle' aria-hidden='true'></i></a></td>";

                        htmlContent += "</tr>";

                    }


                    htmlContent += "</tbody></table>";


                } else {

                    htmlContent = "<Strong>No se han encontrado registros con los criterios de búsqueda seleccionados.</Strong>"

                }

                $("#vDatos").html(htmlContent);

            };

            this.agregar = function (f) {

                this.cerrarAsistente();

                var retefuente = JSON.parse($(f).attr("oData"));

                $('#IdTipoRetefuente').val(retefuente.IdTipo);
                $('#Retefuente').val(retefuente.Concepto);

            };




        }



</script>

<script type="text/javascript">

        oForm.Url = "/demo/Gestion/";

</script>



            </div>

        </div>

    </div>

    <div class="container-fluid footer">
        <div class="row">
            <div class="col-sm-2 logo">
                <img src="/demo/Content/images/logo-footer.png" class="img-fluid" />
            </div>
            <div class="col-sm-4 info">
                <p>NOBUTIC - FACTURACIÓN ELECTRÓNICA</p>
                <p>COLOMBIA</p>
                <p>&copy; Todos los derechos reservados.</p>
            </div>
        </div>
    </div>





</body>
</html>