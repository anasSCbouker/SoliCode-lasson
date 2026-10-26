# Build Entities from Data

## 1. Data table

| last_name | first_name | email | city | category |
| :--- | :--- | :--- | :--- | :--- |
| Madani | Ali | madani@mail.com | Tangier | Development |
| Amrani | Sara | sara@mail.com | Tangier | Development |
| Youssef | Karim | youssef@mail.com | Rabat | News |
| Idrissi | Amine | amine@mail.com | Tangier | Development |
| Alaoui | Nadia | nadia@mail.com | Rabat | News |

---

## 2. Values that repeat

- **city:**
  - Tangier appears 3 times.
  - Rabat appears 2 times.

- **category:**
  - Development appears 3 times.
  - News appears 2 times.

- **last_name, first_name, email:**
  - No values repeat in this table.

---

## 3. One repeat and one problem

I choose **Tangier** in the city column.

- Tangier appears in 3 rows.
- If I change the city name, I must change it in 3 places.
- I can forget one row. Then the data is not the same.

**This is a problem.**

---

## 4. Create new entities

- I create a **CITY** entity for city names.
- I create a **CATEGORY** entity for category names.
- Each city and category has its own ID.
- I use IDs instead of repeated names.

---

## 5. Final entities

### `ARTICLE`
- `id_article`
- `titre_article`
- `contenu_article`
- `date_publication`
- `statut_article`
- `image_article`
- `id_auteur`
- `id_categorie`

### `AUTHOR`
- `id_auteur`
- `nom_auteur`
- `prenom_auteur`
- `email_auteur`
- `id_ville`

### `CITY`
- `id_ville`
- `nom_ville`

### `CATEGORY`
- `id_categorie`
- `nom_categorie`
- `description_categorie`

---

## 6. Why this model works

- Each entity has its own ID.
- Each ID identifies one item.
- Each entity stores its own data.
- **CITY** stores each city once.
- **CATEGORY** stores each category once.
- **ARTICLE** uses IDs to find its author and category.
- **AUTHOR** uses an ID to find the city.
- IDs link the entities.
- This model avoids repeated data.
- It also avoids update problems.