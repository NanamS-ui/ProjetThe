window.addEventListener("load", function() {
    function getListeVariete() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    var donnee = JSON.parse(xhr.responseText);
                    var table = document.getElementById('tab');
                    for (var i = 0; i < donnee.length; i++) {
                        var tr = document.createElement('tr');
                        var td1 = document.createElement('td');
                        var td2 = document.createElement('td');
                        var td3 = document.createElement('td');
                        var td4 = document.createElement('td');
                        var td5=document.createElement('td');
                        td1.innerHTML = donnee[i].id;
                        td2.innerHTML = donnee[i].nom;
                        td3.innerHTML = donnee[i].occupation;
                        td4.innerHTML = donnee[i].rendement;
                        td5.innerHTML = '<a href="#editParcelleModal" onclick="preRemplirForm(' + donnee[i].id + ')" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>';
        

                        // Append the cells to the row
                        tr.appendChild(td1);
                        tr.appendChild(td2);
                        tr.appendChild(td3);
                        tr.appendChild(td4);
                        tr.appendChild(td5);
                        // Append the row to the table
                        table.appendChild(tr);
                    }
                }
            }
        };
        xhr.open("GET", "listevariete.php", false);
        xhr.send();
    }


    getListeVariete();

    // Function to fill edit form
    function preRemplirForm(parcelleId) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var parcelle = JSON.parse(xhr.responseText);
                var idparcelle=document.getElementById("id_parcelle");
                var modifsurface=document.getElementById("modifsurface");
                var modifvar=document.getElementById("modifvar");
                idparcelle.value = parcelle;
                modifsurface.value = parcelle.surface;
                modifvar.value=parcelle.idVarieteDuThe;
            }
        };
        xhr.open("GET", "modifParcelle.php?id=" + parcelleId, false);
        xhr.send();
    }
});
