function load()
{


	$.getJSON('vivaNodo1.php', function(valoresActuales)
	{
		
			var fecha = valoresActuales.fecha;
			var adc1 = valoresActuales.adc1 * 1;
			var adc2 = valoresActuales.adc2 * 1;
			
			//humedad relativa
			adc1Voltage = (adc1 * 0.0011730205278592) * 4.35;

			adc1=((0.0391*adc1Voltage)*1000)-42.5;

			//temperatura

			adc2  = (adc2 * 0.0011730205278592) * 100;
		
		document.getElementById("fechaNodo1").innerHTML = fecha; 
		document.getElementById("adc1Nodo1").innerHTML = adc1; 
		document.getElementById("adc2Nodo1").innerHTML = adc2; 
		
		
		setTimeout(load, 5000);
	});
}

$(function()
{	
	google.load('visualization', '1', { packages:['gauge'], callback: load });
	
});
