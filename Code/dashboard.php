<?php include 'conn1.php';?>


<?php 

$ran = 1;
if(isset($_POST['range']))
{
    
    $ran = $_POST['range'];
    settype($ran,'int');
    
    
    
}


$query = "select COUNT(student_id) from faculty_eval WHERE r = $ran AND course_id = 922611";

$result = mysqli_query($con, $query);

$q = mysqli_fetch_assoc($result);



$a = $q['COUNT(student_id)'];


settype($a,'int');




$query1 = "select COUNT(student_id) from faculty_eval WHERE r = $ran AND course_id = 922614";

$result1 = mysqli_query($con, $query1);

$q1 = mysqli_fetch_assoc($result1);



$a1 = $q1['COUNT(student_id)'];


settype($a1,'int');



$query2 = "select COUNT(student_id) from faculty_eval WHERE r = $ran AND course_id = 922622";

$result2 = mysqli_query($con, $query2);

$q2 = mysqli_fetch_assoc($result2);



$a2 = $q2['COUNT(student_id)'];


settype($a2,'int');





















$qu = "select COUNT(student_id) from faculty_eval WHERE r = $ran AND course_id = 922611 AND instructor_score BETWEEN 0 AND 0.99";

$re = mysqli_query($con, $qu);

$x1 = mysqli_fetch_assoc($re);



$m1 = $x1['COUNT(student_id)'];


settype($m1,'int');




$qu1 = "select COUNT(student_id) from faculty_eval WHERE r = $ran AND course_id = 922611 AND instructor_score BETWEEN 1 AND 1.99";

$re1 = mysqli_query($con, $qu1);

$x2 = mysqli_fetch_assoc($re1);



$m2 = $x2['COUNT(student_id)'];


settype($m2,'int');



$qu2 = "select COUNT(student_id) from faculty_eval WHERE r = $ran AND course_id = 922611 AND instructor_score BETWEEN 2 AND 2.99";

$re2 = mysqli_query($con, $qu2);

$x3 = mysqli_fetch_assoc($re2);



$m3 = $x3['COUNT(student_id)'];


settype($m3,'int');







$qu3 = "select COUNT(student_id) from faculty_eval WHERE r = $ran AND course_id = 922611 AND instructor_score BETWEEN 3 AND 3.99";

$re3 = mysqli_query($con, $qu3);

$x4 = mysqli_fetch_assoc($re3);



$m4 = $x4['COUNT(student_id)'];


settype($m4,'int');




$qu4 = "select COUNT(student_id) from faculty_eval WHERE r = $ran AND course_id = 922611 AND instructor_score BETWEEN 4 AND 5";

$re4 = mysqli_query($con, $qu4);

$x5 = mysqli_fetch_assoc($re4);



$m5 = $x5['COUNT(student_id)'];


settype($m5,'int');









$que = "select COUNT(student_id) from faculty_eval WHERE r = $ran AND course_id = 922614 AND instructor_score BETWEEN 0 AND 0.99";

$res = mysqli_query($con, $que);

$y1 = mysqli_fetch_assoc($res);



$l1 = $y1['COUNT(student_id)'];


settype($l1,'int');




$que1 = "select COUNT(student_id) from faculty_eval WHERE r = $ran AND course_id = 922614 AND instructor_score BETWEEN 1 AND 1.99";

$res1 = mysqli_query($con, $que1);

$y2 = mysqli_fetch_assoc($res1);



$l2 = $y2['COUNT(student_id)'];


settype($l2,'int');



$que2 = "select COUNT(student_id) from faculty_eval WHERE r = $ran AND course_id = 922614 AND instructor_score BETWEEN 2 AND 2.99";

$res2 = mysqli_query($con, $que2);

$y3 = mysqli_fetch_assoc($res2);



$l3 = $y3['COUNT(student_id)'];


settype($l3,'int');







$que3 = "select COUNT(student_id) from faculty_eval WHERE r = $ran AND course_id = 922614 AND instructor_score BETWEEN 3 AND 3.99";

$res3 = mysqli_query($con, $que3);

$y4 = mysqli_fetch_assoc($res3);



$l4 = $y4['COUNT(student_id)'];


settype($l4,'int');




$que4 = "select COUNT(student_id) from faculty_eval WHERE r = $ran AND course_id = 922614 AND instructor_score BETWEEN 4 AND 5";

$res4 = mysqli_query($con, $que4);

$y5 = mysqli_fetch_assoc($res4);



$l5 = $y5['COUNT(student_id)'];


settype($l5,'int');










$quer = "select COUNT(student_id) from faculty_eval WHERE r = $ran AND course_id = 922622 AND instructor_score BETWEEN 0 AND 0.99";

$resu = mysqli_query($con, $quer);

$s1 = mysqli_fetch_assoc($resu);



$n1 = $s1['COUNT(student_id)'];


settype($n1,'int');




$quer1 = "select COUNT(student_id) from faculty_eval WHERE r = $ran AND course_id = 922622 AND instructor_score BETWEEN 1 AND 1.99";

$resu1 = mysqli_query($con, $quer1);

$s2 = mysqli_fetch_assoc($resu1);



$n2 = $s2['COUNT(student_id)'];


settype($n2,'int');



$quer2 = "select COUNT(student_id) from faculty_eval WHERE r = $ran AND course_id = 922622 AND instructor_score BETWEEN 2 AND 2.99";

$resu2 = mysqli_query($con, $quer2);

$s3 = mysqli_fetch_assoc($resu2);



$n3 = $s3['COUNT(student_id)'];


settype($n3,'int');







$quer3 = "select COUNT(student_id) from faculty_eval WHERE r = $ran AND course_id = 922622 AND instructor_score BETWEEN 3 AND 3.99";

$resu3 = mysqli_query($con, $quer3);

$s4 = mysqli_fetch_assoc($resu3);



$n4 = $s4['COUNT(student_id)'];


settype($n4,'int');




$quer4 = "select COUNT(student_id) from faculty_eval WHERE r = $ran AND course_id = 922622 AND instructor_score BETWEEN 4 AND 5";

$resu4 = mysqli_query($con, $quer4);

$s5 = mysqli_fetch_assoc($resu4);



$n5 = $s5['COUNT(student_id)'];


settype($n5,'int');


















$sql1 = " select AVG(instructor_score) from faculty_eval where r=1 ";

$statement1 = mysqli_query($con , $sql1);

$ins1 = mysqli_fetch_assoc($statement1);

$cv1 = $ins1['AVG(instructor_score)'];
$cv1 = (float) $cv1;


$sql2 = " select AVG(course_score) from faculty_eval WHERE r=1 ";

$statement2 = mysqli_query($con , $sql2);

$ins2 = mysqli_fetch_assoc($statement2);

$cv2 = $ins2['AVG(course_score)'];

$cv2 = (float) $cv2;

$sql3 = " select AVG(resources_score) from faculty_eval WHERE r=1 ";

$statement3 = mysqli_query($con , $sql3);

$ins3 = mysqli_fetch_assoc($statement3);

$cv3 = $ins3['AVG(resources_score)'];

$cv3 = (float) $cv3;

$sql4 = " select AVG(project_score) from faculty_eval WHERE r=1 ";

$statement4 = mysqli_query($con , $sql4);

$ins4 = mysqli_fetch_assoc($statement4);

$cv4 = $ins4['AVG(project_score)'];

$cv4 = (float) $cv4;

$sql21 = " select AVG(instructor_score) from faculty_eval WHERE r=2 ";

$statement21 = mysqli_query($con , $sql21);

$ins21 = mysqli_fetch_assoc($statement21);

$cv21 = $ins21['AVG(instructor_score)'];

$cv21 = (float) $cv21;

$sql22 = " select AVG(course_score) from faculty_eval WHERE r=2 ";

$statement22 = mysqli_query($con , $sql22);

$ins22 = mysqli_fetch_assoc($statement22);

$cv22 = $ins22['AVG(course_score)'];

$cv22 = (float) $cv22;

$sql23 = " select AVG(resources_score) from faculty_eval WHERE r=2 ";

$statement23 = mysqli_query($con , $sql23);

$ins23 = mysqli_fetch_assoc($statement23);

$cv23 = $ins23['AVG(resources_score)'];

$cv23 = (float) $cv23;

$sql24 = " select AVG(project_score) from faculty_eval WHERE r=2 ";

$statement24 = mysqli_query($con , $sql24);

$ins24 = mysqli_fetch_assoc($statement24);

$cv24 = $ins24['AVG(project_score)'];

$cv24 = (float) $cv24;






















?>











<!DOCTYPE html>
<html lang="en">

<head>
    <title>WBS-891-07</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body class="grey lighten-3">

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container-fluid">

                <!-- Brand -->
                <a class="navbar-brand waves-effect">
                    <strong class="blue-text">Faculty Evaluation Analysis Project</strong>
                </a>

            </div>
        </nav>
        <!-- Navbar -->

        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">

            <a class="logo-wrapper waves-effect">
                <img src="img/logo.png" class="img-fluid" alt="Logo">
            </a>

            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item active waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>Dashboard
                </a>
            </div>

        </div>
        <!-- Sidebar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">

            <!-- Heading -->
            <div class="card mb-4 wow fadeIn">

                <!--Card content-->
                <div class="card-body d-sm-flex justify-content-between">

                    <h4 class="mb-2 mb-sm-0 pt-1">
                        <span>Per Semester Analysis</span>
                    </h4>
                    
                    <form class="d-flex justify-content-center" action="dashboard.php" method="POST">
                        <!-- Default input -->
                        <label>Sem-1</label>
                        <input type="range" class="form-control" min="1" max="2" name="range" id="range" value="<?php echo $ran ;?>" step="1"/>
                        <label>Sem-2</label>
                        <button class="btn btn-primary btn-sm my-0 p" type="submit" name="submit" id="submit">
                            <i class="fa fa-search"></i>
                        </button>

                    </form>
                </div>

            </div>
            <!-- Heading -->

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-12 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">

                            <canvas id="myChart"></canvas>

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <!--Card-->
                    <div class="card">
                        
                        <!-- Card header -->
                        <div class="card-header">Course Code: 922611</div>

                        <!--Card content-->
                        <div class="card-body">

                            <!-- Table  -->
                            <table class="table table-hover">
                                <!-- Table head -->
                                <thead class="blue-grey lighten-4">
                                    <tr>
                                        <th>#</th>
                                        <th>Score Range</th>
                                        <th># of Students</th>
                                    </tr>
                                </thead>
                                <!-- Table head -->

                                <!-- Table body -->
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>0 - 0.9</td>
                                        <td><?php echo $m1 ;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>1 - 1.9</td>
                                        <td><?php echo $m2 ;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>2 - 2.9</td>
                                        <td><?php echo $m3 ;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>3 - 3.9</td>
                                        <td><?php echo $m4 ;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>4 - 5</td>
                                        <td><?php echo $m5 ;?></td>
                                    </tr>
                                </tbody>
                                <!-- Table body -->
                            </table>
                            <!-- Table  -->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->
                
                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <!--Card-->
                    <div class="card">
                        
                        <!-- Card header -->
                        <div class="card-header">Course Code: 922614</div>

                        <!--Card content-->
                        <div class="card-body">

                            <!-- Table  -->
                            <table class="table table-hover">
                                <!-- Table head -->
                                <thead class="blue-grey lighten-4">
                                    <tr>
                                        <th>#</th>
                                        <th>Score Range</th>
                                        <th># of Students</th>
                                    </tr>
                                </thead>
                                <!-- Table head -->

                                <!-- Table body -->
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>0 - 0.9</td>
                                        <td><?php echo $l1 ;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>1 - 1.9</td>
                                        <td><?php echo $l2 ;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>2 - 2.9</td>
                                        <td><?php echo $l3 ;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>3 - 3.9</td>
                                        <td><?php echo $l4 ;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>4 - 5</td>
                                        <td><?php echo $l5 ;?></td>
                                    </tr>
                                </tbody>
                                <!-- Table body -->
                            </table>
                            <!-- Table  -->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->
                
                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <!--Card-->
                    <div class="card">
                        
                        <!-- Card header -->
                        <div class="card-header">Course Code: 922622</div>

                        <!--Card content-->
                        <div class="card-body">

                            <!-- Table  -->
                            <table class="table table-hover">
                                <!-- Table head -->
                                <thead class="blue-grey lighten-4">
                                    <tr>
                                        <th>#</th>
                                        <th>Score Range</th>
                                        <th># of Students</th>
                                    </tr>
                                </thead>
                                <!-- Table head -->

                                <!-- Table body -->
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>0 - 0.9</td>
                                        <td><?php echo $n1 ;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>1 - 1.9</td>
                                        <td><?php echo $n2 ;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>2 - 2.9</td>
                                        <td><?php echo $n3 ;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>3 - 3.9</td>
                                        <td><?php echo $n4 ;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>4 - 5</td>
                                        <td><?php echo $n5 ;?></td>
                                    </tr>
                                </tbody>
                                <!-- Table body -->
                            </table>
                            <!-- Table  -->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!-- Heading -->
            <div class="card mb-4 wow fadeIn">

                <!--Card content-->
                <div class="card-body d-sm-flex justify-content-between">

                    <h4 class="mb-2 mb-sm-0 pt-1">
                        <span>Overall Analysis</span>
                    </h4>
                </div>

            </div>
            <!-- Heading -->
            
            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-lg-12 col-md-12 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header">Trend Analysis for Score Change</div>

                        <!--Card content-->
                        <div class="card-body">

                            <canvas id="lineChart"></canvas>

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->
                
            </div>
            <!--Grid row-->

        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">

        <hr class="my-4">

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2018 Copyright: IS-323 Web-based Systems
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>

    <!-- Charts -->
    <script>
        // Bar
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["922611", "922614", "922622"],
                datasets: [{
                    label: 'Student Enrollment per Course',
                    data: [<?php echo $a ;?>, <?php echo $a1 ;?>, <?php echo $a2 ;?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        
        //line
        var ctxL = document.getElementById("lineChart").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["Instructor-Score", "Course-Score", "Resources-Score", "Project-Score"],
                datasets: [{
                        label: "Semester-1",
                        backgroundColor: [
                            'rgba(105, 0, 132, .2)',
                        ],
                        borderColor: [
                            'rgba(200, 99, 132, .7)',
                        ],
                        borderWidth: 2,
                        data: [<?php echo $cv1;?>, <?php echo $cv2;?>, <?php echo $cv3;?> , <?php echo $cv4;?>]
                    },
                    {
                        label: "Semester-2",
                        backgroundColor: [
                            'rgba(0, 137, 132, .2)',
                        ],
                        borderColor: [
                            'rgba(0, 10, 130, .7)',
                        ],
                        data: [<?php echo $cv21;?>, <?php echo $cv22;?>, <?php echo $cv23;?>, <?php echo $cv24;?>]
                    }
                ]
            },
            options: {
                responsive: true
            }
        });

        //doughnut
        var ctxD = document.getElementById("doughnutChart").getContext('2d');
        var myLineChart = new Chart(ctxD, {
            type: 'doughnut',
            data: {
                labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
                datasets: [{
                    data: [300, 50, 100, 40, 120],
                    backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                    hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
                }]
            },
            options: {
                responsive: true
            }
        });

        
    </script>
</body>

</html>