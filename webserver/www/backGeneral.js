function load()
{
	$.getJSON('data.php', function(data)
	{
		$(data.DiaChannelDataFull).each(function(index, element) {
			var channel = element.id.dcChannelName;
			var instance = element.id.ddInstanceName;
		
			if (channel != 'diastolic' || instance != 'bpcuff0') return;
			
			var valueDiastolic = element.dcdIntegerValue * 1;
			
			var dataTable = google.visualization.arrayToDataTable([
				[ 'Label', 'Value' ],
				[ 'Diastolic', valueDiastolic ],
				[ 'Diastolic', valueDiastolic ]
			]);
			
			var options = { width: 200, height: 200 };
			
			var chart = new google.visualization.Gauge(document.getElementById('show'));
			chart.draw(dataTable, options);
		});
		setTimeout(load, 10000);
	});
}

$(function()
{
	google.load('visualization', '1', { packages:['gauge'], callback: load });
});