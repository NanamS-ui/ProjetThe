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


    
    function getPoidsMin() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    var donnee = JSON.parse(xhr.responseText);
                    var valeur=document.getElementById("poidsMinimal");
                    valeur.innerHTML = donnee + " Kg";
                  
                }
            }
        };
        xhr.open("GET", "getPoidsMin.php", false);
        xhr.send();
    }

    function getBonus() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    var donnee = JSON.parse(xhr.responseText);
                    var valeur=document.getElementById("bonus");
                    valeur.innerHTML = donnee + " %";
                  
                }
            }
        };
        xhr.open("GET", "getBonus.php", false);
        xhr.send();
    }

    function getMallus() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    var donnee = JSON.parse(xhr.responseText);
                    var valeur=document.getElementById("mallus");
                    valeur.innerHTML = donnee + " %";
                  
                }
            }
        };
        xhr.open("GET", "getMallus.php", false);
        xhr.send();
    }


    getSalaire();
    getPoidsMin();
    getBonus();
    getMallus();
    
});
