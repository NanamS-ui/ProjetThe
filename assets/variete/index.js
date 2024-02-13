window.addEventListener("load", function() {
    window.preRemplirForm = function(parcelleId) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var variete = JSON.parse(xhr.responseText);
                var idvariete=document.getElementById("id");
                var nom=document.getElementById("nom");
                var rendement=document.getElementById("rendement");
                var occupation=document.getElementById("occupation");
                var prix=document.getElementById("PV");
                idvariete.value = variete.id;
                nom.value = variete.nom;
                rendement.value = variete.rendement;
                occupation.value=variete.occupation;
                prix.value = variete.prixDeVente;
            }
        };
        xhr.open("GET", "modifVariete.php?id=" + parcelleId, true);
        xhr.send();
    }
    function getListeVariete() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    var donnee = JSON.parse(xhr.responseText);
                    var table = document.getElementById('tab');
                    for (var i = 0; i < donnee.length; i++) {
                                            console.log(donnee[i]);

                        var tr = document.createElement('tr');
                        var td1 = document.createElement('td');
                        var td2 = document.createElement('td');
                        var td3 = document.createElement('td');
                        var td4 = document.createElement('td');
                        var td5=document.createElement('td');
                        var td6=document.createElement('td');
                        td1.innerHTML = donnee[i].id;
                        td2.innerHTML = donnee[i].nom;
                        td3.innerHTML = donnee[i].occupation;
                        td6.innerHTML = donnee[i].prixDeVente;
                        td4.innerHTML = donnee[i].rendement;
                        var id = donnee[i].id;
                        td5.innerHTML = '<a href="#editVarieteModal" onclick="preRemplirForm(' + donnee[i].id + ')" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>';
        

                        // Append the cells to the row
                        tr.appendChild(td1);
                        tr.appendChild(td2);
                        tr.appendChild(td3);
                        tr.appendChild(td6);
                        tr.appendChild(td4);
                        tr.appendChild(td5);
                        // Append the row to the table
                        table.appendChild(tr);
                    }
                }
            }
        };
        xhr.open("GET", "listevariete.php", true);
        xhr.send();
    }


    getListeVariete();

});
