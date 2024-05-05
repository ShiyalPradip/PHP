function ShowRecords() {
    $(document).ready(function(){
        $.ajax({
            url: "Action/Act-ShowRecords.php",
            type: "POST",
            success: function(Data){
                $("#Tbl-Show-Records").html(Data);
            }
        });
    });
}

ShowRecords();
