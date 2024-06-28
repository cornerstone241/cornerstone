<footer>
    <div id="footer">
        <div class="ftBot">
            <div class="row">
                <p class="copy">
                   © 2020 Cornerstone Outsource. All Rights Reserved
                </p>
                <!-- <p class="silver"><img src="public/images/scnt.png" alt="" class="company-logo" /><a href="https://silverconnectwebdesign.com/website-development" rel="external" target="_blank">Web Design</a> Done by <a href="https://silverconnectwebdesign.com" rel="external" target="_blank">Silver Connect Web Design</a></p> -->
            </div>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="scripts/ImageMapResizer.js"></script>
<script>
        $(function() {

            $("#map").imageMapResize();

            var pull        = $('#pull');
                menu        = $('nav ul');
                menuHeight  = menu.height();

            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });

            // Areas we serve Dropdown

            var toggle = $('.hdPhone > ul > li > a .toggle');
            var dropdown = $('.hdPhone > ul > li > ul');

            $(toggle).on('click', function(e) {
                e.preventDefault();
                dropdown.slideToggle();
            });

            $(window).resize(function() {
                if($(window).width() > 800) $('nav ul').removeAttr('style');
            });

        });
 
</script>