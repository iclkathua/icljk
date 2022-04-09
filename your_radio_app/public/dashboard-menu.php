<?php

  $sql_category = "SELECT COUNT(*) as num FROM tbl_category";
  $total_category = mysqli_query($connect, $sql_category);
  $total_category = mysqli_fetch_array($total_category);
  $total_category = $total_category['num'];

  $sql_news = "SELECT COUNT(*) as num FROM tbl_radio";
  $total_radio = mysqli_query($connect, $sql_news);
  $total_radio = mysqli_fetch_array($total_radio);
  $total_radio = $total_radio['num'];

?>

    <section class="content">

    <ol class="breadcrumb">
        <li><a href="dashboard.php">Dashboard</a></li>
        <li class="active">Home</a></li>
    </ol>

        <div class="container-fluid">
             
             <div class="row">

                <a href="manage-category.php">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card demo-color-box bg-blue waves-effect col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <br>
                            <div class="color-name">MANAGE CATEGORY</div>
                            <div class="color-name"><i class="material-icons">people</i></div>
                            <div class="color-class-name">Total ( <?php echo $total_category; ?> ) Categories</div>
                            <br>
                        </div>
                    </div>
                </a>

               <a href="manage-radio.php">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card demo-color-box bg-blue waves-effect col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <br>
                            <div class="color-name">MANAGE RADIO</div>
                            <div class="color-name"><i class="material-icons">radio</i></div>
                            <div class="color-class-name">Total ( <?php echo $total_radio; ?> ) Radios</div>
                            <br>
                        </div>
                    </div>
                </a>

                <a href="manage-ads.php">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card demo-color-box bg-blue waves-effect col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <br>
                            <div class="color-name uppercase">MANAGE ADS</div>
                            <div class="color-name"><i class="material-icons">monetization_on</i></div>
                            <div class="color-class-name">App Monetization</div>
                            <br>
                        </div>
                    </div>
                </a>

                <a href="push-notification.php">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card demo-color-box bg-blue waves-effect col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <br>
                            <div class="color-name">PUSH NOTIFICATION</div>
                            <div class="color-name"><i class="material-icons">notifications</i></div>
                            <div class="color-class-name">Notify Your Users</div>
                            <br>
                        </div>
                    </div>
                </a>

                <a href="members.php">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card demo-color-box bg-blue waves-effect col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <br>
                            <div class="color-name">ADMINISTRATOR</div>
                            <div class="color-name"><i class="material-icons">people</i></div>
                            <div class="color-class-name">Admin Panel Privileges</div>
                            <br>
                        </div>
                    </div>
                </a>

                <a href="settings.php">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card demo-color-box bg-blue waves-effect col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <br>
                            <div class="color-name">SETTINGS</div>
                            <div class="color-name"><i class="material-icons">settings</i></div>
                            <div class="color-class-name">Key and Privacy Settings</div>
                            <br>
                        </div>
                    </div>
                </a>

            </div>
            
        </div>

    </section>