function toFloat(nbr) {
    if (nbr == null || nbr == NaN || nbr == '') {
        nbr = 0;

        nbr = parseFloat(nbr);

        return nbr;
    }
}

function progressBar(id, somme, chiffre){
    var progressBar = $('.'+id+'');
    var percent = ((100 * parseFloat(somme)) / chiffre);
    var percentVal = percent.toFixed();

    progressBar.css("width", percentVal+'%').attr("aria-valuenow", percentVal);
    
    if(percentVal < 100){
        progressBar.removeClass('bg-success');
        progressBar.removeClass('bg-danger');
        progressBar.addClass('bg-warning');
    }
    if(percentVal == 100){
        progressBar.removeClass('bg-warning');
        progressBar.removeClass('bg-danger');
        progressBar.addClass('bg-success');
    }
    if(percentVal > 100){
        progressBar.removeClass('bg-warning');
        progressBar.removeClass('bg-success');
        progressBar.addClass('bg-danger')
    }

}


function percent_val(id, somme, total, unit){
    if(unit == '%'){
    $('#'+id+' font').text('(' + somme + ' % )');
    }else{
        $('#'+id+' font').text('(' + somme + ' / ' + total + ' '+unit+' )');
    }
}


function control_error(div_id,Qnbr, somme, total, unit){
     if (somme > total) { 

        $('#'+div_id+'' ).empty();
        $('#'+div_id+'').attr("align", "center").append("Le montant total dépasse le montant"+Qnbr+" (" + total +" "+ unit +")");
        $('#'+div_id+'').show();
    } else if (somme < total) {
         $('#'+div_id+'' ).empty();
         $('#'+div_id+'' ).attr("align", "center").append("Le montant total est inférieur au montant"+Qnbr+" (" + total + " "+ unit +")");
         $('#'+div_id+'' ).show();
    } else { 
        $('#'+div_id+'').hide();
    }
    
}

