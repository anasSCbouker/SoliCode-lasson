
# Blog Relationships and Cardinalities

| Entity A | Cardinality A | Relationship | Cardinality B | Entity B | Simple rule |
|---|---|---|---|---|---|
| CITY | (1,N) | lives in | (1,1) | AUTHOR | A city has one or more authors. Each author lives in one city. |
| AUTHOR | (1,N) | writes | (1,1) | ARTICLE | An author writes one or more articles. Each article has one author. |
| CATEGORY | (1,N) | contains | (1,1) | ARTICLE | A category has one or more articles. Each article has one category. |
| ARTICLE | (0,N) | has | (0,N) | TAG | An article can have many tags or no tags. A tag can be used in many articles or none. |

## What the numbers mean

- **(1,1)**: Exactly one.
- **(1,N)**: One or more.
- **(0,N)**: Zero or more.

**Note:** This exercise assumes every category has at least one article. It also uses TAG as a fifth entity.
