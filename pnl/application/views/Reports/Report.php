<script src="<?php echo base_url();?>css/angular-ui-bootstrap-modal.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div ng-init='init()'class="content-wrapper" ng-controller="reports">
    <!-- Content Header (Page header) -->
     
  
    <!-- Main content -->
     <!-- Main content -->
    <section class="content">
							
							<div id="page-wrapper">
								<div class="col-md-12 graphs">

									<div class="xs col-md-12">
								      <h3>View Report</h3>
							        </div>
									
									<div class="clearfix"> </div>
									
								    
							 <div class="panel panel-warning bodr">
									<div class="panel-heading">
										<h2><?php echo $resultview[0]['report_name']; ?></h2>
										<div class="panel-ctrls" ><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
									</div>
									<div class="panel-body no-padding table-responsive" style="display: block;">
								
							    
							
							<table class="table table-striped">
       
       
										<thead>
											<tr class="tblma">
											  <th class="col-sm-3 orng">Total Sales</th>
											  <th class=" col-sm-3 orng">Gross Revenue</th>
											  <th class=" col-sm-3 orng">Net Sales</th>
											  <th class="col-sm-3 orng">Net</th>
									   </thead>
											<tbody>
											<tr>
											  <td class="col-sm-3 greene"><?php echo $resultview[0]['order']; ?></td>
											  <td class=" col-sm-3 greene">$<?php echo $resultview[0]['total_price']; ?></td>
											  <td class=" col-sm-3 greene">$<?php echo $resultview[0]['netsales']; ?></td>
											  <td class="col-sm-3 greene">$<?php echo $resultview[0]['net']; ?></td>
											</tr>
											  
										</tbody>
									  </table>


											
											<table class="table table-striped">
									   
									
											<tbody>
											<tr>
											  <td class="col-sm-6 text-r ">Product  &nbsp; &nbsp; : </td>
											  <td class=" col-sm-6 text-l orng"><?php echo $resultview[0]['product_name']; ?></td>
											</tr>
												
											<tr>
											  <td class="col-sm-6 text-r ">Total Unit Price  &nbsp; &nbsp; : </td>
											  <td class=" col-sm-6 text-l orng">$<?php 
											   echo $total_unit_price=$resultview[0]['total_price']/$resultview[0]['order'];
											   ?></td>
											</tr>
												
											<tr>
											  <td class="col-sm-6 text-r ">Total Unit cost  &nbsp; &nbsp; : </td>
											  <td class=" col-sm-6 text-l orng">$<?php 
									$total1=$resultview[0]['dist_cost']+ $resultview[0]['dist_shippingcost']+$resultview[0]['packaging_cost']+$resultview[0]['shipping_cost']+$resultview[0]['gate_charge_fix'] + $resultview[0]['fb_conversion']* $resultview[0]['order'];
											   
										echo $total1=$total1+($total1*$resultview[0]['gate_charge_percent'])/100;
										$total_unit_cost=$total1;									
											   ?> </td>
											</tr>
												
											 <tr>
											  <td class="col-sm-6 text-r ">Total Gateway Charges &nbsp; &nbsp; : </td>
											  <td class=" col-sm-6 text-l orng">$<?php echo $resultview[0]['gate_charge_fix'] + ($total1*$resultview[0]['gate_charge_percent'])/100; ?></td>
											</tr>
												
											<tr>
											  <td class="col-sm-6 text-r ">Total Cost Per Conversion  &nbsp; &nbsp; : </td>
											  <td class=" col-sm-6 text-l orng">$<?php echo $resultview[0]['fb_conversion']; ?></td>
											</tr>
												
											<tr>
											  <td class="col-sm-6 text-r ">Current Margins(Dollars)  &nbsp; &nbsp; : </td>
											  <td class=" col-sm-6 text-l orng">$<?php echo $current_margins=$total_unit_price-$total_unit_cost; ?></td>
											</tr>
												  
											 <tr>
											  <td class="col-sm-6 text-r ">Current Margins(%) &nbsp; &nbsp; : </td>
											  <td class=" col-sm-6 text-l orng"><?php echo  $current_margins_percent= ($current_margins /$total_unit_price )*100; ?>%</td>
											</tr>
												
											<tr>
											  <td class="col-sm-6 text-r ">Markup(%)  &nbsp; &nbsp; : </td>
											  <td class=" col-sm-6 text-lorng"> <?php    $markup=($current_margins /$total_unit_cost )*100;
														echo	number_format($markup, 2, '.', '');
											   ?>%</td>
											</tr>
											   
												
												
											 <tr>
											  <td class="col-sm-6 text-r ">Based on your desire margin of <?php echo $resultview[0]['desire_margin'] ?>(%) ,you need to  &nbsp; &nbsp; : </td>
											  <td class=" col-sm-6 text-l orng"><?php 
											   if($current_margins_percent > $resultview[0]['desire_margin'])
											   {
												   echo "<b style='color:green'>Congratulations!You have an Optimized Campaign already based on your desire Margins</b>";
											   }
											   else
												   
												   {
													   
													    $require_margins=($resultview[0]['desire_margin'] *$total_unit_price)/100;
													   
													    $current_margins;
													   echo "<b style='color:red'>Increase Price to $".($require_margins - $current_margins).'</b>';
													  // echo "Reduced Conversion Cost by $0.00";
												   }
												   ?></td>
											</tr>   
												   
												
												
												
											  
										</tbody>
									  </table>	
							
					
		
    </section>
                              </div>
                           </div>
   <!-- /.content -->
	                           </div>
							</div>
   </section>
  </div>

  <style>
.row-centered {
    text-align:center;
}
.col-centered {
    display:inline-block;
    float:none;
    /* reset the text-align */
   /* text-align:left;*/
    /* inline-block space fix */
   /* margin-right:-4px;*/
       margin-right: 16%;
}
.item {
    width:100%;
    height:100%;
	/*border:1px solid #cecece;*/
    padding:16px 8px;
	/*background:#ededed;
	background:-webkit-gradient(linear, left top, left bottom,color-stop(0%, #f4f4f4), color-stop(100%, #ededed));
	background:-moz-linear-gradient(top, #f4f4f4 0%, #ededed 100%);
	background:-ms-linear-gradient(top, #f4f4f4 0%, #ededed 100%);*/
}

/* content styles */
.item {
	display:table;
}


  </style>