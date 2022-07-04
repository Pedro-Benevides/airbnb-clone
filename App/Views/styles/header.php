:root {
  --color-1: #07363f;
  --color-2: #26272b;
  --color-3: #111;
  --color-4: #4caf50;
  --color-5: #bbb;
  --color-6: #333;
  --color-7: #737373;
  --color-8: #3366cc;
  --color-9: #f5fffa;
  --color-10: #fff;
}
* {
  box-sizing: border-box;
}

.flex-nav {
  font-family: "Nexa", sans-serif;
  margin: 0;
  padding: 0;
  color: var(--color-1);
  line-height: 1.6;
}

/*
  Header Css Styler
*/

#highlight {
  color: white;
  font-size: 1.125rem;
  text-transform: uppercase;
}

/*
  LOGO Css Styler

*/
nav ul {
  padding: 0;
  margin: 0;
  list-style: none;
}
nav ul li {
  margin: 0 1.75rem 0 0;
}

nav a {
  color: white;
  text-decoration: none;
  transition: all 0.2s ease;
}
nav a:hover {
  color: blue;
}
nav a.active {
  color: #333;
}

nav {
  background: #26272b;
  display: block;
}
nav li {
  font-size: 1.125rem;
  margin: 0;
}
.flex-nav nav {
  background-color: #26272b;
}
.flex-nav ul {
  position: absolute;
  z-index: 1;
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  display: none;
  width: 100%;
  left: 0;
  padding: 1rem;
  background: #26272b;
  text-align: center;
}
.flex-nav ul.active {
  display: flex;
}
.flex-nav ul li {
  margin: 0.5rem 0;
}

.toggle-nav {
  display: flex;
  justify-content: flex-end;
  font-size: 1.125rem;
  line-height: 1.7;
  margin: 1rem 0;
}
.toggle-nav i {
  font-size: 1.5rem;
  line-height: 1.4;
  margin: 0 0 0 0.5rem;
}

.grid > [class*="column-"] {
  padding: 1rem;
}
.grid.menu,
.grid.product {
  border-bottom: 0.0625rem solid #26272b;
}
.grid.menu > [class*="column-"] {
  padding: 0.5rem 1rem 0.5rem 1rem;
}
.grid.product {
  padding: 0 0 1.5rem 0;
}
.grid.second-nav > [class*="column-"] {
  padding: 0.5rem 1rem;
}
nav ul {
  justify-content: flex-end;
}

.toggle-nav {
  display: none;
}

.flex-nav {
  display: block;
}
.flex-nav ul {
  display: flex;
  flex-direction: row;
  position: relative;
  justify-content: flex-end;
}
.flex-nav ul li {
  font-size: 1.125rem;
  margin: 0 1.5rem 0 0;
}
.flex-nav ul li:nth-child(4) {
  margin: 0;
}

@-webkit-keyframes fadeImg {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@keyframes fadeImg {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

/* Nav Css Styler - Espaçmento  */

.column-xs-4 {
  flex-basis: 33.3333333333%;
  max-width: 33.3333333333%;
}

.column-xs-6 {
  flex-basis: 50%;
  max-width: 50%;
}

.column-xs-8 {
  flex-basis: 66.6666666667%;
  max-width: 66.6666666667%;
}

@media (min-width: 62rem) {
  .column-md-4 {
    flex-basis: 33.3333333333%;
    max-width: 33.3333333333%;
  }

  .column-md-6 {
    flex-basis: 50%;
    max-width: 50%;
  }

  .column-md-8 {
    flex-basis: 66.6666666667%;
    max-width: 66.6666666667%;
  }
}

@supports (display: grid) {
  .grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-template-rows: auto;
  }
  .grid > [class*="column-"] {
    margin: 0;
    max-width: 100%;
  }

  .column-xs-4 {
    grid-column-start: span 4;
    grid-column-end: span 4;
  }
  .column-xs-6 {
    grid-column-start: span 6;
    grid-column-end: span 6;
  }

  .column-xs-8 {
    grid-column-start: span 8;
    grid-column-end: span 8;
  }
}

@media (min-width: 62rem) {
  .column-md-4 {
    grid-column-start: span 4;
    grid-column-end: span 4;
  }

  .column-md-6 {
    grid-column-start: span 6;
    grid-column-end: span 6;
  }

  .column-md-8 {
    grid-column-start: span 8;
    grid-column-end: span 8;
  }
}
