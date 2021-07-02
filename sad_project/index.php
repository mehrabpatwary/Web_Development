<!DOCTYPE html>
<html>
<title>Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
.headline{
  background-color: white;
  color: black;
  padding-bottom: 7px; 
  box-shadow: 0px 0px 30px 20px rgba(0,0,0,0.2);
  padding-left: 30px;
}
.image_edit{
background-color: #FFE401;
display: block;
margin: 0px 0px;
background-image: url("/sad_project/img/p1.jpg");
background-repeat:no-repeat;
background-size:cover; 
width: 100%;
height: 900px;
}
.products{
float: left;
background-color: #55FF00;
color: #fff;
padding: 4px 100px;
border-radius: 3px;
}
.admin{
float: right;
background-color: #FF0000;
color: #fff;
padding: 4px 100px;
border-radius: 3px;
}
.admin-products{
  display: inline;
}

</style>
<body>


<div class="image_edit">
  <div>
    <h1 class="headline">Online Eyewear Shop</h1>
    <div class="admin-products">
    <b><a class="admin" href="/sad_project/admin.html">Admin</a></b>
    <b><a class="products" href="/sad_project/products.html">Products</a></b>
  </div>
  </div>
</div>
</body>
</html>