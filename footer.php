<?php wp_footer(); ?>

<footer class="is-blue pv-3 mt-5-xs">
  <?php echo file_get_contents('https://melvin-lemoine.me/source/credit.php'); ?>
</footer>

<script>
  var popupLever = false;
  // var previous_url;
  // var new_url;

  function popupSwitch(id){

    if (popupLever == false){
      popupLever = true;
      // previous_url = window.location.href;
      // console.log("previous url : " + window.location.href);
      // new_url = window.location.href + '?popuptitle=test';

      // setTimeout(function(){
        // window.history.pushState("test", "test", new_url);
      // }, 50)


      console.log("Switch ON popup");


      $('#' + id).css("visibility", "visible");
      $('html').css('overflow-y', 'hidden');

    } else {
      // window.history.pushState("test", "test", previous_url);
      // console.log("set previous url : " + previous_url);
      popupLever = false;
      console.log("switch OFF popup");

      $('.popup').css("visibility", "hidden");
      $('html').css('overflow-y', 'scroll');
    }
  }
</script>

<script>hljs.initHighlightingOnLoad();</script>

</body>
</html>
