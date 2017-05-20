$(document).ready(function () {
    $('form').validator().on('submit', function (e) {

        if (!e.isDefaultPrevented()) {
            alert("do something after successful form validation");
        }


        var num1 = $("#sevice").val();
        $("[type=radio]").is(check){
            var total = num1 * num2;
            var message = "The cost isisisisisisisisis $"
        }
        
        $("p").html("<b>message</b>");
        $("p").css("color","blue")
        e.preventDefault();
    });


});
