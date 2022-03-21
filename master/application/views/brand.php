    <!-- partial:../../partials/_sidebar.php -->
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
                  <h5 class="card-title"><b>Brand</b></h5>
                  <div class="template-demo">
                    <!-- <div class="mdc-layout-grid__inner">
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field">
                          <input class="mdc-text-field__input" id="text-field-hero-input">
                          <div class="mdc-line-ripple"></div>
                          <label for="text-field-hero-input" class="mdc-floating-label">Name</label>
                        </div>
                      </div> -->
                     
                      <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                      <input type="hidden" name="enhanced-select">
                        <i class="mdc-select__dropdown-icon"></i>
                        <div class="mdc-select__selected-text"></div> 
                            <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                                <ul class="mdc-list">
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
                                <span class="mdc-floating-label">Product Category</span>
                               
                            <div class="mdc-line-ripple"></div>
                          </div>

                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" class="mdc-text-field__input" id="text-field-hero-input">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Brand Name</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
                 
                  
                      <div class="mdc-layout-grid">
                            <div class="d-grid gap-2 col-6 mx-auto">
                               <button class="mdc-button mdc-button--raised">
                                   Add Brand
                                </button>
                            </div>
                        </div>
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