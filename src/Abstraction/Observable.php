<?php
namespace Budkovsky\Aid\Abstraction;

interface Observable
{
    function addObserver(Observer $observer);

    function notifyObservers();
}
