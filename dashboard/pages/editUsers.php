<?php 

// Edit user
if (isset($_POST["edit-user-btn"])) {
    $firstName = htmlspecialchars(trim($_POST["firstName"]));
    $lastName = htmlspecialchars(trim($_POST["lastName"]));
    $userName = htmlspecialchars(trim($_POST["userName"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $password = htmlspecialchars(trim($_POST["password"]));
    $confirmPassword = htmlspecialchars(trim($_POST["conPsw"]));
    $id = htmlspecialchars(trim($_POST["id"])); // Assuming the ID is passed as a hidden field

    // Validate that ID is not empty
    if (empty($id)) {
        die("User ID is required");
    }

    // Check password confirmation
    if ($password !== $confirmPassword) {
        die("Passwords do not match");
    }

    // Hash password if provided
    if (!empty($password)) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    }

    // Read existing users data
    $filePath = "../../pages/users.json";
    if (!file_exists($filePath)) {
        die("Users data file not found");
    }

    $userJson = file_get_contents($filePath);
    $users = json_decode($userJson, true);
    
    // Check if JSON decoding was successful
    if ($users === null) {
        die("Error decoding JSON data");
    }

    // Update user data
    $userFound = false;
    foreach ($users as $key => $user) {
        if ($user["id"] == $id) {
            $users[$key]["firstName"] = $firstName;
            $users[$key]["lastName"] = $lastName;
            $users[$key]["userName"] = $userName;
            $users[$key]["email"] = $email;
            if (!empty($password)) {
                $users[$key]["password"] = $hashedPassword;
            }
            $userFound = true;
            break;
        }
    }

    // Check if user was found
    if (!$userFound) {
        die("User not found");
    }

    // Write updated data back to file
    $userJson = json_encode($users, JSON_PRETTY_PRINT);
    if (file_put_contents($filePath, $userJson) === false) {
        die("Error writing to file");
    }

    echo "Profile updated successfully";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/register.css">
</head>
<body>
<section class="login">
  <div class="container">
      <div class="form-register">
        <div class="text">
          <h1>Edit User</h1>
        </div>
        <form action="editUsers.php" method="post">
            <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>"/> <!-- Add this line to pass user ID -->

            <div class="inputName">
              <input type="text" placeholder="First name" name="firstName"/>
              <input type="text" placeholder="Last name" name="lastName"/>
            </div>

            <input type="text" placeholder="Username" name="userName"/>

            <input type="email" placeholder="Your E-mail" name="email"/>
            
            <input type="password" placeholder="Password" name="password"/>

            <input type="password" placeholder="Confirm Password" name="conPsw"/>
            
            <?php if (isset($errors["email"])): ?>
              <div class="error">
                <p><?= $errors["email"] ?></p>
              </div>
            <?php endif;?>

            <?php if (isset($errors["password"])): ?>
              <div class="error">
                <p><?= $errors["password"] ?></p>
              </div>
            <?php endif;?>

            <?php if (isset($errors["inputs"])): ?>
              <div class="error">
                <p><?= $errors["inputs"] ?></p>
              </div>
            <?php endif;?>
            
            <button class="register-btn" name="edit-user-btn">EDIT</button>
        </form>
        
      </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
