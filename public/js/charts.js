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
        console.log(data);
    })
    .fail(function() {
        console.log("error");
    })
    .always(function() {
        console.log("complete");
    });
    
}