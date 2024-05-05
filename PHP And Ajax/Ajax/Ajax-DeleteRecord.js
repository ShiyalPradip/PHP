$(document).on("click", ".Delete-Btn", function(){
    var Js_Id = $(this).data("id");
    var element = this;

    $.ajax({
        url: "Action/Act-DeleteRecord.php",
        type: "POST",
        data: {
            Key_Id: Js_Id
        },
        
        success: function (Data) {
            if(Data){
                $(element).closest("tr").fadeOut();
                // ShowRecords();
            }else{
                alert("Failed To Delete Record...");
            }
        }
    });
});