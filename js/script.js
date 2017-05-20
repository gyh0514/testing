$(document).ready(function () {
    $('form').validator().on('submit', function (e) {

        if (!e.isDefaultPrevented()) {
            alert("do something after successful form validation");
        }

        var num1 = $("#num1").val();
        var num2 = $("#num2").val();
        var total = num1 * num2;

        var message = ""
        for (var i = 0; i < total; i++) {
            message += "<span class='glyphicon glyphicon-star'></span>";
        }
        $(".panel-footer").append(message);
        e.preventDefault();
    });


});