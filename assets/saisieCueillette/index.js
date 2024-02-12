window.addEventListener("load", function() {
    function getListeCueilleur() {
                var xhr;

                try {
                    xhr = new XMLHttpRequest();
                } catch (e) {
                    xhr = false;
                }

                xhr.addEventListener("load", function (event) {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        afficherListeCueilleur(response);
                    } else {
                        alert("Error: Something went wrong!");
                    }
                });

                xhr.addEventListener("error", function () {
                    alert("Error: Unable to fetch data from server");
                });

                xhr.open("GET", "listecueilleur.php");
                xhr.send();
            }

    function getListeParcelle() {
                var xhr;

                try {
                    xhr = new XMLHttpRequest();
                } catch (e) {
                    xhr = false;
                }

                xhr.addEventListener("load", function (event) {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        afficherListeParcelle(response);
                    } else {
                        alert("Error: Something went wrong!");
                    }
                });

                xhr.addEventListener("error", function () {
                    alert("Error: Unable to fetch data from server");
                });

                xhr.open("GET", "listeparcelles.php");
                xhr.send();
            }
    
    function afficherListeParcelle(data) {
        var select = document.getElementById('selectParcelle');
        select.innerHTML = "";

                    var option1 = document.createElement('option');
                    option1.text = "Veuillez choisir";
                    select.add(option1);

                    for (let i = 0; i < data.length; i++) {
                        var option = document.createElement('option');
                        option.value = data[i].id;
                        option.text = data[i].surface;
                        select.add(option);
                    }
                }
    
    function afficherListeCueilleur(data) {
        var select = document.getElementById('selectCueilleur');
        select.innerHTML = "";

                    var option1 = document.createElement('option');
                    option1.text = "Veuillez choisir";
                    select.add(option1);

                    for (let i = 0; i < data.length; i++) {
                        var option = document.createElement('option');
                        option.value = data[i].id;
                        option.text = data[i].nom;
                        select.add(option);
                    }
                }
    getListeCueilleur();

    getListeParcelle();
});
