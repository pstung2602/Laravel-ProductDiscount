<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/ProductDiscount" method="POST">
    @csrf
    <p>
        <input type="text" name="Description" placeholder="Product Description">
    </p>
    <p>
        <input type="text" name="Price" placeholder="List Price">
    </p>
    <p>
        <input type="text" name="DiscountPercent" placeholder="Discount Percent">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>

</body>
</html>
