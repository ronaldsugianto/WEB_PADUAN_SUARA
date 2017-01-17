
$("#email").change( function(){
   $.ajax({
        url: "/WEB_PADUAN_SUARA/web_padus/ajax/cekemail",
        data: { "emailanggotanya" : $(this).val() },
        success: function(result){
        	if( result =='1' )  
        		{ $("#warning_email").html( "email telah di gunakan" );
                  $(":submit").attr("disable", true); } 
        	else 
        		{ $("#warning_email").html( "email OK" );
                  $(":submit").removeAttr("disable"); }	
        }
    });	
});


$("#nim").change( function(){
   $.ajax({
        url: "/WEB_PADUAN_SUARA/web_padus/ajax/ceknim",
        data: { "nimanggotanya" : $(this).val() },
        success: function(result){
            if( result =='1' )  
                { $("#warning_nim").html( "nim telah di gunakan" );
                  $(":submit").attr("disable", true); } 
            else 
                { $("#warning_nim").html( "nim OK" );
                  $(":submit").removeAttr("disable"); }    
        }
    }); 
});