function veturat(){
    var div = document.createElement("div");
    var divInfo = document.createElement("div");
    var titulli = document.createElement("p");
    var viti = document.createElement("p");
    var motorri = document.createElement("p");
    var km = document.createElement("p");
    var img = document.createElement("img");

    div.className = 'veturat';
    div.className = 'veturatInfo';
    titulli.className = 'titulli';

    img.src = "../img/audi8.jpg";
    
    var titulliN = document.createTextNode('BMW');
    var vitiN = document.createTextNode('2017');
    var motorriN = document.createTextNode('5.0 Petrol');
    var kmN = document.createTextNode('150000 km');
    
    titulli.appendChild(titulliN);
    viti.appendChild(vitiN);
    motorri.appendChild(motorriN);
    km.appendChild(kmN);

    divInfo.appendChild(titulli);
    divInfo.appendChild(viti);
    divInfo.appendChild(motorri);
    divInfo.appendChild(km);

    div.appendChild(img);
    div.appendChild(divInfo);
    
    document.getElementById('right').appendChild(div);
}