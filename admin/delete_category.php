<?php
require_once ('../database/connect_sql.php');
require_once ('menu_admin.php');
?>
<?php
if(isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id']>0){
    $id = $_GET['id'];
    $query = "DELETE FROM category where id = '$id'";
    $result = $dbc ->query($query);
}
header('Location: list_category.php');

?>
