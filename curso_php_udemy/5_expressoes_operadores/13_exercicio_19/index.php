<?php 

echo "<h1>Usando casting</h1><br/>";
echo "<p>
        <ul>
            <li>\"testando\"</li>
            <li>12.9</li>
            <li>true</li>
            <li>[1,2,3]</li>
        </ul>
    </p><br/>";

echo "<p>
            <code>
                $\str = (int) \"testando\";<br>
                echo \"\$str\";
            </code>
        </p><br/>";

$str = (int) "testando";
    echo "Resutado: $str<br/>";

echo "<p>
        <code>
            $\dbl = (int) 12.9;<br>
            echo \"\$dbl\";
        </code>
    </p><br/>";

$dbl = (int) 12.9;
    echo "Resultado: $dbl<br>";

echo "<p>
        <code>
            $\$bool = (int) true;<br>
            echo \"\$bool\";
        </code>
    </p><br/>";  

$bool = (int) true;
    echo "Resultado: $bool<br>";

echo "<p>
        <code>
            $\$arr = (int) [1,2,3];<br>
            echo \"\$arr\";
        </code>
    </p><br/>";  

$arr = (int) [1,2,3];
    echo "Resultado: $arr<br>";


