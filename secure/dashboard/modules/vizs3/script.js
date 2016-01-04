// Load the Visualization API and the piechart package.
google.load('visualization', '1', {
    'packages': ['corechart']
});

// Set a callback to run when the Google Visualization API is loaded.
google.setOnLoadCallback(drawChart);

function drawChart() {
    var jsonData = $.ajax({
        url: "getData.php",
        dataType: "json",
        async: false
    }).responseText;

    // Create our data table out of JSON data loaded from server.
    var data = new google.visualization.DataTable(jsonData);

    
    // Selsct Chart Type
    var chart_type = document.getElementsByName("chart_type")[0].value;
    
    if(chart_type == "ColumnChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chartdiv'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }
    
    else if(chart_type == "BarChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chartdiv'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }
    
    else if(chart_type == "LineChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.LineChart(document.getElementById('chartdiv'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }
		 else if(chart_type == "PieChart"){
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chartdiv'));
        chart.draw(data, {
            title: "Data Visualization",
            width: "100%",
            height: 400
        });
    }
}