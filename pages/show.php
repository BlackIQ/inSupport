<?php

session_start();

include("../panels/silebar.php");

$code = $_GET['report'];

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

$sql = "SELECT * FROM report WHERE code = $code";
$result = mysqli_query($conn, $sql);
$rowticket = mysqli_fetch_assoc($result);

$user = $rowticket['person'];
$userpos = $rowticket['pos'];

$sql = "SELECT * FROM $userpos WHERE mcode = $user";
$result = mysqli_query($conn, $sql);
$rowuser = mysqli_fetch_assoc($result);

$username = $rowuser['fname'];

?>

<!doctype html>
<html lang="en">

<head>
    <title>Narbon Support | Ticket <?php echo $code; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
    <link rel="stylesheet" href="../assets/vendor/chartist/css/chartist-custom.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <?php include("../panels/nav.php"); ?>
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <?php tickets(); ?>
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                        <!-- OVERVIEW -->
                        <div class="panel panel-headline">
                            <div class="panel-heading">
                                <h3 class="panel-title">Ticket <?php echo $rowticket['code']; ?></h3>
                                <p class="panel-subtitle">You can answer this ticket and see more information on this page</p>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div>
                                            <h1><b><?php echo $rowticket['title']; ?></b></h1>
                                            <h3><?php echo $rowticket['txt']; ?></h3>
                                            <hr>
                                            <p><?php echo 'Reported on ' . $rowticket['dt'] . " By <b>$username</b>"; ?></p>
                                        </div>
                                        <br>
                                        <hr>
                                        <br>
                                        <div class="col-md-6">
                                            <form method="post" action="show.php">
                                                <div class="form-group">
                                                    <label for="answer">Answer</label>
                                                    <input name="answer" type="text" class="form-control" id="answer" placeholder="Answer">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Send</button>
                                            </form>
                                        </div>
                                        <?php
                                        
                                        $answer = $_POST['answer'];
                                        
                                        if (isset($answer)) {
                                            $sql = "UPDATE report SET answer = '$answer'";

                                            if (mysqli_query($conn, $sql)) {
                                                ?>
                                                    <script>
                                                        window.alert("Answered.");
                                                    </script>
                                                <?php
                                                header("Location: http://$ip/NarbonSupport/tickets.php");
                                            }
                                            else {
                                                ?>
                                                    <script>
                                                        window.alert("Didnt answered. Try Again!\n<?php echo mysqli_error($conn); ?>");
                                                    </script>
                                                <?php
                                                header("Location: http://$ip/NarbonSupport/show.php?report=$code");
                                            }
                                        }
                                        
                                        ?>
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
    <?php include("../panels/footer.php"); ?>
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