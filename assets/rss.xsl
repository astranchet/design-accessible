<?xml version="1.0" encoding="utf-8"?>
<!-- 
  Idea from David:  https://larlet.fr/david/2021/06/03/
-->
<xsl:stylesheet version="3.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
xmlns:atom="http://www.w3.org/2005/Atom">
  <xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
  <xsl:template match="/">
    <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
        <title>Prévisualisation du flux RSS de <xsl:value-of select="/rss/channel/title"/></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/main.css"/>
        <style type="text/css">
          .header__title {font-weight: bold;}
        </style>
      </head>
      <body>
        <header role="banner" class="header">
          <div class="header__top">
            <div class="container">
              <div class="header__logo">
                <a>
                  <xsl:attribute name="href">
                    <xsl:value-of select="/rss/channel/link"/>
                  </xsl:attribute>
                  <svg width="24" height="25" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><circle cx="12" cy="12.5" r="12" fill="#58C9B9"/><g clip-path="url(#clip0)" fill="#01A58E"><path d="M12.047 7.425a1.992 1.992 0 110-3.985 1.992 1.992 0 010 3.985z"/><path d="M18.308 7.453l-.016.005-.015.004-.107.032c-.662.194-3.875 1.1-6.138 1.1-2.103 0-5.026-.783-5.96-1.049a2.624 2.624 0 00-.285-.091c-.676-.178-1.139.508-1.139 1.136 0 .621.559.917 1.123 1.13v.01l3.387 1.058c.346.132.439.268.484.385.147.377.03 1.123-.012 1.383l-.207 1.601-1.145 6.268a1.143 1.143 0 00-.01.052l-.007.045c-.083.575.339 1.132 1.138 1.132.697 0 1.005-.481 1.138-1.136.134-.655.996-5.605 1.494-5.605s1.524 5.605 1.524 5.605c.134.655.441 1.136 1.139 1.136.8 0 1.223-.56 1.138-1.136a2.084 2.084 0 00-.027-.145l-1.16-6.215-.207-1.601c-.149-.932-.029-1.24.011-1.313a.035.035 0 00.003-.005c.039-.071.214-.23.622-.384l3.176-1.11a.604.604 0 00.058-.019c.569-.213 1.138-.508 1.138-1.135 0-.628-.462-1.315-1.138-1.138z"/></g><defs><clipPath id="clip0"><path fill="#fff" transform="translate(2.94 3.44)" d="M0 0h18.213v18.213H0z"/></clipPath></defs></svg>
                  <xsl:value-of select="/rss/channel/title"/>
                </a>
              </div>
            </div>
          </div>
          <div class="header__main">
            <div class="container">
              <h1 class="header__title">
                Flux RSS
              </h1>
              <h2 class="header__subtitle">
                <xsl:value-of select="/rss/channel/description"/>
              </h2>
            </div>
          </div>
        </header>

        <main role="main">
          <div id="content">
            <div class="section">
              <div class="container">
                <p class="highlight">Vous pouvez être tenu informé des prochaines ressources postées grâce à ce flux.</p>

                <p>Ajoutez l'URL de cette page (<xsl:value-of select="/rss/channel/link"/>) à votre lecteur de flux préféré. Par exemple :</p>
                <ul>
                  <li><a href="http://bazqux.com/">Bazqux</a>, au nom imprononcable, mais que j'aime bien.</li>
                  <li><a href="https://flus.fr/">Flus</a>, le lecteur éthique et militant, développé en France.</li>
                  <li><a href="https://netnewswire.com/">NetnewsWire</a>, sur MacOS.</li>
                  <li>et bien d'autres encore...</li>
                </ul>

                <p>👉 Pour en savoir plus : <a href="https://flus.fr/carnet/a-quoi-servent-les-flux.html">À quoi servent les flux RSS ?</a></p>
              </div>

              <div class="last__article">
                <div class="container">
                  <h2 class="last__article-title">✨ Dernière ressources publiées</h2>

                  <ul class="last__article-list">
                    <xsl:for-each select="/rss/channel/item">
                      <li class="last__article-item">
                        <article class="card card--horizontal">
                          <h3 class="card__title">
                            <a>
                              <xsl:attribute name="href">
                                <xsl:value-of select="link"/>
                              </xsl:attribute>
                              <xsl:value-of select="title"/>
                            </a>
                          </h3>
                        </article>
                      </li>
                    </xsl:for-each>
                  </ul>
                </div>
              </div>

            </div>
          </div>

        </main>

      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>