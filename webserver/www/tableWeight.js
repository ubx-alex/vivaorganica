function loadDataweight()
{
var weightLb = [0,0,0,0,0];
var weightKg = [0,0,0,0,0];
var date = [0,0,0,0,0];
var weightLbTemp = [0,0,0,0,0];
var weightKgTemp = [0,0,0,0,0];
var dateTemp = [0,0,0,0,0];

var i = 0;
var countdate = 0 ;
var countlb = 0 ;
var countkg = 0 ;
var temp = -1 ;
var position = 0;

	$.getJSON('dataWeightScale.php', function(data)
	{
		
		$(data.DiaChannelDataHistoryFull).each(function(index, element) {
			var channel = element.id.dcChannelName;
			var instance = element.id.ddInstanceName;
		
			if (instance != 'scale0') return;
			
			if (channel == 'weight_lb'){
			weightLbTemp[countlb] = element.dcdFloatValue * 1;
			//dateTemp[position] = element.dcdUpdateTime;
			countlb++;
			}
			
			if (channel == 'weight_kg') {
			weightKgTemp[countkg]= element.dcdFloatValue * 1;
			countkg++;
			}
			
			if (channel == 'sample_type') {
			dateTemp[countdate] = element.dcdUpdateTime;
			countdate++;
			}
			
			
			if (countlb == 5)
				countlb = 0;
			if (countkg == 5)
				countkg = 0;
			if (countdate == 5)
				countdate = 0;			
			
			
			
			
		});
		
		for (i=0;i<5;i++){
			
			if (countdate == 5)
				countdate = 1;
			if (countdate == 0 )
				temp = 0;
			
			weightLb[i] = weightLbTemp[countdate+temp];
			weightKg[i] = weightLb[i]*0.45359237;
			
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
		data.addColumn('number', 'Lb');
		data.addColumn('number', 'Kg');
		data.addRows(5);
		data.setCell(0, 0, date[0]);
		data.setCell(0, 1, weightLb[0]);
		data.setCell(0, 2, weightKg[0]);
		data.setCell(1, 0, date[1]);
		data.setCell(1, 1, weightLb[1]);
		data.setCell(1, 2, weightKg[1]);
		data.setCell(2, 0, date[2]);
		data.setCell(2, 1, weightLb[2]);
		data.setCell(2, 2, weightKg[2]);
		data.setCell(3, 0, date[3]);
		data.setCell(3, 1, weightLb[3]);
		data.setCell(3, 2, weightKg[3]);
		data.setCell(4, 0, date[4]);
		data.setCell(4, 1, weightLb[4]);
		data.setCell(4, 2, weightKg[4]);
		
		var optionsTable = {
			width: 600, height: 200,
			showRowNumber: true
			
		};
		
		var table = new google.visualization.Table(document.getElementById('tableWeight'));
		
		table.draw(data, optionsTable);
		
		//google.visualization.events.addListener(table, 'select', function() {
		//var row = table.getSelection()[0].row;
		//alert('You selected ' + data.getValue(row, 0));
  //});
	
		
	});
}



$(function()
{
	google.load('visualization', '1', { packages:['table'], callback: loadDataweight });
	
});