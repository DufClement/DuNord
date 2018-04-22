<?php
session_start ();
require_once 'manager.php'; 

require_once 'header.php';
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Service', 'cvf'],
         
          ['Administratif',      <?php echo getService(1); ?>],
          ['Commercial',  <?php echo getService(2); ?>],
          ['Production', <?php echo getService(3); ?>]
        ]);

        var options = {
          title: 'Service'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ['Résolu', <?php echo getStatus(1); ?>, "#b87333"],
          ['En panne',  <?php echo getStatus(2); ?>, "#30006E"],
           ['Non traité', <?php echo getStatus(3); ?>, "#d7ecfd"],
           ['Définitivement en panne', <?php echo getStatus(4); ?>, "#ffe8de"],
           ['En cours', <?php echo getStatus(5); ?>, "#cdc57f"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Status matériels",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <div id="columnchart_values" style="width: 900px; height: 300px;"></div>
  </body>

</html>
<?php require_once 'footer.php'; ?>