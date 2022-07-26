<?php
require('top.inc.php');
 
$EmpId=$_SESSION['USER_ID'];
$res=mysqli_query($con,"select * from tblemployees where role='Employee' && EmpId='$EmpId'");
?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Employee Details </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th width="5%">S.No</th>
                                       <th width="15%">Emp Id</th>
                                       <th width="40%">Name</th>
									   <th width="20%">Group</th>
                                <th width="20%">Department</th>
									   <th width="20%">Gender</th>
									  
                                     
									   
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
									   <!-- <td><a href="#"><Strong><u>View Details</u></Strong></a></td>
                           </tr> -->
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
