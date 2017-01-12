
$("#email").change( function(){
   $.ajax({
        url: "/web_padus/ajax/cekemail",
        data: { "emailanggotanya" : $(this).val() },
        method: "POST",
        success: function(result){
        	if( result =='1' )  
        		{ $("#warning_email").html( "email telah di gunakan" ); } 
        	else 
        		{ $("#warning_email").html( "email available" ); }	
        }
    });	
});


$("#nim").change( function(){
   $.ajax({
        url: "/web_padus/ajax/ceknim",
        data: { "nimanggotanya" : $(this).val() },
        method: "POST",
        success: function(result){
            if( result =='1' )  
                { $("#warning_nim").html( "nim telah di gunakan" ); } 
            else 
                { $("#warning_nim").html( "nim available" ); }    
        }
    }); 
});