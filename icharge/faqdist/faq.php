<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>BootstrapVue Collapse FAQ</title>
  <link rel='stylesheet' href='https://unpkg.com/bootstrap@4.1.3/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://unpkg.com/bootstrap-vue@2.0.0-rc.11/dist/bootstrap-vue.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="app">
  <b-container>
    <b-row>
      <b-col cols="12">
        <h1 class="mt-5 mb-2 page_title text-center">FAJ</h1>
        <h3 class="page_title">Frekkin Awesome Jokes</h3>
        <hr class="line">
        <b-row>
          <b-col cols="12" md="12" lg="6">
            
            <b-card v-b-toggle="'collapse-1-'+index" @click="showInfo1[index] = !showInfo1[index]" v-for="(question,index) in joke_questions1" :key="index" class="mt-4">
              <h5 class="response_text">{{question}}</h5>

              <i v-show="!showInfo1[index]" class="my-1 arrow_down fas fa-arrow-down"></i>

              <i v-show="showInfo1[index]" class="my-1 arrow_down fas fa-times"></i>

              <b-collapse :id="'collapse-1-'+index" v-model="showInfo1[index]" class="mt-2">
                <p>{{joke_answers1[index]}}</p>
              </b-collapse>
            </b-card>
          </b-col>
             <b-col cols="12" md="12" lg="6">
            <b-card v-b-toggle="'collapse-2-'+index" @click="showInfo2[index] = !showInfo2[index]" v-for="(question,index) in joke_questions2" :key="index" class="mt-4">
              <h5 class="response_text">{{question}}</h5>

              <i v-show="!showInfo2[index]" class="my-1 arrow_down fas fa-arrow-down"></i>

              <i v-show="showInfo2[index]" class="my-1 arrow_down fas fa-times"></i>

              <b-collapse :id="'collapse-2-'+index" v-model="showInfo2[index]" class="mt-2">
                <p>{{joke_answers2[index]}}</p>
              </b-collapse>
            </b-card>
          </b-col>
        </b-row>
  </b-container>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js'></script>
<script src='https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js'></script>
<script src='https://ssense.github.io/vue-carousel/js/vue-carousel.min.js'></script><script  src="./script.js"></script>

</body>
</html>