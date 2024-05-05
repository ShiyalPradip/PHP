<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/Bootstrap.css">
        <link rel="stylesheet" href="CSS/Style.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>PHP And Ajax</title>
    </head>
    <body>
        <div class="container-fluid bg-primary text-white p-3">
            <form action="" id="Frm-Add-Record">
                <div class="row pt-2">
                    <div class="col-3">
                        <label for="FirstName"> First Name</label>
                        <input type="text" name="" id="FirstName" class="form-control" placeholder="Enter Your First Name Here">
                    </div>

                    <div class="col-4">
                        <label for="LastName"> Last Name</label>
                        <input type="text" name="" id="LastName" class="form-control" placeholder="Enter Your Last Name Here">
                    </div>

                    <div class="col-2 mt-auto mb-auto pt-3">
                        <button type="submit" id="Btn-Submit-Data" class="btn bg-warning text-white"> Add Record</button>
                    </div>

                    <div class="col-3">
                        <label for="Search"> Search Record</label>
                        <input type="text" name="" id="Search" class="form-control" placeholder="Enter Name Which You Want To Search">
                    </div>
                </div>
            </form>
        </div>

        <div class="p-3 d-none" id="MyAlert">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        
        <div class="container p-3">
            <div id="Tbl-Show-Records"></div>
        </div>
    </body>
    <script src="JQuery/JQuery.js"></script>
    <script src="Ajax/Ajax-ShowRecords.js"></script>
    <script src="Ajax/Ajax-InsertRecord.js"></script>
    <script src="Ajax/Ajax-DeleteRecord.js"></script>
    <script src="Ajax/Ajax-UpdateRecord.js"></script>
    <script>
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
    </script>
</html>