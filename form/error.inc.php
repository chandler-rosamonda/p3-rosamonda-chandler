<style type="text/css">

body {
  background-image: url("../images/Wood.jpg");
  background-size: 1700px 900px;
}


h1{
  font-size: 80px;
  text-align: center;
  color: white;
  font-weight:normal;
  }

.logo{
  width: 427px;
  height: 170px;
  float:left;
  position:absolute;
  top: -5px;
  z-index: 20;
}


header{
  color: white;
  font-weight: normal;
  text-align: center;
  font-size: 30px;
  position:fixed;
  top:0px;
  right:0px;
  background: #413734;
  width: 80%;
}

header nav li {
    display: inline-block;
    padding: 34px;
}

header nav li:hover{
    color: #c8b3a9;
}

header nav li:visited{
  color: #413734;

}

a:-webkit-any-link {
    color: white;
    cursor: pointer;
    text-decoration: none;
}

a:-webkit-any-link:hover{
  color: #c8b3a9;
}
</style>

<header>
  <nav>
    <ul>
      <li><a href="../home.html">Home</a></li>
      <li><a href="../Products/product.html">Products</a></li>
      <li><a href="../About/about.html">About</a></li>
      <li><a href="../Blog/blog.html">Blog</a></li>
    </ul>
  </nav>
</header>

<div class="container">
  <h1>Missing fields</h1>
  <p>Sorry, you have not completed all of the required fields.</p>
  <p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

  <ul>
  <?php
  	for($i=0; $i<count($this->missing_required_fields); $i++){
  		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
  	}
  ?>
  </ul>

  <p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
<div>
