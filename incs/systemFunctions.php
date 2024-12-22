<?php

	function URLIs($value){
		return $_SERVER['REQUEST_URI'] === $value;
	}
	function getURL($value){
		if (isset($_GET['Profile'])){
			return $_GET['Profile'] === $value;
		}
	}

	// if (URLIs('/chatApp/chats.php')) {
	// 	echo "style = 'background-color: #3C82C3'";
	// }
	// else{
	// 	ehco '';
	// }

	// URLIs('/chatApp/chats.php') ? "style = 'background-color: #3C82C3'" : echo '';