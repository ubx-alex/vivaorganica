function loadData()
{
var valueStatus;
var count = 0;
	$.getJSON('data.php', function(data)
	{
		
		$(data.DiaChannelDataFull).each(function(index, element) {
			var channel = element.id.dcChannelName;
			var instance = element.id.ddInstanceName;
		
			if (instance != 'freescalemotion') return;
			
			if (channel == 'status') {
			valueStatus= element.dcdIntegerValue * 1;
			count++;
			}
			
		});
	
		if (valueStatus == 0)
			$('#sensorMotion').removeClass('on');
			
		
		
		if (valueStatus == 1)
			$('#sensorMotion').addClass('on');
		setTimeout(loadData, 5000);
	});
}

loadData();


