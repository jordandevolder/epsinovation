<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 05/04/2017
 * Time: 15:14
 */

    interfaceTop();
?>
    <h1>Suivi des injections d'insuline</h1>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChartInjection);

      function drawChartInjection() {
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
          title: '',
          hAxis: {title: 'Heure',  titleTextStyle: {color: '#333'}},
          vAxis: {title: 'Volume (ml)',minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div_injection'));
        chart.draw(data, options);

        document.getElementsByTagName("svg")[0].children[2].style.display = 'none';
      }
    </script>

    <div id="chart_div_injection" style="width: 100%; height: "></div>

    <hr />

    <h1>Suivi de ma glycémie</h1>

    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChartGlycemie);

        function drawChartGlycemie() {
            var data_array = <?php echo json_encode(getGlycemieReportsByDay()) ?>;

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Heure');
            data.addColumn('number', 'Valeur');

            for(var i = 0; i < data_array.length; i++) {
                data.addRows([
                    [data_array[i][0], Number(data_array[i][1])],
                ]);
            }

            var options = {
                title: '',
                series: {
                    0: { color: 'red' },
                },
                hAxis: {title: 'Heure',  titleTextStyle: {color: '#333'}},
                vAxis: {title: 'Volume (ml)',minValue: 0}
            };

            var chart = new google.visualization.AreaChart(document.getElementById('chart_div_glycemie'));
            chart.draw(data, options);

            document.getElementsByTagName("svg")[1].children[2].style.display = 'none';
        }
    </script>

    <div id="chart_div_glycemie" style="width: 100%; height: "></div>

<?php
    interfaceBot();
?>