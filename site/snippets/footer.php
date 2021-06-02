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
        <li><?php foreach ($site->network()->toStructure() as $item) { ?>
            <a href="<?= $item->url() ?>" title="<?= $item->name() ?>" class="footer__network">
            <?= Html::tag('span', null, [
                  'class'         => 'iconify',
                  'data-inline'   => false,
                  'data-icon'     => $item->icon(),
              ]); ?>
              <span aria-hidden="true" class="sr-only"><?= $item->name() ?></span>
            </a>
        <?php } ?>
        </li>

        <!-- <li><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Licence Creative Commons<small></small></a></li> -->
      </ul>
    </nav>
  </div>
</footer>

<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
<script async defer src="assets/js/hello.js"></script>

</body>
</html>
