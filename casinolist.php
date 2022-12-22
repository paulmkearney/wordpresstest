<?php
/** 

* @package paulkearney 

*/
/* 

Plugin Name: paulkearney casinolist
Plugin URI: https://paulkearney.com/casinolist
Description: Component showing list of Top casinos
Version: 1.0.0
Author: PaulKearney 
Author URI: https://paulkearney.com/
License: GPLv2 or later 
Text Domain: paulkearney

*/



function connect_api() {
	include 'variables.php';

	// Set the API endpoint URL
	$api_url = 'https://api.npoint.io/3d929604a0f67308659c/toplists/575';

	// Set the request method and headers
	$options = array(
	'http' => array(
		'method'  => 'GET',
		'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
	),
	);

	// Create the context for the request
	$context  = stream_context_create($options);

	// Send the request
	$result = file_get_contents($api_url, false, $context);

	// Check for errors
	if ($result === FALSE) {
		// Handle error
		echo "Error connecting to the API";
	}
	else {
		// Process Build Casino List
		$response = json_decode($result, true);
		// 
		

		
		$rows = "";
		$entries = ["","","",""];
			// Reorder array using position property
		foreach($response as $object) {
			foreach($object as $key=>$value) {
				if($key === 'position') {
						$entries[$value] = $object;	
				}
			};
		};
		
			
		foreach($entries as $entry) {
			$rows .= "<tr><td>
						<div class='content-container test'>
							<a href='" .$entry['brand_id']. "'>
								<img class='cmp-casino-logo' src='".$entry['logo']."' alt='Casino'>
							</a>
							<a href='" .$entry['brand_id']. "' class='cmp-casinolist__link'>Review</a>
						</div>
					</td>";
			if($entry['info']['rating'] === 3) {
				$rows .= "<td>
						<div class='content-container'>
						". $threeStars ."
						</div>
						<p class='cmp-casino__statement'>". $entry['info']['bonus']."</p>
				</td>";
			}
			if($entry['info']['rating'] === 4) {
				$rows .= "<td>
						<div class='content-container'>
						". $fourStars ."
						</div>
						<p class='cmp-casino__statement'>". $entry['info']['bonus']."</p>
				</td>";
			}
			if($entry['info']['rating'] === 5) {
				$rows .= "<td>
						<div class='content-container'>
						". $fiveStars ."
						</div>
						<p class='cmp-casino__statement'>". $entry['info']['bonus']."</p>
				</td>";
			}
			$rows .= "<td>
						<div class='content-container'>
							<ul class='cmp-casinolist__features'>
								<li>" . $entry['info']['features'][0]."</li>
								<li>" . $entry['info']['features'][1]."</li>
								<li>" . $entry['info']['features'][2]."</li>
							</ul>
						</div>
					</td>";
			
			$rows .= "<td>
						<div class='content-container'>
							<a class='cmp-casinolist__cta' href='". $entry['play_url']."'>Play Now</a>
							<p class='cmp-casino-link'>". $entry['terms_and_conditions']."</p>
						</div>
					</td></tr>";
		}
			
		echo $templatePart1.$rows.$templatePart2;

	}
}
// JS version
function cas_start() {
	echo "<h1 class='section-heading'>
			Javascript Version 
			<button class='btn-primary' type='button'>
				Get Casino List JS version
			</button>
		</h1>
    	<div class='cmp-casinolist testing jsversion'></div>";
}

add_action( 'wp_head', 'cas_start' );
add_action( 'wp_head', 'connect_api' );

function enqueue_related_pages_scripts_and_styles(){
	wp_enqueue_style('related-styles', plugins_url('/styles/casinolist.css', __FILE__));
	wp_enqueue_script('releated-script', plugins_url( '/scripts/casinolist.js' , __FILE__ ));
}
add_action('wp_enqueue_scripts','enqueue_related_pages_scripts_and_styles');

?>