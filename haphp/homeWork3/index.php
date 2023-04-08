<?php
$namePersonColl = [];
$personsCollection = [
    ["name" => "Sahak"],
    ["name" => "Hovsep", "surName" => "Aleksanyan", "age" => 17],
    ["name" => "Vardan"],
    ["surName" => "Aleksanyan", "name" => "Armen", "age" => 48],
    ["name" => "Mariam"],
    ["surName" => "Hakobyan"],
    ["name" => "Karen"]
];
$i = 0;

foreach ($personsCollection as $person) {
    if (count($person) == 1) {
        foreach ($person as $key => $val) {
            if ($key == "name") {
                $i++;
                $namePersonColl[$i] = $person;

                // array_push($namePersonColl, $person);
            };
        };
    };
};

print_r($namePersonColl);