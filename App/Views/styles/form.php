*,
*:before,
*:after{
padding: 0;
margin: 0;
box-sizing: border-box;
}



/* register use*/
*, *:before, *:after {
box-sizing: border-box;
}


.register {
background-color: #080710;

}

.userRegister form{
width: 500px;
background-color: rgba(255,255,255,0.13);
position: absolute;
transform: translate(-50%,-50%);
top: 50%;
left: 50%;
border-radius: 10px;
backdrop-filter: blur(10px);
border: 2px solid rgba(255,255,255,0.1);
box-shadow: 0 0 40px rgba(8,7,16,0.6);
padding: 20px 35px;
}
.userRegister form *{
font-family: 'Poppins',sans-serif;
color: #ffffff;
letter-spacing: 0.5px;
outline: none;
border: none;
}
.userRegister form h3{
font-size: 32px;
font-weight: 500;
line-height: 42px;
text-align: center;
}


.tab-group {
list-style: none;
padding: 0;
margin: 0 0 20px 0;
}
.tab-group:after {
content: "";
display: table;
clear: both;
}
.tab-group li a {
display: block;
text-decoration: none;
padding: 15px;
background: rgba(160, 179, 176, 0.25);
color: #a0b3b0;
font-size: 20px;
float: left;
width: 50%;
text-align: center;
cursor: pointer;
transition: .5s ease;
}
.tab-group li a:hover {
background: #179b77;
color: #ffffff;
}
.tab-group .active a {
background: #1ab188;
color: #ffffff;
}

.tab-content > div:last-child {
display: none;
}

.userRegister h1 {
text-align: center;
color: #ffffff;
font-weight: 300;
margin: 0 0 40px;
}

.userRegister label {
position: absolute;
transform: translateY(6px);
left: 13px;
color: rgba(255, 255, 255, 0.5);
transition: all 0.25s ease;
-webkit-backface-visibility: hidden;
pointer-events: none;
font-size: 22px;
opacity: 0;
}
.userRegister label .req {
margin: 2px;
color: #1ab188;
}

.userRegister label.active {
transform: translateY(50px);
left: 2px;
font-size: 14px;
}
.userRegister label.active .req {
opacity: 0;
}

.userRegister label.highlight {
color: #ffffff;
}

.userRegister input, textarea {
height: 50px;
width: 100%;
background-color: rgba(255,255,255,0.07);
border-radius: 3px;
padding: 0 10px;
margin-top: 8px;
font-size: 16px;
font-weight: 300;
}
.userRegister input:focus, textarea:focus {
outline: 0;
border-color: #1ab188;
}

.userRegister ::placeholder{
color: #e5e5e5;
}

.userRegister textarea {
border: 2px solid #a0b3b0;
resize: vertical;
}

.field-wrap {
position: relative;
margin-bottom: 10px;
}

.top-row:after {
content: "";
display: table;
clear: both;
}
.top-row > div {
float: left;
width: 48%;
margin-right: 4%;

}
.top-row > div:last-child {
margin: 0;
}


.top-row-userRegister > div:last-child {
margin: 0;
}

.userRegister ::placeholder{
color: #e5e5e5;
}
.userRegister button{
margin-top: 10px;
width: 100%;
background-color: #ffffff;
color: #080710;
padding: 15px 0;
font-size: 18px;
font-weight: 600;
border-radius: 5px;
cursor: pointer;
position: center;
}

.forgot {
margin-top: -20px;
text-align: right;
}

.userRegister select{
height: 50px;
width: 100%;
background-color: rgba(255,255,255,0.07);
border-radius: 3px;
padding: 0 10px;
margin-top: 8px;
font-size: 14px;
font-weight: 300;
}

.userRegister option{
color: black;
font-size: 14px;
font-weight: 300;
}
.social1{
margin-top: 30px;
display: flex;
}
.social1 div{
background: red;
width: 200px;
border-radius: 3px;
padding: 5px 10px 10px 5px;
background-color: rgba(255,255,255,0.27);
color: #eaf0fb;
text-align: center;
}
.social1 div:hover{
background-color: rgba(255,255,255,0.47);
}
.social1 .fb{
margin-left: 25px;
}
.social1 i{
margin-right: 4px;
}



/* login */
.login {
background-color: #080710;
}
.login_background{
width: 430px;
height: 520px;
position: absolute;
transform: translate(-50%,-50%);
left: 50%;
top: 50%;
}

.login form{
height: 520px;
width: 400px;
background-color: rgba(255,255,255,0.13);
position: absolute;
transform: translate(-50%,-50%);
top: 50%;
left: 50%;
border-radius: 10px;
backdrop-filter: blur(10px);
border: 2px solid rgba(255,255,255,0.1);
box-shadow: 0 0 40px rgba(8,7,16,0.6);
padding: 50px 35px;
}
.login form *{
font-family: 'Poppins',sans-serif;
color: #ffffff;
letter-spacing: 0.5px;
outline: none;
border: none;
}
.login form h3{
font-size: 32px;
font-weight: 500;
line-height: 42px;
text-align: center;
}

.login label{
display: block;
margin-top: 30px;
font-size: 16px;
font-weight: 500;
}
.login input{
display: block;
height: 50px;
width: 100%;
background-color: rgba(255,255,255,0.07);
border-radius: 3px;
padding: 0 10px;
margin-top: 8px;
font-size: 14px;
font-weight: 300;
}
.login ::placeholder{
color: #e5e5e5;
}
.login button{
margin-top: 20px;
width: 100%;
background-color: #ffffff;
color: #080710;
padding: 15px 0;
font-size: 18px;
font-weight: 600;
border-radius: 5px;
cursor: pointer;
position: center;
}
.social{
margin-top: 30px;
display: flex;
}
.social div{
background: red;
width: 150px;
border-radius: 3px;
padding: 5px 10px 10px 5px;
background-color: rgba(255,255,255,0.27);
color: #eaf0fb;
text-align: center;
}
.social div:hover{
background-color: rgba(255,255,255,0.47);
}
.social .fb{
margin-left: 25px;
}
.social i{
margin-right: 4px;
}
/* card */
.btn {
display: block;
background: #bded7d;
color: white;
text-decoration: none;
margin: 20px 0;
padding: 15px 15px;
border-radius: 5px;
position: relative;
}
.btn::after {
content: "";
position: absolute;
z-index: 1;
top: 0;
left: 0;
width: 100%;
height: 100%;
transition: all 0.2s ease-in-out;
box-shadow: inset 0 3px 0 rgba(0, 0, 0, 0), 0 3px 3px rgba(0, 0, 0, 0.2);
border-radius: 5px;
}
.btn:hover::after {
background: rgba(0, 0, 0, 0.1);
box-shadow: inset 0 3px 0 rgba(0, 0, 0, 0.2);
}
.form fieldset {
border: none;
padding: 0;
padding: 10px 0;
position: relative;
clear: both;
}
.form fieldset.fieldset-expiration {
float: left;
width: 60%;
}
.form fieldset.fieldset-expiration .select {
width: 84px;
margin-right: 12px;
float: left;
}
.form fieldset.fieldset-ccv {
clear: none;
float: right;
width: 86px;
}
.form fieldset label {
display: block;
text-transform: uppercase;
font-size: 15px;
color: rgba(0, 0, 0, 0.6);
margin-bottom: 5px;
font-weight: bold;
font-family: Inconsolata;
}
.form fieldset input,
.form fieldset .select {
width: 100%;
height: 38px;
color: #333333;
padding: 10px;
border-radius: 5px;
font-size: 15px;
outline: none !important;
border: 1px solid rgba(0, 0, 0, 0.3);
box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.2);
}
.form fieldset input.input-cart-number,
.form fieldset .select.input-cart-number {
width: 82px;
display: inline-block;
margin-right: 8px;
}
.form fieldset input.input-cart-number:last-child,
.form fieldset .select.input-cart-number:last-child {
margin-right: 0;
}
.form fieldset .select {
position: relative;
}
.form fieldset .select::after {
content: "";
border-top: 8px solid #222;
border-left: 4px solid transparent;
border-right: 4px solid transparent;
position: absolute;
z-index: 2;
top: 14px;
right: 10px;
pointer-events: none;
}
.form fieldset .select select {
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
position: absolute;
padding: 0;
border: none;
width: 100%;
outline: none !important;
top: 6px;
left: 6px;
background: none;
}
.form fieldset .select select :-moz-focusring {
color: transparent;
text-shadow: 0 0 0 #000;
}
.form button {
margin-top: 50px;
width: 100%;
background-color: #07363F;
color: white;
padding: 15px 0;
font-size: 18px;
font-weight: 600;
border-radius: 5px;
cursor: pointer;
font-family: 'Poppins',sans-serif;
letter-spacing: 0.5px;
outline: none;
border: none;
}
.checkout {
margin: 150px auto 30px;
position: relative;
width: 460px;
background: white;
border-radius: 15px;
padding: 160px 45px 30px;
box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
}
.credit-card-box {
perspective: 1000;
width: 400px;
height: 280px;
position: absolute;
top: -112px;
left: 50%;
transform: translateX(-50%);
}
.credit-card-box:hover .flip, .credit-card-box.hover .flip {
transform: rotateY(180deg);
}
.credit-card-box .front,
.credit-card-box .back {
width: 400px;
height: 250px;
border-radius: 15px;
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
background: linear-gradient(135deg, #bd6772, #53223f);
position: absolute;
color: #fff;
font-family: Inconsolata;
top: 0;
left: 0;
text-shadow: 0 1px 1px rgba(0, 0, 0, 0.3);
box-shadow: 0 1px 6px rgba(0, 0, 0, 0.3);
}
.credit-card-box .front::before,
.credit-card-box .back::before {
content: "";
position: absolute;
width: 100%;
height: 100%;
top: 0;
left: 0;
background: url("http://cdn.flaticon.com/svg/44/44386.svg") no-repeat center;
background-size: cover;
opacity: 0.05;
}
.credit-card-box .flip {
transition: 0.6s;
transform-style: preserve-3d;
position: relative;
}
.credit-card-box .logo {
position: absolute;
top: 9px;
right: 20px;
width: 60px;
}
.credit-card-box .logo svg {
width: 100%;
height: auto;
fill: #fff;
}
.credit-card-box .front {
z-index: 2;
transform: rotateY(0deg);
}
.credit-card-box .back {
transform: rotateY(180deg);
}
.credit-card-box .back .logo {
top: 185px;
}
.credit-card-box .chip {
position: absolute;
width: 60px;
height: 45px;
top: 20px;
left: 20px;
background: linear-gradient(135deg, #ddccf0 0%, #d1e9f5 44%, #f8ece7 100%);
border-radius: 8px;
}
.credit-card-box .chip::before {
content: "";
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
margin: auto;
border: 4px solid rgba(128, 128, 128, 0.1);
width: 80%;
height: 70%;
border-radius: 5px;
}
.credit-card-box .strip {
background: linear-gradient(135deg, #404040, #1a1a1a);
position: absolute;
width: 100%;
height: 50px;
top: 30px;
left: 0;
}
.credit-card-box .number {
position: absolute;
margin: 0 auto;
top: 103px;
left: 19px;
font-size: 38px;
}
.credit-card-box label {
font-size: 10px;
letter-spacing: 1px;
text-shadow: none;
text-transform: uppercase;
font-weight: normal;
opacity: 0.5;
display: block;
margin-bottom: 3px;
}
.credit-card-box .card-holder,
.credit-card-box .card-expiration-date {
position: absolute;
margin: 0 auto;
top: 180px;
left: 19px;
font-size: 22px;
text-transform: capitalize;
}
.credit-card-box .card-expiration-date {
text-align: right;
left: auto;
right: 20px;
}
.credit-card-box .ccv {
height: 36px;
background: #fff;
width: 91%;
border-radius: 5px;
top: 110px;
left: 0;
right: 0;
position: absolute;
margin: 0 auto;
color: #000;
text-align: right;
padding: 10px;
}
.credit-card-box .ccv label {
margin: -25px 0 14px;
color: #fff;
}
.the-most {
position: fixed;
z-index: 1;
bottom: 0;
left: 0;
width: 50vw;
max-width: 200px;
padding: 10px;
}
.the-most img {
max-width: 100%;
}



.confirmd form{
width: 500px;
background-color: rgba(255,255,255,0.13);
position: absolute;
transform: translate(-50%,-50%);
top: 50%;
left: 50%;
border-radius: 10px;
backdrop-filter: blur(10px);
border: 2px solid rgba(255,255,255,0.1);
box-shadow: 0 0 40px rgba(8,7,16,0.6);
padding: 20px 35px;
}
.confirmd form *{
font-family: 'Poppins',sans-serif;
color: black;
letter-spacing: 0.5px;
outline: none;
border: none;
}
.confirmd form h3{
font-size: 32px;
font-weight: 500;
line-height: 42px;
text-align: center;
color: black;
}

.confirmd h1 {
text-align: center;
color: black;
font-weight: 20;
margin: 0 0 40px;
font-size: 25px;
}

.buttonD {
margin-top: 20px;
width: 100%;
background-color: #ffffff;
color: black;
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