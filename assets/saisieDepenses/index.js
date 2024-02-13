window.addEventListener("load", function() {
    function getListeCategorie() {
                var xhr;

                try {
                    xhr = new XMLHttpRequest();
                } catch (e) {
                    xhr = false;
                }

                xhr.addEventListener("load", function (event) {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        afficherListeCategorie(response);
                    } else {
                        alert("Error: Something went wrong!");
                    }
                });

                xhr.addEventListener("error", function () {
                    alert("Error: Unable to fetch data from server");
                });

                xhr.open("GET", "listecategorie.php");
                xhr.send();
            }

    function afficherListeCategorie(data) {
        var select = document.getElementById('selectCategorie');
        select.innerHTML = "";

                    var option1 = document.createElement('option');
                    option1.text = "Veuillez choisir";
                    select.add(option1);

                    for (let i = 0; i < data.length; i++) {
                        var option = document.createElement('option');
                        option.value = data[i].id;
                        option.text = data[i].categorie;
                        select.add(option);
                    }
                }


    getListeCategorie();
});
