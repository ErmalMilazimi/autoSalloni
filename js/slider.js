var slider = document.getElementsByClassName('bannerS')[0];

var img = slider.getElementsByTagName('img');

var idx = 0;

function ndrroFoto(){
    if(idx == 0){
        img[0].style.left = '0';
        img[1].style.right = '-100%';
        idx = 1;
    }else if( idx == 1) {
        img[0].style.left = '-100%';
        img[1].style.right = '0'
        idx = 0;
    }
}

var myVar = setInterval(ndrroFoto, 2000);
