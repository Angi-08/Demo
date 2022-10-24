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
                        <li><a href="/demo/Includes/logout.php">Cerrar Sesión</a></li>
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

                






<form id="formPagina" name="formPagina" class="col-md-12" method="post">




    <input id="IdEmpleado" name="IdEmpleado" type="hidden" />







    <div class="row">

        <div class="col-md-12">

            <h3>Empleados</h3>
            <hr />

        </div>

        <div class="col-md-12" style="text-align: right;">

            <a href="/demo/Nomina/NuevoEmpleado" class="btn btn-primary">Nuevo empleado</a>

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

            <table id='tblEmpleados' class='table table-striped table-bordered no-footer dtr-inline collapsed' style='width:100%'>
                <thead>
                    <tr>
                        
                        <th style='text-align:center'>#</th>
                        <th>Tipo de identificación</th>
                        <th>Identificación</th>
                        <th>Empleado</th>
                        <th>Empezo</th>
                        <th>Salario</th>
                        <th class="text-center">Opciones</th>

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

        this.lstEmpleados = [];
        this.Url = null;
        this.UrlLoader = null;
        this.IdEmpleado = null;


        this.init = function () {

            this.mostrarloader();
            this.mostrarEmpleados();

        };


        this.mostrarEmpleados = function () {


            var table = $('#tblEmpleados').DataTable();
            table.destroy(); 

            

            var htmlContent = "";

            if (this.lstEmpleados.length > 0) {

                for (var i = 0; i < this.lstEmpleados.length; i++) {

                    var item = this.lstEmpleados[i];

                    htmlContent += "<tr>";
                    htmlContent += "<td style='text-align:center'><b>" + item.Consecutivo + "</b></td>";
                    htmlContent += "<td>" + item.sTipoDocumento +"</td>";
                    htmlContent += "<td>" + item.NumeroDocumento +"</b></td>";
                    htmlContent += "<td>" + item.NombreCompleto +"</td>";
                    htmlContent += "<td>" + item.sFechaInicioContrato + "</td>";
                    htmlContent += "<td style='text-align:right' >$" + item.sSueldo + "</td>";
                 

                    // Opciones

                    htmlContent += "<td class='text-center' >";

                    htmlContent += "<a id='" + item.Consecutivo + "' class='btnOption' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' href='#' title='Opciones'><i class='fa fa-bars' aria-hidden='true'></i></a>";
                    htmlContent += "<div class='dropdown-menu' aria-labelledby='"+ item.Consecutivo +"'>";

                    htmlContent += "<a class='dropdown-item' href='#' onclick='oForm.Editar(" + item.IdEmpleado + ");'  >Editar</a>";


                    if(item.SwTieneNominas == 0){

                        htmlContent += "<a class='dropdown-item' href='#' onclick='oForm.mostrarEliminar(" + item.IdEmpleado + ");' >Eliminar</a>";
                    
                    }

                    htmlContent += "</tr>";


                }

            } else {

                htmlContent = "<Strong>No se han encontrado registros con los criterios de búsqueda seleccionados.</Strong>"

            }

            this.cerrarloader();
            $("#tblEmpleados tbody").html(htmlContent);

            $("#tblEmpleados").DataTable({
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

            $("#IdEmpleado").val(b);
            document.getElementById("formPagina").submit();

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

            this.IdEmpleado = id;

            for (var i = 0; i < this.lstEmpleados.length; i++) {

                var item = this.lstEmpleados[i];
          
                if(item.IdEmpleado == id){
                    
                    $("#lblMensaje").html("¿Esta seguro que desea eliminar a " + item.NombreCompleto + "?");
                
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

            var jsData = '{"i":"' + this.IdEmpleado + '"  }';

            $.ajax({
                url: this.Url + "EliminarEmpleado",
                dataType: 'json',
                contentType: "application/json",
                type: "POST",
                data: jsData,
                success: function (data) {

                    oForm.lstEmpleados = data;
                    oForm.mostrarEmpleados();

                }
            });

        };



    }



</script>




<script type="text/javascript">

    oForm.lstEmpleados = [{"Consecutivo":1,"IdEmpleado":10110001,"IdEmpresa":1011,"IdTipoTrabajador":"01","IdSubTipoTrabajador":"00","IdTipoDocumento":13,"sTipoDocumento":"Cédula de ciudadanía","NumeroDocumento":"1","PrimerApellido":"R","SegundoApellido":"","PrimerNombre":"A","OtrosNombres":"R","NombreCompleto":"A R R ","IdPaisTrabajo":"169","IdDepartamento":91,"IdMunicipio":91263,"DireccionTrabajo":"CL","SwSalarioIntegral":0,"IdTipoContrato":2,"Sueldo":1200000.00,"sSueldo":"1.200.000,00","IdFormaPago":1,"IdMetodoPago":"13","IdBanco":0,"IdTipoCuenta":0,"NumeroCuenta":"","SwTieneNominas":1,"Email":null,"Telefono":null,"sFechaInicioContrato":"01/01/2022","sFechaFinalContrato":"01/01/1900","IdPeriocidad":0,"AuxilioTransporte":0,"sAuxilioTransporte":null,"Dias":-44560,"SwAltoRiesgo":0}];
    oForm.Url = "/demo/Nomina/";
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
