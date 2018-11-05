<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="#">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Data Diagram</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Data Diagram</h1>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-body">
      <div class="col-md-6">
        <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
        <script>
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Berita'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Persentase',
        colorByPoint: true,
        data: [<?php foreach ($hasil as $data):?>{
            name: '<?php echo $data->STATUS; ?>' ,
            y: <?php echo $data->JUMLAH; ?>,
            sliced:true,
            selected:true
        },<?php endforeach; ?>]
    }]
});

        </script>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-body">
      <div class="col-md-6">
        <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
        <script>
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Tracer Study'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Persentase',
        colorByPoint: true,
        data: [<?php foreach ($hasil as $data):?>{
            name: '<?php echo $data->STATUS; ?>' ,
            y: <?php echo $data->JUMLAH; ?>,
            sliced:true,
            selected:true
        },<?php endforeach; ?>]
    }]
});

        </script>
      </div>
    </div>
  </div>
</div>
