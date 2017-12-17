  <footer class="footer cf" role="contentinfo">
    <div class="wrap wide">

      <p class="footer-copyright"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->kirbytext())
      ?></p>

      <p class="footer-madewithkirby">
        <a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b class="heart">♥</b></a>
      </p>

    </div>
  </footer>
  <?= js('assets/js/lightbox.js') ?>
  <script>
      lightbox.option({
      	'albumLabel': 	"Bild %1 von %2",
        'wrapAround': true,
        'positionFromTop': 	20
      })
  </script>
  <?= js('assets/js/to-top.js') ?>
  </body>
</html>
