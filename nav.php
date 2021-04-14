<?php

require './inc_top.php';

$nav1HTML = '

<div class="nav-1">
    <h1>Mon logo</h1>
    <nav>
        <ul class="nav-center">
            <li><a href="">nav1</a></li>
            <li><a href="">nav2</a></li>
            <li><a href="">nav3</a></li>
            <li><a href="">nav4</a></li>
        </ul>
    </nav>
    <div class="nav-right">
        <a href="">button1</a>
        <a href="">button2</a>
    </div>
</div>

';

$nav1CSS = "
.nav-1{
    
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    text-align: center;
    background-color: white;
    padding: 10px;
    
}
.nav-1 h1{
    color: orangered;
    
}
.nav-1 nav{
    margin-top: 10px;
}
.nav-1 a{
    text-decoration: none;
    font-size: 150%;
    
    
}
.nav-center{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    list-style: none;
    
}
.nav-center a{
    color: gray;
    font-weight: 600;
}

.nav-right{
    margin-top: 8px;
}
.nav-right a{
    margin-right: 20px;
    background-color: orangered;
    color: white;
    padding: 5px;
    font-weight: 600;
    border-radius: 10%/50%;


}
";

$nav2HTML = '
<div class="nav-2">
    <h1>Mon logo</h1>
    <nav>
        <ul class="nav2-center">
            <li><a href="">nav1</a></li>
            <li><a href="">nav2</a></li>
            <li><a href="">nav3</a></li>
            <li><a href="">nav4</a></li>
            <li><a href="">nav5</a></li>
        </ul>
    </nav>
</div>

';

$nav2CSS = "
.nav-2{

    display: grid;
    grid-template-columns: 1fr 1fr;
    background-color: aliceblue;
    
    
}
.nav-2 h1{
    color: #1559a7;
    font-weight: 600;
    font-size: 250%;
    margin-left: 20px;
}
.nav-2 li{
    list-style: none;
}
.nav-2 a{
    text-decoration: none;
    font-size: 170%;
    color: #1559a7;
    font-weight: 600;

}
.nav2-center{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    margin-top: 5px;
}
";

$nav3HTML = '
<div class="nav-3">
    <nav>
        <ul class="nav3-center">
            <li><a href="">nav1</a></li>
            <li><a href="">nav2</a></li>
            <li><a href="">nav3</a></li>
            <li><a href="">nav4</a></li>
            <li><a href="">nav5</a></li>
        </ul>
    </nav>
    <div class="nav3-right">
        <a href="">button</a>
        <a href="">button</a>
    </div>
</div>


';

$nav3CSS = "
.nav-3{
    display: grid;
    grid-template-columns: 1fr 1fr;
    text-align: center;
    background-color: white;
    padding: 20px;
    
}
.nav-3 a {
    text-decoration: none;
}
.nav3-center{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    list-style: none;
}
.nav3-center a {
    font-size: 150%;
    color: firebrick;
    font-weight: 600;
    padding: 10px;
    
}
.nav3-center li{
    border-right: 1px solid black;
    
}

.nav3-right{
    text-align: right;
}
.nav3-right a{

    font-size: 150%;
    margin-right: 100px;
    margin-left: 50px;
    background-color: firebrick;
    padding: 10px;
    color: white;
    font-weight: 600;
    border-radius: 5%;
    
}
";

?>
<div class="titre">
    <h1>Navigons carmarades</h1>
</div>


<div class="nav-1">
    <h1>Mon logo</h1>
    <nav>
        <ul class="nav-center">
            <li><a href="">nav1</a></li>
            <li><a href="">nav2</a></li>
            <li><a href="">nav3</a></li>
            <li><a href="">nav4</a></li>
        </ul>
    </nav>
    <div class="nav-right">
        <a href="">button1</a>
        <a href="">button2</a>
    </div>
</div>


<div class="box2">
    <div class="nav1-center">
        <button id="nav1" class="button">code</button>
        <div class="pre-center">
            <pre id="pre1" class="d-none3">
         <code>
             <h3 class="pre-html">html</h3>
             <?= htmlentities($nav1HTML) ?>
             <h3 class="pre-css">css</h3>
             <?= htmlentities($nav1CSS) ?>
         </code>
     </pre>
        </div>
    </div>

</div>


<div class="nav-2">
    <h1>Mon logo</h1>
    <nav>
        <ul class="nav2-center">
            <li><a href="">nav1</a></li>
            <li><a href="">nav2</a></li>
            <li><a href="">nav3</a></li>
            <li><a href="">nav4</a></li>
            <li><a href="">nav5</a></li>
        </ul>
    </nav>
</div>


<div class="box2">
    <div class="nav1-center">
        <button id="nav2" class="button">code</button>
        <div class="pre-center">
            <pre id="pre2" class="d-none3">
         <code>
             <h3 class="pre-html">html</h3>
             <?= htmlentities($nav2HTML) ?>
             <h3 class="pre-css">css</h3>
             <?= htmlentities($nav2CSS) ?>
         </code>
     </pre>
        </div>
    </div>

</div>


<div class="nav-3">
    <nav>
        <ul class="nav3-center">
            <li><a href="">nav1</a></li>
            <li><a href="">nav2</a></li>
            <li><a href="">nav3</a></li>
            <li><a href="">nav4</a></li>
            <li><a href="">nav5</a></li>
        </ul>
    </nav>
    <div class="nav3-right">
        <a href="">button</a>
        <a href="">button</a>
    </div>
</div>

<div class="box2">
    <div class="nav1-center">
        <button id="nav3" class="button">code</button>
        <div class="pre-center">
            <pre id="pre3" class="d-none3">
         <code>
             <h3 class="pre-html">html</h3>
             <?= htmlentities($nav3HTML) ?>
             <h3 class="pre-css">css</h3>
             <?= htmlentities($nav3CSS) ?>
         </code>
     </pre>
        </div>
    </div>

</div>






<script src="./nav.js"></script>