<div class="container">
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none" href="#">
      <svg class="bi me-2" width="40" height="32">
        <use xlink:href="#bootstrap" />
      </svg>
      <span class="fs-4">MNIST</span>

    </a>
    <ul class="nav nav-pills">
      <!-- aria-current="page" -->
      <li class="nav-item"><a href="?P=home#" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="?P=features" class="nav-link">Features</a></li>
	<?php if(IsUserLoggedIn()) :?>	
		<li class="nav-item"><a href="?P=add_article" class="nav-link">All submissions</a></li>	
	<?php endif;?>
      <li class="nav-item"><a href="?P=about_us" class="nav-link">About us</a></li>
    </ul>
  </header>
</div>