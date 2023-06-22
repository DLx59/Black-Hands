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
                            <th scope="col">Arme</th>
                            <th scope="col">Prix d'achat</th>
                            <th scope="col">Prix de vente (~37%)</th>
                            <th scope="col">Bénéfice NET</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        <tr>
                            <th scope="row">1</th>
                            <td class="color-red">Fusil à pompe</td>
                            <td>240 000 €</td>
                            <td>320 000 €</td>
                            <td>80 000 €</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td class="color-red">Calibre 50</td>
                            <td>200 000 €</td>
                            <td>265 000 €</td>
                            <td>65 000 €</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td class="color-red">MK.2</td>
                            <td>150 000 €</td>
                            <td>205 000 €</td>
                            <td>55 000 €</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td class="color-red">SNS</td>
                            <td>75 000 €</td>
                            <td>100 000 €</td>
                            <td>25 000 €</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td class="color-red">Mortier</td>
                            <td>800 €</td>
                            <td>1 500 €</td>
                            <td>700 €</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td class="color-red">Molotov</td>
                            <td>2 500 €</td>
                            <td>3 500 €</td>
                            <td>1 000 €</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td class="color-red">Fumigène</td>
                            <td>1 000 €</td>
                            <td>1 500 €</td>
                            <td>500 €</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td class="color-green">Uzi</td>
                            <td>220 000 €</td>
                            <td>300 000 €</td>
                            <td>80 000 €</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td class="color-blue">AK-47</td>
                            <td>300 000 €</td>
                            <td>400 000 €</td>
                            <td>100 000 €</td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td class="color-blue">AK-Compact</td>
                            <td>270 000 €</td>
                            <td>365 000 €</td>
                            <td>95 000 €</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex align-items-center">
                    <div class="ms-auto d-flex align-items-center">
                        <div class="box box-red me-1"></div>
                        <span>Cité</span>

                        <div class="box box-green ms-3 me-1"></div>
                        <span>Groupe</span>

                        <div class="box box-blue ms-3 me-1"></div>
                        <span>Organisation</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('./footer.php'); ?>

<script src="./assets/bootstrap/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
</body>
</html>