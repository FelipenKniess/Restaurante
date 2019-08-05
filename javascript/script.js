$(document).ready(function () {
    paginaMesa();
});


function paginaMesa() {
    var oLinha;
    $(".linha-mesa").click(function () {
        $(oLinha).css("background-color", "#d9d9d9");
        $(this).css("background-color", "#999999");
        oLinha = this;
    });
}
