<main class="pokemon-details">
    <h2 class="pokemon-details__title">Détails de <?= $pokemon[0]->getName()?></h2>
    <section class="details">
        <figure class="figure">
            <img class="figure__img" src="<?= $absoluteUrl?>/img/<?= $pokemon[0]->getNumber()?>.png" alt="<?= $pokemon[0]->getName()?>">
        </figure>
        <article class="stats">
            <h3 class="stats__title">#<?= $pokemon[0]->getNumber().' '.$pokemon[0]->getName()?></h3>
            <div class="type">
            <?php foreach ($pokemon as $currentVersion):?>
                <a class="type_name" style="background: #<?=$currentVersion->getColor()?>;" href="<?= $absoluteUrl?>/types/<?= $currentVersion->getType_id()?>"><?= $currentVersion->getType_Name()?></a>
            <?php endforeach;?>
            </div>
            <h4 class="infos__title">Statistiques</h4>
            <ul class="infos">
                <ul class="infos-item">
                    <li class="infos-item__label">PV</li>
                    <li class="infos-item__number"><?= $pokemon[0]->getHp()?></li>
                    <ul class="infos-item__progress">
                        <li class="progress__complete" style="width: <?= $pokemon[0]->getHp()?>%"></li>
                        <li class="progress__incomplete" style="width: calc(100% - <?= $pokemon[0]->getHp()?>%)"></li>
                    </ul>
                </ul><ul class="infos-item">
                    <li class="infos-item__label">Attaque</li>
                    <li class="infos-item__number"><?= $pokemon[0]->getAttack()?></li>
                    <ul class="infos-item__progress">
                        <li class="progress__complete" style="width: <?= $pokemon[0]->getAttack()?>%"></li>
                        <li class="progress__incomplete" style="width: calc(100% - <?= $pokemon[0]->getAttack()?>%)"></li>
                    </ul>
                </ul><ul class="infos-item">
                    <li class="infos-item__label">Défense</li>
                    <li class="infos-item__number"><?= $pokemon[0]->getDefense()?></li>
                    <ul class="infos-item__progress">
                        <li class="progress__complete" style="width: <?= $pokemon[0]->getDefense()?>%"></li>
                        <li class="progress__incomplete" style="width: calc(100% - <?= $pokemon[0]->getDefense()?>%)"></li>
                    </ul>
                </ul><ul class="infos-item">
                    <li class="infos-item__label">Attaque spé.</li>
                    <li class="infos-item__number"><?= $pokemon[0]->getSpe_attack()?></li>
                    <ul class="infos-item__progress">
                        <li class="progress__complete" style="width: <?= $pokemon[0]->getSpe_attack()?>%"></li>
                        <li class="progress__incomplete" style="width: calc(100% - <?= $pokemon[0]->getSpe_attack()?>%)"></li>
                    </ul>
                </ul><ul class="infos-item">
                    <li class="infos-item__label">Defense spé.</li>
                    <li class="infos-item__number"><?= $pokemon[0]->getSpe_defense()?></li>
                    <ul class="infos-item__progress">
                        <li class="progress__complete" style="width: <?= $pokemon[0]->getSpe_defense()?>%"></li>
                        <li class="progress__incomplete" style="width: calc(100% - <?= $pokemon[0]->getSpe_defense()?>%)"></li>
                    </ul>
                </ul><ul class="infos-item">
                    <li class="infos-item__label">Vitesse</li>
                    <li class="infos-item__number"><?= $pokemon[0]->getSpeed()?></li>
                    <ul class="infos-item__progress">
                        <li class="progress__complete" style="width: <?= $pokemon[0]->getSpeed()?>%"></li>
                        <li class="progress__incomplete" style="width: calc(100% - <?= $pokemon[0]->getSpeed()?>%)"></li>
                    </ul>
                </ul>
            </ul>
        </article>
    </section>
    <a class="home-link" href="<?= $absoluteUrl?>/">Revenir à la liste</a>
</main>