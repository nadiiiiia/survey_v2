
<html lang="en">

    <head>
        <!-- Template styles -->
        <style rel="stylesheet">
            .border td,.border th { 
                border: 1px solid black;  
            }
            table, td, th { 
                /*border: 1px solid black;  */
                padding: 7px;
                text-align: left;
            }
            table {
                border-collapse: collapse;
                font-size: large;
                width: 100%;
            }
            .answer{
                color:blue;
            }
        </style>

    </head>

    <body>
        <table>
            <tbody>
                <tr>  <!--Q1-->
                    <td colspan="7" class="Q1"><strong>Q1. Au cours de l’année 2015, sur vos différents chantiers, votre entreprise a-t-elle généré des déchets?</strong></td>
                </tr>
                <tr> <td class="answer">' . $SimpleAnswers[1] . '</td> 

                </tr> 
                <tr>  <!--Q2-->
                    <td  class="Q2"><strong>Q2. Pour quelles raisons?</strong></td>
                </tr> <tr>  <td  class="answer">' . $SimpleAnswers[2] . '</td> 

                </tr> 
                <tr><!--Q3-->
                    <td class="Q3"><strong>Q3. Nom de l'établissement :</strong></td>
                </tr>
                <tr> <td  class="answer">' .$ContactAnswers['Entreprise']. '</td> 

                </tr>
                <tr ><!--Q4-->
                    <td class="Q4"><strong>Q4. Adresse de l'établissement:</strong></td>
                </tr>
                <tr><td class="answer">' .$SimpleAnswers[4]. '</td> 

                </tr>
                <tr>
                    <td colspan="7" class="Q5"><strong>Q5. Personne à joindre si besoin deprécisions:</strong></td>	
                </tr>
                <tr>
                    <td colspan="7">Nom: &nbsp; <span class="answer">' .$ContactAnswers['Personne_contact']. ' </span> &nbsp; &nbsp; Téléphone:&nbsp; <span class="answer">' . $ContactAnswers['contact_téléphonique'] . '</span> &nbsp; &nbsp; E-mail: <span class="answer">' . $ContactAnswers['new_mail'] . ' </span></td>	
                </tr>
                <tr>
                    <td class="Q6"><strong>Q6. Votre code APE ?</strong></td>
                    <td colspan="3" class="answer">' . $SimpleAnswers[6] . '</td> 

                </tr>
                <tr>
                    <td class="Q7"><strong>Q7. Votre effectif salarié ?</strong></td>
                    <td colspan="3" class="answer">' . $SimpleAnswers[7] . '</td> 

                </tr>
                <tr>
                    <td colspan="2" class="Q8" ><strong>Q8. Le chiffre d’affaires de votre établissement en 2015? </strong></td>
                    <td colspan="2" class="answer">' . $SimpleAnswers[8] . ' K€</td> 

                </tr>
                <tr>
                    <td colspan="4" class="Q9"><strong>Q9. Sur quelles zones géographiques réalisez-vous votre chiffre d’affaires ?</strong></td>


                </tr>
                <tr>
                    <td colspan="4" >
                        <ul>
                            <li>Sur la ville de Paris (75): <span class="answer">' . $Q9[0] . '</span>  % </li>
                            <li>En Petite couronne hors ville de Paris (92, 93, 94): <span class="answer">' . $Q9[1] . '</span> % </li>
                            <li>En Grande couronne (77, 78, 91, 95): <span class="answer">' . $Q9[2] . ' </span> %</li>
                            <li>Hors Île-de-France: <span class="answer">' . $Q9[3] . ' </span> %</li>
                        </ul>
                    </td>    		
                </tr>
                <tr>
                    <td colspan="4" class="Q10"><strong>Q10. Comment votre chiffre d’affaires se répartit-il en fonction des activités suivantes ?</strong></td>

                </tr>
                <tr>
                    <td colspan="4">
                        <ul>
                            <li>Démolition – technicité courante: <span class="answer"> ' . $Q10[0] . ' </span>  %</li>
                            <li>Démolition à l’explosif: <span class="answer">' . $Q10[1] . ' </span> %</li>
                            <li>Découpe du béton: <span class="answer">' . $Q10[2] . ' </span>  %</li>
                            <li>Désamiantage: <span class="answer"> ' . $Q10[3] . ' </span> %</li>
                            <li>Curage: <span class="answer">' . $Q10[4] . ' </span> %</li>
                            <li>Autres activité: <span class="answer">' . $Q10[5] . ' </span> %</li>
                        </ul>
                    </td>    		
                </tr>
                <tr>
                    <td colspan="4" class="Q11"><strong>Q11. Sur quels types de bâtiment votre entreprise œuvre-t-elle ?</strong></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <ul>
                            <li>Logements:  <span class="answer">' . $Q11[0] . '</span>  % </li>
                            <li>Bureaux et administrations : <span class="answer">' . $Q11[1] . '</span> %</li>
                            <li>Commerces: <span class="answer">' . $Q11[2] . '</span>  %</li>
                            <li>Désamiantage: <span class="answer">' . $Q11[3] . ' </span> %</li>
                            <li>Bâtiments industriels: <span class="answer">' . $Q11[4] . '</span>  %</li>
                            <li>Enseignement/éducation: <span class="answer"> ' . $Q11[5] . '</span>  % </li>
                            <li>Complexe sportif:  <span class="answer"> ' . $Q11[6] . '</span>  %</li>
                            <li>Secteur santé:  <span class="answer"> ' . $Q11[7] . ' </span> %</li>
                            <li>Autre: <span class="answer"> ' . $Q11[8] . ' </span>  % (<span class="answer">' . $Q11[9] . '</span>)</li>
                        </ul>   
                    </td>    		
                </tr>	
            </tbody>
        </table>
    </body>

</html>