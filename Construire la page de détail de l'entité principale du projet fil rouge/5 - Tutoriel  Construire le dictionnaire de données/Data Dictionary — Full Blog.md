# Data Dictionary — Full Blog

| Data | Description | Example value | Type | Required | Calculated |
|---|---|---|---|---|---|
| titre_article | Title of the article | Comment bien débuter avec Tailwind CSS en 2026 ? | Text | Yes | No |
| contenu_article | Full text of the article | Découvrez les concepts fondamentaux de Tailwind CSS... | Text | Yes | No |
| date_publication | Day the article was published | 14 Fév 2026 | Date | Yes | No |
| duree_lecture | Reading time in minutes | 5 | Integer | No | Yes (rule: count words / 200) |
| nom_auteur | Last name of the author | Madani | Text | Yes | No |
| prenom_auteur | First name of the author | Ali | Text | Yes | No |
| email_auteur | Email of the author | madani@mail.com | Text | Yes | No |
| bio_auteur | Short text about the author | Passionné par le développement web | Text | No | No |
| nom_categorie | Name of the category | Développement | Text | Yes | No |
| nombre_articles | Number of articles in a category | 3 | Integer | No | Yes (rule: count articles of the category) |
| email_admin | Email of the admin | admin@monblog.com | Text | Yes | No |
| mot_de_passe_admin | Password of the admin | admin123 | Text | Yes | No |
