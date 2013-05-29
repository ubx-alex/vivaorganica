
<?php
$username="root";
$password="quefeo85";
$database="panda";
$conectID = mysql_connect(localhost,$username,$password);
or die("NO SE PUEDE CONECTAR A LA BASE DE DATOS");
mssql_select_db("panda");

$result = mssql_query("select valor from datos where fecha < '15/11/2006 17:39:46' and valor_sensor1 = 'A01u1043'",$conectID);
$data = array(); // creamos un arreglo en blanco, este será el de los datos
$line = mssql_fetch_row($result);

while ($line = mssql_fetch_row($result)) {

$data[] = $line[0]; // agregamos el dato, suponiendo que este en la primera posición del arreglo resultanteç
}
include ("jpgraph.php");
include ("jpgraph_line.php");
// aquí ya tenemos el arreglo en $data, solo le agregamos al código anterior

$datay = $data;
// A nice graph with anti-aliasing
$graph = new Graph(1024,768);
$graph->img->SetMargin(30,50,30,30);
//$graph->SetBackgroundImage("tiger_bkg.png",BGIMG_FILLFRAME);

$graph->img->SetAntiAliasing("white");
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->title->Set("Background image");

// Use built in font
$graph->title->SetFont(FF_FONT1,FS_BOLD);

// Slightly adjust the legend from it's default position in the
// top right corner.
$graph->legend->Pos(0.05,0.5,"right","center");

// Create the first line
$p1 = new LinePlot($datay);
//$p1->mark->SetType(MARK_FILLEDCIRCLE);
//$p1->mark->SetFillColor("red");
//$p1->mark->SetWidth(4);
$p1->SetColor("green");
$p1->SetCenter();
$p1->SetLegend("Triumph Tiger -98"); // aqui va el nombre de la señal...
$graph->Add($p1);

// Output line
$graph->Stroke();
?>
