# The Developer's Local Routine (Terminal)

## Goal
Learn the basic Git commands to save your work locally:
`git status`, `git add`, `git commit`.

## The work cycle
Every time you change a file, do this:

1. Change your file
2. `git status` – check what changed
3. `git add` – prepare the change
4. `git commit` – save it officially
5. `git status` – check that everything is clean

## The 3 commands

| Command | Simple meaning |
|---|---|
| `git status` | Shows the state of your files (red = changed, green = ready) |
| `git add <file>` | Moves a file to the Staging Area (waiting room) |
| `git commit -m "..."` | Saves the Staging Area in the history with a message |

## Example: step by step

### 1. Change a file
Open `index.html` and add a line:
```html
<p>Welcome to my first blog.</p>