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
    
    progressBar('progress_q9', somme, chiffre);
    percent_val('percent_q9', somme, chiffre, 'K€');
    control_error('error_q9', ' du chiffre d’affaires  dans  Q8', somme, chiffre, 'K€');
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
    progressBar('progress_q10', somme, chiffre);
    percent_val('percent_q10', somme, chiffre, 'K€');
    control_error('error_q10', ' du chiffre d’affaires  dans  Q8', somme, chiffre, 'K€');
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
     progressBar('progress_q11', somme, chiffre);
    percent_val('percent_q11', somme, chiffre, 'K€');
    control_error('error_q11', ' du chiffre d’affaires  dans  Q8', somme, chiffre, 'K€');
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
    
     progressBar('progress_q16', somme, total_q13);
    percent_val('percent_q16', somme, total_q13, 'Tonnes');
    control_error('error_q16', ' du chiffre d’affaires  dans  Q13', somme, total_q13, 'Tonnes');

    
}

function control_q17() {

    var somme = [0, 0, 0, 0, 0, 0];
    var input = [];
    var test = $('#q17-1-1');

    for (i = 1; i < 7; i++)
    {
        for (j = 1; j < 4; j++)
        {
            input[j] = $('#q17-' + i + '-' + j + '').val();
            if (input == null || input == NaN || input == '') {
                input = 0;
            }
            somme[i] = parseFloat(somme[i]) + parseFloat(input[j]); // calculer la somme des valeurs
        }
        if (somme[i] > 100) {
            $('#q17-' + i + '-1').closest('tr').attr('bgcolor', '#f8d7da');
        }
    }

//alert(somme[1]);
    if (somme > 100) {
        $('#error_q17').empty();
        $('#error_q17').append("Le montant total des quantités de la ligne dépasse 100%");
        $('#error_q17').show();
    } else {
        $('#error_q17').hide();
    }


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
    control_error('error_q19', ' Total des Déchets inertes dans  Q16', somme, DNIND_total, 'Tonnes');

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
    control_error('error_q20', ' Total des Déchets inertes dans  Q16', somme, DD_total, 'Tonnes');
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

