      <?php // SEO, moteur de recherche ?>
      <meta name="description" content="<?= $seo['description']; ?>" />

      <?php // Open Graph tags ?>
      <meta property="og:title" content="<?= $seo['og:title']; ?>" />
      <meta property="og:site_name" content="<?= $site->title() ?>" />
      <meta property="og:url" content="<?= $page->url() ?>" />
      <meta property="og:locale" content="fr_FR">
      <meta property="og:type" content="website" />
      <meta property="og:description" content="<?= $seo['description']; ?>" />

      <meta property="og:image" content="<?= $seo['og:image']; ?>">
      <meta property="og:image:alt" content="<?= $site->title() ?>">
      <meta property="og:image:type" content="image/jpeg">
      <meta property="og:image:width" content="1201">
      <meta property="og:image:height" content="631">


      <?php // Twitter cards ?>
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:site" content="@annso_" />
      <meta name="twitter:creator" content="@annso_" />
      <meta name="twitter:title" content="<?= $title ?>" />
      <meta name="twitter:description" content="<?= $seo['description']; ?>" />
      <meta name="twitter:image" content="<?= $seo['og:image']; ?>">
