
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

#first measurement is to change the settings in phpini which is not usually touched
#we change the 'session.cookie_httponly' to true, saying that the cookie can only be accessed via PHP
#this will prevent any Javascript attacks getting the cookie
ini_set('session.cookie_httponly', true);



#starts the sessions
session_start ();

#the second way of checking is matching the initial user to the session
#we do this by checking the IP of the user that "made the session" and using it to check if it is
#truley him who is accessing the website/session.
#for this we simply use the global $_SERVER['REMOTE_ADDR']; to get the IP and then we check

if (isset($_SESSION['userip']) === false){
    
    #here we store the IP into the session 'userip'
    $_SESSION['userip'] = $_SERVER['REMOTE_ADDR'];
}

#now we check if the IP where the session is generated is the same as the IP of the current user

if ($_SESSION['userip'] !== $_SERVER['REMOTE_ADDR']){
    #if it is not the same, we just remove all session variables
    #this way the attacker will have no session
    session_unset();
    session_destroy();
    
}
