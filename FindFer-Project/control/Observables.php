<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Cicero
 */
interface Observables {

    //put your code here
    function addObserver($observer);
    function removeObserver($observer);
    function notifyObserver();
}
