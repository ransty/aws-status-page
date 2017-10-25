<?php
date_default_timezone_set('Australia/Adelaide');
require 'vendor/autoload.php';
use Aws\CloudWatch\CloudWatchClient;

$client = CloudWatchClient::factory(array(
  'credentials' => array(
      'key'    => 'AKIAJKHUAUUU7Z2VKM7Q',
      'secret' => '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',
  ),
  'region' => 'us-east-1',
  'version' => latest
));

$dimensions = array(
    array('Name' => 'InstanceId', 'Value' => 'i-05645fdeb5032b0f5')
);

$result = $client->getMetricStatistics(array(
    'Namespace'  => 'AWS/EC2',
    'MetricName' => 'NetworkIn',
    'Dimensions' => $dimensions,
    'StartTime'  => strtotime('-1 days'),
    'EndTime'    => strtotime('now'),
    'Period'     => 3600, // exaclty 24 units lads xd
    'Statistics' => array('Average'),
));

echo "<h1>Todays NetworkIn Stats</h1>";
echo "Showing NetworkIn stats from <strong>" . date("F j, Y", strtotime("yesterday")) . " " . date("h:i:sa") . "</strong> to <strong>" . date("F d, Y h:i:sa") . "</strong><br>";
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
