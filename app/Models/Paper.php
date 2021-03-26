<?php
namespace App\Models;

use App\Models\Weapon;

class Paper implements Weapon
{
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}