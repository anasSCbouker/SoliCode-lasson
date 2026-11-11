<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Blog - Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="en-tete-site">
        <nav class="barre-navigation">
            <a href="index.php" class="logo">
                <span class="logo-sombre">My</span><span class="logo-couleur">Blog.</span>
            </a>
            <ul class="liens-navigation">
                <li><a href="index.php">Home</a></li>
                <li><a href="public-categorie.html">Categories</a></li>
                <li><a href="public-apropos.html">About</a></li>
            </ul>
            <a href="admin-login.html" class="bouton-principal">
                Admin Area
            </a>
        </nav>
    </header>
    <section class="banniere-accueil">
        <h1>
            My Personal Blog:<br>
            <span>Build &amp; Share</span>
        </h1>
        <p>
            Read articles about web development,
            software architecture, and UI/UX design.
        </p>
        <div class="actions-banniere">
            <a href="#articles" class="bouton-principal">Read articles</a>
            <a href="public-apropos.html" class="bouton-secondaire">About me</a>
        </div>
    </section>
    <section id="articles" class="section-articles">
        <div class="conteneur-articles">
            <section class="filtre-categories">
                <h2>Browse by topic</h2>
                <div class="liste-filtres">
                    <a href="index.php" class="pilule-filtre actif">All articles</a>
                    <a href="public-categorie.html" class="pilule-filtre">Development</a>
                    <a href="public-categorie.html" class="pilule-filtre">Design UI/UX</a>
                    <a href="public-categorie.html" class="pilule-filtre">Productivity</a>
                    <a href="public-categorie.html" class="pilule-filtre">Management</a>
                </div>
            </section>
            <div class="entete-liste-articles">
                <div>
                    <h2>Latest posts</h2>
                    <p>Recent articles from the community.</p>
                </div>
                <a href="public-categorie.html" class="lien-voir-tout">Browse all</a>
            </div>
            <div class="grille-articles">
                <?php foreach ($articles as $article): ?>
                    <div class="carte-article">
                        <a href="article.php?id=<?= (int) $article['id'] ?>" class="carte-image">
                            <img src="images/<?= htmlspecialchars($article['image'], ENT_QUOTES, 'UTF-8') ?>" alt="Article image">
                        </a>
                        <span class="etiquette-categorie <?= htmlspecialchars($article['category_color'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($article['category'], ENT_QUOTES, 'UTF-8') ?></span>
                        <div class="carte-contenu">
                            <h3><a href="article.php?id=<?= (int) $article['id'] ?>"><?= htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8') ?></a></h3>
                            <p><?= htmlspecialchars(substr($article['content'], 0, 100), ENT_QUOTES, 'UTF-8') ?>...</p>
                            <div class="carte-meta">
                                <span><?= htmlspecialchars(date('d M Y', strtotime($article['created_at'])), ENT_QUOTES, 'UTF-8') ?></span>
                                <span>5 min</span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <footer class="pied-de-page">
        <div class="conteneur-pied-de-page">
            <div class="colonne-pied-de-page">
                <h2>My Blog</h2>
                <p>Sharing web development tutorials and ideas.</p>
            </div>
            <div class="colonne-pied-de-page">
                <h2>Navigation</h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="public-categorie.html">Categories</a></li>
                    <li><a href="public-apropos.html">About</a></li>
                </ul>
            </div>
            <div class="colonne-pied-de-page">
                <h2>Contact</h2>
                <p>Read new articles every week.</p>
            </div>
        </div>
        <div class="bas-pied-de-page">
            <p>&copy; 2026 My Personal Blog.</p>
        </div>
    </footer>
</body>
</html>
