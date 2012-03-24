$(document).ready(onReady);

var dragSource;

var dropTarget;

function signatureSource_Click(target){
	dragSource = target;
	return false;
}

function signatureTarget_Click(target){
	dragTarget = target;
	return false;
}


function onReady(){

//$(".bd").slideUp();

var dragOpt = { revert: true };
$( ".signatures-source li a" ).draggable(dragOpt);



$( ".signatures-source li a" ).live( "mousedown", function(event){  signatureSource_Click($(this));  });
$( ".signatures-target li a" ).live( "mousedown", function(event){  signatureTarget_Click($(this));  });




$( ".signatures-target" ).droppable({
			drop: function( event, ui ) {	
			var a = $("<a/>", {
						text : dragSource.text(),
						href : dragSource.attr("href"),
						class : 'signature-dropped'
					});
			var li = $("<li/>", {}).append(a);
			dragSource.parent().hide("slow").show();
			$( this ).find(".hint").remove();
			$( this ).find( "ul.signatures-added" ).append(li);
			$( ".signatures-target li a" ).draggable(dragOpt);				
			},		
			accept: '.signature-source' 
		});



$( ".signatures-source" ).droppable({
			drop: function( event, ui ) {	
			

			
			var a = $("<a/>", {
						text : dragSource.text(),
						href : dragSource.attr("href"),
						class : 'signature-source'
					});
			var li = $("<li/>", {}).append(a);
			dragSource.parent().hide("slow").show();
			
			
			dragSource.parent().remove();


			$( this ).find( ".signatures-source ul" ).append(li);
			
							
			},		
			accept: '.signature-dropped' 
		});

}




function log(o){
console.log(o);
}