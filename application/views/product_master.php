<?php

    $base = $this->config->item("base_url");
    
    //  print_r($base);
    //  exit;
    // print_r("$base/assets/css/bootstrap.min.css");
    // exit;
?>
 <?php include_once "sidebar.php"; ?>
<!DOCTYPE html>
<html>
    <head><title></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/m/bootstrap.min.css';?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/m/style.css';?>" />
        
        <script type="text/javascript" src="<?php echo base_url().'assets/js/m/jquery-3.4.1.min.js';?>"></script>
        <script type="text/javascript" src="<?php echo  base_url().'assets/js/m/bootstrap.min.js' ; ?>"></script>
    </head>
<body>
    <div class="header">
        <div class="container">
            <div class="heading"><h1>DATA TABLE CRUD</h1></div>
        </div>
    </div>
        <div class="container">
            <div class="row pt-3">
                <div class="col-md-6"><h4>Models Name</h4> </div>
                <div class="col-md-6 text-right  pt-2"> 
                    <a href="javascript:void(0);" onclick="ShowModal();" class="btn btn-primary"> Add New</a></div>
            </div>

            <div class="col-mod-12 pt-3">
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Color</th>
                        <th>Transmition</th>
                        <th>Price</th>
                        <th>Created Date</th>
                        <th >Edit</th>
                        <th>Delete</th>
                    </tr>
                </table>
            </div>
        </div>

    <div class="modal fade" id="createCarModel" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createCarModel">Alert</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              
                <div class="modal-body">
                <form method="post" id="inserForm" action="" name="inserForm">
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
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="text" class="mdc-text-field__input" id="text-field-hero-input">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Product Name</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="file" class="mdc-text-field__input" id="text-field-hero-input">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Image</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input">
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
                          <input class="mdc-text-field__input" id="text-field-hero-input">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Stock Quantity</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                    </div>
            
                    
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
                          <input class="mdc-text-field__input" id="text-field-hero-input">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Product Price</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid">
                            <div class="d-grid gap-2 col-6 mx-auto">
                               <button class="mdc-button mdc-button--raised">
                                   Add Product
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
                </form>
                </div>
               
            </div>
        </div>
    </div>


    <script type="text/javascript">
        function ShowModal()    
        {
           
            // $("#createCarModel").modal("show");
             $("#createCarModel").modal("show");
            
            //alert("hello");

            $.ajax({
                url: '<?php  echo base_url().'DataController/showCreateForm' ?>',
                type:'POST',
                data:{},
                dataType:'json',
                success :function(response)
                {
                    
                    $("#response").html(response["html"]);
                    
                }
            })
        }

        $("body").on("submit","#inserForm",function(e){
        // alert("body");
        // return false;

            e.preventDefault();
            // alert();

            $.ajax({
                url: '<?php  echo base_url().'DataController/saveModel' ?>',
                type:'POST',
                data:$(this).serializeArray(),
                dataType:'json',
                success :function(response)
                {  
                 // $("#response").html(response["html"]);
                   if(response['status']==0)
                   {
                 
                   } 
                   else
                   {
                    $("#createCarModel").modal("hide");
                    $("#inserForm .modal-body").html(response["message"]);
                    $("#inserForm").modal("show");


                    $(".nameError").html(response['name']).removeClass('invalid-feedback d-block' );
                           $("#name").removeClass('is-invalid');

                           $(".colorError").html(response['color']).removeClass('invalid-feedback d-block' );
                           $("#color").removeClass('is-invalid');

                           $(".priceError").html(response['price']).removeClass('invalid-feedback d-block' );
                           $("#price").removeClass('is-invalid');

                   }

                }
            });
        });

       
    </script>

</body>
</html>

             <!-- partial -->

