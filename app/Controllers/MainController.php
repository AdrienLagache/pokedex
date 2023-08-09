<?php
namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;
use Pokedex\Models\Type;

class MainController {

    public function show($viewName, $viewDatas = []) {

        $absoluteUrl = $_SERVER['BASE_URI'];

        extract($viewDatas);

        require __DIR__.'/../views/header.tpl.php';
        require __DIR__.'/../views/'.$viewName.'.tpl.php';
        require __DIR__.'/../views/footer.tpl.php';
    }

    public function home() {

        $newPokemon = new Pokemon;
        $pokemonHomeList = $newPokemon->findAll();

        $this->show('home', ['pokemon' => $pokemonHomeList]);
    }

    public function details($params) {

        $newPokemon = new Pokemon;
        $currentPokemon = $newPokemon->find($params['id']);

        $this->show('details', ['pokemon' => $currentPokemon]);
    }

    public function types() {

        $newType = new Type;
        $types = $newType->findAll();

        $this->show('types', ['types' => $types]);
    }

    public function typeFilter($params) {

        $newPokemon = new Pokemon;
        $pokemon = $newPokemon->findByType($params['id']);

        $this->show('type-filter', ['pokemon' => $pokemon]);
    }
}