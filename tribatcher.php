<html>
<head><meta/>
<title>Tri Batcher</title>
</head>
<body>
<?php
$t=array(15,22,81,3,106,1,24,7,0);
$cpt=count($t);
$v=0;

while((pow(2,$v))<$cpt) $v++;

$p=pow(2,$v-1);

for($j=0;$j<count($t);$j++) echo $t[$j]." ";
echo "<br />";

		if($t[0]>$t[$p]) {
			$tmp=$t[0];
			$t[0]=$t[$p];
			$t[$p]=$tmp;
		}
for($j=0;$j<count($t);$j++) echo $t[$j]." ";
echo "<br />";

$d=$p;
$p=(int)($p/2);
$q=pow(2,$v-1);
$r=0;

while($p>=1){

	for($i=0;$i<=($cpt-$d-1);$i++) {
		if($t[$i]>$t[$i+$p]) {
			$tmp=$t[$i];
			$t[$i]=$t[$i+$p];
			$t[$i+$p]=$tmp;
		}
		if(($i==$r) && ($p==$r)) {
			if($t[$i]>$t[$i+$d]) {
				$tmp=$t[$i];
				$t[$i]=$t[$i+$d];
				$t[$i+$d]=$tmp;
			}
		}

	}
		if($p !== $q) {
		$d=$q-$p;
		$q=(int)($q/2);
		$r=$p;
		} 
		elseif($p == $q) {
		$d=$p;
		$p=(int)($p/2);
		$q=pow(2,$v-1);
		$r=0;
	}
for($i=0;$i<count($t);$i++) echo $t[$i]." ";
echo "<br />";
}

for($i=0;$i<count($t);$i++) echo $t[$i]." ";
echo "<br />";
?>
</body>
</html>
