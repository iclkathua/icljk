<?php
	include 'functions.php';
	include 'fcm.php';
?>

	<?php 
		// create object of functions class
		$function = new functions;
		
		// create array variable to store data from database
		$data = array();
		
		if(isset($_GET['keyword'])) {	
			// check value of keyword variable
			$keyword = $function->sanitize($_GET['keyword']);
			$bind_keyword = "%".$keyword."%";
		} else {
			$keyword = "";
			$bind_keyword = $keyword;
		}
			
		if (empty($keyword)) {
			$sql_query = "SELECT m.id, m.radio_name, m.radio_image, m.radio_url, m.featured, c.cid, c.category_name FROM tbl_radio m, tbl_category c
					WHERE m.category_id = c.cid  
					ORDER BY m.id DESC";
		} else {
			$sql_query = "SELECT m.id, m.radio_name, m.radio_image, m.radio_url, m.featured, c.cid, c.category_name FROM tbl_radio m, tbl_category c
					WHERE m.category_id = c.cid AND m.radio_name LIKE ? 
					ORDER BY m.id DESC";
		}
		
		
		$stmt = $connect->stmt_init();
		if ($stmt->prepare($sql_query)) {	
			// Bind your variables to replace the ?s
			if (!empty($keyword)) {
				$stmt->bind_param('s', $bind_keyword);
			}
			// Execute query
			$stmt->execute();
			// store result 
			$stmt->store_result();
			$stmt->bind_result( 
					$data['id'],
					$data['radio_name'],
					$data['radio_image'],
					$data['radio_url'],
					$data['featured'],
					$data['cid'],
					$data['category_name']
					);
			// get total records
			$total_records = $stmt->num_rows;
		}
			
		// check page parameter
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
		} else {
			$page = 1;
		}
						
		// number of data that will be display per page		
		$offset = 10;
						
		//lets calculate the LIMIT for SQL, and save it $from
		if ($page) {
			$from 	= ($page * $offset) - $offset;
		} else {
			//if nothing was given in page request, lets load the first page
			$from = 0;	
		}	
		
		if (empty($keyword)) {
			$sql_query = "SELECT m.id, m.radio_name, m.radio_image, m.radio_url, m.featured, c.cid, c.category_name FROM tbl_radio m, tbl_category c
					WHERE m.category_id = c.cid  
					ORDER BY m.id DESC LIMIT ?, ?";
		} else {
			$sql_query = "SELECT m.id, m.radio_name, m.radio_image, m.radio_url, m.featured, c.cid, c.category_name FROM tbl_radio m, tbl_category c
					WHERE m.category_id = c.cid AND m.radio_name LIKE ? 
					ORDER BY m.id DESC LIMIT ?, ?";
		}
		
		$stmt_paging = $connect->stmt_init();
		if ($stmt_paging ->prepare($sql_query)) {
			// Bind your variables to replace the ?s
			if (empty($keyword)) {
				$stmt_paging ->bind_param('ss', $from, $offset);
			} else {
				$stmt_paging ->bind_param('sss', $bind_keyword, $from, $offset);
			}
			// Execute query
			$stmt_paging ->execute();
			// store result 
			$stmt_paging ->store_result();
			$stmt_paging->bind_result(
				$data['id'],
				$data['radio_name'],
				$data['radio_image'],
				$data['radio_url'],
				$data['featured'],
				$data['cid'],
				$data['category_name']
			);
			// for paging purpose
			$total_records_paging = $total_records; 
		}

	    if (isset($_GET['add'])) {
			$data = array('featured' => '1');	
			$hasil = Update('tbl_radio', $data, "WHERE id = '".$_GET['add']."'");
			if ($hasil > 0) {
		        $succes =<<<EOF
		            <script>
		                alert('Success added to featured radio...');
		                window.location = 'manage-radio.php';
		            </script>
EOF;
		        echo $succes;
				exit;	
			}
	    }

	    if (isset($_GET['remove'])) {
			$data = array('featured' => '0');	
			$hasil = Update('tbl_radio', $data, "WHERE id = '".$_GET['remove']."'");
			if ($hasil > 0) {
		        $succes =<<<EOF
		            <script>
		                alert('Success removed from featured radio...');
		                window.location = 'manage-radio.php';
		            </script>
EOF;
		        echo $succes;
				exit;	
			}
	    }

		// if no data on database show "No Reservation is Available"
		if ($total_records_paging == 0) {
	
	?>

    <section class="content">

        <ol class="breadcrumb">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li class="active">Manage Radio</a></li>
        </ol>

       <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Manage Radio</h2>
                            <div class="header-dropdown m-r--5">
                                <a href="add-radio.php"><button type="button" class="btn bg-blue waves-effect">ADD NEW RADIO</button></a>
                            </div>
                        </div>

                        <div class="body table-responsive">
	                        
	                        <form method="get">
	                        	<div class="col-sm-10">
									<div class="form-group form-float">
										<div class="form-line">
											<input type="text" class="form-control" name="keyword" placeholder="Search by title...">
										</div>
									</div>
								</div>
								<div class="col-sm-2">
					                <button type="submit" name="btnSearch" class="btn bg-blue btn-circle waves-effect waves-circle waves-float"><i class="material-icons">search</i></button>
								</div>
							</form>
										
							<table class='table table-hover table-striped'>
								<thead>
									<tr>
										<th>Radio Name</th>
										<th>Radio Image</th>
										<th>Radio Stream Url</th>
										<th>Category</th>
										<th>Featured</th>
										<th>Action</th>
									</tr>
								</thead>

								
							</table>

							<div class="col-sm-10">Wopps! No data found with the keyword you entered.</div>

						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<?php 
		// otherwise, show data
		} else {
			$row_number = $from + 1;
	?>

    <section class="content">

        <ol class="breadcrumb">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li class="active">Manage Radio</a></li>
        </ol>

       <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Manage Radio</h2>
                            <div class="header-dropdown m-r--5">
                                <a href="add-radio.php"><button type="button" class="btn bg-blue waves-effect">ADD NEW RADIO</button></a>
                            </div>
                            <br>
                        </div>

                        <div class="body table-responsive">
	                        
	                        <form method="get">
	                        	<div class="col-sm-10">
									<div class="form-group form-float">
										<div class="form-line">
											<input type="text" class="form-control" name="keyword" placeholder="Search by title...">
										</div>
									</div>
								</div>
								<div class="col-sm-2">
					                <button type="submit" name="btnSearch" class="btn bg-blue btn-circle waves-effect waves-circle waves-float"><i class="material-icons">search</i></button>
								</div>
							</form>
										
							<table class='table table-hover table-striped'>
								<thead>
									<tr>
										<th>Radio Name</th>
										<th>Radio Image</th>
										<th>Radio Stream Url</th>
										<th>Category</th>
										<th><center>Featured</center></th>
										<th><center>Action</center></th>
									</tr>
								</thead>

								<?php 
									while ($stmt_paging->fetch()) { ?>
										<tr>
											<td><?php echo $data['radio_name'];?></td>
							            	<td><img src="upload/<?php echo $data['radio_image'];?>" height="48px" width="48px"/></td>
											<td>
												<?php
                                                    $value = $data['radio_url'];
                                                    if (strlen($value) > 50)
                                                    $value = substr($value, 0, 47) . '...';
                                                    echo $value;													
												?>
											</td>
											<td><?php echo $data['category_name'];?></td>
											<td align="center">
							            		<?php if ($data['featured'] == '0') { ?>
							            			<a href="manage-radio.php?add=<?php echo $data['id'];?>" onclick="return confirm('Add to featured radio?')" ><i class="material-icons" style="color:grey">lens</i></a>
							            		<?php } else { ?>
							            			<a href="manage-radio.php?remove=<?php echo $data['id'];?>" onclick="return confirm('Remove from featured radio?')" ><i class="material-icons" style="color:#4bae4f">lens</i></a>
							            		<?php } ?>
							            	</td>

											<td><center>

									            <a href="edit-radio.php?id=<?php echo $data['id'];?>">
									                <i class="material-icons">mode_edit</i>
									            </a>
									                        
									            <a href="delete-radio.php?id=<?php echo $data['id'];?>" onclick="return confirm('Are you sure want to delete this radio?')" >
									                <i class="material-icons">delete</i>
									            </a></center>
									        </td>
										</tr>
								<?php 
									}
								?>
							</table>

							<h4><?php $function->doPages($offset, 'manage-radio.php', '', $total_records, $keyword); ?></h4>
							<?php 
								}
							?>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>