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
               <a href="<?php echo base_url().'index.php/Product_CI/create';?>" class="mdc-button mdc-button--raised">Add Product</a>
           </div>
           <br>
              <table>
                <thead>
                  <tr class="table100-head">
                    <th class="column1">ID</th>
                    <th class="column1">Product Name</th>
                    <th class="column2">Image</th>
                    <th class="column3">Discription</th>
                    <th class="column4">RAM</th>
                    <th class="column5">Memory</th>
                    <th class="column6">Stock</th>
                    <th class="column7">Price</th>
                    <th class="column8">Edit</th>
                    <th class="column9">Delete</th>
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
    
                    <?php if(!empty($product)) { foreach($product as $product1) { ?>
                             <tr>
                      
                      <td class="column1"><?php echo $product1['pro_details_id'];?></td>
                      <td class="column1"><?php echo $product1['pro_name'];?></td>
                      <td class="column2"><?php echo $product1['image'];?></td>
                      <td class="column3"><?php echo $product1['discription'];?></td>
                      <td class="column4"><?php echo $product1['RAM'];?></td>
                      <td class="column5"><?php echo $product1['memory'];?></td>
                      <td class="column6"><?php echo $product1['stock'];?></td>
                      <td class="column7"><?php echo $product1['price'];?></td>
                      
                    <td>
                      <a href="<?php echo base_url().'index.php/Category_CI/editCategory/'.$product1['pro_details_id'] ?>" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                      <a href="<?php echo base_url().'index.php/Category_CI/deleteCategory/'.$product1['pro_details_id'] ?>" class="btn btn-danger">Delete</a>
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
