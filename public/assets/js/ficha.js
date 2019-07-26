/**
 * Created by SYSTEMS on 29/04/2019.
 */
$(document).ready(function(){
    $('#actualizar').hide();
    $('#btn_materialUpdate').hide();
});
//// reset form ////////
$('#add_actividad_btn').click(function () {
    $('.formnactividad')[0].reset();
    $('#idtrabajo').selectpicker('refresh');
    $('#botonenviar').show();
    $('#titulo_modal1').text('Nueva Actividad');
});
//// reset form ////////
$('#add_tarea_btn').click(function () {
    $('.formntarea')[0].reset();
    $('#actualizar').hide();
    $('#guardar').show();
    $('#idtarea').selectpicker('refresh');
    $('#titulo_modal2').text('Nueva Tarea');
});
//// reset form ////////
$('#add_material_btn').click(function () {
    $('.formnmaterial')[0].reset();
    $('#btn_materialUpdate').hide();
    $('#btn_material').show();
    $('#idmaterial').selectpicker('refresh');
    $('#titulo_modal3').text('Nuevo Material');
});
$(document).ready(function() {
    var tabla;
    var tabla1;
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
        weekHeader: 'Sm',
        dateFormat: 'yy/mm/dd',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
});

$('#datepicker1').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'yyyy/mm/dd'
});
$('#datepicker').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'yyyy/mm/dd'
});


