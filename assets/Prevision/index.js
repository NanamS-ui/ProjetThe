window.addEventListener("load", function(){
    //getPoidsRestant(t
    var form=document.getElementById("form");
    form.addEventListener("submit", function(event){
        event.preventDefault();
        var date=document.getElementById("date").value;
        var formData=new FormData(form);
        getPoidsRestant(formData, date);
        getMontantRestant(formData, date);
        sendData(formData, date);
    });

   function sendData(formData, date){
    var xhr=new XMLHttpRequest();
    xhr.addEventListener("load", function(event){
        if (xhr.readyState==4 && xhr.status==200) {
            var donnee=JSON.parse(event.target.responseText);
            for (let index = 0; index < donnee.length; index++) {
                var div=document.createElement("div");
                div.className="classDiv";
                var idpar=document.createElement("p");
                idpar.innerHTML="PARCELLE #"+donnee[index].id;
                var p0=document.createElement("p");
                p0.innerHTML=donnee[index].nomVarieteDuThe;
                var p01=document.createElement("p");
                p01.innerHTML=donnee[index].surface;
                var p=document.createElement("p");
                p.innerHTML="Poids restant : "+donnee[index].poidsRestant+" Kg";
            
                var image=document.createElement("img");
                image.className="imgDiv";
                image.src= "../assets/"+donnee[index].image;
                var divImage=document.createElement("div");
                divImage.append(image);
                var p3=document.createElement("p");
                p3.innerHTML="Nombre de Pieds : "+donnee[index].nombreDePied;
                var p4=document.createElement('p');
                p4.innerHTML="Poids thé restant :"+donnee[index].poidsRestant+" Kg";

                div.appendChild(idpar);
                div.appendChild(p0);
                div.appendChild(p01);
                divImage.appendChild(image);
                div.appendChild(divImage);
                div.appendChild(p3);
                div.appendChild(p4);
                var body = document.getElementsByTagName("body")[0];
                body.appendChild(div);
            
            }
        }
        else{
            alert("Something went wrong");
        }
    });
    xhr.open("GET", "traitementprevision.php?date="+date,true);
    xhr.send(formData);
}

//function getMontantRestant(formData, date, callback){
    function getMontantRestant(formData, date){
    var xhr=new XMLHttpRequest();
    xhr.addEventListener("load", function(event){
        if (xhr.readyState==4 && xhr.status==200) {
            var reponse=event.target.responseText;
            var p2=document.createElement("p");
            p2.innerHTML="Montant : "+reponse+" €";
             var body = document.getElementsByTagName("body")[0];
            body.appendChild(p2);

        }
        else{
            alert("Something went wrong");
        }
    });
    xhr.open("GET", "getMontantRestant.php?date="+date,true);
    xhr.send(formData);
}

//function getPoidsRestant(formData, date, callback){
function getPoidsRestant(formData, date){
var xhr=new XMLHttpRequest();
    xhr.addEventListener("load", function(event){
        if (xhr.readyState==4 && xhr.status==200) {
            var reponse=event.target.responseText;
            var poidsRestantElement=document.createElement("p");
            poidsRestantElement.innerHTML="Poids Total Thé Restant :"+reponse +" Kg";
            var body = document.getElementsByTagName("body")[0];
            body.appendChild(poidsRestantElement);
            //callback(reponse);
            //console.log(reponse);
        }
        else{
            alert("Something went wrong");
        }
    });
    xhr.open("GET", "getPoidsRestant.php?date="+date);
    xhr.send(formData);
}


    function afficherPrevision(donnee){
        
        
    }
});
