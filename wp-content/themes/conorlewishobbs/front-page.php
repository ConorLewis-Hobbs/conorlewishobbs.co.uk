<?php 
get_header();
?>

<main>
  <article data-index="0" data-status="active">
    <div class="article-image-section article-section"></div>
    <div class="article-description-section article-section">
      <p>I'm a web developer based in Loughborough, U.K. Specialising in custom WordPress development and search engine optimisation (SEO)</p>
    </div>
    <div class="article-title-section article-section">
      <span class="front-page">CONOR LEWIS-HOBBS</span>
      <h1 class="front-page-sub">WEB DEVELOPER</h1>
    </div>
    <div class="article-nav-section article-section">
      <button class="article-nav-button interactable" data-type="link" aria-label="left" type="button" onclick="handleLeftClick()">
        <i class="fa-solid fa-arrow-left-long"></i>
      </button>
      <button class="article-nav-button interactable" data-type="link" aria-label="right" type="button" onclick="handleRightClick()">
        <i class="fa-solid fa-arrow-right-long"></i>
      </button>
    </div>
  </article>
  <article data-index="1" data-status="inactive">    
    <div class="article-image-section article-section"></div>
    <div class="article-description-section article-section">
    <p>I focus on WordPress development using Advanced Custom Fields to create custom themes and WooCommerce plugin for the marketplace. Using a mixture of CSS/SCSS, PHP, HTML JS and WordPress's built-in functions..</P>
    </div>
    <div class="article-title-section article-section">
        <span class="front-page">CONOR LEWIS-HOBBS</span>
        <h2 class="front-page-sub">WEB DEVELOPER</h2>
    </div>
    <div class="article-nav-section article-section">
      <button class="article-nav-button interactable" data-type="link" aria-label="left" type="button" onclick="handleLeftClick()">
        <i class="fa-solid fa-arrow-left-long"></i>
      </button>
      <button class="article-nav-button interactable" data-type="link" aria-label="right" type="button" onclick="handleRightClick()">
        <i class="fa-solid fa-arrow-right-long"></i>
      </button>
    </div>
  </article>
  <article data-index="2" data-status="inactive">    
    <div class="article-image-section article-section"></div>
    <div class="article-description-section article-section">
    <p>Search Engine Optimisation (SEO) is a vital aspect of any website. After all, what's the point in having a site if nobody sees it? Due to Google's search algorithm changing over time it can often be difficult to understand exactly what you need to do for your site.</P>
    </div>
    <div class="article-title-section article-section">
      <span class="front-page">CONOR LEWIS-HOBBS</span>
      <h3 class="front-page-sub">WEB DEVELOPER</h3>
    </div>
    <div class="article-nav-section article-section">
      <button class="article-nav-button interactable" data-type="link" aria-label="left" type="button" onclick="handleLeftClick()">
        <i class="fa-solid fa-arrow-left-long"></i>
      </button>
      <button class="article-nav-button interactable" data-type="link" aria-label="right" type="button" onclick="handleRightClick()">
        <i class="fa-solid fa-arrow-right-long"></i>
      </button>
    </div>
  </article>
  <article data-index="3" data-status="inactive">    
    <div class="article-image-section article-section"></div>
    <div class="article-description-section article-section">
    <p>I have experience using React.js to create custom ecommerce dashboards. Use JavaScript and HTML canvas to create browser games in my free time. I'm currently learning the beginnings of machine learning.</p>
    </div>
    <div class="article-title-section article-section">
      <span class="front-page">CONOR LEWIS-HOBBS</span>
      <h4 class="front-page-sub">WEB DEVELOPER</h4>
    </div>
    <div class="article-nav-section article-section">
      <button class="article-nav-button interactable" data-type="link" aria-label="left" type="button" onclick="handleLeftClick()">
        <i class="fa-solid fa-arrow-left-long"></i>
      </button>
      <button class="article-nav-button interactable" data-type="link" aria-label="right" type="button" onclick="handleRightClick()">
        <i class="fa-solid fa-arrow-right-long"></i>
      </button>
    </div>
  </article>
</main>

<?php
    get_footer();
?>