
<html>
<head>
<link href="order.css" rel='stylesheet'>
<meta charset="utf-8">
<title>Sticky Navi</title>
<link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
$(window).on('scroll',function(){
  if($(window).scrollTop())
  {
    $('nav').addClass('black');
  }
  else {

      $('nav').removeClass('black');
    }

})
</script>

</head>
<body>

<div class="wrapper">
    <nav>
       <div class="logo">Mamu Gee</div>
          <ul>
                <li><a href="index.html" class="cool-link">Home</a></li>
                <li><a href="menu.html" class="cool-link">Menu</a></li>
                <li><a href="#" class="cool-link">Order</a></li>
                <li><a href="contact.html" class="cool-link">Contact</a></li>
                <li><a class="active" href="login.html">Log In</a></li>
          </ul>
      </nav>
      <section class="content">
      <h1>Order</h1>
          <form method="post" action="test.inc.php" >
                  <input type="text" name="name" placeholder="Name">

                  <input type="text" name="phno" placeholder="Ph No.">

                  <input type="text" name="email" placeholder="Email">

                  <input type="text" name="age" placeholder="Age">

                  <select id="item" name="item">
    <option value="burger">Burger</option>
    <option value="sandwich">Sandwich</option>
    <option value="fries">French Fries</option>
  </select>

                  <input type="text" name="quantity" placeholder="Quantity">



               <button type="submit" name="submit">Order</button>
             </form>
</section>
</div>


</body>
</html>
