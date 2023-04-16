<?php

//solo a modo de ejemplo de como tratar datos serializados en bd, o como los guarda wordpress. De esta forma podemos acceder y deserializar los datos obteniendo un array php, modificar y luego volver a serializar y guardar en bd. Los plugins wordpress por lo general guardan los datos en este formato serializado.

//array serializado en php
$crudo = 'a:22:{i:0;a:4:{i:0;i:36;i:1;s:8:\"AntiFake\";i:2;a:7:{i:0;s:4:\"Fake\";i:1;s:8:\"fakenews\";i:2;s:13:\"noticia falsa\";i:3;s:5:\"Fakes\";i:4;s:20:\"engaño periodistico\";i:5;s:17:\"noticia engañosa\";i:6;s:18:\"mentira mediática\";}i:3;s:1:\"1\";}i:1;a:4:{i:0;i:34;i:1;s:12:\"Boca Juniors\";i:2;a:18:{i:0;s:12:\"Boca Juniors\";i:1;s:7:\"Xeneize\";i:2;s:14:\"Javier García\";i:3;s:16:\"Marcelo Weigandt\";i:4;s:17:\"Facundo Roncaglia\";i:5;s:18:\"Nicolás Valentini\";i:6;s:16:\"Agustín Sández\";i:7;s:15:\"Cristian Medina\";i:8;s:11:\"Alan Varela\";i:9;s:13:\"Juan Ramírez\";i:10;s:14:\"Martín Payero\";i:11;s:16:\"Miguel Merentiel\";i:12;s:16:\"Darío Benedetto\";i:13;s:10:\"Amor Ameal\";i:14;s:11:\"Juan Román\";i:15;s:8:\"Riquelme\";i:16;s:15:\"Mariano Herrón\";i:17;s:12:\"la bombonera\";}i:3;s:1:\"1\";}i:2;a:4:{i:0;i:29;i:1;s:18:\"Cultura cannábica\";i:2;a:7:{i:0;s:18:\"Cannabis medicinal\";i:1;s:18:\"Cultura cannábica\";i:2;s:17:\"Cultura canábica\";i:3;s:19:\"cumbre del Cannabis\";i:4;s:8:\"cáñamo\";i:5;s:18:\"cumbre de Cannabis\";i:6;s:19:\"cáñamo y cannabis\";}i:3;s:1:\"1\";}i:3;a:4:{i:0;i:3;i:1;s:16:\"Debate político\";i:2;a:25:{i:0;s:8:\"Cristina\";i:1;s:3:\"CFK\";i:2;s:14:\"Mauricio Macri\";i:3;s:17:\"Patricia Bullrich\";i:4;s:18:\"Alberto Fernández\";i:5;s:12:\"Sergio Massa\";i:6;s:7:\"Larreta\";i:7;s:5:\"Milei\";i:8;s:23:\"Desocupación argentina\";i:9;s:20:\"inflación argentina\";i:10;s:17:\"Pobreza argentina\";i:11;s:19:\"Violencia argentina\";i:12;s:26:\"narcotráfico en argentina\";i:13;s:20:\"Soberanía argentina\";i:14;s:19:\"Dictadura argentina\";i:15;s:20:\"Democracia argentina\";i:16;s:9:\"peronismo\";i:17;s:11:\"radicalismo\";i:18;s:15:\"Gerardo Morales\";i:19;s:15:\"Libertad avanza\";i:20;s:20:\"salario en argentina\";i:21;s:15:\"frente de todos\";i:22;s:20:\"juntos por el cambio\";i:23;s:19:\"Frente de izquierda\";i:24;s:22:\"Union cívica radical.\";}i:3;s:1:\"1\";}i:4;a:4:{i:0;i:35;i:1;s:6:\"Dólar\";i:2;a:21:{i:0;s:9:\"Dolar hoy\";i:1;s:22:\"cotización del dólar\";i:2;s:10:\"Dolar blue\";i:3;s:15:\"dólar paralelo\";i:4;s:14:\"dólar oficial\";i:5;s:10:\"dólar MEP\";i:6;s:17:\"Contado con liqui\";i:7;s:16:\"Dólar mayorista\";i:8;s:16:\"Dólar solidario\";i:9;s:13:\"Dólar ahorro\";i:10;s:14:\"Dólar turista\";i:11;s:12:\"Dólar Qatar\";i:12;s:15:\"Dólar cultural\";i:13;s:14:\"Dólar Netflix\";i:14;s:11:\"Dólar Lujo\";i:15;s:12:\"Dólar Tecno\";i:16;s:11:\"Dólar soja\";i:17;s:13:\"Dólar futuro\";i:18;s:24:\"Contado con Liquidación\";i:19;s:12:\"Dólar Bolsa\";i:20;s:13:\"Dólar Cripto\";}i:3;s:1:\"1\";}i:5;a:4:{i:0;i:26;i:1;s:15:\"Elecciones 2023\";i:2;a:9:{i:0;s:15:\"Elecciones 2023\";i:1;s:8:\"P.A.S.O.\";i:2;s:45:\"Primarias abiertas simultaneas y obligatorias\";i:3;s:25:\"elecciones generales 2023\";i:4;s:13:\"balotaje 2023\";i:5;s:26:\"Cámara Nacional Electoral\";i:6;s:25:\"calendario electoral 2023\";i:7;s:22:\"debates presidenciales\";i:8;s:19:\"debate presidencial\";}i:3;s:1:\"1\";}i:6;a:4:{i:0;i:22;i:1;s:13:\"Energía azul\";i:2;a:2:{i:0;s:13:\"Energía azul\";i:1;s:11:\"blue energy\";}i:3;s:1:\"1\";}i:7;a:4:{i:0;i:27;i:1;s:21:\"Espíritu emprendedor\";i:2;a:6:{i:0;s:11:\"emprendedor\";i:1;s:7:\"startup\";i:2;s:8:\"startups\";i:3;s:21:\"Espíritu emprendedor\";i:4;s:24:\"Monotributo tecnológico\";i:5;s:8:\"Monotech\";}i:3;s:1:\"1\";}i:8;a:4:{i:0;i:32;i:1;s:16:\"Florencio Varela\";i:2;a:8:{i:0;s:16:\"Florencio varela\";i:1;s:13:\"andres watson\";i:2;s:9:\"kanashiro\";i:3;s:12:\"pablo alaniz\";i:4;s:13:\"julio pereyra\";i:5;s:18:\"Defensa y justicia\";i:6;s:11:\"La t y la M\";i:7;s:14:\"Nahuel Pennisi\";}i:3;s:1:\"1\";}i:9;a:4:{i:0;i:23;i:1;s:10:\"Horóscopo\";i:2;a:14:{i:0;s:7:\"Acuario\";i:1;s:5:\"Aries\";i:2;s:6:\"Cancer\";i:3;s:11:\"Capricornio\";i:4;s:8:\"Escorpio\";i:5;s:8:\"Géminis\";i:6;s:3:\"Leo\";i:7;s:5:\"Libra\";i:8;s:6:\"Piscis\";i:9;s:9:\"Sagitario\";i:10;s:5:\"Tauro\";i:11;s:5:\"Virgo\";i:12;s:20:\"signos del zoodíaco\";i:13;s:10:\"horóscopo\";}i:3;s:1:\"1\";}i:10;a:4:{i:0;i:25;i:1;s:10:\"Inflación\";i:2;a:5:{i:0;s:16:\"Canásta básica\";i:1;s:10:\"inflación\";i:2;s:18:\"aumento de precios\";i:3;s:10:\"paritarias\";i:4;s:17:\"tasas de interés\";}i:3;s:1:\"1\";}i:11;a:4:{i:0;i:33;i:1;s:10:\"Judiciales\";i:2;a:18:{i:0;s:10:\"Tribunales\";i:1;s:7:\"juzgado\";i:2;s:13:\"corte suprema\";i:3;s:6:\"jurado\";i:4;s:16:\"cámara procesal\";i:5;s:13:\"cámara penal\";i:6;s:12:\"magistratura\";i:7;s:14:\"poder judicial\";i:8;s:15:\"Cámara Federal\";i:9;s:15:\"Casación Penal\";i:10;s:35:\"Apelaciones en lo Civil y Comercial\";i:11;s:26:\"Contencioso-Administrativo\";i:12;s:23:\"Criminal y Correccional\";i:13;s:16:\"Penal Económico\";i:14;s:26:\"Consejo de la Magistratura\";i:15;s:33:\"Defensoría General de la Nación\";i:16;s:20:\"Procuración General\";i:17;s:33:\"Ministerio Público de la Defensa\";}i:3;s:1:\"1\";}i:12;a:4:{i:0;i:31;i:1;s:27:\"Liga Profesional de Fútbol\";i:2;a:30:{i:0;s:26:\"Liga profesional de fúbol\";i:1;s:18:\"Argentinos Juniors\";i:2;s:19:\"Arsenal de Sarandí\";i:3;s:18:\"Atlético Tucumán\";i:4;s:23:\"Club Atlético Banfield\";i:5;s:16:\"Barracas Central\";i:6;s:20:\"Belgrano de córdoba\";i:7;s:12:\"Boca Juniors\";i:8;s:16:\"Central Córdoba\";i:9;s:18:\"Colón de Santa Fe\";i:10;s:18:\"Defensa y Justicia\";i:11;s:23:\"Estudiantes de La Plata\";i:12;s:18:\"Gimnasia y Esgrima\";i:13;s:20:\"Deportivo Godoy Cruz\";i:14;s:23:\"club atlético Huracán\";i:15;s:27:\"Independiente de Avellaneda\";i:16;s:18:\"rojo de avellaneda\";i:17;s:21:\"Instituto de Córdoba\";i:18;s:21:\"Club atlético Lanús\";i:19;s:19:\"Newell’s Old Boys\";i:20;s:8:\"Platense\";i:21;s:11:\"Racing Club\";i:22;s:11:\"River Plate\";i:23;s:15:\"Rosario Central\";i:24;s:22:\"San Lorenzo de almagro\";i:25;s:19:\"Sarmiento de Junín\";i:26;s:20:\"Talleres de Córdoba\";i:27;s:20:\"Club Atlético Tigre\";i:28;s:18:\"Unión de Santa Fe\";i:29;s:16:\"Vélez Sarsfield\";}i:3;s:1:\"1\";}i:13;a:4:{i:0;i:5;i:1;s:12:\"Mundo cripto\";i:2;a:13:{i:0;s:7:\"bitcoin\";i:1;s:8:\"bitcoins\";i:2;s:17:\"activos digitales\";i:3;s:14:\"activo digital\";i:4;s:3:\"NFT\";i:5;s:4:\"NFTs\";i:6;s:6:\"wallet\";i:7;s:13:\"criptomonedas\";i:8;s:12:\"criptomoneda\";i:9;s:8:\"ethereum\";i:10;s:10:\"blockchain\";i:11;s:8:\"altcoins\";i:12;s:11:\"stablecoins\";}i:3;s:1:\"1\";}i:14;a:4:{i:0;i:8;i:1;s:20:\"Prensa internacional\";i:2;a:1:{i:0;s:35:\"Portadas de la prensa internacional\";}i:3;s:1:\"1\";}i:15;a:4:{i:0;i:28;i:1;s:16:\"Récord Guinness\";i:2;a:1:{i:0;s:16:\"Récord Guinness\";}i:3;s:1:\"1\";}i:16;a:4:{i:0;i:30;i:1;s:20:\"Selección Argentina\";i:2;a:32:{i:0;s:20:\"Selección Argentina\";i:1;s:7:\"Scaloni\";i:2;s:5:\"Messi\";i:3;s:12:\"La Scaloneta\";i:4;s:3:\"AFA\";i:5;s:18:\"Emiliano Martínez\";i:6;s:14:\"Dibu Martínez\";i:7;s:13:\"Franco Armani\";i:8;s:15:\"Gerónimo Rulli\";i:9;s:15:\"Gonzalo Montiel\";i:10;s:13:\"Nahuel Molina\";i:11;s:5:\"Foyth\";i:12;s:8:\"Pezzella\";i:13;s:15:\"Cristian Romero\";i:14;s:18:\"Lisandro Martínez\";i:15;s:8:\"Otamendi\";i:16;s:13:\"Marcos Acuña\";i:17;s:10:\"Tagliafico\";i:18;s:15:\"Leandro Paredes\";i:19;s:16:\"Guido Rodríguez\";i:20;s:7:\"De Paul\";i:21;s:15:\"Enzo Fernández\";i:22;s:8:\"Lo Celso\";i:23;s:17:\"Exequiel Palacios\";i:24;s:11:\"Papu Gómez\";i:25;s:12:\"Mac Allister\";i:26;s:6:\"Dybala\";i:27;s:9:\"Di María\";i:28;s:14:\"Nico González\";i:29;s:17:\"Lautaro Martínez\";i:30;s:16:\"Julián Álvarez\";i:31;s:15:\"Joaquín Correa\";}i:3;s:1:\"1\";}i:17;a:4:{i:0;i:37;i:1;s:19:\"Elecciones Neuquén\";i:2;a:18:{i:0;s:13:\"Mariano Gaido\";i:1;s:12:\"Juan Peláez\";i:2;s:14:\"Valeria Todero\";i:3;s:15:\"Cecilia Maletti\";i:4;s:15:\"Daniel Figueroa\";i:5;s:24:\"Frente de Todos Neuquino\";i:6;s:16:\"Soledad Salaburu\";i:7;s:17:\"José Luis Artaza\";i:8;s:17:\"Angélica Lagunas\";i:9;s:11:\"Lucas Ruíz\";i:10;s:22:\"elecciones en neuquén\";i:11;s:26:\"elección 2023 en Neuquén\";i:12;s:15:\"Marcos Koopmann\";i:13;s:16:\"Rolando Figueroa\";i:14;s:11:\"Pablo Cervi\";i:15;s:14:\"Ramón Rioseco\";i:16;s:13:\"Carlos Eguía\";i:17;s:13:\"Patricia Jure\";}i:3;s:1:\"1\";}i:18;a:4:{i:0;i:38;i:1;s:21:\"Elecciones Río Negro\";i:2;a:13:{i:0;s:24:\"Elecciones en Río Negro\";i:1;s:29:\"Elecciones 2023 en Río Negro\";i:2;s:19:\"Alberto Weretilneck\";i:3;s:19:\"Aníbal Tortoriello\";i:4;s:12:\"Silvia Horne\";i:5;s:13:\"Gustavo Casas\";i:6;s:17:\"Cambia Río Negro\";i:7;s:23:\"Juntos Somos Río Negro\";i:8;s:12:\"Gabriel Musa\";i:9;s:16:\"Aurelio Vázquez\";i:10;s:13:\"Rafael Zamaro\";i:11;s:17:\"Gabriel Di Tullio\";i:12;s:12:\"Ariel Rivero\";}i:3;s:1:\"1\";}i:19;a:4:{i:0;i:39;i:1;s:23:\"Inteligencia artificial\";i:2;a:8:{i:0;s:23:\"Inteligencia artificial\";i:1;s:7:\"ChatGPT\";i:2;s:8:\"chat gpt\";i:3;s:16:\"Machine Learning\";i:4;s:8:\"DeepMind\";i:5;s:13:\"Deep learning\";i:6;s:27:\"Natural Language Processing\";i:7;s:33:\"Procesamiento de Lenguaje Natural\";}i:3;s:1:\"1\";}i:20;a:4:{i:0;i:40;i:1;s:8:\"paraguay\";i:2;a:2:{i:0;s:2:\"py\";i:1;s:5:\"py.py\";}i:3;s:1:\"1\";}i:21;a:4:{i:0;i:42;i:1;s:6:\"darwin\";i:2;a:3:{i:0;s:3:\"dar\";i:1;s:4:\"darw\";i:2;s:7:\"darwins\";}i:3;s:1:\"1\";}}';


//pasando de crudo a array PHP
$quitoSLASHES = stripslashes($crudo); //quito barras
$array=unserialize($quitoSLASHES); //deserializo.
//print_r($array);
$count = count($array);
echo 'elementos: ' . $count;
echo '<br><br>';
$elementoNuevo=[$count+1,"wmigue",["wmiguelo", "miguelangelo", "otros miguelos"], 1]; //agrego un elemento nuevo (solo para esta estructura.)
array_push($array, $elementoNuevo);
print_r($array);



//ver como json
echo '<br><br>';
echo json_encode($array);



//dame solo los ID (se aplica a la estructura en cuestion)
echo '<br><br>';
foreach($array as $k=>$v){
    foreach($v as $k2=>$v2){
        if($k2==1 or $k2==2 or $k2==3){

        }else{
            echo $v2 . '<br>';
            $arrID[] = $v2;
        }
    }
}
//OBTENER EL ID MAXIMO.
$maxID = max($arrID);
echo '<br><br>maximo ID: ' . $maxID;



//crudo con los slashes (como estaba en crudo)
echo '<br><br>';
$array=serialize($array);
$slasheado = addslashes($array);
echo $slasheado;

//crudo sin los slashes
echo '<br><br>';
$sinslasheado = stripslashes($array);
echo $sinslasheado;



// Eliminar los últimos dos elementos del array PHP
echo '<br><br>';
$array=unserialize($array);
array_splice($array, -3);
print_r($array);
//lo serializo y lo imprimo sin esos 2 elementos.
echo '<br><br>';
$array=serialize($array);
echo $array;
























