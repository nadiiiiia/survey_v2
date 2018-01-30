<?php 
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
        <td colspan="6" class="Q21" ><strong>Q21. Avez-vous développé des actions/réflexions en matière de prévention ? </strong></td>
         </tr>
          <tr>
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
        <td colspan="6" class="Q21" ><strong>Q21. Avez-vous développé des actions/réflexions en matière de prévention ? </strong></td>
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
        <td colspan="6" class="Q22" ><strong>Q22. Pratiquez-vous le concassage de bétons directement sur vos chantiers ?  </strong></td>
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
        <td colspan="6" class="Q22" ><strong>Q22. Pratiquez-vous le concassage de bétons directement sur vos chantiers ?  </strong></td>
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

    <td colspan="6" class="Q23" ><strong>Q23. Triez-vous  vos déchets sur chantiers?</strong></td>
       </tr>
       <tr><td class="answer">'. $Q23[0].'</td> 	
    </tr>
    <tr>
        <td colspan="7"><strong>Si non, pourquoi?</strong></td>
    </tr>
    <tr>
        <td colspan="7" class="answer">'.$Q23[1].'</td>
    </tr> ';
}else{
    $ans_23 = '<tr>
    <td colspan="6" class="Q23" ><strong>Q23. Triez-vous  vos déchets sur chantiers?</strong></td>
       </tr>
       <tr><td class="answer">'.$Q23.'</td> 	
    </tr>';
}

$ans_28;
$Q28 = $SimpleAnswers[28];
if (strstr($Q28, ',')) {
    $Q28 = explode(",", $Q28);  
    
    $ans_28 = '<tr>
        <td colspan="6" class="Q28"><strong>Q28. Avez-vous mis en place une traçabilité et un suivi des déchets produits sur vos chantiers et des exutoires utilisés?</strong></td>
         </tr>
          <tr><td class="answer">'. $Q28[0].'</td>       
    </tr>
    <tr>
        <td colspan="7"><strong>Si non, pourquoi ? </strong></td>
    </tr>
    <tr>
        <td colspan="7" class="answer">'.$Q28[1].'</td>
    </tr> ';
}else{
    $ans_28 = '<tr>
        <td colspan="6" class="Q28"><strong>Q28. Avez-vous mis en place une traçabilité et un suivi des déchets produits sur vos chantiers et des exutoires utilisés?</strong></td>
         </tr>
          <tr><td class="answer">'. $Q28.'</td>       
    </tr>';
}

$ans_30;
$Q30 = $SimpleAnswers[30];
if ($Q30 != null &&  strstr($Q30, ',')) {
    $Q30 = explode(",", $Q30);  // (implode) Join array elements with a string
    
    $ans_30 = '<tr>
        <td colspan="5" class="Q30"><strong>Q30. Utilisez-vous en approvisionnement pour vos chantiers des matériaux recyclés?</strong></td>
        </tr>
         <tr><td colspan="2" class="answer">'.$Q30[0].'</td>       
    </tr>
    <tr>
        <td colspan="7"><strong>Si non, pourquoi ? </strong></td>
    </tr>
    <tr>
        <td colspan="7" class="answer">'.$Q30[1].'</td>
    </tr>';
}else{
    $ans_30 = '<tr>
        <td colspan="5" class="Q30"><strong>Q30. Utilisez-vous en approvisionnement pour vos chantiers des matériaux recyclés?</strong></td>
         </tr>
          <tr>
          <td colspan="2" class="answer">'.$Q30.'</td>       
    </tr>';
}

$ans_2 = '';
if($SimpleAnswers[1]=='non' || $SimpleAnswers[1]==''){
   $ans_2 = '	<tr>
        <td colspan="2" class="Q2"><strong>Q2. Pour quelles raisons?</strong></td>
         </tr>
          <tr><td colspan="5" class="answer">' . $SimpleAnswers[2] . '</td> 
	  		
    </tr>'; 
}

?>

