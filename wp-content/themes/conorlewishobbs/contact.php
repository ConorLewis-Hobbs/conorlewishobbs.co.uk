<?php 
get_header();
?>

<main>
  <article class="contact">
    <div class="contact-left">
      <h1>Please feel free to get in touch!</h1>
      <p>For more information about previous projects, future projects or collaborations send me an email and i'll get back to you as soon as possible</p>
      <div class="social-links">
        <a class="interactable" data-type="link" href="https://github.com/ConorLewis-Hobbs">
        <i class="fa-brands fa-github fa-lg"></i>
        </a>
        <a class="interactable" data-type="link" href="https://twitter.com/Radionkeel">
        <i class="fa-brands fa-twitter"></i>
        </a>    
        <a class="interactable" data-type="link" href="https://www.linkedin.com/in/conor-lewis-hobbs-a59ab4139/">
        <i class="fa-brands fa-linkedin"></i>
        </a>
      </div>
    </div>
    <div class="contact-section">
<form class="contactForm" id="contactus_form" action="https://formsubmit.co/hello@conorlewishobbs.co.uk" method="POST" enctype="multipart/form-data">
    <div class="name">
      <label>NAME</label>
      <input class="name interactable" data-type="link" id="yourname" type="text" name="name" id="name" placeholder="Whats your name?" required minlength="2" maxlength="100" required>
    </div>
    <div class="e-mail">
      <label>EMAIL</label>
      <input class="e-mail interactable" data-type="link" id="email" type="text" name="e-mail" id="e-mail" placeholder="And your e-mail?" required minlength="5" maxlength="62" required>
    </div>
    <div class="message">
      <label>MESSAGE </label>
      <textarea class="message interactable" data-type="link" id="message" name="message" rows="5" cols="30" placeholder="So what can I do for you?" required minlength="20" maxlength="10000" required></textarea>
    </div>
    <div class="submit">
      <input class="send interactable" data-type="link" id="submit" type="submit" value="Send">
    </div>
</form>
    </div>
  </article>
</main>
<?php
    get_footer();
?>