<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Cars cars cars</title>
</head>
<style>
  .error{
    color: red;
  }
</style>
<body>



  <div class="container">
  <h1>Verbrauchtwagen versilbern</h1>
  <!-- hier sollte ihr Formular entstehen -->
  <form id="anmeldung-form" action="php/ajax_handler.php" method="post">

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-group" placeholder="Name" required>
    </div>


    <div class="form-group">
      <label for="name">Lastname</label>
      <input type="text" name="lastname" class="form-group" placeholder="Nachname" required>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
        <input type="email" name="email" class="form-group" placeholder="Email" required>
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-group" placeholder="Password" required>
    </div>
    <div class="form-group">
      <label for="password2">Repeat Password</label>
      <input type="password" name="password2" class="form-group" placeholder="Repeat Password" required>
    </div>

    <div class="form-group">
      <label for="bday">Birthday</label>
      <input type="date" name="bday" class="form-group" value="">
    </div>

    <div class="form-checkbox">
      <label>I have read and accepted the AGB's</label>
      <input type="checkbox" name="agb" id="agb">
    </div>


    <div class="form-group">
      <button type="submit" name="submit">Submit</button>
      <button type="reset" name="reset">Reset</button>
    </div>



  </form>
</div>
<script src="js/jquery-1.12.0.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/validate2.js"></script>

</body>
</html>
