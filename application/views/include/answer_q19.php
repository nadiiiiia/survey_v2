
<div class="row" id="table-q19">
    <div id="q10-table" class="col-lg-8 col-md-8 mb-r">
        <table class="table">

            <!--Table head-->
            <thead class="blue-grey lighten-4">
                <tr>
                    <th>Les déchets non inertes non dangereux</th>
                    <th>oui</th>
                    <th>non</th>

                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>
                <tr>
                    <th scope="row">1.Mélanges déchets non dangereux non inertes (DIB)</th>
                    <td> <input type="radio" name="Q19-1" id='q19-1-1' value="oui"></td>
                    <td><input type="radio" name="Q19-1" id='q19-1-2' value="non"></td>
                </tr>
                <tr>
                    <th scope="row">2.Métaux</th>
                    <td> <input type="radio" name="Q19-2" id='q19-2-1' value="oui"></td>
                    <td><input type="radio" name="Q19-2" id='q19-2-2' value="non"></td>
                </tr>
                <tr>
                    <th scope="row">3.Plâtre - plaques et carreaux</th>
                    <td> <input type="radio" name="Q19-3" id='q19-3-1' value="oui"></td>
                    <td><input type="radio" name="Q19-3" id='q19-3-2' value="non"></td>
                </tr>
                <tr>
                    <th scope="row">4.Plâtre - enduits sur supports inertes</th>
                    <td> <input type="radio" name="Q19-4" id='q19-4-1' value="oui"></td>
                    <td><input type="radio" name="Q19-4" id='q19-4-2' value="non"></td>
                </tr>
                <tr>
                    <th scope="row">5.Plastiques</th>
                    <td> <input type="radio" name="Q19-5" id='q19-5-1' value="oui"></td>
                    <td><input type="radio" name="Q19-5" id='q19-5-2' value="non"></td>
                </tr>
                <tr>
                    <th scope="row">6.Vitrages</th>
                    <td> <input type="radio" name="Q19-6" id='q19-6-1' value="oui"></td>
                    <td><input type="radio" name="Q19-6" id='q19-6-2' value="non"></td>
                </tr>

                <tr>
                    <th scope="row">7.Bois brut ou faiblement adjuventés</th>
                    <td> <input type="radio" name="Q19-7" id='q19-7-1' value="oui"></td>
                    <td><input type="radio" name="Q19-7" id='q19-7-2' value="non"></td>
                </tr>
                <tr>
                    <th scope="row">8.Déchets végétaux</th>
                    <td> <input type="radio" name="Q19-8" id='q19-8-1' value="oui"></td>
                    <td><input type="radio" name="Q19-8" id='q19-8-2' value="non"></td>
                </tr>
                <tr>
                    <th scope="row">9. Déchets résiduels issus de l'usage et occupation des bâtiments</th>
                    <td> <input type="radio" name="Q19-9" id='q19-9-1' value="oui"></td>
                    <td><input type="radio" name="Q19-9" id='q19-9-2' value="non"></td>
                </tr>
                <tr>
                    <th scope="row">10.Autres déchets non dangereux</th>
                    <td> <input type="radio" name="Q19-10" id='q19-10-1' value="oui"></td>
                    <td><input type="radio" name="Q19-10" id='q19-10-2' value="non"></td>
                </tr>
                <tr>
                    <th scope="row"><input name="Q19-11" id='q19-10-11' type="text" placeholder="Préciser"></th>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row"><input name="Q19-12" type="text" id='q19-10-12' placeholder="Préciser"></th>
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

                    <th>Quantité(tonnes)</th>


                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody class="qte">
                <tr>

                    <td class="hidden"> <input type = "text" class="q19" name="dechet_id" value="7"/></td> 
                    <td>  <input id='q19-1-3'  name="qte" type = "number" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden"> <input type = "text" class="q19" name="dechet_id" value="8"/></td> 
                    <td>  <input id='q19-2-3'  name="qte" type = "number" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden"><input type = "text" class="q19" name="dechet_id" value="9"/></td>  
                    <td>  <input id='q19-3-3'  name="qte" type = "number" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden"><input type = "text" class="q19" name="dechet_id" value="10"/> </td> 
                    <td>  <input id='q19-4-3'  name="qte" type = "number" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden"> <input type = "text" class="q19" name="dechet_id" value="11"/></td> 
                    <td> <input id='q19-5-3' name="qte" type = "number" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                     <td class="hidden"><input type = "text" class="q19" name="dechet_id" value="12"/></td>  
                    <td> <input id='q19-6-3'  name="qte" type = "number" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden"> <input type = "text" class="q19" name="dechet_id" value="13"/></td> 
                    <td> <input id='q19-7-3'  name="qte" type = "number" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden"> <input type = "text" class="q19" name="dechet_id" value="14"/></td> 
                    <td>  <input id='q19-8-3' type = "number" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden"> <input type = "text" class="q19" name="dechet_id" value="15"/></td> 
                    <td>   <input id='q19-9-3'  name="qte" type = "number" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden"><input type = "text" class="q19" name="dechet_id" value="16"/> </td> 
                    <td> <input id='q19-10-3'  name="qte" type = "number" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td> <input id='q19-11-3' type = "number" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td> <input id='q19-12-3' type = "number" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
            </tbody>
            <!--Table body-->
        </table>
        <!--Table-->
    </div>  <!--fin table -->
    <div>
    </div>
</div>

<div id="error_q19" class=" alert-danger"><p></p></div>

<br>
<p><strong>Q19-2  Merci d’indiquer les filières utilisées pour la gestion de vos déchets non dangereux non inertes :</strong></p>
<table class="table">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>Exutoires pour les déchets non dangereux</th>
            <th> %</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        <tr>
            <th scope="row">Réemploi sur site</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q19-1-4'></td>

        </tr>
        <tr>
            <th scope="row">Réutilisation sur un autre site</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q19-2-4'></td>

        </tr>
        <tr>
            <th scope="row">Déchèterie / Centre de regroupement / centre de tri</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q19-3-4'></td>
        </tr>
        <tr>
            <th scope="row">Centre de valorisation matière (ex : recyclage du plâtre, broyage bois, …)</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q19-4-4'></td>

        </tr>
                <tr>
            <th scope="row">Eco-organisme d’une filière REP</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q19-5-4'></td>

        </tr>
        <tr>
            <th scope="row">Centre de valorization énergétique</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q19-6-4'></td>
        </tr>
        <tr>
            <th scope="row">ISDND </th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q19-7-4'></td>

        </tr>
                <tr>
            <th scope="row">Prise en charge par un collecteur</th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q19-8-4'></td>

        </tr>
        <tr>
            <th scope="row"><input name="percent" type = "text" id='q19-autres' placeholder="Autres (precisez)"></th>
            <td><input name="percent" type = "number" maxlength = "3" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q19-9-4'></td>
        </tr>
        <tr>
            <th scope="row"></th>
            <td> </td>
            <td></td>
        </tr>
    </tbody>
    <!--Table body-->
</table>

<div id="error_q19_2" class=" alert-danger"><p>Le montant total des quantités dépasse 100%</p></div>