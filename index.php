<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="./script/main.js" defer></script>
</head>
<body>
    
  <div id="app">
        <div class="container">
            <div class="row p-5">
                <div class="col-12">
              
                 <div class="col-10 m-auto">
                    <div class="row diskcontainer">
                        <div class="disk col-4 justify-content-center d-flex flex-column align-items-center" v-for="(disk, index) in items">
                            <img :src="disk.poster" :alt="disk.title" class="my-4">
                            <h4 class="m-0 fw-bold">{{ disk.title }}</h4>
                            <p class="m-0">{{ disk.author }}</p>
                            <p class="m-0 fw-bold mb-4">{{ disk.year }}</p>
                        </div>
                    </div>
             </div>
        </div>
  </div>

   <script src=" ./script/main.js"></script>
</body>
</html>