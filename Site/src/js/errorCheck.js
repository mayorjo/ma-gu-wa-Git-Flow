/**
 * ETML
 * Autheur: guggisbeti
 * Date: 10.02.2017
 * Summary: page JS qui va regarder le formulaire est validé les entrées
 */

function checkForm(form){

    var regexName = new RegExp("^[a-zA-Z\-\ \é\è\ö]+$");
    var regexMail = new RegExp("^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$");
    var regexPhone = new RegExp("^[0-9]{3} [0-9]{3} [0-9]{2} [0-9]{2}$");
    var regexAddress = new RegExp("^[a-zA-Z éàü.,-]+ [0-9]{1,4}$");
    var regexNPA = new RegExp("^[0-9]{4}$");
    var regexJob = new RegExp("^[a-zA-Z\-\ \é\è\ö]+$");
    var regexAVS = new RegExp("^756\.[0-9]{4}\.[0-9]{4}\.[0-9]{2}$");


    var resultOne = regexName.test(form[0].value);
    var resultTwo = regexName.test(form[1].value);
    var resultThree = regexMail.test(form[2].value);
    var resultFour = regexPhone.test(form[3].value);
    var resultFive = regexAddress.test(form[4].value);
    var resultSix = regexNPA.test(form[5].value);
    var resultSeven = regexJob.test(form[6].value);
    var resultEight = regexAVS.test(form[7].value);


    var testOne = false;
    var testTwo = false;
    var testThree = false;
    var testFour = false;
    var testFive = false;
    var testSix = false;
    var testSeven = false;
    var testEight = false;


    if(form[0].value == "" || resultOne == false)
    {
        testOne = false;
        form[0].style.borderColor = "red";
        form[0].value = "";
    }else
    {
        form[0].style.borderColor = "";
        testOne = true;
    }

    if(form[1].value == "" || resultTwo == false)
    {
        testTwo = false;
        form[1].style.borderColor = "red";
        form[1].value = "";
    }else
    {
        form[1].style.borderColor = "";
        testTwo = true;
    }

    if(form[2].value == "" || resultThree == false)
    {
        testThree = false;
        form[2].style.borderColor = "red";
        form[2].value = "";
    }else
    {
        form[2].style.borderColor = "";
        testThree = true;
    }

    if(form[3].value  == "" || resultFour == false)
    {
        testFour = false;
        form[3].style.borderColor = "red";
        form[3].value = "";
    }else
    {
        form[3].style.borderColor = "";
        testFour = true;
    }

    if(form[4].value  == "" || resultFive == false)
    {
        testFour = false;
        form[4].style.borderColor = "red";
        form[4].value = "";
    }else
    {
        form[4].style.borderColor = "";
        testFive = true;
    }

    if(form[5].value  == "" || resultSix == false)
    {
        testFour = false;
        form[5].style.borderColor = "red";
        form[5].value = "";
    }else
    {
        form[5].style.borderColor = "";
        testSix = true;
    }

    if(form[6].value  == "" || resultSeven == false)
    {
        testFour = false;
        form[6].style.borderColor = "red";
        form[6].value = "";
    }else
    {
        form[6].style.borderColor = "";
        testSeven = true;
    }

    if(form[7].value  == "" || resultEight == false)
    {
        testFour = false;
        form[7].style.borderColor = "red";
        form[7].value = "";
    }else
    {
        form[7].style.borderColor = "";
        testEight = true;
    }

    if (testOne == false || testTwo == false || testThree == false || testFour == false || testFive == false || testSix == false || testSeven == false || testEight == false)
    {
        return false;
    }else
    {
        return true;
    }
}
