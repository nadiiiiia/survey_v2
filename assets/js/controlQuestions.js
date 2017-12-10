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
//var test = parseFloat(chiffre.replace(",",""));

//    var progressBar = $('.progress-bar');
//    var percentVal = somme;
//
//    progressBar.css("width", percentVal).attr("aria-valuenow", percentVal);
//    progressBar.attr("aria-valuemax", chiffre + '%');
//
//    if (percentVal == chiffre)
//    {
//        percentVal = 0;
//    }
 //alert(chiffre);
    if (somme > chiffre) { // le chiffre dans Q8

        $('#error_q9').empty();
        $('#error_q9').append("Le montant total dépasse le chiffre dans Q8 (" + somme + " / " + chiffre + ")");
        $('#error_q9').show();
    } else {
        $('#error_q9').hide();
    }
    // return parseFloat(somme);
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

    if (somme > chiffre) { // le chiffre dans Q8

        $('#error_q10').empty();
        $('#error_q10').append("Le montant total dépasse le chiffre dans Q8 (" + somme + " / " + chiffre + ")");
        $('#error_q10').show();
    } else {
        $('#error_q10').hide();
    }
    // return parseFloat(somme);
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

    if (somme > chiffre) { // le chiffre dans Q8

        $('#error_q11').empty();
        $('#error_q11').append("Le montant total dépasse le chiffre dans Q8 (" + somme + " / " + chiffre + ")");
        $('#error_q11').show();
    } else {
        $('#error_q11').hide();
    }
    // return parseFloat(somme);
}

function control_q14() {
    var somme = 0;

    for (i = 1; i < 6; i++)
    {
        var input = $('#q14-' + i + '-2').val();
        if (input == null || input == NaN || input == '') {
            input = 0;
        }
        somme = parseFloat(somme) + parseFloat(input); // calculer la somme des valeurs
        //alert(somme);
    }

    if (somme > total_q13) {
        $('#error_q14').show();
        //  $('#error_q14').empty();

        // $('#error_q14').append("Le montant total des quantités dépasse le Total déchets de votre réponse dans Q13 (" + total_q13 + " " + total_q13_unit + ")");
//        $('#next_btn').click(function () {
//            $("#next_btn").attr("href", "#");
//        });
    } else {
        $('#error_q14').hide();
//        $('#next_btn').click(function () {
//            $("#next_btn").attr("href", href_next);
//        });
    }
    return parseFloat(somme);
}

function control_q15() {
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
    
    if (somme > DI_total && id == 18) {
        $('#error_q18').empty();
        $('#error_q18').append("Le montant total des quantités dépasse le Total des Déchets inertes dans Q16 (" + somme + " / " + DI_total + " Tonnes )");
        $('#error_q18').show();
    } else if (somme < DI_total && id == 18) {
        $('#error_q18').empty();
        $('#error_q18').append("Le montant total des quantités est inférieur au Total des Déchets inertes dans Q16 (" + somme + " / " + DI_total + " Tonnes )");
        $('#error_q18').show();
    } else {
        $('#error_q18').hide();
    }


   // return parseFloat(somme);
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

    if (somme > 100 && id == 18) {
        $('#error_q18_2').empty();
        $('#error_q18_2').append("Le montant total des quantités dépasse 100% (" + somme + " / 100 )");
        $('#error_q18_2').show();
    } else if (somme < 100 && id == 18) {
        $('#error_q18_2').empty();
        $('#error_q18_2').append("Le montant total des quantités est inférieur à 100% (" + somme + " / 100 )");
        $('#error_q18_2').show();
    } else {
        $('#error_q18_2').hide();
    }

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

    if (somme > 100 && id == 19) {
        $('#error_q19_2').empty();
        $('#error_q19_2').append("Le montant total des quantités dépasse 100% (" + somme + " / 100 )");
        $('#error_q19_2').show();
    } else if (somme < 100 && id == 19) {
        $('#error_q19_2').empty();
        $('#error_q19_2').append("Le montant total des quantités est inférieur à 100% (" + somme + " / 100 )");
        $('#error_q19_2').show();
    } else {
        $('#error_q19_2').hide();
    }

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
    if (somme > DNIND_total && id == 19) {
        $('#error_q19').empty();
        $('#error_q19').append("Le montant total des quantités dépasse le Total des Déchets non dangereux non inertes dans Q16 (" + somme + " / " + DNIND_total + " Tonnes )");
        $('#error_q19').show();
    } else if (somme < DNIND_total && id == 19) {
        $('#error_q19').empty();
        $('#error_q19').append("Le montant total des quantités est inférieur au Total des Déchets non dangereux non inertes dans Q16 (" + somme + " / " + DNIND_total + " Tonnes )");
        $('#error_q19').show();

    } else {
        $('#error_q19').hide();
    }

    // return parseFloat(somme);
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

    if (somme > DD_total && id == 20) {
        $('#error_q20').empty();
        $('#error_q20').append("Le montant total des quantités dépasse le Total des Déchets dangereux dans Q16 (" + somme + " / " + DD_total + " Tonnes )");
        $('#error_q20').show();


    } else if (somme < DD_total && id == 20) {
        $('#error_q20').empty();
        $('#error_q20').append("Le montant total des quantités est inférieur au Total des Déchets dangereux dans Q16 (" + somme + " / " + DD_total + " Tonnes )");
        $('#error_q20').show();

    } else {
        $('#error_q20').hide();
    }
    return parseFloat(somme);
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
//alert(somme);
    if (somme > 100 && id == 20) {
        $('#error_q20_2').empty();
        $('#error_q20_2').append("Le montant total des quantités dépasse 100% (" + somme + " / 100 )");
        $('#error_q20_2').show();
    } else if (somme < 100 && id == 20) {
        $('#error_q20_2').empty();
        $('#error_q20_2').append("Le montant total des quantités est inférieur à 100% (" + somme + " / 100 )");
        $('#error_q20_2').show();
    } else {
        $('#error_q20_2').hide();
    }

}

