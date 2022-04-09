<?php

    include 'fcm.php';

    if (isset($_GET['id'])) {
        $ID = $_GET['id'];
    } else {
        $ID = "";
    }

    $qry    = "SELECT * FROM tbl_social WHERE id ='$ID'";
    $result = mysqli_query($connect, $qry);
    $row    = mysqli_fetch_assoc($result);

	if (isset($_POST['submit'])) {

		if($_FILES['icon']['name'] != '') {
			unlink('upload/social/'.$_POST['old_image']);
			$icon = time().'_'.$_FILES['icon']['name'];
			$pic		 = $_FILES['icon']['tmp_name'];
   			$tpath		 = 'upload/social/'.$icon;
			copy($pic, $tpath);
		} else {
			$icon = $_POST['old_image'];
		}
 
        $data = array(
            'name'  => $_POST['name'],
            'icon'  => $icon,
            'url'   => $_POST['url']
        );  

		$result = Update('tbl_social', $data, "WHERE id = '$ID'");

		if ($result > 0) {
	        $succes =<<<EOF
	            <script>
	            alert('Data social updated successfully...');
	            window.location = 'manage-social.php';
	            </script>
EOF;
        	echo $succes;
		}


	}

?>

   <section class="content">
   
        <ol class="breadcrumb">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="manage-social.php">Manage Social</a></li>
            <li class="active">Edit Social</a></li>
        </ol>

       <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <form id="form_validation" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT SOCIAL</h2>
                            <div class="header-dropdown m-r--5">
                                <button type="submit" name="submit" class="btn bg-blue waves-effect pull-right">UPDATE</button>
                            </div>
                        </div>
                        <div class="body">

                            <div class="row clearfix">
                                
                                <div>

                                    <div class="form-group form-float col-sm-12">
                                        <div class="font-12">Name *</div>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $row['name']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-line">
                                            <div class="font-12 ex1">Icon ( jpg / png ) *</div>
                                            <input type="file" name="icon" id="icon" class="dropify-image" data-max-file-size="1M" data-allowed-file-extensions="jpg jpeg png" data-default-file="upload/social/<?php echo $row['icon']; ?>" data-show-remove="false"/>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group form-float col-sm-12">
                                        <div class="font-12">Url *</div>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="url" id="url" placeholder="Url" value="<?php echo $row['url']; ?>" required>
                                        </div>
                                    </div>

                                    <input type="hidden" name="old_image" value="<?php echo $row['icon'];?>">
                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">

                                </div>
                                    
                            </div>

                        </div>

                    </div>

                    </form>

                </div>
            </div>
            
        </div>

    </section>