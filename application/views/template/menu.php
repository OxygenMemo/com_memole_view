
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
    <li><a href="<?= base_url() ?>index.php/page/home">home</a></li>
    
    
    <li id="createtimeline" onclick="createtimeline()"><a>createtimeline</a></li>
    <li id="timeline-dropdown" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">timeline<span class="caret"></span></a>
        <ul id="timeline-dropdown-list" class="dropdown-menu">
          <li onclick="switchtimeline(1)"><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
    </ul>
    <button onclick="test()">s</button>
    <ul class="nav navbar-nav navbar-right">
      <li><a><fb:login-button autologoutlink="true" scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button></a></li>
    </ul>
  </div>
</nav>
<script>
  $("#timeline-dropdown").hide()
</script>


