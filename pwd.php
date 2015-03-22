<?php

/* 
Author
======
Author: Cathal Garvey.
Website: http://cgarvey.ie/
Help/Details Page: http://cgarvey.ie/blog/archive/2013/01/23/manually-generating-salted-hashed-wordpress-passwords/

Copyright
=========
Copyright 2012 Cathal Garvey. http://cgarvey.ie/

Licence
=======
Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at
http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
*/

/*
This pwd.php script should be in your based WordPress install directory.
I.e. the samed directory that has wp-config.php and index.php, etc.
*/


include_once( "wp-config.php" ); # import WP config
include_once( "wp-includes/class-phpass.php" ); # import WP password hashing util

?>
<html>
  <head>
		<title>WordPress Password Hashing Util</title>
		<style type="text/css">body { font-family: tahoma, verdana, arial, times; background-color: #ddd; padding: 30px; } h1 { border-bottom: 1px solid #999; } form { padding-top: 10px; border-top: 1px solid #999; } div { background-color: #eee; margin: 15px; padding: 15px; 30px; border: 1px solid #ccc; } code { background-color: #fff; padding: 3px; border: 1px solid #999; }</style>
	</head>
	<body>
		<h1>WordPress Password Hashing Util</h1>
		<p>This utility will give you the raw hashed/encrypted password for the specified password, so that you can use it in MySQL commands directly. Handy for manually resetting admin passwords or adding new users from the SQL command line.</p>
		<p>Older versions of WordPress used MD5 to &quot;encrypt&quot; the password, so you could use the MySQL MD5('my_password') function directly. Not so, in recent versions of WordPress, and that's where this script steps in.</p>
		<p>Type the password you want to know the hashed/encrypted version of, below.</p>
		
		<form method="post" action="">
			<?php
				if( $_POST ) {
					$password = mysql_escape_string( $_POST[ 'password' ] );
					$wp_hash = new PasswordHash( 8, TRUE );
					echo "<div><p>The password <code>" . $password . "</code>, when hashed/salted/encrypted, becomes <strong><code>" . $wp_hash->HashPassword( $password ) . "</code></strong></p></div>";
				}
			?>

			<label for=inPwd">Password (plain text):</label>
			<input id="inPwd" type="password" name="password" value="" />
			<input type="submit" value="Generate" />
		</form>
	</body>
</html>

