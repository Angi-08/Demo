<?php
include_once '../includes/db.php';
$objeto = new DB();
$conexion = $objeto->connect();


$consultaPais = "SELECT * FROM paises";
$resultadoPais = $conexion->prepare($consultaPais);
$resultadoPais->execute();
$dataPais=$resultadoPais->fetchAll(PDO::FETCH_ASSOC);

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
                        <li><a href="/demo/Gestion/Inicio.php">Inicio</a></li>
                        <li><a href="/demo/Gestion/NuevaFactura.php">Nueva factura</a></li>
                        <li><a href="/demo/Gestion/FacturasBorrador.php">Facturas borrador</a></li>
                        <li><a href="/demo/Gestion/FacturasFinalizadas.php">Facturas finalizadas</a></li>
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

    function filterFloat_3d(evt, input) {

        // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
        var key = window.Event ? evt.which : evt.keyCode;
        var chark = String.fromCharCode(key);
        var tempValue = input.value + chark;
        if (key >= 48 && key <= 57) {
            if (filter_3d(tempValue) === false) {
                return false;
            } else {
                return true;
            }
        } else {
            if (key == 8 || key == 13 || key == 0) {
                return true;
            } else if (key == 44) {
                if (filter_3d(tempValue) === false) {
                    return false;
                } else {
                    return true;
                }
            } else {
                return false;
            }
        }
    }



    function filter_3d(__val__) {
        var preg = /^([0-9]+\,?[0-9]{0,3})$/;
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
            <h3>Nuevo tercero</h3>
            <hr />
        </div>
    </div>
    <div class="row">

        <div class="col-md-6">
            <label for="IdTipoEmpresa" class="active">Tipo empresa</label>
            <select class="form-control" data-val="true" data-val-number="The field IdTipoPersona must be a number." data-val-required="The IdTipoPersona field is required." id="IdTipoPersona" name="IdTipoPersona">
                <option selected="selected" value="1">Empresa - Persona Jur&#237;dica</option>
                <option value="2">Empresa - Persona Natural</option>
            </select>
        </div>

        <div class="col-md-6">
            <label for="IdTipoEmpresa" class="active">Pais</label>
            <select class="form-control" id="IdPais" name="IdPais">
                <option value="0">SELECCIONE</option>
            <option value="013">AFGANISTAN</option>
            <option value="017">ALBANIA</option>
            <option value="023">ALEMANIA</option>
            <option value="026">ARMENIA</option>
            <option value="027">ARUBA</option>
            <option value="029">BOSNIA-HERZEGOVINA</option>
            <option value="031">BURKINA FASSO</option>
            <option value="037">ANDORRA</option>
            <option value="040">ANGOLA</option>
            <option value="041">ANGUILLA</option>
            <option value="043">ANTIGUA Y BARBUDA</option>
            <option value="047">ANTILLAS HOLANDESAS</option>
            <option value="053">ARABIA SAUDITA</option>
            <option value="059">ARGELIA</option>
            <option value="063">ARGENTINA</option>
            <option value="069">AUSTRALIA</option>
            <option value="072">AUSTRIA</option>
            <option value="074">AZERBAIJAN</option>
            <option value="077">BAHAMAS</option>
            <option value="080">BAHREIN</option>
            <option value="081">BANGLADESH</option>
            <option value="083">BARBADOS</option>
            <option value="087">BELGICA</option>
            <option value="088">BELICE</option>
            <option value="090">BERMUDAS</option>
            <option value="091">BELARUS</option>
            <option value="093">BIRMANIA (MYANMAR)</option>
            <option value="097">BOLIVIA</option>
            <option value="101">BOTSWANA</option>
            <option value="105">BRASIL</option>
            <option value="108">BRUNEI DARUSSALAM</option>
            <option value="111">BULGARIA</option>
            <option value="115">BURUNDI</option>
            <option value="119">BUTAN</option>
            <option value="127">CABO VERDE</option>
            <option value="137">CAIMAN, ISLAS</option>
            <option value="141">CAMBOYA (KAMPUCHEA)</option>
            <option value="145">CAMERUN, REPUBLICA UNIDA DEL</option>
            <option value="149">CANADA</option>
            <option value="159">SANTA SEDE</option>
            <option value="165">COCOS (KEELING), ISLAS</option>
            <option selected="selected" value="52">COLOMBIA</option>
            <option value="173">COMORAS</option>
            <option value="177">CONGO</option>
            <option value="183">COOK, ISLAS</option>
            <option value="187">COREA (NORTE), REPUBLICA POPULAR DEMOCRATICA DE</option>
            <option value="190">COREA (SUR), REPUBLICA DE</option>
            <option value="193">COSTA DE MARFIL</option>
            <option value="196">COSTA RICA</option>
            <option value="198">CROACIA</option>
            <option value="199">CUBA</option>
            <option value="203">CHAD</option>
            <option value="211">CHILE</option>
            <option value="215">CHINA</option>
            <option value="218">TAIWAN (FORMOSA)</option>
            <option value="221">CHIPRE</option>
            <option value="229">BENIN</option>
            <option value="232">DINAMARCA</option>
            <option value="235">DOMINICA</option>
            <option value="239">ECUADOR</option>
            <option value="240">EGIPTO</option>
            <option value="242">EL SALVADOR</option>
            <option value="243">ERITREA</option>
            <option value="244">EMIRATOS ARABES UNIDOS</option>
            <option value="245">ESPA&#209;A</option>
            <option value="246">ESLOVAQUIA</option>
            <option value="247">ESLOVENIA</option>
            <option value="249">ESTADOS UNIDOS</option>
            <option value="251">ESTONIA</option>
            <option value="253">ETIOPIA</option>
            <option value="259">FEROE, ISLAS</option>
            <option value="267">FILIPINAS</option>
            <option value="271">FINLANDIA</option>
            <option value="275">FRANCIA</option>
            <option value="281">GABON</option>
            <option value="285">GAMBIA</option>
            <option value="287">GEORGIA</option>
            <option value="289">GHANA</option>
            <option value="293">GIBRALTAR</option>
            <option value="297">GRANADA</option>
            <option value="301">GRECIA</option>
            <option value="305">GROENLANDIA</option>
            <option value="309">GUADALUPE</option>
            <option value="313">GUAM</option>
            <option value="317">GUATEMALA</option>
            <option value="325">GUAYANA FRANCESA</option>
            <option value="329">GUINEA</option>
            <option value="331">GUINEA ECUATORIAL</option>
            <option value="334">GUINEA-BISSAU</option>
            <option value="337">GUAYANA</option>
            <option value="341">HAITI</option>
            <option value="345">HONDURAS</option>
            <option value="351">HONG KONG</option>
            <option value="355">HUNGRIA</option>
            <option value="361">INDIA</option>
            <option value="365">INDONESIA</option>
            <option value="369">IRAK</option>
            <option value="372">IRAN, REPUBLICA ISLAMICA DEL</option>
            <option value="375">IRLANDA (EIRE)</option>
            <option value="379">ISLANDIA</option>
            <option value="383">ISRAEL</option>
            <option value="386">ITALIA</option>
            <option value="391">JAMAICA</option>
            <option value="399">JAPON</option>
            <option value="403">JORDANIA</option>
            <option value="406">KASAJSTAN</option>
            <option value="410">KENIA</option>
            <option value="411">KIRIBATI</option>
            <option value="412">KIRGUIZISTAN</option>
            <option value="413">KUWAIT</option>
            <option value="420">LAOS, REPUBLICA POPULAR DEMOCRATICA DE</option>
            <option value="426">LESOTHO</option>
            <option value="429">LETONIA</option>
            <option value="431">LIBANO</option>
            <option value="434">LIBERIA</option>
            <option value="438">LIBIA (INCLUYE FEZZAN)</option>
            <option value="440">LIECHTENSTEIN</option>
            <option value="443">LITUANIA</option>
            <option value="445">LUXEMBURGO</option>
            <option value="447">MACAO</option>
            <option value="448">MACEDONIA</option>
            <option value="450">MADAGASCAR</option>
            <option value="455">MALAYSIA</option>
            <option value="458">MALAWI</option>
            <option value="461">MALDIVAS</option>
            <option value="464">MALI</option>
            <option value="467">MALTA</option>
            <option value="469">MARIANAS DEL NORTE, ISLAS</option>
            <option value="472">MARSHALL, ISLAS</option>
            <option value="474">MARRUECOS</option>
            <option value="477">MARTINICA</option>
            <option value="485">MAURICIO</option>
            <option value="488">MAURITANIA</option>
            <option value="493">MEXICO</option>
            <option value="494">MICRONESIA, ESTADOS FEDERADOS DE</option>
            <option value="496">MOLDAVIA</option>
            <option value="497">MONGOLIA</option>
            <option value="498">MONACO</option>
            <option value="501">MONSERRAT, ISLA</option>
            <option value="505">MOZAMBIQUE</option>
            <option value="507">NAMIBIA</option>
            <option value="508">NAURU</option>
            <option value="511">NAVIDAD (CHRISTMAS), ISLAS</option>
            <option value="517">NEPAL</option>
            <option value="521">NICARAGUA</option>
            <option value="525">NIGER</option>
            <option value="528">NIGERIA</option>
            <option value="531">NIUE, ISLA</option>
            <option value="535">NORFOLK, ISLA</option>
            <option value="538">NORUEGA</option>
            <option value="542">NUEVA CALEDONIA</option>
            <option value="545">PAPUASIA NUEVA GUINEA</option>
            <option value="548">NUEVA ZELANDIA</option>
            <option value="551">VANUATU</option>
            <option value="556">OMAN</option>
            <option value="566">PACIFICO, ISLAS (USA)</option>
            <option value="573">PAISES BAJOS (HOLANDA)</option>
            <option value="576">PAKISTAN</option>
            <option value="578">PALAU, ISLAS</option>
            <option value="580">PANAMA</option>
            <option value="586">PARAGUAY</option>
            <option value="589">PERU</option>
            <option value="593">PITCAIRN, ISLA</option>
            <option value="599">POLINESIA FRANCESA</option>
            <option value="603">POLONIA</option>
            <option value="607">PORTUGAL</option>
            <option value="611">PUERTO RICO</option>
            <option value="618">QATAR</option>
            <option value="628">REINO UNIDO</option>
            <option value="640">REPUBLICA CENTROAFRICANA</option>
            <option value="644">REPUBLICA CHECA</option>
            <option value="647">REPUBLICA DOMINICANA</option>
            <option value="660">REUNION</option>
            <option value="665">ZIMBABWE</option>
            <option value="670">RUMANIA</option>
            <option value="675">RUANDA</option>
            <option value="676">RUSIA</option>
            <option value="677">SALOMON, ISLAS</option>
            <option value="685">SAHARA OCCIDENTAL</option>
            <option value="687">SAMOA</option>
            <option value="690">SAMOA NORTEAMERICANA</option>
            <option value="695">SAN CRISTOBAL Y NIEVES</option>
            <option value="697">SAN MARINO</option>
            <option value="700">SAN PEDRO Y MIGUELON</option>
            <option value="705">SAN VICENTE Y LAS GRANADINAS</option>
            <option value="710">SANTA ELENA</option>
            <option value="715">SANTA LUCIA</option>
            <option value="720">SANTO TOME Y PRINCIPE</option>
            <option value="728">SENEGAL</option>
            <option value="731">SEYCHELLES</option>
            <option value="735">SIERRA LEONA</option>
            <option value="741">SINGAPUR</option>
            <option value="744">SIRIA, REPUBLICA ARABE DE</option>
            <option value="748">SOMALIA</option>
            <option value="750">SRI LANKA</option>
            <option value="756">SUDAFRICA, REPUBLICA DE</option>
            <option value="759">SUDAN</option>
            <option value="764">SUECIA</option>
            <option value="767">SUIZA</option>
            <option value="770">SURINAM</option>
            <option value="773">SWAZILANDIA</option>
            <option value="774">TADJIKISTAN</option>
            <option value="776">TAILANDIA</option>
            <option value="780">TANZANIA, REPUBLICA UNIDA DE</option>
            <option value="783">DJIBOUTI</option>
            <option value="787">TERRITORIO BRITANICO DEL OCEANO INDICO</option>
            <option value="788">TIMOR DEL ESTE</option>
            <option value="800">TOGO</option>
            <option value="805">TOKELAU</option>
            <option value="810">TONGA</option>
            <option value="815">TRINIDAD Y TOBAGO</option>
            <option value="820">TUNICIA</option>
            <option value="823">TURCAS Y CAICOS, ISLAS</option>
            <option value="825">TURKMENISTAN</option>
            <option value="827">TURQUIA</option>
            <option value="828">TUVALU</option>
            <option value="830">UCRANIA</option>
            <option value="833">UGANDA</option>
            <option value="845">URUGUAY</option>
            <option value="847">UZBEKISTAN</option>
            <option value="850">VENEZUELA</option>
            <option value="855">VIET NAM</option>
            <option value="863">VIRGENES, ISLAS (BRITANICAS)</option>
            <option value="866">VIRGENES, ISLAS (NORTEAMERICANAS)</option>
            <option value="870">FIJI</option>
            <option value="875">WALLIS Y FORTUNA, ISLAS</option>
            <option value="880">YEMEN</option>
            <option value="885">YUGOSLAVIA</option>
            <option value="888">ZAIRE</option>
            <option value="890">ZAMBIA</option>
            <option value="897">ZONA NEUTRAL PALESTINA</option>
            </select>
        </div>

    </div>
    <br />
    <div id="dvPersonaJuridica">

        <div class="row">
            <div class="col-md-12">
                <label for="RazonSocial" class="required">Razon Social</label>
                <input class="form-control text-box single-line" data-val="true" data-val-required="El campo razón social es obligatorio" id="RazonSocial" maxlength="100" name="RazonSocial" type="text" value="" />
            </div>
        </div>

        <div class="row">

            <div class="col-md-6">
                <span class="field-validation-valid" data-valmsg-for="RazonSocial" data-valmsg-replace="true"></span>
            </div>

        </div>
        <br />

    </div>
    <div id="dvPersonaNatural">

        <div class="row">
            <div class="col-md-6">
                <label for="Nombre1" class="required">Primer nombre</label>
                <input class="form-control text-box single-line" data-val="true" data-val-required="El campo primer nombre es obligatorio" id="Nombre1" maxlength="50" name="Nombre1" type="text" value="" />
            </div>

            <div class="col-md-6">
                <label for="Nombre2" class="active">Segundo nombre</label>
                <input class="form-control text-box single-line" id="Nombre2" maxlength="50" name="Nombre2" type="text" value="" />
            </div>
        </div>

        <div class="row">

            <div class="col-md-6">
                <span class="field-validation-valid" data-valmsg-for="Nombre1" data-valmsg-replace="true"></span>
            </div>

        </div>
        <br />

        <div class="row">
            <div class="col-md-6">
                <label for="Apellido1" class="required">Primer apellido</label>
                <input class="form-control text-box single-line" data-val="true" data-val-required="El campo primer apellido es obligatorio" id="Apellido1" maxlength="50" name="Apellido1" type="text" value="" />
            </div>

            <div class="col-md-6">
                <label for="Apellido2" class="active">Segundo apellido</label>
                <input class="form-control text-box single-line" id="Apellido2" maxlength="50" name="Apellido2" type="text" value="" />
            </div>
        </div>

        <div class="row">

            <div class="col-md-6">
                <span class="field-validation-valid" data-valmsg-for="Apellido1" data-valmsg-replace="true"></span>
            </div>

        </div>
        <br />

    </div>
    <div class="row">

        <div class="col-md-6">
            <label for="IdTipoIdentificacion" class="required">Tipo de identificación</label>
            <select id="IdTipoIdentificacion" name="IdTipoIdentificacion" class="form-control"></select>
        </div>





        <div id="dvIdentificacion" class="col-md-5">


            <div id="IdentificacionNormal">

                <label for="Identificacion" class="required">Identificación</label>
                <input class="form-control text-box single-line" data-val="true" data-val-required="El campo identficación es obligatorio" id="Identificacion" maxlength="20" name="Identificacion" onkeypress="if (event.keyCode &lt; 48 || event.keyCode > 57) event.returnValue = false;" onkeyup="oForm.GenerarDV(&#39;DigitoVerificacion&#39;);" type="text" value="" />

            </div>



            <div id="IdentificacionOtroPais">

                <label for="Identificacion" class="required">Identificación</label>
                <input class="form-control text-box single-line" data-val="true" data-val-required="El campo identficación es obligatorio" id="IdentificacionOtroPais" maxlength="20" name="IdentificacionOtroPais" type="text" value="" />

            </div>


        </div>


        <div id="dvDigitoVerificacion" class="col-md-1">
            <label for="DV" class="active">DV</label>
            <input class="form-control text-box single-line" id="DigitoVerificacion" name="DigitoVerificacion" readOnly="true" type="text" value="0" />
        </div>



    </div>
    <div class="row">

        <div class="col-md-6">
        </div>

        <div class="col-md-6">
            <span class="field-validation-valid" data-valmsg-for="Identificacion" data-valmsg-replace="true"></span>
        </div>

    </div>
    <br />
    <div class="row">

        <div class="col-md-6">
            <label for="Telefonos" class="active">Telefonos</label>
            <input class="form-control text-box single-line" data-val="true" data-val-minlength="Debe tener minimo 7 caracteres" data-val-minlength-min="7" id="Telefonos" maxlength="10" name="Telefonos" onkeypress="if (event.keyCode &lt; 48 || event.keyCode > 57) event.returnValue = false;" type="text" value="" />
        </div>


        <div class="col-md-6">
            <label for="Email" class="required">Email</label>
            <input class="form-control text-box single-line" data-val="true" data-val-email="El campo email no tiene el formato correcto" data-val-required="El campo email es obligatorio" id="Email" maxlength="100" name="Email" type="email" value="" />
        </div>

    </div>
    <div class="row">

        <div class="col-md-6">
            <span class="field-validation-valid" data-valmsg-for="Telefonos" data-valmsg-replace="true"></span>
        </div>

        <div class="col-md-6">
            <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
        </div>

    </div>
    <br />
    <div class="row">

        <div class="col-md-6">
            <label for="Direccion" class="required">Dirección</label>
            <input class="form-control text-box single-line" data-val="true" data-val-required="El campo Dirección es obligatorio" id="Direccion" maxlength="100" name="Direccion" type="text" value="" />
        </div>

        <div class="col-md-6">
            <label for="NombreContacto" class="active">Nombre del contacto</label>
            <input class="form-control text-box single-line" id="NombreContacto" maxlength="100" name="NombreContacto" type="text" value="" />
        </div>

    </div>
    <div class="row">

        <div class="col-md-6">
            <span class="field-validation-valid" data-valmsg-for="Direccion" data-valmsg-replace="true"></span>
        </div>

        <div class="col-md-6">
        </div>

    </div>
    <br />
    <div class="row">

        <div class="col-md-6">
            <label for="EmailContacto" class="active">Email contacto</label>
            <input class="form-control text-box single-line" data-val="true" data-val-email="El campo email contacto no tiene el formato correcto" id="EmailContacto" maxlength="100" name="EmailContacto" type="email" value="" />
        </div>

        <div class="col-md-6">
            <label for="TelefonosContacto" class="active">Telefono del contacto</label>
            <input class="form-control text-box single-line" data-val="true" data-val-minlength="Debe tener minimo 7 caracteres" data-val-minlength-min="7" id="TelefonosContacto" maxlength="20" name="TelefonosContacto" onkeypress="if (event.keyCode &lt; 48 || event.keyCode > 57) event.returnValue = false;" type="text" value="" />
        </div>

    </div>
    <div class="row">

        <div class="col-md-6">
            <span class="field-validation-valid" data-valmsg-for="EmailContacto" data-valmsg-replace="true"></span>
        </div>

        <div class="col-md-6">
            <span class="field-validation-valid" data-valmsg-for="TelefonosContacto" data-valmsg-replace="true"></span>
        </div>

    </div>
    <br />
    <div id="dvLugar">

        <div class="row">

            <div class="col-md-6">
                <label for="Departamento" class="required">Departamento</label>
                <select id="IdDepartamento" class="form-control" name="IdDepartamento"></select>
            </div>

            <div class="col-md-6">
                <label for="Municipio" class="required">Municipio</label>
                <select id="IdMunicipio" class="form-control" name="IdMunicipio"></select>
            </div>


        </div>
        <br />

        <div class="row">

            <div class="col-md-6">
                <label for="CodigoPostal" class="required">Código postal</label>
                <input class="form-control text-box single-line" data-val="true" data-val-required="El campo codigo postal es obligatorio" id="CodigoPostal" maxlength="6" name="CodigoPostal" readOnly="true" type="text" value="" />
            </div>

            <div class="col-md-6">
                <label for="Email" class="active">Barrio</label>
                <input class="form-control text-box single-line" id="Barrio" maxlength="100" name="Barrio" type="text" value="" />
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
                <span class="field-validation-valid" data-valmsg-for="CodigoPostal" data-valmsg-replace="true"></span>
            </div>

            <div class="col-md-6">
            </div>

        </div>
        <br />

    </div>
    <div id="dvExtranjero">

        <div class="row">

            <div class="col-md-6">
                <label for="EstadoExterno" class="required">Estado o Región</label>
                <input class="form-control text-box single-line" data-val="true" data-val-required="El campo Estado o Región es obligatorio" id="EstadoExterno" maxlength="50" name="EstadoExterno" type="text" value="" />
            </div>

            <div class="col-md-6">
                <label for="CiudadExterno" class="required">Ciudad</label>
                <input class="form-control text-box single-line" data-val="true" data-val-required="El campo Ciudad es obligatorio" id="CiudadExterno" maxlength="50" name="CiudadExterno" type="text" value="" />
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
                <span class="field-validation-valid" data-valmsg-for="EstadoExterno" data-valmsg-replace="true"></span>
            </div>

            <div class="col-md-6">
                <span class="field-validation-valid" data-valmsg-for="CiudadExterno" data-valmsg-replace="true"></span>
            </div>

        </div>
        <br />

    </div>
    <br />
    <br />
    <div id="dvDatosTributarios">


        <div class="row">

            <div class="col-md-12">
                <b>Datos tributarios</b>
                <hr />
            </div>

        </div>
        <br />

        <div class="row">

            <div class="col-md-6">
                <label for="IdTipoPaisIVA" class="required">Tarifa  ReteIVA</label>
                <select class="form-control valid" data-val="true" data-val-number="The field IdTipoRetefuenteIVA must be a number." data-val-required="The IdTipoRetefuenteIVA field is required." id="IdTipoRetefuenteIVA" name="IdTipoRetefuenteIVA"><option selected="selected" value="-1">SELECCIONE</option>
                    <option value="1">0 %</option>
                    <option value="2">15 %</option>
                </select>
            </div>


            <div class="col-md-6">
                <label for="TarifaReteICA" class="required">Tarifa  ReteICA</label>
                <input class="form-control text-box single-line" data-val="true" data-val-required="El campo Tarifa ReteIVA es obligatorio" id="TarifaReteICA" maxlength="10" name="TarifaReteICA" onkeypress="return filterFloat_3d(event,this);" type="text" value="" />
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
            </div>

            <div class="col-md-6">
                <span class="field-validation-valid" data-valmsg-for="TarifaReteICA" data-valmsg-replace="true"></span>
            </div>

        </div>
        <br />

        <div class="row">

            <div class="col-md-6">
                <label for="IdTipoImpuesto" class="required">Tipo de impuesto</label>
                <select class="form-control" data-val="true" data-val-number="The field IdTipoImpuesto must be a number." data-val-required="The IdTipoImpuesto field is required." id="IdTipoImpuesto" name="IdTipoImpuesto">
                    <option value="-1">SELECCIONE</option>
                    <option value="1">IVA</option>
                    <option value="2">INC</option>
                    <option value="3">INC Bolsas</option>
                    <option value="4">IVA e INC</option>
                    <option value="5">No aplica</option>
                </select>
            </div>


            <div class="col-md-6">
                <label for="TarifaReteICA" class="required">Tipo de Responsabilidad Fiscal</label>
                <select class="form-control" data-val="true" data-val-number="The field IdTipoResponsabilidadFiscal must be a number." data-val-required="The IdTipoResponsabilidadFiscal field is required." id="IdTipoResponsabilidadFiscal" name="IdTipoResponsabilidadFiscal">
                    <option value="-1">SELECCIONE</option>
                    <option value="1">Gran contribuyente</option>
                    <option value="2">Autorretenedor</option>
                    <option value="3">Agente de retenci&#243;n en el impuesto sobre las ventas</option>
                    <option value="4">R&#233;gimen simple de tributaci&#243;n</option>
                    <option value="5">No aplica</option>
                </select>
            </div>

        </div>
        <br />

        <div class="row">

            <div class="col-md-6">
                <label for="IdTipoRegimen" class="required"> Régimen Fiscal</label>
                <select class="form-control" data-val="true" data-val-number="The field IdTipoRegimen must be a number." data-val-required="The IdTipoRegimen field is required." id="IdTipoRegimen" name="IdTipoRegimen">
                    <option selected="selected" value="0">SELECCIONE</option>
                    <option value="1">Responsable IVA</option>
                    <option value="2">No responsable IVA</option>
                    <option value="3">Regimen simple</option>
                    <option value="4">Regimen ordinario</option>
                </select>
            </div>







        </div>






        <br />







        <div class="row">


            <div class="col-md-6">
                <label for="IdTipoPaisIVA" class="required">Número de días de plazo en compras por defecto</label>
                <select class="form-control" data-val="true" data-val-number="The field IdTipoPlazoCompraCredito must be a number." data-val-required="The IdTipoPlazoCompraCredito field is required." id="IdTipoPlazoCompraCredito" name="IdTipoPlazoCompraCredito">
                    <option value="-1">SELECCIONE</option>
                    <option value="6">0</option>
                    <option value="1">10</option>
                    <option value="2">15</option>
                    <option value="3">30</option>
                    <option value="4">45</option>
                    <option value="5">60</option>
                </select>
            </div>

            <div class="col-md-3">

                <label for="SwCliente" class="required">¿Es Cliente?</label>
                <select id="SwCliente" class="form-control" name="SwCliente">
                    <option value="-1">Seleccione</option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>

            </div>

            <div class="col-md-3">

                <label for="SwProveedor" class="required">¿Es Proveedor?</label>
                <select id="SwProveedor" class="form-control" name="SwProveedor">
                    <option value="-1">Seleccione</option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>

            </div>



        </div>


        <br />



    </div>
    <br />
    <br />
    <div class="row">

        <div class="col-md-6">

            <a href="/demo/Gestion/Terceros.php">Cancelar, regresar al listado</a>

        </div>

        <div class="col-md-6" style="text-align: right;">

            <button class="btn btn-primary" type="submit" name="insert_tercero">
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
                <h5 class="modal-title" id="exampleModalLabel">Tipos de Pais</h5>
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
        this.lstTipoIdentificacion = [];





        this.init = function () {





            this.ConfigurarFormulario($("#IdTipoPersona").val() , $("#IdPais").val());
            this.Eventos();

            $(document).ready(function () {
                $('input[type=text]').bind('copy paste', function (e) {
                    e.preventDefault();
                });

                $('input[type=email]').bind('copy paste', function (e) {
                    e.preventDefault();
                });

                $('input').attr('autocomplete', 'off');

                $('input[type=email]').keydown(function(e) {
                    if(e.keyCode==192)
                        return false;

                });
            });




            


            if($("#IdTipoIdentificacion").val() == 9){
                
                $("#IdentificacionOtroPais").show();
                $("#IdentificacionNormal").hide();
                $("#DigitoVerificacion").val(0);
            }else{
                
                $("#IdentificacionNormal").show();
                $("#IdentificacionOtroPais").hide();
      
            }

        };


        this.Eventos = function () {

            $("#IdTipoPersona").change(function () {

                oForm.ConfigurarFormulario($("#IdTipoPersona").val(), $("#IdPais").val());

            });

            $("#IdMunicipio").change(function () {

                $("#CodigoPostal").val($("#IdMunicipio").val());

            });

            $("#IdPais").change(function () {


                if( $("#IdPais").val() != 52){
                
                    $("#dvLugar").hide();
                    $("#dvExtranjero").show();
                    $("#dvDatosTributarios").hide();

                }else{
                
                    $("#dvLugar").show();
                    $("#dvExtranjero").hide();
                    $("#dvDatosTributarios").show();
                }

                oForm.ConfigurarFormulario($("#IdTipoPersona").val() , $("#IdPais").val());

            });




            $("#IdTipoIdentificacion").change(function () {

               
                if( $("#IdTipoIdentificacion").val() == 9){
                
                    $("#IdentificacionOtroPais").show();
                    $("#IdentificacionNormal").hide();
                    $("#DigitoVerificacion").val(0);
                }else{
                
                    $("#IdentificacionNormal").show();
                    $("#IdentificacionOtroPais").hide();
      
                }


            });




        };


        this.ConfigurarFormulario = function (TipoPersona,Pais) {


            if(Pais != 52){
            
                $("#dvLugar").hide();
                $("#dvExtranjero").show();
                $("#dvDatosTributarios").hide();

            }else{
            
                $("#dvLugar").show();
                $("#dvExtranjero").hide();
                $("#dvDatosTributarios").show();

            }
            

            if(TipoPersona == 1){

                var elemento = document.getElementById("dvIdentificacion");
                elemento.classList.remove("col-md-5");
                elemento.classList.remove("col-md-6");
                elemento.className += "col-md-5";

                $("#dvPersonaJuridica").show();
                $("#dvDigitoVerificacion").show();
                $("#dvPersonaNatural").hide();

                this.cargarListaTipoIdentificacion('IdTipoIdentificacion', 1 , Pais);
            }

            if(TipoPersona == 2){

                var elemento = document.getElementById("dvIdentificacion");
                elemento.classList.remove("col-md-5");
                elemento.classList.remove("col-md-6");
                elemento.className += "col-md-6";

                $("#dvPersonaJuridica").hide();
                $("#dvDigitoVerificacion").hide();
                $("#dvPersonaNatural").show();

                this.cargarListaTipoIdentificacion('IdTipoIdentificacion', 2 , Pais);
            }



        };

        this.GenerarDV = function (TextoDV) {

            var TN = $("#Identificacion").val();

            var TextoNit = TN.replace(/[.]/g, '');

            var dv = document.getElementById(TextoDV);
            var NIT15 = '000000000000000' + TextoNit;
            var NumDigitos = NIT15.length - 15;
            var miArray = new Array(15)
            miArray[0] = 71
            miArray[1] = 67
            miArray[2] = 59
            miArray[3] = 53
            miArray[4] = 47
            miArray[5] = 43
            miArray[6] = 41
            miArray[7] = 37
            miArray[8] = 29
            miArray[9] = 23
            miArray[10] = 19
            miArray[11] = 17
            miArray[12] = 13
            miArray[13] = 7
            miArray[14] = 3
            lnRetorno = 0;
            var WDato = "";
            WDato = NIT15.substring(NumDigitos, NIT15.length);
            var WSuma = 0;
            for (i = 0; i < 15; i++) {
                var WDato2 = "";
                WDato2 = WDato.substring(i, i + 1);

                WSuma += (parseInt(WDato2) * parseInt(miArray[i]));
            }
            WSuma = WSuma % 11;

            if (WSuma == 0 || WSuma == 1) {
                lnRetorno = WSuma;
            }
            else {
                lnRetorno = 11 - WSuma;
            }
            if (dv != null) dv.value = lnRetorno;


        };

        this.cargarListaTipoIdentificacion = function (Control, TipoEmpresa, Pais) {

            var htmlContent = "";
           
            htmlContent = "<option value='0'>SELECCIONE</option>";
            
            for (var i = 0; i < this.lstTipoIdentificacion.length; i++) {

                var item = this.lstTipoIdentificacion[i];

                if (item.IdTipoEmprea == TipoEmpresa) {
            
                    if(Pais != 52 && item.IdTipoEmprea == 1){
                        console.log("1");
                        if(item.IdOpcion == 9){
                            console.log("2");
                            htmlContent += "<option eqs-type='o' value='" + item.IdOpcion + "'>" + item.Opcion + "</option>";
                        
                        }
                    }else{
                        console.log("3");
                        if(item.IdOpcion != 9 && item.IdTipoEmprea == 1){
                            console.log("4");
                            htmlContent += "<option eqs-type='o' value='" + item.IdOpcion + "'>" + item.Opcion + "</option>";
                        
                        }
                    
                    }

                    if(Pais != 52 && item.IdTipoEmprea == 2){
                        console.log("5");
                    
                        if(item.IdOpcion == 7){
                            console.log("6");
                            htmlContent += "<option eqs-type='o' value='" + item.IdOpcion + "'>" + item.Opcion + "</option>";
                        
                        }
                    }else{
                        console.log("7");
                        if(item.IdOpcion != 7 && item.IdTipoEmprea == 2){
                            console.log("8");
                            htmlContent += "<option eqs-type='o' value='" + item.IdOpcion + "'>" + item.Opcion + "</option>";
                        
                        }
                    
                    }

            
                }

            }

            $("#" + Control).html(htmlContent);

        };

        this.SoloNumeros = function (evt) {

            var keynum;
            if (window.event) // IE
            {
                keynum = evt.keyCode;
            }
            else if (evt.which) // Netscape/Firefox/Opera
            {
                keynum = evt.which;
            }
            return (keynum < 13 || (keynum >= 48 && keynum <= 57))


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
                url: this.Url + "BuscarPais",
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

            var Pais = JSON.parse($(f).attr("oData"));

            $('#IdTipoPais').val(Pais.IdTipo);
            $('#Pais').val(Pais.Concepto);

        };






    }

</script>


<script type="text/javascript">

    oForm.Url = "/demo/Gestion/";
    oForm.lstTipoIdentificacion = [{"IdOpcion":"0","Opcion":"SELECCIONE","IdTipoEmprea":0},{"IdOpcion":"1","Opcion":"Cédula de Ciudadania","IdTipoEmprea":2},{"IdOpcion":"2","Opcion":"NIT","IdTipoEmprea":1},{"IdOpcion":"3","Opcion":"Registro civil","IdTipoEmprea":2},{"IdOpcion":"4","Opcion":"Tarjeta de identidad","IdTipoEmprea":2},{"IdOpcion":"5","Opcion":"Tarjeta de extranjería","IdTipoEmprea":2},{"IdOpcion":"6","Opcion":"Pasaporte","IdTipoEmprea":2},{"IdOpcion":"7","Opcion":"Documento de identificación extranjero","IdTipoEmprea":2},{"IdOpcion":"8","Opcion":"Cédula extranjería","IdTipoEmprea":2},{"IdOpcion":"9","Opcion":"NIT de otro país","IdTipoEmprea":1},{"IdOpcion":"10","Opcion":"NIT","IdTipoEmprea":2}];
    Tools.DepartamentoSeleccionado = 0;
    Tools.MunicipioSeleccionado = 0;
    Tools.lstDepatamentos = [{"IdDepartamento":"91","Departamento":"AMAZONAS","IdMunicipio":"91263","Municipio":"EL ENCANTO"},{"IdDepartamento":"91","Departamento":"AMAZONAS","IdMunicipio":"91405","Municipio":"LA CHORRERA"},{"IdDepartamento":"91","Departamento":"AMAZONAS","IdMunicipio":"91407","Municipio":"LA PEDRERA"},{"IdDepartamento":"91","Departamento":"AMAZONAS","IdMunicipio":"91430","Municipio":"LA VICTORIA"},{"IdDepartamento":"91","Departamento":"AMAZONAS","IdMunicipio":"91001","Municipio":"LETICIA"},{"IdDepartamento":"91","Departamento":"AMAZONAS","IdMunicipio":"91460","Municipio":"MIRITI - PARANÁ"},{"IdDepartamento":"91","Departamento":"AMAZONAS","IdMunicipio":"91530","Municipio":"PUERTO ALEGRÍA"},{"IdDepartamento":"91","Departamento":"AMAZONAS","IdMunicipio":"91536","Municipio":"PUERTO ARICA"},{"IdDepartamento":"91","Departamento":"AMAZONAS","IdMunicipio":"91540","Municipio":"PUERTO NARIÑO"},{"IdDepartamento":"91","Departamento":"AMAZONAS","IdMunicipio":"91669","Municipio":"PUERTO SANTANDER"},{"IdDepartamento":"91","Departamento":"AMAZONAS","IdMunicipio":"91798","Municipio":"TARAPACÁ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5002","Municipio":"ABEJORRAL"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5004","Municipio":"ABRIAQUÍ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5021","Municipio":"ALEJANDRÍA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5030","Municipio":"AMAGÁ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5031","Municipio":"AMALFI"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5034","Municipio":"ANDES"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5036","Municipio":"ANGELÓPOLIS"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5038","Municipio":"ANGOSTURA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5040","Municipio":"ANORÍ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5044","Municipio":"ANZA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5045","Municipio":"APARTADÓ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5051","Municipio":"ARBOLETES"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5055","Municipio":"ARGELIA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5059","Municipio":"ARMENIA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5079","Municipio":"BARBOSA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5088","Municipio":"BELLO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5086","Municipio":"BELMIRA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5091","Municipio":"BETANIA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5093","Municipio":"BETULIA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5107","Municipio":"BRICEÑO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5113","Municipio":"BURITICÁ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5120","Municipio":"CÁCERES"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5125","Municipio":"CAICEDO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5129","Municipio":"CALDAS"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5134","Municipio":"CAMPAMENTO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5138","Municipio":"CAÑASGORDAS"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5142","Municipio":"CARACOLÍ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5145","Municipio":"CARAMANTA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5147","Municipio":"CAREPA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5150","Municipio":"CAROLINA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5154","Municipio":"CAUCASIA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5172","Municipio":"CHIGORODÓ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5190","Municipio":"CISNEROS"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5101","Municipio":"CIUDAD BOLÍVAR"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5197","Municipio":"COCORNÁ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5206","Municipio":"CONCEPCIÓN"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5209","Municipio":"CONCORDIA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5212","Municipio":"COPACABANA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5234","Municipio":"DABEIBA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5237","Municipio":"DONMATÍAS"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5240","Municipio":"EBÉJICO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5250","Municipio":"EL BAGRE"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5148","Municipio":"EL CARMEN DE VIBORAL"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5697","Municipio":"EL SANTUARIO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5264","Municipio":"ENTRERRIOS"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5266","Municipio":"ENVIGADO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5282","Municipio":"FREDONIA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5284","Municipio":"FRONTINO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5306","Municipio":"GIRALDO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5308","Municipio":"GIRARDOTA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5310","Municipio":"GÓMEZ PLATA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5313","Municipio":"GRANADA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5315","Municipio":"GUADALUPE"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5318","Municipio":"GUARNE"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5321","Municipio":"GUATAPE"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5347","Municipio":"HELICONIA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5353","Municipio":"HISPANIA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5360","Municipio":"ITAGUI"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5361","Municipio":"ITUANGO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5364","Municipio":"JARDÍN"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5368","Municipio":"JERICÓ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5376","Municipio":"LA CEJA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5380","Municipio":"LA ESTRELLA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5390","Municipio":"LA PINTADA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5400","Municipio":"LA UNIÓN"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5411","Municipio":"LIBORINA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5425","Municipio":"MACEO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5440","Municipio":"MARINILLA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5001","Municipio":"MEDELLÍN"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5467","Municipio":"MONTEBELLO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5475","Municipio":"MURINDÓ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5480","Municipio":"MUTATÁ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5483","Municipio":"NARIÑO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5495","Municipio":"NECHÍ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5490","Municipio":"NECOCLÍ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5501","Municipio":"OLAYA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5541","Municipio":"PEÑOL"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5543","Municipio":"PEQUE"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5576","Municipio":"PUEBLORRICO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5579","Municipio":"PUERTO BERRÍO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5585","Municipio":"PUERTO NARE"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5591","Municipio":"PUERTO TRIUNFO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5604","Municipio":"REMEDIOS"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5607","Municipio":"RETIRO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5615","Municipio":"RIONEGRO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5628","Municipio":"SABANALARGA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5631","Municipio":"SABANETA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5642","Municipio":"SALGAR"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5647","Municipio":"SAN ANDRÉS DE CUERQUÍA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5649","Municipio":"SAN CARLOS"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5652","Municipio":"SAN FRANCISCO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5656","Municipio":"SAN JERÓNIMO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5658","Municipio":"SAN JOSÉ DE LA MONTAÑA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5659","Municipio":"SAN JUAN DE URABÁ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5660","Municipio":"SAN LUIS"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5664","Municipio":"SAN PEDRO DE LOS MILAGROS"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5665","Municipio":"SAN PEDRO DE URABA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5667","Municipio":"SAN RAFAEL"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5670","Municipio":"SAN ROQUE"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5674","Municipio":"SAN VICENTE"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5679","Municipio":"SANTA BÁRBARA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5686","Municipio":"SANTA ROSA DE OSOS"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5042","Municipio":"SANTAFÉ DE ANTIOQUIA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5690","Municipio":"SANTO DOMINGO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5736","Municipio":"SEGOVIA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5756","Municipio":"SONSON"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5761","Municipio":"SOPETRÁN"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5789","Municipio":"TÁMESIS"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5790","Municipio":"TARAZÁ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5792","Municipio":"TARSO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5809","Municipio":"TITIRIBÍ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5819","Municipio":"TOLEDO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5837","Municipio":"TURBO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5842","Municipio":"URAMITA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5847","Municipio":"URRAO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5854","Municipio":"VALDIVIA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5856","Municipio":"VALPARAÍSO"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5858","Municipio":"VEGACHÍ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5861","Municipio":"VENECIA"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5873","Municipio":"VIGÍA DEL FUERTE"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5885","Municipio":"YALÍ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5887","Municipio":"YARUMAL"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5890","Municipio":"YOLOMBÓ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5893","Municipio":"YONDÓ"},{"IdDepartamento":"5","Departamento":"ANTIOQUIA","IdMunicipio":"5895","Municipio":"ZARAGOZA"},{"IdDepartamento":"81","Departamento":"ARAUCA","IdMunicipio":"81001","Municipio":"ARAUCA"},{"IdDepartamento":"81","Departamento":"ARAUCA","IdMunicipio":"81065","Municipio":"ARAUQUITA"},{"IdDepartamento":"81","Departamento":"ARAUCA","IdMunicipio":"81220","Municipio":"CRAVO NORTE"},{"IdDepartamento":"81","Departamento":"ARAUCA","IdMunicipio":"81300","Municipio":"FORTUL"},{"IdDepartamento":"81","Departamento":"ARAUCA","IdMunicipio":"81591","Municipio":"PUERTO RONDÓN"},{"IdDepartamento":"81","Departamento":"ARAUCA","IdMunicipio":"81736","Municipio":"SARAVENA"},{"IdDepartamento":"81","Departamento":"ARAUCA","IdMunicipio":"81794","Municipio":"TAME"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8078","Municipio":"BARANOA"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8001","Municipio":"BARRANQUILLA"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8137","Municipio":"CAMPO DE LA CRUZ"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8141","Municipio":"CANDELARIA"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8296","Municipio":"GALAPA"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8372","Municipio":"JUAN DE ACOSTA"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8421","Municipio":"LURUACO"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8433","Municipio":"MALAMBO"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8436","Municipio":"MANATÍ"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8520","Municipio":"PALMAR DE VARELA"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8549","Municipio":"PIOJÓ"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8558","Municipio":"POLONUEVO"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8560","Municipio":"PONEDERA"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8573","Municipio":"PUERTO COLOMBIA"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8606","Municipio":"REPELÓN"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8634","Municipio":"SABANAGRANDE"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8638","Municipio":"SABANALARGA"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8675","Municipio":"SANTA LUCÍA"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8685","Municipio":"SANTO TOMÁS"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8758","Municipio":"SOLEDAD"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8770","Municipio":"SUAN"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8832","Municipio":"TUBARÁ"},{"IdDepartamento":"8","Departamento":"ATLÁNTICO","IdMunicipio":"8849","Municipio":"USIACURÍ"},{"IdDepartamento":"11","Departamento":"BOGOTA","IdMunicipio":"11001","Municipio":"BOGOTÁ, D.C."},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13006","Municipio":"ACHÍ"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13030","Municipio":"ALTOS DEL ROSARIO"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13042","Municipio":"ARENAL"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13052","Municipio":"ARJONA"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13062","Municipio":"ARROYOHONDO"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13074","Municipio":"BARRANCO DE LOBA"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13140","Municipio":"CALAMAR"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13160","Municipio":"CANTAGALLO"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13001","Municipio":"CARTAGENA"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13188","Municipio":"CICUCO"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13222","Municipio":"CLEMENCIA"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13212","Municipio":"CÓRDOBA"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13244","Municipio":"EL CARMEN DE BOLÍVAR"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13248","Municipio":"EL GUAMO"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13268","Municipio":"EL PEÑÓN"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13300","Municipio":"HATILLO DE LOBA"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13430","Municipio":"MAGANGUÉ"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13433","Municipio":"MAHATES"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13440","Municipio":"MARGARITA"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13442","Municipio":"MARÍA LA BAJA"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13468","Municipio":"MOMPÓS"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13458","Municipio":"MONTECRISTO"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13473","Municipio":"MORALES"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13490","Municipio":"NOROSÍ"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13549","Municipio":"PINILLOS"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13580","Municipio":"REGIDOR"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13600","Municipio":"RÍO VIEJO"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13620","Municipio":"SAN CRISTÓBAL"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13647","Municipio":"SAN ESTANISLAO"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13650","Municipio":"SAN FERNANDO"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13654","Municipio":"SAN JACINTO"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13655","Municipio":"SAN JACINTO DEL CAUCA"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13657","Municipio":"SAN JUAN NEPOMUCENO"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13667","Municipio":"SAN MARTÍN DE LOBA"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13670","Municipio":"SAN PABLO"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13673","Municipio":"SANTA CATALINA"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13683","Municipio":"SANTA ROSA"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13688","Municipio":"SANTA ROSA DEL SUR"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13744","Municipio":"SIMITÍ"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13760","Municipio":"SOPLAVIENTO"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13780","Municipio":"TALAIGUA NUEVO"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13810","Municipio":"TIQUISIO"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13836","Municipio":"TURBACO"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13838","Municipio":"TURBANÁ"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13873","Municipio":"VILLANUEVA"},{"IdDepartamento":"13","Departamento":"BOLÍVAR","IdMunicipio":"13894","Municipio":"ZAMBRANO"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15022","Municipio":"ALMEIDA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15047","Municipio":"AQUITANIA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15051","Municipio":"ARCABUCO"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15087","Municipio":"BELÉN"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15090","Municipio":"BERBEO"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15092","Municipio":"BETÉITIVA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15097","Municipio":"BOAVITA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15104","Municipio":"BOYACÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15106","Municipio":"BRICEÑO"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15109","Municipio":"BUENAVISTA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15114","Municipio":"BUSBANZÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15131","Municipio":"CALDAS"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15135","Municipio":"CAMPOHERMOSO"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15162","Municipio":"CERINZA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15172","Municipio":"CHINAVITA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15176","Municipio":"CHIQUINQUIRÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15232","Municipio":"CHÍQUIZA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15180","Municipio":"CHISCAS"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15183","Municipio":"CHITA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15185","Municipio":"CHITARAQUE"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15187","Municipio":"CHIVATÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15236","Municipio":"CHIVOR"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15189","Municipio":"CIÉNEGA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15204","Municipio":"CÓMBITA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15212","Municipio":"COPER"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15215","Municipio":"CORRALES"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15218","Municipio":"COVARACHÍA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15223","Municipio":"CUBARÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15224","Municipio":"CUCAITA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15226","Municipio":"CUÍTIVA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15238","Municipio":"DUITAMA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15244","Municipio":"EL COCUY"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15248","Municipio":"EL ESPINO"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15272","Municipio":"FIRAVITOBA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15276","Municipio":"FLORESTA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15293","Municipio":"GACHANTIVÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15296","Municipio":"GAMEZA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15299","Municipio":"GARAGOA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15317","Municipio":"GUACAMAYAS"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15322","Municipio":"GUATEQUE"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15325","Municipio":"GUAYATÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15332","Municipio":"GÜICÁN"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15362","Municipio":"IZA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15367","Municipio":"JENESANO"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15368","Municipio":"JERICÓ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15380","Municipio":"LA CAPILLA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15403","Municipio":"LA UVITA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15401","Municipio":"LA VICTORIA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15377","Municipio":"LABRANZAGRANDE"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15425","Municipio":"MACANAL"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15442","Municipio":"MARIPÍ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15455","Municipio":"MIRAFLORES"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15464","Municipio":"MONGUA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15466","Municipio":"MONGUÍ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15469","Municipio":"MONIQUIRÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15476","Municipio":"MOTAVITA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15480","Municipio":"MUZO"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15491","Municipio":"NOBSA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15494","Municipio":"NUEVO COLÓN"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15500","Municipio":"OICATÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15507","Municipio":"OTANCHE"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15511","Municipio":"PACHAVITA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15514","Municipio":"PÁEZ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15516","Municipio":"PAIPA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15518","Municipio":"PAJARITO"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15522","Municipio":"PANQUEBA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15531","Municipio":"PAUNA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15533","Municipio":"PAYA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15537","Municipio":"PAZ DE RÍO"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15542","Municipio":"PESCA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15550","Municipio":"PISBA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15572","Municipio":"PUERTO BOYACÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15580","Municipio":"QUÍPAMA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15599","Municipio":"RAMIRIQUÍ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15600","Municipio":"RÁQUIRA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15621","Municipio":"RONDÓN"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15632","Municipio":"SABOYÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15638","Municipio":"SÁCHICA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15646","Municipio":"SAMACÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15660","Municipio":"SAN EDUARDO"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15664","Municipio":"SAN JOSÉ DE PARE"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15667","Municipio":"SAN LUIS DE GACENO"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15673","Municipio":"SAN MATEO"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15676","Municipio":"SAN MIGUEL DE SEMA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15681","Municipio":"SAN PABLO DE BORBUR"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15690","Municipio":"SANTA MARÍA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15693","Municipio":"SANTA ROSA DE VITERBO"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15696","Municipio":"SANTA SOFÍA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15686","Municipio":"SANTANA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15720","Municipio":"SATIVANORTE"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15723","Municipio":"SATIVASUR"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15740","Municipio":"SIACHOQUE"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15753","Municipio":"SOATÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15757","Municipio":"SOCHA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15755","Municipio":"SOCOTÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15759","Municipio":"SOGAMOSO"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15761","Municipio":"SOMONDOCO"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15762","Municipio":"SORA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15764","Municipio":"SORACÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15763","Municipio":"SOTAQUIRÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15774","Municipio":"SUSACÓN"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15776","Municipio":"SUTAMARCHÁN"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15778","Municipio":"SUTATENZA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15790","Municipio":"TASCO"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15798","Municipio":"TENZA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15804","Municipio":"TIBANÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15806","Municipio":"TIBASOSA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15808","Municipio":"TINJACÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15810","Municipio":"TIPACOQUE"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15814","Municipio":"TOCA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15816","Municipio":"TOGÜÍ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15820","Municipio":"TÓPAGA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15822","Municipio":"TOTA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15001","Municipio":"TUNJA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15832","Municipio":"TUNUNGUÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15835","Municipio":"TURMEQUÉ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15837","Municipio":"TUTA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15839","Municipio":"TUTAZÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15842","Municipio":"UMBITA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15861","Municipio":"VENTAQUEMADA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15407","Municipio":"VILLA DE LEYVA"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15879","Municipio":"VIRACACHÁ"},{"IdDepartamento":"15","Departamento":"BOYACÁ","IdMunicipio":"15897","Municipio":"ZETAQUIRA"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17013","Municipio":"AGUADAS"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17042","Municipio":"ANSERMA"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17050","Municipio":"ARANZAZU"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17088","Municipio":"BELALCÁZAR"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17174","Municipio":"CHINCHINÁ"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17272","Municipio":"FILADELFIA"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17380","Municipio":"LA DORADA"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17388","Municipio":"LA MERCED"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17001","Municipio":"MANIZALES"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17433","Municipio":"MANZANARES"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17442","Municipio":"MARMATO"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17444","Municipio":"MARQUETALIA"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17446","Municipio":"MARULANDA"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17486","Municipio":"NEIRA"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17495","Municipio":"NORCASIA"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17513","Municipio":"PÁCORA"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17524","Municipio":"PALESTINA"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17541","Municipio":"PENSILVANIA"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17614","Municipio":"RIOSUCIO"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17616","Municipio":"RISARALDA"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17653","Municipio":"SALAMINA"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17662","Municipio":"SAMANÁ"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17665","Municipio":"SAN JOSÉ"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17777","Municipio":"SUPÍA"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17867","Municipio":"VICTORIA"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17873","Municipio":"VILLAMARÍA"},{"IdDepartamento":"17","Departamento":"CALDAS","IdMunicipio":"17877","Municipio":"VITERBO"},{"IdDepartamento":"18","Departamento":"CAQUETÁ","IdMunicipio":"18029","Municipio":"ALBANIA"},{"IdDepartamento":"18","Departamento":"CAQUETÁ","IdMunicipio":"18094","Municipio":"BELÉN DE LOS ANDAQUÍES"},{"IdDepartamento":"18","Departamento":"CAQUETÁ","IdMunicipio":"18150","Municipio":"CARTAGENA DEL CHAIRÁ"},{"IdDepartamento":"18","Departamento":"CAQUETÁ","IdMunicipio":"18205","Municipio":"CURILLO"},{"IdDepartamento":"18","Departamento":"CAQUETÁ","IdMunicipio":"18247","Municipio":"EL DONCELLO"},{"IdDepartamento":"18","Departamento":"CAQUETÁ","IdMunicipio":"18256","Municipio":"EL PAUJIL"},{"IdDepartamento":"18","Departamento":"CAQUETÁ","IdMunicipio":"18001","Municipio":"FLORENCIA"},{"IdDepartamento":"18","Departamento":"CAQUETÁ","IdMunicipio":"18410","Municipio":"LA MONTAÑITA"},{"IdDepartamento":"18","Departamento":"CAQUETÁ","IdMunicipio":"18460","Municipio":"MILÁN"},{"IdDepartamento":"18","Departamento":"CAQUETÁ","IdMunicipio":"18479","Municipio":"MORELIA"},{"IdDepartamento":"18","Departamento":"CAQUETÁ","IdMunicipio":"18592","Municipio":"PUERTO RICO"},{"IdDepartamento":"18","Departamento":"CAQUETÁ","IdMunicipio":"18610","Municipio":"SAN JOSÉ DEL FRAGUA"},{"IdDepartamento":"18","Departamento":"CAQUETÁ","IdMunicipio":"18753","Municipio":"SAN VICENTE DEL CAGUÁN"},{"IdDepartamento":"18","Departamento":"CAQUETÁ","IdMunicipio":"18756","Municipio":"SOLANO"},{"IdDepartamento":"18","Departamento":"CAQUETÁ","IdMunicipio":"18785","Municipio":"SOLITA"},{"IdDepartamento":"18","Departamento":"CAQUETÁ","IdMunicipio":"18860","Municipio":"VALPARAÍSO"},{"IdDepartamento":"85","Departamento":"CASANARE","IdMunicipio":"85010","Municipio":"AGUAZUL"},{"IdDepartamento":"85","Departamento":"CASANARE","IdMunicipio":"85015","Municipio":"CHAMEZA"},{"IdDepartamento":"85","Departamento":"CASANARE","IdMunicipio":"85125","Municipio":"HATO COROZAL"},{"IdDepartamento":"85","Departamento":"CASANARE","IdMunicipio":"85136","Municipio":"LA SALINA"},{"IdDepartamento":"85","Departamento":"CASANARE","IdMunicipio":"85139","Municipio":"MANÍ"},{"IdDepartamento":"85","Departamento":"CASANARE","IdMunicipio":"85162","Municipio":"MONTERREY"},{"IdDepartamento":"85","Departamento":"CASANARE","IdMunicipio":"85225","Municipio":"NUNCHÍA"},{"IdDepartamento":"85","Departamento":"CASANARE","IdMunicipio":"85230","Municipio":"OROCUÉ"},{"IdDepartamento":"85","Departamento":"CASANARE","IdMunicipio":"85250","Municipio":"PAZ DE ARIPORO"},{"IdDepartamento":"85","Departamento":"CASANARE","IdMunicipio":"85263","Municipio":"PORE"},{"IdDepartamento":"85","Departamento":"CASANARE","IdMunicipio":"85279","Municipio":"RECETOR"},{"IdDepartamento":"85","Departamento":"CASANARE","IdMunicipio":"85300","Municipio":"SABANALARGA"},{"IdDepartamento":"85","Departamento":"CASANARE","IdMunicipio":"85315","Municipio":"SÁCAMA"},{"IdDepartamento":"85","Departamento":"CASANARE","IdMunicipio":"85325","Municipio":"SAN LUIS DE PALENQUE"},{"IdDepartamento":"85","Departamento":"CASANARE","IdMunicipio":"85400","Municipio":"TÁMARA"},{"IdDepartamento":"85","Departamento":"CASANARE","IdMunicipio":"85410","Municipio":"TAURAMENA"},{"IdDepartamento":"85","Departamento":"CASANARE","IdMunicipio":"85430","Municipio":"TRINIDAD"},{"IdDepartamento":"85","Departamento":"CASANARE","IdMunicipio":"85440","Municipio":"VILLANUEVA"},{"IdDepartamento":"85","Departamento":"CASANARE","IdMunicipio":"85001","Municipio":"YOPAL"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19022","Municipio":"ALMAGUER"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19050","Municipio":"ARGELIA"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19075","Municipio":"BALBOA"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19100","Municipio":"BOLÍVAR"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19110","Municipio":"BUENOS AIRES"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19130","Municipio":"CAJIBÍO"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19137","Municipio":"CALDONO"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19142","Municipio":"CALOTO"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19212","Municipio":"CORINTO"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19256","Municipio":"EL TAMBO"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19290","Municipio":"FLORENCIA"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19300","Municipio":"GUACHENÉ"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19318","Municipio":"GUAPI"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19355","Municipio":"INZÁ"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19364","Municipio":"JAMBALÓ"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19392","Municipio":"LA SIERRA"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19397","Municipio":"LA VEGA"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19418","Municipio":"LÓPEZ"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19450","Municipio":"MERCADERES"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19455","Municipio":"MIRANDA"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19473","Municipio":"MORALES"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19513","Municipio":"PADILLA"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19517","Municipio":"PAEZ"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19532","Municipio":"PATÍA"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19533","Municipio":"PIAMONTE"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19548","Municipio":"PIENDAMÓ"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19001","Municipio":"POPAYÁN"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19573","Municipio":"PUERTO TEJADA"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19585","Municipio":"PURACÉ"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19622","Municipio":"ROSAS"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19693","Municipio":"SAN SEBASTIÁN"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19701","Municipio":"SANTA ROSA"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19698","Municipio":"SANTANDER DE QUILICHAO"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19743","Municipio":"SILVIA"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19760","Municipio":"SOTARA"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19780","Municipio":"SUÁREZ"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19785","Municipio":"SUCRE"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19807","Municipio":"TIMBÍO"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19809","Municipio":"TIMBIQUÍ"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19821","Municipio":"TORIBIO"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19824","Municipio":"TOTORÓ"},{"IdDepartamento":"19","Departamento":"CAUCA","IdMunicipio":"19845","Municipio":"VILLA RICA"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20011","Municipio":"AGUACHICA"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20013","Municipio":"AGUSTÍN CODAZZI"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20032","Municipio":"ASTREA"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20045","Municipio":"BECERRIL"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20060","Municipio":"BOSCONIA"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20175","Municipio":"CHIMICHAGUA"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20178","Municipio":"CHIRIGUANÁ"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20228","Municipio":"CURUMANÍ"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20238","Municipio":"EL COPEY"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20250","Municipio":"EL PASO"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20295","Municipio":"GAMARRA"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20310","Municipio":"GONZÁLEZ"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20383","Municipio":"LA GLORIA"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20400","Municipio":"LA JAGUA DE IBIRICO"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20621","Municipio":"LA PAZ"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20443","Municipio":"MANAURE"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20517","Municipio":"PAILITAS"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20550","Municipio":"PELAYA"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20570","Municipio":"PUEBLO BELLO"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20614","Municipio":"RÍO DE ORO"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20710","Municipio":"SAN ALBERTO"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20750","Municipio":"SAN DIEGO"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20770","Municipio":"SAN MARTÍN"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20787","Municipio":"TAMALAMEQUE"},{"IdDepartamento":"20","Departamento":"CESAR","IdMunicipio":"20001","Municipio":"VALLEDUPAR"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27006","Municipio":"ACANDÍ"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27025","Municipio":"ALTO BAUDÓ"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27050","Municipio":"ATRATO"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27073","Municipio":"BAGADÓ"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27075","Municipio":"BAHÍA SOLANO"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27077","Municipio":"BAJO BAUDÓ"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27099","Municipio":"BOJAYA"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27150","Municipio":"CARMEN DEL DARIEN"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27160","Municipio":"CÉRTEGUI"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27205","Municipio":"CONDOTO"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27135","Municipio":"EL CANTÓN DEL SAN PABLO"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27245","Municipio":"EL CARMEN DE ATRATO"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27250","Municipio":"EL LITORAL DEL SAN JUAN"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27361","Municipio":"ISTMINA"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27372","Municipio":"JURADÓ"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27413","Municipio":"LLORÓ"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27425","Municipio":"MEDIO ATRATO"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27430","Municipio":"MEDIO BAUDÓ"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27450","Municipio":"MEDIO SAN JUAN"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27491","Municipio":"NÓVITA"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27495","Municipio":"NUQUÍ"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27001","Municipio":"QUIBDÓ"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27580","Municipio":"RÍO IRÓ"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27600","Municipio":"RÍO QUITO"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27615","Municipio":"RIOSUCIO"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27660","Municipio":"SAN JOSÉ DEL PALMAR"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27745","Municipio":"SIPÍ"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27787","Municipio":"TADÓ"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27800","Municipio":"UNGUÍA"},{"IdDepartamento":"27","Departamento":"CHOCÓ","IdMunicipio":"27810","Municipio":"UNIÓN PANAMERICANA"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23068","Municipio":"AYAPEL"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23079","Municipio":"BUENAVISTA"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23090","Municipio":"CANALETE"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23162","Municipio":"CERETÉ"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23168","Municipio":"CHIMÁ"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23182","Municipio":"CHINÚ"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23189","Municipio":"CIÉNAGA DE ORO"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23300","Municipio":"COTORRA"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23350","Municipio":"LA APARTADA"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23417","Municipio":"LORICA"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23419","Municipio":"LOS CÓRDOBAS"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23464","Municipio":"MOMIL"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23466","Municipio":"MONTELÍBANO"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23001","Municipio":"MONTERÍA"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23500","Municipio":"MOÑITOS"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23555","Municipio":"PLANETA RICA"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23570","Municipio":"PUEBLO NUEVO"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23574","Municipio":"PUERTO ESCONDIDO"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23580","Municipio":"PUERTO LIBERTADOR"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23586","Municipio":"PURÍSIMA"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23660","Municipio":"SAHAGÚN"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23670","Municipio":"SAN ANDRÉS SOTAVENTO"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23672","Municipio":"SAN ANTERO"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23675","Municipio":"SAN BERNARDO DEL VIENTO"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23678","Municipio":"SAN CARLOS"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23682","Municipio":"SAN JOSÉ DE URÉ"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23686","Municipio":"SAN PELAYO"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23807","Municipio":"TIERRALTA"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23815","Municipio":"TUCHÍN"},{"IdDepartamento":"23","Departamento":"CÓRDOBA","IdMunicipio":"23855","Municipio":"VALENCIA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25001","Municipio":"AGUA DE DIOS"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25019","Municipio":"ALBÁN"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25035","Municipio":"ANAPOIMA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25040","Municipio":"ANOLAIMA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25599","Municipio":"APULO"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25053","Municipio":"ARBELÁEZ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25086","Municipio":"BELTRÁN"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25095","Municipio":"BITUIMA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25099","Municipio":"BOJACÁ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25120","Municipio":"CABRERA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25123","Municipio":"CACHIPAY"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25126","Municipio":"CAJICÁ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25148","Municipio":"CAPARRAPÍ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25151","Municipio":"CAQUEZA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25154","Municipio":"CARMEN DE CARUPA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25168","Municipio":"CHAGUANÍ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25175","Municipio":"CHÍA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25178","Municipio":"CHIPAQUE"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25181","Municipio":"CHOACHÍ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25183","Municipio":"CHOCONTÁ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25200","Municipio":"COGUA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25214","Municipio":"COTA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25224","Municipio":"CUCUNUBÁ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25245","Municipio":"EL COLEGIO"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25258","Municipio":"EL PEÑÓN"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25260","Municipio":"EL ROSAL"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25269","Municipio":"FACATATIVÁ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25279","Municipio":"FOMEQUE"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25281","Municipio":"FOSCA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25286","Municipio":"FUNZA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25288","Municipio":"FÚQUENE"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25290","Municipio":"FUSAGASUGÁ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25293","Municipio":"GACHALA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25295","Municipio":"GACHANCIPÁ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25297","Municipio":"GACHETÁ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25299","Municipio":"GAMA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25307","Municipio":"GIRARDOT"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25312","Municipio":"GRANADA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25317","Municipio":"GUACHETÁ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25320","Municipio":"GUADUAS"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25322","Municipio":"GUASCA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25324","Municipio":"GUATAQUÍ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25326","Municipio":"GUATAVITA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25328","Municipio":"GUAYABAL DE SIQUIMA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25335","Municipio":"GUAYABETAL"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25339","Municipio":"GUTIÉRREZ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25368","Municipio":"JERUSALÉN"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25372","Municipio":"JUNÍN"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25377","Municipio":"LA CALERA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25386","Municipio":"LA MESA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25394","Municipio":"LA PALMA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25398","Municipio":"LA PEÑA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25402","Municipio":"LA VEGA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25407","Municipio":"LENGUAZAQUE"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25426","Municipio":"MACHETA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25430","Municipio":"MADRID"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25436","Municipio":"MANTA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25438","Municipio":"MEDINA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25473","Municipio":"MOSQUERA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25483","Municipio":"NARIÑO"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25486","Municipio":"NEMOCÓN"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25488","Municipio":"NILO"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25489","Municipio":"NIMAIMA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25491","Municipio":"NOCAIMA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25513","Municipio":"PACHO"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25518","Municipio":"PAIME"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25524","Municipio":"PANDI"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25530","Municipio":"PARATEBUENO"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25535","Municipio":"PASCA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25572","Municipio":"PUERTO SALGAR"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25580","Municipio":"PULÍ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25592","Municipio":"QUEBRADANEGRA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25594","Municipio":"QUETAME"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25596","Municipio":"QUIPILE"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25612","Municipio":"RICAURTE"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25645","Municipio":"SAN ANTONIO DEL TEQUENDAMA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25649","Municipio":"SAN BERNARDO"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25653","Municipio":"SAN CAYETANO"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25658","Municipio":"SAN FRANCISCO"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25662","Municipio":"SAN JUAN DE RÍO SECO"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25718","Municipio":"SASAIMA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25736","Municipio":"SESQUILÉ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25740","Municipio":"SIBATÉ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25743","Municipio":"SILVANIA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25745","Municipio":"SIMIJACA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25754","Municipio":"SOACHA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25758","Municipio":"SOPÓ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25769","Municipio":"SUBACHOQUE"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25772","Municipio":"SUESCA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25777","Municipio":"SUPATÁ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25779","Municipio":"SUSA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25781","Municipio":"SUTATAUSA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25785","Municipio":"TABIO"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25793","Municipio":"TAUSA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25797","Municipio":"TENA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25799","Municipio":"TENJO"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25805","Municipio":"TIBACUY"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25807","Municipio":"TIBIRITA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25815","Municipio":"TOCAIMA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25817","Municipio":"TOCANCIPÁ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25823","Municipio":"TOPAIPÍ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25839","Municipio":"UBALÁ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25841","Municipio":"UBAQUE"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25845","Municipio":"UNE"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25851","Municipio":"ÚTICA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25506","Municipio":"VENECIA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25862","Municipio":"VERGARA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25867","Municipio":"VIANÍ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25843","Municipio":"VILLA DE SAN DIEGO DE UBATE"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25871","Municipio":"VILLAGÓMEZ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25873","Municipio":"VILLAPINZÓN"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25875","Municipio":"VILLETA"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25878","Municipio":"VIOTÁ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25885","Municipio":"YACOPÍ"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25898","Municipio":"ZIPACÓN"},{"IdDepartamento":"25","Departamento":"CUNDINAMARCA","IdMunicipio":"25899","Municipio":"ZIPAQUIRÁ"},{"IdDepartamento":"94","Departamento":"GUAINÍA","IdMunicipio":"94343","Municipio":"BARRANCO MINAS"},{"IdDepartamento":"94","Departamento":"GUAINÍA","IdMunicipio":"94886","Municipio":"CACAHUAL"},{"IdDepartamento":"94","Departamento":"GUAINÍA","IdMunicipio":"94001","Municipio":"INÍRIDA"},{"IdDepartamento":"94","Departamento":"GUAINÍA","IdMunicipio":"94885","Municipio":"LA GUADALUPE"},{"IdDepartamento":"94","Departamento":"GUAINÍA","IdMunicipio":"94663","Municipio":"MAPIRIPANA"},{"IdDepartamento":"94","Departamento":"GUAINÍA","IdMunicipio":"94888","Municipio":"MORICHAL"},{"IdDepartamento":"94","Departamento":"GUAINÍA","IdMunicipio":"94887","Municipio":"PANA PANA"},{"IdDepartamento":"94","Departamento":"GUAINÍA","IdMunicipio":"94884","Municipio":"PUERTO COLOMBIA"},{"IdDepartamento":"94","Departamento":"GUAINÍA","IdMunicipio":"94883","Municipio":"SAN FELIPE"},{"IdDepartamento":"95","Departamento":"GUAVIARE","IdMunicipio":"95015","Municipio":"CALAMAR"},{"IdDepartamento":"95","Departamento":"GUAVIARE","IdMunicipio":"95025","Municipio":"EL RETORNO"},{"IdDepartamento":"95","Departamento":"GUAVIARE","IdMunicipio":"95200","Municipio":"MIRAFLORES"},{"IdDepartamento":"95","Departamento":"GUAVIARE","IdMunicipio":"95001","Municipio":"SAN JOSÉ DEL GUAVIARE"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41006","Municipio":"ACEVEDO"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41013","Municipio":"AGRADO"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41016","Municipio":"AIPE"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41020","Municipio":"ALGECIRAS"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41026","Municipio":"ALTAMIRA"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41078","Municipio":"BARAYA"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41132","Municipio":"CAMPOALEGRE"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41206","Municipio":"COLOMBIA"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41244","Municipio":"ELÍAS"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41298","Municipio":"GARZÓN"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41306","Municipio":"GIGANTE"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41319","Municipio":"GUADALUPE"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41349","Municipio":"HOBO"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41357","Municipio":"IQUIRA"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41359","Municipio":"ISNOS"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41378","Municipio":"LA ARGENTINA"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41396","Municipio":"LA PLATA"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41483","Municipio":"NÁTAGA"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41001","Municipio":"NEIVA"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41503","Municipio":"OPORAPA"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41518","Municipio":"PAICOL"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41524","Municipio":"PALERMO"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41530","Municipio":"PALESTINA"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41548","Municipio":"PITAL"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41551","Municipio":"PITALITO"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41615","Municipio":"RIVERA"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41660","Municipio":"SALADOBLANCO"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41668","Municipio":"SAN AGUSTÍN"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41676","Municipio":"SANTA MARÍA"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41770","Municipio":"SUAZA"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41791","Municipio":"TARQUI"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41799","Municipio":"TELLO"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41801","Municipio":"TERUEL"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41797","Municipio":"TESALIA"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41807","Municipio":"TIMANÁ"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41872","Municipio":"VILLAVIEJA"},{"IdDepartamento":"41","Departamento":"HUILA","IdMunicipio":"41885","Municipio":"YAGUARÁ"},{"IdDepartamento":"44","Departamento":"LA GUAJIRA","IdMunicipio":"44035","Municipio":"ALBANIA"},{"IdDepartamento":"44","Departamento":"LA GUAJIRA","IdMunicipio":"44078","Municipio":"BARRANCAS"},{"IdDepartamento":"44","Departamento":"LA GUAJIRA","IdMunicipio":"44090","Municipio":"DIBULLA"},{"IdDepartamento":"44","Departamento":"LA GUAJIRA","IdMunicipio":"44098","Municipio":"DISTRACCIÓN"},{"IdDepartamento":"44","Departamento":"LA GUAJIRA","IdMunicipio":"44110","Municipio":"EL MOLINO"},{"IdDepartamento":"44","Departamento":"LA GUAJIRA","IdMunicipio":"44279","Municipio":"FONSECA"},{"IdDepartamento":"44","Departamento":"LA GUAJIRA","IdMunicipio":"44378","Municipio":"HATONUEVO"},{"IdDepartamento":"44","Departamento":"LA GUAJIRA","IdMunicipio":"44420","Municipio":"LA JAGUA DEL PILAR"},{"IdDepartamento":"44","Departamento":"LA GUAJIRA","IdMunicipio":"44430","Municipio":"MAICAO"},{"IdDepartamento":"44","Departamento":"LA GUAJIRA","IdMunicipio":"44560","Municipio":"MANAURE"},{"IdDepartamento":"44","Departamento":"LA GUAJIRA","IdMunicipio":"44001","Municipio":"RIOHACHA"},{"IdDepartamento":"44","Departamento":"LA GUAJIRA","IdMunicipio":"44650","Municipio":"SAN JUAN DEL CESAR"},{"IdDepartamento":"44","Departamento":"LA GUAJIRA","IdMunicipio":"44847","Municipio":"URIBIA"},{"IdDepartamento":"44","Departamento":"LA GUAJIRA","IdMunicipio":"44855","Municipio":"URUMITA"},{"IdDepartamento":"44","Departamento":"LA GUAJIRA","IdMunicipio":"44874","Municipio":"VILLANUEVA"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47030","Municipio":"ALGARROBO"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47053","Municipio":"ARACATACA"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47058","Municipio":"ARIGUANÍ"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47161","Municipio":"CERRO SAN ANTONIO"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47170","Municipio":"CHIBOLO"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47189","Municipio":"CIÉNAGA"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47205","Municipio":"CONCORDIA"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47245","Municipio":"EL BANCO"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47258","Municipio":"EL PIÑON"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47268","Municipio":"EL RETÉN"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47288","Municipio":"FUNDACIÓN"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47318","Municipio":"GUAMAL"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47460","Municipio":"NUEVA GRANADA"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47541","Municipio":"PEDRAZA"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47545","Municipio":"PIJIÑO DEL CARMEN"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47551","Municipio":"PIVIJAY"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47555","Municipio":"PLATO"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47570","Municipio":"PUEBLOVIEJO"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47605","Municipio":"REMOLINO"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47660","Municipio":"SABANAS DE SAN ANGEL"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47675","Municipio":"SALAMINA"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47692","Municipio":"SAN SEBASTIÁN DE BUENAVISTA"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47703","Municipio":"SAN ZENÓN"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47707","Municipio":"SANTA ANA"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47720","Municipio":"SANTA BÁRBARA DE PINTO"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47001","Municipio":"SANTA MARTA"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47745","Municipio":"SITIONUEVO"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47798","Municipio":"TENERIFE"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47960","Municipio":"ZAPAYÁN"},{"IdDepartamento":"47","Departamento":"MAGDALENA","IdMunicipio":"47980","Municipio":"ZONA BANANERA"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50006","Municipio":"ACACÍAS"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50110","Municipio":"BARRANCA DE UPÍA"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50124","Municipio":"CABUYARO"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50150","Municipio":"CASTILLA LA NUEVA"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50223","Municipio":"CUBARRAL"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50226","Municipio":"CUMARAL"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50245","Municipio":"EL CALVARIO"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50251","Municipio":"EL CASTILLO"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50270","Municipio":"EL DORADO"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50287","Municipio":"FUENTE DE ORO"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50313","Municipio":"GRANADA"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50318","Municipio":"GUAMAL"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50350","Municipio":"LA MACARENA"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50400","Municipio":"LEJANÍAS"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50325","Municipio":"MAPIRIPÁN"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50330","Municipio":"MESETAS"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50450","Municipio":"PUERTO CONCORDIA"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50568","Municipio":"PUERTO GAITÁN"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50577","Municipio":"PUERTO LLERAS"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50573","Municipio":"PUERTO LÓPEZ"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50590","Municipio":"PUERTO RICO"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50606","Municipio":"RESTREPO"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50680","Municipio":"SAN CARLOS DE GUAROA"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50683","Municipio":"SAN JUAN DE ARAMA"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50686","Municipio":"SAN JUANITO"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50689","Municipio":"SAN MARTÍN"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50370","Municipio":"URIBE"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50001","Municipio":"VILLAVICENCIO"},{"IdDepartamento":"50","Departamento":"META","IdMunicipio":"50711","Municipio":"VISTAHERMOSA"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52019","Municipio":"ALBÁN"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52022","Municipio":"ALDANA"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52036","Municipio":"ANCUYÁ"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52051","Municipio":"ARBOLEDA"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52079","Municipio":"BARBACOAS"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52083","Municipio":"BELÉN"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52110","Municipio":"BUESACO"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52240","Municipio":"CHACHAGÜÍ"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52203","Municipio":"COLÓN"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52207","Municipio":"CONSACA"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52210","Municipio":"CONTADERO"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52215","Municipio":"CÓRDOBA"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52224","Municipio":"CUASPUD"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52227","Municipio":"CUMBAL"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52233","Municipio":"CUMBITARA"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52250","Municipio":"EL CHARCO"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52254","Municipio":"EL PEÑOL"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52256","Municipio":"EL ROSARIO"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52258","Municipio":"EL TABLÓN DE GÓMEZ"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52260","Municipio":"EL TAMBO"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52520","Municipio":"FRANCISCO PIZARRO"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52287","Municipio":"FUNES"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52317","Municipio":"GUACHUCAL"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52320","Municipio":"GUAITARILLA"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52323","Municipio":"GUALMATÁN"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52352","Municipio":"ILES"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52354","Municipio":"IMUÉS"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52356","Municipio":"IPIALES"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52378","Municipio":"LA CRUZ"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52381","Municipio":"LA FLORIDA"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52385","Municipio":"LA LLANADA"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52390","Municipio":"LA TOLA"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52399","Municipio":"LA UNIÓN"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52405","Municipio":"LEIVA"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52411","Municipio":"LINARES"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52418","Municipio":"LOS ANDES"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52427","Municipio":"MAGÜI"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52435","Municipio":"MALLAMA"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52473","Municipio":"MOSQUERA"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52480","Municipio":"NARIÑO"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52490","Municipio":"OLAYA HERRERA"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52506","Municipio":"OSPINA"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52001","Municipio":"PASTO"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52540","Municipio":"POLICARPA"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52560","Municipio":"POTOSÍ"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52565","Municipio":"PROVIDENCIA"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52573","Municipio":"PUERRES"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52585","Municipio":"PUPIALES"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52612","Municipio":"RICAURTE"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52621","Municipio":"ROBERTO PAYÁN"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52678","Municipio":"SAMANIEGO"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52835","Municipio":"SAN ANDRES DE TUMACO"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52685","Municipio":"SAN BERNARDO"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52687","Municipio":"SAN LORENZO"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52693","Municipio":"SAN PABLO"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52694","Municipio":"SAN PEDRO DE CARTAGO"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52683","Municipio":"SANDONÁ"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52696","Municipio":"SANTA BÁRBARA"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52699","Municipio":"SANTACRUZ"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52720","Municipio":"SAPUYES"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52786","Municipio":"TAMINANGO"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52788","Municipio":"TANGUA"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52838","Municipio":"TÚQUERRES"},{"IdDepartamento":"52","Departamento":"NARIÑO","IdMunicipio":"52885","Municipio":"YACUANQUER"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54003","Municipio":"ABREGO"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54051","Municipio":"ARBOLEDAS"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54099","Municipio":"BOCHALEMA"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54109","Municipio":"BUCARASICA"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54128","Municipio":"CACHIRÁ"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54125","Municipio":"CÁCOTA"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54172","Municipio":"CHINÁCOTA"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54174","Municipio":"CHITAGÁ"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54206","Municipio":"CONVENCIÓN"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54001","Municipio":"CÚCUTA"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54223","Municipio":"CUCUTILLA"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54239","Municipio":"DURANIA"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54245","Municipio":"EL CARMEN"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54250","Municipio":"EL TARRA"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54261","Municipio":"EL ZULIA"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54313","Municipio":"GRAMALOTE"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54344","Municipio":"HACARÍ"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54347","Municipio":"HERRÁN"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54385","Municipio":"LA ESPERANZA"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54398","Municipio":"LA PLAYA"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54377","Municipio":"LABATECA"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54405","Municipio":"LOS PATIOS"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54418","Municipio":"LOURDES"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54480","Municipio":"MUTISCUA"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54498","Municipio":"OCAÑA"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54518","Municipio":"PAMPLONA"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54520","Municipio":"PAMPLONITA"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54553","Municipio":"PUERTO SANTANDER"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54599","Municipio":"RAGONVALIA"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54660","Municipio":"SALAZAR"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54670","Municipio":"SAN CALIXTO"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54673","Municipio":"SAN CAYETANO"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54680","Municipio":"SANTIAGO"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54720","Municipio":"SARDINATA"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54743","Municipio":"SILOS"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54800","Municipio":"TEORAMA"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54810","Municipio":"TIBÚ"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54820","Municipio":"TOLEDO"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54871","Municipio":"VILLA CARO"},{"IdDepartamento":"54","Departamento":"NORTE DE SANTANDER","IdMunicipio":"54874","Municipio":"VILLA DEL ROSARIO"},{"IdDepartamento":"86","Departamento":"PUTUMAYO","IdMunicipio":"86219","Municipio":"COLÓN"},{"IdDepartamento":"86","Departamento":"PUTUMAYO","IdMunicipio":"86001","Municipio":"MOCOA"},{"IdDepartamento":"86","Departamento":"PUTUMAYO","IdMunicipio":"86320","Municipio":"ORITO"},{"IdDepartamento":"86","Departamento":"PUTUMAYO","IdMunicipio":"86568","Municipio":"PUERTO ASÍS"},{"IdDepartamento":"86","Departamento":"PUTUMAYO","IdMunicipio":"86569","Municipio":"PUERTO CAICEDO"},{"IdDepartamento":"86","Departamento":"PUTUMAYO","IdMunicipio":"86571","Municipio":"PUERTO GUZMÁN"},{"IdDepartamento":"86","Departamento":"PUTUMAYO","IdMunicipio":"86573","Municipio":"PUERTO LEGUÍZAMO"},{"IdDepartamento":"86","Departamento":"PUTUMAYO","IdMunicipio":"86755","Municipio":"SAN FRANCISCO"},{"IdDepartamento":"86","Departamento":"PUTUMAYO","IdMunicipio":"86757","Municipio":"SAN MIGUEL"},{"IdDepartamento":"86","Departamento":"PUTUMAYO","IdMunicipio":"86760","Municipio":"SANTIAGO"},{"IdDepartamento":"86","Departamento":"PUTUMAYO","IdMunicipio":"86749","Municipio":"SIBUNDOY"},{"IdDepartamento":"86","Departamento":"PUTUMAYO","IdMunicipio":"86865","Municipio":"VALLE DEL GUAMUEZ"},{"IdDepartamento":"86","Departamento":"PUTUMAYO","IdMunicipio":"86885","Municipio":"VILLAGARZÓN"},{"IdDepartamento":"63","Departamento":"QUINDIO","IdMunicipio":"63001","Municipio":"ARMENIA"},{"IdDepartamento":"63","Departamento":"QUINDIO","IdMunicipio":"63111","Municipio":"BUENAVISTA"},{"IdDepartamento":"63","Departamento":"QUINDIO","IdMunicipio":"63130","Municipio":"CALARCA"},{"IdDepartamento":"63","Departamento":"QUINDIO","IdMunicipio":"63190","Municipio":"CIRCASIA"},{"IdDepartamento":"63","Departamento":"QUINDIO","IdMunicipio":"63212","Municipio":"CÓRDOBA"},{"IdDepartamento":"63","Departamento":"QUINDIO","IdMunicipio":"63272","Municipio":"FILANDIA"},{"IdDepartamento":"63","Departamento":"QUINDIO","IdMunicipio":"63302","Municipio":"GÉNOVA"},{"IdDepartamento":"63","Departamento":"QUINDIO","IdMunicipio":"63401","Municipio":"LA TEBAIDA"},{"IdDepartamento":"63","Departamento":"QUINDIO","IdMunicipio":"63470","Municipio":"MONTENEGRO"},{"IdDepartamento":"63","Departamento":"QUINDIO","IdMunicipio":"63548","Municipio":"PIJAO"},{"IdDepartamento":"63","Departamento":"QUINDIO","IdMunicipio":"63594","Municipio":"QUIMBAYA"},{"IdDepartamento":"63","Departamento":"QUINDIO","IdMunicipio":"63690","Municipio":"SALENTO"},{"IdDepartamento":"66","Departamento":"RISARALDA","IdMunicipio":"66045","Municipio":"APÍA"},{"IdDepartamento":"66","Departamento":"RISARALDA","IdMunicipio":"66075","Municipio":"BALBOA"},{"IdDepartamento":"66","Departamento":"RISARALDA","IdMunicipio":"66088","Municipio":"BELÉN DE UMBRÍA"},{"IdDepartamento":"66","Departamento":"RISARALDA","IdMunicipio":"66170","Municipio":"DOSQUEBRADAS"},{"IdDepartamento":"66","Departamento":"RISARALDA","IdMunicipio":"66318","Municipio":"GUÁTICA"},{"IdDepartamento":"66","Departamento":"RISARALDA","IdMunicipio":"66383","Municipio":"LA CELIA"},{"IdDepartamento":"66","Departamento":"RISARALDA","IdMunicipio":"66400","Municipio":"LA VIRGINIA"},{"IdDepartamento":"66","Departamento":"RISARALDA","IdMunicipio":"66440","Municipio":"MARSELLA"},{"IdDepartamento":"66","Departamento":"RISARALDA","IdMunicipio":"66456","Municipio":"MISTRATÓ"},{"IdDepartamento":"66","Departamento":"RISARALDA","IdMunicipio":"66001","Municipio":"PEREIRA"},{"IdDepartamento":"66","Departamento":"RISARALDA","IdMunicipio":"66572","Municipio":"PUEBLO RICO"},{"IdDepartamento":"66","Departamento":"RISARALDA","IdMunicipio":"66594","Municipio":"QUINCHÍA"},{"IdDepartamento":"66","Departamento":"RISARALDA","IdMunicipio":"66682","Municipio":"SANTA ROSA DE CABAL"},{"IdDepartamento":"66","Departamento":"RISARALDA","IdMunicipio":"66687","Municipio":"SANTUARIO"},{"IdDepartamento":"88","Departamento":"SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA","IdMunicipio":"88564","Municipio":"PROVIDENCIA"},{"IdDepartamento":"88","Departamento":"SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA","IdMunicipio":"88001","Municipio":"SAN ANDRÉS"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68013","Municipio":"AGUADA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68020","Municipio":"ALBANIA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68051","Municipio":"ARATOCA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68077","Municipio":"BARBOSA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68079","Municipio":"BARICHARA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68081","Municipio":"BARRANCABERMEJA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68092","Municipio":"BETULIA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68101","Municipio":"BOLÍVAR"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68001","Municipio":"BUCARAMANGA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68121","Municipio":"CABRERA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68132","Municipio":"CALIFORNIA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68147","Municipio":"CAPITANEJO"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68152","Municipio":"CARCASÍ"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68160","Municipio":"CEPITÁ"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68162","Municipio":"CERRITO"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68167","Municipio":"CHARALÁ"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"6852","Municipio":"CHARTA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68176","Municipio":"CHIMA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68179","Municipio":"CHIPATÁ"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68190","Municipio":"CIMITARRA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68207","Municipio":"CONCEPCIÓN"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68209","Municipio":"CONFINES"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68211","Municipio":"CONTRATACIÓN"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68217","Municipio":"COROMORO"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68229","Municipio":"CURITÍ"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68235","Municipio":"EL CARMEN DE CHUCURÍ"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68245","Municipio":"EL GUACAMAYO"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68250","Municipio":"EL PEÑÓN"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68255","Municipio":"EL PLAYÓN"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68264","Municipio":"ENCINO"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68266","Municipio":"ENCISO"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68271","Municipio":"FLORIÁN"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68276","Municipio":"FLORIDABLANCA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68296","Municipio":"GALÁN"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68298","Municipio":"GAMBITA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68307","Municipio":"GIRÓN"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68318","Municipio":"GUACA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68320","Municipio":"GUADALUPE"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68322","Municipio":"GUAPOTÁ"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68324","Municipio":"GUAVATÁ"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68327","Municipio":"GÜEPSA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68344","Municipio":"HATO"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68368","Municipio":"JESÚS MARÍA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68370","Municipio":"JORDÁN"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68377","Municipio":"LA BELLEZA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68397","Municipio":"LA PAZ"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68385","Municipio":"LANDÁZURI"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68406","Municipio":"LEBRIJA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68418","Municipio":"LOS SANTOS"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68425","Municipio":"MACARAVITA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68432","Municipio":"MÁLAGA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68444","Municipio":"MATANZA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68464","Municipio":"MOGOTES"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68468","Municipio":"MOLAGAVITA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68498","Municipio":"OCAMONTE"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68500","Municipio":"OIBA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68502","Municipio":"ONZAGA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68522","Municipio":"PALMAR"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68524","Municipio":"PALMAS DEL SOCORRO"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68533","Municipio":"PÁRAMO"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68547","Municipio":"PIEDECUESTA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68549","Municipio":"PINCHOTE"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68572","Municipio":"PUENTE NACIONAL"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68573","Municipio":"PUERTO PARRA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68575","Municipio":"PUERTO WILCHES"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68615","Municipio":"RIONEGRO"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68655","Municipio":"SABANA DE TORRES"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68669","Municipio":"SAN ANDRÉS"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68673","Municipio":"SAN BENITO"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68679","Municipio":"SAN GIL"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68682","Municipio":"SAN JOAQUÍN"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68684","Municipio":"SAN JOSÉ DE MIRANDA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68686","Municipio":"SAN MIGUEL"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68689","Municipio":"SAN VICENTE DE CHUCURÍ"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68705","Municipio":"SANTA BÁRBARA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68720","Municipio":"SANTA HELENA DEL OPÓN"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68745","Municipio":"SIMACOTA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68755","Municipio":"SOCORRO"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68770","Municipio":"SUAITA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68773","Municipio":"SUCRE"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68780","Municipio":"SURATÁ"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68820","Municipio":"TONA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68855","Municipio":"VALLE DE SAN JOSÉ"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68861","Municipio":"VÉLEZ"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68867","Municipio":"VETAS"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68872","Municipio":"VILLANUEVA"},{"IdDepartamento":"68","Departamento":"SANTANDER","IdMunicipio":"68895","Municipio":"ZAPATOCA"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70110","Municipio":"BUENAVISTA"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70124","Municipio":"CAIMITO"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70230","Municipio":"CHALÁN"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70204","Municipio":"COLOSO"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70215","Municipio":"COROZAL"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70221","Municipio":"COVEÑAS"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70233","Municipio":"EL ROBLE"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70235","Municipio":"GALERAS"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70265","Municipio":"GUARANDA"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70400","Municipio":"LA UNIÓN"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70418","Municipio":"LOS PALMITOS"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70429","Municipio":"MAJAGUAL"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70473","Municipio":"MORROA"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70508","Municipio":"OVEJAS"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70523","Municipio":"PALMITO"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70670","Municipio":"SAMPUÉS"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70678","Municipio":"SAN BENITO ABAD"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70702","Municipio":"SAN JUAN DE BETULIA"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70742","Municipio":"SAN LUIS DE SINCÉ"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70708","Municipio":"SAN MARCOS"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70713","Municipio":"SAN ONOFRE"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70717","Municipio":"SAN PEDRO"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70820","Municipio":"SANTIAGO DE TOLÚ"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70001","Municipio":"SINCELEJO"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70771","Municipio":"SUCRE"},{"IdDepartamento":"70","Departamento":"SUCRE","IdMunicipio":"70823","Municipio":"TOLÚ VIEJO"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73024","Municipio":"ALPUJARRA"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73026","Municipio":"ALVARADO"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73030","Municipio":"AMBALEMA"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73043","Municipio":"ANZOÁTEGUI"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73055","Municipio":"ARMERO"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73067","Municipio":"ATACO"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73124","Municipio":"CAJAMARCA"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73148","Municipio":"CARMEN DE APICALÁ"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73152","Municipio":"CASABIANCA"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73168","Municipio":"CHAPARRAL"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73200","Municipio":"COELLO"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73217","Municipio":"COYAIMA"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73226","Municipio":"CUNDAY"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73236","Municipio":"DOLORES"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73268","Municipio":"ESPINAL"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73270","Municipio":"FALAN"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73275","Municipio":"FLANDES"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73283","Municipio":"FRESNO"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73319","Municipio":"GUAMO"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73347","Municipio":"HERVEO"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73349","Municipio":"HONDA"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73001","Municipio":"IBAGUÉ"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73352","Municipio":"ICONONZO"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73408","Municipio":"LÉRIDA"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73411","Municipio":"LÍBANO"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73449","Municipio":"MELGAR"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73461","Municipio":"MURILLO"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73483","Municipio":"NATAGAIMA"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73504","Municipio":"ORTEGA"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73520","Municipio":"PALOCABILDO"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73547","Municipio":"PIEDRAS"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73555","Municipio":"PLANADAS"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73563","Municipio":"PRADO"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73585","Municipio":"PURIFICACIÓN"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73616","Municipio":"RIOBLANCO"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73622","Municipio":"RONCESVALLES"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73624","Municipio":"ROVIRA"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73671","Municipio":"SALDAÑA"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73675","Municipio":"SAN ANTONIO"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73678","Municipio":"SAN LUIS"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73443","Municipio":"SAN SEBASTIÁN DE MARIQUITA"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73686","Municipio":"SANTA ISABEL"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73770","Municipio":"SUÁREZ"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73854","Municipio":"VALLE DE SAN JUAN"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73861","Municipio":"VENADILLO"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73870","Municipio":"VILLAHERMOSA"},{"IdDepartamento":"73","Departamento":"TOLIMA","IdMunicipio":"73873","Municipio":"VILLARRICA"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76020","Municipio":"ALCALÁ"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76036","Municipio":"ANDALUCÍA"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76041","Municipio":"ANSERMANUEVO"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76054","Municipio":"ARGELIA"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76100","Municipio":"BOLÍVAR"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76109","Municipio":"BUENAVENTURA"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76113","Municipio":"BUGALAGRANDE"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76122","Municipio":"CAICEDONIA"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76001","Municipio":"CALI"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76126","Municipio":"CALIMA"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76130","Municipio":"CANDELARIA"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76147","Municipio":"CARTAGO"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76233","Municipio":"DAGUA"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76243","Municipio":"EL ÁGUILA"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76246","Municipio":"EL CAIRO"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76248","Municipio":"EL CERRITO"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76250","Municipio":"EL DOVIO"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76275","Municipio":"FLORIDA"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76306","Municipio":"GINEBRA"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76318","Municipio":"GUACARÍ"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76111","Municipio":"GUADALAJARA DE BUGA"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76364","Municipio":"JAMUNDÍ"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76377","Municipio":"LA CUMBRE"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76400","Municipio":"LA UNIÓN"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76403","Municipio":"LA VICTORIA"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76497","Municipio":"OBANDO"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76520","Municipio":"PALMIRA"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76563","Municipio":"PRADERA"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76606","Municipio":"RESTREPO"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76616","Municipio":"RIOFRÍO"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76622","Municipio":"ROLDANILLO"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76670","Municipio":"SAN PEDRO"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76736","Municipio":"SEVILLA"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76823","Municipio":"TORO"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76828","Municipio":"TRUJILLO"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76834","Municipio":"TULUÁ"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76845","Municipio":"ULLOA"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76863","Municipio":"VERSALLES"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76869","Municipio":"VIJES"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76890","Municipio":"YOTOCO"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76892","Municipio":"YUMBO"},{"IdDepartamento":"76","Departamento":"VALLE DEL CAUCA","IdMunicipio":"76895","Municipio":"ZARZAL"},{"IdDepartamento":"97","Departamento":"VAUPÉS","IdMunicipio":"97161","Municipio":"CARURU"},{"IdDepartamento":"97","Departamento":"VAUPÉS","IdMunicipio":"97001","Municipio":"MITÚ"},{"IdDepartamento":"97","Departamento":"VAUPÉS","IdMunicipio":"97511","Municipio":"PACOA"},{"IdDepartamento":"97","Departamento":"VAUPÉS","IdMunicipio":"97777","Municipio":"PAPUNAUA"},{"IdDepartamento":"97","Departamento":"VAUPÉS","IdMunicipio":"97666","Municipio":"TARAIRA"},{"IdDepartamento":"97","Departamento":"VAUPÉS","IdMunicipio":"97889","Municipio":"YAVARATÉ"},{"IdDepartamento":"99","Departamento":"VICHADA","IdMunicipio":"99773","Municipio":"CUMARIBO"},{"IdDepartamento":"99","Departamento":"VICHADA","IdMunicipio":"99524","Municipio":"LA PRIMAVERA"},{"IdDepartamento":"99","Departamento":"VICHADA","IdMunicipio":"99001","Municipio":"PUERTO CARREÑO"},{"IdDepartamento":"99","Departamento":"VICHADA","IdMunicipio":"99624","Municipio":"SANTA ROSALÍA"}];
    Tools.ControlDepartamento = "IdDepartamento";
    Tools.ControlMunicipio = "IdMunicipio";

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