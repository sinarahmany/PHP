<?php require_once('header.php'); ?>
  <h3>I`m King Mert</h3>
<?php

  if ($_POST) {
    $preSql = "SELECT COUNT(*) FROM registeration where email =:email AND active =1 ";
    $dataCount= $conn->prepare($preSql);
    $dataCount->bindParam(":email",$_POST['email'],PDO::PARAM_STR);
    $dataCount->execute();
    if($dataCount->fetchColumn() == 0){
      $pass= md5($_POST['password']);
    $sql = "INSERT INTO registeration(name,surname,email,password) VALUES(:name,:surname,:email,:pass)";
    $data = $conn->prepare($sql);
    $data->bindParam(":name",$_POST['name'],PDO::PARAM_STR);
    $data->bindParam(":surname",$_POST['surname'],PDO::PARAM_STR);
    $data->bindParam(":email",$_POST['email'],PDO::PARAM_STR);
    $data->bindParam(":pass",$pass,PDO::PARAM_STR);
    $data->execute();
    }else{
      echo "This user already in DataBase";
    }
  }
?>


<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <img src="https://semantic-ui.com/examples/assets/images/logo.png" class="image">
      <div class="content">
        Log-in to your account
      </div>
    </h2>
    <form class="ui large form" action="#" method="POST">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="name" placeholder="Name">
          </div>
        </div>
		
		<div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="surname" placeholder="Surname">
          </div>
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail address">
          </div>
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <button type="submit" class="ui fluid large teal submit button">Register</button>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      New to us? <a href="#">Sign Up</a>
    </div>
  </div>
</div>


 <!-- <?php require_once('footer.php'); ?> -->
