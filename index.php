<?php $connect = mysqli_connect('localhost','root','','result'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result management system </title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <?php include "header.php";?>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-3 shadow-lg">
                <div class="card">
                    <div class="card-body">
                        <h2 class="fw-bold text-center text-primary">Student Details</h2>
                        <form action="index.php" method="post">
                            <div class="mb-3">
                                <label for="" class="text-dark" style="font-size:18px;">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-dark" style="font-size:18px;">Contact</label>
                                <input type="text" name="contact" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-dark" style="font-size:18px;">Registration_no</label>
                                <input type="text" name="registration_no" class="form-control">
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">Maths</label>
                                    <input type="text" name="maths" class="form-control">
                                </div>
                                <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">Science</label>
                                    <input type="text" name="science" class="form-control">
                                </div>
                                <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">Sst</label>
                                    <input type="text" name="sst" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                            <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">Hindi</label>
                                    <input type="text" name="hindi" class="form-control">
                                </div>
                                <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">English</label>
                                    <input type="text" name="english" class="form-control">
                                </div>
                                <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">music</label>
                                    <input type="text" name="music" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="create" name="create" class="btn btn-danger d-inline-block" style="margin-left:110px;font-size:20px;">
                            </div>
                        </form>

                        <?php
                            if(isset($_POST['create'])){
                                $name = $_POST['name'];
                                $contact = $_POST['contact'];
                                $registration_no = $_POST['registration_no'];
                                $maths = $_POST['maths'];
                                $science = $_POST['science'];
                                $sst = $_POST['sst'];
                                $hindi = $_POST['hindi'];
                                $english = $_POST['english'];
                                $music = $_POST['music'];

                                $query = mysqli_query($connect,"insert into results (name,contact, registration_no, maths, science, sst, hindi,english,music) value ('$name','$contact','$registration_no','$maths','$science','$sst','$hindi','$english','$music')");

                                if($query){
                                    echo "<script> window.open('index.php','_self')</script>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <table class="table table-bordered border-dark">
                    <thead>
                        <tr>
                            <th class="bg-success fw-bold text-light text-center" style="font-size:20px;">Roll</th>
                            <th class="bg-success fw-bold text-light text-center" style="font-size:20px;">Name</th>
                            <th class="bg-success fw-bold text-light text-center" style="font-size:20px;">Contact</th>
                            <th class="bg-success fw-bold text-light text-center" style="font-size:20px;">Registration_no</th>
                            <th class="bg-success fw-bold text-light text-center" style="font-size:20px;">Maths</th>
                            <th class="bg-success fw-bold text-light text-center" style="font-size:20px;">Sci</th>
                            <th class="bg-success fw-bold text-light text-center" style="font-size:20px;">Sst</th>
                            <th class="bg-success fw-bold text-light text-center" style="font-size:20px;">Hindi</th>
                            <th class="bg-success fw-bold text-light text-center" style="font-size:20px;">Eng</th>
                            <th class="bg-success fw-bold text-light text-center" style="font-size:20px;">music</th>
                            <th class="bg-success fw-bold text-light text-center" style="font-size:20px;">Total Marks</th>
                            <th class="bg-success fw-bold text-light text-center" style="font-size:20px;">Action</th>
                        </tr>
                        <tbody>
                            <?php 
                                $query = mysqli_query($connect,"select * from results");
                                while($row = mysqli_fetch_array($query)){
                                    $roll = $row['roll'];
                                    $name = $row['name'];
                                    $registration_no = $row['registration_no'];
                                    $contact = $row['contact'];
                                    $maths = $row['maths'];
                                    $science = $row['science'];
                                    $sst = $row['sst'];
                                    $hindi = $row['hindi'];
                                    $english = $row['english'];
                                    $music = $row['music'];
                                    

                                    $total = $maths + $science + $sst + $english + $hindi;
                                    
                                    echo "
                                    <tr>
                                        <td class='text-center fw-bold'>$roll</td>
                                        <td class='text-center fw-bold'>$name</td>
                                        <td class='text-center fw-bold'>$contact</td>
                                        <td class='text-center fw-bold'>$registration_no</td>
                                        <td class='text-center fw-bold'>$maths</td>
                                        <td class='text-center fw-bold'>$science</td>
                                        <td class='text-center fw-bold'>$sst</td>
                                        <td class='text-center fw-bold'>$hindi</td>
                                        <td class='text-center fw-bold'>$english</td>
                                        <td class='text-center fw-bold'>$music</td>
                                        <td class='text-center fw-bold'>$total</td>
                                        <td><a href='' class='btn btn-danger btn-sm'>Delete</a>
                                        <a href='insert.php?id=$roll' class='btn btn-success btn-sm'>View Result</a></td>
                                        <a href='admit.php?id=$roll' class='btn btn-success btn-sm' style='font-size:18px;'>Admit Card</a></td>
                                    </tr>";
                                }


                            ?>
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>

</body>
</html>