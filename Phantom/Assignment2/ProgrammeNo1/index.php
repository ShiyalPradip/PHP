<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        <link rel="stylesheet" href="../CSS/Style.css">
        <title>Programme No.1</title>
    </head>
    <body id="BgImage">
        <div class="container w-50 bg-dark text-white ForDiv">
            <form action="DisplayData.php" method="post">
                <div class="row text-center">
                    <div class="col p-3 h3"> User Detail</div>
                </div>

                <div class="row p-2">
                    <div class="col-3 ForFont"> Username</div>
                    <div class="col-9">
                        <input type="text" name="Username" id="" placeholder="Enter Your Username Here" class="form-control TextBox" onkeypress="return (event.charCode>=65 && event.charCode<=90) || (event.charCode>= 97 && event.charCode<=122) || (event.charCode==32) " required/>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-3 ForFont"> Gender </div>
                    <div class="col-9">
                        <input type="radio" name="Gender" id="" value="Male"   class="form-check-input Check-Radio" checked/>Male
                        <input type="radio" name="Gender" id="" value="Female" class="form-check-input Check-Radio"/>Female
                        <input type="radio" name="Gender" id="" value="Other"  class="form-check-input Check-Radio"/>Other
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-3 ForFont">Course</div>
                    <div class="col-9">
                        <input type="checkbox" name="Course[]" id="" class="Check-Radio" value="BCA" checked>BCA
                        <input type="checkbox" name="Course[]" id="" class="Check-Radio" value="BCOM">BCOM
                        <input type="checkbox" name="Course[]" id="" class="Check-Radio" value="MCOM">MCOM
                        <input type="checkbox" name="Course[]" id="" class="Check-Radio" value="MCA">MCA
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-3 ForFont"> City </div>
                    <div class="col-9">
                        <select name="City" id="" class="form-select TextBox">
                            <option value="Surat">         Surat         </option>
                            <option value="Rajkot">        Rajkot        </option>
                            <option value="Junagadh">      Junagadh      </option>
                            <option value="Gondal">        Gondal        </option>
                            <option value="Porbandar">     Porbandar     </option>
                            <option value="Surendranagar" selected> Surendranagar </option>
                            <option value="Bharuch">       Bharuch       </option>
                            <option value="Gondal">        Gondal        </option>
                            <option value=" Botad">        Botad         </option>
                        </select>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-3 ForFont"> Phone No</div>
                    <div class="col-9">
                        <input type="text" name="PhoneNo" id=""  placeholder="Enter Your Phone Number Here" class="form-control TextBox" maxlength="10" minlength="10" required onkeypress="return (event.charCode>=48 && event.charCode<=57)"/>
                    </div>
                </div>

                <div class="row p-2 text-center">
                    <div class="col">
                        <input type="submit" value="Submit" nmae="Button" class="btn Button">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>