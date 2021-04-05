<?php

session_start();

include("panels/silebar.php");

$server = "localhost";
$user = "narbon";
$passwd = "narbon";
$db = "narbonn";

$conn = mysqli_connect($server, $user, $passwd, $db);

$getip = "SELECT * FROM development";
$res = mysqli_query($conn, $getip);

while ($row = mysqli_fetch_assoc($res)) {
    $ip = $row['ip'];
}

$sql = "SELECT * FROM institute";
$result = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="en">

<head>
    <title>Narbon Support | Index</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
    <link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="assets/css/demo.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <?php index(); ?>
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <?php include("panels/silebar.php"); ?>
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                        <!-- OVERVIEW -->
                        <div class="panel panel-headline">
                            <div class="panel-heading">
                                <h3 class="panel-title">Narbon Project Status</h3>
                                <p class="panel-subtitle">You can see important data of Narbon Project</p>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="metric">
                                            <span class="icon"><i class="fa fa-university"></i></span>
                                            <p>
                                                <span class="number">1</span>
                                                <span class="title">Total Institutes</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="metric">
                                            <span class="icon"><i class="fa fa-microphone"></i></span>
                                            <p>
                                                <span class="number">2</span>
                                                <span class="title">Total Agents</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="metric">
                                            <span class="icon"><i class="fa fa-book"></i></span>
                                            <p>
                                                <span class="number">8</span>
                                                <span class="title">Total Teachers</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="metric">
                                            <span class="icon"><i class="fa fa-graduation-cap"></i></span>
                                            <p>
                                                <span class="number">64</span>
                                                <span class="title">Total Students</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">iCode</th>
                                                    <th scope="col">iName</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">Left</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <?php
                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        if ($row["status"] == "active") {
                                                            $stat = "Active";
                                                            $color = "success";
                                                        }
                                                        ?>
                                                            <tr>
                                                                <th scope="row"><a href="institute.php?code=<?php echo $row['icode']; ?>`"><?php echo $row['icode']; ?></a></th>
                                                                <td><?php echo $row['name']; ?></td>
                                                                <td><?php echo $row["total"]; ?></td>
                                                                <td><?php echo $row["lefts"]; ?></td>
                                                                <td class="text-<?php echo $color; ?>"><?php echo $stat; ?></td>
                                                            </tr>
                                                        <?php
                                                    }
                                                }

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END OVERVIEW -->
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT -->
        </div>
        <!-- END MAIN -->
        <div class="clearfix"></div>
    <?php include("panels/footer.php"); ?>
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/vendor/chartist/js/chartist.min.js"></script>
    <script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
