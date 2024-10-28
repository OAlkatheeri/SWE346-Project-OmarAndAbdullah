<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.inc.php';?>

    <div class="form-container">
            <form class="login-form" action="Login.php">
                <input type="text" placeholder="Student ID" required>
                <input type="text" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <input type="password" placeholder="Password Confirmation" required>
                <button type="submit" onclick="Signup()" value="Display">Signup</button>
            </form>

<?php include 'include/footer.inc.php';?>
