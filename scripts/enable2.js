$(document).ready(function() { 

        $("#si").click(function(){ 
                $("#input1").prop("disabled", false); 
		$("#input2").prop("disabled", false);
		document.getElementById("no").style.display="block";
                }); 
                
        /* $("#no").click(function(){ 
                $("#input1").prop("disabled", true); 
		$("#input2").prop("disabled", true);  
		document.getElementById("no").style.display="none";
                }); 
*/
}); 
