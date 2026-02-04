<?php
  session_start();
?>



<!-- Header -->
  <header>
    <h3>Login Account</h3>
  </header>

  <main>
    <!-- Username -->
    <label for="username">Username:</label> <br>
    <input type="text" name="username" id="username"> <br>

    <!-- Password -->
     <label for="password">Password:</label> <br>
     <input type="password" name="password" id="password"> <br>

    <!-- Login Account button -->
     <input type="submit" name="login_account" value="Login Account">
  </main>
    
  </form>
  
</body>
</html>

<?php
  header("Location: index.php");
?>