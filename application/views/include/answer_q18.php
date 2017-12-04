

<div class="row" id="table-q18">
    <div id="q18-table" class="col-lg-8 col-md-8 mb-r">
        <table class="table">

            <!--Table head-->
            <thead class="blue-grey lighten-4">
                <tr>
                    <th>Les  déchets inertes</th>
                    <th>oui</th>
                    <th>non</th>

                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>
                <tr>
                    <th scope="row">1. Terres et matériaux meubles non pollués</th>
                    <td> <input type="radio" name="Q18-1" id='q18-1-1'></td>
                    <td><input type="radio" name="Q18-1" id='q18-1-2'></td>
                </tr>
                <tr>
                    <th scope="row">2. Graves et matériaux rocheux</th>
                    <td> <input type="radio" name="Q18-2" id='q18-2-1'></td>
                    <td><input type="radio" name="Q18-2" id='q18-2-2'></td>
                </tr>
                <tr>
                    <th scope="row">3. Béton  sans ferraille ou peu ferraillé</th>
                    <td> <input type="radio" name="Q18-3" id='q18-3-1'></td>
                    <td><input type="radio" name="Q18-3" id='q18-3-2'></td>
                </tr>
                <tr>
                    <th scope="row">4. Briques, tuiles et céramiques</th>
                    <td> <input type="radio" name="Q18-4" id='q18-4-1'></td>
                    <td><input type="radio" name="Q18-4" id='q18-4-2'></td>
                </tr>
                <tr>
                    <th scope="row">5. Mélanges de déchets inertes</th>
                    <td> <input type="radio" name="Q18-5" id='18-5-1'></td>
                    <td><input type="radio" name="Q18-5" id='q18-5-2'></td>
                </tr>
                <tr>
                    <th scope="row">6. Autres déchets inertes</th>
                    <td> <input type="radio" name="Q18-6" id='q18-6-1' value="oui"></td>
                    <td><input type="radio" name="Q18-6" id='q18-6-2' value="non"></td>
                </tr>
                <tr>
                    <th scope="row"><input type="text" name="Q18-7-0" id='q18-7-1' placeholder="Préciser"></th>
                    <td></td>
                    <td></td>
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
    <div id="q9-table" class="col-lg-4 col-md-4 mb-r">
        <table class="table">

            <!--Table head-->
            <thead class="blue-grey lighten-4">
                <tr>

                    <th>Quantité</th>
                    <th>Unité</th>

                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody class="qte">
                <tr>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'  ></td>
                    <td class="hidden"> <input type = "text" class="q18" name="dechet_id" value="1"/></td> 
                    <td>    <input type = "number" name="qte" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q18-1-3'></td>
                    <td><select id='q18-1-4' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>

                </tr>
                <tr>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'  ></td>
                    <td class="hidden"><input type = "text" class="q18" name="dechet_id" value="2"/></td> 
                    <td> <input type = "number" name="qte" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q18-2-3'></td>
                    <td><select id='q18-2-4' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                </tr>
                <tr>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'  ></td>
                    <td class="hidden"> <input type = "text" class="q18" name="dechet_id" value="3"/></td> 
                    <td> <input type = "number" name="qte" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q18-3-3'></td>
                    <td><select id='q18-3-4' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                </tr>
                <tr>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'  ></td>
                    <td class="hidden"> <input type = "text" class="q18" name="dechet_id" value="4"/></td> 
                    <td><input type = "number" name="qte" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q18-4-3'></td>
                    <td><select id='q18-4-4' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                </tr>
                <tr>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'></td>
                    <td class="hidden"> <input type = "text" class="q18" name="dechet_id" value="5"/></td> 
                    <td> <input type = "number" name="qte" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q18-5-3'></td>
                    <td><select id='q18-5-4' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                </tr>
                <tr>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'  ></td>
                    <td class="hidden"><input type = "text" class="q18" name="dechet_id" value="6"/></td> 
                    <td>  <input type = "number" name="qte" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q18-6-3'></td>
                    <td><select id='q18-6-4' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                </tr>
                <tr class="hidden">
                    <td> <input type = "number" name="qte" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q18-7-3'></td>
                    <td><select id='q18-7-4' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                </tr >
                <tr>
                    <td> <input type = "number" name="qte" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q18-8-3'></td>
                    <td><select id='q18-8-4' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                </tr>
            </tbody>
            <!--Table body-->
        </table>
        <!--Table-->
    </div>  <!--fin table -->
    <div>
    </div>
</div>

<div id="error_q18" class=" alert-danger"><p>Le montant total des quantités dépasse le Total déchets de votre réponse dans Q4</p></div>

<br>
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
    <tbody>
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

<div id="error_q18_2" class=" alert-danger"><p>Le montant total des quantités dépasse 100%</p></div>
