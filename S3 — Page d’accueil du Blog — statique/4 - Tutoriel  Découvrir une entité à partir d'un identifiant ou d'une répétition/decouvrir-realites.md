# Find Hidden Things in Data

## What is this lesson about?

You have a table. Rows and columns.

But inside the table, there are **hidden real things**. Like: author. Like: city. Like: category.

This lesson teaches you: **how to find these hidden things in the data.**

## Why do we need this?

A database is **not** one big table.

A database is many **small tables**. Each small table is one "thing".

If you do not find the things first, you cannot build tables. You cannot write SQL.

So the order is:

1. **Find the things** <- this lesson
2. Make tables
3. Write SQL

Without step 1, step 2 and 3 are broken.

## The problem

Look at the city column. "Tangier" is in 3 lines.

If you want to change "Tangier" later, you must change it in **3 places**. Maybe you forget one. Then data is wrong.

**The fix:** make "City" its own thing. Give it an ID. Then change the name in **one place**. No mistakes.

But this lesson says: **do not do the fix now.** Only **find** the thing first.

## Two ways to find a hidden thing

### Way 1: Find a unique ID

Look at email. Each author has one email. No two authors share an email.

So email is special. It points to **one** author.

Email is the ID of "Author".

**Rule:** if a value is unique, it is an ID. An ID points to a real thing.

### Way 2: Find a repeat

Look at city. "Tangier" appears many times.

A repeat is a **sign**. It says: "City is a real thing. Not just text."

City name is not safe as ID. So we **make a new ID**: `city_id`.

**Rule:** if a value repeats, that value hides a real thing. Make a new ID for it.

## The message

> **Before you build a database, find the real things hiding in your data.**

Two tools:

1. **Unique ID** -> points to a thing
2. **Repeated value** -> hides a thing

## What we did in the exercise

We looked at 3 columns. We found 3 things:

| Column | What we saw | What it means | New ID |
|---|---|---|---|
| author | email is unique | this is **Author** | email (already unique) |
| city | "Tangier" repeats | this is **City** | city_id (new) |
| category | "Development" repeats | this is **Category** | category_id (new) |

We did **not** build tables. We did **not** draw links. We did **not** write SQL.

We only **found the things**. That is the whole job here.

## The benefit

After this lesson, you can look at any flat table and **see the hidden things inside it**. This is the first skill of database design.