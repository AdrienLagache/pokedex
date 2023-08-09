
<main class="pokemon">
<?php foreach ($pokemon as $currentPokemon):?>
    <a class="pokemon__link" href="<?= $absoluteUrl?>/details/<?= $currentPokemon->getId()?>">
        <figure class="pokemon__item">
            <img class="pokemon__pic" src="<?=$absoluteUrl?>/img/<?= $currentPokemon->getNumber()?>.png" alt="<?= $currentPokemon->getName()?>">
            <figcaption class="pokemon__name">#<?= $currentPokemon->getNumber().' '.$currentPokemon->getName()?></figcaption>
        </figure>
    </a>
<?php endforeach;?>
</main>