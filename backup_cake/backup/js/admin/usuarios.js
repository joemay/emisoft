$(document).ready(onReady);

function onReady()
{

    $("#add").fancybox(
    {
        'hideOnContentClick': false
    });
    
    
    $(".edit").fancybox(
    {
        'hideOnContentClick': false
    });
    
    
    
    $("#add-student .submit").click(function ()
    {
        $.fancybox.close;
    });
    
    
    

}
