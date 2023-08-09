<?php
namespace Pokedex\Models;

use \PDO;
use Pokedex\Utils\Database;

class Pokemon extends Type {
    private $hp;
    private $attack;
    private $defense;
    private $spe_attack;
    private $spe_defense;
    private $speed;
    private $number;
    private $type_name;
    private $type_id;

    public function findAll() {

        $sql = 'SELECT * FROM pokemon';

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Pokedex\\Models\\Pokemon');

    }

    public function find($id) {

        $sql = 'SELECT `pokemon`.*, `type`.name AS type_name, `type`.color, `type`.id AS type_id
            FROM pokemon
            LEFT JOIN pokemon_type ON `pokemon`.number = `pokemon_type`.pokemon_number
            LEFT JOIN `type` ON `pokemon_type`.type_id = `type`.id
            WHERE `pokemon`.id = '.$id;

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Pokedex\\Models\\Pokemon');
    }

    public function findByType($id) {

        $sql = 'SELECT `pokemon`.*, `type`.name AS type_name, `type`.color
            FROM pokemon
            LEFT JOIN pokemon_type ON `pokemon`.number = `pokemon_type`.pokemon_number
            LEFT JOIN `type` ON `pokemon_type`.type_id = `type`.id
            WHERE `type`.id = '.$id;

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Pokedex\\Models\\Pokemon');
    }

    /**
     * Get the value of hp
     */ 
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Get the value of attack
     */ 
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Get the value of spe_attack
     */ 
    public function getSpe_attack()
    {
        return $this->spe_attack;
    }

    /**
     * Get the value of spe_defense
     */ 
    public function getSpe_defense()
    {
        return $this->spe_defense;
    }

    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of type_name
     */ 
    public function getType_name()
    {
        return $this->type_name;
    }

    /**
     * Get the value of type_id
     */ 
    public function getType_id()
    {
        return $this->type_id;
    }
}