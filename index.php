<?php include("db.php"); ?>

<?php include("includes/header.php"); ?>

<main class="main">
    <section class="main__section">
        <?php if (isset($_SESSION['message'])) { ?>
            <div class="main__alert">
                <span class="main__span">Task is saved correctly!</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="main__close" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </div>
        <?php session_unset();
        } ?>
        <div class="main__container">
            <form action="save_task.php" class="main__form" method="POST">
                <div class="main__control">
                    <input type="text" name="title" class="main__input" placeholder="Task Tittle" autofocus>
                </div>
                <div class="main__group">
                    <textarea name="description" cols="30" rows="10" class="main__textarea" placeholder="Task description"></textarea>
                </div>
                <input type="submit" value="Save Task" name="save_task" class="main__submit">
            </form>
        </div>
        <div class="main__consultas">
            <table class="main__table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM task";
                    $result_task = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result_task)) { ?>
                        <tr>
                            <td class="main__td"><?php echo $row['title'] ?></td>
                            <td class="main__td"><?php echo $row['description'] ?></td>
                            <td class="main__td"><?php echo $row['created_at'] ?></td>
                            <td class="main__td">
                                <a href="edit.php?id=<?php echo $row['id'] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="main__actions main__edit" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </a>
                                <a href="delete_task.php?id=<?php echo $row['id'] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="main__actions main__delete" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</main>

<?php include("includes/footer.php") ?>