<?php
/*
relation transitive :

    Si B herite de A - ET - Si C herite de B - ALORS - C herite de A
 */

 class A{

    public function test1(){

        return 'test1';
    }
 }

// ---------------------------------------------------------------------//

 class B extends A{

    public function test2(){

        return 'test2';
    }
 }

// ---------------------------------------------------------------------//

 class C extends B{

    public function test3(){

        return 'test3';
    }
 }

// ---------------------------------------------------------------------//

$c = new C();

echo $c->test1() . '<br>'; // test1() methode de la classe A accessible par la classe C (par heritage)
echo $c->test2() . '<br>'; // test1() methode de la classe B accessible par la classe C (par heritage)
echo $c->test3() . '<br>'; // test1() methode de la classe B accessible par la classe C (par heritage)

echo '<hr>';

// Retourne toutes les methode de la class C

print '<pre>';
    print_r(get_class_methods('C'));
print'</pre>';