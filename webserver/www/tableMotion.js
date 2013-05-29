function loadDataMotion()
{

var status = [0,0,0,0,0];
var date = [0,0,0,0,0];
var statusTemp = [0,0,0,0,0];
var dateTemp = [0,0,0,0,0];

var i = 0;
var count = 0 ;
var temp = -1 ;
var position = 0;

	$.getJSON('dataFreescaleMotion.php', function(data)
	{
		
		$(data.DiaChannelDataHistoryFull).each(function(index, element) {
			var channel = element.id.dcChannelName;
			var instance = element.id.ddInstanceName;
		
			if (instance != 'freescalemotion') return;
			
			if (channel == 'status'){
			statusTemp[position] = element.dcdIntegerValue * 1;
			dateTemp[position] = element.dcdUpdateTime;
			position++;
			}
			
			
			
			
			
			
			
			
			if (position == 5)
				position = 0;
			
		});
		
		for (i=0;i<5;i++){
			
			if (position == 5)
				position = 1;
			if (position == 0 )
				temp = 0;
				
				
			if (statusTemp[position+temp] == 0)
				status[i] = 'No motion';
			if (statusTemp[position+temp] == 1)
				status[i] = 'Motion';
			
			
			
			
			if (dateTemp[position + temp] == 0){
				date[i] ='No data';
			}
			else{
			date[i] = dateTemp[position + temp];
			}
			position++;
			
		}
		
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'Date');
		data.addColumn('string', 'Status');
		data.addRows(5);
		data.setCell(0, 0, date[0]);
		data.setCell(0, 1, status[0]);
		data.setCell(1, 0, date[1]);
		data.setCell(1, 1, status[1]);
		data.setCell(2, 0, date[2]);
		data.setCell(2, 1, status[2]);
		data.setCell(3, 0, date[3]);
		data.setCell(3, 1, status[3]);
		data.setCell(4, 0, date[4]);
		data.setCell(4, 1, status[4]);
		
		var optionsTable = {
			width: 600, height: 200,
			showRowNumber: true
			
		};
		
		var table = new google.visualization.Table(document.getElementById('tableMotion'));
		
		table.draw(data, optionsTable);
		
		//google.visualization.events.addListener(table, 'select', function() {
		//var row = table.getSelection()[0].row;
		//alert('You selected ' + data.getValue(row, 0));
  //});
	
		
	});
}



$(function()
{
	google.load('visualization', '1', { packages:['table'], callback: loadDataMotion });
	
});