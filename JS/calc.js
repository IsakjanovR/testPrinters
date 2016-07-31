$(document).ready(function () {
function calcul() {
    sind = document.CalcForm.PrnSelect.selectedIndex + 1;
    sitx = document.CalcForm.PrnSelect[document.CalcForm.PrnSelect.selectedIndex].text

    tbkprice = a1 / a2 * document.CalcForm.T4.value / 5;
    tccprice = a3 / a4 * document.CalcForm.T1.value / 5;
    tcmprice = a3 / a4 * document.CalcForm.T2.value / 5;
    tcyprice = a3 / a4 * document.CalcForm.T3.value / 5;
    epbprice = a5 / a6;
    epcprice =a7 / a8 * 3;
    bltprice = a9 / a10;
    fsrprice = a11 / a12;
    tbwprice = a1 / a2 * document.CalcForm.T5.value / 5;

    fnlcprice = tbkprice + tccprice + tcmprice + tcyprice + epbprice + epcprice + bltprice + fsrprice;
    fnlbprice = tbwprice + epbprice + bltprice + fsrprice;

    document.CalcForm.resultc.value = fnlcprice;
    document.CalcForm.resultb.value = fnlbprice;

    return false;
console.log(fnlcprice)
}
function calctotal() {
    if (fnlcprice == 0) {
        alert("Сначала произведите рассчёт стоимости оттиска!");
        return false;
    }
    clrtotal = document.TotalForm.T1.value * fnlcprice * 12
    blktotal = document.TotalForm.T3.value * fnlbprice * 12
    alltotal = clrtotal + blktotal
    document.TotalForm.T6.value = alltotal
    return false;
}

function mtoday() {
    document.TotalForm.T2.value = document.TotalForm.T1.value / document.TotalForm.T5.value;
    document.TotalForm.T4.value = document.TotalForm.T3.value / document.TotalForm.T5.value;
    direction = 1
    return false;
}

function daytom() {
    document.TotalForm.T1.value = document.TotalForm.T2.value * document.TotalForm.T5.value;
    document.TotalForm.T3.value = document.TotalForm.T4.value * document.TotalForm.T5.value;
    direction = 2
    return false;
}
function daysm() {
    if (direction == 1) {
        mtoday();
    }
    else {
        daytom();
    }

    return false;
}
function poliset() {
    document.CalcForm.T1.value = 15;
    document.CalcForm.T2.value = 15;
    document.CalcForm.T3.value = 15;
    document.CalcForm.T4.value = 10;
    return false;
}
function setfoto() {
    document.CalcForm.T1.value = 32.4;
    document.CalcForm.T2.value = 40.8;
    document.CalcForm.T3.value = 44.8;
    document.CalcForm.T4.value = 6.6;
    return false;
}
function setvisit() {
    document.CalcForm.T1.value = 13;
    document.CalcForm.T2.value = 15;
    document.CalcForm.T3.value = 18;
    document.CalcForm.T4.value = 3;
    return false;
}
function setmemo() {
    document.CalcForm.T1.value = 1.8;
    document.CalcForm.T2.value = 2.1;
    document.CalcForm.T3.value = 1.4;
    document.CalcForm.T4.value = 1.1;
    return false;
}
function setgraph() {
    document.CalcForm.T1.value = 11.1;
    document.CalcForm.T2.value = 8.9;
    document.CalcForm.T3.value = 9.8;
    document.CalcForm.T4.value = 0.1;
    return false;
}
function setweb() {
    document.CalcForm.T1.value = 18.1;
    document.CalcForm.T2.value = 10.7;
    document.CalcForm.T3.value = 6.8;
    document.CalcForm.T4.value = 0.3;
    return false;
}
function setpres() {
    document.CalcForm.T1.value = 2.8;
    document.CalcForm.T2.value = 1.3;
    document.CalcForm.T3.value = 0.7;
    document.CalcForm.T4.value = 1.3;
    return false;
}
function setdoc() {
    document.CalcForm.T5.value = 7.5;
    return false;
}
function prices() {
    sind = document.CalcForm.PrnSelect.selectedIndex + 1;
    document.CalcForm.T6.value = printer[sind][1];
    document.CalcForm.T7.value = printer[sind][3];
    return false;
}
function setprice() {
    sind = document.CalcForm.PrnSelect.selectedIndex + 1;
    printer[sind][1] = document.CalcForm.T6.value;
    printer[sind][3] = document.CalcForm.T7.value;
    return false;
}

function validatet1() {
    prcnt = document.CalcForm.T1.value;
    if (prcnt < 0) {
        document.CalcForm.T1.value = 0
    }
    if (prcnt > 100) {
        document.CalcForm.T1.value = 100
    }
    return false;
}

function MM_openBrWindow(theURL,winName,features) { //v2.0
    window.open(theURL,winName,features);
}
function validatet2() {
    prcnt = document.CalcForm.T2.value;
    if (prcnt < 0) {
        document.CalcForm.T2.value = 0
    }
    if (prcnt > 100) {
        document.CalcForm.T2.value = 100
    }
    return false;
}

function validatet3() {
    prcnt = document.CalcForm.T3.value;
    if (prcnt < 0) {
        document.CalcForm.T3.value = 0
    }
    if (prcnt > 100) {
        document.CalcForm.T3.value = 100
    }
    return false;
}

function validatet4() {
    prcnt = document.CalcForm.T4.value;
    if (prcnt < 0) {
        document.CalcForm.T4.value = 0
    }
    if (prcnt > 100) {
        document.CalcForm.T4.value = 100
    }
    return false;
}
function validatet5() {
    prcnt = document.CalcForm.T5.value;
    if (prcnt < 0) {
        document.CalcForm.T5.value = 0
    }
    if (prcnt > 100) {
        document.CalcForm.T5.value = 100
    }
    return false;
}
function allreset() {
    direction = 0;
    fnlcprice = 0;
    fnlbprice = 0;
    sind = 0;
    return false;
}

})