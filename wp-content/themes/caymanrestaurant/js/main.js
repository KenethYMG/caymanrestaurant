var featuresNode = document.querySelector(".features");
//valida si existe el div
if (featuresNode != null) {
var feature = featuresNode.innerHTML.split(",");
var featuresNode = document.querySelector('.features');
var feature = featuresNode.innerHTML.split(',');

  var featureHTML = [];
  feature.forEach(function (feature) {
    featureHTML.push('<li><i class="bi bi-check"></i>' + feature + "</li>");
  });

  featuresNode.innerHTML = featureHTML.join("");
}

$(document).ready(function () {
    $(".grid").isotope({
        itemSelector: ".grid-item",
    });

    // filter items - boxDesktop
    $(".filter-button-group").on("click", ".boxfilter", function () {
        var filterValue = $(this).attr("data-filter");
        $(".grid").isotope({ filter: filterValue });
        $(".filter-button-group .boxfilter").removeClass("active");
        $(this).addClass("active");
    });

    // filter items select - boxMobile
    $('.boxfilterSelector').change(function() {
        var filterValue = $(this).val();
        $(".grid").isotope({ filter: filterValue });
        $(".filter-button-group .boxfilter").removeClass("active");
        $(this).addClass("active");
    });
});