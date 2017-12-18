function control_q9() {
    var somme = 0;


    for (i = 1; i < 5; i++)
    {
        var input = $('#q9-' + i).val();

        if (input == null || input == NaN || input == '') {
            input = 0;
        }
        somme = parseFloat(somme) + parseFloat(input); // calculer la somme des valeurs

    }

    progressBar('progress_q9', somme, 100);
    percent_val('percent_q9', somme, 100, '%');
    control_error('error_q9', '', somme, 100, '%');
}

function control_q10() {
    var somme = 0;

    for (i = 1; i < 7; i++)
    {
        var input = $('#q10-' + i).val();
        if (input == null || input == NaN || input == '') {
            input = 0;
        }
        somme = parseFloat(somme) + parseFloat(input); // calculer la somme des valeurs
        //alert(somme);
    }
    progressBar('progress_q10', somme, 100);
    percent_val('percent_q10', somme, 100, '%');
    control_error('error_q10', '', somme, 100, '%');
}
function control_q11() {
    var somme = 0;

    for (i = 1; i < 10; i++)
    {
        var input = $('#q11-' + i).val();
        if (input == null || input == NaN || input == '') {
            input = 0;
        }
        somme = parseFloat(somme) + parseFloat(input); // calculer la somme des valeurs
        //alert(somme);
    }
    progressBar('progress_q11', somme, 100);
    percent_val('percent_q11', somme, 100, '%');
    control_error('error_q11', '', somme, 100, '%');
}


function control_q15() {  // min et max
    var min = $('#q15-1').val();
    var max = $('#q15-2').val();
    if (min == null || min == NaN || min == '') {
        min = 0;
    }
    if (max == null || max == NaN || max == '') {
        max = 0;
    }
    min = parseFloat(min);
    max = parseFloat(max);

    if (max < min) {
        $('#error_q15').empty();
        $('#error_q15').append("vérifiez que la valeur Max est supérieure à la valeur Min");
        $('#error_q15').show();
    } else {
        $('#error_q15').hide();
    }
}
function control_q16() {  // 
    var somme;
    var DI = $('#q16-1').val();
    var DNIND = $('#q16-2').val();
    var DD = $('#q16-3').val();
    var total = 0;
    if (DI == null || DI == NaN || DI == '') {
        DI = 0;
    }
    if (DNIND == null || DNIND == NaN || DNIND == '') {
        DNIND = 0;
    }
    if (DD == null || DD == NaN || DD == '') {
        DD = 0;
    }
    
    DI = parseFloat(DI);
    DNIND = parseFloat(DNIND);
    DD = parseFloat(DD);

    somme = DI + DNIND + DD;
    
    if(answer_Q12 == 'oui'){
        total_Q16 = total_Q13;
        msg_Q16 =  ' du chiffre d’affaires  dans  Q13';
    }if(answer_Q12 == 'non'){
        total_Q16 = moy_Q15;
        msg_Q16 = ' moyenne de Min et Max dans  Q15';
    }

    progressBar('progress_q16', somme, total_Q16);
    percent_val('percent_q16', somme, total_Q16, 'Tonnes');
    control_error('error_q16', msg_Q16, somme, total_Q16, 'Tonnes');


}

function control_q17() {

    var somme = [];
    var input = [];
    var compteur = [];
    var alert = 0 ;
    

    for (i = 0; i < 6; i++) {
        somme[i] = 0;
        compteur[i] = 0;
    }
    for (i = 0; i < 6; i++) {
        for (j = 0; j < 3; j++) {
            input[j] = $('#q17-' + (j + 1) + '-' + (i + 1) + '').val();
            if (input[j] == null || input[j] == NaN || input[j] == '') {
                input[j] = 0;
            }
            somme[i] = parseFloat(somme[i]) + parseFloat(input[j]); // calculer la somme des valeurs
           // compteur = parseFloat(compteur) + parseFloat(input[j]);
        }

    }



    for (i = 0; i < 6; i++) {

        if (somme[i] > 100) {
            compteur[i]=1;
            $('#q17-1-' + (i + 1) + '').closest('tr').attr('bgcolor', '#f8d7da');
        } else {
            compteur[i]=0;
            $('#q17-1-' + (i + 1) + '').closest('tr').attr('bgcolor', '');
        }
        if(compteur[i] == 1){
            alert = alert + 1 ;
        }
    }

    if (alert > 0) {
        $('#error_q17').empty();
        $('#error_q17').append("Le montant total des lignes en rouge, dépasse 100%");
        $('#error_q17').show();
    } else {
        $('#error_q17').hide();
    }

   



//    for (i = 0; i < 6; i++)
//    {
//        for (j = 0; j < 3; j++)
//        {
//            input[j] = $('#q17-' + (j+1) + '-' + (i+1) + '').val();
//            if (input[j] == null || input[j] == NaN || input[j] == '') {
//                input[j] = 0;
//            }
//         
//        }
//          somme[i] = parseFloat(somme[i]) + parseFloat(input[j]); // calculer la somme des valeurs
//             if (somme[i] > 100) {
//            $('#q17-1-' + (i+1) + '').closest('tr').attr('bgcolor', '#f8d7da');
//
//            $('#error_q17').empty();
//            $('#error_q17').append("Le montant total des quantités de la ligne dépasse 100%");
//            $('#error_q17').show();
//        } else {
//            $('#error_q17').hide();
//        }
//    }
//
//alert(somme);
//    if (somme > 100) {
//        $('#error_q17').empty();
//        $('#error_q17').append("Le montant total des quantités de la ligne dépasse 100%");
//        $('#error_q17').show();
//    } else {
//        $('#error_q17').hide();
//    }


    // return parseFloat(somme);
}


function control_q18() {

    var somme = 0;
    

    for (i = 1; i < 7; i++)
    {
        var input = $('#q18-' + i + '-2').val();
        if (input == null || input == NaN || input == '') {
            input = 0;
        }
        somme = parseFloat(somme) + parseFloat(input); // calculer la somme des valeurs
    }

    progressBar('progress_q18_1', somme, DI_total);
    percent_val('percent_q18_1', somme, DI_total, 'Tonnes');
    control_error('error_q18', ' Total des Déchets inertes dans  Q16', somme, DI_total, 'Tonnes');
}

function control_q18_2() {
    var somme = 0;

    for (i = 1; i < 11; i++)
    {
        var input = $('#q18-' + i + '-4').val();
        if (input == null || input == NaN || input == '') {
            input = 0;
        }
        somme = parseFloat(somme) + parseFloat(input); // calculer la somme des valeurs
    }
    progressBar('progress_q18_2', somme, 100);
    percent_val('percent_q18_2', somme, 100, '%');
    control_error('error_q18_2', '', somme, 100, '%');


}

function control_q19_2() {
    var somme = 0;

    for (i = 1; i < 10; i++)
    {
        var input = $('#q19-' + i + '-4').val();
        if (input == null || input == NaN || input == '') {
            input = 0;
        }
        somme = parseFloat(somme) + parseFloat(input); // calculer la somme des valeurs
    }

    progressBar('progress_q19_2', somme, 100);
    percent_val('percent_q19_2', somme, 100, '%');
    control_error('error_q19_2', '', somme, 100, '%');

}

function control_q19() {
    var somme = 0;
    for (i = 1; i < 13; i++)
    {
        var input = $('#q19-' + i + '-3').val();

        if (input == null || input == NaN || input == '') {
            input = 0;
        }

        somme = parseFloat(somme) + parseFloat(input); // calculer la somme des valeurs

    }
    progressBar('progress_q19_1', somme, DNIND_total);
    percent_val('percent_q19_1', somme, DNIND_total, 'Tonnes');
    control_error('error_q19', ' Total des Déchets non dangereux non inertes dans  Q16', somme, DNIND_total, 'Tonnes');

}

function control_q20(somme) {
    var somme = 0;
    for (i = 1; i < 10; i++)
    {
        var input = $('#q20-' + i + '-3').val();
        if (input == null || input == NaN || input == '') {
            input = 0;
        }
        somme = parseFloat(somme) + parseFloat(input); // calculer la somme des valeurs
        //alert(somme);
    }

    progressBar('progress_q20_1', somme, DD_total);
    percent_val('percent_q20_1', somme, DD_total, 'Tonnes');
    control_error('error_q20', ' Total des Déchets dangereux dans  Q16', somme, DD_total, 'Tonnes');
}

function control_q20_2() {
    var somme = 0;

    for (i = 1; i < 11; i++)
    {
        var input = $('#q20-' + i + '-4').val();
        if (input == null || input == NaN || input == '') {
            input = 0;
        }
        somme = parseFloat(somme) + parseFloat(input); // calculer la somme des valeurs
    }

    progressBar('progress_q20_2', somme, 100);
    percent_val('percent_q20_2', somme, 100, '%');
    control_error('error_q20_2', '', somme, 100, '%');
}

