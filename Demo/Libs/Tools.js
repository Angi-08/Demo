$(document).ready(function () {

        Tools.init();

});


var Tools = new function () {

    this.DepartamentoSeleccionado = null;
    this.MunicipioSeleccionado = null;
    this.lstDepatamentos = [];
    this.ControlDepartamento = null;
    this.ControlMunicipio = null;

    this.init = function () {
        
        if (this.DepartamentoSeleccionado == null) {

            this.DepartamentoSeleccionado = 0;
        
        }

        if (this.MunicipioSeleccionado == null) {

            this.MunicipioSeleccionado = 0;
        }

        this.Eventos();

        this.CargarMunicipios(this.DepartamentoSeleccionado, this.ControlMunicipio);
        this.CargarDepartamentos(this.ControlDepartamento);
        this.CargarDepartamentoMunicipio(this.ControlDepartamento, this.DepartamentoSeleccionado, this.ControlMunicipio, this.MunicipioSeleccionado);

    };






    this.Eventos = function () {

        $("#IdDepartamento").change(function () {

            Tools.CargarMunicipios($("#IdDepartamento").val(), Tools.ControlMunicipio);

        });

    };

    this.CargarDepartamentos = function (Control) {

        var htmlContent = "";
        htmlContent = "<option value='0'>SELECCIONE</option>";

        var Departamento = 0;
        for (var i = 0; i < this.lstDepatamentos.length; i++) {

            var item = this.lstDepatamentos[i];

            if (item.IdDepartamento != Departamento) {
            
                Departamento = item.IdDepartamento;

                htmlContent += "<option eqs-type='o' value='" + item.IdDepartamento + "'>" + item.Departamento + "</option>";
            
            }

        }

        $("#" + Control).html(htmlContent);

    };

    this.CargarMunicipios = function (Departamento, Control) {

        var htmlContent = "";
        htmlContent = "<option value='0'>SELECCIONE</option>";

        for (var i = 0; i < this.lstDepatamentos.length; i++) {

            var item = this.lstDepatamentos[i];

            if (item.IdDepartamento == Departamento) {

                htmlContent += "<option eqs-type='o' value='" + item.IdMunicipio + "'>" + item.Municipio + "</option>";

            }

        }

        $("#" + Control).html(htmlContent);

    };

    this.CargarDepartamentoMunicipio = function (controlDep, Departamento, controlMun, Municipio) {

        $("#" + controlDep).val(Departamento);
        $("#" + controlMun).val(Municipio);

    };









    /*  Funciones para campos numericos  */



    // Para permitir solo numeros ENTEROS o DECIMALES

    this.SoloNumeros_Enteros_Decimales = function (evt) {

        var keynum;
        if (window.event) // IE
        {
            keynum = evt.keyCode;
        }
        else if (evt.which) // Netscape/Firefox/Opera
        {
            keynum = evt.which;
        }

        if (keynum < 13 || (keynum >= 48 && keynum <= 57) || (keynum == 44)) {

            var cadena = $("#" + $(evt.target).attr('id')).val();

            if (Tools.YaTieneComa(cadena) == true && keynum == 44) {

                return false;

            } else {

                return Tools.LimiteDecimales(cadena);

            }

        } else {

            return false;

        }


    };



    // Aplica formato de mil a ENTEROS o DECIMALES

    this.Formatear_enteros_decimales = function (input) {

        var cadena = input.value.replace(/\./g, "");

        if (cadena > 0) {

            var resultado = cadena.indexOf(",");

            if (resultado != -1) {

                input.value = Tools.formatearNumeroDecimal(cadena);

            } else {

                input.value = Tools.formatearNumero(cadena);

            }

        }


    }



    // Aplica formato de mil  a ENTEROS

    this.formatearNumero = function (total) {

        var cadena = total;
        var entero = parseInt(cadena);
        var num = entero.toString();

        if (!isNaN(num)) {
            num = num.toString().split("").reverse().join("").replace(/(?=\d*\.?)(\d{3})/g, "$1.");
            num = num.split("").reverse().join("").replace(/^[\.]/, "");

        }

        return num;


    };



    // Aplica formato de mil a DECIMALES

    this.formatearNumeroDecimal = function (cadena) {

        //Math.round(x);

        var lstCadena = cadena.split(",");

        if (lstCadena.length > 1) {

            var num = Tools.formatearNumero(lstCadena[0]) + "," + lstCadena[1];

        } else {


            console.log("22222222");
            var num = Tools.formatearNumero(lstCadena[0]) + "," + "00";

        }

        return num;

    };




    // Verifica si la cadena tiene comas.

    this.YaTieneComa = function (cadena) {

        var resultado = cadena.indexOf(",");

        if (resultado != -1) {

            return true;

        } else {

            return false;

        }


    };




    // Para poner limete del decimal 

    this.LimiteDecimales = function (cadena) {


        var lstCadena = cadena.split(",");

        if (lstCadena.length > 1) {

            if (lstCadena[1].length > 1) {

                return false;

            } else {

                return true;

            }

        } else {

            return true;

        }


    };





    // Validar Correo

    this.validarCorreo = function (email) {

        var resultado = 1;

        expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!expr.test(email)) {

            resultado = 0;

        }

        return resultado;


    };






}



