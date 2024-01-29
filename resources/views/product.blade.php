<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">Product Card</h2>

<div class="card">
  @foreach($data as $row)
  <img src="/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
  <h1>{{$row->tensach}}</h1>
  <p class="price">{{$row->giasach}} USB</p>
  <p>{{$row->phukien}}</p>
  <p><button>Add to Cart</button></p>
  <a href="{{url('delete/'.$row['id'])}}">DELETE</a>
  <a href="#">EDIT</a>
  @endforeach
</div>
</body>
</html>