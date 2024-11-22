<?php
require_once 'dbConfig.php';

function insertNewUser($pdo, $first_name, $last_name, $email, $gender, $position, $years_of_experience) {
    $sql = "INSERT INTO data_analyst_employees (first_name, last_name, email, gender, position, years_of_experience) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$first_name, $last_name, $email, $gender, $position, $years_of_experience]);
}

function getAllUsers($pdo) {
    $sql = "SELECT * FROM data_analyst_employees ORDER BY date_added DESC";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery) {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return [];
}

function getUserByID($pdo, $id) {
    $sql = "SELECT * FROM data_analyst_employees WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$id])) {
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    return null;
}

function editUser($pdo, $first_name, $last_name, $email, $gender, $position, $years_of_experience, $id) {
    $sql = "UPDATE data_analyst_employees 
            SET first_name = ?, last_name = ?, email = ?, gender = ?, position = ?, years_of_experience = ? 
            WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$first_name, $last_name, $email, $gender, $position, $years_of_experience, $id]);
}

function deleteUser($pdo, $id) {
    $sql = "DELETE FROM data_analyst_employees WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id]);
}

function searchForAUser($pdo, $searchTerm) {
    $searchTerm = "%$searchTerm%";
    $sql = "SELECT * FROM data_analyst_employees 
            WHERE first_name LIKE ? 
            OR last_name LIKE ? 
            OR email LIKE ? 
            OR position LIKE ?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$searchTerm, $searchTerm, $searchTerm, $searchTerm])) {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return [];
}
?>
