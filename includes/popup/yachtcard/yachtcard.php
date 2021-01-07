<div class="popup has-overlay" id="yachtcard">

  <div class="popup__overlay is-overlay" onclick="popupSwitch()"></div>

  <div class="popup__box flex-c">

    <div class="popup__box_header">
      <p class="popup__box_header_title">
        Yacht card
      </p>
    </div>

    <div class="popup__box_content">

      <pre class="code" id="html">
        <!-- <code class="html"> -->
          <?php strip_tags(highlight_file('yachtcard.phps')); ?>
        <!-- </code> -->

      </pre>

      <script>
      $("#html > code").addClass("language-html");
      </script>

    </div>

    <div class="popup__box_footer flex-r v-centered">
      <button class="button is-small-xs is-bordered is-orange mr-1-xs" onclick="popupSwitch(); popupSwitch('lastyachts')">Show get 4 last posts (CPT)</button>
      <button class="button is-small-xs is-bordered is-red" onclick="popupSwitch()">Close</button>
    </div>

  </div>
</div>
