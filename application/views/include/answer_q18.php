

<div class="row" id="table-q18">
    <div id="q18-table" class="col-lg-12 col-md-12 mb-r">
        <table class="table">

            <!--Table head-->
            <thead class="blue-grey lighten-4">
                <tr>
                    <th>Les  déchets inertes</th>
                    <th>oui</th>
                    <th>non</th>
                    <th>Quantité</th>

                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody class="qte">
                <tr>
                    <th scope="row">1. Terres et matériaux meubles non pollués</th>
                    
                    <td class="hidden">  <input name="survey_id" class="survey" type='text'></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'></td>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td>  
                    <td class="hidden"> <input type = "text" class="q18" name="dechet_id" value="1"/></td>
                    <td> <input type="radio" name="Q18-1" value="oui" ></td>
                    <td><input type="radio" name="Q18-1" value="non"></td>
                    <td><input type = "number" name="qte" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q18-1-2'></td>
                   
                </tr>
                <tr>
                    <th scope="row">2. Graves et matériaux rocheux</th>
                    <td class="hidden">  <input name="survey_id" class="survey" type='text'></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'></td>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td> 
                    <td class="hidden"><input type = "text" class="q18" name="dechet_id" value="2"/></td> 
                    <td> <input type="radio" name="Q18-2" value="oui"></td>
                    <td><input type="radio" name="Q18-2" value="non"></td>
                    <td> <input type = "number" name="qte" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q18-2-2'></td>
                 
                </tr>
                <tr>
                    <th scope="row">3. Béton  sans ferraille ou peu ferraillé</th>
                  
                    <td class="hidden">  <input name="survey_id" class="survey" type='text'></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'></td>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td> 
                    <td class="hidden"> <input type = "text" class="q18" name="dechet_id" value="3"/></td> 
                      <td> <input type="radio" name="Q18-3" value="oui"></td>
                    <td><input type="radio" name="Q18-3" value="non"></td>
                    <td> <input type = "number" name="qte" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q18-3-2'></td>
                   
                </tr>
                <tr>
                    <th scope="row">4. Briques, tuiles et céramiques</th>
                    <td class="hidden">  <input name="survey_id" class="survey" type='text'></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'></td>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td> 
                    <td class="hidden"> <input type = "text" class="q18" name="dechet_id" value="4"/></td>
                    <td> <input type="radio" name="Q18-4" value="oui"></td>
                    <td><input type="radio" name="Q18-4" value="non"></td>
                    <td><input type = "number" name="qte" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q18-4-2'></td>
                  
                </tr>
                <tr>
                    <th scope="row">5. Mélanges de déchets inertes</th>
                    <td class="hidden">  <input name="survey_id" class="survey" type='text'></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'></td>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td> 
                    <td class="hidden"> <input type = "text" class="q18" name="dechet_id" value="5"/></td> 
                    <td> <input type="radio" name="Q18-5" value="oui"></td>
                    <td><input type="radio" name="Q18-5" value="non"></td>
                    <td> <input type = "number" name="qte" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q18-5-2'></td>
                  
                </tr>
                <tr>
                    <th scope="row">6. Autres déchets inertes</th>
                    
                    <td class="hidden">  <input name="survey_id" class="survey" type='text'></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'></td>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td> 
                    <td class="hidden"><input type = "text" class="q18" name="dechet_id" value="6"/></td> 
                    <td> <input type="radio" name="Q18-6"  value="oui"></td>
                    <td><input type="radio" name="Q18-6" value="non"></td>
                    <td>  <input type = "number" name="qte" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q18-6-2'></td>
                   
                </tr>
                <tr>
                    <th scope="row"><input type="text" id='q18-1-3' placeholder="Préciser"></th>
                  
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td> </td>
                    <td></td>
                </tr>
            </tbody>
            <!--Table body-->
        </table>
        <!--Table-->
    </div>  <!--fin table -->
    
    <div>
    </div>
</div>

<div id="error_q18" class=" alert-danger"></div>
<div class="progress ">
                     <div class="progress-bar progress_q18_1"  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                        
                    </div>
</div>
<div class="percent_val" id="percent_q18_1"  align="center" > <p><font size="2"></font></p></div>



<br>
<div id="q18-2-table" class="col-lg-12 col-md-12 mb-r">
<p><strong>Q18-2 Merci d’indiquer les filières utilisées pour la gestion de vos déchets inertes :</strong></p>

<table class="table">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>Exutoires pour les déchets inertes</th>
            <th> %</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody class="percent">
        <tr>
            <th scope="row">Réemploi sur site</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q18-1-4'></td>

        </tr>
        <tr>
            <th scope="row">Réutilisation sur un autre site</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q18-2-4'></td>

        </tr>
        <tr>
            <th scope="row">Aménagement paysager</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q18-3-4'></td>
        </tr>
        <tr>
            <th scope="row">Déchèterie / Centre de regroupement / centre de tri</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q18-4-4'></td>

        </tr>
                <tr>
            <th scope="row">Plateforme de recyclage de déchets inertes</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q18-5-4'></td>

        </tr>
        <tr>
            <th scope="row">Carrière</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q18-6-4'></td>
        </tr>
        <tr>
            <th scope="row">ISDND (recouvrement, aménagements)</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q18-7-4'></td>

        </tr>
                <tr>
            <th scope="row">ISDI</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q18-8-4'></td>

        </tr>
        <tr>
            <th scope="row">Prise en charge par un collecteur</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q18-9-4'></td>
        </tr>
        <tr>
            <th scope="row"><input name="percent" type = "text" id='q18-autres' placeholder="Autres (precisez)"></th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q18-10-4'></td>

        </tr>
        <tr>
            <th scope="row"></th>
            <td> </td>
            <td></td>
        </tr>
    </tbody>
    <!--Table body-->
</table>
</div>

<div id="error_q18_2" class=" alert-danger"></div>
<div class="progress ">
                     <div class="progress-bar progress_q18_2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                        
                    </div>
</div>
<div class="percent_val" id="percent_q18_2" align="center" > <p><font size="2"></font></p></div>


