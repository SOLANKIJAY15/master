    <!-- partial:../../partials/_sidebar.php -->


    <!-- <script>
  function validateForm() {
  var lsname=document.myForm.discription.value ; 
            //var lsname = document.forms["myForm"]["last_name"];  
            
             if ( lsname == '' ){ 
                 document.getElementById('errorname').innerHTML="Please enter a valid name";  
                 lsname.focus(); 
                 return false; 
             }
           } </script>

    <style>
         .error{
            color: #D8000C;
            background-color: #FFBABA;
         }
      </style> -->


        <!-- $base.'index.php/Welcome/sidebar' -->
        <?php include_once "sidebar.php"; ?>
         
         <!-- partial -->
     
         <div class="main-wrapper mdc-drawer-app-content">
           <!-- partial:../../partials/_navbar.php -->
           
           <?php include_once "navbar.php"; ?>
     
           <!-- partial -->
        <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
       
           <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                  <h5 class="card-title"><b>Product</b></h5>
                  <div class="template-demo">
                    <!-- <div class="mdc-layout-grid__inner">
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field">
                          <input class="mdc-text-field__input" id="text-field-hero-input">
                          <div class="mdc-line-ripple"></div>
                          <label for="text-field-hero-input" class="mdc-floating-label">Name</label>
                        </div>
                      </div> -->
                 <form method="post" onsubmit="return validateForm()" name="createProduct" action="<?php echo base_url().'index.php/Product_CI/create'; ?>">
                      <!-- <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" name="name" value="<?php echo set_value('name');?>" class="mdc-text-field__input" id="text-field-hero-input">
                          <?php echo form_error('name'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Product Name</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div> -->
                     <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                        <b><?php if(isset($response)) echo $response; ?></b>
                        <input type="file" name="file" value="<?php echo set_value('image');?>" class="mdc-text-field__input" id="image">
                       <?php echo form_error('image'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Image</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
     
                   
                <div style="color:red;"><?php echo form_error('file'); ?></div>
                
            

                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" name="discription" value="<?php echo set_value('discription');?>" class="mdc-text-field__input" id="text-field-hero-input">
                        <?php echo form_error('discription'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Product Discription</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" name="stock" value="<?php echo set_value('stock');?>" class="mdc-text-field__input" id="text-field-hero-input">
                          <?php echo form_error('stock'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Stock Quantity</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                    </div>
            
<!--                     
                    <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                      <input type="hidden" name="enhanced-select">
                        <i class="mdc-select__dropdown-icon"></i>
                        <div class="mdc-select__selected-text"></div> 
                            <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                                <ul name="category" class="mdc-list">
                                <li class="mdc-list-item mdc-list-item--selected" data-value="" aria-selected="true">
                                </li>
                                <li class="mdc-list-item" data-value="mobile">
                                    Mobile
                                </li>
                                <li class="mdc-list-item" data-value="watch">
                                    Watch
                                </li>
                                <li class="mdc-list-item" data-value="accessory">
                                     Accessory
                                </li>
                                </ul>
                            </div>
                            <?php echo form_error('category'); ?>
                                <span class="mdc-floating-label">Product Category</span>
                               
                            <div class="mdc-line-ripple"></div>
                          </div> -->

                          <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                      <input type="hidden" name="enhanced-select">
                        <i class="mdc-select__dropdown-icon"></i>
                        <div class="mdc-select__selected-text"></div> 
                            <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                                <ul name="ram"  class="mdc-list">
                                <li class="mdc-list-item mdc-list-item--selected" data-value="" aria-selected="true">
                                </li>
                                <li class="mdc-list-item" data-value="4 GB">
                                    4 GB
                                </li>
                                <li class="mdc-list-item" data-value="6 GB">
                                    6 GB
                                </li>
                                <li class="mdc-list-item" data-value="8 GB">
                                     8 GB
                                </li>
                                </ul>
                            </div>
                                <?php echo form_error('ram'); ?>
                                <span class="mdc-floating-label">Product RAM</span>
                               
                            <div class="mdc-line-ripple"></div>
                          </div>

                          <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                      <input type="hidden" name="enhanced-select">
                        <i class="mdc-select__dropdown-icon"></i>
                        <div class="mdc-select__selected-text"></div> 
                            <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                                <ul name="memory" class="mdc-list">
                                <li class="mdc-list-item mdc-list-item--selected" data-value="" aria-selected="true">
                                </li>
                                <li class="mdc-list-item" data-value="32 GB">
                                    32 GB
                                </li>
                                <li class="mdc-list-item" data-value="64 GB">
                                    64 GB
                                </li>
                                <li class="mdc-list-item" data-value="128 GB">
                                     128 GB
                                </li>
                                </ul>
                            </div>
                              <?php echo form_error('memory'); ?>
                                <span class="mdc-floating-label">Product Memory</span>
                               
                            <div class="mdc-line-ripple"></div>
                          </div>
                 
<!--                   
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" name="price" value="<?php echo set_value('price');?>" class="mdc-text-field__input" id="text-field-hero-input">
                          <?php echo form_error('price'); ?>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Product Price</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div> -->
                      <!-- <div class="mdc-layout-grid">
                            <div class="d-grid gap-2 col-6 mx-auto">
                               <button class="mdc-button mdc-button--raised">
                                   Add Product
                               </button>
                            </div>
                        </div> -->
                        <div class="mb-3">
                            <button class="mdc-button mdc-button--raised" value="save" name="save">Create</button>
                            <a href="<?php echo base_url().'index.php/Product_CI/viewproduct';?>" class="mdc-button mdc-button--raised filled-button--dark mdc-ripple-upgraded">Cancel</a>
                        </div>
                   </form>
                        <!-- <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <a href="<?php echo $base.' '; ?>" class="mdc-button mdc-button--raised w-100">
                            Login
                          </a>
                        </div> -->

                      <!-- <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon">
                          <i class="material-icons mdc-text-field__icon">favorite</i>
                          <input class="mdc-text-field__input" id="text-field-hero-input">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Name</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div> -->
                      <!-- <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-trailing-icon">
                          <i class="material-icons mdc-text-field__icon">visibility</i>
                          <input class="mdc-text-field__input" id="text-field-hero-input">
                          <div class="mdc-notched-outline">
                                 <div class="mdc-notched-outline__leading"></div> 
                                 <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Name</label>
                            </div> 
                             <div class="mdc-notched-outline__trailing"></div> 
                          </div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          </main>
  

             <!-- partial:../../partials/_footer.php -->
             
             <?php include("footer.php"); ?> 
             <!-- partial -->