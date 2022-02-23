$(document).ready(function() {
    const temp1Chart = c3.generate({
        bindto: '#temp1-chart',
        data: {
            columns: [
                ['Temperature', 0]
            ],
            type: 'gauge',
        },
        color: {
            pattern: ['#FF0000', '#F97600', '#F6C600', '#60B044'], // the three color levels for the percentage values.
            threshold: {
                values: [30, 60, 90, 100]
            }
        },
        gauge: {
            label: {
                format: function (value) { return value+'°' }
            },
            max: 200
        }
    })

    const temp2Chart = c3.generate({
        bindto: '#temp2-chart',
        data: {
            columns: [
                ['Temperature', 0]
            ],
            type: 'gauge',
        },
        color: {
            pattern: ['#FF0000', '#F97600', '#F6C600', '#60B044'], // the three color levels for the percentage values.
            threshold: {
                values: [30, 60, 90, 100]
            }
        },
        gauge: {
            label: {
                format: function (value) { return value+'°' }
            },
            max: 200
        }
    })

    const temp3Chart = c3.generate({
        bindto: '#temp3-chart',
        data: {
            columns: [
                ['Temperature', 0]
            ],
            type: 'gauge',
        },
        color: {
            pattern: ['#FF0000', '#F97600', '#F6C600', '#60B044'], // the three color levels for the percentage values.
            threshold: {
                values: [30, 60, 90, 100]
            }
        },
        gauge: {
            label: {
                format: function (value) { return value+'°' }
            },
            max: 200
        }
    })

    const humidchart = c3.generate({
        bindto: '#humid-chart',
        data: {
            columns: [
                ['Humidity', 0]
            ],
            type: 'gauge',
        },
        color: {
            pattern: ['#FF0000', '#F97600', '#F6C600', '#60B044'], // the three color levels for the percentage values.
            threshold: {
                values: [30, 60, 90, 100]
            }
        },
    })

    const tempLineChart = c3.generate({
        bindto: '#temp-line-chart',
        data: {
            columns: [
                ['data1', 30, 200, 100, 400, 150, 250],
                ['data2', 50, 20, 10, 40, 15, 25]
            ]
        },
        size: {
            height: 180
        }
    });

    const humidLineChart = c3.generate({
        bindto: '#humid-line-chart',
        data: {
            columns: [
                ['data1', 30, 200, 100, 400, 150, 250],
                ['data2', 50, 20, 10, 40, 15, 25]
            ]
        },
        size: {
            height: 180
        }
    });

    $('#device').change(function() {
        $.ajax({
            method: "GET",
            url: "/getTemp.php",
            data: {id: $(this).val() },
            dataType: "json"
          })
            .done(function( data ) {
                temp1Chart.load({
                    columns: [['Temperature', data ? data.temp_1 : 0]]
                });
                temp2Chart.load({
                    columns: [['Temperature', data ? data.temp_1 : 0]]
                });
                temp3Chart.load({
                    columns: [['Temperature', data ? data.temp_1 : 0]]
                });
            });
    })
});