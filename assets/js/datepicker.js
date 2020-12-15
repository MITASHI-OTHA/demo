$(document).ready(function() 
{
    $('.js-datepicker').datepicker(
    {
        language: 'fr',
        autoclose: true,
        todayHighlight: true,
    });

    $('.js-datepicker').attr('placeholder', 'jour / mois / année');
});