<html>
    <head>
        <meta charset="UTF-8">
        <?php include '../include/include_css.php'; ?>
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
                            <h2 class="text-uppercase">Recent <span class="text-thm2">PLANS</span></h2>
                            <h4>Your Attention Is Changed The Part Of World.Give a helping hand to those who need it!</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                    <!--                SELECT distinct dt.donation_type_id, dt.donation_type FROM tbl_donation_plan dp left join tbl_donation_type dt ON dt.donation_type_id = dp.donation_type_id-->
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <?php
                        $query1 = "SELECT distinct dt.donation_type_id, dt.donation_type FROM tbl_donation_plan dp left join tbl_donation_type dt ON dt.donation_type_id = dp.donation_type_id";
                        $result1 = mysqli_query($conn, $query1);
                        while ($row1 = mysqli_fetch_array($result1)) {
                            $query2 = "SELECT dp.plan_id, IF(d.amount_received is null,0,d.amount_received) as amount_received, dp.plan_name, dp.amount,dt.donation_type,
                                      if(ROUND(((d.amount_received) * 100) / dp.amount,0) is null,0,ROUND(((d.amount_received) * 100) / dp.amount,0) )  AS percentage, dp.photo_path ,dp.duration, dp.donation_plan_description FROM tbl_donation_plan dp 
                                      LEFT JOIN  tbl_donation_type dt ON dt.donation_type_id = dp.donation_type_id 
                                      LEFT JOIN (SELECT sum(amount) as amount_received, plan_id FROM tbl_donate group by plan_id ) d ON dp.plan_id = d.plan_id
                                      Where dp.donation_type_id =" . $row1['donation_type_id'];
                            //echo $query2;
                            $result2 = mysqli_query($conn, $query2);
                            echo("<div role = 'tabpanel' class = 'tab-pane' id = '" . $row1['donation_type_id'] . "' > ");
                            while ($row2 = mysqli_fetch_array($result2)) {
                                ?>
                                <div class="col-sm-6 col-md-6 col-lg-3 fservice-box">
                                    <div class="db-thumb">
                                        <!--<img class="img-responsive img-whp" src="/images/causes/1.jpg" alt="1.jpg">-->
                                         <!--<img src="../uploaded_photos/1517671170_5a75d3027e7c0.png" alt=""/>-->
                                        <img class="img-responsive img-whp" src="<?Php echo $row2['photo_path']; ?>" style="height:25%;"/>
                                        <!--<div class="db-overlayer"></div>-->
                                    </div>
                                    <div class="db-details text-left">
                                        <div class="progress-/levels ulockd-mrgn1210">
                                            <div class="progress-box wow animated" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms;">
                                                <div class="inner">
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
                                                                                            <?php echo $row2[percentage] == NULL ? 0 : $row2[percentage]; ?>%
                                                                                        </div>
                                                                                    </div>
                                                                                </div>                                                                                                                                                                                          
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--
                                                                -->                                                                                        </div>

                                                            <!--<span class="tip"> <?php echo "$row2[percentage]"; ?>%</span>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-inline">
                                                <li><strong>Goal:</strong> <?php echo "$row2[amount]"; ?></li>
                                                <li><strong>Raised:</strong> <?php echo "$row2[amount_received]"; ?></li>
                                            </ul>
                                            <h3><?php echo "$row2[plan_name]"; ?></h3>
                                            <p><?php echo "$row2[donation_plan_description]"; ?></p>
                                            <ul class="list-inline">
                                                <a href="../insert_forms/donate_form.php?id=<?php echo $row2['plan_id'] ?>" class="btn btn-default ulockd-btn-styledark">Donate Now</a>                                                                                      
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--</d-->                
                                <?php
                            }
                            echo"</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!--            <div class="progress-levels ulockd-mrgn1210">
                            <div class="progress-box wow animated" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms;">
                            <div class="progress-box wow animated" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms;">
            <?php // echo $row2['percentage'] ?>
                                <div class="inner">
                                    <div class="bar">
                                        <div class="bar-innner">
                                            <div class="bar-fill ulockd-bgthm" data-percent="80" style="width: 80%;"><div class="percent">80%</div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
        </section>
    </body>
    <?php
    include '../include/include_js.php';
    include '../include/include_footer.php';
    ?>
</html>
