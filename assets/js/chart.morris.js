$(function() {
	'use strict';

	 Morris.Donut({
		element: 'morrisDonut1',
		data: [{
			label: 'Men',
			value: 12
		}, {
			label: 'Women',
			value: 30
		}, {
			label: 'Kids',
			value: 20
		}],
		colors: ['#6d6ef3', '#285cf7', '#00cccc'],
		resize: true,
		labelColor:"#8c9fc3"
	});
	
	Morris.Donut({
		element: 'morrisDonut2',
		data: [{
			label: 'Men',
			value: 12
		}, {
			label: 'Women',
			value: 30
		}, {
			label: 'Kids',
			value: 20
		}, {
			label: 'Infant',
			value: 25
		}],
		colors: ['#6d6ef3', '#285cf7', '#00cccc', '#74DE00'],
		resize: true,
		labelColor:"#8c9fc3"
		
	});
});