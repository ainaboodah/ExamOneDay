<?php
    include("../classes/Membre.php");
    include("../fonction.php");
    $mbr1=new Membre(1,"RAKOTOMALALA","Boodah",new Date(1997,11,24),"M","boodahaina@gmail.com");
    // echo $mbr1->getDateNaissance()->getDate();
    $classe=new ReflectionClass($mbr1);
    $fields= $classe->getProperties(ReflectionProperty::IS_PRIVATE);
    // for($i=0;$i<count($fields);$i++){
    //    echo $fields[$i]->getName();
    //    echo "\n";
    // }
    $bdd=getBdd("Localhost","root","","facebook");
    $data=getObjectDb($bdd,"select id_membre,nom,prenom,datenaissance,sexe,mail from membre",$mbr1);

?>