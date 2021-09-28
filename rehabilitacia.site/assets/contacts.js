
$(function () {
    let systemOut = $("#system1-out");
    let fromName = systemOut.find("#name");
    let email = systemOut.find("#mail");
    let text1 = systemOut.find("#msg");


    $("input,textarea").focusin(function () {
        $(this).css("background", "#f0f5f5");
    });
    $("input,textarea").focusout(function () {
        $(this).css("background", "#fff");
    });
//move the form:
    $("#system1-out").draggable();
});
//        

$(".pscript").click(function () {
    $("#script1").show();
    $(this).hide();
});
//show the calendar:
$("#tuk").click(function () {
    $("#calendarShowHide").show();
});





