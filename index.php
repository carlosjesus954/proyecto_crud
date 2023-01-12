<?php include("db.php");?>

<?php include("includes/header.php");?>

    <main class="main">
        <section class="main__section">
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
        </section>
    </main>

<?php include("includes/footer.php")?>