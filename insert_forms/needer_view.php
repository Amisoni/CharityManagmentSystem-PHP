<html>
    <head>
        <meta charset="UTF-8">
        <?php include '../include/include_css.php'; ?>
        <script>
            function row(needer_information_id)
            {
                alert(needer_information_id);
                window.location.href = "../controller/needer_donor_donate.php?needer_information_id=" + needer_information_id;
            }
        </script>
    </head>
    <body>
        <?php
        include '../include/header_top.php';
        include '../include/header_menu.php';
        include '../controller/connection.php';
        ?>
        <section class="recent-causes">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="ulockd-main-title">
                            <h2 class="text-uppercase">OUR <span class="text-thm2"> NEEDERS </span></h2>
                            <h4>Your Attention Is Changed The Part Of World.Give a helping hand to those who need it!</h4>
                        </div>
                    </div>
                </div>
                <b><h3 style="padding-left: 900px;">Insert Your NEED</h3></b>
                <a href="needer_information.php"><b><h5 style="padding-left: 1000">Click hear</h5></b></a>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <!--<div class="row">-->
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs fcauses-tab" role="tablist">
                            <?php
                            $query = "SELECT distinct dt.donation_type_id, dt.donation_type FROM tbl_needer_information ni left join tbl_donation_type dt ON dt.donation_type_id = ni.donation_type";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                echo("<li role = 'presentation'><a href = '#" . $row['donation_type_id'] . "' aria-controls = '" . $row['donation_type_id'] . "' role = 'tab' data-toggle = 'tab'>" . $row['donation_type'] . "</a></li>");
                            }
                            ?>
                        </ul> 
                        <div class="tab-content">
                            <?php
                            $query1 = "SELECT distinct dt.donation_type_id, dt.donation_type FROM tbl_needer_information ni left join tbl_donation_type dt ON dt.donation_type_id = ni.donation_type";
                            $result1 = mysqli_query($conn, $query1);
                            while ($row1 = mysqli_fetch_array($result1)) {
                                $query2 = "SELECT r.profile_path,r.first_name, r.last_name,r.phone_number, ni.needer_information_id, ni.needer_description, ni.amount , ni.number_of_unites ,ni.date FROM tbl_needer_information ni 
                                   left join tbl_donation_type dt ON dt.donation_type_id = ni.donation_type
                                   left join tbl_registration r ON r.registration_id = ni.reistration_id where ni.donation_type = " . $row1['donation_type_id']; // and isaprove
                                $result2 = mysqli_query($conn, $query2);
                                echo("<div role='tabpanel' class='tab-pane' id='" . $row1['donation_type_id'] . "'>");
                                while ($row2 = mysqli_fetch_array($result2)) {
                                    ?>
                                    <div class = 'col-sm-4 col-md-4 fservice-box ulockd-pad395'>
                                        <div class = "db-thumb">
                                            <img class="img-responsive img-whp" src="<?Php echo "$row2[profile_path]"; ?>" style="height:25%;"/>
                                        </div>
                                        <div class = "db-details text-left">
                                            <div class="progress-box wow animated" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms;">
                                                <!--                                                <div class="inner">
                                                                                                    <div class="bar">
                                                                                                        <div class="bar-innner">
                                                                                                            <div class="progress-levels ulockd-mrgn1210">
                                                                                                                <div class="progress-box wow animated" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms;">
                                                                                                                    <div class="inner">
                                                                                                                        <div class="bar">
                                                                                                                            <div class="bar-innner">
                                                                                                                                <div class="barfiller ulockd-mrgn1225">
                                                                                                                                    <div class="bar-fill ulockd-bgthm" data-percent="<?php echo "$row2[percentage]"; ?>" style="width: <?php echo "$row2[percentage]"; ?>%;background-color: #11c0b4;">
                                                                                                                                        <div class="percent">
                                                <?php // echo $row2[percentage] == NULL ? 0 : $row2[percentage]; ?>%
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>                                                                                                                                                                                          
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>                                                          
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>-->
                                            </div>
                                            <ul class = "list-inline">                     
                                                <li><strong> Name: </strong> <?php echo ucwords("$row2[first_name]"); ?> <?php echo ucwords("$row2[last_name]"); ?></li> <br>
                                                <?php if ($row2['amount'] != 0) ;  ?>
                                                    <li><strong> Require Amount :</strong> <?php echo "$row2[amount]"; ?></li> <br>
                                                    
                                                    <?php if ($row2['number_of_unites'] != 0)  ?>
                                                    <li><strong> Require Number Of Unit :</strong> <?php echo " $row2[number_of_unites]"; ?></li><br> 

                                                    <li><strong> Contact: </strong> <?php echo "$row2[phone_number]"; ?></li> <br>
                                                </ul>
                                                <!--<h3><?php echo "$row2[payment_name]"; ?></h3>-->

                                                <p><?php echo "$row2[needer_description]"; ?></p>
                                                <ul class="list-inline">
                                                    <div class="btn btn-default ulockd-btn-styledark" onclick="row(<?php echo $row2['needer_information_id']; ?>)"> Donate Now  </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    echo"</div>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </body>

        <?php
        include '../include/include_js.php';
        include '../include/include_footer.php';
        ?>
    <script>
//        $(document).ready(function () {
//            $("#amount").change(function () {
//
//                if ($("#amount").val() != "0s") {
//                    $("#number_of_unites").hide();
//                } else {
//                    $("#number_of_unites").show();
//                }
//            });
//        });
    </script>
</html>
