<?php
include_once "lib/load.php";
?>
<link rel="stylesheet" href="https://public.codepenassets.com/css/normalize-5.0.0.min.css">
<!-- <link rel="stylesheet" href="./style.css"> -->

<style>
  @import url("https://fonts.googleapis.com/css?family=DM+Sans:400,500|Jost:400,500,600&display=swap");

  * {
    box-sizing: border-box;
  }

  .buty {
    width: 100%;
    display: flex;
    align-content: center;
  }

  .body1 {
    color: #2b2c48;
    font-family: "Jost", sans-serif;
    /* background-image: url(https://images.unsplash.com/photo-1566738780863-f9608f88f3a9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2378&q=80); */
    background-color: rgb(56 56 56 / 3%);
    ;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    height: 100vh !important;
    display: flex;
    flex-wrap: wrap;
    padding: 20px;
  }

  .card1 {
    height: 540px !important;
    width: 530px;
    margin: auto;
    overflow-y: auto;
    position: relative;
    z-index: 1;
    overflow-x: hidden;
    background-color: white;
    display: flex;
    transition: 0.3s;
    flex-direction: column;
    border-radius: 10px;
    box-shadow: 0 0 0 8px rgba(255, 255, 255, 0.2);
  }

  .card1[data-state="#about"] {
    height: 450px;
  }

  .card1[data-state="#about"] .card1-main {
    padding-top: 0;
  }

  .card1[data-state="#contact"] {
    height: 430px;
  }

  .card1[data-state="#experience"] {
    height: 550px;
  }

  .card1.is-active .card1-header {
    height: 80px;
  }

  .card1.is-active .card1-cover {
    height: 100px;
    top: -50px;
  }

  .card1.is-active .card1-avatar {
    transform: none;
    left: 20px;
    width: 50px;
    height: 50px;
    bottom: 10px;
  }

  .card1.is-active .card1-fullname,
  .card1.is-active .card1-jobtitle {
    left: 86px;
    transform: none;
  }

  .card1.is-active .card1-fullname {
    bottom: 21px;
    font-size: 19px;
  }

  .card1.is-active .card1-jobtitle {
    bottom: 16px;
    letter-spacing: 1px;
    font-size: 10px;
  }

  .card1-header {
    position: relative;
    display: flex;
    height: 200px;
    flex-shrink: 0;
    width: 100%;
    transition: 0.3s;
  }

  .card1-header * {
    transition: 0.3s;
  }

  .card1-cover {
    width: 100%;
    height: 100%;
    position: absolute;
    height: 160px;
    top: -20%;
    left: 0;
    will-change: top;
    background-size: cover;
    background-position: center;
    filter: blur(30px);
    transform: scale(1.2);
    transition: 0.5s;
  }

  .card1-avatar {
    width: 100px;
    height: 100px;
    box-shadow: 0 8px 8px rgba(0, 0, 0, 0.2);
    border-radius: 50%;
    -o-object-position: center;
    object-position: center;
    -o-object-fit: cover;
    object-fit: cover;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%) translateY(-64px);
  }

  .card1-fullname {
    position: absolute;
    bottom: 0;
    font-size: 22px;
    font-weight: 700;
    text-align: center;
    white-space: nowrap;
    transform: translateY(-10px) translateX(-50%);
    left: 50%;
  }

  .card1-jobtitle {
    position: absolute;
    bottom: 0;
    font-size: 11px;
    white-space: nowrap;
    font-weight: 500;
    opacity: 0.7;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    margin: 0;
    left: 50%;
    transform: translateX(-50%) translateY(-7px);
  }

  .card1-main {
    position: relative;
    flex: 1;
    display: flex;
    padding-top: 10px;
    flex-direction: column;
  }

  .card1-subtitle {
    font-weight: 700;
    font-size: 15px;
    margin-bottom: 8px;
  }

  .card1-content {
    padding: 20px;
  }

  .card1-desc {
    line-height: 1.6;
    color: #636b6f;
    font-size: 14px;
    margin: 0;
    font-weight: 400;
    font-family: "DM Sans", sans-serif;
  }

  .card1-social {
    display: flex;
    align-items: center;
    padding: 0 20px;
    margin-bottom: 30px;
  }

  .card1-social svg {
    fill: #a5b5ce;
    width: 16px;
    display: block;
    transition: 0.3s;
  }

  .card1-social a {
    color: #8797a1;
    height: 32px;
    width: 32px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
    background-color: rgba(93, 133, 193, 0.05);
    border-radius: 50%;
    margin-right: 10px;
  }

  .card1-social a:hover svg {
    fill: #637faa;
  }

  .card1-social a:last-child {
    margin-right: 0;
  }

  .card1-buttons {
    display: flex;
    background-color: #fff;
    margin-top: auto;
    position: sticky;
    bottom: 0;
    left: 0;
  }

  .card1-buttons button {
    flex: 1 1 auto;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background: 0;
    font-size: 13px;
    border: 0;
    padding: 15px 5px;
    cursor: pointer;
    color: #5c5c6d;
    transition: 0.3s;
    font-family: "Jost", sans-serif;
    font-weight: 500;
    outline: 0;
    border-bottom: 3px solid transparent;
  }

  .card1-buttons button.is-active,
  .card1-buttons button:hover {
    color: #2b2c48;
    border-bottom: 3px solid #8a84ff;
    background: linear-gradient(to bottom, rgba(127, 199, 231, 0) 0%, rgba(207, 204, 255, 0.2) 44%, rgba(211, 226, 255, 0.4) 100%);
  }

  .card1-section {
    display: none;
  }

  .card1-section.is-active {
    display: block;
    -webkit-animation: fadeIn 0.6s both;
    animation: fadeIn 0.6s both;
  }

  @-webkit-keyframes fadeIn {
    0% {
      opacity: 0;
      transform: translatey(40px);
    }

    100% {
      opacity: 1;
    }
  }

  @keyframes fadeIn {
    0% {
      opacity: 0;
      transform: translatey(40px);
    }

    100% {
      opacity: 1;
    }
  }

  .card1-timeline {
    margin-top: 30px;
    position: relative;
  }

  .card1-timeline:after {
    background: linear-gradient(to top, rgba(134, 214, 243, 0) 0%, #516acc 100%);
    content: "";
    left: 42px;
    width: 2px;
    top: 0;
    height: 100%;
    position: absolute;
    content: "";
  }

  .card1-item {
    position: relative;
    padding-left: 60px;
    padding-right: 20px;
    padding-bottom: 30px;
    z-index: 1;
  }

  .card1-item:last-child {
    padding-bottom: 5px;
  }

  .card1-item:after {
    content: attr(data-year);
    width: 10px;
    position: absolute;
    top: 0;
    left: 37px;
    width: 8px;
    height: 8px;
    line-height: 0.6;
    border: 2px solid #fff;
    font-size: 11px;
    text-indent: -35px;
    border-radius: 50%;
    color: rgba(134, 134, 134, 0.7);
    background: linear-gradient(to bottom, #a0aee3 0%, #516acc 100%);
  }

  .card1-item-title {
    font-weight: 500;
    font-size: 14px;
    margin-bottom: 5px;
  }

  .card1-item-desc {
    font-size: 13px;
    color: #6f6f7b;
    line-height: 1.5;
    font-family: "DM Sans", sans-serif;
  }

  .card1-contact-wrapper {
    margin-top: 20px;
  }

  .card1-contact {
    display: flex;
    align-items: center;
    font-size: 13px;
    color: #6f6f7b;
    font-family: "DM Sans", sans-serif;
    line-height: 1.6;
    cursor: pointer;
  }

  .card1-contact+.card1-contact {
    margin-top: 16px;
  }

  .card1-contact svg {
    flex-shrink: 0;
    width: 30px;
    min-height: 34px;
    margin-right: 12px;
    transition: 0.3s;
    padding-right: 12px;
    border-right: 1px solid #dfe2ec;
  }

  /* .buty a{
    width: 30%;
} */
  .contact-me {
    margin-left: 200px;
    border: 0;
    outline: none;
    /* background: linear-gradient(to right, rgba(83, 200, 239, 0.8) 0%, rgb(247, 120, 1) 96%); */
    background-color: rgb(247, 120, 1);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
    color: #fff;
    padding: 12px 16px;
    width: 115px;
    border-radius: 5px;
    margin-top: 25px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 500;
    font-family: "Jost", sans-serif;
    transition: 0.3s;
  }
</style>
<!-- partial:index.partial.html -->
<div class="body1">
  <div class="card1" data-state="#about">
    <div class="card1-header">
      <div class="card1-cover" style="background-image: url('https://images.unsplash.com/photo-1549068106-b024baf5062d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80')"></div>
      <img class="card1-avatar" src="https://cdn-icons-png.flaticon.com/512/9815/9815472.png" alt="avatar" />
      <h1 class="card1-fullname"><?=session::get_value('username');?></h1>
      <!-- <h2 class="card1-jobtitle">UI Developer</h2> -->
    </div>
    <div class="buty">
      <a href="#"><button class="contact-me">Edit</button></a>
    </div>
    <div class="card1-main">
      <div class="card1-section is-active" id="about">
        <div class="card1-content">
          <div class="card1-subtitle">ABOUT</div>
          <div class="card1-desc" style="width: 590px !important;padding-left: 10px;">
            <h4>Name : <?=session::get_value('first_name');?>&ensp;<?=session::get_value('last_name');?></h4>
            <h4>Email : <?=session::get_value('email');?></h4>
            <h4>Phone : <?=session::get_value('phone');?></h4>
            <h4>Gender : <?=session::get_value('gender');?></h4>
            <h4>Age : <?=session::get_value('age');?></h4>
          </div>
        </div>
        <!-- <div class="card1-social">
        <a href="#"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.997 3.985h2.191V.169C17.81.117 16.51 0 14.996 0c-3.159 0-5.323 1.987-5.323 5.639V9H6.187v4.266h3.486V24h4.274V13.267h3.345l.531-4.266h-3.877V6.062c.001-1.233.333-2.077 2.051-2.077z" /></svg></a>
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z" /></svg></a>
        <a href="#"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
            <path d="M301 256c0 24.852-20.148 45-45 45s-45-20.148-45-45 20.148-45 45-45 45 20.148 45 45zm0 0" />
            <path d="M332 120H180c-33.086 0-60 26.914-60 60v152c0 33.086 26.914 60 60 60h152c33.086 0 60-26.914 60-60V180c0-33.086-26.914-60-60-60zm-76 211c-41.355 0-75-33.645-75-75s33.645-75 75-75 75 33.645 75 75-33.645 75-75 75zm86-146c-8.285 0-15-6.715-15-15s6.715-15 15-15 15 6.715 15 15-6.715 15-15 15zm0 0" />
            <path d="M377 0H135C60.562 0 0 60.563 0 135v242c0 74.438 60.563 135 135 135h242c74.438 0 135-60.563 135-135V135C512 60.562 451.437 0 377 0zm45 332c0 49.625-40.375 90-90 90H180c-49.625 0-90-40.375-90-90V180c0-49.625 40.375-90 90-90h152c49.625 0 90 40.375 90 90zm0 0" /></svg></a>
        <a href="#"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 002.882 0z" /></svg></a>
      </div> -->
      </div>
      <div class="card1-section" id="experience">
        <div class="card1-content">
          <!-- <div class="card1-subtitle">WORK EXPERIENCE</div> -->
          <!-- <div class="card1-timeline">
          <div class="card1-item" data-year="2014">
            <div class="card1-item-title">Front-end Developer at <span>JotForm</span></div>
            <div class="card1-item-desc">Disrupt stumptown retro everyday carry unicorn.</div>
          </div>
          <div class="card1-item" data-year="2016">
            <div class="card1-item-title">UI Developer at <span>GitHub</span></div>
            <div class="card1-item-desc">Developed new conversion funnels and disrupt.</div>
          </div>
          <div class="card1-item" data-year="2018">
            <div class="card1-item-title">Illustrator at <span>Google</span></div>
            <div class="card1-item-desc">Onboarding illustrations for App.</div>
          </div>
          <div class="card1-item" data-year="2020">
            <div class="card1-item-title">Full-Stack Developer at <span>CodePen</span></div>
            <div class="card1-item-desc">Responsible for the encomposing brand expreience.</div>
          </div>
        </div> -->
          <!-- <div class="card1-subtitle">ABOUT</div> -->
          <div class="card1-desc" style="min-width: 590px !important;padding-left: 10px;" c>
            <div class="card1-subtitle">First Address :</div>
            <p style="font-size: 16px;"><?=session::get_value('address1');?></p>
            <div class="card1-subtitle">Second Address :</div>
            <p style="font-size: 16px;"><?=session::get_value('address2');?></p>
            <div class="card1-subtitle">city :</div>
            <p style="font-size: 16px;"><?=session::get_value('city');?></p>
            <div class="card1-subtitle">State :</div>
            <p style="font-size: 16px;"><?=session::get_value('state');?></p>
            <div class="card1-subtitle">Zip code :</div>
            <p style="font-size: 16px;"><?=session::get_value('zip');?></p>
            <div class="card1-subtitle">Your height :</div>
            <p style="font-size: 16px;"><?=session::get_value('height');?></p>
            <div class="card1-subtitle">Your weight :</div>
            <p style="font-size: 16px;"><?=session::get_value('weight');?></p>
          </div>
        </div>
      </div>
      <div class="card1-section" id="contact">
        <div class="card1-content">
          <div class="card1-subtitle">CONTACT</div>
          <div class="card1-contact-wrapper">
            <div class="card1-contact">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                <circle cx="12" cy="10" r="3" />
              </svg>
              Algonquin Rd, Three Oaks Vintage, MI, 49128
            </div>
            <div class="card1-contact">
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" />
              </svg>(269) 756-9809
            </div>
            <div class="card1-contact">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                <path d="M22 6l-10 7L2 6" />
              </svg>
              william@rocheald.com
            </div>
            <!-- <button class="contact-me">WORK TOGETHER</button> -->
          </div>
        </div>
      </div>
      <div class="card1-buttons">
        <button data-section="#about" class="is-active">ABOUT</button>
        <button data-section="#experience">MORE</button>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
<!-- <script  src="./script.js"></script>
    -->
<script>
  const buttons = document.querySelectorAll(".card1-buttons button");
  const sections = document.querySelectorAll(".card1-section");
  const card1 = document.querySelector(".card1");

  const handleButtonClick = e => {
    const targetSection = e.target.getAttribute("data-section");
    const section = document.querySelector(targetSection);
    targetSection !== "#about" ?
      card1.classList.add("is-active") :
      card1.classList.remove("is-active");
    card1.setAttribute("data-state", targetSection);
    sections.forEach(s => s.classList.remove("is-active"));
    buttons.forEach(b => b.classList.remove("is-active"));
    e.target.classList.add("is-active");
    section.classList.add("is-active");
  };

  buttons.forEach(btn => {
    btn.addEventListener("click", handleButtonClick);
  });
</script>