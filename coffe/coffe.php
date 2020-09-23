<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@469&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Кофемашина</title>
    <style>
      body{ 
        background: url(../img/coffe.jpg);
      }
      .container.rounded{
        background: rgb(139, 69, 19, 5);
      }
      .coffe-btn-group{
        width:90%;
        heigth:60px;
        background:green;
        border-radius: 30px 0 0 30px;
        font-size:2em;
        font-weigth:600;
        color:White;
      }
      .coffe-btn{
        width:60px;
        heigth:60px;
        background:Brown;
        cursor:pointer;
        border:2px solid white;
        box-shadow:5px 5px 5px black;
        font-family: 'Oswald', sans-serif;
      }
      .coffe-btn:hover{
        background:#800000;
      }
      .coffe-btn:active{
        background:red;
        box-shadow: inset 0 0 10px black;
      }
      #diplay{
        width:100%;
        height:300px;
        background:black;
        color:white;
        border:5px groove DarkSlateGrey;
      }
      
       
     
      

    </style>
  </head>
  <body>
    <div class="container my-5 rounded">
      <div class="row">
        <div class="col-sm-6">
          <div class="row coffe=btn-group mt-5 my-3 mx-2">
            <div class="rounded-circle coffe-btn mr-3" onclick="getCoffee('Латте,43')"></div><span>Латте - 43</span>
          </div>
        </div>
        
        <div class="col-sm-6"></div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="row coffe=btn-group my-3 mx-2">
            <div class="rounded-circle coffe-btn mr-2" onclick="getCoffee('Крепкий,10')"></div><span>Крепкий - 10</span>
          </div>
        </div>
        
        <div class="col-sm-6"></div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="row coffe=btn-group mt-3 mb-5 mx-2">
            <div class="rounded-circle coffe-btn mr-3" onclick="getCoffee('Экспрессо,45')"></div><span>Экспрессо - 45</span>
          </div>
        </div>
        
        <div class="col-sm-6"></div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="row coffe=btn-group my-3 mx-2">
            <div class="rounded-circle coffe-btn mr-3" onclick="getCoffe('Каппучино,75')"></div><span>Каппучино - 75</span>
          </div>
        </div>
        
        <div class="col-sm-6">
          <div class="row my-5">
            <div class="col-sm-6">
              <p id="displayInfo" class="p-3 text-center">Внесите деньги и закажите кофе</p>
              <p id="balance"></p>
              <div class="progress" style="background:navy;">
                <div class="progress-bar bs white" role="progressbar" style="width:0%"></div>
              </div>
            </div>
            <div class="col-sm-6">
              <input type="text" id="money">
              <img src="../img/bill_acc.png" alt="">
            
            </div>
          </div>
          
        </div>
      </div>
      
      
      
    </div>
      <div class="container">
        <img src="../img/50rub.jpg" alt="">
        <img src="../img/100rub.jpg" alt="">
        <img src="../img/500rub.jpg" alt="">
      </div>
      
    <script>
      let container=document.getElementById("container");
      let display=document.getElementById("display");
      function getCoffe(coffeeName,cost){
        if(money.value >=cost)
          display.innerText = "Кофе "+coffeeName+" готов!"
        else
          display.innerText = "Нет денег - нет кофе!"; 
        
      }
      function getChenge(num){
        let coin=0;
        if(num>=10) coin=10;
        else if(num>=5) coin=5;
        else if(num>=2) coin=2;
        else if(num>=1) coin=1;
        
        if(coin>0){
          console.log(coin);
          getChange(num-coin);
          let arr=[1,2,5,10]
          for (let i = 0; i < arr.length; i++)
          {
            console.log(arr[i])
          }
        }
        
        
          container.onmousedown=function(event){
        container.style.top = event.clientY-75+"px";
            container.style.left = event.clientX-75+"px";
            
            function moveAt(event){
              container.style.top = e.clientY-75+"px";
              container.style.left = e.clientX-75+"px";
            }
            
            document.addEventListener("mousemove",moveAt);
            document.onmouseup=function(){
              document.removeEventListener("mousemove",moveAt);
            
          }
           container.ondragstart = function(){return false;}
        
        
        
        
      }
      
    </script>
    
    
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
