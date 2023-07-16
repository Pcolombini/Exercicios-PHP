<?php 

if (10 > 2) {

    echo "Entrou no if<br>";

    if ("teste" == "teste") {

        echo "Entrou no if dentro if<br>";

    }

}

if (10 > 2) {

    echo "Entrou no if2<br>";

    if ("teste" !== "teste") {

        echo "Entrou no if dentro if2<br>";

    } else {
        
        echo "Entrou no segundo Else2<br>";
        
    }
    
}

if (10 < 2) {

    echo "Entrou no if2<br>";

    if ("teste" !== "teste") {

        echo "Entrou no if dentro if2<br>";

    } else {
        
        echo "Entrou no segundo Else2<br>";
        
    }
    
} else {
    
    echo "Entrou no primeiro else<br>";

}