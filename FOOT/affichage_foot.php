<html>
<head>
</head>
<title>Test Affichage</title>
<body>
  
<?php include 'player.php'?>
    <meta charset="utf-8">
<link href="src/nv.d3.css" rel="stylesheet" type="text/css">
<style>

body {
  overflow-y:scroll;
}

text {
  font: 12px sans-serif;
}

.mypiechart {
  width: 500px;
  border: 30px;
}
</style>
<body class='with-3d-shadow with-transitions'>

<h2>Statestiques </h2>
<svg id="test1" class="mypiechart"></svg>


<script src="lib/d3.v3.js"></script>
<script src="nv.d3.js"></script>
<!--<script src="../src/models/legend.js"></script>-->
<script src="src/models/pie.js"></script>
<script src="src/models/pieChart.js"></script>
<!--//<script src="../src/utils.js"></script>-->
<script>
   
  

  var testdata = [
    {
      key: "But avec la tete",
      y: <?php echo $but_tete ?> 
    },
    {
      key: "but avec le pied",
      y: <?php echo $but_pied ?>
    }
    
  ];


nv.addGraph(function() {
    var width = 500,
        height = 500;

    var chart = nv.models.pieChart()
        .x(function(d) { return d.key })
        .y(function(d) { return d.y })
        .color(d3.scale.category10().range())
        .width(width)
        .height(height);

      d3.select("#test1")
          .datum(testdata)
        .transition().duration(1200)
          .attr('width', width)
          .attr('height', height)
          .call(chart);

    chart.dispatch.on('stateChange', function(e) { nv.log('New State:', JSON.stringify(e)); });

    return chart;
});

nv.addGraph(function() {

    var width = 500,
        height = 500;

    var chart = nv.models.pieChart()
        .x(function(d) { return d.key })
        //.y(function(d) { return d.value })
        //.labelThreshold(.08)
        //.showLabels(false)
        .color(d3.scale.category10().range())
        .width(width)
        .height(height)
        .donut(true);

    chart.pie
        .startAngle(function(d) { return d.startAngle/2 -Math.PI/2 })
        .endAngle(function(d) { return d.endAngle/2 -Math.PI/2 });

      //chart.pie.donutLabelsOutside(true).donut(true);

     

    return chart;
})
  
;

</script>
    
</body>
</html>