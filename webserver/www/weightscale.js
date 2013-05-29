function loadDataScale()
{

var valueLb;
var valueKg;

	$.getJSON('data.php', function(data)
	{
		$(data.DiaChannelDataFull).each(function(index, element) {
			var channel = element.id.dcChannelName;
			var instance = element.id.ddInstanceName;
		
			if (instance != 'scale0') return;
			
			if (channel == 'diastolic') 
			valueDiastolic= element.dcdIntegerValue * 1;
			
			if (channel == 'systolic') 
			valueSystolic= element.dcdIntegerValue * 1;
			
			if (channel == 'pulse') 
			valuePulse= element.dcdIntegerValue * 1;
			
			if (channel == 'map') 
			valueMap= element.dcdIntegerValue * 1;
			
			if (channel == 'weight_kg') 
			valueKg= element.dcdFloatValue * 1;
			
			if (channel == 'weight_lb') 
			valueLb= element.dcdFloatValue * 1;
			
			
			
		});
		
		
		var dataTableKg = google.visualization.arrayToDataTable([
			[ 'Label', 'Value' ],
			[ 'Lb', valueLb ]
		]);
		var dataTableLb = google.visualization.arrayToDataTable([
			[ 'Label', 'Value' ],
			[ 'Kg', valueKg ]
			
		]);
			
		
		var optionsKg = {
			width: 150, height: 150,
			min:0, max:150,
			redFrom: 120, redTo: 150,
			yellowFrom:80, yellowTo: 120,
			greenFrom:0, greenTo:80,
			minorTicks: 5
		};

		var optionsLb = {
			width: 150, height: 150,
			min:0, max:300,
			redFrom: 240, redTo: 300,
			yellowFrom:160, yellowTo: 240,
			greenFrom:0, greenTo:160,
			minorTicks: 5
		};
		
		// to set valuer min max pressure http://www.texasheartinstitute.org/HIC/Topics_Esp/Cond/hbp_span.cfm
		
		
		var chartKg = new google.visualization.Gauge(document.getElementById('weightKg'));
		chartKg.draw(dataTableKg, optionsLb);
		
		var chartLb = new google.visualization.Gauge(document.getElementById('weightLb'));
		chartLb.draw(dataTableLb, optionsKg);
		
		console.info('weightscale');	
		
		
		
		setTimeout(loadDataScale, 5000);
	});
}

$(function()
{
	google.load('visualization', '1', { packages:['gauge'], callback: loadDataScale });
	
});