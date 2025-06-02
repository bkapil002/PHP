<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>
    <div>
        <h1>To-Do List</h1>
        <form action="to-do-list.php" method="post">
            <input type="text" name="task" placeholder="Add a new task">
            <button type="submit" name="add">Add Task</button>
        </form>

        <?php
        session_start();

        if (!isset($_SESSION['tasks'])) {
            $_SESSION['tasks'] = array();
        }

        if (isset($_POST['add']) && !empty($_POST['task'])) {
            $_SESSION['tasks'][] = $_POST['task'];
        }

        if (isset($_GET['delete'])) {
            unset($_SESSION['tasks'][$_GET['delete']]);
            header("Location: to-do-list.php");
            exit();
        }

        if (isset($_POST['update'])) {
            $index = $_POST['index'];
            $_SESSION['tasks'][$index] = $_POST['task'];
            header("Location: to-do-list.php");
            exit();
        }

        foreach ($_SESSION['tasks'] as $index => $task) {
            echo "<form action='to-do-list.php' method='post' style='display:inline;'>";
            echo "<input type='text' name='task' value='" . htmlspecialchars($task) . "' required>";
            echo "<input type='hidden' name='index' value='" . $index . "'>";
            echo "<button type='submit' name='update'>Update</button>";
            echo "</form>";
            echo " <a href='to-do-list.php?delete=$index'>Delete</a><br>";
        }
        ?>
    </div>
</body>
</html>
