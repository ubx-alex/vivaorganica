function load()
{


	$.getJSON('vivaNodo1.php', function(valoresActuales)
	{
		
			var fecha = valoresActuales.fecha;
			var adc1 = valoresActuales.adc1 * 1;
			var adc2 = valoresActuales.adc2 * 1;
			
			//humedad relativa
			var adc1Voltage = (adc1 * 0.0011730205278592) * 4.35;

			var hr=((0.0391*adc1Voltage)*1000)-42.5;
			hr = parseInt(hr);
			//temperatura

			var temp  = (adc2 * 0.0011730205278592) * 100;
			temp  = parseInt(temp)
		
		document.getElementById("fechaNodo1").innerHTML = fecha; 
		document.getElementById("adc1Nodo1").innerHTML = hr; 
		document.getElementById("adc2Nodo1").innerHTML = temp; 
		
		
		setTimeout(load, 5000);
	});
}

$(function()
{	
	google.load('visualization', '1', { packages:['gauge'], callback: load });
	
});
