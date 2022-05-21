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

    $fail = 0;
    ?>

    <div class="container mt-5">
        <div class="row">
        
            <div class="col-lg-7 mx-auto shadow-lg">
                <div class="card">
                <img src="logo-new.png" style="width:130px;height:90px;margin-left:50px;" alt="">
                <h4 class="text-center fw-bold mt-3">ANNUAL SECONDARY SCHOOL EXAMINATION RESULT 2022</h4>
                <table class="table table-bordered">
                    <tr>
                        <th colspan="4" class="text-center bg-danger text-light">Personal Details</th>
                    </tr>
                    <tr>
                        <th colspan="2">Name</th>
                        <td colspan="2"><?php echo $data['name'];?></td>
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
                        <th colspan="4" class="text-center bg-danger text-light">Mark Details</th>
                    </tr>
                    <tr>
                        <th>Subject</th>
                        <th>Total Marks</th>
                        <th>Pass Marks</th>
                        <th>Obtain Marks</th>
                    </tr>
                    <tr>
                        <th>Maths</th>
                        <th>100</th>
                        <th>30</th>
                        <td><?php echo $data['maths'];?> <?php if($data['maths'] < 30){echo "F"; $fail = 1;} if($data['maths'] >= 75) {echo "D";}?></td>
                    </tr>
                    <tr>
                        <th>Science</th>
                        <th>100</th>
                        <th>30</th>
                        <td><?php echo $data['science'];?> <?php if($data['science'] < 30){echo "F";$fail = 1;} if($data['science'] >= 75) {echo "D";}?></td>
                    </tr>
                    <tr>
                        <th>SSt</th>
                        <th>100</th>
                        <th>30</th>
                        <td><?php echo $data['sst'];?> <?php if($data['sst'] < 30){echo "F";$fail = 1;} if($data['sst'] >= 75) {echo "D";}?></td>
                    </tr>
                    <tr>
                        <th>Hindi</th>
                        <th>100</th>
                        <th>30</th>
                        <td><?php echo $data['hindi'];?> <?php if($data['hindi'] < 30){echo "F";$fail = 1;} if($data['hindi'] >= 75) {echo "D";}?></td>
                    </tr>
                    
                    <tr>
                        <th>English</th>
                        <th>100</th>
                        <th>30</th>
                        <td><?php echo $data['english'];?> <?php if($data['english'] < 30){echo "F";$fail = 1;} if($data['english'] >= 75) {echo "D";}?></td>
                    </tr>
                    
                    <tr>
                        <th colspan="4" class="text-center bg-danger text-light">Final Result</th>
                    </tr>
                    
                    <tr>
                        <th colspan="1">Result/Division:</th>
                        <th colspan="1"><?php 
                        $total = $data['maths'] + $data['science'] + $data['sst'] + $data['hindi'] + $data['english'];
                        if($total >= 300 && $fail == 0){
                            echo "1st Division";
                        }
                        else if($total >= 250 && $fail == 0){
                            echo "2nd Division";
                        }
                        else if($total >= 150 && $fail == 0){
                            echo "3rd Division";
                        }
                        else{
                            echo "Fail";
                        }
                        
                        ?></th>
                        <th colspan="1">Total Marks</th>
                        <td colspan="2" class="text-center fw-bold">
                            <?php echo $total;?>
                        </td>
                    </tr>
                    
                    <tr>
                        <th class="mt-2">Music</th>
                        <th class="mt-2">100</th>
                        <th class="mt-2">30</th>
                        <td class="mt-2"><?php echo $data['music'];?></td>
                    </tr>

                </table>
                <div>
            </div>
        </div>
    </div>
</body>
</html>