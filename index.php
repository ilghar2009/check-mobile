<?php

/*----------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 * Licensed under the MIT License. See LICENSE in the project root for license information.
 *---------------------------------------------------------------------------------------*/

function sayHello($name) {
	echo "Hello $name!";
}

?>

<html>
	<head>
		<title>Visual Studio Code Remote :: PHP</title>
	</head>
	<body>
		<form action="function.php" method="post">
		        <label for="mobile">Phone number</label>
		        <input type="text" id="mobile" name="phone">
		        <input type="submit">
    		</form>
	</body>
</html>
