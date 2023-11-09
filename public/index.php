<?php 

/* *
* Framework: PHP
*
* @author Duy Minh <minhkirito1803@gmail.com>

*/
/* 
|--------------------------------------------------------------------------
| Register the autoloader
|---------------------------------------------------------------
| Load the autoloader that will generate classes be used
*/

require __DIR__ . './../vendor/autoload.php';

/* 
|--------------------------------------------------------------------------
| Bootstrap the application
|---------------------------------------------------------------
| Bootstrap the application and to action from framework
*/

require __DIR__ . './../bootstrap/app.php';

/* 
|--------------------------------------------------------------------------
| Run the application
|---------------------------------------------------------------
| Handle the request and send response
*/

Application::run();
