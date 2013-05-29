function loadDataFall()
{
var valueStatus
	$.getJSON('data.php', function(data)
	{
		
		$(data.DiaChannelDataFull).each(function(index, element) {
			var channel = element.id.dcChannelName;
			var instance = element.id.ddInstanceName;
		
			if (instance != 'freescaletemplate') return;
			
			if (channel == 'status') 
			valueStatus= element.dcdIntegerValue * 1;
			
			
			
		});
	
		if (valueStatus == 1)
			$('#sensorFall').removeClass('alert');
			
		if (valueStatus == 2)
			$('#sensorFall').addClass('alert');	
		
		setTimeout(loadDataFall, 5000);
	});
}

loadDataFall();


