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
        var array_IDs = <?php echo $array_IDs_json; ?>;
        var total = parseFloat(localStorage.getItem('q13-1-1'));
        var total_unit = localStorage.getItem('q13-1-2');
        if (total_unit == null) {
            total_unit = 'Tonnes';
        }
        var chiffre = localStorage.getItem('q8');
        if (chiffre == null || chiffre == NaN || chiffre == '') {
            chiffre = 0;
        }
        var DI = localStorage.getItem('q16-1-1');
        if (DI == null) {
            DI = 0;
        }
        var DNIND = localStorage.getItem('q16-2-1');
        if (DNIND == null) {
            DNIND = 0;
        }
        var DD = localStorage.getItem('q16-3-1');
        if (DD == null) {
            DD = 0;
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

        <script type="text/javascript">
        $(document).ready(function () {

            $('.oui-q21').hide();
            $('.non-q21').hide();
            $('.non-q22').hide();
            $('.non-q27').hide();
            $('.non-q29').hide();

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
            $('#error_q38').hide();
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
            window.setInterval(function () {

                if (localStorage.getItem('Q21') == 'oui') {
                    $('.oui-q21').show();
                    $('.non-q21').hide();
                } else if (localStorage.getItem('Q21') == 'non') {
                    $('.oui-q21').hide();
                    $('.non-q21').show();
                }

                if (localStorage.getItem('Q22') == 'non') {
                    $('.non-q22').show();
                } else {
                    $('.non-q22').hide();
                }

                if (localStorage.getItem('Q27') == 'non') {
                    $('.non-q27').show();
                } else {
                    $('.non-q27').hide();
                }
                if (localStorage.getItem('Q29') == 'non') {
                    $('.non-q29').show();
                } else {
                    $('.non-q29').hide();
                }
            }, 50);
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

//            for (i = 1; i < 32; i++) {
//                if (id == i)
//                {
//                    $(window).keydown(function (e) {
//                        if (e.which === 13) {
//
//                            window.location.href = href_next;
//                        }
//                    });
//                    $('#next_btn').click(function () {
//                        $("#next_btn").attr("href", href_next);
//                    });
//                }
            if (id == 1)
            {

                window.setInterval(function () {

                    if (localStorage.getItem('Q1') == 'oui') {
                        href_next = base_url + 'index.php/home/survey/' + survey + '/3';
                    } else {
                        href_next = base_url + 'index.php/home/survey/' + survey + '/2';
                    }
                }, 50);

                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple(localStorage.getItem('Q1'));
                        window.location.href = href_next;

                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple(localStorage.getItem('Q1'));
                    $("#next_btn").attr("href", href_next);

                });

                $('#back_btn').hide();
            }
            if (id == 2)
            {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple(localStorage.getItem('q2'));
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple(localStorage.getItem('q2'));
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 3)
            {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple(localStorage.getItem('q3'));
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple(localStorage.getItem('q3'));
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 4)
            {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple(localStorage.getItem('q4'));
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple(localStorage.getItem('q4'));
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 5)
            {
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
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple(localStorage.getItem('q6'));
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple(localStorage.getItem('q6'));
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 7)
            {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple(localStorage.getItem('q7'));
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple(localStorage.getItem('q7'));
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 8)
            {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple(localStorage.getItem('q8'));
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple(localStorage.getItem('q8'));
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 9)
            {
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
                window.setInterval(function () {
                    if (localStorage.getItem('Q12') == 'non') {
                        href_next = base_url + 'index.php/home/survey/' + survey + '/14';
                    }
                }, 50);
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple(localStorage.getItem('Q12'));
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple(localStorage.getItem('Q12'));
                    $("#next_btn").attr("href", href_next);
                });

            }

            if (id == 13)
            {
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
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple(localStorage.getItem('Q14'));
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple(localStorage.getItem('Q14'));
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 15)
            {
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

            }
            if (id == 17)
            {
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
                window.setInterval(function () {
                    control_q18();
                    control_q18_2();
                }, 50);

            }
            if (id == 19)
            {
                window.setInterval(function () {
                    control_q19();
                    control_q19_2();
                }, 50);

            }
            if (id == 20)
            {
                window.setInterval(function () {
                    control_q20();
                    control_q20_2();
                }, 50);

            }
            if (id == 21)
            {
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

            }
            if (id == 22)
            {
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
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple(localStorage.getItem('q23'));
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple(localStorage.getItem('q23'));
                    $("#next_btn").attr("href", href_next);
                });

            }
            if (id == 24)
            {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple(localStorage.getItem('q24'));
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple(localStorage.getItem('q24'));
                    $("#next_btn").attr("href", href_next);
                });

            }
            if (id == 25)
            {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple(localStorage.getItem('q25'));
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple(localStorage.getItem('q25'));
                    $("#next_btn").attr("href", href_next);
                });

            }
            if (id == 26)
            {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple(localStorage.getItem('q26'));
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple(localStorage.getItem('q26'));
                    $("#next_btn").attr("href", href_next);
                });

            }
            if (id == 27)
            {
                  $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ27();
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ27();
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 28)
            {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple(localStorage.getItem('Q28'));
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple(localStorage.getItem('Q28'));
                    $("#next_btn").attr("href", href_next);
                });

            }
            if (id == 29)
            {
                    $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ29();
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ29();
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 30)
            {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple(localStorage.getItem('q30'));
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple(localStorage.getItem('q30'));
                    $("#next_btn").attr("href", href_next);
                });

            }
            if (id == 31)
            {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertAnserSimple(localStorage.getItem('q31'));
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertAnserSimple(localStorage.getItem('q31'));
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == array_IDs.length) //id=32
            {
                $("#next_btn").html("Valider");
                href_next = base_url + "index.php/home/fin/"
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ32();
                        window.location.href = href_next;
                    }
                });
                $("#next_btn").click(function () {
                    insertQ32();
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
                $('.useLocal').each(function () {
                    var key = $(this).attr('id');
                    if (localStorage.getItem(key)) {
                        $(this).val(localStorage.getItem(key));
                    }
                });

                $('input[type="radio"]').each(function () {
                    var name = $(this).attr('name');
                    var value = localStorage.getItem(name);
                    $('input[value="' + value + '"][name="' + name + '"]').prop('checked', true);
                });


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
