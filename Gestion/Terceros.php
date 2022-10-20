<?php session_start(); ?>
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
    <link rel="shortcut icon" type="image/x-icon" href="/demo/Content/images/favicon.ico">

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
                <a class="userMenu" data-toggle="collapse" href="#collapseExample"><i class="fa fa-user-circle"></i> <span class="nameOpts">NombreUsuario </span> <i class="fa fa-caret-right"></i></a>
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
                        <li><a href="/demo/index.php">Inicio</a></li>
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

                





<form id="formTerceros" name="formTerceros" class="col-md-12" method="post">


    <input id="IdTercero" name="IdTercero" type="hidden" />


    <div class="row">

        <div class="col-md-12">

            <h3>Terceros</h3>
            <hr />

        </div>



    </div>
    <br />


    <div class="row">


        <div class="col-md-2">
            <label>Tipo de cliente</label>
        </div>

        <div class="col-md-2" style="text-align: right;">
        </div>


        <div class="col-md-8" style="text-align: right;">
        </div>



    </div>

    <div class="row">


        <div class="col-md-2">
            <select id="IdTipoCliente" name="IdTipoCliente" class="form-control">
                <option value="1">Cliente y Proveedor</option>
                <option value="2">Cliente</option>
                <option value="3">Proveedor</option>
                <option value="4">Ninguno</option>
            </select>
        </div>

        <div class="col-md-2" style="text-align: right;">
            <a href="#" class="btn btn-primary" onclick="oForm.Consultar();" >Consultar</a>
        </div>


        <div class="col-md-8" style="text-align: right;">

            <a href="/demo/Gestion/NuevoTercero" class="btn btn-primary">Nuevo tercero</a>

        </div>



    </div>
    <br />






    <div class="row">

        <div class="col-md-12 text-center">

            <div id="loader" class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>

        </div>

    </div>
    <br />


    <div class="row">

        <div id="dvTable" class="col-md-12">

            <table id='tblTerceros' class='table table-striped table-bordered no-footer dtr-inline collapsed' style='width:100%'>
                <thead>
                    <tr>
                        <th style='width:5%; text-align:center'>#</th>
                        <th style='width:20%'>Nombre</th>
                        <th style='width:30%'>Identificación</th>
                        <th style='width:20%'>Telefonos</th>
                        <th style='width:20%'>Dirección</th>
                        <th style='width:5%' class="text-center">Editar</th>
                        <th style='width:5%' class="text-center">Eliminar</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>

        </div>

    </div>
    <br />






</form>







<div id="mEliminar" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <h4 class="titModal">Eliminar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12">
                       <label id="lblMensaje" ></label>
                    </div>
                </div>

            </div>


            <div class="modal-footer">

                <input type="button" id="btnCancelar" Onclick="return oForm.cerrarAsistente();" class="btn btn-secondary" value="Cancelar" />

                <button class="btn btn-primary" type="submit" name="action" onclick="return oForm.Eliminar();">
                    Aceptar
                </button>

            </div>


        </div>

    </div>

</div>




<script type="text/javascript">


    $(document).ready(function () {

        oForm.init();

    });



    var oForm = new function () {

        this.lstTerceros = [];
        this.Url = null;
        this.UrlLoader = null;
        this.IdTercero = null;


        this.init = function () {

            this.Consultar();



        };





        this.Consultar = function () {


            this.mostrarloader();



            var jsData = '{"t":"' + $("#IdTipoCliente").val() + '"  }';

            $.ajax({
                url: this.Url + "ConsultarTerceros",
                dataType: 'json',
                contentType: "application/json",
                type: "POST",
                data: jsData,
                success: function (data) {

                    oForm.lstTerceros = data;
                    oForm.mostrarTerceros();

                }
            });

        };



        this.mostrarTerceros = function () {

            var table = $('#tblTerceros').DataTable();
            table.destroy(); 

            

            var htmlContent = "";

            if (this.lstTerceros.length > 0) {

                for (var i = 0; i < this.lstTerceros.length; i++) {

                    var item = this.lstTerceros[i];

                    htmlContent += "<tr>";
                    htmlContent += "<td style='text-align:center'><b>" + item.Consecutivo + "</b></td>";
                    htmlContent += "<td>" + item.RazonSocial +"</td>";
                    htmlContent += "<td>" + item.Identificacion +"</b></td>";
                    htmlContent += "<td>" + item.Telefonos + "</td>";
                    htmlContent += "<td>" + item.Direccion + "</td>";
                    htmlContent += "<td class='text-center' ><a class='btnOption' onclick='oForm.Editar(this);' oData='" + JSON.stringify(item) + "' href='#' title='Editar'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a></td>";

                    if(item.SwTieneFacturas == 1){
                        htmlContent += "<td></td>";
                    }else{
                        htmlContent += "<td class='text-center' ><a class='btnOption' onclick='oForm.mostrarEliminar("+ item.IdTercero +");' href='#' title='Editar'><i class='fa fa-trash' aria-hidden='true'></i></a></td>";
                    }

                    



                    htmlContent += "</tr>";

                }

            } else {

                htmlContent = "<Strong>No se han encontrado registros con los criterios de búsqueda seleccionados.</Strong>"

            }

            this.cerrarloader();
            $("#tblTerceros tbody").html(htmlContent);

            $("#tblTerceros").DataTable({
                searching:true,
                ordering:true,
                paging:true,
                responsive:true,
                "language": {
                    "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                }
            });

        };

        this.Editar = function (b) {

            var oTercero = JSON.parse($(b).attr("oData"));
            $("#IdTercero").val(oTercero.IdTercero);
            document.getElementById("formTerceros").submit();

        };

        this.mostrarloader = function () {

            $("#loader").show();
            $("#dvTable").hide();

        };

        this.cerrarloader = function () {

            $("#loader").hide();
            $("#dvTable").show();

        };

        this.mostrarEliminar = function (id) {

            this.IdTercero = id;

            for (var i = 0; i < this.lstTerceros.length; i++) {

                var item = this.lstTerceros[i];
          
                if(item.IdTercero == id){
                    
                    $("#lblMensaje").html("¿Esta seguro que desea eliminar a " + item.RazonSocial + "?");
                
                }

            }

            $("#mEliminar").modal({ show: true  });

        };

        this.cerrarAsistente = function () {

            $("#mEliminar").modal("hide");

        };

        this.Eliminar = function () {

            this.cerrarAsistente();
            this.mostrarloader();

            var jsData = '{"i":"' + this.IdTercero + '"  }';

            $.ajax({
                url: this.Url + "EliminarTercero",
                dataType: 'json',
                contentType: "application/json",
                type: "POST",
                data: jsData,
                success: function (data) {

                    oForm.lstTerceros = data;
                    oForm.mostrarTerceros();

                }
            });

        };



    }



</script>




<script type="text/javascript">

    oForm.lstTerceros = null;
    oForm.Url = "/demo/Gestion/";
    oForm.UrlLoader = "/demo/Content/img/loader.gif";

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
