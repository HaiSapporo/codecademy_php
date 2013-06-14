<pre>unset</pre>

Delete one element:
<pre><?php
  $array = array("red", "blue", "green");
  unset($array[2]);
?>
</pre>

Delete entire array:
<pre>
<?php
  unset($array);
?>
</pre>

Example:
<pre>
<html>
  <head>
    <title>Modifying Elements</title>
  </head>
  <body>
    <p>
      <?php
        $languages = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");
        // Write the code to remove Python here!
        
        unset($languages[3]);
        
        // Write your code above this line. Don't
        // worry about the code below just yet; we're
        // using it to print the new array out for you!
        
        foreach($languages as $lang) {
          print "<p>$lang</p>";
        }
      ?>
    </p>
  </body>
</html>
</pre>