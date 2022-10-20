<?php include_once 'Includes/usuario.php'; ?>

<?php
include_once 'Includes/db.php';
$objeto = new DB();
$conexion = $objeto->connect();
$consulta = "SELECT f.idfactura AS id, referencia AS ref, r.tipo AS res, t.razonsocial AS nom, precio, estado 
            FROM facturas f 
            INNER JOIN terceros t, resoluciones r, detalle_factura 
            WHERE t.id = f.idtercero;";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
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
                <a class="userMenu" data-toggle="collapse" href="#collapseExample"><i class="fa fa-user-circle"></i> <span class="nameOpts"><?php echo $user->getNombre(); ?> </span> <i class="fa fa-caret-right"></i></a>
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
                        <li><a href="Gestion/Inicio.php">Inicio</a></li>
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

                



<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>



<div class="row">
    <div class="col-md-12">
        <h3>Inicio</h3>
        <hr />
    </div>
</div>

<?php 
    include_once 'Includes/db.php';

    $objeto = new DB();
    $conexion = $objeto->connect();

    $consultaTotalFacturasRadicadas = "SELECT COUNT(*) FROM facturas";
    $resultadoConsulta1 = $conexion->prepare($consultaTotalFacturasRadicadas);
    $resultadoConsulta1->execute();
    $dataFactura = $resultadoConsulta1->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="row">
    <div class="col-sm-6">
        <div class="dashmodule yellow">
            <h3>Facturas Borrador</h3>
            <span>18</span>
            <p>$ 7.533.521,10</p>
        </div>
        <div class="dashmodule blue">
            <h3>Facturas Radicadas</h3>
            <span>18</span>
            <p>$ 30.078.976,60</p>
        </div>
    </div>
    <div class="col-sm-6">
        <div id="VisorVentas" class="col-md-12">

        </div>
    </div>
</div>
<br />
<br />

<hr />

<div class="row">
    <div class="col-sm-12">
        <b>Últimas Facturas</b>
    </div>
</div>
<br />


<div class="row">

    <div id="dvTable" class="col-sm-12">

        <table id='tblFacturacion' class='table table-striped table-bordered no-footer dtr-inline collapsed' style='width:100%'>
            <thead>
                <tr>
                    <th style="width:5%; text-align:center">#</th>
                    <th style="width:15%">Referencia</th>
                    <th style="width:10%">Resolución</th>
                    <th style="width:35%">Tercero</th>
                    <th style="width:10%; text-align:right">Valor</th>
                    <th style="width:5%" class="text-center">Estado</th>
                    <th style="width:10%" class="text-center">Descargar</th>
                    <th style="width:10%" class="text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($data as $dat){
                ?>
                <tr>
                    <td><?php echo $dat['id'] ?></td>
                    <td><?php echo $dat['ref'] ?></td>
                    <td><?php echo $dat['res'] ?></td>
                    <td><?php echo $dat['nom'] ?></td> 
                    <td><?php echo $dat['precio'] ?></td>
                    <td><?php echo $dat['estado'] ?></td> 
                    <td ALIGN="center">
                        <a class="btnOption" target="_Blank" href="" title="Descargar"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> </a>
                    </td>
                    <td ALIGN="center">
                        <a id="FVE358" class="btnOption" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" title="Opciones"><i class="fa fa-bars" aria-hidden="true"></i></a>
                        <div class="dropdown-menu" aria-labelledby="FVE358">
                            <a class="dropdown-item" href="../Gestion/crearNota?referencia=FVE358&amp;tipoNota=1">Crear Nota Crédito</a>
                        </div>&nbsp;&nbsp;&nbsp;
                        <a class="btnOption" href="#" title="Reenviar" onclick="oForm.mostrarReenviar(20132022000091);">
                            <i class="fa fa-envelope-square" aria-hidden="true"></i> 
                        </a>
                    </td>
                </tr>
                <?php
                    }
                ?> 

            </tbody>
        </table>

    </div>

</div>





    <div id="mDetalles" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;">

        <div class="modal-dialog modal-lg" role="document">

            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="titModal"><label id="Referencia"></label></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>



                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div id="vDetalle">
                            </div>
                        </div>
                    </div>

                </div>


                <div class="modal-footer">

                    <input type="button" id="btnCancelar" Onclick="return oForm.cerrarAsistente();" class="btn btn-secondary" value="Cancelar" />

                </div>


            </div>

        </div>

    </div>



<div id="mReenviar" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <h4 class="titModal">Reenviar factura</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>



            <div class="modal-body">


                <div id="dvContenidoReenvio">


                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-group">

                                <div id="tblDetalleFactura">
                                </div>

                            </div>

                        </div>

                    </div>
                    <br />



                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-group">

                                <label for="Email" class="required">Reenviar al siguiente email</label>
                                <input id="Email" name="Email" type="text" class="form-control" maxlength="100" />

                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div id="vErroresNotasReenviar" class="col-md-12">
                            <div class="alert alert-danger" role="alert">
                                <div id="ErrorMessageReenviar">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />


                </div>

                <div id="dvMensajeExito">

                    <div class="row">

                        <div class="col-md-12">
                            <div class="alert alert-success" role="alert">
                                <p>Se ha programado el reenvio de la factura.</p>
                            </div>
                        </div>

                    </div>
                    <br />

                </div>


            </div>


            <div class="modal-footer">


                <div id="BotoneContenidoReenvio">


                    <input type="button" id="btnCancelar" Onclick="return oForm.cerrarAsistente();" class="btn btn-secondary" value="Cancelar" />

                    <button class="btn btn-primary" type="submit" name="action" onclick="return oForm.Reenviar();">
                        Aceptar
                    </button>

                </div>




                <div id="BotoneExitoReenvio">


                    <button class="btn btn-primary" type="submit" name="action" onclick="return oForm.cerrarAsistente();">
                        Aceptar
                    </button>

                </div>



            </div>


        </div>

    </div>

</div>




<script src="Libs/Tools.js"></script>
    <script type="text/javascript">

        oForm.Radicadas = {"TotalFacturas":53,"sTotalFacturas":"53","ValorTotal":30078976.60,"sValorTotal":"30.078.976,60","lstFacturas":[{"Consecutivo":1,"IdFactura":10112020000067,"IdEmpresa":1011,"Fecha":"9/30/2020 12:00:00 AM","Referencia":"SETT96053","Numero":1,"TipoFactura":"CT","IdTercero":10110004,"ValorTotal":23800.00,"sValorTotal":"23.800,00","Plazo":0,"IdUsuario":1008,"sFechaHora":"30/09/2020 - 09:43:18","sRazonSocial":"EMPRESA DEMO SAS","sTercero":"CARLOS  GOMEZ ","sUsuario":"Maria Alejandra Afanador ","sEstado":"Finalizada","RutaFactura":"","IdEstado":2,"lstFacturaDetalle":[{"Consecutivo":1,"IdFacturaDetalle":101120200000671,"IdFactura":10112020000067,"IdProducto":10110051,"CodigoProducto":"REF039","Unidades":1,"sUnidades":null,"ValorUnitario":20000.00,"sValorUnitario":"20.000,00","ValorTotal":23800.00,"sValorTotal":"23.800,00","ValorDescuento":0.00,"sValorDescuento":"0,00","ImpuestoVentas":3800.00,"sImpuestoVentas":"3.800,00","ImpuestoConsumo":0.00,"sImpuestoConsumo":"0,00","IdUsuario":1008,"sProducto":"AAAAA"}],"Cufe":"","RutaFacturaXML":"","IdEstadoServicio":1,"codeContencion":"MTAxMTIwMjAwMDAwNjc=","SwFacturaPOS":0,"sResolucion":"Factura Electrónica","EmailTercero":"JJCARPINTERIA@GMAIL.COM"},{"Consecutivo":2,"IdFactura":10112020000066,"IdEmpresa":1011,"Fecha":"9/28/2020 12:00:00 AM","Referencia":"SETT96052","Numero":1,"TipoFactura":"CT","IdTercero":10110018,"ValorTotal":23800.00,"sValorTotal":"23.800,00","Plazo":30,"IdUsuario":1008,"sFechaHora":"28/09/2020 - 21:01:51","sRazonSocial":"EMPRESA DEMO SAS","sTercero":"JOPSAN RODRIGUEZ RODRIGUEZ GONZALEZ","sUsuario":"Maria Alejandra Afanador ","sEstado":"Finalizada","RutaFactura":"","IdEstado":2,"lstFacturaDetalle":[{"Consecutivo":1,"IdFacturaDetalle":101120200000661,"IdFactura":10112020000066,"IdProducto":10110051,"CodigoProducto":"REF039","Unidades":1,"sUnidades":null,"ValorUnitario":20000.00,"sValorUnitario":"20.000,00","ValorTotal":23800.00,"sValorTotal":"23.800,00","ValorDescuento":0.00,"sValorDescuento":"0,00","ImpuestoVentas":3800.00,"sImpuestoVentas":"3.800,00","ImpuestoConsumo":0.00,"sImpuestoConsumo":"0,00","IdUsuario":1008,"sProducto":"AAAAA"}],"Cufe":"","RutaFacturaXML":"","IdEstadoServicio":1,"codeContencion":"MTAxMTIwMjAwMDAwNjY=","SwFacturaPOS":0,"sResolucion":"Factura Electrónica","EmailTercero":"JOPSANRODRIGUEZGONZALEZ@GMAIL.COM"},{"Consecutivo":3,"IdFactura":10112020000065,"IdEmpresa":1011,"Fecha":"9/23/2020 12:00:00 AM","Referencia":"SETT96051","Numero":1,"TipoFactura":"CT","IdTercero":10110017,"ValorTotal":5230420.00,"sValorTotal":"5.230.420,00","Plazo":0,"IdUsuario":1008,"sFechaHora":"23/09/2020 - 11:13:46","sRazonSocial":"EMPRESA DEMO SAS","sTercero":"IVAN EDGAR ROMERO HERNANDEZ","sUsuario":"Maria Alejandra Afanador ","sEstado":"Finalizada","RutaFactura":"","IdEstado":2,"lstFacturaDetalle":[{"Consecutivo":1,"IdFacturaDetalle":101120200000651,"IdFactura":10112020000065,"IdProducto":10110053,"CodigoProducto":"CORRETAJE NO GRAVADO","Unidades":1,"sUnidades":null,"ValorUnitario":5230420.00,"sValorUnitario":"5.230.420,00","ValorTotal":5230420.00,"sValorTotal":"5.230.420,00","ValorDescuento":0.00,"sValorDescuento":"0,00","ImpuestoVentas":0.00,"sImpuestoVentas":"0,00","ImpuestoConsumo":0.00,"sImpuestoConsumo":"0,00","IdUsuario":1008,"sProducto":"CORRETAJE NO GRAVADO"}],"Cufe":"","RutaFacturaXML":"","IdEstadoServicio":1,"codeContencion":"MTAxMTIwMjAwMDAwNjU=","SwFacturaPOS":0,"sResolucion":"Factura Electrónica","EmailTercero":"IVANERH@HOTMAIL.ES"},{"Consecutivo":4,"IdFactura":10112020000063,"IdEmpresa":1011,"Fecha":"4/1/2020 12:00:00 AM","Referencia":"SETT96050","Numero":1,"TipoFactura":"CT","IdTercero":30004,"ValorTotal":222589.50,"sValorTotal":"222.589,50","Plazo":0,"IdUsuario":1008,"sFechaHora":"01/04/2020 - 21:44:06","sRazonSocial":"EMPRESA DEMO SAS","sTercero":"GRUPO EMPRESARIAL CONSUEGRA SANTOS","sUsuario":"Maria Alejandra Afanador ","sEstado":"Finalizada","RutaFactura":"","IdEstado":2,"lstFacturaDetalle":[{"Consecutivo":1,"IdFacturaDetalle":10112020000063365,"IdFactura":10112020000063,"IdProducto":50008,"CodigoProducto":"REF008","Unidades":3,"sUnidades":null,"ValorUnitario":62350.00,"sValorUnitario":"62.350,00","ValorTotal":222589.50,"sValorTotal":"222.589,50","ValorDescuento":0.00,"sValorDescuento":"0,00","ImpuestoVentas":35539.50,"sImpuestoVentas":"35.539,50","ImpuestoConsumo":0.00,"sImpuestoConsumo":"0,00","IdUsuario":1008,"sProducto":"CAMARON TIGRE"}],"Cufe":"","RutaFacturaXML":"","IdEstadoServicio":1,"codeContencion":"MTAxMTIwMjAwMDAwNjM=","SwFacturaPOS":0,"sResolucion":"Factura Electrónica","EmailTercero":"CONSUEGRAX@HOTMAIL.COM"},{"Consecutivo":5,"IdFactura":10112020000060,"IdEmpresa":1011,"Fecha":"4/1/2020 12:00:00 AM","Referencia":"SETT96049","Numero":1,"TipoFactura":"CT","IdTercero":30009,"ValorTotal":142205.00,"sValorTotal":"142.205,00","Plazo":0,"IdUsuario":1008,"sFechaHora":"01/04/2020 - 21:12:13","sRazonSocial":"EMPRESA DEMO SAS","sTercero":"GEORGE SAS","sUsuario":"Maria Alejandra Afanador ","sEstado":"Radicada DIAN","RutaFactura":"","IdEstado":4,"lstFacturaDetalle":[{"Consecutivo":1,"IdFacturaDetalle":10112020000060362,"IdFactura":10112020000060,"IdProducto":10110024,"CodigoProducto":"REF023","Unidades":5,"sUnidades":null,"ValorUnitario":23900.00,"sValorUnitario":"23.900,00","ValorTotal":142205.00,"sValorTotal":"142.205,00","ValorDescuento":0.00,"sValorDescuento":"0,00","ImpuestoVentas":22705.00,"sImpuestoVentas":"22.705,00","ImpuestoConsumo":0.00,"sImpuestoConsumo":"0,00","IdUsuario":1008,"sProducto":"CADENA ESLABONADA GALVANIZADA 3/8 PULGADA X METRO"}],"Cufe":"","RutaFacturaXML":"","IdEstadoServicio":1,"codeContencion":"MTAxMTIwMjAwMDAwNjA=","SwFacturaPOS":0,"sResolucion":"Factura Electrónica","EmailTercero":"GEORGE@GMAIL.COM"},{"Consecutivo":6,"IdFactura":10112020000059,"IdEmpresa":1011,"Fecha":"4/1/2020 12:00:00 AM","Referencia":"SETT96048","Numero":1,"TipoFactura":"CT","IdTercero":20002,"ValorTotal":515270.00,"sValorTotal":"515.270,00","Plazo":0,"IdUsuario":1008,"sFechaHora":"01/04/2020 - 21:10:31","sRazonSocial":"EMPRESA DEMO SAS","sTercero":"CARLOS MANUEL SUAREZ JEREZ","sUsuario":"Maria Alejandra Afanador ","sEstado":"Finalizada","RutaFactura":"","IdEstado":2,"lstFacturaDetalle":[{"Consecutivo":1,"IdFacturaDetalle":10112020000059360,"IdFactura":10112020000059,"IdProducto":10110040,"CodigoProducto":"REF040","Unidades":6,"sUnidades":null,"ValorUnitario":18000.00,"sValorUnitario":"18.000,00","ValorTotal":128520.00,"sValorTotal":"128.520,00","ValorDescuento":0.00,"sValorDescuento":"0,00","ImpuestoVentas":20520.00,"sImpuestoVentas":"20.520,00","ImpuestoConsumo":0.00,"sImpuestoConsumo":"0,00","IdUsuario":1008,"sProducto":"AMARRE REUTILIZABLE COLORES T4 (13CM) X8, T7 (20CM) X 4"},{"Consecutivo":2,"IdFacturaDetalle":10112020000059361,"IdFactura":10112020000059,"IdProducto":10110037,"CodigoProducto":"REF037","Unidades":5,"sUnidades":null,"ValorUnitario":65000.00,"sValorUnitario":"65.000,00","ValorTotal":386750.00,"sValorTotal":"386.750,00","ValorDescuento":0.00,"sValorDescuento":"0,00","ImpuestoVentas":61750.00,"sImpuestoVentas":"61.750,00","ImpuestoConsumo":0.00,"sImpuestoConsumo":"0,00","IdUsuario":1008,"sProducto":"BROCA DE TITANIO 562"}],"Cufe":"","RutaFacturaXML":"","IdEstadoServicio":1,"codeContencion":"MTAxMTIwMjAwMDAwNTk=","SwFacturaPOS":0,"sResolucion":"Factura Electrónica","EmailTercero":"CARLOS4562@GMAIL.COM"},{"Consecutivo":7,"IdFactura":10112020000058,"IdEmpresa":1011,"Fecha":"4/1/2020 12:00:00 AM","Referencia":"SETT96047","Numero":1,"TipoFactura":"CT","IdTercero":30015,"ValorTotal":57941.10,"sValorTotal":"57.941,10","Plazo":0,"IdUsuario":1008,"sFechaHora":"01/04/2020 - 21:06:10","sRazonSocial":"EMPRESA DEMO SAS","sTercero":"CHAMPIONS SAS","sUsuario":"Maria Alejandra Afanador ","sEstado":"Finalizada","RutaFactura":"","IdEstado":2,"lstFacturaDetalle":[{"Consecutivo":1,"IdFacturaDetalle":10112020000058359,"IdFactura":10112020000058,"IdProducto":50015,"CodigoProducto":"REF015","Unidades":3,"sUnidades":null,"ValorUnitario":16230.00,"sValorUnitario":"16.230,00","ValorTotal":57941.10,"sValorTotal":"57.941,10","ValorDescuento":0.00,"sValorDescuento":"0,00","ImpuestoVentas":9251.10,"sImpuestoVentas":"9.251,10","ImpuestoConsumo":0.00,"sImpuestoConsumo":"0,00","IdUsuario":1008,"sProducto":"AROMÁTICA"}],"Cufe":"","RutaFacturaXML":"","IdEstadoServicio":1,"codeContencion":"MTAxMTIwMjAwMDAwNTg=","SwFacturaPOS":0,"sResolucion":"Factura Electrónica","EmailTercero":"JORGE.RUIZ@EQS.COM.CO"},{"Consecutivo":8,"IdFactura":10112020000057,"IdEmpresa":1011,"Fecha":"4/1/2020 12:00:00 AM","Referencia":"SETT96046","Numero":1,"TipoFactura":"CT","IdTercero":10110010,"ValorTotal":257040.00,"sValorTotal":"257.040,00","Plazo":0,"IdUsuario":1008,"sFechaHora":"01/04/2020 - 21:05:18","sRazonSocial":"EMPRESA DEMO SAS","sTercero":"CONJUNTO RESIDENCIAL ALAMEDA REAL","sUsuario":"Maria Alejandra Afanador ","sEstado":"Finalizada","RutaFactura":"","IdEstado":2,"lstFacturaDetalle":[{"Consecutivo":1,"IdFacturaDetalle":10112020000057358,"IdFactura":10112020000057,"IdProducto":10110026,"CodigoProducto":"REF026","Unidades":3,"sUnidades":null,"ValorUnitario":72000.00,"sValorUnitario":"72.000,00","ValorTotal":257040.00,"sValorTotal":"257.040,00","ValorDescuento":0.00,"sValorDescuento":"0,00","ImpuestoVentas":41040.00,"sImpuestoVentas":"41.040,00","ImpuestoConsumo":0.00,"sImpuestoConsumo":"0,00","IdUsuario":1008,"sProducto":"ALAMBRE SOLDADURA 0.035*5KG/200MM"}],"Cufe":"","RutaFacturaXML":"","IdEstadoServicio":1,"codeContencion":"MTAxMTIwMjAwMDAwNTc=","SwFacturaPOS":0,"sResolucion":"Factura Electrónica","EmailTercero":"CRALAMEDAREAL@HOTMAIL.COM"},{"Consecutivo":9,"IdFactura":10112020000049,"IdEmpresa":1011,"Fecha":"3/18/2020 12:00:00 AM","Referencia":"SETT96045","Numero":1,"TipoFactura":"CT","IdTercero":10110004,"ValorTotal":180880.00,"sValorTotal":"180.880,00","Plazo":0,"IdUsuario":1008,"sFechaHora":"18/03/2020 - 17:20:52","sRazonSocial":"EMPRESA DEMO SAS","sTercero":"CARLOS  GOMEZ ","sUsuario":"Maria Alejandra Afanador ","sEstado":"Finalizada","RutaFactura":"","IdEstado":2,"lstFacturaDetalle":[{"Consecutivo":1,"IdFacturaDetalle":10112020000049352,"IdFactura":10112020000049,"IdProducto":10110045,"CodigoProducto":"REF045","Unidades":5,"sUnidades":null,"ValorUnitario":31000.00,"sValorUnitario":"31.000,00","ValorTotal":180880.00,"sValorTotal":"180.880,00","ValorDescuento":3000.00,"sValorDescuento":"3.000,00","ImpuestoVentas":28880.00,"sImpuestoVentas":"28.880,00","ImpuestoConsumo":0.00,"sImpuestoConsumo":"0,00","IdUsuario":1008,"sProducto":"CANDADO BRONCE 60MM"}],"Cufe":"","RutaFacturaXML":"","IdEstadoServicio":1,"codeContencion":"MTAxMTIwMjAwMDAwNDk=","SwFacturaPOS":0,"sResolucion":"Factura Electrónica","EmailTercero":"JJCARPINTERIA@GMAIL.COM"},{"Consecutivo":10,"IdFactura":10112020000048,"IdEmpresa":1011,"Fecha":"3/18/2020 12:00:00 AM","Referencia":"SETT96044","Numero":1,"TipoFactura":"CT","IdTercero":10110004,"ValorTotal":257040.00,"sValorTotal":"257.040,00","Plazo":0,"IdUsuario":1008,"sFechaHora":"18/03/2020 - 16:40:26","sRazonSocial":"EMPRESA DEMO SAS","sTercero":"CARLOS  GOMEZ ","sUsuario":"Maria Alejandra Afanador ","sEstado":"Finalizada","RutaFactura":"","IdEstado":2,"lstFacturaDetalle":[{"Consecutivo":1,"IdFacturaDetalle":10112020000048350,"IdFactura":10112020000048,"IdProducto":10110026,"CodigoProducto":"REF026","Unidades":3,"sUnidades":null,"ValorUnitario":72000.00,"sValorUnitario":"72.000,00","ValorTotal":257040.00,"sValorTotal":"257.040,00","ValorDescuento":0.00,"sValorDescuento":"0,00","ImpuestoVentas":41040.00,"sImpuestoVentas":"41.040,00","ImpuestoConsumo":0.00,"sImpuestoConsumo":"0,00","IdUsuario":1008,"sProducto":"ALAMBRE SOLDADURA 0.035*5KG/200MM"}],"Cufe":"","RutaFacturaXML":"","IdEstadoServicio":1,"codeContencion":"MTAxMTIwMjAwMDAwNDg=","SwFacturaPOS":0,"sResolucion":"Factura Electrónica","EmailTercero":"JJCARPINTERIA@GMAIL.COM"}]};
        oForm.Url = "/demo/Gestion/";

    </script>



   
    <script type="text/javascript">

       
        var oGrafica = new function () {

    
            this.lstDatosVentas = [];

            this.init = function () {



                var lstPeriodos = [];
                var lstMetas = [];
                var lstValores1 = [];

                var lstColores = ['#429EBC', '#429EBC', '#429EBC', '#429EBC', '#429EBC'];
                var datos = [];

                
                var lstPeriodos = [];

                //var lstPeriodos = ['Ene', 'Feb', 'Mar' , 'Abr', 'May' , 'Jun' , 'Jul'];
                
                if (this.lstDatosVentas.length > 0) {
            
                    for (var i = 0; i < this.lstDatosVentas.length; i++) {

                        var item = this.lstDatosVentas[i];

                        lstPeriodos.push(item.sMes);

                    }
            
                }



                // var lstEjecucion = [100, 120, 80 , 250, 0 , 0];

                var lstEjecucion = [];

                if (this.lstDatosVentas.length > 0) {
            
                    for (var i = 0; i < this.lstDatosVentas.length; i++) {

                        var item = this.lstDatosVentas[i];

                        lstEjecucion.push(item.ValorTotal);

                    }
            
                }
      

                var dsValores = {
                    label: "Ingresos",
                    fill: false,
                    lineTension: 0.1,
                    borderWidth: 5,
                    borderColor: lstColores[0],
                    backgroundColor: lstColores[0],
                    data: lstEjecucion
                }

                datos.push(dsValores);
     

                this.barChartData1 = {
                    labels: lstPeriodos,
                    datasets: datos

                }


                $("#VisorVentas").html("");
                $("#VisorVentas").html("<canvas id='G1' height='100' width='250'></canvas>");

                var ctx1 = document.getElementById("G1").getContext("2d");


                var myChart = new Chart(ctx1, {
                    type: 'bar',
                    data: this.barChartData1,
                    tooltipTemplate: "<%= value %> Files",
                    options: {
                        responsive: true
                    }
                });






            };





      


        }



    </script>



    <script type="text/javascript">

            oGrafica.lstDatosVentas = [{"IdMes":5,"sMes":"May","ValorTotal":0.00,"sValorTotal":"0,00"},{"IdMes":6,"sMes":"Jun","ValorTotal":0.00,"sValorTotal":"0,00"},{"IdMes":7,"sMes":"Jul","ValorTotal":0.00,"sValorTotal":"0,00"},{"IdMes":8,"sMes":"Ago","ValorTotal":0.00,"sValorTotal":"0,00"},{"IdMes":9,"sMes":"Sep","ValorTotal":23800.00,"sValorTotal":"23.800,00"},{"IdMes":10,"sMes":"Oct","ValorTotal":185640.00,"sValorTotal":"185.640,00"}];


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
