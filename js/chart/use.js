<script type="text/javascript">

                window.onload = function () {
                  var assets = new CanvasJS.Chart("chartContainer", {
                    theme: "theme1",//theme1
                    title:{
                      text: false,
                    },
  axisY2: {
interlacedColor: "azure",
tickColor: "azure",
titleFontColor: "rgb(0,75,141)",
interval: 300,
gridColor: "lightblue",
 gridThickness: 0,
 lineColor: "red",
 lineThickness: 3,
 tickColor: "red",
      tickLength: 5,
      tickThickness: 2

},
axisX:{
lineColor: "red",
lineThickness:0
},
              animationEnabled: true,
                    data: [
                    {
    axisYType: "secondary",
    type: "column", //change it to line, area, bar, pie, etc
    dataPoints: [
      { label: "2014", y: 1114.6, indexLabel: "1114.6" },
      { label: "2013", y: 993.8, indexLabel: "993.8" },
      { label: "2012", y: 772.6, indexLabel: "772.6" },
    ]
                    }
                    ]
                  });
                  assets.render();
                }
                </script>
