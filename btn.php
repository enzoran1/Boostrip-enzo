<?php


require './inc_top.php';


$btn1HTML = '
<button id="btn1">afficher</button>';
$btn1CSS =
    "
#btn1{
    font-size: 150%;
    border: none;
    padding: 10px;
    color: white;
    background-color: #379b7a;
    font-weight: 600;
    font-family: 'Roboto', sans-serif;
    border-radius: 10%/50%;
    
}

#btn1:hover{

    background-color: #26cc95;
    transition: 1s;

}";

$btn2HTML = '
<button class="button btn2">afficher</button>';

$btn2CSS =
    ".btn2{

    font-size: 150%;
    border: none;
    padding: 10px;
    color: white;
    background-color: #26cc95;
    font-weight: 600;
    font-family: 'Roboto', sans-serif;
    border-radius: 10%/50%;
    transition: 1s;

}
.btn2--active{

    background-color: red;
    border-radius: 0%;
    transition: 1s;

}
";
$btn2JS = "
const btn2 = document.querySelector('.btn2');

     btn2.addEventListener('click', (e) =>{

        btn2.classList.toggle('btn2--active');
    })

";

$btn3HTML = '
<button class="button btn3">click</button>
';
$btn3CSS = '
.btn3{
    border-radius: 5%;
    color: white;
    background-color: #8156a8;
    width: 100px;
    height: 100px;
    font-size: 150%;
    border: none;
    font-weight: 600;
    padding: 10px;
    transition: 1s;


}
.btn3--active{

    border-radius: 50%;
    width: 100px;
    height: 100px;
    color: white;
    border: none;
    background-color: #8156a8;
    font-weight: 600;
    transition: 1s;
}
';

$btn3JS = "
const btn3 = document.querySelector('.btn3');

btn3.addEventListener('click', (e) =>{

    btn3.classList.toggle('btn3--active');
})

";
$btn4HTML = '
<button class="button btn4">click</button>
';

$btn4CSS = "
.btn4{

    border-radius: 5%;
    color: white;
    background-color: #8156a8;
    width: 100px;
    height: 100px;
    font-size: 150%;
    border: none;
    font-weight: 600;
    padding: 10px;
    transition: .5s;

}

.btn4--active{

    border-radius: 50%;
    width: 100px;
    height: 100px;
    color: white;
    border: none;
    background-color: #1559a7;
    font-weight: 600;
    transition: .5s;
    transform: rotate(360deg);
}


";

$btn4JS = "
const btn4 = document.querySelector('.btn4');
btn4.addEventListener('click', (e) =>{

    btn4.classList.toggle('btn4--active');
})

";

?>

<div class="titre">
    <h1>La guerre des boutons</h1>
</div>

<div class="grid-carte">

    <div class="box">
        <div class="couleur">
            <button id="btn1" class="button">afficher</button>
            <div class="pre-center">
                <pre id="pre1" class="d-none">
         <code>
             <h3 class="pre-html">html</h3>
             <?= htmlentities($btn1HTML) ?>
             <h3 class="pre-css">css</h3>
             <?= htmlentities($btn1CSS) ?>
         </code>
     </pre>
            </div>
        </div>

    </div>


    <div class="box">

        <div class="couleur">
            <button class="button btn2">afficher</button>
            <div class="pre-center">
                <pre id="pre2" class="d-none">
         <code>
             <h3 class="pre-html">html</h3>
             <?= htmlentities($btn2HTML) ?>
             <h3 class="pre-css">css</h3>
             <?= htmlentities($btn2CSS) ?>
             <h3 class="pre-js">Javascript</h3>
             <?= htmlentities($btn2JS) ?>
         </code>
     </pre>
            </div>
        </div>

    </div>


    <div class="box">

        <div class="couleur">
            <button class="button btn3">click</button>
            <div class="pre-center">
                <pre id="pre3" class="d-none">
         <code>
             <h3 class="pre-html">html</h3>
             <?= htmlentities($btn3HTML) ?>
             <h3 class="pre-css">css</h3>
             <?= htmlentities($btn3CSS) ?>
             <h3 class="pre-js">Javascript</h3>
             <?= htmlentities($btn3JS) ?>
         </code>
     </pre>
            </div>
        </div>

    </div>


    <div class="box">

        <div class="couleur">
            <button class="button btn4">click</button>
            <div class="pre-center">
                <pre id="pre4" class="d-none">
         <code>
             <h3 class="pre-html">html</h3>
             <?= htmlentities($btn4HTML) ?>
             <h3 class="pre-css">css</h3>
             <?= htmlentities($btn4CSS) ?>
             <h3 class="pre-js">Javascript</h3>
             <?= htmlentities($btn4JS) ?>
         </code>
     </pre>
            </div>
        </div>

    </div>

</div>










<script src="btn.js"></script>