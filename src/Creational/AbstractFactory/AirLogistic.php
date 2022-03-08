<?php

namespace App\Creational\AbstractFactory;

/*
 * Конкретный создатель
 * */

class AirLogistic implements Logistic
{

    public function createTransport(): Transport
    {
        return new Airplane();
    }
}