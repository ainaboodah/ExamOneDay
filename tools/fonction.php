<?php
    function getBdd($servername,$username,$passwd,$database){
        return mysqli_connect($servername,$username,$passwd,$database);
    }
    function getDataSingle($bdd,$requete){
        $result=mysqli_query($bdd,$requete);
        $data=null;
        $i=0;
        while($donne=mysqli_fetch_assoc($result)){
            $data[$i]=$donne;
            $i++;
        }
        if(count($data)==0){
            throw new Exception('Pas de donnée');
        }
        return $data;
    }
    function getObjectDb($bdd,$requete,$objectReference){
        //entre de donnée
        $data=getDataSingle($bdd,$requete);
        echo "Maka donnée ananty base de tonga de avadika classe";
        //methode
        $class=new ReflectionClass($objectReference);       //maka anle classnl le objectReferenece
        $fields=$class->getProperties();                    //maka ny fields anle objectReferences
        // echo count($fields);
        $tableauClass=array();
        for($i=0;$i<count($fields);$i++){
            // $tableauClass[$i]=new ReflectionClass($fields[$i]);
            echo $fields[$i]->getType(); ?><br>
        <?php
        }
        //sortie de donnée
        return null;
    }
?>
