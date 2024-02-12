window.addEventListener("load", function() {
    function getListeCueilleur() {
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
                        td3.innerHTML = donnee[i].genre;
                        td4.innerHTML = donnee[i].date_naissance;
                        td5.innerHTML = '<a href="#editParcelleModal" onclick="preRemplirForm(' + donnee[i].id + ')" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>' +
                        '<a href="deleteCueilleur.php?id=' + donnee[i].id + '"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>';
        

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
        xhr.open("GET", "listecueilleur.php", false);
        xhr.send();
    }

    function getListeVariete() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    var donnee = JSON.parse(xhr.responseText);
                    var select = document.getElementById('variete');
                    for (var i = 0; i < donnee.length; i++) {
                        var opt = document.createElement('option');
                        opt.value = donnee[i].id;
                        opt.innerHTML = donnee[i].nom;
                        select.appendChild(opt);
                    }
                }
            }
        };
        xhr.open("GET", "listecueilleur.php", false);
        xhr.send();
    }

    getListeCueilleur();
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
