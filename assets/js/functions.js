function toFloat(nbr) {
    if (nbr == null || nbr == NaN || nbr == '') {
        nbr = 0;

        nbr = parseFloat(nbr);

        return nbr;
    }
}

function getBackPage(id) {
    $.each(back_page, function (key, val) {

        if (val.question_nbr == id) {
            id_back = val.back_nbr;
        }

    });
    return id_back;
}

function getAnswerQ(answer) {
    var tab;
    if (answer != null) {
        tab = answer.split(',');
    }
    return tab;
}


