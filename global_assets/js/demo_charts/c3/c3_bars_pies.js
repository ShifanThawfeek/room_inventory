/* ------------------------------------------------------------------------------
 *
 *  # C3.js - bars and pies
 *
 *  Demo JS code for c3_bars_pies.html page
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var С3BarsPies = function() {


    //
    // Setup module components
    //

    // Chart
    var _barsPiesExamples = function() {
        if (typeof c3 == 'undefined') {
            console.warn('Warning - c3.min.js is not loaded.');
            return;
        }

        // Define charts elements
        var pie_chart_element = document.getElementById('c3-pie-chart');
        var donut_chart_element = document.getElementById('c3-donut-chart');
        var bar_chart_element = document.getElementById('c3-bar-chart');
        var bar_stacked_chart_element = document.getElementById('c3-bar-stacked-chart');
        var combined_chart_element = document.getElementById('c3-combined-chart');
        var scatter_chart_element = document.getElementById('c3-scatter-chart');
        var sidebarToggle = document.querySelectorAll('.sidebar-control');


        // Pie chart
        if(pie_chart_element) {

            // Generate chart
            var pie_chart = c3.generate({
                bindto: pie_chart_element,
                size: { width: 350 },
                color: {
                    pattern: ['#2ec7c9','#b6a2de','#5ab1ef','#ffb980','#d87a80']
                },
                data: {
                    columns: [
                        ['data1', 30],
                        ['data2', 120],
                    ],
                    type : 'pie'
                }
            });

            // Change data
            setTimeout(function () {
                pie_chart.load({
                    columns: [
                        ["setosa", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
                        ["versicolor", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
                        ["virginica", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8],
                    ]
                });
            }, 4000);
            setTimeout(function () {
                pie_chart.unload({
                    ids: 'data1'
                });
                pie_chart.unload({
                    ids: 'data2'
                });
            }, 8000);

            // Resize chart on sidebar width change
            if (sidebarToggle) {
                sidebarToggle.forEach(function(togglers) {
                    togglers.addEventListener('click', function() {
                        pie_chart.resize();
                    });
                });
            }
        }

        // Donut chart
        if(donut_chart_element) {

            // Generate chart
            var donut_chart = c3.generate({
                bindto: donut_chart_element,
                size: { width: 350 },
                color: {
                    pattern: ['#2ec7c9','#b6a2de','#5ab1ef','#ffb980','#d87a80']
                },
                data: {
                    columns: [
                        ['data1', 30],
                        ['data2', 120],
                    ],
                    type : 'donut'
                },
                donut: {
                    title: "Iris Petal Width"
                }
            });

            // Change data
            setTimeout(function () {
                donut_chart.load({
                    columns: [
                        ["setosa", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
                        ["versicolor", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
                        ["virginica", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8],
                    ]
                });
            }, 4000);
            setTimeout(function () {
                donut_chart.unload({
                    ids: 'data1'
                });
                donut_chart.unload({
                    ids: 'data2'
                });
            }, 8000);

            // Resize chart on sidebar width change
            if (sidebarToggle) {
                sidebarToggle.forEach(function(togglers) {
                    togglers.addEventListener('click', function() {
                        donut_chart.resize();
                    });
                });
            }
        }

        // Bar chart
        if(bar_chart_element) {

            // Generate chart
            var bar_chart = c3.generate({
                bindto: bar_chart_element,
                size: { height: 400 },
                data: {
                    columns: [
                        ['data1', 30, 200, 100, 400, 150, 250],
                        ['data2', 130, 100, 140, 200, 150, 50]
                    ],
                    type: 'bar'
                },
                color: {
                    pattern: ['#66bb6a','#ffb980','#2ec7c9']
                },
                bar: {
                    width: {
                        ratio: 0.5
                    }
                },
                grid: {
                    y: {
                        show: true
                    }
                }
            });

            // Change data
            setTimeout(function () {
                bar_chart.load({
                    columns: [
                        ['data3', 130, -150, 200, 300, -200, 100]
                    ]
                });
            }, 6000);

            // Resize chart on sidebar width change
            if (sidebarToggle) {
                sidebarToggle.forEach(function(togglers) {
                    togglers.addEventListener('click', function() {
                        bar_chart.resize();
                    });
                });
            }
        }

        // Stacked bar chart
        if(bar_stacked_chart_element) {

            // Generate chart
            var bar_stacked_chart = c3.generate({
                bindto: bar_stacked_chart_element,
                size: { height: 400 },
                color: {
                    pattern: ['#66bb6a','#42a5f5','#d87a80','#ffb980']
                },
                data: {
                    columns: [
                        ['data1', -30, 200, 200, 400, -150, 250],
                        ['data2', 130, 100, -100, 200, -150, 50],
                        ['data3', -230, 200, 200, -300, 250, 250]
                    ],
                    type: 'bar',
                    groups: [
                        ['data1', 'data2']
                    ]
                },
                grid: {
                    x: {
                        show: true
                    },
                    y: {
                        lines: [{value:0}]
                    }
                }
            });

            // Change data
            setTimeout(function () {
                bar_stacked_chart.groups([['data1', 'data2', 'data3']])
            }, 4000);
            setTimeout(function () {
                bar_stacked_chart.load({
                    columns: [['data4', 100, -50, 150, 200, -300, -100]]
                });
            }, 8000);
            setTimeout(function () {
                bar_stacked_chart.groups([['data1', 'data2', 'data3', 'data4']])
            }, 10000);

            // Resize chart on sidebar width change
            if (sidebarToggle) {
                sidebarToggle.forEach(function(togglers) {
                    togglers.addEventListener('click', function() {
                        bar_stacked_chart.resize();
                    });
                });
            }
        }

        // Combined chart
        if(combined_chart_element) {

            // Generate chart
            var combined_chart = c3.generate({
                bindto: combined_chart_element,
                size: { height: 400 },
                color: {
                    pattern: ['#2ec7c9', '#b6a2de', '#5ab1ef', '#ffb980', '#d87a80', '#8d98b3']
                },
                data: {
                    columns: [
                        ['data1', 30, 20, 50, 40, 60, 50],
                        ['data2', 200, 130, 90, 240, 130, 220],
                        ['data3', 300, 200, 160, 400, 250, 250],
                        ['data4', 200, 130, 90, 240, 130, 220],
                        ['data5', 130, 120, 150, 140, 160, 150],
                        ['data6', 90, 70, 20, 50, 60, 120],
                    ],
                    type: 'bar',
                    types: {
                        data3: 'spline',
                        data4: 'line',
                        data6: 'area',
                    },
                    groups: [
                        ['data1','data2']
                    ]
                }
            });

            // Resize chart on sidebar width change
            if (sidebarToggle) {
                sidebarToggle.forEach(function(togglers) {
                    togglers.addEventListener('click', function() {
                        combined_chart.resize();
                    });
                });
            }
        }

        // Scatter chart
        if(scatter_chart_element) {

            // Generate chart
            var scatter_chart = c3.generate({
                size: { height: 400 },
                bindto: scatter_chart_element,
                data: {
                    xs: {
                        setosa: 'setosa_x',
                        versicolor: 'versicolor_x',
                    },
                    columns: [
                        ["setosa_x", 3.5, 3.0, 3.2, 3.1, 3.6, 3.9, 3.4, 3.4, 2.9, 3.1, 3.7, 3.4, 3.0, 3.0, 4.0, 4.4, 3.9, 3.5, 3.8, 3.8, 3.4, 3.7, 3.6, 3.3, 3.4, 3.0, 3.4, 3.5, 3.4, 3.2, 3.1, 3.4, 4.1, 4.2, 3.1, 3.2, 3.5, 3.6, 3.0, 3.4, 3.5, 2.3, 3.2, 3.5, 3.8, 3.0, 3.8, 3.2, 3.7, 3.3],
                        ["versicolor_x", 3.2, 3.2, 3.1, 2.3, 2.8, 2.8, 3.3, 2.4, 2.9, 2.7, 2.0, 3.0, 2.2, 2.9, 2.9, 3.1, 3.0, 2.7, 2.2, 2.5, 3.2, 2.8, 2.5, 2.8, 2.9, 3.0, 2.8, 3.0, 2.9, 2.6, 2.4, 2.4, 2.7, 2.7, 3.0, 3.4, 3.1, 2.3, 3.0, 2.5, 2.6, 3.0, 2.6, 2.3, 2.7, 3.0, 2.9, 2.9, 2.5, 2.8],
                        ["setosa", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
                        ["versicolor", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
                    ],
                    type: 'scatter'
                },
                color: {
                    pattern: ['#4CAF50', '#ef534f']
                },
                grid: {
                    y: {
                        show: true
                    }
                },
                point: { r: 5 },
                axis: {
                    x: {
                        label: 'Sepal.Width',
                        tick: {
                            fit: false
                        }
                    },
                    y: {
                        label: 'Petal.Width'
                    }
                }
            });

            // Change data
            setTimeout(function () {
                scatter_chart.load({
                    xs: {
                        virginica: 'virginica_x'
                    },
                    columns: [
                        ["virginica_x", 3.3, 2.7, 3.0, 2.9, 3.0, 3.0, 2.5, 2.9, 2.5, 3.6, 3.2, 2.7, 3.0, 2.5, 2.8, 3.2, 3.0, 3.8, 2.6, 2.2, 3.2, 2.8, 2.8, 2.7, 3.3, 3.2, 2.8, 3.0, 2.8, 3.0, 2.8, 3.8, 2.8, 2.8, 2.6, 3.0, 3.4, 3.1, 3.0, 3.1, 3.1, 3.1, 2.7, 3.2, 3.3, 3.0, 2.5, 3.0, 3.4, 3.0],
                        ["virginica", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8],
                    ]
                });
            }, 4000);
            setTimeout(function () {
                scatter_chart.unload({
                    ids: 'setosa'
                });
            }, 8000);
            setTimeout(function () {
                scatter_chart.load({
                    columns: [
                        ["virginica", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
                    ]
                });
            }, 10000);

            // Resize chart on sidebar width change
            if (sidebarToggle) {
                sidebarToggle.forEach(function(togglers) {
                    togglers.addEventListener('click', function() {
                        scatter_chart.resize();
                    });
                });
            }
        }
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _barsPiesExamples();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    С3BarsPies.init();
});
