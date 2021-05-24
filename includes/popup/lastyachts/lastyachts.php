<div class="popup has-overlay" id="lastyachts">

  <div class="popup__overlay is-overlay" onclick="popupSwitch()"></div>

  <div class="popup__box flex-c">

    <div class="popup__box_header">
      <p class="popup__box_header_title">
        Get 4 last posts (yacht Custom Post Type)
      </p>
    </div>

    <div class="popup__box_content">

      <pre class="code">
        <?php highlight_file('lastyachts.phps'); ?>
      </pre>

    </div>

    <div class="popup__box_footer flex-r v-centered">
      <button class="button is-small-xs is-bordered is-orange mr-1-xs" onclick="popupSwitch(); popupSwitch('yachtcard')">Show yacht card code</button>
      <button class="button is-small-xs is-bordered is-red" onclick="popupSwitch()">Close</button>
    </div>

  </div>
</div>
