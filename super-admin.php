<?php
require('top.inc.php');
if($_SESSION['ROLE']!='Admin' && $_SESSION['ROLE']!='Employee' ){
	header('location:profile.php?id='.$_SESSION['USER_ID']);
	die();
}
if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id'])){
	$id=mysqli_real_escape_string($con,$_GET['id']);
	mysqli_query($con,"delete from tblemployees where id='$id'");
}
$res=mysqli_query($con,"select * from tblemployees where role='Admin' order by id desc");
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
                                       <th width="15%">Token No.</th>
                                       <th width="40%">Name</th>
									   <th width="20%">Group</th>
									   
                                       <th width="20%">Department</th>
									   <th width="20%" >Gender</th>
									   
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
         
