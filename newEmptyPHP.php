<?php
include 'include/header_top.php';
include 'include/header_menu.php';
include 'controller/connection.php';
?>
<section class="recent-causes">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="ulockd-main-title">
                    <h2 class="text-uppercase">Recent <span class="text-thm2">CAUSES</span></h2>
                    <h4>Your Attention Is Changed The Part Of World.Give a helping hand to those who need it!</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="nav nav-tabs fcauses-tab" role="tablist">
                <?php
                $query = "SELECT distinct dt.donation_type_id, dt.donation_type FROM tbl_donation_plan dp left join tbl_donation_type dt ON dt.donation_type_id = dp.donation_type_id";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                    echo("<li role = 'presentation'><a href = '#" . $row['donation_type_id'] . "' aria-controls = '" . $row['donation_type_id'] . "' role = 'tab' data-toggle = 'tab'>" . $row['donation_type'] . "</a></li>");
                }
                ?>
            </ul>
            <div class="tab-content">
                <?php
                $query1 = "SELECT distinct dt.donation_type_id, dt.donation_type FROM tbl_donation_plan dp left join tbl_donation_type dt ON dt.donation_type_id = dp.donation_type_id";
                $result1 = mysqli_query($conn, $query1);
                while ($row1 = mysqli_fetch_array($result1)) {
                    $query2 =" SELECT dp.plan_id, (d.amount_received) as amount_received, dp.plan_name, dp.amount,dt.donation_type,
                                      ROUND(((d.amount_received) * 100) / dp.amount,0) AS percentage, dp.photo_path ,dp.duration, dp.donation_plan_description FROM tbl_donation_plan dp 
                                      LEFT JOIN  tbl_donation_type dt ON dt.donation_type_id = dp.donation_type_id 
                                      LEFT JOIN (SELECT sum(amount) as amount_received, plan_id FROM tbl_donate group by plan_id ) d ON dp.plan_id = d.plan_id
                                      Where dp.donation_type_id =" . $row1['donation_type_id'];
                    $result2 = mysqli_query($conn, $query2);
                    echo("<div role = 'tabpanel' class = 'tab-pane' id = '" . $row1['donation_type_id'] . "' > ");
                    while ($row2 = mysqli_fetch_array($result2)) {
                        ?>
                        <div class="col-sm-6 col-md-6 col-lg-3 fservice-box">
                        <div class="db-thumb">
                            <img class="img-responsive img-whp" src="<?Php echo $row2['photo_path'];    ?>" style="height:25%;"/>
                        <div class="db-overlayer"></div>
                        </div>
                        <div class="db-details text-left">
                        <div id="bar1" class="barfiller ulockd-mrgn1225">
                        <div class="tipWrap">
                            <span class="tip"></span>
                            <span class="tip">50</span>
                        </div>
                        <span class="fill ulockd-bgthm" data-percentage="<?php echo $row2['percentage']    ?>"></span>
                        <!--<span class="fill ulockd-bgthm" data-percentage="50"></span>-->
                        </div>
                        <ul class="list-inline">
                            <li><strong>Goal:</strong> <?php echo "$row2[amount]";    ?></li>
                            <li><strong>Raised:</strong> <?php echo "$row2[amount_received]";    ?></li>
                        </ul>
                        <h3><?php echo"$row2[plan_name]";    ?></h3>
                        <p><?php echo "$row2[donation_plan_description]";    ?></p>
<!--                        <div class="col-sm-6 col-md-6 col-lg-3 <?php echo $row1['donation_type_id'] ?>">
                            <div class="db-thumb">
                                <img class="img-responsive img-whp" src="images/causes/4.jpg" alt="4.jpg">
                                <div class="db-overlayer"></div>
                            </div>
                            <div class="db-details text-left">
                                <div id="bar1" class="barfiller ulockd-mrgn1225">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill ulockd-bgthm" data-percentage="65"></span>
                                </div>
                                <ul class="list-inline">
                                    <li><strong>Raised:</strong> $45000</li>
                                    <li><strong>Goal:</strong> <span class="text-thm2">$70000</span></li>
                                </ul>
                                <h3>Sponsor a Child</h3>
                                <p>Charity, institutional and modern clothing offices clean extensive amounts of textures in an extensive.</p>
                                <button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
                            </div>
                        </div>-->

                        <!--<ul class="list-inline">-->
                            <!--<a href="../insert_forms/donate_form.php?id=<?php // echo $row2['plan_id']   ?>" class="btn btn-default ulockd-btn-styledark">Donate Now</a>-->                                                                                      
                        <!--</ul>-->
                    </div>
                        </div>
                    <!--</div>-->
                    <?php
                }
                echo"</div>";
            }
            ?>
        </div>
    </div>
    <!--</div>-->
    <!--</div>-->
</section>
<?Php
include './include/include_footer.php';
?>