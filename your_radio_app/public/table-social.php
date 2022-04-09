<?php

	include 'fcm.php';

	$sql_query = "SELECT * FROM tbl_social ORDER BY id DESC";
	$result = mysqli_query($connect, $sql_query);

	if (isset($_GET['id'])) {

        $sql = 'SELECT * FROM tbl_social WHERE id=\''.$_GET['id'].'\'';
        $img_rss = mysqli_query($connect, $sql);
        $img_rss_row = mysqli_fetch_assoc($img_rss);

        if ($img_rss_row['icon'] != "") {
            unlink('upload/social/'.$img_rss_row['icon']);
        }

        Delete('tbl_social','id='.$_GET['id'].'');

        header("location: manage-social.php");
        exit;

    }

 ?>

     <section class="content">

        <ol class="breadcrumb">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li class="active">Manage Social</a></li>
        </ol>

       <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>MANAGE SOCIAL</h2>
                            <div class="header-dropdown m-r--5">
                                <a href="add-social.php"><button type="button" class="btn bg-blue waves-effect">ADD NEW SOCIAL</button></a>
                            </div>
                        </div>

                        <div class="body table-responsive">
										
							<table class='table table-striped table-hover'>
								<thead>
									<tr>
										<th>Name</th>
										<th>Icon</th>
										<th>Url</th>
										<th width="15%">Action</th>
									</tr>
								</thead>

								<?php
									while($data = mysqli_fetch_array($result)) {
								?>
										<tr>
											<td><?php echo $data['name']; ?></td>
											<td><img src="upload/social/<?php echo $data['icon']; ?>" width="28px" height="28px"/></td>
											<td><?php echo $data['url']; ?></td>
											<td>
									            <a href="edit-social.php?id=<?php echo $data['id'];?>">
									                <i class="material-icons">mode_edit</i>
									            </a>
									                        
									            <a href="manage-social.php?id=<?php echo $data['id'];?>" onclick="return confirm('Are you sure want to delete this social?')" >
									                <i class="material-icons">delete</i>
									            </a>
									        </td>
										</tr>
								<?php } ?>
							</table>

						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>