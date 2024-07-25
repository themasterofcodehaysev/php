
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Practice 4</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php
      //  YOUR CODE HERE
      $page = "";
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
      } else {
        $page = "home";
      }
    ?>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
          <a class="nav-link <?php if($page == 'home'){ echo 'active bg-danger';}  // YOUR CODE HERE ?>" aria-current="page" href="?page=home">Home</a>
          <a class="nav-link <?php if($page == 'about'){ echo 'active bg-danger';}   // YOUR CODE HERE ?>" href="?page=about">About</a>
      </div>
    </div>
  </div>
</nav>