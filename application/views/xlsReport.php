<?php echo defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php //echo include('include/head.php'); ?>
        <link href="<?php echo base_url(); ?>assets/css/compiled.min.css" rel="stylesheet">
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
        <?php echo include('include/conditions.php'); ?>
        <button id="clickExcel" value="link">Export Excel</button>
        <div id="export_excel">
            <table id="report_xls">
                <tbody
                    <tr>
                        <td colspan="7">
                         <table >

                                <!--Table head-->
                                <thead class="blue-grey lighten-4">
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>


                                    </tr>
                                </thead>
                                <!--Table head-->

                                <!--Table body-->
                                <tbody>
                            

                                </tbody>

                                <!--Table body-->
                         </table>        </td>
                    </tr>
                    <tr colspan="7">  <!--Q1-->
                        <td colspan="7" class="Q1"><strong>Q1. Au cours de l’année 2015, sur vos différents chantiers, votre entreprise a-t-elle généré des déchets?</strong></td>
                    </tr>
                    <tr> <td class="answer"> <?php echo $SimpleAnswers[1]; ?></td> 

                    </tr> 
                    <?php echo $ans_2; ?>
                    <tr><!--Q3-->
                        <td class="Q3"><strong>Q3. Nom de l'établissement :</strong></td>
                    </tr>
                    <tr> <td  class="answer"><?php echo $ContactAnswers['Entreprise']; ?></td> 

                    </tr>
                    <tr ><!--Q4-->
                        <td class="Q4"><strong>Q4. Adresse de l'établissement:</strong></td>
                    </tr>
                    <tr><td class="answer"><?php echo $SimpleAnswers[4]; ?></td> 

                    </tr>
                    <tr>
                        <td colspan="7" class="Q5"><strong>Q5. Personne à joindre si besoin deprécisions:</strong></td>	
                    </tr>
                    <tr>
                        <td colspan="7">Nom: &nbsp; <span class="answer"><?php echo $ContactAnswers['Personne_contact']; ?> </span> </td>	
                    </tr>
                    <tr>
                        <td colspan="7">Téléphone:&nbsp; <span class="answer"><?php echo $ContactAnswers['contact_téléphonique']; ?></span> </td>	
                    </tr>
                    <tr>
                        <td colspan="7">E-mail: <span class="answer"><?php echo $ContactAnswers['new_mail']; ?> </span></td>	
                    </tr>

                    <tr>
                        <td class="Q6"><strong>Q6. Votre code APE ?</strong></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="answer"><?php echo $SimpleAnswers[6]; ?></td> 

                    </tr>
                    <tr>
                        <td class="Q7" colspan="2" ><strong>Q7. Votre effectif salarié ?</strong></td>
                    </tr> 
                    <tr>
                        <td  class="answer"><?php echo $SimpleAnswers[7]; ?></td> 
                    </tr>
                    <tr>
                        <td colspan="2" class="Q8" ><strong>Q8. Le chiffre d’affaires de votre établissement en 2015? </strong></td>
                    </tr>   
                    <tr>
                        <td colspan="2" class="answer"><?php echo $SimpleAnswers[8]; ?> K€</td> 
                    </tr>
                    <tr>
                        <td colspan="4" class="Q9"><strong>Q9. Sur quelles zones géographiques réalisez-vous votre chiffre d’affaires ?</strong></td>
                    </tr>
                    <tr>
                        <td colspan="4" >
                            <ul>
                                <li>Sur la ville de Paris (75): <span class="answer"><?php echo $Q9[0]; ?></span>  % </li>
                                <li>En Petite couronne hors ville de Paris (92, 93, 94): <span class="answer"><?php echo $Q9[1]; ?></span> % </li>
                                <li>En Grande couronne (77, 78, 91, 95): <span class="answer"><?php echo $Q9[2]; ?> </span> %</li>
                                <li>Hors Île-de-France: <span class="answer"><?php echo $Q9[3]; ?> </span> %</li>
                            </ul>
                        </td>    		
                    </tr>
                    <tr>
                        <td colspan="4" class="Q10"><strong>Q10. Comment votre chiffre d’affaires se répartit-il en fonction des activités suivantes ?</strong></td>

                    </tr>
                    <tr>
                        <td colspan="4">
                            <ul>
                                <li>Démolition – technicité courante: <span class="answer"> <?php echo $Q10[0]; ?> </span>  %</li>
                                <li>Démolition à l’explosif: <span class="answer"><?php echo $Q10[1]; ?> </span> %</li>
                                <li>Découpe du béton: <span class="answer"><?php echo $Q10[2]; ?> </span>  %</li>
                                <li>Désamiantage: <span class="answer"> <?php echo $Q10[3]; ?> </span> %</li>
                                <li>Curage: <span class="answer"><?php echo $Q10[4]; ?> </span> %</li>
                                <li>Autres activité: <span class="answer"><?php echo $Q10[5]; ?> </span> %</li>
                            </ul>
                        </td>    		
                    </tr>
                    <tr>
                        <td colspan="4" class="Q11"><strong>Q11. Sur quels types de bâtiment votre entreprise œuvre-t-elle ?</strong></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <ul>
                                <li>Logements:  <span class="answer"><?php echo $Q11[0]; ?></span>  % </li>
                                <li>Bureaux et administrations : <span class="answer"><?php echo $Q11[1]; ?></span> %</li>
                                <li>Commerces: <span class="answer"><?php echo $Q11[2]; ?></span>  %</li>
                                <li>Désamiantage: <span class="answer"><?php echo $Q11[3]; ?> </span> %</li>
                                <li>Bâtiments industriels: <span class="answer"><?php echo $Q11[4]; ?></span>  %</li>
                                <li>Enseignement/éducation: <span class="answer"> <?php echo $Q11[5]; ?></span>  % </li>
                                <li>Complexe sportif:  <span class="answer"> <?php echo $Q11[6]; ?></span>  %</li>
                                <li>Secteur santé:  <span class="answer"> <?php echo $Q11[7]; ?> </span> %</li>
                                <li>Autre: <span class="answer"> <?php echo $Q11[8]; ?> </span>  % (<span class="answer"><?php echo $Q11[9]; ?></span>)</li>
                            </ul>   
                        </td>    		
                    </tr>
                    <tr>
                        <td colspan="6" class="Q12"><strong>Q12.  Au cours de l’année 2015, sur vos différents chantiers, votre entreprise a-t-elle généré des déchets?</strong></td>
                    </tr>
                    <tr>
                        <td class="answer"><?php echo $SimpleAnswers[12]; ?></td> 

                    </tr>
                    <tr>
                        <td colspan="7" class="Q13"><strong>Q13. Pouvez-vous nous indiquer:</strong></td>
                    </tr>
                    <tr>
                        <td colspan="7">
                            <ul>
                                <li>La quantité totale de déchets générés sur vos chantiers en 2015?  <span class="answer"> <strong><?php echo $Q13[0]; ?> <?php echo $Q13[1]; ?></strong></span> </li>
                                <li>La quantité moyenne de déchets générés sur un chantier? <span class="answer"><strong><?php echo $Q13[2]; ?> <?php echo $Q13[3]; ?></strong></span>  </li>
                            </ul>   
                        </td>  
                    </tr>
                    <tr>
                        <td colspan="6" class="Q14"><strong>Q14. Si non, Etes-vous en mesure d’estimer cette quantité, même approximativement?</strong></td>
                    </tr>
                    <tr>
                        <td><?php echo $SimpleAnswers[14]; ?></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="Q15"><strong>Q15. Si oui, Pouvez-vous nous indiquer cette fourchette ?</strong></td>
                    </tr>
                    <tr> <td colspan="3"> Min: <span class="answer"><?php echo $Q15[0]; ?></span>  &nbsp; Max: <span class="answer"><?php echo $Q15[1]; ?></span> </td>
                    </tr>
                    <tr>
                        <td colspan="7" class="Q16"><strong>Q16. Pouvez-vous nous indiquer la répartition des déchets produits sur vos chantiers, par grande nature?</strong></td>
                    </tr>
                    <tr>
                        <td colspan="7">
                            <ul>
                                <li>Déchets inertes | <strong><?php echo $Q16[0]; ?> </strong> Tonnes| Le flux a fait l’objet d’un tri séparé: <strong> <?php echo $Q16[1]; ?></strong> </li>
                                <li>Déchets non dangereux non inertes | <strong><?php echo $Q16[2]; ?> </strong> Tonnes| Le flux a fait l’objet d’un tri séparé: <strong><?php echo $Q16[3]; ?></strong>  </li>
                                <li>Déchets dangereux | <strong><?php echo $Q16[4]; ?></strong> Tonnes | Le flux a fait l’objet d’un tri séparé: <strong><?php echo $Q16[5]; ?></strong>  </li>
                            </ul>


                        </td>
                    </tr>
                    <tr>
                        <td colspan="7" class="Q17"><strong>Q17. Pour chacune de vos activités, comme se répartit cette quantité?</strong></td>
                    </tr>
                    <tr>
                        <td colspan="7">
                            <ul>
                                <li>Démolition - technicité courante | <span class="answer">DI %: <strong><?php echo $Q17_DI[0]; ?> </strong>| DNIND %:  <strong><?php echo $Q17_DNIND[0]; ?> </strong> | DD %: <strong> <?php echo $Q17_DD[0]; ?></strong></span> </li>
                                <li>Démolition à l'explosif |  <span class="answer">DI %: <strong><?php echo $Q17_DI[1]; ?> </strong>| DNIND %:<strong> <?php echo $Q17_DNIND[1]; ?></strong> | DD %: <strong><?php echo $Q17_DD[1]; ?></strong></span> </li>
                                <li>Découpe du béton (par carottage ou sciage) | <span class="answer">DI %: <strong><?php echo $Q17_DI[2]; ?> </strong>| DNIND %: <strong><?php echo $Q17_DNIND[2]; ?></strong> | DD %: <strong><?php echo $Q17_DD[2]; ?></strong></span> </li>
                                <li>Désamiantage | <span class="answer">DI %: <strong><?php echo $Q17_DI[3]; ?></strong> | DNIND %: <strong><?php echo $Q17_DNIND[3]; ?></strong> | DD %: <strong><?php echo $Q17_DD[3]; ?></strong></span> </li>
                                <li>Curage | <span class="answer">DI %: <?php echo $Q17_DI[4]; ?> | DNIND %: <?php echo $Q17_DNIND[4]; ?> | DD %: <?php echo $Q17_DD[4]; ?></span> </li>
                                <li>Autres activités | <span class="answer">DI %: <strong><?php echo $Q17_DI[5]; ?> </strong>| DNIND %: <strong><?php echo $Q17_DNIND[5]; ?></strong> | DD %: <strong><?php echo $Q17_DD[5]; ?></strong></span> </li>
                            </ul>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="7" class="Q18"><strong>Q18-1. Pouvez-vous nous préciser la nature de vos déchets inertes et les exutoires utilisés?</strong></td>
                    </tr>
                    <tr>
                        <td colspan="7">
                            <ul>
                                <li>1. Terres et matériaux meubles non pollués | <span class="answer"> <strong><?php echo $Q18_oui_non[0]; ?> </strong>| Quantité :  <strong><?php echo $Q18_qte[0]; ?> </strong> </span> </li>
                                <li>2. Graves et matériaux rocheux |  <span class="answer"><strong><?php echo $Q18_oui_non[1]; ?> </strong>| Quantité :  <strong><?php echo $Q18_qte[1]; ?> </strong> </span> </li>
                                <li>3. Béton  sans ferraille ou peu ferraillé | <span class="answer"><strong><?php echo $Q18_oui_non[2]; ?> </strong>| Quantité :  <strong><?php echo $Q18_qte[2]; ?> </strong> </span> </li>
                                <li>4. Briques, tuiles et céramiques | <span class="answer"> <strong><?php echo $Q18_oui_non[3]; ?> </strong>| Quantité :  <strong><?php echo $Q18_qte[3]; ?> </strong> </span> </li>
                                <li>5. Mélanges de déchets inertes | <span class="answer"> <strong><?php echo $Q18_oui_non[4]; ?> </strong>| Quantité :  <strong><?php echo $Q18_qte[4]; ?> </strong> </span> </li>
                                <li>5. Mélanges de déchets inertes | <span class="answer"> <strong><?php echo $Q18_oui_non[5]; ?> </strong>| Quantité :  <strong><?php echo $Q18_qte[5]; ?> </strong> </span> </li>
                                <li>6. Autres déchets inertes : <?php echo $Q18_autres; ?> | <span class="answer"> <strong><?php echo $Q18_oui_non[6]; ?> </strong>| Quantité :  <strong><?php echo $Q18_qte[6]; ?> </strong> </span> </li>

                            </ul>

                        </td>
                    </tr>

                    <tr>
                        <td colspan="7"> 
                            <strong>Q18-2. Merci d’indiquer les filières utilisées pour la gestion de vos déchets inertes :</strong>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="7">
                             <ul>
                                <li>Réemploi sur site | <?php echo $Q18_2[0]; ?> %</li>
                                <li>Réutilisation sur un autre site |  <?php echo $Q18_2[1]; ?> % </li>
                                <li>Aménagement paysager |  <?php echo $Q18_2[2]; ?> %</li>
                                <li>Déchèterie / Centre de regroupement / centre de tri |  <?php echo $Q18_2[3]; ?> %</li>
                                <li>Plateforme de recyclage de déchets inertes |  <?php echo $Q18_2[4]; ?> %</li>
                                <li>Carrière|  <?php echo $Q18_2[5]; ?> % </li>
                                <li>ISDND (recouvrement, aménagements) |  <?php echo $Q18_2[6]; ?> %</li>
                                <li>ISDI |  <?php echo $Q18_2[7]; ?> %</li>
                                <li>Prise en charge par un collecteur |  <?php echo $Q18_2[8]; ?> %</li>
                                <li><?php echo $Q18_2[10]; ?> |  <?php echo $Q18_2[9]; ?> % </li>
                            </ul>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="7" class="Q19"><strong>Q19-1. Pouvez-vous nous préciser la nature de vos déchets non dangereux non inertes et les exutoires utilisés ?</strong></td>
                    </tr>



                    <tr>
                        <td colspan="7">
                            <ul>
                                <li>1. Mélanges déchets non dangereux non inertes (DIB) | <span class="answer"> <strong><?php echo $Q19_oui_non[0]; ?> </strong>| Quantité :  <strong><?php echo $Q19_qte[0]; ?> </strong> </span> </li>
                                <li>2. Métaux | <span class="answer"> <strong><?php echo $Q19_oui_non[1]; ?> </strong>| Quantité :  <strong><?php echo $Q19_qte[1]; ?> </strong> </span> </li>
                                <li>3. Plâtre - plaques et carreaux | <span class="answer"><strong><?php echo $Q19_oui_non[2]; ?> </strong>| Quantité :  <strong><?php echo $Q19_qte[2]; ?> </strong> </span> </li>
                                <li>4. Plâtre - enduits sur supports inertes | <span class="answer"> <strong><?php echo $Q19_oui_non[3]; ?> </strong>| Quantité :  <strong><?php echo $Q19_qte[3]; ?> </strong> </span> </li>
                                <li>5. Plastiques | <span class="answer"> <strong><?php echo $Q19_oui_non[4]; ?> </strong>| Quantité :  <strong><?php echo $Q19_qte[4]; ?> </strong> </span> </li>
                                <li>6. Vitrages | <span class="answer"> <strong><?php echo $Q19_oui_non[5]; ?> </strong>| Quantité :  <strong><?php echo $Q19_qte[5]; ?> </strong> </span> </li>
                                <li>7. Bois brut ou faiblement adjuventés | <span class="answer"> <strong><?php echo $Q19_oui_non[6]; ?> </strong>| Quantité :  <strong><?php echo $Q19_qte[6]; ?> </strong> </span> </li>
                                <li>8. Déchets végétaux | <span class="answer"> <strong><?php echo $Q19_oui_non[7]; ?> </strong>| Quantité :  <strong><?php echo $Q19_qte[7]; ?> </strong> </span> </li>
                                <li>9. Déchets résiduels issus de l'usage et occupation des bâtiments| <span class="answer"> <strong><?php echo $Q19_oui_non[8]; ?> </strong>| Quantité :  <strong><?php echo $Q19_qte[8]; ?> </strong> </span> </li>
                                <li>10. Autres déchets non dangereux : <?php echo $Q19_autres; ?> | <span class="answer"> <strong><?php echo $Q19_oui_non[9]; ?> </strong>| Quantité :  <strong><?php echo $Q19_qte[9]; ?> </strong> </span> </li>

                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="7"><strong>Q19-2  Merci d’indiquer les filières utilisées pour la gestion de vos déchets non dangereux non inertes :</strong></td>
                    </tr>
                    <tr>
                        <td colspan="7">
        <ul>
                                <li>Réemploi sur site | <?php echo $Q19_2[0]; ?> %</li>
                                <li>Réutilisation sur un autre site |  <?php echo $Q19_2[1]; ?> % </li>
                                <li>Déchèterie / Centre de regroupement / centre de tri |  <?php echo $Q19_2[2]; ?> %</li>
                                <li>Centre de valorisation matière (ex : recyclage du plâtre, broyage bois, …) |  <?php echo $Q19_2[3]; ?> %</li>
                                <li>Eco-organisme d’une filière REP |  <?php echo $Q19_2[4]; ?> %</li>
                                <li>Centre de valorization énergétique |  <?php echo $Q19_2[5]; ?> % </li>
                                <li>ISDND (recouvrement, aménagements) |  <?php echo $Q19_2[6]; ?> %</li>
                                <li>Prise en charge par un collecteur |  <?php echo $Q19_2[7]; ?> %</li>
                                <li><?php echo $Q19_2[9]; ?> charge par un collecteur |  <?php echo $Q19_2[8]; ?> %</li>
                            </ul>
      

                        </td>
                    </tr>
                    <tr>
                        <td colspan="7" class="Q20"><strong>Q20-1. Pouvez-vous nous préciser la nature de vos déchets dangereux et les exutoires utilisés ?</strong></td>
                    </tr>
                    <tr>
                        <td colspan="7">
                            <ul>
                                <li>1. Terres et matériaux meubles pollués | <span class="answer"> <strong><?php echo $Q20_oui_non[0]; ?> </strong>| Quantité :  <strong><?php echo $Q20_qte[0]; ?> </strong> </span> </li>
                                <li>2. Amiante | <span class="answer"> <strong><?php echo $Q20_oui_non[1]; ?> </strong>| Quantité :  <strong><?php echo $Q20_qte[1]; ?> </strong> </span> </li>             
                                <li>3. Bois traités <small>(traverses chemin fer, poteaux EDF ou FT, bois recouvert de peintures au plomb, etc.)</small> | <span class="answer"> <strong><?php echo $Q20_oui_non[2]; ?> </strong>| Quantité :  <strong><?php echo $Q20_qte[2]; ?> </strong> </span> </li>
                                <li>4. Lampes | <span class="answer"> <strong><?php echo $Q20_oui_non[3]; ?> </strong>| Quantité :  <strong><?php echo $Q20_qte[3]; ?> </strong> </span> </li>
                                <li>5. Déchets d'équipements électriques et électroniques (DEEE) | <span class="answer"> <strong><?php echo $Q20_oui_non[4]; ?> </strong>| Quantité :  <strong><?php echo $Q20_qte[4]; ?> </strong> </span> </li>
                                <li>6. Equipements techniques (hors DEEE) | <span class="answer"> <strong><?php echo $Q20_oui_non[5]; ?> </strong>| Quantité :  <strong><?php echo $Q20_qte[5]; ?> </strong> </span> </li>
                                <li>7. Autres déchets dangereux : <?php echo $Q20_autres; ?> | <span class="answer"> <strong><?php echo $Q20_oui_non[6]; ?> </strong>| Quantité :  <strong><?php echo $Q20_qte[6]; ?> </strong> </span> </li>

                            </ul>


                        </td>
                    </tr>
                    <tr>
                        <td colspan="7">
                            <strong>Q20-2  Merci d’indiquer les filières utilisées pour la gestion de vos déchets dangereux: </strong>
                        </td>  
                    </tr>
                    <tr>
                        <td colspan="7">
                               <ul>
                                <li>Traitement et réemploi sur site | <?php echo $Q20_2[0]; ?> %</li>
                                <li>Déchèterie / Centre de regroupement / centre de tri |  <?php echo $Q20_2[1]; ?> % </li>
                                <li>Valorisation (ex : vitrification amiante, traitement des terres polluées, …) |  <?php echo $Q20_2[2]; ?> %</li>
                                <li>Eco-organisme d’une filière REP |  <?php echo $Q20_2[3]; ?> %</li>
                                <li>UIDD |  <?php echo $Q20_2[4]; ?> %</li>
                                <li>Stockage d’amiante en ISDND |  <?php echo $Q20_2[5]; ?> % </li>
                                <li>ISDD |  <?php echo $Q20_2[6]; ?> %</li>
                                <li>Prise en charge par un collecteur |  <?php echo $Q20_2[7]; ?> %</li>
                                <li><?php echo $Q20_2[9]; ?> charge par un collecteur |  <?php echo $Q20_2[8]; ?> %</li>
                            </ul>
                   

                        </td>  
                    </tr>
                    <?php
                    echo $ans_21;
                    echo $ans_22;
                    echo $ans_23;
                    ?>   
                    <tr>
                        <td colspan="7" class="Q24"><strong>Q24. Comment jugez-vous le maillage en points de collecte en Île-de-France ?</strong></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="answer"><?php echo $SimpleAnswers[24]; ?></td>
                    </tr> 
                    <tr>
                        <td colspan="7" class="Q25"><strong>Q25. Comment jugez-vous le maillage en installations de traitement en Île-de-France ?</strong></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="answer"> <?php echo $SimpleAnswers[25]; ?></td>
                    </tr> 
                    <tr>
                        <td colspan="7" ><strong>Q26. Avez-vous connaissance de site internet/annuaires permettant de connaître les points de collecte et/ou installations de traitement de vos déchets ?</strong></td>

                    </tr>

                    <tr>
                        <td colspan="7"  class="answer"> <?php echo $SimpleAnswers[26]; ?></td>
                    </tr> 
                    <tr>
                        <td colspan="7" class="Q27"><strong>Q27. Estimez-vous avoir une connaissance suffisante sur les différentes filières ?</strong></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="answer"><?php echo $SimpleAnswers[27]; ?></td>
                    </tr>
                    <?php echo $ans_28; ?>
                    <tr>
                        <td colspan="6" class="Q29"><strong>Q29. Vous êtes-vous fixé des objectifs chiffrés de valorisation des déchets produits sur chantiers?</strong></td>
                    </tr>
                    <tr>  <td class="answer"><?php echo $SimpleAnswers[29]; ?></td>       
                    </tr>
                    <?php echo $ans_30; ?>


                    <tr>
                        <td colspan="7" class="Q31"><strong>Q31. De manière générale, quelles sont les difficultés rencontrées par votre entreprise pour gérer vos déchets?</strong></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="answer"><?php echo $SimpleAnswers[31]; ?></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="Q32"><strong>Q32. Quels seraient vos besoins pour améliorer la gestion de vos déchets?</strong></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="answer"><?php echo $SimpleAnswers[32]; ?></td>
                    </tr>

                    <?php
                    $Q33 = $SimpleAnswers[33];
                    if ($Q33 != null) {
                        $Q33 = explode(",", $Q33);  // (implode) Join array elements with a string
                    }
                    ?>

                    <tr>
                        <td  class="Q33"><strong>Q33. Avez-vous déjà eu des exigences particulières de la part des maîtres d'ouvrage sur la thématique des déchets?</strong></td>

                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li>Réalisation d’un SOGED/SODED: <span class="answer"> <?php echo $Q33[0]; ?> </span> </li>
                                <li>Suivi des déchets par des bordereaux:  <span class="answer"><?php echo $Q33[1]; ?> </span> </li>
                                <li>Objectifs de valorisation: <span class="answer"> <?php echo $Q33[2]; ?> </span> </li>
                                <li>Exigences environnementales: <span class="answer"> <?php echo $Q33[3]; ?> </span> </li>
                                <li>AMO environnementale: <span class="answer"> <?php echo $Q33[4]; ?> </span></li>
                                <li>Démarche de certification: <span class="answer"> <?php echo $Q33[5]; ?> </span></li>
                            </ul>
                        </td>    		
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- SCRIPTS here -->
        <?php echo include('include/scripts.php'); ?>


        <script src="http://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#clickExcel').click(function () {
                    $("#report_xls").table2excel({
                        filename: "rapport_excel",
                        fileext: ".xls",
                    });
                });
            });
        </script>


    </body>

</html>