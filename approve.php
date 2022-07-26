<?php
require('top.inc.php');
if($_SESSION['ROLE']!='SuperAdmin'){
	header('location:pass.php');
	die();
}


$res=mysqli_query($con,"select * from tblemployees where role=0 ");
?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Approve </h4>
						   
                        </div>
						<form method="POST" action="employee.php">
						<input type="text" name="get_id" placeholder="Enter Token No.To Search" >
						<input type="submit" name="search_by_id" class="btn btn-primary" value="Search">
                        </form>
						<?php
						$subi_sql="";
						if(isset($_POST['search_by_id']))
						{
							$id = $_POST['get_id'];
							
							$query="SELECT * FROM tblemployees WHERE EmpId='$id'  ";
							$query_run=mysqli_query($con,$query);
							
							if(mysqli_num_rows($query_run)>0)
							{
								while($row=mysqli_fetch_array($query_run))
								{
									$subi_sql="WHERE EmpId='$id'";
								}
								$res=mysqli_query($con,"select * from tblemployees $subi_sql order by id");
								

							}
							else
							{
								echo "No Data Found";
							}
						}
						?>
						
						<div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th width="5%">S.No</th>
                                       <th width="15%">Token No.</th>
                                       <th width="40%">Name</th>
									   <th width="20%">Group</th>
									   
                                       <th width="10%">Department</th>
									   <th width="10%" >Gender</th>
									   <th width="10%" >Role</th>
									   <th width="10%" >Password</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
									$i=1;
									while($row=mysqli_fetch_assoc($res)){?>
									<tr>
                                       <td><?php echo $i?></td>
									   <td><?php echo $row['EmpId']?></td>
                              <td><?php echo $row['Name']?></td>
									   <td><?php echo $row['Group']?></td>
									   
									   <td><?php echo $row['Department']?></td>
									   <td><?php echo $row['Gender']?></td>
									   <td><?php echo $row['Role']?></td>
									   <td><?php echo $row['Password']?></td>
									   <td><a href="update.php?EmpId=<?php echo $row['EmpId']?>&Name=<?php echo $row['Name']?>&Group=<?php echo $row['Group']?>
									   &Department=<?php echo $row['Department']?>&Gender=<?php echo $row['Gender']?>" class="btn btn-success btn-flat m-b-30 m-t-30">Approve</a></td>
									<?php 
									$i++;
									} ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
		  </div>
         
