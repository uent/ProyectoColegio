$(document).ready(function() {
    var $validator = $("#wizardForm").validate({
        rules: {

            inputNombre: {
                required: true
            },
            inputEscolaridad: {
                required: true
            },

            inputApellido: {
                required: true
		    },
            inputRut: {
                required: true
            },
            inputNombrePadre: {
                required: true
            },
            inputNombreMadre: {
                required: true
            },
            inputDireccion: {
                required: true
            },
            InputNac: {
                required: true,
                date: true
            },
            inputCantHrmns: {
                required: true,
                number: true
            },
            inputLugarHrmns: {
                required: true
            },

            inputTelefono: {
                required: true,
                number: true
            },

            motivo1:{
                required: true
            },
            motivo2:{
                required: true
            },
            motivo3:{
                required: true
            },

            motivo4profesional: {
                required:function(element){
                    return $("#motivo4").val()!="no";
                }
            },
            motivo4anio: {
                required:function(element){
                    return $("#motivo4").val()!="no";
                }
            },
            motivo4motivo: {
                required:function(element){
                    return $("#motivo4").val()!="no";
                }
            },
            motivo4diagnostico: {
                required:function(element){
                    return $("#motivo4").val()!="no";
                }
            },
            motivo4indicaciones: {
                required:function(element){
                    return $("#motivo4").val()!="no";
                }
            },
            motivo5indicacion: {
                required:function(element){
                    return $("#motivo5").val()!="no";
                }
            },
            contexto1: {
                required: true
            },
            contexto2: {
                required: true
            },
            antecedentes1: {
                required: true
            },
            antecedentes2: {
                required: true
            },
            antecedentes3: {
                required: true
            },
            antecedentes3peso: {
                required: true,
                number: true
            },
            antecedentes3talla: {
                required: true,
                number: true
            },
            antecedentes3apgar: {
                required: true,
                number: false
                
            },
            ambitoConductual1:{
                required: true
            },
            ambitoConductual2:{
                required: true
            },
            ambitoConductual3:{
                required: true
            },
            ambitoConductual4:{
                required: true
            },
            ambitoConductual5:{
                required: true
            },
            ambitoConductual6:{
                required: true
            },
            historiaEscolar1:{
                required: true
            },
            historiaEscolar2:{
                required: true
            },
            historiaEscolar3:{
                required: true
            },
            historiaEscolar4:{
                required: true
            },
            historiaEscolar5:{
                required: true
            },
            historiaEscolar6:{
                required: true
            },
            antecedentes4: {
                required: true
            },
            antecedentes5: {
                required: true
            },

		    exampleInputEmail: {
                required: true,
                email: true
		    },
            desarrollo1: {
                required: true
            },
            desarrollo2: {
                required: true
            },
            desarrollo3: {
                required: true
            },
            desarrollo4: {
                required: true
            },
            desarrollo5: {
                required: true
            },
            desarrollo6: {
                required: true
            },
            desarrollo7: {
                required: true
            },
            desarrollo8: {
                required: true
            },
            habitosAlimenticios: {
                required: true
            },
            monto_pago: {
                required: true,
                number: true
            },

		    exampleInputPassword1: {
                required: true
		    },
		    exampleInputPassword2: {
                required: true,
                equalTo: '#exampleInputPassword1'
		    },
		    exampleInputProductName: {
                required: true
		    },
		    exampleInputProductId: {
                required: true
		    },
		    exampleInputQuantity: {
                required: true
            },
		    exampleInputCard: {
                required: true,
                number: true
		    },
		    exampleInputSecurity: {
                required: true,
                number: true
		    },
		    exampleInputHolder: {
                required: true
            },
		    exampleInputExpiration: {
                required: true,
                date: true
            },
		    exampleInputCsv: {
                required: true,
                number: true
            },
            monto_pago: {
                required: true
            }
        }
    });
 
    $('#rootwizard').bootstrapWizard({
        'tabClass': 'nav nav-tabs',
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            $('#rootwizard').find('.progress-bar').css({width:$percent+'%'});
        },
        'onNext': function(tab, navigation, index) {
            var $valid = $("#wizardForm").valid();
            if(!$valid) {
                $validator.focusInvalid();
                return false;
            }
        },
        'onTabClick': function(tab, navigation, index) {
            var $valid = $("#wizardForm").valid();
            if(!$valid) {
                $validator.focusInvalid();
                return false;
            }
        },
    });
    
    $('.date-picker').datepicker({
        orientation: "top auto",
        autoclose: true
    });
});