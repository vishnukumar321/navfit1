<footer class="py-5" style="backdrop-filter: blur(20px) !important;background-color: rgba(107, 107, 107, 0.17) !important; padding:20px;">
      <div class="row">
        <div class="col-6 col-md-2 mb-3" style="margin-right: 72px;">
          <h5>About</h5><br>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Referrel</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">MyStatus</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Account</a></li>
          </ul>
        </div>

        <div class="col-6 col-md-2 mb-3" style="margin-right: 72px;">
          <h5>Features</h5><br>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">BMI</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">BMR</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Check Workouts</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Logout</a></li>
          </ul>
        </div>

        <div class="col-6 col-md-2 mb-3"  style="width: 300px;margin-right: 72px;">
          <h5>Contact</h5><br>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Enquiry Number:+91 9656357874</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Chat Support  :+91 8590245538</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Mail : abhinavabhi71011@gmail.com</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs : vishnuckhjv7@gmail.com</a></li>
          </ul>
        </div>

        <div class="col-md-5 col-6" style="width: 300px !important;margin-right: 72px;">
            <h5><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-c-circle" viewBox="0 0 16 16">
  <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512"/>
</svg>2025 NavFit</h5><br>
            <p>All Rights Reserved.</p>
            <p>Designed and Developed by</p>
            <p>Vishnu VK & Abhinav PS</p>
        </div>
      </div>

      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <!-- <p>&copy; 2024 Company, Inc. All rights reserved.</p> -->
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#twitter" />
              </svg></a></li>
          <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#instagram" />
              </svg></a></li>
          <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#facebook" />
              </svg></a></li>
        </ul>
      </div>
    </footer>
    <script src="/assets/dist/js/bootstrap.bundle.min.js">
      const buttons = document.querySelectorAll(".card-buttons button");
const sections = document.querySelectorAll(".card-section");
const card = document.querySelector(".card");

const handleButtonClick = e => {
  const targetSection = e.target.getAttribute("data-section");
  const section = document.querySelector(targetSection);
  targetSection !== "#about" ?
  card.classList.add("is-active") :
  card.classList.remove("is-active");
  card.setAttribute("data-state", targetSection);
  sections.forEach(s => s.classList.remove("is-active"));
  buttons.forEach(b => b.classList.remove("is-active"));
  e.target.classList.add("is-active");
  section.classList.add("is-active");
};

buttons.forEach(btn => {
  btn.addEventListener("click", handleButtonClick);
});
    </script>
    

</body>

</html>
<?php
if(isset($_GET['update'])){
  ?><script>alert("Updated...")</script><?php
  echo '<script>window.location.href="/profile.php";</script>';
}
if(isset($_GET['no_update'])){
  ?><script>alert("Sorry you can't update...")</script><?php
  echo '<script>window.location.href="/profile.php";</script>';
}
if(isset($_GET['pro_sub_true'])){
  ?><script>alert("pro level subscription unlocked...")</script><?php
  echo '<script>window.location.href="/refferal.php";</script>';
}
if(isset($_GET['pro_sub_false'])){
  ?><script>alert("Insufficient token balance...")</script><?php
  echo '<script>window.location.href="/refferal.php";</script>';
}
if(isset($_GET['pre_sub_true'])){
  ?><script>alert("Premium level subscription unlocked...")</script><?php
  echo '<script>window.location.href="/refferal.php";</script>';
}
if(isset($_GET['pre_sub_false'])){
  ?><script>alert("Insufficient token balance...")</script><?php
  echo '<script>window.location.href="/refferal.php";</script>';
}
?>