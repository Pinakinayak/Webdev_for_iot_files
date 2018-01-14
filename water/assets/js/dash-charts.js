/*** First Chart in Dashboard page ***/


/*** second Chart in Dashboard page ***/

	$(document).ready(function() {
		info = new Highcharts.Chart({
			chart: {
				renderTo: 'space',
				margin: [0, 0, 0, 0],
				backgroundColor: null,
                plotBackgroundColor: 'none',
							
			},
			
			title: {
				text: null
			},

			tooltip: {
				formatter: function() { 
					return this.point.name +': '+ this.y +' %';
						
				} 	
			},
		    series: [
				{
				borderWidth: 2,
				borderColor: '#F1F3EB',
				shadow: false,	
				type: 'pie',
				name: 'Income',
				innerSize: '45%',
				data: [
					{ name: 'load percentage', y: 45.0, color: '#0000FF' },
					{ name: 'rest', y: 55.0, color: '#CCCCFF' }
				],
				dataLabels: {
					enabled: false,
					color: '#000000',
					connectorColor: '#000000'
				}
			}]
		});
		
	});

