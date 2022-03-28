<!-- partial:../../partials/_sidebar.php -->
        <!-- $base.'index.php/Welcome/sidebar' -->
		<?php include_once "sidebar.php"; ?>
         
		 <!-- partial -->
	 
		 <div class="main-wrapper mdc-drawer-app-content">
		   <!-- partial:../../partials/_navbar.php -->
		   
		   <?php include_once "navbar.php"; ?>
	 
	<?php
    $base = $this->config->item("base_url");
  ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
     
     <div class="limiter">
       <div class="container-table100">
         <div class="wrap-table100">
           <div class="table100">
           <div class="col-12 text-right">
              <a href="<?php echo base_url().'index.php/Category_CI/create';?>" class="mdc-button mdc-button--raised">Add Cateegory</a>
          </div>
          <br>
             <table>
               <thead>
                 <tr class="table100-head">
                   <th class="column1">ID</th>
                   <th class="column2">Category Name</th>
                   <th class="column3">Edit</th>
                   <th class="column4">Delete</th>
                  
                   <!-- <th class="column4">Edit</th>
                   <th class="column5">Delete</th>
                    -->
                 </tr>
               </thead>
               <tbody>
                   <!-- <tr>
                     <td class="column1">2017-09-29 01:22</td>
                     <td class="column2">200398</td>
                     <td class="column3">iPhone X 64Gb Grey</td>
                     <td class="column4">$999.00</td>
                     <td class="column5">1</td>
                     <td class="column6">$999.00</td>
                   </tr> -->
   
                   <?php if(!empty($category)) { foreach($category as $category1) { ?>
                            <tr>
                     
                            <td class="column1"><?php echo $category1['cat_id'];?></td>
                            <td class="column2"><?php echo $category1['cat_name'];?></td>
                           
                            
                                           
                   <td>
                     <a href="<?php echo base_url().'index.php/Category_CI/editCategory/'.$category1['cat_id'] ?>" class="btn btn-primary">Edit</a>
                   </td> 
                   <td>
                     <a href="<?php echo base_url().'index.php/Category_CI/deleteCategory/'.$category1['cat_id'] ?>" class="btn btn-danger">Delete</a>
                   </td>
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




<form method="post" name="editCategory" action="<?php echo base_url().'index.php/Category_CI/editCategory'; ?>">
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" class="mdc-text-field__input" id="text-field-hero-input" name="cat_name"  value="<?php echo set_value('cat_name',$cars['cat_name']);?>">
                          <?php echo form_error('cat_name'); ?>  
                          <div class="mdc-notched-outline">
                              <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                  <label for="text-field-hero-input" class="mdc-floating-label">Category Name</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                      </div>