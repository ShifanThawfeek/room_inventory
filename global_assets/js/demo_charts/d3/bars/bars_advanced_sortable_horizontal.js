/* ------------------------------------------------------------------------------
 *
 *  # D3.js - horizontal sortable bars
 *
 *  Demo d3.js horizontal bar chart setup with animated sorting
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var D3BarSortableHorizontal = function() {


    //
    // Setup module components
    //

    // Chart
    var _barSortableHorizontal = function() {
        if (typeof d3 == 'undefined') {
            console.warn('Warning - d3.min.js is not loaded.');
            return;
        }

        // Main variables
        var element = document.getElementById('d3-bar-sortable-horizontal'),
            height = 400;


        // Initialize chart only if element exsists in the DOM
        if(element) {

            // Basic setup
            // ------------------------------

            // Define main variables
            var d3Container = d3.select(element),
                margin = {top: 5, right: 20, bottom: 20, left: 40},
                width = d3Container.node().getBoundingClientRect().width - margin.left - margin.right,
                height = height - margin.top - margin.bottom - 5;

            // Add data
            var index = d3.range(8),
            data = index.map(d3.random.normal(40, 10));

            // Colors
            var bar_colors = d3.scale.category20c(),
                bar_text_color = '#fff';



            // Construct scales
            // ------------------------------

            // Horizontal
            var x = d3.scale.linear()
                .domain([0, d3.max(data)])
                .range([0, width]);

            // Vertical
            var y = d3.scale.ordinal()
                .domain(index)
                .rangeRoundBands([height, 0], .3);



            // Create axes
            // ------------------------------

            // Horizontal
            var xAxis = d3.svg.axis()
                .scale(x)
                .orient("bottom");

            // Vertical
            var yAxis = d3.svg.axis()
                .scale(y)
                .orient("left")
                .ticks(8);



            // Create chart
            // ------------------------------

            // Add SVG element
            var container = d3Container.append("svg");

            // Add SVG group
            var svg = container
                .attr("width", width + margin.left + margin.right)
                .attr("height", height + margin.top + margin.bottom)
                .append("g")
                    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");


            //
            // Append chart elements
            //

            // Append axes
            // ------------------------------

            // Horizontal
            svg.append("g")
                .attr("class", "d3-axis d3-axis-horizontal")
                .attr("transform", "translate(0," + height + ")")
                .call(xAxis);

            // Vertical
            svg.append("g")
                .attr("class", "d3-axis d3-axis-vertical")
                .call(yAxis);


            // Append bars
            // ------------------------------

            // Group each bar
            var bar = svg.selectAll(".d3-bar")
                .data(data)
                .enter()
                .append("g")
                    .attr("class", "d3-bar")
                    .attr("fill", function(d, i) { return bar_colors(i); })
                    .attr("transform", function(d, i) { return "translate(0," + y(i) + ")"; });

            // Append bar rectangle
            bar.append("rect")
                .attr("height", y.rangeBand())
                .attr("width", x);

            // Append text label
            bar.append("text")
                .attr("x", function(d) { return x(d) - 12 })
                .attr("y", y.rangeBand() / 2)
                .attr("dy", ".35em")
                .style("fill", bar_text_color)
                .style("text-anchor", "end")
                .text(function(d, i) { return i; });


            // Setup sort
            // ------------------------------

            var sort = false;
            setInterval(function() {
                if (sort = !sort) {
                    index.sort(function(a, b) { return data[a] - data[b]; });
                } else {
                    index = d3.range(8);
                }

                y.domain(index);

                bar.transition()
                    .duration(750)
                    .delay(function(d, i) { return i * 50; })
                    .attr("transform", function(d, i) { return "translate(0," + y(i) + ")"; });
            }, 4000);



            // Resize chart
            // ------------------------------

            // Call function on window resize
            window.addEventListener('resize', resize);

            // Call function on sidebar width change
            var sidebarToggle = document.querySelectorAll('.sidebar-control');
            if (sidebarToggle) {
                sidebarToggle.forEach(function(togglers) {
                    togglers.addEventListener('click', resize);
                });
            }

            // Resize function
            // 
            // Since D3 doesn't support SVG resize by default,
            // we need to manually specify parts of the graph that need to 
            // be updated on window resize
            function resize() {

                // Layout variables
                width = d3Container.node().getBoundingClientRect().width - margin.left - margin.right;


                // Layout
                // -------------------------

                // Main svg width
                container.attr("width", width + margin.left + margin.right);

                // Width of appended group
                svg.attr("width", width + margin.left + margin.right);


                // Axes
                // -------------------------

                // Horizontal range
                x.range([0, width]);

                // Horizontal axis
                svg.selectAll('.d3-axis-horizontal').call(xAxis);


                // Chart elements
                // -------------------------

                // Bar rect
                svg.selectAll('.d3-bar rect').attr("width", x);

                // Bar text
                svg.selectAll('.d3-bar text').attr("x", function(d) { return x(d) - 12; });
            }
        }
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _barSortableHorizontal();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    D3BarSortableHorizontal.init();
});
