$(function() 
{
    function addFlashesAction() 
    {
        $('.app__flashes__success').click(() => 
        {
            $('.app__flashes__success').remove();
        });

        $('.app__flashes__error').click(() => 
        {
            $('.app__flashes__error').remove();
        });

        setTimeout(() => 
        { 
            $('.app__flashes__success').hide('slow'); 
            $('.app__flashes__error').hide('slow'); 
        }, 10000);
    }
    addFlashesAction();

});