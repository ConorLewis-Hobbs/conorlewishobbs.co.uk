<!doctype html>
<html lang="en">
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to Conor Lewis-Hobbs's porfolio website. I'm a web devloper based in Loughborough U.K. come say hello">
        <?php wp_head(); ?>
    </head>
    <body>

    <nav data-toggled="false" data-transitionable="false">
  <div id="nav-logo-section" class="nav-section">
    <a  class="interactable" data-type="link" aria-label="Home logo" href="https://staging.conorlewishobbs.co.uk/">
    <i class="fa-solid fa-feather-pointed"></i>
    </a>
  </div>
  <div id="nav-mobile-section">
    <div id="nav-link-section" class="nav-section">
      <a class="interactable" data-type="link" href="https://staging.conorlewishobbs.co.uk/about">ABOUT</a>
      <a class="interactable" data-type="link" href="https://staging.conorlewishobbs.co.uk/work">WORK</a>
    </div>
    <div id="nav-social-section" class="nav-section">
      <a class="interactable" data-type="link" aria-label="Git hub"href="https://github.com/ConorLewis-Hobbs" target="_blank">
      <i class="fa-brands fa-github"></i>
      </a>
      <a  class="interactable" data-type="link" aria-label="Twitter" href="https://twitter.com/Radionkeel" target="_blank">
      <i class="fa-brands fa-twitter"></i>
      </a>    
      <a  class="interactable" data-type="link" aria-label="Linkdin" href="https://www.linkedin.com/in/conor-lewis-hobbs-a59ab4139/" target="_blank">
      <i class="fa-brands fa-linkedin"></i>
      </a>
    </div>
    <div id="nav-contact-section" class="nav-section">
      <a  class="interactable" data-type="link" aria-label="Get in touch"href="https://staging.conorlewishobbs.co.uk/contact">GET IN TOUCH</a>
    </div>
  </div>
  <button  class="interactable" data-type="link" aria-label="Menu" id="nav-toggle-button" type="button" onclick="handleNavToggle()">
    <span>MENU</span>
    <i class="fa-solid fa-bars"></i>
  </button>
</nav>