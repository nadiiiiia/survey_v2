
<div class="row" style="margin-right: 0px ; margin-left: 0px;">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="text-left">

            <!--Section: Dynamic content wrapper-->
            <section  class="mb-5">

                <form id="form">
                <h2><span class="badge blue"></span> </h2>   <!--Titre de la Section-->
                <hr/>
                <div  class=" card card-body">
                    <span id="counter"></span>
<div id="question">
                    <div class="question_body" > 

                    </div>
                    <p class="note" ></p>

                    <div id="answer" >
                    <?php 
                    for($i=1;$i<33;$i++){
                    if($id == $i){ include('answer_q'.$i.'.php'); }
                    } ?>
                    </div>
                </div>
                </div>
                <br> 

                <!-- start Survey btn-->

                <div class="row" >
                    <div class="col-md-12 col-sm-12" id= "survey_btn">
                        <a href="" id="next_btn" class="btn cyan-darken-3-color btn-sm waves-effect waves-light pull-right" style="background-color: #00acc1; -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);">suivant</a>

                        <a href="" id="back_btn" class="btn cyan-darken-3-color btn-sm waves-effect waves-light pull-left"  >précédent</a>
                   
                    </div>
                </div>
                <!-- End Survey btn-->
                </form>

            </section>

            <!--Section: Dynamic content wrapper-->

        </div>
    </div>
    <div class="col-md-1"></div>
</div>


