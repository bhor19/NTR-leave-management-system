<?php
require('top.inc.php');
if($_SESSION['ROLE']!=1){
	header('location:profile.php?id='.$_SESSION['USER_ID']);
	die();
}
if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['EmpId'])){
	$EmpId=mysqli_real_escape_string($con,$_GET['EmpId']);
	mysqli_query($con,"delete from tblemployees where EmpId='$EmpId'");
}
$res=mysqli_query($con,"select * from tblemployees where role=1 order by id desc");
?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Admin Details </h4>
						   <h4 class="box_title_link"><a href="add_admin.php">Add Admin</a> </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th width="5%">S.No</th>
                                       <th width="5%">EmpId</th>
                                       <th width="20%">Name</th>
									   <th width="20%">Group</th>
									   
                                       <th width="20%">Department</th>
									   <th width="20%" >Gender</th>
									   <th width="20%" align="left">Password</th>
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
									   <td><?php echo $row['Password']?></td>
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
         
<?php
require('footer.inc.php');
?>