$(document).ready(function() { 

        $("#si").click(function(){ 
                $("#input1").prop("disabled", false); 
		$("#input2").prop("disabled", false);
		document.getElementById("no").style.display="block";
		document.getElementById("input2").type="text";
                }); 
                
        $("#no").click(function(){ 
                $("#input1").prop("disabled", true); 
		$("#input2").prop("disabled", true);  
		document.getElementById("no").style.display="none";
		document.getElementById("input2").type="password";
                }); 

}); 
