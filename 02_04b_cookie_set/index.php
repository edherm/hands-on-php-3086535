<?php 
	function get_visitors() {
		return file_get_contents('visits.txt');
	}

    function log_visit() {
        $visits = (int)file_get_contents('visits.txt');
        $visits++;
        file_put_contents('visits.txt', $visits);
    }

    if ( ! isset($_COOKIE['visited'] ) ) {
        $thirty_days_in_seconds = 86400 * 30;
        setcookie( 'visited', true, time()+($thirty_days_in_seconds));
        log_visit();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to My Website</title>
        <meta name="author" value="Joe Casabona" />
    </head>
    <body>
        <h1>Welcome to My Website</h1>
				<p>There have been <b><?php echo get_visitors(); ?></b> visitors so far.</p>
    </body>
</html>