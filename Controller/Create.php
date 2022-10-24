<?php

    include_once '../Includes/db.php';
    
    $objeto = new DB();
    $con = $objeto->connect();


    //Insertar tipo de unidad
    if(isset($_POST['insert_unidad'])){

        $Descripcion = $_POST['Descripcion'];

        $query = "INSERT INTO unidades VALUES (NULL,'$Descripcion')";
        $result = $con->prepare($query);
        $result->execute();
        if(!$result) {
            die("Query Failed.");
        }

        $_SESSION['message'] = 'Tercero registrado con exito';
        $_SESSION['message_type'] = 'success';
        header('Location: ../Gestion/TipoUnidades.php');

    }

    //Insertar Producto
    if(isset($_POST['insert_producto'])){

        $Referencia = $_POST['Referencia'];
        $Nombre = $_POST['Nombre'];
        $Descripcion = $_POST['Descripcion'];
        $IdTipoUnidad = $_POST['IdTipoUnidad'];
        $sPrecioVenta = $_POST['sPrecioVenta'];
        $IdTipoMoneda = $_POST['IdTipoMoneda'];
        $IdTipoTarifa = $_POST['IdTipoTarifa'];
        $IdTipoImpoconsumo = $_POST['IdTipoImpoconsumo'];
        $SwPrecioIncluidoImpuestos = $_POST['SwPrecioIncluidoImpuestos'];
        $IdTipoRetefuente = $_POST['IdTipoRetefuente'];
        $Retefuente = $_POST['Retefuente'];
        $SwFactura = $_POST['SwFactura'];
        $SwCompra = $_POST['SwCompra'];

        $query = "INSERT INTO 
                productos(id, ref, nombre, descripcion, idunidad, precio, idtipomoneda, tarifaimpventa, tarifaimpconsumo, inclusionimp, retencion, permisofactura, permisocompra) 
                VALUES (NULL, '$Referencia', '$Nombre', '$Descripcion', '$IdTipoUnidad', '$sPrecioVenta', '$IdTipoMoneda', '$IdTipoTarifa', '$IdTipoImpoconsumo', '$SwPrecioIncluidoImpuestos', '$Retefuente', '$SwFactura', '$SwCompra')";
        $result = $con->prepare($query);
        $result->execute();
        if(!$result) {
            die("Query Failed.");
        }

        $_SESSION['message'] = 'Producto registrado con exito';
        $_SESSION['message_type'] = 'success';
        header('Location: ../Gestion/Productos.php');

    }

    if (isset($_POST['insert_tercero'])) {
        $TipoPersona = $_POST['IdTipoPersona'];
        $IdPais =$_POST['IdPais'];
        $RazonSocial = $_POST['RazonSocial'];
        $pNombre = $_POST['Nombre1'];
        $sNombre = $_POST['Nombre2'];
        $pApellidos =$_POST['Apellido1'];
        $sApellidos =$_POST['Apellido2'];
        $IdTipoIdentificacion = $_POST['IdTipoIdentificacion'];
        $Identificacion = $_POST['Identificacion'];
        $Telefonos = $_POST['Telefonos'];
        $Email = $_POST['Email'];
        $Direccion = $_POST['Direccion'];
        $NombreContacto = $_POST['NombreContacto'];
        $EmailContacto = $_POST['EmailContacto'];
        $TelefonosContacto = $_POST['TelefonosContacto'];
        $IdDepartamento = $_POST['IdDepartamento'];
        $IdMunicipio = $_POST['IdMunicipio'];
        $CodigoPostal = $_POST['CodigoPostal'];
        $Barrio = $_POST['Barrio'];
        $IdTipoRetefuenteIVA = $_POST['IdTipoRetefuenteIVA'];
        $TarifaReteICA = $_POST['TarifaReteICA'];
        $IdTipoImpuesto =$_POST['IdTipoImpuesto'];
        $IdTipoResponsabilidadFiscal = $_POST['IdTipoResponsabilidadFiscal'];
        $IdTipoRegimen = $_POST['IdTipoRegimen'];
        //$Retefuente = $_POST['Retefuente'];
        $IdTipoPlazoCompraCredito = $_POST['IdTipoPlazoCompraCredito'];
        $SwCliente = $_POST['SwCliente'];
        $SwProveedor = $_POST['SwProveedor'];

        if($TipoPersona == "1"){
            $query = "INSERT INTO 
                terceros VALUES (NULL, '$TipoPersona', '$IdPais', '$RazonSocial', NULL, NULL, NULL, NULL, '$IdTipoIdentificacion', '$Identificacion','$Telefonos', '$Email', '$Direccion', '$NombreContacto', '$EmailContacto', '$TelefonosContacto', '$IdDepartamento', '$IdMunicipio', '$CodigoPostal', '$Barrio', '$IdTipoRetefuenteIVA', '$TarifaReteICA', '$IdTipoImpuesto', '$IdTipoResponsabilidadFiscal', '$IdTipoRegimen', '$IdTipoPlazoCompraCredito', '$SwCliente', '$SwProveedor')";
            $result = $con->prepare($query);
            $result->execute();
            if(!$result) {
                die("Query Failed.");
            }

            $_SESSION['message'] = 'Tercero registrado con exito';
            $_SESSION['message_type'] = 'success';
            header('Location: ../Gestion/Terceros.php');
        }
        else{
            $query = "INSERT INTO terceros 
                VALUES (NULL, '$TipoPersona', '$IdPais', NULL, '$pNombre', '$sNombre','$pApellido','$sApellido', '$IdTipoIdentificacion', '$Identificacion', '$Telefonos', '$Email', '$Direccion', '$NombreContacto', '$EmailContacto', '$TelefonosContacto', '$IdDepartamento', '$IdMunicipio', '$CodigoPostal', '$Barrio', '$IdTipoRetefuenteIVA', '$TarifaReteICA', '$IdTipoImpuesto', '$IdTipoResponsabilidadFiscal', '$IdTipoRegimen', '$IdTipoPlazoCompraCredito', '$SwCliente', '$SwProveedor')";
            $result = $con->prepare($query);
            $result->execute();
            if(!$result) {
                die("Query Failed.");
            }

            $_SESSION['message'] = 'Tercero registrado con exito';
            $_SESSION['message_type'] = 'success';
            header('Location: ../Gestion/Terceros.php');
        }

        
    }

    if(isset($_POST['insert_empleado'])){
        $IdTDoc = $_POST["IdTipoDocumento"];
        $NumDoc = $_POST["NumeroDocumento"];
        $pNombre = $_POST["PrimerNombre"];
        $oNombres = $_POST["OtrosNombres"];
        $pApellido = $_POST["PrimerApellido"];
        $sApellido = $_POST["SegundoApellido"];
        $IdPaisTra = $_POST["IdPaisTrabajo"];
        $DirTrabajo = $_POST["DireccionTrabajo"];
        $IdDepa = $_POST["IdDepartamento"];
        $IdMun = $_POST["IdMunicipio"];
        $Email = $_POST["Email"];
        $Tel = $_POST["Telefono"];
        $IdTipoContrato = $_POST["IdeTipoContrato"];
        $FechaInicio = $_POST["sFechaInicioContrato"];
        $FechaFinal = $_POST["sFechaFinalContrato"];
        $Sueldo = $_POST["sSueldo"];
        $AuxTrans = $_POST["sAuxilioTransporte"];
        $IdMetodoPago = $_POST["IdMetodoPago"];
        $IdTipoCuenta = $_POST["IdTipoCuenta"];
        $NumCuenta = $_POST["NumeroCuenta"];
        $IdBanco = $_POST["IdBanco"];
        $IdTipoTrabajador = $_POST["IdTipoTrabajador"];
        $IdFormaPago = $_POST["IdFormaPago"];
        $AltoRiesgo = $_POST["SwAltoRiesgo"];
        $IdPerioridad = $_POST["IdPerioridad"];

        //cambiar el query
        //--------------------------------------------------------------
        $query = "INSERT INTO 
                productos(id, tipoempresa, idepais, razonsocial, tipodoc, doc, tel, email, direccion, nombrecontacto, emailcontacto, telcontacto, iddep, idmun, codpos, barrio, tarifaReteIVA, tarifaReteICA, tipoimp, tiporesfiscal, regfiscal, idtarifaretefuente, numplazocompra, cliente, proveedor) 
                VALUES (NULL, '$IdTipoPersona', '$IdPais', '$RazonSocial', '$IdTipoIdentificacion', '$Telefonos', '$Email', '$Direccion', '$NombreContacto', '$EmailContacto', '$TelefonosContacto', '$IdDepartamento', '$IdMunicipio', '$CodigoPostal', '$Barrio', '$IdTipoRetefuenteIVA', '$TarifaReteICA', '$IdTipoImpuesto', '$IdTipoResponsabilidadFiscal', '$IdTipoRegimen', '$Retefuente', '$IdTipoPlazoCompraCredito', '$SwCliente', '$SwProveedor')";
        $result = $con->prepare($query);
        $result->execute();
        if(!$result) {
            die("Query Failed.");
        }

        $_SESSION['message'] = 'Tercero registrado con exito';
        $_SESSION['message_type'] = 'success';
        header('Location: ../Nomina/Empleados.php');
    }


    




?>