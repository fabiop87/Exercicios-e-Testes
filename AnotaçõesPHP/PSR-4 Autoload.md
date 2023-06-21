- bash: composer init
generate autoload 


<?php

namespace Fabio\ExemploAutoload\app;

class User 
{
    public function fodase() {
        echo 'fodase';
    }
}
////
<?php
require '../vendor/autoload.php';

use Fabio\ExemploAutoload\app\User

$user = new User();

$user->fodase();

?>

