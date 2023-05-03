<?php

require __DIR__ . '/vendor/autoload.php';
require  __DIR__ . '/config.php';
require  __DIR__ . '/classes.php';


use Automattic\WooCommerce\Client;
use Automattic\WooCommerce\HttpClient\HttpClientException;

echo 'SYNCING...';

$wordpress = new Client(
  $url,
  $consumer_key,
  $consumer_secret,
  [
    'version' => 'wp/v2',
  ]
);

try {
  // Array of response results.
  $posts = $wordpress->get('posts', array('per_page' => '5', '_embed' => '1'));
} catch (HttpClientException $e) {
  echo '<pre><code>' . print_r($e->getMessage(), true) . '</code><pre>'; // Error message.
}

$posts_mod = array();

for ($i = 0; $i < count((array)$posts); $i++) {
  $posts_mod[$i] = new Post($posts[$i]->id, $posts[$i]->title->rendered, $posts[$i]->link, $posts[$i]->_embedded->{"wp:featuredmedia"}[0]->media_details->sizes->thumbnail->source_url);
}

$json_posts = json_encode($posts_mod);

$woocommerce = new Client(
  $url,
  $consumer_key,
  $consumer_secret,
  [
    'version' => 'wc/v3',
  ]
);



try {
  // Array of response results.
  $orders = $woocommerce->get('orders');
  //echo 'Id: ' . $orders[0]->id . '<br>';
} catch (HttpClientException $e) {
  echo '<pre><code>' . print_r($e->getMessage(), true) . '</code><pre>'; // Error message.
  echo '<pre><code>' . print_r($e->getRequest(), true) . '</code><pre>'; // Last request data.
  echo '<pre><code>' . print_r($e->getResponse(), true) . '</code><pre>'; // Last response data.
}


//print_r('Tjo: ' . $json_posts);


$order1 = new Order($orders[0]->id);
$json_order = json_encode($order1);

?>

<script type="text/javascript">
  localStorage.setItem("posts", '<?php echo $json_posts ?>');


  //localStorage.setItem("order", '<?php echo $json_order ?>');
  //let order = JSON.parse(localStorage.getItem("order"));
  //console.log("Order", order);
</script>