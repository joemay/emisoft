$(document).ready(onReady);

var dragSource;

var currentStep = 1;


function signatureSource_Click(target)
{
    dragSource = target;
    return false;
}

function signatureRemove_Click(event, target)
{
    target.parent().removeClass("signature-dropped").addClass("signature-source").find('.remove').hide();
    $(".signatures-source ul").append(target.parent());
    event.preventDefault();
}

function signatureSource_Over(event, target)
{
    var cssMap =
    {
        height: "64px"
    };
    target.find(".details").show();
    target.css(cssMap);

}

function nextButton_Click(event, target)
{

	if(currentStep == 1){
		 
	$('#step-1').removeClass('current');
	$('#step-2').removeClass('disabled').addClass('current');
		
	$.get('admin/oferta_alumno', function (data)
    {
    
    	 
        $('.panel#inscripcion').find('.bd').slideUp().slideDown('slow').html(data);
        initDragDropEventHandlers();
        
        

    });
    
	}else if(currentStep == 2){
	
	
	
	var signaturesAdded =   $(".signatures-added input");
	var signaturesList = new Array();
	signaturesAdded.each(function(index) {
    	signaturesList.push( $(this).val()  );
  });
  		
	
	$.post("", { signaturesList: signaturesList } );
	
	
	$.post("admin/inscribir", { signaturesList: signaturesList},
   function(data) {
     log("Data Loaded: " +  data);
   });
	

	
	$('#step-2').removeClass('current');
	$('#step-3').removeClass('disabled').addClass('current');
	
	
	
	$.get('admin/horario_alumno', function (data)
    {
    	$('#step-3').removeClass('current');
    	$('#step-4').removeClass('disabled').addClass('current');
        $('.panel#inscripcion').find('.bd').slideUp().slideDown('slow').html(data);
        
    });
	
	
	
		
	}else if(currentStep == 3){
	
	$.get('admin/ubicacion', function (data)
	{
	    $('.panel#inscripcion').find('.bd').slideUp().slideDown('slow').html(data); 
	});

	}
	
	
	
	 currentStep++;



    


    return false;

}






function onReady()
{
			
	$.get('admin/hoja_estadistica', function (data)
    {
        $('.panel#inscripcion').find('.bd').slideUp().slideDown('slow').html(data);        

    });
    
    $("#next-button").bind("click", function (event)
    {
        nextButton_Click(event, $(this));
    });
    
     
    
    $("#next-button").live("keypress", function (event)
    {
     
    });
    
    
  

}


function initDragDropEventHandlers()
{


    var dragOpt =
    {
        revert: true
    };

    $(".signatures-source li").draggable(dragOpt);


    $(".signatures-source li").live("mousedown", function (event)
    {
        signatureSource_Click($(this));
    });


    $(".signatures-added li .remove").live("click", function (event)
    {
        signatureRemove_Click(event, $(this));
    });

    $(".signatures-target").droppable(
    {
        drop: function (event, ui)
        {

            $(this).find(".hint").remove();
            dragSource.removeClass("signature-source").addClass("signature-dropped").find('.remove').addClass('visible');
            $(this).find("ul.signatures-added").append(dragSource);
        },
        accept: '.signature-source'
    });




}






function log(o)
{
    console.log(o);
}
