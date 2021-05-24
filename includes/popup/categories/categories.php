<div class="popup has-overlay" id="categories">

  <div class="popup__overlay is-overlay" onclick="popupSwitch()"></div>

  <div class="popup__box flex-c">

    <div class="popup__box_header">
      <p class="popup__box_header_title">
        Get categories
      </p>
    </div>

    <div class="popup__box_content">

      <pre class="code" id="html">
        <?php highlight_file('categories.phps'); ?>
      </pre>

      <script>
      $("#html > code").addClass("language-html");
      </script>

    </div>

    <div class="popup__box_footer flex-r v-centered">
      <button class="button is-small-xs is-bordered is-orange mr-1-xs" onclick="popupSwitch(); popupSwitch('categorycard')">Show category card</button>
      <button class="button is-small-xs is-bordered is-red" onclick="popupSwitch()">Close</button>
    </div>

  </div>
</div>
