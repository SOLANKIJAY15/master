
<!-- partial:../../partials/_sidebar.php -->
        <!-- $base.'index.php/Welcome/sidebar' -->
		<?php include_once "sidebar.php"; ?>
         
		 <!-- partial -->
	 
		 <div class="main-wrapper mdc-drawer-app-content">
		   <!-- partial:../../partials/_navbar.php -->
		   
		 <?php include_once "navbar.php"; ?>
	


 
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <b>  </b>

     <div class="limiter">
       <div class="container-table100">
         <div class="wrap-table100">
           <div class="table100">
           <div class="col-12 text-right">
              <a href="<?php echo base_url().'index.php/Brand_CI/create';?>" class="mdc-button mdc-button--raised">Add Brand</a>
          </div>
          <br>
             <table>
               <thead>
                 <tr class="table100-head">
                   <th class="column1">ID</th>
                   <th class="column2">Name</th>
                   <th class="column3">Category</th>
                   <th class="column3">Edit</th>
                   <th class="column4">Delete</th>
              
                 </tr>
               </thead>
               <tbody>
            
                   <?php if(!empty($brand)) { foreach($brand as $brand1) { ?>
                            <tr>
                     
                            <td class="column1"><?php echo $brand1['brand_id'];?></td>
                            <td class="column2"><?php echo $brand1['brand_name'];?></td>
                            <td class="column2"><?php echo $brand1['cat_name'];?></td>
                    
                    <!-- <td>
                      <a href="<?php echo base_url().'index.php/Brand_CI/edit/'.$brand1['brand_id '] ?>" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                      <a href="<?php echo base_url().'index.php/Brand_CI/delete'.$brand1['brand_id '] ?>" class="btn btn-danger">Delete</a>
                    </td> -->

                   </tr>   
                   <?php } } else { ?>
                   <tr>
                     <td colspan="5">Record Not Found</td>
                   </tr>
                   <?php } ?>
            
               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   
   </body>
        <!-- partial:../../partials/_footer.php -->
        
        <?php include("footer.php"); ?> 
        <!-- partial -->
</html>