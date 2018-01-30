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

                        
                            <!--Body-->
                            
                            <h2 class="text-center"> Bienvenu !</h2>
                            <br>
                            <br>

                            <div class="text-center">
                                <a href="<?php echo base_url(); ?>index.php/home/survey/3/1" class="btn cyan-darken-3-color waves-effect waves-light" >Commencer le questionnaire</a>
                            </div>

                        </div>

                    </div>

                </div>
                
                <div class="col-md-2"></div>
            </div>
            
        </div>
    
        <!-- SCRIPTS here -->
        <?php include('include/scripts.php'); ?>
        <script type="text/javascript">
            $(document).ready(function () {
              $('#xls').hide();
              $('#pdf').hide();
            });
        </script>
        
    </body>

</html>
