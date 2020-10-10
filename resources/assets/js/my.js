$(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
        mySelect.find('option:selected').prop('disabled', true);
        mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
        mySelect.find('option:disabled').prop('disabled', false);
        mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
        liveSearch: true,
        maxOptions: 1
    });
});
$(document).ready(function () {
     $('.uls-trigger').uls({
         onSelect: function (language) {
             var languageName = $.uls.data.getAutonym(language);
             $('.uls-trigger').text(languageName);
         },
         quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
     });
 });
 $(window).load(function () {
     $("#flexiselDemo3").flexisel({
         visibleItems: 1,
         animationSpeed: 1000,
         autoPlay: true,
         autoPlaySpeed: 5000,
         pauseOnHover: true,
         enableResponsiveBreakpoints: true,
         responsiveBreakpoints: {
             portrait: {
                 changePoint: 480,
                 visibleItems: 1
             },
             landscape: {
                 changePoint: 640,
                 visibleItems: 1
             },
             tablet: {
                 changePoint: 768,
                 visibleItems: 1
             }
         }
     });

 });
 $(function () {
     $("#slider").responsiveSlides({
         auto: true,
         pager: false,
         nav: true,
         speed: 500,
         maxwidth: 800,
         namespace: "large-btns"
     });

 });
 $(document).ready(function () {
     /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
     */

     $().UItoTop({easingType: 'easeOutQuart'});

 });