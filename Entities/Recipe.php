<?php

use Ingredient;


class Recipe
{

    private string $name;

    private int $preparationTime;

    private string $instructions;

    private string $category;

    private array $ingredients;
    
    public function __construct(string $name, int $preparationTime, string $instructions, string $category, Ingredient $ingredient)
    {
        $this->name = $name;
        $this->preparationTime = $preparationTime;
        $this->instructions = $instructions;
        $this->category = $category;
        foreach ($variable as $key => $value) {
            # code...
        }
    }
}
