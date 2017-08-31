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
interface Observable {

    //put your code here
    function addObserver(Observer $observer);
    function removeObserver(Observer $observer);
    function notifyObserver();
}
