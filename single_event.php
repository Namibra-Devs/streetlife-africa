<?php include('./admin/database/config.php') ?>
<?php
$id = $_REQUEST['id'];
$statement = $pdo->prepare("SELECT * FROM tbl_events WHERE event_id = ?");
$statement->execute(array($id));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
    $event_content = $row['event_content'];
}

?>

<?php include('header.php') ?>
<main>
    <section>
        <?php echo $event_content; ?>
    </section>
</main>

<?php include('footer.php') ?>