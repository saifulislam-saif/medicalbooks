$(document).ready(function () {
    "use strict";

    //sidebar toggler
    $('.sidebar__controller i').click(function () {
        $('.sidebar_menu').toggle(300);
        $(this).toggleClass('rotation');
    });

    //Solve Video
    $('.venobox').venobox();



    
    
    //date countdown
    var x = setInterval(function () {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        document.querySelector(".card_rate").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";
        if (distance < 0) {
            clearInterval(x);
            document.querySelector(".card_rate").innerHTML = "EXPIRED";
        }
    }, 1000);


    //Ans Testing Demo
    function testAns() {

        // A start and it is True
        var aTrue = document.getElementById('t-a-q-id');
        var aFalse = document.getElementById('f-a-q-id');

        if (aTrue.checked == true) {
            document.querySelector(' #t-a-q-id + .tf_ans').classList.add('checked_ans_correct');
        } else if (aFalse.checked == true) {
            document.querySelector(' #f-a-q-id + .tf_ans').classList.add('checked_ans_wrong');
            document.querySelector(' #t-a-q-id + .tf_ans').classList.add('checked_ans_correct');
        } else {
            document.querySelector(' #t-a-q-id + .tf_ans').classList.add('checked_ans_correct');
        }


        // B start and it is False
        var bTrue = document.getElementById('t-b-q-id');
        var bFalse = document.getElementById('f-b-q-id');

        if (bFalse.checked == true) {
            document.querySelector(' #f-b-q-id + .tf_ans').classList.add('checked_ans_correct');
        } else if (bTrue.checked == true) {
            document.querySelector(' #t-b-q-id + .tf_ans').classList.add('checked_ans_wrong');
            document.querySelector(' #f-b-q-id + .tf_ans').classList.add('checked_ans_correct');
        } else {
            document.querySelector(' #f-b-q-id + .tf_ans').classList.add('checked_ans_correct');
        }


        // C start and it is True
        var cTrue = document.getElementById('t-c-q-id');
        var cFalse = document.getElementById('f-c-q-id');

        if (cTrue.checked == true) {
            document.querySelector(' #t-c-q-id + .tf_ans').classList.add('checked_ans_correct');
        } else if (cFalse.checked == true) {
            document.querySelector(' #f-c-q-id + .tf_ans').classList.add('checked_ans_wrong');
            document.querySelector(' #t-c-q-id + .tf_ans').classList.add('checked_ans_correct');
        } else {
            document.querySelector(' #t-c-q-id + .tf_ans').classList.add('checked_ans_correct');
        }


        // D start and it is True
        var dTrue = document.getElementById('t-d-q-id');
        var dFalse = document.getElementById('f-d-q-id');

        if (dTrue.checked == true) {
            document.querySelector(' #t-d-q-id + .tf_ans').classList.add('checked_ans_correct');
        } else if (dFalse.checked == true) {
            document.querySelector(' #f-d-q-id + .tf_ans').classList.add('checked_ans_wrong');
            document.querySelector(' #t-d-q-id + .tf_ans').classList.add('checked_ans_correct');
        } else {
            document.querySelector(' #t-d-q-id + .tf_ans').classList.add('checked_ans_correct');
        }


        // E start and it is True
        var eTrue = document.getElementById('t-e-q-id');
        var eFalse = document.getElementById('f-e-q-id');

        if (eTrue.checked == true) {
            document.querySelector(' #t-e-q-id + .tf_ans').classList.add('checked_ans_correct');
        } else if (eFalse.checked == true) {
            document.querySelector(' #f-e-q-id + .tf_ans').classList.add('checked_ans_wrong');
            document.querySelector(' #t-e-q-id + .tf_ans').classList.add('checked_ans_correct');
        } else {
            document.querySelector(' #t-e-q-id + .tf_ans').classList.add('checked_ans_correct');
        }
        
    }




});
