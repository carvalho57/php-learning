<?php


/*
    COOKIES
    
    https://developer.mozilla.org/en-US/docs/Web/HTTP/Cookies

    An HTTP cookie (web cookie, browser cookie) is a small piece of data that a server sends to a user's web browser. 
    The browser may store the cookie and send it back to the same server with later requests. Typically, an 
    HTTP cookie is used to tell if two requests come from the same browser—keeping a user logged in, for example. 
    It remembers stateful information for the stateless HTTP protocol.


    * Session management
    * Personalization
    * Tracking

*/


if(isset($_COOKIE['my-cookie']))
{
    echo $_COOKIE['my-cookie'];
    setcookie('my-cookie', null,-1,'/');
} else {
    setcookie('my-cookie', date("H:i:s"), time() + 3600);
    // setrawcookie('my-cookie', date("H:i:s"));
    
}

echo '<p> Finalizado</p>';
