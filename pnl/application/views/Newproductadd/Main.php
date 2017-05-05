<script src="<?php echo base_url();?>css/angular-ui-bootstrap-modal.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div ng-init='init()'class="content-wrapper" ng-controller="supplier">
    <!-- Content Header (Page header) -->
    <!--<section class="content-header">
      <h1>        
        <strong>Create Report</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">Addnewproduct</li>
      </ol>
      <br/>       
    </section>--> 

 

    <!-- Main content -->
    <section class="content">
	 <div id="page-wrapper">
		<div class="col-md-12 graphs">
			<div class="panel panel-warning bodr">
				<div class="panel-heading">
					<h2>CREATE REPORT</h2>
					<div class="panel-ctrls" ><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
				</div>	
			<!--<div class="xs col-md-12">
			   <h3>Create Report</h3>
		   </div>
			 <div class="clearfix"> </div>   
				
			   <div class="hr-divider m-t m-b-md">
					<h3 class="hr-divider-content hr-divider-heading">LETS GET YOUR START !</h3>
			  </div>
            <div class="clearfix"> </div>-->
			<div class="panel-body no-padding table-responsive" style="display: block;"> 
		    <div class="well1 white">
            <div class="tab-content">
              <div class="tab-pane active" id="domprogress">
                  <!--<div class="progress">
                    <div class="progress-bar progress-bar-warning" style="width: 10%"></div>
                  </div>-->
				  <div class="progress">
					<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:10%">
					  10%
					</div>
				  </div>
                </div>
            </div>
			
        
	
             <form   id="suppliercost" name="suppliercost" ng-submit="suppliercostform()" novalidate >
   <fieldset>
         
	   <div class="form-group" ng-class="{ 'has-error' : suppliercost.reportname.$invalid && !suppliercost.reportname.$pristine }">
        <label class="control-label" >Report Name:</label>
		<input type="text" class="form-control1" placeholder="Report Name" id="reportname" name="reportname" ng-model="reportname" required> 
		
		<!--<input type="text" class="form-control" placeholder="Report Name" id="reportname" name="reportname" ng-model="suppliercost.reportname" required> -->   
		<p ng-show="suppliercost.reportname.$invalid && !suppliercost.reportname.$pristine" class="help-block">Report name is required.</p>
        
      </div>
   
   
      <div class="form-group"  ng-class="{ 'has-error' : suppliercost.store.$invalid && !suppliercost.store.$pristine }">
	  
				<label for="control-label">Select Store:</label>
				
			 <select class="form-control1"  id="store" name="store"  required ng-model="storeSelected"
                ng-options="opt as opt.label for opt in storeoptions">
            </select>
        	
		<p ng-show="suppliercost.store.$invalid && !suppliercost.store.$pristine" class="help-block">Store is required.</p>
	  </div>
   
   
   
   
   
   
      <div class="form-group"  ng-class="{ 'has-error' : suppliercost.productlist.$invalid && !suppliercost.productlist.$pristine }">
	  
				<label for="control-label">Select Product:</label>
				
			 <select class="form-control1"  id="productlist" name="productlist"  required ng-model="productSelected"
                ng-options="opt as opt.label for opt in options">
            </select>
        	
		<p ng-show="suppliercost.productlist.$invalid && !suppliercost.productlist.$pristine" class="help-block">Product is required.</p>
	  </div>
   
      <!--<div class="form-group"  ng-class="{ 'has-error' : suppliercost.quantity.$invalid && !suppliercost.quantity.$pristine }">
        <label for="sel1">Product Supplier Quantity:</label>
		<input type="number" class="form-control" placeholder="Quantity" id="quantity" name="quantity" ng-model="suppliercost.quantity" required >
		    <p ng-show="suppliercost.quantity.$invalid && !suppliercost.quantity.$pristine" class="help-block">Quantity  is required.</p>
        
      </div> -->
      <!--<div class="form-group has-feedback" ng-class="{ 'has-error' : suppliercost.cost.$invalid && !suppliercost.cost.$pristine }">
        <label for="sel1">Product Supplier Cost:</label>
		
		<input type="number" class="form-control" placeholder="Cost" id="cost" name="cost" ng-model="suppliercost.cost" required>    
		<p ng-show="suppliercost.cost.$invalid && !suppliercost.cost.$pristine" class="help-block">Cost is required.</p>
        
      </div>-->
	  
	  <!-- <div class="form-group has-feedback" ng-class="{ 'has-error' : suppliercost.date.$invalid && !suppliercost.date.$pristine }">
        <label for="sel1">Supply Date:</label>
		
		<input type="date" class="form-control" placeholder="date" id="date" name="date" ng-model="suppliercost.date" required>    
		<p ng-show="suppliercost.date.$invalid && !suppliercost.date.$pristine" class="help-block">Date is required.</p>
        
      </div>-->
	  
	  
      <div class="form-group">
        <div class="col-xs-4 pull-right">
		        <button type="submit" class="btn btn-dange flt_right" ng-disabled="suppliercost.$invalid">Set up my Report</button>
       </div>
	    </fieldset>
    </form>	
	
	
	
	<style>
/* 	tr th:first-child,
tr td:first-child, tr th:nth-child(3),
tr td:nth-child(3){
    background-color: #3C8DBC;
} */
tr th:first-child,
tr td:first-child{
    background-color: #3C8DBC;
} 
.table-bordered {
    border: 1px solid #64BB44;
}
	</style>

		
    <!-- /.content -->
	</div>
	    </div>
    
	       </div>
		   </div>
	    </div>
	 </div>
  </section>
   
  <script>
var app = angular.module("myApp", ["ui.bootstrap.modal"]);
app.controller("supplier", function($scope,$http,$timeout,$window) {
  $scope.init=function()
  {
	    
	
				$http({
					method : 'POST',
					url : '<?php echo base_url();?>index.php/suppliercost/get_productlist',
					
							headers: {'Content-Type': 'application/x-www-form-urlencoded'},
							//data :JSON.stringify({datevalue:'2015'})
							 }).success(function(data) {
								$scope.options=data;
						});
	 
				$http({
					method : 'POST',
					url : '<?php echo base_url();?>index.php/suppliercost/get_storelist',
					
							headers: {'Content-Type': 'application/x-www-form-urlencoded'},
							//data :JSON.stringify({datevalue:'2015'})
							 }).success(function(data) {
								$scope.storeoptions=data;
						});
	  
	 
  }
$scope.suppliercostform=function()
{
	
	// alert($scope.productSelected.value);
	 //alert($scope.productSelected.label);
		$http({
        method : 'POST',
        url : '<?php echo base_url();?>index.php/suppliercost/post_suppliercost',
		
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				data :JSON.stringify({reportname:$scope.reportname, pvalue:$scope.productSelected.value,plabel:$scope.productSelected.label, svalue:$scope.storeSelected.value,slabel:$scope.storeSelected.label})
			}).success(function(data) {
				 console.log(data);
				// alert(data);
                if(data>0)
 				 {
					  //$scope.validationESuccess = true;
					   window.location.href="http://sjcreativedesigns.com/pnl/index.php/newproductadd/othercost/"+data;
				 }
				 else
				 {
					 $scope.validationError = true;
				 } 
				
			});
}
 
$scope.delete = function (str) 
       {
            var deleteUser = $window.confirm('Are you absolutely sure you want to delete?');

    if (deleteUser) {
      
	  
	  $http({
        method : 'POST',
        url : '<?php echo base_url();?>index.php/suppliercost/supplierproduct_delete',
		
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				data :JSON.stringify({id:str})
			}).success(function(data) {
				 console.log(data);
				 //alert(data);
                if(data==1)
 				 {
					  //$scope.validationESuccess = true;
					   window.location.href="http://sjcreativedesigns.com/pnl/index.php/Suppliercost";
				 }
				 else
				 {
					 //$scope.validationError = true;
				 } 
				
			});
	  
    }   
			   
       }			
			
  
});
</script>
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