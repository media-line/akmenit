function Collap(num) {
    var wrap = document.getElementsByClassName('bouquet');
    var num = num;
    var targ = wrap[num].getElementsByClassName('bouquet__column');

    var arr = Array();

    for (var r=0; r < 5; r++) {
        var style = getComputedStyle(targ[r]);
        arr.push(style.display);
    }

    var count = 0;

    for (var r=0; r < arr.length; r++) {
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
