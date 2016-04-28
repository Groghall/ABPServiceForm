$(function () {
        $("input[name='haz2']").click(function () {
            if ($("#haz2yes").is(":checked")) {
                $("#haz2number").show();
            } else {
                $("#haz2number").hide();
            }
        });
    });



