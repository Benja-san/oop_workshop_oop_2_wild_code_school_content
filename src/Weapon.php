<?php

class Weapon{

    private string $name;
    private int $damage = 10;
    private string $image;

    public function __construct(string $name, string $image = "sword.svg")
    {
        $this->name = $name;
        $this->image = $image;
    }

    /**
     * Get the value of name
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of damage
     */ 
    public function getDamage(): int
    {
        return $this->damage;
    }

    /**
     * Set the value of damage
     *
     * @return  self
     */ 
    public function setDamage($damage)
    {
        $this->damage = $damage;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage(): string
    {
        return "assets/images/".$this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
}