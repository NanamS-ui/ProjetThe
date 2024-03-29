window.addEventListener("load", function() {
    window.preRemplirForm = function(parcelleId) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var parcelle = JSON.parse(xhr.responseText);
                var id=document.getElementById("id");
                var dtd=document.getElementById("dtd");
                var descri=document.getElementById("descri");
                var val=document.getElementById("val");
                id.value = parcelle.id;
                dtd.value = parcelle.date_depense;
                descri.value=parcelle.description;
                val.value=parcelle.valeur;
            }
        };
        xhr.open("GET", "modifDepense.php?id=" + parcelleId, false);
        xhr.send();
    }
    function getListeDepense() {
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
                        td2.innerHTML = donnee[i].date_depense;
                        td3.innerHTML = donnee[i].description;
                        td4.innerHTML = donnee[i].valeur;
                        td5.innerHTML = '<a href="#editDepenseModal" onclick="preRemplirForm(' + donnee[i].id + ')" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>' +
                        '<a href="deleteDepense.php?id=' + donnee[i].id + '"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>';
        

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
        xhr.open("GET", "listedepense.php", false);
        xhr.send();
    }


    getListeDepense();
    function getListeCategorieDepense() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    var donnee = JSON.parse(xhr.responseText);
                    var select = document.getElementById('depense');
                    for (var i = 0; i < donnee.length; i++) {
                        var opt = document.createElement('option');
                        opt.value = donnee[i].id;
                        opt.innerHTML = donnee[i].categorie;
                        select.appendChild(opt);
                    }
                }
            }
        };
        xhr.open("GET", "listecategorie.php", false);
        xhr.send();
    }
    getListeCategorieDepense();
    // Function to fill edit form
    
});
