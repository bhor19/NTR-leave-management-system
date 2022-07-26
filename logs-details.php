<?php
require('top.inc.php');
include_once 'log.php';
if($_SESSION['ROLE']=='Employee' && $_SESSION['ROLE']=='Admin'){
	header('location:pass.php?id='.$_SESSION['USER_ID']);
	die();
}

$NAME=$_SESSION['USER_NAME'];
//$res=mysqli_query($con,"select * from `ntr`  ");
$res=mysqli_query($con,"select * from visitor_logs order by id desc ");

?>


<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title"> Logs Record</h4>
                        </div>
						<br>
						<form method="POST" >
						<input type="text" name="get_id" placeholder="Enter Emp Id To Search" >
						<input type="submit" name="search_by_id" class="btn btn-primary" value="Search">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
						
						</form>
						
						<?php
						$subi_sql="";
						if(isset($_POST['search_by_id']))
						{
							$id = $_POST['get_id'];
							$query="SELECT * FROM visitor_logs WHERE EmpId='$id'";
							$query_run=mysqli_query($con,$query);
							
							if(mysqli_num_rows($query_run)>0)
							{
								while($row=mysqli_fetch_array($query_run))
								{
									$subi_sql="WHERE EmpId='$id'";
								}
								
								$res=mysqli_query($con,"select * from visitor_logs $subi_sql order by id desc");

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
                                       <th width="15%">Name</th>
                                        
									   
                                       <th width="15%">IP Address
									   
									   </th>
									   
									   <th width="20%">Agent
									   
									   </th>
									   
									   <th width="20%">Created
									   
									   </th>
									   
									   
									   
                                    </tr>
                                 </thead>
                                 <tbody>
								 
                                    <?php 
									$i=1;
									while($row=mysqli_fetch_assoc($res))
									{
										?>
									<tr>
                                       <td><?php echo $i?></td>
									   <td><?php echo $row['EmpId']?></td>
									   <td><?php echo $row['Name']?></td>
                                       
									   <td><?php echo $row['user_ip_address']?></td>
									   <td><?php echo $row['user_agent']?></td>
									   <td><?php echo $row['created']?></td>
									   
						
                                    </tr>
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