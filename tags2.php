<?php
$ticketId = $_GET['id'];
$query ="SELECT tickets_tugs.*, tags.name, tags.id FROM tickets_tugs JOIN tags ON tickets_tugs.tugs_id = tags.id WHERE ticket_id = '$ticketId'";
$result = mysqli_query($con_str, $query) or die("Ошибка " . mysqli_error($con_str));
?>

Tags
<?php while ($row = mysqli_fetch_array($result)):?>
    <a href="/tags.php?id=<?php echo $row['id']?>"><?php echo $row['name']?>;</a>
<?php endwhile; ?>
