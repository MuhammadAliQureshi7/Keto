<!-- main content end-->
</section>
  <!--footer section start-->
<footer class="dashboard">
  <p>&copy; <?php echo date("Y");?> . All Rights Reserved | Design by <a href="https://rholab.net/" target="_blank"
      class="text-primary">Rholab Interactive.</a></p>
</footer>
<!--footer section end-->
<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->


<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery-1.10.2.min.js');?>"></script>

<!-- chart js -->
<script src="<?php echo base_url('assets/js/Chart.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/utils.js');?>"></script>
<!-- //chart js -->

<!-- Different scripts of charts.  Ex.Barchart, Linechart -->
<script src="<?php echo base_url('assets/js/bar.js');?>"></script>
<script src="<?php echo base_url('assets/js/linechart.js');?>"></script>
<!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


<script src="<?php echo base_url('assets/js/jquery.nicescroll.js');?>"></script>
<script src="<?php echo base_url('assets/js/scripts.js');?>"></script>

<!-- close script -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  $(function () {
    $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll when navbar is in active -->

 <!-- loading-gif Js -->
 <script src="<?php echo base_url('assets/js/modernizr.js');?>"></script>
 <script>
     $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");;
     });
 </script>
 <!--// loading-gif Js -->

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script>
    $(document).ready(function(){
        load_data();
        function load_data(query){
            $.ajax({
                url:"<?php echo base_url('admin/fetch_article');?>",
                method:"POST",
                data:{query:query},
                success:function(data){
                    $('#result').html(data);
                }
            })
        }
        $('#search_article').keyup(function(){
          var search = $(this).val();
          if(search != ""){
            load_data(search);
          }
          else{
            load_data();
          }
        });
    });
</script>
<script>
    $(document).ready(function(){
        load_data();
        function load_data(query){
            $.ajax({
                url:"<?php echo base_url('admin/fetch_packages');?>",
                method:"POST",
                data:{query:query},
                success:function(data){
                    $('#packages').html(data);
                }
            })
        }
        $('#search_package').keyup(function(){
          var search = $(this).val();
          if(search != ""){
            load_data(search);
          }
          else{
            load_data();
          }
        });
    });
</script>
</body>

</html>
  