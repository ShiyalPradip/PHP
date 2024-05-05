$(document).on("click", ".cls-Upd-Btn", function(){
            
    var Js_Id = $(this).val();
    var Js_UpdFirstName = $("#UpdFirstName"+Js_Id).val();
    var Js_UpdLastName = $("#UpdLastName"+Js_Id).val();

    $.ajax({
        url: "Action/Act-UpdateRecord.php",
        type: "POST",
        data: {
            Key_Id       : Js_Id,
            Key_FirstName: Js_UpdFirstName,
            Key_LastName : Js_UpdLastName
        },

        success: function (Data) {
            if(Data){
                ShowRecords();
            }else{
                alert("Faield To Update Record...");
            }
        }
    });
    
});