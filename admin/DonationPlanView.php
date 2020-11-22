<html>
    <head>
        <meta charset="UTF-8">
        <?php include '../include/include_css.php'; ?>
    </head>
    <body>
        <?php
        include '../include/include_header.php';
        include '../controller/connection.php';
        ?>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <!--<div class="row">-->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs fcauses-tab" role="tablist">
                    <?php
                    $query = "SELECT distinct dt.donation_type_id, dt.donation_type FROM tbl_donation_plan dp left join tbl_donation_type dt ON dt.donation_type_id = dp.donation_type_id";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        echo("<li role = 'presentation'><a href = '#" . $row['donation_type_id'] . "' aria-controls = '" . $row['donation_type_id'] . "' role = 'tab' data-toggle = 'tab'>" . $row['donation_type'] . "</a></li>");
                    }
                    ?>
                </ul> 
                <!-- Tab panes -->
                <div class="tab-content">
                    <?php
                    $query1 = "SELECT distinct dt.donation_type_id, dt.donation_type FROM tbl_donation_plan dp left join tbl_donation_type dt ON dt.donation_type_id = dp.donation_type_id";
                    $result1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                        $query2 = "select * from tbl_donation_plan where donation_type_id = " . $row1['donation_type_id'];
                        $result2 = mysqli_query($conn, $query2);
                        echo("<div role='tabpanel' class='tab-pane' id='" . $row1['donation_type_id'] . "'>");
                        while ($row2 = mysqli_fetch_array($result2)) {
                            ?>


                            <div class='col-sm-4 col-md-4 fservice-box ulockd-pad395'>
                                <div class="db-thumb">
                                    <!--<img class="img-responsive img-whp" src="/images/causes/1.jpg" alt="1.jpg">-->
                                     <!--<img src="../uploaded_photos/1517671170_5a75d3027e7c0.png" alt=""/>-->
                                    <img class="img-responsive img-whp" src="<?Php echo "$row2[photo_path]"; ?>" style="height:25%;"/>
                                    <div class="db-overlayer"></div>
                                </div>
                                <div class="db-details text-left">
                                    <div class="progress-levels ulockd-mrgn1210">
                                        <div class="progress-box wow animated" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms;">
                                            <div class="inner">
                                                <div class="bar">
                                                    <div class="bar-innner">
                                                        <div class="bar-fill ulockd-bgthm" data-percent="80" style="width: 80%;"><div class="percent">80%</div></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-inline">
                                        <!--<li><strong>Raised:</strong> $45000</li>-->
                                        <li><strong>Goal:</strong> <?php echo "$row2[amount]"; ?></li>
                                    </ul>
                                    <h3><?php echo "$row2[plan_name]"; ?></h3>

                                    <p><?php echo "$row2[donation_plan_description]"; ?></p>
                                    <ul class="list-inline">
                                        <li><button type="submit" class="btn btn-default ulockd-btn-thm2" data-toggle="modal" data-target=".bs-example-modal-default">Donate now</button></li>
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
        <!--</div>-->
    </body>
    <?php
    include '../include/include_js.php';
    include '../include/include_footer.php';
    ?>
</html>
