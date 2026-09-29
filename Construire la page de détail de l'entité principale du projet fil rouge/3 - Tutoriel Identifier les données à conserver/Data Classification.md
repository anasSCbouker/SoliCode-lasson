# Data Classification Table

---

## Filter and Classify Data

| Data | Situation in the application | Data Type |
|------|----------------------------|-----------|
| `titre_article` | The article is published and stored in database | **Stored** |
| `mot_cle` | User types "Tutoriel" in search bar | **Temporary** |
| `duree_lecture` | App counts words and deduces "5 min" | **Calculated** |
| `date_publication` | App remembers the day article was posted | **Stored** |
| `message_erreur` | Red text "Mot de passe incorrect" appears on screen | **Temporary** |

---

## Explanation

### Stored Data ( Persistante)
- **titre_article**: Must be saved in database. The article title needs to be remembered.
- **date_publication**: Must be saved in database. The publication date is important information.

### Calculated Data ( Calculée)
- **duree_lecture**: Can be calculated automatically. The app counts words and calculates reading time (example: 5 minutes).

### Temporary Data ( Temporaire)
- **mot_cle**: Only used in the interface. Search keyword disappears after search. Not stored in database.
- **message_erreur**: Only shown on screen. Error message is temporary UI feedback.

---
