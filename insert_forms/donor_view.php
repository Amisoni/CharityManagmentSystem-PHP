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
                <!--<div class="row">-->
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="ulockd-main-title">
                        <h2 class="text-uppercase">DONORS</h2>
                        <!--<h4>Your Attention Is Changed The Part Of World.Give a helping hand to those who need it!</h4>-->
                    </div>
                </div>
                <!--</div>-->
                <!--<div class="row">-->

                <?php
                $query = "select r.first_name, r.last_name,r.profile_path, c.city_name from tbl_registration r LEFT JOIN tbl_city c ON c.city_id = r.city_id"
                        . " where user_type_id=2";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-sm-6 col-md-6 col-lg-3 fservice-box">
                        <div class="db-thumb">
                            <div class = 'col-sm-4 col-md-4 fservice-box ulockd-pad395'>
                                <img src="<?Php echo "$row[profile_path]";?>" style="height: 15%"/>
                                <div class="db-overlayer"></div>
                            </div>
                        </div>
                        <div class="db-details text-left">

                            <ul class="list-inline">
                                <li><strong>Name:</strong> <?php echo ucwords("$row[first_name]"); ?> <?php echo ucwords("$row[last_name]"); ?></li> <br>                               
                                <li><strong>City:</strong><?php echo ucwords("$row[city_name]"); ?></li>
                            </ul>
                            <!--<h3>Sponsor a Child</h3>-->
                            <!--<p>Charity, institutional and modern clothing offices clean extensive amounts of textures in an extensive.</p>-->
                            <!--<p> <strong>Donation Description</strong> <?php echo"$row[description]"; ?></p>-->
                            <!--<button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>-->
                        </div>

                    </div>    
                <?php }
                ?>

            </div>
            <!--</div>-->
        </section>
    </body>
    <?php
    include '../include/include_js.php';
    include '../include/include_footer.php';
    ?>
</html>
