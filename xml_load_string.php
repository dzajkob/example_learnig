<?php

$xml =
'<concerts>
	<concert>
		<title>Czarodziejski flet</title>
		<time>1223123123</time>
		<concert>
			<concert2>
				<concert3/>
			</concert2>
		</concert>
	</concert>
	<concert>
		<title>Cztery pory roku</title>
		<time>99999999</time>
	</concert>
</concerts>';

$concert_list = simplexml_load_string($xml);

echo "<table>";
foreach($concert_list as $concert){
    echo "<tr>";
    echo "<td>" . $concert->title . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "\n Konccert specjalny: " . $concert_list->concert[1]->title;