function loadDataPressure()
{
var diastolic = [0,0,0,0,0];
var systolic = [0,0,0,0,0];
var pulse = [0,0,0,0,0];
var map = [0,0,0,0,0];
var date = [0,0,0,0,0];
var diastolicTemp = [0,0,0,0,0];
var systolicTemp = [0,0,0,0,0];
var pulseTemp = [0,0,0,0,0];
var mapTemp = [0,0,0,0,0];
var dateTemp = [0,0,0,0,0];

var i = 0;
var countdiastolic = 0 ;
var countsystolic = 0 ;
var countpulse = 0 ;
var countmap = 0 ;
var countdate = 0 ;
var temp = -1 ;
var position = 0;

	$.getJSON('dataBloodPressure.php', function(data)
	{
		
		$(data.DiaChannelDataHistoryFull).each(function(index, element) {
			var channel = element.id.dcChannelName;
			var instance = element.id.ddInstanceName;
		
			if (instance != 'bpcuff0') return;
			
			if (channel == 'diastolic'){
			diastolicTemp[countdiastolic] = element.dcdIntegerValue * 1;
			
			countdiastolic++;
			}
			
			if (channel == 'systolic') {
			systolicTemp[countsystolic]= element.dcdIntegerValue * 1;
			countsystolic++;
			}
			
			if (channel == 'pulse') {
			pulseTemp[countpulse]= element.dcdIntegerValue * 1;
			countpulse++;
			}
			
			if (channel == 'map') {
			mapTemp[countmap]= element.dcdIntegerValue * 1;
			countmap++;
			}
			
			if (channel == 'sample_status') {
			dateTemp[countdate] = element.dcdUpdateTime;
			countdate++;
			}
			
			if (countdiastolic == 5)
				countdiastolic = 0 ;
			if (countsystolic == 5)
				countsystolic = 0 ;
			if (countpulse == 5)
				countpulse = 0 ;	
				
			if (countmap == 5)
				countmap = 0 ;	
				
			if (countdate == 5)
				countdate = 0 ;	
				
				
		});
		
		for (i=0;i<5;i++){
			
			if (countdate == 5)
				countdate = 1;
			if (countdate == 0 )
				temp = 0;
			
			diastolic[i] = diastolicTemp[countdate+temp];
			systolic[i] = systolicTemp[countdate+temp];
			pulse[i] = pulseTemp[countdate + temp];
			map[i] = mapTemp[countdate + temp];
			if (dateTemp[countdate + temp] == 0){
				date[i] ='No data';
			}
			else{
			date[i] = dateTemp[countdate + temp];
			}
			countdate++;
			
		}
		
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'Date');
		data.addColumn('number', 'Diastolic');
		data.addColumn('number', 'Systolic');
		data.addColumn('number', 'Pulse');
		data.addColumn('number', 'Map');
		data.addRows(5);
		data.setCell(0, 0, date[0]);
		data.setCell(0, 1, diastolic[0]);
		data.setCell(0, 2, systolic[0]);
		data.setCell(0, 3, pulse[0]);
		data.setCell(0, 4, map[0]);
		data.setCell(1, 0, date[1]);
		data.setCell(1, 1, diastolic[1]);
		data.setCell(1, 2, systolic[1]);
		data.setCell(1, 3, pulse[1]);
		data.setCell(1, 4, map[1]);
		data.setCell(2, 0, date[2]);
		data.setCell(2, 1, diastolic[2]);
		data.setCell(2, 2, systolic[2]);
		data.setCell(2, 3, pulse[2]);
		data.setCell(2, 4, map[2]);
		data.setCell(3, 0, date[3]);
		data.setCell(3, 1, diastolic[3]);
		data.setCell(3, 2, systolic[3]);
		data.setCell(3, 3, pulse[3]);
		data.setCell(3, 4, map[3]);
		data.setCell(4, 0, date[4]);
		data.setCell(4, 1, diastolic[4]);
		data.setCell(4, 2, systolic[4]);
		data.setCell(4, 3, pulse[4]);
		data.setCell(4, 4, map[4]);
		
		var optionsTable = {
			width: 600, height: 200,
			showRowNumber: true
			
		};
		
		var table = new google.visualization.Table(document.getElementById('tablePressure'));
		
		table.draw(data, optionsTable);

		//google.visualization.events.addListener(table, 'select', function() {
		//var row = table.getSelection()[0].row;
		//alert('You selected ' + data.getValue(row, 0));
  //});
	
		
	});
}



$(function()
{
	google.load('visualization', '1', { packages:['table'], callback: loadDataPressure });
	
});