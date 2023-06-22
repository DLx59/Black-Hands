<?php
$pages = array(
    'index' => 'Accueil',
    'members' => 'Membres',
    'hierarchy' => 'Hiérarchie',
    'rules' => 'Règlement',
    'recruitment' => 'Recrutement',
    'blacklist' => 'Blacklist',
    'command' => 'Commandes d\'armes',
    'laundering' => 'Blanchiment',
    'weapon' => 'Armement'
);
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="assets/img/BlackHands.svg" width="100" height="100" alt="black hands logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php foreach ($pages as $page => $label) : ?>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($current_page == $page) echo 'active'; ?>" href="./<?php echo $page; ?>"><?php echo $label; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>