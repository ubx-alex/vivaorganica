function loadData()
{
var valueStatus
	$.getJSON('data.php', function(data)
	{
		console.info('stest');	
		$(data.DiaChannelDataFull).each(function(index, element) {
			var channel = element.id.dcChannelName;
			var instance = element.id.ddInstanceName;
		
			if (instance != 'freescalemotion') return;
			
			if (channel == 'status') 
			valueStatus= element.dcdIntegerValue * 1;
			
			
			
		});
	
	
		document.write('<img src="motionOff.jpg" id="sensorMotion"/>');	
	});
}

loadData();