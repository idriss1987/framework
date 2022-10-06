<?php
//nouvelle instance du constructeur du container
$builder = new DI\ContainerBuilder();
// ajout des definitions 
// les definitions sont les dependences internes de notre application
$builder->addDefinitions(__DIR__ . "/dependencies.php");
// creation du conteneur grace a son bulder 
$container = $builder->build();
// desque ce fichier container sera appele (require ) quelques part 
// il doit nous retourner le conteneur 
return $container;