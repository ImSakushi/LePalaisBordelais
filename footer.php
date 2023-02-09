<?php



?>

<body>
    <div class = footer >
        <hr>
        <div class="row">
            <div class="align-item center">
                <h3 class="element element3">Le Palais Bordelais</h3>
            </div>
        </div>
        
        <div class="container text-center">
        
            <div class="row align-item center">
                    
                <div class="col">
                    <div class="container text-center">
                        <div class="margefooter">
                        <div class="row align-item center">

                            <div class="col">
                                <a href="contact.php">Contact</a>
                            </div>

                            <div class="col">
                                <a href="views/backend/login.php">Connexion</a>
                            </div>

                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container text-center">
                        <div class="margefooter">
                            <div class="row align-item center">
                                <div class="col">
                                    <a href="index.php">Blog</a>
                                </div>
                                <div class="col">
                                    <a href="mentionslegales.php">Mentions Légales</a>
                                </div> 
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>

        <div class = date > 
            <p>©2023</p>
            <p> <?php if(isset($_SESSION['username'])) {
                $user = $_SESSION['username'];
                echo "$user, vous êtes connecté";
                }?></p>
        </div>
        <hr>
    </div>


</body>

<style>
.textefooter {
    color: black;
    text-decoration: none;
}

.textefooter:hover {
    color: #5C1919;
    text-decoration: underline;
}


.footer{
    background-color:#F2F2F2 ;
}

.footer h3 {
    
    font-family: 'Alice';
    font-weight:400;
    text-align: center;
}

.date {
    text-align: center;
    font-family: 'roboto';
    font-size: small;
}

.footer hr {
    padding-bottom: 50px;
    padding-left: 50px;
    padding-right: 50px;

}



.footer a {
    color :black;
    text-decoration:none;
}

.margefooter{
    margin-left: 10%;
    margin-right: 10%;
}

</style>