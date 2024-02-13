window.addEventListener("load", function() {
    function getSalaire() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    var donnee = JSON.parse(xhr.responseText);
                    var valeur=document.getElementById("valeur");
                    valeur.innerHTML = donnee + " €";
                  
                }
            }
        };
        xhr.open("GET", "getsalaire.php", false);
        xhr.send();
    }


    getSalaire();
    
});
