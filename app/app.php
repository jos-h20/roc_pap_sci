<?php
	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../src/RPS.php';

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

	$app->get('/', function() use ($app) {
    return $app['twig']->render('player1.html.twig');
  });
	$app->get("/input", function() use ($app) {
		$player_one = $_GET['player1'];
		$player_two = $_GET['player2'];

		$results = playGame($player_one, $player_two);

		// $new_game = new RPS($_GET['player1'], $_GET['player2']);

		return $app['twig']->render('results.html.twig', array('results' => $results));
	});

	return $app;
?>
