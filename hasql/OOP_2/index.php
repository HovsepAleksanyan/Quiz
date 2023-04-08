<?php
// class A {
//     public $name;

//     public function getName () {
//         return $this->name;
//     }

//     public function changeName () {
//         $this->name .= "Changed!";
//     }
// }
// //
// $A = new A;
// $A->name = "Class Name A";
// echo $A->name;
// //

// echo "<hr>";

// //
// $A->changeName();
// echo $A->name;
// //

// echo "<hr>";
// //
// echo $A->getName();
// //



class A {
    public $name;

    public function getName () {
        $this->changeName();
        return $this->name;
    }

    private function changeName () {
        $this->name .= "Changed!";
    }
}
//
$A = new A;
$A->name = "Class Name A";
echo $A->name;
//

echo "<hr>";

//
// $A->changeName();
echo $A->name;
//

echo "<hr>";
//
echo $A->getName();
//