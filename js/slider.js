var slider = document.getElementsByClassName('bannerS')[0];

var img = slider.getElementsByClassName('images');

var idx = 0;

function ndrroFoto() {
    if (idx == 0) {
        img[0].style = 'z-index: 80;';
        img[0].style.right = '0';

        img[1].style = 'z-index: 70;';
        img[1].style.right = '-100%'

        img[2].style = 'z-index: 70;';
        img[2].style.right = '-100%'

        img[3].style = 'z-index: 70;';
        img[3].style.right = '-100%'

        img[4].style = 'z-index: 70;';
        img[4].style.right = '0';
        idx = 1;
    }else if (idx == 1){
        img[0].style = 'z-index: 70;';
        img[0].style.right = '0';

        img[1].style = 'z-index: 80;';
        img[1].style.right = '0'

        img[2].style = 'z-index: 70;';
        img[2].style.right = '-100%';

        img[3].style = 'z-index: 70;';
        img[3].style.right = '-100%';

        img[4].style = 'z-index: 70;';
        img[4].style.right = '-100%';
        idx = 2;
    }else if (idx == 2){
        img[0].style = 'z-index: 70;';
        img[0].style.right = '-100%';

        img[1].style = 'z-index: 70;';
        img[1].style.right = '0'

        img[2].style = 'z-index: 80;';
        img[2].style.right = '0';

        img[3].style = 'z-index: 70;';
        img[3].style.right = '-100%';

        img[4].style = 'z-index: 70;';
        img[4].style.right = '-100%';
        idx = 3;
    }else if (idx == 3){
        img[0].style = 'z-index: 70;';
        img[0].style.right = '-100%';

        img[1].style = 'z-index: 70;';
        img[1].style.right = '-100%'

        img[2].style = 'z-index: 70;';
        img[2].style.right = '0';

        img[3].style = 'z-index: 80;';
        img[3].style.right = '0';

        img[4].style = 'z-index: 70;';
        img[4].style.right = '-100%';
        idx = 4;
    }else if (idx == 4){
        img[0].style = 'z-index: 70;';
        img[0].style.right = '-100%';

        img[1].style = 'z-index: 70;';
        img[1].style.right = '-100%'

        img[2].style = 'z-index: 80;';
        img[2].style.right = '-100%';

        img[3].style = 'z-index: 70;';
        img[3].style.right = '0';

        img[4].style = 'z-index: 80;';
        img[4].style.right = '0';

        idx = 0;
    }
}

var myVar = setInterval(ndrroFoto, 3000);