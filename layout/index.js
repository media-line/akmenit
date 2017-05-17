function Collap(num) {
    var wrap = document.getElementsByClassName('bouquet');
    var num = num;
    var targ = wrap[num].getElementsByClassName('bouquet__column');
    var count = wrap[num].getElementsByClassName('bouquet__column').length;

    /*create array with condition bouquet__column*/
    var arr = Array();
    for (var r = 0; r < count; r++) {
        var style = getComputedStyle(targ[r]);
        arr.push(style.display);
    }

    /*show hidden bouquets*/
    for (var r = 0; r < arr.length; r++) {
        if (arr[r] == 'none') {
            targ[r].style.display = 'block';
        }
    }

    /*hide button "See more"*/
    var tar = wrap[num].getElementsByClassName('main-bouquet-wrap')[0];
    var tar = tar.getElementsByClassName('button')[0];
    tar.style.display = "none";
}

function showPopup() {
    $(".popupform").fadeIn(800);
    $("body").css("cursor", "pointer");
}

function showPopupDown() {
    /*show popup with form*/
    $(".popupdownload").fadeIn(800);
    $("body").css("cursor", "pointer");

    /*position popup with form*/
    var dop = window.pageYOffset;
    var target2 = document.getElementsByClassName("formdownload")[0];

    target2.style.top = dop + 40 + "px";
}

function getName(str) {
    if (str.lastIndexOf('\\')) {
        var i = str.lastIndexOf('\\') + 1;
    }
    else {
        var i = str.lastIndexOf('/') + 1;
    }
    var filename = str.slice(i);
    var uploaded = document.getElementById("fileformlabel");
    uploaded.innerHTML = filename;
    uploaded.style.display = "block";

    var button = document.getElementsByClassName("selectbutton")[0];
    button.style.display = "none";
}

function FormPosition() {
    var target = document.getElementsByClassName("form-picking")[0];

    var whole = document.getElementsByClassName("top-block")[0].clientHeight;
    var padding = document.getElementsByClassName("wrapper-top")[0].clientHeight;

    var pad = whole - (padding + 60);

    target.style.top = "-" + pad + "px";
    target.style.marginBottom = "-" + pad + "px";
}

function CheckPopup() {
    var target = document.getElementsByClassName("popup_message");
    var getComputedStyle = window.getComputedStyle(target[0], null);

    if (getComputedStyle.display == "block") {
        $("body").css("cursor", "pointer");
    } else {
        $("body").css("cursor", "auto");
    }
}

$(document).ready(function () {
    $(document).mouseup(function (e) {
        var div = $(".form");
        var hidden = $(".popup");

        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            hidden.fadeOut(800);
            $("body").css("cursor", "auto");
        }
    });

    CheckPopup();
});

window.onload = function () {
    /*ClosePopupSafari();*/

    if (/Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        //for mobile
        FormPosition();
    } else {
        //for desktop
        var script = document.createElement('script');
        script.src = "/bitrix/templates/akmenita/js/jquery.scrollify.js";
        document.getElementsByTagName('head')[0].appendChild(script);
    }
};