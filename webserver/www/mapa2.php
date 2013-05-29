<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title></title></head><body style="color: rgb(0, 0, 0); background-color: rgb(51, 204, 0);" alink="#000099" link="#000099" vlink="#990099">
<div style="text-align: center;"><span style="position: absolute; z-index: 7; left: 198px; top: 29px; width: 712px; height: 40px;"><div v:shape="_x0000_s1089" style="padding: 2.88pt;" class="shape">
<div style="text-align: center;">
  </div>
<p style="text-align: center;" class="MsoNormal"><span style="font-size: 22pt; font-family: &quot;Arial Black&quot;;" lang="en-US">Universida Autonoma de Baja California.</span></p>
  </div></span><br>
<br>
<br>
<br>
<br>
<br>
<img style="width: 106px; height: 153px;" alt="" src="escudo_uabc_gr1.jpg">
  <br>
<?php $username="root";
$password="quefeo85";
$database="panda";

mysql_connect(localhost,$username,$password);
mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM ubicacion";
$result=mysql_query($query);

$num=mysql_numrows($result);



mysql_close();
?>

<?php $i=0;

while ($i < $num) {
$id=mysql_result($result,$i,"id");
$estado=mysql_result($result,$i,"estado");


if ($id==1){ $estado1=$estado;}
if ($id==2){ $estado2=$estado;}
if ($id==3){ $estado3=$estado;}
if ($id==4){ $estado4=$estado;}
if ($id==5){ $estado5=$estado;}
if ($id==6){ $estado6=$estado;}
if ($id==7){ $estado7=$estado;}
if ($id==8){ $estado8=$estado;}
if ($id==9){ $estado9=$estado;}
if ($id==10){ $estado10=$estado;}
if ($id==11){ $estado11=$estado;}
if ($id==12){ $estado12=$estado;}
if ($id==13){ $estado13=$estado;}
if ($id==14){ $estado14=$estado;}
if ($id==15){ $estado15=$estado;}
if ($id==16){ $estado16=$estado;}


$i++;
}
?>



<span style="position: absolute; z-index: 7; left: 561px; top: 409px; width: 342px; height: 356px;"><br>
<big style="color: rgb(25, 21, 239);"><span style="font-weight: bold; color: red;">Estado de los Nodos</span><br>
<br>
<br style="font-weight: bold;">
<span style="font-weight: bold;">1: <?php if ($estado1==1){ ?> <span style="font-weight: bold; color: red;">Activo</span> <?php  } else{ echo 'Inactivo';} ?> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
&nbsp;&nbsp; &nbsp;&nbsp; 9: <?php if ($estado9==1){ ?> <span style="font-weight: bold; color: red;">Activo</span> <?php   } else{ echo 'Inactivo';} ?></span><br style="font-weight: bold;">
<br style="font-weight: bold;">
<span style="font-weight: bold;">2: <?php if ($estado2==1){ ?> <span style="font-weight: bold; color: red;">Activo</span> <?php   } else{ echo 'Inactivo';} ?>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  10: <?php if ($estado10==1){?> <span style="font-weight: bold; color: red;">Activo</span> <?php  } else{ echo 'Inactivo';} ?></span><br style="font-weight: bold;">
<br style="font-weight: bold;">
<span style="font-weight: bold;">3: <?php if ($estado3==1){ ?> <span style="font-weight: bold; color: red;">Activo</span> <?php   } else{ echo 'Inactivo';} ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 11: <?php if ($estado11==1){ ?> <span style="font-weight: bold; color: red;">Activo</span> <?php   } else{ echo 'Inactivo';} ?></span><br style="font-weight: bold;">
<br style="font-weight: bold;">
<span style="font-weight: bold;">4: <?php if ($estado4==1){ ?> <span style="font-weight: bold; color: red;">Activo</span> <?php   } else{ echo 'Inactivo';} ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 12:<?php if ($estado12==1){ ?> <span style="font-weight: bold; color: red;">Activo</span> <?php   } else{ echo 'Inactivo';} ?> </span><br style="font-weight: bold;">
<br style="font-weight: bold;">
<span style="font-weight: bold;">5: <?php if ($estado5==1){ ?> <span style="font-weight: bold; color: red;">Activo</span> <?php   } else{ echo 'Inactivo';} ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; 13: <?php if ($estado13==1){ ?> <span style="font-weight: bold; color: red;">Activo</span> <?php   } else{ echo 'Inactivo';} ?></span><br style="font-weight: bold;">
<br style="font-weight: bold;">
<span style="font-weight: bold;">6: <?php if ($estado6==1){?> <span style="font-weight: bold; color: red;">Activo</span> <?php   } else{ echo 'Inactivo';} ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; 14: <?php if ($estado14==1){?> <span style="font-weight: bold; color: red;">Activo</span> <?php  } else{ echo 'Inactivo';} ?></span><br style="font-weight: bold;">
<br style="font-weight: bold;">
<span style="font-weight: bold;">7: <?php if ($estado7==1){ ?> <span style="font-weight: bold; color: red;">Activo</span> <?php   } else{ echo 'Inactivo';} ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; 15:<?php if ($estado15==1){?> <span style="font-weight: bold; color: red;">Activo</span> <?php   } else{ echo 'Inactivo';} ?> </span><br style="font-weight: bold;">
<br style="font-weight: bold;">
<span style="font-weight: bold;">8: <?php if ($estado8==1){?> <span style="font-weight: bold; color: red;">Activo</span> <?php   } else{ echo 'Inactivo';} ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 16:<?php if ($estado16==1){?> <span style="font-weight: bold; color: red;">Activo</span> <?php  } else{ echo 'Inactivo';} ?> </span><br style="font-weight: bold;">
<br style="font-weight: bold;">
<br style="font-weight: bold;">
</big></span><big style="color: rgb(25, 21, 239); font-weight: bold;"><big><big>Mapa de los Nodos.</big></big><br>
<br>
<br>
<br>
</big>
<div style="text-align: left;"><big style="color: rgb(25, 21, 239); font-weight: bold;"><img style="width: 531px; height: 550px;" alt="" src="mapa.jpg"></big><br>


</div>
</div>
</body></html>