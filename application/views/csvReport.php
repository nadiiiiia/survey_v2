<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include('include/head.php'); ?>
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

        <table id="report">
            <tbody>
                <tr>  <!--Q1-->
                    <td colspan="7" class="Q1"><strong>Q1. Au cours de l’année 2015, sur vos différents chantiers, votre entreprise a-t-elle généré des déchets?</strong></td>
                </tr>
                <tr> <td class="answer"> <?php echo  $SimpleAnswers[1] ; ?></td> 

                </tr> 
                <tr>  <!--Q2-->
                    <td  class="Q2"><strong>Q2. Pour quelles raisons?</strong></td>
                </tr> <tr>  <td  class="answer"><?php echo $SimpleAnswers[2] ; ?></td> 

                </tr> 
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
                    <td colspan="7">Téléphone:&nbsp; <span class="answer"><?php echo $ContactAnswers['contact_téléphonique'] ; ?></span> </td>	
                </tr>
                  <tr>
                    <td colspan="7">E-mail: <span class="answer"><?php echo $ContactAnswers['new_mail'] ; ?> </span></td>	
                </tr>
                
                <tr>
                    <td class="Q6"><strong>Q6. Votre code APE ?</strong></td>
                </tr>
                <tr>
                    <td colspan="3" class="answer"><?php echo $SimpleAnswers[6] ; ?></td> 

                </tr>
                <tr>
                    <td class="Q7"><strong>Q7. Votre effectif salarié ?</strong></td>
                   </tr> 
            <tr><td colspan="3" class="answer"><?php echo $SimpleAnswers[7] ; ?></td> 

                </tr>
                <tr>
                    <td colspan="2" class="Q8" ><strong>Q8. Le chiffre d’affaires de votre établissement en 2015? </strong></td>
                 </tr>   
            <tr><td colspan="2" class="answer"><?php echo $SimpleAnswers[8] ; ?> K€</td> 

                </tr>
                <tr>
                    <td colspan="4" class="Q9"><strong>Q9. Sur quelles zones géographiques réalisez-vous votre chiffre d’affaires ?</strong></td>
                </tr>
                <tr>
                    <td colspan="4" >
                        <ul>
                            <li>Sur la ville de Paris (75): <span class="answer"><?php echo $Q9[0] ; ?></span>  % </li>
                            <li>En Petite couronne hors ville de Paris (92, 93, 94): <span class="answer"><?php echo $Q9[1] ; ?></span> % </li>
                            <li>En Grande couronne (77, 78, 91, 95): <span class="answer"><?php echo $Q9[2] ; ?> </span> %</li>
                            <li>Hors Île-de-France: <span class="answer"><?php echo $Q9[3] ; ?> </span> %</li>
                        </ul>
                    </td>    		
                </tr>
                <tr>
                    <td colspan="4" class="Q10"><strong>Q10. Comment votre chiffre d’affaires se répartit-il en fonction des activités suivantes ?</strong></td>

                </tr>
                <tr>
                    <td colspan="4">
                        <ul>
                            <li>Démolition – technicité courante: <span class="answer"> <?php echo $Q10[0] ; ?> </span>  %</li>
                            <li>Démolition à l’explosif: <span class="answer"><?php echo $Q10[1] ; ?> </span> %</li>
                            <li>Découpe du béton: <span class="answer"><?php echo $Q10[2] ; ?> </span>  %</li>
                            <li>Désamiantage: <span class="answer"> <?php echo $Q10[3] ; ?> </span> %</li>
                            <li>Curage: <span class="answer"><?php echo $Q10[4] ; ?> </span> %</li>
                            <li>Autres activité: <span class="answer"><?php echo $Q10[5] ; ?> </span> %</li>
                        </ul>
                    </td>    		
                </tr>
                <tr>
                    <td colspan="4" class="Q11"><strong>Q11. Sur quels types de bâtiment votre entreprise œuvre-t-elle ?</strong></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <ul>
                            <li>Logements:  <span class="answer"><?php echo $Q11[0] ; ?></span>  % </li>
                            <li>Bureaux et administrations : <span class="answer"><?php echo $Q11[1] ; ?></span> %</li>
                            <li>Commerces: <span class="answer"><?php echo $Q11[2] ; ?></span>  %</li>
                            <li>Désamiantage: <span class="answer"><?php echo $Q11[3] ; ?> </span> %</li>
                            <li>Bâtiments industriels: <span class="answer"><?php echo $Q11[4] ; ?></span>  %</li>
                            <li>Enseignement/éducation: <span class="answer"> <?php echo $Q11[5] ; ?></span>  % </li>
                            <li>Complexe sportif:  <span class="answer"> <?php echo $Q11[6] ; ?></span>  %</li>
                            <li>Secteur santé:  <span class="answer"> <?php echo $Q11[7] ; ?> </span> %</li>
                            <li>Autre: <span class="answer"> <?php echo $Q11[8] ; ?> </span>  % (<span class="answer"><?php echo $Q11[9] ; ?></span>)</li>
                        </ul>   
                    </td>    		
                </tr>
                	<tr>
        <td colspan="6" class="Q12"><strong>Q12.  Au cours de l’année 2015, sur vos différents chantiers, votre entreprise a-t-elle généré des déchets?</strong></td>
        <td class="answer">' . $SimpleAnswers[12] . '</td> 
			
    </tr>
	<tr>
        <td colspan="7" class="Q13"><strong>Q13. Pouvez-vous nous indiquer:</strong></td>
        
	  		
    </tr>
    <tr>
	<td colspan="7">
        <ul>
           <li>La quantité totale de déchets générés sur vos chantiers en 2015?  <span class="answer"> ' . $Q13[0] . ' ' . $Q13[1] . '</span> </li>
           <li>La quantité moyenne de déchets générés sur un chantier? <span class="answer">' . $Q13[2] . ' ' . $Q13[3] . '</span>  </li>
        </ul>   
        </td>  
    </tr>
    <tr>
        <td colspan="6" class="Q14"><strong>Q14. Si non, Etes-vous en mesure d’estimer cette quantité, même approximativement?</strong></td>
        <td>' . $SimpleAnswers[14] . '</td>
    </tr>
    <tr>
        <td colspan="4" class="Q15"><strong>Q15. Si oui, Pouvez-vous nous indiquer cette fourchette ?</strong></td>
        <td colspan="3"> Min: <span class="answer">' . $Q15[0] . '</span>  &nbsp; Max: <span class="answer">' . $Q15[1] . '</span> </td>
    </tr>
    <tr>
        <td colspan="7" class="Q16"><strong>Q16. Pouvez-vous nous indiquer la répartition des déchets produits sur vos chantiers, par grande nature?</strong></td>
    </tr>
    <tr>
        <td colspan="7">
<table class="border">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>Vos déchets produits en 2015</td>
            <th>Tonnes</td>
            <th>Le flux a-t-il fait l’objet d’un tri séparé ?</td>


        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        <tr>
            <td class="answer">Déchets inertes</td>
            <td class="answer">' . $Q16[0] . '</td>
            <td class="answer">' . $Q16[1] . '</td>
        </tr>
        <tr>
            <td class="answer">Déchets non dangereux non inertes</td>
            <td class="answer">' . $Q16[2] . '</td>
            <td class="answer">' . $Q16[3] . '</td>
        </tr>
        <tr>
            <td class="answer">Déchets dangereux</td>
            <td class="answer">' . $Q16[4] . '</td>
            <td class="answer">' . $Q16[5] . '</td>
        </tr>
        
    </tbody>

    <!--Table body-->
</table>        

</td>
    </tr>
     <tr>
        <td colspan="7" class="Q17"><strong>Q17. Pour chacune de vos activités, comme se répartit cette quantité?</strong></td>
    </tr>
    <tr>
        <td colspan="7">
        
<table class="border" style="border: 1px solid black;">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>Activité</td>
            <th>DI %</td>
            <th>DNIND %</td>
            <th>DD %</td>


        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        <tr>
            <td class="answer">Démolition - technicité courante </td>
            
            <td class="answer">'.$Q17_DI[0].'</td>
            <td class="answer" >'.$Q17_DNIND[0].'</td>
            <td class="answer">'.$Q17_DD[0].'</td>
        </tr>
        <tr>
            <td class="answer">Démolition à l\'explosif</td>
            
            <td class="answer">'.$Q17_DI[1].'</td>
            <td class="answer">'.$Q17_DNIND[1].'</td>
            <td class="answer">'.$Q17_DD[1].'</td>
        </tr>
        <tr>
            <td class="answer">Découpe du béton (par carottage ou sciage)</td>
            
            <td class="answer">'.$Q17_DI[2].'</td>
            <td class="answer">'.$Q17_DNIND[2].'</td>
            <td class="answer">'.$Q17_DD[2].'</td>  
        </tr>
        <tr>
            <td class="answer">Désamiantage</td>

            <td class="answer">'.$Q17_DI[3].'</td>
            <td class="answer">'.$Q17_DNIND[3].'</td>
            <td class="answer">'.$Q17_DD[3].'</td>
        </tr>
        <tr>
            <td class="answer">Curage</td>
            
          <td class="answer">'.$Q17_DI[4].'</td>
            <td class="answer">'.$Q17_DNIND[4].'</td>
            <td class="answer">'.$Q17_DD[4].'</td>
        </tr>
        <tr>
            <td class="answer">Autres activités</td>
            
            <td class="answer">'.$Q17_DI[5].'</td>
            <td class="answer">'.$Q17_DNIND[5].'</td>
            <td class="answer">'.$Q17_DD[5].'</td>  
        </tr>
    </tbody>
    <!--Table body-->
</table>

        </td>
    </tr>
     <tr>
        <td colspan="7" class="Q18"><strong>Q18-1. Pouvez-vous nous préciser la nature de vos déchets inertes et les exutoires utilisés?</strong></td>
    </tr>
    <tr>
        <td colspan="7">
        <table class="tableQ18 border">

            <!--Table head-->
            <thead class="blue-grey lighten-4">
                <tr>
                    <th>Les  déchets inertes</td>
                    <th>oui/non</td>
                    <th>Quantité</td>

                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody class="qte">
                <tr>
                    <td class="answer">1. Terres et matériaux meubles non pollués</td>
                    
                    
                    <td class="answer">'.$Q18_oui_non[0].'</td>
                    <td class="answer">'.$Q18_qte[0].'</td>
                   
                </tr>
                <tr>
                    <td class="answer">2. Graves et matériaux rocheux</td>
                     
                    <td class="answer">'.$Q18_oui_non[1].'</td>
                    <td class="answer">'.$Q18_qte[1].'</td>
                 
                </tr>
                <tr>
                    <td class="answer">3. Béton  sans ferraille ou peu ferraillé</td>
                  
                    <td class="answer">'.$Q18_oui_non[2].'</td>
                    <td class="answer">'.$Q18_qte[2].'</td>
                   
                </tr>
                <tr>
                    <td class="answer">4. Briques, tuiles et céramiques</td>
                   
                    <td class="answer">'.$Q18_oui_non[3].'</td>
                    <td class="answer">'.$Q18_qte[3].'</td>
                  
                </tr>
                <tr>
                    <td class="answer">5. Mélanges de déchets inertes</td>
                 
                    <td class="answer">'.$Q18_oui_non[4].'</td>
                    <td class="answer">'.$Q18_qte[4].'</td>
                  
                </tr>
                <tr>
                    <td class="answer">6. Autres déchets inertes </td>
                    
                    <td class="answer">'.$Q18_oui_non[5].'</td>
                    <td class="answer">'.$Q18_qte[5].'</td>
                   
                </tr>
                <tr>
                    <td colspan="3">Précisez: <span class="answer">'.$Q18_autres.'</span></td>
                </tr>
                 </tbody>
            <!--Table body-->
        </table>        



</td>
    </tr>

<tr>
    <td colspan="7"> 
        <strong>Q18-2. Merci d’indiquer les filières utilisées pour la gestion de vos déchets inertes :</strong>
    </td>
</tr>

<tr>
    <td colspan="7">
        <table class="table border">

            <!--Table head-->
            <thead class="blue-grey lighten-4">
                <tr>
                    <th>Exutoires pour les déchets inertes</td>
                    <th> %</td>
                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody class="percent">
                <tr>
                    <td class="answer">Réemploi sur site</td>
                    <td class="answer">'.$Q18_2[0].'</td>

                </tr>
                <tr>
                    <td class="answer">Réutilisation sur un autre site</td>
                    <td class="answer">'.$Q18_2[1].'</td>

                </tr>
                <tr>
                    <td class="answer">Aménagement paysager</td>
                    <td class="answer">'.$Q18_2[2].'</td>
                </tr>
                <tr>
                    <td class="answer">Déchèterie / Centre de regroupement / centre de tri</td>
                    <td class="answer">'.$Q18_2[3].'</td>

                </tr>
                <tr>
                    <td class="answer">Plateforme de recyclage de déchets inertes</td>
                    <td class="answer">'.$Q18_2[4].'</td>

                </tr>
                <tr>
                    <td class="answer">Carrière</td>
                    <td class="answer">'.$Q18_2[5].'</td>
                </tr>
                <tr>
                    <td class="answer">ISDND (recouvrement, aménagements)</td>
                    <td class="answer">'.$Q18_2[6].'</td>

                </tr>
                <tr>
                    <td class="answer">ISDI</td>
                    <td class="answer">'.$Q18_2[7].'</td>

                </tr>
                <tr>
                    <td class="answer">Prise en charge par un collecteur</td>
                    <td class="answer">'.$Q18_2[8].'</td>
                </tr>
                <tr>
                    <th scope="row" class="answer">'.$Q18_2[10].'</td>
                    <td class="answer">'.$Q18_2[9].'</td>
                </tr>

            </tbody>
            <!--Table body-->
        </table>
    </td>
</tr>
         <tr>
        <td colspan="7" class="Q19"><strong>Q19-1. Pouvez-vous nous préciser la nature de vos déchets non dangereux non inertes et les exutoires utilisés ?</strong></td>
    </tr>
    
    
   
    <tr>
        <td colspan="7">
        <table class="tableQ19 border">

            <!--Table head-->
            <thead class="blue-grey lighten-4">
                <tr colspan="7">
                    <th>Les déchets non inertes non dangereux</td>
                    <th>oui/non</td>
                    <th>Quantité</td>

                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody class="qte">
                <tr>
                    <td class="answer">1. Mélanges déchets non dangereux non inertes (DIB)</td>
                    
                    
                    <td class="answer">'.$Q19_oui_non[0].'</td>
                        <td class="answer">'.$Q19_qte[0].'</td>
                   
                </tr>
                <tr>
                    <td class="answer">2. Métaux</td>
                     
                    <td class="answer">'.$Q19_oui_non[1].'</td>
                        <td class="answer">'.$Q19_qte[1].'</td>
                 
                </tr>
                <tr>
                    <td class="answer">3. Plâtre - plaques et carreaux</td>
                  
                    <td class="answer">'.$Q19_oui_non[2].'</td>
                        <td class="answer">'.$Q19_qte[2].'</td>
                   
                </tr>
                <tr>
                    <td class="answer">4. Plâtre - enduits sur supports inertes</td>
                   
                    <td class="answer">'.$Q19_oui_non[3].'</td>
                        <td class="answer">'.$Q19_qte[3].'</td>
                  
                </tr>
                <tr>
                    <td class="answer">5. Plastiques</td>
                 
                    <td class="answer">'.$Q19_oui_non[4].'</td>
                        <td class="answer">'.$Q19_qte[4].'</td>
                  
                </tr>
                <tr>
                    <td class="answer">6. Vitrages</td>
                    
                    <td class="answer">'.$Q19_oui_non[5].'</td>
                        <td class="answer">'.$Q19_qte[5].'</td>
                   
                </tr>
                <tr>
                     <td class="answer">7. Bois brut ou faiblement adjuventés</td>
                    
                    <td class="answer">'.$Q19_oui_non[6].'</td>
                        <td class="answer">'.$Q19_qte[6].'</td>
                </tr>
                <tr>
                     <td class="answer">8. Déchets végétaux</td>
                    
                    <td class="answer">'.$Q19_oui_non[7].'</td>
                        <td class="answer">'.$Q19_qte[7].'</td>
                </tr>
                <tr>
                     <td class="answer">9. Déchets résiduels issus de l\'usage et occupation des bâtiments</td>
                    
                    <td colspan="7" class="answer">'.$Q19_oui_non[8].'</td>
                        <td class="answer">'.$Q19_qte[8].'</td>
                </tr>
                <tr>
                     <td colspan="7" class="answer">10. Autres déchets non dangereux</td>
                    
                        <td class="answer">'.$Q19_oui_non[9].'</td>
                        <td class="answer">'.$Q19_qte[9].'</td>
                   
                </tr>
                <tr>
                    <td colspan="7">Précisez:<span class="answer"> '.$Q19_autres.'</span></td>
                </tr>
            </tbody>
            <!--Table body-->
        </table>    </td>
    </tr>
     <tr>
        <td colspan="7"><strong>Q19-2  Merci d’indiquer les filières utilisées pour la gestion de vos déchets non dangereux non inertes :</strong></td>
    </tr>
    <tr>
    <td colspan="7">
    
<table class="table border">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>Exutoires pour les déchets non dangereux</td>
            <th> %</td>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody class="percent">
        <tr>
            <td class="answer">Réemploi sur site</td>
            <td class="answer">'.$Q19_2[0].'</td>

        </tr>
        <tr>
            <td class="answer">Réutilisation sur un autre site</td>
            <td class="answer">'.$Q19_2[1].'</td>

        </tr>
        <tr>
            <td class="answer">Déchèterie / Centre de regroupement / centre de tri</td>
            <td class="answer">'.$Q19_2[2].'</td>
        </tr>
        <tr>
            <td class="answer">Centre de valorisation matière (ex : recyclage du plâtre, broyage bois, …)</td>
            <td class="answer">'.$Q19_2[3].'</td>

        </tr>
        <tr>
            <td class="answer">Eco-organisme d’une filière REP</td>
            <td class="answer">'.$Q19_2[4].'</td>

        </tr>
        <tr>
            <td class="answer">Centre de valorization énergétique</td>
            <td class="answer">'.$Q19_2[5].'</td>
        </tr>
        <tr>
            <td class="answer">ISDND </td>
            <td class="answer">'.$Q19_2[6].'</td>

        </tr>
        <tr>
            <td class="answer">Prise en charge par un collecteur</td>
            <td class="answer">'.$Q19_2[7].'</td>

        </tr>
        <tr>
            <th scope="row" class="answer">'.$Q19_2[9].'</td>
            <td class="answer">'.$Q19_2[8].'</td>
        </tr>
        
    </tbody>
    <!--Table body-->
</table>

    </td>
    </tr>
     <tr>
        <td colspan="7" class="Q20"><strong>Q20-1. Pouvez-vous nous préciser la nature de vos déchets dangereux et les exutoires utilisés ?</strong></td>
    </tr>
    <tr>
        <td colspan="7">
        <table class="tableQ20 border">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>Les déchets dangereux</td>
            <th>oui/non</td>
            <th>Quantité</td>

        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody class="qte">
        <tr>
            <td class="answer">1. Terres et matériaux meubles pollués</td>


            <td class="answer">'.$Q20_oui_non[0].'</td>
            <td class="answer">'.$Q20_qte[0].'</td>

        </tr>
        <tr>
            <td class="answer">2. Amiante</td>

            <td class="answer">'.$Q20_oui_non[1].'</td>
            <td class="answer">'.$Q20_qte[1].'</td>

        </tr>
        <tr>
            <td class="answer">3. Bois traités <small>(traverses chemin fer, poteaux EDF ou FT, bois recouvert de peintures au plomb, etc.)</small></td>

            <td class="answer">'.$Q20_oui_non[2].'</td>
            <td class="answer">'.$Q20_qte[2].'</td>

        </tr>
        <tr>
            <td class="answer">4. Lampes</td>

            <td class="answer">'.$Q20_oui_non[3].'</td>
            <td class="answer">'.$Q20_qte[3].'</td>

        </tr>
        <tr>
            <td class="answer">5. Déchets d\'équipements électriques et électroniques (DEEE)</td>

            <td class="answer">'.$Q20_oui_non[4].'</td>
            <td class="answer">'.$Q20_qte[4].'</td>

        </tr>
        <tr>
            <td class="answer">6. Equipements techniques (hors DEEE)</td>

            <td class="answer">'.$Q20_oui_non[5].'</td>
            <td class="answer">'.$Q20_qte[5].'</td>

        </tr>
        <tr>
            <td class="answer">7. Autres déchets dangereux</td>

                    <td class="answer">'.$Q20_oui_non[6].'</td>
                    <td class="answer">'.$Q20_qte[6].'</td>
                   
                </tr>
                <tr>
                    <td colspan="3">Précisez: <span class="answer">'.$Q20_autres.'</span></td>
                </tr>
    </tbody>
    <!--Table body-->
</table>        

        </td>
    </tr>
  <tr>
<td colspan="7">
<strong>Q20-2  Merci d’indiquer les filières utilisées pour la gestion de vos déchets dangereux: </strong>
</td>  
</tr>
      <tr>
<td colspan="7">
<table class="table border">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>Exutoires pour les déchets dangereux</td>
            <th> %</td>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody class="percent">
        <tr>
            <td class="answer">Traitement et réemploi sur site</td>
            <td class="answer">'.$Q20_2[0].'</td>

        </tr>
        <tr>
            <td class="answer">Déchèterie / Centre de regroupement / centre de tri</td>
            <td class="answer">'.$Q20_2[1].'</td>

        </tr>
        <tr>
            <td class="answer">Valorisation (ex : vitrification amiante, traitement des terres polluées, …)</td>
            <td class="answer">'.$Q20_2[2].'</td>
        </tr>
        <tr>
            <td class="answer">Eco-organisme d’une filière REP</td>
            <td class="answer">'.$Q20_2[3].'</td>

        </tr>
        <tr>
            <td class="answer">UIDD</td>
            <td class="answer">'.$Q20_2[4].'</td>

        </tr>
        <tr>
            <td class="answer">Stockage d’amiante en ISDND</td>
            <td class="answer">'.$Q20_2[5].'</td>
        </tr>
        <tr>
            <td class="answer">ISDD</td>
            <td class="answer">'.$Q20_2[6].'</td>

        </tr>
        <tr>
            <td class="answer">Prise en charge par un collecteur</td>
            <td class="answer">'.$Q20_2[7].'</td>

        </tr>
        <tr>
            <td class="answer">'.$Q20_2[9].'</td>
            <td class="answer">'.$Q20_2[8].'</td>
        </tr>
        
    </tbody>
    <!--Table body-->
</table>

</td>  
</tr>
<!--
$html.=$ans_21;
$html.=$ans_22;
$html.=$ans_23;
 -->   
    <tr>
        <td colspan="7" class="Q24"><strong>Q24. Comment jugez-vous le maillage en points de collecte en Île-de-France ?</strong></td>
    </tr>
    <tr>
        <td colspan="7" class="answer">' . $SimpleAnswers[24] . '</td>
    </tr> 
    <tr>
        <td colspan="7" class="Q25"><strong>Q25. Comment jugez-vous le maillage en installations de traitement en Île-de-France ?</strong></td>
    </tr>
    <tr>
        <td colspan="7" class="answer"> ' . $SimpleAnswers[25] . '</td>
    </tr> 
 <tr>
        <td colspan="7" ><strong>Q26. Avez-vous connaissance de site internet/annuaires permettant de connaître les points de collecte et/ou installations de traitement de vos déchets ?</strong></td>
             
    </tr>
   
    <tr>
        <td colspan="7"  class="answer"> ' . $SimpleAnswers[26] . '</td>
    </tr> 
    <tr>
        <td colspan="7" class="Q27"><strong>Q27. Estimez-vous avoir une connaissance suffisante sur les différentes filières ?</strong></td>
    </tr>
    <tr>
        <td colspan="7" class="answer">' . $SimpleAnswers[27] . '</td>
    </tr>';
<!--$ans_28-->
    
    


    <tr>
        <td colspan="6" class="Q29"><strong>Q29. Vous êtes-vous fixé des objectifs chiffrés de valorisation des déchets produits sur chantiers?</strong></td>
        <td class="answer">' . $SimpleAnswers[29] . '</td>       
    </tr>
<!-- $ans_30;-->
    
    
   <tr>
        <td colspan="7" class="Q31"><strong>Q31. De manière générale, quelles sont les difficultés rencontrées par votre entreprise pour gérer vos déchets?</strong></td>
    </tr>
    <tr>
        <td colspan="7" class="answer">' . $SimpleAnswers[31] . '</td>
    </tr>
    <tr>
        <td colspan="7" class="Q32"><strong>Q32. Quels seraient vos besoins pour améliorer la gestion de vos déchets?</strong></td>
    </tr>
    <tr>
        <td colspan="7" class="answer">' . $SimpleAnswers[32] . '</td>
    </tr>

<!--
$Q33 = $SimpleAnswers[33];
if ($Q33 != null) {
    $Q33 = explode(",", $Q33);  // (implode) Join array elements with a string
}-->

    <tr>
        <td  class="Q33"><strong>Q33. Avez-vous déjà eu des exigences particulières de la part des maîtres d\'ouvrage sur la thématique des déchets?</strong></td>
        
    </tr>
    <tr>
        <td>
        <ul>
           <li>Réalisation d’un SOGED/SODED: <span class="answer"> ' . $Q33[0] . ' </span> </li>
           <li>Suivi des déchets par des bordereaux:  <span class="answer">' . $Q33[1] . ' </span> </li>
           <li>Objectifs de valorisation: <span class="answer"> ' . $Q33[2] . ' </span> </li>
           <li>Exigences environnementales: <span class="answer"> ' . $Q33[3] . ' </span> </li>
           <li>AMO environnementale: <span class="answer"> ' . $Q33[4] . ' </span></li>
           <li>Démarche de certification: <span class="answer"> ' . $Q33[5] . ' </span></li>
        </ul>
        </td>    		
    </tr>
    
            </tbody>
        </table>
            </tbody>
        </table>
        
                <!-- SCRIPTS here -->
        <?php include('include/scripts.php'); ?>
    </body>

</html>