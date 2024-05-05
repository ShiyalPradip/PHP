$(document).ready(function(){
            
    $("#Btn-Submit-Data").on("click", function(e){
        
        e.preventDefault();

        var Js_FirstName = $("#FirstName").val();
        var Js_LastName = $("#LastName").val();

        if(Js_FirstName =="" || Js_LastName ==""){
            alert("Fields Can Not Empty...");
        
        }else{
           
            $.ajax({
                url: "Action/Act-InsertRecord.php",
                type: "POST",
                data: {
                    Key_FirstName: Js_FirstName,
                    Key_LastName :Js_LastName,
                },

                success: function(Data){

                    if(Data){
                        ShowRecords();    
                    }else{
                        alert("Failed To Insert Record...");
                    }

                    $("#Frm-Add-Record").trigger("reset");
                }
            });
        }  
    });
});