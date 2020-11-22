<?php
//include './include/include_css.php';
?>
<section class="ulockd-team-two">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
                <div class="ulockd-main-title">
                    <h2 class="text-uppercase">OUR <span class="text-thm2">VOLUNTEERS</span></h2>
                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem labore voluptates consequuntur velit necessitatibus maiores fugiat eaque.</p>-->
                </div>
            </div>
        </div>
       
            <div class="row">
                <?php
                include './controller/connection.php';
                $query = "select * from tbl_registration where user_type_id =5";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="ulockd-team-member">
                            <div class="team-thumb">
                                 <img src="<?Php echo "$row[profile_path]";?>"/>
                                <div class="team-details text-left">
                                    <h3 class="member-name"><?php echo ucwords("$row[first_name]"); ?> <?php echo ucwords("$row[last_name]"); ?></h3>
                                    <!--<h5 class="member-post">- Volunteer</h5>-->
                                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo.</p>-->
                                    <!--<button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>       
            </div>
            </section>
            <?php
//            include './include/include_js.php';
            ?>