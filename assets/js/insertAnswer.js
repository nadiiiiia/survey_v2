


function insertAnserSimple(answer) { // answer simple = radio ou texte
   // alert(answer);
    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers/",
        data: {"answer_body": answer, "question_id": question_id, "user_id": user_id, "survey_id": survey},
        dataType: "json"
    });
}

function insertQ5() {
    var Q5 = [];
    for (i = 0; i < 3; i++) {
        Q5[i] = $('#q5-' + (i+1) + '').val();
    }

    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers/",
        data: {"answer_body": Q5, "question_id": question_id, "user_id": user_id, "survey_id": survey},
        dataType: "json",
//        success: function (result) {
//            console.log(result);
//        }
    });
}

function insertQ9() {
    var Q9_1 = $('#q9-1').val();
    var Q9_2 = $('#q9-2').val();
    var Q9_3 = $('#q9-3').val();
    var Q9_4 = $('#q9-4').val();
    var Q9 = [Q9_1, Q9_2, Q9_3, Q9_4];
    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers/",
        data: {"answer_body": Q9, "question_id": question_id, "user_id": user_id, "survey_id": survey},
        dataType: "json",
//        success: function (result) {
//            console.log(result);
//        }
    });
}
function insertQ10() {
    var Q10_1 = $('#q10-1').val();
    var Q10_2 = $('#q10-2').val();
    var Q10_3 = $('#q10-3').val();
    var Q10_4 = $('#q10-4').val();
    var Q10_5 = $('#q10-5').val();
    var Q10_6 = $('#q10-6').val();
    var Q10 = [Q10_1, Q10_2, Q10_3, Q10_4, Q10_5, Q10_6];
    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers/",
        data: {"answer_body": Q10, "question_id": question_id, "user_id": user_id, "survey_id": survey},
        dataType: "json",
//        success: function (result) {
//            console.log(result);
//        }
    });
}
function insertQ11() {
    var Q11_1 = $('#q11-1').val();
    var Q11_2 = $('#q11-2').val();
    var Q11_3 = $('#q11-3').val();
    var Q11_4 = $('#q11-4').val();
    var Q11_5 = $('#q11-5').val();
    var Q11_6 = $('#q11-6').val();
    var Q11_7 = $('#q11-7').val();
    var Q11_8 = $('#q11-8').val();
    var Q11_9 = $('#q11-9').val();
    var Q11_10 = $('#q11-10').val();
    var Q11 = [Q11_1, Q11_2, Q11_3, Q11_4, Q11_5, Q11_6, Q11_7, Q11_8, Q11_9, Q11_10];
    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers/",
        data: {"answer_body": Q11, "question_id": question_id, "user_id": user_id, "survey_id": survey},
        dataType: "json",
//        success: function (result) {
//            console.log(result);
//        }
    });
}
function insertQ13() {
    var Q13_1_1 = $('#q13-1-1').val();
    var Q13_1_2 = $('#q13-1-2').val();
    var Q13_2_1 = $('#q13-2-1').val();
    var Q13_2_2 = $('#q13-2-2').val();
    var Q13 = [Q13_1_1, Q13_1_2, Q13_2_1, Q13_2_2];
    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers/",
        data: {"answer_body": Q13, "question_id": question_id, "user_id": user_id, "survey_id": survey},
        dataType: "json",
//        success: function (result) {
//            console.log(result);
//        }
    });
}

function insertQ15() {
    var Q15_1 = $('#q15-1').val();
    var Q15_2 = $('#q15-2').val();
    var Q15 = [Q15_1, Q15_2];
    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers/",
        data: {"answer_body": Q15, "question_id": question_id, "user_id": user_id, "survey_id": survey},
        dataType: "json",
//        success: function (result) {
//            console.log(result);
//        }
    });
}
function insertQ21() {
    var Q21_1 = localStorage.getItem('Q21');
    var Q21_2;

    if (Q21_1 == 'oui') {
        Q21_2 = localStorage.getItem('q21-oui');
    } else {
        Q21_2 = localStorage.getItem('q21-non');
    }
    var Q21_3 = localStorage.getItem('q21-else');
    var Q21 = [Q21_1, Q21_2, Q21_3];
    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers/",
        data: {"answer_body": Q21, "question_id": question_id, "user_id": user_id, "survey_id": survey},
        dataType: "json",
//        success: function (result) {
//            console.log(result);
//        }
    });
}

function insertQ22() {
    var Q22_1 = localStorage.getItem('Q22');
    var Q22_2;
    var Q22;

    if (Q22_1 == 'non') {
        Q22_2 = localStorage.getItem('q22-non');
        Q22 = [Q22_1, Q22_2];
    } else {
        Q22 = Q22_1;
    }

    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers/",
        data: {"answer_body": Q22, "question_id": question_id, "user_id": user_id, "survey_id": survey},
        dataType: "json",
//        success: function (result) {
//            console.log(result);
//        }
    });
}

function insertQ27() {
    var Q27_1 = localStorage.getItem('Q27');
    var Q27_2;
    var Q27;

    if (Q27_1 == 'non') {
        Q27_2 = localStorage.getItem('q27-non');
        Q27 = [Q27_1, Q27_2];
    } else {
        Q27 = Q27_1;
    }

    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers/",
        data: {"answer_body": Q27, "question_id": question_id, "user_id": user_id, "survey_id": survey},
        dataType: "json",
        success: function (result) {
            console.log(result);
        }
    });
}
function insertQ29() {
    var Q29_1 = localStorage.getItem('Q29');
    var Q29_2;
    var Q29;

    if (Q29_1 == 'non') {
        Q29_2 = localStorage.getItem('q29-non');
        Q29 = [Q29_1, Q29_2];
    } else {
        Q29 = Q29_1;
    }

    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers/",
        data: {"answer_body": Q29, "question_id": question_id, "user_id": user_id, "survey_id": survey},
        dataType: "json",
        success: function (result) {
            console.log(result);
        }
    });
}
function insertQ32() {
    var Q32_1 = localStorage.getItem('Q32-1');
    var Q32_2 = localStorage.getItem('Q32-2');
    var Q32_3 = localStorage.getItem('Q32-3');
    var Q32_4 = localStorage.getItem('Q32-4');
    var Q32_5 = localStorage.getItem('Q32-5');
    var Q32_6 = localStorage.getItem('Q32-6');
    var Q32 = [Q32_1, Q32_2, Q32_3, Q32_4, Q32_5, Q32_6];
    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers/",
        data: {"answer_body": Q32, "question_id": question_id, "user_id": user_id, "survey_id": survey},
        dataType: "json",
//        success: function (result) {
//            console.log(result);
//        }
    });
}
function insertQ16() {
    var Q16_1_1 = localStorage.getItem('q16-1');
    var Q16_1_2 = localStorage.getItem('Q16-1');
    var Q16_2_1 = localStorage.getItem('q16-2');
    var Q16_2_2 = localStorage.getItem('Q16-2');
    var Q16_3_1 = localStorage.getItem('q16-3');
    var Q16_3_2 = localStorage.getItem('Q16-3');

    var Q16 = [Q16_1_1, Q16_1_2, Q16_2_1, Q16_2_2, Q16_3_1, Q16_3_2];
    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers/",
        data: {"answer_body": Q16, "question_id": question_id, "user_id": user_id, "survey_id": survey},
        dataType: "json",
//        success: function (result) {
//            console.log(result);
//        }
    });
}
function insertQ17() {
    function getTableQ17Data() {
        var array = [];
        //$("#btnShow2").on("click", function () {
        $("tr:nth-child(n+1)").each(function () {
            rowData = $(this).find('input').serializeArray();
            var rowAr = {};
            $.each(rowData, function (e, v) {
                rowAr[v['name']] = v['value'];
            });
            array.push(rowAr);
        });

        return array;
    }
    // alert(array[3].user);
    var Q17 = getTableQ17Data();
    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers_q17/",
        data: {"answer_body": Q17},
        dataType: "json",
//        success: function (result) {
//            console.log(result);
//        }
    });

}
function insertQ18() {

    var Q18_1_1 = []; // contient les valeurs oui/non
    var Q18_1_2 = []; // contient les valeurs qte
    var Q18_2 = []; // contient les valeurs percent

    // le 1er tableau
    for (i = 1; i < 7; i++) {
        Q18_1_1[i] = localStorage.getItem('Q18-' + i + ''); //oui/non
    }
    for (i = 1; i < 7; i++) {
        Q18_1_2[i] = localStorage.getItem('q18-' + i + '-2'); //qte
    }

    // le 2ème tableau
    for (i = 1; i < 11; i++) {
        Q18_2[i] = localStorage.getItem('q18-' + i + '-4');//percent
    }
    Q18_2[11] = localStorage.getItem('q18-autres');

    var oui_non_table = [Q18_1_1[1], Q18_1_1[2], Q18_1_1[3], Q18_1_1[4], Q18_1_1[5], Q18_1_1[6]];
    var qte_table = [Q18_1_2[1], Q18_1_2[2], Q18_1_2[3], Q18_1_2[4], Q18_1_2[5], Q18_1_2[6]];
    var autres = localStorage.getItem('q18-1-3'); // contient les valeurs à préciser
    var percent_table = [Q18_2[1], Q18_2[2], Q18_2[3], Q18_2[4], Q18_2[5], Q18_2[6], Q18_2[7], Q18_2[8], Q18_2[9], Q18_2[10], Q18_2[11]];


    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers_q18_q19_q20/",
        data: {"oui_non_table": oui_non_table, "qte_table": qte_table, "autres": autres, "percent_table": percent_table, "question_id": question_id, "user_id": user_id, "survey_id": survey},
        dataType: "json",
//        success: function (result) {
//            console.log(result);
//        }
    });
}
function insertQ19() {

    // le 1er tableau
    var Q19_1_1 = []; // contient les valeurs oui/non
    for (i = 1; i < 11; i++) {
        Q19_1_1[i] = localStorage.getItem('Q19-' + i + '');
    }
    var oui_non_table = [Q19_1_1[1], Q19_1_1[2], Q19_1_1[3], Q19_1_1[4], Q19_1_1[5], Q19_1_1[6], Q19_1_1[7], Q19_1_1[8], Q19_1_1[9], Q19_1_1[10]];

    var Q19_1_2 = []; // contient les valeurs qte
    for (i = 1; i < 11; i++) {
        Q19_1_2[i] = localStorage.getItem('q19-' + i + '-3');
    }
    var qte_table = [Q19_1_2[1], Q19_1_2[2], Q19_1_2[3], Q19_1_2[4], Q19_1_2[5], Q19_1_2[6], Q19_1_2[7], Q19_1_2[8], Q19_1_2[9], Q19_1_2[10]];

    var autres = localStorage.getItem('q19-1-2'); // contient les valeurs à préciser

    // le 2ème tableau
    var Q19_2 = [];
    for (i = 1; i < 11; i++) {
        Q19_2[i] = localStorage.getItem('q19-' + i + '-4');
    }
    Q19_2[10] = localStorage.getItem('q19-autres');

    var percent_table = [Q19_2[1], Q19_2[2], Q19_2[3], Q19_2[4], Q19_2[5], Q19_2[6], Q19_2[7], Q19_2[8], Q19_2[9], Q19_2[10]];

    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers_q18_q19_q20/",
        data: {"oui_non_table": oui_non_table, "qte_table": qte_table, "autres": autres, "percent_table": percent_table, "question_id": question_id, "user_id": user_id, "survey_id": survey},
        dataType: "json",
//        success: function (result) {
//            console.log(result);
//        }
    });
}
function insertQ20() {

    var Q20_1_1 = []; // contient les valeurs oui/non
    var Q20_1_3 = []; // contient les valeurs qte
    var Q20_2 = []; // contient les valeurs percent

    // le 1er tableau
    for (i = 1; i < 8; i++) {
        Q20_1_1[i] = localStorage.getItem('Q20-' + i + ''); //oui/non
    }
    for (i = 1; i < 8; i++) {
        Q20_1_3[i] = localStorage.getItem('q20-' + i + '-3'); //qte
    }
    // le 2ème tableau
    var Q20_2 = [];
    for (i = 1; i < 10; i++) {
        Q20_2[i] = localStorage.getItem('q20-' + i + '-4');
    }
    Q20_2[10] = localStorage.getItem('q20-autres');

    var oui_non_table = [Q20_1_1[1], Q20_1_1[2], Q20_1_1[3], Q20_1_1[4], Q20_1_1[5], Q20_1_1[6], Q20_1_1[7]];
    var autres = localStorage.getItem('q20-1-2'); // contient les valeurs à préciser
    var qte_table = [Q20_1_3[1], Q20_1_3[2], Q20_1_3[3], Q20_1_3[4], Q20_1_3[5], Q20_1_3[6], Q20_1_3[7]];
    var percent_table = [Q20_2[1], Q20_2[2], Q20_2[3], Q20_2[4], Q20_2[5], Q20_2[6], Q20_2[7], Q20_2[8], Q20_2[9], Q20_2[10]];


    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers_q18_q19_q20/",
        data: {"oui_non_table": oui_non_table, "qte_table": qte_table, "autres": autres, "percent_table": percent_table, "question_id": question_id, "user_id": user_id, "survey_id": survey},
        dataType: "json",
//        success: function (result) {
//            console.log(result);
//        }
    });

}

/*
 function insertQ2() {
 href_next = base_url + 'index.php/home/page/' + survey + '/25'; //if q3 == non
 $("#next_btn").attr("href", href_next);
 
 var Q2 = localStorage.getItem('q2');
 question_to_go = 25;
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers_and_back/",
 data: {"answer_body": Q2, "question_id": question_id, "user_id": user_id, "survey": survey},
 dataType: "json"
 });
 }
 
 function insertQ3()
 {
 if ($('input[value="non"][name="Q3"]').prop("checked") == true) {
 href_next = base_url + 'index.php/home/page/' + survey + '/5'; //if q3 == non
 Q3 = 'non';
 $("#next_btn").attr("href", href_next);
 } else {
 Q3 = 'oui';
 }
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers/",
 data: {"answer_body": Q3, "question_id": question_id, "user_id": user_id},
 dataType: "json"
 });
 
 }
 
 function insertQ4() {
 
 question_to_go = 7;
 var Q4_1 = localStorage.getItem('q4-1-1');
 var Q4_2 = localStorage.getItem('q4-2-1');
 $(this).attr("href", href_next);
 var Q4 = [Q4_1, Q4_2];
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers_array_back/",
 data: {"answer_body": Q4, "question_id": question_id, "user_id": user_id, "next": question_to_go, 'back': question_number, "survey": survey},
 dataType: "json"
 });
 }
 
 //function insertQ5() {
 //    var Q5;
 //    href_back = base_url + 'index.php/home/page/' + survey + '/3';
 //    if ($('input[value="non"][name="Q5"]').prop("checked") == true) {
 //        href_next = base_url + 'index.php/home/page/' + survey + '/25';
 //        question_to_go = 25;
 //        Q5 = 'non';
 //        $("#next_btn").attr("href", href_next);
 //    } else {
 //        Q5 = 'oui';
 //    }
 //    $.ajax({
 //        type: "post",
 //        url: base_url + "index.php/home/set_answers_and_back/",
 //        data: {"answer_body": Q5, "question_id": question_id, "user_id": user_id, "next": question_to_go, 'back': question_number, "survey": survey},
 //        dataType: "json"
 //    });
 //
 //}
 
 function insertQ6() {
 question_to_go = 7;
 var min = localStorage.getItem('q6-1');
 var max = localStorage.getItem('q6-2');
 var Q6 = [min, max];
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers_array/",
 data: {"answer_body": Q6, "question_id": question_id, "user_id": user_id, "next": question_to_go, 'back': question_number, "survey": survey},
 dataType: "json"
 });
 }
 
 function insertQ7() {
 function getTableQ7Data() {
 var array = [];
 //$("#btnShow2").on("click", function () {
 $("tr:nth-child(n+1)").each(function () {
 rowData = $(this).find('input, select').serializeArray();
 var rowAr = {};
 $.each(rowData, function (e, v) {
 rowAr[v['name']] = v['value'];
 });
 array.push(rowAr);
 });
 //                        console.log(array);
 //                    });
 return array;
 }
 var Q7 = getTableQ7Data();
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers_q7/",
 data: {"answer_body": Q7},
 dataType: "json",
 });
 
 }
 
 function insertQ8() {
 if ($('input[value="non"][name="Q8"]').prop("checked") == true) {
 question_to_go = 13;
 href_next = base_url + 'index.php/home/page/' + survey + '/13'; //if q8 == non
 $("#next_btn").attr("href", href_next);
 }
 
 var Q8 = localStorage.getItem('Q8');
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers_and_back/",
 data: {"answer_body": Q8, "question_id": question_id, "user_id": user_id, "next": question_to_go, 'back': question_number, "survey": survey},
 dataType: "json"
 });
 
 }
 
 function insertQ9() {
 var Q9 = localStorage.getItem('Q9');
 var tab_data;
 
 function getTableQ9Data() {
 var array = [];
 $(".qte tr:nth-child(n+1)").each(function () {
 rowData = $(this).find('input').serializeArray();
 var rowAr = {};
 $.each(rowData, function (e, v) {
 rowAr[v['name']] = v['value'];
 });
 array.push(rowAr);
 });
 return array;
 }
 
 tab_data = getTableQ9Data();
 //alert(tab_data[1].qte);
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers_q9_q10_q11/",
 data: {"answer_body": Q9, "tab_data": tab_data, "question_id": question_id, "user_id": user_id},
 dataType: "json",
 success: function (result) {
 console.log(result);
 }
 });
 }
 
 function insertQ10() {
 var Q10 = localStorage.getItem('Q10');
 Q10 = Q10.toString();
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers/",
 data: {"answer_body": Q10, "question_id": question_id, "user_id": user_id},
 dataType: "json"
 });
 
 }
 
 function insertQ11() {
 var Q11 = localStorage.getItem('Q11');
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers/",
 data: {"answer_body": Q11, "question_id": question_id, "user_id": user_id},
 dataType: "json"
 });
 }
 
 function insertQ12() {
 var Q12 = localStorage.getItem('q12');
 question_to_go = 13;
 
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers_and_back/",
 data: {"answer_body": Q12, "question_id": question_id, "user_id": user_id, "next": question_to_go, 'back': question_number, "survey": survey},
 dataType: "json"
 });
 }
 
 function insertQ13() {
 var q13 = parseFloat($('input[name="Q13-1"]').val());
 q13 = isNaN(q13) ? '0.00' : q13;
 var question_to_go =15;
 if (q13 <= 0) {
 href_next = base_url + 'index.php/home/page/' + survey + '/15';
 $("#next_btn").attr("href", href_next);
 question_to_go = 15;
 }
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers_and_back/",
 data: {"answer_body": q13, "question_id": question_id, "user_id": user_id, "next": question_to_go, 'back': question_number, "survey": survey},
 dataType: "json"
 });
 }
 
 
 
 function insertQ14() {
 
 function getTableQ14Data() {
 var array = [];
 //$("#btnShow2").on("click", function () {
 $("tr:nth-child(n+1)").each(function () {
 rowData = $(this).find('input').serializeArray();
 var rowAr = {};
 $.each(rowData, function (e, v) {
 rowAr[v['name']] = v['value'];
 });
 array.push(rowAr);
 });
 //                        console.log(array);
 //                    });
 return array;
 }
 $("#next_btn").attr("href", href_next);
 var Q14 = getTableQ14Data();
 question_to_go = 15 ;
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers_q14/",
 data: {"answer_body": Q14,"user_id": user_id, "next": question_to_go, 'back': question_number, "survey": survey},
 dataType: "json"
 });
 }
 
 function insertQ15() {
 if ($('#q15 option:selected').val() == 'dechet_par_dechet') {
 href_next = base_url + 'index.php/home/page/' + survey + '/16';
 $("#next_btn").attr("href", href_next);
 } else if ($('#q15 option:selected').val() == 'avec_regroupements') {
 href_next = base_url + 'index.php/home/page/' + survey + '/17';
 $("#next_btn").attr("href", href_next);
 } else {
 question_to_go = 18 ;
 href_next = base_url + 'index.php/home/page/' + survey + '/18';
 $("#next_btn").attr("href", href_next);
 }
 
 var Q15 = $('#q15 option:selected').val();
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers_and_back/",
 data: {"answer_body": Q15, "question_id": question_id, "user_id": user_id, "next": question_to_go, 'back': question_number, "survey": survey},
 dataType: "json"
 });
 }
 
 function insertQ16() {
 href_next = base_url + 'index.php/home/page/' + survey + '/18';
 $("#next_btn").attr("href", href_next);
 var Q16 = localStorage.getItem('q16');
 question_to_go = 18 ;
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers_and_back/",
 data: {"answer_body": Q16, "question_id": question_id, "user_id": user_id, "next": question_to_go, 'back': question_number, "survey": survey},
 dataType: "json",
 //                    success: function (result) {
 //                        console.log(result);
 //                    }
 });
 }
 
 function insertQ17() {
 var Q17 = localStorage.getItem('q17');
 question_to_go = 18 ;
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers_and_back/",
 data: {"answer_body": Q17, "question_id": question_id, "user_id": user_id, "next": question_to_go, 'back': question_number, "survey": survey},
 dataType: "json",
 //                    success: function (result) {
 //                        console.log(result);
 //                    }
 });
 }
 
 function insertQ18() {
 question_to_go = 19 ;
 }
 
 function insertQ19() {
 if ($('input[value="non"][name="Q19"]').prop("checked") == true) {
 href_next = base_url + 'index.php/home/page/' + survey + '/21';
 $("#next_btn").attr("href", href_next);
 question_to_go = 21 ;
 }
 var Q19 = localStorage.getItem('Q19');
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers_and_back/",
 data: {"answer_body": Q19, "question_id": question_id, "user_id": user_id, "next": question_to_go, 'back': question_number, "survey": survey},
 dataType: "json"
 });
 }
 
 function insertQ20() {
 var Q20 = localStorage.getItem('q20');
 question_to_go = 21 ;
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers_and_back/",
 data: {"answer_body": Q20, "question_id": question_id, "user_id": user_id, "next": question_to_go, 'back': question_number, "survey": survey},
 dataType: "json"
 });
 }
 
 function insertQ21() {
 
 var Q21 = localStorage.getItem('q21');
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers/",
 data: {"answer_body": Q21, "question_id": question_id, "user_id": user_id},
 dataType: "json",
 //                    success: function (result) {
 //                        console.log(result);
 //                    }
 });
 }
 
 function insertQ22() {
 var Q22 = localStorage.getItem('q22');
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers/",
 data: {"answer_body": Q22, "question_id": question_id, "user_id": user_id},
 dataType: "json",
 //                    success: function (result) {
 //                        console.log(result);
 //                    }
 });
 }
 
 function insertQ23() {
 var Q23 = localStorage.getItem('q23');
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers/",
 data: {"answer_body": Q23, "question_id": question_id, "user_id": user_id},
 dataType: "json",
 //                    success: function (result) {
 //                        console.log(result);
 //                    }
 });
 }
 
 function insertQ24() {
 var Q24 = localStorage.getItem('q24');
 question_to_go = 25 ;
 
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers_and_back/",
 data: {"answer_body": Q24, "question_id": question_id, "user_id": user_id, "next": question_to_go, 'back': question_number, "survey": survey},
 dataType: "json"
 });
 }
 
 function insertQ25() {
 if ($('input[value="non"][name="Q25"]').prop("checked") == true) {
 href_next = base_url + 'index.php/home/page/' + survey + '/27';
 $("#next_btn").attr("href", href_next);
 }
 var Q25 = localStorage.getItem('Q25');
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers/",
 data: {"answer_body": Q25, "question_id": question_id, "user_id": user_id},
 dataType: "json",
 //                    success: function (result) {
 //                        console.log(result);
 //                    }
 });
 }
 
 function insertQ26() {
 var Q26 = localStorage.getItem('Q26');
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers/",
 data: {"answer_body": Q26, "question_id": question_id, "user_id": user_id},
 dataType: "json",
 //                    success: function (result) {
 //                        console.log(result);
 //                    }
 });
 }
 
 function insertQ27() {
 if ($('input[value="non"][name="Q27"]').prop("checked") == true) {
 href_next = base_url + 'index.php/home/page/' + survey + '/29';
 $("#next_btn").attr("href", href_next);
 }
 var Q27 = localStorage.getItem('Q27');
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers/",
 data: {"answer_body": Q27, "question_id": question_id, "user_id": user_id},
 dataType: "json",
 //                    success: function (result) {
 //                        console.log(result);
 //                    }
 });
 }
 
 function insertQ28() {
 var Q28 = localStorage.getItem('Q28');
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers/",
 data: {"answer_body": Q28, "question_id": question_id, "user_id": user_id},
 dataType: "json",
 //                    success: function (result) {
 //                        console.log(result);
 //                    }
 });
 }
 
 function insertQ29() {
 var Q29 = localStorage.getItem('q29');
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers/",
 data: {"answer_body": Q29, "question_id": question_id, "user_id": user_id},
 dataType: "json",
 //                    success: function (result) {
 //                        console.log(result);
 //                    }
 });
 }
 
 function insertQ30() {
 var en_Km = localStorage.getItem('q30-1');
 var en_min = localStorage.getItem('q30-2');
 var Q30 = [en_Km, en_min];
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers_array/",
 data: {"answer_body": Q30, "question_id": question_id, "user_id": user_id},
 dataType: "json"
 });
 }
 
 function insertQ31() {
 var Q31_1 = localStorage.getItem('q31-1');
 var Q31_2 = localStorage.getItem('q31-2');
 var Q31 = [Q31_1, Q31_2];
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers_array/",
 data: {"answer_body": Q31, "question_id": question_id, "user_id": user_id},
 dataType: "json"
 });
 }
 
 function insertQ32() {
 var Q32 = localStorage.getItem('q32');
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers/",
 data: {"answer_body": Q32, "question_id": question_id, "user_id": user_id},
 dataType: "json",
 //                    success: function (result) {
 //                        console.log(result);
 //                    }
 });
 }
 
 function insertQ33() {
 var Q33 = localStorage.getItem('q33');
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers/",
 data: {"answer_body": Q33, "question_id": question_id, "user_id": user_id},
 dataType: "json",
 //                    success: function (result) {
 //                        console.log(result);
 //                    }
 });
 }
 
 function insertQ34() {
 var Q34_1 = localStorage.getItem('q34-1');
 var Q34_2 = localStorage.getItem('q34-2');
 var Q34_3 = localStorage.getItem('q34-3');
 var Q34 = [Q34_1, Q34_2, Q34_3];
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers_array/",
 data: {"answer_body": Q34, "question_id": question_id, "user_id": user_id},
 dataType: "json"
 });
 }
 
 function insertQ35() {
 Q35 = localStorage.getItem('q35');
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers/",
 data: {"answer_body": Q35, "question_id": question_id, "user_id": user_id},
 dataType: "json"
 });
 }
 
 function insertQ36() {
 Q36 = localStorage.getItem('q36');
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers/",
 data: {"answer_body": Q36, "question_id": question_id, "user_id": user_id},
 dataType: "json"
 });
 }
 
 function insertQ37() {
 Q37 = localStorage.getItem('q37');
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers/",
 data: {"answer_body": Q37, "question_id": question_id, "user_id": user_id},
 dataType: "json"
 });
 }
 
 function insertQ38() {
 var Q38_1 = localStorage.getItem('q38-1');
 var Q38_2 = localStorage.getItem('q38-2');
 var Q38_3 = localStorage.getItem('q38-3');
 var Q38_4 = localStorage.getItem('q38-4');
 var Q38_5 = localStorage.getItem('q38-5');
 var Q38_6 = localStorage.getItem('q38-6');
 var Q38 = [Q38_1, Q38_2, Q38_3, Q38_4, Q38_5, Q38_6];
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers_array/",
 data: {"answer_body": Q38, "question_id": question_id, "user_id": user_id},
 dataType: "json"
 });
 }
 
 function insertQ39() {
 href_next = base_url + "index.php/home/fin/"
 $(this).attr("href", href_next);
 Q39 = localStorage.getItem('q39');
 $.ajax({
 type: "post",
 url: base_url + "index.php/home/set_answers/",
 data: {"answer_body": Q39, "question_id": question_id, "user_id": user_id},
 dataType: "json"
 });
 }
 
 function getBackPage(id) {
 $.each(back_page, function (key, val) {
 
 if (val.question_nbr == id) {
 id_back = val.back_nbr;
 }
 
 });
 return id_back;
 }
 
 */