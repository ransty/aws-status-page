<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Status Page</title>
  <meta name="description" content="Shows AWS Status Graphs">
  <meta name="author" content="Keano Porcaro">


  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>

<form action="networkin.php" method="get">
<input type="hidden" name="networkin" value="networkin">
<input type="submit" value="Network In Stats">
</form>

<form action="networkout.php" method="get">
<input type="hidden" name="networkout" value="networkout">
<input type="submit" value="Network Out Stats">
</form>

</body>
</html>
