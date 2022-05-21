<?php $connect = mysqli_connect('localhost','root','','result'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marksheet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <?php include "header.php";?>

    <?php
    $roll = $_GET['id'];
    $query = mysqli_query($connect,"select * from results where roll='$roll'");
    $data = mysqli_fetch_array($query);
    ?>

    <div class="container mt-5">
        <div class="row">
        
            <div class="col-lg-7 mx-auto shadow-lg">
                <div class="card">
                <img src="logo-new.png" style="width:130px;height:90px;margin-left:50px;" alt="">
                <h4 class="text-center fw-bold mt-3">ADMIT CARD 2022</h4>
                <table class="table table-bordered">
                    <tr>
                        <th colspan="4" class=" text-dark">college name: =    purnea college purnea</th>
                    </tr>
                    <tr>
                        <th colspan="1">Name</th>
                        <td colspan="1"><?php echo $data['name'];?></td>
                        <td colspan="2"><img src="R.png" style="width:150px;height:100px;margin-left:50px;" alt=""></td>
                    </tr>
                    <tr>
                        <th colspan="2">Registration_no</th>
                        <td colspan="2"><?php echo $data['registration_no'];?></td>
                    </tr>
                    <tr>
                        <th colspan="2">Contact</th>
                        <td colspan="2"><?php echo $data['contact'];?></td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-dark">Roll code : = 56774</th>
                        <th colspan="4" class="text-dark">Roll Number : = 56774</th>
                    </tr>
                    <tr>
                        <th>Subject</th>
                        <th>EXAMINATION DATE</th>
                        <th>SITTING</th>
                    </tr>
                    <tr>
                        <th>Maths</th>
                        <th>12/ 02 / 2022</th>
                        <th>1st Shift</th>
                    </tr>
                    <tr>
                        <th>Science</th>
                        <th>14/ 03 / 2022</th>
                        <th>2nd Shift</th>
                    </tr>
                    <tr>
                        <th>SSt</th>
                        <th>16/ 03 / 2022</th>
                        <th>1st Shift</th>
                    </tr>
                    <tr>
                        <th>Hindi</th>
                        <th>22/ 04 / 2022</th>
                        <th>2nd Shift</th>
                    </tr>
                    
                    <tr>
                        <th>English</th>
                        <th>18/ 04 / 2022</th>
                        <th>1st Shift</th>
                    </tr>

                </table>
                <div>
            </div>
        </div>
    </div>
</body>
</html>