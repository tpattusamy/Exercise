<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Thiru
 * Date: 9/21/13
 * Time: 8:24 AM
 * To change this template use File | Settings | File Templates.
 */
date_default_timezone_set('America/New_York');
$t=date('H:i:s');
if ($t > 9 and $t < 18)
{
    echo "Time greater than 09:00";
    $background_color = "blue";
}
else
{
    echo "Time less than 06:00";
    $background_color = "green";

}


?>