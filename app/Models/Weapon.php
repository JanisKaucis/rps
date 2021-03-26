<?php
namespace App\Models;

interface Weapon
{
    public function __construct($name);

    public function getName(): string;
}