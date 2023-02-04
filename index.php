<?php require_once 'header.php'; 
sql_connect();

// print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
?>
<div class="article-dispo">
        <div class="article1">
            <div class="card border-0" style="width: 29rem;">
                <div class="card-body">
                    <p class="card-date">30 février 2025</p>
                    <h5 class="card-title">La fin de Bordeaux S.O GOOD</h5>
                    <img src="source/images/festival.jpg" class="img-article" alt="Festival de Bordeaux S.O GOOD" style="width: 486.61px; height: 425.89px; object-fit: cover; object-position: 50% 0;">
                    <p class="card-text">Depuis 2014, Bordeaux S.O Good est un Festival célébrant la Gastronomie et l'Art de Vivre du Sud Ouest. Durant ce festival, le Sud Ouest et sa gastronomie sont sur le devant de la scène, il a été pensé comme...</p>
                    <a href="#" class="card-link">lire la suite</a>
                </div>
            </div>
        </div>
        <div class="article-dispo2">
            <div class="article2">
                <div class="card border-0" style="width: 28rem;">
                    <div class="card-body">
                        <p class="card-date">30 février 2025</p>
                        <h5 class="card-title">L'histoire de cannelés bordelais</h5>
                        <img src="source/images/cannele.webp" class="img-article" alt="Festival de Bordeaux S.O GOOD" style="width: 384.02px; height: 215.22px; object-fit: cover; object-position: 50% 0;">
                        <p class="card-text">Ces saveurs bien connus de Bordeaux, renferment des secrets bien cachés, dans cet article je montrerai...</p>
                        <a href="#" class="card-link">lire la suite</a>
                    </div>
                </div>
            </div>
            <div class="article3">
                <div class="card border-0" style="width: 28rem;">
                    <div class="card-body">
                        <p class="card-date">30 février 2025</p>
                        <h5 class="card-title">Les capucins : l’enfer</h5>
                        <img src="source/images/capucins.jpg" class="img-article" alt="Festival de Bordeaux S.O GOOD" style="width: 384.02px; height: 215.22px; object-fit: cover; object-position: 50% 0;">
                        <p class="card-text">Les capucins. Ce simple mot qui fait trembler les plus grands. Etchebest ou bien même Elon Musk...</p>
                        <a href="#" class="card-link">lire la suite</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-outline-light">Voir plus d'articles</button>

<?php require_once 'footer.php'; ?>

