# Look at Data and Find Repeats

## Data table

| last_name | first_name | email | city | category |
|---|---|---|---|---|
| Madani | Ali | madani@mail.com | Tangier | Development |
| Sara | Amrani | sara@mail.com | Tangier | Development |
| Youssef | Karim | youssef@mail.com | Rabat | News |
| Amine | Idrissi | amine@mail.com | Tangier | Development |
| Nadia | Alaoui | nadia@mail.com | Rabat | News |

## 1. All values in each column

- **last_name**: Madani, Sara, Youssef, Amine, Nadia
- **first_name**: Ali, Amrani, Karim, Idrissi, Alaoui
- **email**: madani@mail.com, sara@mail.com, youssef@mail.com, amine@mail.com, nadia@mail.com
- **city**: Tangier, Rabat
- **category**: Development, News

## 2. Values that repeat

- **city**:
  - "Tangier" is in 3 lines.
  - "Rabat" is in 2 lines.

- **category**:
  - "Development" is in 3 lines.
  - "News" is in 2 lines.

- **last_name**, **first_name**, **email**: no value repeats in this table.

## 3. One repeat and one problem

I choose **"Tangier"** in the **city** column.

"Tangier" is in 3 lines.

If I want to change "Tangier" later, I must change it by hand in 3 lines.

If the table is big, I can forget one line.

Then the data is not the same. This is a problem.
