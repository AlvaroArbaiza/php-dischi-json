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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>PHP Dischi Json</title>
</head>
<body>

    <div id="app">

        <!-- HEADER -->
        <header>
            <div class="container">
                <div class="row py-3">
                    <div class="col-1">
                        
                        <!-- img -->
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

                        <!-- poster -->
                        <div class="poster">

                            <!-- img -->
                            <img :src="elem.poster" class="card-img-top" :alt="elem.author">

                            <!-- button -->
                            <a @click="this.infoCard(index)" href="#" class="text-white d-flex align-items-center justify-content-center text-decoration-none">
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>

                        <!-- card-body -->
                        <div class="card-body text-white text-center">

                            <!-- title -->
                            <h5 class="card-title">{{ elem.title }}</h5>

                            <!-- author -->
                            <h6>{{ elem.author }}</h6>

                            <!-- year -->
                            <span>{{ elem.year }}</span>
                        </div>
                    </div>
                </div>

                <!-- modal card info on clik -->
                <div v-if="this.cardInfo" class="cardInfo d-flex align-items-center justify-content-center">

                    <!-- card -->
                    <div class="card pt-4 px-5" style="width: 30rem;">

                        <!-- close button -->
                        <div class="close text-white">
                            <i @click="closeInfo" class="fa-solid fa-xmark"></i>
                        </div>

                        <!-- img -->
                        <img :src="this.data[indexInfo].poster" class="card-img-top" :alt="this.data[indexInfo].author">

                        <!-- card-body -->
                        <div class="card-body text-white text-center">

                            <!-- title -->
                            <h5 class="card-title">{{ this.data[indexInfo].title }}</h5>

                            <!-- author -->
                            <h6>{{ this.data[indexInfo].author }}</h6>

                            <!-- year -->
                            <span>{{ this.data[indexInfo].year }}</span>
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