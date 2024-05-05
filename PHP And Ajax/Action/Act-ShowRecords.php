<?php
    require("../Connection/Connection.php");
    
    $Query = "select * from phpandajax";
    $Trigger = $Connect->query($Query);
    $Rows = null;
    $SrNo = 1;
    $TempId = null;

    if(mysqli_num_rows($Trigger) > 0){

        $Rows = "
            <table class='table table-bordered'>
                <tr class='bg-success text-white'>
                    <th> Sr.No</th>
                    <th> First Name</th>
                    <th> Last Name</th>
                    <th colspan='2' class='text-center'> Action</th>
                </tr>
        ";

        foreach($Trigger as $Data){

            $TempId = $Data["Id"];

            $Rows .="
                <tr>
                    <td> $SrNo </td>
                    <td> $Data[FirstName]</td>
                    <td> $Data[LastName]</td>
                    <td class='text-center'> <button type='button' data-toggle='modal' data-target='#Modal$Data[Id]' class='btn bg-primary text-white Update-Btn'> Update </button></td>
                    <td class='text-center'> <button class='btn bg-danger text-white Delete-Btn' data-id='$Data[Id]'> Delete </button></td>
                </tr>

                <div class='modal fade' id='Modal$Data[Id]' tabindex='-1' role='dialog' aria-labelledby='Modal$Data[Id]' aria-hidden='true'>
                    <div class='modal-dialog modal-dialog-centered' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header bg-danger text-white'>
                              <h5 class='modal-title' id='exampleModalLongTitle'>Update Record</h5>
                              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                <span aria-hidden='true' class='text-white'>&times;</span>
                              </button>
                            </div>
                            <div class='modal-body'>
                                <form action='' id='Frm-Update-Record'>
                                    <div class='row pt-2'>
                                        <div class='col'>
                                            <label for='UpdFirstName'> First Name</label>
                                            <input type='text' name='' id='UpdFirstName$TempId' class='form-control' placeholder='Enter Your First Name Here' value='$Data[FirstName]'>
                                        </div>
                                    </div>

                                    <div class='row pt-2'>
                                        <div class='col'>
                                            <label for='UpdLastName'> Last Name</label>
                                            <input type='text' name='' id='UpdLastName$TempId' class='form-control' placeholder='Enter Your Last Name Here' value='$Data[LastName]'>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class='modal-footer'>
                                <button type='button' id='Upd-Btn-Submit-Data' value='$Data[Id]' class='cls-Upd-Btn btn bg-primary text-white' data-dismiss='modal'> Update Record </button>
                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            ";

            $SrNo++;
        }

        $Rows .= "
            </table>
        ";

        echo $Rows;
    
    }else{
        echo("
            <h4 class='text-danger'> Records Are Not Available..</h4>
        ");
    }
?>