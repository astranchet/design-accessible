</main>

<footer role="contentinfo" id="footer">
  <div class="container">
    <nav role="navigation" aria-label="Navigation de pied de page">
      <ul class="footer__links">
        <?php foreach ($site->footerNav()->toPages() as $item) { ?>
          <li><a href="<?= $item->url() ?>" <?php e($item->isActive(), 'aria-current="page"') ?>>
            <?= $item->menu()->or($item->title()) ?>
          </a></li>
        <?php } ?>
      </ul>

      <ul class="footer__legals">
        <li><p>Conçu avec amour <span aria-hidden="true">💜</span></p></li>
        <li><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Licence Creative Commons" style="border-width:0" src="https://www.licensebuttons.net/l/by-nc-sa/4.0/80x15.png" /> <small><!-- Licence Creative Commons Attribution - Pas d’Utilisation Commerciale - Partage dans les Mêmes Conditions 4.0 International --></small></a></li>
      </ul>
    </nav>
  </div>
</footer>

<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
<script async defer src="assets/js/hello.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
