<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

    <head>
        <?php include('include/head.php'); ?>
     <link href="<?php echo base_url(); ?>assets/css/compiled.min.css" rel="stylesheet">
   
    <body>
   <!-- Navbar here-->
        <?php include('include/navbar.php'); ?>
        <br>
        <br>
        <div class="container">
          
            <div class="row" >
                <div class="col-md-2"></div>
                <div class="col-md-8 mb-r pb-5">

                    <div class="card">
                        <div class="card-body z-depth-4">

                            <!--Header
                            <div class="form-header cyan-darken-4-color">
                                <h3>
                                   Accueil</h3>
                            </div>-->

                            <!--Body-->
                            <br>
                            <br>
                            <h2 class="text-center"> Merci de votre participation !</h2>
                            <br>
                            <br>

                            <div class="text-center">
                                <a href="" id="xls_end" class="btn cyan-darken-3-color waves-effect waves-light" >Télécharger Excel</a>
                                <a href="<?php echo base_url(); ?>index.php/home/generate_pdf_survey" class="btn cyan-darken-3-color waves-effect waves-light" >Télécharger PDF</a>
                            <a href="<?php echo base_url(); ?>index.php/home/survey/3/1" class="btn cyan-darken-3-color waves-effect waves-light" >Reprendre</a>
                            </div>

                            

                        </div>

                        <!--Footer
                        <div class="modal-footer">
                            <div class="options">
                                <p>Not a member?
                                    <a href="#">Sign Up</a>
                                </p>
                                <p>Forgot
                                    <a href="#">Password?</a>
                                </p>
                            </div>
                        </div>-->
                    </div>

                </div>
                
                <div class="col-md-2"></div>
            </div>
            
        </div>
        <iframe hidden="true" id="ifrm" src="<?php echo base_url(); ?>index.php/home/survey_xls"></iframe>
    
        <!-- SCRIPTS here -->
        <?php include('include/scripts.php'); ?>
           <script type="text/javascript">
            $(document).ready(function () {
              $('#xls').hide();
              $('#pdf').hide();
              
              $('#xls_end').click(function () {
                $('#ifrm').contents().find('#clickExcel').trigger("click");
            });
            });
        </script>

        
    </body>

</html>
