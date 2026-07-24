
<!DOCTYPE html>
<html lang="en-US">
<head><title>Node.js Microservices</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="title" property="og:title" content="Node.js Microservices">
<meta name="Keywords" content="HTML, Python, CSS, SQL, JavaScript, How to, PHP, Java, C, C++, C#, jQuery, Bootstrap, Colors, W3.CSS, XML, MySQL, Icons, NodeJS, React, Graphics, Angular, R, AI, Git, Data Science, Code Game, Tutorials, Programming, Web Development, Training, Learning, Quiz, Exercises, Courses, Lessons, References, Examples, Learn to code, Source code, Demos, Tips, Website">
<meta name="Description" content="Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, Python, PHP, Bootstrap, Java, XML and more.">
<meta property="og:image" content="https://www.w3schools.com/images/og/nodejs/nodejs_microservices.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:description" content="Microservices is an architectural style that structures an application as a collection of small, loosely coupled services.">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@w3schools">
<meta name="twitter:title" content="Node.js Microservices">
<meta name="twitter:description" content="Microservices is an architectural style that structures an application as a collection of small, loosely coupled services.">
<meta name="twitter:image" content="https://www.w3schools.com/images/og/nodejs/nodejs_microservices.png">
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
<script data-cfasync=false data-no-optimize=1 data-wpmeteor-nooptimize=true nowprocket async charset=UTF-8 src=https://static.fastcmp.com/fast-cmp-stub.js></script>
<style>
#nav_tutorials,#nav_references,#nav_certified,#nav_services,#nav_exercises {display:none;letter-spacing:0;position:absolute;width:100%;background-color:#282A35;color:white;padding-bottom:40px;z-index: 5 !important;font-family: 'Source Sans Pro Topnav', sans-serif !important;}
</style>

<!-- Google Tag Manager -->
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

</head><body>

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
  background-color: #ebedee!important;font-weight:bold;
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

@media screen and (max-width: 992px){
  #subtopnav a.subtopnav_firstitem {
    margin-left:50px!important;
  }
}

#google_translate_element a{
  font-size:13px!important;

  line-height: normal;
}
#google_translate_element a:hover{
  background-color:#fff!important;  
  color:#000!important;    
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
    //console.log(i);
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
    <span onmousedown="scrollmenow(-1)" onmouseup="stopscrollmenow()" onmouseout="stopscrollmenow()">&nbsp;&nbsp;&nbsp;&#10094;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
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
  <a href="/htmlcss/default.asp" class="ga-nav" title="Introduction to HTML &amp; CSS">INTRO TO HTML &amp; CSS</a>
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
<!--  <a href='javascript:void(0)' onclick='close_menu()' class='w3-button w3-hide-large w3-large w3-display-topright' style='right:16px;padding:3px 12px;font-weight:bold;'>&times;</a>-->
<h2 class="left"><span class="left_h2">Node.js</span> Tutorial</h2>
<a target="_top" href="default.asp">Node HOME</a>
<a target="_top" href="nodejs_intro.asp">Node Intro</a>
<a target="_top" href="nodejs_get_started.asp">Node Get Started</a>
<a target="_top" href="nodejs_js_requirements.asp">Node JS Requirements</a>
<a target="_top" href="nodejs_vs_browser.asp">Node.js vs Browser</a>
<a target="_top" href="nodejs_command_line.asp">Node Cmd Line</a>
<a target="_top" href="nodejs_v8_engine.asp">Node V8 Engine</a>
<a target="_top" href="nodejs_architecture.asp">Node Architecture</a>
<a target="_top" href="nodejs_event_loop.asp">Node Event Loop</a>
<br>
<h2 class="left">Asynchronous</h2>
<a target="_top" href="nodejs_async.asp">Node Async</a>
<a target="_top" href="nodejs_promises.asp">Node Promises</a>
<a target="_top" href="nodejs_async_await.asp">Node Async/Await</a>
<a target="_top" href="nodejs_error_handling.asp">Node Errors Handling</a>
<br>
<h2 class="left">Module Basics</h2>
<a target="_top" href="nodejs_modules.asp">Node Modules</a>
<a target="_top" href="nodejs_modules_esm.asp">Node ES Modules</a>
<a target="_top" href="nodejs_npm.asp">Node NPM</a>
<a target="_top" href="nodejs_package_json.asp">Node package.json</a>
<a target="_top" href="nodejs_scripts.asp">Node NPM Scripts</a>
<a target="_top" href="nodejs_dependencies.asp">Node Manage Dep</a>
<a target="_top" href="nodejs_publish_package.asp">Node Publish Packages</a>
<br>
<h2 class="left">Core Modules</h2>
<a target="_top" href="nodejs_http.asp">HTTP Module</a>
<a target="_top" href="nodejs_https.asp">HTTPS Module</a>
<a target="_top" href="nodejs_filesystem.asp">File System (fs)</a>
<a target="_top" href="nodejs_path.asp">Path Module</a>
<a target="_top" href="nodejs_os.asp">OS Module</a>
<a target="_top" href="nodejs_url.asp">URL Module</a>
<a target="_top" href="nodejs_events.asp">Events Module</a>
<a target="_top" href="nodejs_streams.asp">Stream Module</a>
<a target="_top" href="nodejs_buffer.asp">Buffer Module</a>
<a target="_top" href="nodejs_crypto.asp">Crypto Module</a>
<a target="_top" href="nodejs_timers.asp">Timers Module</a>
<a target="_top" href="nodejs_dns.asp">DNS Module</a>
<a target="_top" href="nodejs_assert.asp">Assert Module</a>
<a target="_top" href="nodejs_util.asp">Util Module</a>
<a target="_top" href="nodejs_readline.asp">Readline Module</a>
<br>
<h2 class="left">JS & TS Features</h2>
<a target="_top" href="nodejs_es6.asp">Node ES6+</a>
<a target="_top" href="nodejs_process_management.asp">Node Process</a>
<a target="_top" href="nodejs_typescript.asp">Node TypeScript</a>
<a target="_top" href="nodejs_typescript_advanced.asp">Node Adv. TypeScript</a>
<a target="_top" href="nodejs_linting_formatting.asp">Node Lint & Formatting</a>
<br>
<h2 class="left">Building Applications</h2>
<a target="_top" href="nodejs_frameworks.asp">Node Frameworks</a>
<a target="_top" href="nodejs_express.asp">Express.js</a>
<a target="_top" href="nodejs_middleware.asp">Middleware Concept</a>
<a target="_top" href="nodejs_rest_api.asp">REST API Design</a>
<a target="_top" href="nodejs_api_auth.asp">API Authentication</a>
<a target="_top" href="nodejs_frontend.asp">Node.js with Frontend</a>
<br>
<h2 class="left">Database Integration</h2>
<a target="_top" href="nodejs_mysql.asp">MySQL Get Started</a>
<a target="_top" href="nodejs_mysql_create_db.asp">MySQL Create Database</a>
<a target="_top" href="nodejs_mysql_create_table.asp">MySQL Create Table</a>
<a target="_top" href="nodejs_mysql_insert.asp">MySQL Insert Into</a>
<a target="_top" href="nodejs_mysql_select.asp">MySQL Select From</a>
<a target="_top" href="nodejs_mysql_where.asp">MySQL Where</a>
<a target="_top" href="nodejs_mysql_orderby.asp">MySQL Order By</a>
<a target="_top" href="nodejs_mysql_delete.asp">MySQL Delete</a>
<a target="_top" href="nodejs_mysql_drop_table.asp">MySQL Drop Table</a>
<a target="_top" href="nodejs_mysql_update.asp">MySQL Update</a>
<a target="_top" href="nodejs_mysql_limit.asp">MySQL Limit</a>
<a target="_top" href="nodejs_mysql_join.asp">MySQL Join</a>
<br>
<a target="_top" href="nodejs_mongodb.asp">MongoDB Get Started</a>
<a target="_top" href="nodejs_mongodb_create_db.asp">MongoDB Create DB</a>
<a target="_top" href="nodejs_mongodb_createcollection.asp">MongoDB Collection</a>
<a target="_top" href="nodejs_mongodb_insert.asp">MongoDB Insert</a>
<a target="_top" href="nodejs_mongodb_find.asp">MongoDB Find</a>
<a target="_top" href="nodejs_mongodb_query.asp">MongoDB Query</a>
<a target="_top" href="nodejs_mongodb_sort.asp">MongoDB Sort</a>
<a target="_top" href="nodejs_mongodb_delete.asp">MongoDB Delete</a>
<a target="_top" href="nodejs_mongodb_drop.asp">MongoDB Drop Collection</a>
<a target="_top" href="nodejs_mongodb_update.asp">MongoDB Update</a>
<a target="_top" href="nodejs_mongodb_limit.asp">MongoDB Limit</a>
<a target="_top" href="nodejs_mongodb_join.asp">MongoDB Join</a>
<br>
<h2 class="left">Advanced Communication</h2>
<a target="_top" href="nodejs_graphql.asp">GraphQL</a>
<a target="_top" href="nodejs_socketio.asp">Socket.IO</a>
<a target="_top" href="nodejs_websockets.asp">WebSockets</a>
<br>
<h2 class="left">Testing &amp; Debugging</h2>
<a target="_top" href="nodejs_debugging_advanced.asp">Node Adv. Debugging</a>
<a target="_top" href="nodejs_testing.asp">Node Testing Apps</a>
<a target="_top" href="nodejs_testing_frameworks.asp">Node Test Frameworks</a>
<a target="_top" href="nodejs_test_runner.asp">Node Test Runner</a>
<br>
<h2 class="left">Node.js Deployment</h2>
<a target="_top" href="nodejs_environment.asp">Node Env Variables</a>
<a target="_top" href="nodejs_dev_vs_prod.asp">Node Dev vs Prod</a>
<a target="_top" href="nodejs_ci_cd.asp">Node CI/CD</a>
<a target="_top" href="nodejs_security.asp">Node Security</a>
<a target="_top" href="nodejs_deployment_modern.asp">Node Deployment</a>
<br>
<h2 class="left">Perfomance &amp; Scaling</h2>
<a target="_top" href="nodejs_logging.asp">Node Logging</a>
<a target="_top" href="nodejs_monitoring_observability.asp">Node Monitoring</a>
<a target="_top" href="nodejs_performance.asp">Node Performance</a>
<a target="_top" href="nodejs_child_process.asp">Child Process Module</a>
<a target="_top" href="nodejs_cluster.asp">Cluster Module</a>
<a target="_top" href="nodejs_worker_threads.asp">Worker Threads</a>
<br>
<h2 class="left">Node.js Advanced</h2>
<a target="_top" href="nodejs_microservices.asp">Microservices</a>
<a target="_top" href="nodejs_webassembly.asp">Node WebAssembly</a>
<a target="_top" href="nodejs_http2.asp">HTTP2 Module</a>
<a target="_top" href="nodejs_perf_hooks.asp">Perf_hooks Module</a>
<a target="_top" href="nodejs_vm.asp">VM Module</a>
<a target="_top" href="nodejs_tls.asp">TLS/SSL Module</a>
<a target="_top" href="nodejs_net.asp">Net Module</a>
<a target="_top" href="nodejs_zlib.asp">Zlib Module</a>
<a target="_top" href="nodejs_real_world_examples.asp">Real-World Examples</a>
<br>
<h2 class="left">Hardware &amp; IoT</h2>
<a target="_top" href="nodejs_raspberrypi.asp">RasPi Get Started</a>
<a target="_top" href="nodejs_raspberrypi_gpio_intro.asp">RasPi GPIO Introduction</a>
<a target="_top" href="nodejs_raspberrypi_blinking_led.asp">RasPi Blinking LED</a>
<a target="_top" href="nodejs_raspberrypi_led_pushbutton.asp">RasPi LED &amp; Pushbutton</a>
<a target="_top" href="nodejs_raspberrypi_flowing_leds.asp">RasPi Flowing LEDs</a>
<a target="_top" href="nodejs_raspberrypi_webserver_websocket.asp">RasPi WebSocket</a>
<a target="_top" href="nodejs_raspberrypi_rgb_led_websocket.asp">RasPi RGB LED WebSocket</a>
<a target="_top" href="nodejs_raspberrypi_components.asp">RasPi Components</a>
<br>

<h2 class="left">Node.js Cert</h2>
<a target="_top" class="no-checkmark" href="nodejs_exam.asp">Node.js Certificate</a>
<br>

<h2 class="left"><span class="left_h2">Node.js</span> Reference</h2>
<a target="_top" class="no-checkmark" href="ref_modules.asp">Built-in Modules</a>
<a target="_top" class="no-checkmark" href="ref_eventemitter.asp">EventEmitter (events)</a>
<a target="_top" class="no-checkmark" href="ref_worker.asp">Worker (cluster)</a>
<a target="_top" class="no-checkmark" href="ref_cipher.asp">Cipher (crypto)</a>
<a target="_top" class="no-checkmark" href="ref_decipher.asp">Decipher (crypto)</a>
<a target="_top" class="no-checkmark" href="ref_diffiehellman.asp">DiffieHellman (crypto)</a>
<a target="_top" class="no-checkmark" href="ref_ecdh.asp">ECDH (crypto)</a>
<a target="_top" class="no-checkmark" href="ref_hash.asp">Hash (crypto)</a>
<a target="_top" class="no-checkmark" href="ref_hmac.asp">Hmac (crypto)</a>
<a target="_top" class="no-checkmark" href="ref_sign.asp">Sign (crypto)</a>
<a target="_top" class="no-checkmark" href="ref_verify.asp">Verify (crypto)</a>
<a target="_top" class="no-checkmark" href="ref_socket.asp">Socket (dgram, net, tls)</a>
<a target="_top" class="no-checkmark" href="ref_readstream.asp">ReadStream (fs, stream)</a>
<a target="_top" class="no-checkmark" href="ref_writestream.asp">WriteStream (fs, stream)</a>
<a target="_top" class="no-checkmark" href="ref_server.asp">Server (http, https, net, tls)</a>
<a target="_top" class="no-checkmark" href="ref_agent.asp">Agent (http, https)</a>
<a target="_top" class="no-checkmark" href="ref_request.asp">Request (http)</a>
<a target="_top" class="no-checkmark" href="ref_response.asp">Response (http)</a>
<a target="_top" class="no-checkmark" href="ref_message.asp">Message (http)</a>
<a target="_top" class="no-checkmark" href="ref_interface.asp">Interface (readline)</a>
<br>

<h2 class="left">Resources &amp; Tools</h2>
<a target="_top" class="no-checkmark" href="nodejs_compiler.asp">Node.js Compiler</a>
<a target="_top" class="no-checkmark" href="nodejs_server.asp">Node.js Server</a>
<a target="_top" class="no-checkmark" href="nodejs_quiz.asp">Node.js Quiz</a>
<a target="_top" class="no-checkmark" href="nodejs_exercises.asp">Node.js Exercises</a>
<a target="_top" class="no-checkmark" href="nodejs_practice.php">Node.js Pratice Problems</a>
<a target="_top" class="no-checkmark" href="nodejs_syllabus.asp">Node.js Syllabus</a>
<a target="_top" class="no-checkmark" href="nodejs_study_plan.asp">Node.js Study Plan</a>
<a target="_top" class="no-checkmark" href="nodejs_bootcamp.asp">Node.js Bootcamp</a>

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

<h1>Node.js <span class="color_h1">Microservices</span></h1>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn" href="nodejs_worker_threads.asp">&#10094; Previous</a>
<a class="w3-right w3-btn" href="nodejs_webassembly.asp">Next &#10095;</a>
</div>
<hr>

<h2 id="intro">Introduction to Microservices</h2>
<p>Microservices is an architectural style that structures an application as a collection of small, loosely coupled services. Each service is:</p>
<ul>
  <li>Focused on a single business capability</li>
  <li>Independently deployable</li>
  <li>Independently scalable</li>
  <li>Potentially written in different programming languages</li>
  <li>Potentially using different data storage technologies</li>
</ul>

<div class="w3-panel ws-info">
<p>Microservices architecture enables faster development cycles, better scalability, and improved resilience compared to traditional monolithic applications.</p>
</div>
<hr>

<h2 id="vs">Monoliths vs Microservices</h2>

<table class="ws-table-all w3-margin-top">
  <tr>
    <th style="width:20%">Aspect</th>
    <th>Monolithic Architecture</th>
    <th>Microservices Architecture</th>
  </tr>
  <tr>
    <td>Structure</td>
    <td>Single, unified codebase</td>
    <td>Multiple small services</td>
  </tr>
  <tr>
    <td>Deployment</td>
    <td>Entire application deployed at once</td>
    <td>Services deployed independently</td>
  </tr>
  <tr>
    <td>Scaling</td>
    <td>Entire application must scale together</td>
    <td>Individual services can scale independently</td>
  </tr>
  <tr>
    <td>Development</td>
    <td>Single technology stack</td>
    <td>Potentially different technologies per service</td>
  </tr>
  <tr>
    <td>Team Structure</td>
    <td>Often a single team</td>
    <td>Multiple teams, each owning specific services</td>
  </tr>
  <tr>
    <td>Complexity</td>
    <td>Simpler architecture, complex codebase</td>
    <td>Complex architecture, simpler individual codebases</td>
  </tr>
</table>

<hr>

<div id="midcontentadcontainer" style="overflow:auto;text-align:center">
<!-- MidContent -->
<!-- <p class="adtext">Advertisement</p> -->
</div>
<hr>

<h2 id="principles">Key Principles</h2>

<ul>
  <li><strong>Single Responsibility</strong> - Each microservice should focus on doing one thing well - implementing a single business capability.</li>
  <li><strong>Decentralization</strong> - Decentralize everything: governance, data management, and architecture decisions.</li>
  <li><strong>Autonomous Services</strong> - Services should be able to change and deploy independently without affecting others.</li>
  <li><strong>Domain-Driven Design</strong> - Design services around business domains rather than technical functions.</li>
  <li><strong>Resilience</strong> - Services should be designed to handle failure of other services.</li>
  <li><strong>Observability</strong> - Implement comprehensive monitoring, logging, and tracing across services.</li>
</ul>

<div class="w3-panel ws-note">
<p><strong>Best Practice:</strong> Start with a clear domain model and identify bounded contexts before splitting an application into microservices.</p>
</div>
<hr>

<h2 id="node">Node.js for Microservices</h2>

<p>Node.js is particularly well-suited for microservices architecture for several reasons:</p>

<ul>
  <li><strong>Lightweight and Fast</strong> - Node.js has a small footprint and starts quickly, making it ideal for microservices that need to scale rapidly.</li>
  <li><strong>Asynchronous and Event-Driven</strong> - Node.js's non-blocking I/O model makes it efficient for handling many concurrent connections between services.</li>
  <li><strong>JSON Support</strong> - First-class JSON support makes data exchange between microservices straightforward.</li>
  <li><strong>NPM Ecosystem</strong> - The vast package ecosystem provides libraries for service discovery, API gateways, monitoring, and more.</li>
</ul>

<div class="w3-example">
<h3>Example: Simple Node.js Microservice</h3>
<div class="w3-code notranslate jsHigh">
// user-service.js<br>
const express = require('express');<br>
const app = express();<br>
<br>
app.use(express.json());<br>
<br>
// In-memory user database for demonstration<br>
const users = [<br>
&nbsp;&nbsp;{ id: 1, name: 'John Doe', email: 'john@example.com' },<br>
&nbsp;&nbsp;{ id: 2, name: 'Jane Smith', email: 'jane@example.com' }<br>
];<br>
<br>
// Get all users<br>
app.get('/users', (req, res) => {<br>
&nbsp;&nbsp;res.json(users);<br>
});<br>
<br>
// Get user by ID<br>
app.get('/users/:id', (req, res) => {<br>
&nbsp;&nbsp;const user = users.find(u => u.id === parseInt(req.params.id));<br>
&nbsp;&nbsp;if (!user) return res.status(404).json({ message: 'User not found' });<br>
&nbsp;&nbsp;res.json(user);<br>
});<br>
<br>
// Create a new user<br>
app.post('/users', (req, res) => {<br>
&nbsp;&nbsp;const newUser = {<br>
&nbsp;&nbsp;&nbsp;&nbsp;id: users.length + 1,<br>
&nbsp;&nbsp;&nbsp;&nbsp;name: req.body.name,<br>
&nbsp;&nbsp;&nbsp;&nbsp;email: req.body.email<br>
&nbsp;&nbsp;};<br>
&nbsp;&nbsp;users.push(newUser);<br>
&nbsp;&nbsp;res.status(201).json(newUser);<br>
});<br>
<br>
const PORT = process.env.PORT || 8080;<br>
app.listen(PORT, () => {<br>
&nbsp;&nbsp;console.log(`User service running on port ${PORT}`);<br>
});
</div>
</div>
<hr>

<h2 id="communication">Service Communication</h2>

<p>Microservices need ways to communicate with each other.</p>
<p>There are two fundamental approaches:</p>

<h3>Synchronous Communication</h3>
<p>Services directly call each other's APIs, creating a real-time request-response flow:</p>
<ul>
  <li><strong>REST</strong>: Simple, widely used, stateless communication</li>
  <li><strong>GraphQL</strong>: Flexible queries with a single endpoint</li>
  <li><strong>gRPC</strong>: High-performance RPC framework using Protocol Buffers</li>
</ul>

<div class="w3-example">
<h3>Example: REST Communication Between Services</h3>
<div class="w3-code notranslate jsHigh">
// order-service.js calling the user-service<br>
const axios = require('axios');<br>
<br>
async function getUserDetails(userId) {<br>
&nbsp;&nbsp;try {<br>
&nbsp;&nbsp;&nbsp;&nbsp;const response = await axios.get(`http://user-service:3001/users/${userId}`);<br>
&nbsp;&nbsp;&nbsp;&nbsp;return response.data;<br>
&nbsp;&nbsp;} catch (error) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;console.error(`Error fetching user ${userId}:`, error.message);<br>
&nbsp;&nbsp;&nbsp;&nbsp;throw new Error('User service unavailable');<br>
&nbsp;&nbsp;}<br>
}<br>
<br>
// Route handler in order service<br>
app.post('/orders', async (req, res) => {<br>
&nbsp;&nbsp;const { userId, products } = req.body;<br>
&nbsp;&nbsp;<br>
&nbsp;&nbsp;try {<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Get user data from user service<br>
&nbsp;&nbsp;&nbsp;&nbsp;const user = await getUserDetails(userId);<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Check product availability from product service<br>
&nbsp;&nbsp;&nbsp;&nbsp;const productStatus = await checkProductAvailability(products);<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (!productStatus.allAvailable) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return res.status(400).json({ error: 'Some products are unavailable' });<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Create the order<br>
&nbsp;&nbsp;&nbsp;&nbsp;const order = await createOrder(userId, products, user.shippingAddress);<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;res.status(201).json(order);<br>
&nbsp;&nbsp;} catch (error) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;console.error('Order creation failed:', error);<br>
&nbsp;&nbsp;&nbsp;&nbsp;res.status(500).json({ error: 'Failed to create order' });<br>
&nbsp;&nbsp;}<br>
});
</div>
</div>

<div class="w3-panel ws-note">
<p><strong>Note:</strong> Synchronous communication creates direct dependencies between services.</p>
<p>If the called service is down or slow, it affects the calling service, potentially causing cascading failures.</p>
</div>

<h3>Asynchronous Communication</h3>
<p>Services communicate through message brokers or event buses without waiting for immediate responses:</p>
<ul>
  <li><strong>Message Queues</strong>: RabbitMQ, ActiveMQ for point-to-point messaging</li>
  <li><strong>Pub/Sub</strong>: Kafka, Redis Pub/Sub for publishing messages to multiple subscribers</li>
  <li><strong>Event Streaming</strong>: Kafka, AWS Kinesis for handling data streams</li>
</ul>

<div class="w3-example">
<h3>Example: Event-Driven Communication with an Event Bus</h3>
<div class="w3-code notranslate jsHigh">
// order-service.js publishing an event<br>
const axios = require('axios');<br>
<br>
async function publishEvent(eventType, data) {<br>
&nbsp;&nbsp;try {<br>
&nbsp;&nbsp;&nbsp;&nbsp;await axios.post('http://event-bus:3100/events', {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type: eventType,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data: data,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;source: 'order-service',<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;timestamp: new Date().toISOString()<br>
&nbsp;&nbsp;&nbsp;&nbsp;});<br>
&nbsp;&nbsp;&nbsp;&nbsp;console.log(`Published event: ${eventType}`);<br>
&nbsp;&nbsp;} catch (error) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;console.error(`Failed to publish event ${eventType}:`, error.message);<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Store failed events for retry<br>
&nbsp;&nbsp;&nbsp;&nbsp;storeFailedEvent(eventType, data, error);<br>
&nbsp;&nbsp;}<br>
}<br>
<br>
// Create an order and publish event<br>
app.post('/orders', async (req, res) => {<br>
&nbsp;&nbsp;try {<br>
&nbsp;&nbsp;&nbsp;&nbsp;const order = await createOrder(req.body);<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Publish event for other services<br>
&nbsp;&nbsp;&nbsp;&nbsp;await publishEvent('order.created', order);<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;res.status(201).json(order);<br>
&nbsp;&nbsp;} catch (error) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;res.status(500).json({ error: 'Order creation failed' });<br>
&nbsp;&nbsp;}<br>
});</div>
</div>

<h3>Handling Service Failures</h3>
<p>In microservices, you need strategies for handling communication failures:</p>

<table class="ws-table-all w3-margin-top">
  <tr>
    <th style="width:25%">Pattern</th>
    <th>Description</th>
    <th>When to Use</th>
  </tr>
  <tr>
    <td>Circuit Breaker</td>
    <td>Temporarily stops requests to failing services, preventing cascading failures</td>
    <td>When services need protection from failing dependencies</td>
  </tr>
  <tr>
    <td>Retry With Backoff</td>
    <td>Automatically retries failed requests with increasing delays</td>
    <td>For transient failures that might resolve quickly</td>
  </tr>
  <tr>
    <td>Timeout Pattern</td>
    <td>Sets maximum time to wait for responses</td>
    <td>To prevent blocking threads on slow services</td>
  </tr>
  <tr>
    <td>Bulkhead Pattern</td>
    <td>Isolates failures to prevent them from consuming all resources</td>
    <td>To contain failures within components</td>
  </tr>
  <tr>
    <td>Fallback Pattern</td>
    <td>Provides alternative response when a service fails</td>
    <td>To maintain basic functionality during failures</td>
  </tr>
</table>

<div class="w3-example">
<h3>Example: Circuit Breaker Implementation</h3>
<div class="w3-code notranslate jsHigh">
const CircuitBreaker = require('opossum');<br>
<br>
// Configure the circuit breaker<br>
const options = {<br>
&nbsp;&nbsp;failureThreshold: 50,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Open after 50% of requests fail<br>
&nbsp;&nbsp;resetTimeout: 10000,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Try again after 10 seconds<br>
&nbsp;&nbsp;timeout: 8080,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Time before request is considered failed<br>
&nbsp;&nbsp;errorThresholdPercentage: 50 // Error percentage to open circuit<br>
};<br>
<br>
// Create a circuit breaker for the user service<br>
const getUserDetailsBreaker = new CircuitBreaker(getUserDetails, options);<br>
<br>
// Add listeners for circuit state changes<br>
getUserDetailsBreaker.on('open', () => {<br>
&nbsp;&nbsp;console.log('Circuit OPEN - User service appears to be down');<br>
});<br>
<br>
getUserDetailsBreaker.on('halfOpen', () => {<br>
&nbsp;&nbsp;console.log('Circuit HALF-OPEN - Testing user service');<br>
});<br>
<br>
getUserDetailsBreaker.on('close', () => {<br>
&nbsp;&nbsp;console.log('Circuit CLOSED - User service restored');<br>
});<br>
<br>
// Use the circuit breaker in the route handler<br>
app.get('/orders/:orderId', async (req, res) => {<br>
&nbsp;&nbsp;const orderId = req.params.orderId;<br>
&nbsp;&nbsp;const order = await getOrderById(orderId);<br>
&nbsp;&nbsp;<br>
&nbsp;&nbsp;try {<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Call the user service through the circuit breaker<br>
&nbsp;&nbsp;&nbsp;&nbsp;const user = await getUserDetailsBreaker.fire(order.userId);<br>
&nbsp;&nbsp;&nbsp;&nbsp;res.json({ order, user });<br>
&nbsp;&nbsp;} catch (error) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;// If the circuit is open or the call fails, return fallback data<br>
&nbsp;&nbsp;&nbsp;&nbsp;console.error('Could not fetch user details:', error.message);<br>
&nbsp;&nbsp;&nbsp;&nbsp;res.json({<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;order,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user: { id: order.userId, name: 'User details unavailable' }<br>
&nbsp;&nbsp;&nbsp;&nbsp;});<br>
&nbsp;&nbsp;}<br>
});<br>
&nbsp;&nbsp;try {<br>
&nbsp;&nbsp;&nbsp;&nbsp;const response = await axios.get(`http://user-service:8080/users/${userId}`);<br>
&nbsp;&nbsp;&nbsp;&nbsp;return response.data;<br>
&nbsp;&nbsp;} catch (error) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;console.error('Error fetching user details:', error.message);<br>
&nbsp;&nbsp;&nbsp;&nbsp;throw new Error('User service unavailable');<br>
&nbsp;&nbsp;}<br>
}<br>
<br>
// Process an order<br>
app.post('/orders', async (req, res) => {<br>
&nbsp;&nbsp;try {<br>
&nbsp;&nbsp;&nbsp;&nbsp;const { userId, products } = req.body;<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Get user details from the user service<br>
&nbsp;&nbsp;&nbsp;&nbsp;const user = await getUserDetails(userId);<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Create the order<br>
&nbsp;&nbsp;&nbsp;&nbsp;const order = {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;id: generateOrderId(),<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;userId: userId,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;userEmail: user.email,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;products: products,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total: calculateTotal(products),<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;createdAt: new Date()<br>
&nbsp;&nbsp;&nbsp;&nbsp;};<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Save order (simplified)<br>
&nbsp;&nbsp;&nbsp;&nbsp;saveOrder(order);<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;res.status(201).json(order);<br>
&nbsp;&nbsp;} catch (error) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;res.status(500).json({ error: error.message });<br>
&nbsp;&nbsp;}<br>
});
</div>
</div>

<h3>Asynchronous Communication</h3>
<p>Services communicate through message brokers or event buses:</p>
<ul>
  <li><strong>Message Queues</strong>: RabbitMQ, ActiveMQ</li>
  <li><strong>Streaming Platforms</strong>: Apache Kafka, AWS Kinesis</li>
  <li><strong>Event Buses</strong>: Redis Pub/Sub, NATS</li>
</ul>

<div class="w3-example">
<h3>Example: Asynchronous Communication with RabbitMQ</h3>
<div class="w3-code notranslate jsHigh">
// order-service.js publishing an event<br>
const amqp = require('amqplib');<br>
<br>
async function publishOrderCreated(order) {<br>
&nbsp;&nbsp;try {<br>
&nbsp;&nbsp;&nbsp;&nbsp;const connection = await amqp.connect('amqp://localhost');<br>
&nbsp;&nbsp;&nbsp;&nbsp;const channel = await connection.createChannel();<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;const exchange = 'order_events';<br>
&nbsp;&nbsp;&nbsp;&nbsp;await channel.assertExchange(exchange, 'topic', { durable: true });<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;const routingKey = 'order.created';<br>
&nbsp;&nbsp;&nbsp;&nbsp;const message = JSON.stringify(order);<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;channel.publish(exchange, routingKey, Buffer.from(message));<br>
&nbsp;&nbsp;&nbsp;&nbsp;console.log(`Published order created event for order ${order.id}`);<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;setTimeout(() => connection.close(), 500);<br>
&nbsp;&nbsp;} catch (error) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;console.error('Error publishing event:', error);<br>
&nbsp;&nbsp;}<br>
}<br>
<br>
// notification-service.js consuming the event<br>
async function setupOrderCreatedConsumer() {<br>
&nbsp;&nbsp;const connection = await amqp.connect('amqp://localhost');<br>
&nbsp;&nbsp;const channel = await connection.createChannel();<br>
&nbsp;&nbsp;<br>
&nbsp;&nbsp;const exchange = 'order_events';<br>
&nbsp;&nbsp;await channel.assertExchange(exchange, 'topic', { durable: true });<br>
&nbsp;&nbsp;<br>
&nbsp;&nbsp;const queue = 'notification_service_orders';<br>
&nbsp;&nbsp;await channel.assertQueue(queue, { durable: true });<br>
&nbsp;&nbsp;await channel.bindQueue(queue, exchange, 'order.created');<br>
&nbsp;&nbsp;<br>
&nbsp;&nbsp;channel.consume(queue, (msg) => {<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (msg) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const order = JSON.parse(msg.content.toString());<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;console.log(`Sending order confirmation email for order ${order.id}`);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sendOrderConfirmationEmail(order);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;channel.ack(msg);<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;});<br>
}
</div>
</div>

<div class="w3-panel ws-note">
<p><strong>Best Practice:</strong> For operations that don't need immediate responses, use asynchronous messaging to improve resilience and reduce coupling between services.</p>
</div>
<hr>

<h2 id="api-gateway">API Gateway Pattern</h2>
<p>An API Gateway acts as a single entry point for all client requests to a microservices architecture.</p>

<h3>Responsibilities of an API Gateway</h3>
<ul>
  <li><strong>Request Routing</strong>: Directs client requests to appropriate services</li>
  <li><strong>API Composition</strong>: Aggregates responses from multiple services</li>
  <li><strong>Protocol Translation</strong>: Converts between protocols (e.g., HTTP to gRPC)</li>
  <li><strong>Authentication & Authorization</strong>: Handles security concerns</li>
  <li><strong>Rate Limiting</strong>: Prevents abuse of the API</li>
  <li><strong>Monitoring & Logging</strong>: Provides visibility into API usage</li>
</ul>

<div class="w3-example">
<h3>Example: API Gateway Implementation</h3>
<div class="w3-code notranslate jsHigh">
const express = require('express');<br>
const { createProxyMiddleware } = require('http-proxy-middleware');<br>
const rateLimit = require('express-rate-limit');<br>
const helmet = require('helmet');<br>
<br>
const app = express();<br>
const PORT = 8080;<br>
<br>
// Add security headers<br>
app.use(helmet());<br>
<br>
// Apply rate limiting<br>
const apiLimiter = rateLimit({<br>
&nbsp;&nbsp;windowMs: 15 * 60 * 1000, // 15 minutes<br>
&nbsp;&nbsp;max: 100,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// limit each IP to 100 requests per windowMs<br>
&nbsp;&nbsp;message: 'Too many requests from this IP, please try again later'<br>
});<br>
app.use('/api/', apiLimiter);<br>
<br>
// Authentication middleware<br>
function authenticate(req, res, next) {<br>
&nbsp;&nbsp;const token = req.headers.authorization;<br>
&nbsp;&nbsp;if (!token) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;return res.status(401).json({ error: 'Unauthorized' });<br>
&nbsp;&nbsp;}<br>
&nbsp;&nbsp;// Verify token logic would go here<br>
&nbsp;&nbsp;next();<br>
}<br>
<br>
// Service registry (hardcoded for simplicity)<br>
const serviceRegistry = {<br>
&nbsp;&nbsp;userService: 'http://localhost:3001',<br>
&nbsp;&nbsp;productService: 'http://localhost:3002',<br>
&nbsp;&nbsp;orderService: 'http://localhost:3003'<br>
};<br>
<br>
// Define proxy middleware for each service<br>
const userServiceProxy = createProxyMiddleware({<br>
&nbsp;&nbsp;target: serviceRegistry.userService,<br>
&nbsp;&nbsp;changeOrigin: true,<br>
&nbsp;&nbsp;pathRewrite: { '^/api/users': '/users' }<br>
});<br>
<br>
const productServiceProxy = createProxyMiddleware({<br>
&nbsp;&nbsp;target: serviceRegistry.productService,<br>
&nbsp;&nbsp;changeOrigin: true,<br>
&nbsp;&nbsp;pathRewrite: { '^/api/products': '/products' }<br>
});<br>
<br>
const orderServiceProxy = createProxyMiddleware({<br>
&nbsp;&nbsp;target: serviceRegistry.orderService,<br>
&nbsp;&nbsp;changeOrigin: true,<br>
&nbsp;&nbsp;pathRewrite: { '^/api/orders': '/orders' }<br>
});<br>
<br>
// Route requests to appropriate services<br>
app.use('/api/users', authenticate, userServiceProxy);<br>
app.use('/api/products', productServiceProxy);<br>
app.use('/api/orders', authenticate, orderServiceProxy);<br>
<br>
app.listen(PORT, () => console.log(`API Gateway running on port ${PORT}`));
</div>
<a target="_blank" class="w3-btn w3-margin-bottom" href="shownodejs.asp?filename=demo_microservices_gateway">Run example &raquo;</a>
</div>

<div class="w3-panel ws-info">
<p><strong>Best Practice:</strong> Use a dedicated API Gateway like <strong>Kong</strong>, <strong>Netflix Zuul</strong>, or cloud solutions like <strong>AWS API Gateway</strong> in production environments instead of building your own.</p>
</div>

<hr>

<h2 id="service-discovery">Service Discovery</h2>
<p>Service discovery enables microservices to find and communicate with each other dynamically without hardcoded endpoints.</p>

<h3>Service Discovery Methods</h3>
<table class="ws-table-all w3-margin-top">
  <tr>
    <th style="width:30%">Method</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>Client-Side Discovery</td>
    <td>Clients query a service registry to find service locations and load balance requests themselves</td>
  </tr>
  <tr>
    <td>Server-Side Discovery</td>
    <td>Clients call a router/load balancer which handles discovering service instances</td>
  </tr>
  <tr>
    <td>DNS-Based Discovery</td>
    <td>Services are discovered via DNS SRV records or similar technologies</td>
  </tr>
</table>

<div class="w3-example">
<h3>Example: Client-Side Service Discovery</h3>
<div class="w3-code notranslate jsHigh">
const axios = require('axios');<br>
<br>
// Simple service registry client<br>
class ServiceRegistry {<br>
&nbsp;&nbsp;constructor(registryUrl) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.registryUrl = registryUrl;<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.servicesCache = {};<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.cacheTimeout = 60000; // 1 minute<br>
&nbsp;&nbsp;}<br>
<br>
&nbsp;&nbsp;async getService(name) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Check cache first<br>
&nbsp;&nbsp;&nbsp;&nbsp;const cachedService = this.servicesCache[name];<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (cachedService && cachedService.expiresAt > Date.now()) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return this._selectInstance(cachedService.instances);<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Fetch from registry if not in cache or expired<br>
&nbsp;&nbsp;&nbsp;&nbsp;try {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const response = await axios.get(`${this.registryUrl}/services/${name}`);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const instances = response.data.instances;<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!instances || instances.length === 0) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw new Error(`No instances found for service: ${name}`);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Update cache<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.servicesCache[name] = {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;instances,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;expiresAt: Date.now() + this.cacheTimeout<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;};<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return this._selectInstance(instances);<br>
&nbsp;&nbsp;&nbsp;&nbsp;} catch (error) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;console.error(`Error fetching service ${name}:`, error.message);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw new Error(`Service discovery failed for ${name}`);<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;}<br>
<br>
&nbsp;&nbsp;// Simple round-robin load balancing<br>
&nbsp;&nbsp;_selectInstance(instances) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (!instances._lastIndex) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;instances._lastIndex = 0;<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;instances._lastIndex = (instances._lastIndex + 1) % instances.length;<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return instances[instances._lastIndex];<br>
&nbsp;&nbsp;}<br>
}<br>
<br>
// Usage example<br>
const serviceRegistry = new ServiceRegistry('http://registry:8500/v1');<br>
<br>
async function callUserService(userId) {<br>
&nbsp;&nbsp;try {<br>
&nbsp;&nbsp;&nbsp;&nbsp;const serviceInstance = await serviceRegistry.getService('user-service');<br>
&nbsp;&nbsp;&nbsp;&nbsp;const response = await axios.get(`${serviceInstance.url}/users/${userId}`);<br>
&nbsp;&nbsp;&nbsp;&nbsp;return response.data;<br>
&nbsp;&nbsp;} catch (error) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;console.error('Error calling user service:', error.message);<br>
&nbsp;&nbsp;&nbsp;&nbsp;throw error;<br>
&nbsp;&nbsp;}<br>
}
</div>
</div>

<h3>Popular Service Discovery Tools</h3>
<ul>
  <li><strong>Consul</strong>: Service discovery and configuration</li>
  <li><strong>etcd</strong>: Distributed key-value store</li>
  <li><strong>ZooKeeper</strong>: Centralized service for configuration and synchronization</li>
  <li><strong>Eureka</strong>: REST-based service discovery for the AWS cloud</li>
  <li><strong>Kubernetes Service Discovery</strong>: Built-in service discovery for Kubernetes</li>
</ul>

<hr>

<h2 id="data-management">Data Management Strategies</h2>
<p>Managing data in a microservices architecture requires different approaches than monolithic applications.</p>

<h3>Database Per Service</h3>
<p>Each microservice has its own dedicated database, ensuring loose coupling and independent scaling.</p>

<div class="w3-panel ws-info">
<p><strong>Note:</strong> The Database Per Service pattern allows each service to choose the most appropriate database technology for its needs (SQL, NoSQL, Graph DB, etc.).</p>
</div>

<h3>Distributed Transactions</h3>
<p>Maintaining data consistency across services without ACID transactions requires special patterns:</p>

<h4>Saga Pattern</h4>
<p>A sequence of local transactions where each transaction updates data within a single service. Each local transaction publishes an event that triggers the next transaction.</p>

<div class="w3-example">
<h3>Example: Saga Pattern Implementation</h3>
<div class="w3-code notranslate jsHigh">
// In order-service.js<br>
<br>
async function createOrder(orderData) {<br>
&nbsp;&nbsp;try {<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Start the saga - create order<br>
&nbsp;&nbsp;&nbsp;&nbsp;const order = await orderRepository.create(orderData);<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Publish event to trigger the next step in the saga<br>
&nbsp;&nbsp;&nbsp;&nbsp;await eventBus.publish('order.created', { orderId: order.id, ...orderData });<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return order;<br>
&nbsp;&nbsp;} catch (error) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;console.error('Failed to create order:', error);<br>
&nbsp;&nbsp;&nbsp;&nbsp;throw error;<br>
&nbsp;&nbsp;}<br>
}<br>
<br>
// In payment-service.js<br>
async function processPayment(event) {<br>
&nbsp;&nbsp;const { orderId, userId, amount } = event.data;<br>
<br>
&nbsp;&nbsp;try {<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Process payment<br>
&nbsp;&nbsp;&nbsp;&nbsp;const payment = await paymentProcessor.charge(userId, amount, `Order ${orderId}`);<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Publish success event<br>
&nbsp;&nbsp;&nbsp;&nbsp;await eventBus.publish('payment.succeeded', {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orderId,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;paymentId: payment.id<br>
&nbsp;&nbsp;&nbsp;&nbsp;});<br>
&nbsp;&nbsp;} catch (error) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Publish failure event to trigger compensation<br>
&nbsp;&nbsp;&nbsp;&nbsp;await eventBus.publish('payment.failed', {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orderId,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reason: error.message<br>
&nbsp;&nbsp;&nbsp;&nbsp;});<br>
&nbsp;&nbsp;}<br>
}<br>
<br>
// Compensating transaction in order-service.js<br>
async function handlePaymentFailure(event) {<br>
&nbsp;&nbsp;const { orderId, reason } = event.data;<br>
<br>
&nbsp;&nbsp;// Update order status to 'payment-failed'<br>
&nbsp;&nbsp;await orderRepository.updateStatus(orderId, 'payment-failed', reason);<br>
<br>
&nbsp;&nbsp;// Notify customer about payment failure<br>
&nbsp;&nbsp;const order = await orderRepository.findById(orderId);<br>
&nbsp;&nbsp;await notificationService.notifyCustomer(order.userId, `Payment failed for order ${orderId}: ${reason}`);<br>
}
</div>
</div>

<h4>Event Sourcing and CQRS</h4>
<p>Event Sourcing stores all changes to application state as a sequence of events. Command Query Responsibility Segregation (CQRS) separates read and write operations.</p>

<div class="w3-example">
<h3>Example: Event Sourcing</h3>
<div class="w3-code notranslate jsHigh">
// Event store<br>
class EventStore {<br>
&nbsp;&nbsp;constructor() {<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.events = [];<br>
&nbsp;&nbsp;}<br>
<br>
&nbsp;&nbsp;append(aggregateId, eventType, eventData) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;const event = {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;id: this.events.length + 1,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;timestamp: new Date().toISOString(),<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;aggregateId,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type: eventType,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data: eventData<br>
&nbsp;&nbsp;&nbsp;&nbsp;};<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.events.push(event);<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.publishEvent(event);<br>
&nbsp;&nbsp;&nbsp;&nbsp;return event;<br>
&nbsp;&nbsp;}<br>
<br>
&nbsp;&nbsp;getEventsForAggregate(aggregateId) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;return this.events.filter(event => event.aggregateId === aggregateId);<br>
&nbsp;&nbsp;}<br>
<br>
&nbsp;&nbsp;publishEvent(event) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Publish to subscribers/event bus<br>
&nbsp;&nbsp;&nbsp;&nbsp;console.log(`Event published: ${event.type}`);<br>
&nbsp;&nbsp;}<br>
}<br>
<br>
// Order aggregate<br>
class Order {<br>
&nbsp;&nbsp;constructor(eventStore) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.eventStore = eventStore;<br>
&nbsp;&nbsp;}<br>
<br>
&nbsp;&nbsp;createOrder(orderId, userId, items) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.eventStore.append(orderId, 'OrderCreated', {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;userId,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;items,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status: 'created'<br>
&nbsp;&nbsp;&nbsp;&nbsp;});<br>
&nbsp;&nbsp;}<br>
<br>
&nbsp;&nbsp;addItem(orderId, item) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.eventStore.append(orderId, 'ItemAdded', { item });<br>
&nbsp;&nbsp;}<br>
<br>
&nbsp;&nbsp;removeItem(orderId, itemId) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.eventStore.append(orderId, 'ItemRemoved', { itemId });<br>
&nbsp;&nbsp;}<br>
<br>
&nbsp;&nbsp;submitOrder(orderId) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.eventStore.append(orderId, 'OrderSubmitted', {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status: 'submitted',<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;submittedAt: new Date().toISOString()<br>
&nbsp;&nbsp;&nbsp;&nbsp;});<br>
&nbsp;&nbsp;}<br>
<br>
&nbsp;&nbsp;// Rebuild the current state from events<br>
&nbsp;&nbsp;getOrder(orderId) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;const events = this.eventStore.getEventsForAggregate(orderId);<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (events.length === 0) return null;<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;let order = { id: orderId, items: [] };<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (const event of events) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch (event.type) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 'OrderCreated':<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;order = { ...order, ...event.data };<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 'ItemAdded':<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;order.items.push(event.data.item);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 'ItemRemoved':<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;order.items = order.items.filter(item => item.id !== event.data.itemId);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 'OrderSubmitted':<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;order.status = event.data.status;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;order.submittedAt = event.data.submittedAt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return order;<br>
&nbsp;&nbsp;}<br>
}
</div>
</div>
<hr>
<h2 id="patterns">Microservice Patterns</h2>

<p>Several design patterns help solve common challenges in microservices architectures:</p>

<h3>API Gateway</h3>
<p>A single entry point for all client requests that routes to the appropriate services.</p>
<div class="w3-example">
<div class="w3-code notranslate jsHigh">
// Basic API Gateway with Express<br>
const express = require('express');<br>
const { createProxyMiddleware } = require('http-proxy-middleware');<br>
<br>
const app = express();<br>
<br>
// Authentication middleware<br>
app.use('/api', (req, res, next) => {<br>
&nbsp;&nbsp;const authHeader = req.headers.authorization;<br>
&nbsp;&nbsp;if (!authHeader) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;return res.status(401).json({ message: 'Authentication required' });<br>
&nbsp;&nbsp;}<br>
&nbsp;&nbsp;// Validate token (simplified)<br>
&nbsp;&nbsp;next();<br>
});<br>
<br>
// Route to services<br>
app.use('/api/users', createProxyMiddleware({ <br>
&nbsp;&nbsp;target: 'http://user-service:8080',<br>
&nbsp;&nbsp;pathRewrite: { '^/api/users': '/users' }<br>
}));<br>
<br>
app.use('/api/orders', createProxyMiddleware({ <br>
&nbsp;&nbsp;target: 'http://order-service:3001',<br>
&nbsp;&nbsp;pathRewrite: { '^/api/orders': '/orders' }<br>
}));<br>
<br>
app.listen(8000, () => {<br>
&nbsp;&nbsp;console.log('API Gateway running on port 8000');<br>
});
</div>
</div>

<h3>Circuit Breaker</h3>
<p>Prevents cascading failures by failing fast when a service is unresponsive.</p>

<h3>Service Discovery</h3>
<p>Allows services to find and communicate with each other without hardcoded locations.</p>

<h3>Saga Pattern</h3>
<p>Manages distributed transactions across multiple services.</p>

<h3>CQRS (Command Query Responsibility Segregation)</h3>
<p>Separates read and write operations for better performance and scalability.</p>

<h3>Bulkhead Pattern</h3>
<p>Isolates failures to prevent them from cascading throughout the system.</p>

<div class="w3-panel w3-pale-yellow w3-leftbar">
<p><strong>Advanced Tip:</strong> Consider using a service mesh like Istio or Linkerd to handle service-to-service communication, including traffic management, security, and observability.</p>
</div>
<hr>

<h2 id="deployment">Deployment Strategies</h2>

<p>Microservices benefit from modern deployment approaches:</p>

<h3>Containerization</h3>
<p>Docker containers provide consistent environments for each microservice.</p>
<div class="w3-example">
<h3>Example Dockerfile for a Node.js Microservice</h3>
<div class="w3-code notranslate">
FROM node:16-alpine<br>
<br>
WORKDIR /app<br>
<br>
COPY package*.json ./<br>
RUN npm ci --only=production<br>
<br>
COPY . .<br>
<br>
EXPOSE 8080<br>
<br>
CMD ["node", "user-service.js"]
</div>
</div>

<h3>Orchestration</h3>
<p>Tools like Kubernetes automate deployment, scaling, and management of containerized services.</p>
<div class="w3-example">
<h3>Example Kubernetes Deployment</h3>
<div class="w3-code notranslate">
apiVersion: apps/v1<br>
kind: Deployment<br>
metadata:<br>
&nbsp;&nbsp;name: user-service<br>
spec:<br>
&nbsp;&nbsp;replicas: 3<br>
&nbsp;&nbsp;selector:<br>
&nbsp;&nbsp;&nbsp;&nbsp;matchLabels:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;app: user-service<br>
&nbsp;&nbsp;template:<br>
&nbsp;&nbsp;&nbsp;&nbsp;metadata:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;labels:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;app: user-service<br>
&nbsp;&nbsp;&nbsp;&nbsp;spec:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;containers:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- name: user-service<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;image: my-registry/user-service:latest<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ports:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- containerPort: 8080<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;env:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- name: DB_HOST<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;value: mongodb-service<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;resources:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;limits:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cpu: "0.5"<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memory: "512Mi"<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requests:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cpu: "0.2"<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memory: "256Mi"
</div>
</div>

<h3>Continuous Deployment</h3>
<p>CI/CD pipelines automate testing and deployment of individual services.</p>

<h3>Infrastructure as Code</h3>
<p>Tools like Terraform or AWS CloudFormation define infrastructure in a declarative way.</p>

<div class="w3-panel w3-pale-yellow w3-leftbar">
<p><strong>Best Practice:</strong> Use blue-green or canary deployment strategies to minimize downtime and risk when updating microservices.</p>
</div>
<hr>

<h2 id="advanced">Advanced Microservice Patterns</h2>

<h3>1. Circuit Breaker Pattern</h3>
<p>Prevent cascading failures when services are down:</p>

<div class="w3-example">
<div class="w3-code notranslate jsHigh">
// circuit-breaker.js<br>
class CircuitBreaker {<br>
&nbsp;&nbsp;constructor(request, options = {}) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.request = request;<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.state = 'CLOSED';<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.failureCount = 0;<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.successCount = 0;<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.nextAttempt = Date.now();<br>
    <br>
&nbsp;&nbsp;&nbsp;&nbsp;// Configurable thresholds<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.failureThreshold = options.failureThreshold || 5;<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.successThreshold = options.successThreshold || 2;<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.timeout = options.timeout || 10000; // 10 seconds<br>
&nbsp;&nbsp;}<br>
  <br>
&nbsp;&nbsp;async fire() {<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (this.state === 'OPEN') {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (this.nextAttempt <= Date.now()) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.state = 'HALF';<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw new Error('Circuit is OPEN');<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
    <br>
&nbsp;&nbsp;&nbsp;&nbsp;try {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const response = await this.request();<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return this.success(response);<br>
&nbsp;&nbsp;&nbsp;&nbsp;} catch (err) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return this.fail(err);<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;}<br>
  <br>
&nbsp;&nbsp;success(response) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (this.state === 'HALF') {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.successCount++;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (this.successCount > this.successThreshold) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.close();<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.failureCount = 0;<br>
&nbsp;&nbsp;&nbsp;&nbsp;return response;<br>
&nbsp;&nbsp;}<br>
  <br>
&nbsp;&nbsp;fail(err) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.failureCount++;<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (this.failureCount >= this.failureThreshold) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.open();<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;return err;<br>
&nbsp;&nbsp;}<br>
  <br>
&nbsp;&nbsp;open() {<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.state = 'OPEN';<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.nextAttempt = Date.now() + this.timeout;<br>
&nbsp;&nbsp;}<br>
  <br>
&nbsp;&nbsp;close() {<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.state = 'CLOSED';<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.failureCount = 0;<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.successCount = 0;<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.nextAttempt = 0;<br>
&nbsp;&nbsp;}<br>
}<br>
<br>
module.exports = CircuitBreaker;
</div>
</div>

<h3>2. Saga Pattern</h3>
<p>Manage distributed transactions across microservices:</p>

<div class="w3-example">
<div class="w3-code notranslate jsHigh">
// order-saga.js<br>
class OrderSaga {<br>
&nbsp;&nbsp;constructor(orderId) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.orderId = orderId;<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.steps = [];<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.compensations = [];<br>
&nbsp;&nbsp;}<br>
  <br>
&nbsp;&nbsp;addStep(execute, compensate) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.steps.push(execute);<br>
&nbsp;&nbsp;&nbsp;&nbsp;this.compensations.unshift(compensate);<br>
&nbsp;&nbsp;&nbsp;&nbsp;return this;<br>
&nbsp;&nbsp;}<br>
  <br>
&nbsp;&nbsp;async execute() {<br>
&nbsp;&nbsp;&nbsp;&nbsp;const executedSteps = [];<br>
    <br>
&nbsp;&nbsp;&nbsp;&nbsp;try {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (const [index, step] of this.steps.entries()) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;await step();<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;executedSteps.push(index);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return { success: true };<br>
&nbsp;&nbsp;&nbsp;&nbsp;} catch (error) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;console.error('Saga execution failed, compensating...', error);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;await this.compensate(executedSteps);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return { success: false, error };<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;}<br>
  <br>
&nbsp;&nbsp;async compensate(executedSteps) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (const stepIndex of executedSteps) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;await this.compensations[stepIndex]();<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} catch (compError) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;console.error('Compensation failed:', compError);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;}<br>
}<br>
<br>
// Example usage<br>
const orderSaga = new OrderSaga('order-123')<br>
&nbsp;&nbsp;.addStep(<br>
&nbsp;&nbsp;&nbsp;&nbsp;() => orderService.createOrder({ id: 'order-123', items: ['item1', 'item2'] }),<br>
&nbsp;&nbsp;&nbsp;&nbsp;() => orderService.cancelOrder('order-123')<br>
&nbsp;&nbsp;)<br>
&nbsp;&nbsp;.addStep(<br>
&nbsp;&nbsp;&nbsp;&nbsp;() => paymentService.processPayment('order-123', 100.00),<br>
&nbsp;&nbsp;&nbsp;&nbsp;() => paymentService.refundPayment('order-123')<br>
&nbsp;&nbsp;);<br>
<br>
orderSaga.execute();
</div>
</div>
<hr>
<h2 id="security">Microservices Security</h2>

<h3>1. Service-to-Service Authentication</h3>

<div class="w3-example">
<div class="w3-code notranslate jsHigh">
// auth-middleware.js<br>
const jwt = require('jsonwebtoken');<br>

const authenticateService = (req, res, next) => {<br>
&nbsp;&nbsp;const authHeader = req.headers.authorization;<br>
&nbsp;&nbsp;if (!authHeader) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;return res.status(401).json({ message: 'No token provided' });<br>
&nbsp;&nbsp;}<br>
  <br>
&nbsp;&nbsp;const token = authHeader.split(' ')[1];<br>
  <br>
&nbsp;&nbsp;try {<br>
&nbsp;&nbsp;&nbsp;&nbsp;const decoded = jwt.verify(token, process.env.JWT_SECRET);<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (decoded.iss !== 'auth-service') {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return res.status(403).json({ message: 'Invalid token issuer' });<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
    <br>
&nbsp;&nbsp;&nbsp;&nbsp;// Attach service info to request<br>
&nbsp;&nbsp;&nbsp;&nbsp;req.service = {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;id: decoded.sub,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name: decoded.serviceName,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;permissions: decoded.permissions || []<br>
&nbsp;&nbsp;&nbsp;&nbsp;};<br>
    <br>
&nbsp;&nbsp;&nbsp;&nbsp;next();<br>
&nbsp;&nbsp;} catch (error) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;return res.status(401).json({ message: 'Invalid or expired token' });<br>
&nbsp;&nbsp;}<br>
};<br>
<br>
module.exports = authenticateService;
</div>
</div>

<h3>2. Rate Limiting</h3>

<div class="w3-example">
<div class="w3-code notranslate jsHigh">
// rate-limiter.js<br>
const rateLimit = require('express-rate-limit');<br>
const RedisStore = require('rate-limit-redis');<br>
const { createClient } = require('redis');<br>

// Create Redis client<br><br>
const redisClient = createClient({<br>
&nbsp;&nbsp;url: process.env.REDIS_URL<br>
});<br>
<br>
// Initialize rate limiter<br>
const apiLimiter = rateLimit({<br>
&nbsp;&nbsp;windowMs: 15 * 60 * 1000, // 15 minutes<br>
&nbsp;&nbsp;max: 100, // Limit each IP to 100 requests per window<br>
&nbsp;&nbsp;standardHeaders: true, // Return rate limit info in the `RateLimit-*` headers<br>
&nbsp;&nbsp;store: new RedisStore({<br>
&nbsp;&nbsp;&nbsp;&nbsp;sendCommand: (...args) => redisClient.sendCommand(args)<br>
&nbsp;&nbsp;}),<br>
&nbsp;&nbsp;handler: (req, res) => {<br>
&nbsp;&nbsp;&nbsp;&nbsp;res.status(429).json({<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;message: 'Too many requests, please try again later.'<br>
&nbsp;&nbsp;&nbsp;&nbsp;});<br>
&nbsp;&nbsp;}<br>
});<br>
<br>
module.exports = apiLimiter;
</div>
</div>
<hr>
<h2 id="monitoring">Monitoring and Observability</h2>

<h3>1. Distributed Tracing with OpenTelemetry</h3>

<div class="w3-example">
<div class="w3-code notranslate jsHigh">
// tracing.js<br>
const { NodeTracerProvider } = require('@opentelemetry/sdk-trace-node');<br>
const { Resource } = require('@opentelemetry/resources');<br>
const { SemanticResourceAttributes } = require('@opentelemetry/semantic-conventions');<br>
const { BatchSpanProcessor } = require('@opentelemetry/sdk-trace-base');<br>
const { JaegerExporter } = require('@opentelemetry/exporter-jaeger');<br>
const { registerInstrumentations } = require('@opentelemetry/instrumentation');<br>
const { HttpInstrumentation } = require('@opentelemetry/instrumentation-http');<br>
const { ExpressInstrumentation } = require('@opentelemetry/instrumentation-express');<br><br>
<br>
// Configure the tracer provider<br>
const provider = new NodeTracerProvider({<br>
&nbsp;&nbsp;resource: new Resource({<br>
&nbsp;&nbsp;&nbsp;&nbsp;[SemanticResourceAttributes.SERVICE_NAME]: 'user-service',<br>
&nbsp;&nbsp;&nbsp;&nbsp;'service.version': '1.0.0',<br>
&nbsp;&nbsp;}),<br>
});<br>
<br>
// Configure Jaeger exporter<br>
const exporter = new JaegerExporter({<br>
&nbsp;&nbsp;endpoint: process.env.JAEGER_ENDPOINT || 'http://localhost:14268/api/traces',<br>
});<br>
<br>
// Add the exporter to the provider<br>
provider.addSpanProcessor(new BatchSpanProcessor(exporter));<br>
<br>
// Initialize the OpenTelemetry APIs to use the NodeTracerProvider<br>
provider.register();<br>
<br>
// Register instrumentations<br>
registerInstrumentations({<br>
&nbsp;&nbsp;instrumentations: [<br>
&nbsp;&nbsp;&nbsp;&nbsp;new HttpInstrumentation(),<br>
&nbsp;&nbsp;&nbsp;&nbsp;new ExpressInstrumentation(),<br>
&nbsp;&nbsp;],<br>
&nbsp;&nbsp;tracerProvider: provider,<br>
});<br>
<br>
console.log('Tracing initialized');
</div>
</div>

<h3>2. Structured Logging</h3>

<div class="w3-example">
<div class="w3-code notranslate jsHigh">
// logger.js<br>
const winston = require('winston');<br>
const { combine, timestamp, json } = winston.format;<br>
<br>
const logger = winston.createLogger({<br>
&nbsp;&nbsp;level: process.env.LOG_LEVEL || 'info',<br>
&nbsp;&nbsp;format: combine(<br>
&nbsp;&nbsp;&nbsp;&nbsp;timestamp(),<br>
&nbsp;&nbsp;&nbsp;&nbsp;json()<br>
&nbsp;&nbsp),<br>
&nbsp;&nbsp;defaultMeta: {<br>
&nbsp;&nbsp;&nbsp;&nbsp;service: 'user-service',<br>
&nbsp;&nbsp;&nbsp;&nbsp;environment: process.env.NODE_ENV || 'development',<br>
&nbsp;&nbsp},<br>
&nbsp;&nbsp;transports: [<br>
&nbsp;&nbsp;&nbsp;&nbsp;new winston.transports.Console(),<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Add other transports like file, ELK, etc.<br>
&nbsp;&nbsp],<br>
});<br>
<br>
// Add request ID to logs<br>
logger.child = function(opts) {<br>
&nbsp;&nbsp;return new Proxy(logger, {<br>
&nbsp;&nbsp;&nbsp;&nbsp;get(target, property, receiver) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (property === 'write') {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (...args) => {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const originalMeta = args[args.length - 1] || {};<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;args[args.length - 1] = { ...opts, ...originalMeta };<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return logger[property](...args);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;};<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return Reflect.get(target, property, receiver);<br>
&nbsp;&nbsp;&nbsp;&nbsp;},<br>
&nbsp;&nbsp;});<br>
};<br>
<br>
module.exports = logger;
</div>
</div>

<hr>
<div id="exercisecontainer" src="xrcise_microservices.js" data-extensions="asp"></div>
<hr>
<br>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn" href="nodejs_worker_threads.asp">&#10094; Previous</a>
<a class="w3-right w3-btn" href="nodejs_webassembly.asp">Next &#10095;</a>
</div>
<!-- Shared social share bar (tutorials + tools). One component, two ways in:
     1) Mount mode: fills any [data-ws-share] / [data-tool-share] element in place
        (the mount's own class handles placement, e.g. the tool hero's top-right).
     2) Auto mode: when there is no mount, injects a floated bar before the first
        <h2> that follows an <hr> inside #main (tutorial lessons; this skips the
        hero/cert cards at the top of landing pages).
     Buttons: X / Facebook / LinkedIn / Copy link. Shares the page URL + title. -->
<style>
.ws-share{display:flex;align-items:center;gap:8px}
.ws-share--float{float:right;margin:4px 0 10px 22px}
.ws-share-label{font-size:13px;font-weight:600;color:#282A35;letter-spacing:.05em;text-transform:uppercase;margin-right:2px}
.ws-share-btn{position:relative;width:32px;height:32px;display:inline-flex;align-items:center;justify-content:center;
  background:#f1f1f1;color:#282A35;border:none;border-radius:5px;cursor:pointer;padding:0;transition:background-color .15s ease}
.ws-share-btn:hover{background:#E7E9EB}
.ws-share-btn.copied{background:#04AA6D;color:#fff}
.ws-share-btn svg{width:16px;height:16px;fill:currentColor}
.ws-share-btn:focus-visible{outline:2px solid #282A35;outline-offset:2px}
/* "Link copied" notice below the copy button */
.ws-copied-toast{position:absolute;top:calc(100% + 9px);left:50%;
  transform:translateX(-50%) translateY(-4px);background:#282A35;color:#fff;
  font-size:12px;font-weight:600;line-height:1;white-space:nowrap;padding:6px 9px;
  border-radius:5px;opacity:0;pointer-events:none;z-index:30;
  font-family:'Source Sans Pro',sans-serif;transition:opacity .15s ease,transform .15s ease}
.ws-copied-toast::before{content:"";position:absolute;bottom:100%;left:50%;
  transform:translateX(-50%);border:5px solid transparent;border-bottom-color:#282A35}
.ws-share-btn .ws-copied-toast.show{opacity:1;transform:translateX(-50%) translateY(0)}
body.darkpagetheme .ws-share-label{color:#ddd}
body.darkpagetheme .ws-share-btn{background:#121f2b;color:#ddd}
/* mobile: the auto-injected tutorial bar becomes a compact 2x2 grid, SHARE on top */
@media (max-width:600px){
  .ws-share--float{display:grid;grid-template-columns:repeat(2,30px);gap:6px;margin:2px 0 8px 16px}
  .ws-share--float .ws-share-label{grid-column:1/-1;text-align:right;margin:0 0 2px}
  .ws-share--float .ws-share-btn{width:30px;height:30px}
}
</style>
<script>
(function(){
  var icons={
    x:'<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M18.9 1.2h3.7l-8.2 9.3L24 22.8h-7.6l-5.9-7.7-6.8 7.7H.1l8.7-10L0 1.2h7.8l5.4 7.1 5.7-7.1zm-1.3 19.4h2L6.7 3.3H4.5l13.1 17.3z"/></svg>',
    facebook:'<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M24 12.07C24 5.4 18.63 0 12 0S0 5.4 0 12.07C0 18.1 4.39 23.1 10.13 24v-8.44H7.08v-3.49h3.05V9.41c0-3.02 1.79-4.7 4.53-4.7 1.31 0 2.68.24 2.68.24v2.97h-1.51c-1.49 0-1.95.93-1.95 1.89v2.26h3.32l-.53 3.49h-2.79V24C19.61 23.1 24 18.1 24 12.07z"/></svg>',
    linkedin:'<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M20.45 20.45h-3.56v-5.57c0-1.33-.02-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.34V9h3.41v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.28zM5.34 7.43a2.06 2.06 0 1 1 0-4.13 2.06 2.06 0 0 1 0 4.13zM7.12 20.45H3.55V9h3.57v11.45zM22.23 0H1.77C.79 0 0 .77 0 1.72v20.55C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.73V1.72C24 .77 23.2 0 22.23 0z"/></svg>',
    link:'<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM8 13h8v-2H8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z"/></svg>'
  };
  function share(net){
    var url=encodeURIComponent(location.href.split('#')[0]);
    var title=document.title.replace(/\s*[-|]\s*W3Schools.*$/i,'').trim();
    var txt=encodeURIComponent(title+' - W3Schools');
    var s='';
    if(net==='x')s='https://twitter.com/intent/tweet?url='+url+'&text='+txt;
    else if(net==='facebook')s='https://www.facebook.com/sharer/sharer.php?u='+url;
    else if(net==='linkedin')s='https://www.linkedin.com/sharing/share-offsite/?url='+url;
    if(s)window.open(s,'_blank','noopener,width=600,height=540');
  }
  function mkBtn(label,icon){
    var b=document.createElement('button');
    b.type='button';b.className='ws-share-btn';b.setAttribute('aria-label',label);b.title=label;
    b.innerHTML=icon;return b;
  }
  function build(el){
    if(el.querySelector('.ws-share-btn'))return;
    el.classList.add('ws-share');
    var lbl=document.createElement('span');lbl.className='ws-share-label';lbl.textContent='Share';
    el.appendChild(lbl);
    [['x','Share on X'],['facebook','Share on Facebook'],['linkedin','Share on LinkedIn']].forEach(function(n){
      var b=mkBtn(n[1],icons[n[0]]);b.addEventListener('click',function(){share(n[0]);});el.appendChild(b);
    });
    var copy=mkBtn('Copy link',icons.link);
    var toast=document.createElement('span');
    toast.className='ws-copied-toast';toast.textContent='Link Copied';
    copy.appendChild(toast);
    copy.addEventListener('click',function(){
      navigator.clipboard.writeText(location.href.split('#')[0]).then(function(){
        copy.classList.add('copied');toast.classList.add('show');
        clearTimeout(copy._wsT);
        copy._wsT=setTimeout(function(){copy.classList.remove('copied');toast.classList.remove('show');},1600);
      });
    });
    el.appendChild(copy);
  }
  function init(){
    var mounts=document.querySelectorAll('[data-ws-share],[data-tool-share]');
    if(mounts.length){ for(var i=0;i<mounts.length;i++)build(mounts[i]); return; }
    if(document.querySelector('.ws-share--float'))return;
    var main=document.getElementById('main')||document;
    // first <h2> that follows an <hr> (skips hero/cert cards on landing pages)
    var nodes=main.querySelectorAll('hr, h2'), seenHr=false, h2=null;
    for(var j=0;j<nodes.length;j++){
      if(nodes[j].tagName==='HR'){seenHr=true;}
      else if(seenHr){h2=nodes[j];break;}
    }
    if(!h2)h2=main.querySelector('h2');
    if(!h2)return;
    var bar=document.createElement('div');bar.className='ws-share ws-share--float';
    build(bar);
    h2.parentNode.insertBefore(bar,h2);
  }
  if(document.readyState!=='loading')init();
  else document.addEventListener('DOMContentLoaded',init);
})();
</script>
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
<!--<hr>-->

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
<!-- <script src="/lib/topnav/main.v1.0.108.js"></script> --> -->
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
<![endif]-->

</body>
</html>
