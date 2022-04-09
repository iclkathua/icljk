<?php

    include('public/fcm.php');

    if(isset($_POST['submit'])) {

        $icon = time().'_'.$_FILES['icon']['name'];
        $img         = $_FILES['icon']['tmp_name'];
        $tpath       = 'upload/social/'.$icon;
        copy($img, $tpath);


        $data = array(
            'name'  => $_POST['name'],
            'icon'  => $icon,
            'url'   => $_POST['url']
            );

        $qry = Insert('tbl_social', $data);

        $succes =<<<EOF
            <script>
            alert('New social added successfully...');
            window.location = 'manage-social.php';
            </script>
EOF;
        echo $succes;

    }

?>

   <section class="content">
   
        <ol class="breadcrumb">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="manage-social.php">Manage Social</a></li>
            <li class="active">Add Social</a></li>
        </ol>

       <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <form id="form_validation" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="header">
                            <h2>ADD SOCIAL</h2>
                            <div class="header-dropdown m-r--5">
                                <button type="submit" name="submit" class="btn bg-blue waves-effect pull-right">PUBLISH</button>
                            </div>
                        </div>
                        <div class="body">

                            <div class="row clearfix">
                                
                                <div>

                                    <div class="form-group form-float col-sm-12">
                                        <div class="font-12">Name *</div>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-line">
                                            <div class="font-12 ex1">Icon ( jpg / png ) *</div>
                                            <input type="file" name="icon" id="icon" class="dropify-image" data-max-file-size="1M" data-allowed-file-extensions="jpg jpeg png" />
                                        </div>
                                    </div>
                                    
                                    <div class="form-group form-float col-sm-12">
                                        <div class="font-12">Url *</div>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="url" id="url" placeholder="Url" required>
                                        </div>
                                    </div>

                                </div>
                                    
                            </div>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
            
        </div>

    </section>