<?php $bros = [['name' => 'Chet'], ['name' => "Trevor"], ['name' => 'Studebaker']];
function filterBros($bros)
{
    $myBros = [];
    foreach ($bros as $bro) {
        if ($bro['name'] === 'Chet') $myBros[] = $bro;
    }
    return $myBros;
}

require "index.view.php";
