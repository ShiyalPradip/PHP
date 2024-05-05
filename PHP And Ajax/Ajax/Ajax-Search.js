$("#Search").on("keyup", function(){

    var Js_Search = $(this).val();

    $.ajax({
        url: "Action/Act-Search.php",
        type: "POST",
        data: {
            Key_Search: Js_Search
        },
        success: function (Data) {
            $("#Tbl-Show-Records").html(Data);   
        }
    });
});
