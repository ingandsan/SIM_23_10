  
	  google.load("visualization", "1.1", {packages:["corechart"], language: 'En'});	  
	  google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = $.ajax({
          url: "/data_coyuntura/13",
          dataType:"json",
          async: false
          }).responseText;
           
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data);

	
		
        var options = {
          
          width: 480,
          vAxis: {title: 'Porcentaje', format: "decimal"},
          tooltip: { isHtml: true },
		  colors: ['#FF9900','#000099'],
		  pointSize: 10,
		  chartArea:{top:30, left:40},
		  fontSize:10,
		  width: data.getNumberOfRows() * 50,
		  bar: { groupWidth: "50%" }
        };

		
        var chart = new google.visualization.LineChart(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };