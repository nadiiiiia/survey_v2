
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