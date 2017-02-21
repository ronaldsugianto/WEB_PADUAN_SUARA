
// $("#email").change( function(){
//    $.ajax({
//         url: "http://ourvoice.local/ajax/cekemailanggota",
//         data: { "emailanggotanya" : $(this).val() },
//         method: "POST",
//         success: function(result){
//         	if( result =='1' )  
//         		{ $("#warning_email").html( "email telah di gunakan" );
//                    $(":submit").attr("disabled", true); } 
//         	else 
//         		{ $("#warning_email").html( "email OK" );
//                   $(":submit").removeAttr("disabled");}	
//         }
//     });	
// });


$("#nim").change( function(){
   $.ajax({
        url: "http://ourvoice.local/ajax/ceknimnim",
        data: { "nimanggotanya" : $(this).val() },
        method: "POST",
        success: function(result){
            if( result =='1' )  
                { $("#warning_nim").html( "nim telah di gunakan" );
                 $(":submit").attr("disabled", true);} 
            else 
                { $("#warning_nim").html( "nim OK" );
                   $(":submit").removeAttr("disabled");}    
        }
    }); 
});