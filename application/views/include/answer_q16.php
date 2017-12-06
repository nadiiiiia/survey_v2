
 <table class="table">

            <!--Table head-->
            <thead class="blue-grey lighten-4">
                <tr>
                    <th>Vos déchets produits en 2015</th>
                    <th>Tonnes</th>
                    <th>Le flux a-t-il fait l’objet d’un tri séparé ?</th>
                    

                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>
                <tr>
                    <th scope="row">Déchets inertes</th>
                     <td><input name="percent" type = "number" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q16-1'></td>
                    <td><input type="radio" name="Q16-1" id='q16-1-2' value="systematiquement "><label for='systématiquement '>&nbsp; Oui, systématiquement &nbsp</label>
                    <input type="radio" name="Q16-1" id='q16-1-3' value="partiellement"><label for='systématiquement '>&nbsp; Oui, partiellement &nbsp </label>
                    <input type="radio" name="Q16-1" id='q16-1-4' value="non"><label for='non '>&nbsp; Non </label></td>
                </tr>
                    <tr>
                    <th scope="row">Déchets non dangereux non inertes</th>
                     <td><input name="percent" type = "number" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q16-2'></td>
                    <td><input type="radio" name="Q16-2" id='q16-2-2' value="systematiquement "><label for='systématiquement '>&nbsp; Oui, systématiquement &nbsp</label>
                    <input type="radio" name="Q16-2" id='q16-2-3' value="partiellement"><label for='systématiquement '>&nbsp; Oui, partiellement &nbsp</label>
                    <input type="radio" name="Q16-2" id='q16-2-4'  value="non"><label for='non '>&nbsp; Non </label></td>
                </tr>
                    <tr>
                    <th scope="row">Déchets dangereux</th>
                     <td><input name="percent" type = "number" maxlength = "9" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q16-3'></td>
                    <td><input type="radio" name="Q16-3" id='q16-3-2' value="systematiquement "><label for='systématiquement '>&nbsp; Oui, systématiquement &nbsp</label>
                    <input type="radio" name="Q16-3" id='q16-3-3' value="partiellement"><label for='systématiquement '>&nbsp; Oui, partiellement &nbsp</label>
                    <input type="radio" name="Q16-3" id='q16-3-4'  value="non"><label for='non '>&nbsp; Non </label>
                    </td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td> </td>
                    <td></td>
                </tr>
            </tbody>
            <!--Table body-->
        </table>