<?php
require('top.inc.php');

$EmpId=$_SESSION['USER_ID'];

$res=mysqli_query($con,"select * from ntr where EmpId='$EmpId'");

?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
					 <div>
					 <center><a href="apply.php"><input style="background-color: #4CAF50;" type="submit" value="Apply For NTR"></a> 
					 <a href="pdf.php"><input type="submit" value="Print" style="background-color: red;"></a></center>
					 </div>
					 
                        <div class="card-body">
                           <h4 class="box-title"> NTR Record</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th width="5%">S.No</th>
                                       <th width="5%">EmpId</th>
                                        
									   
                                       <th width="20%">NTR_Date
									   
									   </th>
									   
									   <th width="20%">NTR_From
									   
									   </th>
									   
									   <th width="20%">NTR_To
									   
									   </th>
									   
									   <th width="30%">Reason</th>
									   
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
									$i=1;
									while($row=mysqli_fetch_assoc($res)){?>
									<tr>
                                       <td><?php echo $i?></td>
									   <td><?php echo $row['EmpId']?></td>
									   
                                       <td><?php echo $row['NTR_Date']?></td>
									   <td><?php echo $row['NTR_From']?></td>
									   <td><?php echo $row['NTR_To']?></td>
									   <td><?php echo $row['Reason']?></td>
									   
						
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
         
<?php
require('footer.inc.php');
?>