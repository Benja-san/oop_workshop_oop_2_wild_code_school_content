<?php

class Shield{

    private string $name;
    private int $protection = 10;
    private string $image;

    public function __construct(string $name, string $image = "shield.svg")
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
     * Get the value of protection
     */ 
    public function getProtection(): int
    {
        return $this->protection;
    }

    /**
     * Set the value of protection
     *
     * @return  self
     */ 
    public function setProtection($protection)
    {
        $this->protection = $protection;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage(): string
    {
        return "assets/images/" . $this->image;
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