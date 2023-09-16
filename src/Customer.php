<?php

namespace Prasetyodidi\Latihan;

class Customer {

    private string $name;

    public function __construct(string $name = "Guest") {
        $this->name = $name;
    }

    public function sayHello(string $name): string {
        return "Hello $name, My name is $this->name";
    }
}