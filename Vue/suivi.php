<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 05/04/2017
 * Time: 15:14
 */

    interfaceTop();
?>
    <h1>Suivi de ma glycémie</h1>
    <?php
      var_dump(getInjectionsReportsByDay());
    ?>

    <html>
  <head>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data_array = <?php echo json_encode(getInjectionsReportsByDay()) ?>;
        console.log(data_array);
        
        var data = google.visualization.arrayToDataTable('Heure', 'Glycémie').add(data_array);

        console.log(data);

         //console.log(test);
        /*var data = google.visualization.arrayToDataTable([
          ['Heure', 'Glycemie'],
          ['2013',  1000],
          ['2014',  1170],
          ['2015',  660],
          ['2016',  1030]
        ]);*/

        var options = {
          title: 'Graphique Glycémie',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <div id="chart_div" style="width: 100%; height: "></div>

    <hr />

    <h1>Suivi des injections d'insuline</h1>

<?php
    interfaceBot();
?>