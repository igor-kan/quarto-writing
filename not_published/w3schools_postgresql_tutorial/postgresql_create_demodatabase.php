<!DOCTYPE html>
<html lang="en-US">
<head>
<title>PostgreSQL - Create Demo Databse</title>
<!-- [START] inc_meta.inc -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="title" content="W3Schools.com">
<meta property="og:title" content="W3Schools.com">
<meta name="Keywords" content="HTML, Python, CSS, SQL, JavaScript, How to, PHP, Java, C, C++, C#, jQuery, Bootstrap, Colors, W3.CSS, XML, MySQL, Icons, NodeJS, React, Graphics, Angular, R, AI, Git, Data Science, Code Game, Tutorials, Programming, Web Development, Training, Learning, Quiz, Exercises, Courses, Lessons, References, Examples, Learn to code, Source code, Demos, Tips, Website">
<meta name="Description" content="Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java and XML.">
<meta property="og:image" content="https://www.w3schools.com/images/w3schools_logo_436_2.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="436">
<meta property="og:image:height" content="228">
<meta property="og:description" content="W3Schools offers free online tutorials, references and exercises in all the major languages of the web. Covering popular subjects like HTML, CSS, JavaScript, Python, SQL, Java, and many, many more.">
<link rel="icon" href="https://www.w3schools.com/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest" crossorigin="use-credentials">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#04aa6d">
<meta name="msapplication-TileColor" content="#00a300">
<meta name="theme-color" content="#ffffff">
<meta name="format-detection" content="telephone=no">
<link rel="preload" href="/lib/fonts/fontawesome.woff2?14663396" as="font" type="font/woff2" crossorigin> 
<link rel="preload" href="/lib/fonts/source-code-pro-v14-latin-regular.woff2" as="font" type="font/woff2" crossorigin> 
<link rel="preload" href="/lib/fonts/roboto-mono-v13-latin-500.woff2" as="font" type="font/woff2" crossorigin> 
<link rel="preload" href="/lib/fonts/source-sans-pro-v14-latin-700.woff2" as="font" type="font/woff2" crossorigin> 
<link rel="preload" href="/lib/fonts/source-sans-pro-v14-latin-600.woff2" as="font" type="font/woff2" crossorigin> 
<link rel="preload" href="/lib/fonts/SourceSansPro-Regular.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="/lib/fonts/freckle-face-v9-latin-regular.woff2" as="font" type="font/woff2" crossorigin> 
<link rel="stylesheet" href="/lib/topnav/main.v1.0.108.css">
<link rel="stylesheet" href="/lib/my-learning/main.v1.0.92.css">
<link rel="stylesheet" href="/lib/pathfinder/main.v1.0.12.css">
<link rel="stylesheet" href="/lib/w3schools.css?v=1.0.1">
<link rel="stylesheet" href="/plus/plans/main.v1.0.3.css">
<link rel="stylesheet" href="/lib/sparteo.css?v=1.0.5">
<script data-cfasync=false data-no-optimize=1 data-wpmeteor-nooptimize=true nowprocket>window.FAST_CMP_OPTIONS={domainUid:"849c868d-5fd6-58f9-8963-b1468ae3b279",countryCode:"NO",jurisdiction:"tcfeuv2",customOpener: true,policyUrl:"https://www.w3schools.com/about/about_privacy.asp",displaySynchronous:!1,publisherName:"W3Schools",publisherLogo:function(r){return r.createElement("img",{src:"https://www.w3schools.com/images/w3schools_logo_500_04AA6D.webp",height:"40"})},bootstrap:{excludedIABVendors:[],excludedGoogleVendors:[]},custom:{vendors:[]},},function(){var o={484:function(r){window.FAST_CMP_T0=Date.now(),window.FAST_CMP_QUEUE={},window.FAST_CMP_QUEUE_ID=0,r.exports={name:"light",handler:function(){var r=Array.prototype.slice.call(arguments);if(!r.length)return Object.values(window.FAST_CMP_QUEUE);"ping"===r[0]?"function"==typeof r[2]&&r[2]({cmpLoaded:!1,cmpStatus:"stub",apiVersion:"2.0",cmpId:parseInt("388",10)}):window.FAST_CMP_QUEUE[window.FAST_CMP_QUEUE_ID++]=r}}}},n={};function e(r){return(e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(r){return typeof r}:function(r){return r&&"function"==typeof Symbol&&r.constructor===Symbol&&r!==Symbol.prototype?"symbol":typeof r})(r)}var r,a=function r(e){var a=n[e];if(void 0!==a)return a.exports;var t=n[e]={exports:{}};return o[e](t,t.exports,r),t.exports}(484),i="__tcfapiLocator",c=window,t=c;for(;t;){try{if(t.frames[i]){r=t;break}}catch(o){}if(t===c.top)break;t=t.parent}if("custom"!==c.FAST_CMP_HANDLER)for(var s in r?(c.__tcfapi=a.handler,c.FAST_CMP_HANDLER=a.name):(function r(){var e=c.document,a=!!c.frames[i];if(!a)if(e.body){var t=e.createElement("iframe");t.style.cssText="display:none",t.name=i,e.body.appendChild(t)}else setTimeout(r,5);return!a}(),c.__tcfapi=a.handler,c.FAST_CMP_HANDLER=a.name,c.addEventListener("message",function(t){var o="string"==typeof t.data,r={};if(o)try{r=JSON.parse(t.data)}catch(t){}else r=t.data;var n="object"===e(r)?r.__tcfapiCall:null;n&&window.__tcfapi(n.command,n.version,function(r,e){var a={__tcfapiReturn:{returnValue:r,success:e,callId:n.callId}};t&&t.source&&t.source.postMessage&&t.source.postMessage(o?JSON.stringify(a):a,"*")},n.parameter)},!1)),window.FAST_CMP_QUEUE||{})c.__tcfapi.apply(null,window.FAST_CMP_QUEUE[s])}()</script>
<script data-cfasync=false data-no-optimize=1 data-wpmeteor-nooptimize=true nowprocket async charset=UTF-8 src=https://static.fastcmp.com/fast-cmp-stub.js></script><style>
#nav_tutorials,#nav_references,#nav_certified,#nav_services,#nav_exercises {display:none;letter-spacing:0;position:absolute;width:100%;background-color:#282A35;color:white;padding-bottom:40px;z-index: 5 !important;font-family: 'Source Sans Pro Topnav', sans-serif !important;}
</style>
<script src='/lib/prism2.js'></script><link rel='stylesheet' href='/lib/prism1.css'><!-- Google Tag Manager -->
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KTCFC3S');

var subjectFolder = location.pathname;
subjectFolder = subjectFolder.replace("/", "");
if (subjectFolder.startsWith("python/") == true ) {
  if (subjectFolder.includes("/numpy/") == true ) {
    subjectFolder = "numpy/"
  } else if (subjectFolder.includes("/pandas/") == true ) {
      subjectFolder = "pandas/"
  } else if (subjectFolder.includes("/scipy/") == true ) {
      subjectFolder = "scipy/"
  }
}
subjectFolder = subjectFolder.substr(0, subjectFolder.indexOf("/"));
</script>
<!-- End Google Tag Manager -->
<script src="/lib/uic.js?v=1.1.0"></script>
<script src="/lib/uic_prov.js?v=1.5.0"></script>
<script data-cfasync="false" type="text/javascript">
uic_prov_pre("default","",subjectFolder);
var stickyadstatus = "";
function fix_stickyad() {
  document.getElementById("stickypos").style.position = "sticky";
  var elem = document.getElementById("stickyadcontainer");
  if (!elem) {return false;}
  if (document.getElementById("skyscraper")) {
    var skyWidth = Number(w3_getStyleValue(document.getElementById("skyscraper"), "width").replace("px", ""));
    if (isNaN(skyWidth) && document.getElementById("upperfeatureshowcaselink").parentElement) {
      skyWidth = Number(w3_getStyleValue(document.getElementById("upperfeatureshowcaselink").parentElement, "width").replace("px", ""));
    }
  }
  else {
    var skyWidth = Number(w3_getStyleValue(document.getElementById("right"), "width").replace("px", ""));  
  }
  elem.style.width = skyWidth + "px";
  if (window.innerWidth <= 992) {
    elem.style.position = "";
    elem.style.top = stickypos + "px";
    return false;
  }
  var stickypos = document.getElementById("stickypos").offsetTop;
  var docTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
  var adHeight = Number(w3_getStyleValue(elem, "height").replace("px", ""));
  if (stickyadstatus == "") {
    if ((stickypos - docTop) < 100) {
      elem.style.position = "fixed";
      elem.style.top = "100px";
      stickyadstatus = "sticky";
      document.getElementById("stickypos").style.position = "sticky";

    }
  } else {
    if ((docTop + 100) - stickypos < 0) {  
      elem.style.position = "";
      elem.style.top = stickypos + "px";
      stickyadstatus = "";
      document.getElementById("stickypos").style.position = "static";
    }
  }
  if (stickyadstatus == "sticky") {
    if ((docTop + adHeight + 100) > document.getElementById("footer").offsetTop) {
      elem.style.position = "absolute";
      elem.style.top = (document.getElementById("footer").offsetTop - adHeight) + "px";
      document.getElementById("stickypos").style.position = "static";
    } else {
        elem.style.position = "fixed";
        elem.style.top = "100px";
        stickyadstatus = "sticky";
        document.getElementById("stickypos").style.position = "sticky";
    }
  }
}
function w3_getStyleValue(elmnt,style) {
  if (window.getComputedStyle) {
    return window.getComputedStyle(elmnt,null).getPropertyValue(style);
  } else {
    return elmnt.currentStyle[style];
  }
}
</script>
<script src="/lib/common-deps/main.v1.0.21.js"></script>
<script src="/lib/user-session/main.v1.0.51.js"></script>
<script src="/lib/topnav/main.v1.0.108.js"></script>
<script src="/lib/my-learning/main.v1.0.92.js"></script>
<!-- [END] inc_meta.inc -->
</head>
<body>

<div id="tnb-search-suggestions"></div>
<div
  id="top-nav-bar"
  class="classic"
>
  <div
    id="pagetop"
    class="w3-bar notranslate w3-white"
  >
    <a
      id="w3-logo"
      href="https://www.w3schools.com"
      class="w3-bar-item w3-button w3-hover-none w3-left ga-top ga-top-w3home"
      title="Home"
      aria-label="Home link"
    >
      <i
        class="fa fa-logo ws-hover-text-green"
        aria-hidden="true"
      ></i>
    </a>
    <nav class="tnb-desktop-nav w3-bar-item">
      <a
        onclick="TopNavBar.openNavItem('tutorials')"
        class="tnb-nav-btn w3-bar-item w3-button barex bar-item-hover w3-padding-16 ga-top ga-top-tut-and-ref"
        href="javascript:void(0)"
        id="navbtn_tutorials"
        title="Tutorials and References"
        role="button"
      >
        Tutorials
        <i
          class="fa fa-caret-down"
          style="font-size: 15px"
          aria-hidden="true"
        ></i>
        <i
          class="fa fa-caret-up"
          style="display: none; font-size: 15px"
          aria-hidden="true"
        ></i>
      </a>
      <a
        onclick="TopNavBar.openNavItem('references')"
        class="tnb-nav-btn w3-bar-item w3-button barex bar-item-hover w3-padding-16 ga-top ga-top-ref"
        href="javascript:void(0)"
        id="navbtn_references"
        title="References"
        role="button"
      >
        References
        <i
          class="fa fa-caret-down"
          style="font-size: 15px"
          aria-hidden="true"
        ></i>
        <i
          class="fa fa-caret-up"
          style="display: none; font-size: 15px"
          aria-hidden="true"
        ></i>
      </a>
      <a
        onclick="TopNavBar.openNavItem('exercises')"
        class="tnb-nav-btn w3-bar-item w3-button barex bar-item-hover w3-padding-16 ga-top ga-top-exc-and-quz"
        href="javascript:void(0)"
        id="navbtn_exercises"
        title="Exercises and Quizzes"
        role="button"
      >
        Exercises
        <i
          class="fa fa-caret-down"
          style="font-size: 15px"
          aria-hidden="true"
        ></i>
        <i
          class="fa fa-caret-up"
          style="display: none; font-size: 15px"
          aria-hidden="true"
        ></i>
      </a>
      <a
        onclick="TopNavBar.openNavItem('certified')"
        class="tnb-nav-btn w3-bar-item w3-button barex bar-item-hover w3-padding-16 tnb-paid-service ga-top ga-top-cert-and-course"
        href="javascript:void(0)"
        id="navbtn_certified"
        title="Certificates"
        role="button"
      >
        Certificates
        <i
          class="fa fa-caret-down"
          style="font-size: 15px"
          aria-hidden="true"
        ></i>
        <i
          class="fa fa-caret-up"
          style="display: none; font-size: 15px"
          aria-hidden="true"
        ></i>
      </a>
    </nav>
    <a
      onclick="TopNavBar.openMenu()"
      class="tnb-menu-btn w3-bar-item w3-button bar-item-hover w3-padding-16 ga-top ga-top-menu"
      href="javascript:void(0)"
      title="Menu"
      aria-label="Menu"
      role="button"
    >
      Menu
      <i
        class="fa fa-caret-down"
        style="font-size: 15px"
        aria-hidden="true"
      ></i>
      <i
        class="fa fa-caret-up"
        style="display: none; font-size: 15px"
        aria-hidden="true"
      ></i>
    </a>
    <div
      id="tnb-google-search-container"
      class="w3-bar-item"
    >
      <div id="tnb-google-search-inner-container">
        <label
          for="tnb-google-search-input"
          class="tnb-soft-hide"
        >
          Search field
        </label>
        <input
          id="tnb-google-search-input"
          type="text"
          placeholder="Search..."
          autocomplete="off"
          onkeydown="TopNavBar.googleSearchAttachKeyPressHandler(event)"
          aria-label="Search field"
          oninput="TopNavBar.searchWithSuggestions(this)"
          onfocus="TopNavBar.searchWithSuggestions(this)"
          onblur="TopNavBar.searchFieldLostFocus(event)"
        />
        <div
          id="tnb-google-search-submit-btn"
          class="tnb-button-light"
          role="button"
          aria-label="Button to search"
          onclick="TopNavBar.googleSearchSubmit()"
        >
          <svg
            id="tnb-google-search-icon"
            viewBox="0 0 17 16"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M11.8153 10.3439C12.6061 9.2673 13.0732 7.9382 13.0732 6.5C13.0732 2.91015 10.163 0 6.57318 0C2.98333 0 0.0731812 2.91015 0.0731812 6.5C0.0731812 10.0899 2.98333 13 6.57318 13C8.01176 13 9.3412 12.5327 10.4179 11.7415L10.4171 11.7422C10.4466 11.7822 10.4794 11.8204 10.5156 11.8566L14.3661 15.7071C14.7566 16.0976 15.3898 16.0976 15.7803 15.7071C16.1708 15.3166 16.1708 14.6834 15.7803 14.2929L11.9298 10.4424C11.8936 10.4062 11.8553 10.3734 11.8153 10.3439ZM12.0732 6.5C12.0732 9.53757 9.61075 12 6.57318 12C3.53561 12 1.07318 9.53757 1.07318 6.5C1.07318 3.46243 3.53561 1 6.57318 1C9.61075 1 12.0732 3.46243 12.0732 6.5Z"
              fill="black"
            ></path>
          </svg>
        </div>
      </div>
      <div id="tnb-google-search-mobile-action-btns">
        <div
          id="tnb-google-search-mobile-show"
          class="tnb-button"
          onclick="TopNavBar.googleSearchShowMobileContainer()"
          aria-label="Button to open search field"
          role="button"
        >
          <svg
            viewBox="0 0 17 16"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M11.8153 10.3439C12.6061 9.2673 13.0732 7.9382 13.0732 6.5C13.0732 2.91015 10.163 0 6.57318 0C2.98333 0 0.0731812 2.91015 0.0731812 6.5C0.0731812 10.0899 2.98333 13 6.57318 13C8.01176 13 9.3412 12.5327 10.4179 11.7415L10.4171 11.7422C10.4466 11.7822 10.4794 11.8204 10.5156 11.8566L14.3661 15.7071C14.7566 16.0976 15.3898 16.0976 15.7803 15.7071C16.1708 15.3166 16.1708 14.6834 15.7803 14.2929L11.9298 10.4424C11.8936 10.4062 11.8553 10.3734 11.8153 10.3439ZM12.0732 6.5C12.0732 9.53757 9.61075 12 6.57318 12C3.53561 12 1.07318 9.53757 1.07318 6.5C1.07318 3.46243 3.53561 1 6.57318 1C9.61075 1 12.0732 3.46243 12.0732 6.5Z"
              fill="currentColor"
            ></path>
          </svg>
        </div>
        <div
          id="tnb-google-search-mobile-close"
          class="tnb-button"
          onclick="TopNavBar.googleSearchHideMobileContainer()"
          role="button"
          aria-label="Close search field"
        >
          <i>&times;</i>
        </div>
      </div>
    </div>
    <div id="tnb-menu-toggle-wrapper">
      <a
        onclick="TopNavBar.openNavItem('services')"
        class="tnb-nav-btn w3-bar-item w3-button barex bar-item-hover ga-top ga-top-services w3-tooltip"
        href="javascript:void(0)"
        id="navbtn_services"
        aria-label="All our services"
        role="button"
      >
        <span
          class="w3-text"
          id="button-to-open-services"
        >
          See More
        </span>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 640 640"
        >
          <path d="M320 208C289.1 208 264 182.9 264 152C264 121.1 289.1 96 320 96C350.9 96 376 121.1 376 152C376 182.9 350.9 208 320 208zM320 432C350.9 432 376 457.1 376 488C376 518.9 350.9 544 320 544C289.1 544 264 518.9 264 488C264 457.1 289.1 432 320 432zM376 320C376 350.9 350.9 376 320 376C289.1 376 264 350.9 264 320C264 289.1 289.1 264 320 264C350.9 264 376 289.1 376 320z" />
        </svg>
        <span style="font-size: 120px">&nbsp;</span>
        <i aria-hidden="true"></i>
        <i aria-hidden="true"></i>
      </a>
    </div>
    <div class="tnb-right-section">
      <!-- < user-anonymous -->
      <div
        id="tnb-login-btn"
        class="user-anonymous tnb-login-btn w3-bar-item w3-btn w3-hide bar-item-hover w3-right w3s-green ga-top ga-top-login"
        title="Sign in to your account"
        aria-label="Sign in to your account"
        tabindex="0"
        role="button"
      >
        <svg
          width="14"
          height="14"
          viewBox="0 0 14 14"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
          class="tnb-sign-in-icon"
        >
          <path
            d="M7 7C8.933 7 10.5 5.433 10.5 3.5C10.5 1.567 8.933 0 7 0C5.067 0 3.5 1.567 3.5 3.5C3.5 5.433 5.067 7 7 7ZM9.33333 3.5C9.33333 4.78866 8.28866 5.83333 7 5.83333C5.71134 5.83333 4.66667 4.78866 4.66667 3.5C4.66667 2.21134 5.71134 1.16667 7 1.16667C8.28866 1.16667 9.33333 2.21134 9.33333 3.5Z"
            fill="white"
          />
          <path
            d="M14 12.8333C14 14 12.8333 14 12.8333 14H1.16667C1.16667 14 0 14 0 12.8333C0 11.6667 1.16667 8.16667 7 8.16667C12.8333 8.16667 14 11.6667 14 12.8333ZM12.8333 12.8293C12.8316 12.5414 12.6539 11.6789 11.8625 10.8875C11.1016 10.1265 9.67062 9.33333 6.99999 9.33333C4.32936 9.33333 2.89841 10.1265 2.13745 10.8875C1.34605 11.6789 1.16833 12.5414 1.16667 12.8293H12.8333Z"
            fill="white"
          />
        </svg>
        <span class="button-text">Sign In</span>
        <span class="button-loader"></span>
      </div>
      <!-- <div
        id="tnb-signup-btn"
        class="user-anonymous tnb-signup-btn w3-bar-item w3-button w3-hide w3-right ws-green ws-hover-green ga-top ga-top-signup"
        title="Sign Up to Improve Your Learning Experience"
        aria-label="Sign Up to Improve Your Learning Experience"
        tabindex="0"
        role="button"
      >
        Sign Up
      </div> -->
      <!-- > user-anonymous -->
      <!-- < user-authenticated -->
      <a
        id="tnb-user-profile"
        href="https://profile.w3schools.com/log-in"
        class="user-authenticated user-profile-btn w3-alt-btn w3-hide ga-top ga-top-profile"
        title="Your W3Schools Profile"
        aria-label="Your W3Schools Profile"
      >
        <!-- <span class="loader"></span> -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          version="1.1"
          viewBox="0 0 2048 2048"
          class="user-profile-icon"
          aria-label="Your W3Schools Profile Icon"
        >
          <path
            d="M 843.500 1148.155 C 837.450 1148.515, 823.050 1149.334, 811.500 1149.975 C 742.799 1153.788, 704.251 1162.996, 635.391 1192.044 C 517.544 1241.756, 398.992 1352.262, 337.200 1470 C 251.831 1632.658, 253.457 1816.879, 340.500 1843.982 C 351.574 1847.431, 1696.426 1847.431, 1707.500 1843.982 C 1794.543 1816.879, 1796.169 1632.658, 1710.800 1470 C 1649.008 1352.262, 1530.456 1241.756, 1412.609 1192.044 C 1344.588 1163.350, 1305.224 1153.854, 1238.500 1150.039 C 1190.330 1147.286, 1196.307 1147.328, 1097 1149.035 C 1039.984 1150.015, 1010.205 1150.008, 950 1149.003 C 851.731 1147.362, 856.213 1147.398, 843.500 1148.155"
            stroke="none"
            fill="#2a93fb"
            fill-rule="evenodd"
          />
          <path
            d="M 1008 194.584 C 1006.075 194.809, 999.325 195.476, 993 196.064 C 927.768 202.134, 845.423 233.043, 786 273.762 C 691.987 338.184, 622.881 442.165, 601.082 552 C 588.496 615.414, 592.917 705.245, 611.329 760.230 C 643.220 855.469, 694.977 930.136, 763.195 979.321 C 810.333 1013.308, 839.747 1026.645, 913.697 1047.562 C 1010.275 1074.879, 1108.934 1065.290, 1221 1017.694 C 1259.787 1001.221, 1307.818 965.858, 1339.852 930.191 C 1460.375 795.998, 1488.781 609.032, 1412.581 451.500 C 1350.098 322.327, 1240.457 235.724, 1097.500 202.624 C 1072.356 196.802, 1025.206 192.566, 1008 194.584"
            stroke="none"
            fill="#0aaa8a"
            fill-rule="evenodd"
          />
        </svg>
        <!-- <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="tnb-user-profile-icon">
          <path
            d="M7 7C8.933 7 10.5 5.433 10.5 3.5C10.5 1.567 8.933 0 7 0C5.067 0 3.5 1.567 3.5 3.5C3.5 5.433 5.067 7 7 7ZM9.33333 3.5C9.33333 4.78866 8.28866 5.83333 7 5.83333C5.71134 5.83333 4.66667 4.78866 4.66667 3.5C4.66667 2.21134 5.71134 1.16667 7 1.16667C8.28866 1.16667 9.33333 2.21134 9.33333 3.5Z"
            fill="black" />
          <path
            d="M14 12.8333C14 14 12.8333 14 12.8333 14H1.16667C1.16667 14 0 14 0 12.8333C0 11.6667 1.16667 8.16667 7 8.16667C12.8333 8.16667 14 11.6667 14 12.8333ZM12.8333 12.8293C12.8316 12.5414 12.6539 11.6789 11.8625 10.8875C11.1016 10.1265 9.67062 9.33333 6.99999 9.33333C4.32936 9.33333 2.89841 10.1265 2.13745 10.8875C1.34605 11.6789 1.16833 12.5414 1.16667 12.8293H12.8333Z"
            fill="black" />
        </svg> -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="user-progress"
          aria-label="Your W3Schools Profile Progress"
        >
          <path
            class="user-progress-circle1"
            fill="none"
            d="M 25.99650934151373 15.00000030461742 A 20 20 0 1 0 26 15"
          ></path>
          <path
            class="user-progress-circle2"
            fill="none"
            d="M 26 15 A 20 20 0 0 0 26 15"
          ></path>
        </svg>
        <span class="user-progress-star">&#x2605;</span>
        <span class="user-progress-point">+1</span>
      </a>
      <!-- <div class="tnb-user-profile-btn-divider"></div> -->
      <!-- > 
      <a
        href="https://pathfinder.w3schools.com"
        class="user-authenticated tnb-dashboard-btn w3-bar-item w3-button w3-hide w3-right w3-white ga-top ga-top-dashboard"
        title="Your W3Schools Dashboard"
        aria-label="Your W3Schools Dashboard"
      >
        My W3Schools
      </a>
      -->
      <!-- > user-authenticated -->
      <!-- < user-anonymous - action-btn -->
      <a
        target="_blank"
        href="https://campus.w3schools.com/collections/course-catalog"
        class="user-anonymous tnb-certificates-btn tnb-right-side-btn w3-bar-item w3-button w3-hide w3-right w3-white ga-top ga-top-certificates"
        title="W3Schools Certificates"
        aria-label="W3Schools Certificates"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="1em"
          viewBox="0 0 576 512"
          aria-hidden="true"
        >
          <path
            d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"
            fill="currentColor"
          />
        </svg>
        Get Certified
      </a>
      <a
        href="https://order.w3schools.com/plans"
        class="user-anonymous tnb-upgrade-btn tnb-right-side-btn w3-bar-item w3-button w3-hide w3-right w3-white ga-top ga-top-plus"
        title="Become a PLUS user and unlock powerful features"
        aria-label="Become a PLUS user and unlock powerful features"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="15"
          height="36"
          viewBox="0 0 12 16"
          fill="none"
          aria-hidden="true"
        >
          <path
            d="M6.65723 6.24707C6.76704 5.91764 7.233 5.91765 7.34281 6.24707L7.98828 8.1835C8.276 9.04666 8.95332 9.72399 9.81648 10.0117L11.7529 10.6572C12.0824 10.767 12.0824 11.233 11.7529 11.3428L9.81649 11.9883C8.95332 12.276 8.27599 12.9533 7.98828 13.8165L7.34281 15.7529C7.233 16.0823 6.76704 16.0823 6.65723 15.7529L6.01173 13.8165C5.72401 12.9533 5.04669 12.276 4.18353 11.9883L2.24707 11.3428C1.91764 11.233 1.91764 10.767 2.24707 10.6572L4.18353 10.0117C5.04669 9.72399 5.72401 9.04667 6.01173 8.18352L6.65723 6.24707Z"
            fill="#9763f6"
          />
          <path
            d="M2.79434 1.14824C2.86023 0.950586 3.1398 0.950587 3.20569 1.14824L3.59297 2.3101C3.7656 2.828 4.172 3.2344 4.6899 3.40703L5.85177 3.79432C6.04942 3.86021 6.04942 4.13978 5.85177 4.20567L4.6899 4.59296C4.172 4.76559 3.7656 5.17199 3.59297 5.68989L3.20569 6.85176C3.13981 7.04941 2.86023 7.04942 2.79434 6.85176L2.40704 5.68988C2.23441 5.17198 1.82801 4.76559 1.31012 4.59296L0.148241 4.20567C-0.0494137 4.13978 -0.0494138 3.86021 0.148241 3.79432L1.31012 3.40703C1.82802 3.2344 2.23441 2.82801 2.40704 2.31011L2.79434 1.14824Z"
            fill="#9763f6"
          />
          <path
            d="M9.8629 0.0988265C9.90682 -0.032943 10.0932 -0.0329419 10.1371 0.098828L10.3953 0.873401C10.5104 1.21867 10.7813 1.4896 11.1266 1.60469L11.9012 1.86288C12.0329 1.9068 12.0329 2.09319 11.9012 2.13711L11.1266 2.39531C10.7813 2.51039 10.5104 2.78133 10.3953 3.12659L10.1371 3.90117C10.0932 4.03294 9.90682 4.03294 9.8629 3.90117L9.6047 3.12659C9.48961 2.78132 9.21868 2.5104 8.87342 2.39531L8.09883 2.13711C7.96706 2.09319 7.96706 1.9068 8.09883 1.86288L8.87342 1.60469C9.21868 1.4896 9.48961 1.21867 9.6047 0.873408L9.8629 0.0988265Z"
            fill="#9763f6"
          />
        </svg>
        Upgrade
      </a>
      <a
        href="/academy/index.php"
        class="user-anonymous tnb-for-teachers tnb-right-side-btn w3-bar-item w3-button w3-hide w3-right w3-white ga-top ga-top-teachers"
        title="Contact us about W3Schools Academy for educational institutions"
        aria-label="Contact us about W3Schools Academy for educational institutions"
      >
        <svg
          stroke="currentColor"
          fill="currentColor"
          stroke-width="0"
          viewBox="0 0 640 512"
          focusable="false"
          class="chakra-icon css-9gdywz"
          height="1em"
          width="1em"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path d="M622.34 153.2L343.4 67.5c-15.2-4.67-31.6-4.67-46.79 0L17.66 153.2c-23.54 7.23-23.54 38.36 0 45.59l48.63 14.94c-10.67 13.19-17.23 29.28-17.88 46.9C38.78 266.15 32 276.11 32 288c0 10.78 5.68 19.85 13.86 25.65L20.33 428.53C18.11 438.52 25.71 448 35.94 448h56.11c10.24 0 17.84-9.48 15.62-19.47L82.14 313.65C90.32 307.85 96 298.78 96 288c0-11.57-6.47-21.25-15.66-26.87.76-15.02 8.44-28.3 20.69-36.72L296.6 284.5c9.06 2.78 26.44 6.25 46.79 0l278.95-85.7c23.55-7.24 23.55-38.36 0-45.6zM352.79 315.09c-28.53 8.76-52.84 3.92-65.59 0l-145.02-44.55L128 384c0 35.35 85.96 64 192 64s192-28.65 192-64l-14.18-113.47-145.03 44.56z"></path>
        </svg>
        Academy
      </a>
      <a
        href="/spaces/index.php"
        class="user-anonymous tnb-spaces-btn tnb-right-side-btn w3-bar-item w3-button w3-hide w3-right w3-white ga-top ga-top-spaces"
        title="Get Your Own Website With W3Schools Spaces"
        aria-label="Get Your Own Website With W3Schools Spaces"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="1em"
          viewBox="0 0 640 512"
          aria-hidden="true"
        >
          <path
            d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3L562.7 256l-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z"
            fill="currentColor"
          />
        </svg>
        Spaces
      </a>
      <a
        href="/practice/index.php"
        class="user-anonymous tnb-practice-btn tnb-right-side-btn w3-bar-item w3-button w3-hide w3-right w3-white ga-top ga-top-practice"
        title="W3Schools Practice Coding Problems"
        aria-label="W3Schools Practice Coding Problems"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="1em"
          viewBox="0 0 640 512"
          aria-hidden="true"
        >
          <path
            d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3L562.7 256l-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z"
            fill="currentColor"
          />
        </svg>
        Practice
      </a>
      <!-- > user-anonymous - action-btn -->
      <!-- < user-authenticated - action-btn -->
      <a
        target="_blank"
        href="https://campus.w3schools.com/collections/course-catalog"
        class="user-authenticated tnb-certificates-btn tnb-right-side-btn w3-bar-item w3-button w3-hide w3-right w3-white ga-top ga-top-certificates"
        title="W3Schools Certificates"
        aria-label="W3Schools Certificates"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="1em"
          viewBox="0 0 576 512"
          aria-hidden="true"
        >
          <path
            d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"
            fill="currentColor"
          />
        </svg>
        Get Certified
      </a>
      <a
        href="https://order.w3schools.com/plans"
        class="user-authenticated tnb-upgrade-btn tnb-right-side-btn w3-bar-item w3-button w3-hide w3-right w3-white ga-top ga-top-goals"
        title="Get personalized learning journey based on your current skills and goals"
        aria-label="Get personalized learning journey based on your current skills and goals"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="15"
          height="36"
          viewBox="0 0 12 16"
          fill="none"
          aria-hidden="true"
        >
          <path
            d="M6.65723 6.24707C6.76704 5.91764 7.233 5.91765 7.34281 6.24707L7.98828 8.1835C8.276 9.04666 8.95332 9.72399 9.81648 10.0117L11.7529 10.6572C12.0824 10.767 12.0824 11.233 11.7529 11.3428L9.81649 11.9883C8.95332 12.276 8.27599 12.9533 7.98828 13.8165L7.34281 15.7529C7.233 16.0823 6.76704 16.0823 6.65723 15.7529L6.01173 13.8165C5.72401 12.9533 5.04669 12.276 4.18353 11.9883L2.24707 11.3428C1.91764 11.233 1.91764 10.767 2.24707 10.6572L4.18353 10.0117C5.04669 9.72399 5.72401 9.04667 6.01173 8.18352L6.65723 6.24707Z"
            fill="#9763f6"
          />
          <path
            d="M2.79434 1.14824C2.86023 0.950586 3.1398 0.950587 3.20569 1.14824L3.59297 2.3101C3.7656 2.828 4.172 3.2344 4.6899 3.40703L5.85177 3.79432C6.04942 3.86021 6.04942 4.13978 5.85177 4.20567L4.6899 4.59296C4.172 4.76559 3.7656 5.17199 3.59297 5.68989L3.20569 6.85176C3.13981 7.04941 2.86023 7.04942 2.79434 6.85176L2.40704 5.68988C2.23441 5.17198 1.82801 4.76559 1.31012 4.59296L0.148241 4.20567C-0.0494137 4.13978 -0.0494138 3.86021 0.148241 3.79432L1.31012 3.40703C1.82802 3.2344 2.23441 2.82801 2.40704 2.31011L2.79434 1.14824Z"
            fill="#9763f6"
          />
          <path
            d="M9.8629 0.0988265C9.90682 -0.032943 10.0932 -0.0329419 10.1371 0.098828L10.3953 0.873401C10.5104 1.21867 10.7813 1.4896 11.1266 1.60469L11.9012 1.86288C12.0329 1.9068 12.0329 2.09319 11.9012 2.13711L11.1266 2.39531C10.7813 2.51039 10.5104 2.78133 10.3953 3.12659L10.1371 3.90117C10.0932 4.03294 9.90682 4.03294 9.8629 3.90117L9.6047 3.12659C9.48961 2.78132 9.21868 2.5104 8.87342 2.39531L8.09883 2.13711C7.96706 2.09319 7.96706 1.9068 8.09883 1.86288L8.87342 1.60469C9.21868 1.4896 9.48961 1.21867 9.6047 0.873408L9.8629 0.0988265Z"
            fill="#9763f6"
          />
        </svg>
        Upgrade
      </a>
      <a
        href="/academy/index.php"
        class="user-authenticated tnb-for-teachers tnb-right-side-btn w3-bar-item w3-button w3-hide w3-right w3-white ga-top ga-top-teachers"
        title="Contact us about W3Schools Academy for educational institutions"
        aria-label="Contact us about W3Schools Academy for educational institutions"
      >
        <svg
          stroke="currentColor"
          fill="currentColor"
          stroke-width="0"
          viewBox="0 0 640 512"
          focusable="false"
          class="chakra-icon css-9gdywz"
          height="1em"
          width="1em"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path d="M622.34 153.2L343.4 67.5c-15.2-4.67-31.6-4.67-46.79 0L17.66 153.2c-23.54 7.23-23.54 38.36 0 45.59l48.63 14.94c-10.67 13.19-17.23 29.28-17.88 46.9C38.78 266.15 32 276.11 32 288c0 10.78 5.68 19.85 13.86 25.65L20.33 428.53C18.11 438.52 25.71 448 35.94 448h56.11c10.24 0 17.84-9.48 15.62-19.47L82.14 313.65C90.32 307.85 96 298.78 96 288c0-11.57-6.47-21.25-15.66-26.87.76-15.02 8.44-28.3 20.69-36.72L296.6 284.5c9.06 2.78 26.44 6.25 46.79 0l278.95-85.7c23.55-7.24 23.55-38.36 0-45.6zM352.79 315.09c-28.53 8.76-52.84 3.92-65.59 0l-145.02-44.55L128 384c0 35.35 85.96 64 192 64s192-28.65 192-64l-14.18-113.47-145.03 44.56z"></path>
        </svg>
        Academy
      </a>
      <a
        href="https://spaces.w3schools.com"
        class="user-authenticated tnb-spaces-btn tnb-right-side-btn w3-bar-item w3-button w3-hide w3-right w3-white ga-top ga-top-spaces"
        title="Go to Your W3Schools Space"
        aria-label="Go to Your W3Schools Space"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="1em"
          viewBox="0 0 640 512"
          aria-hidden="true"
        >
          <path
            d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3L562.7 256l-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z"
            fill="currentColor"
          />
        </svg>
        Spaces
      </a>
      <a
        href="/practice/index.php"
        class="user-authenticated tnb-practice-btn tnb-right-side-btn w3-bar-item w3-button w3-hide w3-right w3-white ga-top ga-top-practice"
        title="W3Schools Practice Coding Problems"
        aria-label="W3Schools Practice Coding Problems"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="1em"
          viewBox="0 0 640 512"
          aria-hidden="true"
        >
          <path
            d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3L562.7 256l-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z"
            fill="currentColor"
          />
        </svg>
        Practice
      </a>
      <!-- > user-authenticated - action-btn -->
    </div>
  </div>
  <nav
    id="tnb-mobile-nav"
    class="tnb-mobile-nav w3-hide"
  >
    <div class="w3-container">
      <div
        id="toggle-darkmode-mobile-wrapper"
        style="position: absolute; top: 20px; left: 20px"
      >
        <label class="tnb-toggle-darkmode-switch">
          <input
            type="checkbox"
            id="darkToggle_on_small"
            onclick="TopNavBar.toggleUserPreferredTheme()"
          />
          <span
            class="tnb-toggle-darkmode-slider fa"
            style="user-select: none"
          >
            <span style="position: absolute; left: 0; top: -2px">&#xe80b;</span>
          </span>
        </label>
      </div>
      <a
        href="https://pathfinder.w3schools.com"
        class="user-authenticated w3-button w3-hide ga-top ga-top-dashboard"
        title="My W3Schools"
        aria-label="My W3Schools"
      >
        <span class="tnb-title">My W3Schools</span>
      </a>
      <div
        class="tnb-mobile-nav-section"
        data-section="tutorials"
      >
        <div
          class="tnb-mobile-nav-section-toggle-btn w3-button ga-top ga-top-menu-tut-and-ref"
          onclick="TopNavBar.openNavItem('tutorials');"
          aria-label="Tutorials"
          role="button"
        >
          <span class="tnb-title">Tutorials</span>
          <i
            class="tnb-icon fa fa-caret-down"
            aria-hidden="true"
          ></i>
        </div>
        <div
          id="sectionxs_tutorials"
          class="tnb-mobile-nav-section-body"
        >
          &nbsp;
        </div>
      </div>
      <div
        class="tnb-mobile-nav-section"
        data-section="References"
      >
        <div
          class="tnb-mobile-nav-section-toggle-btn w3-button ga-top ga-top-menu-ref"
          onclick="TopNavBar.openNavItem('references');"
          aria-label="References"
          role="button"
        >
          <span class="tnb-title">References</span>
          <i
            class="tnb-icon fa fa-caret-down"
            aria-hidden="true"
          ></i>
        </div>
        <div
          id="sectionxs_references"
          class="tnb-mobile-nav-section-body"
        >
          &nbsp;
        </div>
      </div>
      <div
        class="tnb-mobile-nav-section"
        data-section="exercises"
      >
        <div
          class="tnb-mobile-nav-section-toggle-btn w3-button ga-top ga-top-menu-exc-and-quz"
          onclick="TopNavBar.openNavItem('exercises');"
          aria-label="Exercises"
          role="button"
        >
          <span class="tnb-title">Exercises</span>
          <i
            class="tnb-icon fa fa-caret-down"
            aria-hidden="true"
          ></i>
        </div>
        <div
          id="sectionxs_exercises"
          class="tnb-mobile-nav-section-body"
        >
          &nbsp;
        </div>
      </div>
      <div
        class="tnb-mobile-nav-section"
        data-section="certified"
      >
        <div
          class="tnb-mobile-nav-section-toggle-btn tnb-paid-service w3-button ga-top ga-top-menu-cert-and-course"
          onclick="TopNavBar.openNavItem('certified');"
          aria-label="Certificates"
          role="button"
        >
          <span class="tnb-title">Certificates</span>
          <i
            class="tnb-icon fa fa-caret-down"
            aria-hidden="true"
          ></i>
        </div>
        <div
          id="sectionxs_certified"
          class="tnb-mobile-nav-section-body"
        >
          &nbsp;
        </div>
      </div>
      <a
        href="/spaces/index.php"
        class="w3-button ga-top ga-top-menu-spaces"
        title="Get Your Own Website With W3Schools Spaces"
        aria-label="Get Your Own Website With W3Schools Spaces"
      >
        <span class="tnb-title">Spaces</span>
        <svg
          class="tnb-icon"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 640 512"
          aria-hidden="true"
        >
          <path
            d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3L562.7 256l-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z"
            fill="currentColor"
          />
        </svg>
      </a>
      <a
        target="_blank"
        href="https://campus.w3schools.com/collections/course-catalog"
        class="w3-button ga-top ga-top-menu-certificates"
        title="W3Schools Certificates"
        aria-label="W3Schools Certificates"
      >
        <span class="tnb-title">Get Certified</span>
        <svg
          class="tnb-icon"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 576 512"
          aria-hidden="true"
        >
          <path
            d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"
            fill="currentColor"
          />
        </svg>
      </a>
      <a
        href="https://order.w3schools.com/plans"
        class="w3-button ga-top ga-top-menu-plus"
        title="Become a PLUS user and unlock powerful features"
        aria-label="Become a PLUS user and unlock powerful features"
      >
        <span class="tnb-title">Plus</span>
        <svg
          class="tnb-icon"
          xmlns="http://www.w3.org/2000/svg"
          width="15"
          height="36"
          viewBox="0 0 12 16"
          fill="none"
          aria-hidden="true"
        >
          <path
            d="M6.65723 6.24707C6.76704 5.91764 7.233 5.91765 7.34281 6.24707L7.98828 8.1835C8.276 9.04666 8.95332 9.72399 9.81648 10.0117L11.7529 10.6572C12.0824 10.767 12.0824 11.233 11.7529 11.3428L9.81649 11.9883C8.95332 12.276 8.27599 12.9533 7.98828 13.8165L7.34281 15.7529C7.233 16.0823 6.76704 16.0823 6.65723 15.7529L6.01173 13.8165C5.72401 12.9533 5.04669 12.276 4.18353 11.9883L2.24707 11.3428C1.91764 11.233 1.91764 10.767 2.24707 10.6572L4.18353 10.0117C5.04669 9.72399 5.72401 9.04667 6.01173 8.18352L6.65723 6.24707Z"
            fill="currentColor"
          />
          <path
            d="M2.79434 1.14824C2.86023 0.950586 3.1398 0.950587 3.20569 1.14824L3.59297 2.3101C3.7656 2.828 4.172 3.2344 4.6899 3.40703L5.85177 3.79432C6.04942 3.86021 6.04942 4.13978 5.85177 4.20567L4.6899 4.59296C4.172 4.76559 3.7656 5.17199 3.59297 5.68989L3.20569 6.85176C3.13981 7.04941 2.86023 7.04942 2.79434 6.85176L2.40704 5.68988C2.23441 5.17198 1.82801 4.76559 1.31012 4.59296L0.148241 4.20567C-0.0494137 4.13978 -0.0494138 3.86021 0.148241 3.79432L1.31012 3.40703C1.82802 3.2344 2.23441 2.82801 2.40704 2.31011L2.79434 1.14824Z"
            fill="currentColor"
          />
          <path
            d="M9.8629 0.0988265C9.90682 -0.032943 10.0932 -0.0329419 10.1371 0.098828L10.3953 0.873401C10.5104 1.21867 10.7813 1.4896 11.1266 1.60469L11.9012 1.86288C12.0329 1.9068 12.0329 2.09319 11.9012 2.13711L11.1266 2.39531C10.7813 2.51039 10.5104 2.78133 10.3953 3.12659L10.1371 3.90117C10.0932 4.03294 9.90682 4.03294 9.8629 3.90117L9.6047 3.12659C9.48961 2.78132 9.21868 2.5104 8.87342 2.39531L8.09883 2.13711C7.96706 2.09319 7.96706 1.9068 8.09883 1.86288L8.87342 1.60469C9.21868 1.4896 9.48961 1.21867 9.6047 0.873408L9.8629 0.0988265Z"
            fill="currentColor"
          />
        </svg>
      </a>
      <a
        href="/practice/index.php"
        class="w3-button ga-top ga-top-menu-practice"
        title="W3Schools Practice Coding Problems"
        aria-label="W3Schools Practice Coding Problems"
      >
        <span class="tnb-title">Practice</span>
      </a>
      <a
        href="/academy/index.php"
        class="w3-button ga-top ga-top-menu-academy"
        title="W3Schools Academy"
        aria-label="W3Schools Academy"
      >
        <span class="tnb-title">Academy</span>
      </a>
      <div
        class="tnb-mobile-nav-section"
        data-section="services"
      >
        <div
          class="tnb-mobile-nav-section-toggle-btn w3-button ga-top ga-top-menu-services"
          onclick="TopNavBar.toggleMobileNav(event, 'services')"
          aria-label="Services"
          role="button"
        >
          <span class="tnb-title">All our Services</span>
          <i
            class="tnb-icon fa fa-caret-down"
            aria-hidden="true"
          ></i>
        </div>
        <div
          id="sectionxs_services"
          class="tnb-mobile-nav-section-body"
        >
          &nbsp;
        </div>
      </div>
      <a
        class="user-authenticated w3-hide w3-button ga-top ga-top-logout"
        href="https://profile.w3schools.com/logout"
        title="Logout"
        aria-label="Logout"
      >
        <span class="tnb-title">Logout</span>
      </a>
      <div
        class="tnb-social-network-btns"
        style="text-align: center"
      >
        <a
          target="_blank"
          href="https://www.youtube.com/@w3schools"
          title="W3Schools on YouTube"
          class="w3-button w3-round ga-fp"
          rel="noopener"
        >
          <i
            class="tnb-icon fa fa-youtube"
            aria-hidden="true"
          ></i>
        </a>
        <a
          target="_blank"
          href="https://www.linkedin.com/company/w3schools.com/"
          title="W3Schools on LinkedIn"
          class="w3-button w3-round ga-fp"
          rel="noopener"
        >
          <i
            class="tnb-icon fa"
            aria-hidden="true"
          >
            &#62220;
          </i>
        </a>
        <a
          target="_blank"
          href="https://discord.com/invite/w3schools"
          title="Join the W3schools community on Discord"
          class="w3-button w3-round ga-fp"
          rel="noopener"
        >
          <i
            class="tnb-icon fa -discord"
            aria-hidden="true"
          >
            &#59399;
          </i>
        </a>
        <a
          target="_blank"
          href="https://www.facebook.com/w3schoolscom/"
          title="W3Schools on Facebook"
          class="w3-button w3-round ga-fp"
          rel="noopener"
        >
          <i
            class="tnb-icon fa"
            aria-hidden="true"
          >
            &#59398;
          </i>
        </a>
        <a
          target="_blank"
          href="https://www.instagram.com/w3schools.com_official/"
          title="W3Schools on Instagram"
          class="w3-button w3-round ga-fp"
          rel="noopener"
        >
          <i
            class="tnb-icon fa"
            aria-hidden="true"
          >
            &#61805;
          </i>
        </a>
      </div>
    </div>
    <div
      class="w3-button tnb-close-menu-btn w3-round ga-top ga-top-close-accordion"
      tabindex="0"
      onclick="TopNavBar.closeMenu()"
      role="button"
      aria-label="Close menu"
    >
      <span>&times;</span>
    </div>
  </nav>
  <div id="dropdown-nav-outer-wrapper">
    <div id="dropdown-nav-inner-wrapper">
      <nav
        id="nav_tutorials"
        class="dropdown-nav w3-hide-small navex"
        tabindex="-1"
        aria-label="Menu for tutorials"
        style="border-bottom: none; background: transparent"
        onclick="if(event.target===this){TopNavBar.closeNavItem('tutorials')}"
      >
        <div class="tutnav-wrap">
          <button
            class="tutnav-close-btn"
            tabindex="0"
            onclick="TopNavBar.closeNavItem('tutorials')"
            aria-label="Close navigation"
          >
            &times;
          </button>
          <div
            id="tutnav_main_heading"
            class="tutnav-main-heading"
          >
            <h1 class="tutnav-main-title">Tutorials</h1>
          </div>
          <div id="tutorials_list">
            <div id="tutnav_title_area">
              <h1 class="tutnav-main-title">Tutorials</h1>
              <p class="tutnav-main-desc">Learn web development, programming, data science, and more.</p>
            </div>
            <div
              id="tutnav_current_topic"
              style="display: none"
            ></div>
            <div class="tutnav-header">
              <h2 class="tutnav-section-heading">W3SCHOOLS TUTORIALS:</h2>
              <div class="tutnav-filter">
                <input
                  id="filter-tutorials-input"
                  type="text"
                  placeholder="Filter..."
                  aria-label="Tutorials filter input"
                />
                <button
                  class="tutnav-filter-clear"
                  aria-label="Clear filter"
                >
                  &times;
                </button>
              </div>
            </div>
            <div class="tutnav-topics-scroll">
              <div
                class="tutnav-grid"
                id="tutnav_grid"
              ></div>
            </div>
            <!-- DETAIL VIEW (shown when a card is clicked) -->
            <div
              id="tutnav_detail_view"
              class="tutnav-detail-view"
            >
              <div class="tutnav-topics-scroll">
                <button
                  class="tutnav-back-btn"
                  id="tutnav_back_btn"
                >
                  &larr; All Topics
                </button>
                <div class="tutnav-topic-header">
                  <div
                    class="tutnav-topic-header-icon"
                    id="tutnav_detail_icon"
                  ></div>
                  <h2
                    class="tutnav-topic-title"
                    id="tutnav_detail_title"
                  ></h2>
                </div>
                <div
                  class="tutnav-option-cards"
                  id="tutnav_detail_options"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!--NEW REFERENCES STARTS HERE-->
      <nav
        id="nav_references"
        class="dropdown-nav w3-hide-small navex"
        tabindex="-1"
        aria-label="References menu"
        style="border-bottom: none; background: transparent"
        onclick="if(event.target===this){TopNavBar.closeNavItem('references')}"
      >
        <div class="refnav-wrap">
          <button
            class="refnav-close-btn"
            tabindex="0"
            onclick="TopNavBar.closeNavItem('references')"
            onkeydown="TopNavBar.mouseHandler(event, this, 'references')"
            aria-label="Close navigation"
          >
            &times;
          </button>
          <div
            id="refnav_main_heading"
            class="refnav-main-heading"
          >
            <h1 class="refnav-main-title">References</h1>
          </div>
          <div id="references_list">
            <div id="refnav_quick_actions"></div>
            <div class="refnav-header">
              <h2 class="refnav-section-heading">W3SCHOOLS REFERENCES:</h2>
              <div class="refnav-filter">
                <input
                  id="filter-references-input"
                  oninput="TopNavBar.filter(event, 'nav_references')"
                  type="text"
                  placeholder="Filter..."
                  aria-label="References filter bar"
                />
                <button
                  class="refnav-filter-clear"
                  aria-label="Filter clear button"
                  onclick="TopNavBar.clearFilter(event, 'nav_references')"
                >
                  &times;
                </button>
              </div>
            </div>
            <div class="refnav-topics-scroll">
              <div class="refnav-grid">
                <div
                  class="refnav-card"
                  data-name="html"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">HTML</h4>
                  <p class="refnav-card-desc">Tag reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="css"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">CSS</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="javascript"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">JavaScript</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="sql"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">SQL</h4>
                  <p class="refnav-card-desc">Keyword reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="python"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">Python</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="java"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">Java</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="c"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">C</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="c++"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">C++</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="colors"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">Colors</h4>
                  <p class="refnav-card-desc">Color names</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="php"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">PHP</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="htmldom"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">HTML DOM</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="mysql"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">MySQL</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="w3css"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">W3.CSS</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="bootstrap3"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">Bootstrap 3</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="bootstrap4"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">Bootstrap 4</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="nodejs"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">Node.js</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="django"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">Django</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="jquery"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">jQuery</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="vue"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">Vue</h4>
                  <p class="refnav-card-desc">Attributes</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="angular"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">Angular</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="sass"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">Sass</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="xml"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">XML</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="json"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">JSON</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="asp"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">ASP</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="icons"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">Icons</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="svg"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">SVG</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="canvas"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">Canvas</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="charsets"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">Charsets</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="emojis"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">Emojis</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="appml"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">AppML</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
                <div
                  class="refnav-card"
                  data-name="w3js"
                >
                  <div class="refnav-icon-wrap"></div>
                  <h4 class="refnav-card-title">W3.JS</h4>
                  <p class="refnav-card-desc">Reference</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!--NEW REFERNCES ENDS HERE-->
      <!-- NEW TOPNAVTEST STARTS HERE -->
      <nav
        id="nav_exercises"
        class="dropdown-nav w3-hide-small navex"
        tabindex="-1"
        aria-label="Exercises menu"
        style="border-bottom: none; background: transparent"
        onclick="if(event.target===this){if(window.exnavBackToList)exnavBackToList();TopNavBar.closeNavItem('exercises')}"
      >
        <div class="exnav-wrap">
          <button
            class="exnav-close-btn"
            tabindex="0"
            onclick="if(window.exnavBackToList)exnavBackToList();TopNavBar.closeNavItem('exercises')"
            onkeydown="TopNavBar.mouseHandler(event, this, 'exercises')"
            aria-label="Close navigation"
          >
            &times;
          </button>
          <div
            id="exnav_main_heading"
            class="exnav-main-heading"
          >
            <h1 class="exnav-main-title">Exercises</h1>
            <p class="exnav-main-desc">Practice and test your skills with different exercises.</p>
          </div>
          <div id="exercises_list">
            <div id="exnav_quick_actions"></div>
            <div
              id="exnav_quick_tip"
              class="exnav-quick-tip-row"
              style="display: none; margin: 0 0 20px 0"
            >
              <p class="exnav-quick-tip">
                <b>Tip:</b>
                <a href="https://profile.w3schools.com/signup">Sign in</a>
                to track your progress.
              </p>
              <div class="exnav-quick-social">
                <a
                  href="https://profile.w3schools.com/signup"
                  title="Sign in with Google"
                >
                  <svg
                    width="18"
                    height="18"
                    viewBox="0 0 48 48"
                  >
                    <path
                      fill="#FFC107"
                      d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4 12.955 4 4 12.955 4 24s8.955 20 20 20 20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z"
                    />
                    <path
                      fill="#FF3D00"
                      d="m6.306 14.691 6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4 16.318 4 9.656 8.337 6.306 14.691z"
                    />
                    <path
                      fill="#4CAF50"
                      d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238A11.91 11.91 0 0 1 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44z"
                    />
                    <path
                      fill="#1976D2"
                      d="M43.611 20.083H42V20H24v8h11.303a12.04 12.04 0 0 1-4.087 5.571l.003-.002 6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917z"
                    />
                  </svg>
                </a>
                <a
                  href="https://profile.w3schools.com/signup"
                  title="Sign in with Facebook"
                >
                  <svg
                    width="18"
                    height="18"
                    viewBox="0 0 24 24"
                    fill="#1877F2"
                  >
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                  </svg>
                </a>
                <a
                  href="https://profile.w3schools.com/signup"
                  title="Sign in with GitHub"
                >
                  <svg
                    width="18"
                    height="18"
                    viewBox="0 0 24 24"
                    fill="#333"
                  >
                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                  </svg>
                </a>
              </div>
            </div>
            <div class="exnav-header">
              <h2 class="exnav-section-heading">Select another topic:</h2>
              <div class="exnav-filter">
                <input
                  id="filter-exercises-input"
                  oninput="TopNavBar.filter(event, 'nav_exercises')"
                  type="text"
                  placeholder="Filter..."
                  aria-label="Exercises filter bar"
                />
                <button
                  class="exnav-filter-clear"
                  aria-label="Filter clear button"
                  onclick="TopNavBar.clearFilter(event, 'nav_exercises')"
                >
                  &times;
                </button>
              </div>
            </div>
            <div class="exnav-topics-scroll">
              <div class="exnav-grid">
                <!-- 1. HTML -->
                <div
                  class="exnav-card"
                  data-name="html"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">HTML</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 2. CSS -->
                <div
                  class="exnav-card"
                  data-name="css"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">CSS</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 3. JAVASCRIPT -->
                <div
                  class="exnav-card"
                  data-name="javascript"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">JavaScript</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 4. SQL -->
                <div
                  class="exnav-card"
                  data-name="sql"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">SQL</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 5. PYTHON -->
                <div
                  class="exnav-card"
                  data-name="python"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">Python</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 6. JAVA -->
                <div
                  class="exnav-card"
                  data-name="java"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">Java</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 7. C -->
                <div
                  class="exnav-card"
                  data-name="c"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">C</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 8. C++ -->
                <div
                  class="exnav-card"
                  data-name="c++"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">C++</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 9. C# -->
                <div
                  class="exnav-card"
                  data-name="c#"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">C#</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 10. PHP -->
                <div
                  class="exnav-card"
                  data-name="php"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">PHP</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 11. REACT -->
                <div
                  class="exnav-card"
                  data-name="react"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">React</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 12. MYSQL -->
                <div
                  class="exnav-card"
                  data-name="mysql"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">MySQL</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 13. EXCEL -->
                <div
                  class="exnav-card"
                  data-name="excel"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">Excel</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 14. DSA -->
                <div
                  class="exnav-card"
                  data-name="dsa"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">DSA</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 15. BOOTSTRAP 3 -->
                <div
                  class="exnav-card"
                  data-name="bootstrap3"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">Bootstrap 3</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 16. BOOTSTRAP 4 -->
                <div
                  class="exnav-card"
                  data-name="bootstrap4"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">Bootstrap 4</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 17. BOOTSTRAP 5 -->
                <div
                  class="exnav-card"
                  data-name="bootstrap5"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">Bootstrap 5</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 18. NODEJS -->
                <div
                  class="exnav-card"
                  data-name="nodejs"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">Node.js</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 19. TYPESCRIPT -->
                <div
                  class="exnav-card"
                  data-name="typescript"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">TypeScript</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 20. DJANGO -->
                <div
                  class="exnav-card"
                  data-name="django"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">Django</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 21. POSTGRESQL -->
                <div
                  class="exnav-card"
                  data-name="postgresql"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">PostgreSQL</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 22. JQUERY -->
                <div
                  class="exnav-card"
                  data-name="jquery"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">jQuery</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 23. NUMPY -->
                <div
                  class="exnav-card"
                  data-name="numpy"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">NumPy</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 24. PANDAS -->
                <div
                  class="exnav-card"
                  data-name="pandas"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">Pandas</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 25. ANGULAR -->
                <div
                  class="exnav-card"
                  data-name="angular"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">Angular</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 26. GIT -->
                <div
                  class="exnav-card"
                  data-name="git"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">Git</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 29. MONGODB -->
                <div
                  class="exnav-card"
                  data-name="mongodb"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">MongoDB</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 27. R -->
                <div
                  class="exnav-card"
                  data-name="r"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">R</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 33. GO -->
                <div
                  class="exnav-card"
                  data-name="go"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">Go</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 34. KOTLIN -->
                <div
                  class="exnav-card"
                  data-name="kotlin"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">Kotlin</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 34a. SWIFT -->
                <div
                  class="exnav-card"
                  data-name="swift"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">Swift</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 30. VUE -->
                <div
                  class="exnav-card"
                  data-name="vue"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">Vue</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 31. SCIPY -->
                <div
                  class="exnav-card"
                  data-name="scipy"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">SciPy</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
                <!-- 32. BASH -->
                <div
                  class="exnav-card"
                  data-name="bash"
                >
                  <div class="exnav-icon-wrap"></div>
                  <h4 class="exnav-card-title">Bash</h4>
                  <p class="exnav-card-desc">Exercises</p>
                </div>
              </div>
            </div>
          </div>
          <div
            id="exnav_detail"
            class="exnav-detail"
          >
            <div class="exnav-detail-header">
              <div
                class="exnav-detail-icon"
                id="exnav_detail_icon"
              ></div>
              <div class="exnav-detail-header-text">
                <h2
                  class="exnav-detail-title"
                  id="exnav_detail_title"
                ></h2>
                <p
                  class="exnav-detail-subtitle"
                  id="exnav_detail_subtitle"
                >
                  Choose an activity
                </p>
              </div>
              <button
                class="exnav-detail-back"
                onclick="exnavBackToList()"
              >
                &larr; Back to topics
              </button>
            </div>
            <div
              class="exnav-detail-grid"
              id="exnav_detail_grid"
            ></div>
            <p class="exnav-detail-tip">
              <b>Tip:</b>
              <a
                href="https://profile.w3schools.com/signup"
                style="color: inherit; text-decoration: underline"
              >
                Sign in
              </a>
              to track your progress.
            </p>
          </div>
        </div>
      </nav>
      <!-- NEW TOPNAVTEST ENDS HERE -->
      <nav
        id="nav_certified"
        class="dropdown-nav w3-hide-small navex"
        tabindex="-1"
        aria-label="Certificates menu"
        style="border-bottom: none; background: transparent"
        onclick="if(event.target===this){TopNavBar.closeNavItem('certified')}"
      >
        <div class="certnav-wrap">
          <button
            class="certnav-close-btn"
            tabindex="0"
            onclick="TopNavBar.closeNavItem('certified')"
            onkeydown="TopNavBar.mouseHandler(event, this, 'certified')"
            aria-label="Close navigation"
          >
            &times;
          </button>
          <div
            id="certnav_main_heading"
            class="certnav-main-heading"
          >
            <h1 class="certnav-main-title">Get Certified</h1>
          </div>
          <div id="certified_list">
            <div id="certnav_quick_actions"></div>
            <div
              id="certnav_header"
              class="certnav-header"
            >
              <h2
                id="certnav_heading"
                class="certnav-section-heading"
              >
                W3SCHOOLS CERTIFICATES:
              </h2>
              <div class="certnav-filter">
                <input
                  id="filter-certified-input"
                  oninput="TopNavBar.filter(event, 'nav_certified')"
                  type="text"
                  placeholder="Filter..."
                  aria-label="Certificates filter input"
                />
                <button
                  class="certnav-filter-clear"
                  aria-label="Filter clear button"
                  onclick="TopNavBar.clearFilter(event, 'nav_certified')"
                >
                  &times;
                </button>
              </div>
            </div>
            <div class="certnav-topics-scroll">
              <div
                id="certnav_grid"
                class="certnav-grid"
              >
                <a
                  class="certnav-card"
                  data-name="html"
                  href="https://campus.w3schools.com/collections/course-catalog/products/html-course"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">HTML</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="css"
                  href="https://campus.w3schools.com/collections/course-catalog/products/css-course"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">CSS</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="javascript"
                  href="https://campus.w3schools.com/collections/course-catalog/products/javascript-course"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">JavaScript</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="sql"
                  href="https://campus.w3schools.com/collections/course-catalog/products/sql-course"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="38"
                      height="38"
                      fill="#4169E1"
                      viewBox="0 0 448 512"
                    >
                      <path d="M448 73.143v45.714C448 159.143 347.667 192 224 192S0 159.143 0 118.857V73.143C0 32.857 100.333 0 224 0s224 32.857 224 73.143zM448 176v102.857C448 319.143 347.667 352 224 352S0 319.143 0 278.857V176c48.125 33.143 136.208 48.572 224 48.572S399.874 209.143 448 176zm0 160v102.857C448 479.143 347.667 512 224 512S0 479.143 0 438.857V336c48.125 33.143 136.208 48.572 224 48.572S399.874 369.143 448 336z" />
                    </svg>
                  </div>
                  <p class="certnav-card-title">SQL</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="python"
                  href="https://campus.w3schools.com/collections/course-catalog/products/python-course"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">Python</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="java"
                  href="https://campus.w3schools.com/collections/course-catalog/products/java-course"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">Java</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="c"
                  href="https://campus.w3schools.com/collections/course-catalog/products/learn-c"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">C</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="c++"
                  href="https://campus.w3schools.com/collections/course-catalog/products/cpp-course"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">C++</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="c#"
                  href="https://campus.w3schools.com/collections/course-catalog/products/c-course"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">C#</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="php"
                  href="https://campus.w3schools.com/collections/course-catalog/products/php-course"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">PHP</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="react"
                  href="https://campus.w3schools.com/collections/course-catalog/products/react-js-course"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">React</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="mysql"
                  href="https://campus.w3schools.com/collections/course-catalog/products/learn-mysql-1"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">MySQL</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="excel"
                  href="https://campus.w3schools.com/collections/course-catalog/products/learn-excel"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">Excel</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="dsa"
                  href="https://campus.w3schools.com/collections/course-catalog/products/learn-data-structures-and-algorithms"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">DSA</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="w3css"
                  href="https://campus.w3schools.com/collections/certifications/products/w3-css-certificate"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">W3.CSS</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="bootstrap3"
                  href="https://campus.w3schools.com/collections/course-catalog/products/bootstrap-course"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">Bootstrap 3</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="bootstrap4"
                  href="https://campus.w3schools.com/collections/course-catalog/products/bootstrap-4-course"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">Bootstrap 4</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="bootstrap5"
                  href="https://campus.w3schools.com/collections/course-catalog/products/learn-bootstrap-5"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">Bootstrap 5</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="nodejs"
                  href="https://campus.w3schools.com/collections/course-catalog/products/learn-node-js"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">Node.js</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="typescript"
                  href="https://campus.w3schools.com/collections/course-catalog/products/learn-typescript"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">TypeScript</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="django"
                  href="https://campus.w3schools.com/collections/course-catalog/products/learn-django"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">Django</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="postgresql"
                  href="https://campus.w3schools.com/collections/course-catalog/products/learn-postgresql"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">PostgreSQL</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="jquery"
                  href="https://campus.w3schools.com/collections/course-catalog/products/jquery-course"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">jQuery</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="vue"
                  href="https://campus.w3schools.com/collections/course-catalog/products/learn-vue-js"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">Vue</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="numpy"
                  href="https://campus.w3schools.com/collections/course-catalog/products/numpy-course"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">NumPy</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="pandas"
                  href="https://campus.w3schools.com/collections/course-catalog/products/pandas-course"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">Pandas</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="xml"
                  href="https://campus.w3schools.com/collections/course-catalog/products/xml-course"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">XML</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="cybersecurity"
                  href="https://campus.w3schools.com/collections/course-catalog/products/cyber-security-course"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">Cyber Security</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="accessibility"
                  href="https://campus.w3schools.com/collections/course-catalog/products/accessibility-course"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">Accessibility</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="angularjs"
                  href="https://campus.w3schools.com/collections/certifications/products/angularjs-certificate"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">AngularJS</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="git"
                  href="https://campus.w3schools.com/collections/course-catalog/products/learn-git"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">Git</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="mongodb"
                  href="https://campus.w3schools.com/collections/course-catalog/products/learn-mongodb"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">MongoDB</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="r"
                  href="https://campus.w3schools.com/collections/course-catalog/products/r-course"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">R</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="go"
                  href="https://campus.w3schools.com/collections/certifications/products/go-certificate"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">Go</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="kotlin"
                  href="https://campus.w3schools.com/collections/course-catalog/products/learn-kotlin"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">Kotlin</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="sass"
                  href="https://campus.w3schools.com/collections/certifications/products/sass-certificate"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">SASS</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="scipy"
                  href="https://campus.w3schools.com/collections/course-catalog/products/learn-scipy"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">SciPy</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="bash"
                  href="https://campus.w3schools.com/collections/certifications/products/bash-certification-exam"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">BASH</p>
                </a>
                <a
                  class="certnav-card"
                  data-name="rust"
                  href="https://campus.w3schools.com/collections/certifications/products/rust-certification-exam"
                  target="_blank"
                >
                  <div class="certnav-icon-wrap"></div>
                  <p class="certnav-card-title">Rust</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <nav
        id="nav_services"
        class="dropdown-nav w3-hide-small navex"
        tabindex="-1"
        aria-label="Services menu"
      >
        <div class="w3-content menu-content">
          <div
            id="services_list"
            class="w3-row-padding w3-bar-block"
          >
            <div class="nav-heading-container w3-container">
              <div class="nav-heading-container-title">
                <h2><b>All Our Services</b></h2>
              </div>
              <div
                id="toggle-darkmode-wrapper"
                style="float: right; text-align: center; padding: 20px 40px 0 0"
              >
                <label class="tnb-toggle-darkmode-switch w3-tooltip">
                  <span
                    class="w3-text"
                    id="tnb-darkmode-tooltip"
                  >
                    Dark mode
                  </span>
                  <input
                    type="checkbox"
                    id="darkToggle"
                    onclick="TopNavBar.toggleUserPreferredTheme()"
                  />
                  <span
                    class="tnb-toggle-darkmode-slider fa"
                    style="user-select: none"
                  >
                    <span style="position: absolute; left: -1px; top: -2px">&#xe80b;</span>
                  </span>
                </label>
              </div>
              <div
                data-section="services"
                class="filter-input-wrapper"
              >
                <div class="filter-input-inner-wrapper">
                  <label
                    for="filter-services-input"
                    class="tnb-soft-hide"
                  >
                    Services filter input
                  </label>
                  <input
                    id="filter-services-input"
                    oninput="TopNavBar.filter(event, 'nav_services')"
                    type="text"
                    class="filter-input"
                    placeholder="Filter..."
                    aria-label="Services filter bar"
                  />
                  <div
                    class="filter-clear-btn tnb-button-dark-v2"
                    role="button"
                    aria-label="Filter clear button"
                    onclick="TopNavBar.clearFilter(event, 'nav_services')"
                  >
                    <span>&times;</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="nav-heading-container w3-container">
              <p class="tnb-services-headlines">
                W3Schools offers a wide range of services and products for beginners and professionals,
                <br />
                helping millions of people everyday to learn and master new skills.
              </p>
            </div>
            <div class="serviceboxes">
              <div class="servicebox">
                <a
                  href="/tutorials/index.php"
                  class="serviceslink ga-top-drop ga-top-drop-services-tut"
                  title="Tutorials"
                  aria-label="Free tutorials"
                >
                  <div class="w3-padding services w3-round services-color-1">
                    <h4>Free Tutorials</h4>
                    <p>Enjoy our free tutorials like millions of other internet users since 1999</p>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="/references/index.php"
                  class="serviceslink ga-top-drop ga-top-drop-services-ref"
                  title="References"
                  aria-label="Tutorial references"
                >
                  <div class="w3-padding services w3-round services-color-2">
                    <h4>References</h4>
                    <p>Explore our selection of references covering all popular coding languages</p>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="/spaces/index.php"
                  class="serviceslink ga-top-drop ga-top-drop-services-spaces"
                  title="Create a Website"
                  aria-label="Create a website"
                >
                  <div class="w3-padding services w3-round services-color-3">
                    <h4>Create a Website</h4>
                    <p>
                      Create your own website with
                      <strong>W3Schools Spaces</strong>
                      - no setup required
                    </p>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="/exercises/index.php"
                  class="serviceslink ga-top-drop ga-top-drop-services-ex"
                  title="Test yourself with exercises"
                  aria-label="Exercises"
                >
                  <div class="w3-padding services w3-round services-color-4">
                    <h4>Exercises</h4>
                    <p>Test your skills with different exercises</p>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="/quiztest/default.asp"
                  class="serviceslink ga-top-drop ga-top-drop-services-qz"
                  title="Test yourself with quizzes"
                  aria-label="Quizzes"
                >
                  <div class="w3-padding services w3-round services-color-5">
                    <h4>Quizzes</h4>
                    <p>Test yourself with multiple choice questions</p>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="/challenges/index.php"
                  class="serviceslink ga-top-drop ga-top-drop-services-cc"
                  title="Test yourself with Code Challenges"
                  aria-label="Code Challenges"
                >
                  <div class="w3-padding services w3-round services-color-5">
                    <h4>Code Challenges</h4>
                    <p>Test your skills with interactive code challenges</p>
                  </div>
                </a>
              </div>
              <div class="servicebox tnb-paid-service">
                <a
                  target="_blank"
                  href="https://campus.w3schools.com/collections/certifications"
                  class="serviceslink ga-top-drop ga-top-drop-services-cert"
                  title="Certificates"
                  aria-label="Certificates"
                >
                  <div
                    class="w3-padding services w3-round services-color-1"
                    style="position: relative"
                  >
                    <h4>Get Certified</h4>
                    <p>Document your knowledge</p>
                    <svg
                      style="position: absolute; top: 15px; right: 25px"
                      width="15"
                      height="36"
                      viewBox="0 0 12 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      aria-hidden="true"
                    >
                      <path
                        d="M6.65723 6.24707C6.76704 5.91764 7.233 5.91765 7.34281 6.24707L7.98828 8.1835C8.276 9.04666 8.95332 9.72399 9.81648 10.0117L11.7529 10.6572C12.0824 10.767 12.0824 11.233 11.7529 11.3428L9.81649 11.9883C8.95332 12.276 8.27599 12.9533 7.98828 13.8165L7.34281 15.7529C7.233 16.0823 6.76704 16.0823 6.65723 15.7529L6.01173 13.8165C5.72401 12.9533 5.04669 12.276 4.18353 11.9883L2.24707 11.3428C1.91764 11.233 1.91764 10.767 2.24707 10.6572L4.18353 10.0117C5.04669 9.72399 5.72401 9.04667 6.01173 8.18352L6.65723 6.24707Z"
                        fill="#9763f6"
                      ></path>
                      <path
                        d="M2.79434 1.14824C2.86023 0.950586 3.1398 0.950587 3.20569 1.14824L3.59297 2.3101C3.7656 2.828 4.172 3.2344 4.6899 3.40703L5.85177 3.79432C6.04942 3.86021 6.04942 4.13978 5.85177 4.20567L4.6899 4.59296C4.172 4.76559 3.7656 5.17199 3.59297 5.68989L3.20569 6.85176C3.13981 7.04941 2.86023 7.04942 2.79434 6.85176L2.40704 5.68988C2.23441 5.17198 1.82801 4.76559 1.31012 4.59296L0.148241 4.20567C-0.0494137 4.13978 -0.0494138 3.86021 0.148241 3.79432L1.31012 3.40703C1.82802 3.2344 2.23441 2.82801 2.40704 2.31011L2.79434 1.14824Z"
                        fill="#9763f6"
                      ></path>
                      <path
                        d="M9.8629 0.0988265C9.90682 -0.032943 10.0932 -0.0329419 10.1371 0.098828L10.3953 0.873401C10.5104 1.21867 10.7813 1.4896 11.1266 1.60469L11.9012 1.86288C12.0329 1.9068 12.0329 2.09319 11.9012 2.13711L11.1266 2.39531C10.7813 2.51039 10.5104 2.78133 10.3953 3.12659L10.1371 3.90117C10.0932 4.03294 9.90682 4.03294 9.8629 3.90117L9.6047 3.12659C9.48961 2.78132 9.21868 2.5104 8.87342 2.39531L8.09883 2.13711C7.96706 2.09319 7.96706 1.9068 8.09883 1.86288L8.87342 1.60469C9.21868 1.4896 9.48961 1.21867 9.6047 0.873408L9.8629 0.0988265Z"
                        fill="#9763f6"
                      ></path>
                    </svg>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="https://profile.w3schools.com/sign-up"
                  class="serviceslink ga-top-drop ga-top-drop-services-signup"
                  title="Log in our Sign up"
                  aria-label="Login or Sign up"
                >
                  <div class="w3-padding services w3-round services-color-2">
                    <h4>Log in / Sign Up</h4>
                    <p>Create an account to track your progress</p>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="/league/"
                  class="serviceslink ga-top-drop ga-top-drop-services-mylearn"
                  title="Earn XP and climb the ranks with our League"
                  aria-label="League"
                >
                  <div class="w3-padding services w3-round services-color-3">
                    <h4>League</h4>
                    <p>Earn XP and climb the ranks with different challenges</p>
                  </div>
                </a>
              </div>
              <div class="servicebox tnb-paid-service">
                <a
                  href="https://order.w3schools.com/plans"
                  class="serviceslink ga-top-drop ga-top-drop-services-pro"
                  title="Upgrade subscription"
                  aria-label="Upgrade subscription"
                >
                  <div
                    class="w3-padding services w3-round services-color-4"
                    style="position: relative"
                  >
                    <h4>Upgrade</h4>
                    <p>Become a PLUS user and unlock powerful features (ad-free, hosting, support,..)</p>
                    <svg
                      style="position: absolute; top: 15px; right: 25px"
                      width="15"
                      height="36"
                      viewBox="0 0 12 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      aria-hidden="true"
                    >
                      <path
                        d="M6.65723 6.24707C6.76704 5.91764 7.233 5.91765 7.34281 6.24707L7.98828 8.1835C8.276 9.04666 8.95332 9.72399 9.81648 10.0117L11.7529 10.6572C12.0824 10.767 12.0824 11.233 11.7529 11.3428L9.81649 11.9883C8.95332 12.276 8.27599 12.9533 7.98828 13.8165L7.34281 15.7529C7.233 16.0823 6.76704 16.0823 6.65723 15.7529L6.01173 13.8165C5.72401 12.9533 5.04669 12.276 4.18353 11.9883L2.24707 11.3428C1.91764 11.233 1.91764 10.767 2.24707 10.6572L4.18353 10.0117C5.04669 9.72399 5.72401 9.04667 6.01173 8.18352L6.65723 6.24707Z"
                        fill="#9763f6"
                      ></path>
                      <path
                        d="M2.79434 1.14824C2.86023 0.950586 3.1398 0.950587 3.20569 1.14824L3.59297 2.3101C3.7656 2.828 4.172 3.2344 4.6899 3.40703L5.85177 3.79432C6.04942 3.86021 6.04942 4.13978 5.85177 4.20567L4.6899 4.59296C4.172 4.76559 3.7656 5.17199 3.59297 5.68989L3.20569 6.85176C3.13981 7.04941 2.86023 7.04942 2.79434 6.85176L2.40704 5.68988C2.23441 5.17198 1.82801 4.76559 1.31012 4.59296L0.148241 4.20567C-0.0494137 4.13978 -0.0494138 3.86021 0.148241 3.79432L1.31012 3.40703C1.82802 3.2344 2.23441 2.82801 2.40704 2.31011L2.79434 1.14824Z"
                        fill="#9763f6"
                      ></path>
                      <path
                        d="M9.8629 0.0988265C9.90682 -0.032943 10.0932 -0.0329419 10.1371 0.098828L10.3953 0.873401C10.5104 1.21867 10.7813 1.4896 11.1266 1.60469L11.9012 1.86288C12.0329 1.9068 12.0329 2.09319 11.9012 2.13711L11.1266 2.39531C10.7813 2.51039 10.5104 2.78133 10.3953 3.12659L10.1371 3.90117C10.0932 4.03294 9.90682 4.03294 9.8629 3.90117L9.6047 3.12659C9.48961 2.78132 9.21868 2.5104 8.87342 2.39531L8.09883 2.13711C7.96706 2.09319 7.96706 1.9068 8.09883 1.86288L8.87342 1.60469C9.21868 1.4896 9.48961 1.21867 9.6047 0.873408L9.8629 0.0988265Z"
                        fill="#9763f6"
                      ></path>
                    </svg>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="/where_to_start.asp"
                  class="serviceslink ga-top-drop ga-top-drop-services-wheretostart"
                  title="Where To Start"
                  aria-label="Where to start"
                >
                  <div class="w3-padding services w3-round services-color-5">
                    <h4>Where To Start</h4>
                    <p>Not sure where you want to start? Follow our guided path</p>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="/tryit/default.asp"
                  class="serviceslink ga-top-drop ga-top-drop-services-code-editor"
                  title="W3Schools Code Editor"
                  aria-label="Code editor"
                >
                  <div class="w3-padding services w3-round services-color-1">
                    <h4>Code Editor (Try it)</h4>
                    <p>With our online code editor, you can edit code and view the result in your browser</p>
                  </div>
                </a>
              </div>
              <div class="servicebox tnb-paid-service">
                <a
                  href="/bootcamp/index.php"
                  class="serviceslink ga-top-drop ga-top-drop-services-bootcamp"
                  title="W3Schools Bootcamps"
                  aria-label="W3Schools Bootcamps"
                >
                  <div
                    class="w3-padding services w3-round services-color-2"
                    style="position: relative"
                  >
                    <h4>Bootcamps</h4>
                    <p>Learn from passionate instructors through live online sessions</p>
                    <svg
                      style="position: absolute; top: 15px; right: 25px"
                      width="15"
                      height="36"
                      viewBox="0 0 12 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      aria-hidden="true"
                    >
                      <path
                        d="M6.65723 6.24707C6.76704 5.91764 7.233 5.91765 7.34281 6.24707L7.98828 8.1835C8.276 9.04666 8.95332 9.72399 9.81648 10.0117L11.7529 10.6572C12.0824 10.767 12.0824 11.233 11.7529 11.3428L9.81649 11.9883C8.95332 12.276 8.27599 12.9533 7.98828 13.8165L7.34281 15.7529C7.233 16.0823 6.76704 16.0823 6.65723 15.7529L6.01173 13.8165C5.72401 12.9533 5.04669 12.276 4.18353 11.9883L2.24707 11.3428C1.91764 11.233 1.91764 10.767 2.24707 10.6572L4.18353 10.0117C5.04669 9.72399 5.72401 9.04667 6.01173 8.18352L6.65723 6.24707Z"
                        fill="#9763f6"
                      ></path>
                      <path
                        d="M2.79434 1.14824C2.86023 0.950586 3.1398 0.950587 3.20569 1.14824L3.59297 2.3101C3.7656 2.828 4.172 3.2344 4.6899 3.40703L5.85177 3.79432C6.04942 3.86021 6.04942 4.13978 5.85177 4.20567L4.6899 4.59296C4.172 4.76559 3.7656 5.17199 3.59297 5.68989L3.20569 6.85176C3.13981 7.04941 2.86023 7.04942 2.79434 6.85176L2.40704 5.68988C2.23441 5.17198 1.82801 4.76559 1.31012 4.59296L0.148241 4.20567C-0.0494137 4.13978 -0.0494138 3.86021 0.148241 3.79432L1.31012 3.40703C1.82802 3.2344 2.23441 2.82801 2.40704 2.31011L2.79434 1.14824Z"
                        fill="#9763f6"
                      ></path>
                      <path
                        d="M9.8629 0.0988265C9.90682 -0.032943 10.0932 -0.0329419 10.1371 0.098828L10.3953 0.873401C10.5104 1.21867 10.7813 1.4896 11.1266 1.60469L11.9012 1.86288C12.0329 1.9068 12.0329 2.09319 11.9012 2.13711L11.1266 2.39531C10.7813 2.51039 10.5104 2.78133 10.3953 3.12659L10.1371 3.90117C10.0932 4.03294 9.90682 4.03294 9.8629 3.90117L9.6047 3.12659C9.48961 2.78132 9.21868 2.5104 8.87342 2.39531L8.09883 2.13711C7.96706 2.09319 7.96706 1.9068 8.09883 1.86288L8.87342 1.60469C9.21868 1.4896 9.48961 1.21867 9.6047 0.873408L9.8629 0.0988265Z"
                        fill="#9763f6"
                      ></path>
                    </svg>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="/w3css/w3css_templates.asp"
                  class="serviceslink ga-top-drop ga-top-drop-services-templates"
                  title="Free Web Templates"
                  aria-label="Templates"
                >
                  <div class="w3-padding services w3-round services-color-3">
                    <h4>Templates</h4>
                    <p>We have created a bunch of responsive website templates you can use - for free!</p>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="/spaces/index.php"
                  class="serviceslink ga-top-drop ga-top-drop-services-webhosting"
                  title="Web Hosting with Spaces"
                  aria-label="Web Hosting with Spaces"
                >
                  <div class="w3-padding services w3-round services-color-4">
                    <h4>Web Hosting</h4>
                    <p>
                      Host your own website, and share it to the world with
                      <strong>W3Schools Spaces</strong>
                    </p>
                  </div>
                </a>
              </div>
              <div class="servicebox tnb-paid-service">
                <a
                  href="/spaces/index.php"
                  class="serviceslink ga-top-drop ga-top-drop-services-createserver"
                  title="Get your own server"
                  aria-label="Get your own server"
                >
                  <div
                    class="w3-padding services w3-round services-color-5"
                    style="position: relative"
                  >
                    <h4>Create a Server</h4>
                    <p>Create your own server using Python, PHP, React.js, Node.js, Java, C#, etc.</p>
                    <svg
                      style="position: absolute; top: 15px; right: 25px"
                      width="15"
                      height="36"
                      viewBox="0 0 12 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      aria-hidden="true"
                    >
                      <path
                        d="M6.65723 6.24707C6.76704 5.91764 7.233 5.91765 7.34281 6.24707L7.98828 8.1835C8.276 9.04666 8.95332 9.72399 9.81648 10.0117L11.7529 10.6572C12.0824 10.767 12.0824 11.233 11.7529 11.3428L9.81649 11.9883C8.95332 12.276 8.27599 12.9533 7.98828 13.8165L7.34281 15.7529C7.233 16.0823 6.76704 16.0823 6.65723 15.7529L6.01173 13.8165C5.72401 12.9533 5.04669 12.276 4.18353 11.9883L2.24707 11.3428C1.91764 11.233 1.91764 10.767 2.24707 10.6572L4.18353 10.0117C5.04669 9.72399 5.72401 9.04667 6.01173 8.18352L6.65723 6.24707Z"
                        fill="#9763f6"
                      ></path>
                      <path
                        d="M2.79434 1.14824C2.86023 0.950586 3.1398 0.950587 3.20569 1.14824L3.59297 2.3101C3.7656 2.828 4.172 3.2344 4.6899 3.40703L5.85177 3.79432C6.04942 3.86021 6.04942 4.13978 5.85177 4.20567L4.6899 4.59296C4.172 4.76559 3.7656 5.17199 3.59297 5.68989L3.20569 6.85176C3.13981 7.04941 2.86023 7.04942 2.79434 6.85176L2.40704 5.68988C2.23441 5.17198 1.82801 4.76559 1.31012 4.59296L0.148241 4.20567C-0.0494137 4.13978 -0.0494138 3.86021 0.148241 3.79432L1.31012 3.40703C1.82802 3.2344 2.23441 2.82801 2.40704 2.31011L2.79434 1.14824Z"
                        fill="#9763f6"
                      ></path>
                      <path
                        d="M9.8629 0.0988265C9.90682 -0.032943 10.0932 -0.0329419 10.1371 0.098828L10.3953 0.873401C10.5104 1.21867 10.7813 1.4896 11.1266 1.60469L11.9012 1.86288C12.0329 1.9068 12.0329 2.09319 11.9012 2.13711L11.1266 2.39531C10.7813 2.51039 10.5104 2.78133 10.3953 3.12659L10.1371 3.90117C10.0932 4.03294 9.90682 4.03294 9.8629 3.90117L9.6047 3.12659C9.48961 2.78132 9.21868 2.5104 8.87342 2.39531L8.09883 2.13711C7.96706 2.09319 7.96706 1.9068 8.09883 1.86288L8.87342 1.60469C9.21868 1.4896 9.48961 1.21867 9.6047 0.873408L9.8629 0.0988265Z"
                        fill="#9763f6"
                      ></path>
                    </svg>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="/howto/default.asp"
                  class="serviceslink ga-top-drop ga-top-drop-services-howto"
                  title="How To Collection"
                  aria-label="How To's"
                >
                  <div class="w3-padding services w3-round services-color-1">
                    <h4>How To's</h4>
                    <p>Large collection of code snippets for HTML, CSS and JavaScript</p>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="/w3css/default.asp"
                  class="serviceslink ga-top-drop ga-top-drop-services-w3css"
                  title="W3.CSS Framework"
                  aria-label="W3.CSS Framework"
                >
                  <div class="w3-padding services w3-round services-color-2">
                    <h4>CSS Framework</h4>
                    <p>
                      Build fast and responsive sites using our free
                      <strong>W3.CSS</strong>
                      framework
                    </p>
                  </div>
                </a>
              </div>
              <div class="servicebox tnb-paid-service">
                <a
                  href="/videos/index.php"
                  class="serviceslink ga-top-drop ga-top-drop-services-videos"
                  title="HTML Video Tutorial"
                  aria-label="Videos"
                >
                  <div
                    class="w3-padding services w3-round services-color-2"
                    style="position: relative"
                  >
                    <h4>Videos</h4>
                    <p>Learn the basics of HTML in a fun and engaging video tutorial</p>
                    <svg
                      style="position: absolute; top: 15px; right: 25px"
                      width="15"
                      height="36"
                      viewBox="0 0 12 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      aria-hidden="true"
                    >
                      <path
                        d="M6.65723 6.24707C6.76704 5.91764 7.233 5.91765 7.34281 6.24707L7.98828 8.1835C8.276 9.04666 8.95332 9.72399 9.81648 10.0117L11.7529 10.6572C12.0824 10.767 12.0824 11.233 11.7529 11.3428L9.81649 11.9883C8.95332 12.276 8.27599 12.9533 7.98828 13.8165L7.34281 15.7529C7.233 16.0823 6.76704 16.0823 6.65723 15.7529L6.01173 13.8165C5.72401 12.9533 5.04669 12.276 4.18353 11.9883L2.24707 11.3428C1.91764 11.233 1.91764 10.767 2.24707 10.6572L4.18353 10.0117C5.04669 9.72399 5.72401 9.04667 6.01173 8.18352L6.65723 6.24707Z"
                        fill="#9763f6"
                      ></path>
                      <path
                        d="M2.79434 1.14824C2.86023 0.950586 3.1398 0.950587 3.20569 1.14824L3.59297 2.3101C3.7656 2.828 4.172 3.2344 4.6899 3.40703L5.85177 3.79432C6.04942 3.86021 6.04942 4.13978 5.85177 4.20567L4.6899 4.59296C4.172 4.76559 3.7656 5.17199 3.59297 5.68989L3.20569 6.85176C3.13981 7.04941 2.86023 7.04942 2.79434 6.85176L2.40704 5.68988C2.23441 5.17198 1.82801 4.76559 1.31012 4.59296L0.148241 4.20567C-0.0494137 4.13978 -0.0494138 3.86021 0.148241 3.79432L1.31012 3.40703C1.82802 3.2344 2.23441 2.82801 2.40704 2.31011L2.79434 1.14824Z"
                        fill="#9763f6"
                      ></path>
                      <path
                        d="M9.8629 0.0988265C9.90682 -0.032943 10.0932 -0.0329419 10.1371 0.098828L10.3953 0.873401C10.5104 1.21867 10.7813 1.4896 11.1266 1.60469L11.9012 1.86288C12.0329 1.9068 12.0329 2.09319 11.9012 2.13711L11.1266 2.39531C10.7813 2.51039 10.5104 2.78133 10.3953 3.12659L10.1371 3.90117C10.0932 4.03294 9.90682 4.03294 9.8629 3.90117L9.6047 3.12659C9.48961 2.78132 9.21868 2.5104 8.87342 2.39531L8.09883 2.13711C7.96706 2.09319 7.96706 1.9068 8.09883 1.86288L8.87342 1.60469C9.21868 1.4896 9.48961 1.21867 9.6047 0.873408L9.8629 0.0988265Z"
                        fill="#9763f6"
                      ></path>
                    </svg>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="/browsers/default.asp"
                  class="serviceslink ga-top-drop ga-top-drop-services-browserstat"
                  title="Browser Statistics"
                  aria-label="Browser Statistics"
                >
                  <div class="w3-padding services w3-round services-color-3">
                    <h4>Browser Statistics</h4>
                    <p>Read long term trends of browser usage</p>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="/typingspeed/default.asp"
                  class="serviceslink ga-top-drop ga-top-drop-services-typing"
                  title="Test Your Typing speed"
                  aria-label="Test Your Typing speed"
                >
                  <div class="w3-padding services w3-round services-color-4">
                    <h4>Typing Speed</h4>
                    <p>Test your typing speed</p>
                  </div>
                </a>
              </div>
              <!--
              <div class="servicebox">
                <a
                  href="/training/aws/home/"
                  class="serviceslink ga-top-drop ga-top-drop-services-aws-training"
                  title="AWS Training"
                  aria-label="AWS Training"
                >
                  <div
                    class="w3-padding services w3-round services-color-5"
                    style="position: relative"
                  >
                    <h4>AWS Training</h4>
                    <p>Learn Amazon Web Services</p>
                  </div>
                </a>
              </div>
-->
              <div class="servicebox">
                <a
                  href="/colors/colors_picker.asp"
                  class="serviceslink ga-top-drop ga-top-drop-services-color-picker"
                  title="Color Picker"
                  aria-label="Color picker"
                >
                  <div
                    class="w3-padding services w3-round services-color-1"
                    style="position: relative"
                  >
                    <h4>Color Picker</h4>
                    <p>
                      Use our color picker to find different RGB, HEX and HSL colors.
                      <img
                        class="w3-hide-medium"
                        src="/images/colorpicker2000.png"
                        alt="A circular color wheel showing the gradation of colors in the spectrum"
                        loading="lazy"
                        style="margin-left: 15px; width: 35px; position: absolute; top: 15px; right: 15px"
                      />
                    </p>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  target="_blank"
                  href="https://campus.w3schools.com/pages/newsletter"
                  class="serviceslink ga-top-drop ga-top-drop-services-newsletter"
                  title="Join Our Newsletter"
                  aria-label="Newsletter"
                >
                  <div class="w3-padding services w3-round services-color-3">
                    <h4>Newsletter</h4>
                    <p>Join our newsletter and get access to exclusive content every month</p>
                  </div>
                </a>
              </div>
              <!--
              <div class="servicebox">
                <a
                  href="/pathfinder/pathfinder_goals.php"
                  class="serviceslink ga-top-drop ga-top-drop-services-goals"
                  title="Get personalized learning journey based on your current skills and goals"
                  aria-label="Get personalized learning journey based on your current skills and goals"
                >
                  <div class="w3-padding services w3-round services-color-3">
                    <h4>Set Goal</h4>
                    <p>Get personalized learning journey based on your current skills and goals</p>
                  </div>
                </a>
              </div>
-->
              <div class="servicebox">
                <a
                  href="/charsets/ref_emoji_intro.asp"
                  class="serviceslink ga-top-drop ga-top-drop-services-emojis"
                  title="Emojis Reference"
                  aria-label="Emojis Reference"
                >
                  <div
                    class="w3-padding services w3-round services-color-4"
                    style="position: relative"
                  >
                    <h4>Emojis Reference</h4>
                    <p>
                      Check out our refererence page with all the emojis supported in HTML
                      <span
                        class="w3-hide-medium"
                        alt="Smiley"
                        style="margin-left: 15px; width: 35px; position: absolute; top: 15px; right: 15px; display: inline-block"
                      >
                        &#128522;
                      </span>
                    </p>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="/codegame/index.html"
                  class="serviceslink ga-top-drop ga-top-drop-services-code-game"
                  title="Coding Game"
                  aria-label="Code game"
                >
                  <div
                    class="w3-padding services w3-round services-color-2"
                    style="position: relative"
                  >
                    <h4>Code Game</h4>
                    <p style="margin-top: 15px">
                      W3Schools Coding Game! Help the lynx collect pine cones
                      <img
                        class="w3-hide-medium"
                        src="/signup/lynxlogo.svg"
                        alt="Lynx logo"
                        style="margin-left: 15px; width: 35px; position: absolute; top: 7px; right: 15px"
                      />
                    </p>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="/charsets/default.asp"
                  class="serviceslink ga-top-drop ga-top-drop-services-utf8"
                  title="UTF-8 Reference"
                  aria-label="UTF-8 Reference"
                >
                  <div
                    class="w3-padding services w3-round services-color-5"
                    style="position: relative"
                  >
                    <h4>UTF-8 Reference</h4>
                    <p>Check out our full UTF-8 Character reference</p>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="https://discord.com/invite/w3schools"
                  class="serviceslink ga-top-drop ga-top-drop-services-community"
                  title="W3Schools Community"
                  aria-label="W3Schools Community"
                  target="_blank"
                >
                  <div class="w3-padding services w3-round services-color-1">
                    <h4>Community</h4>
                    <p>Chat, Learn and Connect with Us on Discord</p>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="/academy/index.php"
                  class="serviceslink ga-top-drop ga-top-drop-services-academy-teachers"
                  title="W3Schools Academy / Classroom"
                  aria-label="W3Schools Academy / Classroom"
                >
                  <div class="w3-padding services w3-round services-color-2">
                    <h4>Academy</h4>
                    <p>Contact us about W3Schools Academy for educational institutions</p>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <a
                  href="/academy/index.php"
                  class="serviceslink ga-top-drop ga-top-drop-services-academy-business"
                  title="W3Schools Academy / Classroom"
                  aria-label="W3Schools Academy / Classroom"
                >
                  <div class="w3-padding services w3-round services-color-3">
                    <h4>For Businesses</h4>
                    <p>Contact us about W3Schools Academy for your organization</p>
                  </div>
                </a>
              </div>
              <div class="servicebox">
                <div
                  class="serviceslink ga-top-drop ga-top-drop-services-contact-us"
                  title="Contact Us"
                  aria-label="Contact Us"
                >
                  <div class="w3-padding services w3-round services-color-4">
                    <h4>Contact Us</h4>
                    <p>
                      About sales:
                      <span style="float: right">sales@w3schools.com</span>
                      <br />
                      About errors:
                      <span style="float: right">help@w3schools.com</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="tnb-social-network-btns w3-hide-small w3-hide-medium">
                <a
                  target="_blank"
                  href="https://www.youtube.com/@w3schools"
                  title="W3Schools on YouTube"
                  class="w3-button w3-round ga-fp"
                  rel="noopener"
                >
                  <i
                    class="tnb-icon fa fa-youtube"
                    aria-hidden="true"
                  ></i>
                </a>
                <a
                  target="_blank"
                  href="https://www.linkedin.com/company/w3schools.com/"
                  title="W3Schools on LinkedIn"
                  class="w3-button w3-round ga-fp"
                  rel="noopener"
                >
                  <i
                    class="tnb-icon fa"
                    aria-hidden="true"
                  >
                    &#62220;
                  </i>
                </a>
                <a
                  target="_blank"
                  href="https://discord.com/invite/w3schools"
                  title="Join the W3schools community on Discord"
                  class="w3-button w3-round ga-fp"
                  rel="noopener"
                >
                  <i
                    class="tnb-icon fa -discord"
                    aria-hidden="true"
                  >
                    &#59399;
                  </i>
                </a>
                <a
                  target="_blank"
                  href="https://www.facebook.com/w3schoolscom/"
                  title="W3Schools on Facebook"
                  class="w3-button w3-round ga-fp"
                  rel="noopener"
                >
                  <i
                    class="tnb-icon fa"
                    aria-hidden="true"
                  >
                    &#59398;
                  </i>
                </a>
                <a
                  target="_blank"
                  href="https://www.instagram.com/w3schools.com_official/"
                  title="W3Schools on Instagram"
                  class="w3-button w3-round ga-fp"
                  rel="noopener"
                >
                  <i
                    class="tnb-icon fa"
                    aria-hidden="true"
                  >
                    &#61805;
                  </i>
                </a>
              </div>
            </div>
            <div
              class="w3-button tnb-close-nav-btn w3-round"
              tabindex="0"
              onclick="TopNavBar.closeNavItem('services')"
              onkeydown="TopNavBar.mouseHandler(event, this, 'services')"
              role="button"
              aria-label="Close navigation"
            >
              <span>&times;</span>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>



  <div id="googleSearch">
    <div class="gcse-search"></div>
  </div>
</div>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTCFC3S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script>
(
function setThemeMode() {
  var x = localStorage.getItem("preferredmode");
  var y = localStorage.getItem("preferredpagemode");  
  if (x == "dark") {
    document.body.className += " darktheme";
  }
  if (y == "dark") {
    document.body.className += " darkpagetheme";
  }
})();
</script>
<style>
#subtopnav {
  position:fixed;
  background-color: #282A35;
  color:#f1f1f1;
  padding:0;
  letter-spacing:1px;
  font-family: 'Source Sans Pro Topnav', sans-serif;
  font-size:0;
  top:56px;
  z-index:2;
  width:100%;
  white-space:nowrap;
  overflow:auto;
  scrollbar-width: none;
  max-width:1750px;
  margin:auto;
  left:0;
  right:0;
}
#subtopnav a{
  display:inline-block;
  width:auto;
  margin:0!important;
  padding:5px 15px 5px 15px !important;
  font-size:15px!important;
  text-decoration: none;  
  line-height: 1.5;
}
#subtopnav a:hover,#subtopnav a:focus,#subtopnav a:active{
  background-color:#000000 !important;
  color:#ffffff !important;
}
#subtopnav a.active{
  /*original:
  background-color: #04AA6D!important;
  ny:*/
  background-color: #ebedee!important;font-weight:bold;
  /*original:
  color:#111!important;  
  nt:*/
  color:#000!important;  
}
#btn_container_subtopnav {
  position:fixed;
  right:0;
  top:56px;
  font-size:0;
  xxborder-left:10px solid rgba(40, 42, 53,0.5);
  
}
#btn_container_subtopnav a{
  line-height:1.3!important;
  padding-top:7px!important;
  padding-bottom:6px!important; 
  font-size:15px;
  background-color:#282A35;  
}
#scroll_left_btn {
  cursor:pointer;
  display:none;
  position:fixed;
  left:0;
  top:56px;
  font-size: 15px;
  xborder-right: 10px solid rgba(40, 42, 53,0.5);
  xbackground: red;
  }
#scroll_left_btn span {
  xbackground-color:#282A35;
  background: linear-gradient(to right, #282A35 70%, transparent 100%);
  display:block;
  padding-top:5px;
  padding-bottom:5px;  
}
#scroll_left_btn span:hover {
  background: linear-gradient(to right, #000 95%, transparent 100%);
}
#scroll_right_btn {
  cursor:pointer;
  float:left;
  font-size:15px;
  xxbackground-color:#282A35;
  background: linear-gradient(to left, #282A35 70%, transparent 100%);
  
  padding-top:5px;
  padding-bottom:5px;  
}
#scroll_right_btn:hover {
  background: linear-gradient(to left, #000 95%, transparent 100%);
}
#menubtn_container {
  position:fixed;
  left:0;
  top:56px;
  xborder-right:10px solid rgba(40, 42, 53,0.5);
  height:33px;
  color:white;
  font-size:15px;
}
#menubtn_container span {
  background-color:#282A35;  
}
#darkmodemenu {
  position:fixed!important;
  right:0;!important;  
}
#subtopnav::-webkit-scrollbar {
  display:none!important;
}
#google_translate_element a{
  font-size:13px!important;

  line-height: normal;
}
#google_translate_element a:hover{
  background-color:#fff!important;  
  color:#000!important;    
}
  @media screen and (max-width: 992px){
    #subtopnav a.subtopnav_firstitem {
      margin-left:50px!important;
    }
  }
</style>
<script>
activate_subtopnav_scroll = 0;
from_scrollpos = -1;
current_scrollpos = -1;
goto_tut = 1;
function startscrolling_subtopnav(event) {
  event.preventDefault();
  from_scrollpos = event.clientX;
  activate_subtopnav_scroll = 1;
}
function scrolling_subtopnav(event) {
  current_scrollpos = event.clientX;
  if (current_scrollpos == from_scrollpos) return false;
  event.preventDefault();
  if (event.buttons == 0) return false;
  var scrollspeed;
  if (activate_subtopnav_scroll == 1) {
    goto_tut = 0;
    scrollspeed = current_scrollpos - from_scrollpos;
    scrollspeed = Math.abs(scrollspeed);
    if (current_scrollpos < from_scrollpos) {
     document.getElementById("scroll_left_btn").style.display = "block";     
     document.getElementById("subtopnav").scrollLeft += scrollspeed;        
    } else {
      document.getElementById("subtopnav").scrollLeft -= scrollspeed;        
    }
    scrollbtn_visible();
    from_scrollpos = current_scrollpos;
  }
}
function endscrolling_subtopnav(event) {
  event.preventDefault();
  activate_subtopnav_scroll = 0;
  from_scrollpos = -1;
  current_scrollpos = -1;
}
function pellessii(event) {
  if (goto_tut == 0) {
    event.preventDefault();  
    goto_tut = 1;
    return false;
  }
}
var scrollspeed = 1;
var scrollinterval
function scrollmenow(n) {
  scrollinterval = window.setInterval(function() {
    scrollspeed = scrollspeed * 1.1;
    if (scrollspeed > 10) {scrollspeed = 10;}
    if (n == 1) {
      document.getElementById("subtopnav").scrollLeft += scrollspeed;  
    } else {
      document.getElementById("subtopnav").scrollLeft -= scrollspeed;  
      
    }
    scrollbtn_visible();
  }, 10);
}

var p_s_l = 0;
var x_s_l = 0;
function scrollbtn_visible() {
  var c_s_l = document.getElementById("subtopnav").scrollLeft;
  if (c_s_l < 1) {
    document.getElementById("scroll_left_btn").style.display = "none";    
  } else {
    document.getElementById("scroll_left_btn").style.display = "block";    
  }
  if (c_s_l > 1 && c_s_l == p_s_l) {
    x_s_l++;
  } else {
    x_s_l = 0;  
  }
  if (x_s_l > 3) {
    document.getElementById("scroll_right_btn").style.display = "none";    
  } else {
    document.getElementById("scroll_right_btn").style.display = "block";  
  }
  p_s_l = document.getElementById("subtopnav").scrollLeft;
}

function stopscrollmenow() {
  scrollspeed = 1;
  window.clearInterval(scrollinterval);
}

window.addEventListener("load", scrollbtn_visible);

function subtopnav_intoview() {
  var a, b, c, d, i = 0;
  a = document.getElementById("subtopnav");
  if (!a || !a.getElementsByClassName) {return false;}
  var x = a.getElementsByTagName("A");
  b = document.location.pathname;  
  if (b.indexOf("/python/numpy/") > -1 || b.indexOf("/python/pandas/") > -1 || b.indexOf("/python/scipy/") > -1) {
    for (i = 0; i < x.length; i++) {
      c = x[i].pathname;
      if ((b.indexOf("/python/numpy/") > -1 && c == "/python/numpy/default.asp") || (b.indexOf("/python/pandas/") > -1 && c == "/python/pandas/default.asp") || (b.indexOf("/python/scipy/") > -1 && c == "/python/scipy/index.php")) {
        x[i].className += " active";
        break;
      }
    }
  } else {
    for (i = 0; i < x.length; i++) {
      c = x[i].pathname;
      if (c.indexOf("void(0)") == -1 && b.substr(0, b.indexOf("/",1)) ==  c.substr(0, c.indexOf("/",1))) {
        x[i].className += " active";
        break;
      }
    }
  }
  d = a.getElementsByClassName("active");
  if (d.length < 1) {return false;}  
  while (!amIIntoView(a, d[0])) {
    i++
    if (i > 1000) {break;}
    a.scrollLeft += 10;
  }
  //scrollbtn_visible();
}

function amIIntoView(x, y) {
  var a = x.scrollLeft;
  var width = Math.min(window.innerWidth, 1750);
  var b = a + width - 20;
  var ytop = y.offsetLeft;
  var c = y.offsetWidth;
  var d = 0;
  if (document.getElementById("btn_container_subtopnav")) d = document.getElementById("btn_container_subtopnav").offsetWidth;
  var ybottom = ytop + c + d + 20;
  return ((ybottom <= b) && (ytop >= a));
}

</script>
<style>
.topnavcontainer {
  background-color: #282A35;
  width:100%;
  max-width:1750px;
  left:0;
  right:0;
  margin:auto;
  height:33px;
  top:56px;
  position:fixed;
  z-index:3;
}
#scroll_left_btn {
    cursor: pointer;
    display: none;
    position: fixed;
    left: auto;
    top: auto;
    font-size: 15px;
}
#scroll_right_btn {
    cursor: pointer;
    position: fixed;
    font-size: 15px;
    display:none;
}
.topnavbackground {
  background-color:#282A35;
  position:fixed;
  width:100%;
  height:33px;
  top:56px;
}
body.darkpagetheme .topnavbackground, body.darkpagetheme .topnavcontainer, body.darkpagetheme #subtopnav  {
  background-color:rgb(13,23,33)!important
}

body.darkpagetheme #scroll_right_btn {
  background: linear-gradient(to left, rgb(13,23,33) 70%, transparent 100%)
}
body.darkpagetheme #scroll_left_btn span {
  background: linear-gradient(to right, rgb(13,23,33) 70%, transparent 100%)
}
</style>
<div class="topnavbackground"></div>
<div class="topnavcontainer">

<div id="subtopnav" onmousedown="startscrolling_subtopnav(event)" onmousemove="scrolling_subtopnav(event)" onmouseup="endscrolling_subtopnav(event)" onclick="return pellessii(event)">
  <div id="scroll_left_btn" class="w3-hide-medium w3-hide-small">
    <span onmousedown="scrollmenow(-1)" onmouseup="stopscrollmenow()" onmouseout="stopscrollmenow()">&nbsp;&nbsp;&nbsp;&#10094;&nbsp;&nbsp;&nbsp;</span>
  </div>
  <div id="scroll_right_btn" style="display:none" class="w3-hide-medium w3-hide-small">
    <span onmousedown="scrollmenow(1)" onmouseup="stopscrollmenow()" onmouseout="stopscrollmenow()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#10095;&nbsp;&nbsp;&nbsp;</span>
  </div>


  <div id="menubtn_container">
    <span>
                <a href='javascript:void(0);' class='topnav-icons fa fa-menu w3-hide-large w3-left w3-bar-item w3-button ga-nav' style="line-height:1.1;padding-top:8px!important;padding-bottom:8px!important;" onclick='open_menu()' title='Menu'></a>
            </span>      
  </div>
  <a href="/html/default.asp" class="ga-nav subtopnav_firstitem" title="HTML Tutorial">HTML</a>
  <a href="/css/default.asp" class="ga-nav" title="CSS Tutorial">CSS</a>
  <a href="/js/default.asp" class="ga-nav" title="JavaScript Tutorial">JAVASCRIPT</a>
  <a href="/sql/default.asp" class="ga-nav" title="SQL Tutorial">SQL</a>
  <a href="/python/default.asp" class="ga-nav" title="Python Tutorial">PYTHON</a>
  <a href="/java/default.asp" class="ga-nav" title="Java Tutorial">JAVA</a>
  <a href="/php/default.asp" class="ga-nav" title="PHP Tutorial">PHP</a>
  <a href="/w3css/default.asp" class="ga-nav" title="W3.CSS Tutorial">W3.CSS</a>
  <a href="/c/index.php" class="ga-nav" title="C Tutorial">C</a>
  <a href="/cpp/default.asp" class="ga-nav" title="C++ Tutorial">C++</a>
  <a href="/cs/index.php" class="ga-nav" title="C# Tutorial">C#</a>
  <a href="/howto/default.asp" class="ga-nav" title="How to">HOW TO</a>
  <a href="/bootstrap/bootstrap_ver.asp" class="ga-nav" title="Bootstrap Tutorial">BOOTSTRAP</a>
  <a href="/react/default.asp" class="ga-nav" title="React Tutorial">REACT</a>
  <a href="/mysql/default.asp" class="ga-nav" title="MySQL Tutorial">MYSQL</a>
  <a href="/jquery/default.asp" class="ga-nav" title="JQuery Tutorial">JQUERY</a>
  <a href="/excel/index.php" class="ga-nav" title="Excel Tutorial">EXCEL</a>
  <a href="/xml/default.asp" class="ga-nav" title="XML Tutorial">XML</a>
  <a href="/django/index.php" class="ga-nav" title="Django Tutorial">DJANGO</a>
  <a href="/python/numpy/default.asp" class="ga-nav" title="NumPy Tutorial">NUMPY</a>
  <a href="/python/pandas/default.asp" class="ga-nav" title="Pandas Tutorial">PANDAS</a>
  <a href="/nodejs/default.asp" class="ga-nav" title="Node.js Tutorial">NODEJS</a>
  <a href="/dsa/index.php" class="ga-nav" title="DSA Tutorial">DSA</a>  
  <a href="/typescript/index.php" class="ga-nav" title="TypeScript Tutorial">TYPESCRIPT</a>
  <a href="/swift/default.asp" class="ga-nav" title="Swift Tutorial">SWIFT</a>
  <a href="/angular/default.asp" class="ga-nav" title="Angular Tutorial">ANGULAR</a>
  <a href="/angularjs/default.asp" class="ga-nav" title="Angular.js Tutorial">ANGULARJS</a>
  <a href="/git/default.asp" class="ga-nav" title="Git Tutorial">GIT</a>
  <a href="/postgresql/index.php" class="ga-nav" title="PostgreSQL Tutorial">POSTGRESQL</a>
  <a href="/mongodb/index.php" class="ga-nav" title="MongoDB Tutorial">MONGODB</a>
  <a href="/asp/default.asp" class="ga-nav" title="ASP Tutorial">ASP</a>
  <a href="/ai/default.asp" class="ga-nav" title="A.I. Tutorial">AI</a>
  <a href="/r/default.asp" class="ga-nav" title="R Tutorial">R</a>  
  <a href="/go/index.php" class="ga-nav" title="Go Tutorial">GO</a>
  <a href="/kotlin/index.php" class="ga-nav" title="Kotlin Tutorial">KOTLIN</a>
  <a href="/swift/default.asp" class="ga-nav" title="Swift Tutorial">SWIFT</a>
  <a href="/sass/default.asp" class="ga-nav" title="Sass Tutorial">SASS</a>
  <a href="/vue/index.php" class="ga-nav" title="Vue.js Tutorial">VUE</a>
  <a href="/gen_ai/index.php" class="ga-nav" title="Gen A.I. Tutorial">GEN AI</a>
  <a href="/python/scipy/index.php" class="ga-nav" title="SciPy Tutorial">SCIPY</a>
  <a href="/aws/index.php" class="ga-nav" title="AWS Tutorial">AWS</a>
  <a href="/cybersecurity/index.php" class="ga-nav" title="Cyber security Tutorial">CYBERSECURITY</a>
  <a href="/datascience/default.asp" class="ga-nav" title="Data science Tutorial">DATA SCIENCE</a>
  <a href="/programming/index.php" class="ga-nav" title="Introduction to Programming">INTRO TO PROGRAMMING</a>
  <a href="/htmlcss/default.asp" class="ga-nav" title="Introduction to HTML &amp; CSS">HTML &amp; CSS</a>
  <a href="/bash/index.php" class="ga-nav" title="Bash Tutorial">BASH</a>
  <a href="/rust/index.php" class="ga-nav" title="Rust Tutorial">RUST</a>
  <a href="/tools/index.php" class="ga-nav" title="Web Developer Tools">TOOLS</a>
  <a href="javascript:void(0)" style="width:50px;visibility:hidden;"></a>

</div>
</div>

<!--
<div class="topnav notranslate" id='topnav' style="position:fixed!important;top:56px">
  <div style="overflow:auto;">
    <div class="w3-bar w3-left topnavbar" style="width:100%;overflow:hidden;height:32px">
            <a href='javascript:void(0);' class='topnav-icons fa fa-menu w3-hide-large w3-left w3-bar-item w3-button ga-nav' style="line-height:1.1;padding-top:8px!important;padding-bottom:7px!important;" onclick='open_menu()' title='Menu'></a>
            <a href='/default.asp' style="display:none" class='topnav-icons fa fa-home w3-left w3-bar-item w3-button ga-nav' title='Home'></a>
      <a class="w3-bar-item w3-button ga-nav" href='/html/default.asp' title='HTML Tutorial' style="padding-left:18px!important;padding-right:18px!important;">HTML</a>
      <a class="w3-bar-item w3-button ga-nav" href='/css/default.asp' title='CSS Tutorial'>CSS</a>
      <a class="w3-bar-item w3-button ga-nav" href='/js/default.asp' title='JavaScript Tutorial'>JAVASCRIPT</a>
      <a class="w3-bar-item w3-button ga-nav" href='/sql/default.asp' title='SQL Tutorial'>SQL</a>
      <a class="w3-bar-item w3-button ga-nav" href='/python/default.asp' title='Python Tutorial'>PYTHON</a>
      <a class="w3-bar-item w3-button ga-nav" href='/java/default.asp' title='Java Tutorial'>JAVA</a>
      <a class="w3-bar-item w3-button ga-nav" href='/php/default.asp' title='PHP Tutorial'>PHP</a>
      <a class="w3-bar-item w3-button ga-nav" href='/bootstrap/bootstrap_ver.asp' title='Bootstrap Tutorial'>BOOTSTRAP</a>
      <a class="w3-bar-item w3-button ga-nav" href='/howto/default.asp' title='How To'>HOW TO</a>
      <a class="w3-bar-item w3-button ga-nav" href='/w3css/default.asp' title='W3.CSS Tutorial'>W3.CSS</a>
      <a class="w3-bar-item w3-button ga-nav" href='/c/index.php' title='C Tutorial'>C</a>
      <a class="w3-bar-item w3-button ga-nav" href='/cpp/default.asp' title='C++ Tutorial'>C++</a>
      <a class="w3-bar-item w3-button ga-nav" href='/cs/index.php' title='C# Tutorial'>C#</a>
      <a class="w3-bar-item w3-button ga-nav" href='/react/default.asp' title='React Tutorial'>REACT</a>
      <a class="w3-bar-item w3-button ga-nav" href='/r/default.asp' title='R Tutorial'>R</a>
      <a class="w3-bar-item w3-button ga-nav" href='/jquery/default.asp' title='jQuery Tutorial'>JQUERY</a>
      <a class="w3-bar-item w3-button ga-nav" href='/django/index.php' title='Django Tutorial'>DJANGO</a>
      <a class="w3-bar-item w3-button ga-nav" href='/typescript/index.php' title='Typescript Tutorial'>TYPESCRIPT</a>
      <a class="w3-bar-item w3-button ga-nav" href='/nodejs/default.asp' title='NodeJS Tutorial'>NODEJS</a>
      <a class="w3-bar-item w3-button ga-nav" href='/mysql/default.asp' title='MySQL Tutorial'>MYSQL</a>
      <a class="w3-bar-item w3-button ga-nav" href='/swift/default.asp' title='Swift Tutorial'>SWIFT</a>
    </div>
  </div>
</div>
-->
<script>
subtopnav_intoview();
</script>

<style>
.belowtopnavcontainer {
  max-width:1750px;
  margin:auto;
}
.contentcontainer {
   background-color: #ebedee;
}
body.darkpagetheme .contentcontainer {
   background-color: rgb(21,32,43);
}
#leftmenuinner {width:230px;}
@media (max-width:992px) {
 #leftmenuinner {width:260px;}
 #sidenav{width:260px;}
}
</style>
<div class='contentcontainer'>
<div class='belowtopnavcontainer'>


<div class='w3-sidebar w3-collapse' id='sidenav'>
  <div id='leftmenuinner'>
    <div id='leftmenuinnerinner'>

<h2 class="left"><span class="left_h2">PostgreSQL</span> Tutorial</h2>
<a target="_top" href="index.php">PostgreSQL Home</a>
<a target="_top" href="postgresql_intro.php">PostgreSQL Intro</a>
<a target="_top" href="postgresql_install.php">PostgreSQL Install</a>
<a target="_top" href="postgresql_getstarted.php">PostgreSQL Get Started</a>
<a target="_top" href="postgresql_pgadmin4.php" class="not-wired">PostgreSQL pgAdmin 4</a>
<br>
<h2 class="left">Database</h2>
<a target="_top" href="postgresql_create_table.php">PostgreSQL CREATE TABLE</a>
<a target="_top" href="postgresql_insert_into.php">PostgreSQL INSERT INTO</a>
<a target="_top" href="postgresql_fetch_data.php">PostgreSQL Fetch Data</a>
<a target="_top" href="postgresql_add_column.php">PostgreSQL ADD COLUMN</a>
<a target="_top" href="postgresql_update.php">PostgreSQL UPDATE</a>
<a target="_top" href="postgresql_alter_column.php">PostgreSQL<span style="font-size:92%"> ALTER COLUMN</span></a>
<a target="_top" href="postgresql_drop_column.php">PostgreSQL<span style="font-size:93%">  DROP COLUMN</span></a>
<a target="_top" href="postgresql_delete.php">PostgreSQL DELETE</a>
<a target="_top" href="postgresql_drop_table.php" class="not-wired">PostgreSQL DROP TABLE</a>
<br>
<a target="_top" href="postgresql_create_demodatabase.php" class="not-wired">Create Demo Database</a>
<br>
<h2 class="left">PostgreSQL Syntax</h2>
<a target="_top" href="postgresql_operators.php">PostgreSQL Operators</a>
<a target="_top" href="postgresql_select.php">PostgreSQL SELECT</a>
<a target="_top" href="postgresql_select_distinct.php">PostgreSQL<span style="font-size:85%"> SELECT DISTINCT</span></a>
<a target="_top" href="postgresql_where.php">PostgreSQL WHERE</a>
<a target="_top" href="postgresql_orderby.php">PostgreSQL ORDER BY</a>
<a target="_top" href="postgresql_limit.php">PostgreSQL LIMIT</a>
<a target="_top" href="postgresql_min_max.php">PostgreSQL MIN and MAX</a>
<a target="_top" href="postgresql_count.php">PostgreSQL COUNT</a>
<a target="_top" href="postgresql_sum.php">PostgreSQL SUM</a>
<a target="_top" href="postgresql_avg.php">PostgreSQL AVG</a>
<a target="_top" href="postgresql_like.php">PostgreSQL LIKE</a>
<a target="_top" href="postgresql_in.php">PostgreSQL IN</a>
<a target="_top" href="postgresql_between.php">PostgreSQL BETWEEN</a>
<a target="_top" href="postgresql_as.php">PostgreSQL AS</a>
<a target="_top" href="postgresql_joins.php">PostgreSQL Joins</a>
<a target="_top" href="postgresql_inner_join.php">PostgreSQL INNER JOIN</a>
<a target="_top" href="postgresql_left_join.php">PostgreSQL LEFT JOIN</a>
<a target="_top" href="postgresql_right_join.php">PostgreSQL RIGHT JOIN</a>
<a target="_top" href="postgresql_full_join.php">PostgreSQL FULL JOIN</a>
<a target="_top" href="postgresql_cross_join.php">PostgreSQL CROSS JOIN</a>
<a target="_top" href="postgresql_union.php">PostgreSQL UNION</a>
<a target="_top" href="postgresql_groupby.php">PostgreSQL GROUP BY</a>
<a target="_top" href="postgresql_having.php">PostgreSQL HAVING</a>
<a target="_top" href="postgresql_exists.php">PostgreSQL EXISTS</a>
<a target="_top" href="postgresql_any.php">PostgreSQL ANY</a>
<a target="_top" href="postgresql_all.php">PostgreSQL ALL</a>
<a target="_top" href="postgresql_case.php" class="not-wired">PostgreSQL CASE</a>
<br>
<h2 class="left">PostgreSQL Cert</h2>
<a target="_top" class="no-checkmark" href="postgresql_exam.php">PostgreSQL Certificate</a>
<br>
<h2 class="left">Exercises</h2>
<a target="_top" class="no-checkmark" href="postgresql_exercises.php">PostgreSQL Exercises</a>
<a target="_top" class="no-checkmark" href="postgresql_quiz.php">PostgreSQL Quiz</a>
<a target="_top" class="no-checkmark" href="postgresql_syllabus.php">PostgreSQL Syllabus</a>
<a target="_top" class="no-checkmark" href="postgresql_study_plan.php">PostgreSQL Study Plan</a>
        <br><br>
    </div>
  </div>
</div>
<!--original:
<div class='w3-main w3-light-grey' id='belowtopnav' style='margin-left:230px;'>
ny:-->
<div class='w3-main ws-light-grey' id='belowtopnav' style='margin-left:230px;'>
<!--original:
  <div class='w3-row w3-white'>
  ny:-->
  <div class='w3-row'>

<!--original:
    <div class='w3-col l10 m12' id='main'>
ny:-->
    <div class='w3-col l10 m12 w3-white' id='main'>

      <div id='mainLeaderboard' style='overflow:hidden;'>
        <!-- MainLeaderboard-->
      </div>
    <h1>Create Demo Database</h1>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn" href="postgresql_drop_table.php">&#10094; Previous</a>
<a class="w3-right w3-btn" href="postgresql_operators.php">Next &#10095;</a>
</div>

<hr>

<h2>Demo Database</h2>

<p>Up until now in this tutorial we have worked with a very small and simple
table in our PostgreSQL database.</p>

<p>Now we want to create more tables with more content to be able to demonstrate
more database features.</p>

<p>We will create these 6 tables in our PostgreSQL database:</p>

<p>
<a href="trypostgresql.php?filename=demo_categories" target="_blank">categories</a><br>
<a href="trypostgresql.php?filename=demo_customers" target="_blank">customers</a><br>
<a href="trypostgresql.php?filename=demo_products" target="_blank">products</a><br>
<a href="trypostgresql.php?filename=demo_orders" target="_blank">orders</a><br>
<a href="trypostgresql.php?filename=demo_order_details" target="_blank">order_details</a><br>
<a href="trypostgresql.php?filename=demo_testproducts" target="_blank">testproducts</a><br>
</p>

<p>Below we have listed all the SQL statements you need to create those tables, with content.</p>

<p>You are not required to create the tables on your own system to continue with this tutorial,
but you might better understand how PostgreSQL and SQL statements work.</p>

<p>Make sure you are connected to the database.
If not, follow the steps in the <a href="postgresql_getstarted.php">SQL Shell</a> chapter of this tutorial.</p>

<p>Once you are connected, you are ready to write SQL statements!</p>

<hr>
<h2>CATEGORIES</h2>

<p>The following SQL statement will create a table named 
<code class="w3-codespan">categories</code>:</p>

<div class="w3-example">
<h3>CREATE TABLE categories</h3>
  <div class="w3-code notranslate w3-black shellcommands">
CREATE TABLE categories (<br>&nbsp; category_id SERIAL NOT NULL PRIMARY KEY,<br>&nbsp; category_name VARCHAR(255),<br>&nbsp; description VARCHAR(255)<br>);
  </div>
</div>


<div class="w3-example">
<h3>Result</h3>
  <div class="w3-code notranslate w3-black">
    CREATE TABLE
  </div>
</div>

<p>The following SQL statement will fill the 
<code class="w3-codespan">categories</code> table with content:</p>

<div class="w3-example">
<h3>INSERT INTO categories</h3>
  <div class="w3-code notranslate w3-black shellcommands" style="height:220px;overflow:auto;white-space:nowrap;">
INSERT INTO categories (category_name, description)<br>VALUES<br>&nbsp; ('Beverages', 'Soft drinks, coffees, teas, beers, and ales'),<br>&nbsp; ('Condiments', 'Sweet and savory sauces, relishes, spreads, and seasonings'),<br>&nbsp; ('Confections', 'Desserts, candies, and sweet breads'),<br>&nbsp; ('Dairy Products', 'Cheeses'),<br>&nbsp; ('Grains/Cereals', 'Breads, crackers, pasta, and cereal'),<br>&nbsp; ('Meat/Poultry', 'Prepared meats'),<br>&nbsp; ('Produce', 'Dried fruit and bean curd'),<br>&nbsp; 
        ('Seafood', 'Seaweed and fish');
  </div>
</div>


<div class="w3-example">
<h3>Result</h3>
  <div class="w3-code notranslate w3-black">
    INSERT 0 8
  </div>
</div>

<p>The result can also be seen here:
<a href="trypostgresql.php?filename=demo_categories&resultonly=true" target="_blank">
Demo Database - categories</a>
</p>

<hr>
<h2>CUSTOMERS</h2>

<p>The following SQL statement will create a table named 
<code class="w3-codespan">customers</code>:</p>

<div class="w3-example">
<h3>CREATE TABLE customers</h3>
  <div class="w3-code notranslate w3-black shellcommands">
        CREATE TABLE customers (<br>&nbsp; customer_id SERIAL NOT 
        NULL PRIMARY KEY,<br>&nbsp; customer_name VARCHAR(255),<br>&nbsp; 
        contact_name VARCHAR(255),<br>&nbsp; address VARCHAR(255),<br>&nbsp; 
        city VARCHAR(255),<br>&nbsp; postal_code VARCHAR(255),<br>&nbsp; country 
        VARCHAR(255)<br>);
  </div>
</div>


<div class="w3-example">
<h3>Result</h3>
  <div class="w3-code notranslate w3-black">
    CREATE TABLE
  </div>
</div>

<p>The following SQL statement will fill the 
<code class="w3-codespan">customers</code> table with content:</p>

<div class="w3-example">
<h3>INSERT INTO customers</h3>
  <div class="w3-code notranslate w3-black shellcommands" style="height:220px;overflow:auto;white-space:nowrap;">

        INSERT INTO customers (customer_name, contact_name, address, city, postal_code, country)<br>
        VALUES<br>&nbsp; ('Alfreds Futterkiste', 'Maria Anders', 'Obere Str. 
        57', 'Berlin', '12209', 'Germany'),<br>&nbsp; ('Ana Trujillo Emparedados 
        y helados', 'Ana Trujillo', 'Avda. de la Constitucion 2222', 'Mexico 
        D.F.', '05021', 'Mexico'),<br>&nbsp; ('Antonio Moreno Taquera', 'Antonio 
        Moreno', 'Mataderos 2312', 'Mexico D.F.', '05023', 'Mexico'),<br>&nbsp; 
        ('Around the Horn', 'Thomas Hardy', '120 Hanover Sq.', 'London', 'WA1 
        1DP', 'UK'),<br>&nbsp; ('Berglunds snabbkoep', 'Christina Berglund', 'Berguvsvegen 
        8', 'Lulea', 'S-958 22', 'Sweden'),<br>&nbsp; ('Blauer See Delikatessen', 
        'Hanna Moos', 'Forsterstr. 57', 'Mannheim', '68306', 'Germany'),<br>&nbsp; 
        ('Blondel pere et fils', 'Frederique Citeaux', '24, place Kleber', 
        'Strasbourg', '67000', 'France'),<br>&nbsp; ('Bolido Comidas preparadas', 
        'Martin Sommer', 'C/ Araquil, 67', 'Madrid', '28023', 'Spain'),<br>&nbsp; 
        ('Bon app', 'Laurence Lebihans', '12, rue des Bouchers', 'Marseille', 
        '13008', 'France'),<br>&nbsp; ('Bottom-Dollar Marketse', 'Elizabeth 
        Lincoln', '23 Tsawassen Blvd.', 'Tsawassen', 'T2F 8M4', 'Canada'),<br>&nbsp; 
        ('Bs Beverages', 'Victoria Ashworth', 'Fauntleroy Circus', 'London', 
        'EC2 5NT', 'UK'),<br>&nbsp; ('Cactus Comidas para llevar', 'Patricio 
        Simpson', 'Cerrito 333', 'Buenos Aires', '1010', 'Argentina'),<br>&nbsp; 
        ('Centro comercial Moctezuma', 'Francisco Chang', 'Sierras de Granada 
        9993', 'Mexico D.F.', '05022', 'Mexico'),<br>&nbsp; ('Chop-suey 
        Chinese', 'Yang Wang', 'Hauptstr. 29', 'Bern', '3012', 'Switzerland'),<br>&nbsp; 
        ('Comercio Mineiro', 'Pedro Afonso', 'Av. dos Lusiadas, 23', 'Sao 
        Paulo', '05432-043', 'Brazil'),<br>&nbsp; ('Consolidated Holdings', 
        'Elizabeth Brown', 'Berkeley Gardens 12 Brewery ', 'London', 'WX1 6LT', 
        'UK'),<br>&nbsp; ('Drachenblut Delikatessend', 'Sven Ottlieb', 'Walserweg 
        21', 'Aachen', '52066', 'Germany'),<br>&nbsp; ('Du monde entier', 
        'Janine Labrune', '67, rue des Cinquante Otages', 'Nantes', '44000', 
        'France'),<br>&nbsp; ('Eastern Connection', 'Ann Devon', '35 King 
        George', 'London', 'WX3 6FW', 'UK'),<br>&nbsp; ('Ernst Handel', 'Roland 
        Mendel', 'Kirchgasse 6', 'Graz', '8010', 'Austria'),<br>&nbsp; ('Familia 
        Arquibaldo', 'Aria Cruz', 'Rua Oros, 92', 'Sao Paulo', '05442-030', 
        'Brazil'),<br>&nbsp; ('FISSA Fabrica Inter. Salchichas S.A.', 'Diego 
        Roel', 'C/ Moralzarzal, 86', 'Madrid', '28034', 'Spain'),<br>&nbsp; ('Folies 
        gourmandes', 'Martine Rance', '184, chaussee de Tournai', 'Lille', 
        '59000', 'France'),<br>&nbsp; ('Folk och fe HB', 'Maria Larsson', 'Akergatan 
        24', 'Brecke', 'S-844 67', 'Sweden'),<br>&nbsp; ('Frankenversand', 
        'Peter Franken', 'Berliner Platz 43', 'Munchen', '80805', 'Germany'),<br>&nbsp; 
        ('France restauration', 'Carine Schmitt', '54, rue Royale', 'Nantes', 
        '44000', 'France'),<br>&nbsp; ('Franchi S.p.A.', 'Paolo Accorti', 'Via 
        Monte Bianco 34', 'Torino', '10100', 'Italy'),<br>&nbsp; ('Furia 
        Bacalhau e Frutos do Mar', 'Lino Rodriguez ', 'Jardim das rosas n. 32', 
        'Lisboa', '1675', 'Portugal'),<br>&nbsp; ('Galeria del gastronomo', 
        'Eduardo Saavedra', 'Rambla de Cataluna, 23', 'Barcelona', '08022', 
        'Spain'),<br>&nbsp; ('Godos Cocina Tipica', 'Jose Pedro Freyre', 'C/ 
        Romero, 33', 'Sevilla', '41101', 'Spain'),<br>&nbsp; ('Gourmet 
        Lanchonetes', 'Andre Fonseca', 'Av. Brasil, 442', 'Campinas', 
        '04876-786', 'Brazil'),<br>&nbsp; ('Great Lakes Food Market', 'Howard 
        Snyder', '2732 Baker Blvd.', 'Eugene', '97403', 'USA'),<br>&nbsp; 
        ('GROSELLA-Restaurante', 'Manuel Pereira', '5th Ave. Los Palos Grandes', 
        'Caracas', '1081', 'Venezuela'),<br>&nbsp; ('Hanari Carnes', 'Mario 
        Pontes', 'Rua do Paco, 67', 'Rio de Janeiro', '05454-876', 'Brazil'),<br>&nbsp; 
        ('HILARION-Abastos', 'Carlos Hernandez', 'Carrera 22 con Ave. Carlos 
        Soublette #8-35', 'San Cristobal', '5022', 'Venezuela'),<br>&nbsp; 
        ('Hungry Coyote Import Store', 'Yoshi Latimer', 'City Center Plaza 516 
        Main St.', 'Elgin', '97827', 'USA'),<br>&nbsp; ('Hungry Owl All-Night 
        Grocers', 'Patricia McKenna', '8 Johnstown Road', 'Cork', '', 
        'Ireland'),<br>&nbsp; ('Island Trading', 'Helen Bennett', 'Garden House 
        Crowther Way', 'Cowes', 'PO31 7PJ', 'UK'),<br>&nbsp; ('Koniglich Essen', 
        'Philip Cramer', 'Maubelstr. 90', 'Brandenburg', '14776', 'Germany'),<br>&nbsp; 
        ('La corne d abondance', 'Daniel Tonini', '67, avenue de l Europe', 
        'Versailles', '78000', 'France'),<br>&nbsp; ('La maison d Asie', 
        'Annette Roulet', '1 rue Alsace-Lorraine', 'Toulouse', '31000', 
        'France'),<br>&nbsp; ('Laughing Bacchus Wine Cellars', 'Yoshi Tannamuri', 
        '1900 Oak St.', 'Vancouver', 'V3F 2K1', 'Canada'),<br>&nbsp; ('Lazy K 
        Kountry Store', 'John Steel', '12 Orchestra Terrace', 'Walla Walla', 
        '99362', 'USA'),<br>&nbsp; ('Lehmanns Marktstand', 'Renate Messner', 'Magazinweg 
        7', 'Frankfurt a.M. ', '60528', 'Germany'),<br>&nbsp; ('Lets Stop N 
        Shop', 'Jaime Yorres', '87 Polk St. Suite 5', 'San Francisco', '94117', 
        'USA'),<br>&nbsp; ('LILA-Supermercado', 'Carlos Gonzalez', 'Carrera 52 
        con Ave. Bolivar #65-98 Llano Largo', 'Barquisimeto', '3508', 
        'Venezuela'),<br>&nbsp; ('LINO-Delicateses', 'Felipe Izquierdo', 'Ave. 5 
        de Mayo Porlamar', 'I. de Margarita', '4980', 'Venezuela'),<br>&nbsp; 
        ('Lonesome Pine Restaurant', 'Fran Wilson', '89 Chiaroscuro Rd.', 
        'Portland', '97219', 'USA'),<br>&nbsp; ('Magazzini Alimentari Riuniti', 
        'Giovanni Rovelli', 'Via Ludovico il Moro 22', 'Bergamo', '24100', 
        'Italy'),<br>&nbsp; ('Maison Dewey', 'Catherine Dewey', 'Rue Joseph-Bens 
        532', 'Bruxelles', 'B-1180', 'Belgium'),<br>&nbsp; ('Mere Paillarde', 
        'Jean Fresniere', '43 rue St. Laurent', 'Montreal', 'H1J 1C3', 
        'Canada'),<br>&nbsp; ('Morgenstern Gesundkost', 'Alexander Feuer', 'Heerstr. 
        22', 'Leipzig', '04179', 'Germany'),<br>&nbsp; ('North/South', 'Simon 
        Crowther', 'South House 300 Queensbridge', 'London', 'SW7 1RZ', 'UK'),<br>&nbsp; 
        ('Oceano Atlantico Ltda.', 'Yvonne Moncada', 'Ing. Gustavo Moncada 8585 
        Piso 20-A', 'Buenos Aires', '1010', 'Argentina'),<br>&nbsp; ('Old World 
        Delicatessen', 'Rene Phillips', '2743 Bering St.', 'Anchorage', '99508', 
        'USA'),<br>&nbsp; ('Ottilies Keseladen', 'Henriette Pfalzheim', 'Mehrheimerstr. 
        369', 'Koln', '50739', 'Germany'),<br>&nbsp; ('Paris specialites', 
        'Marie Bertrand', '265, boulevard Charonne', 'Paris', '75012', 
        'France'),<br>&nbsp; ('Pericles Comidas clasicas', 'Guillermo 
        Fernandez', 'Calle Dr. Jorge Cash 321', 'Mexico D.F.', '05033', 
        'Mexico'),<br>&nbsp; ('Piccolo und mehr', 'Georg Pipps', 'Geislweg 14', 
        'Salzburg', '5020', 'Austria'),<br>&nbsp; ('Princesa Isabel Vinhoss', 
        'Isabel de Castro', 'Estrada da saude n. 58', 'Lisboa', '1756', 
        'Portugal'),<br>&nbsp; ('Que Delicia', 'Bernardo Batista', 'Rua da 
        Panificadora, 12', 'Rio de Janeiro', '02389-673', 'Brazil'),<br>&nbsp; 
        ('Queen Cozinha', 'Lucia Carvalho', 'Alameda dos Canarios, 891', 'Sao 
        Paulo', '05487-020', 'Brazil'),<br>&nbsp; ('QUICK-Stop', 'Horst Kloss', 
        'Taucherstrasse 10', 'Cunewalde', '01307', 'Germany'),<br>&nbsp; 
        ('Rancho grande', 'Sergio Gutiarrez', 'Av. del Libertador 900', 'Buenos 
        Aires', '1010', 'Argentina'),<br>&nbsp; ('Rattlesnake Canyon Grocery', 
        'Paula Wilson', '2817 Milton Dr.', 'Albuquerque', '87110', 'USA'),<br>&nbsp; 
        ('Reggiani Caseifici', 'Maurizio Moroni', 'Strada Provinciale 124', 
        'Reggio Emilia', '42100', 'Italy'),<br>&nbsp; ('Ricardo Adocicados', 'Janete 
        Limeira', 'Av. Copacabana, 267', 'Rio de Janeiro', '02389-890', 
        'Brazil'),<br>&nbsp; ('Richter Supermarkt', 'Michael Holz', 'Grenzacherweg 
        237', 'Genève', '1203', 'Switzerland'),<br>&nbsp; ('Romero y tomillo', 
        'Alejandra Camino', 'Gran Via, 1', 'Madrid', '28001', 'Spain'),<br>&nbsp; 
        ('Santa Gourmet', 'Jonas Bergulfsen', 'Erling Skakkes gate 78', 'Stavern', 
        '4110', 'Norway'),<br>&nbsp; ('Save-a-lot Markets', 'Jose Pavarotti', 
        '187 Suffolk Ln.', 'Boise', '83720', 'USA'),<br>&nbsp; ('Seven Seas 
        Imports', 'Hari Kumar', '90 Wadhurst Rd.', 'London', 'OX15 4NB', 'UK'),<br>&nbsp; 
        ('Simons bistro', 'Jytte Petersen', 'Vinbeltet 34', 'Kobenhavn', '1734', 
        'Denmark'),<br>&nbsp; ('Specialites du monde', 'Dominique Perrier', '25, 
        rue Lauriston', 'Paris', '75016', 'France'),<br>&nbsp; ('Split Rail Beer 
        &amp; Ale', 'Art Braunschweiger', 'P.O. Box 555', 'Lander', '82520', 'USA'),<br>&nbsp; 
        ('Supremes delices', 'Pascale Cartrain', 'Boulevard Tirou, 255', 
        'Charleroi', 'B-6000', 'Belgium'),<br>&nbsp; ('The Big Cheese', 'Liz 
        Nixon', '89 Jefferson Way Suite 2', 'Portland', '97201', 'USA'),<br>&nbsp; 
        ('The Cracker Box', 'Liu Wong', '55 Grizzly Peak Rd.', 'Butte', '59801', 
        'USA'),<br>&nbsp; ('Toms Spezialiteten', 'Karin Josephs', 'Luisenstr. 
        48', 'Manster', '44087', 'Germany'),<br>&nbsp; ('Tortuga Restaurante', 
        'Miguel Angel Paolino', 'Avda. Azteca 123', 'Mexico D.F.', '05033', 
        'Mexico'),<br>&nbsp; ('Tradicao Hipermercados', 'Anabela Domingues', 
        'Av. Ines de Castro, 414', 'Sao Paulo', '05634-030', 'Brazil'),<br>&nbsp; 
        ('Trails Head Gourmet Provisioners', 'Helvetius Nagy', '722 DaVinci 
        Blvd.', 'Kirkland', '98034', 'USA'),<br>&nbsp; ('Vaffeljernet', 'Palle 
        Ibsen', 'Smagsloget 45', 'Arhus', '8200', 'Denmark'),<br>&nbsp; ('Victuailles 
        en stock', 'Mary Saveley', '2, rue du Commerce', 'Lyon', '69004', 
        'France'),<br>&nbsp; ('Vins et alcools Chevalier', 'Paul Henriot', '59 
        rue de l Abbaye', 'Reims', '51100', 'France'),<br>&nbsp; ('Die Wandernde 
        Kuh', 'Rita Moller', 'Adenauerallee 900', 'Stuttgart', '70563', 
        'Germany'),<br>&nbsp; ('Wartian Herkku', 'Pirkko Koskitalo', 'Torikatu 
        38', 'Oulu', '90110', 'Finland'),<br>&nbsp; ('Wellington Importadora', 
        'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 
        'Brazil'),<br>&nbsp; ('White Clover Markets', 'Karl Jablonski', '305 - 
        14th Ave. S. Suite 3B', 'Seattle', '98128', 'USA'),<br>&nbsp; ('Wilman 
        Kala', 'Matti Karttunen', 'Keskuskatu 45', 'Helsinki', '21240', 
        'Finland'),<br>&nbsp; ('Wolski', 'Zbyszek', 'ul. Filtrowa 68', 'Walla', 
        '01-012', 'Poland');
  </div>
</div>


<div class="w3-example">
<h3>Result</h3>
  <div class="w3-code notranslate w3-black">
    INSERT 0 91
  </div>
</div>

<p>The result can also be seen here:
<a href="trypostgresql.php?filename=demo_customers&resultonly=true" target="_blank">
Demo Database - customers</a>
</p>

<hr>
<h2>PRODUCTS</h2>

<p>The following SQL statement will create a table named 
<code class="w3-codespan">products</code>:</p>

<div class="w3-example">
<h3>CREATE TABLE products</h3>
  <div class="w3-code notranslate w3-black shellcommands">
        CREATE TABLE products (<br>&nbsp; product_id SERIAL NOT NULL PRIMARY 
        KEY,<br>&nbsp; product_name VARCHAR(255),<br>&nbsp; 
        category_id INT,<br>&nbsp; unit VARCHAR(255),<br>&nbsp; price 
        DECIMAL(10, 2)<br>);
  </div>
</div>


<div class="w3-example">
<h3>Result</h3>
  <div class="w3-code notranslate w3-black">
    CREATE TABLE
  </div>
</div>

<p>The following SQL statement will fill the 
<code class="w3-codespan">products</code> table with content:</p>

<div class="w3-example">
<h3>INSERT INTO products</h3>
  <div class="w3-code notranslate w3-black shellcommands" style="height:220px;overflow:auto;">
        INSERT INTO products (product_id, product_name, category_id, 
        unit, price)<br>VALUES<br>&nbsp; (1, 'Chais', 1, '10 boxes x 20 bags', 18),<br>
        &nbsp;
        (2, 'Chang', 1, '24 - 12 oz bottles', 19),<br>&nbsp; (3, 'Aniseed Syrup', 
        2, '12 - 550 ml bottles', 10),<br>&nbsp; (4, 'Chef Antons Cajun Seasoning', 
        2, '48 - 6 oz jars', 22),<br>&nbsp; (5, 'Chef Antons Gumbo Mix', 2, '36 
        boxes', 21.35),<br>&nbsp; (6, 'Grandmas Boysenberry Spread', 2, '12 - 8 oz 
        jars', 25),<br>&nbsp; (7, 'Uncle Bobs Organic Dried Pears', 7, '12 - 1 lb 
        pkgs.', 30),<br>&nbsp; (8, 'Northwoods Cranberry Sauce', 2, '12 - 12 oz 
        jars', 40),<br>&nbsp; (9, 'Mishi Kobe Niku', 6, '18 - 500 g pkgs.', 97),<br>
        &nbsp;
        (10, 'Ikura', 8, '12 - 200 ml jars', 31),<br>&nbsp; (11, 'Queso Cabrales', 
        4, '1 kg pkg.', 21),<br>&nbsp; (12, 'Queso Manchego La Pastora', 4, '10 - 
        500 g pkgs.', 38),<br>&nbsp; (13, 'Konbu', 8, '2 kg box', 6),<br>&nbsp; (14, 
        'Tofu', 7, '40 - 100 g pkgs.', 23.25),<br>&nbsp; (15, 'Genen Shouyu', 2, 
        '24 - 250 ml bottles', 15.5),<br>&nbsp; (16, 'Pavlova', 3, '32 - 500 g 
        boxes', 17.45),<br>&nbsp; (17, 'Alice Mutton', 6, '20 - 1 kg tins', 39),<br>
        &nbsp;
        (18, 'Carnarvon Tigers', 8, '16 kg pkg.', 62.5),<br>&nbsp; (19, 'Teatime 
        Chocolate Biscuits', 3, '10 boxes x 12 pieces', 9.2),<br>&nbsp; (20, 'Sir 
        Rodneys Marmalade', 3, '30 gift boxes', 81),<br>&nbsp; (21, 'Sir Rodneys 
        Scones', 3, '24 pkgs. x 4 pieces', 10),<br>&nbsp; (22, 'Gustafs Kneckebrod', 
        5, '24 - 500 g pkgs.', 21),<br>&nbsp; (23, 'Tunnbrod', 5, '12 - 250 g 
        pkgs.', 9),<br>&nbsp; (24, 'Guarani Fantastica', 1, '12 - 355 ml cans', 
        4.5),<br>&nbsp; (25, 'NuNuCa Nui-Nougat-Creme', 3, '20 - 450 g glasses', 
        14),<br>&nbsp; (26, 'Gumber Gummiberchen', 3, '100 - 250 g bags', 31.23),<br>
        &nbsp;
        (27, 'Schoggi Schokolade', 3, '100 - 100 g pieces', 43.9),<br>&nbsp; (28, 'Rassle 
        Sauerkraut', 7, '25 - 825 g cans', 45.6),<br>&nbsp; (29, 'Thoringer 
        Rostbratwurst', 6, '50 bags x 30 sausgs.', 123.79),<br>&nbsp; (30, 'Nord-Ost 
        Matjeshering', 8, '10 - 200 g glasses', 25.89),<br>&nbsp; (31, 'Gorgonzola 
        Telino', 4, '12 - 100 g pkgs', 12.5),<br>&nbsp; (32, 'Mascarpone Fabioli', 
        4, '24 - 200 g pkgs.', 32),<br>&nbsp; (33, 'Geitost', 4, '500 g', 2.5),<br>
        &nbsp;
        (34, 'Sasquatch Ale', 1, '24 - 12 oz bottles', 14),<br>&nbsp; (35, 'Steeleye 
        Stout', 1, '24 - 12 oz bottles', 18),<br>&nbsp; (36, 'Inlagd Sill', 8, 
        '24 - 250 g jars', 19),<br>&nbsp; (37, 'Gravad lax', 8, '12 - 500 g pkgs.', 
        26),<br>&nbsp; (38, 'Cote de Blaye', 1, '12 - 75 cl bottles', 263.5),<br>
        &nbsp;
        (39, 'Chartreuse verte', 1, '750 cc per bottle', 18),<br>&nbsp; (40, 
        'Boston Crab Meat', 8, '24 - 4 oz tins', 18.4),<br>&nbsp; (41, 'Jacks New 
        England Clam Chowder', 8, '12 - 12 oz cans', 9.65),<br>&nbsp; (42, 
        'Singaporean Hokkien Fried Mee', 5, '32 - 1 kg pkgs.', 14),<br>&nbsp; (43, 
        'Ipoh Coffee', 1, '16 - 500 g tins', 46),<br>&nbsp; (44, 'Gula Malacca', 
        2, '20 - 2 kg bags', 19.45),<br>&nbsp; (45, 'Rogede sild', 8, '1k 
        pkg.', 9.5),<br>&nbsp; (46, 'Spegesild', 8, '4 - 450 g glasses', 12),<br>
        &nbsp;
        (47, 'Zaanse koeken', 3, '10 - 4 oz boxes', 9.5),<br>&nbsp; (48, 'Chocolade', 
        3, '10 pkgs.', 12.75),<br>&nbsp; (49, 'Maxilaku', 3, '24 - 50 g pkgs.', 
        20),<br>&nbsp; (50, 'Valkoinen suklaa', 3, '12 - 100 g bars', 16.25),<br>
        &nbsp;
        (51, 'Manjimup Dried Apples', 7, '50 - 300 g pkgs.', 53),<br>&nbsp; (52, 
        'Filo Mix', 5, '16 - 2 kg boxes', 7),<br>&nbsp; (53, 'Perth Pasties', 
        6, '48 pieces', 32.8),<br>&nbsp; (54, 'Tourtiare', 6, '16 pies', 7.45),<br>
        &nbsp;
        (55, 'Pate chinois', 6, '24 boxes x 2 pies', 24),<br>&nbsp; (56, 'Gnocchi 
        di nonna Alice', 5, '24 - 250 g pkgs.', 38),<br>&nbsp; (57, 'Ravioli 
        Angelo', 5, '24 - 250 g pkgs.', 19.5),<br>&nbsp; (58, 'Escargots de 
        Bourgogne', 8, '24 pieces', 13.25),<br>&nbsp; (59, 'Raclette Courdavault', 
        4, '5 kg pkg.', 55),<br>&nbsp; (60, 'Camembert Pierrot', 4, '15 - 300 g 
        rounds', 34),<br>&nbsp; (61, 'Sirop d arable', 2, '24 - 500 ml bottles', 
        28.5),<br>&nbsp; (62, 'Tarte au sucre', 3, '48 pies', 49.3),<br>&nbsp; (63, 
        'Vegie-spread', 2, '15 - 625 g jars', 43.9),<br>&nbsp; (64, 'Wimmers gute 
        Semmelknadel', 5, '20 bags x 4 pieces', 33.25),<br>&nbsp; (65, 'Louisiana 
        Fiery Hot Pepper Sauce', 2, '32 - 8 oz bottles', 21.05),<br>&nbsp; (66, 
        'Louisiana Hot Spiced Okra', 2, '24 - 8 oz jars', 17),<br>&nbsp; (67, 
        'Laughing Lumberjack Lager', 1, '24 - 12 oz bottles', 14),<br>&nbsp; (68, 
        'Scottish Longbreads', 3, '10 boxes x 8 pieces', 12.5),<br>&nbsp; (69, 'Gudbrandsdalsost', 
        4, '10 kg pkg.', 36),<br>&nbsp; (70, 'Outback Lager', 1, '24 - 355 ml 
        bottles', 15),<br>&nbsp; (71, 'Flotemysost', 4, '10 - 500 g pkgs.', 21.5),<br>
        &nbsp;
        (72, 'Mozzarella di Giovanni', 4, '24 - 200 g pkgs.', 34.8),<br>&nbsp; (73, 
        'Red Kaviar', 8, '24 - 150 g jars', 15),<br>&nbsp; (74, 'Longlife Tofu', 
        7, '5 kg pkg.', 10),<br>&nbsp; (75, 'Rhenbreu Klosterbier', 1, '24 - 0.5 l 
        bottles', 7.75),<br>&nbsp; (76, 'Lakkalikeeri', 1, '500 ml ', 18),<br>&nbsp; (77, 
        'Original Frankfurter grune Soae', 2, '12 boxes', 13);<br>
  </div>
</div>


<div class="w3-example">
<h3>Result</h3>
  <div class="w3-code notranslate w3-black">
    INSERT 0 77
  </div>
</div>

<p>The result can also be seen here:
<a href="trypostgresql.php?filename=demo_products&resultonly=true" target="_blank">
Demo Database - products</a>
</p>


<hr>
<h2>ORDERS</h2>

<p>The following SQL statement will create a table named 
<code class="w3-codespan">orders</code>:</p>

<div class="w3-example">
<h3>CREATE TABLE orders</h3>
  <div class="w3-code notranslate w3-black shellcommands">
        CREATE TABLE orders (<br>&nbsp; order_id SERIAL NOT NULL PRIMARY KEY,<br>&nbsp; 
        customer_id INT,<br>&nbsp; order_date DATE<br>
        );
  </div>
</div>


<div class="w3-example">
<h3>Result</h3>
  <div class="w3-code notranslate w3-black">
    CREATE TABLE
  </div>
</div>

<p>The following SQL statement will fill the 
<code class="w3-codespan">orders</code> table with content:</p>

<div class="w3-example">
<h3>INSERT INTO orders</h3>
  <div class="w3-code notranslate w3-black shellcommands" style="height:220px;overflow:auto;">
        INSERT INTO orders (order_id, customer_id, order_date)<br>
        VALUES<br>&nbsp;&nbsp;(10248, 90, '2021-07-04'), <br>&nbsp;&nbsp;(10249, 81, 
        '2021-07-05'), <br>&nbsp;&nbsp;(10250, 34, '2021-07-08'), <br>&nbsp;&nbsp;(10251, 84, 
        '2021-07-08'), <br>&nbsp;&nbsp;(10252, 76, '2021-07-09'), <br>&nbsp;&nbsp;(10253, 34, 
        '2021-07-10'), <br>&nbsp;&nbsp;(10254, 14, '2021-07-11'), <br>&nbsp;&nbsp;(10255, 68, 
        '2021-07-12'), <br>&nbsp;&nbsp;(10256, 88, '2021-07-15'), <br>&nbsp;&nbsp;(10257, 35, 
        '2021-07-16'), <br>&nbsp;&nbsp;(10258, 20, '2021-07-17'), <br>&nbsp;&nbsp;(10259, 13, 
        '2021-07-18'), <br>&nbsp;&nbsp;(10260, 55, '2021-07-19'), <br>&nbsp;&nbsp;(10261, 61, 
        '2021-07-19'), <br>&nbsp;&nbsp;(10262, 65, '2021-07-22'), <br>&nbsp;&nbsp;(10263, 20,  
        '2021-07-23'), <br>&nbsp;&nbsp;(10264, 24, '2021-07-24'), <br>&nbsp;&nbsp;(10265, 7,  
        '2021-07-25'), <br>&nbsp;&nbsp;(10266, 87, '2021-07-26'), <br>&nbsp;&nbsp;(10267, 25,  
        '2021-07-29'), <br>&nbsp;&nbsp;(10268, 33, '2021-07-30'), <br>&nbsp;&nbsp;(10269, 89,  
        '2021-07-31'), <br>&nbsp;&nbsp;(10270, 87, '2021-08-01'), <br>&nbsp;&nbsp;(10271, 75,  
        '2021-08-01'), <br>&nbsp;&nbsp;(10272, 65, '2021-08-02'), <br>&nbsp;&nbsp;(10273, 63,  
        '2021-08-05'), <br>&nbsp;&nbsp;(10274, 85, '2021-08-06'), <br>&nbsp;&nbsp;(10275, 49,  
        '2021-08-07'), <br>&nbsp;&nbsp;(10276, 80, '2021-08-08'), <br>&nbsp;&nbsp;(10277, 52,  
        '2021-08-09'), <br>&nbsp;&nbsp;(10278, 5, '2021-08-12'), <br>&nbsp;&nbsp;(10279, 44,  
        '2021-08-13'), <br>&nbsp;&nbsp;(10280, 5, '2021-08-14'), <br>&nbsp;&nbsp;(10281, 69,  
        '2021-08-14'), <br>&nbsp;&nbsp;(10282, 69, '2021-08-15'), <br>&nbsp;&nbsp;(10283, 46,  
        '2021-08-16'), <br>&nbsp;&nbsp;(10284, 44, '2021-08-19'), <br>&nbsp;&nbsp;(10285, 63,  
        '2021-08-20'), <br>&nbsp;&nbsp;(10286, 63, '2021-08-21'), <br>&nbsp;&nbsp;(10287, 67,  
        '2021-08-22'), <br>&nbsp;&nbsp;(10288, 66, '2021-08-23'), <br>&nbsp;&nbsp;(10289, 11,  
        '2021-08-26'), <br>&nbsp;&nbsp;(10290, 15, '2021-08-27'), <br>&nbsp;&nbsp;(10291, 61,  
        '2021-08-27'), <br>&nbsp;&nbsp;(10292, 81, '2021-08-28'), <br>&nbsp;&nbsp;(10293, 80,  
        '2021-08-29'), <br>&nbsp;&nbsp;(10294, 65, '2021-08-30'), <br>&nbsp;&nbsp;(10295, 85,  
        '2021-09-02'), <br>&nbsp;&nbsp;(10296, 46, '2021-09-03'), <br>&nbsp;&nbsp;(10297, 7,  
        '2021-09-04'), <br>&nbsp;&nbsp;(10298, 37, '2021-09-05'), <br>&nbsp;&nbsp;(10299, 67,  
        '2021-09-06'), <br>&nbsp;&nbsp;(10300, 49, '2021-09-09'), <br>&nbsp;&nbsp;(10301, 86,  
        '2021-09-09'), <br>&nbsp;&nbsp;(10302, 76, '2021-09-10'), <br>&nbsp;&nbsp;(10303, 30,  
        '2021-09-11'), <br>&nbsp;&nbsp;(10304, 80, '2021-09-12'), <br>&nbsp;&nbsp;(10305, 55,  
        '2021-09-13'), <br>&nbsp;&nbsp;(10306, 69, '2021-09-16'), <br>&nbsp;&nbsp;(10307, 48,  
        '2021-09-17'), <br>&nbsp;&nbsp;(10308, 2, '2021-09-18'), <br>&nbsp;&nbsp;(10309, 37,  
        '2021-09-19'), <br>&nbsp;&nbsp;(10310, 77, '2021-09-20'), <br>&nbsp;&nbsp;(10311, 18,  
        '2021-09-20'), <br>&nbsp;&nbsp;(10312, 86, '2021-09-23'), <br>&nbsp;&nbsp;(10313, 63,  
        '2021-09-24'), <br>&nbsp;&nbsp;(10314, 65, '2021-09-25'), <br>&nbsp;&nbsp;(10315, 38,  
        '2021-09-26'), <br>&nbsp;&nbsp;(10316, 65, '2021-09-27'), <br>&nbsp;&nbsp;(10317, 48,  
        '2021-09-30'), <br>&nbsp;&nbsp;(10318, 38, '2021-10-01'), <br>&nbsp;&nbsp;(10319, 80,  
        '2021-10-02'), <br>&nbsp;&nbsp;(10320, 87, '2021-10-03'), <br>&nbsp;&nbsp;(10321, 38,  
        '2021-10-03'), <br>&nbsp;&nbsp;(10322, 58, '2021-10-04'), <br>&nbsp;&nbsp;(10323, 39,  
        '2021-10-07'), <br>&nbsp;&nbsp;(10324, 71, '2021-10-08'), <br>&nbsp;&nbsp;(10325, 39,  
        '2021-10-09'), <br>&nbsp;&nbsp;(10326, 8, '2021-10-10'), <br>&nbsp;&nbsp;(10327, 24,  
        '2021-10-11'), <br>&nbsp;&nbsp;(10328, 28, '2021-10-14'), <br>&nbsp;&nbsp;(10329, 75,  
        '2021-10-15'), <br>&nbsp;&nbsp;(10330, 46, '2021-10-16'), <br>&nbsp;&nbsp;(10331, 9,  
        '2021-10-16'), <br>&nbsp;&nbsp;(10332, 51, '2021-10-17'), <br>&nbsp;&nbsp;(10333, 87,  
        '2021-10-18'), <br>&nbsp;&nbsp;(10334, 84, '2021-10-21'), <br>&nbsp;&nbsp;(10335, 37,  
        '2021-10-22'), <br>&nbsp;&nbsp;(10336, 60, '2021-10-23'), <br>&nbsp;&nbsp;(10337, 25,  
        '2021-10-24'), <br>&nbsp;&nbsp;(10338, 55, '2021-10-25'), <br>&nbsp;&nbsp;(10339, 51,  
        '2021-10-28'), <br>&nbsp;&nbsp;(10340, 9, '2021-10-29'), <br>&nbsp;&nbsp;(10341, 73,  
        '2021-10-29'), <br>&nbsp;&nbsp;(10342, 25, '2021-10-30'), <br>&nbsp;&nbsp;(10343, 44,  
        '2021-10-31'), <br>&nbsp;&nbsp;(10344, 89, '2021-11-01'), <br>&nbsp;&nbsp;(10345, 63,  
        '2021-11-04'), <br>&nbsp;&nbsp;(10346, 65, '2021-11-05'), <br>&nbsp;&nbsp;(10347, 21,  
        '2021-11-06'), <br>&nbsp;&nbsp;(10348, 86, '2021-11-07'), <br>&nbsp;&nbsp;(10349, 75,  
        '2021-11-08'), <br>&nbsp;&nbsp;(10350, 41, '2021-11-11'), <br>&nbsp;&nbsp;(10351, 20,  
        '2021-11-11'), <br>&nbsp;&nbsp;(10352, 28, '2021-11-12'), <br>&nbsp;&nbsp;(10353, 59,  
        '2021-11-13'), <br>&nbsp;&nbsp;(10354, 58, '2021-11-14'), <br>&nbsp;&nbsp;(10355, 4,  
        '2021-11-15'), <br>&nbsp;&nbsp;(10356, 86, '2021-11-18'), <br>&nbsp;&nbsp;(10357, 46,  
        '2021-11-19'), <br>&nbsp;&nbsp;(10358, 41, '2021-11-20'), <br>&nbsp;&nbsp;(10359, 72,  
        '2021-11-21'), <br>&nbsp;&nbsp;(10360, 7, '2021-11-22'), <br>&nbsp;&nbsp;(10361, 63,  
        '2021-11-22'), <br>&nbsp;&nbsp;(10362, 9, '2021-11-25'), <br>&nbsp;&nbsp;(10363, 17,  
        '2021-11-26'), <br>&nbsp;&nbsp;(10364, 19, '2021-11-26'), <br>&nbsp;&nbsp;(10365, 3,  
        '2021-11-27'), <br>&nbsp;&nbsp;(10366, 29, '2021-11-28'), <br>&nbsp;&nbsp;(10367, 83,  
        '2021-11-28'), <br>&nbsp;&nbsp;(10368, 20, '2021-11-29'), <br>&nbsp;&nbsp;(10369, 75,  
        '2021-12-02'), <br>&nbsp;&nbsp;(10370, 14, '2021-12-03'), <br>&nbsp;&nbsp;(10371, 41,  
        '2021-12-03'), <br>&nbsp;&nbsp;(10372, 62, '2021-12-04'), <br>&nbsp;&nbsp;(10373, 37,  
        '2021-12-05'), <br>&nbsp;&nbsp;(10374, 91, '2021-12-05'), <br>&nbsp;&nbsp;(10375, 36,  
        '2021-12-06'), <br>&nbsp;&nbsp;(10376, 51, '2021-12-09'), <br>&nbsp;&nbsp;(10377, 72,  
        '2021-12-09'), <br>&nbsp;&nbsp;(10378, 24, '2021-12-10'), <br>&nbsp;&nbsp;(10379, 61,  
        '2021-12-11'), <br>&nbsp;&nbsp;(10380, 37, '2021-12-12'), <br>&nbsp;&nbsp;(10381, 46,  
        '2021-12-12'), <br>&nbsp;&nbsp;(10382, 20, '2021-12-13'), <br>&nbsp;&nbsp;(10383, 4,  
        '2021-12-16'), <br>&nbsp;&nbsp;(10384, 5, '2021-12-16'), <br>&nbsp;&nbsp;(10385, 75,  
        '2021-12-17'), <br>&nbsp;&nbsp;(10386, 21, '2021-12-18'), <br>&nbsp;&nbsp;(10387, 70,  
        '2021-12-18'), <br>&nbsp;&nbsp;(10388, 72, '2021-12-19'), <br>&nbsp;&nbsp;(10389, 10,  
        '2021-12-20'), <br>&nbsp;&nbsp;(10390, 20, '2021-12-23'), <br>&nbsp;&nbsp;(10391, 17,  
        '2021-12-23'), <br>&nbsp;&nbsp;(10392, 59, '2021-12-24'), <br>&nbsp;&nbsp;(10393, 71,  
        '2021-12-25'), <br>&nbsp;&nbsp;(10394, 36, '2021-12-25'), <br>&nbsp;&nbsp;(10395, 35,  
        '2021-12-26'), <br>&nbsp;&nbsp;(10396, 25, '2021-12-27'), <br>&nbsp;&nbsp;(10397, 60,  
        '2021-12-27'), <br>&nbsp;&nbsp;(10398, 71, '2021-12-30'), <br>&nbsp;&nbsp;(10399, 83,  
        '2021-12-31'), <br>&nbsp;&nbsp;(10400, 19, '2022-01-01'), <br>&nbsp;&nbsp;(10401, 65,  
        '2022-01-01'), <br>&nbsp;&nbsp;(10402, 20, '2022-01-02'), <br>&nbsp;&nbsp;(10403, 20,  
        '2022-01-03'), <br>&nbsp;&nbsp;(10404, 49, '2022-01-03'), <br>&nbsp;&nbsp;(10405, 47,  
        '2022-01-06'), <br>&nbsp;&nbsp;(10406, 62, '2022-01-07'), <br>&nbsp;&nbsp;(10407, 56,  
        '2022-01-07'), <br>&nbsp;&nbsp;(10408, 23, '2022-01-08'), <br>&nbsp;&nbsp;(10409, 54,  
        '2022-01-09'), <br>&nbsp;&nbsp;(10410, 10, '2022-01-10'), <br>&nbsp;&nbsp;(10411, 10,  
        '2022-01-10'), <br>&nbsp;&nbsp;(10412, 87, '2022-01-13'), <br>&nbsp;&nbsp;(10413, 41,  
        '2022-01-14'), <br>&nbsp;&nbsp;(10414, 21, '2022-01-14'), <br>&nbsp;&nbsp;(10415, 36,  
        '2022-01-15'), <br>&nbsp;&nbsp;(10416, 87, '2022-01-16'), <br>&nbsp;&nbsp;(10417, 73,  
        '2022-01-16'), <br>&nbsp;&nbsp;(10418, 63, '2022-01-17'), <br>&nbsp;&nbsp;(10419, 68,  
        '2022-01-20'), <br>&nbsp;&nbsp;(10420, 88, '2022-01-21'), <br>&nbsp;&nbsp;(10421, 61,  
        '2022-01-21'), <br>&nbsp;&nbsp;(10422, 27, '2022-01-22'), <br>&nbsp;&nbsp;(10423, 31,  
        '2022-01-23'), <br>&nbsp;&nbsp;(10424, 51, '2022-01-23'), <br>&nbsp;&nbsp;(10425, 41,  
        '2022-01-24'), <br>&nbsp;&nbsp;(10426, 29, '2022-01-27'), <br>&nbsp;&nbsp;(10427, 59,  
        '2022-01-27'), <br>&nbsp;&nbsp;(10428, 66, '2022-01-28'), <br>&nbsp;&nbsp;(10429, 37,  
        '2022-01-29'), <br>&nbsp;&nbsp;(10430, 20, '2022-01-30'), <br>&nbsp;&nbsp;(10431, 10,  
        '2022-01-30'), <br>&nbsp;&nbsp;(10432, 75, '2022-01-31'), <br>&nbsp;&nbsp;(10433, 60,  
        '2022-02-03'), <br>&nbsp;&nbsp;(10434, 24, '2022-02-03'), <br>&nbsp;&nbsp;(10435, 16,  
        '2022-02-04'), <br>&nbsp;&nbsp;(10436, 7, '2022-02-05'), <br>&nbsp;&nbsp;(10437, 87,  
        '2022-02-05'), <br>&nbsp;&nbsp;(10438, 79, '2022-02-06'), <br>&nbsp;&nbsp;(10439, 51,  
        '2022-02-07'), <br>&nbsp;&nbsp;(10440, 71, '2022-02-10'), <br>&nbsp;&nbsp;(10441, 55,  
        '2022-02-10'), <br>&nbsp;&nbsp;(10442, 20, '2022-02-11'), <br>&nbsp;&nbsp;(10443, 66,  
        '2022-02-12'), <br>&nbsp;&nbsp;(10444, 5, '2022-02-12'), <br>&nbsp;&nbsp;(10445, 5,  
        '2022-02-13'), <br>&nbsp;&nbsp;(10446, 79, '2022-02-14'), <br>&nbsp;&nbsp;(10447, 67,  
        '2022-02-14'), <br>&nbsp;&nbsp;(10448, 64, '2022-02-17'), <br>&nbsp;&nbsp;(10449, 7,  
        '2022-02-18'), <br>&nbsp;&nbsp;(10450, 84, '2022-02-19'), <br>&nbsp;&nbsp;(10451, 63,  
        '2022-02-19'), <br>&nbsp;&nbsp;(10452, 71, '2022-02-20'), <br>&nbsp;&nbsp;(10453, 4,  
        '2022-02-21'), <br>&nbsp;&nbsp;(10454, 41, '2022-02-21'), <br>&nbsp;&nbsp;(10455, 87,  
        '2022-02-24'), <br>&nbsp;&nbsp;(10456, 39, '2022-02-25'), <br>&nbsp;&nbsp;(10457, 39,  
        '2022-02-25'), <br>&nbsp;&nbsp;(10458, 76, '2022-02-26'), <br>&nbsp;&nbsp;(10459, 84,  
        '2022-02-27'), <br>&nbsp;&nbsp;(10460, 24, '2022-02-28'), <br>&nbsp;&nbsp;(10461, 46,  
        '2022-02-28'), <br>&nbsp;&nbsp;(10462, 16, '2022-03-03'), <br>&nbsp;&nbsp;(10463, 76,  
        '2022-03-04'), <br>&nbsp;&nbsp;(10464, 28, '2022-03-04'), <br>&nbsp;&nbsp;(10465, 83,  
        '2022-03-05'), <br>&nbsp;&nbsp;(10466, 15, '2022-03-06'), <br>&nbsp;&nbsp;(10467, 49,  
        '2022-03-06'), <br>&nbsp;&nbsp;(10468, 39, '2022-03-07'), <br>&nbsp;&nbsp;(10469, 89,  
        '2022-03-10'), <br>&nbsp;&nbsp;(10470, 9, '2022-03-11'), <br>&nbsp;&nbsp;(10471, 11,  
        '2022-03-11'), <br>&nbsp;&nbsp;(10472, 72, '2022-03-12'), <br>&nbsp;&nbsp;(10473, 38,  
        '2022-03-13'), <br>&nbsp;&nbsp;(10474, 58, '2022-03-13'), <br>&nbsp;&nbsp;(10475, 76,  
        '2022-03-14'), <br>&nbsp;&nbsp;(10476, 35, '2022-03-17'), <br>&nbsp;&nbsp;(10477, 60,  
        '2022-03-17'), <br>&nbsp;&nbsp;(10478, 84, '2022-03-18'), <br>&nbsp;&nbsp;(10479, 65,  
        '2022-03-19'), <br>&nbsp;&nbsp;(10480, 23, '2022-03-20'), <br>&nbsp;&nbsp;(10481, 67,  
        '2022-03-20'), <br>&nbsp;&nbsp;(10482, 43, '2022-03-21'), <br>&nbsp;&nbsp;(10483, 89,  
        '2022-03-24'), <br>&nbsp;&nbsp;(10484, 11, '2022-03-24'), <br>&nbsp;&nbsp;(10485, 47,  
        '2022-03-25'), <br>&nbsp;&nbsp;(10486, 35, '2022-03-26'), <br>&nbsp;&nbsp;(10487, 62,  
        '2022-03-26'), <br>&nbsp;&nbsp;(10488, 25, '2022-03-27'), <br>&nbsp;&nbsp;(10489, 59,  
        '2022-03-28'), <br>&nbsp;&nbsp;(10490, 35, '2022-03-31'), <br>&nbsp;&nbsp;(10491, 28,  
        '2022-03-31'), <br>&nbsp;&nbsp;(10492, 10, '2022-04-01'), <br>&nbsp;&nbsp;(10493, 41,  
        '2022-04-02'), <br>&nbsp;&nbsp;(10494, 15, '2022-04-02'), <br>&nbsp;&nbsp;(10495, 42,  
        '2022-04-03'), <br>&nbsp;&nbsp;(10496, 81, '2022-04-04'), <br>&nbsp;&nbsp;(10497, 44,  
        '2022-04-04'), <br>&nbsp;&nbsp;(10498, 35, '2022-04-07'), <br>&nbsp;&nbsp;(10499, 46,  
        '2022-04-08'), <br>&nbsp;&nbsp;(10500, 41, '2022-04-09'), <br>&nbsp;&nbsp;(10501, 6,  
        '2022-04-09'), <br>&nbsp;&nbsp;(10502, 58, '2022-04-10'), <br>&nbsp;&nbsp;(10503, 37,  
        '2022-04-11'), <br>&nbsp;&nbsp;(10504, 89, '2022-04-11'), <br>&nbsp;&nbsp;(10505, 51,  
        '2022-04-14'), <br>&nbsp;&nbsp;(10506, 39, '2022-04-15'), <br>&nbsp;&nbsp;(10507, 3,  
        '2022-04-15'), <br>&nbsp;&nbsp;(10508, 56, '2022-04-16'), <br>&nbsp;&nbsp;(10509, 6,  
        '2022-04-17'), <br>&nbsp;&nbsp;(10510, 71, '2022-04-18'), <br>&nbsp;&nbsp;(10511, 9,  
        '2022-04-18'), <br>&nbsp;&nbsp;(10512, 21, '2022-04-21'), <br>&nbsp;&nbsp;(10513, 86,  
        '2022-04-22'), <br>&nbsp;&nbsp;(10514, 20, '2022-04-22'), <br>&nbsp;&nbsp;(10515, 63,  
        '2022-04-23'), <br>&nbsp;&nbsp;(10516, 37, '2022-04-24'), <br>&nbsp;&nbsp;(10517, 53,  
        '2022-04-24'), <br>&nbsp;&nbsp;(10518, 80, '2022-04-25'), <br>&nbsp;&nbsp;(10519, 14,  
        '2022-04-28'), <br>&nbsp;&nbsp;(10520, 70, '2022-04-29'), <br>&nbsp;&nbsp;(10521, 12,  
        '2022-04-29'), <br>&nbsp;&nbsp;(10522, 44, '2022-04-30'), <br>&nbsp;&nbsp;(10523, 72,  
        '2022-05-01'), <br>&nbsp;&nbsp;(10524, 5, '2022-05-01'), <br>&nbsp;&nbsp;(10525, 9,  
        '2022-05-02'), <br>&nbsp;&nbsp;(10526, 87, '2022-05-05'), <br>&nbsp;&nbsp;(10527, 63, 
        '2022-05-05'), <br>&nbsp;&nbsp;(10528, 32, '2022-05-06'), <br>&nbsp;&nbsp;(10529, 50,  
        '2022-05-07'), <br>&nbsp;&nbsp;(10530, 59, '2022-05-08'), <br>&nbsp;&nbsp;(10531, 54,  
        '2022-05-08'), <br>&nbsp;&nbsp;(10532, 19, '2022-05-09'), <br>&nbsp;&nbsp;(10533, 24,  
        '2022-05-12'), <br>&nbsp;&nbsp;(10534, 44, '2022-05-12'), <br>&nbsp;&nbsp;(10535, 3,  
        '2022-05-13'), <br>&nbsp;&nbsp;(10536, 44, '2022-05-14'), <br>&nbsp;&nbsp;(10537, 68,  
        '2022-05-14'), <br>&nbsp;&nbsp;(10538, 11, '2022-05-15'), <br>&nbsp;&nbsp;(10539, 11,  
        '2022-05-16'), <br>&nbsp;&nbsp;(10540, 63, '2022-05-19'), <br>&nbsp;&nbsp;(10541, 34,  
        '2022-05-19'), <br>&nbsp;&nbsp;(10542, 39, '2022-05-20'), <br>&nbsp;&nbsp;(10543, 46,  
        '2022-05-21'), <br>&nbsp;&nbsp;(10544, 48, '2022-05-21'), <br>&nbsp;&nbsp;(10545, 43,  
        '2022-05-22'), <br>&nbsp;&nbsp;(10546, 84, '2022-05-23'), <br>&nbsp;&nbsp;(10547, 72,  
        '2022-05-23'), <br>&nbsp;&nbsp;(10548, 79, '2022-05-26'), <br>&nbsp;&nbsp;(10549, 63,  
        '2022-05-27'), <br>&nbsp;&nbsp;(10550, 30, '2022-05-28'), <br>&nbsp;&nbsp;(10551, 28,  
        '2022-05-28'), <br>&nbsp;&nbsp;(10552, 35, '2022-05-29'), <br>&nbsp;&nbsp;(10553, 87,  
        '2022-05-30'), <br>&nbsp;&nbsp;(10554, 56, '2022-05-30'), <br>&nbsp;&nbsp;(10555, 71,  
        '2022-06-02'), <br>&nbsp;&nbsp;(10556, 73, '2022-06-03'), <br>&nbsp;&nbsp;(10557, 44,  
        '2022-06-03'), <br>&nbsp;&nbsp;(10558, 4, '2022-06-04'), <br>&nbsp;&nbsp;(10559, 7,  
        '2022-06-05'), <br>&nbsp;&nbsp;(10560, 25, '2022-06-06'), <br>&nbsp;&nbsp;(10561, 24,  
        '2022-06-06'), <br>&nbsp;&nbsp;(10562, 66, '2022-06-09'), <br>&nbsp;&nbsp;(10563, 67,  
        '2022-06-10'), <br>&nbsp;&nbsp;(10564, 65, '2022-06-10'), <br>&nbsp;&nbsp;(10565, 51,  
        '2022-06-11'), <br>&nbsp;&nbsp;(10566, 7, '2022-06-12'), <br>&nbsp;&nbsp;(10567, 37,  
        '2022-06-12'), <br>&nbsp;&nbsp;(10568, 29, '2022-06-13'), <br>&nbsp;&nbsp;(10569, 65,  
        '2022-06-16'), <br>&nbsp;&nbsp;(10570, 51, '2022-06-17'), <br>&nbsp;&nbsp;(10571, 20,  
        '2022-06-17'), <br>&nbsp;&nbsp;(10572, 5, '2022-06-18'), <br>&nbsp;&nbsp;(10573, 3,  
        '2022-06-19'), <br>&nbsp;&nbsp;(10574, 82, '2022-06-19'), <br>&nbsp;&nbsp;(10575, 52,  
        '2022-06-20'), <br>&nbsp;&nbsp;(10576, 80, '2022-06-23'), <br>&nbsp;&nbsp;(10577, 82,  
        '2022-06-23'), <br>&nbsp;&nbsp;(10578, 11, '2022-06-24'), <br>&nbsp;&nbsp;(10579, 45,  
        '2022-06-25'), <br>&nbsp;&nbsp;(10580, 56, '2022-06-26'), <br>&nbsp;&nbsp;(10581, 21,  
        '2022-06-26'), <br>&nbsp;&nbsp;(10582, 6, '2022-06-27'), <br>&nbsp;&nbsp;(10583, 87,  
        '2022-06-30'), <br>&nbsp;&nbsp;(10584, 7, '2022-06-30'), <br>&nbsp;&nbsp;(10585, 88,  
        '2022-07-01'), <br>&nbsp;&nbsp;(10586, 66, '2022-07-02'), <br>&nbsp;&nbsp;(10587, 61,  
        '2022-07-02'), <br>&nbsp;&nbsp;(10588, 63, '2022-07-03'), <br>&nbsp;&nbsp;(10589, 32,  
        '2022-07-04'), <br>&nbsp;&nbsp;(10590, 51, '2022-07-07'), <br>&nbsp;&nbsp;(10591, 83,  
        '2022-07-07'), <br>&nbsp;&nbsp;(10592, 44, '2022-07-08'), <br>&nbsp;&nbsp;(10593, 44,  
        '2022-07-09'), <br>&nbsp;&nbsp;(10594, 55, '2022-07-09'), <br>&nbsp;&nbsp;(10595, 20,  
        '2022-07-10'), <br>&nbsp;&nbsp;(10596, 89, '2022-07-11'), <br>&nbsp;&nbsp;(10597, 59,  
        '2022-07-11'), <br>&nbsp;&nbsp;(10598, 65, '2022-07-14'), <br>&nbsp;&nbsp;(10599, 11,  
        '2022-07-15'), <br>&nbsp;&nbsp;(10600, 36, '2022-07-16'), <br>&nbsp;&nbsp;(10601, 35,  
        '2022-07-16'), <br>&nbsp;&nbsp;(10602, 83, '2022-07-17'), <br>&nbsp;&nbsp;(10603, 71,  
        '2022-07-18'), <br>&nbsp;&nbsp;(10604, 28, '2022-07-18'), <br>&nbsp;&nbsp;(10605, 51,  
        '2022-07-21'), <br>&nbsp;&nbsp;(10606, 81, '2022-07-22'), <br>&nbsp;&nbsp;(10607, 71,  
        '2022-07-22'), <br>&nbsp;&nbsp;(10608, 79, '2022-07-23'), <br>&nbsp;&nbsp;(10609, 18,  
        '2022-07-24'), <br>&nbsp;&nbsp;(10610, 41, '2022-07-25'), <br>&nbsp;&nbsp;(10611, 91,  
        '2022-07-25'), <br>&nbsp;&nbsp;(10612, 71, '2022-07-28'), <br>&nbsp;&nbsp;(10613, 35,  
        '2022-07-29'), <br>&nbsp;&nbsp;(10614, 6, '2022-07-29'), <br>&nbsp;&nbsp;(10615, 90,  
        '2022-07-30'), <br>&nbsp;&nbsp;(10616, 32, '2022-07-31'), <br>&nbsp;&nbsp;(10617, 32,  
        '2022-07-31'), <br>&nbsp;&nbsp;(10618, 51, '2022-08-01'), <br>&nbsp;&nbsp;(10619, 51,  
        '2022-08-04'), <br>&nbsp;&nbsp;(10620, 42, '2022-08-05'), <br>&nbsp;&nbsp;(10621, 38,  
        '2022-08-05'), <br>&nbsp;&nbsp;(10622, 67, '2022-08-06'), <br>&nbsp;&nbsp;(10623, 25,  
        '2022-08-07'), <br>&nbsp;&nbsp;(10624, 78, '2022-08-07'), <br>&nbsp;&nbsp;(10625, 2,  
        '2022-08-08'), <br>&nbsp;&nbsp;(10626, 5, '2022-08-11'), <br>&nbsp;&nbsp;(10627, 71,  
        '2022-08-11'), <br>&nbsp;&nbsp;(10628, 7, '2022-08-12'), <br>&nbsp;&nbsp;(10629, 30,  
        '2022-08-12'), <br>&nbsp;&nbsp;(10630, 39, '2022-08-13'), <br>&nbsp;&nbsp;(10631, 41,  
        '2022-08-14'), <br>&nbsp;&nbsp;(10632, 86, '2022-08-14'), <br>&nbsp;&nbsp;(10633, 20,  
        '2022-08-15'), <br>&nbsp;&nbsp;(10634, 23, '2022-08-15'), <br>&nbsp;&nbsp;(10635, 49,  
        '2022-08-18'), <br>&nbsp;&nbsp;(10636, 87, '2022-08-19'), <br>&nbsp;&nbsp;(10637, 62,  
        '2022-08-19'), <br>&nbsp;&nbsp;(10638, 47, '2022-08-20'), <br>&nbsp;&nbsp;(10639, 70,  
        '2022-08-20'), <br>&nbsp;&nbsp;(10640, 86, '2022-08-21'), <br>&nbsp;&nbsp;(10641, 35,  
        '2022-08-22'), <br>&nbsp;&nbsp;(10642, 73, '2022-08-22'), <br>&nbsp;&nbsp;(10643, 1,  
        '2022-08-25'), <br>&nbsp;&nbsp;(10644, 88, '2022-08-25'), <br>&nbsp;&nbsp;(10645, 34,  
        '2022-08-26'), <br>&nbsp;&nbsp;(10646, 37, '2022-08-27'), <br>&nbsp;&nbsp;(10647, 61,  
        '2022-08-27'), <br>&nbsp;&nbsp;(10648, 67, '2022-08-28'), <br>&nbsp;&nbsp;(10649, 50,  
        '2022-08-28'), <br>&nbsp;&nbsp;(10650, 21, '2022-08-29'), <br>&nbsp;&nbsp;(10651, 86,  
        '2022-09-01'), <br>&nbsp;&nbsp;(10652, 31, '2022-09-01'), <br>&nbsp;&nbsp;(10653, 25,  
        '2022-09-02'), <br>&nbsp;&nbsp;(10654, 5, '2022-09-02'), <br>&nbsp;&nbsp;(10655, 66,  
        '2022-09-03'), <br>&nbsp;&nbsp;(10656, 32, '2022-09-04'), <br>&nbsp;&nbsp;(10657, 71,  
        '2022-09-04'), <br>&nbsp;&nbsp;(10658, 63, '2022-09-05'), <br>&nbsp;&nbsp;(10659, 62,  
        '2022-09-05'), <br>&nbsp;&nbsp;(10660, 36, '2022-09-08'), <br>&nbsp;&nbsp;(10661, 37,  
        '2022-09-09'), <br>&nbsp;&nbsp;(10662, 48, '2022-09-09'), <br>&nbsp;&nbsp;(10663, 9,  
        '2022-09-10'), <br>&nbsp;&nbsp;(10664, 28, '2022-09-10'), <br>&nbsp;&nbsp;(10665, 48,  
        '2022-09-11'), <br>&nbsp;&nbsp;(10666, 68, '2022-09-12'), <br>&nbsp;&nbsp;(10667, 20,  
        '2022-09-12'), <br>&nbsp;&nbsp;(10668, 86, '2022-09-15'), <br>&nbsp;&nbsp;(10669, 73,  
        '2022-09-15'), <br>&nbsp;&nbsp;(10670, 25, '2022-09-16'), <br>&nbsp;&nbsp;(10671, 26,  
        '2022-09-17'), <br>&nbsp;&nbsp;(10672, 5, '2022-09-17'), <br>&nbsp;&nbsp;(10673, 90,  
        '2022-09-18'), <br>&nbsp;&nbsp;(10674, 38, '2022-09-18'), <br>&nbsp;&nbsp;(10675, 25,  
        '2022-09-19'), <br>&nbsp;&nbsp;(10676, 80, '2022-09-22'), <br>&nbsp;&nbsp;(10677, 3,  
        '2022-09-22'), <br>&nbsp;&nbsp;(10678, 71, '2022-09-23'), <br>&nbsp;&nbsp;(10679, 7,  
        '2022-09-23'), <br>&nbsp;&nbsp;(10680, 55, '2022-09-24'), <br>&nbsp;&nbsp;(10681, 32,  
        '2022-09-25'), <br>&nbsp;&nbsp;(10682, 3, '2022-09-25'), <br>&nbsp;&nbsp;(10683, 18,  
        '2022-09-26'), <br>&nbsp;&nbsp;(10684, 56, '2022-09-26'), <br>&nbsp;&nbsp;(10685, 31,  
        '2022-09-29'), <br>&nbsp;&nbsp;(10686, 59, '2022-09-30'), <br>&nbsp;&nbsp;(10687, 37,  
        '2022-09-30'), <br>&nbsp;&nbsp;(10688, 83, '2022-10-01'), <br>&nbsp;&nbsp;(10689, 5,  
        '2022-10-01'), <br>&nbsp;&nbsp;(10690, 34, '2022-10-02'), <br>&nbsp;&nbsp;(10691, 63,  
        '2022-10-03'), <br>&nbsp;&nbsp;(10692, 1, '2022-10-03'), <br>&nbsp;&nbsp;(10693, 89,  
        '2022-10-06'), <br>&nbsp;&nbsp;(10694, 63, '2022-10-06'), <br>&nbsp;&nbsp;(10695, 90,  
        '2022-10-07'), <br>&nbsp;&nbsp;(10696, 89, '2022-10-08'), <br>&nbsp;&nbsp;(10697, 47,  
        '2022-10-08'), <br>&nbsp;&nbsp;(10698, 20, '2022-10-09'), <br>&nbsp;&nbsp;(10699, 52,  
        '2022-10-09'), <br>&nbsp;&nbsp;(10700, 71, '2022-10-10'), <br>&nbsp;&nbsp;(10701, 37,  
        '2022-10-13'), <br>&nbsp;&nbsp;(10702, 1, '2022-10-13'), <br>&nbsp;&nbsp;(10703, 24,  
        '2022-10-14'), <br>&nbsp;&nbsp;(10704, 62, '2022-10-14'), <br>&nbsp;&nbsp;(10705, 35,  
        '2022-10-15'), <br>&nbsp;&nbsp;(10706, 55, '2022-10-16'), <br>&nbsp;&nbsp;(10707, 4,  
        '2022-10-16'), <br>&nbsp;&nbsp;(10708, 77, '2022-10-17'), <br>&nbsp;&nbsp;(10709, 31,  
        '2022-10-17'), <br>&nbsp;&nbsp;(10710, 27, '2022-10-20'), <br>&nbsp;&nbsp;(10711, 71,  
        '2022-10-21'), <br>&nbsp;&nbsp;(10712, 37, '2022-10-21'), <br>&nbsp;&nbsp;(10713, 71,  
        '2022-10-22'), <br>&nbsp;&nbsp;(10714, 71, '2022-10-22'), <br>&nbsp;&nbsp;(10715, 9,  
        '2022-10-23'), <br>&nbsp;&nbsp;(10716, 64, '2022-10-24'), <br>&nbsp;&nbsp;(10717, 25,  
        '2022-10-24'), <br>&nbsp;&nbsp;(10718, 39, '2022-10-27'), <br>&nbsp;&nbsp;(10719, 45,  
        '2022-10-27'), <br>&nbsp;&nbsp;(10720, 61, '2022-10-28'), <br>&nbsp;&nbsp;(10721, 63,  
        '2022-10-29'), <br>&nbsp;&nbsp;(10722, 71, '2022-10-29'), <br>&nbsp;&nbsp;(10723, 89,  
        '2022-10-30'), <br>&nbsp;&nbsp;(10724, 51, '2022-10-30'), <br>&nbsp;&nbsp;(10725, 21,  
        '2022-10-31'), <br>&nbsp;&nbsp;(10726, 19, '2022-11-03'), <br>&nbsp;&nbsp;(10727, 66,  
        '2022-11-03'), <br>&nbsp;&nbsp;(10728, 62, '2022-11-04'), <br>&nbsp;&nbsp;(10729, 47,  
        '2022-11-04'), <br>&nbsp;&nbsp;(10730, 9, '2022-11-05'), <br>&nbsp;&nbsp;(10731, 14,  
        '2022-11-06'), <br>&nbsp;&nbsp;(10732, 9, '2022-11-06'), <br>&nbsp;&nbsp;(10733, 5,  
        '2022-11-07'), <br>&nbsp;&nbsp;(10734, 31, '2022-11-07'), <br>&nbsp;&nbsp;(10735, 45,  
        '2022-11-10'), <br>&nbsp;&nbsp;(10736, 37, '2022-11-11'), <br>&nbsp;&nbsp;(10737, 85,  
        '2022-11-11'), <br>&nbsp;&nbsp;(10738, 74, '2022-11-12'), <br>&nbsp;&nbsp;(10739, 85,  
        '2022-11-12'), <br>&nbsp;&nbsp;(10740, 89, '2022-11-13'), <br>&nbsp;&nbsp;(10741, 4,  
        '2022-11-14'), <br>&nbsp;&nbsp;(10742, 10, '2022-11-14'), <br>&nbsp;&nbsp;(10743, 4,  
        '2022-11-17'), <br>&nbsp;&nbsp;(10744, 83, '2022-11-17'), <br>&nbsp;&nbsp;(10745, 63,  
        '2022-11-18'), <br>&nbsp;&nbsp;(10746, 14, '2022-11-19'), <br>&nbsp;&nbsp;(10747, 59,  
        '2022-11-19'), <br>&nbsp;&nbsp;(10748, 71, '2022-11-20'), <br>&nbsp;&nbsp;(10749, 38,  
        '2022-11-20'), <br>&nbsp;&nbsp;(10750, 87, '2022-11-21'), <br>&nbsp;&nbsp;(10751, 68,  
        '2022-11-24'), <br>&nbsp;&nbsp;(10752, 53, '2022-11-24'), <br>&nbsp;&nbsp;(10753, 27,  
        '2022-11-25'), <br>&nbsp;&nbsp;(10754, 49, '2022-11-25'), <br>&nbsp;&nbsp;(10755, 9,  
        '2022-11-26'), <br>&nbsp;&nbsp;(10756, 75, '2022-11-27'), <br>&nbsp;&nbsp;(10757, 71,  
        '2022-11-27'), <br>&nbsp;&nbsp;(10758, 68, '2022-11-28'), <br>&nbsp;&nbsp;(10759, 2,  
        '2022-11-28'), <br>&nbsp;&nbsp;(10760, 50, '2022-12-01'), <br>&nbsp;&nbsp;(10761, 65,  
        '2022-12-02'), <br>&nbsp;&nbsp;(10762, 24, '2022-12-02'), <br>&nbsp;&nbsp;(10763, 23,  
        '2022-12-03'), <br>&nbsp;&nbsp;(10764, 20, '2022-12-03'), <br>&nbsp;&nbsp;(10765, 63,  
        '2022-12-04'), <br>&nbsp;&nbsp;(10766, 56, '2022-12-05'), <br>&nbsp;&nbsp;(10767, 76,  
        '2022-12-05'), <br>&nbsp;&nbsp;(10768, 4, '2022-12-08'), <br>&nbsp;&nbsp;(10769, 83,  
        '2022-12-08'), <br>&nbsp;&nbsp;(10770, 34, '2022-12-09'), <br>&nbsp;&nbsp;(10771, 20,  
        '2022-12-10'), <br>&nbsp;&nbsp;(10772, 44, '2022-12-10'), <br>&nbsp;&nbsp;(10773, 20,  
        '2022-12-11'), <br>&nbsp;&nbsp;(10774, 24, '2022-12-11'), <br>&nbsp;&nbsp;(10775, 78,  
        '2022-12-12'), <br>&nbsp;&nbsp;(10776, 20, '2022-12-15'), <br>&nbsp;&nbsp;(10777, 31,  
        '2022-12-15'), <br>&nbsp;&nbsp;(10778, 5, '2022-12-16'), <br>&nbsp;&nbsp;(10779, 52,  
        '2022-12-16'), <br>&nbsp;&nbsp;(10780, 46, '2022-12-16'), <br>&nbsp;&nbsp;(10781, 87,  
        '2022-12-17'), <br>&nbsp;&nbsp;(10782, 12, '2022-12-17'), <br>&nbsp;&nbsp;(10783, 34,  
        '2022-12-18'), <br>&nbsp;&nbsp;(10784, 49, '2022-12-18'), <br>&nbsp;&nbsp;(10785, 33,  
        '2022-12-18'), <br>&nbsp;&nbsp;(10786, 62, '2022-12-19'), <br>&nbsp;&nbsp;(10787, 41,  
        '2022-12-19'), <br>&nbsp;&nbsp;(10788, 63, '2022-12-22'), <br>&nbsp;&nbsp;(10789, 23,  
        '2022-12-22'), <br>&nbsp;&nbsp;(10790, 31, '2022-12-22'), <br>&nbsp;&nbsp;(10791, 25,  
        '2022-12-23'), <br>&nbsp;&nbsp;(10792, 91, '2022-12-23'), <br>&nbsp;&nbsp;(10793, 4,  
        '2022-12-24'), <br>&nbsp;&nbsp;(10794, 61, '2022-12-24'), <br>&nbsp;&nbsp;(10795, 20,  
        '2022-12-24'), <br>&nbsp;&nbsp;(10796, 35, '2022-12-25'), <br>&nbsp;&nbsp;(10797, 17,  
        '2022-12-25'), <br>&nbsp;&nbsp;(10798, 38, '2022-12-26'), <br>&nbsp;&nbsp;(10799, 39,  
        '2022-12-26'), <br>&nbsp;&nbsp;(10800, 72, '2022-12-26'), <br>&nbsp;&nbsp;(10801, 8,  
        '2022-12-29'), <br>&nbsp;&nbsp;(10802, 73, '2022-12-29'), <br>&nbsp;&nbsp;(10803, 88,  
        '2022-12-30'), <br>&nbsp;&nbsp;(10804, 72, '2022-12-30'), <br>&nbsp;&nbsp;(10805, 77,  
        '2022-12-30'), <br>&nbsp;&nbsp;(10806, 84, '2022-12-31'), <br>&nbsp;&nbsp;(10807, 27,  
        '2022-12-31'), <br>&nbsp;&nbsp;(10808, 60, '2023-01-01'), <br>&nbsp;&nbsp;(10809, 88,  
        '2023-01-01'), <br>&nbsp;&nbsp;(10810, 42, '2023-01-01'), <br>&nbsp;&nbsp;(10811, 47,  
        '2023-01-02'), <br>&nbsp;&nbsp;(10812, 66, '2023-01-02'), <br>&nbsp;&nbsp;(10813, 67,  
        '2023-01-05'), <br>&nbsp;&nbsp;(10814, 84, '2023-01-05'), <br>&nbsp;&nbsp;(10815, 71,  
        '2023-01-05'), <br>&nbsp;&nbsp;(10816, 32, '2023-01-06'), <br>&nbsp;&nbsp;(10817, 39,  
        '2023-01-06'), <br>&nbsp;&nbsp;(10818, 49, '2023-01-07'), <br>&nbsp;&nbsp;(10819, 12,  
        '2023-01-07'), <br>&nbsp;&nbsp;(10820, 65, '2023-01-07'), <br>&nbsp;&nbsp;(10821, 75,  
        '2023-01-08'), <br>&nbsp;&nbsp;(10822, 82, '2023-01-08'), <br>&nbsp;&nbsp;(10823, 46,  
        '2023-01-09'), <br>&nbsp;&nbsp;(10824, 24, '2023-01-09'), <br>&nbsp;&nbsp;(10825, 17,  
        '2023-01-09'), <br>&nbsp;&nbsp;(10826, 7, '2023-01-12'), <br>&nbsp;&nbsp;(10827, 9,  
        '2023-01-12'), <br>&nbsp;&nbsp;(10828, 64, '2023-01-13'), <br>&nbsp;&nbsp;(10829, 38,  
        '2023-01-13'), <br>&nbsp;&nbsp;(10830, 81, '2023-01-13'), <br>&nbsp;&nbsp;(10831, 70,  
        '2023-01-14'), <br>&nbsp;&nbsp;(10832, 41, '2023-01-14'), <br>&nbsp;&nbsp;(10833, 56,  
        '2023-01-15'), <br>&nbsp;&nbsp;(10834, 81, '2023-01-15'), <br>&nbsp;&nbsp;(10835, 1,  
        '2023-01-15'), <br>&nbsp;&nbsp;(10836, 20, '2023-01-16'), <br>&nbsp;&nbsp;(10837, 5,  
        '2023-01-16'), <br>&nbsp;&nbsp;(10838, 47, '2023-01-19'), <br>&nbsp;&nbsp;(10839, 81,  
        '2023-01-19'), <br>&nbsp;&nbsp;(10840, 47, '2023-01-19'), <br>&nbsp;&nbsp;(10841, 76,  
        '2023-01-20'), <br>&nbsp;&nbsp;(10842, 80, '2023-01-20'), <br>&nbsp;&nbsp;(10843, 84,  
        '2023-01-21'), <br>&nbsp;&nbsp;(10844, 59, '2023-01-21'), <br>&nbsp;&nbsp;(10845, 63,  
        '2023-01-21'), <br>&nbsp;&nbsp;(10846, 76, '2023-01-22'), <br>&nbsp;&nbsp;(10847, 71,  
        '2023-01-22'), <br>&nbsp;&nbsp;(10848, 16, '2023-01-23'), <br>&nbsp;&nbsp;(10849, 39,  
        '2023-01-23'), <br>&nbsp;&nbsp;(10850, 84, '2023-01-23'), <br>&nbsp;&nbsp;(10851, 67,  
        '2023-01-26'), <br>&nbsp;&nbsp;(10852, 65, '2023-01-26'), <br>&nbsp;&nbsp;(10853, 6,  
        '2023-01-27'), <br>&nbsp;&nbsp;(10854, 20, '2023-01-27'), <br>&nbsp;&nbsp;(10855, 55,  
        '2023-01-27'), <br>&nbsp;&nbsp;(10856, 3, '2023-01-28'), <br>&nbsp;&nbsp;(10857, 5,  
        '2023-01-28'), <br>&nbsp;&nbsp;(10858, 40, '2023-01-29'), <br>&nbsp;&nbsp;(10859, 25,  
        '2023-01-29'), <br>&nbsp;&nbsp;(10860, 26, '2023-01-29'), <br>&nbsp;&nbsp;(10861, 89,  
        '2023-01-30'), <br>&nbsp;&nbsp;(10862, 44, '2023-01-30'), <br>&nbsp;&nbsp;(10863, 35,  
        '2023-02-02'), <br>&nbsp;&nbsp;(10864, 4, '2023-02-02'), <br>&nbsp;&nbsp;(10865, 63,  
        '2023-02-02'), <br>&nbsp;&nbsp;(10866, 5, '2023-02-03'), <br>&nbsp;&nbsp;(10867, 48,  
        '2023-02-03'), <br>&nbsp;&nbsp;(10868, 62, '2023-02-04'), <br>&nbsp;&nbsp;(10869, 72,  
        '2023-02-04'), <br>&nbsp;&nbsp;(10870, 91, '2023-02-04'), <br>&nbsp;&nbsp;(10871, 9,  
        '2023-02-05'), <br>&nbsp;&nbsp;(10872, 30, '2023-02-05'), <br>&nbsp;&nbsp;(10873, 90,  
        '2023-02-06'), <br>&nbsp;&nbsp;(10874, 30, '2023-02-06'), <br>&nbsp;&nbsp;(10875, 5,  
        '2023-02-06'), <br>&nbsp;&nbsp;(10876, 9, '2023-02-09'), <br>&nbsp;&nbsp;(10877, 67,  
        '2023-02-09'), <br>&nbsp;&nbsp;(10878, 63, '2023-02-10'), <br>&nbsp;&nbsp;(10879, 90,  
        '2023-02-10'), <br>&nbsp;&nbsp;(10880, 24, '2023-02-10'), <br>&nbsp;&nbsp;(10881, 12,  
        '2023-02-11'), <br>&nbsp;&nbsp;(10882, 71, '2023-02-11'), <br>&nbsp;&nbsp;(10883, 48,  
        '2023-02-12'), <br>&nbsp;&nbsp;(10884, 45, '2023-02-12'), <br>&nbsp;&nbsp;(10885, 76,  
        '2023-02-12'), <br>&nbsp;&nbsp;(10886, 34, '2023-02-13'), <br>&nbsp;&nbsp;(10887, 29,  
        '2023-02-13'), <br>&nbsp;&nbsp;(10888, 30, '2023-02-16'), <br>&nbsp;&nbsp;(10889, 65,  
        '2023-02-16'), <br>&nbsp;&nbsp;(10890, 18, '2023-02-16'), <br>&nbsp;&nbsp;(10891, 44,  
        '2023-02-17'), <br>&nbsp;&nbsp;(10892, 50, '2023-02-17'), <br>&nbsp;&nbsp;(10893, 39,  
        '2023-02-18'), <br>&nbsp;&nbsp;(10894, 71, '2023-02-18'), <br>&nbsp;&nbsp;(10895, 20,  
        '2023-02-18'), <br>&nbsp;&nbsp;(10896, 50, '2023-02-19'), <br>&nbsp;&nbsp;(10897, 37,  
        '2023-02-19'), <br>&nbsp;&nbsp;(10898, 54, '2023-02-20'), <br>&nbsp;&nbsp;(10899, 46,  
        '2023-02-20'), <br>&nbsp;&nbsp;(10900, 88, '2023-02-20'), <br>&nbsp;&nbsp;(10901, 35,  
        '2023-02-23'), <br>&nbsp;&nbsp;(10902, 24, '2023-02-23'), <br>&nbsp;&nbsp;(10903, 34,  
        '2023-02-24'), <br>&nbsp;&nbsp;(10904, 89, '2023-02-24'), <br>&nbsp;&nbsp;(10905, 88,  
        '2023-02-24'), <br>&nbsp;&nbsp;(10906, 91, '2023-02-25'), <br>&nbsp;&nbsp;(10907, 74,  
        '2023-02-25'), <br>&nbsp;&nbsp;(10908, 66, '2023-02-26'), <br>&nbsp;&nbsp;(10909, 70,  
        '2023-02-26'), <br>&nbsp;&nbsp;(10910, 90, '2023-02-26'), <br>&nbsp;&nbsp;(10911, 30,  
        '2023-02-26'), <br>&nbsp;&nbsp;(10912, 37, '2023-02-26'), <br>&nbsp;&nbsp;(10913, 62,  
        '2023-02-26'), <br>&nbsp;&nbsp;(10914, 62, '2023-02-27'), <br>&nbsp;&nbsp;(10915, 80,  
        '2023-02-27'), <br>&nbsp;&nbsp;(10916, 64, '2023-02-27'), <br>&nbsp;&nbsp;(10917, 69,  
        '2023-03-02'), <br>&nbsp;&nbsp;(10918, 10, '2023-03-02'), <br>&nbsp;&nbsp;(10919, 47,  
        '2023-03-02'), <br>&nbsp;&nbsp;(10920, 4, '2023-03-03'), <br>&nbsp;&nbsp;(10921, 83,  
        '2023-03-03'), <br>&nbsp;&nbsp;(10922, 34, '2023-03-03'), <br>&nbsp;&nbsp;(10923, 41,  
        '2023-03-03'), <br>&nbsp;&nbsp;(10924, 5, '2023-03-04'), <br>&nbsp;&nbsp;(10925, 34,  
        '2023-03-04'), <br>&nbsp;&nbsp;(10926, 2, '2023-03-04'), <br>&nbsp;&nbsp;(10927, 40,  
        '2023-03-05'), <br>&nbsp;&nbsp;(10928, 29, '2023-03-05'), <br>&nbsp;&nbsp;(10929, 25,  
        '2023-03-05'), <br>&nbsp;&nbsp;(10930, 76, '2023-03-06'), <br>&nbsp;&nbsp;(10931, 68,  
        '2023-03-06'), <br>&nbsp;&nbsp;(10932, 9, '2023-03-06'), <br>&nbsp;&nbsp;(10933, 38,  
        '2023-03-06'), <br>&nbsp;&nbsp;(10934, 44, '2023-03-09'), <br>&nbsp;&nbsp;(10935, 88,  
        '2023-03-09'), <br>&nbsp;&nbsp;(10936, 32, '2023-03-09'), <br>&nbsp;&nbsp;(10937, 12,  
        '2023-03-10'), <br>&nbsp;&nbsp;(10938, 63, '2023-03-10'), <br>&nbsp;&nbsp;(10939, 49,  
        '2023-03-10'), <br>&nbsp;&nbsp;(10940, 9, '2023-03-11'), <br>&nbsp;&nbsp;(10941, 71,  
        '2023-03-11'), <br>&nbsp;&nbsp;(10942, 66, '2023-03-11'), <br>&nbsp;&nbsp;(10943, 11,  
        '2023-03-11'), <br>&nbsp;&nbsp;(10944, 10, '2023-03-12'), <br>&nbsp;&nbsp;(10945, 52,  
        '2023-03-12'), <br>&nbsp;&nbsp;(10946, 83, '2023-03-12'), <br>&nbsp;&nbsp;(10947, 11,  
        '2023-03-13'), <br>&nbsp;&nbsp;(10948, 30, '2023-03-13'), <br>&nbsp;&nbsp;(10949, 10,  
        '2023-03-13'), <br>&nbsp;&nbsp;(10950, 49, '2023-03-16'), <br>&nbsp;&nbsp;(10951, 68,  
        '2023-03-16'), <br>&nbsp;&nbsp;(10952, 1, '2023-03-16'), <br>&nbsp;&nbsp;(10953, 4,  
        '2023-03-16'), <br>&nbsp;&nbsp;(10954, 47, '2023-03-17'), <br>&nbsp;&nbsp;(10955, 24,  
        '2023-03-17'), <br>&nbsp;&nbsp;(10956, 6, '2023-03-17'), <br>&nbsp;&nbsp;(10957, 35,  
        '2023-03-18'), <br>&nbsp;&nbsp;(10958, 54, '2023-03-18'), <br>&nbsp;&nbsp;(10959, 31,  
        '2023-03-18'), <br>&nbsp;&nbsp;(10960, 35, '2023-03-19'), <br>&nbsp;&nbsp;(10961, 62,  
        '2023-03-19'), <br>&nbsp;&nbsp;(10962, 63, '2023-03-19'), <br>&nbsp;&nbsp;(10963, 28,  
        '2023-03-19'), <br>&nbsp;&nbsp;(10964, 74, '2023-03-20'), <br>&nbsp;&nbsp;(10965, 55,  
        '2023-03-20'), <br>&nbsp;&nbsp;(10966, 14, '2023-03-20'), <br>&nbsp;&nbsp;(10967, 79,  
        '2023-03-23'), <br>&nbsp;&nbsp;(10968, 20, '2023-03-23'), <br>&nbsp;&nbsp;(10969, 15,  
        '2023-03-23'), <br>&nbsp;&nbsp;(10970, 8, '2023-03-24'), <br>&nbsp;&nbsp;(10971, 26,  
        '2023-03-24'), <br>&nbsp;&nbsp;(10972, 40, '2023-03-24'), <br>&nbsp;&nbsp;(10973, 40,  
        '2023-03-24'), <br>&nbsp;&nbsp;(10974, 75, '2023-03-25'), <br>&nbsp;&nbsp;(10975, 10,  
        '2023-03-25'), <br>&nbsp;&nbsp;(10976, 35, '2023-03-25'), <br>&nbsp;&nbsp;(10977, 24,  
        '2023-03-26'), <br>&nbsp;&nbsp;(10978, 50, '2023-03-26'), <br>&nbsp;&nbsp;(10979, 20,  
        '2023-03-26'), <br>&nbsp;&nbsp;(10980, 24, '2023-03-27'), <br>&nbsp;&nbsp;(10981, 34,  
        '2023-03-27'), <br>&nbsp;&nbsp;(10982, 10, '2023-03-27'), <br>&nbsp;&nbsp;(10983, 71,  
        '2023-03-27'), <br>&nbsp;&nbsp;(10984, 71, '2023-03-30'), <br>&nbsp;&nbsp;(10985, 37,  
        '2023-03-30'), <br>&nbsp;&nbsp;(10986, 54, '2023-03-30'), <br>&nbsp;&nbsp;(10987, 19,  
        '2023-03-31'), <br>&nbsp;&nbsp;(10988, 65, '2023-03-31'), <br>&nbsp;&nbsp;(10989, 61,  
        '2023-03-31'), <br>&nbsp;&nbsp;(10990, 20, '2023-04-01'), <br>&nbsp;&nbsp;(10991, 63,  
        '2023-04-01'), <br>&nbsp;&nbsp;(10992, 77, '2023-04-01'), <br>&nbsp;&nbsp;(10993, 24,  
        '2023-04-01'), <br>&nbsp;&nbsp;(10994, 83, '2023-04-02'), <br>&nbsp;&nbsp;(10995, 58,  
        '2023-04-02'), <br>&nbsp;&nbsp;(10996, 63, '2023-04-02'), <br>&nbsp;&nbsp;(10997, 46,  
        '2023-04-03'), <br>&nbsp;&nbsp;(10998, 91, '2023-04-03'), <br>&nbsp;&nbsp;(10999, 56,  
        '2023-04-03'), <br>&nbsp;&nbsp;(11000, 65, '2023-04-06'), <br>&nbsp;&nbsp;(11001, 24,  
        '2023-04-06'), <br>&nbsp;&nbsp;(11002, 71, '2023-04-06'), <br>&nbsp;&nbsp;(11003, 78,  
        '2023-04-06'), <br>&nbsp;&nbsp;(11004, 50, '2023-04-07'), <br>&nbsp;&nbsp;(11005, 90,  
        '2023-04-07'), <br>&nbsp;&nbsp;(11006, 32, '2023-04-07'), <br>&nbsp;&nbsp;(11007, 60,  
        '2023-04-08'), <br>&nbsp;&nbsp;(11008, 20, '2023-04-08'), <br>&nbsp;&nbsp;(11009, 30,  
        '2023-04-08'), <br>&nbsp;&nbsp;(11010, 66, '2023-04-09'), <br>&nbsp;&nbsp;(11011, 1,  
        '2023-04-09'), <br>&nbsp;&nbsp;(11012, 25, '2023-04-09'), <br>&nbsp;&nbsp;(11013, 69,  
        '2023-04-09'), <br>&nbsp;&nbsp;(11014, 47, '2023-04-10'), <br>&nbsp;&nbsp;(11015, 70,  
        '2023-04-10'), <br>&nbsp;&nbsp;(11016, 4, '2023-04-10'), <br>&nbsp;&nbsp;(11017, 20,  
        '2023-04-13'), <br>&nbsp;&nbsp;(11018, 48, '2023-04-13'), <br>&nbsp;&nbsp;(11019, 64,  
        '2023-04-13'), <br>&nbsp;&nbsp;(11020, 56, '2023-04-14'), <br>&nbsp;&nbsp;(11021, 63,  
        '2023-04-14'), <br>&nbsp;&nbsp;(11022, 34, '2023-04-14'), <br>&nbsp;&nbsp;(11023, 11,  
        '2023-04-14'), <br>&nbsp;&nbsp;(11024, 19, '2023-04-15'), <br>&nbsp;&nbsp;(11025, 87,  
        '2023-04-15'), <br>&nbsp;&nbsp;(11026, 27, '2023-04-15'), <br>&nbsp;&nbsp;(11027, 10,  
        '2023-04-16'), <br>&nbsp;&nbsp;(11028, 39, '2023-04-16'), <br>&nbsp;&nbsp;(11029, 14,  
        '2023-04-16'), <br>&nbsp;&nbsp;(11030, 71, '2023-04-17'), <br>&nbsp;&nbsp;(11031, 71,  
        '2023-04-17'), <br>&nbsp;&nbsp;(11032, 89, '2023-04-17'), <br>&nbsp;&nbsp;(11033, 68,  
        '2023-04-17'), <br>&nbsp;&nbsp;(11034, 55, '2023-04-20'), <br>&nbsp;&nbsp;(11035, 76,  
        '2023-04-20'), <br>&nbsp;&nbsp;(11036, 17, '2023-04-20'), <br>&nbsp;&nbsp;(11037, 30,  
        '2023-04-21'), <br>&nbsp;&nbsp;(11038, 76, '2023-04-21'), <br>&nbsp;&nbsp;(11039, 47,  
        '2023-04-21'), <br>&nbsp;&nbsp;(11040, 32, '2023-04-22'), <br>&nbsp;&nbsp;(11041, 14,  
        '2023-04-22'), <br>&nbsp;&nbsp;(11042, 15, '2023-04-22'), <br>&nbsp;&nbsp;(11043, 74,  
        '2023-04-22'), <br>&nbsp;&nbsp;(11044, 91, '2023-04-23'), <br>&nbsp;&nbsp;(11045, 10,  
        '2023-04-23'), <br>&nbsp;&nbsp;(11046, 86, '2023-04-23'), <br>&nbsp;&nbsp;(11047, 19,  
        '2023-04-24'), <br>&nbsp;&nbsp;(11048, 10, '2023-04-24'), <br>&nbsp;&nbsp;(11049, 31,  
        '2023-04-24'), <br>&nbsp;&nbsp;(11050, 24, '2023-04-27'), <br>&nbsp;&nbsp;(11051, 41,  
        '2023-04-27'), <br>&nbsp;&nbsp;(11052, 34, '2023-04-27'), <br>&nbsp;&nbsp;(11053, 59,  
        '2023-04-27'), <br>&nbsp;&nbsp;(11054, 12, '2023-04-28'), <br>&nbsp;&nbsp;(11055, 35,  
        '2023-04-28'), <br>&nbsp;&nbsp;(11056, 19, '2023-04-28'), <br>&nbsp;&nbsp;(11057, 53,  
        '2023-04-29'), <br>&nbsp;&nbsp;(11058, 6, '2023-04-29'), <br>&nbsp;&nbsp;(11059, 67,  
        '2023-04-29'), <br>&nbsp;&nbsp;(11060, 27, '2023-04-30'), <br>&nbsp;&nbsp;(11061, 32,  
        '2023-04-30'), <br>&nbsp;&nbsp;(11062, 66, '2023-04-30'), <br>&nbsp;&nbsp;(11063, 37,  
        '2023-04-30'), <br>&nbsp;&nbsp;(11064, 71, '2023-05-01'), <br>&nbsp;&nbsp;(11065, 46,  
        '2023-05-01'), <br>&nbsp;&nbsp;(11066, 89, '2023-05-01'), <br>&nbsp;&nbsp;(11067, 17,  
        '2023-05-04'), <br>&nbsp;&nbsp;(11068, 62, '2023-05-04'), <br>&nbsp;&nbsp;(11069, 80,  
        '2023-05-04'), <br>&nbsp;&nbsp;(11070, 44, '2023-05-05'), <br>&nbsp;&nbsp;(11071, 46,  
        '2023-05-05'), <br>&nbsp;&nbsp;(11072, 20, '2023-05-05'), <br>&nbsp;&nbsp;(11073, 58,  
        '2023-05-05'), <br>&nbsp;&nbsp;(11074, 73, '2023-05-06'), <br>&nbsp;&nbsp;(11075, 68,  
        '2023-05-06'), <br>&nbsp;&nbsp;(11076, 9, '2023-05-06'), <br>&nbsp;&nbsp;(11077, 65,  
        '2023-05-06');<br>
  </div>
</div>


<div class="w3-example">
<h3>Result</h3>
  <div class="w3-code notranslate w3-black">
    INSERT 0 830
  </div>
</div>

<p>The result can also be seen here:
<a href="trypostgresql.php?filename=demo_orders&resultonly=true" target="_blank">
Demo Database - orders</a>
</p>

<hr>
<h2>ORDER_DETAILS</h2>

<p>The following SQL statement will create a table named 
<code class="w3-codespan">order_details</code>:</p>

<div class="w3-example">
<h3>CREATE TABLE order_details</h3>
  <div class="w3-code notranslate w3-black shellcommands">
        CREATE TABLE order_details (<br>&nbsp; order_detail_id SERIAL NOT NULL 
        PRIMARY KEY,<br>&nbsp; order_id INT,<br>&nbsp; product_id INT,<br>&nbsp; 
        quantity INT<br>);
  </div>
</div>


<div class="w3-example">
<h3>Result</h3>
  <div class="w3-code notranslate w3-black">
    CREATE TABLE
  </div>
</div>

<p>The following SQL statement will fill the 
<code class="w3-codespan">order_details</code> table with content:</p>

<div class="w3-example">
<h3>INSERT INTO order_details</h3>
  <div class="w3-code notranslate w3-black shellcommands" style="height:220px;overflow:auto;">
        INSERT INTO order_details (order_id, product_id, quantity)<br>VALUES<br>&nbsp; 
        (10248, 11, 12),<br>&nbsp;&nbsp;(10248, 42, 10),<br>&nbsp;&nbsp;(10248, 72, 5),<br>&nbsp;&nbsp;(10249, 14, 
        9),<br>&nbsp;&nbsp;(10249, 51, 40),<br>&nbsp;&nbsp;(10250, 41, 10),<br>&nbsp;&nbsp;(10250, 51, 35),<br>&nbsp;
        (10250, 65, 15),<br>&nbsp;&nbsp;(10251, 22, 6),<br>&nbsp;&nbsp;(10251, 57, 15),<br>&nbsp;&nbsp;(10251, 65, 
        20),<br>&nbsp;&nbsp;(10252, 20, 40),<br>&nbsp;&nbsp;(10252, 33, 25),<br>&nbsp;&nbsp;(10252, 60, 40),<br>&nbsp;
        (10253, 31, 20),<br>&nbsp;&nbsp;(10253, 39, 42),<br>&nbsp;&nbsp;(10253, 49, 40),<br>&nbsp;&nbsp;(10254, 24, 
        15),<br>&nbsp;&nbsp;(10254, 55, 21),<br>&nbsp;&nbsp;(10254, 74, 21),<br>&nbsp; (10255, 2, 20),<br>&nbsp; 
        (10255, 16, 35),<br>&nbsp; (10255, 36, 25),<br>&nbsp; (10255, 59, 30),<br>&nbsp; (10256, 53, 
        15),<br>&nbsp; (10256, 77, 12),<br>&nbsp; (10257, 27, 25),<br>&nbsp; (10257, 39, 6),<br>&nbsp; 
        (10257, 77, 15),<br>&nbsp; (10258, 2, 50),<br>&nbsp; (10258, 5, 65),<br>&nbsp; (10258, 32, 
        6),<br>&nbsp; (10259, 21, 10),<br>&nbsp; (10259, 37, 1),<br>&nbsp; (10260, 41, 16),<br>&nbsp; 
        (10260, 57, 50),<br>&nbsp; (10260, 62, 15),<br>&nbsp; (10260, 70, 21),<br>&nbsp; (10261, 21, 
        20),<br>&nbsp; (10261, 35, 20),<br>&nbsp; (10262, 5, 12),<br>&nbsp; (10262, 7, 15),<br>&nbsp; 
        (10262, 56, 2),<br>&nbsp; (10263, 16, 60),<br>&nbsp; (10263, 24, 28),<br>&nbsp; (10263, 30, 
        60),<br>&nbsp; (10263, 74, 36),<br>&nbsp; (10264, 2, 35),<br>&nbsp; (10264, 41, 25),<br>&nbsp; 
        (10265, 17, 30),<br>&nbsp; (10265, 70, 20),<br>&nbsp; (10266, 12, 12),<br>&nbsp; (10267, 40, 
        50),<br>&nbsp; (10267, 59, 70),<br>&nbsp; (10267, 76, 15),<br>&nbsp; (10268, 29, 10),<br>&nbsp; 
        (10268, 72, 4),<br>&nbsp; (10269, 33, 60),<br>&nbsp; (10269, 72, 20),<br>&nbsp; (10270, 36, 
        30),<br>&nbsp; (10270, 43, 25),<br>&nbsp; (10271, 33, 24),<br>&nbsp; (10272, 20, 6),<br>&nbsp; 
        (10272, 31, 40),<br>&nbsp; (10272, 72, 24),<br>&nbsp; (10273, 10, 24),<br>&nbsp; (10273, 31, 
        15),<br>&nbsp; (10273, 33, 20),<br>&nbsp; (10273, 40, 60),<br>&nbsp; (10273, 76, 33),<br>&nbsp; 
        (10274, 71, 20),<br>&nbsp; (10274, 72, 7),<br>&nbsp; (10275, 24, 12),<br>&nbsp; (10275, 59, 
        6),<br>&nbsp; (10276, 10, 15),<br>&nbsp; (10276, 13, 10),<br>&nbsp; (10277, 28, 20),<br>&nbsp; 
        (10277, 62, 12),<br>&nbsp; (10278, 44, 16),<br>&nbsp; (10278, 59, 15),<br>&nbsp; (10278, 63, 
        8),<br>&nbsp; (10278, 73, 25),<br>&nbsp; (10279, 17, 15),<br>&nbsp; (10280, 24, 12),<br>&nbsp; 
        (10280, 55, 20),<br>&nbsp; (10280, 75, 30),<br>&nbsp; (10281, 19, 1),<br>&nbsp; (10281, 24, 
        6),<br>&nbsp; (10281, 35, 4),<br>&nbsp; (10282, 30, 6),<br>&nbsp; (10282, 57, 2),<br>&nbsp; (10283, 
        15, 20),<br>&nbsp; (10283, 19, 18),<br>&nbsp; (10283, 60, 35),<br>&nbsp; (10283, 72, 3),<br>&nbsp; 
        (10284, 27, 15),<br>&nbsp; (10284, 44, 21),<br>&nbsp; (10284, 60, 20),<br>&nbsp; (10284, 67, 
        5),<br>&nbsp; (10285, 1, 45),<br>&nbsp; (10285, 40, 40),<br>&nbsp; (10285, 53, 36),<br>&nbsp; 
        (10286, 35, 100),<br>&nbsp; (10286, 62, 40),<br>&nbsp; (10287, 16, 40),<br>&nbsp; (10287, 34, 
        20),<br>&nbsp; (10287, 46, 15),<br>&nbsp; (10288, 54, 10),<br>&nbsp; (10288, 68, 3),<br>&nbsp; 
        (10289, 3, 30),<br>&nbsp; (10289, 64, 9),<br>&nbsp; (10290, 5, 20),<br>&nbsp; (10290, 29, 
        15),<br>&nbsp; (10290, 49, 15),<br>&nbsp; (10290, 77, 10),<br>&nbsp; (10291, 13, 20),<br>&nbsp; 
        (10291, 44, 24),<br>&nbsp; (10291, 51, 2),<br>&nbsp; (10292, 20, 20),<br>&nbsp; (10293, 18, 
        12),<br>&nbsp; (10293, 24, 10),<br>&nbsp; (10293, 63, 5),<br>&nbsp; (10293, 75, 6),<br>&nbsp; 
        (10294, 1, 18),<br>&nbsp; (10294, 17, 15),<br>&nbsp; (10294, 43, 15),<br>&nbsp; (10294, 60, 
        21),<br>&nbsp; (10294, 75, 6),<br>&nbsp; (10295, 56, 4),<br>&nbsp; (10296, 11, 12),<br>&nbsp; 
        (10296, 16, 30),<br>&nbsp; (10296, 69, 15),<br>&nbsp; (10297, 39, 60),<br>&nbsp; (10297, 72, 
        20),<br>&nbsp; (10298, 2, 40),<br>&nbsp; (10298, 36, 40),<br>&nbsp; (10298, 59, 30),<br>&nbsp; 
        (10298, 62, 15),<br>&nbsp; (10299, 19, 15),<br>&nbsp; (10299, 70, 20),<br>&nbsp; (10300, 66, 
        30),<br>&nbsp; (10300, 68, 20),<br>&nbsp; (10301, 40, 10),<br>&nbsp; (10301, 56, 20),<br>&nbsp; 
        (10302, 17, 40),<br>&nbsp; (10302, 28, 28),<br>&nbsp; (10302, 43, 12),<br>&nbsp; (10303, 40, 
        40),<br>&nbsp; (10303, 65, 30),<br>&nbsp; (10303, 68, 15),<br>&nbsp; (10304, 49, 30),<br>&nbsp; 
        (10304, 59, 10),<br>&nbsp; (10304, 71, 2),<br>&nbsp; (10305, 18, 25),<br>&nbsp; (10305, 29, 
        25),<br>&nbsp; (10305, 39, 30),<br>&nbsp; (10306, 30, 10),<br>&nbsp; (10306, 53, 10),<br>&nbsp; 
        (10306, 54, 5),<br>&nbsp; (10307, 62, 10),<br>&nbsp; (10307, 68, 3),<br>&nbsp; (10308, 69, 
        1),<br>&nbsp; (10308, 70, 5),<br>&nbsp; (10309, 4, 20),<br>&nbsp; (10309, 6, 30),<br>&nbsp; (10309, 
        42, 2),<br>&nbsp; (10309, 43, 20),<br>&nbsp; (10309, 71, 3),<br>&nbsp; (10310, 16, 10),<br>&nbsp; 
        (10310, 62, 5),<br>&nbsp; (10311, 42, 6),<br>&nbsp; (10311, 69, 7),<br>&nbsp; (10312, 28, 4),<br>&nbsp; 
        (10312, 43, 24),<br>&nbsp; (10312, 53, 20),<br>&nbsp; (10312, 75, 10),<br>&nbsp; (10313, 36, 
        12),<br>&nbsp; (10314, 32, 40),<br>&nbsp; (10314, 58, 30),<br>&nbsp; (10314, 62, 25),<br>&nbsp; 
        (10315, 34, 14),<br>&nbsp; (10315, 70, 30),<br>&nbsp; (10316, 41, 10),<br>&nbsp; (10316, 62, 
        70),<br>&nbsp; (10317, 1, 20),<br>&nbsp; (10318, 41, 20),<br>&nbsp; (10318, 76, 6),<br>&nbsp; 
        (10319, 17, 8),<br>&nbsp; (10319, 28, 14),<br>&nbsp; (10319, 76, 30),<br>&nbsp; (10320, 71, 
        30),<br>&nbsp; (10321, 35, 10),<br>&nbsp; (10322, 52, 20),<br>&nbsp; (10323, 15, 5),<br>&nbsp; 
        (10323, 25, 4),<br>&nbsp; (10323, 39, 4),<br>&nbsp; (10324, 16, 21),<br>&nbsp; (10324, 35, 
        70),<br>&nbsp; (10324, 46, 30),<br>&nbsp; (10324, 59, 40),<br>&nbsp; (10324, 63, 80),<br>&nbsp; 
        (10325, 6, 6),<br>&nbsp; (10325, 13, 12),<br>&nbsp; (10325, 14, 9),<br>&nbsp; (10325, 31, 4),<br>&nbsp; 
        (10325, 72, 40),<br>&nbsp; (10326, 4, 24),<br>&nbsp; (10326, 57, 16),<br>&nbsp; (10326, 75, 
        50),<br>&nbsp; (10327, 2, 25),<br>&nbsp; (10327, 11, 50),<br>&nbsp; (10327, 30, 35),<br>&nbsp; 
        (10327, 58, 30),<br>&nbsp; (10328, 59, 9),<br>&nbsp; (10328, 65, 40),<br>&nbsp; (10328, 68, 
        10),<br>&nbsp; (10329, 19, 10),<br>&nbsp; (10329, 30, 8),<br>&nbsp; (10329, 38, 20),<br>&nbsp; 
        (10329, 56, 12),<br>&nbsp; (10330, 26, 50),<br>&nbsp; (10330, 72, 25),<br>&nbsp; (10331, 54, 
        15),<br>&nbsp; (10332, 18, 40),<br>&nbsp; (10332, 42, 10),<br>&nbsp; (10332, 47, 16),<br>&nbsp; 
        (10333, 14, 10),<br>&nbsp; (10333, 21, 10),<br>&nbsp; (10333, 71, 40),<br>&nbsp; (10334, 52, 
        8),<br>&nbsp; (10334, 68, 10),<br>&nbsp; (10335, 2, 7),<br>&nbsp; (10335, 31, 25),<br>&nbsp; (10335, 
        32, 6),<br>&nbsp; (10335, 51, 48),<br>&nbsp; (10336, 4, 18),<br>&nbsp; (10337, 23, 40),<br>&nbsp; 
        (10337, 26, 24),<br>&nbsp; (10337, 36, 20),<br>&nbsp; (10337, 37, 28),<br>&nbsp; (10337, 72, 
        25),<br>&nbsp; (10338, 17, 20),<br>&nbsp; (10338, 30, 15),<br>&nbsp; (10339, 4, 10),<br>&nbsp; 
        (10339, 17, 70),<br>&nbsp; (10339, 62, 28),<br>&nbsp; (10340, 18, 20),<br>&nbsp; (10340, 41, 
        12),<br>&nbsp; (10340, 43, 40),<br>&nbsp; (10341, 33, 8),<br>&nbsp; (10341, 59, 9),<br>&nbsp; 
        (10342, 2, 24),<br>&nbsp; (10342, 31, 56),<br>&nbsp; (10342, 36, 40),<br>&nbsp; (10342, 55, 
        40),<br>&nbsp; (10343, 64, 50),<br>&nbsp; (10343, 68, 4),<br>&nbsp; (10343, 76, 15),<br>&nbsp; 
        (10344, 4, 35),<br>&nbsp; (10344, 8, 70),<br>&nbsp; (10345, 8, 70),<br>&nbsp; (10345, 19, 
        80),<br>&nbsp; (10345, 42, 9),<br>&nbsp; (10346, 17, 36),<br>&nbsp; (10346, 56, 20),<br>&nbsp; 
        (10347, 25, 10),<br>&nbsp; (10347, 39, 50),<br>&nbsp; (10347, 40, 4),<br>&nbsp; (10347, 75, 
        6),<br>&nbsp; (10348, 1, 15),<br>&nbsp; (10348, 23, 25),<br>&nbsp; (10349, 54, 24),<br>&nbsp; 
        (10350, 50, 15),<br>&nbsp; (10350, 69, 18),<br>&nbsp; (10351, 38, 20),<br>&nbsp; (10351, 41, 
        13),<br>&nbsp; (10351, 44, 77),<br>&nbsp; (10351, 65, 10),<br>&nbsp; (10352, 24, 10),<br>&nbsp; 
        (10352, 54, 20),<br>&nbsp; (10353, 11, 12),<br>&nbsp; (10353, 38, 50),<br>&nbsp; (10354, 1, 
        12),<br>&nbsp; (10354, 29, 4),<br>&nbsp; (10355, 24, 25),<br>&nbsp; (10355, 57, 25),<br>&nbsp; 
        (10356, 31, 30),<br>&nbsp; (10356, 55, 12),<br>&nbsp; (10356, 69, 20),<br>&nbsp; (10357, 10, 
        30),<br>&nbsp; (10357, 26, 16),<br>&nbsp; (10357, 60, 8),<br>&nbsp; (10358, 24, 10),<br>&nbsp; 
        (10358, 34, 10),<br>&nbsp; (10358, 36, 20),<br>&nbsp; (10359, 16, 56),<br>&nbsp; (10359, 31, 
        70),<br>&nbsp; (10359, 60, 80),<br>&nbsp; (10360, 28, 30),<br>&nbsp; (10360, 29, 35),<br>&nbsp; 
        (10360, 38, 10),<br>&nbsp; (10360, 49, 35),<br>&nbsp; (10360, 54, 28),<br>&nbsp; (10361, 39, 
        54),<br>&nbsp; (10361, 60, 55),<br>&nbsp; (10362, 25, 50),<br>&nbsp; (10362, 51, 20),<br>&nbsp; 
        (10362, 54, 24),<br>&nbsp; (10363, 31, 20),<br>&nbsp; (10363, 75, 12),<br>&nbsp; (10363, 76, 
        12),<br>&nbsp; (10364, 69, 30),<br>&nbsp; (10364, 71, 5),<br>&nbsp; (10365, 11, 24),<br>&nbsp; 
        (10366, 65, 5),<br>&nbsp; (10366, 77, 5),<br>&nbsp; (10367, 34, 36),<br>&nbsp; (10367, 54, 
        18),<br>&nbsp; (10367, 65, 15),<br>&nbsp; (10367, 77, 7),<br>&nbsp; (10368, 21, 5),<br>&nbsp; 
        (10368, 28, 13),<br>&nbsp; (10368, 57, 25),<br>&nbsp; (10368, 64, 35),<br>&nbsp; (10369, 29, 
        20),<br>&nbsp; (10369, 56, 18),<br>&nbsp; (10370, 1, 15),<br>&nbsp; (10370, 64, 30),<br>&nbsp; 
        (10370, 74, 20),<br>&nbsp; (10371, 36, 6),<br>&nbsp; (10372, 20, 12),<br>&nbsp; (10372, 38, 
        40),<br>&nbsp; (10372, 60, 70),<br>&nbsp; (10372, 72, 42),<br>&nbsp; (10373, 58, 80),<br>&nbsp; 
        (10373, 71, 50),<br>&nbsp; (10374, 31, 30),<br>&nbsp; (10374, 58, 15),<br>&nbsp; (10375, 14, 
        15),<br>&nbsp; (10375, 54, 10),<br>&nbsp; (10376, 31, 42),<br>&nbsp; (10377, 28, 20),<br>&nbsp; 
        (10377, 39, 20),<br>&nbsp; (10378, 71, 6),<br>&nbsp; (10379, 41, 8),<br>&nbsp; (10379, 63, 
        16),<br>&nbsp; (10379, 65, 20),<br>&nbsp; (10380, 30, 18),<br>&nbsp; (10380, 53, 20),<br>&nbsp; 
        (10380, 60, 6),<br>&nbsp; (10380, 70, 30),<br>&nbsp; (10381, 74, 14),<br>&nbsp; (10382, 5, 
        32),<br>&nbsp; (10382, 18, 9),<br>&nbsp; (10382, 29, 14),<br>&nbsp; (10382, 33, 60),<br>&nbsp; 
        (10382, 74, 50),<br>&nbsp; (10383, 13, 20),<br>&nbsp; (10383, 50, 15),<br>&nbsp; (10383, 56, 
        20),<br>&nbsp; (10384, 20, 28),<br>&nbsp; (10384, 60, 15),<br>&nbsp; (10385, 7, 10),<br>&nbsp; 
        (10385, 60, 20),<br>&nbsp; (10385, 68, 8),<br>&nbsp; (10386, 24, 15),<br>&nbsp; (10386, 34, 
        10),<br>&nbsp; (10387, 24, 15),<br>&nbsp; (10387, 28, 6),<br>&nbsp; (10387, 59, 12),<br>&nbsp; 
        (10387, 71, 15),<br>&nbsp; (10388, 45, 15),<br>&nbsp; (10388, 52, 20),<br>&nbsp; (10388, 53, 
        40),<br>&nbsp; (10389, 10, 16),<br>&nbsp; (10389, 55, 15),<br>&nbsp; (10389, 62, 20),<br>&nbsp; 
        (10389, 70, 30),<br>&nbsp; (10390, 31, 60),<br>&nbsp; (10390, 35, 40),<br>&nbsp; (10390, 46, 
        45),<br>&nbsp; (10390, 72, 24),<br>&nbsp; (10391, 13, 18),<br>&nbsp; (10392, 69, 50),<br>&nbsp; 
        (10393, 2, 25),<br>&nbsp; (10393, 14, 42),<br>&nbsp; (10393, 25, 7),<br>&nbsp; (10393, 26, 
        70),<br>&nbsp; (10393, 31, 32),<br>&nbsp; (10394, 13, 10),<br>&nbsp; (10394, 62, 10),<br>&nbsp; 
        (10395, 46, 28),<br>&nbsp; (10395, 53, 70),<br>&nbsp; (10395, 69, 8),<br>&nbsp; (10396, 23, 
        40),<br>&nbsp; (10396, 71, 60),<br>&nbsp; (10396, 72, 21),<br>&nbsp; (10397, 21, 10),<br>&nbsp; 
        (10397, 51, 18),<br>&nbsp; (10398, 35, 30),<br>&nbsp; (10398, 55, 120),<br>&nbsp; (10399, 68, 
        60),<br>&nbsp; (10399, 71, 30),<br>&nbsp; (10399, 76, 35),<br>&nbsp; (10399, 77, 14),<br>&nbsp; 
        (10400, 29, 21),<br>&nbsp; (10400, 35, 35),<br>&nbsp; (10400, 49, 30),<br>&nbsp; (10401, 30, 
        18),<br>&nbsp; (10401, 56, 70),<br>&nbsp; (10401, 65, 20),<br>&nbsp; (10401, 71, 60),<br>&nbsp; 
        (10402, 23, 60),<br>&nbsp; (10402, 63, 65),<br>&nbsp; (10403, 16, 21),<br>&nbsp; (10403, 48, 
        70),<br>&nbsp; (10404, 26, 30),<br>&nbsp; (10404, 42, 40),<br>&nbsp; (10404, 49, 30),<br>&nbsp; 
        (10405, 3, 50),<br>&nbsp; (10406, 1, 10),<br>&nbsp; (10406, 21, 30),<br>&nbsp; (10406, 28, 
        42),<br>&nbsp; (10406, 36, 5),<br>&nbsp; (10406, 40, 2),<br>&nbsp; (10407, 11, 30),<br>&nbsp; 
        (10407, 69, 15),<br>&nbsp; (10407, 71, 15),<br>&nbsp; (10408, 37, 10),<br>&nbsp; (10408, 54, 
        6),<br>&nbsp; (10408, 62, 35),<br>&nbsp; (10409, 14, 12),<br>&nbsp; (10409, 21, 12),<br>&nbsp; 
        (10410, 33, 49),<br>&nbsp; (10410, 59, 16),<br>&nbsp; (10411, 41, 25),<br>&nbsp; (10411, 44, 
        40),<br>&nbsp; (10411, 59, 9),<br>&nbsp; (10412, 14, 20),<br>&nbsp; (10413, 1, 24),<br>&nbsp; 
        (10413, 62, 40),<br>&nbsp; (10413, 76, 14),<br>&nbsp; (10414, 19, 18),<br>&nbsp; (10414, 33, 
        50),<br>&nbsp; (10415, 17, 2),<br>&nbsp; (10415, 33, 20),<br>&nbsp; (10416, 19, 20),<br>&nbsp; 
        (10416, 53, 10),<br>&nbsp; (10416, 57, 20),<br>&nbsp; (10417, 38, 50),<br>&nbsp; (10417, 46, 
        2),<br>&nbsp; (10417, 68, 36),<br>&nbsp; (10417, 77, 35),<br>&nbsp; (10418, 2, 60),<br>&nbsp; 
        (10418, 47, 55),<br>&nbsp; (10418, 61, 16),<br>&nbsp; (10418, 74, 15),<br>&nbsp; (10419, 60, 
        60),<br>&nbsp; (10419, 69, 20),<br>&nbsp; (10420, 9, 20),<br>&nbsp; (10420, 13, 2),<br>&nbsp; 
        (10420, 70, 8),<br>&nbsp; (10420, 73, 20),<br>&nbsp; (10421, 19, 4),<br>&nbsp; (10421, 26, 
        30),<br>&nbsp; (10421, 53, 15),<br>&nbsp; (10421, 77, 10),<br>&nbsp; (10422, 26, 2),<br>&nbsp; 
        (10423, 31, 14),<br>&nbsp; (10423, 59, 20),<br>&nbsp; (10424, 35, 60),<br>&nbsp; (10424, 38, 
        49),<br>&nbsp; (10424, 68, 30),<br>&nbsp; (10425, 55, 10),<br>&nbsp; (10425, 76, 20),<br>&nbsp; 
        (10426, 56, 5),<br>&nbsp; (10426, 64, 7),<br>&nbsp; (10427, 14, 35),<br>&nbsp; (10428, 46, 
        20),<br>&nbsp; (10429, 50, 40),<br>&nbsp; (10429, 63, 35),<br>&nbsp; (10430, 17, 45),<br>&nbsp; 
        (10430, 21, 50),<br>&nbsp; (10430, 56, 30),<br>&nbsp; (10430, 59, 70),<br>&nbsp; (10431, 17, 
        50),<br>&nbsp; (10431, 40, 50),<br>&nbsp; (10431, 47, 30),<br>&nbsp; (10432, 26, 10),<br>&nbsp; 
        (10432, 54, 40),<br>&nbsp; (10433, 56, 28),<br>&nbsp; (10434, 11, 6),<br>&nbsp; (10434, 76, 
        18),<br>&nbsp; (10435, 2, 10),<br>&nbsp; (10435, 22, 12),<br>&nbsp; (10435, 72, 10),<br>&nbsp; 
        (10436, 46, 5),<br>&nbsp; (10436, 56, 40),<br>&nbsp; (10436, 64, 30),<br>&nbsp; (10436, 75, 
        24),<br>&nbsp; (10437, 53, 15),<br>&nbsp; (10438, 19, 15),<br>&nbsp; (10438, 34, 20),<br>&nbsp; 
        (10438, 57, 15),<br>&nbsp; (10439, 12, 15),<br>&nbsp; (10439, 16, 16),<br>&nbsp; (10439, 64, 
        6),<br>&nbsp; (10439, 74, 30),<br>&nbsp; (10440, 2, 45),<br>&nbsp; (10440, 16, 49),<br>&nbsp; 
        (10440, 29, 24),<br>&nbsp; (10440, 61, 90),<br>&nbsp; (10441, 27, 50),<br>&nbsp; (10442, 11, 
        30),<br>&nbsp; (10442, 54, 80),<br>&nbsp; (10442, 66, 60),<br>&nbsp; (10443, 11, 6),<br>&nbsp; 
        (10443, 28, 12),<br>&nbsp; (10444, 17, 10),<br>&nbsp; (10444, 26, 15),<br>&nbsp; (10444, 35, 
        8),<br>&nbsp; (10444, 41, 30),<br>&nbsp; (10445, 39, 6),<br>&nbsp; (10445, 54, 15),<br>&nbsp; 
        (10446, 19, 12),<br>&nbsp; (10446, 24, 20),<br>&nbsp; (10446, 31, 3),<br>&nbsp; (10446, 52, 
        15),<br>&nbsp; (10447, 19, 40),<br>&nbsp; (10447, 65, 35),<br>&nbsp; (10447, 71, 2),<br>&nbsp; 
        (10448, 26, 6),<br>&nbsp; (10448, 40, 20),<br>&nbsp; (10449, 10, 14),<br>&nbsp; (10449, 52, 
        20),<br>&nbsp; (10449, 62, 35),<br>&nbsp; (10450, 10, 20),<br>&nbsp; (10450, 54, 6),<br>&nbsp; 
        (10451, 55, 120),<br>&nbsp; (10451, 64, 35),<br>&nbsp; (10451, 65, 28),<br>&nbsp; (10451, 77, 
        55),<br>&nbsp; (10452, 28, 15),<br>&nbsp; (10452, 44, 100),<br>&nbsp; (10453, 48, 15),<br>&nbsp; 
        (10453, 70, 25),<br>&nbsp; (10454, 16, 20),<br>&nbsp; (10454, 33, 20),<br>&nbsp; (10454, 46, 
        10),<br>&nbsp; (10455, 39, 20),<br>&nbsp; (10455, 53, 50),<br>&nbsp; (10455, 61, 25),<br>&nbsp; 
        (10455, 71, 30),<br>&nbsp; (10456, 21, 40),<br>&nbsp; (10456, 49, 21),
        
        
        
        
        
<br>&nbsp; (10457, 59, 
        36),<br>&nbsp; (10458, 26, 30),<br>&nbsp; (10458, 28, 30),<br>&nbsp; (10458, 43, 20),<br>&nbsp; 
        (10458, 56, 15),<br>&nbsp; (10458, 71, 50),<br>&nbsp; (10459, 7, 16),<br>&nbsp; (10459, 46, 
        20),<br>&nbsp; (10459, 72, 40),<br>&nbsp; (10460, 68, 21),<br>&nbsp; (10460, 75, 4),<br>&nbsp; 
        (10461, 21, 40),<br>&nbsp; (10461, 30, 28),<br>&nbsp; (10461, 55, 60),<br>&nbsp; (10462, 13, 
        1),<br>&nbsp; (10462, 23, 21),<br>&nbsp; (10463, 19, 21),<br>&nbsp; (10463, 42, 50),<br>&nbsp; 
        (10464, 4, 16),<br>&nbsp; (10464, 43, 3),<br>&nbsp; (10464, 56, 30),<br>&nbsp; (10464, 60, 
        20),<br>&nbsp; (10465, 24, 25),<br>&nbsp; (10465, 29, 18),<br>&nbsp; (10465, 40, 20),<br>&nbsp; 
        (10465, 45, 30),<br>&nbsp; (10465, 50, 25),<br>&nbsp; (10466, 11, 10),<br>&nbsp; (10466, 46, 
        5),<br>&nbsp; (10467, 24, 28),<br>&nbsp; (10467, 25, 12),<br>&nbsp; (10468, 30, 8),<br>&nbsp; 
        (10468, 43, 15),<br>&nbsp; (10469, 2, 40),<br>&nbsp; (10469, 16, 35),<br>&nbsp; (10469, 44, 
        2),<br>&nbsp; (10470, 18, 30),<br>&nbsp; (10470, 23, 15),<br>&nbsp; (10470, 64, 8),<br>&nbsp; 
        (10471, 7, 30),<br>&nbsp; (10471, 56, 20),<br>&nbsp; (10472, 24, 80),<br>&nbsp; (10472, 51, 
        18),<br>&nbsp; (10473, 33, 12),<br>&nbsp; (10473, 71, 12),<br>&nbsp; (10474, 14, 12),<br>&nbsp; 
        (10474, 28, 18),<br>&nbsp; (10474, 40, 21),<br>&nbsp; (10474, 75, 10),<br>&nbsp; (10475, 31, 
        35),<br>&nbsp; (10475, 66, 60),<br>&nbsp; (10475, 76, 42),<br>&nbsp; (10476, 55, 2),<br>&nbsp; 
        (10476, 70, 12),<br>&nbsp; (10477, 1, 15),<br>&nbsp; (10477, 21, 21),<br>&nbsp; (10477, 39, 
        20),<br>&nbsp; (10478, 10, 20),<br>&nbsp; (10479, 38, 30),<br>&nbsp; (10479, 53, 28),<br>&nbsp; 
        (10479, 59, 60),<br>&nbsp; (10479, 64, 30),<br>&nbsp; (10480, 47, 30),<br>&nbsp; (10480, 59, 
        12),<br>&nbsp; (10481, 49, 24),<br>&nbsp; (10481, 60, 40),<br>&nbsp; (10482, 40, 10),<br>&nbsp; 
        (10483, 34, 35),<br>&nbsp; (10483, 77, 30),<br>&nbsp; (10484, 21, 14),<br>&nbsp; (10484, 40, 
        10),<br>&nbsp; (10484, 51, 3),<br>&nbsp; (10485, 2, 20),<br>&nbsp; (10485, 3, 20),<br>&nbsp; (10485, 
        55, 30),<br>&nbsp; (10485, 70, 60),<br>&nbsp; (10486, 11, 5),<br>&nbsp; (10486, 51, 25),<br>&nbsp; 
        (10486, 74, 16),<br>&nbsp; (10487, 19, 5),<br>&nbsp; (10487, 26, 30),<br>&nbsp; (10487, 54, 
        24),<br>&nbsp; (10488, 59, 30),<br>&nbsp; (10488, 73, 20),<br>&nbsp; (10489, 11, 15),<br>&nbsp; 
        (10489, 16, 18),<br>&nbsp; (10490, 59, 60),<br>&nbsp; (10490, 68, 30),<br>&nbsp; (10490, 75, 
        36),<br>&nbsp; (10491, 44, 15),<br>&nbsp; (10491, 77, 7),<br>&nbsp; (10492, 25, 60),<br>&nbsp; 
        (10492, 42, 20),<br>&nbsp; (10493, 65, 15),<br>&nbsp; (10493, 66, 10),<br>&nbsp; (10493, 69, 
        10),<br>&nbsp; (10494, 56, 30),<br>&nbsp; (10495, 23, 10),<br>&nbsp; (10495, 41, 20),<br>&nbsp; 
        (10495, 77, 5),<br>&nbsp; (10496, 31, 20),<br>&nbsp; (10497, 56, 14),<br>&nbsp; (10497, 72, 
        25),<br>&nbsp; (10497, 77, 25),<br>&nbsp; (10498, 24, 14),<br>&nbsp; (10498, 40, 5),<br>&nbsp; 
        (10498, 42, 30),<br>&nbsp; (10499, 28, 20),<br>&nbsp; (10499, 49, 25),<br>&nbsp; (10500, 15, 
        12),<br>&nbsp; (10500, 28, 8),<br>&nbsp; (10501, 54, 20),<br>&nbsp; (10502, 45, 21),<br>&nbsp; 
        (10502, 53, 6),<br>&nbsp; (10502, 67, 30),<br>&nbsp; (10503, 14, 70),<br>&nbsp; (10503, 65, 
        20),<br>&nbsp; (10504, 2, 12),<br>&nbsp; (10504, 21, 12),<br>&nbsp; (10504, 53, 10),<br>&nbsp; 
        (10504, 61, 25),<br>&nbsp; (10505, 62, 3),<br>&nbsp; (10506, 25, 18),<br>&nbsp; (10506, 70, 
        14),<br>&nbsp; (10507, 43, 15),<br>&nbsp; (10507, 48, 15),<br>&nbsp; (10508, 13, 10),<br>&nbsp; 
        (10508, 39, 10),<br>&nbsp; (10509, 28, 3),<br>&nbsp; (10510, 29, 36),<br>&nbsp; (10510, 75, 
        36),<br>&nbsp; (10511, 4, 50),<br>&nbsp; (10511, 7, 50),<br>&nbsp; (10511, 8, 10),<br>&nbsp; (10512, 
        24, 10),<br>&nbsp; (10512, 46, 9),<br>&nbsp; (10512, 47, 6),<br>&nbsp; (10512, 60, 12),<br>&nbsp; 
        (10513, 21, 40),<br>&nbsp; (10513, 32, 50),<br>&nbsp; (10513, 61, 15),<br>&nbsp; (10514, 20, 
        39),<br>&nbsp; (10514, 28, 35),<br>&nbsp; (10514, 56, 70),<br>&nbsp; (10514, 65, 39),<br>&nbsp; 
        (10514, 75, 50),<br>&nbsp; (10515, 9, 16),<br>&nbsp; (10515, 16, 50),<br>&nbsp; (10515, 27, 
        120),<br>&nbsp; (10515, 33, 16),<br>&nbsp; (10515, 60, 84),<br>&nbsp; (10516, 18, 25),<br>&nbsp; 
        (10516, 41, 80),<br>&nbsp; (10516, 42, 20),<br>&nbsp; (10517, 52, 6),<br>&nbsp; (10517, 59, 
        4),<br>&nbsp; (10517, 70, 6),<br>&nbsp; (10518, 24, 5),<br>&nbsp; (10518, 38, 15),<br>&nbsp; (10518, 
        44, 9),<br>&nbsp; (10519, 10, 16),<br>&nbsp; (10519, 56, 40),<br>&nbsp; (10519, 60, 10),<br>&nbsp; 
        (10520, 24, 8),<br>&nbsp; (10520, 53, 5),<br>&nbsp; (10521, 35, 3),<br>&nbsp; (10521, 41, 
        10),<br>&nbsp; (10521, 68, 6),<br>&nbsp; (10522, 1, 40),<br>&nbsp; (10522, 8, 24),<br>&nbsp; (10522, 
        30, 20),<br>&nbsp; (10522, 40, 25),<br>&nbsp; (10523, 17, 25),<br>&nbsp; (10523, 20, 15),<br>&nbsp; 
        (10523, 37, 18),<br>&nbsp; (10523, 41, 6),<br>&nbsp; (10524, 10, 2),<br>&nbsp; (10524, 30, 
        10),<br>&nbsp; (10524, 43, 60),<br>&nbsp; (10524, 54, 15),<br>&nbsp; (10525, 36, 30),<br>&nbsp; 
        (10525, 40, 15),<br>&nbsp; (10526, 1, 8),<br>&nbsp; (10526, 13, 10),<br>&nbsp; (10526, 56, 
        30),<br>&nbsp; (10527, 4, 50),<br>&nbsp; (10527, 36, 30),<br>&nbsp; (10528, 11, 3),<br>&nbsp; 
        (10528, 33, 8),<br>&nbsp; (10528, 72, 9),<br>&nbsp; (10529, 55, 14),<br>&nbsp; (10529, 68, 
        20),<br>&nbsp; (10529, 69, 10),<br>&nbsp; (10530, 17, 40),<br>&nbsp; (10530, 43, 25),<br>&nbsp; 
        (10530, 61, 20),<br>&nbsp; (10530, 76, 50),<br>&nbsp; (10531, 59, 2),<br>&nbsp; (10532, 30, 
        15),<br>&nbsp; (10532, 66, 24),<br>&nbsp; (10533, 4, 50),<br>&nbsp; (10533, 72, 24),<br>&nbsp; 
        (10533, 73, 24),<br>&nbsp; (10534, 30, 10),<br>&nbsp; (10534, 40, 10),<br>&nbsp; (10534, 54, 
        10),<br>&nbsp; (10535, 11, 50),<br>&nbsp; (10535, 40, 10),<br>&nbsp; (10535, 57, 5),<br>&nbsp; 
        (10535, 59, 15),<br>&nbsp; (10536, 12, 15),<br>&nbsp; (10536, 31, 20),<br>&nbsp; (10536, 33, 
        30),<br>&nbsp; (10536, 60, 35),<br>&nbsp; (10537, 31, 30),<br>&nbsp; (10537, 51, 6),<br>&nbsp; 
        (10537, 58, 20),<br>&nbsp; (10537, 72, 21),<br>&nbsp; (10537, 73, 9),<br>&nbsp; (10538, 70, 
        7),<br>&nbsp; (10538, 72, 1),<br>&nbsp; (10539, 13, 8),<br>&nbsp; (10539, 21, 15),<br>&nbsp; (10539, 
        33, 15),<br>&nbsp; (10539, 49, 6),<br>&nbsp; (10540, 3, 60),<br>&nbsp; (10540, 26, 40),<br>&nbsp; 
        (10540, 38, 30),<br>&nbsp; (10540, 68, 35),<br>&nbsp; (10541, 24, 35),<br>&nbsp; (10541, 38, 
        4),<br>&nbsp; (10541, 65, 36),<br>&nbsp; (10541, 71, 9),<br>&nbsp; (10542, 11, 15),<br>&nbsp; 
        (10542, 54, 24),<br>&nbsp; (10543, 12, 30),<br>&nbsp; (10543, 23, 70),<br>&nbsp; (10544, 28, 
        7),<br>&nbsp; (10544, 67, 7),<br>&nbsp; (10545, 11, 10),<br>&nbsp; (10546, 7, 10),<br>&nbsp; (10546, 
        35, 30),<br>&nbsp; (10546, 62, 40),<br>&nbsp; (10547, 32, 24),<br>&nbsp; (10547, 36, 60),<br>&nbsp; 
        (10548, 34, 10),<br>&nbsp; (10548, 41, 14),<br>&nbsp; (10549, 31, 55),<br>&nbsp; (10549, 45, 
        100),<br>&nbsp; (10549, 51, 48),<br>&nbsp; (10550, 17, 8),<br>&nbsp; (10550, 19, 10),<br>&nbsp; 
        (10550, 21, 6),<br>&nbsp; (10550, 61, 10),<br>&nbsp; (10551, 16, 40),<br>&nbsp; (10551, 35, 
        20),<br>&nbsp; (10551, 44, 40),<br>&nbsp; (10552, 69, 18),<br>&nbsp; (10552, 75, 30),<br>&nbsp; 
        (10553, 11, 15),<br>&nbsp; (10553, 16, 14),<br>&nbsp; (10553, 22, 24),<br>&nbsp; (10553, 31, 
        30),<br>&nbsp; (10553, 35, 6),<br>&nbsp; (10554, 16, 30),<br>&nbsp; (10554, 23, 20),<br>&nbsp; 
        (10554, 62, 20),<br>&nbsp; (10554, 77, 10),<br>&nbsp; (10555, 14, 30),<br>&nbsp; (10555, 19, 
        35),<br>&nbsp; (10555, 24, 18),<br>&nbsp; (10555, 51, 20),<br>&nbsp; (10555, 56, 40),<br>&nbsp; 
        (10556, 72, 24),<br>&nbsp; (10557, 64, 30),<br>&nbsp; (10557, 75, 20),<br>&nbsp; (10558, 47, 
        25),<br>&nbsp; (10558, 51, 20),<br>&nbsp; (10558, 52, 30),<br>&nbsp; (10558, 53, 18),<br>&nbsp; 
        (10558, 73, 3),<br>&nbsp; (10559, 41, 12),<br>&nbsp; (10559, 55, 18),<br>&nbsp; (10560, 30, 
        20),<br>&nbsp; (10560, 62, 15),<br>&nbsp; (10561, 44, 10),<br>&nbsp; (10561, 51, 50),<br>&nbsp; 
        (10562, 33, 20),<br>&nbsp; (10562, 62, 10),<br>&nbsp; (10563, 36, 25),<br>&nbsp; (10563, 52, 
        70),<br>&nbsp; (10564, 17, 16),<br>&nbsp; (10564, 31, 6),<br>&nbsp; (10564, 55, 25),<br>&nbsp; 
        (10565, 24, 25),<br>&nbsp; (10565, 64, 18),<br>&nbsp; (10566, 11, 35),<br>&nbsp; (10566, 18, 
        18),<br>&nbsp; (10566, 76, 10),<br>&nbsp; (10567, 31, 60),<br>&nbsp; (10567, 51, 3),<br>&nbsp; 
        (10567, 59, 40),<br>&nbsp; (10568, 10, 5),<br>&nbsp; (10569, 31, 35),<br>&nbsp; (10569, 76, 
        30),<br>&nbsp; (10570, 11, 15),<br>&nbsp; (10570, 56, 60),<br>&nbsp; (10571, 14, 11),<br>&nbsp; 
        (10571, 42, 28),<br>&nbsp; (10572, 16, 12),<br>&nbsp; (10572, 32, 10),<br>&nbsp; (10572, 40, 
        50),<br>&nbsp; (10572, 75, 15),<br>&nbsp; (10573, 17, 18),<br>&nbsp; (10573, 34, 40),<br>&nbsp; 
        (10573, 53, 25),<br>&nbsp; (10574, 33, 14),<br>&nbsp; (10574, 40, 2),<br>&nbsp; (10574, 62, 
        10),<br>&nbsp; (10574, 64, 6),<br>&nbsp; (10575, 59, 12),<br>&nbsp; (10575, 63, 6),<br>&nbsp; 
        (10575, 72, 30),<br>&nbsp; (10575, 76, 10),<br>&nbsp; (10576, 1, 10),<br>&nbsp; (10576, 31, 
        20),<br>&nbsp; (10576, 44, 21),<br>&nbsp; (10577, 39, 10),<br>&nbsp; (10577, 75, 20),<br>&nbsp; 
        (10577, 77, 18),<br>&nbsp; (10578, 35, 20),<br>&nbsp; (10578, 57, 6),<br>&nbsp; (10579, 15, 
        10),<br>&nbsp; (10579, 75, 21),<br>&nbsp; (10580, 14, 15),<br>&nbsp; (10580, 41, 9),<br>&nbsp; 
        (10580, 65, 30),<br>&nbsp; (10581, 75, 50),<br>&nbsp; (10582, 57, 4),<br>&nbsp; (10582, 76, 
        14),<br>&nbsp; (10583, 29, 10),<br>&nbsp; (10583, 60, 24),<br>&nbsp; (10583, 69, 10),<br>&nbsp; 
        (10584, 31, 50),<br>&nbsp; (10585, 47, 15),<br>&nbsp; (10586, 52, 4),<br>&nbsp; (10587, 26, 
        6),<br>&nbsp; (10587, 35, 20),<br>&nbsp; (10587, 77, 20),<br>&nbsp; (10588, 18, 40),<br>&nbsp; 
        (10588, 42, 100),<br>&nbsp; (10589, 35, 4),<br>&nbsp; (10590, 1, 20),<br>&nbsp; (10590, 77, 
        60),<br>&nbsp; (10591, 3, 14),<br>&nbsp; (10591, 7, 10),<br>&nbsp; (10591, 54, 50),<br>&nbsp; 
        (10592, 15, 25),<br>&nbsp; (10592, 26, 5),<br>&nbsp; (10593, 20, 21),<br>&nbsp; (10593, 69, 
        20),<br>&nbsp; (10593, 76, 4),<br>&nbsp; (10594, 52, 24),<br>&nbsp; (10594, 58, 30),<br>&nbsp; 
        (10595, 35, 30),<br>&nbsp; (10595, 61, 120),<br>&nbsp; (10595, 69, 65),<br>&nbsp; (10596, 56, 
        5),<br>&nbsp; (10596, 63, 24),<br>&nbsp; (10596, 75, 30),<br>&nbsp; (10597, 24, 35),<br>&nbsp; 
        (10597, 57, 20),<br>&nbsp; (10597, 65, 12),<br>&nbsp; (10598, 27, 50),<br>&nbsp; (10598, 71, 
        9),<br>&nbsp; (10599, 62, 10),<br>&nbsp; (10600, 54, 4),<br>&nbsp; (10600, 73, 30),<br>&nbsp; 
        (10601, 13, 60),<br>&nbsp; (10601, 59, 35),<br>&nbsp; (10602, 77, 5),<br>&nbsp; (10603, 22, 
        48),<br>&nbsp; (10603, 49, 25),<br>&nbsp; (10604, 48, 6),<br>&nbsp; (10604, 76, 10),<br>&nbsp; 
        (10605, 16, 30),<br>&nbsp; (10605, 59, 20),<br>&nbsp; (10605, 60, 70),<br>&nbsp; (10605, 71, 
        15),<br>&nbsp; (10606, 4, 20),<br>&nbsp; (10606, 55, 20),<br>&nbsp; (10606, 62, 10),<br>&nbsp; 
        (10607, 7, 45),<br>&nbsp; (10607, 17, 100),<br>&nbsp; (10607, 33, 14),<br>&nbsp; (10607, 40, 
        42),<br>&nbsp; (10607, 72, 12),<br>&nbsp; (10608, 56, 28),<br>&nbsp; (10609, 1, 3),<br>&nbsp; 
        (10609, 10, 10),<br>&nbsp; (10609, 21, 6),<br>&nbsp; (10610, 36, 21),<br>&nbsp; (10611, 1, 
        6),<br>&nbsp; (10611, 2, 10),<br>&nbsp; (10611, 60, 15),<br>&nbsp; (10612, 10, 70),<br>&nbsp; 
        (10612, 36, 55),<br>&nbsp; (10612, 49, 18),<br>&nbsp; (10612, 60, 40),<br>&nbsp; (10612, 76, 
        80),<br>&nbsp; (10613, 13, 8),<br>&nbsp; (10613, 75, 40),<br>&nbsp; (10614, 11, 14),<br>&nbsp; 
        (10614, 21, 8),<br>&nbsp; (10614, 39, 5),<br>&nbsp; (10615, 55, 5),<br>&nbsp; (10616, 38, 
        15),<br>&nbsp; (10616, 56, 14),<br>&nbsp; (10616, 70, 15),<br>&nbsp; (10616, 71, 15),<br>&nbsp; 
        (10617, 59, 30),<br>&nbsp; (10618, 6, 70),<br>&nbsp; (10618, 56, 20),<br>&nbsp; (10618, 68, 
        15),<br>&nbsp; (10619, 21, 42),<br>&nbsp; (10619, 22, 40),<br>&nbsp; (10620, 24, 5),<br>&nbsp; 
        (10620, 52, 5),<br>&nbsp; (10621, 19, 5),<br>&nbsp; (10621, 23, 10),<br>&nbsp; (10621, 70, 
        20),<br>&nbsp; (10621, 71, 15),<br>&nbsp; (10622, 2, 20),<br>&nbsp; (10622, 68, 18),<br>&nbsp; 
        (10623, 14, 21),<br>&nbsp; (10623, 19, 15),<br>&nbsp; (10623, 21, 25),<br>&nbsp; (10623, 24, 
        3),<br>&nbsp; (10623, 35, 30),<br>&nbsp; (10624, 28, 10),<br>&nbsp; (10624, 29, 6),<br>&nbsp; 
        (10624, 44, 10),<br>&nbsp; (10625, 14, 3),<br>&nbsp; (10625, 42, 5),<br>&nbsp; (10625, 60, 
        10),<br>&nbsp; (10626, 53, 12),<br>&nbsp; (10626, 60, 20),<br>&nbsp; (10626, 71, 20),<br>&nbsp; 
        (10627, 62, 15),<br>&nbsp; (10627, 73, 35),<br>&nbsp; (10628, 1, 25),<br>&nbsp; (10629, 29, 
        20),<br>&nbsp; (10629, 64, 9),<br>&nbsp; (10630, 55, 12),<br>&nbsp; (10630, 76, 35),<br>&nbsp; 
        (10631, 75, 8),<br>&nbsp; (10632, 2, 30),<br>&nbsp; (10632, 33, 20),<br>&nbsp; (10633, 12, 
        36),<br>&nbsp; (10633, 13, 13),<br>&nbsp; (10633, 26, 35),<br>&nbsp; (10633, 62, 80),<br>&nbsp; 
        (10634, 7, 35),<br>&nbsp; (10634, 18, 50),<br>&nbsp; (10634, 51, 15),<br>&nbsp; (10634, 75, 
        2),<br>&nbsp; (10635, 4, 10),<br>&nbsp; (10635, 5, 15),<br>&nbsp; (10635, 22, 40),<br>&nbsp; (10636, 
        4, 25),<br>&nbsp; (10636, 58, 6),<br>&nbsp; (10637, 11, 10),<br>&nbsp; (10637, 50, 25),<br>&nbsp; 
        (10637, 56, 60),<br>&nbsp; (10638, 45, 20),<br>&nbsp; (10638, 65, 21),<br>&nbsp; (10638, 72, 
        60),<br>&nbsp; (10639, 18, 8),<br>&nbsp; (10640, 69, 20),<br>&nbsp; (10640, 70, 15),<br>&nbsp; 
        (10641, 2, 50),<br>&nbsp; (10641, 40, 60),<br>&nbsp; (10642, 21, 30),<br>&nbsp; (10642, 61, 
        20),<br>&nbsp; (10643, 28, 15),<br>&nbsp; (10643, 39, 21),<br>&nbsp; (10643, 46, 2),<br>&nbsp; 
        (10644, 18, 4),<br>&nbsp; (10644, 43, 20),<br>&nbsp; (10644, 46, 21),<br>&nbsp; (10645, 18, 
        20),<br>&nbsp; (10645, 36, 15),<br>&nbsp; (10646, 1, 15),<br>&nbsp; (10646, 10, 18),<br>&nbsp; 
        (10646, 71, 30),<br>&nbsp; (10646, 77, 35),<br>&nbsp; (10647, 19, 30),<br>&nbsp; (10647, 39, 
        20),<br>&nbsp; (10648, 22, 15),<br>&nbsp; (10648, 24, 15),<br>&nbsp; (10649, 28, 20),<br>&nbsp; 
        (10649, 72, 15),<br>&nbsp; (10650, 30, 30),<br>&nbsp; (10650, 53, 25),<br>&nbsp; (10650, 54, 
        30),<br>&nbsp; (10651, 19, 12),<br>&nbsp; (10651, 22, 20),<br>&nbsp; (10652, 30, 2),<br>&nbsp; 
        (10652, 42, 20),<br>&nbsp; (10653, 16, 30),<br>&nbsp; (10653, 60, 20),<br>&nbsp; (10654, 4, 
        12),<br>&nbsp; (10654, 39, 20),<br>&nbsp; (10654, 54, 6),<br>&nbsp; (10655, 41, 20),<br>&nbsp; 
        (10656, 14, 3),<br>&nbsp; (10656, 44, 28),<br>&nbsp; (10656, 47, 6),<br>&nbsp; (10657, 15, 
        50),<br>&nbsp; (10657, 41, 24),<br>&nbsp; (10657, 46, 45),<br>&nbsp; (10657, 47, 10),<br>&nbsp; 
        (10657, 56, 45),<br>&nbsp; (10657, 60, 30),<br>&nbsp; (10658, 21, 60),<br>&nbsp; (10658, 40, 
        70),<br>&nbsp; (10658, 60, 55),<br>&nbsp; (10658, 77, 70),<br>&nbsp; (10659, 31, 20),<br>&nbsp; 
        (10659, 40, 24),<br>&nbsp; (10659, 70, 40),<br>&nbsp; (10660, 20, 21),<br>&nbsp; (10661, 39, 
        3),<br>&nbsp; (10661, 58, 49),<br>&nbsp; (10662, 68, 10),<br>&nbsp; (10663, 40, 30),<br>&nbsp; 
        (10663, 42, 30),<br>&nbsp; (10663, 51, 20),<br>&nbsp; (10664, 10, 24),<br>&nbsp; (10664, 56, 
        12),<br>&nbsp; (10664, 65, 15),<br>&nbsp; (10665, 51, 20),<br>&nbsp; (10665, 59, 1),<br>&nbsp; 
        (10665, 76, 10),<br>&nbsp; (10666, 29, 36),<br>&nbsp; (10666, 65, 10),<br>&nbsp; (10667, 69, 
        45),<br>&nbsp; (10667, 71, 14),<br>&nbsp; (10668, 31, 8),<br>&nbsp; (10668, 55, 4),<br>&nbsp; 
        (10668, 64, 15),<br>&nbsp; (10669, 36, 30),<br>&nbsp; (10670, 23, 32),<br>&nbsp; (10670, 46, 
        60),<br>&nbsp; (10670, 67, 25),<br>&nbsp; (10670, 73, 50),<br>&nbsp; (10670, 75, 25),<br>&nbsp; 
        (10671, 16, 10),<br>&nbsp; (10671, 62, 10),<br>&nbsp; (10671, 65, 12),<br>&nbsp; (10672, 38, 
        15),<br>&nbsp; (10672, 71, 12),<br>&nbsp; (10673, 16, 3),<br>&nbsp; (10673, 42, 6),<br>&nbsp; 
        (10673, 43, 6),<br>&nbsp; (10674, 23, 5),<br>&nbsp; (10675, 14, 30),<br>&nbsp; (10675, 53, 
        10),<br>&nbsp; (10675, 58, 30),<br>&nbsp; (10676, 10, 2),<br>&nbsp; (10676, 19, 7),<br>&nbsp; 
        (10676, 44, 21),<br>&nbsp; (10677, 26, 30),<br>&nbsp; (10677, 33, 8),<br>&nbsp; (10678, 12, 
        100),<br>&nbsp; (10678, 33, 30),<br>&nbsp; (10678, 41, 120),<br>&nbsp; (10678, 54, 30),<br>&nbsp; 
        (10679, 59, 12),<br>&nbsp; (10680, 16, 50),<br>&nbsp; (10680, 31, 20),<br>&nbsp; (10680, 42, 
        40),<br>&nbsp; (10681, 19, 30),<br>&nbsp; (10681, 21, 12),<br>&nbsp; (10681, 64, 28),<br>&nbsp; 
        (10682, 33, 30),<br>&nbsp; (10682, 66, 4),<br>&nbsp; (10682, 75, 30),<br>&nbsp; (10683, 52, 
        9),<br>&nbsp; (10684, 40, 20),<br>&nbsp; (10684, 47, 40),<br>&nbsp; (10684, 60, 30),<br>&nbsp; 
        (10685, 10, 20),<br>&nbsp; (10685, 41, 4),<br>&nbsp; (10685, 47, 15),<br>&nbsp; (10686, 17, 
        30),<br>&nbsp; (10686, 26, 15),<br>&nbsp; (10687, 9, 50),<br>&nbsp; (10687, 29, 10),<br>&nbsp; 
        (10687, 36, 6),<br>&nbsp; (10688, 10, 18),<br>&nbsp; (10688, 28, 60),<br>&nbsp; (10688, 34, 
        14),<br>&nbsp; (10689, 1, 35),<br>&nbsp; (10690, 56, 20),<br>&nbsp; (10690, 77, 30),<br>&nbsp; 
        (10691, 1, 30),<br>&nbsp; (10691, 29, 40),<br>&nbsp; (10691, 43, 40),<br>&nbsp; (10691, 44, 
        24),<br>&nbsp; (10691, 62, 48),<br>&nbsp; (10692, 63, 20),<br>&nbsp; (10693, 9, 6),<br>&nbsp; 
        (10693, 54, 60),<br>&nbsp; (10693, 69, 30),<br>&nbsp; (10693, 73, 15),<br>&nbsp; (10694, 7, 
        90),<br>&nbsp; (10694, 59, 25),<br>&nbsp; (10694, 70, 50),<br>&nbsp; (10695, 8, 10),<br>&nbsp; 
        (10695, 12, 4),<br>&nbsp; (10695, 24, 20),<br>&nbsp; (10696, 17, 20),<br>&nbsp; (10696, 46, 
        18),<br>&nbsp; (10697, 19, 7),<br>&nbsp; (10697, 35, 9),<br>&nbsp; (10697, 58, 30),<br>&nbsp; 
        (10697, 70, 30),<br>&nbsp; (10698, 11, 15),<br>&nbsp; (10698, 17, 8),<br>&nbsp; (10698, 29, 
        12),<br>&nbsp; (10698, 65, 65),<br>&nbsp; (10698, 70, 8),<br>&nbsp; (10699, 47, 12),<br>&nbsp; 
        (10700, 1, 5),<br>&nbsp; (10700, 34, 12),<br>&nbsp; (10700, 68, 40),<br>&nbsp; (10700, 71, 
        60),<br>&nbsp; (10701, 59, 42),<br>&nbsp; (10701, 71, 20),<br>&nbsp; (10701, 76, 35),<br>&nbsp; 
        (10702, 3, 6),<br>&nbsp; (10702, 76, 15),<br>&nbsp; (10703, 2, 5),<br>&nbsp; (10703, 59, 35),<br>&nbsp; 
        (10703, 73, 35),<br>&nbsp; (10704, 4, 6),<br>&nbsp; (10704, 24, 35),<br>&nbsp; (10704, 48, 
        24),<br>&nbsp; (10705, 31, 20),<br>&nbsp; (10705, 32, 4),<br>&nbsp; (10706, 16, 20),<br>&nbsp; 
        (10706, 43, 24),<br>&nbsp; (10706, 59, 8),<br>&nbsp; (10707, 55, 21),<br>&nbsp; (10707, 57, 
        40),<br>&nbsp; (10707, 70, 28),<br>&nbsp; (10708, 5, 4),<br>&nbsp; (10708, 36, 5),<br>&nbsp; (10709, 
        8, 40),<br>&nbsp; (10709, 51, 28),<br>&nbsp; (10709, 60, 10),<br>&nbsp; (10710, 19, 5),<br>&nbsp; 
        (10710, 47, 5),<br>&nbsp; (10711, 19, 12),<br>&nbsp; (10711, 41, 42),<br>&nbsp; (10711, 53, 
        120),<br>&nbsp; (10712, 53, 3),<br>&nbsp; (10712, 56, 30),<br>&nbsp; (10713, 10, 18),<br>&nbsp; 
        (10713, 26, 30),<br>&nbsp; (10713, 45, 110),<br>&nbsp; (10713, 46, 24),<br>&nbsp; (10714, 2, 
        30),<br>&nbsp; (10714, 17, 27),<br>&nbsp; (10714, 47, 50),<br>&nbsp; (10714, 56, 18),<br>&nbsp; 
        (10714, 58, 12),<br>&nbsp; (10715, 10, 21),<br>&nbsp; (10715, 71, 30),<br>&nbsp; (10716, 21, 
        5),<br>&nbsp; (10716, 51, 7),<br>&nbsp; (10716, 61, 10),<br>&nbsp; (10717, 21, 32),<br>&nbsp; 
        (10717, 54, 15),<br>&nbsp; (10717, 69, 25),<br>&nbsp; (10718, 12, 36),<br>&nbsp; (10718, 16, 
        20),<br>&nbsp; (10718, 36, 40),<br>&nbsp; (10718, 62, 20),<br>&nbsp; (10719, 18, 12),<br>&nbsp; 
        (10719, 30, 3),<br>&nbsp; (10719, 54, 40),<br>&nbsp; (10720, 35, 21),<br>&nbsp; (10720, 71, 
        8),<br>&nbsp; (10721, 44, 50),<br>&nbsp; (10722, 2, 3),<br>&nbsp; (10722, 31, 50),<br>&nbsp; (10722, 
        68, 45),<br>&nbsp; (10722, 75, 42),<br>&nbsp; (10723, 26, 15),<br>&nbsp; (10724, 10, 16),<br>&nbsp; 
        (10724, 61, 5),<br>&nbsp; (10725, 41, 12),<br>&nbsp; (10725, 52, 4),<br>&nbsp; (10725, 55, 
        6),<br>&nbsp; (10726, 4, 25),<br>&nbsp; (10726, 11, 5),<br>&nbsp; (10727, 17, 20),<br>&nbsp; (10727, 
        56, 10),<br>&nbsp; (10727, 59, 10),<br>&nbsp; (10728, 30, 15),<br>&nbsp; (10728, 40, 6),<br>&nbsp; 
        (10728, 55, 12),<br>&nbsp; (10728, 60, 15),<br>&nbsp; (10729, 1, 50),<br>&nbsp; (10729, 21, 
        30),<br>&nbsp; (10729, 50, 40),<br>&nbsp; (10730, 16, 15),<br>&nbsp; (10730, 31, 3),<br>&nbsp; 
        (10730, 65, 10),<br>&nbsp; (10731, 21, 40),<br>&nbsp; (10731, 51, 30),<br>&nbsp; (10732, 76, 
        20),<br>&nbsp; (10733, 14, 16),<br>&nbsp; (10733, 28, 20),<br>&nbsp; (10733, 52, 25),<br>&nbsp; 
        (10734, 6, 30),<br>&nbsp; (10734, 30, 15),<br>&nbsp; (10734, 76, 20),<br>&nbsp; (10735, 61, 
        20),<br>&nbsp; (10735, 77, 2),<br>&nbsp; (10736, 65, 40),<br>&nbsp; (10736, 75, 20),<br>&nbsp; 
        (10737, 13, 4),<br>&nbsp; (10737, 41, 12),<br>&nbsp; (10738, 16, 3),<br>&nbsp; (10739, 36, 
        6),<br>&nbsp; (10739, 52, 18),<br>&nbsp; (10740, 28, 5),<br>&nbsp; (10740, 35, 35),<br>&nbsp; 
        (10740, 45, 40),<br>&nbsp; (10740, 56, 14),<br>&nbsp; (10741, 2, 15),<br>&nbsp; (10742, 3, 
        20),<br>&nbsp; (10742, 60, 50),<br>&nbsp; (10742, 72, 35),<br>&nbsp; (10743, 46, 28),<br>&nbsp; 
        (10744, 40, 50),<br>&nbsp; (10745, 18, 24),<br>&nbsp; (10745, 44, 16),<br>&nbsp; (10745, 59, 
        45),<br>&nbsp; (10745, 72, 7),<br>&nbsp; (10746, 13, 6),<br>&nbsp; (10746, 42, 28),<br>&nbsp; 
        (10746, 62, 9),<br>&nbsp; (10746, 69, 40),<br>&nbsp; (10747, 31, 8),<br>&nbsp; (10747, 41, 
        35),<br>&nbsp; (10747, 63, 9),<br>&nbsp; (10747, 69, 30),<br>&nbsp; (10748, 23, 44),<br>&nbsp; 
        (10748, 40, 40),<br>&nbsp; (10748, 56, 28),<br>&nbsp; (10749, 56, 15),<br>&nbsp; (10749, 59, 
        6),<br>&nbsp; (10749, 76, 10),<br>&nbsp; (10750, 14, 5),<br>&nbsp; (10750, 45, 40),<br>&nbsp; 
        (10750, 59, 25),<br>&nbsp; (10751, 26, 12),<br>&nbsp; (10751, 30, 30),<br>&nbsp; (10751, 50, 
        20),<br>&nbsp; (10751, 73, 15),<br>&nbsp; (10752, 1, 8),<br>&nbsp; (10752, 69, 3),<br>&nbsp; (10753, 
        45, 4),<br>&nbsp; (10753, 74, 5),<br>&nbsp; (10754, 40, 3),<br>&nbsp; (10755, 47, 30),<br>&nbsp; 
        (10755, 56, 30),<br>&nbsp; (10755, 57, 14),<br>&nbsp; (10755, 69, 25),<br>&nbsp; (10756, 18, 
        21),<br>&nbsp; (10756, 36, 20),<br>&nbsp; (10756, 68, 6),<br>&nbsp; (10756, 69, 20),<br>&nbsp; 
        (10757, 34, 30),<br>&nbsp; (10757, 59, 7),<br>&nbsp; (10757, 62, 30),<br>&nbsp; (10757, 64, 
        24),<br>&nbsp; (10758, 26, 20),<br>&nbsp; (10758, 52, 60),<br>&nbsp; (10758, 70, 40),<br>&nbsp; 
        (10759, 32, 10),<br>&nbsp; (10760, 25, 12),<br>&nbsp; (10760, 27, 40),<br>&nbsp; (10760, 43, 
        30),<br>&nbsp; (10761, 25, 35),<br>&nbsp; (10761, 75, 18),<br>&nbsp; (10762, 39, 16),<br>&nbsp; 
        (10762, 47, 30),<br>&nbsp; (10762, 51, 28),<br>&nbsp; (10762, 56, 60),<br>&nbsp; (10763, 21, 
        40),<br>&nbsp; (10763, 22, 6),<br>&nbsp; (10763, 24, 20),<br>&nbsp; (10764, 3, 20),<br>&nbsp; 
        (10764, 39, 130),<br>&nbsp; (10765, 65, 80),<br>&nbsp; (10766, 2, 40),<br>&nbsp; (10766, 7, 
        35),<br>&nbsp; (10766, 68, 40),<br>&nbsp; (10767, 42, 2),<br>&nbsp; (10768, 22, 4),<br>&nbsp; 
        (10768, 31, 50),<br>&nbsp; (10768, 60, 15),<br>&nbsp; (10768, 71, 12),<br>&nbsp; (10769, 41, 
        30),<br>&nbsp; (10769, 52, 15),<br>&nbsp; (10769, 61, 20),<br>&nbsp; (10769, 62, 15),<br>&nbsp; 
        (10770, 11, 15),<br>&nbsp; (10771, 71, 16),<br>&nbsp; (10772, 29, 18),<br>&nbsp; (10772, 59, 
        25),<br>&nbsp; (10773, 17, 33),<br>&nbsp; (10773, 31, 70),<br>&nbsp; (10773, 75, 7),<br>&nbsp; 
        (10774, 31, 2),<br>&nbsp; (10774, 66, 50),<br>&nbsp; (10775, 10, 6),<br>&nbsp; (10775, 67, 
        3),<br>&nbsp; (10776, 31, 16),<br>&nbsp; (10776, 42, 12),<br>&nbsp; (10776, 45, 27),<br>&nbsp; 
        (10776, 51, 120),<br>&nbsp; (10777, 42, 20),<br>&nbsp; (10778, 41, 10),<br>&nbsp; (10779, 16, 
        20),<br>&nbsp; (10779, 62, 20),<br>&nbsp; (10780, 70, 35),<br>&nbsp; (10780, 77, 15),<br>&nbsp; 
        (10781, 54, 3),<br>&nbsp; (10781, 56, 20),<br>&nbsp; (10781, 74, 35),<br>&nbsp; (10782, 31, 
        1),<br>&nbsp; (10783, 31, 10),<br>&nbsp; (10783, 38, 5),<br>&nbsp; (10784, 36, 30),<br>&nbsp; 
        (10784, 39, 2),<br>&nbsp; (10784, 72, 30),<br>&nbsp; (10785, 10, 10),<br>&nbsp; (10785, 75, 
        10),<br>&nbsp; (10786, 8, 30),<br>&nbsp; (10786, 30, 15),<br>&nbsp; (10786, 75, 42),<br>&nbsp; 
        (10787, 2, 15),<br>&nbsp; (10787, 29, 20),<br>&nbsp; (10788, 19, 50),<br>&nbsp; (10788, 75, 
        40),<br>&nbsp; (10789, 18, 30),<br>&nbsp; (10789, 35, 15),<br>&nbsp; (10789, 63, 30),<br>&nbsp; 
        (10789, 68, 18),<br>&nbsp; (10790, 7, 3),<br>&nbsp; (10790, 56, 20),<br>&nbsp; (10791, 29, 
        14),<br>&nbsp; (10791, 41, 20),<br>&nbsp; (10792, 2, 10),<br>&nbsp; (10792, 54, 3),<br>&nbsp; 
        (10792, 68, 15),<br>&nbsp; (10793, 41, 14),<br>&nbsp; (10793, 52, 8),<br>&nbsp; (10794, 14, 
        15),<br>&nbsp; (10794, 54, 6),<br>&nbsp; (10795, 16, 65),<br>&nbsp; (10795, 17, 35),<br>&nbsp; 
        (10796, 26, 21),<br>&nbsp; (10796, 44, 10),<br>&nbsp; (10796, 64, 35),<br>&nbsp; (10796, 69, 
        24),<br>&nbsp; (10797, 11, 20),<br>&nbsp; (10798, 62, 2),<br>&nbsp; (10798, 72, 10),<br>&nbsp; 
        (10799, 13, 20),<br>&nbsp; (10799, 24, 20),<br>&nbsp; (10799, 59, 25),<br>&nbsp; (10800, 11, 
        50),<br>&nbsp; (10800, 51, 10),<br>&nbsp; (10800, 54, 7),<br>&nbsp; (10801, 17, 40),<br>&nbsp; 
        (10801, 29, 20),<br>&nbsp; (10802, 30, 25),<br>&nbsp; (10802, 51, 30),<br>&nbsp; (10802, 55, 
        60),<br>&nbsp; (10802, 62, 5),<br>&nbsp; (10803, 19, 24),<br>&nbsp; (10803, 25, 15),<br>&nbsp; 
        (10803, 59, 15),<br>&nbsp; (10804, 10, 36),<br>&nbsp; (10804, 28, 24),<br>&nbsp; (10804, 49, 
        4),<br>&nbsp; (10805, 34, 10),<br>&nbsp; (10805, 38, 10),<br>&nbsp; (10806, 2, 20),<br>&nbsp; 
        (10806, 65, 2),<br>&nbsp; (10806, 74, 15),<br>&nbsp; (10807, 40, 1),<br>&nbsp; (10808, 56, 
        20),<br>&nbsp; (10808, 76, 50),<br>&nbsp; (10809, 52, 20),<br>&nbsp; (10810, 13, 7),<br>&nbsp; 
        (10810, 25, 5),<br>&nbsp; (10810, 70, 5),<br>&nbsp; (10811, 19, 15),<br>&nbsp; (10811, 23, 
        18),<br>&nbsp; (10811, 40, 30),<br>&nbsp; (10812, 31, 16),<br>&nbsp; (10812, 72, 40),<br>&nbsp; 
        (10812, 77, 20),<br>&nbsp; (10813, 2, 12),<br>&nbsp; (10813, 46, 35),<br>&nbsp; (10814, 41, 
        20),<br>&nbsp; (10814, 43, 20),<br>&nbsp; (10814, 48, 8),<br>&nbsp; (10814, 61, 30),<br>&nbsp; 
        (10815, 33, 16),<br>&nbsp; (10816, 38, 30),<br>&nbsp; (10816, 62, 20),<br>&nbsp; (10817, 26, 
        40),<br>&nbsp; (10817, 38, 30),<br>&nbsp; (10817, 40, 60),<br>&nbsp; (10817, 62, 25),<br>&nbsp; 
        (10818, 32, 20),<br>&nbsp; (10818, 41, 20),<br>&nbsp; (10819, 43, 7),<br>&nbsp; (10819, 75, 
        20),<br>&nbsp; (10820, 56, 30),<br>&nbsp; (10821, 35, 20),<br>&nbsp; (10821, 51, 6),<br>&nbsp; 
        (10822, 62, 3),<br>&nbsp; (10822, 70, 6),<br>&nbsp; (10823, 11, 20),<br>&nbsp; (10823, 57, 
        15),<br>&nbsp; (10823, 59, 40),<br>&nbsp; (10823, 77, 15),<br>&nbsp; (10824, 41, 12),<br>&nbsp; 
        (10824, 70, 9),<br>&nbsp; (10825, 26, 12),<br>&nbsp; (10825, 53, 20),<br>&nbsp; (10826, 31, 
        35),<br>&nbsp; (10826, 57, 15),<br>&nbsp; (10827, 10, 15),<br>&nbsp; (10827, 39, 21),<br>&nbsp; 
        (10828, 20, 5),<br>&nbsp; (10828, 38, 2),<br>&nbsp; (10829, 2, 10),<br>&nbsp; (10829, 8, 20),<br>&nbsp; 
        (10829, 13, 10),<br>&nbsp; (10829, 60, 21),<br>&nbsp; (10830, 6, 6),<br>&nbsp; (10830, 39, 
        28),<br>&nbsp; (10830, 60, 30),<br>&nbsp; (10830, 68, 24),<br>&nbsp; (10831, 19, 2),<br>&nbsp; 
        (10831, 35, 8),<br>&nbsp; (10831, 38, 8),<br>&nbsp; (10831, 43, 9),<br>&nbsp; (10832, 13, 3),<br>&nbsp; 
        (10832, 25, 10),<br>&nbsp; (10832, 44, 16),<br>&nbsp; (10832, 64, 3),<br>&nbsp; (10833, 7, 
        20),<br>&nbsp; (10833, 31, 9),<br>&nbsp; (10833, 53, 9),<br>&nbsp; (10834, 29, 8),<br>&nbsp; (10834, 
        30, 20),<br>&nbsp; (10835, 59, 15),<br>&nbsp; (10835, 77, 2),<br>&nbsp; (10836, 22, 52),<br>&nbsp; 
        (10836, 35, 6),<br>&nbsp; (10836, 57, 24),<br>&nbsp; (10836, 60, 60),<br>&nbsp; (10836, 64, 
        30),<br>&nbsp; (10837, 13, 6),<br>&nbsp; (10837, 40, 25),<br>&nbsp; (10837, 47, 40),<br>&nbsp; 
        (10837, 76, 21),<br>&nbsp; (10838, 1, 4),<br>&nbsp; (10838, 18, 25),<br>&nbsp; (10838, 36, 
        50),<br>&nbsp; (10839, 58, 30),<br>&nbsp; (10839, 72, 15),<br>&nbsp; (10840, 25, 6),<br>&nbsp; 
        (10840, 39, 10),<br>&nbsp; (10841, 10, 16),<br>&nbsp; (10841, 56, 30),<br>&nbsp; (10841, 59, 
        50),<br>&nbsp; (10841, 77, 15),<br>&nbsp; (10842, 11, 15),<br>&nbsp; (10842, 43, 5),<br>&nbsp; 
        (10842, 68, 20),<br>&nbsp; (10842, 70, 12),<br>&nbsp; (10843, 51, 4),<br>&nbsp; (10844, 22, 
        35),<br>&nbsp; (10845, 23, 70),<br>&nbsp; (10845, 35, 25),<br>&nbsp; (10845, 42, 42),<br>&nbsp; 
        (10845, 58, 60),<br>&nbsp; (10845, 64, 48),<br>&nbsp; (10846, 4, 21),<br>&nbsp; (10846, 70, 
        30),<br>&nbsp; (10846, 74, 20),<br>&nbsp; (10847, 1, 80),<br>&nbsp; (10847, 19, 12),<br>&nbsp; 
        (10847, 37, 60),<br>&nbsp; (10847, 45, 36),<br>&nbsp; (10847, 60, 45),<br>&nbsp; (10847, 71, 
        55),<br>&nbsp; (10848, 5, 30),<br>&nbsp; (10848, 9, 3),<br>&nbsp; (10849, 3, 49),<br>&nbsp; (10849, 
        26, 18),<br>&nbsp; (10850, 25, 20),<br>&nbsp; (10850, 33, 4),<br>&nbsp; (10850, 70, 30),<br>&nbsp; 
        (10851, 2, 5),<br>&nbsp; (10851, 25, 10),<br>&nbsp; (10851, 57, 10),<br>&nbsp; (10851, 59, 
        42),<br>&nbsp; (10852, 2, 15),<br>&nbsp; (10852, 17, 6),<br>&nbsp; (10852, 62, 50),<br>&nbsp; 
        (10853, 18, 10),<br>&nbsp; (10854, 10, 100),<br>&nbsp; (10854, 13, 65),<br>&nbsp; (10855, 16, 
        50),<br>&nbsp; (10855, 31, 14),<br>&nbsp; (10855, 56, 24),<br>&nbsp; (10855, 65, 15),<br>&nbsp; 
        (10856, 2, 20),<br>&nbsp; (10856, 42, 20),<br>&nbsp; (10857, 3, 30),<br>&nbsp; (10857, 26, 
        35),<br>&nbsp; (10857, 29, 10),<br>&nbsp; (10858, 7, 5),<br>&nbsp; (10858, 27, 10),<br>&nbsp; 
        (10858, 70, 4),<br>&nbsp; (10859, 24, 40),<br>&nbsp; (10859, 54, 35),<br>&nbsp; (10859, 64, 
        30),<br>&nbsp; (10860, 51, 3),<br>&nbsp; (10860, 76, 20),<br>&nbsp; (10861, 17, 42),<br>&nbsp; 
        (10861, 18, 20),<br>&nbsp; (10861, 21, 40),<br>&nbsp; (10861, 33, 35),<br>&nbsp; (10861, 62, 
        3),<br>&nbsp; (10862, 11, 25),<br>&nbsp; (10862, 52, 8),<br>&nbsp; (10863, 1, 20),<br>&nbsp; (10863, 
        58, 12),<br>&nbsp; (10864, 35, 4),<br>&nbsp; (10864, 67, 15),<br>&nbsp; (10865, 38, 60),<br>&nbsp; 
        (10865, 39, 80),<br>&nbsp; (10866, 2, 21),<br>&nbsp; (10866, 24, 6),<br>&nbsp; (10866, 30, 
        40),<br>&nbsp; (10867, 53, 3),<br>&nbsp; (10868, 26, 20),<br>&nbsp; (10868, 35, 30),<br>&nbsp; 
        (10868, 49, 42),<br>&nbsp; (10869, 1, 40),<br>&nbsp; (10869, 11, 10),<br>&nbsp; (10869, 23, 
        50),<br>&nbsp; (10869, 68, 20),<br>&nbsp; (10870, 35, 3),<br>&nbsp; (10870, 51, 2),<br>&nbsp; 
        (10871, 6, 50),<br>&nbsp; (10871, 16, 12),<br>&nbsp; (10871, 17, 16),<br>&nbsp; (10872, 55, 
        10),<br>&nbsp; (10872, 62, 20),<br>&nbsp; (10872, 64, 15),<br>&nbsp; (10872, 65, 21),<br>&nbsp; 
        (10873, 21, 20),<br>&nbsp; (10873, 28, 3),<br>&nbsp; (10874, 10, 10),<br>&nbsp; (10875, 19, 
        25),<br>&nbsp; (10875, 47, 21),<br>&nbsp; (10875, 49, 15),<br>&nbsp; (10876, 46, 21),<br>&nbsp; 
        (10876, 64, 20),<br>&nbsp; (10877, 16, 30),<br>&nbsp; (10877, 18, 25),<br>&nbsp; (10878, 20, 
        20),<br>&nbsp; (10879, 40, 12),<br>&nbsp; (10879, 65, 10),<br>&nbsp; (10879, 76, 10),<br>&nbsp; 
        (10880, 23, 30),<br>&nbsp; (10880, 61, 30),<br>&nbsp; (10880, 70, 50),<br>&nbsp; (10881, 73, 
        10),<br>&nbsp; (10882, 42, 25),<br>&nbsp; (10882, 49, 20),<br>&nbsp; (10882, 54, 32),<br>&nbsp; 
        (10883, 24, 8),<br>&nbsp; (10884, 21, 40),<br>&nbsp; (10884, 56, 21),<br>&nbsp; (10884, 65, 
        12),<br>&nbsp; (10885, 2, 20),<br>&nbsp; (10885, 24, 12),<br>&nbsp; (10885, 70, 30),<br>&nbsp; 
        (10885, 77, 25),<br>&nbsp; (10886, 10, 70),<br>&nbsp; (10886, 31, 35),<br>&nbsp; (10886, 77, 
        40),<br>&nbsp; (10887, 25, 5),<br>&nbsp; (10888, 2, 20),<br>&nbsp; (10888, 68, 18),<br>&nbsp; 
        (10889, 11, 40),<br>&nbsp; (10889, 38, 40),<br>&nbsp; (10890, 17, 15),<br>&nbsp; (10890, 34, 
        10),<br>&nbsp; (10890, 41, 14),<br>&nbsp; (10891, 30, 15),<br>&nbsp; (10892, 59, 40),<br>&nbsp; 
        (10893, 8, 30),<br>&nbsp; (10893, 24, 10),<br>&nbsp; (10893, 29, 24),<br>&nbsp; (10893, 30, 
        35),<br>&nbsp; (10893, 36, 20),<br>&nbsp; (10894, 13, 28),<br>&nbsp; (10894, 69, 50),<br>&nbsp; 
        (10894, 75, 120),<br>&nbsp; (10895, 24, 110),<br>&nbsp; (10895, 39, 45),<br>&nbsp; (10895, 
        40, 91),<br>&nbsp; (10895, 60, 100),<br>&nbsp; (10896, 45, 15),<br>&nbsp; (10896, 56, 16),<br>&nbsp; 
        (10897, 29, 80),<br>&nbsp; (10897, 30, 36),<br>&nbsp; (10898, 13, 5),<br>&nbsp; (10899, 39, 
        8),<br>&nbsp; (10900, 70, 3),<br>&nbsp; (10901, 41, 30),<br>&nbsp; (10901, 71, 30),<br>&nbsp; 
        (10902, 55, 30),<br>&nbsp; (10902, 62, 6),<br>&nbsp; (10903, 13, 40),<br>&nbsp; (10903, 65, 
        21),<br>&nbsp; (10903, 68, 20),<br>&nbsp; (10904, 58, 15),<br>&nbsp; (10904, 62, 35),<br>&nbsp; 
        (10905, 1, 20),<br>&nbsp; (10906, 61, 15),<br>&nbsp; (10907, 75, 14),<br>&nbsp; (10908, 7, 
        20),<br>&nbsp; (10908, 52, 14),<br>&nbsp; (10909, 7, 12),<br>&nbsp; (10909, 16, 15),<br>&nbsp; 
        (10909, 41, 5),<br>&nbsp; (10910, 19, 12),<br>&nbsp; (10910, 49, 10),<br>&nbsp; (10910, 61, 
        5),<br>&nbsp; (10911, 1, 10),<br>&nbsp; (10911, 17, 12),<br>&nbsp; (10911, 67, 15),<br>&nbsp; 
        (10912, 11, 40),<br>&nbsp; (10912, 29, 60),<br>&nbsp; (10913, 4, 30),<br>&nbsp; (10913, 33, 
        40),<br>&nbsp; (10913, 58, 15),<br>&nbsp; (10914, 71, 25),<br>&nbsp; (10915, 17, 10),<br>&nbsp; 
        (10915, 33, 30),<br>&nbsp; (10915, 54, 10),<br>&nbsp; (10916, 16, 6),<br>&nbsp; (10916, 32, 
        6),<br>&nbsp; (10916, 57, 20),<br>&nbsp; (10917, 30, 1),<br>&nbsp; (10917, 60, 10),<br>&nbsp; 
        (10918, 1, 60),<br>&nbsp; (10918, 60, 25),<br>&nbsp; (10919, 16, 24),<br>&nbsp; (10919, 25, 
        24),<br>&nbsp; (10919, 40, 20),<br>&nbsp; (10920, 50, 24),<br>&nbsp; (10921, 35, 10),<br>&nbsp; 
        (10921, 63, 40),<br>&nbsp; (10922, 17, 15),<br>&nbsp; (10922, 24, 35),<br>&nbsp; (10923, 42, 
        10),<br>&nbsp; (10923, 43, 10),<br>&nbsp; (10923, 67, 24),<br>&nbsp; (10924, 10, 20),<br>&nbsp; 
        (10924, 28, 30),<br>&nbsp; (10924, 75, 6),<br>&nbsp; (10925, 36, 25),<br>&nbsp; (10925, 52, 
        12),<br>&nbsp; (10926, 11, 2),<br>&nbsp; (10926, 13, 10),<br>&nbsp; (10926, 19, 7),<br>&nbsp; 
        (10926, 72, 10),<br>&nbsp; (10927, 20, 5),<br>&nbsp; (10927, 52, 5),<br>&nbsp; (10927, 76, 
        20),<br>&nbsp; (10928, 47, 5),<br>&nbsp; (10928, 76, 5),<br>&nbsp; (10929, 21, 60),<br>&nbsp; 
        (10929, 75, 49),<br>&nbsp; (10929, 77, 15),<br>&nbsp; (10930, 21, 36),<br>&nbsp; (10930, 27, 
        25),<br>&nbsp; (10930, 55, 25),<br>&nbsp; (10930, 58, 30),<br>&nbsp; (10931, 13, 42),<br>&nbsp; 
        (10931, 57, 30),<br>&nbsp; (10932, 16, 30),<br>&nbsp; (10932, 62, 14),<br>&nbsp; (10932, 72, 
        16),<br>&nbsp; (10932, 75, 20),<br>&nbsp; (10933, 53, 2),<br>&nbsp; (10933, 61, 30),<br>&nbsp; 
        (10934, 6, 20),<br>&nbsp; (10935, 1, 21),<br>&nbsp; (10935, 18, 4),<br>&nbsp; (10935, 23, 8),<br>&nbsp; 
        (10936, 36, 30),<br>&nbsp; (10937, 28, 8),<br>&nbsp; (10937, 34, 20),<br>&nbsp; (10938, 13, 
        20),<br>&nbsp; (10938, 43, 24),<br>&nbsp; (10938, 60, 49),<br>&nbsp; (10938, 71, 35),<br>&nbsp; 
        (10939, 2, 10),<br>&nbsp; (10939, 67, 40),<br>&nbsp; (10940, 7, 8),<br>&nbsp; (10940, 13, 
        20),<br>&nbsp; (10941, 31, 44),<br>&nbsp; (10941, 62, 30),<br>&nbsp; (10941, 68, 80),<br>&nbsp; 
        (10941, 72, 50),<br>&nbsp; (10942, 49, 28),<br>&nbsp; (10943, 13, 15),<br>&nbsp; (10943, 22, 
        21),<br>&nbsp; (10943, 46, 15),<br>&nbsp; (10944, 11, 5),<br>&nbsp; (10944, 44, 18),<br>&nbsp; 
        (10944, 56, 18),<br>&nbsp; (10945, 13, 20),<br>&nbsp; (10945, 31, 10),<br>&nbsp; (10946, 10, 
        25),<br>&nbsp; (10946, 24, 25),<br>&nbsp; (10946, 77, 40),<br>&nbsp; (10947, 59, 4),<br>&nbsp; 
        (10948, 50, 9),<br>&nbsp; (10948, 51, 40),<br>&nbsp; (10948, 55, 4),<br>&nbsp; (10949, 6, 
        12),<br>&nbsp; (10949, 10, 30),<br>&nbsp; (10949, 17, 6),<br>&nbsp; (10949, 62, 60),<br>&nbsp; 
        (10950, 4, 5),<br>&nbsp; (10951, 33, 15),<br>&nbsp; (10951, 41, 6),<br>&nbsp; (10951, 75, 
        50),<br>&nbsp; (10952, 6, 16),<br>&nbsp; (10952, 28, 2),<br>&nbsp; (10953, 20, 50),<br>&nbsp; 
        (10953, 31, 50),<br>&nbsp; (10954, 16, 28),<br>&nbsp; (10954, 31, 25),<br>&nbsp; (10954, 45, 
        30),<br>&nbsp; (10954, 60, 24),<br>&nbsp; (10955, 75, 12),<br>&nbsp; (10956, 21, 12),<br>&nbsp; 
        (10956, 47, 14),<br>&nbsp; (10956, 51, 8),<br>&nbsp; (10957, 30, 30),<br>&nbsp; (10957, 35, 
        40),<br>&nbsp; (10957, 64, 8),<br>&nbsp; (10958, 5, 20),<br>&nbsp; (10958, 7, 6),<br>&nbsp; (10958, 
        72, 5),<br>&nbsp; (10959, 75, 20),<br>&nbsp; (10960, 24, 10),<br>&nbsp; (10960, 41, 24),<br>&nbsp; 
        (10961, 52, 6),<br>&nbsp; (10961, 76, 60),<br>&nbsp; (10962, 7, 45),<br>&nbsp; (10962, 13, 
        77),<br>&nbsp; (10962, 53, 20),<br>&nbsp; (10962, 69, 9),<br>&nbsp; (10962, 76, 44),<br>&nbsp; 
        (10963, 60, 2),<br>&nbsp; (10964, 18, 6),<br>&nbsp; (10964, 38, 5),<br>&nbsp; (10964, 69, 
        10),<br>&nbsp; (10965, 51, 16),<br>&nbsp; (10966, 37, 8),<br>&nbsp; (10966, 56, 12),<br>&nbsp; 
        (10966, 62, 12),<br>&nbsp; (10967, 19, 12),<br>&nbsp; (10967, 49, 40),<br>&nbsp; (10968, 12, 
        30),<br>&nbsp; (10968, 24, 30),<br>&nbsp; (10968, 64, 4),<br>&nbsp; (10969, 46, 9),<br>&nbsp; 
        (10970, 52, 40),<br>&nbsp; (10971, 29, 14),<br>&nbsp; (10972, 17, 6),<br>&nbsp; (10972, 33, 
        7),<br>&nbsp; (10973, 26, 5),<br>&nbsp; (10973, 41, 6),<br>&nbsp; (10973, 75, 10),<br>&nbsp; (10974, 
        63, 10),<br>&nbsp; (10975, 8, 16),<br>&nbsp; (10975, 75, 10),<br>&nbsp; (10976, 28, 20),<br>&nbsp; 
        (10977, 39, 30),<br>&nbsp; (10977, 47, 30),<br>&nbsp; (10977, 51, 10),<br>&nbsp; (10977, 63, 
        20),<br>&nbsp; (10978, 8, 20),<br>&nbsp; (10978, 21, 40),<br>&nbsp; (10978, 40, 10),<br>&nbsp; 
        (10978, 44, 6),<br>&nbsp; (10979, 7, 18),<br>&nbsp; (10979, 12, 20),<br>&nbsp; (10979, 24, 
        80),<br>&nbsp; (10979, 27, 30),<br>&nbsp; (10979, 31, 24),<br>&nbsp; (10979, 63, 35),<br>&nbsp; 
        (10980, 75, 40),<br>&nbsp; (10981, 38, 60),<br>&nbsp; (10982, 7, 20),<br>&nbsp; (10982, 43, 
        9),<br>&nbsp; (10983, 13, 84),<br>&nbsp; (10983, 57, 15),<br>&nbsp; (10984, 16, 55),<br>&nbsp; 
        (10984, 24, 20),<br>&nbsp; (10984, 36, 40),<br>&nbsp; (10985, 16, 36),<br>&nbsp; (10985, 18, 
        8),<br>&nbsp; (10985, 32, 35),<br>&nbsp; (10986, 11, 30),<br>&nbsp; (10986, 20, 15),<br>&nbsp; 
        (10986, 76, 10),<br>&nbsp; (10986, 77, 15),<br>&nbsp; (10987, 7, 60),<br>&nbsp; (10987, 43, 
        6),<br>&nbsp; (10987, 72, 20),<br>&nbsp; (10988, 7, 60),<br>&nbsp; (10988, 62, 40),<br>&nbsp; 
        (10989, 6, 40),<br>&nbsp; (10989, 11, 15),<br>&nbsp; (10989, 41, 4),<br>&nbsp; (10990, 21, 
        65),<br>&nbsp; (10990, 34, 60),<br>&nbsp; (10990, 55, 65),<br>&nbsp; (10990, 61, 66),<br>&nbsp; 
        (10991, 2, 50),<br>&nbsp; (10991, 70, 20),<br>&nbsp; (10991, 76, 90),<br>&nbsp; (10992, 72, 
        2),<br>&nbsp; (10993, 29, 50),<br>&nbsp; (10993, 41, 35),<br>&nbsp; (10994, 59, 18),<br>&nbsp; 
        (10995, 51, 20),<br>&nbsp; (10995, 60, 4),<br>&nbsp; (10996, 42, 40),<br>&nbsp; (10997, 32, 
        50),<br>&nbsp; (10997, 46, 20),<br>&nbsp; (10997, 52, 20),<br>&nbsp; (10998, 24, 12),<br>&nbsp; 
        (10998, 61, 7),<br>&nbsp; (10998, 74, 20),<br>&nbsp; (10998, 75, 30),<br>&nbsp; (10999, 41, 
        20),<br>&nbsp; (10999, 51, 15),<br>&nbsp; (10999, 77, 21),<br>&nbsp; (11000, 4, 25),<br>&nbsp; 
        (11000, 24, 30),<br>&nbsp; (11000, 77, 30),<br>&nbsp; (11001, 7, 60),<br>&nbsp; (11001, 22, 
        25),<br>&nbsp; (11001, 46, 25),<br>&nbsp; (11001, 55, 6),<br>&nbsp; (11002, 13, 56),<br>&nbsp; 
        (11002, 35, 15),<br>&nbsp; (11002, 42, 24),<br>&nbsp; (11002, 55, 40),<br>&nbsp; (11003, 1, 
        4),<br>&nbsp; (11003, 40, 10),<br>&nbsp; (11003, 52, 10),<br>&nbsp; (11004, 26, 6),<br>&nbsp; 
        (11004, 76, 6),<br>&nbsp; (11005, 1, 2),<br>&nbsp; (11005, 59, 10),<br>&nbsp; (11006, 1, 8),<br>&nbsp; 
        (11006, 29, 2),<br>&nbsp; (11007, 8, 30),<br>&nbsp; (11007, 29, 10),<br>&nbsp; (11007, 42, 
        14),<br>&nbsp; (11008, 28, 70),<br>&nbsp; (11008, 34, 90),<br>&nbsp; (11008, 71, 21),<br>&nbsp; 
        (11009, 24, 12),<br>&nbsp; (11009, 36, 18),<br>&nbsp; (11009, 60, 9),<br>&nbsp; (11010, 7, 
        20),<br>&nbsp; (11010, 24, 10),<br>&nbsp; (11011, 58, 40),<br>&nbsp; (11011, 71, 20),<br>&nbsp; 
        (11012, 19, 50),<br>&nbsp; (11012, 60, 36),<br>&nbsp; (11012, 71, 60),<br>&nbsp; (11013, 23, 
        10),<br>&nbsp; (11013, 42, 4),<br>&nbsp; (11013, 45, 20),<br>&nbsp; (11013, 68, 2),<br>&nbsp; 
        (11014, 41, 28),<br>&nbsp; (11015, 30, 15),<br>&nbsp; (11015, 77, 18),<br>&nbsp; (11016, 31, 
        15),<br>&nbsp; (11016, 36, 16),<br>&nbsp; (11017, 3, 25),<br>&nbsp; (11017, 59, 110),<br>&nbsp; 
        (11017, 70, 30),<br>&nbsp; (11018, 12, 20),<br>&nbsp; (11018, 18, 10),<br>&nbsp; (11018, 56, 
        5),<br>&nbsp; (11019, 46, 3),<br>&nbsp; (11019, 49, 2),<br>&nbsp; (11020, 10, 24),<br>&nbsp; (11021, 
        2, 11),<br>&nbsp; (11021, 20, 15),<br>&nbsp; (11021, 26, 63),<br>&nbsp; (11021, 51, 44),<br>&nbsp; 
        (11021, 72, 35),<br>&nbsp; (11022, 19, 35),<br>&nbsp; (11022, 69, 30),<br>&nbsp; (11023, 7, 
        4),<br>&nbsp; (11023, 43, 30),<br>&nbsp; (11024, 26, 12),<br>&nbsp; (11024, 33, 30),<br>&nbsp; 
        (11024, 65, 21),<br>&nbsp; (11024, 71, 50),<br>&nbsp; (11025, 1, 10),<br>&nbsp; (11025, 13, 
        20),<br>&nbsp; (11026, 18, 8),<br>&nbsp; (11026, 51, 10),<br>&nbsp; (11027, 24, 30),<br>&nbsp; 
        (11027, 62, 21),<br>&nbsp; (11028, 55, 35),<br>&nbsp; (11028, 59, 24),<br>&nbsp; (11029, 56, 
        20),<br>&nbsp; (11029, 63, 12),<br>&nbsp; (11030, 2, 100),<br>&nbsp; (11030, 5, 70),<br>&nbsp; 
        (11030, 29, 60),<br>&nbsp; (11030, 59, 100),<br>&nbsp; (11031, 1, 45),<br>&nbsp; (11031, 13, 
        80),<br>&nbsp; (11031, 24, 21),<br>&nbsp; (11031, 64, 20),<br>&nbsp; (11031, 71, 16),<br>&nbsp; 
        (11032, 36, 35),<br>&nbsp; (11032, 38, 25),<br>&nbsp; (11032, 59, 30),<br>&nbsp; (11033, 53, 
        70),<br>&nbsp; (11033, 69, 36),<br>&nbsp; (11034, 21, 15),<br>&nbsp; (11034, 44, 12),<br>&nbsp; 
        (11034, 61, 6),<br>&nbsp; (11035, 1, 10),<br>&nbsp; (11035, 35, 60),<br>&nbsp; (11035, 42, 
        30),<br>&nbsp; (11035, 54, 10),<br>&nbsp; (11036, 13, 7),<br>&nbsp; (11036, 59, 30),<br>&nbsp; 
        (11037, 70, 4),<br>&nbsp; (11038, 40, 5),<br>&nbsp; (11038, 52, 2),<br>&nbsp; (11038, 71, 
        30),<br>&nbsp; (11039, 28, 20),<br>&nbsp; (11039, 35, 24),<br>&nbsp; (11039, 49, 60),<br>&nbsp; 
        (11039, 57, 28),<br>&nbsp; (11040, 21, 20),<br>&nbsp; (11041, 2, 30),<br>&nbsp; (11041, 63, 
        30),<br>&nbsp; (11042, 44, 15),<br>&nbsp; (11042, 61, 4),<br>&nbsp; (11043, 11, 10),<br>&nbsp; 
        (11044, 62, 12),<br>&nbsp; (11045, 33, 15),<br>&nbsp; (11045, 51, 24),<br>&nbsp; (11046, 12, 
        20),<br>&nbsp; (11046, 32, 15),<br>&nbsp; (11046, 35, 18),<br>&nbsp; (11047, 1, 25),<br>&nbsp; 
        (11047, 5, 30),<br>&nbsp; (11048, 68, 42),<br>&nbsp; (11049, 2, 10),<br>&nbsp; (11049, 12, 
        4),<br>&nbsp; (11050, 76, 50),<br>&nbsp; (11051, 24, 10),<br>&nbsp; (11052, 43, 30),<br>&nbsp; 
        (11052, 61, 10),<br>&nbsp; (11053, 18, 35),<br>&nbsp; (11053, 32, 20),<br>&nbsp; (11053, 64, 
        25),<br>&nbsp; (11054, 33, 10),<br>&nbsp; (11054, 67, 20),<br>&nbsp; (11055, 24, 15),<br>&nbsp; 
        (11055, 25, 15),<br>&nbsp; (11055, 51, 20),<br>&nbsp; (11055, 57, 20),<br>&nbsp; (11056, 7, 
        40),<br>&nbsp; (11056, 55, 35),<br>&nbsp; (11056, 60, 50),<br>&nbsp; (11057, 70, 3),<br>&nbsp; 
        (11058, 21, 3),<br>&nbsp; (11058, 60, 21),<br>&nbsp; (11058, 61, 4),<br>&nbsp; (11059, 13, 
        30),<br>&nbsp; (11059, 17, 12),<br>&nbsp; (11059, 60, 35),<br>&nbsp; (11060, 60, 4),<br>&nbsp; 
        (11060, 77, 10),<br>&nbsp; (11061, 60, 15),<br>&nbsp; (11062, 53, 10),<br>&nbsp; (11062, 70, 
        12),<br>&nbsp; (11063, 34, 30),<br>&nbsp; (11063, 40, 40),<br>&nbsp; (11063, 41, 30),<br>&nbsp; 
        (11064, 17, 77),<br>&nbsp; (11064, 41, 12),<br>&nbsp; (11064, 53, 25),<br>&nbsp; (11064, 55, 
        4),<br>&nbsp; (11064, 68, 55),<br>&nbsp; (11065, 30, 4),<br>&nbsp; (11065, 54, 20),<br>&nbsp; 
        (11066, 16, 3),<br>&nbsp; (11066, 19, 42),<br>&nbsp; (11066, 34, 35),<br>&nbsp; (11067, 41, 
        9),<br>&nbsp; (11068, 28, 8),<br>&nbsp; (11068, 43, 36),<br>&nbsp; (11068, 77, 28),<br>&nbsp; 
        (11069, 39, 20),<br>&nbsp; (11070, 1, 40),<br>&nbsp; (11070, 2, 20),<br>&nbsp; (11070, 16, 
        30),<br>&nbsp; (11070, 31, 20),<br>&nbsp; (11071, 7, 15),<br>&nbsp; (11071, 13, 10),<br>&nbsp; 
        (11072, 2, 8),<br>&nbsp; (11072, 41, 40),<br>&nbsp; (11072, 50, 22),<br>&nbsp; (11072, 64, 
        130),<br>&nbsp; (11073, 11, 10),<br>&nbsp; (11073, 24, 20),<br>&nbsp; (11074, 16, 14),<br>&nbsp; 
        (11075, 2, 10),<br>&nbsp; (11075, 46, 30),<br>&nbsp; (11075, 76, 2),<br>&nbsp; (11076, 6, 
        20),<br>&nbsp; (11076, 14, 20),<br>&nbsp; (11076, 19, 10),<br>&nbsp; (11077, 2, 24),<br>&nbsp; 
        (11077, 3, 4),<br>&nbsp; (11077, 4, 1),<br>&nbsp; (11077, 6, 1),<br>&nbsp; (11077, 7, 1),<br>&nbsp; 
        (11077, 8, 2),<br>&nbsp; (11077, 10, 1),<br>&nbsp; (11077, 12, 2),<br>&nbsp; (11077, 13, 4),<br>&nbsp; 
        (11077, 14, 1),<br>&nbsp; (11077, 16, 2),<br>&nbsp; (11077, 20, 1),<br>&nbsp; (11077, 23, 2),<br>&nbsp; 
        (11077, 32, 1),<br>&nbsp; (11077, 39, 2),<br>&nbsp; (11077, 41, 3),<br>&nbsp; (11077, 46, 3),<br>&nbsp; 
        (11077, 52, 2),<br>&nbsp; (11077, 55, 2),<br>&nbsp; (11077, 60, 2),<br>&nbsp; (11077, 64, 2),<br>&nbsp; 
        (11077, 66, 1),<br>&nbsp; (11077, 73, 2),<br>&nbsp; (11077, 75, 4),<br>&nbsp; (11077, 77, 2);
  </div>
</div>


<div class="w3-example">
<h3>Result</h3>
  <div class="w3-code notranslate w3-black">
    INSERT 0 2155
  </div>
</div>

<p>The result can also be seen here:
<a href="trypostgresql.php?filename=demo_order_details&resultonly=true" target="_blank">
Demo Database - order_details</a>
</p>
<hr>
<h2>TESTPRODUCTS</h2>

<p>We will also add a table called <code class="w3-codespan">testproducts</code> for demonstration purposes later in the tutorial.</p>

<p>
The following SQL statement will create a table named 
<code class="w3-codespan">testproducts</code>:</p>

<div class="w3-example">
<h3>CREATE TABLE testproducts</h3>
  <div class="w3-code notranslate w3-black shellcommands">
        CREATE TABLE testproducts (<br>&nbsp; testproduct_id SERIAL NOT NULL 
        PRIMARY KEY,<br>&nbsp; product_name VARCHAR(255),<br>&nbsp; category_id 
        INT<br>);
  </div>
</div>


<div class="w3-example">
<h3>Result</h3>
  <div class="w3-code notranslate w3-black">
    CREATE TABLE
  </div>
</div>

<p>We will fill the table with 10 dummy products:</p>

<div class="w3-example">
<h3>INSERT INTO testproducts</h3>
  <div class="w3-code notranslate w3-black shellcommands" style="height:220px;overflow:auto;">
INSERT INTO testproducts (product_name, category_id)<br>VALUES<br>
&nbsp; ('Johns Fruit Cake', 3),<br>
&nbsp; ('Marys Healthy Mix', 9),<br>
&nbsp; ('Peters Scary Stuff', 10),<br>
&nbsp; ('Jims Secret Recipe', 11),<br>
&nbsp; ('Elisabeths Best Apples', 12),<br>
&nbsp; ('Janes Favorite Cheese', 4),<br>
&nbsp; ('Billys Home Made Pizza', 13),<br>
&nbsp; ('Ellas Special Salmon', 8),<br>
&nbsp; ('Roberts Rich Spaghetti', 5),<br>
&nbsp; ('Mias Popular Ice', 14);
  </div>
</div>


<div class="w3-example">
<h3>Result</h3>
  <div class="w3-code notranslate w3-black">
    INSERT 0 10
  </div>
</div>

<p>The result can also be seen here:
<a href="trypostgresql.php?filename=demo_testproducts" target="_blank">
Demo Database - testproducts</a>
</p>


<hr>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn" href="postgresql_drop_table.php">&#10094; Previous</a>
<a class="w3-right w3-btn" href="postgresql_operators.php">Next &#10095;</a>
</div>
<div
  id="user-profile-bottom-wrapper"
  class="user-profile-bottom-wrapper"
>
  <div class="user-authenticated w3-hide">
    <a
      href="https://profile.w3schools.com/log-in?redirect_url=https%3A%2F%2Fmy-learning.w3schools.com"
      class="user-profile-btn user-profile-bottom-btn ga-bottom ga-bottom-profile"
      title="Your W3Schools Profile"
      aria-label="Your W3Schools Profile"
      target="_top"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        version="1.1"
        viewBox="0 0 2048 2048"
        class="user-profile-icon"
        aria-label="Your W3Schools Profile Icon"
      >
        <path
          d="M 843.500 1148.155 C 837.450 1148.515, 823.050 1149.334, 811.500 1149.975 C 742.799 1153.788, 704.251 1162.996, 635.391 1192.044 C 517.544 1241.756, 398.992 1352.262, 337.200 1470 C 251.831 1632.658, 253.457 1816.879, 340.500 1843.982 C 351.574 1847.431, 1696.426 1847.431, 1707.500 1843.982 C 1794.543 1816.879, 1796.169 1632.658, 1710.800 1470 C 1649.008 1352.262, 1530.456 1241.756, 1412.609 1192.044 C 1344.588 1163.350, 1305.224 1153.854, 1238.500 1150.039 C 1190.330 1147.286, 1196.307 1147.328, 1097 1149.035 C 1039.984 1150.015, 1010.205 1150.008, 950 1149.003 C 851.731 1147.362, 856.213 1147.398, 843.500 1148.155"
          stroke="none"
          fill="#2a93fb"
          fill-rule="evenodd"
        />
        <path
          d="M 1008 194.584 C 1006.075 194.809, 999.325 195.476, 993 196.064 C 927.768 202.134, 845.423 233.043, 786 273.762 C 691.987 338.184, 622.881 442.165, 601.082 552 C 588.496 615.414, 592.917 705.245, 611.329 760.230 C 643.220 855.469, 694.977 930.136, 763.195 979.321 C 810.333 1013.308, 839.747 1026.645, 913.697 1047.562 C 1010.275 1074.879, 1108.934 1065.290, 1221 1017.694 C 1259.787 1001.221, 1307.818 965.858, 1339.852 930.191 C 1460.375 795.998, 1488.781 609.032, 1412.581 451.500 C 1350.098 322.327, 1240.457 235.724, 1097.500 202.624 C 1072.356 196.802, 1025.206 192.566, 1008 194.584"
          stroke="none"
          fill="#0aaa8a"
          fill-rule="evenodd"
        />
      </svg>

      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="user-progress"
        aria-label="Your W3Schools Profile Progress"
      >
        <path
          class="user-progress-circle1"
          fill="none"
          d="M 25.99650934151373 15.00000030461742 A 20 20 0 1 0 26 15"
        ></path>
        <path
          class="user-progress-circle2"
          fill="none"
          d="M 26 15 A 20 20 0 0 0 26 15"
        ></path>
      </svg>

      <span class="user-progress-star">&#x2605;</span>

      <span class="user-progress-point">+1</span>
    </a>
  </div>

  <div class="w3s-pathfinder -teaser user-anonymous w3-hide">
  <div class="track-progress-btn-wrapper">
    <a
    href="https://profile.w3schools.com/log-in?redirect_url=https%3A%2F%2Fpathfinder.w3schools.com"
    class="-login-btn w3-button ga-bottom ga-bottom-login track-progress-btn"
    title="Sign in to track your progress"
    aria-label="Sign in to track your progress"
    target="_blank"
  >
    Sign in to track progress
  </a>
    
  </div>
</div>

<style>
.w3s-pathfinder.-teaser {
  background-color: transparent!important;
}
.track-progress-btn-wrapper {
  display: flex;
  justify-content: center;
}
a.track-progress-btn {
  position: absolute;
  padding: 8px 20px;
  border: 1px solid #ddd;
  top:-65px;
  background-color: #fff;
  color: #333;
  border-radius: 5px;
  cursor: pointer;
  font-size: 18px;
}
@media screen and (max-width: 600px) {
  a.track-progress-btn {
    top: 6px;
    width: 100%;
  }
}
</style>

</div>

</div>
<div class="w3-col l2 m12" id="right">

<div class="sidesection" id="footer-skyscraper">
  <div id="skyscraper">
  </div>
</div>

<style>
.ribbon-vid {
  font-size:12px;
  font-weight:bold;
  padding: 6px 20px;
  left:-20px;
  top:-10px;
  text-align: center;
  color:black;
  border-radius:25px;
}
</style>
<div class="sidesection" style="position: relative;margin-top:20px;margin-bottom:20px;">
<a id="upperfeatureshowcaselink" class="ga-right ga-2026-summer-fullaccess" href="https://campus.w3schools.com/products/w3schools-full-access-course" target="_blank">
<picture id="upperfeatureshowcase">
  <source id="upperfeatureshowcase3001" srcset="/images/img_2026_summer_fullaccess_300.webp" media="(max-width: 990px)" style="border-radius: 5px;">
  <source id="upperfeatureshowcase120" srcset="/images/img_2026_summer_fullaccess_300.webp" media="(max-width: 1260px)" style="border-radius: 5px;">
  <source id="upperfeatureshowcase160" srcset="/images/img_2026_summer_fullaccess_300.webp" media="(max-width: 1700px)" style="border-radius: 5px;">
  <img id="upperfeatureshowcase300" src="/images/img_2026_summer_fullaccess_300.png" alt="Get Certified Offer" style="width:auto;border-radius: 5px;" loading="lazy">
</picture>
</a>
<div id="upperfeatureshowcase-text" style="display:none;"></div>
</div>

<div class="sidesection" style="margin-bottom:10px">
  <div class="sharethis">
    <a href="https://www.youtube.com/@w3schools" target="_blank" title="W3Schools on YouTube" rel="noopener"><span class="fa fa-youtube ga-right w3-hover-text-red" style="font-size:25px;"></span></a>
    <a href="https://www.linkedin.com/company/w3schools.com/" target="_blank" title="W3Schools on LinkedIn" rel="noopener"><span class="fa fa-linkedin-square ga-right" style="font-size:25px;"></span></a>
    <a href="https://discord.com/invite/w3schools" target="_blank" title='Join the W3schools community on Discord' rel="noopener"><span class="fa fa-discord ga-right" style="font-size:25px;"></span></a> 
    <a href="https://www.facebook.com/w3schoolscom/" target="_blank" title="W3Schools on Facebook" rel="noopener"><span class="fa fa-facebook-square ga-right" style="font-size:25px;"></span></a>
    <a href="https://www.instagram.com/w3schools.com_official/" target="_blank" title="W3Schools on Instagram" rel="noopener"><span class="fa fa-instagram ga-right" style="font-size:25px;"></span></a>
    <a href="https://www.tiktok.com/@w3schools.com" target="_blank" title="New: W3Schools on TikTok" rel="noopener"><span class="fa fa-tiktok ga-right w3-hover-text-grey" style="font-size:20px;"></span></a>
  </div>
</div>


<div id="vidpos" class="sidesection" style="text-align:center;margin-bottom:0;height:0;">
</div>


<div id="stickypos" class="sidesection" style="text-align:center;position:sticky;top:50px;">
  <div id="stickyadcontainer">
    <div style="position:relative;margin:auto;">
    </div>
    <p class="remove-ads-container" style="margin-bottom:5px;"><a class="remove-ads ga-right ga-remove-ads" href="https://order.w3schools.com/plans" target="_blank">REMOVE ADS</a></p>
  </div>
</div>
</div>
</div>
  <div id="footer" class="footer w3-container w3-white">
  <hr>
  <div id="bottomads" style="overflow:auto">
  </div>
</div>

</div>
</div>
</div>
<div id="wrappercontainer">
<style>
#wrappercontainer {
  width:100%;
  height:100px;
  background-color:red;
  position:relative;
  z-index:2;
}
#footerwrapper {
  background-color: #282A35;
/*  background-image:url('/images/background_in_space.webp');
  background-repeat: repeat;
  background-position: right bottom;*/
}
#spacemyfooter {
  padding:40px 80px 20px 80px;
  max-width:1500px;
  margin:auto;
}
.footerlinks_1 {
  width:auto;
  float:left;
  padding:40px 60px;
  color:#FFF4A3;
  font-family: Source Sans Pro, sans-serif;
  font-size:15px;
}
.footerlinks_1 .fa-logo {
  font-size:46px!important;
  color:#ddd;
}
.footerlinks_1:nth-child(1) {
  padding:30px 10px 30px 40px;
}
.footerlinks_1 a{
  text-decoration:none;
}
.footerlinks_1 a:hover,.footerlinks_1 a:active{
  text-decoration:underline;
  color:#FFF4A3;
}
.footerlinks_1 a:hover,.footerlinks_1 a:active{
  text-decoration:underline;
  color:#FFF4A3!;
}
.footerlinks_1 a:hover i{
  color:#FFF4A3!important;
}
.footerlinks_2 {
  width:auto;
  float:left;
  padding-left:90px;
  padding-right:135px;
  color:#ddd;
  font-family: Source Sans Pro, sans-serif;
  font-size:12px;
  line-height:15px;
  text-align:center;
}
.footerlinks_2:nth-child(4) {
  padding-right:0;
}
.footerlinks_2 h5 {
  margin-bottom:20px;
}
.footerlinks_2 a:visited,.footerlinks_2 a:link{
  text-decoration:none;
}
.footerlinks_2 a:hover,.footerlinks_2 a:active{
  color:#FFF4A3;
}
.footersome {
  padding:60px 40px 10px 40px;
  color:#ddd;
  font-size:20px;
  text-align:center;
}
.footersome a {
  margin-right:10px;
}
.footersome a:hover,.footersome a:active{
  color:#FFF4A3;
}
.footersome .textlink {
  font-size:15px;
  text-decoration:none;
}
.footersome .textlink:active,.footersome .textlink:hover {
  text-decoration:underline;
}
.footertext {
  color:#ddd;
  font-size:12px;
  line-height:15px;
  text-align:center;
}
.footertext a:hover,.footertext a:active{
  color:#FFF4A3;
}
@media screen and (max-width: 992px) {
  #wrappercontainer {
    z-index:0;
  }
  .footerlinks_1 {
    width:100%;
    margin:auto;
    float:none;
    text-align:center;
    padding:10px 20px!important;
    font-size:20px;
  }
  .footerlinks_1:nth-child(1) {
    padding:40px 20px;
  }
  .footerlinks_2 {
    width:100%;
    float:none;
    margin:auto;
    font-size:16px;
    line-height:20px;
    padding:0;
  }
  .footerlinks_2 h5 {
    font-size:26px;
    margin-top:40px;
  }
  .footertext {
    padding:0;
  }
  .footer-hide-special {
    display:none;
  }
}
/*
@media screen and (max-width: 992px) {
  #footerwrapper {
    background-image:url('/images/background_in_space.webp');
    background-color: #282A35;
    background-repeat: repeat;
    background-position: left top;
  }
}*/
</style>
<div id="footerwrapper">

<style>
@media screen and (max-width: 1450px) {
  #spacemyfooter {
    max-width:1100px;
  }
  .footerlinks_1 {
    padding-left:30px;
    padding-right:30px;
  }
  .footerlinks_2 {
    padding-right:30px;
  }
  .footerlinks_2:nth-child(1) {
    padding-left:50px;
  }
  .footer-hide-special {
    display:none;
  }
}
@media screen and (max-width: 1100px) {
  #spacemyfooter {
    max-width:1000px;
  }
  .footerlinks_1 {
    padding-left:20px;
    padding-right:20px;
  }
  .footerlinks_2 {
    padding-right:20px;
  }
  .footerlinks_2:nth-child(1) {
    padding-left:20px;
  }
}
</style>
<div id="spacemyfooter">




<div style="overflow:hidden;">
<div class="footerlinks_1">
  <a href="//www.w3schools.com" class="ga-bottom" aria-label="W3Schools.com" alt="W3Schools.com">
    <i class="fa fa-logo"></i>
  </a>
</div>
<div class="footerlinks_1"><a href="https://order.w3schools.com/plans" title="Become a PLUS user and unlock powerful features" class="ga-bottom ga-bottom-plus" target="_blank">PLUS</a></div>
<div class="footerlinks_1"><a href="/spaces/index.php" title="Get your own website with W3Schools Spaces" class="ga-bottom ga-bottom-spaces">SPACES</a></div>
<div class="footerlinks_1"><a href="https://campus.w3schools.com/collections/certifications" title="Document your knowledge by getting certified" target="_blank" class="ga-bottom ga-bottom-cert">GET CERTIFIED</a></div>
<div class="footerlinks_1"><a href="/academy/index.php" title="Contact us about W3Schools Academy for educational institutions" class="ga-bottom ga-bottom-teachers">FOR TEACHERS</a></div>
<div class="footerlinks_1"><a href="/bootcamp/index.php" title="W3Schools Bootcamps">BOOTCAMPS</a></div>
<div class="footerlinks_1"><a href="javascript:void(0);" title="Contact us about sales or errors" onclick="reportError();return false">CONTACT US</a></div>
</div>
<style>
/*Remove this style after 20. April 2024*/
#err_message {
  padding:8px 16px 16px 40px;
  border-radius:5px;
  display:none;
  position:relative;
  background-color:#2D3748;
  color:#FFF4A3;
  font-family:'Source Sans Pro', sans-serif;
}
#err_message h2 {
  font-family:'Source Sans Pro', sans-serif;
}
#err_message p {
  color:#f1f1f1;
}
#err_message #close_err_message {
  position:absolute;
  right:0;
  top:0;
  font-size:20px;
  cursor:pointer;
  width:30px;
  height:30px;
  text-align:center;
}
#err_message #close_err_message:hover {
  background-color:#FFF4A3;
  color:#2D3748;
  border-radius:50%
}
</style>

<div id="err_message">
  <span id="close_err_message" onclick="this.parentElement.style.display='none'">&times;</span>
  <h2>Contact Sales</h2>
  <p>If you want to use W3Schools services as an educational institution, team or enterprise, send us an e-mail:<br>sales@w3schools.com</p>
  <h2>Report Error</h2>
  <p>If you want to report an error, or if you want to make a suggestion, send us an e-mail:<br>help@w3schools.com</p>
</div>


<div style="overflow:hidden;">
<div class="footerlinks_2">
  <h5 style="font-family: 'Source Sans Pro', sans-serif;">Top Tutorials</h5>
  <a href="/html/default.asp" class="ga-bottom">HTML Tutorial</a><br>
  <a href="/css/default.asp" class="ga-bottom">CSS Tutorial</a><br>
  <a href="/js/default.asp" class="ga-bottom">JavaScript Tutorial</a><br>
  <a href="/howto/default.asp" class="ga-bottom">How To Tutorial</a><br>
  <a href="/sql/default.asp" class="ga-bottom">SQL Tutorial</a><br>
  <a href="/python/default.asp" class="ga-bottom">Python Tutorial</a><br>
  <a href="/w3css/default.asp" class="ga-bottom">W3.CSS Tutorial</a><br>
  <a href="/bootstrap/bootstrap_ver.asp" class="ga-bottom">Bootstrap Tutorial</a><br>
  <a href="/php/default.asp" class="ga-bottom">PHP Tutorial</a><br>
  <a href="/java/default.asp" class="ga-bottom">Java Tutorial</a><br>
  <a href="/cpp/default.asp" class="ga-bottom">C++ Tutorial</a><br>
  <a href="/jquery/default.asp" class="ga-bottom">jQuery Tutorial</a><br>
</div>
<div class="footerlinks_2">
  <h5 style="font-family: 'Source Sans Pro', sans-serif;">Top References</h5>
  <a href="/tags/default.asp" class="ga-bottom">HTML Reference</a><br>
  <a href="/cssref/index.php" class="ga-bottom">CSS Reference</a><br>
  <a href="/jsref/default.asp" class="ga-bottom">JavaScript Reference</a><br>
  <a href="/sql/sql_ref_keywords.asp" class="ga-bottom">SQL Reference</a><br>
  <a href="/python/python_reference.asp" class="ga-bottom">Python Reference</a><br>
  <a href="/w3css/w3css_references.asp" class="ga-bottom">W3.CSS Reference</a><br>
  <a href="/bootstrap/bootstrap_ref_all_classes.asp" class="ga-bottom">Bootstrap Reference</a><br>
  <a href="/php/php_ref_overview.asp" class="ga-bottom">PHP Reference</a><br>
  <a href="/colors/colors_names.asp" class="ga-bottom">HTML Colors</a><br>
  <a href="/java/java_ref_keywords.asp" class="ga-bottom">Java Reference</a><br>
  <a href="/angularjs/angularjs_ref_directives.asp" class="ga-bottom">AngularJS Reference</a><br>
  <a href="/jquery/jquery_ref_overview.asp" class="ga-bottom">jQuery Reference</a><br>
</div>
<div class="footerlinks_2">
  <h5 style="font-family: 'Source Sans Pro', sans-serif;">Top Examples</h5>
  <a href="/html/html_examples.asp" class="ga-bottom">HTML Examples</a><br>
  <a href="/css/css_examples.asp" class="ga-bottom">CSS Examples</a><br>
  <a href="/js/js_examples.asp" class="ga-bottom">JavaScript Examples</a><br>
  <a href="/howto/default.asp" class="ga-bottom">How To Examples</a><br>
  <a href="/sql/sql_examples.asp" class="ga-bottom">SQL Examples</a><br>
  <a href="/python/python_examples.asp" class="ga-bottom">Python Examples</a><br>
  <a href="/w3css/w3css_examples.asp" class="ga-bottom">W3.CSS Examples</a><br>
  <a href="/bootstrap/bootstrap_examples.asp" class="ga-bottom">Bootstrap Examples</a><br>
  <a href="/php/php_examples.asp" class="ga-bottom">PHP Examples</a><br>
  <a href="/java/java_examples.asp" class="ga-bottom">Java Examples</a><br>
  <a href="/xml/xml_examples.asp" class="ga-bottom">XML Examples</a><br>
  <a href="/jquery/jquery_examples.asp" class="ga-bottom">jQuery Examples</a><br>
</div>
<div class="footerlinks_2">
  <a href="https://campus.w3schools.com/collections/course-catalog" target="_blank" class="ga-bottom"><h5 style="font-family: 'Source Sans Pro', sans-serif;">Get Certified</h5></a>
  <a href="https://campus.w3schools.com/collections/certifications/products/html-certificate" target="_blank" class="ga-bottom">HTML Certificate</a><br>
  <a href="https://campus.w3schools.com/collections/certifications/products/css-certificate" target="_blank" class="ga-bottom">CSS Certificate</a><br>
  <a href="https://campus.w3schools.com/collections/certifications/products/javascript-certificate" target="_blank" class="ga-bottom">JavaScript Certificate</a><br>
  <a href="https://campus.w3schools.com/collections/certifications/products/front-end-certificate" target="_blank" class="ga-bottom">Front End Certificate</a><br>
  <a href="https://campus.w3schools.com/collections/certifications/products/sql-certificate" target="_blank" class="ga-bottom">SQL Certificate</a><br>
  <a href="https://campus.w3schools.com/collections/certifications/products/python-certificate" target="_blank" class="ga-bottom">Python Certificate</a><br>
  <a href="https://campus.w3schools.com/collections/certifications/products/php-certificate" target="_blank" class="ga-bottom">PHP Certificate</a><br>
  <a href="https://campus.w3schools.com/collections/certifications/products/jquery-certificate" target="_blank" class="ga-bottom">jQuery Certificate</a><br>
  <a href="https://campus.w3schools.com/collections/certifications/products/java-certificate" target="_blank" class="ga-bottom">Java Certificate</a><br>
  <a href="https://campus.w3schools.com/collections/certifications/products/c-certificate" target="_blank" class="ga-bottom">C++ Certificate</a><br>
  <a href="https://campus.w3schools.com/collections/certifications/products/c-certificate-1" target="_blank" class="ga-bottom">C# Certificate</a><br>
  <a href="https://campus.w3schools.com/collections/certifications/products/xml-certificate" target="_blank" class="ga-bottom">XML Certificate</a><br>
</div>
</div>


<div class="footersome">
  <a target="_blank" href="https://www.youtube.com/@w3schools" title="W3Schools on YouTube" rel="noopener"><i class="fa fa-youtube"></i></a>
  <a target="_blank" href="https://www.linkedin.com/company/w3schools.com/" title="W3Schools on LinkedIn" rel="noopener"><i class="fa">&#62220;</i></a>
  <a target="_blank" href="https://discord.com/invite/w3schools" title="Join the W3schools community on Discord" rel="noopener"><i class="fa">&#59399;</i></a>
  <a target="_blank" href="https://www.facebook.com/w3schoolscom/" title="W3Schools on Facebook" rel="noopener"><i class="fa">&#59398;</i></a>
  <a target="_blank" href="https://www.instagram.com/w3schools.com_official/" title="W3Schools on Instagram" rel="noopener"><i class="fa">&#61805;</i></a>
  <div class="w3-hide-large" style="margin-top:16px"></div>
  <a target="_blank" href="/forum/index.php" title="Forum" class="textlink">FORUM</a>
  <a target="_blank" href="/about/default.asp" title="About W3Schools" class="textlink">ABOUT</a>
  <a target="_blank" href="/academy/index.php"
     title="Contact us about W3Schools Academy for educational institutions and organizations" class="textlink ga-bottom-textlink-academy">ACADEMY</a>
</div>

<div class="footertext">
W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning.<br class="footer-hide-special">
Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness<br class="footer-hide-special">
of all content. While using W3Schools, you agree to have read and accepted our <a href="/about/about_copyright.asp" class="ga-bottom">terms of use</a>, 
<a style="cursor:pointer;text-decoration:underline" onclick="window.FastCMP.open();" class="ga-bottom">cookies</a> and 
<a href="/about/about_privacy.asp" class="ga-bottom">privacy policy</a>.<br><br>
<a href="/about/about_copyright.asp" class="ga-bottom">Copyright 1999-2026</a> by Refsnes Data. All Rights Reserved.
<a href="//www.w3schools.com/w3css/default.asp" class="ga-bottom">W3Schools is Powered by W3.CSS</a>.<br><br>
</div>
</div>
</div>
</div>
<!-- <script src="/lib/topnav/main.v1.0.108.js"></script> -->
<script src="/lib/w3schools_footer.js?update=20250924"></script>
<script src="/lib/w3schools_features.js?update=20260625"></script>
<script src="https://www.google.com/recaptcha/api.js?render=explicit"></script>

<script>
  MyLearning.loadUser('footer', function () {
    // if (!UserSession.loggedIn) {
    //  addMyLearnButt();
    // }
  });
  function docReady(fn) {
    document.addEventListener("DOMContentLoaded", fn);
    if (document.readyState === "interactive" || document.readyState === "complete" ) {
      fn();
    }
  }
  uic_prov_al();

const upperfeatureshowcaselink = document.getElementById("upperfeatureshowcaselink");
if (upperfeatureshowcaselink) {
 displayInternalFeatures();
}
/*
function addMyLearnButt() {
  let nav = document.getElementsByClassName("nextprev");
  if (document.body.contains(nav[1])) {
    if ((nav[1].firstElementChild.innerHTML.indexOf("Previous") || nav[1].firstElementChild.innerHTML.indexOf("Home") !== -1) && (nav[1].firstElementChild.nextElementSibling.innerHTML.indexOf("Next") !== -1)) {
      let myLearnButt = document.createElement("a");
      myLearnButt.innerHTML="Log in to track progress";
      myLearnButt.classList.add("w3-btn", "w3-hide-small", "myl-nav-butt");
      myLearnButt.href="https://www.w3schools.com/signup/?utm_source=classic&utm_medium=" + subjectFolder + "_tutorial&utm_campaign=button_lower_navigation";
      myLearnButt.setAttribute("title", "Sign Up and improve Your Learning Experience");
      myLearnButt.setAttribute("target", "_blank");
      nav[1].classList.add("w3-center");
      nav[1].firstElementChild.insertAdjacentElement("afterend", myLearnButt);
    }
  }
}
*/
</script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]--></body>
</html>