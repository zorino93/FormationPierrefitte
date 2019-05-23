<?php

class Animal{

    protected function deplacement(){

        return 'je me deplace <br>';
    }
    public function manger(){

        return 'je mange <br>';
    }
}
// ------------------------------------------------------------------//

class Elephant extends Animal{

    public function quiSuisJe(){

        return 'je suis un elephant et '.$this->deplacement(). '<br>';
        // On utilise la fonction deplacement() issue de ma classe Animal par heritage et qui est 'protected'.Cette fonction 'protected' est uniquement executable dans le parent (ici, la classe Animal) ou dans l'enfant (ici, la classe Elephant).
        // Je n'utilise pas "Animal::" mais seulement dans le cas où j'aurais à la redéfinir
    }
}
// ------------------------------------------------------------------//

class chat extends Animal{

    public function quiSuisJe(){

        return 'je suis un chat !<br>';
    }

    public function manger(){// redéfinir la methode, ici, manger()

         return 'je mange comme un chat !<br>';
    }
}

// ------------------------------------------------------------------//

$elephant1 = new Elephant();

// var_dump($elephant1);

echo 'Elephant : ' .$elephant1->manger();
echo 'Elephant : ' .$elephant1->quiSuisJe();
// echo 'Elephant : ' .$elephant1->deplacement(); // ERROR, j'hérite bien de la methode deplacement() mais je ne peux faire appel à elle que dans une classe !

// ------------------------------------------------------------------//

$chat1 = new Chat();

echo 'Chat : ' .$chat1->manger();
// L'interpréteur cherche d'abord dans la classe chat, et seulement si la methode n'existait pas il serait allé cherché la methode manger() dans la classe donc j'hérite, ici, Animal.