<?php

// Include the main TCPDF library (search for installation path).
//require_once('tcpdf_include.php');
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
//$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/fra.php')) {
    require_once(dirname(__FILE__) . '/lang/fra.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------
// set font
$pdf->SetFont('times', '', 10);



// test custom bullet points for list
// add a page
$pdf->AddPage();



$html = '<style>
    
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
</style>';
$Q5 = $SimpleAnswers[5];
if ($Q5 != null) {
    $Q5 = explode(",", $Q5);  // (implode) Join array elements with a string
}
$Q9 = $SimpleAnswers[9];
if ($Q9 != null) {
    $Q9 = explode(",", $Q9);  // (implode) Join array elements with a string
}
$Q10 = $SimpleAnswers[10];
if ($Q10 != null) {
    $Q10 = explode(",", $Q10);  // (implode) Join array elements with a string
}
$Q11 = $SimpleAnswers[11];
if ($Q11 != null) {
    $Q11 = explode(",", $Q11);  // (implode) Join array elements with a string
}
$Q13 = $SimpleAnswers[13];
if ($Q13 != null) {
    $Q13 = explode(",", $Q13);  // (implode) Join array elements with a string
}
$Q15 = $SimpleAnswers[15];
if ($Q15 != null) {
    $Q15 = explode(",", $Q15);  // (implode) Join array elements with a string
}
$Q16 = $SimpleAnswers[16];
if ($Q16 != null) {
    $Q16 = explode(",", $Q16);  // (implode) Join array elements with a string
}

if ($Q17_DI != null) {
    $Q17_DI = explode(",", $Q17_DI);  // (implode) Join array elements with a string
}
if ($Q17_DNIND != null) {
    $Q17_DNIND = explode(",", $Q17_DNIND);  // (implode) Join array elements with a string
}
if ($Q17_DD != null) {
    $Q17_DD = explode(",", $Q17_DD);  // (implode) Join array elements with a string
}
$Q18_1 = $dechetsAnswers[18];
$Q18_oui_non;
$Q18_qte;
$Q18_autres = $Q18_1['autres'];
if ($Q18_1 != null) {
    $Q18_oui_non = explode(",", $Q18_1['oui_non']); 
    $Q18_qte = explode(",", $Q18_1['qte']); 
}

$Q19_1 = $dechetsAnswers[19];
$Q19_oui_non;
$Q19_qte;
$Q19_autres = $Q19_1['autres'];
if ($Q19_1 != null) {
    $Q19_oui_non = explode(",", $Q19_1['oui_non']); 
    $Q19_qte = explode(",", $Q19_1['qte']); 
}  

$Q20_1 = $dechetsAnswers[20];
$Q20_oui_non;
$Q20_qte;
$Q20_autres = $Q20_1['autres'];
if ($Q20_1 != null) {
    $Q20_oui_non = explode(",", $Q20_1['oui_non']); 
    $Q20_qte = explode(",", $Q20_1['qte']); 
}

$Q18_2 = $SimpleAnswers[18];
if ($Q18_2 != null) {
    $Q18_2 = explode(",", $Q18_2);  // (implode) Join array elements with a string
}
$Q19_2 = $SimpleAnswers[19];
if ($Q19_2 != null) {
    $Q19_2 = explode(",", $Q19_2);  // (implode) Join array elements with a string
}
$Q20_2 = $SimpleAnswers[20];
if ($Q20_2 != null) {
    $Q20_2 = explode(",", $Q20_2);  // (implode) Join array elements with a string
}
$ans_21;
$Q21 = $SimpleAnswers[21];
if ($Q21 != null &&  strstr($Q21, ',')) {
    $Q21 = explode(",", $Q21);  // (implode) Join array elements with a string
    if($Q21[0] == 'oui'){
    $ans_21 = ' <tr>
        <td colspan="6" class="Q21" ><strong>Avez-vous développé des actions/réflexions en matière de prévention ? </strong></td>
        <td class="answer">'.$Q21[0].'</td> 	
    </tr>
    <tr>
        <td colspan="7"><strong>Si oui, pouvez-vous préciser lesquelles?</strong></td>
    </tr>
    <tr>
        <td colspan="7" class="answer">'.$Q21[1].'</td>
    </tr>

    <tr>
        <td colspan="7"><strong>Pouvez-vous nous indiquer quels sont selon vous les freins au développement de ces pratiques?</strong></td>
    </tr>
    <tr>
        <td colspan="7" class="answer">'.$Q21[2].'</td>
    </tr> ';
}else{
    $ans_21 = ' <tr>
        <td colspan="6" class="Q21" ><strong>Avez-vous développé des actions/réflexions en matière de prévention ? </strong></td>
        <td class="answer">'.$Q21[0].'</td> 	
    </tr>
   
    <tr>
        <td colspan="7"><strong>Si non, pourquoi?</strong></td>
    </tr>
    <tr>
        <td colspan="7" class="answer">'.$Q21[1].'</td>
    </tr>
    <tr>
        <td colspan="7"><strong>Pouvez-vous nous indiquer quels sont selon vous les freins au développement de ces pratiques?</strong></td>
    </tr>
    <tr>
        <td colspan="7" class="answer">'.$Q21[2].'</td>
    </tr>';
}
}
$ans_22;
$Q22 = $SimpleAnswers[22];
if ($Q22 != null &&  strstr($Q22, ',')) {
    $Q22 = explode(",", $Q22);  // (implode) Join array elements with a string
    
 if($Q22[0] == 'oui'){
        $ans_22 ='   <tr>
        <td colspan="6" class="Q22" ><strong>Pratiquez-vous le concassage de bétons directement sur vos chantiers ?  </strong></td>
        <td class="answer">'. $Q22[0].'</td> 	
    </tr>
    <tr>
        <td colspan="7"><strong>Si oui, pouvez-vous nous indiquer si vous disposez de votre propre concasseur ou si vous le louez pour des campagnes ponctuelles de concassage ?</strong></td>
    </tr>
    <tr>
        <td colspan="7" class="answer">'. $Q22[1].'</td>
    </tr>

    <tr>
        <td colspan="7"><strong>Pouvez-vous estimer le tonnage de bétons concassés sur vos chantiers en 2015 ?</strong></td>
    </tr>
    <tr>
        <td colspan="7" class="answer">'. $Q22[2].'</td>
    </tr>';
    }else{
       $ans_22 ='<tr>
        <td colspan="6" class="Q22" ><strong>Pratiquez-vous le concassage de bétons directement sur vos chantiers ?  </strong></td>
        <td class="answer">'. $Q22[0].'</td> 	
    </tr>
    
    <tr>
        <td colspan="7"><strong>Pouvez-vous estimer le tonnage de bétons concassés sur vos chantiers en 2015 ?</strong></td>
    </tr>
    <tr>
        <td colspan="7" class="answer">'. $Q22[1].'</td>
    </tr>'; 
    }
}

$ans_23;
$Q23 = $SimpleAnswers[23];
if ($Q23 != null &&  strstr($Q23, ',')) {
    $Q23 = explode(",", $Q23);  // (implode) Join array elements with a string
    
    $ans_23 = '<tr>

    <td colspan="6" class="Q23" ><strong>Triez-vous  vos déchets sur chantiers?</strong></td>
        <td class="answer">'. $Q23[0].'</td> 	
    </tr>
    <tr>
        <td colspan="7"><strong>Si non, pourquoi?</strong></td>
    </tr>
    <tr>
        <td colspan="7" class="answer">'.$Q23[1].'</td>
    </tr> ';
}else{
    $ans_23 = '<tr>
    <td colspan="6" class="Q23" ><strong>Triez-vous  vos déchets sur chantiers?</strong></td>
        <td class="answer">'.$Q23.'</td> 	
    </tr>';
}

$ans_28;
$Q28 = $SimpleAnswers[28];
if (strstr($Q28, ',')) {
    $Q28 = explode(",", $Q28);  
    
    $ans_28 = '<tr>
        <td colspan="6" class="Q28"><strong>Avez-vous mis en place une traçabilité et un suivi des déchets produits sur vos chantiers et des exutoires utilisés?</strong></td>
        <td class="answer">'. $Q28[0].'</td>       
    </tr>
    <tr>
        <td colspan="7"><strong>Si non, pourquoi ? </strong></td>
    </tr>
    <tr>
        <td colspan="7" class="answer">'.$Q28[1].'</td>
    </tr> ';
}else{
    $ans_28 = '<tr>
        <td colspan="6" class="Q28"><strong>Avez-vous mis en place une traçabilité et un suivi des déchets produits sur vos chantiers et des exutoires utilisés?</strong></td>
        <td class="answer">'. $Q28.'</td>       
    </tr>';
}

$ans_30;
$Q30 = $SimpleAnswers[30];
if ($Q30 != null &&  strstr($Q30, ',')) {
    $Q30 = explode(",", $Q30);  // (implode) Join array elements with a string
    
    $ans_30 = '<tr>
        <td colspan="5" class="Q30"><strong>Utilisez-vous en approvisionnement pour vos chantiers des matériaux recyclés?</strong></td>
        <td colspan="2" class="answer">'.$Q30[0].'</td>       
    </tr>
    <tr>
        <td colspan="7"><strong>Si non, pourquoi ? </strong></td>
    </tr>
    <tr>
        <td colspan="7" class="answer">'.$Q30[1].'</td>
    </tr>';
}else{
    $ans_30 = '<tr>
        <td colspan="5" class="Q30"><strong>Utilisez-vous en approvisionnement pour vos chantiers des matériaux recyclés?</strong></td>
        <td colspan="2" class="answer">'.$Q30.'</td>       
    </tr>';
}

$ans_2 = '';
if($SimpleAnswers[1]=='non' || $SimpleAnswers[1]==''){
   $ans_2 = '	<tr>
        <td colspan="2" class="Q2"><strong>Si non, pour quelles raisons?</strong></td>
        <td colspan="5" class="answer">' . $SimpleAnswers[2] . '</td> 
	  		
    </tr>'; 
}


$html .= '<h1  style="text-align:center;" >Enquête auprès des entreprises de Bâtiment spécialisées dans la démolition</h1> 
<br>
<h4  style="text-align:center; color:red;" >Questionnaire à usage exclusif du Réseau des CERC</h4>
<p>&nbsp;</p>
<table>
    <tbody>
	<tr>
        <td colspan="6" class="Q1"><strong> Au cours de l’année 2015, sur vos différents chantiers, votre entreprise a-t-elle généré des déchets?</strong></td>
        <td class="answer">' . $SimpleAnswers[1] . '</td> 
			
    </tr>';

$html.= $ans_2;
$html.='</tbody>
</table>    
<h2 style=" color:#006064;">1. Description del’entreprise</h2>
<table>
    <tbody>
	<tr>
        <td class="Q3"><strong>Q3. Nom de l\'établissement :</strong></td>
        <td colspan="2" class="answer">' .$ContactAnswers['Entreprise']. '</td> 
			
    </tr>
	<tr >
        <td class="Q4"><strong>Q4. Adresse de l\'établissement:</strong></td>
        <td colspan="3" class="answer">' .$SimpleAnswers[4]. '</td> 
	  		
    </tr>
    <tr>
        <td colspan="7" class="Q5"><strong>Q5. Personne à joindre si besoin deprécisions:</strong></td>	
    </tr>
    <tr>
        <td colspan="7">Nom: &nbsp; <div class="answer">' .$ContactAnswers['new_contact']. ' </div> &nbsp; &nbsp; Téléphone:&nbsp; ' . $ContactAnswers[new_telephone] . '&nbsp; &nbsp; E-mail: ' . $ContactAnswers[new_mail] . ' </td>	
    </tr>
    <tr>
        <td class="Q6"><strong>Q6. Votre code APE ?</strong></td>
        <td colspan="3" >' . $SimpleAnswers[6] . '</td> 
      		
    </tr>
    <tr>
        <td class="Q7"><strong>Q7. Votre effectif salarié ?</strong></td>
        <td colspan="3" >' . $SimpleAnswers[7] . '</td> 
      		
    </tr>
    <tr>
        <td colspan="2" class="Q8" ><strong>Q8. Le chiffre d’affaires de votre établissement en 2015? </strong></td>
        <td colspan="2">' . $SimpleAnswers[8] . ' K€</td> 
      		
    </tr>
    <tr>
        <td colspan="4" class="Q9"><strong>Q9. Sur quelles zones géographiques réalisez-vous votre chiffre d’affaires ?</strong></td>
        
      		
    </tr>
    <tr>
        <td colspan="4" >
        <ul>
           <li>Sur la ville de Paris (75): ' . $Q9[0] . '  % </li>
           <li>En Petite couronne hors ville de Paris (92, 93, 94): ' . $Q9[1] . ' % </li>
           <li>En Grande couronne (77, 78, 91, 95): ' . $Q9[2] . '  %</li>
           <li>Hors Île-de-France: ' . $Q9[3] . '  %</li>
        </ul>
        </td>    		
    </tr>
    <tr>
        <td colspan="4" class="Q10"><strong>Q10. Comment votre chiffre d’affaires se répartit-il en fonction des activités suivantes ?</strong></td>
        
    </tr>
    <tr>
        <td colspan="4">
        <ul>
           <li>Démolition – technicité courante:  ' . $Q10[0] . '   %</li>
           <li>Démolition à l’explosif: ' . $Q10[1] . '  %</li>
           <li>Découpe du béton: ' . $Q10[2] . '   %</li>
           <li>Désamiantage: ' . $Q10[3] . '  %</li>
           <li>Curage: ' . $Q10[4] . '  %</li>
           <li>Autres activité: ' . $Q10[5] . '  %</li>
        </ul>
        </td>    		
    </tr>
     <tr>
        <td colspan="4" class="Q11"><strong>Q11. Sur quels types de bâtiment votre entreprise œuvre-t-elle ?</strong></td>
    </tr>
    <tr>
        <td colspan="4">
        <ul>
           <li>Logements:  ' . $Q11[0] . '  % </li>
           <li>Bureaux et administrations : ' . $Q11[1] . ' %</li>
           <li>Commerces: ' . $Q11[2] . '  %</li>
           <li>Désamiantage: ' . $Q11[3] . '  %</li>
           <li>Bâtiments industriels: ' . $Q11[4] . '  %</li>
           <li>Enseignement/éducation:  ' . $Q11[5] . '  % </li>
           <li>Complexe sportif:   ' . $Q11[6] . '  %</li>
           <li>Secteur santé:   ' . $Q11[7] . '  %</li>
           <li>Autre:  ' . $Q11[8] . '   % (' . $Q11[9] . ')</li>
        </ul>   
        </td>    		
    </tr>
	</tbody>
</table>';

$html .= '<p>&nbsp;</p>
<h2>2. La comptabilité des déchets</h2>
<table>
    <tbody>
	<tr>
        <td colspan="6" class="Q12"><strong>Q12.  Au cours de l’année 2015, sur vos différents chantiers, votre entreprise a-t-elle généré des déchets?</strong></td>
        <td >' . $SimpleAnswers[12] . '</td> 
			
    </tr>
	<tr>
        <td colspan="7" class="Q13"><strong>Q13. Pouvez-vous nous indiquer:</strong></td>
        
	  		
    </tr>
    <tr>
	<td colspan="7">
        <ul>
           <li>La quantité totale de déchets générés sur vos chantiers en 2015?   ' . $Q13[0] . ' ' . $Q13[1] . ' </li>
           <li>La quantité moyenne de déchets générés sur un chantier? ' . $Q13[2] . ' ' . $Q13[3] . '  </li>
        </ul>   
        </td>  
    </tr>
    <tr>
        <td colspan="6" class="Q14"><strong>Q14. Si non, Etes-vous en mesure d’estimer cette quantité, même approximativement?</strong></td>
        <td>' . $SimpleAnswers[14] . '</td>
    </tr>
    <tr>
        <td colspan="4" class="Q15"><strong>Q15. Si oui, Pouvez-vous nous indiquer cette fourchette ?</strong></td>
        <td colspan="3"> Min: ' . $Q15[0] . '  &nbsp; Max:' . $Q15[1] . ' </td>
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
            <td>' . $Q16[0] . '</td>
            <td>' . $Q16[1] . '</td>
        </tr>
        <tr>
            <th scope="row">Déchets non dangereux non inertes</th>
            <td>' . $Q16[2] . '</td>
            <td>' . $Q16[3] . '</td>
        </tr>
        <tr>
            <th scope="row">Déchets dangereux</th>
            <td>' . $Q16[4] . '</td>
            <td>' . $Q16[5] . '</td>
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
            <th>Activité</th>
            <th>DI %</th>
            <th>DNIND %</th>
            <th>DD %</th>


        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        <tr>
            <th scope="row">Démolition - technicité courante </th>
            
            <td>'.$Q17_DI[0].'</td>
            <td>'.$Q17_DNIND[0].'</td>
            <td>'.$Q17_DD[0].'</td>
        </tr>
        <tr>
            <th scope="row">Démolition à l\'explosif</th>
            
            <td>'.$Q17_DI[1].'</td>
            <td>'.$Q17_DNIND[1].'</td>
            <td>'.$Q17_DD[1].'</td>
        </tr>
        <tr>
            <th scope="row">Découpe du béton (par carottage ou sciage)</th>
            
            <td>'.$Q17_DI[2].'</td>
            <td>'.$Q17_DNIND[2].'</td>
            <td>'.$Q17_DD[2].'</td>  
        </tr>
        <tr>
            <th scope="row">Désamiantage</th>

            <td>'.$Q17_DI[3].'</td>
            <td>'.$Q17_DNIND[3].'</td>
            <td>'.$Q17_DD[3].'</td>
        </tr>
        <tr>
            <th scope="row">Curage</th>
            
          <td>'.$Q17_DI[4].'</td>
            <td>'.$Q17_DNIND[4].'</td>
            <td>'.$Q17_DD[4].'</td>
        </tr>
        <tr>
            <th scope="row">Autres activités</th>
            
            <td>'.$Q17_DI[5].'</td>
            <td>'.$Q17_DNIND[5].'</td>
            <td>'.$Q17_DD[5].'</td>  
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
                    <th>Les  déchets inertes</th>
                    <th>oui/non</th>
                    <th>Quantité</th>

                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody class="qte">
                <tr>
                    <th scope="row">1. Terres et matériaux meubles non pollués</th>
                    
                    
                    <td>'.$Q18_oui_non[0].'</td>
                    <td>'.$Q18_qte[0].'</td>
                   
                </tr>
                <tr>
                    <th scope="row">2. Graves et matériaux rocheux</th>
                     
                    <td>'.$Q18_oui_non[1].'</td>
                    <td>'.$Q18_qte[1].'</td>
                 
                </tr>
                <tr>
                    <th scope="row">3. Béton  sans ferraille ou peu ferraillé</th>
                  
                    <td>'.$Q18_oui_non[2].'</td>
                    <td>'.$Q18_qte[2].'</td>
                   
                </tr>
                <tr>
                    <th scope="row">4. Briques, tuiles et céramiques</th>
                   
                    <td>'.$Q18_oui_non[3].'</td>
                    <td>'.$Q18_qte[3].'</td>
                  
                </tr>
                <tr>
                    <th scope="row">5. Mélanges de déchets inertes</th>
                 
                    <td>'.$Q18_oui_non[4].'</td>
                    <td>'.$Q18_qte[4].'</td>
                  
                </tr>
                <tr>
                    <th scope="row">6. Autres déchets inertes </th>
                    
                    <td>'.$Q18_oui_non[5].'</td>
                    <td>'.$Q18_qte[5].'</td>
                   
                </tr>
                <tr>
                    <td colspan="3">Précisez: '.$Q18_autres.'</td>
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
                    <th>Exutoires pour les déchets inertes</th>
                    <th> %</th>
                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody class="percent">
                <tr>
                    <th scope="row">Réemploi sur site</th>
                    <td>'.$Q18_2[0].'</td>

                </tr>
                <tr>
                    <th scope="row">Réutilisation sur un autre site</th>
                    <td>'.$Q18_2[1].'</td>

                </tr>
                <tr>
                    <th scope="row">Aménagement paysager</th>
                    <td>'.$Q18_2[2].'</td>
                </tr>
                <tr>
                    <th scope="row">Déchèterie / Centre de regroupement / centre de tri</th>
                    <td>'.$Q18_2[3].'</td>

                </tr>
                <tr>
                    <th scope="row">Plateforme de recyclage de déchets inertes</th>
                    <td>'.$Q18_2[4].'</td>

                </tr>
                <tr>
                    <th scope="row">Carrière</th>
                    <td>'.$Q18_2[5].'</td>
                </tr>
                <tr>
                    <th scope="row">ISDND (recouvrement, aménagements)</th>
                    <td>'.$Q18_2[6].'</td>

                </tr>
                <tr>
                    <th scope="row">ISDI</th>
                    <td>'.$Q18_2[7].'</td>

                </tr>
                <tr>
                    <th scope="row">Prise en charge par un collecteur</th>
                    <td>'.$Q18_2[8].'</td>
                </tr>
                <tr>
                    <th scope="row">'.$Q18_2[10].'</th>
                    <td>'.$Q18_2[9].'</td>
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
                <tr>
                    <th>Les déchets non inertes non dangereux</th>
                    <th>oui/non</th>
                    <th>Quantité</th>

                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody class="qte">
                <tr>
                    <th scope="row">1. Mélanges déchets non dangereux non inertes (DIB)</th>
                    
                    
                    <td>'.$Q19_oui_non[0].'</td>
                        <td>'.$Q19_qte[0].'</td>
                   
                </tr>
                <tr>
                    <th scope="row">2. Métaux</th>
                     
                    <td>'.$Q19_oui_non[1].'</td>
                        <td>'.$Q19_qte[1].'</td>
                 
                </tr>
                <tr>
                    <th scope="row">3. Plâtre - plaques et carreaux</th>
                  
                    <td>'.$Q19_oui_non[2].'</td>
                        <td>'.$Q19_qte[2].'</td>
                   
                </tr>
                <tr>
                    <th scope="row">4. Plâtre - enduits sur supports inertes</th>
                   
                    <td>'.$Q19_oui_non[3].'</td>
                        <td>'.$Q19_qte[3].'</td>
                  
                </tr>
                <tr>
                    <th scope="row">5. Plastiques</th>
                 
                    <td>'.$Q19_oui_non[4].'</td>
                        <td>'.$Q19_qte[4].'</td>
                  
                </tr>
                <tr>
                    <th scope="row">6. Vitrages</th>
                    
                    <td>'.$Q19_oui_non[5].'</td>
                        <td>'.$Q19_qte[5].'</td>
                   
                </tr>
                <tr>
                     <th scope="row">7. Bois brut ou faiblement adjuventés</th>
                    
                    <td>'.$Q19_oui_non[6].'</td>
                        <td>'.$Q19_qte[6].'</td>
                </tr>
                <tr>
                     <th scope="row">8. Déchets végétaux</th>
                    
                    <td>'.$Q19_oui_non[7].'</td>
                        <td>'.$Q19_qte[7].'</td>
                </tr>
                <tr>
                     <th scope="row">9. Déchets résiduels issus de l\'usage et occupation des bâtiments</th>
                    
                    <td>'.$Q19_oui_non[8].'</td>
                        <td>'.$Q19_qte[8].'</td>
                </tr>
                <tr>
                     <th scope="row">10. Autres déchets non dangereux</th>
                    
                        <td>'.$Q19_oui_non[9].'</td>
                        <td>'.$Q19_qte[9].'</td>
                   
                </tr>
                <tr>
                    <td colspan="3">Précisez: '.$Q19_autres.'</td>
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
            <th>Exutoires pour les déchets non dangereux</th>
            <th> %</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody class="percent">
        <tr>
            <th scope="row">Réemploi sur site</th>
            <td>'.$Q19_2[0].'</td>

        </tr>
        <tr>
            <th scope="row">Réutilisation sur un autre site</th>
            <td>'.$Q19_2[1].'</td>

        </tr>
        <tr>
            <th scope="row">Déchèterie / Centre de regroupement / centre de tri</th>
            <td>'.$Q19_2[2].'</td>
        </tr>
        <tr>
            <th scope="row">Centre de valorisation matière (ex : recyclage du plâtre, broyage bois, …)</th>
            <td>'.$Q19_2[3].'</td>

        </tr>
        <tr>
            <th scope="row">Eco-organisme d’une filière REP</th>
            <td>'.$Q19_2[4].'</td>

        </tr>
        <tr>
            <th scope="row">Centre de valorization énergétique</th>
            <td>'.$Q19_2[5].'</td>
        </tr>
        <tr>
            <th scope="row">ISDND </th>
            <td>'.$Q19_2[6].'</td>

        </tr>
        <tr>
            <th scope="row">Prise en charge par un collecteur</th>
            <td>'.$Q19_2[7].'</td>

        </tr>
        <tr>
            <th scope="row">'.$Q19_2[9].'</th>
            <td>'.$Q19_2[8].'</td>
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
            <th>Les déchets dangereux</th>
            <th>oui/non</th>
            <th>Quantité</th>

        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody class="qte">
        <tr>
            <th scope="row">1. Terres et matériaux meubles pollués</th>


            <td>'.$Q20_oui_non[0].'</td>
            <td>'.$Q20_qte[0].'</td>

        </tr>
        <tr>
            <th scope="row">2. Amiante</th>

            <td>'.$Q20_oui_non[1].'</td>
            <td>'.$Q20_qte[1].'</td>

        </tr>
        <tr>
            <th scope="row">3. Bois traités <small>(traverses chemin fer, poteaux EDF ou FT, bois recouvert de peintures au plomb, etc.)</small></th>

            <td>'.$Q20_oui_non[2].'</td>
            <td>'.$Q20_qte[2].'</td>

        </tr>
        <tr>
            <th scope="row">4. Lampes</th>

            <td>'.$Q20_oui_non[3].'</td>
            <td>'.$Q20_qte[3].'</td>

        </tr>
        <tr>
            <th scope="row">5. Déchets d\'équipements électriques et électroniques (DEEE)</th>

            <td>'.$Q20_oui_non[4].'</td>
            <td>'.$Q20_qte[4].'</td>

        </tr>
        <tr>
            <th scope="row">6. Equipements techniques (hors DEEE)</th>

            <td>'.$Q20_oui_non[5].'</td>
            <td>'.$Q20_qte[5].'</td>

        </tr>
        <tr>
            <th scope="row">7. Autres déchets dangereux</th>

                    <td>'.$Q20_oui_non[6].'</td>
                    <td>'.$Q20_qte[6].'</td>
                   
                </tr>
                <tr>
                    <td colspan="3">Précisez: '.$Q20_autres.'</td>
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
            <th>Exutoires pour les déchets dangereux</th>
            <th> %</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody class="percent">
        <tr>
            <th scope="row">Traitement et réemploi sur site</th>
            <td>'.$Q20_2[0].'</td>

        </tr>
        <tr>
            <th scope="row">Déchèterie / Centre de regroupement / centre de tri</th>
            <td>'.$Q20_2[1].'</td>

        </tr>
        <tr>
            <th scope="row">Valorisation (ex : vitrification amiante, traitement des terres polluées, …)</th>
            <td>'.$Q20_2[2].'</td>
        </tr>
        <tr>
            <th scope="row">Eco-organisme d’une filière REP</th>
            <td>'.$Q20_2[3].'</td>

        </tr>
        <tr>
            <th scope="row">UIDD</th>
            <td>'.$Q20_2[4].'</td>

        </tr>
        <tr>
            <th scope="row">Stockage d’amiante en ISDND</th>
            <td>'.$Q20_2[5].'</td>
        </tr>
        <tr>
            <th scope="row">ISDD</th>
            <td>'.$Q20_2[6].'</td>

        </tr>
        <tr>
            <th scope="row">Prise en charge par un collecteur</th>
            <td>'.$Q20_2[7].'</td>

        </tr>
        <tr>
            <th scope="row">'.$Q20_2[9].'</th>
            <td>'.$Q20_2[8].'</td>
        </tr>
        
    </tbody>
    <!--Table body-->
</table>

</td>  
</tr>
    
    
    	</tbody>
</table>
<h2>3. Votre positionnement sur la gestion des déchets</h2>
<table>
    <tbody>';
$html.=$ans_21;
$html.=$ans_22;
$html.=$ans_23;
    
    
  $html.='  

    <tr>
        <td colspan="7" class="Q24"><strong>Comment jugez-vous le maillage en points de collecte en Île-de-France ?</strong></td>
    </tr>
    <tr>
        <td colspan="7">' . $SimpleAnswers[24] . '</td>
    </tr> 
    <tr>
        <td colspan="7" class="Q25"><strong>Comment jugez-vous le maillage en installations de traitement en Île-de-France ?</strong></td>
    </tr>
    <tr>
        <td colspan="7">' . $SimpleAnswers[25] . '</td>
    </tr> 

	</tbody>
</table>';


$html .= '<table>
  <tbody>
    <tr>
        <td colspan="7" ><strong>Q26. Avez-vous connaissance de site internet/annuaires permettant de connaître les points de collecte et/ou installations de traitement de vos déchets ?</strong></td>
             
    </tr>
   
    <tr>
        <td colspan="7"> ' . $SimpleAnswers[26] . '</td>
    </tr> 
    <tr>
        <td colspan="7" class="Q27"><strong>Estimez-vous avoir une connaissance suffisante sur les différentes filières ?</strong></td>
    </tr>
    <tr>
        <td colspan="7">' . $SimpleAnswers[27] . '</td>
    </tr>';
$html.=$ans_28;
    
    
  $html.='

    <tr>
        <td colspan="6" class="Q29"><strong>Vous êtes-vous fixé des objectifs chiffrés de valorisation des déchets produits sur chantiers?</strong></td>
        <td>' . $SimpleAnswers[29] . '</td>       
    </tr>';
$html.=$ans_30;
    
    
  $html.='    <tr>
        <td colspan="7" class="Q31"><strong>De manière générale, quelles sont les difficultés rencontrées par votre entreprise pour gérer vos déchets?</strong></td>
    </tr>
    <tr>
        <td colspan="7">' . $SimpleAnswers[31] . '</td>
    </tr>
    <tr>
        <td colspan="7" class="Q32"><strong>Quels seraient vos besoins pour améliorer la gestion de vos déchets?</strong></td>
    </tr>
    <tr>
        <td colspan="7">' . $SimpleAnswers[32] . '</td>
    </tr>
    	</tbody>
</table>';

$Q33 = $SimpleAnswers[33];
if ($Q33 != null) {
    $Q33 = explode(",", $Q33);  // (implode) Join array elements with a string
}
$html .= '<h2>4. Relation avec les maîtres d’ouvrages</h2>
<table>
    <tbody>
    <tr>
        <td colspan="4" class="Q33"><strong>Avez-vous déjà eu des exigences particulières de la part des maîtres d\'ouvrage sur la thématique des déchets?</strong></td>
        
    </tr>
    <tr>
        <td colspan="4">
        <ul>
           <li>Réalisation d’un SOGED/SODED:  ' . $Q33[0] . '  </li>
           <li>Suivi des déchets par des bordereaux:  ' . $Q33[1] . '</li>
           <li>Objectifs de valorisation:  ' . $Q33[2] . '</li>
           <li>Exigences environnementales:  ' . $Q33[3] . '</li>
           <li>AMO environnementale:  ' . $Q33[4] . '</li>
           <li>Démarche de certification:  ' . $Q33[5] . '</li>
        </ul>
        </td>    		
    </tr>
    </tbody>
</table>';




// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------
//Close and output PDF document
//if($action=='download'){
//$pdf->Output( 'Demande_Devis.pdf', 'D'); 
//}else{
//ob_clean();
$pdf->Output('survey.pdf', 'I');
//ob_end_clean();
//}



/*
I: send the file inline to the browser (default).
D: send to the browser and force a file download with the name given by name.
F: save to a local server file with the name given by name.
S: return the document as a string (name is ignored).
FI: equivalent to F + I option
FD: equivalent to F + D option
E: return the document as base64 mime multi-part email attachment (RFC 2045)*/



//============================================================+
// END OF FILE
//============================================================+
