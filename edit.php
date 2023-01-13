<?php 

    include ("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM task WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            # code...
            $row = mysqli_fetch_array($result);
            $title = $row['title'];
            $description = $row['description'];
        }
    }
    if (isset($_POST['update'])) {
       $id = $_GET['id'];
       $title = $_POST['title'];
       $description = $_POST['description'];

       $query = "UPDATE task set title = '$title', description = '$description' WHERE id = $id";
        mysqli_query($conn, $query);
        header("location: index.php");
    }
?>

<?php include("includes/header.php") ?>
    <div class="main">
        <div class="main__container">
            <form action="edit.php?id=<?php echo $_GET['id'];?>" class="main__form" method="POST">
                <div class="main__control">
                    <input  class="main__input" type="text" name="title" value="<?php echo $title; ?>" placeholder="Update Title">
                </div>
                <div class="main__group">
                    <textarea name="description" cols="30" rows="10" class="main__textarea" placeholder="Update Description">
                        <?php echo $description; ?>
                    </textarea>
                </div>
                <button class="main__btn" name="update">
                    Update
                </button>
            </form>
        </div>
    </div>

<?php include("includes/footer.php") ?>