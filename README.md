### WEBAP Pokémon — 1TPIF Web Applications Exercises

These exercises are part of the WEBAP1 and WEBAP2 courses for 1TPIF classes. The goal is to learn and practice jQuery, AJAX, handling JSON, calling public APIs, and building asynchronous features step-by-step.

Repository: [schto173/WEBAP_Pokemon](https://github.com/schto173/WEBAP_Pokemon)

#### Structure at a glance
- `1-JQuery/base` — jQuery fundamentals and DOM manipulation
- `2-Ajax/base` — AJAX calls and JSON handling
- `3.1-AsyncPhp/base` — Async server-side patterns with PHP as a simple backend
- `3.2-TeamAddon/base` — Team feature/add-on (integrates previous learnings)

Each folder contains a “base” you must copy and then implement until each file’s conditions are satisfied.

---

### How to use this repo

1. Clone the repository
   ```bash
   git clone https://github.com/schto173/WEBAP_Pokemon.git
   cd WEBAP_Pokemon
   ```

2. For each chapter, copy the `base` folder to your own working folder (do not modify the original base directly):
   - Example:
     - Copy `1-JQuery/base` to `1-JQuery/yourname` (or similar)
     - Work only in your copy

3. Read the comments inside the files
   - The detailed instructions, conditions, and acceptance criteria are written as comments in the files themselves.
   - Follow them in order. Most tasks are incremental.

4. Develop until “conditions are satisfied”
   - Each file includes conditions/checklists in comments. Implement your code to meet those conditions.
   - You’ll typically need to:
     - Select and manipulate DOM elements (jQuery)
     - Fetch data from APIs using AJAX
     - Parse and render JSON responses
     - Handle errors and loading states
     - Wire simple PHP endpoints for async flows (in 3.1)
     - Coordinate a small team feature (in 3.2)

5. Test locally
   - For pure HTML/JS/jQuery: you can open the HTML files in a browser or serve with a simple dev server.
   - For PHP parts (3.1+): run a local PHP server in that folder:
     ```bash
     php -S localhost:8000
     ```
     Then visit `http://localhost:8000`.

6. Keep code readable
   - Use clear variable names, small functions, and comments where needed.
   - Validate inputs and handle edge cases (empty results, network failures, invalid API responses).

---

### Learning objectives

- jQuery essentials
  - Selectors, events, DOM updates, class toggling
  - Progressive enhancement and unobtrusive JS
- AJAX + JSON
  - `$.ajax`, `$.getJSON`, `fetch`
  - Handling success/error/loading states
  - Rendering dynamic lists/cards/tables from JSON
- Consuming public APIs
  - Building query URLs
  - Understanding API docs, response shapes, pagination, limits
- Async patterns
  - Debouncing user input
  - Chaining requests, handling race conditions
  - Graceful error handling and retries
- PHP backend basics (for async exercises)
  - Simple endpoints
  - Returning JSON and correct headers
  - Basic input validation
- Team extension
  - Integrating features collaboratively
  - Basic modularization and code organization

---

### What each chapter typically covers

#### 1 — jQuery (folder: `1-JQuery/base`)
- Get familiar with the DOM via jQuery.
- Implement interactions: click/keyup handlers, show/hide, add/remove classes.
- Render static data to dynamic HTML.
- All task details/conditions: in comments within the HTML/JS files.

How to run:
- Open the HTML file in your browser or use a simple HTTP server.
- No backend required in this chapter.

Deliverable:
- A working interactive page where the specified UI behaviors match the comments’ conditions.

---

#### 2 — AJAX & JSON (folder: `2-Ajax/base`)
- Fetch JSON from a public API (e.g., Pokémon endpoints) using AJAX (`$.ajax`/`fetch`).
- Parse and display results (lists, details, images if provided).
- Show loading states and handle failures (network or API errors).
- Optional: search/filter, pagination, or “load more” behavior based on instructions.

How to run:
- Serve the folder with a local web server to avoid CORS/file URL issues. For example:
  ```bash
  python3 -m http.server 8080
  ```
  Then open `http://localhost:8080`.

Deliverable:
- A page that fetches and renders API data, meeting all conditions in the comments.

---

#### 3.1 — Async with PHP (folder: `3.1-AsyncPhp/base`)
- Add a simple PHP backend to simulate or proxy API calls.
- Return JSON with proper headers (`Content-Type: application/json`).
- Handle query params, validate input, and respond with meaningful status codes on error.
- Frontend still uses AJAX to call your PHP endpoints.

How to run:
- From this folder:
  ```bash
  php -S localhost:8000
  ```
- Open `http://localhost:8000` and follow the in-file instructions.

Deliverable:
- Frontend and PHP endpoint working together. All acceptance criteria met (as described in-file comments).

---

#### 3.2 — Team Add-on (folder: `3.2-TeamAddon/base`)
- Build on previous exercises with a small feature that requires coordination.
- Typical tasks:
  - Split responsibilities (API, UI, state handling)
  - Integrate components cleanly
  - Keep code modular and readable
- Follow the specific feature requirements in the comments.

How to run:
- Same as 3.1 if PHP is used, otherwise a simple static server.

Deliverable:
- A cohesive add-on feature that integrates with prior parts and meets all listed conditions.

---

### Tips for success

- Read comments carefully — they are the source of truth for each task.
- Develop incrementally — pass one condition at a time.
- Keep UI feedback clear — spinners, disabled buttons, and error messages matter.
- Log thoughtfully — use `console.log` during development, then clean up.
- Handle edge cases — empty searches, missing images, slow responses.
- Respect API limits — implement basic throttling/debouncing if required.

---

### Common commands

- Start a local PHP server:
  ```bash
  php -S localhost:8000
  ```
- Start a simple static server (Python 3):
  ```bash
  python3 -m http.server 8080
  ```

---

### Licensing

This repository is released under the MIT License. See [LICENSE](https://github.com/schto173/WEBAP_Pokemon/blob/main/LICENSE).