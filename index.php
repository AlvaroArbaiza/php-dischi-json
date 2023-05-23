<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Style Css -->
    <link href="assets/css/style.css" rel="stylesheet">
    
    <title>PHP Dischi Json</title>
</head>
<body>

    <div id="app">
        <!-- <p v-for="(elem, index) in this.data">
            {{ elem.title}}
        </p> -->

        <!-- HEADER -->
        <header>
            <div class="container">
                <div class="row py-3">
                    <div class="col-1">
                        
                        <img class="w-50" src="assets/img/Spotify-PNG-Logo.png" alt="logo spotify">
                    </div>
                </div>
            </div>
        </header>

        <!-- MAIN -->
        <main>

        <div class="container">
            <div class="row justify-content-around py-5 px-5">

            <!-- cards -->
                <div class="card pt-4 px-5" v-for="(elem, index) in this.data" :key="index">

                    <img :src="elem.poster" class="card-img-top" :alt="elem.author">

                    <div class="card-body text-white text-center">
                        <h5 class="card-title">{{ elem.title }}</h5>
                        <h6>{{ elem.author }}</h6>
                        <span>{{ elem.year }}</span>
                    </div>
                </div>
            </div>
        </div>

        </main>
    </div>
    
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Main JS -->
    <script src="./main.js"></script>

</body>
</html>