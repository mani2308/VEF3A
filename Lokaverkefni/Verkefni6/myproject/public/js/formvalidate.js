

$('#username').on('blur', function() {
    checkAvailability();
});

function checkAvailability() {
    jQuery.ajax({
        url: "http://139.59.191.60/nyskraning/validation",
        data:'username='+$("#username").val(),
        type: "POST",
        success:function(data){
            $("#user-availability-status").html(data);
        },
        error:function (){}
    });
}

