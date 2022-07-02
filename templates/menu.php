<ul class="navbar-nav">
    <?php foreach ($menu as $menuItem) { ?>
        <li class="nav-item">
            <a class="nav-link<?= isActivePage($menuItem["path"]) ? ' active" aria-current="page' : '' ?>" href="<?=$menuItem['path']?>"><?=$menuItem['title']?></a>
        </li>
    <?php } ?>
</ul>