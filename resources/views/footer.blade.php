   <!--! footer -->
   <footer id="footer" class="footer">
       <div class="footer__container">
           <a href="https://zvladislav.ffox.site/" target="_blank" class="footer__link">
               <img src="{{ asset('/img/cog.svg') }}" alt="img" class="footer__img">
               <div class="footer__text"> Разработка сайта <span>
                       < Vfolio />
                   </span></div>
           </a>
           <div class="footer__name">squid | <span></span></div>
       </div>
   </footer>
   <!--! footer end -->


   <script src="{{ asset('/staff/jquery-3.5.1.min.js?ver=1') }}"></script>
   <script src="{{ asset('/staff/libs.min.js?ver=1') }}"></script>
   <script src="{{ asset('/js/script.js?ver=1') }}"></script>
   <script>
       function loadMoreData(page, selectors, url) {
           $.ajax({
                   url: url + "?page=" + page,
                   type: "get",

               })
               .done(function(data) {
                   if (data.html == " ") {
                       $(".ajax-load").html("no more content");
                       return
                   }

                   $(selectors).append(data.html);
               })
               .fail(function(jqXHR, ajaxOptions, thrownError) {
                   alert("server not responding kok")
               })
       }
       var page = 1;
       var selectors
       if ($("#post-data ").length) {
        if ($(".News-text__item").length) {
                   page = 0;
               }
           $(window).scroll(function() {

               if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                   page++;

                   loadMoreData(page, "#post-data", "");
               }
           })
       }


       function loadMore(page, selectors, url) {
           $.ajax({
                   url: url,
                   type: "get",

               })
               .done(function(data) {
                   if (data.html == " ") {
                       $(".ajax-load").html("no more content");
                       return
                   }

                   $(selectors).append(data.html);
               })
               .fail(function(jqXHR, ajaxOptions, thrownError) {
                   alert("server not responding")
               })
       }


       if (document.getElementsByClassName("switcher-module__check-box ").length) {
           $(window).scroll(function() {

               if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                   page++;
                   if ($("#Ns").hasClass("Ns--active")) {
                       loadMoreData(page, ".news-column__content", "http://squid/inlineContent/news_column1");
                   } else {
                       loadMoreData(page, ".news-column__content", "http://squid/inlineContent/news_column2");
                   }

               }
           })
       }

       if (typeof c !== 'undefined') {
           // footer
           var contactsH = $("#footer").offset().top,
               scrollOffset = $(window).height(),
               footerheight = $("#footer").height();

           if (scrollOffset > contactsH + footerheight) {
               $("#footer").toggleClass("footer-down");
           }
       }
   </script>

   </body>

   </html>
