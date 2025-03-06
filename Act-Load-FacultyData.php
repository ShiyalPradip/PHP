<?php
    session_start();
    require("../Include/Connection.php");
    require("../Executive/Include/PHPFunctions.php");
    unset($_SESSION["FacultyModel"]);
    
    $FacultyIds = GetFacultyId($_POST["Key_CourseName"]);
    $Trigger    = $Connect->query("
                    select faculty.Id, faculty.Name, faculty.Course, faculty.Bachelor, faculty.Master, faculty.Other, faculty.Designation, faculty.Photo, 
                    designation.DesignationName, faculty.joiningDate from faculty join designation on faculty.designation = designation.Id where 
                    faculty.Id in($FacultyIds) order by faculty.joiningDate")->fetch_all(MYSQLI_ASSOC);
    $Rows = null;

    if(sizeof($Trigger)>0){
        $CreateRow = 1; $CreateCol = 0;

        foreach($Trigger as $Data){
            if($CreateRow){
                $Rows .="<div class='row m-0'>";
                $CreateRow = 0;
            }

            $CreateCol++;        
            $Rows .="
                <div class='col-lg-3 p-2 data-row' data-id='$Data[Id]'>
                    <div class='card h-100 MySideBar text-white'>
                        <img src='".$_REQUEST["Path"]."Images/Faculty/$Data[Photo]' alt='Title' height='245px' class='image-path ViewFaculty' data-id='Card_No$Data[Id]'/>  
                        <div class='card-body text-center'>
                            <h5 class='card-title'> $Data[Name]</h5>
                            <h6 class='card-subtitle mb-2'> $Data[DesignationName]</h6>
                        </div>

            ";
            
            // <img src='../Images/Edit1.png' width='25px'/> <img src='../Images/View1.png' width='25px'/> <img src='../Images/Delete.png' width='25px'/>
            if($_REQUEST["Show"]){
                $Rows .="
                        <div class='card-footer Summary'>
                            <div class='row text-center'>
                                <div class='col-4'> <button class='p-0 btn EditButton'   data-id='Card_No$Data[Id]'> <i class='BtnIcon fa-solid fa-user-pen'></i> </button> </div>
                                <div class='col-4'> <button class='p-0 btn ViewFaculty'  data-id='Card_No$Data[Id]'> <i class='BtnIcon fa-solid fa-eye'></i>      </button> </div>
                                <div class='col-4'> <button class='p-0 btn DeleteButton' data-id='Card_No$Data[Id]' data-dltphoto='$Data[Photo]' data-course='$_POST[Key_CourseName]'> <i class='BtnIcon fa-solid fa-trash-can'></i></button></div>
                            </div>
                        </div>
                ";
            }
            $Rows .="
                    </div>
                </div>
            ";

            if($CreateCol==4){
                $Rows .="</div>";
                $CreateCol = 0; $CreateRow = 1;
            }
        }
        if($CreateCol<4){
            $Rows .="</div>";
        }
    }else{
        $Rows ="<div class='alert alert-danger font-weight-bold m-2 text-capitalize'> Faculty data is currently not available in the selected Course</div>";
    }
    echo json_encode($Rows);
?>