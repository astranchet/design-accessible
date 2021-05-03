</main>

<footer role="contentinfo" id="footer">
  <div class="container">
    <nav role="navigation" aria-label="Navigation de pied de page">
      <ul>
        <?php foreach ($site->footerNav()->toPages() as $item) { ?>
          <li><a href="<?= $item->url() ?>" <?php e($item->isActive(), 'aria-current="page"') ?>>
            <?= $item->menu()->or($item->title()) ?>
          </a></li>
        <?php } ?>
      </ul>

      <ul>
        <li><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Licence Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /> <small>Licence Creative Commons Attribution - Pas d’Utilisation Commerciale - Partage dans les Mêmes Conditions 4.0 International</small></a>.</li>
        <li>Conçu avec amour 💜</li>
      </ul>
    </nav>
  </div>
</footer>
</body>
</html>
