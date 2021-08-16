<?php   
  $name = $_POST['name'];
  $email = $_POST['email'];
  $language = $_POST['language'];

  $conn = new mysqli('localhost','simplon','simplon','simplon');
    if ($conn->connect_error){
      die('Connection Failed : '.$conn->connect_error);
    }else{
      $stmt = $conn->prepare("insert into inscription(name, email, language)
        values(?, ?, ?)");
      $stmt->bind_param("sss", $name, $email, $language);
      $stmt->execute();
      echo "Inscription réussi...";
      $stmt->close();
      $conn->close();
    }
  
?>; 

<?php
$conn = new mysqli ('localhost','simplon', 'simplon','inscription')
if ( >=8)
{
    echo "l'inscription est cloturée";
}
?>