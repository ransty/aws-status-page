<?php
date_default_timezone_set('Australia/Adelaide');
require 'vendor/autoload.php';
use Aws\CloudWatch\CloudWatchClient;

  $client = CloudWatchClient::factory(array(
    'credentials' => array(
      'key'    => '',
      'secret' => '',
    ),
    'region' => 'ap-southeast-2',
    'version' => latest
  ));

  $dimensions = array(
      array('Name' => 'InstanceId', 'Value' => 'i-0779cad12b785cc39')
  );

  $result = $client->getMetricStatistics(array(
      'Namespace'  => 'AWS/EC2',
      'MetricName' => 'NetworkOut',
      'Dimensions' => $dimensions,
      'StartTime'  => strtotime('-1 days'),
      'EndTime'    => strtotime('now'),
      'Period'     => 3600, // exaclty 24 units lads xd
      'Statistics' => array('Average'),
  ));

  echo "<h1>Todays NetworkOut Stats</h1>";
  echo "Showing NetworkOut stats from <strong>" . date("F j, Y", strtotime("yesterday")) . " " . date("h:i:sa") . "</strong> to <strong>" . date("F d, Y h:i:sa") . "</strong><br>";
  echo "All values are displayed as the Average for the Hour";

  $arr = $result->get("Datapoints");
  $count = 1;

  foreach ($arr as &$value) {
      foreach ($value as &$sub) {
        if ($sub == "Bytes") {
          continue;
        }
        echo "<p>";
        if (strpos($sub, ':') !== false) {
          echo("<u>Hour " . $count . "</u>"); // time
          $count++;
        } else {
          echo("<strong> Avg. Bytes: </strong>" . $sub);
        }
        echo "</p>";
      }
  }
?>

<title>NetworkOut</title>
