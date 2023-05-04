</div>
<div class="footer">
    <div class="footer-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-lg-4 no-padding">
                    <div class="panel orange">
                        <i class="fa-solid fa-mobile-alt"></i>
                        <h4>1-800-123-1234</h4>
                        <p>PHONE</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 no-padding">
                    <div class="panel green">
                        <i class="fa-solid fa-map-marker-alt"></i>
                        <h4>Brooklyn, NY 10036, United States</h4>
                        <p>ADDRESS</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 no-padding">
                    <div class="panel blue">
                        <i class="fa-solid fa-envelope"></i>
                        <h4>healthy-life@example.com</h4>
                        <p>EMAIL</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="logo">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt=""></a>
                    </div>
                    <div class="nav-links">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Classes</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Contacts</a></li>
                        </ul>
                    </div>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                    <address>© 2023 - All Rights Reserved</address>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="whatsapp">
    <a href="#" target="_blank"><img src="<?php echo base_url('assets/images/whatsapp.svg.webp');?>" alt=""></a>
</div>
<!-- The Modal -->
<div class="modal fade" id="refferals">
    <div class="modal-dialog">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Add Refferals</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form action="<?php echo base_url('user/query'); ?>" method="post">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <label for="">Reffaral Code <span>*</span></label>
                        <input type="text" name="refferal" class="form-control" min="1">                        
                    </div>                    
                    <div class="col-xl-6 col-lg-6 mt-4">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>        

        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://kit.fontawesome.com/9a5a4de01b.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script>
<script>
    $('#banner').owlCarousel({
        loop:true,
        nav:true,
        dots:true,
        items:1,
        autoplay:true 
    })
</script>
<script>
    var targetOffset = $(".header").offset().top;

    var $w = $(window).scroll(function(){
        if ( $w.scrollTop() > targetOffset ) {   
            $('.header').css({"position":"fixed"});
            $('.header').css({"background-color":"rgba(0,0,0,0.7)"});
        } else {
            $('.header').css({"position":"absolute"});
            $('.header').css({"background-color":"transparent"});
        }
    });
</script>
<script>
    $('#stories').owlCarousel({
        loop:true,
        margin:10,
        dots:true,
        autoplay:true,
        items:1,
        nav:false
    })
</script>
<script>
    $('#blogs').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
</script>
<script>
    $('#pack').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
</script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<script>
$(document).on('click', '.rate', function() {
    var entry_id = $(this).data('id');
    $('.query').attr('value', entry_id);
    $('#ratemodal').modal('show');
  });
  /* $(document).on('click', '.confirmed', function() {
    var entry_id = $(this).data('id');
    $.ajax({
        url: '<?php echo base_url('users/delete'); ?>',
        method: 'post',
        data: { entry_id:entry_id },
        success: function(response) {
            document.load();
        }
    });
    $('#deleteModal').modal('hide');
}); */
</script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages : 'en,ar'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>