<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

    <head>
        <?php include('include/head.php'); ?>
    </head>
    <script type="text/javascript">

        var base_url = "<?php echo base_url(); ?>";
        var user_id = "<?php echo $id_user_connected; ?>";
        var id = <?php echo $id; ?>;
        var survey = <?php echo $survey; ?>;
        var id_next = id + 1;
        var id_back = id - 1;
        var question = <?php echo $question_json; ?>;
        var question_id = <?php echo $question_id; ?>;
        var question_number = <?php echo $question_number; ?>;
        var question_body = <?php echo $question_body; ?>;
        var question_note = <?php echo $question_note; ?>;
        var section_name = <?php echo $section_name; ?>;
        var section_number = <?php echo $section_number; ?>;
        var answer = <?php echo $answer; ?>; // la réponse enregistrée dans la BD 
        var back_page = <?php echo $back_page; ?>;
        var array_IDs = <?php echo $array_IDs_json; ?>;
        var answer_Q12 = <?php echo $answer_Q12; ?>;
        var total_Q13;
        var moy_Q15;
        var answer_Q16 = <?php echo $answer_Q16; ?>;
        var DI_total, DNIND_total, DD_total;
        var total_Q16 = 0; // le total de controle de Q16
        var msg_Q16; // message d'erreur de Q16
        

//        var total = $('#q13-1-1').val();
//        var total_unit = localStorage.getItem('q13-1-2');
//        if (total_unit == null) {
//            total_unit = 'Tonnes';
//        }
//        
        var chiffre = localStorage.getItem('q8');
        if (chiffre == null || chiffre == NaN || chiffre == '') {
            chiffre = 0;
        }
        var answer_body; // pour enregistrer les réponses simples
    </script>
    <body>

        <!-- Navbar here-->
        <?php include('include/navbar.php'); ?>
        <br>
        <br>

        <!--  survey_body here-->

        <?php include('include/survey_body.php'); ?>

        <!-- Footer here-->
        <?php // include('include/footer.php'); ?>

        <!-- SCRIPTS here -->
        <?php include('include/scripts.php'); ?>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/controlQuestions.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/insertAnswer.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/progressBar.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/msg_error.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/functions.js"></script>
        <script type="text/javascript">
        $(document).ready(function () {

            $('#error_q9').hide();
            $('#error_q10').hide();
            $('#error_q11').hide();
            $('#error_q15').hide();
            $('#error_q10').hide();
            $('#error_q11').hide();
            $('#error_q18_2').hide();
            $('#error_q19_2').hide();
            $('#error_q20_2').hide();
            $('#error_q14').hide();

            $('.oui-q22').hide();
            $('.non-q23').hide();
            $('.non-q28').hide();
            $('.non-q30').hide();
            $('.hidden').hide();
            $('.user').val(user_id);
            $('.question').val(question_id);
            $('.survey').val(survey);
            $('#back').val(question_number);

            if (section_name == null) {
                section_name = "";
            }
            if (question_note == null) {
                question_note = "";
            }

            var question_b = $("<p class='inline'><strong> Q" + question_number + " - " + question_body + "</strong></p>");
            var question_count = $("<p class='inline'><strong> &nbsp;&nbsp; (" + question_number + " / " + array_IDs.length + ")</strong></p>");
            $(".badge").append(section_number).after(" " + section_name);
            $(".question_body").append(question_b).after(" ").append(question_count);

            $(".note").append(" " + question_note); //pour afficher les notes du question

            /// Règles générales des boutons suivant et précédent
            href_next = base_url + 'index.php/home/survey/' + survey + '/' + id_next;
            $("#next_btn").attr("href", href_next);

            href_back = base_url + 'index.php/home/survey/' + survey + '/' + id_back;
            $("#back_btn").attr("href", href_back);



            /// Règles spécifiques selon les id  

            if (id == 1)
            {
                var next_page;
                $('input[value="' + answer + '"][name="Q1"]').prop('checked', true); // récupération de la réponse (radio)
                window.setInterval(function () {

                    if ($('input[name="Q1"]:checked').val() == 'oui') {
                        href_next = base_url + 'index.php/home/survey/' + survey + '/3';
                        next_page = 3;
                    } else {
                        href_next = base_url + 'index.php/home/survey/' + survey + '/2';
                        next_page = 2;
                    }
                }, 50);


                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple_Back($('input[name="Q1"]:checked').val(), next_page);
                        window.location.href = href_next;
                    }
                });


                $('#next_btn').click(function () {
                    insertAnserSimple_Back($('input[name="Q1"]:checked').val(), next_page);
                    $("#next_btn").attr("href", href_next);
                });

                $('#back_btn').hide();
            }
            if (id == 2)
            {
                $('#q2').val(answer); // récupération de la réponse (texte)

                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple_Back($('#q2').val(), 3);
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple_Back($('#q2').val(), 3);
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 3)
            {
                $('#q3').val(answer); // récupération de la réponse (texte)
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple($('#q3').val());
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple($('#q3').val());
                    $("#next_btn").attr("href", href_next);
                });
                $('#back_btn').click(function () {
                    href_back = base_url + 'index.php/home/survey/' + survey + '/' + getBackPage(id);
                    $("#back_btn").attr("href", href_back);
                });
            }
            if (id == 4)
            {
                $('#q4').val(answer); // récupération de la réponse (texte)
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple($('#q4').val());
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple($('#q4').val());
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 5)
            {
                var tab;
                if (answer != null) {
                    tab = answer.split(',');
                    $('#q5-1').val(tab[0]); // récupération de la réponse (texte)
                    $('#q5-2').val(tab[1]); // récupération de la réponse (texte)
                    $('#q5-3').val(tab[2]); // récupération de la réponse (texte)
                }


                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ5();
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ5();
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 6)
            {
                $('#q6').val(answer); // récupération de la réponse (texte)
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple($('#q6').val());
                        //insertContact();
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple($('#q6').val());
                   // insertContact();
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 7)
            {
                $('#q7').val(answer); // récupération de la réponse (texte)
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple($('#q7').val());
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple($('#q7').val());
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 8)
            {

                $('#q8').val(answer); // récupération de la réponse (texte)

                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple($('#q8').val());
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple($('#q8').val());
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 9)
            {
                var tab;
                if (answer != null) {
                    tab = answer.split(',');
                    $('#q9-1').val(tab[0]); // récupération de la réponse (texte)
                    $('#q9-2').val(tab[1]); // récupération de la réponse (texte)
                    $('#q9-3').val(tab[2]); // récupération de la réponse (texte)
                    $('#q9-4').val(tab[3]); // récupération de la réponse (texte)
                }

                window.setInterval(function () {
                    control_q9();
                }, 50);

                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ9();
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ9();
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 10)
            {
                var tab;
                if (answer != null) {
                    tab = answer.split(',');
                    $('#q10-1').val(tab[0]); // récupération de la réponse (texte)
                    $('#q10-2').val(tab[1]); // récupération de la réponse (texte)
                    $('#q10-3').val(tab[2]); // récupération de la réponse (texte)
                    $('#q10-4').val(tab[3]); // récupération de la réponse (texte)
                    $('#q10-5').val(tab[4]); // récupération de la réponse (texte)
                    $('#q10-6').val(tab[5]); // récupération de la réponse (texte)
                }

                window.setInterval(function () {
                    control_q10();
                }, 50);
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ10();
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ10();
                    $("#next_btn").attr("href", href_next);
                });

            }
            if (id == 11)
            {
                var tab;
                if (answer != null) {
                    tab = answer.split(',');
                    $('#q11-1').val(tab[0]); // récupération de la réponse (texte)
                    $('#q11-2').val(tab[1]); // récupération de la réponse (texte)
                    $('#q11-3').val(tab[2]); // récupération de la réponse (texte)
                    $('#q11-4').val(tab[3]); // récupération de la réponse (texte)
                    $('#q11-5').val(tab[4]); // récupération de la réponse (texte)
                    $('#q11-6').val(tab[5]); // récupération de la réponse (texte)
                    $('#q11-7').val(tab[6]); // récupération de la réponse (texte)
                    $('#q11-8').val(tab[7]); // récupération de la réponse (texte)
                    $('#q11-9').val(tab[8]); // récupération de la réponse (texte)
                    $('#q11-10').val(tab[9]); // récupération de la réponse (texte)
                }

                window.setInterval(function () {
                    control_q11();
                }, 50);
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ11();
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ11();
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 12)
            {
                var next_page;
                $('input[value="' + answer + '"][name="Q12"]').prop('checked', true); // récupération de la réponse (radio)
                window.setInterval(function () {
                    if ($('input[name="Q12"]:checked').val() == 'non') {
                        href_next = base_url + 'index.php/home/survey/' + survey + '/14';
                    } else {
                        href_next = base_url + 'index.php/home/survey/' + survey + '/13';
                    }
                }, 50);
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple($('input[name="Q12"]:checked').val());
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple($('input[name="Q12"]:checked').val());
                    $("#next_btn").attr("href", href_next);
                });

            }

            if (id == 13)
            {
                var tab;
                if (answer != null) {
                    tab = answer.split(',');
                    $('#q13-1-1').val(tab[0]); // récupération de la réponse (texte)
                    $('#q13-1-2').val(tab[1]); // récupération de la réponse (texte)
                    $('#q13-2-1').val(tab[2]); // récupération de la réponse (texte)
                    $('#q13-2-2').val(tab[3]); // récupération de la réponse (texte)
                }
                href_next = base_url + 'index.php/home/survey/' + survey + '/16';
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ13();
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ13();
                    $("#next_btn").attr("href", href_next);
                });

            }
            if (id == 14)
            {
                var next_page;
                $('input[value="' + answer + '"][name="Q14"]').prop('checked', true); // récupération de la réponse (radio)
                window.setInterval(function () {
                    if ($('input[name="Q14"]:checked').val() == 'non') {
                        href_next = base_url + 'index.php/home/survey/' + survey + '/21';
                        next_page = 21;
                    } else {
                        href_next = base_url + 'index.php/home/survey/' + survey + '/15';
                        next_page = 15;
                    }
                }, 50);
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple_Back($('input[name="Q14"]:checked').val(), next_page);
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple($('input[name="Q14"]:checked').val());
                    $("#next_btn").attr("href", href_next);
                });
                $('#back_btn').click(function () {
                    href_back = base_url + 'index.php/home/survey/' + survey + '/12';
                    $("#back_btn").attr("href", href_back);
                });
            }
            if (id == 15)
            {
                var tab;
                if (answer != null) {
                    tab = answer.split(',');
                    $('#q15-1').val(tab[0]); // récupération de la réponse (texte)
                    $('#q15-2').val(tab[1]); // récupération de la réponse (texte)

                }

                window.setInterval(function () {
                    control_q15();
                }, 50);

                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ15();
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ15();
                    $("#next_btn").attr("href", href_next);
                });

            }
            if (id == 16)
            {

                if (answer != null) {
                    var tab = answer.split(',');

                    $('#q16-1').val(tab[0]); // récupération de la réponse (texte)
                    $('input[value="' + tab[1] + '"][name="Q16-1"]').prop('checked', true); // récupération de la réponse (radio)
                    $('#q16-2').val(tab[2]); // récupération de la réponse (texte)
                    $('input[value="' + tab[3] + '"][name="Q16-2"]').prop('checked', true); // récupération de la réponse (radio)
                    $('#q16-3').val(tab[4]); // récupération de la réponse (texte)
                    $('input[value="' + tab[5] + '"][name="Q16-3"]').prop('checked', true); // récupération de la réponse (radio)
                }


                window.setInterval(function () {
                    total_Q13 = <?php echo $total_Q13; ?>;
                    moy_Q15 = <?php echo $moy_Q15; ?>;
                    control_q16();
                }, 50);
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ16();
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ16();
                    $("#next_btn").attr("href", href_next);
                });

                $('#back_btn').click(function () {
                    href_back = base_url + 'index.php/home/survey/' + survey + '/' + getBackPage(id);
                    $("#back_btn").attr("href", href_back);
                });
            }
            if (id == 17)
            {
                var DI = <?php echo $answer_Q17_DI; ?>;
                var DNIND = <?php echo $answer_Q17_DNIND; ?>;
                var DD = <?php echo $answer_Q17_DD; ?>;


                if (DI != null) {
                    DI = DI.split(',');
                    for (i = 0; i < 7; i++) {
                        $('#q17-1-' + (i + 1) + '').val(DI[i]); // récupération de la réponse (texte)
                    }
                }

                if (DNIND != null) {
                    DNIND = DNIND.split(',');
                    for (i = 0; i < 7; i++) {
                        $('#q17-2-' + (i + 1) + '').val(DNIND[i]); // récupération de la réponse (texte)
                    }
                }

                if (DD != null) {
                    DD = DD.split(',');
                    for (i = 0; i < 7; i++) {
                        $('#q17-3-' + (i + 1) + '').val(DD[i]); // récupération de la réponse (texte)
                    }
                }

                window.setInterval(function () {
                    control_q17();
                }, 50);


                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ17();
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ17();
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 18)
            {

                var Dechets_oui_non = <?php echo $Dechets_oui_non ?>;
                var Dechets_qte = <?php echo $Dechets_qte ?>;
                var Dechets_autres = <?php echo $Dechets_autres ?>;
                if (Dechets_oui_non != null) {
                    Dechets_oui_non = Dechets_oui_non.split(',');
                    for (i = 1; i < 7; i++) {
                        $('input[value="' + Dechets_oui_non[i - 1] + '"][name="Q18-' + i + '"]').prop('checked', true); // récupération de la réponse (radio)
                    }
                }
                if (Dechets_qte != null) {
                    Dechets_qte = Dechets_qte.split(',');
                    for (i = 1; i < 7; i++) {
                        $('#q18-' + i + '-2').val(Dechets_qte[i - 1]); // récupération de la réponse (texte)
                    }
                }



                $('#q18-1-3').val(Dechets_autres); // récupération de la réponse (texte)

                if (answer != null) {
                    var tab = answer.split(',');
                    for (i = 0; i < 10; i++) {
                        $('#q18-' + (i + 1) + '-4').val(tab[i]); // récupération de la réponse (texte)
                    }
                    $('#q18-autres').val(tab[10]); // récupération de la réponse (texte)
                }

                var tab_answer_Q16 = getAnswerQ(answer_Q16);
                if (tab_answer_Q16 != null) {
                    DI_total = tab_answer_Q16[0];
                }
                if (DI_total == null || DI_total == NaN || DI_total == '') {
                    DI_total = 0;
                }

                window.setInterval(function () {
                    control_q18();
                    control_q18_2();
                }, 50);
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ18();
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ18();
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 19)
            {
                var Dechets_oui_non = <?php echo $Dechets_oui_non ?>;
                var Dechets_qte = <?php echo $Dechets_qte ?>;
                var Dechets_autres = <?php echo $Dechets_autres ?>;
                if (Dechets_oui_non != null) {
                    Dechets_oui_non = Dechets_oui_non.split(',');
                    for (i = 1; i < 11; i++) {
                        $('input[value="' + Dechets_oui_non[i - 1] + '"][name="Q19-' + i + '"]').prop('checked', true); // récupération de la réponse (radio)
                    }
                }
                if (Dechets_oui_non != null) {
                    Dechets_qte = Dechets_qte.split(',');
                    for (i = 1; i < 11; i++) {
                        $('#q19-' + i + '-3').val(Dechets_qte[i - 1]); // récupération de la réponse (texte)
                    }
                }
                $('#q19-1-2').val(Dechets_autres); // récupération de la réponse (texte)
                /////////////////
                if (answer != null) {
                    var tab = answer.split(',');
                    for (i = 0; i < 9; i++) {
                        $('#q19-' + (i + 1) + '-4').val(tab[i]); // récupération de la réponse (texte)
                    }
                    $('#q19-autres').val(tab[9]); // récupération de la réponse (texte)
                }

                var tab_answer_Q16 = getAnswerQ(answer_Q16);
                if (tab_answer_Q16 != null) {
                    DNIND_total = tab_answer_Q16[2];
                }
                if (DNIND_total == null || DNIND_total == NaN || DNIND_total == '') {
                    DNIND_total = 0;
                }

                window.setInterval(function () {
                    control_q19();
                    control_q19_2();
                }, 50);
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ19();
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ19();
                    $("#next_btn").attr("href", href_next);
                });

            }
            if (id == 20)
            {

                var Dechets_oui_non = <?php echo $Dechets_oui_non ?>;
                var Dechets_qte = <?php echo $Dechets_qte ?>;
                var Dechets_autres = <?php echo $Dechets_autres ?>;

                if (Dechets_oui_non != null) {
                    Dechets_oui_non = Dechets_oui_non.split(',');
                    for (i = 1; i < 8; i++) {
                        $('input[value="' + Dechets_oui_non[i - 1] + '"][name="Q20-' + i + '"]').prop('checked', true); // récupération de la réponse (radio)
                    }

                }
                if (Dechets_qte != null) {
                    Dechets_qte = Dechets_qte.split(',');

                    for (i = 1; i < 8; i++) {
                        $('#q20-' + i + '-3').val(Dechets_qte[i - 1]); // récupération de la réponse (texte)
                    }
                    $('#q20-1-2').val(Dechets_autres); // récupération de la réponse (texte)

                }
                /////////////////
                if (answer != null) {
                    var tab = answer.split(',');

                    for (i = 0; i < 9; i++) {
                        $('#q20-' + (i + 1) + '-4').val(tab[i]); // récupération de la réponse (texte)
                    }
                    $('#q20-autres').val(tab[9]); // récupération de la réponse (texte)
                }
                var tab_answer_Q16 = getAnswerQ(answer_Q16);

                if (tab_answer_Q16 != null) {
                    DD_total = tab_answer_Q16[4];
                }
                if (DD_total == null || DD_total == NaN || DD_total == '') {
                    DD_total = 0;
                }

                window.setInterval(function () {
                    control_q20();
                    control_q20_2();
                }, 50);
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ20();
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ20();
                    $("#next_btn").attr("href", href_next);
                });

            }
            if (id == 21)
            {
                $('.oui-q21').hide();
                $('.non-q21').hide();
                var tab;
                if (answer != null) {
                    tab = answer.split(',');
                    $('input[value="' + tab[0] + '"][name="Q21"]').prop('checked', true); // récupération de la réponse (radio)
                    if (tab[0] == 'oui') {
                        $('#q21-oui').val(tab[1]); // récupération de la réponse (texte)
                    } else {
                        $('#q21-non').val(tab[1]); // récupération de la réponse (texte)
                    }
                    $('#q21-else').val(tab[2]); // récupération de la réponse (texte)
                }

                window.setInterval(function () {
                    if ($("input[name='Q21']:checked").val() == 'oui') {
                        $('.oui-q21').show();
                        $('.non-q21').hide();
                    } else if ($("input[name='Q21']:checked").val() == 'non') {
                        $('.oui-q21').hide();
                        $('.non-q21').show();
                    }
                }, 50);

                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ21();
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ21();
                    $("#next_btn").attr("href", href_next);
                });
                $('#back_btn').click(function () {
                    href_back = base_url + 'index.php/home/survey/' + survey + '/' + getBackPage(id);
                    $("#back_btn").attr("href", href_back);
                });

            }
            if (id == 22)
            {
                var tab;
                if (answer != null) {
                    tab = answer.split(',');
                    $('input[value="' + tab[0] + '"][name="Q22"]').prop('checked', true); // récupération de la réponse (radio)
                    if (tab[0] == 'oui') {
                        $('#q22-oui').val(tab[1]); // récupération de la réponse (texte)
                        $('#q22-else').val(tab[2]); // récupération de la réponse (texte)
                    } else {

                        $('#q22-else').val(tab[1]); // récupération de la réponse (texte)
                    }

                }

                window.setInterval(function () {
                    if ($("input[name='Q22']:checked").val() == 'oui') {
                        $('.oui-q22').show();
                    } else if ($("input[name='Q22']:checked").val() == 'non') {
                        $('.oui-q22').hide();
                    }
                }, 50);

                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ22();
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ22();
                    $("#next_btn").attr("href", href_next);
                });

            }
            if (id == 23)
            {
                $('.non-q23').hide();
                var tab;
                if (answer != null && answer.indexOf(',') > -1) {
                    tab = answer.split(',');
                    $('input[value="' + tab[0] + '"][name="Q23"]').prop('checked', true); // récupération de la réponse (radio)
                    $('#q23-non').val(tab[1]); // récupération de la réponse (texte)
                } else {
                    $('input[value="' + answer + '"][name="Q23"]').prop('checked', true); // récupération de la réponse (radio)
                }

                window.setInterval(function () {

                    if ($("input[name='Q23']:checked").val() == 'non') {
                        $('.non-q23').show();
                    } else {
                        $('.non-q23').hide();
                    }
                }, 50);
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ23();
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ23();
                    $("#next_btn").attr("href", href_next);
                });

            }
            if (id == 24)
            {
                $('#q24').val(answer); // récupération de la réponse (texte)
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple($('#q24').val());
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple($('#q24').val());
                    $("#next_btn").attr("href", href_next);
                });

            }
            if (id == 25)
            {
                $('#q25').val(answer); // récupération de la réponse (texte)
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple($('#q25').val());
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple($('#q25').val());
                    $("#next_btn").attr("href", href_next);
                });

            }
            if (id == 26)
            {
                $('#q26').val(answer); // récupération de la réponse (texte)
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple($('#q26').val());
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple($('#q26').val());
                    $("#next_btn").attr("href", href_next);
                });

            }
            if (id == 27)
            {
                $('#q27').val(answer); // récupération de la réponse (texte)
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple($('#q27').val());
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple($('#q27').val());
                    $("#next_btn").attr("href", href_next);
                });

            }
            if (id == 28)
            {
                $('.non-q28').hide();
                var tab;
                if (answer != null && answer.indexOf(',') > -1) {
                    tab = answer.split(',');
                    $('input[value="' + tab[0] + '"][name="Q28"]').prop('checked', true); // récupération de la réponse (radio)
                    $('#q28-non').val(tab[1]); // récupération de la réponse (texte)
                } else {
                    $('input[value="' + answer + '"][name="Q28"]').prop('checked', true); // récupération de la réponse (radio)
                }

                window.setInterval(function () {

                    if ($("input[name='Q28']:checked").val() == 'non') {
                        $('.non-q28').show();
                    } else {
                        $('.non-q28').hide();
                    }

                }, 50);
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ28();
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ28();
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 29)
            {
                $('input[value="' + answer + '"][name="Q29"]').prop('checked', true); // récupération de la réponse (radio)
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple($('input[name="Q29"]:checked').val());
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple($('input[name="Q29"]:checked').val());
                    $("#next_btn").attr("href", href_next);
                });

            }
            if (id == 30)
            {
                var tab;
                if (answer != null && answer.indexOf(',') > -1) {
                    tab = answer.split(',');
                    $('input[value="' + tab[0] + '"][name="Q30"]').prop('checked', true); // récupération de la réponse (radio)
                    $('#q30-non').val(tab[1]); // récupération de la réponse (texte)
                } else {
                    $('input[value="' + answer + '"][name="Q30"]').prop('checked', true); // récupération de la réponse (radio)
                }

                window.setInterval(function () {
                    if ($("input[name='Q30']:checked").val() == 'non') {
                        $('.non-q30').show();
                    } else {
                        $('.non-q30').hide();
                    }
                }, 50);
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ30();
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ30();
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 31)
            {
                $('#q31').val(answer); // récupération de la réponse (texte)
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple($('#q31').val());
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple($('#q31').val());
                    $("#next_btn").attr("href", href_next);
                });

            }
            if (id == 32)
            {
                $('#q32').val(answer); // récupération de la réponse (texte)
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple($('#q32').val());
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple($('#q32').val());
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == array_IDs.length) //id=33
            {
                var tab;
                if (answer != null) {
                    tab = answer.split(',');
                    $('input[value="' + tab[0] + '"][name="Q33-1"]').prop('checked', true); // récupération de la réponse (radio)
                    $('input[value="' + tab[1] + '"][name="Q33-2"]').prop('checked', true); // récupération de la réponse (radio)
                    $('input[value="' + tab[2] + '"][name="Q33-3"]').prop('checked', true); // récupération de la réponse (radio)
                    $('input[value="' + tab[3] + '"][name="Q33-4"]').prop('checked', true); // récupération de la réponse (radio)
                    $('input[value="' + tab[4] + '"][name="Q33-5"]').prop('checked', true); // récupération de la réponse (radio)
                    $('input[value="' + tab[5] + '"][name="Q33-6"]').prop('checked', true); // récupération de la réponse (radio)
                }
                $("#next_btn").html("Valider");
                href_next = base_url + "index.php/home/fin/"
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ33();
                        window.location.href = href_next;
                    }
                });
                $("#next_btn").click(function () {
                    insertQ33();
                    $(this).attr("href", href_next);
                });
            }

        });
        </script>
        <script>
            $(document).ready(function () {  // LocalStorage

                $('input').addClass("useLocal useLocalInput");
                $('input[type="checkbox"]').addClass("Q_18");
                $('select').addClass("useLocal useLocalSelect");

                ///////// Setters///////
                window.setInterval(function () {
                    $('.useLocalSelect').change(function () {
                        var key = $(this).attr('id');
                        var value = $(this).val();
                        localStorage.setItem(key, value)
                    });
                }, 500);

                window.setInterval(function () {
                    $('.useLocalInput').keyup(function () {
                        var key = $(this).attr('id');
                        var value = $(this).val();
                        localStorage.setItem(key, value)
                    });
                }, 500);

                /*fonction pour enregistrer les valeurs des radio en cliquant sur suivant*/

                window.setInterval(function () {
                    $('input[type="radio"]:checked').each(function () {
                        var name = $(this).attr('name');
                        var value = $(this).val();
                        localStorage.setItem(name, value);
                    });
                }, 500);

                $('.Q_18').on('click', function () {
                    var fav, favs = [];
                    $('.Q_18').each(function () { // run through each of the checkboxes
                        fav = {id: $(this).attr('id'), value: $(this).prop('checked')};
                        favs.push(fav);
                    });
                    localStorage.setItem("favorites", JSON.stringify(favs));
                });

//                var checkboxes = document.querySelectorAll('input[type=checkbox]');
//                window.setInterval(function () {
//                    for (i = 0; i < checkboxes.length; i++) {
//                        localStorage.setItem(checkboxes[i].value, checkboxes[i].checked);
//                    }
//                }, 500);


                ////////Getters////////
//                $('.useLocal').each(function () {
//                    var key = $(this).attr('id');
//                    if (localStorage.getItem(key)) {
//                        $(this).val(localStorage.getItem(key));
//                    }
//                });
//
//                $('input[type="radio"]').each(function () {
//                    var name = $(this).attr('name');
//                    var value = localStorage.getItem(name);
//                    $('input[value="' + value + '"][name="' + name + '"]').prop('checked', true);
//                });
//    
                ////////Fin Getters////////

//                for (i = 0; i < checkboxes.length; i++) {
//                    checkboxes[i].checked = localStorage.getItem(checkboxes[i].value) === "true" ? true : false;
//                }
//                $('.clearLocalSelect').click(function () {
//                    $('.useLocalSelect').each(function () {
//                        $(this).val('');
//                        var key = $(this).attr('id');
//                        localStorage.removeItem(key);
//                    });
//                });
            });
        </script>
        <script>
            $(document).ready(function () {
                if ($('input[value="oui"][name="Q9"]').prop("checked") == true) {
                    $('#table-q9').show();
                }
                if ($('input[value="oui"][name="Q10"]').prop("checked") == true) {
                    $('#table-q10').show();
                }
                if ($('input[value="oui"][name="Q11"]').prop("checked") == true) {
                    $('#table-q11').show();
                }

                //                      $('#q_form').keypress(function(ev)
                //    if (ev.which === 13)
                //        $('#next_btn').click();
                //});
            });
        </script>

        <script>
            function maxLengthCheck(object) {
                if (object.value.length > object.maxLength)
                    object.value = object.value.slice(0, object.maxLength)
            }

            function isNumeric(evt) {
                var theEvent = evt || window.event;
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
                var regex = /[0-9]|\./;
                if (!regex.test(key)) {
                    theEvent.returnValue = false;
                    if (theEvent.preventDefault)
                        theEvent.preventDefault();
                }
            }
        </script>
        <script>
            $(document).ready(function () {

            });
        </script>

    </body>

</html>
