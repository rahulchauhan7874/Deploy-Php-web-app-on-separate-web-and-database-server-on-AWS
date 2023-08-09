<h2>Guestbook</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="name">
  <br><br>
  Message: <textarea name="message" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<h2>Messages</h2>
<?php
$stmt = $pdo->query("SELECT name, message FROM guestbook");
while ($row = $stmt->fetch()) {
   echo "<b>" . $row['name'] . "</b><br>";
   echo $row['message'] . "<br><br>";
}
?>
</body>
</html>

"/var/www/html/index.php" 45L, 1063B