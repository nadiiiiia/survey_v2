
<div class="row" id="table-q20">
    <div  class="col-lg-8 col-md-8 mb-r">
        <table class="table">

            <!--Table head-->
            <thead class="blue-grey lighten-4">
                <tr>
                    <th>Les déchets dangereux</th>
                    <th>oui</th>
                    <th>non</th>

                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>
                <tr>
                    <th scope="row">1.Terres et matériaux meubles pollués</th>
                    <td> <input type="radio" name="Q20-1"  value="oui"></td>
                    <td><input type="radio" name="Q20-1"  value="non"></td>
                </tr>
                <tr>
                    <th scope="row">2.Amiante</th>
                    <td> <input type="radio" name="Q20-2"  value="oui"></td>
                    <td><input type="radio" name="Q20-2" value="non"></td>
                </tr>
                <tr>
                    <th scope="row">3.Bois traités <small>(traverses chemin fer, poteaux EDF ou FT, bois recouvert de peintures au plomb, etc.)</small></th>
                    <td> <input type="radio" name="Q20-3"  value="oui"></td>
                    <td><input type="radio" name="Q20-3"  value="non"></td>
                </tr>
                <tr> 
                    <th scope="row">4.Lampes</th>
                    <td> <input type="radio" name="Q20-4" value="oui"></td>
                    <td><input type="radio" name="Q20-4"  value="non"></td>
                </tr>
                <tr>
                    <th scope="row">5.Déchets d'équipements électriques et électroniques (DEEE)</th>
                    <td> <input type="radio" name="Q20-5" value="oui"></td>
                    <td><input type="radio" name="Q20-5" value="non"></td>
                </tr>
                <tr>
                    <th scope="row">6.Equipements techniques (hors DEEE)</th>
                    <td> <input type="radio" name="Q20-6"  value="oui"></td>
                    <td><input type="radio" name="Q20-6"  value="non"></td>
                </tr>


                <tr>
                    <th scope="row">7.Autres déchets dangereux</th>
                    <td> <input type="radio" name="Q20-7"  value="oui"></td>
                    <td><input type="radio" name="Q20-7"  value="non"></td>
                </tr>
                <tr>
                    <th scope="row"><input id="q20-1-2" type="text" placeholder="Préciser"></th>
                    <td></td>
                    <td></td>
                </tr>
              
            </tbody>
            <!--Table body-->
        </table>
        <!--Table-->
    </div>  <!--fin table -->
    <div id="q9-table" class="col-lg-4 col-md-4 mb-r">
        <table class="table">

            <!--Table head-->
            <thead class="blue-grey lighten-4">
                <tr>

                    <th>Quantité(tonnes)</th>


                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody class="qte">
                <tr>
                    <td class="hidden">  <input name="survey_id" class="survey" type='text'></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'></td>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td> 
                    <td class="hidden"><input type = "text" class="q20" name="dechet_id" value="17"/></td> 
                    <td>   <input id='q20-1-3' type = "number" maxlength = "9" name="qte" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden">  <input name="survey_id" class="survey" type='text'></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'></td>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td> 
                    <td class="hidden"> <input type = "text" class="q20" name="dechet_id" value="18"/></td> 
                    <td>   <input id='q20-2-3' type = "number" maxlength = "9" name="qte" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden">  <input name="survey_id" class="survey" type='text'></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'></td>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td> 
                    <td class="hidden"><input type = "text" class="q20" name="dechet_id" value="19"/></td>  
                    <td>   <input id='q20-3-3' type = "number" maxlength = "9" name="qte" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden">  <input name="survey_id" class="survey" type='text'></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'></td>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td> 
                    <td class="hidden"> <input type = "text" class="q20" name="dechet_id" value="20"/></td> 
                    <td>   <input id='q20-4-3' type = "number" maxlength = "9" name="qte" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden">  <input name="survey_id" class="survey" type='text'></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'></td>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td> 
                    <td class="hidden"> <input type = "text" class="q20" name="dechet_id" value="21"/></td> 
                    <td>  <input id='q20-5-3' type = "number" maxlength = "9" name="qte" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden">  <input name="survey_id" class="survey" type='text'></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'></td>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td> 
                    <td class="hidden"> <input type = "text" class="q20" name="dechet_id" value="22"/></td> 
                    <td><input id='q20-6-3' type = "number" maxlength = "9" name="qte" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden">  <input name="survey_id" class="survey" type='text'></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'></td>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td> 
                    <td class="hidden"> <input type = "text" class="q20" name="dechet_id" value="23"/></td> 
                    <td> <input id='q20-7-3' type = "number" maxlength = "9" name="qte" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                 <!--<tr>
                    <td> <input id='q20-8-3' type = "number" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td> <input id='q20-9-3' type = "number" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>-->

            </tbody>
            <!--Table body-->
        </table>
        <!--Table-->
    </div>  <!--fin table -->
    <div>
    </div>
</div>

<div id="error_q20" class=" alert-danger"><p></p></div>
<br>
<p><strong>Q20-2  Merci d’indiquer les filières utilisées pour la gestion de vos déchets dangereux: </strong></p>
<table class="table">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>Exutoires pour les déchets dangereux</th>
            <th> %</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody class="percent">
        <tr>
            <th scope="row">Traitement et réemploi sur site</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q20-1-4'></td>

        </tr>
        <tr>
            <th scope="row">Déchèterie / Centre de regroupement / centre de tri</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q20-2-4'></td>

        </tr>
        <tr>
            <th scope="row">Valorisation (ex : vitrification amiante, traitement des terres polluées, …)</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q20-3-4'></td>
        </tr>
        <tr>
            <th scope="row">Eco-organisme d’une filière REP</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q20-4-4'></td>

        </tr>
        <tr>
            <th scope="row">UIDD</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q20-5-4'></td>

        </tr>
        <tr>
            <th scope="row">Stockage d’amiante en ISDND</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q20-6-4'></td>
        </tr>
        <tr>
            <th scope="row">ISDD</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q20-7-4'></td>

        </tr>
        <tr>
            <th scope="row">Prise en charge par un collecteur</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q20-8-4'></td>

        </tr>
        <tr>
            <th scope="row"><input name="percent" type = "text" id='q20-autres' placeholder="Autres (precisez)"></th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q20-9-4'></td>
        </tr>
        <tr>
            <th scope="row"></th>
            <td> </td>
            <td></td>
        </tr>
    </tbody>
    <!--Table body-->
</table>

<div id="error_q20_2" class=" alert-danger"><p>Le montant total des quantités dépasse 100%</p></div>