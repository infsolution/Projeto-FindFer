<?php
interface User{
    function registerUser();
    function requestRelationship($idUser);
    function changeAccount($newAccount);
}