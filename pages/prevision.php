<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prévision</title>
    <style>
        /* Style de base */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
            /* Espace en bas de chaque groupe de formulaire */
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .btn-submit {
            background-color: #4CAF50;
            /* Vert */
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: block;
            margin: 20px auto 0;
            /* Pour centrer le bouton et ajouter un espace en haut */
        }

        .btn-submit:hover {
            background-color: #45a049;
            /* Légèrement plus foncé au survol */
        }


        /* Media query pour les petits écrans */
        @media (max-width: 768px) {
            .container {
                width: 100%;
                padding: 0 10px;
            }
        }

        /* Style pour le conteneur principal */
        .classDiv {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            float: left;
            /* Ajout de la propriété float */
            width: 45%;
            /* Ajustez la largeur selon vos besoins */
            margin-right: 5%;
            /* Ajout de la marge droite pour l'espace entre les divs */
            box-sizing: border-box;
            /* Inclure le padding dans la largeur */
        }


        /* Style pour les images à l'intérieur des div */
        .imgDiv {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        /* Style pour les paragraphes */
        p {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <?php include 'headerUser.html' ?>
    <section id="call-to-action" class="section">
        <div class="container">
            <div class="row">
                <form id="form">
                    <div class="col-md-12 wow text-center">
                        <div class="block">
                            <h2>Date</h2>
                            <div class="form-group">
                                <input id="date" type="date" class="form-control" placeholder="date" name="date">
                                <button class="btn btn-default btn-submit" type="submit">Valider</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="../assets/Prevision/index.js"></script>
</body>

</html>