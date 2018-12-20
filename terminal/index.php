
  <?php

  function submeter(){
      $senha; 
         $senha = $_GET['password'];
         if(md5($senha) == '7fa3b767c460b54a2be4d49030b349c7'){
             header('Location: http://deltreesociety.tech/desafios/');
         }
     
  }
  
  ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>ABULAFIA</title>



        <style>
            /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
            
            @import url("https://fonts.googleapis.com/css?family=Press+Start+2P");
            * {
                font-family: 'Press Start 2P', cursive;
            }
            
            html,
            body {
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                background: black;
                flex-direction: column;
                color: #54FE55;
            }
            
            *::selection {
                background: #1a4f1a;
            }
            
            .welcome .line {
                overflow: hidden;
                width: 0px;
                text-shadow: 0px 0px 10px #54FE55;
                height: 1rem;
                text-align: left;
            }
            
            .welcome .line1 {
                animation: type 0.5s 1s steps(20, end) forwards;
            }
            
            .welcome .line2 {
                animation: type 0.5s 1.5s steps(20, end) forwards;
            }
            
            .welcome .line3 {
                animation: type 0.5s 2s steps(20, end) forwards;
            }
            
            @keyframes type {
                to {
                    width: 280px;
                }
            }
            
            form {
                display: flex;
                flex-direction: column;
                max-width: 300px;
            }
            
            form label {
                margin-bottom: 1rem;
                display: flex;
                flex-direction: column;
                text-shadow: 0px 0px 10px #54FE55;
            }
            
            form input {
                background: black;
                border: 1px solid #54FE55;
                margin-top: .5rem;
                padding: .5rem;
                color: #54FE55;
                text-shadow: 0px 0px 10px #54FE55;
                box-shadow: 0px 0px 5px #54FE55;
            }
            
            form input:focus {
                outline: none;
            }
            
            form button {
                padding: .5rem;
                background: #1a4f1a;
                color: #54FE55;
                border: 0;
                text-shadow: 0px 0px 10px #54FE55;
                box-shadow: 0px 0px 10px #1a4f1a;
                cursor: pointer;
            }
            
            form button:focus {
                outline: none;
            }
            
            @keyframes blink {
                0% {
                    opacity: 0;
                }
                49% {
                    opacity: 0;
                }
                50% {
                    opacity: 1;
                }
                100% {
                    opacity: 1;
                }
            }
            
            .blink {
                animation-name: blink;
                animation-duration: 1s;
                animation-iteration-count: infinite;
            }
        </style>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    </head>

    <body>

        <form action="">
            <p class="welcome">
                <div class="line line1">The light of the world is the power of knowledge!</div>
                <div class="line line2">Do you know the</div>
                <div class="line line3">credentials?<span class="blink">_</span></div>
            </p>
            <label for="">
      Password:
      <input type="password" name="password">
   </label>
            <button type="submit">[ ENTER ]</button>
        </form>
        <?php submeter(); ?>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js'></script>



    </body>

    </html>