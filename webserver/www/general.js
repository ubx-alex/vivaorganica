function load()
{
var valueDiastolic;
var valueSystolic;
var valuePulse;
var valueMap;

	$.getJSON('data.php', function(data)
	{
		$(data.DiaChannelDataFull).each(function(index, element) {
			var channel = element.id.dcChannelName;
			var instance = element.id.ddInstanceName;
		
			if (instance != 'bpcuff0') return;
			
			if (channel == 'diastolic') 
			valueDiastolic= element.dcdIntegerValue * 1;
			
			if (channel == 'systolic') 
			valueSystolic= element.dcdIntegerValue * 1;
			
			if (channel == 'pulse') 
			valuePulse= element.dcdIntegerValue * 1;
			
			if (channel == 'map') 
			valueMap= element.dcdIntegerValue * 1;
			
	
			
			
		});
		var dataTableDiastolic = google.visualization.arrayToDataTable([
			[ 'Label', 'Value' ],
			[ 'Diastolic', valueDiastolic ]
		]);
		var dataTableSystolic = google.visualization.arrayToDataTable([
			[ 'Label', 'Value' ],
			[ 'Systolica', valueSystolic ]
			
		]);
		var dataTablePulse = google.visualization.arrayToDataTable([
			[ 'Label', 'Value' ],
			[ 'Pulse', valuePulse ]
			
		]);
		
		var dataTableMap = google.visualization.arrayToDataTable([
			[ 'Label', 'Value' ],
			[ 'Map', valueMap ]
			
		]);
		
		
		var optionsDiastolic = {
			width: 400, height: 200,
			min:0, max:200,
			redFrom: 100, redTo: 200,
			yellowFrom:90, yellowTo: 100,
			greenFrom:50, greenTo:90,
			minorTicks: 5
		};

		var optionsSystolic = {
			width: 400, height: 200,
			min:0, max:200,
			redFrom: 160, redTo: 200,
			yellowFrom:140, yellowTo: 160,
			greenFrom:100, greenTo:140,
			minorTicks: 5
		};

		var optionsPulse = {
			width: 400, height: 200,
			min:0, max:200,
			redFrom: 120, redTo: 200,
			yellowFrom:100, yellowTo: 120,
			greenFrom:40, greenTo:100,
			minorTicks: 5
		};
		
		var optionsMap = {
			width: 400, height: 200,
			min:0, max:200,
			redFrom: 110, redTo: 200,
			yellowFrom:0, yellowTo: 70,
			greenFrom:70, greenTo:110,
			minorTicks: 5
		};
		document.getElementById("pressureDiastolic").innerHTML = valueDiastolic; 
		document.getElementById("pressureSystolic").innerHTML = valueSystolic; 
		document.getElementById("pressurePulse").innerHTML = valuePulse; 
		
		
		// to set valuer min max pressure http://www.texasheartinstitute.org/HIC/Topics_Esp/Cond/hbp_span.cfm
		//var chartDiastolic = new google.visualization.Gauge(document.getElementById('pressureDiastolic'));
		//chartDiastolic.draw(dataTableDiastolic, optionsDiastolic);
		
		//var chartSystolic = new google.visualization.Gauge(document.getElementById('pressureSystolic'));
		//chartSystolic.draw(dataTableSystolic, optionsSystolic);
		
		//var chartPulse = new google.visualization.Gauge(document.getElementById('pressurePulse'));
		//chartPulse.draw(dataTablePulse, optionsPulse);
		
		//var chartMap = new google.visualization.Gauge(document.getElementById('pressureMap'));
		//	chartMap.draw(dataTableMap, optionsMap);
		
		
		
		
		
		
		setTimeout(load, 5000);
	});
}

$(function()
{
	google.load('visualization', '1', { packages:['gauge'], callback: load });
	
});