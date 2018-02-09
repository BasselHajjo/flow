<!DOCTYPE html>
<html>

<head>
    <title>What's Flowint</title>
    <title>FLOW INTelligence</title>
    <!-- <link rel="stylesheet" href="stylesheet/styles.css" /> -->
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="asset/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/font-awesome.css">
    <meta name="viewport" content="width=device-width initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" lang="da" />
    <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
    <link rel="manifest" href="icons/manifest.json">
    <link rel="mask-icon" href="icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    
    <style type="text/css">

    

    .containerVideo{
    	width: 100%;
    	padding-top: 45px;
    	
    }
    .video{
    	width: 100%;
    	margin: 80px 0; 
    	height: 100vh;
    }

    #email,
    #name {
        padding: 6px 12px;
        text-align: left;
        border: none;
        font-size: 18px;
        line-height: 22px;
        box-shadow: none;
        background: #fff;
        height: 44px;
        border-radius: 0 !important;
    }

    .contentContact {
        text-align: center;
    }

    #questionaires {
        background: #ff9000;
        padding: 9px 44px;
        font-size: 18px;
        font-weight: 600;
        height: 44px;
        margin: 0 auto;
        border: none;
        box-shadow: none;
        border-radius: 22px;
        letter-spacing: -0.01em;
        color: #fff;
        text-align: center;
        -webkit-transition: background 200ms ease-in;
        -moz-transition: background 200ms ease-in;
        transition: background 200ms ease-in;
    }
    </style>
</head>

<body>
	<?php include 'header.php';?>

   <div class="containerVideo">
    <video class="video" controls>
    	<source src="video/Hjem - FLOW INTelligence.mp4" type="video/mp4">
	
   </video>

    </div> 


    <div id="contactcontent" class="container contentContact">
        <h2>Hvad er vigtigt for, at Jeres virksomhed kan skabe værdi?</h2>
        <h3>let's develop FLOWINT in cooperation with you!</h3>
        <p>
            content of contact <a href="#" class="readme">［Read me］</a>
        </p>
        <div class="row">
            <div class="col-lg-3">
                <h4 class="text-center"> PROCESSER</h4>
                <div class="well ProcesserList" style="max-height: 200px;overflow: auto;">
                    <ul class="list-group checked-list-box">
                        <li class="list-group-item">
                            <input type="checkbox" id="Gennemsigtighed" value="Gennemsigtighed" v-model="checkedNames1"> Gennemsigtighed</li>
                        <li class="list-group-item" data-checked="true">
                            <input type="checkbox" id="Kvalitetsstyring" value="Kvalitetsstyring" v-model="checkedNames1"> Kvalitetsstyring</li>
                        <li class="list-group-item">
                            <input type="checkbox" id="End-to-end optimering" value="End-to-end optimering" v-model="checkedNames1"> End-to-end optimering</li>
                        <li class="list-group-item">
                            <input type="checkbox"> //</li>
                        <li class="list-group-item">
                            <input type="checkbox"> //</li>
                        <!-- <li class="list-group-item"><a href="#">Læs mere...</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h4 class="text-center"> SAMARBEJDER</h4>
                <div class="well ProcesserList" style="max-height: 200px;overflow: auto;">
                    <ul class="list-group checked-list-box">
                        <li class="list-group-item">
                            <input type="checkbox" id="Sammenhængskraft" value="Sammenhængskraft" v-model="checkedNames2"> Sammenhængskraft</li>
                        <li class="list-group-item">
                            <input type="checkbox" id="Engagement" value="Engagement" v-model="checkedNames2"> Engagement</li>
                        <li class="list-group-item">
                            <input type="checkbox" id="ECollaboration" value="Collaboration" v-model="checkedNames2"> Collaboration</li>
                        <li class="list-group-item">
                            <input type="checkbox"> //</li>
                        <li class="list-group-item">
                            <input type="checkbox"> //</li>
                        <!-- <li class="list-group-item"><a href="#">Læs mere...</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h4 class="text-center"> AGILITET</h4>
                <div class="well ProcesserList" style="max-height: 200px;overflow: auto;">
                    <ul class="list-group checked-list-box">
                        <li class="list-group-item">
                            <input type="checkbox" id="Time-to-market" value="Time-to-market" v-model="checkedNames3"> Time-to-market</li>
                        <li class="list-group-item" data-checked="true">
                            <input type="checkbox" id="Kontinuerlig forbedring" value="Kontinuerlig forbedring" v-model="checkedNames3"> Kontinuerlig forbedring</li>
                        <li class="list-group-item">
                            <input type="checkbox" id="Innovation" value="Innovation" v-model="checkedNames3"> Innovation</li>
                        <li class="list-group-item">
                            <input type="checkbox"> //</li>
                        <li class="list-group-item">
                            <input type="checkbox"> //</li>
                        <!-- <li class="list-group-item"><a href="#">Læs mere...</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h4 class="text-center"> RELATIONER</h4>
                <div class="well ProcesserList" style="max-height: 200px;overflow: auto;">
                    <ul class="list-group checked-list-box">
                        <li class="list-group-item">
                            <input type="checkbox" id="Kundeoplevelse" value="Kundeoplevelse" v-model="checkedNames4"> Kundeoplevelse </li>
                        <li class="list-group-item" data-checked="true">
                            <input type="checkbox" id="Co-creation" value="Co-creation" v-model="checkedNames4"> Co-creation
                        </li>
                        <li class="list-group-item">
                            <input type="checkbox" id="Partner alignment" value="Partner alignment" v-model="checkedNames4"> Partner alignment</li>
                        <li class="list-group-item">
                            <input type="checkbox"> //</li>
                        <li class="list-group-item">
                            <input type="checkbox"> //</li>
                        <!-- <li class="list-group-item"><a href="#">Læs mere...</a></li> -->
                    </ul>
                </div>
            </div>
             <div>
            <span>PROCESSER: {{ checkedNames1 }}</span>
            <br>
            <span>SAMARBEJDER: {{ checkedNames2 }}</span>
            <br>
            <span>AGILITET: {{ checkedNames3 }}</span>
            <br>
            <span>RELATIONER: {{ checkedNames4 }}</span>
            <br>
            
        </div>
        </div>
        <div class="containerQuestionaire">
            <div class="companyInformation">
                <input id="email" type="text" placeholder="Enter work Email">
                <input id="name" type="text" placeholder="Company Name">
                <a href="contact.html">
                    <button id="questionaires"> Questionaire </button>
                </a>
            </div>
        </div>

    <script type="text/javascript" src="javascript/vue.js"></script>
    <script>

     var contactcontent = new Vue({
         el: '#contactcontent',
         data: {
             checkedNames1: [],
             checkedNames2: [],
             checkedNames3: [],
             checkedNames4: []
         }
             });

    var elsecontent = new Vue({
        el: '#elsecontent',
        data: {
            todos: [],
            newTodo:''
        },
         methods: {
             addTodo: function(){
                 this.todos.push({content:this.newTodo, completed: false})
             },
             removeTodo: function(){
                 this.todos.splice(this.todos.indexOf(this.newTodo),1);
             }}

    })

    </script>
</body>

</html>