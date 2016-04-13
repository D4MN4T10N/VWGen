<?php
	// Configuration
	$dbhost = 'Mongo';
	$dbname = 'my_mongodb';
	 
	// Connect to mongo database
	$mongoClient = new MongoClient('mongodb://' . $dbhost);
	$db = $mongoClient->$dbname;
	 
	// Get the users collection
	$cUsers = $db->users;
	 
	// Insert first object
	$user = array(
	    'first_name' => 'Su',
	    'last_name' => 'Lobsiinvok'
	);
	 
	// Insert this new document into the users collection
	$cUsers->save($user);

	// Insert second object
	$user = array(
	    'first_name' => 'Ad',
	    'last_name' => 'Admin'
	);
	 
	// Insert this new document into the users collection
	$cUsers->save($user);
?>