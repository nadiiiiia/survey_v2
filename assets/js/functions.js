function toFloat(nbr) {
    if (nbr == null || nbr == NaN || nbr == '') {
        nbr = 0;

        nbr = parseFloat(nbr);

        return nbr;
    }
}
