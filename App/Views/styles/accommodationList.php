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

.search {
  box-shadow: 0 20px 10px -10px rgba(200, 200, 200, 0.5);
  display: inline-block;
  margin-top: 2px;
  margin-left: 200px;
  width: 900px;
}

.search__input {
  position: relative;
  border: ;
  outline: 0;
  line-height: 50px;
  font-size: 14px;
  padding: 5px;
  top: 20%;
  /* float: left; */
  width: 250px;
  background: #26272b;
  color: #e3dddd;
}

.search__button {
  float: right;
  border-top: 40px;
  color: #07363f;
  background-color: white;
  width: 90px;
  line-height: 50px;
  text-align: center;
  border: 5;
  padding: 0;
  cursor: pointer;
  outline: 0;
  transition: box-shadow 0.3s ease-out;
  font-size: 18px;
}
.search__button:active {
  box-shadow: -10px 0 10px -10px rgba(90, 238, 209, 0.5);
}

/* 
  List Css Styler 
*/
* {
  box-sizing: border-box;
}

.vitrine {
  display: block;
  margin: 50px auto;
  max-width: 1300px;
  text-align: center;
  width: 100%;
}

.title h2 {
  font-size: 14;
}
.product-list {
  align-items: center;
  display: flex;
  justify-content: center;
  margin: 0 auto;
  max-width: 1300px;
  width: 100%;
}
@media (max-width: 991px) {
  .product-list {
    flex-wrap: wrap;
  }
}

.product-item {
  border: 1px solid #e1e1e1;
  cursor: pointer;
  margin: 15px 5px;
  max-width: 330px;
  transition: 0.2s;
  width: 100%;
}
.product-item .product-link {
  color: #555;
  text-decoration: none;
}
.product-item .product-info {
  margin: 0;
  padding: 0;
  position: relative;
  width: 100%;
}
.product-item .product-info .tag-procent {
  background: #f00;
  color: #fff;
  font-size: 12px;
  font-weight: bold;
  padding: 5px 10px;
  position: absolute;
  right: 10px;
  top: 10px;
}
.product-item .product-info-img {
  border-bottom: 1px solid #e1e1e1;
  height: 180px;
  width: 100%;
  align-items: center;
  display: flex;
  justify-content: center;
}
.product-item .product-info-img img {
  max-width: 300px;
}
.product-item .product-info-description {
  padding: 15px;
}
.product-item .product-info-description .title {
  font-size: 19px;
  margin: 0;
  padding: 0;
}
.product-item .product-info-description .description {
  height: 120px;
  margin: 1px 0;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2;
  display: -webkit-box;
  overflow: hidden;
}
.product-item .price-box {
  align-items: center;
  border-top: 1px solid #e1e1e1;
  display: flex;
  justify-content: space-between;
  padding: 15px;
}
.product-item .price del {
  color: #ccc;
  font-size: 14px;
  margin-right: 10px;
}
.product-item .price ins {
  color: #4d61fc;
  font-size: 18px;
  font-weight: bold;
  text-decoration: none;
}
.product-item .price .price-info {
  color: #4d61fc;
  display: block;
  font-weight: bold;
  margin-top: 5px;
}
.product-item .star-ranking {
  display: flex;
  margin-top: 10px;
}
.product-item .star-ranking img {
  max-width: 15px;
}
.product-item .star-ranking .qtd-votes {
  color: #555;
  font-size: 12px;
  margin-left: 10px;
}
.product-item:hover {
  transform: translateY(-2px);
  box-shadow: -2px 48px 56px -41px rgba(0, 0, 0, 0.37);
}

.btn-buy {
  background: #4d61fc;
  border: 0;
  color: #fff;
  cursor: pointer;
  padding: 10px 15px;
  text-decoration: none;
  transition: 0.2s;
}
.btn-buy .fas {
  margin-left: 3px;
}
.btn-buy:hover {
  background: #0c1979;
}

.d-block {
  display: block;
}

/*
  Nav Css Styler 
*/

/* barra de pesquisa */

/* barra de pesquisa */
@import url("https://fonts.googleapis.com/css?family=Pontano+Sans");

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

  /* Nav Css Styler - Espaçmento  */

  * {
    box-sizing: border-box;
  }
  *::before,
  *::after {
    box-sizing: border-box;
  }

  body {
    font-family: "Pontano Sans", sans-serif;
    font-size: 1.125rem;
    line-height: 1.5;
    margin: 0;
    padding: 0;
    color: #888;
    background: #fff;
    text-rendering: optimizeLegibility;
  }

  ul {
    padding: 0;
    margin: 0;
    list-style: none;
  }
  ul li {
    margin: 0 1.75rem 0 0;
  }

  a {
    color: white;
    text-decoration: none;
    transition: all 0.2s ease;
  }
  a:hover {
    color: blue;
  }
  a.active {
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

  #highlight {
    color: white;
    font-size: 1.125rem;
    text-transform: uppercase;
  }

  .price {
    margin: 0;
  }

  .breadcrumb-list {
    display: flex;
    flex-wrap: wrap;
    padding: 0;
    margin: 1rem 0 0 0;
    list-style: none;
  }
  .breadcrumb-list li {
    font-size: 0.85rem;
    letter-spacing: 0.125rem;
    text-transform: uppercase;
  }

  .breadcrumb-item.active {
    color: #333;
  }
  .breadcrumb-item + .breadcrumb-item::before {
    content: "/";
    display: inline-block;
    padding: 0 0.5rem;
    color: #d5d5d5;
  }

  .description {
    border-top: 0.0625rem solid #e3dddd;
    margin: 2rem 0;
    padding: 1rem 0 0 0;
  }

  .add-to-cart {
    position: relative;
    display: inline-block;
    background: #3e3e3f;
    color: #fff;
    border: none;
    border-radius: 0;
    padding: 1.25rem 2.5rem;
    font-size: 1rem;
    text-transform: uppercase;
    cursor: pointer;
    transform: translateZ(0);
    transition: color 0.3s ease;
    letter-spacing: 0.0625rem;
  }
  .add-to-cart:hover::before {
    transform: scaleX(1);
  }
  .add-to-cart::before {
    position: absolute;
    content: "";
    z-index: -1;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: #565657;
    transform: scaleX(0);
    transform-origin: 0 50%;
    transition: transform 0.3s ease-out;
  }

  .container {
    margin: auto;
    padding: 0 1rem;
    max-width: 75rem;
    width: 100%;
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

/*
  Footer Css Styler
*/

#section-footer {
  background-color: var(--color-2);
  color: white;
}

.site-footer h1 {
  font-size: 2rem;
  font-size: clamp(2rem, 1.2rem + 2.66vw, 4rem);
  margin: 0.3em 0 0.1em 0;
}

.site-footer h2 {
  font-size: 1.5rem;
  font-size: clamp(1.5rem, 1.1rem + 1.33vw, 2.5rem);
  margin: 0.3em 0 0.1em 0;
}

.site-footer h5 {
  font-family: "Nexa", sans-serif;
  font-size: 14px;
  padding: 10px;
}

.site-footer h4 {
  font-family: "Nexa", sans-serif;
  font-size: 18px;
  padding: 10px;
}

.site-footer p {
  font-family: "Nexa", sans-serif;
  padding: 10px;
  max-width: 900px;
}

.site-footer section {
  padding: 30px;
}

.site-footer ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: var(--color-2);
  border: 0px solid grey;
}

.site-footer li {
  float: left;
}

.site-footer li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-family: "Nexa", sans-serif;
  border: 0px solid grey;
}

.site-footer li a:hover:not(.active) {
  background-color: var(--color-3);
}

.active {
  background-color: var(--color-4);
}

.site-footer hr {
  border-top-color: var(--color-5);
  opacity: 0.5;
}
.site-footer hr.small {
  margin: 20px 0;
}

* {
  box-sizing: border-box;
}

.container-footer {
  width: 90%;
  max-width: 1440px;
  margin: auto;
}

.container-footer ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: var(--color-6);
  border: 0px solid grey;
}

.footer-links {
  padding-left: 0;
  list-style: none;
}
.footer-links li {
  display: block;
}
.footer-links a {
  color: var(--color-7);
}
.footer-links a:active,
.footer-links a:focus,
.footer-links a:hover {
  color: var(--color-8);
  text-decoration: none;
}
.footer-links.inline li {
  display: inline-block;
}

.footer-nav {
  padding-left: 0;
  list-style: none;
}
.footer-nav li {
  display: block;
}
.footer-nav a {
  color: var(--color-9);
}
.footer-nav a:active,
.footer-nav a:focus,
.footer-nav a:hover {
  color: var(--color-8);
  text-decoration: none;
}
.footer-nav.inline li {
  display: inline-block;
}



/* <select> styles */
.container-search select {
  /* Reset */
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  border: 0;
  outline: 0;
  font: inherit;
  /* Personalize */
  width: 12em;
  height: 3em;
  padding: 0 4em 0 1em;
  background: url(https://upload.wikimedia.org/wikipedia/commons/9/9d/Caret_down_font_awesome_whitevariation.svg) no-repeat right 0.8em center/1.4em, linear-gradient(to left, rgba(255, 255, 255, 0.3) 3em, rgba(255, 255, 255, 0.2) 3em);
  color: black;
  border-radius: 0.25em;
  box-shadow: 0 0 1em 0 rgba(0, 0, 0, 0.2);
  cursor: pointer;
  margin-right: 5px;
  margin-left: 65px;
  margin-top: 2px;
  /* <option> colors */
  /* Remove focus outline */
  /* Remove IE arrow */
}
.container-search select option {
  color: inherit;
  background-color: #F5F5F5;
}
.container-search select:focus {
  outline: none;
}
.container-search select::-ms-expand {
  display: none;
}

.container-search {
  margin-top: 10px;
  width: 100%;
  
  background-color: #26272b;
  padding: 10px 10px 10px 10px;

}


.container-search button{
  /* Reset */
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  border: 0;
  outline: 0;
  font: inherit;
  /* Personalize */
  width: 12em;
  height: 3em;
  padding: 0 0em 0 0em;
  background-color: white;
  color: black;
  border-radius: 0.25em;
  box-shadow: 0 0 1em 0 rgba(0, 0, 0, 0.2);
  cursor: pointer;
  margin-right: 5px;
  margin-left: 65px;
  margin-top: 2px;
  /* <option> colors */
  /* Remove focus outline */
  /* Remove IE arrow */
}
