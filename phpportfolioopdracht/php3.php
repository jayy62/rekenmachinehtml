<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css?v=2">
    <title>PHP3 Variabelen</title>
</head>
<body>
    <div class="container mt-5">
        <h1>PHP3 Variabelen</h1>
        <?php
            $naam = "Jayden";
            $leeftijd = 16;
            echo "<p>Mijn naam is $naam en ik ben $leeftijd jaar oud.</p>";

            $getal1 = 8;
            $getal2 = 4;

            $som = $getal1 + $getal2;
            $verschil = $getal1 - $getal2;
            $product = $getal1 * $getal2;
            $quotient = $getal1 / $getal2;
        ?>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Bewerking</th>
                    <th>Resultaat</th>
                </tr>
            </thead>
            <tbody> <!-- Dit zorgt er namelijk voor dat de 1e en 3e kolom ietjse grijs worden-->
                <tr>
                    <td>Som</td>
                    <td><?php echo $som; ?></td>
                </tr>
                <tr>
                    <td>Verschil</td>
                    <td><?php echo $verschil; ?></td>
                </tr>
                <tr>
                    <td>Product</td>
                    <td><?php echo $product; ?></td>
                </tr>
                <tr>
                    <td>Quotiënt</td>
                    <td><?php echo $quotient; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php

    $lengte = "33";
    $breedte = "40";
    $hoogte = "20";

    $oppervlakte = $lengte * $breedte;
    $inhoud = $lengte * $breedte * $hoogte;
    ?>

    <div class="card" style="width: 18rem; margin:20px auto;">
        <div class="card header bg-primary text-white">
            Overzicht van Afmetingen
        </div>
        <div class="card-body">
            <p><strong>Lengte: </strong><?php echo $lengte; ?> cm</p>
            <p><strong>Breedte: </strong><?php echo $breedte; ?> cm</p>
            <p><strong>Hoogte: </strong><?php echo $hoogte; ?> cm</p>
            <p><strong>Oppervlakte: </strong><?php echo $oppervlakte; ?> cm</p>
            <p><strong>Inhoud: </strong><?php echo $inhoud; ?> cm³</p>
        </div>
    </div>
</body>
</html>
<?php include 'footer.php'; ?>