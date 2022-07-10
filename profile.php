<?php
require('top.inc.php');
 
$Name=$_SESSION['USER_NAME'];
$res=mysqli_query($con,"select * from tblemployees where role=2 && Name='$Name'");
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
                                       <th width="5%">EmpId</th>
                                       <th width="20%">Name</th>
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
<?php
require('footer.inc.php');
?>