<?php 
// Delete Users 
if (isset($_GET["id"])) {
    $id = htmlspecialchars($_GET["id"]);
    $data = file_get_contents("../../pages/users.json");
    $users = json_decode($data, true);

    foreach($users as $key => $user) {
        if ($user["id"] == $id) {
            unset($users[$key]);
        }
    }
    $userJson = json_encode($users);
    file_put_contents("../../pages/users.json", $userJson);
    header("Location: users.php");
}

$data = file_get_contents("../../pages/users.json");
$users = json_decode($data, true);
?>