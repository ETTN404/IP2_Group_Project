<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Header</title>
  </head>
  <style>
    /* body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 16x;
  padding-top: 11px;
} */
#moon {
  display: none;
}
.light * {
  background-color: white;
  color: #000000;
  fill: red;
}
.night * {
  color: #8c8fac;
  background-color: #092039;
}
.light  {
  background-color: white;
  color: #000000;
  fill: red;
}
.night  {
  color: #8c8fac;
  background-color: #092039;
}
#daynight{
  left:0px;
}

.Header {
  position: fixed;
  display: flex;
  z-index: 9999;
  /* background-color: #092039; */
  height: 35px;
  left: 0;
  right: 0;
  top: 0;
  padding: 10px;
  padding-bottom: 12px;
  border-bottom: 1px solid #8c8fac;
}
.Headers_left {
  display: flex;
  width: 110px;

  position: relative;
}
.Headers_middle {
  display: flex;
  position: relative;
  flex: 1;
  margin-left: 4px;
}
.Headers_left img {
  height: 130%;
}
.Headers_left ul {
  /* color: #092039; */
}

#Dropdown_container_catagory div {
  color: #8c8fac;
  height: 35px;
  padding-left: 20px;
  cursor: pointer;
  position: relative;
}

#Dropdown_container_catagory p {
  font-size: small;
  display: inline-block;
}
#arrow {
  right: 4px;
  top: 6px;
}
#Dropdown_container_catagory p:hover {
  color: white;
}
#Dropdown_container_catagory {
  padding-bottom: 100px;
  border-right: #8c8fac53 solid 2px;
  border-left: #8c8fac53 solid 2px;
  border-bottom: #8c8fac53 solid 2px;
  /* background-color: #092039; */
  top: 48px;
  padding-top: 13px;
  display: none;
  flex-direction: column;
  position: absolute;
  min-width: 242px;
  left: -125px;
}
#Dropdown_container_profile div div {
  /* color: #8c8fac; */
  height: 35px;
  padding-left: 20px;
  cursor: pointer;
  font-size: small;
}
#Dropdown_container_profile div div:hover {
  color: white;
}
#identify {
  border-bottom: 1px solid#8c8fac;
  margin-bottom: 22px;
}
#Dropdown_container_profile {
  padding-bottom: 44px;
  border-left: #8c8fac53 solid 2px;
  border-bottom: #8c8fac53 solid 2px;
  /* background-color: #092039; */
  top: 48px;
  right: -20px;
  padding-top: 13px;
  display: none;
  flex-direction: column;
  position: absolute;
  min-width: 211px;
}

.Headers_middle input {
  flex: 1;
  margin-left: 22px;
  margin-right: 22px;
  padding: 0px 4px;
  outline: none;
  border: none;
  border-bottom: 1px solid #8c8fac;
  background-color: transparent;
  color: #b4b6c7;
}
#searchbutton {
  position: absolute;
  right: 33px;
  top: 2px;
}

.Headers_middle p {
  text-align: center;
  align-content: center;
  margin: 11px 0px;
  /* color: #b9bac9; */
  text-decoration: none;
  margin-top: -1px;
  padding-top: 11px;
  cursor: pointer;
}
#home_menu:hover,
#humburger-menu:hover {
  cursor: pointer;
}
input::placeholder {
  /* color: #8c8fac67; */
  font-weight: bolder;
  font-size: 16px;
}
.Headers_right {
  display: flex;
  height: inherit;
  margin-left: 3px;
  margin-right: 8px;
  position: relative;
}

.profileimg {
  height: 32px;
  width: 32px;
  border: solid #8c8fac;
  border-width: 2px;
  border-radius: 50%;
  object-fit: fill;
  cursor: pointer;
}
.logout {
  max-width: 155px;
  margin-right: 33px;
  padding: 6px 14px;
}
.Mylearning a {
  vertical-align: middle;

  text-align: center;
  /* color: #b5b7c8; */
}

.Mylearning {
  max-width: 155px;
  padding: 6px 14px;
}
.logout a {
  vertical-align: middle;

  text-align: center;
  /* color: #b5b7c8; */
}
.notification {
  left: 0;
  padding: 0px 20px;
  transform: scale(0.7);
}
#humburger-menu {
  transform: scale(0.7);
}

  </style>
  <!-- <body> -->
    <!-- <div id="body" class="night"> -->
      <div class="Header">
        <div class="Headers_left">
          <!-- <div id="Dropdown_container" class="on off">
          <ul>
            Group name
            <p>eyob taye</p>
            <p>ermiyas henok</p>
            <p>seud abdulsemed</p>
            <p>julia kalegze</p>
            <p>adem mohammed</p>
          </ul>
        </div>
-->

          <img
            src="../picture/skill01.png"
            id="home_menu"
            class="humb1"
            alt="logo"
          />
        </div>
        <div class="Headers_middle">
          <p id="catagoryid">catagory</p>
          <div id="Dropdown_container_catagory">
            <div>
              <div id="arrow" style="position: absolute">></div>
              <p>Development</p>
            </div>
            <div>
              <div id="arrow" style="position: absolute">></div>
              <p>Business</p>
            </div>
            <div>
              <div id="arrow" style="position: absolute">></div>
              <p>Finance & Accounting</p>
            </div>
            <div>
              <div id="arrow" style="position: absolute">></div>
              <p>IT & Software</p>
            </div>
            <div>
              <div id="arrow" style="position: absolute">></div>
              <p>Office Productivity</p>
            </div>
            <div>
              <div id="arrow" style="position: absolute">></div>
              <p>Personal Development</p>
            </div>
            <div>
              <div id="arrow" style="position: absolute">></div>
              <p>Design</p>
            </div>
            <div>
              <div id="arrow" style="position: absolute">></div>
              <p>Marketing</p>
            </div>
            <div>
              <div id="arrow" style="position: absolute">></div>
              <p>Lifestyle</p>
            </div>
            <div>
              <div id="arrow" style="position: absolute">></div>
              <p>Photography & Video</p>
            </div>
            <div>
              <div id="arrow" style="position: absolute">></div>
              <p>Health & Fitness</p>
            </div>
            <div>
              <div id="arrow" style="position: absolute">></div>
              <p>Music</p>
            </div>
            <div>
              <div id="arrow" style="position: absolute">></div>
              <p>Teaching & Academics</p>
            </div>
          </div>

          <input type="text" placeholder="Search" />
          <img
            src="../svgs/search.svg"
            alt="search"
            id="searchbutton"
            width="24"
            height="24"
          />
        </div>
        <div id="Headers_right" class="Headers_right">
          <div class="Mylearning">
            <a href="html.html" style="text-decoration: none">Mylearning</a>
          </div>
          <img
            width="30"
            height="30"
            class="notification"
            src="../svgs/bookmark.svg"
            alt=""
          />

          <img
            id="humburger-menu"
            class="humb1"
            width="30"
            height="30"
            src="../svgs/cart-shopping.svg"
            alt=""
          />
          <img
            class="notification"
            src="../svgs/notifications.svg"
            alt=""
          />
          <div class="logout">
            <a href="html.html" style="text-decoration: none">Logout</a>
          </div>
          <img
            class="profileimg"
            id="profileimg"
            src="../picture/profile.jpg"
            alt=""
          />
          <div id="Dropdown_container_profile">
            <div id="identify">
              <div>My learning</div>
              <div>My cart</div>
              <div>Wish list</div>
              <div>Teach on SkillShare</div>
            </div>
            <!--  -->
            <div id="identify">
              <div>Notification</div>
            </div>
            <!--  -->
            <div id="identify">
              <div>Account settings</div>
              <div>Payment methods</div>
              <div>Subscriptions</div>
            </div>
            <!--  -->
            <div id="identify">
              <div>Language</div>
            </div>
            <!--  -->
            <div id="identify">
              <div>Edit profile</div>
            </div>
            <!--  -->
            <div id="identify">
              <div>Help and support</div>
              <div>Log out</div>
            </div>
            <div
              id="identify"
              class="daynight"
              style="border: none; position: relative"
            >
              <div
                style="width: 20px; height: 20px; position: absolute"
                id="daynight"
              >
                <img id="moon" src="../svgs/moon.svg" alt="" />
                <img id="sun" src="../svgs/sun.svg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div id="check"></div> -->
    <!-- </div> -->
  <!-- </body> -->
  <script>
    const profileimg = document.getElementById('profileimg');
    const dropdowncontainerprofile = document.getElementById(
      'Dropdown_container_profile'
    );
    profileimg.addEventListener('click', isclicked);
    var clickchecker = false;
    function isclicked() {
      if (clickchecker == true) {
        dropdowncontainerprofile.style.display = 'none';
        clickchecker = false;
      } else {
        dropdowncontainerprofile.style.display = 'flex';
        clickchecker = true;
      }
    }
    document.addEventListener('click', (event) => {
      if (
        !event.target.closest('#Dropdown_container_profile') &&
        !event.target.closest('#profileimg')
      ) {
        dropdowncontainerprofile.style.display = 'none';
        clickchecker = false;
      }
    });

    const catagoryid = document.getElementById('catagoryid');
    const dropdowncontainercatagory = document.getElementById(
      'Dropdown_container_catagory'
    );
    catagoryid.addEventListener('click', is_clicked);
    var click_checker = false;
    //the function that is going to be called when we click on the hmburgermenu
    //and help us to display or remove the dropdown div
    function is_clicked() {
      if (click_checker == true) {
        dropdowncontainercatagory.style.display = 'none';
        click_checker = false;
      } else {
        dropdowncontainercatagory.style.display = 'flex';
        click_checker = true;
      }
    }
    document.addEventListener('click', (event) => {
      if (
        !event.target.closest('#Dropdown_container_catagory') &&
        !event.target.closest('#catagoryid')
      ) {
        dropdowncontainercatagory.style.display = 'none';
        click_checker = false;
      }
    });

    const body = document.getElementById('body');
    const moon = document.getElementById('moon');
    const sun = document.getElementById('sun');
    moon.addEventListener('click', () => {
      body.className = 'night';
      moon.style.display = 'none';
      sun.style.display = 'block';
      document.getElementById('home_menu').src = '../picture/skill01.png';
    });
    sun.addEventListener('click', () => {
      body.className = 'light';
      sun.style.display = 'none';
      moon.style.display = 'block';
      document.getElementById('home_menu').src = '../picture/logo_in_white.png';
    });
  </script>
</html>
