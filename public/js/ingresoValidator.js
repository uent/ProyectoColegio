$(document).ready(function() {
    var $validator = $("#ingresoForm").validate({
        rules: {
            rutNino: {
                required: true
            },
            nombreNino:{
                required: true
            },
            apellidoNino:{
                required: true
            },
            edadNino:{
                required: true, 
                number: true
            },
            nombreTutor:{
                required: true
            },
            apellidoTutor:{
                required: true
            },
            rutTutor:{
                required: true
            },
            mailTutor:{
                required: true,
                email: true
            },
            fonoTutor:{
                required: true,
                number: true
            },
            celular:{
                required: true,
                number: true
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
            var $valid = $("#ingresoForm").valid();
            if(!$valid) {
                $validator.focusInvalid();
                return false;
            }
        },

        'onTabClick': function(tab, navigation, index) {
            var $valid = $("#ingresoForm").valid();
            if(!$valid) {
                $validator.focusInvalid();
                return false;
            }
        },
        'onFinish': function(tab, navigation, index) {
            var $valid = $("#ingresoForm").valid();
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