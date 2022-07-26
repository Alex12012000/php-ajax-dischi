<?php 
    include_once 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>

    <header>
        <div class="logo">
            <img src="img/logo.png" alt="logo">
        </div>
    </header>

    <main>
        <div class="container">
            <!-- SELECT -->
            <!-- <div class="select-bar">
                <select>
                    <option value="All">All</option>
                    <option value="Rock">Rock</option>
                    <option value="Pop">Pop</option>
                    <option value="Metal">Metal</option>
                    <option value="Jazz">Jazz</option>
                </select>
            </div> -->
            <!-- CONTENT -->
            <div class="content" >
                <!-- Card -->
                <?php foreach($songs as $song) {?>
                    <div class="card" >
                        <img src="<?php echo $song['poster']; ?>" alt="<?php echo $song['title']; ?>">
                        <h3><?php echo $song['title']; ?></h3>
                        <span><?php echo $song['author']; ?></span>
                        <span><?php echo $song['year']; ?></span>
                    </div>
                <?php } ?>
               
            </div>
        </div>
    </main>
    
</body>
</html>