<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Gradient Donut</title>

    <link href="../../assets/styles.css" rel="stylesheet" />

    <style>
      
        #chart {
      max-width: 380px;
      margin: 35px auto;
      padding: 0;
    }
    
    .apexcharts-legend-text tspan:nth-child(1) {
      font-weight: lighter;
      fill: #999;
    }
    
    .apexcharts-legend-text tspan:nth-child(3) {
      font-weight: bold;
    }
      
    </style>

    <script>
      window.Promise ||
        document.write(
          '<script src="<script src="assets/apex/aset/polyfill.min.js"><\/script>'
        )
      window.Promise ||
        document.write(
          '<script src="<script src="assets/apex/aset/classList.min.js"><\/script>'
        )
      window.Promise ||
        document.write(
          '<script src="<script src="assets/apex/aset/findindex_polyfill_mdn"><\/script>'
        )
    </script>

    
    <script src="assets/apex/aset/react.production.min.js"></script>
    <script src="assets/apex/aset/react-dom.production.min.js"></script>
    <script src="assets/apex/aset/prop-types.min.js"></script>
    <script src="assets/apex/aset/browser.min.js"></script>
    <script src="assets/apex/aset/apexcharts.js"></script>
    <script src="assets/apex/aset/react-apexcharts.iife.min.js"></script>
    

    <script>
      // Replace Math.random() with a pseudo-random number generator to get reproducible results in e2e tests
      // Based on https://gist.github.com/blixt/f17b47c62508be59987b
      var _seed = 42;
      Math.random = function() {
        _seed = _seed * 16807 % 2147483647;
        return (_seed - 1) / 2147483646;
      };
    </script>

    
  </head>

  <body>
    
    <div id="app"></div>

    <!-- <div id="html">
      &lt;div id=&quot;chart&quot;&gt;
  &lt;ReactApexChart options={this.state.options} series={this.state.series} type=&quot;donut&quot; width={380} /&gt;
&lt;/div&gt;
    </div> -->

    <script type="text/babel">
      class ApexChart extends React.Component {
        constructor(props) {
          super(props);

          this.state = {
          
            series: [44, 55, 41, 17, 15],
            options: {
              chart: {
                width: 380,
                type: 'donut',
              },
              plotOptions: {
                pie: {
                  startAngle: -190,
                  endAngle: 270
                }
              },
              dataLabels: {
                enabled: false
              },
              fill: {
                type: 'gradient',
              },
              legend: {
                formatter: function(val, opts) {
                  return val + " - " + opts.w.globals.series[opts.seriesIndex]
                }
              },
              title: {
                text: 'Gradient Donut with custom Start-angle'
              },
              responsive: [{
                breakpoint: 480,
                options: {
                  chart: {
                    width: 200
                  },
                  
                }
              }]
            },
          
          
          };
        }

      

        render() {
          return (
            <div>
              <div id="chart">
                <ReactApexChart options={this.state.options} series={this.state.series} type="donut" width={380} />
              </div>
              <div id="html-dist"></div>
            </div>
          );
        }
      }

      const domContainer = document.querySelector('#app');
      ReactDOM.render(React.createElement(ApexChart), domContainer);
    </script>

    
  </body>
</html>