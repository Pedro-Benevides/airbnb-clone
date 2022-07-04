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

/*
Footer Css Styler
*/
.site-footer {
font-family: "Nexa", sans-serif;
margin: 0;
padding: 0;
color: var(--color-1);
line-height: 1.6;
}

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
margin: 2px;
}

.site-footer h4 {
font-family: "Nexa", sans-serif;
font-size: 18px;
margin: 8px;
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