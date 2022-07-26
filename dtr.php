<?php
require('top.inc.php');


$EmpId=$_SESSION['USER_ID'];

$res=mysqli_query($con,"select * from dtr where EmpId='$EmpId'");

?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
					 <div>
					 <center><a href="dtr-apply.php"><input style="background-color: #4CAF50;" type="submit" value="Apply For DTR"></a> 
					 <a href="dtr-pdf.php"><input type="submit" value="Print" style="background-color: red;"></a></center>
					 </div>
					 
                        <div class="card-body">
                           <h4 class="box-title"> DTR Record</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th width="5%">S.No</th>
                                       <th width="15%">Emp Id</th>
                                        <th width="15%">Department</th>
									   
                                       <th width="15%">DTR_Date
									   
									   </th>
									   
									   <th width="20%">DTR_From
									   
									   </th>
									   
									   <th width="20%">DTR_To
									   
									   </th>
									   
									   <th width="30%" style="text-align:left;">Reason</th>
									   
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
									$i=1;
									while($row=mysqli_fetch_assoc($res)){?>
									<tr>
                                       <td><?php echo $i?></td>
									   <td><?php echo $row['EmpId']?></td>
									   <td><?php echo $row['Department']?></td>
                                       <td><?php echo $row['DTR_Date']?></td>
									   <td><?php echo $row['DTR_From']?></td>
									   <td><?php echo $row['DTR_To']?></td>
									   <td style="text-align:left;"><?php echo $row['Reason']?></td>
									   
						
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
         