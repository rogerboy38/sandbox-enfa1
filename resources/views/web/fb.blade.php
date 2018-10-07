<!DOCTYPE html>
2 <html lang="en" dir="ltr">
3   <head>
4     <meta charset="utf-8">
5     <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
6     <link rel="stylesheet" href="css/app.css">
7     <title>Enfa Delivery</title>
8   </head>
9   <body>
10     <header class="container">
11       <div class="row">
12         <div class="col-xs-6 col-md-3">
13           <a href="/">
14             <img class="logo" src="img/logo.svg" alt="Enfa">
15           </a>
16         </div>
17         <div class="col-md-7 d-flex align-items-center header__support">
18           <ul class="d-flex align-items-center">
19             <li>
20               <ion-icon name="call"></ion-icon>
21               01 800 920 30 45
22             </li>
23             <li>
24               <ion-icon name="pin"></ion-icon>
25               Av. Horacio 340,CDMX
26             </li>
27             <li>
28               <ion-icon name="time"></ion-icon>
29               Lunes a Viernes, 8:00 - 19:00
30             </li>
31           </ul>
32         </div>
33         <div class="col-md-2 d-flex align-items-center">
34           <a href="./login.html">Entrar/Registrarme</a>
35         </div>
36       </div>
37     </header>
38     <nav>
39       <ul class="container d-flex justify-content-end">
40         <li><a href="#">Flotas</a></li>
41         <li><a href="">Servicios</a></li>
42         <li><a href="">Acerca de nosotros</a></li>
43         <li><a href="">Galeria</a></li>
44       </ul>
45     </nav>
46     <section class="welcome">
47       <img class="welcome__bg-img img-fluid"src="img/bg-2.jpg" alt="">
48       <div class="welcome__overlay">
49         <div class="welcome__title">
50           <div class="title">
51             Bienvenido a <strong>ENFA</strong>
52             <h1>RAPIDO - SEGURO - EFECTIVO</h1>
53             ¿Necesitas llevar una carga? O ¿Tienes transporte disponible?
54           </div>
55           <div class="welcome__form d-flex justify-content-center">
56             <form class="form-inline">
57               <div class="form-group flex-column align-items-start">
58                 <label for="">Origen</label>
59                 <input type="text" class="form-control" value="CDMX">
60               </div>
61               <div class="form-group flex-column align-items-start">
62                 <label for="">Destino</label>
63                 <input type="text" class="form-control" value="Tijuana">
64               </div>
65               <div class="form-group flex-column align-items-start">
66                 <label for="">Fecha</label>
67                 <input type="date" class="form-control" >
68               </div>
69               <div class="form-group flex-column align-items-start">
70                 <label for="">Tipo</label>
71                 <select class="custom-select">
72                   <option selected>Opción uno</option>
73                   <option value="1">Opción dos</option>
74                   <option value="2">Opción tres</option>
75                 </select>
76               </div>
77               <button class="btn btn-primary
78
79               "type="button" name="button">
80                 <ion-icon name="bus"></ion-icon>
81               </button>
82             </form>
83           </div>
84         </div>
85       </div>
86     </section>
87     <section class="container enfa-content">
88       <h2 class="text-center">Porque elegir ENFA</h2>
89       <div class="row enfa-content enfa-content__why">
90         <div class="col-xs-12 col-md-4">
91           <h3>EXPERT STAFF</h3>
92           <p>
93             Praesent eu rhoncus nibh. Quisque tincidunt, nisi in enetis commodo,
94              neque quam pharetra dolor, nec lacinia urna quam. nisi in enenatis commodo
95           </p>
96           <a href="#" class="anchor-more">
97             SABER MÁS<ion-icon name="arrow-dropright"></ion-icon>
98           </a>
99         </div>
100         <div class="col-xs-12 col-md-4">
101           <h3>LOGISTIC SERVICES</h3>
102           <p>
103             Praesent eu rhoncus nibh. Quisque tincidunt, nisi in enetis commodo,
104              neque quam pharetra dolor, nec lacinia urna quam. nisi in enenatis commodo
105           </p>
106           <a href="#" class="anchor-more">
107             SABER MÁS<ion-icon name="arrow-dropright"></ion-icon>
108           </a>
109

110         </div>
111         <div class="col-xs-12 col-md-4">
112           <h3>GROUND SHIPPING</h3>
113           <p>
114             Praesent eu rhoncus nibh. Quisque tincidunt, nisi in enetis commodo,
115             neque quam pharetra dolor, nec lacinia urna quam. nisi in enenatis commodo
116           </p>
117           <a class="anchor-more" href="#">
118             SABER MÁS<ion-icon name="arrow-dropright"></ion-icon>
119           </a>
120         </div>
121       </div>
122     </section>
123     <section class="container d-flex align-items-center">
124       <div class="row">
125         <div class="col-xs-12 col-md-6 d-flex flex-column align-items-center
126         justify-content-center services services__send">
127           <h3>Quiero enviar</h3>
128           <p>
129             Si tu quieres enviar tenemos para ti, la flota perfecta para esa
130             carga especial.
131           </p>
132           <button type="button" class="btn btn-outline-primary">
133             Click Aquí
134             <ion-icon name="arrow-forward"></ion-icon>
135           </button>
136         </div>
137         <div class="col-xs-12 col-md-6 d-flex flex-column align-items-center
138         justify-content-center services services__ship">
139           <h3>Quiero transportar</h3>
140           <p>
141             Si quieres transportar, haremos que tu flota trabaje mientras no
142             la utilizas y asi mismo generes ganancias.
143           </p>
144           <button type="button" class="btn btn-outline-secondary">
145             Click Aquí
146             <ion-icon name="arrow-forward"></ion-icon>
147           </button>
148         </div>
149       </div>
150     </section>
151     <footer class="container-fluid">
152       <div class="container links">
153         <section class="row">
154           <div class="col-xs-12 col-md-4">
155             <a href="marketplace.html">
156               <img class="logo" src="img/logo.svg" alt="Enfa">
157             </a>
158             <p>
159               Enfadelivery se encarga de proveer servicios de transporte mediante
160               la ocupación de las capacidades disponibles en la fecha y hora que
161               tu la necesitas.
162             </p>
163           </div>
164           <div class="col-xs-12 col-md-4">
165             <h6>Contáctanos</h4>
166               <ul>
167                 <li>
168                   <a href="#">
169                     <ion-icon name="pin"></ion-icon>
170                     Ciudad de México, 227 MARION STREET
171                   </a>
172                 </li>
173                 <li>
174                   <a href="#">
175                     <ion-icon name="call"></ion-icon>
176                     1-888-123-4567
177                   </a>
178                 </li>
179                 <li>
180                   <a href="#">
181                     <ion-icon name="mail"></ion-icon>
182                     support@enfa.com
183                   </a>
184                 </li>
185                 <li>
186                   <a href="#">
187                     <ion-icon name="time"></ion-icon>
188                     Lunes - Sábado, 9:00 - 19:00 hrs
189                   </a>
190                 </li>
191               </ul>
192           </div>
193           <div class="col-xs-12 col-md-4">
194             <h6>Enlaces</h6>
195             <ul>
196               <li><a href="#">Historia</a></li>
197               <li><a href="#">Preguntas Frecuentes</a></li>
198               <li><a href="#">Nuestro Equipo</a></li>
199               <li><a href="#">Invertir en ENFA</a></li>
200             </ul>
201           </div>
202         </div>
203       </section>
204       <section class="copyright">
205         <div class="copy text-center">
206           © 2018 ENFA Delivery.
207         </div>
208         <div class="terms text-center">
209           <a href="#">Términos y Condiciones</a>
210         </div>
211       </section>
212     </footer>
213     <script src="https://unpkg.com/ionicons@4.2.4/dist/ionicons.js"></script>
214   </body>
215 </html> 
