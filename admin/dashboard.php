<?php

    include 'navbar.php';

    if(isset($_SESSION['admin'])){
?>
    <!-- Containr continue -->

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-6 flex-column flex-sm-row">
                    <div class="col-md-12 dashboard">
                        <div class="dashborad-name">
                            <p class="text-center"><strong>TOTAL PRODUCTS</strong></p>
                            <h3 class="text-center">
                            <?php 
                                $sel = "select * from product";
                                $run = mysqli_query($connection,$sel);
                                $num = mysqli_num_rows($run);
                                echo $num;
                            ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6 flex-column flex-sm-row">
                    <div class="col-md-12 dashboard dashboard-ebook">
                        <div class="dashborad-name ">
                            <p class="text-center"><strong>TOTAL USERS</strong></p>
                            <h3 class="text-center"><?php 
                                $sel = "select * from user";
                                $run = mysqli_query($connection,$sel);
                                $num = mysqli_num_rows($run);
                                echo $num;
                            ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
	
	include 'footer.php';
}
else {
    echo "<script>
                    window.location='index.php';
                  </script>";
}
?>
