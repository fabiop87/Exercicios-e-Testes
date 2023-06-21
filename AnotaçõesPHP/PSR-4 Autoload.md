- bash: composer init
generate autoload 

<code>
<?php

namespace Fabio\ExemploAutoload\app;

class User 
{
    public function fodase() {
        echo 'fodase';
    }
}
</code>
<code>
<?php
require '../vendor/autoload.php';

use Fabio\ExemploAutoload\app\User

$user = new User();

$user->fodase();

?>
</code>
