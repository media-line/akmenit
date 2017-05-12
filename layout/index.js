function Collap(num) {
    var wrap = document.getElementsByClassName('bouquet');
    var num = num;
    var targ = wrap[num].getElementsByClassName('bouquet__column');

    var arr = Array();

    for (var r = 0; r < 5; r++) {
        var style = getComputedStyle(targ[r]);
        arr.push(style.display);
    }

    var count = 0;

    for (var r = 0; r < arr.length; r++) {
        if (arr[r] == 'block') {
            count++;
            if (count == 4) {
                var tar = wrap[num].getElementsByClassName('main-bouquet-wrap')[0];
                var tar = tar.getElementsByClassName('button')[0];
                tar.style.display = "none";
            }
        }
    }

    targ[count].style.display = 'block';

    console.log(count);
}

function showPopup() {
    $(".popupform").fadeIn(800);

}

function showPopupDown() {
    $(".popupdownload").fadeIn(800);
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

function FormPosition2() {
    var target2 = document.getElementsByClassName("formdownload")[0];

    var dop = document.getElementsByClassName("main-top-block")[0].clientHeight;

    target2.style.top = dop - 300 + "px";

    console.log(dop);
}

$(document).ready(function () {
    function include(url) {
        var script = document.createElement('script');
        script.src = url;
        document.getElementsByTagName('head')[0].appendChild(script);
    }

    $(document).mouseup(function (e) {
        var div = $(".form");
        var hidden = $(".popup");

        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            hidden.fadeOut(800);
        }
    });

    if (/Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        //for mobile
        FormPosition();

    } else {
        //for desktop
        //include("/bitrix/templates/akmenita/js/jquery.scrollify.js");
    }
});

window.onload = function() {
    FormPosition2();
}