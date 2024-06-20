$(".flip").click(function () {
    $(this).parents(".card__inner").toggleClass("flipped");
});
$(".clickcard").click(function () {
    $(this).toggleClass("flipped");
});
