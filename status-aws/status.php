<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- KEYS ARE HERE https://encipher.it/?DvAw -->
  <title>Status Page</title>
  <meta name="description" content="Shows AWS Status Graphs">
  <meta name="author" content="Keano Porcaro">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>

<div class="container-fluid">
  <div class="jumbotron page-header">
    <h1>Status Page</h1>
    <p>EC2 Statistics</p>
    <h3>Explanation:</h3>
    <p>This part of the website shows the Network usage for the EC2 server that is hosting the dynamic website for users to access. This does not show specific user traffic.</p>
    <p>Click a button to see today's statistics on the CloudWatch Metric</p>
  </div>
<div class="container" role="group">
<a class="btn btn-primary" href="networkin.php" type="submit" value="Network In Stats">NetworkIn</a>
<a class="btn btn-primary" href="networkout.php" type="submit" value="Network Out Stats">NetworkOut</a>
<a class="btn btn-primary" href="networkpacketsin.php" type="submit" value="Network Out Stats">NetworkPacketsIn</a>
<a class="btn btn-primary" href="networkpacketsout.php" type="submit" value="Network Out Stats">NetworkPacketsOut</a>
</div>
</div>
</body>
</html>
