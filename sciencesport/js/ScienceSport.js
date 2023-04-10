let navBar = document.getElementById("masthead");
let primary_menu = document.getElementById("primary-menu");
let faBars = document.getElementsByClassName("fa-user-item")[0];
let faBarsMobile = document.getElementsByClassName("mobile-bars-visible")[0];

let firstherohomepageholder = document.getElementsByClassName(
  "first-hero-homepage-holder"
)[0];
let large_image_main_container = document.getElementsByClassName(
  "large_image_main_container"
)[0];
let fourthcontenthomepageholder = document.getElementsByClassName(
  "fourth-content-homepage-holder"
)[0];

let loginorregister = document.getElementsByClassName("log-in-or-register")[0];

setTimeout(() => {
  firstherohomepageholder.classList.remove("first-hero-homepage-holder");
  firstherohomepageholder.classList.add("first-home-page-holder-appear");
}, 300);

let loginorregistermaincontainer = document.getElementsByClassName(
  "login-or-register-main-container"
)[0];

let loginorregistermaincontainerdisabled = document.getElementsByClassName(
  "login-or-register-main-container-disabled"
)[0];

let searchsubmit = document.getElementsByClassName("search-submit")[0];

let submenu = document.getElementsByClassName("sub-menu")[0];
let servicemenuitem = document.getElementsByClassName("services-menu-item")[0];

let mobile = document.getElementById("mobile");

let mainnavigationmobile = document.getElementsByClassName(
  "main-navigation-mobile"
)[0];

let btnfirstherohomepage = document.getElementsByClassName(
  "btn-first-hero-homepage"
)[0];
let pfirstherohomepage = document.getElementsByClassName(
  "p-first-hero-homepage"
)[0];

let btnfirstherohomepagetoggle = false;
let fabars_toggle = false;
let readLesshomepagep = document.createTextNode("Less");
let readMorehomepagep = document.createTextNode("More");

let large_image_btn = document.getElementsByClassName("large_image_btn")[0];
let readLesshomepagelargeimagebtn = document.createTextNode("Read Less");
let readMorehomepagelargeimagebtn = document.createTextNode("Read More");
let largeImagebtnToggle = false;
let large_image_flex_text_container = document.getElementsByClassName(
  "large_image_flex_text_container"
)[0];

let coursesservices = document.getElementsByClassName("courses-services")[0];

let menumenu1container = document.getElementsByClassName(
  "menu-menu-1-container"
)[0];

let loginorregistermaincontainermobile = document.getElementsByClassName(
  "login-or-register-main-container-mobile"
)[0];

let fauseritemmobile = document.getElementsByClassName(
  "fa-user-item-mobile"
)[0];

let fauseritemmobileToggle = false;
let mobileChildSecondToggle = false;
let mobileChildToggle = false;

let regloginmobilecontainer = document.createElement("div");
regloginmobilecontainer.setAttribute("class", "regLoginMobile");

faBars.addEventListener("click", () => {
  if (!fabars_toggle) {
    loginorregistermaincontainer.style.display = "block";
    fabars_toggle = true;
  } else {
    loginorregistermaincontainer.style.display = "none";
    fabars_toggle = false;
  }
});

fauseritemmobile.addEventListener("click", () => {
  if (!fauseritemmobileToggle) {
    fauseritemmobileToggle = true;
    loginorregistermaincontainermobile.classList.replace(
      "login-or-register-main-container-mobile",
      "login-or-register-main-container-mobile-active"
    );
  } else {
    fauseritemmobileToggle = false;
    loginorregistermaincontainermobile.classList.replace(
      "login-or-register-main-container-mobile-active",
      "login-or-register-main-container-mobile"
    );
  }
});

let plusForServiceMenuItem = document.createElement("i");
plusForServiceMenuItem.setAttribute("class", "fa-solid fa-plus");
let minusForServiceMenuItem = document.createElement("i");
minusForServiceMenuItem.setAttribute("class", "fa-solid fa-minus");

let plusForServiceCourseMenuItem = document.createElement("i");
plusForServiceCourseMenuItem.setAttribute(
  "class",
  "fa-solid fa-plus fa-plus-course"
);
let minusForServiceCourseMenuItem = document.createElement("i");
minusForServiceCourseMenuItem.setAttribute(
  "class",
  "fa-solid fa-minus fa-minus-course"
);

Array.from(mobile.children).forEach((mobileChild) => {
  if (mobileChild.classList.contains("services-menu-item")) {
    mobileChild.classList.replace(
      "services-menu-item",
      "services-menu-item-click"
    );
    mobileChild.appendChild(plusForServiceMenuItem);
    mobileChild.addEventListener("click", (e) => {
      if (!mobileChildToggle) {
        mobileChildToggle = true;
        mobileChild.children[1].style.display = "block";
        mobileChild.replaceChild(
          minusForServiceMenuItem,
          plusForServiceMenuItem
        );
      } else {
        mobileChildToggle = false;
        mobileChild.children[1].style.display = "none";
        mobileChild.replaceChild(
          plusForServiceMenuItem,
          minusForServiceMenuItem
        );
      }
      e.stopPropagation();
    });
    Array.from(mobileChild.children[1].children).forEach(
      (mobileChildSecond) => {
        if (mobileChildSecond.classList.contains("courses-services")) {
          mobileChildSecond.classList.replace(
            "courses-services",
            "courses-services-click"
          );
          mobileChildSecond.appendChild(plusForServiceCourseMenuItem);
        }
        mobileChildSecond.addEventListener("click", (e) => {
          if (!mobileChildSecondToggle) {
            mobileChildSecondToggle = true;
            mobileChildSecond.children[1].style.display = "block";
            mobileChildSecond.replaceChild(
              minusForServiceCourseMenuItem,
              plusForServiceCourseMenuItem
            );
          } else {
            mobileChildSecondToggle = false;
            mobileChildSecond.children[1].style.display = "none";
            mobileChildSecond.replaceChild(
              plusForServiceCourseMenuItem,
              minusForServiceCourseMenuItem
            );
          }
          e.stopPropagation();
        });
      }
    );
  }
});

window.addEventListener("scroll", () => {
  console.log(window.scrollY);
  if (window.scrollY > 90) {
    navBar.classList.add("masthead_visible");
    Array.from(primary_menu.children).forEach((child) => {
      child.classList.add("child_colored");
      if (child.classList.contains("current_page_item")) {
        child.classList.replace("child_colored", "current_child_colored");
      }
    });
    submenu.style.backgroundColor = "#029faa";
    submenu.style.borderBottomLeftRadius = "2vw";
    submenu.style.zIndex = "-1";
    Array.from(servicemenuitem.children[1].children).forEach((element) => {
      if (element.classList.contains("menu-item-has-children")) {
        element.children[1].style.backgroundColor = "#029faa";
        element.children[1].style.zIndex = "-1";
        Array.from(element.children[1].children).forEach((smallElement) => {
          smallElement.children[0].setAttribute(
            "style",
            "color:white !important"
          );
          smallElement.addEventListener("mouseover", () => {
            smallElement.children[0].setAttribute(
              "style",
              "color:#334f5a  !important"
            );
          });
          smallElement.addEventListener("mouseout", () => {
            smallElement.children[0].setAttribute(
              "style",
              "color:white  !important"
            );
          });
        });
      }
    });
    if (window.innerWidth > 900) {
      faBars.classList.add("faBars_colored");
      if (loginorregistermaincontainer) {
        loginorregistermaincontainer.classList.replace(
          "login-or-register-main-container",
          "login-or-register-main-container-active"
        );
        Array.from(loginorregister.children).forEach((child) => {
          child.classList.replace("loginreg", "loginreg-active");
        });
      }
    }
  } else {
    submenu.style.backgroundColor = "unset";
    navBar.classList.remove("masthead_visible");
    Array.from(primary_menu.children).forEach((child) => {
      child.classList.remove("child_colored");
      if (child.classList.contains("current_page_item")) {
        child.classList.replace("current_child_colored", "current_page_item");
      }
    });
    Array.from(servicemenuitem.children[1].children).forEach((element) => {
      if (element.classList.contains("menu-item-has-children")) {
        element.children[1].style.backgroundColor = "unset";
        Array.from(element.children[1].children).forEach((smallElement) => {
          smallElement.children[0].setAttribute(
            "style",
            "color:#029faa; !important"
          );
          smallElement.addEventListener("mouseout", () => {
            smallElement.children[0].setAttribute(
              "style",
              "color:#029faa;  !important"
            );
          });
        });
      }
    });

    faBars.classList.remove("faBars_colored");

    loginorregistermaincontainer.classList.replace(
      "login-or-register-main-container-active",
      "login-or-register-main-container"
    );
    Array.from(loginorregister.children).forEach((child) => {
      child.classList.replace("loginreg-active", "loginreg");
    });
  }

  if (window.scrollY > 600 && window.innerWidth > 1750) {
    large_image_main_container.classList.remove("large_image_main_container");
    large_image_main_container.classList.add(
      "large_image_main_container_appear"
    );
  }
  if (window.scrollY > 3100 && window.innerWidth > 1750) {
    fourthcontenthomepageholder.classList.remove(
      "fourth-content-homepage-holder"
    );
    fourthcontenthomepageholder.classList.add(
      "fourth-content-homepage-holder-appear"
    );
  }
});

let faBarsMobileToggle = false;
faBarsMobile.addEventListener("click", () => {
  if (!faBarsMobileToggle) {
    if (mainnavigationmobile.classList.contains("main-navigation-mobile")) {
      mainnavigationmobile.classList.replace(
        "main-navigation-mobile",
        "main-navigation-mobile-active"
      );
      faBarsMobileToggle = true;
    }
    if (
      mainnavigationmobile.classList.contains("main-navigation-mobile-hidden")
    ) {
      mainnavigationmobile.classList.replace(
        "main-navigation-mobile-hidden",
        "main-navigation-mobile-active"
      );
    }
    faBarsMobileToggle = true;
  } else {
    mainnavigationmobile.classList.replace(
      "main-navigation-mobile-active",
      "main-navigation-mobile-hidden"
    );
    faBarsMobileToggle = false;
  }
});

btnfirstherohomepage.addEventListener("click", () => {
  if (!btnfirstherohomepagetoggle) {
    pfirstherohomepage.classList.replace(
      "p-first-hero-homepage",
      "p-first-hero-homepage-scroll"
    );
    btnfirstherohomepage.childNodes[0].remove(
      btnfirstherohomepage.childNodes[0]
    );
    btnfirstherohomepage.appendChild(readLesshomepagep);
    btnfirstherohomepagetoggle = true;
  } else {
    pfirstherohomepage.classList.replace(
      "p-first-hero-homepage-scroll",
      "p-first-hero-homepage"
    );
    btnfirstherohomepage.childNodes[0].remove(
      btnfirstherohomepage.childNodes[0]
    );
    btnfirstherohomepage.appendChild(readMorehomepagep);
    btnfirstherohomepagetoggle = false;
  }
});

large_image_btn.addEventListener("click", () => {
  if (!largeImagebtnToggle) {
    Array.from(large_image_flex_text_container.children).forEach(
      (largeChild) => {
        largeChild.classList.add("large_image_flex_text_container-p-show");
      }
    );
    large_image_btn.childNodes[0].remove(btnfirstherohomepage.childNodes[0]);
    large_image_btn.appendChild(readLesshomepagelargeimagebtn);
    largeImagebtnToggle = true;
  } else {
    Array.from(large_image_flex_text_container.children).forEach(
      (largeChild) => {
        largeChild.classList.remove("large_image_flex_text_container-p-show");
      }
    );
    large_image_btn.childNodes[0].remove(btnfirstherohomepage.childNodes[0]);
    large_image_btn.appendChild(readMorehomepagelargeimagebtn);
    largeImagebtnToggle = false;
  }
});
