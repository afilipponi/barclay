/*
This line is required to be properly triggered by Google.
 */
google.setOnLoadCallback(drawChart);


function drawChart() {
    console.log(1);
    googleLineChart('chart/home/account', 'accounts-chart');
}



$(function () {


    //googleLineChart();
    /**
     * get data from controller for home charts:
     */
    $.getJSON('chart/home/account').success(function (data) {
        //$('#accounts-chart').highcharts(options);
    });

    /**
     * Get chart data for categories chart:
     */
    $.getJSON('chart/home/categories').success(function (data) {
        //$('#categories-chart');
    });

    /**
     * Get chart data for budget charts.
     */
    $.getJSON('chart/home/budgets').success(function (data) {
        //$('#budgets-chart');

    });

    $.getJSON('chart/home/recurring').success(function (data) {
        //$('#recurring-chart');
    });

});