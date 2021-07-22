<?phd
/**
 * Created by PhpStorm.
 * User: ParCan
 * Date: 04-06-2020
 * Time: 04:57 PM
 */
require_once('../constants.php');
require_once SRC_DIR.'businesslogic\dbConn.php';

echo _DIR_;
echo "<pre>";
var_dump($_POST);
echo "</pre>";
$category = $_POST['category'];
$dishname = $_POST['dishname'];
$cooktime = (int)$_POST['cooktime'];
$ingredients = $_POST['ingredients'];
$directions = $_POST['directions'];

//$query = "INSERT INTO details (dishname,cooktime,ingredients,directions) VALUES (?,?,?,?)";
//$stmt = $dbConn->prepare($query);

//if(!$stmt->bind_param('siss',$dishname,$cooktime,$ingredients,$directions)){
//    die('fill up all details '.$dbConn->error);
//}
    $query = "INSERT INTO details (categories,dishname,cooktime,ingredients,procedures) VALUES (?,?,?,?,?)";
    $stmt = $dbConn->prepare($query);
    if(!$stmt) {
        throw new \Exception('Unable to prepare query for inserting state'.$dbConn->error);
    }
if(!$stmt->bind_param('siss',$dishname,$cooktime,$ingredients,$directions)) {
        throw new \Exception('Unable to bind query params for inserting state: ' . $dbConn->error);
    }

    if(!$stmt->execute()) {
        throw new \Exception('Unable to insert state: ' . $dbConn->error);
    }
    //header('Location: index.php);
    header('Location: http://localhost/cookbook/');
    return $dbConn->insert_id;
//if(!$stmt->execute()) {
//    die('Failed'.$dbConn->error);
//echo $dbConn->insert_id;
