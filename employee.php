<?php
require('top.inc.php');
if($_SESSION['ROLE']=='Employee'){
	header('location:profile.php?id='.$_SESSION['USER_ID']);
	die();
}
if($_SESSION['ROLE']=='SuperAdmin' ){
if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['EmpId'])){
	$EmpId=mysqli_real_escape_string($con,$_GET['EmpId']);
	mysqli_query($con,"delete from tblemployees where EmpId='$EmpId'");
}
}
$Department=$_SESSION['DEPARTMENT'];
if($_SESSION['ROLE']=='Admin')
{
$res=mysqli_query($con,"select * from tblemployees where role='Employee' && Department='$Department' ");
}
else 
{
$res=mysqli_query($con,"select * from tblemployees where role='Employee' ");	
}
?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Employee Details </h4>
						   <?php if($_SESSION['ROLE']=='SuperAdmin'){?>
						   <h4 class="box_title_link"><a href="add_employee.php">Add Employee</a> </h4>
						   <?php }?>
						</div>
						<form method="POST" action="employee.php">
						<input type="text" name="get_id" placeholder="Enter Emp Id To Search" >
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
                                       <th style="text-align:center;" width="5%">S.No</th>
                                       <th style="text-align:center;" width="15%">Emp Id</th>
                                       <th style="text-align:center;"  width="40%">Name</th>
									   <th style="text-align:center;"width="20%">Group</th>
									   
                                       <th style="text-align:center;" width="10%">Department</th>
									   <th style="text-align:center;" width="10%" >Gender</th>
									   <?php if($_SESSION['ROLE']=='SuperAdmin'){?>
									   <th style="text-align:center;" width="10%" >Password</th>
									   <?php } ?>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
									$i=1;
									while($row=mysqli_fetch_assoc($res)){?>
									<tr>
                                       <td style="text-align:center;"><?php echo $i?></td>
									   <td style="text-align:center;"><?php echo $row['EmpId']?></td>
                                       <td style="text-align:center;"><?php echo $row['Name']?></td>
									   <td style="text-align:center;"><?php echo $row['Group']?></td>
									   
									   <td style="text-align:center;"><?php echo $row['Department']?></td>
									   <td style="text-align:center;"><?php echo $row['Gender']?></td>
									  <?php if($_SESSION['ROLE']=='SuperAdmin'){?>
									  <td style="text-align:center;"><?php echo $row['Password']?></td>
									  <td style="text-align:center;"><a href="employee.php?EmpId=<?php echo $row['EmpId']?>&type=delete">Delete</a></td>
									  
									<?php } ?>
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
         
