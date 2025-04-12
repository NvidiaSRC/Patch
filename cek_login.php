<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

    if (!file_exists("user_data.json")) {
        echo "Belum ada data pengguna.";
        exit;
    }

    $data = json_decode(file_get_contents("user_data.json"), true);

    if ($inputUsername === $data["username"] && password_verify($inputPassword, $data["password"])) {
        echo "sukses";
    } else {
        echo "Username atau password salah.";
    }
} else {
    echo "Metode tidak valid.";
}
?>