<?php

session_start();

function index() {
    
    $server = "";
    $user = "";
    $passwd = "";
    $db = "";

    $conn = mysqli_connect($server, $user, $passwd, $db);

    $getip = "SELECT * FROM development";
    $res = mysqli_query($conn, $getip);

    while ($row = mysqli_fetch_assoc($res)) {
        $ip = $row['ip'];
    }
    
    ?>

    <div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li>
                        <a href="http://<?php echo $ip; ?>/NarbonSupport/index.php" class="active"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="http://<?php echo $ip; ?>/NarbonSupport/pages/tickets.php" class=""><i class="fa fa-envelope-o"></i> <span>Tickets</span></a>
                    </li>
                    <li>
                        <a href="#insub" data-toggle="collapse" class="collapsed"><i class="fa fa-bars"></i> <span>Pro Search</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="insub" class="active collapse ">
                            <ul class="nav">
                                <li>
                                    <a href="http://<?php echo $ip; ?>/NarbonSupport/pages/search/institute.php" class=""><i class="fa fa-university"></i> <span>Institute</span></a>
                                </li>
                                <li>
                                    <a href="http://<?php echo $ip; ?>/NarbonSupport/pages/search/admin.php" class=""><i class="fa fa-user-plus"></i> <span>Admin</span></a>
                                </li>
                                <li>
                                    <a href="http://<?php echo $ip; ?>/NarbonSupport/pages/search/agent.php" class=""><i class="fa fa-microphone"></i> <span>Agent</span></a>
                                </li>
                                <li>
                                    <a href="http://<?php echo $ip; ?>/NarbonSupport/pages/search/teacher.php" class=""><i class="fa fa-book"></i> <span>Teacher</span></a>
                                </li>
                                <li>
                                    <a href="http://<?php echo $ip; ?>/NarbonSupport/pages/search/student.php" class=""><i class="fa fa-graduation-cap"></i> <span>Student</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <?php
}

function tickets() {
    
    $server = "";
    $user = "";
    $passwd = "";
    $db = "";

    $conn = mysqli_connect($server, $user, $passwd, $db);

    $getip = "SELECT * FROM development";
    $res = mysqli_query($conn, $getip);

    while ($row = mysqli_fetch_assoc($res)) {
        $ip = $row['ip'];
    }
    
    ?>

    <div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li>
                        <a href="http://<?php echo $ip; ?>/NarbonSupport/index.php" class=""><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="http://<?php echo $ip; ?>/NarbonSupport/pages/tickets.php" class="active"><i class="fa fa-envelope-o"></i> <span>Tickets</span></a>
                    </li>
                    <li>
                        <a href="#insub" data-toggle="collapse" class="collapsed"><i class="fa fa-bars"></i> <span>Pro Search</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="insub" class="active collapse ">
                            <ul class="nav">
                                <li>
                                    <a href="http://<?php echo $ip; ?>/NarbonSupport/pages/search/institute.php" class=""><i class="fa fa-university"></i> <span>Institute</span></a>
                                </li>
                                <li>
                                    <a href="http://<?php echo $ip; ?>/NarbonSupport/pages/search/admin.php" class=""><i class="fa fa-user-plus"></i> <span>Admin</span></a>
                                </li>
                                <li>
                                    <a href="http://<?php echo $ip; ?>/NarbonSupport/pages/search/agent.php" class=""><i class="fa fa-microphone"></i> <span>Agent</span></a>
                                </li>
                                <li>
                                    <a href="http://<?php echo $ip; ?>/NarbonSupport/pages/search/teacher.php" class=""><i class="fa fa-book"></i> <span>Teacher</span></a>
                                </li>
                                <li>
                                    <a href="http://<?php echo $ip; ?>/NarbonSupport/pages/search/student.php" class=""><i class="fa fa-graduation-cap"></i> <span>Student</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <?php
}