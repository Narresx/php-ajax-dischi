<?php 
include './data/data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js" 
    integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.31/vue.cjs.js" 
    integrity="sha512-2e2aXOh4/FgkCAUyurkjk0Uw4m1gPcExFwb1Ai4Ajjg97se/FEWfrLG1na4mq8cgOzouc8qLIqsh0EGksPGdqQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Dischi PHP</title>
</head>
<body>
<h1 class="text-center">Dischi con solo PHP</h1>
<section class="container-fluid d-flex flex-wrap justify-content-center m-auto background-section">
     <?php foreach($database as $disk) {?>
           
    <div class="card h-75 p-4 m-2 background-card" style="width: 18rem;">
     <img src="<?php echo $disk['poster']?>" class="card-img-top">
        <div class="card-body">
            <h2 class="card-title text-white text-center"><?php echo $disk['title']?></h2>
            <h4 class="card-text text-center text-muted"><?php echo $disk['author']?></h4>
            <h4 class="card-text text-center text-muted"><?php echo $disk['year']?></h4>
        </div>
    </div>

     <?php } ?>
</section>
</body>
</html>