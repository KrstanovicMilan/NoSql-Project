var i = 0;
var slike = [];
var vreme = 4000;

//lista slika
slike[0] = 'images/audi_R8.jpg';
slike[1] = 'images/BMW_M5.jpg';
slike[2] = 'images/mercedes_amg63.jpg';



function promeniSliku(){
    document.slide.src = slike[i];


    if(i < slike.length - 1){
        i++;
    }else{
        i = 0;
    }

    setTimeout("promeniSliku()", vreme);
}

window.onload = promeniSliku;





