//$(document).ready(function(){
 //       alert('hello');
  /* attach a submit handler to the form */
  $(function(){
    $("#JqPostForm").submit(function(e){
       e.preventDefault();   /* stop form from submitting normally */

        $.post("process_number", $("#JqPostForm").serialize(),
        function(data){
            if(data.success == 'no'){
                        $("#message_post").html("<div class='errorMessage'>Sorry " + data.mobtel + " is NOT a Mobile Number. Try again.</div>"); 
            } else {
                        $('#JqPostForm').hide();
                        $('#message_post').hide();
                        $('#inputVerification').show();
            }
        }, "json");
    });
    
    $("#inputVerification").submit(function(e) {
      e.preventDefault();  
       
       $.post("home/process_verification", $("#inputVerification").serialize(),
        function(data){
            if(data.success == 'no'){
                $('#message_post').show();
                $("#message_post").html("<div class='errorMessage'>Sorry " + data.verification_no + " is NOT a Verification Number. Try again.</div>");
            } 
            else {                
                //If successful will redirect to home page
                url = "/home";
                window.location = url;                        
            }
        }, "json");
    });

});

//});