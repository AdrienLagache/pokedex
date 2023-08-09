<main class="types">
    <p class="types__subtitle">Cliquez sur un type pour voir tous les Pokémon de ce type</p>
    <nav class="types-nav">
        <ul class="types-list">
        <?php foreach ($types as $type):?>
            <li class="types-list__item" style="background: #<?= $type->getColor()?>"><a class="types-list__link" href="<?= $absoluteUrl?>/types/<?= $type->getId()?>"><span class="types-list__text"><?= $type->getName()?></span></a></li>
        <?php endforeach;?>
        </ul>
    </nav>
</main>