<!DOCTYPE html>
<html lang="fr">
<?php include('./head.php'); ?>
<body>
<section>
    <?php include('navbar.php'); ?>
</section>

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <div class="table-responsive">
                    <table class="table table-striped table-secondary">
                        <thead class="text-center">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date de la commande</th>
                            <th scope="col">Groupe</th>
                            <th scope="col">Client</th>
                            <th scope="col">Arme</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Réduction (%)</th>
                            <th scope="col">Reduction (€)</th>
                            <th scope="col">Prix total</th>
                            <th scope="col">Bénéfice</th>
                            <th scope="col">Terminé</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        <tr>
                            <th scope="row">1</th>
                            <td>18/05/2023</td>
                            <td>Cité</td>
                            <td>BelleVille</td>
                            <td>SNS</td>
                            <td>1</td>
                            <td>100 000 €</td>
                            <td></td>
                            <td></td>
                            <td>100 000 €</td>
                            <td>55 000 €</td>
                            <td><i class="fa-solid fa-check" style="color: #109437;"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>18/05/2023</td>
                            <td>Cité</td>
                            <td>BelleVille</td>
                            <td>MK.2</td>
                            <td>2</td>
                            <td>410 000 €</td>
                            <td></td>
                            <td></td>
                            <td>410 000 €</td>
                            <td>110 000 €</td>
                            <td><i class="fa-solid fa-check" style="color: #109437;"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>20/05/2023</td>
                            <td>Cité</td>
                            <td>La Goutte d'or</td>
                            <td>SNS</td>
                            <td>3</td>
                            <td>300 000 €</td>
                            <td></td>
                            <td></td>
                            <td>300 000 €</td>
                            <td>75 000 €</td>
                            <td><i class="fa-solid fa-check" style="color: #109437;"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>20/05/2023</td>
                            <td>Cité</td>
                            <td>La Goutte d'or</td>
                            <td>Fusil à pompe</td>
                            <td>1</td>
                            <td>320 000 €</td>
                            <td></td>
                            <td>15 000 €</td>
                            <td>305 000 €</td>
                            <td>80 000 €</td>
                            <td><i class="fa-solid fa-check" style="color: #109437;"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>20/05/2023</td>
                            <td>Cité</td>
                            <td>Athena</td>
                            <td>SNS</td>
                            <td>8</td>
                            <td>800 000 €</td>
                            <td></td>
                            <td>100 000 €</td>
                            <td>700 000 €</td>
                            <td>200 000 €</td>
                            <td><i class="fa-solid fa-check" style="color: #109437;"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>02/06/2023</td>
                            <td>Organisation</td>
                            <td>Black Hands</td>
                            <td>SNS</td>
                            <td>6</td>
                            <td>450 000 €</td>
                            <td></td>
                            <td></td>
                            <td>450 000 €</td>
                            <td></td>
                            <td><i class="fa-solid fa-check" style="color: #109437;"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>02/06/2023</td>
                            <td>Organisation</td>
                            <td>Black Hands</td>
                            <td>MK.2</td>
                            <td>1</td>
                            <td>150 000 €</td>
                            <td></td>
                            <td></td>
                            <td>150 000 €</td>
                            <td></td>
                            <td><i class="fa-solid fa-check" style="color: #109437;"></i></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>
<?php include('./footer.php'); ?>
<script src="./assets/bootstrap/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
</body>
</html>