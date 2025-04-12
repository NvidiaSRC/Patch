<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    // Buat array user
    $userData = [
        "username" => $username,
        "password" => password_hash($password, PASSWORD_DEFAULT) // Hash password
    ];

    // Simpan ke file
    $data = json_encode($userData);
    file_put_contents("user_data.json", $data);

    echo "sukses";
} else {
    echo "Metode tidak valid.";
}
?>