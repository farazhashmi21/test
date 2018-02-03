<?php
  require("functions.php");
?>
<!doctype html>
<html lang="en-GB">
<head>
<meta charset="utf-8"/>
<meta content="viewport" description="width=device-width, scale=1.0"/>
<meta content="author" description="Faraz Hashmi (developerFaraz)"/>
<link rel="stylesheet" type="text/css" href="styles.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script><script src="script.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="script.js"></script>
<title>Test Page</title>
</head>
<body>
<header>
<!--
Task
We would like you to create a simple web app that displays different time zones using any of your preferred programming languages. For reference you can see the following chrome extension:

https://www.fioapp.co


When a user starts an app there would be no time zone added. 

You should provide an option to add a new time zone. If this is a time zone that you live currently in (for e.g. Pakistan) then it should be highlighted in a way that makes it visible as your current timezone. 

If it is not your current timezone then it should just display without highlighting. A user can add multiple time zones so that will be displayed on the same screen. Please note the user will be searching a city or country name to add a new time zone. If two cities are in the same timezone both cities must be displayed against the timezone.</mark>


You may use any of the 3rd API that provides timezone data.


You should spend around 10-15 hours to complete this task and please feel free to implement your own ideas. When you are done with the task, please provide a GitHub public repo where the code is hosted for this.

It is ok if you are not able to complete the solution. Extra marks for those who can deploy the app on any of the cloud platforms.

Assessment

You will be assessed on the following parameters:

    Application (software) design and Code quality

    Requirements understanding

    User Experience and usability

    Functionality implemented


Once done please send us the solution via github. Only successful candidates will be contacted for the next stage. Good luck!
-->
</header>
<section>
<article>
<form name="form101" method="GET" action="">
<p class='alert alert-warning'>P.S: No time zone selected.</p>
<div class="container">
    <div class="form-group">
      <label for="usr">TimeZone:</label>
      <input type="text" name="CountryName" value="" placeholder="Enter your desired city,country in this field." title="CountryNameField" class="form-control" id="timeZone"/>
      <br/>
      <input type="button" name="btn101" value="Check" onClick="getTimeZone();"/>
      <input type="reset" name="btn102" value="Reset"/>
    </div>
  </form>
</article>
</section>
<footer>
<p>&#169; Copyright By <a href="http://bit.ly/2zHVnln">Engr. Faraz Hashmi</a></p>
</footer>
</body>
</html>
