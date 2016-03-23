<?php

	$query="SELECT entry From users WHERE id ='".$_SESSION['id']."' LIMIT 1";

	$result = mysqli_query($link,$query);

	$row = mysqli_fetch_array($result);

	$entry=$row['entry'];