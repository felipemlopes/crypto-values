jQuery(document).ready(function($) {
    drawCharts();
});

function drawCharts() {
    $.ajax({
        url: '/charts-ajax',
        type: 'GET',
        dataType: 'json',
    })
    .done(function(data) {
        console.log("success");

        var values = [];
        var data_chart_btc = [];
        var data_chart_eth = [];
        var labels = [];

        var max_btc = -1;
        var min_btc = Number.MAX_VALUE;

        var max_eth = -1;
        var min_eth = Number.MAX_VALUE;

        for (var entry in data[0]) {
            data_chart_btc.push(data[0][entry].value);
            labels.push(data[0][entry].fetched_at);

            if (data[0][entry].value > max_btc) {
                max_btc = data[0][entry].value;
            }

            if (data[0][entry].value < min_btc) {
                min_btc = data[0][entry].value;
            }
        }

        for (var entry in data[1]) {
            data_chart_eth.push(data[1][entry].value);

            if (data[1][entry].value > max_eth) {
                max_eth = data[1][entry].value;
            }

            if (data[1][entry].value < min_eth) {
                min_eth = data[1][entry].value;
            }
        }

        data_chart_btc.reverse();
        data_chart_eth.reverse();
        labels.reverse();


        var ctx = document.getElementById('myChart').getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    yAxisID: 'BTC',
                    borderColor: '#f57c00',
                    backgroundColor: '#f57c00',
                    data: data_chart_btc,
                    fill: false,
                    label: 'Bitcoin',
                    pointHoverRadius: 5,
                    pointHitRadius: 15,
                }, {
                    yAxisID: 'ETH',
                    borderColor: '#1976d2',
                    backgroundColor: '#1976d2',
                    data: data_chart_eth,
                    fill: false,
                    label: 'Ethereum',
                    pointHoverRadius: 5,
                    pointHitRadius: 15,
                }]
            },
            options: {
                responsive: false,
                tooltips: {
                    mode: 'label',
                    intersect: true
                },
                legend: {
                    fontColor: '#FFFFFF'
                },
                scales: {
                    yAxes: [{
                        id: 'BTC',
                        type: 'linear',
                        position: 'left',
                        ticks: {
                            display: false
                        },
                        gridLines: {
                            display: false,
                            color: '#FFFFFF'
                        }
                    }, {
                        id: 'ETH',
                        type: 'linear',
                        position: 'right',
                        ticks: {
                            display: false
                        },
                        gridLines: {

                        }
                    }],
                    xAxes: [{
                        ticks: {
                            autoSkip: false,
                            maxRotation: 90,
                            minRotation: 90,
                            fontColor: '#FFFFFF'
                        },
                        gridLines: {
                            display: false,
                            color: '#FFFFFF'
                        }
                    }]
                }
            }
        });
    })
    .fail(function() {
        console.log("error");
    })
    .always(function() {
        console.log("complete");
    });

}
