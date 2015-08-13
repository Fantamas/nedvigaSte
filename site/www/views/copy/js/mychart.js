$(function () {
    $('#container').highcharts({
        
		xAxis: {
            min: -0.5,
            max: 10
        },
        yAxis: {
            min: 0,
			max:10
        },
        title: {
            text: 'Scatter plot with regression line'
        },
		tooltip:{
			backgroundColor:"#fff"
			},
		
        series: [{
            type: 'line',
            name: 'Regression Line',
            data: [[0, 1.11], [10, 10]],
            marker: {
                enabled: false
            },
            states: {
                hover: {
                    lineWidth: 0
                }
            },
            enableMouseTracking: false
        }, 
		
		{
            type: 'scatter',
            name: 'Observations',
            data: [[5, 2], [6, 3], [8, 2],[4, 8], [2, 1], [4, 7],[9, 3], [5, 4], [5, 3]],
            marker: {
                radius: 4
            }
        }]
    });
});
	