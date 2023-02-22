<?php
    
        require_once "Product.php";
    
        $product = null;
    
        if (isset($_POST['submit'])) {
            if (
                    isset($_POST['type']) &&
                    isset($_POST['name']) &&
                    isset($_POST['director-author']) &&
                    isset($_POST['rating-genre']) &&
                    isset($_POST['price'])
            ) {
                $type = $_POST['type'];
                $name = $_POST['name'];
                $directorAuthor = $_POST['director-author'];
                $ratingGenre = $_POST['rating-genre'];
                $price = $_POST['price'];

                $product = $type == "Book" ?
                        new Movie(
                                $name,
                                $directorAuthor,
                                $ratingGenre,
                                $price,
                        ) :
                        new Book(
                                $name,
                                $directorAuthor,
                                $ratingGenre,
                                $price,
                        );
            }
        }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
              crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                crossorigin="anonymous"></script>
    </head>
    <body>
        
        <div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
            <form method="POST">
                <div class="mb-3">
                    <label for="input-type">Product type</label>
                    <select id="input-type" class="form-select" name="type">
                        <option value="book">Book</option>
                        <option value="movie">Movie</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label
                            for="input-name"
                            class="form-label"
                            id="input-length-label">Title</label>
                    <input
                            id="input-name"
                            class="form-control"
                            type="text"
                            name="name"
                            required>
                </div>
                <div class="mb-3">
                    <label
                            for="input-director-author"
                            class="form-label"
                            id="input-length-label">Director/Author</label>
                    <input
                            id="input-director-author"
                            class="form-control"
                            type="text"
                            name="director-author"
                            required>
                </div>
                <div class="mb-3">
                    <label
                            for="input-rating-genre"
                            class="form-label"
                            id="input-length-label">Rating/Genre</label>
                    <input
                            id="input-rating-genre"
                            class="form-control"
                            type="text"
                            name="rating-genre"
                            required>
                </div>
                <div class="mb-3">
                    <label
                            for="input-price"
                            class="form-label"
                            id="input-length-label">Price</label>
                    <input
                            id="input-price"
                            class="form-control"
                            type="text"
                            name="price"
                            required>
                </div>
                <div style="text-align: center; margin-top: 10px">
                    <input name="submit" value="Submit" type="submit" class="btn btn-primary">
                </div>
            </form>
            <div style="text-align: center">
                <?php echo $product != null ? $product->display() : "" ?>
            </div>
        </div>
    
    </body>

</html>