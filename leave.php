<?php
require('top.inc.php');
if($_SESSION['ROLE']!='Admin'){
	header('location:ntr.php?id='.$_SESSION['USER_ID']);
	die();
}
require('ntr.php');
if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['EmpId'])){
	$EmpId=mysqli_real_escape_string($con,$_GET['EmpId']);
	mysqli_query($con,"delete from `leave` where EmpId='$EmpId'");
}
$res=mysqli_query($con,"select * from `leave` where role='Employee' order by id desc");
?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Leave</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th width="5%">S.No</th>
                                       <th width="5%">ID</th>
									            <th width="5%">EmpId</th>
                                       <th width="20%">Name</th>
                                       <th width="20%">Department</th>
									  
									            <th width="20%">Date</th>
									   <th width="30%">Time From</th>
									   <th width="30%">Time To</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
									$i=1;
									while($row=mysqli_fetch_assoc($res)){?>
									<tr>
                              <td><?php echo $i?></td>
									   <td><?php echo $row['id']?></td>
                              <td><?php echo $row['EmpId']?></td>
									   <td><?php echo $row['Name']?></td>
									   <td><?php echo $row['Department']?></td>
									   <td><?php echo $row['Leave_Date']?></td>
									   <td><?php echo $row['Leave_From']?></td>
									   <td><?php echo $row['Leave_To']?></td>
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
