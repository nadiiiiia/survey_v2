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

