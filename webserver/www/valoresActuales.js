function load()
{
var valueDiastolic;
var valueSystolic;
var valuePulse;
var valueMap;

	$.getJSON('valoresActuales.php', function(valoresActuales)
	{
		
			var voltaje1231temp1 = valoresActuales.voltaje1231temp * 1;
			var voltaje1231luz1 = valoresActuales.voltaje1231luz * 1;
			var voltaje1231humedad1 = valoresActuales.voltaje1231humedad * 1;
			var voltaje1232temp1 = valoresActuales.voltaje1232temp * 1;
			var voltaje1232luz1 = valoresActuales.voltaje1232luz * 1;
			var voltaje1232humedad1 = valoresActuales.voltaje1232humedad * 1;
			var voltaje1233temp1 = valoresActuales.voltaje1233temp * 1;
			var voltaje1233luz1 = valoresActuales.voltaje1232luz * 1;
			var voltaje1233humedad1 = valoresActuales.voltaje1233humedad * 1;
			//toFixed(2)
			var voltaje1231temp = (voltaje1231temp1.toFixed(2))*1;
			var voltaje1231luz = (voltaje1231luz1.toFixed(2))*1;
			var voltaje1231humedad = (voltaje1231humedad1.toFixed(2))*1;
			var voltaje1232temp = (voltaje1232temp1.toFixed(2))*1;
			var voltaje1232luz = (voltaje1232luz1.toFixed(2))*1;
			var voltaje1232humedad = (voltaje1232humedad1.toFixed(2))*1;
			var voltaje1233temp = (voltaje1233temp1.toFixed(2))*1;
			var voltaje1233luz = (voltaje1233luz1.toFixed(2))*1;
			var voltaje1233humedad = (voltaje1233humedad1.toFixed(2))*1;
			
			
		
		var datatemp1231 = google.visualization.arrayToDataTable([
			[ 'Label', 'Value' ],
			[ 'Temperatura', voltaje1231temp ]
		]);
		var datatemp1232 = google.visualization.arrayToDataTable([
			[ 'Label', 'Value' ],
			[ 'Temperatura', voltaje1232temp ]
		]);
		var datatemp1233 = google.visualization.arrayToDataTable([
			[ 'Label', 'Value' ],
			[ 'Temperatura', voltaje1233temp ]
		]);
		
		var dataluz1231 = google.visualization.arrayToDataTable([
			[ 'Label', 'Value' ],
			[ 'Luz %', voltaje1231luz ]
		]);
		
		var dataluz1232 = google.visualization.arrayToDataTable([
			[ 'Label', 'Value' ],
			[ 'Luz %', voltaje1232luz ]
		]);
		
		var dataluz1233 = google.visualization.arrayToDataTable([
			[ 'Label', 'Value' ],
			[ 'Luz %', voltaje1233luz ]
		]);
		
		var datahumedad1231 = google.visualization.arrayToDataTable([
			[ 'Label', 'Value' ],
			[ 'RH %', voltaje1231humedad ]
		]);
		var datahumedad1232 = google.visualization.arrayToDataTable([
			[ 'Label', 'Value' ],
			[ 'RH %', voltaje1232humedad ]
		]);
		var datahumedad1233 = google.visualization.arrayToDataTable([
			[ 'Label', 'Value' ],
			[ 'RH %', voltaje1233humedad ]
		]);
		
		var optionstemperature = {
			width: 150, height: 150,
			min:0, max:60,
			redFrom: 45, redTo: 60,
			yellowFrom:30, yellowTo: 45,
			greenFrom:0, greenTo:30,
			minorTicks: 5
		};
		
		var optionsluz = {
			width: 150, height: 150,
			min:0, max:100,
			
			minorTicks: 5
		};
		
		var optionshumedad = {
			width: 150, height: 150,
			min:0, max:100,
			redFrom: 80, redTo: 100,
			yellowFrom:60, yellowTo: 80,
			greenFrom:0, greenTo:60,
			minorTicks: 5
		};

	
		
		
		
		var charttemp1231 = new google.visualization.Gauge(document.getElementById('temp1231'));
		charttemp1231.draw(datatemp1231, optionstemperature);
		var charttemp1232 = new google.visualization.Gauge(document.getElementById('temp1232'));
		charttemp1232.draw(datatemp1232, optionstemperature);
		var charttemp1233 = new google.visualization.Gauge(document.getElementById('temp1233'));
		charttemp1233.draw(datatemp1233, optionstemperature);
		
		var chartluz1231 = new google.visualization.Gauge(document.getElementById('luz1231'));
		chartluz1231.draw(dataluz1231, optionsluz);
		var chartluz1232 = new google.visualization.Gauge(document.getElementById('luz1232'));
		chartluz1232.draw(dataluz1232, optionsluz);
		var chartluz1233 = new google.visualization.Gauge(document.getElementById('luz1233'));
		chartluz1233.draw(dataluz1233, optionsluz);
		
		var charthumedad1231 = new google.visualization.Gauge(document.getElementById('humedad1231'));
		charthumedad1231.draw(datahumedad1231, optionshumedad);
		var charthumedad1232 = new google.visualization.Gauge(document.getElementById('humedad1232'));
		charthumedad1232.draw(datahumedad1232, optionshumedad);
		var charthumedad1233 = new google.visualization.Gauge(document.getElementById('humedad1233'));
		charthumedad1233.draw(datahumedad1233, optionshumedad);
		
		
		
		//setTimeout(load, 5000);
	});
}

$(function()
{	
	google.load('visualization', '1', { packages:['gauge'], callback: load });
	
});