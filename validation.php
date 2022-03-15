<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
 <?php  
   $login= $_POST['login'];
   $password= $_POST['password'];

   $connexion=mysqli_connect("localhost", "root", "", "formulaire");
   if ($connexion) {
   	  echo"votre connexion a reussie"."<br>";
 
   }
   else
   echo "erreure de connexion";
   /*verification*/
   $req="SELECT * FROM admin WHERE login='".$login."' AND password='".$password."';";

   /*$req="SELECT * FROM admin WHERE login='oumou'-- 'AND password='".$password."';";*/e

   $compteur=0;
   $requete=mysqli_query($connexion,$req);
       while ($resultat=mysqli_fetch_array($requete)) {
       	 echo $resultat ['login']."<br>";
         $compteur++;
       }
       if ($compteur==0) {
       	header("location:formulaire.php");
       }
       else {
       	header("location:index.php");
       }

?>
</body>
</html>
