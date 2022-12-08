<!DOCTYPE html>
  <html>
  <body>
  <?php

  //echo '<script type="text/javascript">
  //prompt("GEEKSFORGEEKS");
  //</script>'
  for($i=1;$i<=5;$i++)
  {
    echo "i=$i<br>";
    echo '<h2>JavaScript Timing</h2>

    <p>Click "Try it". Wait 3 seconds, and the page will alert "Hello".</p>
   <button onclick="setTimeout(myFunction, 5000);">Try it</button>

  <script>
  function myFunction() {
    alert("Hello");
  }
  </script>';
    }

  ?>
</body>
</html>
