<header class="container">
  <div class="row">
    <div class="col col-md-2">
      <a href="/">
          <img class="logo" src={{asset('/src/images/logo.svg')}} alt="Enfa">
      </a>
    </div>
    <nav class="col col-xs-6 d-sm-flex d-md-none menu-mobile">
      <ion-icon name="menu" class="menu-icon hydrated" data-ion-icon-host="" role="img" aria-label="menu">
      <div class="icon-inner" data-ion-icon="">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-ion-icon="">
        <path d="M64 384h384v-42.666H64V384zm0-106.666h384v-42.667H64v42.667zM64 128v42.665h384V128H64z">
        </path>
        </svg>
      </div>
      </ion-icon>
    </nav>

    <!--<div class="col d-none d-md-flex" font-size: 90px>
        <ul class="d-flex align-items-center">
          <li>
            <ion-icon name="call" data-ion-icon-host="" role="img" class="hydrated" aria-label="call">
              <div class="icon-inner" data-ion-icon=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-ion-icon="">
                <path d="M426.666 330.667a250.385 250.385 0 0 1-75.729-11.729c-7.469-2.136-16-1.073-21.332 5.333l-46.939 46.928c-60.802-30.928-109.864-80-140.802-140.803l46.939-46.927c5.332-5.333 7.462-13.864 5.332-21.333-8.537-24.531-12.802-50.136-12.802-76.803C181.333 73.604 171.734 64 160 64H85.333C73.599 64 64 73.604 64 85.333 64 285.864 226.136 448 426.666 448c11.73 0 21.334-9.604 21.334-21.333V352c0-11.729-9.604-21.333-21.334-21.333z">
                </path>
              </svg>
            </div>
          </ion-icon>
            01 800 920 30 45
          </li>
          <li>
            <ion-icon name="pin" data-ion-icon-host="" role="img" class="hydrated" aria-label="pin">
              <div class="icon-inner" data-ion-icon="">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-ion-icon="">
                  <path d="M256 32c-88.004 0-160 70.557-160 156.801C96 306.4 256 480 256 480s160-173.6 160-291.199C416 102.557 344.004 32 256 32zm0 212.801c-31.996 0-57.144-24.645-57.144-56 0-31.357 25.147-56 57.144-56s57.144 24.643 57.144 56c0 31.355-25.148 56-57.144 56z">
                  </path>
                </svg>
              </div>
            </ion-icon>
            Av. Horacio 340,CDMX
          </li>
          <li>
            <ion-icon name="time" data-ion-icon-host="" role="img" class="hydrated" aria-label="time">
              <div class="icon-inner" data-ion-icon="">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-ion-icon="">
                  <g fill-opacity=".9">
                  <path d="M255.8 48C141 48 48 141.2 48 256s93 208 207.8 208c115 0 208.2-93.2 208.2-208S370.8 48 255.8 48zm.2 374.4c-91.9 0-166.4-74.5-166.4-166.4S164.1 89.6 256 89.6 422.4 164.1 422.4 256 347.9 422.4 256 422.4z"></path><path d="M266.4 152h-31.2v124.8l109.2 65.5 15.6-25.6-93.6-55.5V152z">
                  </path>
                  </g>
                </svg>
              </div>
            </ion-icon>
            Lunes a Viernes, 8:00 - 19:00
          </li>
        </ul>
      </div>-->
        <div class="col col-md-3 d-none d-md-flex align-items-center user-sign">

              <a class="home" href= {{web_url() . "/landing"}}>Home</a>
              |
              <a class="user-logoff" href= {{web_url() . "/landing"}}>Salir</a>

        </div>
  </div>
</header>
