<?php

use App\Db;
use Models\Users;
use Models\Products;
use Models\Categories;



require_once('autoloader.php');
// Test de l'autoloader
// $test = new Db;
// $test::getDb();



?>
<h1>Index : fichier de test</h1>
<p>C'est ici que nous allons tester tous nos CRUD</p>
<!-- Pour utliser les méthodes des CRUD il faut faire un require des class dont nous aurons besoin -->
<!-- Comme nous ne voulons pas faire des require toutes les deux minutes nous allons utiliser un autoloader -->

<h2>Utilisation de la méthode findAll sur users</h2>
<?php
    $users = Users::findAll("ASC");
    var_dump($users);
?>
<h2>Utilisation de la méthode findById sur users</h2>
<?php
    $user = Users::findById(2);
    var_dump($user);
?>
<h2>Utilisation de la méthode findByLogin sur users</h2>
<?php
    $login = "user1@gmail.com";
    $user = Users::findByLogin($login);
    var_dump($user);
?>

<h2>Utilisation de la methode create() sur users</h2>
<?php
    $pass = password_hash('12345678', PASSWORD_DEFAULT);
    $data = ['sylvain.evogue@gmail.com', $pass, 'sylvain', 'campos', '21 avenue des yvris', '93160', 'noisy-le-grand',3];

    // Users::create($data);
    // Users::update($data);
?>


<h2>Test de la méthode findAll sur catégories</h2>
<?php
    $categories = Categories::findAll();
    var_dump($categories);
?>
<h2>Test de la méthode findById sur catégories</h2>
<?php
    $categories = Categories::findById(2);
    var_dump($categories);
?>
<h2>Test de la méthode create sur catégories</h2>
<?php
    // $categories = Categories::create("non classé");   
?>
<h2>Test de la méthode update sur catégories</h2>
<?php
    // $categories = Categories::update("non classée",1);   
?>
<h2>Test de la méthode delete sur catégories</h2>
<?php
    // $categories = Categories::delete(1);   
?>

<h2>Test de la méthode findAll() sur products</h2>
<?php
    $products = Products::findAll(null,1);   
    var_dump($products);
?>
<h2>Test de la méthode findById() sur products</h2>
<?php
    $products = Products::findById(1);   
    var_dump($products);
?>
<h2>Test de la méthode findByUser() sur products</h2>
<?php
    $products = Products::findByUser(3);   
    var_dump($products);
?>
<h2>Test de la méthode findByCategory() sur products</h2>
<?php
    $products = Products::findByCat(3);   
    var_dump($products);
?>
<h2>Test de la méthode create() sur products</h2>
<?php
    $data = [4,3,'iphone','le tout dernier', 1200, 'iphone.jpg'];
    // Products::create($data);   

?>
<h2>Test de la méthode update() sur products</h2>
<?php
    // $data = [4,3,'iphone','le tout dernier', 1500, 'iphone.jpg',3];
    // Products::update($data);   

?>
<h2>Test de la méthode delete sur products</h2>
<?php
    Products::delete(4);
?>

