# Many-to-Many: Wrong Way vs Correct Way

## 1. The Problem: Many-to-Many

- One order has many products.
- One product is in many orders.

This is a "Many-to-Many" link.

## 2. The WRONG Way (Look at the Red X)

### Wrong Example Table
| client_name | order_date | product_name | quantity_ordered |
|---|---|---|---|
| Ali | 2026-10-26 | PHP Book | 2 |
| Ali | 2026-10-26 | Java Book | 1 |
| Sara | 2026-10-27 | PHP Book | 3 |

### Why is this WRONG?
1. **Too much repeat:** We write "Ali" two times. We write "PHP Book" two times. This is a waste of space.
2. **Change problem:** If Ali changes his name, we must change it in many lines.
3. **No clear ID:** What is the ID of this table? No single column is unique.

### Another Wrong Example (The Handwritten Picture)
| Order ID | Product Name | Client Name |
|---|---|---|
| 101 | PHP | Ali |
| 101 | Java | Ali |
| 102 | PHP | Sara |

**Why is this WRONG?**
Look at Order 101. It has two products. The Order ID "101" is repeated. The Client Name "Ali" is repeated.
You cannot say "Order 101 has one product". It has many.
This table is messy. (Red X).

---

## 3. The CORRECT Way (Look at the Green Tables)

We must split the data into **4 clean tables**.
We make a "Bridge Table" to connect Order and Product.

### Table 1: CLIENT
| client_id | client_name |
|---|---|
| 1 | Ali |
| 2 | Sara |

### Table 2: PRODUCT
| product_id | product_name |
|---|---|
| 10 | PHP Book |
| 20 | Java Book |

### Table 3: ORDER
| order_id | order_date | client_id |
|---|---|---|
| 101 | 2026-10-26 | 1 |
| 102 | 2026-10-27 | 2 |

**Note:** `client_id` is here. It is a Foreign Key. It points to CLIENT.

### Table 4: ORDER_LINE (The Bridge Table - NEW_TABLE)
| order_id | product_id | quantity_ordered |
|---|---|---|
| 101 | 10 | 2 |
| 101 | 20 | 1 |
| 102 | 10 | 3 |

---

## 4. Why is the Correct Way GOOD?

1. **No repeat:** "Ali" is written only one time (in CLIENT). "PHP Book" is written only one time (in PRODUCT).
2. **Easy to change:** If Ali changes his name, we change it in 1 place only.
3. **Clear Composite ID:** In `ORDER_LINE`, the ID is `order_id` + `product_id` together.
   - Order 101 + Product 10 = unique.
   - Order 101 + Product 20 = unique.
   - Order 102 + Product 10 = unique.
4. **Quantity is in the right place:** `quantity_ordered` is only in `ORDER_LINE`. It depends on BOTH the order and the product.

## 5. The Message

> Do not put everything in one table. (Wrong).
> Make small tables. (Correct).
> If two tables are Many-to-Many, make a third table in the middle. (Correct).
> The middle table takes the IDs from both sides.