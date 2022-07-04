:root {
  --color-1: #07363F;
  --color-2: #26272b;
  --color-3: #111;
  --color-4: #4CAF50;
  --color-5: #bbb;
  --color-6: #333;
  --color-7: #737373;
  --color-8: #3366cc;
  --color-9: #F5FFFA;
  --color-10: #fff;
}



body {
  font-family: 'Nexa', sans-serif;
  font-size: 1.125rem;
  line-height: 1.6;
  margin: 0;
  padding: 0;
  color: var(--color-1);
  background: #fff;
  text-rendering: optimizeLegibility;
}
 ul {
  padding: 0;
  margin: 0;
  list-style: none;
}
 ul li {
  margin: 0 1.50rem 0 0;
}
 h1, h2, h3{
  color: #333;
  font-weight: normal;
  margin: 1.75rem 0 1rem 0;
}
 h1 {
  font-size: 2.5rem;
}
 h2 {
  font-size: 2.125rem;
  margin: 0;
}
 h3 {
  font-size: 2rem;
}
 h4 {
  font-size: 1.5rem;
  margin: 1rem 0 0.5rem 0;
}
 section {
  display: block;
}
img {
  max-width: 100%;
  height: auto;
  -o-object-fit: cover;
     object-fit: cover;
}
nav li {
  font-size: 1.125rem;
  margin: 0;
}


/*
  Index - Carousel 
*/


.carousel {
    position: relative;
    box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
    margin-top: 10px;
}

.carousel-inner {
    position: relative;
    overflow: hidden;
    width: 100%;
}

.carousel-open:checked + .carousel-item {
    position: relative;
    opacity: 100;
}

.carousel-item {
    position: absolute;
    opacity: 0;
    -webkit-transition: opacity 0.6s ease-out;
    transition: opacity 0.6s ease-out;
}

.carousel-item img {
    display: block;
    height: auto;
    max-width: 100%;
}

.carousel-control {
    background: var(--color-10);
    border-radius: 30%;
    color: var(--color-2);
    cursor: pointer;
    display: none;
    font-size: 40px;
    height: 30px;
    line-height: 38px;
    position: absolute;
    top: 50%;
    -webkit-transform: translate(0, -50%);
    cursor: pointer;
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);
    text-align: center;
    width: 40px;
    z-index: 10;
}

.carousel-control.prev {
    left: 2%;
}

.carousel-control.next {
    right: 2%;
}

.carousel-control:hover {
    background: rgba(0, 0, 0, 0.8);
    color: fff;
}

#carousel-1:checked ~ .control-1,
#carousel-2:checked ~ .control-2,
#carousel-3:checked ~ .control-3 {
    display: block;
}

/*
  index - category 
*/

#category-text {
  background-color: var(--color-1);
  color: white;
  padding: 30px;
}

.category h1 {
  font-family: 'Nexa', sans-serif;
  font-size: 28px;
  margin: 0.3em 0 0.1em 0;
  color: white;
}

.category-buttons {
  width: 90%;
  max-width: 1440px;
  margin: auto;
}

.category-buttons p {
  font-family: 'Nexa', sans-serif;
  max-width: 900px;
}

/*
  index - category buttons
*/ 

 

.category-buttons button {
  background:  white;
  border: none;
  border-radius: 5px;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.5);
  color: black;
  font-family: 'Nexa', sans-serif;
  font-size: 20px;
  outline: none;
  padding: 15px;
  margin: 6px;
}


.animationButton16:hover, .animationButton16:focus, .animationButton16:active {
  animation: hover-wobble-horizontal 1s ease-in-out 1;
  cursor: pointer;
}

@keyframes hover-wobble-horizontal {
  20% {
    transform: translateX(8px);
  }
  40% {
    transform: translateX(-6px);
  }
  60% {
    transform: translateX(4px);
  }
  80% {
    transform: translateX(-2px);
  }
  100% {
    transform: translateX(0);
  }
}


/*
  Text Css Styler -- Profile 
*/


#section-profile {
  background-color: #07363F;
  color: white;
  padding: 4px;
  margin-top: 3px;
}

.profile h1 {
  font-family: 'Nexa', sans-serif;
  font-size: 20px;
  margin: 0.2em 0 0.1em 0;
  color: white;
}

.container-profile {
  width: 80%;
  max-width: 1440px;
  margin: auto;
}

.container-profile p {
  font-family: 'Nexa', sans-serif;
  font-size: 16px;
  max-width: 700px;
}

/*
  Text Css Styler -- Accommodation
*/


#section-accommodation {
  background-color: #26272b;
  color: white;
  padding: 4px;
  margin-top: 3px;
}

.accommodation h1 {
  font-family: 'Nexa', sans-serif;
  font-size: 20px;
  margin: 0.2em 0 0.1em 0;
  color: white;
}

.container-accommodation {
  width: 80%;
  max-width: 1440px;
  margin: auto;
}

/*
  user_accommodation card css styler 

*/

.card-user-accommodation  h2 {
  font-family: 'Nexa', sans-serif;
  font-size: 15px;
}

.card-user-accommodation p {
  font-family: 'Nexa', sans-serif;
  font-size: 15px;
}
.card-user-accommodation :hover {
  box-shadow: 0px 50px 75px -25px var(--color-2);
  top: -20px;
}
.card-user-accommodation :hover p {
  opacity: 1;
}

.card-user-accommodation:hover {
  box-shadow: 0px 50px 75px -25px var(--color-2);
  top: -20px;
}

.container-accommodation {
  width: 30%;
  max-width: 1440px;
  margin-left: 150px;
}

.card-user-accommodation-wrapper {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 30px;
  padding: 20px;

}

.card-user-accommodation {
  background: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 30px 50px -25px var(--color-2);
  position: relative;
  transition: all 0.3s ease;
  top: 0;
}

/*
  button delete user_accommodation
*/

.button-accommodation-delete {
  
   margin-top: 20px;
   width: 100%;
   background-color: #ffffff;
   color: #080710;
   padding: 15px 0;
   font-size: 18px;
   font-weight: 600;
   border-radius: 5px;
   cursor: pointer;
   text-transform: uppercase;
   letter-spacing: .1em;
   transition: all 0.5s ease;
  -webkit-appearance: none;
}

.button-accommodation-delete:hover, .button-accommodation-delete:focus {
  background: #FF0000;
}

.button-accommodation-delete-block {
  display: block;
  width: 100%;
}

/*
  text css styler -- user_location
*/


#section-location {
  background-color: #26272b;
  color: white;
  padding: 4px;
  margin-top: 3px;
}

.location h1 {
  font-family: 'Nexa', sans-serif;
  font-size: 20px;
  margin: 0.2em 0 0.1em 0;
  color: white;
}

.container-location {
  width: 80%;
  max-width: 1440px;
  margin: auto;
}



/*
  user_location card css styler 

*/

.card-user-location  h2 {
  font-family: 'Nexa', sans-serif;
  font-size: 15px;
}

.card-user-location p {
  font-family: 'Nexa', sans-serif;
  font-size: 15px;
}
.card-user-location :hover {
  box-shadow: 0px 50px 75px -25px var(--color-2);
  top: -20px;
}
.card-user-location :hover p {
  opacity: 1;
}

.card:hover {
  box-shadow: 0px 50px 75px -25px var(--color-2);
  top: -20px;
}

.container-location {
  width: 30%;
  max-width: 1440px;
  margin-left: 150px;
}

.card-user-location-wrapper {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 30px;
  padding: 20px;

}

.card-user-location {
  background: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 30px 50px -25px var(--color-2);
  position: relative;
  transition: all 0.3s ease;
  top: 0;
}

/*
  button checkin user_location
*/

.button-location-checkin {
  
   margin-top: 20px;
   width: 100%;
   background-color: #ffffff;
   color: #080710;
   padding: 15px 0;
   font-size: 18px;
   font-weight: 600;
   border-radius: 5px;
   cursor: pointer;
   text-transform: uppercase;
   letter-spacing: .1em;
   transition: all 0.5s ease;
  -webkit-appearance: none;
}

.button-location-checkin:hover, .button-location-checkin:focus {
  background: #FFF000;
}

.button-location-checkin-block {
  display: block;
  width: 100%;
}


/*
  button delete user_location
*/

.button-location-delete {
   
   margin-top: 20px;
   width: 100%;
   background-color: #ffffff;
   color: #080710;
   padding: 15px 0;
   font-size: 18px;
   font-weight: 600;
   border-radius: 5px;
   cursor: pointer;
   text-transform: uppercase;
   letter-spacing: .1em;
   transition: all 0.5s ease;
  -webkit-appearance: none;
}

.button-location-delete:hover, .button-location-delete:focus {
  background: #FF0000;
}

.button-location-delete-block {
  display: block;
  width: 100%;
}


/*
  text css styler user_card
*/


#section-card {
  background-color: #26272b;
  color: white;
  padding: 4px;
  margin-top: 3px;
}

.card h1 {
  font-family: 'Nexa', sans-serif;
  font-size: 20px;
  margin: 0.2em 0 0.1em 0;
  color: white;
}

.container-card {
  width: 80%;
  max-width: 1440px;
  margin: auto;
}


/*
  user_card card css styler 

*/

.card-user-card  h2 {
  font-family: 'Nexa', sans-serif;
  font-size: 15px;
}

.card-user-card p {
  font-family: 'Nexa', sans-serif;
  font-size: 15px;
}
.card-user-card :hover {
  box-shadow: 0px 50px 75px -25px var(--color-2);
  top: -20px;
}
.cardcard-user-card :hover p {
  opacity: 1;
}

.container-cards {
  width: 40%;
  max-width: 1440px;
  margin-left: 150px;
}

.card-user-card-wrapper {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 30px;
  padding: 20px;

}

.card-user-card {
  background: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 30px 50px -25px var(--color-2);
  position: relative;
  transition: all 0.3s ease;
  top: 0;
}


/*
  button new user_card
*/

.button-card-new {
   margin-top: 10px;
   width: 100%;
   background-color: #ffffff;
   color: #080710;
   padding: 10px 0;
   font-size: 12px;
   font-weight: 600;
   border-radius: 1px;
   cursor: pointer;
   text-transform: uppercase;
   letter-spacing: .1em;
   transition: all 0.5s ease;
  -webkit-appearance: none;
}

.button-card-new:hover, .button-card-new:focus {
  background: #32CD32;
}

.button-card-new-block {
  display: block;
  width:10%;
}

/*
  button delete user_card
*/

.button-card-delete {
   margin-top: 20px;
   width: 100%;
   background-color: #ffffff;
   color: #080710;
   padding: 15px 0;
   font-size: 18px;
   font-weight: 600;
   border-radius: 5px;
   cursor: pointer;
   text-transform: uppercase;
   letter-spacing: .1em;
   transition: all 0.5s ease;
  -webkit-appearance: none;
}

.button-card-delete:hover, .button-card-delete:focus {
  background: #FF0000;
}

.button-card-delete-block {
  display: block;
  width: 100%;
}


/*
  details
*/

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


.active {
    background-color: var(--color-4);
}



.container {
  margin: auto;
  padding: 0 1rem;
  max-width: 71.25rem;
  width: 100%;
}

.grid {
  display: flex;
  flex-direction: column;
  flex-flow: row wrap;
}
.grid > [class*=column-] {
  display: block;
}

.first {
  order: -1;
}

.last {
  order: 12;
}

.align-top {
  align-items: start;
}

.align-center {
  align-items: center;
}

.align-bottom {
  align-items: end;
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


.add-to-date{
  position: relative;
  display: inline-block;
  background: #F5F5F5;;
  color: black;
  border: none;
  border-radius: 0;
  padding: 0.5rem 0.5rem;
  font-size: 1rem;
  text-transform: uppercase;
  cursor: pointer;
  transform: translateZ(0);
  transition: color 0.3s ease;
  letter-spacing: 0.0625rem;

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

.grid > [class*=column-] {
  padding: 1rem;
}

.grid.menu > [class*=column-] {
  padding: 0.5rem 1rem 0.5rem 1rem;
}
.grid.product {
  padding: 0 0 1.5rem 0;
}
.grid.second-nav > [class*=column-] {
  padding: 0.5rem 1rem;
}


.product-image {
  display: none;
}

.image-list li {
  margin: 0;
}

@media (min-width: 62rem) {
  .product-image img, .image-list img {
    width: 100%;
  }

  .product-image {
    display: block;
  }
  .product-image img {
    height: 52vh;
  }
  .product-image img.active {
    display: block;
    margin: 0 0 0.75rem 0;
  }

  .image-list {
    display: flex;
    overflow: hidden;
  }
  .image-list li {
    margin: 0 0.75rem 0 0;
    flex-basis: 100%;
  }
  .image-list li:nth-child(3) {
    margin: 0;
  }
  .image-list img {
    height: 10rem;
    width: 100%;
    transition: opacity 0.3s ease;
    cursor: pointer;
  }
  .image-list img:hover {
    opacity: 0.7;
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

.column-xs-1 {
  flex-basis: 8.3333333333%;
  max-width: 8.3333333333%;
}

.column-xs-2 {
  flex-basis: 16.6666666667%;
  max-width: 16.6666666667%;
}

.column-xs-3 {
  flex-basis: 25%;
  max-width: 25%;
}

.column-xs-4 {
  flex-basis: 33.3333333333%;
  max-width: 33.3333333333%;
}

.column-xs-5 {
  flex-basis: 41.6666666667%;
  max-width: 41.6666666667%;
}

.column-xs-6 {
  flex-basis: 50%;
  max-width: 50%;
}

.column-xs-7 {
  flex-basis: 58.3333333333%;
  max-width: 58.3333333333%;
}

.column-xs-8 {
  flex-basis: 66.6666666667%;
  max-width: 66.6666666667%;
}

.column-xs-9 {
  flex-basis: 75%;
  max-width: 75%;
}

.column-xs-10 {
  flex-basis: 83.3333333333%;
  max-width: 83.3333333333%;
}

.column-xs-11 {
  flex-basis: 91.6666666667%;
  max-width: 91.6666666667%;
}

.column-xs-12 {
  flex-basis: 100%;
  max-width: 100%;
}

@media (min-width: 48rem) {
  .column-sm-1 {
    flex-basis: 8.3333333333%;
    max-width: 8.3333333333%;
  }

  .column-sm-2 {
    flex-basis: 16.6666666667%;
    max-width: 16.6666666667%;
  }

  .column-sm-3 {
    flex-basis: 25%;
    max-width: 25%;
  }

  .column-sm-4 {
    flex-basis: 33.3333333333%;
    max-width: 33.3333333333%;
  }

  .column-sm-5 {
    flex-basis: 41.6666666667%;
    max-width: 41.6666666667%;
  }

  .column-sm-6 {
    flex-basis: 50%;
    max-width: 50%;
  }

  .column-sm-7 {
    flex-basis: 58.3333333333%;
    max-width: 58.3333333333%;
  }

  .column-sm-8 {
    flex-basis: 66.6666666667%;
    max-width: 66.6666666667%;
  }

  .column-sm-9 {
    flex-basis: 75%;
    max-width: 75%;
  }

  .column-sm-10 {
    flex-basis: 83.3333333333%;
    max-width: 83.3333333333%;
  }

  .column-sm-11 {
    flex-basis: 91.6666666667%;
    max-width: 91.6666666667%;
  }

  .column-sm-12 {
    flex-basis: 100%;
    max-width: 100%;
  }
}
@media (min-width: 62rem) {
  .column-md-1 {
    flex-basis: 8.3333333333%;
    max-width: 8.3333333333%;
  }

  .column-md-2 {
    flex-basis: 16.6666666667%;
    max-width: 16.6666666667%;
  }

  .column-md-3 {
    flex-basis: 25%;
    max-width: 25%;
  }

  .column-md-4 {
    flex-basis: 33.3333333333%;
    max-width: 33.3333333333%;
  }

  .column-md-5 {
    flex-basis: 41.6666666667%;
    max-width: 41.6666666667%;
  }

  .column-md-6 {
    flex-basis: 50%;
    max-width: 50%;
  }

  .column-md-7 {
    flex-basis: 58.3333333333%;
    max-width: 58.3333333333%;
  }

  .column-md-8 {
    flex-basis: 66.6666666667%;
    max-width: 66.6666666667%;
  }

  .column-md-9 {
    flex-basis: 75%;
    max-width: 75%;
  }

  .column-md-10 {
    flex-basis: 83.3333333333%;
    max-width: 83.3333333333%;
  }

  .column-md-11 {
    flex-basis: 91.6666666667%;
    max-width: 91.6666666667%;
  }

  .column-md-12 {
    flex-basis: 100%;
    max-width: 100%;
  }
}
@media (min-width: 75rem) {
  .column-lg-1 {
    flex-basis: 8.3333333333%;
    max-width: 8.3333333333%;
  }

  .column-lg-2 {
    flex-basis: 16.6666666667%;
    max-width: 16.6666666667%;
  }

  .column-lg-3 {
    flex-basis: 25%;
    max-width: 25%;
  }

  .column-lg-4 {
    flex-basis: 33.3333333333%;
    max-width: 33.3333333333%;
  }

  .column-lg-5 {
    flex-basis: 41.6666666667%;
    max-width: 41.6666666667%;
  }

  .column-lg-6 {
    flex-basis: 50%;
    max-width: 50%;
  }

  .column-lg-7 {
    flex-basis: 58.3333333333%;
    max-width: 58.3333333333%;
  }

  .column-lg-8 {
    flex-basis: 66.6666666667%;
    max-width: 66.6666666667%;
  }

  .column-lg-9 {
    flex-basis: 75%;
    max-width: 75%;
  }

  .column-lg-10 {
    flex-basis: 83.3333333333%;
    max-width: 83.3333333333%;
  }

  .column-lg-11 {
    flex-basis: 91.6666666667%;
    max-width: 91.6666666667%;
  }

  .column-lg-12 {
    flex-basis: 100%;
    max-width: 100%;
  }
}
@supports (display: grid) {
  .grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-template-rows: auto;
  }
  .grid > [class*=column-] {
    margin: 0;
    max-width: 100%;
  }

  .column-xs-1 {
    grid-column-start: span 1;
    grid-column-end: span 1;
  }

  .column-xs-2 {
    grid-column-start: span 2;
    grid-column-end: span 2;
  }

  .column-xs-3 {
    grid-column-start: span 3;
    grid-column-end: span 3;
  }

  .column-xs-4 {
    grid-column-start: span 4;
    grid-column-end: span 4;
  }

  .column-xs-5 {
    grid-column-start: span 5;
    grid-column-end: span 5;
  }

  .column-xs-6 {
    grid-column-start: span 6;
    grid-column-end: span 6;
  }

  .column-xs-7 {
    grid-column-start: span 7;
    grid-column-end: span 7;
  }

  .column-xs-8 {
    grid-column-start: span 8;
    grid-column-end: span 8;
  }

  .column-xs-9 {
    grid-column-start: span 9;
    grid-column-end: span 9;
  }

  .column-xs-10 {
    grid-column-start: span 10;
    grid-column-end: span 10;
  }

  .column-xs-11 {
    grid-column-start: span 11;
    grid-column-end: span 11;
  }

  .column-xs-12 {
    grid-column-start: span 12;
    grid-column-end: span 12;
  }

  @media (min-width: 48rem) {
    .column-sm-1 {
      grid-column-start: span 1;
      grid-column-end: span 1;
    }

    .column-sm-2 {
      grid-column-start: span 2;
      grid-column-end: span 2;
    }

    .column-sm-3 {
      grid-column-start: span 3;
      grid-column-end: span 3;
    }

    .column-sm-4 {
      grid-column-start: span 4;
      grid-column-end: span 4;
    }

    .column-sm-5 {
      grid-column-start: span 5;
      grid-column-end: span 5;
    }

    .column-sm-6 {
      grid-column-start: span 6;
      grid-column-end: span 6;
    }

    .column-sm-7 {
      grid-column-start: span 7;
      grid-column-end: span 7;
    }

    .column-sm-8 {
      grid-column-start: span 8;
      grid-column-end: span 8;
    }

    .column-sm-9 {
      grid-column-start: span 9;
      grid-column-end: span 9;
    }

    .column-sm-10 {
      grid-column-start: span 10;
      grid-column-end: span 10;
    }

    .column-sm-11 {
      grid-column-start: span 11;
      grid-column-end: span 11;
    }

    .column-sm-12 {
      grid-column-start: span 12;
      grid-column-end: span 12;
    }
  }
  @media (min-width: 62rem) {
    .column-md-1 {
      grid-column-start: span 1;
      grid-column-end: span 1;
    }

    .column-md-2 {
      grid-column-start: span 2;
      grid-column-end: span 2;
    }

    .column-md-3 {
      grid-column-start: span 3;
      grid-column-end: span 3;
    }

    .column-md-4 {
      grid-column-start: span 4;
      grid-column-end: span 4;
    }

    .column-md-5 {
      grid-column-start: span 5;
      grid-column-end: span 5;
    }

    .column-md-6 {
      grid-column-start: span 6;
      grid-column-end: span 6;
    }

    .column-md-7 {
      grid-column-start: span 7;
      grid-column-end: span 7;
    }

    .column-md-8 {
      grid-column-start: span 8;
      grid-column-end: span 8;
    }

    .column-md-9 {
      grid-column-start: span 9;
      grid-column-end: span 9;
    }

    .column-md-10 {
      grid-column-start: span 10;
      grid-column-end: span 10;
    }

    .column-md-11 {
      grid-column-start: span 11;
      grid-column-end: span 11;
    }

    .column-md-12 {
      grid-column-start: span 12;
      grid-column-end: span 12;
    }
  }
  @media (min-width: 75rem) {
    .column-lg-1 {
      grid-column-start: span 1;
      grid-column-end: span 1;
    }

    .column-lg-2 {
      grid-column-start: span 2;
      grid-column-end: span 2;
    }

    .column-lg-3 {
      grid-column-start: span 3;
      grid-column-end: span 3;
    }

    .column-lg-4 {
      grid-column-start: span 4;
      grid-column-end: span 4;
    }

    .column-lg-5 {
      grid-column-start: span 5;
      grid-column-end: span 5;
    }

    .column-lg-6 {
      grid-column-start: span 6;
      grid-column-end: span 6;
    }

    .column-lg-7 {
      grid-column-start: span 7;
      grid-column-end: span 7;
    }

    .column-lg-8 {
      grid-column-start: span 8;
      grid-column-end: span 8;
    }

    .column-lg-9 {
      grid-column-start: span 9;
      grid-column-end: span 9;
    }

    .column-lg-10 {
      grid-column-start: span 10;
      grid-column-end: span 10;
    }

    .column-lg-11 {
      grid-column-start: span 11;
      grid-column-end: span 11;
    }

    .column-lg-12 {
      grid-column-start: span 12;
      grid-column-end: span 12;
    }
  }
}




/** ====================
 * Lista de Comentarios
 =======================*/
/*
  Comentario 
*/



.container-comment h1 {
  font-family: 'Nexa', sans-serif;
  font-size: 25px;
  margin: 0.3em 0 0.1em 0;
  color: black;
}

.container-comment h2 {
  font-family: 'Nexa', sans-serif;
  font-size: 15px;
  color: black;
}

.container-comment {
  font-family: 'Nexa', sans-serif;
  width: 80%;
  max-width: 1440px;
  margin: 5px;
  background-color: #F5F5F5;
  padding: 10px 10px;

}

.container-comment p {
  font-family: 'Nexa', sans-serif;
  max-width: 900px;
  color: black;
}

.related-products a{
  color: black;
}

.container-comment input{
    display: block;
    height: 50px;
    width: 50%;
    background-color: #ffffff;
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 18px;
    font-weight: 300;
    font-family: 'Nexa', sans-serif;
}
::placeholder{
    color: #080710;
}


.container-comment button{
    margin-top: 5px;
    width: 50%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}



/* 
  List Css Styler 
*/


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
