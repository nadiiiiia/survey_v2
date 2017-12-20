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
table, td, th { 
    border: 1px solid black;  
    padding: 7px;
    text-align: left;
}
table {
    border-collapse: collapse;
	font-size: large;
    width: 100%;
}
</style>';

$html .= '<h1  style="text-align:center;" >Enquête auprès des entreprises de Bâtiment spécialisées dans la démolition</h1> 
<br>
<h4  style="text-align:center; color:red;" >Questionnaire à usage exclusif du Réseau des CERC</h4>
<p>&nbsp;</p>
<table>
    <tbody>
	<tr>
        <td colspan="6" class="Q1"><strong> Au cours de l’année 2015, sur vos différents chantiers, votre entreprise a-t-elle généré des déchets?</strong></td>
        <td >'.$SimpleAnswers[1].'</td> 
			
    </tr>
	<tr>
        <td colspan="2" class="Q2"><strong>Si non, pour quelles raisons?</strong></td>
        <td colspan="5">'.$SimpleAnswers[2].'</td> 
	  		
    </tr>
    </tbody>
</table>    
<h2>1. Description del’entreprise</h2>
<table>
    <tbody>
	<tr>
        <td class="Q3"><strong>Nom de l\'établissement :</strong></td>
        <td colspan="3">'.$SimpleAnswers[3].'</td> 
			
    </tr>
	<tr >
        <td class="Q4"><strong>Adresse de l\'établissement:</strong></td>
        <td colspan="3">'.$SimpleAnswers[4].'</td> 
	  		
    </tr>
    <tr>
        <td colspan="7" class="Q5"><strong>Personne à joindre si besoin deprécisions:</strong></td>	
    </tr>
    <tr>
        <td colspan="7">Nom: &nbsp; &nbsp; &nbsp; Téléphone:&nbsp; &nbsp; &nbsp; E-mail:  </td>	
    </tr>
    <tr>
        <td class="Q6"><strong>Votre code APE ?</strong></td>
        <td colspan="3" >'.$SimpleAnswers[6].'</td> 
      		
    </tr>
    <tr>
        <td class="Q7"><strong>Votre effectif salarié ?</strong></td>
        <td colspan="3" >'.$SimpleAnswers[7].'</td> 
      		
    </tr>
    <tr>
        <td colspan="2" class="Q8" ><strong>Le chiffre d’affaires de votre établissement en 2015? </strong></td>
        <td colspan="2">'.$SimpleAnswers[8].' K€</td> 
      		
    </tr>
    <tr>
        <td colspan="4" class="Q9"><strong>Sur quelles zones géographiques réalisez-vous votre chiffre d’affaires ?</strong></td>
        
      		
    </tr>
    <tr>
        <td colspan="4" >
        <ul>
           <li>Sur la ville de Paris (75):    </li>
           <li>En Petite couronne hors ville de Paris (92, 93, 94): </li>
           <li>En Grande couronne (77, 78, 91, 95): </li>
           <li>Hors Île-de-France: </li>
        </ul>
        </td>    		
    </tr>
    <tr>
        <td colspan="4" class="Q10"><strong>Comment votre chiffre d’affaires se répartit-il en fonction des activités suivantes ?</strong></td>
        
    </tr>
    <tr>
        <td colspan="4">
        <ul>
           <li>Démolition – technicité courante:    </li>
           <li>Démolition à l’explosif: </li>
           <li>Découpe du béton: </li>
           <li>Désamiantage: </li>
           <li>Curage: </li>
           <li>Autres activité: </li>
        </ul>
        </td>    		
    </tr>
     <tr>
        <td colspan="4" class="Q11"><strong>Sur quels types de bâtiment votre entreprise œuvre-t-elle ?</strong></td>
    </tr>
    <tr>
        <td colspan="4">
        <ul>
           <li>Logements:    </li>
           <li>Bureaux et administrations : </li>
           <li>Commerces: </li>
           <li>Bâtiments industriels: </li>
           <li>Enseignement/éducation:    </li>
           <li>Complexe sportif:    </li>
           <li>Secteur santé:    </li>
           <li>Autre:    </li>
        </ul>   
        </td>    		
    </tr>
	</tbody>
</table>';

$html.= '<p>&nbsp;</p>
<h2>2. La comptabilité des déchets</h2>
<table>
    <tbody>
	<tr>
        <td colspan="6" class="Q12"><strong> Au cours de l’année 2015, sur vos différents chantiers, votre entreprise a-t-elle généré des déchets?</strong></td>
        <td >'.$SimpleAnswers[12].'</td> 
			
    </tr>
	<tr>
        <td colspan="7" class="Q13"><strong>Si oui, Pouvez-vous nous indiquer:</strong></td>
        
	  		
    </tr>
    <tr>
	<td colspan="7">
        <ul>
           <li>La quantité totale de déchets générés sur vos chantiers en 2015?    </li>
           <li>La quantité moyenne de déchets générés sur un chantier? </li>
        </ul>   
        </td>  
    </tr>
    <tr>
        <td colspan="6" class="Q14"><strong>Si non, Etes-vous en mesure d’estimer cette quantité, même approximativement?</strong></td>
        <td>'.$SimpleAnswers[14].'</td>
    </tr>
    <tr>
        <td colspan="4" class="Q15"><strong>Si oui, Pouvez-vous nous indiquer cette fourchette ?</strong></td>
        <td colspan="3"> Min: &nbsp; Max: </td>
    </tr>
    <tr>
        <td colspan="7" class="Q16"><strong>Pouvez-vous nous indiquer la répartition des déchets produits sur vos chantiers, par grande nature?</strong></td>
    </tr>
    <tr>
        <td colspan="7">Reponse tableau Q16</td>
    </tr>
     <tr>
        <td colspan="7" class="Q17"><strong>Pour chacune de vos activités, comme se répartit cette quantité?</strong></td>
    </tr>
    <tr>
        <td colspan="7">Reponse tableau Q17</td>
    </tr>
     <tr>
        <td colspan="7" class="Q18"><strong>Pouvez-vous nous préciser la nature de vos déchets inertes et les exutoires utilisés?</strong></td>
    </tr>
    <tr>
        <td colspan="7">Reponse tableau Q18</td>
    </tr>
         <tr>
        <td colspan="7" class="Q19"><strong>Pouvez-vous nous préciser la nature de vos déchets non dangereux non inertes et les exutoires utilisés ?</strong></td>
    </tr>
    <tr>
        <td colspan="7">Reponse tableau Q19</td>
    </tr>
     <tr>
        <td colspan="7" class="Q20"><strong>Pouvez-vous nous préciser la nature de vos déchets dangereux et les exutoires utilisés ?</strong></td>
    </tr>
    <tr>
        <td colspan="7">Reponse tableau Q20</td>
    </tr>
    	</tbody>
</table>
<h2>3. Votre positionnement sur la gestion des déchets</h2>
<table>
    <tbody>

    <tr>
        <td colspan="6" class="Q21" ><strong>Avez-vous développé des actions/réflexions en matière de prévention ? </strong></td>
        <td></td> 	
    </tr>
    <tr>
        <td colspan="7"><strong>Si oui, pouvez-vous préciser lesquelles?</strong></td>
    </tr>
    <tr>
        <td colspan="7">Reponse Q21</td>
    </tr>
    <tr>
        <td colspan="7"><strong>Si non, pourquoi?</strong></td>
    </tr>
    <tr>
        <td colspan="7">Reponse Q21</td>
    </tr>
    <tr>
        <td colspan="7"><strong>Pouvez-vous nous indiquer quels sont selon vous les freins au développement de ces pratiques?</strong></td>
    </tr>
    <tr>
        <td colspan="7">Reponse Q21</td>
    </tr>  
    
    
   <tr>
        <td colspan="6" class="Q22" ><strong>Pratiquez-vous le concassage de bétons directement sur vos chantiers ?  </strong></td>
        <td></td> 	
    </tr>
    <tr>
        <td colspan="7"><strong>Si oui, pouvez-vous nous indiquer si vous disposez de votre propre concasseur ou si vous le louez pour des campagnes ponctuelles de concassage ?</strong></td>
    </tr>
    <tr>
        <td colspan="7">Reponse Q22</td>
    </tr>

    <tr>
        <td colspan="7"><strong>Pouvez-vous estimer le tonnage de bétons concassés sur vos chantiers en 2015 ?</strong></td>
    </tr>
    <tr>
        <td colspan="7">Reponse Q22</td>
    </tr>  
    <tr>

    <td colspan="6" class="Q23" ><strong>Triez-vous  vos déchets sur chantiers?</strong></td>
        <td></td> 	
    </tr>
    <tr>
        <td colspan="7"><strong>Si non, pourquoi?</strong></td>
    </tr>
    <tr>
        <td colspan="7" class="Q24"><strong>Comment jugez-vous le maillage en points de collecte en Île-de-France ?</strong></td>
    </tr>
    <tr>
        <td colspan="7">'.$SimpleAnswers[24].'</td>
    </tr> 
    <tr>
        <td colspan="7" class="Q25"><strong>Comment jugez-vous le maillage en installations de traitement en Île-de-France ?</strong></td>
    </tr>
    <tr>
        <td colspan="7">'.$SimpleAnswers[25].'</td>
    </tr> 

	</tbody>
</table>';


$html.= '<table>
  <tbody>
    <tr>
        <td colspan="6" ><strong>Q26. Avez-vous connaissance de site internet/annuaires permettant de connaître les points de collecte et/ou installations de traitement de vos déchets ?</strong></td>
        <td>Reponse Q26</td>       
    </tr>
    <tr>
        <td colspan="7"><strong>Si oui, pouvez-vous préciser lesquels?</strong></td>
    </tr>
    <tr>
        <td colspan="7"> Réponse Q26</td>
    </tr> 
    <tr>
        <td colspan="7" class="Q27"><strong>Estimez-vous avoir une connaissance suffisante sur les différentes filières ?</strong></td>
    </tr>
    <tr>
        <td colspan="7">'.$SimpleAnswers[27].'</td>
    </tr>
     <tr>
        <td colspan="6" class="Q28"><strong>Avez-vous mis en place une traçabilité et un suivi des déchets produits sur vos chantiers et des exutoires utilisés?</strong></td>
        <td>reponse Q28</td>       
    </tr>
    <tr>
        <td colspan="7"><strong>Si non, pourquoi ? </strong></td>
    </tr>
    <tr>
        <td colspan="7">reponse Q28</td>
    </tr> 
    <tr>
        <td colspan="6" class="Q29"><strong>Vous êtes-vous fixé des objectifs chiffrés de valorisation des déchets produits sur chantiers?</strong></td>
        <td>'.$SimpleAnswers[29].'</td>       
    </tr>
    <tr>
        <td colspan="5" class="Q30"><strong>Utilisez-vous en approvisionnement pour vos chantiers des matériaux recyclés?</strong></td>
        <td colspan="2" >Réponse Q30</td>       
    </tr>
    <tr>
        <td colspan="7"><strong>Si non, pourquoi ? </strong></td>
    </tr>
    <tr>
        <td colspan="7">Réponse Q30</td>
    </tr>
      <tr>
        <td colspan="7" class="Q31"><strong>De manière générale, quelles sont les difficultés rencontrées par votre entreprise pour gérer vos déchets?</strong></td>
    </tr>
    <tr>
        <td colspan="7">'.$SimpleAnswers[31].'</td>
    </tr>
    <tr>
        <td colspan="7" class="Q32"><strong>Quels seraient vos besoins pour améliorer la gestion de vos déchets?</strong></td>
    </tr>
    <tr>
        <td colspan="7">'.$SimpleAnswers[32].'</td>
    </tr>
    	</tbody>
</table>';


$html.= '<h2>4. Relation avec les maîtres d’ouvrages</h2>
<table>
    <tbody>
    <tr>
        <td colspan="4" class="Q33"><strong>Avez-vous déjà eu des exigences particulières de la part des maîtres d\'ouvrage sur la thématique des déchets?</strong></td>
        
    </tr>
    <tr>
        <td colspan="4">
        <ul>
           <li>Réalisation d’un SOGED/SODED:    </li>
           <li>Suivi des déchets par des bordereaux: </li>
           <li>Objectifs de valorisation: </li>
           <li>Exigences environnementales: </li>
           <li>AMO environnementale: </li>
           <li>Démarche de certification: </li>
        </ul>
        </td>    		
    </tr>
    </tbody>
</table>';

/*
 * 
  $html.= '<p>&nbsp;</p>
  <h2> Informations de Devis</h2>

  <table>
  <tbody>
  <tr>
  <td ><strong>Vous êtes un:</strong></td>
  <td colspan="3" >' . $dossier->titre . '</td>
  </tr>
  <tr>
  <td><strong>Destination:</strong></td>
  <td >' . $dossier->destination . '</td>
  <td><strong>Type de fret:</strong></td>
  <td  >' . $dossier->fret . '</td>


  </tr>
  <tr>
  <td><strong>Produit:</strong></td>
  <td colspan="3" >' . $dossier->produit . '</td>
  </tr>';


  $voiture = '<tr>
  <td><strong>Marque:</strong></td>
  <td>' . $dossier->marque . '</td>
  <td><strong>Modèle:</strong></td>
  <td>' . $dossier->model . '</td>
  </tr>';

  if ($dossier->produit == 'voiture') {
  $html.=$voiture;
  } else {
  $html.='';
  }

  $circulation = '<tr>
  <td><strong>Numéro de série:</strong></td>
  <td>' . $dossier->serial . '</td>
  <td><strong>Date de circulation:</strong></td>
  <td>' . $dossier->circulation . '</td>
  </tr>';

  if (($dossier->produit == 'voiture' || $dossier->produit == 'camion' || $dossier->produit == 'camionnette' || $dossier->produit == 'engin' || $dossier->produit == 'tracteur' || $dossier->produit == 'benne' || $dossier->produit == 'moto' || $dossier->produit == 'avion' || $dossier->produit == 'bateau') && ($dossier->circulation != '0000-00-00')) {
  $html.=$circulation;
  } else {
  $html.='';
  }
  $html.= '<tr>
  <td><strong>Valeur:</strong></td>
  <td>' . $dossier->valeur . '</td>
  <td><strong>Date de demande:</strong></td>
  <td>' . $dossier->created_at . '</td>
  </tr>

  </tbody>
  </table>';

  if ($dossier->facture == 1) {
  $facture = "Oui";
  } else {
  $facture = "Non";
  }

  if ($dossier->transitaire == 1) {
  $transitaire = "Oui";
  } else {
  $transitaire = "Non";
  }

  if ($dossier->relationPart == 1) {
  $relationPart = "Oui";
  } else {
  $relationPart = "Non";
  }

  if ($dossier->declarant == 1) {
  $declarant = "Oui";
  } else {
  $declarant = "Non";
  }

  if ($dossier->relPartDec == 1) {
  $relPartDec = "Oui";
  } else {
  $relPartDec = "Non";
  }

  if ($dossier->cle == 1) {
  $cle = "Oui";
  } else {
  $cle = "Non";
  }

  $html.= '<p>&nbsp;</p>
  <h2>Questions</h2>

  <table>
  <tbody>
  <tr>
  <td colspan="5"><strong>Avez vous une facture d\'achat ?</strong></td>
  <td>' . $facture . '</td>
  </tr>
  <tr>
  <td colspan="5"><strong>Avez vous un transitaire ?</strong></td>
  <td>' . $transitaire . '</td>
  </tr>
  <tr>
  <td colspan="5"><strong>Voulez vous une mise en relation avec un de nos partenaires ?</strong></td>
  <td>' . $relationPart . '</td>
  </tr>
  <tr>
  <td colspan="5"><strong>Avez vous un déclarant ?</strong></td>
  <td>' . $declarant . '</td>
  </tr>';

  $adresseDeclarant = '	<tr>
  <td colspan="2"><strong>Adresse du déclarant:</strong></td>
  <td colspan="4">' . $dossier->adresseDeclarant . '</td>
  </tr>';

  if ($dossier->declarant == 1 && $dossier->declarant != '') {
  $html.=$adresseDeclarant;
  } else {
  $html.='';
  }

  $html.='<tr>
  <td colspan="5"><strong>Voulez vous une mise en relation avec un de nos partenaires déclarant?</strong></td>
  <td>' . $relPartDec . '</td>
  </tr>
  <tr>
  <td colspan="5"><strong>souhaitez vous une solution clé en main? (prise en charge auprès de la douane et livraison)</strong></td>
  <td>' . $cle . '</td>
  </tr>
  </tbody>
  </table>

  <p>&nbsp;</p>
  <h2>Avancement et Remarques:&nbsp;</h2>
  <table>
  <tbody>
  <tr>
  <td style="color:red;">'.$dossier->remarques.'</td>
  </tr>
  </tbody>
  </table>


  '; */




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
