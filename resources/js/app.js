import './bootstrap';
import './bootstrap/';
import '../../node_modules/bootstrap/dist/css/bootstrap.css';

// import Alpine from 'alpinejs';
// window.Alpine = Alpine;
// Alpine.start();


var barChart = echarts.init(document.getElementById('main'), null, {
    minwidth: 260,
    height: 400
});

var seriesEncode = echarts.init(document.getElementById('se')); 

window.addEventListener('resize', function() {
    myChart.resize();
});

barChart.setOption({
    title: {
        text: 'Sample Demo'
    },
    tooltip: {},
    xAxis: {
        data: ['shirt', 'cardigan', 'chiffon', 'pants', 'heels', 'socks']
    },
    yAxis: {},
    series: [{
        name: 'sales',
        type: 'bar',
        data: [5, 20, 36, 10, 10, 20]
    }]
});

seriesEncode.setOption({
    dataset: {
        source: [
          ['score', 'amount', 'product'],
          [89.3, 58212, 'Matcha Latte'],
          [57.1, 78254, 'Milk Tea'],
          [74.4, 41032, 'Cheese Cocoa'],
          [50.1, 12755, 'Cheese Brownie'],
          [89.7, 20145, 'Matcha Cocoa'],
          [68.1, 79146, 'Tea'],
          [19.6, 91852, 'Orange Juice'],
          [10.6, 101852, 'Lemon Juice'],
          [32.7, 20112, 'Walnut Brownie']
        ]
      },
      xAxis: {},
      yAxis: { type: 'category' },
      series: [
        {
          type: 'bar',
          encode: {
            // Map "amount" column to x-axis.
            x: 'amount',
            // Map "product" row to y-axis.
            y: 'product'
          }
        }
      ]
})

