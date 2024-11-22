<?php
require_once 'dbConfig.php';
require_once 'models.php';

session_start();

if (isset($_POST['insertUserBtn'])) {
    $insertUser = insertNewUser(
        $pdo,
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['gender'],
        $_POST['position'],
        $_POST['years_of_experience']
    );

    if ($insertUser) {
        $_SESSION['message'] = "Data Analyst successfully added!";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Error adding Data Analyst.";
        $_SESSION['message_type'] = "error";
    }
    header("Location: ../index.php");
    exit();
}

if (isset($_POST['editUserBtn'])) {
    $editUser = editUser(
        $pdo,
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['gender'],
        $_POST['position'],
        $_POST['years_of_experience'],
        $_GET['id']
    );

    if ($editUser) {
        $_SESSION['message'] = "Data Analyst profile successfully updated!";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Error updating Data Analyst profile.";
        $_SESSION['message_type'] = "error";
    }
    header("Location: ../index.php");
    exit();
}

if (isset($_POST['deleteUserBtn'])) {
    $deleteUser = deleteUser($pdo, $_GET['id']);

    if ($deleteUser) {
        $_SESSION['message'] = "Data Analyst profile successfully deleted!";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Error deleting Data Analyst profile.";
        $_SESSION['message_type'] = "error";
    }
    header("Location: ../index.php");
    exit();
}

if (isset($_GET['searchBtn'])) {
    $searchResults = searchForAUser($pdo, $_GET['searchInput']);
    if ($searchResults) {
        foreach ($searchResults as $row) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['id']) . "</td>
                    <td>" . htmlspecialchars($row['first_name']) . "</td>
                    <td>" . htmlspecialchars($row['last_name']) . "</td>
                    <td>" . htmlspecialchars($row['email']) . "</td>
                    <td>" . htmlspecialchars($row['gender']) . "</td>
                    <td>" . htmlspecialchars($row['position']) . "</td>
                    <td>" . htmlspecialchars($row['years_of_experience']) . "</td>
                    <td>" . htmlspecialchars($row['date_added']) . "</td>
                    <td>
                        <a href='edit.php?id=" . htmlspecialchars($row['id']) . "' class='btn btn-edit'>Edit</a>
                        <a href='delete.php?id=" . htmlspecialchars($row['id']) . "' class='btn btn-delete'>Delete</a>
                    </td>
                </tr>";
        }
    } else {
        echo "<tr><td colspan='9' class='text-center'>No results found</td></tr>";
    }
}
?>
