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

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data_array = <?php echo json_encode(getInjectionsReportsByDay()) ?>;

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Heure');
        data.addColumn('number', 'Valeur');

        for(var i = 0; i < data_array.length; i++) {
            data.addRows([
                [data_array[i][0], Number(data_array[i][1])],
            ]);
        }

        var options = {
          title: 'Evolution de ma glycémie',
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