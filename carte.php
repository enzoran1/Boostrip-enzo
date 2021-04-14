<?php

require './inc_top.php';


$carte1HTML = '

<div class="box-carte">
    <div class="carte1">
        <div>
            <h2>Ma carte</h2>
            <p>Lorem ipsum dolor 
            sit amet consectetur, adipisicing elit. 
            Voluptatem, aperiam 
            earum quisquam ea 
            nihil laboriosam quos 
            perferendis quod fugiat 
            eaque corrupti magnam magni adipisci 
            amet sapiente minus quaerat
             facere atque.</p>

            <button>Button</button>

        </div>
    </div>
</div>

';

$carte1CSS = "
.carte1{
    width: 300px;
    padding: 20px;
    border: 1px solid black;
    background-color: white;
    text-align: center;
    
    

}
.carte1 h2{
    font-size: 230%;
    color: orange;
    font-family: 'Roboto', sans-serif;
}
.carte1 p {
    
    margin-top: 15px;
    margin-bottom: 15px;
    text-align: justify;
    font-size: 120%;
    color: grey;
    font-weight: 600;
    font-family: 'Roboto', sans-serif;

    
    
    
}
.carte1 button {
    text-decoration: none;
    background-color: orange;
    color: white;
    font-weight: 600;
    padding: 10px;
    width: 250px;
    font-size: 150%;
    border: none;
    cursor: pointer;
    font-family: 'Roboto', sans-serif;
    
    
    
    

}
";

$carte2HTML = '
<div class="carte2">

        <img src="./icons8-male-user-100.png" alt="">
        <div class="display-space">
            <div class="carte2-attributs">
                <li><a href=""><span>Prénom : </span>Enzo</a></li>
                <li><a href=""><span>Ville : </span>Metz</a></li>
            </div>
            <div class="carte2-attributs">
                <li><a href=""><span>Nom : </span>Franceschini</a></li>
                <li><a href=""><span>tel : </span>06.77.60.73.76</a></li>
            </div>
        </div>

        <div>
            <li><a href=""><span>Email : </span>enzo.franceschinidev@gmail.com</a></li>
        </div>
        <div class="carte2-button">
            <button>button</button>
        </div>
    </div>
';

$carte2CSS = "
.carte2{
    background-color:aliceblue;
    list-style: none;
    text-align: center;
    padding: 10px;
    border-radius: 5%;
    border: solid 3px #1559a7;
    width: 400px;
}

.carte2 img{

   margin-bottom: 50px;
}
.carte2 span{
    
    font-weight: 600;
    color: #1559a7;
}
.carte2 li{
    
    
    margin-bottom: 50px;
    
}
.carte2 a{
    text-decoration: none;
    font-size: 110%;
    color: gray;
    font-weight: 600;
}

.carte2 button{
    color: white;
    background-color: #1559a7;
    font-size: 150%;
    border: none;
    padding: 10px;
    font-weight: 600;
    border-radius: 10%/50%;
    cursor: pointer;

}

.display-space{
    display: flex;
    justify-content: space-around;
}
";

?>


<div class="titre">
    <h1>Les Carte en Folie</h1>
</div>

<div>
    <div class="center-carte">
        <div class="carte1">
            <div>
                <h2>Ma carte</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, aperiam earum quisquam ea nihil laboriosam quos perferendis quod fugiat eaque corrupti magnam magni adipisci amet sapiente minus quaerat facere atque.</p>

                <button>Button</button>

            </div>
        </div>
    </div>



    <div class="box2">
        <div class="btn-center">
            <button id="carte1" class="button">code</button>
            <div class="pre-center">
                <pre id="pre1" class="d-none2">
         <code>
             <h3 class="pre-html">html</h3>
             <?= htmlentities($carte1HTML) ?>
             <h3 class="pre-css">css</h3>
             <?= htmlentities($carte1CSS) ?>
         </code>
     </pre>
            </div>
        </div>

    </div>




    <div class="center-carte">
        <div class="carte2">

            <img src="./icons8-male-user-100.png" alt="">
            <div class="display-space">
                <div class="carte2-attributs">
                    <li><a href=""><span>Prénom : </span>Enzo</a></li>
                    <li><a href=""><span>Ville : </span>Metz</a></li>
                </div>
                <div class="carte2-attributs">
                    <li><a href=""><span>Nom : </span>Franceschini</a></li>
                    <li><a href=""><span>tel : </span>06.77.60.73.76</a></li>
                </div>
            </div>

            <div>
                <li><a href=""><span>Email : </span>enzo.franceschinidev@gmail.com</a></li>
            </div>
            <div class="carte2-button">
                <button>button</button>
            </div>
        </div>
    </div>



    <div class="box2">
        <div class="btn-center">
            <button id="carte2" class="button">code</button>
            <div class="pre-center">
                <pre id="pre2" class="d-none2">
         <code>
             <h3 class="pre-html">html</h3>
             <?= htmlentities($carte2HTML) ?>
             <h3 class="pre-css">css</h3>
             <?= htmlentities($carte2CSS) ?>
         </code>
     </pre>
            </div>
        </div>

    </div>
















    <script src="carte.js"></script>