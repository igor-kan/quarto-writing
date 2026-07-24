<!DOCTYPE html>
<html lang="en-US">
<head>
<title>DSA Dijkstra's Algorithm</title>
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
<script src="../lib/vue@3.4.21.js"></script>
<style>
#main a[id] {
    position: relative;
    top: -100px;
}
.dsa_svg {
  max-width: 100%;
}
#vueApp .btnDiv {
  display: block;
  margin: auto;
  width: 160px;
}
#vueApp {
  width: 422px;
  padding-bottom: 10px;
  max-width: 100%;
  margin: 20px;
  border: solid black 1px;
}
@media only screen and (max-width: 470px) {
  #vueApp {
    margin: 20px 0;
  }
}
.allEdges {
  stroke: lightgray;
}.darkpagetheme .allEdges {
  stroke: dimgray;
}

.dijkstraEdges {
  stroke: black; 
  stroke-width: 2px; 
}.darkpagetheme .dijkstraEdges {
  stroke: whitesmoke;
}

.vertex {
  stroke: black;
  stroke-width: 1px;
  fill: darkgray;
  transition: fill 0.3s, r 0.3s;
}.darkpagetheme .vertex {
  stroke: whitesmoke;
  fill: gray;
}

.startVertex {
  stroke: black;
  stroke-width: 2px;
  fill: none;
}.darkpagetheme .startVertex {
  stroke: whitesmoke;
}

.finishedVertex {
  fill: rgb(84,164,99);
  stroke-width: 2px;
}.darkpagetheme .finishedVertex {
  fill: rgb(84,164,99);
}

.currentVertex {
  fill: rgb(252,252,113);
  stroke-width: 2px;
}.darkpagetheme .currentVertex {
  fill: #fc9f5b;
}

.v-enter-from {
  opacity: 0;
  /*transform: translate(100px, 100px);*/
}

.v-enter-to {
  opacity: 1;
  /*transform: translate(0, 0);*/
}

.v-enter-active,
.v-leave-active,
.v-move {
  transition: all 0.25s;
}

.v-leave-active {
  position: absolute;
}

.v-leave-from {
  opacity: 1;
}

.v-leave-to {
  opacity: 0;
}



.svgDataText{
    font-family: "Roboto Mono", monospace;
    fill: black;
    font-size: 20px;
}

.darkpagetheme .svgDataText{
    fill: #ddd;
}

#svgDiv-1 circle, #svgDiv-1 line, #svgDiv-1 path {
  transition: opacity 0.3s, stroke-width 0.3s, fill 0.3s;
}
.node {
  stroke: black;
  stroke-width: 1;
  fill: gainsboro;
}
.darkpagetheme .node {
  stroke: #ddd;
  fill: dimgray;
}

.nodePrinted {
  fill: #90ee90
}
.darkpagetheme .nodePrinted {
  fill: #54a563
}
.extraThick {
  stroke-width: 5;
}

.directed, .undirected, line, rect {
  stroke: black;
  stroke-width: 1;
  fill: none;
}
.darkpagetheme .directed, 
.darkpagetheme .undirected, 
.darkpagetheme line, 
.darkpagetheme path,
.darkpagetheme rect {
  stroke: #ddd;
  fill: none;
}

#arrowhead line {
  stroke: black;
  fill: black;
}
.darkpagetheme #arrowhead line {
    stroke: #ddd;
    fill: #ddd;
}
.svgDiv {
    /*width: 283px;*/
    width: 306px;
    max-width: 100%;
    height: auto;
}
#svgDiv11, #svgDiv12 {
  /*width: 308px;*/
  width: 333px;
}
.svgDiv p {
    font-family: monospace, monospace;
}
.svgDiv button {
    display: block;
    margin: auto;
}
#svgDiv-1 {
  border: solid black 1px;
  margin: 10px;
  padding: 10px;
  width: 328px;
}
.svgBalFac {
    font-family: "Roboto Mono", monospace;
    fill: black;
    /*font-size: 12px;*/
    font-size: 16px;
    opacity: 1;
}
.darkpagetheme .svgBalFac{
  fill: #ddd;
}
figcaption {
  text-align: center;
  font-style: italic;
}
.svgDataText.index {
  opacity: 0.5;
}
.thick {
  stroke-width: 3;
}
.active {
  fill: #fcfc62;
}
.darkpagetheme .active {
  fill: #736c26;
}
.visit {
    fill: #90ee90;
}
.darkpagetheme .visit {
  fill: #54a563;
}
.translucent {
  opacity: 0.5;
}
.ghost {
  opacity: 0;
}
.btnsWrap {
  display: flex;
  flex-direction: row;
  justify-content: center;
}
.btnsWrap button {
  margin: 0 10px;
}
</style>
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

<h2 class="left"><span class="left_h2">DSA</span> Tutorial</h2>
<a target="_top" href="index.php">DSA HOME</a>
<a target="_top" href="dsa_intro.php">DSA Intro</a>
<a target="_top" href="dsa_algo_simple.php" class="not-wired">DSA Simple Algorithm</a>
<br>
<h2 class="left"><span class="left_h2">Arrays</span></h2>
<a target="_top" href="dsa_data_arrays.php">DSA Arrays</a>
<a target="_top" href="dsa_algo_bubblesort.php">DSA Bubble Sort</a>
<a target="_top" href="dsa_algo_selectionsort.php">DSA Selection Sort</a>
<a target="_top" href="dsa_algo_insertionsort.php">DSA Insertion Sort</a>
<a target="_top" href="dsa_algo_quicksort.php">DSA Quick Sort</a>
<a target="_top" href="dsa_algo_countingsort.php">DSA Counting Sort</a>
<a target="_top" href="dsa_algo_radixsort.php">DSA Radix Sort</a>
<a target="_top" href="dsa_algo_mergesort.php">DSA Merge Sort</a>
<a target="_top" href="dsa_algo_linearsearch.php">DSA Linear Search</a>
<a target="_top" href="dsa_algo_binarysearch.php" class="not-wired">DSA Binary Search</a>
<br>
<h2 class="left"><span class="left_h2">Linked Lists</span></h2>
<a target="_top" href="dsa_theory_linkedlists.php">DSA Linked Lists</a>
<a target="_top" href="dsa_theory_linkedlists_memory.php">DSA Linked Lists<span style="font-size:90%"> in Memory</span></a>
<a target="_top" href="dsa_data_linkedlists_types.php">DSA Linked Lists Types</a>
<a target="_top" href="dsa_algo_linkedlists_operations.php" class="not-wired">Linked Lists Operations</a>
<br>
<h2 class="left"><span class="left_h2">Stacks & Queues</span></h2>
<a target="_top" href="dsa_data_stacks.php">DSA Stacks</a>
<a target="_top" href="dsa_data_queues.php" class="not-wired">DSA Queues</a>
<br>
<h2 class="left"><span class="left_h2">Hash Tables</span></h2>
<a target="_top" href="dsa_theory_hashtables.php">DSA Hash Tables</a>
<a target="_top" href="dsa_data_hashsets.php">DSA Hash Sets</a>
<a target="_top" href="dsa_data_hashmaps.php" class="not-wired">DSA Hash Maps</a>
<br>
<h2 class="left"><span class="left_h2">Trees</span></h2>
<a target="_top" href="dsa_theory_trees.php">DSA Trees</a>
<a target="_top" href="dsa_data_binarytrees.php">DSA Binary Trees</a>
<a target="_top" href="dsa_algo_binarytrees_preorder.php">DSA Pre-order Traversal</a>
<a target="_top" href="dsa_algo_binarytrees_inorder.php">DSA In-order Traversal</a>
<a target="_top" href="dsa_algo_binarytrees_postorder.php">DSA Post-order Traversal</a>
<a target="_top" href="dsa_data_binarytrees_arrayImpl.php">DSA Array Implementation</a>
<a target="_top" href="dsa_data_binarysearchtrees.php">DSA Binary Search Trees</a>
<a target="_top" href="dsa_data_avltrees.php" class="not-wired">DSA AVL Trees</a>
<br>
<h2 class="left"><span class="left_h2">Graphs</span></h2>
<a target="_top" href="dsa_theory_graphs.php">DSA Graphs</a>
<a target="_top" href="dsa_data_graphs_implementation.php">Graphs Implementation</a>
<a target="_top" href="dsa_algo_graphs_traversal.php">DSA Graphs Traversal</a>
<a target="_top" href="dsa_algo_graphs_cycledetection.php" class="not-wired">DSA Cycle Detection</a>
<br>
<h2 class="left"><span class="left_h2">Shortest Path</span></h2>
<a target="_top" href="dsa_theory_graphs_shortestpath.php">DSA Shortest Path</a>
<a target="_top" href="dsa_algo_graphs_dijkstra.php">DSA Dijkstra's</a>
<a target="_top" href="dsa_algo_graphs_bellmanford.php" class="not-wired">DSA Bellman-Ford</a>
<br>
<h2 class="left"><span class="left_h2">Minimum Spanning Tree</span></h2>
<a target="_top" href="dsa_theory_mst_minspantree.php">Minimum Spanning Tree</a>
<a target="_top" href="dsa_algo_mst_prim.php">DSA Prim's</a>
<a target="_top" href="dsa_algo_mst_kruskal.php" class="not-wired">DSA Kruskal's</a>
<br>
<h2 class="left"><span class="left_h2">Maximum Flow</span></h2>
<a target="_top" href="dsa_theory_graphs_maxflow.php">DSA Maximum Flow</a>
<a target="_top" href="dsa_algo_graphs_fordfulkerson.php">DSA Ford-Fulkerson</a>
<a target="_top" href="dsa_algo_graphs_edmondskarp.php" class="not-wired">DSA Edmonds-Karp</a>
<br>
<h2 class="left"><span class="left_h2">Time</span> Complexity</h2>
<a target="_top" href="dsa_timecomplexity_theory.php">Introduction</a>
<a target="_top" href="dsa_timecomplexity_bblsort.php">Bubble Sort</a>
<a target="_top" href="dsa_timecomplexity_selsort.php">Selection Sort</a>
<a target="_top" href="dsa_timecomplexity_insertionsort.php">Insertion Sort</a>
<a target="_top" href="dsa_timecomplexity_quicksort.php">Quick Sort</a>
<a target="_top" href="dsa_timecomplexity_countsort.php">Counting Sort</a>
<a target="_top" href="dsa_timecomplexity_radixsort.php">Radix Sort</a>
<a target="_top" href="dsa_timecomplexity_mergesort.php">Merge Sort</a>
<a target="_top" href="dsa_timecomplexity_linearsearch.php">Linear Search</a>
<a target="_top" href="dsa_timecomplexity_binarysearch.php" class="not-wired">Binary Search</a>
<br>
<h2 class="left"><span class="left_h2">DSA Cert</span></h2>
<a target="_top" class="no-checkmark" href="dsa_exam.php">DSA Certificate</a>
<br>
<h2 class="left"><span class="left_h2">DSA Reference</span></h2>
<a target="_top" class="no-checkmark" href="dsa_ref_euclidean_algorithm.php">DSA Euclidean Algorithm</a>
<a target="_top" class="no-checkmark" href="dsa_ref_huffman_coding.php">DSA Huffman Coding</a>
<a target="_top" class="no-checkmark" href="dsa_ref_traveling_salesman.php">DSA The Traveling Salesman</a>
<a target="_top" class="no-checkmark" href="dsa_ref_knapsack.php">DSA 0/1 Knapsack</a>
<a target="_top" class="no-checkmark" href="dsa_ref_memoization.php">DSA Memoization</a>
<a target="_top" class="no-checkmark" href="dsa_ref_tabulation.php">DSA Tabulation</a>
<a target="_top" class="no-checkmark" href="dsa_ref_dynamic_programming.php">DSA Dynamic Programming</a>
<a target="_top" class="no-checkmark" href="dsa_ref_greedy.php">DSA Greedy Algorithms</a>
<br>
<h2 class="left"><span class="left_h2">DSA Examples</span></h2>
<a target="_top" class="no-checkmark" href="dsa_examples.php">DSA Examples</a>
<a target="_top" class="no-checkmark" href="dsa_exercises.php">DSA Exercises</a>
<a target="_top" class="no-checkmark" href="dsa_quiz.php">DSA Quiz</a>
<a target="_top" class="no-checkmark" href="dsa_syllabus.php">DSA Syllabus</a>
<a target="_top" class="no-checkmark" href="dsa_study_plan.php">DSA Study Plan</a>

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
    <h1>DSA <span class="color_h1">Dijkstra's Algorithm</span></h1>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn" href="dsa_theory_graphs_shortestpath.php">&#10094; Previous</a>
<a class="w3-right w3-btn" href="dsa_algo_graphs_bellmanford.php">Next &#10095;</a>
</div>
<div class="ws-info">
  <p>Dijkstra's shortest path algorithm was invented in 1956 by the Dutch computer scientist Edsger W. Dijkstra during a twenty minutes coffee break, while out shopping with his fiancée in Amsterdam.</p>
  <p>The reason for inventing the algorithm was to test a new computer called ARMAC.</p>
</div>

<h2>Dijkstra's Algorithm</h2>
<p>Dijkstra's algorithm finds the shortest path from one vertex to all other vertices.</p>
<p>It does so by repeatedly selecting the nearest unvisited vertex and calculating the distance to all the unvisited neighboring vertices.</p>
<div id="vueApp">
    <!--<p>Speed: <input v-model="inpVal" type="range" min="500" max="900"> {{ inpVal }}</p>
    <button @click="action" :disabled="btnIsDisabled">{{ buttonText }}</button> {{ msgDone }}
    <br>-->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 420 400" class="dsa_svg">
      <transition-group>
        <line v-for="edge in edges" :x1="edge.x1" :y1="edge.y1" :x2="edge.x2" :y2="edge.y2" :key="edge.key" opacity="1" stroke-dasharray="5,5" class="allEdges" />
        <line v-for="edge in dijkstraEdges" 
          :x1="dice[edge.from].xpos" :y1="dice[edge.from].ypos"
          :x2="dice[edge.to].xpos" :y2="dice[edge.to].ypos"
          :key="`mst-${edge.from}-${edge.to}`" class="dijkstraEdges"/>
        <circle v-for="el in dice" 
          :key="el.keyNmbr"
          :cx="el.xpos" 
          :cy="el.ypos"
          :r="el.isCurrent ? 9 : 7"
          class="vertex"
          :class="{ 
            'currentVertex': el.isCurrent, 
            'finishedVertex': el.isFinished 
          }"
        />
        <circle v-if="startVertex" 
          key="startVertex"
          :cx="startVertex.xpos" 
          :cy="startVertex.ypos"
          r="12"
          class="startVertex"
        />
      </transition-group>
    </svg>
    <br>
    <div class="btnDiv">
      <button style="margin-right: 5px;" @click="action" :disabled="btnIsDisabled">{{ buttonText }}</button>{{ msgDone }}
    </div>
</div>
<script>
  const app = Vue.createApp({
    data() {
    return {
      startVertex: {xpos: 200, ypos: 200 },
      btnIsDisabled: true,
      msgDone: '',
      inpVal: 800,
      dice: [],
      edges: [],
      parents: [],
      distances: [],
      visited: [],
      keyNumber: 0,
      buttonText: 'New graph'
    }
  },
  computed: {
    delay() {
      return 900 + 50 - this.inpVal;
    },
    adjacencyMatrix() {
        const numVertices = this.dice.length;
        let matrix = Array.from({ length: numVertices }, () =>
            new Array(numVertices).fill(Infinity)
        );

        // Calculate distances between all pairs of vertices and store them directly.
        for (let i = 0; i < numVertices; i++) {
            for (let j = i + 1; j < numVertices; j++) { // Avoid duplicating efforts for undirected graph
                const dx = this.dice[i].xpos - this.dice[j].xpos;
                const dy = this.dice[i].ypos - this.dice[j].ypos;
                const distance = Math.sqrt(dx * dx + dy * dy);
                matrix[i][j] = distance;
                matrix[j][i] = distance; // Ensure symmetry for undirected graph
            }
        }
        
        return matrix;
    },
    dijkstraEdges() {
      // Initialize an array to hold the edges of the shortest path tree
      const dijkstraEdges = [];

      // Iterate through the parents array
      for (let child = 0; child < this.parents.length; child++) {
        const parent = this.parents[child];

        // Skip the source vertex (which has no parent) and any vertex not reached by Dijkstra's algorithm
        if (parent !== -1) {
          // Try to find the edge in the this.edges array that matches this parent-child relationship
          let edge = this.edges.find(e => e.from === parent && e.to === child);

          // If not found, try to find an edge in the opposite direction
          if (!edge) {
            edge = this.edges.find(e => e.from === child && e.to === parent);
          }

          // If the edge exists, add it to the dijkstraEdges array
          if (edge) {
            dijkstraEdges.push({
              ...edge,
              // Optionally mark the edge as bidirectional if needed
              isBidirectional: edge.from === child && edge.to === parent
            });
          }
        }
      }

      return dijkstraEdges;
    }
  },
  watch: {
    delay: {
      immediate: true,
      handler() {
        this.updateMoveDuration();
      },
    }
  },
  methods: {
    action(){
      this.btnIsDisabled = true;
      if(this.buttonText === "New graph") {
        this.msgDone = '';
        this.parents = [];
        this.collapse();
      }
      else {
        this.runDijkstrasAlgorithm();
      }
    },
    updateMoveDuration() {
      let stylesheets = document.styleSheets;
      for (let i = 0; i < stylesheets.length; i++) {
        let rules = stylesheets[i].cssRules || stylesheets[i].rules;
        for (let j = 0; j < rules.length; j++) {
          if (rules[j].selectorText === '.v-move') {
            rules[j].style.transitionDuration = this.delay + 'ms';
            break;
          }
        }
      }
    },
    async spreadOut() {
      // Wait a bit before starting to spread out the vertices
      await new Promise(resolve => setTimeout(resolve, 500));
      
      // Iterate over each vertex in the dice array
      for (let i = 0; i < this.dice.length; i++) {
        let isOverlap;
        do {
          // Generate new random positions for the current vertex
          const newX = Math.ceil(Math.random() * 380) + 20;
          const newY = Math.ceil(Math.random() * 360) + 20;

          // Temporarily update the vertex's position
          this.dice[i].xpos = newX;
          this.dice[i].ypos = newY;

          // Check for overlap with all other vertices
          isOverlap = this.dice.some((otherDie, j) => {
            if (i === j) return false; // Skip self
            const dx = this.dice[i].xpos - otherDie.xpos;
            const dy = this.dice[i].ypos - otherDie.ypos;
            const distance = Math.sqrt(dx * dx + dy * dy);
            return distance < 20; // Adjust the distance threshold as needed
          });

          // If there is an overlap, loop again; otherwise, the position is good
        } while (isOverlap);
      }

      await new Promise(resolve => setTimeout(resolve, 350));
      this.updateEdgesFromMatrix();
      this.markFarthestVertex();
    },
    async collapse() {
      // Remove edges, how?
      this.edges = [];
      this.parents = [];
      await new Promise(resolve => setTimeout(resolve, 350));
      for(let i=0; i<this.dice.length; i++){
        this.dice[i].xpos = 200;
        this.dice[i].ypos = 200;
        this.dice[i].isFinished = false;
      }
      this.startVertex.xpos = 200;
      this.startVertex.ypos = 200;
      await new Promise(resolve => setTimeout(resolve, 500));
      this.spreadOut();
    },
    async runDijkstrasAlgorithm() {
        await new Promise(resolve => setTimeout(resolve, 500));
        const numVertices = this.dice.length;
        this.distances = new Array(numVertices).fill(Infinity);
        this.parents = new Array(numVertices).fill(-1);
        this.visited = new Array(numVertices).fill(false);

        // Find the farthest vertex to start Dijkstra's algorithm
        const sourceIndex = this.dice.findIndex(vertex => vertex.isCurrent);
        this.distances[sourceIndex] = 0;

        for (let i = 0; i < numVertices; i++) {
            let u = this.selectMinDistanceVertex();
            this.visited[u] = true;
            this.dice[u].isFinished = true;
            for(let ind=0; ind<this.dice.length; ind++){
              this.dice[ind].isCurrent = false;
            }
            this.dice[u].isCurrent = true;
            await new Promise(resolve => setTimeout(resolve, 500));

            this.edges.forEach(edge => {
              // Consider the edge if u is either the start or the end of the edge
              if (!this.visited[edge.to] && edge.from === u) {
                let alt = this.distances[u] + edge.dist;
                if (alt < this.distances[edge.to]) {
                  this.distances[edge.to] = alt;
                  this.parents[edge.to] = u;
                }
              } else if (!this.visited[edge.from] && edge.to === u) { // This line is added
                let alt = this.distances[u] + edge.dist;
                if (alt < this.distances[edge.from]) {
                  this.distances[edge.from] = alt;
                  this.parents[edge.from] = u;
                }
              }
            });

            await new Promise(resolve => setTimeout(resolve, 500));
        }

        this.resetVisualizationMarkers();
    },
    selectMinDistanceVertex() {
        let minDistance = Infinity;
        let minIndex = -1;
        for (let i = 0; i < this.distances.length; i++) {
            if (!this.visited[i] && this.distances[i] < minDistance) {
                minDistance = this.distances[i];
                minIndex = i;
            }
        }
        return minIndex;
    },
    resetVisualizationMarkers() {
      // Reset markers for current and finished vertices
      this.dice.forEach(vertex => {
        vertex.isCurrent = false;
        vertex.isFinished = true;
      });
      this.msgDone = 'Done!';
      this.buttonText = "New graph";
      this.btnIsDisabled = false;
    },
    findMinKeyVertex(keyValues, inMST) {
      let min = Infinity, minIndex = -1;
      for (let v = 0; v < keyValues.length; v++) {
        if (!inMST[v] && keyValues[v] < min) {
          min = keyValues[v];
          minIndex = v;
        }
      }
      return minIndex;
    },
    delayMS(ms) {
      return new Promise(resolve => setTimeout(resolve, ms));
    },
    addDie() {
      let newDie;
      newDie = {
        dieNmbr: Math.ceil(Math.random() * 100),
        xpos: 200,
        ypos: 200,
        keyNmbr: this.keyNumber,
        isSwapped: false,
        isFinished: false,
        isCurrent: false
      };
      const vertexNames = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      const nameIndex = this.keyNumber % vertexNames.length; // Loop back if you have more than 26 vertices
      newDie.name = vertexNames[nameIndex];

      this.dice.push(newDie);
      this.keyNumber++;
    },
    addDie50() {
      this.dice = [];
      for (let i = 0; i < 18; i++) { //18
        this.addDie(); 
      }
      //this.buttonText = "Run Prim's";
      //this.msgDone = 'Done!';
      this.spreadOut();
    },
    updateEdgesFromMatrix() {
        this.edges = [];
        let edgeCount = new Array(this.adjacencyMatrix.length).fill(0);
        for (let i = 0; i < this.adjacencyMatrix.length; i++) {
          for (let j = i + 1; j < this.adjacencyMatrix[i].length; j++) {
            if (this.adjacencyMatrix[i][j] !== Infinity) {
              this.edges.push({
                from: i,
                to: j,
                x1: this.dice[i].xpos,
                y1: this.dice[i].ypos,
                x2: this.dice[j].xpos,
                y2: this.dice[j].ypos,
                dist: this.adjacencyMatrix[i][j],
                key: `${i}-${j}`
              });
              edgeCount[i]++;
              edgeCount[j]++;
            }
          }
        }

        this.edges.sort((a, b) => a.dist - b.dist);

        let hasChanges = true;

        while (hasChanges) {
            hasChanges = false; // Reset flag for each iteration

            for (let ed1 = 0; ed1 < this.edges.length - 1 && !hasChanges; ed1++) {
                for (let ed2 = ed1 + 1; ed2 < this.edges.length && !hasChanges; ed2++) {
                    if (this.doEdgesCross(this.edges[ed1], this.edges[ed2])) {
                        // Determine which edge to remove
                        if (this.edges[ed1].dist > this.edges[ed2].dist) {
                            this.edges.splice(ed1, 1); // Remove the longer edge
                        } else {
                            this.edges.splice(ed2, 1); // Remove the longer or equal edge
                        }
                        hasChanges = true; // Mark that a change was made
                    }
                }
            }
        }
        
        
        this.buttonText = "Run Dijkstra's";
        this.btnIsDisabled = false;
    },
    doEdgesCross(edge1, edge2) {
        // Unpack segment coordinates
        const x1 = edge1.x1;
        const y1 = edge1.y1;
        const x2 = edge1.x2;
        const y2 = edge1.y2;

        const x3 = edge2.x1;
        const y3 = edge2.y1;
        const x4 = edge2.x2;
        const y4 = edge2.y2;

        if ((x1 === x3 && y1 === y3) || (x1 === x4 && y1 === y4) ||
            (x2 === x3 && y2 === y3) || (x2 === x4 && y2 === y4)) {
          return false;
        }

        // Calculate denominators
        const den = (x1 - x2) * (y3 - y4) - (y1 - y2) * (x3 - x4);

        // If denominators are 0, segments are parallel and do not intersect
        if (den === 0) {
          return false;
        }

        // Calculate intersection point
        const t = ((x1 - x3) * (y3 - y4) - (y1 - y3) * (x3 - x4)) / den;
        const u = -((x1 - x2) * (y1 - y3) - (y1 - y2) * (x1 - x3)) / den;

        // If both t and u are between 0 and 1, segments intersect
        return (t >= 0 && t <= 1 && u >= 0 && u <= 1);
    },
    markFarthestVertex() {
      let randIndex = Math.floor(Math.random()*this.dice.length);
      this.dice.forEach(vertex => { vertex.isCurrent = false; }); // Reset current marker for all vertices
      this.dice[randIndex].isCurrent = true; // Mark the farthest vertex as current
      this.startVertex.xpos = this.dice[randIndex].xpos;
      this.startVertex.ypos = this.dice[randIndex].ypos;


      /*
      let maxDistance = 0;
      let farthestVertexIndex = -1;
      const centerX = 210;
      const centerY = 200;

      // Iterate through all vertices to find the farthest one
      this.dice.forEach((vertex, index) => {
        const distance = Math.sqrt(Math.pow(vertex.xpos - centerX, 2) + Math.pow(vertex.ypos - centerY, 2));
        if (distance > maxDistance) {
          maxDistance = distance;
          farthestVertexIndex = index;
        }
      });

      // Mark the farthest vertex as the current one for Dijkstra's start
      if (farthestVertexIndex !== -1) {
        this.dice.forEach(vertex => { vertex.isCurrent = false; }); // Reset current marker for all vertices
        this.dice[farthestVertexIndex].isCurrent = true; // Mark the farthest vertex as current
        this.startVertex.xpos = this.dice[farthestVertexIndex].xpos;
        this.startVertex.ypos = this.dice[farthestVertexIndex].ypos;
      }*/
    }
  },
  mounted() {
    this.addDie50();
    this.updateMoveDuration();
  }
  })
  app.mount('#vueApp')
</script>

<p>Dijkstra's algorithm is often considered to be the most straightforward algorithm for solving the shortest path problem.</p>
<p>Dijkstra's algorithm is used for solving single-source shortest path problems for directed or undirected paths. Single-source means that one vertex is chosen to be the start, and the algorithm will find the shortest path from that vertex to all other vertices.</p>
<p>Dijkstra's algorithm does not work for graphs with negative edges. For graphs with negative edges, the Bellman-Ford algorithm that is described on the next page, can be used instead.</p>
<p>To find the shortest path, Dijkstra's algorithm needs to know which vertex is the source, it needs a way to mark vertices as visited, and it needs an overview of the current shortest distance to each vertex as it works its way through the graph, updating these distances when a shorter distance is found.</p>
<div class="ws-info">
  <p><strong>How it works:</strong></p>
  <ol>
    <li>Set initial distances for all vertices: 0 for the source vertex, and infinity for all the other.</li>
    <li>Choose the unvisited vertex with the shortest distance from the start to be the current vertex. So the algorithm will always start with the source as the current vertex.</li>
    <li>For each of the current vertex's unvisited neighbor vertices, calculate the distance from the source and update the distance if the new, calculated, distance is lower.</li>
    <li>We are now done with the current vertex, so we mark it as visited. A visited vertex is not checked again.</li>
    <li>Go back to step 2 to choose a new current vertex, and keep repeating these steps until all vertices are visited.</li>
    <li>In the end we are left with the shortest path from the source vertex to every other vertex in the graph.</li>
  </ol>
</div>

<p>In the animation above, when a vertex is marked as visited, the vertex and its edges become faded to indicate that Dijkstra's algorithm is now done with that vertex, and will not visit it again.</p>
<div class='ws-note'>
  <p><strong>Note: </strong>This basic version of Dijkstra's algorithm gives us the value of the shortest path cost to every vertex, but not what the actual path is. So for example, in the animation above, we get the shortest path cost value 10 to vertex F, but the algorithm does not give us which vertices (D->E->C->D->F) that make up this shortest path. We will add this functionality further down here on this page.</p>
</div>

<hr>
<div id="midcontentadcontainer" style="overflow:auto;text-align:center">
<!-- MidContent -->
<!-- <p class="adtext">Advertisement</p> -->
</div><hr>

<h2>A Detailed Dijkstra Simulation</h2>
<p>Run the simulation below to get a more detailed understanding of how Dijkstra's algorithm runs on a specific graph, finding the shortest distances from vertex D.</p>
<div id="svgDiv-1" class="svgDiv">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 240" class="dsa_svg">
<defs>

</defs>
  <!-- 'F' node -->
  <g class="root parent" transform="translate(140 0)">
    <circle cx="170" cy="30" r="20" class="node F" />
    <text x="156" y="37" class="svgBalFac F weight">inf</text>
    <text x="184" y="58" class="svgBalFac F name">F</text>
  </g>

  <line x1="295" y1="43" x2="267" y2="68" class="directed FB" />
  <text x="269" y="55" class="svgBalFac FB">2</text>

  <path d="M 180 53 Q 212 -14 292 22" fill="none" stroke="black" stroke-width="1" class="CF" />
  <text x="227" y="26" class="svgBalFac CF" >5</text>
  <text x="227" y="26" class="svgBalFac CF ghost" >5</text>

  <line x1="90" y1="70" x2="151" y2="70" class="directed connected AC" />
  <text x="120" y="67" class="svgBalFac AC">3</text>

  <!-- 'B' node -->
  <g class="child leaf" transform="translate(80 -40)">
    <circle cx="170" cy="120" r="20" class="node B" />
    <text x="156" y="126" class="svgBalFac B weight">inf</text>
    <text x="175" y="153" class="svgBalFac B name">B</text>
  </g>
  <!-- 'C' node -->
  <g class="parent child" transform="translate(-100 -50)">
    <circle cx="271" cy="120" r="20" class="node C" />
    <text x="256" y="126" class="svgBalFac C weight">inf</text>
    <text x="266" y="97" class="svgBalFac C name">C</text>
  </g>
  <line x1="266" y1="174" x2="184" y2="85" class="directed GC" />
  <text x="212" y="140" class="svgBalFac GC">5</text>

  <line x1="284" y1="167" x2="306" y2="50" class="directed cyclic GF" />
  <!--<line x1="308" y1="50" x2="285" y2="167" class="undirected cyclic FG" />-->
  <text x="293" y="140" class="svgBalFac GF">5</text>

  <line x1="191" y1="72" x2="230" y2="78" class="directed CB" />
  <text x="208" y="72" class="svgBalFac CB">2</text>
  <text x="208" y="72" class="svgBalFac CB ghost">2</text>


  <!-- Nodes A, D, and E -->
  <g class="parent child" transform="translate(-10 -20)">
    <circle cx="80" cy="90" r="20" class="node A" />
    <text x="65" y="96" class="svgBalFac A weight">inf</text>
    <text x="97" y="75" class="svgBalFac A name">A</text>

    <line x1="48" y1="187" x2="74" y2="109" class="directed DA" />
    <text x="45" y="160" class="svgBalFac DA">4</text>
    <text x="45" y="160" class="svgBalFac DA ghost">4</text>

    <line x1="86" y1="110" x2="113" y2="188" class="directed AE" />
    <text x="89" y="160" class="svgBalFac AE">4</text>

    <circle cx="121" cy="207" r="20" class="node E" />
    <text x="107" y="212" class="svgBalFac E weight">inf</text>
    <text x="137" y="235" class="svgBalFac E name">E</text>

    <circle cx="41" cy="207" r="20" class="node D thick visit" />
    <text x="36" y="212" class="svgBalFac D weight" >0</text>
    <text x="57" y="235" class="svgBalFac D name" >D</text>
  </g>

  <!-- 'G' node -->
  <g class="child leaf" transform="translate(-110 -20)">
    <circle cx="391" cy="207" r="20" class="node G" />
    <text x="376" y="212" class="svgBalFac G weight">inf</text>
    <text x="407" y="235" class="svgBalFac G name">G</text>
  </g>

  <line x1="50" y1="187" x2="92" y2="187" class="directed connected DE" />
  <text x="65" y="183" class="svgBalFac DE" >2</text>
  <text x="65" y="183" class="svgBalFac DE ghost" >2</text>

  <line x1="131" y1="187" x2="262" y2="187" class="directed connected EG" />
  <text x="180" y="183" class="svgBalFac EG">5</text>
  <text x="180" y="183" class="svgBalFac EG ghost">5</text>

  <line x1="121" y1="169" x2="163" y2="88" class="directed connected EC" />
  <text x="125" y="140" class="svgBalFac EC" >4</text>
  <text x="125" y="140" class="svgBalFac EC ghost" >4</text> 

  <text x="105" y="192" class="svgBalFac E1 ghost" >2</text>
  <text x="105" y="192" class="svgBalFac E2 ghost" >2</text>

  <text x="165" y="76" class="svgBalFac C1 ghost" >6</text>
  <text x="165" y="76" class="svgBalFac C2 ghost" >6</text>

  <text x="244" y="87" class="svgBalFac B1 ghost">8</text>
  <text x="269" y="55" class="svgBalFac FB ghost">2</text>
</svg>
<div class="btnsWrap">
  <button class="play" style="width: 62px;" onclick="startStop();">Play</button>
  <button class="reset" onclick="tl1.restart();">Reset</button>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  let traverseBtn1 = document.querySelector('#svgDiv-1 button');
  let animStatus; // "running", "paused", "done"

  function startStop() {
    if(animState === "paused"){ // Play-command
      traverseBtn1.innerHTML = "Pause";
      animState = "running";
      tl1.play();
    }
    else if(animState === "running"){ // Pause-command
      traverseBtn1.innerHTML = "Play";
      animState = "paused";
      tl1.pause();
    }
    else if(animState === "done"){
      traverseBtn1.innerHTML = "Done";
      traverseBtn1.disabled = true;
      tl1.pause();
    }
  }

  // Create a new anime timeline
  // Idea: have a loose node A in addition, and checkboxes to enable edges E-C and FC, so that users can run different scenarios and choose to run a cycle detection that results in 'false'
let tl1 = anime.timeline({
  autoplay: true, // set to false if you want to control when the timeline start
  duration: 700,
  easing: 'easeInOutCubic',
  loop: false,
});

tl1.add({
  targets: '#svgDiv-1 circle, #svgDiv-1 text:not(.ghost), #svgDiv-1 line',
  opacity: 1,
  duration: 200,
  begin: function(anim){
    traverseBtn1.disabled = true;
    let nodesAndLines = document.querySelectorAll('#svgDiv-1 circle, #svgDiv-1 line');
    for(let i=0; i<nodesAndLines.length; i++){
      nodesAndLines[i].classList.remove('thick');
      nodesAndLines[i].classList.remove('visit');
      nodesAndLines[i].classList.remove('active');
    }
    document.querySelector('#svgDiv-1 circle.D').classList.add('thick');
    document.querySelector('#svgDiv-1 circle.D').classList.add('visit');
    document.querySelector('#svgDiv-1 text.F.weight').innerHTML = 'inf';
    document.querySelector('#svgDiv-1 text.C.weight').innerHTML = 'inf';
    document.querySelector('#svgDiv-1 text.G.weight').innerHTML = 'inf';
    document.querySelector('#svgDiv-1 text.B.weight').innerHTML = 'inf';

    document.querySelector('#svgDiv-1 text.EC.ghost').innerHTML = '4';
    document.querySelector('#svgDiv-1 text.EG.ghost').innerHTML = '5';
    document.querySelector('#svgDiv-1 text.CF.ghost').innerHTML = '5';
    document.querySelector('#svgDiv-1 text.CB.ghost').innerHTML = '2';
    document.querySelector('#svgDiv-1 text.FB.ghost').innerHTML = '2';

  },
  complete: function(anim){
    traverseBtn1.innerHTML = 'Play';
    traverseBtn1.disabled = false;
    animState = "running";
    startStop();
  }
})
.add({
  targets: '#svgDiv-1 text.DA.ghost, #svgDiv-1 text.DE.ghost',
  opacity: 1,
  begin: function(anim){
    //traverseBtn1.disabled = true;
    document.querySelector('#svgDiv-1 .DA').classList.add('thick');
    document.querySelector('#svgDiv-1 .DE').classList.add('thick');
    document.querySelector('#svgDiv-1 circle.A').classList.add('active');
    document.querySelector('#svgDiv-1 circle.E').classList.add('active');
  }
})
.add({
  targets: '#svgDiv-1 text.A.weight',
  opacity: 0
})
.add({
  targets: '#svgDiv-1 text.DA.ghost',
  x: 75,
  y: 96
},'-=400')
.add({
  duration: 500
})
.add({
  begin: function(anim){
    document.querySelector('#svgDiv-1 .DA').classList.remove('thick');
    document.querySelector('#svgDiv-1 circle.A').classList.remove('active');
  }
})
.add({
  targets: '#svgDiv-1 text.E.weight',
  opacity: 0
})
.add({
  targets: '#svgDiv-1 text.DE.ghost',
  x: 105,
  y: 192
},'-=400')
.add({
  duration: 500
})
.add({
  begin: function(anim){
    document.querySelector('#svgDiv-1 .DE').classList.remove('thick');
    document.querySelector('#svgDiv-1 circle.E').classList.remove('active');
  }
})
.add({
  begin: function(anim){
    document.querySelector('#svgDiv-1 circle.D').classList.remove('thick');
  }
})
.add({
  targets: '#svgDiv-1 circle.D, #svgDiv-1 text.D, #svgDiv-1 line.DE, #svgDiv-1 line.DA, #svgDiv-1 text.DE:not(.ghost), #svgDiv-1 text.DA:not(.ghost)',
  opacity: 0.5,
  duration: 300
},'-=700')
.add({
  duration: 500
})
.add({
  targets: '#svgDiv-1 text.EC.ghost, #svgDiv-1 text.EG.ghost, #svgDiv-1 text.E1.ghost, #svgDiv-1 text.E2.ghost',
  opacity: 1,
  begin: function(anim){
    document.querySelector('#svgDiv-1 circle.E').classList.add('thick');
    document.querySelector('#svgDiv-1 circle.E').classList.add('visit');
    document.querySelector('#svgDiv-1 .AE').classList.add('thick');
    document.querySelector('#svgDiv-1 .EC').classList.add('thick');
    document.querySelector('#svgDiv-1 .EG').classList.add('thick');
    document.querySelector('#svgDiv-1 circle.A').classList.add('active');
    document.querySelector('#svgDiv-1 circle.C').classList.add('active');
    document.querySelector('#svgDiv-1 circle.G').classList.add('active');
  }
})
.add({
  duration: 700
})
.add({
  begin: function(anim){
    document.querySelector('#svgDiv-1 .AE').classList.remove('thick');
    document.querySelector('#svgDiv-1 circle.A').classList.remove('active');
  }
})
.add({
  targets: '#svgDiv-1 text.EC.ghost, #svgDiv-1 text.EG.ghost, #svgDiv-1 text.E1.ghost, #svgDiv-1 text.E2.ghost',
  opacity: 1
})
.add({
  targets: '#svgDiv-1 text.C.weight',
  opacity: 0
})
.add({
  targets: '#svgDiv-1 text.EC.ghost',
  x: 155,
  y: 76
},'-=400')
.add({
  duration: 500
})
.add({
  begin: function(anim){
    document.querySelector('#svgDiv-1 text.EC.ghost').innerHTML += '+';
    document.querySelector('#svgDiv-1 text.C.weight').innerHTML = '6';
  }
})
.add({
  targets: '#svgDiv-1 text.E1.ghost',
  x: 175,
  y: 76
})
.add({
  targets: '#svgDiv-1 text.C.weight',
  x: 265
},'-=700')
.add({
  targets: '#svgDiv-1 text.EC.ghost, #svgDiv-1 text.E1.ghost',
  opacity: 0
})
.add({
  targets: '#svgDiv-1 text.C.weight',
  opacity: 1
})
.add({
  duration: 500
})
.add({
  begin: function(anim){
    document.querySelector('#svgDiv-1 .EC').classList.remove('thick');
    document.querySelector('#svgDiv-1 circle.C').classList.remove('active');
  }
})
.add({
  targets: '#svgDiv-1 text.G.weight',
  opacity: 0
})
.add({
  targets: '#svgDiv-1 text.EG.ghost',
  x: 266,
  y: 192
},'-=400')
.add({
  duration: 500
})
.add({
  targets: '#svgDiv-1 text.EC.ghost',
  x: 165,
  begin: function(anim){
    document.querySelector('#svgDiv-1 text.EG.ghost').innerHTML += '+';
    document.querySelector('#svgDiv-1 text.G.weight').innerHTML = '7';
  }
})
.add({
  targets: '#svgDiv-1 text.G.weight',
  x: 386
},'-=700')
.add({
  targets: '#svgDiv-1 text.E2.ghost',
  x: 285
})
.add({
  targets: '#svgDiv-1 text.E2.ghost, #svgDiv-1 text.EG.ghost',
  opacity: 0
})
.add({
  targets: '#svgDiv-1 text.G.weight',
  opacity: 1
})
.add({
  duration: 500
})
.add({
  begin: function(anim){
    document.querySelector('#svgDiv-1 .AE').classList.remove('thick');
    document.querySelector('#svgDiv-1 .EC').classList.remove('thick');
    document.querySelector('#svgDiv-1 .EG').classList.remove('thick');
    document.querySelector('#svgDiv-1 circle.C').classList.remove('active');
    document.querySelector('#svgDiv-1 circle.G').classList.remove('active');
    document.querySelector('#svgDiv-1 circle.E').classList.remove('thick');
  }
})
.add({
  targets: '#svgDiv-1 circle.E, #svgDiv-1 text.DE.ghost, #svgDiv-1 line.AE, #svgDiv-1 line.EC, #svgDiv-1 line.EG, #svgDiv-1 text.AE, #svgDiv-1 text.EC:not(.ghost), #svgDiv-1 text.EG:not(.ghost), #svgDiv-1 text.E.name',
  opacity: 0.5,
  duration: 300
},'-=700')
.add({
  duration: 500
})
.add({
  begin: function(anim){
    document.querySelector('#svgDiv-1 circle.A').classList.add('thick');
    document.querySelector('#svgDiv-1 circle.A').classList.add('visit');
    document.querySelector('#svgDiv-1 circle.C').classList.add('active');
    document.querySelector('#svgDiv-1 line.AC').classList.add('thick');
  }
})
.add({
  begin: function(anim){
    document.querySelector('#svgDiv-1 .AC').classList.remove('thick');
    document.querySelector('#svgDiv-1 circle.A').classList.remove('thick');
    document.querySelector('#svgDiv-1 circle.C').classList.remove('active');
  }
})
.add({
  targets: '#svgDiv-1 circle.A, #svgDiv-1 text.AC, #svgDiv-1 line.AC, #svgDiv-1 text.A.name, #svgDiv-1 text.DA.ghost',
  opacity: 0.5,
  duration: 300
},'-=700')
.add({
  duration: 500
})
.add({
  begin: function(anim){
    document.querySelector('#svgDiv-1 circle.C').classList.add('thick');
    document.querySelector('#svgDiv-1 circle.C').classList.add('visit');
    document.querySelector('#svgDiv-1 path.CF').classList.add('thick');
    document.querySelector('#svgDiv-1 line.CB').classList.add('thick');
    document.querySelector('#svgDiv-1 line.GC').classList.add('thick');
    document.querySelector('#svgDiv-1 circle.F').classList.add('active');
    document.querySelector('#svgDiv-1 circle.B').classList.add('active');
    document.querySelector('#svgDiv-1 circle.G').classList.add('active');
  }
})
.add({
  targets: '#svgDiv-1 text.C1, #svgDiv-1 text.C2, #svgDiv-1 text.CF.ghost, #svgDiv-1 text.CB.ghost',
  opacity: 1
})
.add({
  targets: '#svgDiv-1 text.F.weight',
  opacity: 0
})
.add({
  targets: '#svgDiv-1 text.CF.ghost',
  x: 295,
  y: 37
},'-=400')
.add({
  duration: 500
})
.add({
  begin: function(anim){
    document.querySelector('#svgDiv-1 text.CF.ghost').innerHTML += '+';
    document.querySelector('#svgDiv-1 text.F.weight').innerHTML = '11';
  }
})
.add({
  targets: '#svgDiv-1 text.C1.ghost',
  x: 315,
  y: 37
})
.add({
  targets: '#svgDiv-1 text.F.weight',
  x: 160,
  y: 37
},'-=700')
.add({
  targets: '#svgDiv-1 text.CF.ghost, #svgDiv-1 text.C1.ghost',
  opacity: 0
})
.add({
  targets: '#svgDiv-1 text.F.weight',
  opacity: 1
})
.add({
  duration: 500
})
.add({
  begin: function(anim){
    document.querySelector('#svgDiv-1 path.CF').classList.remove('thick');
    document.querySelector('#svgDiv-1 circle.F').classList.remove('active');
  }
})
.add({
  targets: '#svgDiv-1 text.B.weight',
  opacity: 0
})
.add({
  targets: '#svgDiv-1 text.CB.ghost',
  x: 235,
  y: 87
},'-=400')
.add({
  duration: 500
})
.add({
  begin: function(anim){
    document.querySelector('#svgDiv-1 text.CB.ghost').innerHTML += '+';
    document.querySelector('#svgDiv-1 text.B.weight').innerHTML = '8';
  }
})
.add({
  targets: '#svgDiv-1 text.C2.ghost',
  x: 255,
  y: 87
})
.add({
  targets: '#svgDiv-1 text.B.weight',
  x: 164,
  y: 127
},'-=700')
.add({
  targets: '#svgDiv-1 text.CB.ghost, #svgDiv-1 text.C2.ghost',
  opacity: 0
})
.add({
  targets: '#svgDiv-1 text.B.weight',
  opacity: 1
})
.add({
  duration: 500
})
.add({
  begin: function(anim){
    document.querySelector('#svgDiv-1 line.CB').classList.remove('thick');
    document.querySelector('#svgDiv-1 circle.B').classList.remove('active');
  }
})
.add({
  duration: 500
})
.add({
  begin: function(anim){
    document.querySelector('#svgDiv-1 line.GC').classList.remove('thick');
    document.querySelector('#svgDiv-1 circle.C').classList.remove('thick');
    document.querySelector('#svgDiv-1 circle.G').classList.remove('active');
  }
})
.add({
  targets: '#svgDiv-1 circle.C, #svgDiv-1 text.C.weight, #svgDiv-1 text.C.name, #svgDiv-1 path.CF, #svgDiv-1 line.CB, #svgDiv-1 line.GC, #svgDiv-1 text.CF:not(.ghost), #svgDiv-1 text.CB:not(.ghost), #svgDiv-1 text.GC:not(.ghost)',
  opacity: 0.5,
  duration: 300
},'-=700')
.add({
  duration: 500
})
.add({
  begin: function(anim){
    document.querySelector('#svgDiv-1 circle.G').classList.add('thick');
    document.querySelector('#svgDiv-1 circle.G').classList.add('visit');
    document.querySelector('#svgDiv-1 line.GF').classList.add('thick');
    document.querySelector('#svgDiv-1 circle.F').classList.add('active');
  }
})
.add({
  duration: 500
})
.add({
  begin: function(anim){
    document.querySelector('#svgDiv-1 circle.G').classList.remove('thick');
    document.querySelector('#svgDiv-1 line.GF').classList.remove('thick');
    document.querySelector('#svgDiv-1 circle.F').classList.remove('active');
  }
})
.add({
  targets: '#svgDiv-1 circle.G, #svgDiv-1 text.G.weight, #svgDiv-1 text.G.name, #svgDiv-1 text.GF, #svgDiv-1 line.GF',
  opacity: 0.5,
  duration: 300
},'-=700')
.add({
  duration: 500
})
.add({
  begin: function(anim){
    document.querySelector('#svgDiv-1 circle.B').classList.add('thick');
    document.querySelector('#svgDiv-1 circle.B').classList.add('visit');
    document.querySelector('#svgDiv-1 line.FB').classList.add('thick');
    document.querySelector('#svgDiv-1 circle.F').classList.add('active');
  }
})
.add({
  targets: '#svgDiv-1 text.B1, #svgDiv-1 text.FB.ghost',
  opacity: 1
})
.add({
  targets: '#svgDiv-1 text.F.weight',
  opacity: 0
})
.add({
  targets: '#svgDiv-1 text.FB.ghost',
  x: 295,
  y: 37
},'-=400')
.add({
  duration: 500
})
.add({
  targets: '#svgDiv-1 text.F.weight',
  begin: function(anim){
    document.querySelector('#svgDiv-1 text.FB.ghost').innerHTML += '+';
    document.querySelector('#svgDiv-1 text.F.weight').innerHTML = '10';
  }
})
.add({
  targets: '#svgDiv-1 text.B1.ghost',
  x: 315,
  y: 37
})
.add({
  targets: '#svgDiv-1 text.FB.ghost, #svgDiv-1 text.B1.ghost',
  opacity: 0
})
.add({
  targets: '#svgDiv-1 text.F.weight',
  opacity: 1
})
.add({
  duration: 500
})
.add({
  begin: function(anim){
    document.querySelector('#svgDiv-1 circle.B').classList.remove('thick');
    document.querySelector('#svgDiv-1 line.FB').classList.remove('thick');
    document.querySelector('#svgDiv-1 circle.F').classList.remove('active');
  }
})
.add({
  targets: '#svgDiv-1 circle.B, #svgDiv-1 text.B.weight, #svgDiv-1 text.B.name, #svgDiv-1 text.FB:not(.ghost), #svgDiv-1 line.FB',
  opacity: 0.5,
  duration: 300
},'-=700')
.add({
  targets: '#svgDiv-1 circle.B, #svgDiv-1 text.B.weight, #svgDiv-1 text.B.name, #svgDiv-1 text.FB:not(.ghost), #svgDiv-1 line.FB, #svgDiv-1 circle.C, #svgDiv-1 text.C.weight, #svgDiv-1 text.C.name, #svgDiv-1 text.CB:not(.ghost), #svgDiv-1 line.CB, #svgDiv-1 circle.G, #svgDiv-1 text.G.weight, #svgDiv-1 text.G.name, #svgDiv-1 text.GF:not(.ghost), #svgDiv-1 line.GF, #svgDiv-1 path.CF, #svgDiv-1 text.CF:not(.ghost), #svgDiv-1 line.GC, #svgDiv-1 text.GC:not(.ghost), #svgDiv-1 line.EG, #svgDiv-1 text.EG:not(.ghost), #svgDiv-1 line.AC, #svgDiv-1 text.AC:not(.ghost), #svgDiv-1 line.DA, #svgDiv-1 text.DA, #svgDiv-1 line.DE, #svgDiv-1 text.DE, #svgDiv-1 line.AE, #svgDiv-1 text.AE:not(.ghost), #svgDiv-1 line.EC, #svgDiv-1 text.EC:not(.ghost), #svgDiv-1 circle.A, #svgDiv-1 text.A.name, #svgDiv-1 circle.E, #svgDiv-1 text.E.name, #svgDiv-1 circle.D, #svgDiv-1 text.D.weight, #svgDiv-1 text.D.name',
  opacity: 1,
  duration: 300,
  begin: function(anim){
    document.querySelector('#svgDiv-1 circle.F').classList.add('visit');
  }
})
.add({
  begin: function(anim){
    //traverseBtn1.innerHTML = 'Reset';
    //traverseBtn1.disabled = false;
  },
  complete: function(anim){
    animState = "done";
    startStop();
    //tl1.pause();
  }
})
.add({
  duration: 10,
  begin: function(anim){
    //tl1.restart();
  }
})
</script>
<p>This simulation shows how distances are calculated from vertex D to all other vertices, by always choosing the next vertex to be the closest unvisited vertex from the starting point.</p>
<p>Follow the step-by-step description below to get all the details of how Dijkstra's algorithm calculates the shortest distances.</p>
<hr>

<h2>Manual Run Through</h2>
<p>Consider the Graph below.</p>
<div id="svgDiv0" class="svgDiv"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 210" class="dsa_svg">
<defs>

</defs>
  <!-- 'F' node -->
  <g class="root parent" transform="translate(140 0)">
    <circle cx="170" cy="30" r="20" class="node" />
    <text x="164" y="37" class="svgDataText">F</text>
  </g>

  <line x1="295" y1="43" x2="267" y2="68" class="directed FB" />
  <text x="269" y="55" class="svgBalFac">2</text>

  <path d="M 180 53 Q 212 -14 292 22" fill="none" stroke="black" stroke-width="1" class="CF" />
  <text x="227" y="26" class="svgBalFac" >5</text>

  <line x1="90" y1="70" x2="151" y2="70" class="directed connected AC" />
  <text x="120" y="67" class="svgBalFac connected">3</text>

  <line x1="121" y1="169" x2="163" y2="88" class="directed connected EC" />
  <text x="125" y="140" class="svgBalFac connected" >4</text>

  <line x1="131" y1="187" x2="265" y2="187" class="directed connected EG" />
  <text x="180" y="183" class="svgBalFac connected">5</text>

  <line x1="50" y1="187" x2="92" y2="187" class="directed connected DE" />
  <text x="65" y="183" class="svgBalFac connected" >2</text>
  <!-- 'B' node -->
  <g class="child leaf" transform="translate(80 -40)">
    <circle cx="170" cy="120" r="20" class="node" />
    <text x="164" y="126" class="svgDataText">B</text>
  </g>
  <!-- 'C' node -->
  <g class="parent child" transform="translate(-100 -50)">
    <circle cx="271" cy="120" r="20" class="node" />
    <text x="265" y="126" class="svgDataText">C</text>
  </g>
  <line x1="266" y1="174" x2="184" y2="85" class="directed GC" />
  <text x="212" y="140" class="svgBalFac">5</text>

  <line x1="284" y1="167" x2="306" y2="50" class="directed cyclic GF" />
  <!--<line x1="308" y1="50" x2="285" y2="167" class="undirected cyclic FG" />-->
  <text x="294" y="140" class="svgBalFac cyclicWeight">5</text>

  <line x1="191" y1="72" x2="230" y2="78" class="directed CB" />
  <text x="208" y="72" class="svgBalFac">2</text>


  <!-- Nodes A, D, and E -->
  <g class="parent child" transform="translate(-10 -20)">
    <circle cx="80" cy="90" r="20" class="node" />
    <text x="73" y="96" class="svgDataText">A</text>
    <line x1="48" y1="187" x2="74" y2="109" class="directed DA" />
    <text x="45" y="160" class="svgBalFac">4</text>

    <line x1="86" y1="110" x2="113" y2="188" class="directed AE" />
    <text x="89" y="160" class="svgBalFac">4</text>

    <circle cx="121" cy="207" r="20" class="node" />
    <text x="115" y="213" class="svgDataText">E</text>
    <circle cx="41" cy="207" r="20" class="node" />
    <text x="35" y="213" class="svgDataText" >D</text>
  </g>

  <!-- 'G' node -->
  <g class="child leaf" transform="translate(-110 -20)">
    <circle cx="391" cy="207" r="20" class="node" />
    <text x="385" y="213" class="svgDataText">G</text>
  </g>
</svg></div>
<p>We want to find the shortest path from the source vertex D to all other vertices, so that for example the shortest path to C is D->E->C, with path weight 2+4=6.</p>
<p>To find the shortest path, Dijkstra's algorithm uses an array with the distances to all other vertices, and initially sets these distances to infinite, or a very big number. And the distance to the vertex we start from (the source) is set to 0.</p>
<div class="w3-example">
<pre class="language-python notranslate w3-white"><code>distances = [inf, inf, inf, 0, inf, inf, inf]
#vertices   [ A ,  B ,  C , D,  E ,  F ,  G ]
</code></pre>
</div>
<p>The image below shows the initial infinite distances to other vertices from the starting vertex D. The distance value for vertex D is 0 because that is the starting point.</p>
<div id="svgDiv1" class="svgDiv"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 240" class="dsa_svg">
<defs>

</defs>
  <!-- 'F' node -->
  <g class="root parent" transform="translate(140 0)">
    <circle cx="170" cy="30" r="20" class="node" />
    <text x="156" y="37" class="svgBalFac">inf</text>
    <text x="184" y="58" class="svgBalFac">F</text>
  </g>

  <line x1="295" y1="43" x2="267" y2="68" class="directed FB" />
  <text x="269" y="55" class="svgBalFac">2</text>

  <path d="M 180 53 Q 212 -14 292 22" fill="none" stroke="black" stroke-width="1" class="CF" />
  <text x="227" y="26" class="svgBalFac" >5</text>

  <line x1="90" y1="70" x2="151" y2="70" class="directed connected AC" />
  <text x="120" y="67" class="svgBalFac connected">3</text>

  <line x1="121" y1="169" x2="163" y2="88" class="directed connected EC" />
  <text x="125" y="140" class="svgBalFac connected" >4</text>

  <line x1="131" y1="187" x2="265" y2="187" class="directed connected EG" />
  <text x="180" y="183" class="svgBalFac connected">5</text>

  <line x1="50" y1="187" x2="92" y2="187" class="directed connected DE" />
  <text x="65" y="183" class="svgBalFac connected" >2</text>
  <!-- 'B' node -->
  <g class="child leaf" transform="translate(80 -40)">
    <circle cx="170" cy="120" r="20" class="node" />
    <text x="156" y="126" class="svgBalFac">inf</text>
    <text x="175" y="153" class="svgBalFac">B</text>
  </g>
  <!-- 'C' node -->
  <g class="parent child" transform="translate(-100 -50)">
    <circle cx="271" cy="120" r="20" class="node" />
    <text x="257" y="126" class="svgBalFac">inf</text>
    <text x="266" y="97" class="svgBalFac">C</text>
  </g>
  <line x1="266" y1="174" x2="184" y2="85" class="directed GC" />
  <text x="212" y="140" class="svgBalFac">5</text>

  <line x1="284" y1="167" x2="306" y2="50" class="directed cyclic GF" />
  <!--<line x1="308" y1="50" x2="285" y2="167" class="undirected cyclic FG" />-->
  <text x="293" y="140" class="svgBalFac cyclicWeight">5</text>

  <line x1="191" y1="72" x2="230" y2="78" class="directed CB" />
  <text x="208" y="72" class="svgBalFac">2</text>


  <!-- Nodes A, D, and E -->
  <g class="parent child" transform="translate(-10 -20)">
    <circle cx="80" cy="90" r="20" class="node" />
    <text x="65" y="96" class="svgBalFac">inf</text>
    <text x="97" y="75" class="svgBalFac">A</text>
    <line x1="48" y1="187" x2="74" y2="109" class="directed DA" />
    <text x="45" y="160" class="svgBalFac">4</text>

    <line x1="86" y1="110" x2="113" y2="188" class="directed AE" />
    <text x="89" y="160" class="svgBalFac">4</text>

    <circle cx="121" cy="207" r="20" class="node" />
    <text x="107" y="213" class="svgBalFac">inf</text>
    <text x="137" y="235" class="svgBalFac">E</text>

    <circle cx="41" cy="207" r="20" class="node" />
    <text x="35" y="213" class="svgBalFac" >0</text>
    <text x="57" y="235" class="svgBalFac" >D</text>
  </g>

  <!-- 'G' node -->
  <g class="child leaf" transform="translate(-110 -20)">
    <circle cx="391" cy="207" r="20" class="node" />
    <text x="377" y="213" class="svgBalFac">inf</text>
    <text x="407" y="235" class="svgBalFac">G</text>
  </g>
</svg></div>
<p>Dijkstra's algorithm then sets vertex D as the current vertex, and looks at the distance to the adjacent vertices. Since the initial distance to vertices A and E is infinite, the new distance to these are updated with the edge weights. So vertex A gets the distance changed from inf to 4, and vertex E gets the distance changed to 2. As mentioned on the previous page, updating the distance values in this way is called 'relaxing'.</p>
<div id="svgDiv2" class="svgDiv"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 240" class="dsa_svg">
<defs>

</defs>
  <!-- 'F' node -->
  <g class="root parent" transform="translate(140 0)">
    <circle cx="170" cy="30" r="20" class="node" />
    <text x="156" y="37" class="svgBalFac">inf</text>
    <text x="184" y="58" class="svgBalFac">F</text>
  </g>

  <line x1="295" y1="43" x2="267" y2="68" class="directed FB" />
  <text x="269" y="55" class="svgBalFac">2</text>

  <path d="M 180 53 Q 212 -14 292 22" fill="none" stroke="black" stroke-width="1" class="CF" />
  <text x="227" y="26" class="svgBalFac" >5</text>

  <line x1="90" y1="70" x2="151" y2="70" class="directed connected AC" />
  <text x="120" y="67" class="svgBalFac connected">3</text>

  <line x1="121" y1="169" x2="163" y2="88" class="directed connected EC" />
  <text x="125" y="140" class="svgBalFac connected" >4</text>

  <line x1="131" y1="187" x2="265" y2="187" class="directed connected EG" />
  <text x="180" y="183" class="svgBalFac connected">5</text>

  <line x1="50" y1="187" x2="92" y2="187" class="directed connected DE thick" />
  <text x="65" y="183" class="svgBalFac connected" >2</text>
  <!-- 'B' node -->
  <g class="child leaf" transform="translate(80 -40)">
    <circle cx="170" cy="120" r="20" class="node" />
    <text x="156" y="126" class="svgBalFac">inf</text>
    <text x="175" y="153" class="svgBalFac">B</text>
  </g>
  <!-- 'C' node -->
  <g class="parent child" transform="translate(-100 -50)">
    <circle cx="271" cy="120" r="20" class="node" />
    <text x="257" y="126" class="svgBalFac">inf</text>
    <text x="266" y="97" class="svgBalFac">C</text>
  </g>
  <line x1="266" y1="174" x2="184" y2="85" class="directed GC" />
  <text x="212" y="140" class="svgBalFac">5</text>

  <line x1="284" y1="167" x2="306" y2="50" class="directed cyclic GF" />
  <!--<line x1="308" y1="50" x2="285" y2="167" class="undirected cyclic FG" />-->
  <text x="293" y="140" class="svgBalFac cyclicWeight">5</text>

  <line x1="191" y1="72" x2="230" y2="78" class="directed CB" />
  <text x="208" y="72" class="svgBalFac">2</text>


  <!-- Nodes A, D, and E -->
  <g class="parent child" transform="translate(-10 -20)">
    <circle cx="80" cy="90" r="20" class="node active" />
    <text x="75" y="95" class="svgBalFac">4</text>
    <text x="97" y="75" class="svgBalFac">A</text>

    <line x1="48" y1="187" x2="74" y2="109" class="directed DA thick" />
    <text x="45" y="160" class="svgBalFac">4</text>

    <line x1="86" y1="110" x2="113" y2="188" class="directed AE" />
    <text x="89" y="160" class="svgBalFac">4</text>

    <circle cx="121" cy="207" r="20" class="node active" />
    <text x="117" y="212" class="svgBalFac">2</text>
    <text x="137" y="235" class="svgBalFac">E</text>

    <circle cx="41" cy="207" r="20" class="node thick visit" />
    <text x="36" y="212" class="svgBalFac" >0</text>
    <text x="57" y="235" class="svgBalFac" >D</text>
  </g>

  <!-- 'G' node -->
  <g class="child leaf" transform="translate(-110 -20)">
    <circle cx="391" cy="207" r="20" class="node" />
    <text x="377" y="213" class="svgBalFac">inf</text>
    <text x="407" y="235" class="svgBalFac">G</text>
  </g>
</svg></div>
<p>After relaxing vertices A and E, vertex D is considered visited, and will not be visited again.</p>
<p>The next vertex to be chosen as the current vertex must the vertex with the shortest distance to the source vertex (vertex D), among the previously unvisited vertices. Vertex E is therefore chosen as the current vertex after vertex D.</p>
<div id="svgDiv3" class="svgDiv"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 240" class="dsa_svg">
  <!-- 'F' node -->
  <g class="root parent" transform="translate(140 0)">
    <circle cx="170" cy="30" r="20" class="node" />
    <text x="156" y="37" class="svgBalFac">inf</text>
    <text x="184" y="58" class="svgBalFac">F</text>
  </g>

  <line x1="295" y1="43" x2="267" y2="68" class="directed FB" />
  <text x="269" y="55" class="svgBalFac">2</text>

  <path d="M 180 53 Q 212 -14 292 22" fill="none" stroke="black" stroke-width="1" class="CF" />
  <text x="227" y="26" class="svgBalFac" >5</text>

  <line x1="90" y1="70" x2="151" y2="70" class="directed connected AC" />
  <text x="120" y="67" class="svgBalFac connected">3</text>

  <line x1="121" y1="169" x2="163" y2="88" class="directed connected EC thick" />
  <text x="125" y="140" class="svgBalFac connected" >4</text>

  <line x1="131" y1="187" x2="265" y2="187" class="directed connected EG thick" />
  <text x="180" y="183" class="svgBalFac connected">5</text>

  <line x1="50" y1="187" x2="92" y2="187" class="directed connected DE translucent" />
  <text x="65" y="183" class="svgBalFac connected translucent" >2</text>
  <!-- 'B' node -->
  <g class="child leaf" transform="translate(80 -40)">
    <circle cx="170" cy="120" r="20" class="node" />
    <text x="156" y="126" class="svgBalFac">inf</text>
    <text x="175" y="153" class="svgBalFac">B</text>
  </g>
  <!-- 'C' node -->
  <g class="parent child" transform="translate(-100 -50)">
    <circle cx="271" cy="120" r="20" class="node active" />
    <text x="266" y="125" class="svgBalFac">6</text>
    <text x="266" y="97" class="svgBalFac">C</text>
  </g>
  <line x1="266" y1="174" x2="184" y2="85" class="directed GC" />
  <text x="212" y="140" class="svgBalFac">5</text>

  <line x1="284" y1="167" x2="306" y2="50" class="directed cyclic GF" />
  <!--<line x1="308" y1="50" x2="285" y2="167" class="undirected cyclic FG" />-->
  <text x="293" y="140" class="svgBalFac cyclicWeight">5</text>

  <line x1="191" y1="72" x2="230" y2="78" class="directed CB" />
  <text x="208" y="72" class="svgBalFac">2</text>


  <!-- Nodes A, D, and E -->
  <g class="parent child" transform="translate(-10 -20)">
    <circle cx="80" cy="90" r="20" class="node" />
    <text x="75" y="95" class="svgBalFac">4</text>
    <text x="97" y="75" class="svgBalFac">A</text>

    <line x1="48" y1="187" x2="74" y2="109" class="directed DA translucent" />
    <text x="45" y="160" class="svgBalFac translucent">4</text>

    <line x1="86" y1="110" x2="113" y2="188" class="directed AE thick" />
    <text x="89" y="160" class="svgBalFac">4</text>

    <circle cx="121" cy="207" r="20" class="node thick visit" />
    <text x="117" y="212" class="svgBalFac">2</text>
    <text x="137" y="235" class="svgBalFac">E</text>

    <circle cx="41" cy="207" r="20" class="node translucent visit" />
    <text x="36" y="212" class="svgBalFac translucent" >0</text>
    <text x="57" y="235" class="svgBalFac translucent" >D</text>
  </g>

  <!-- 'G' node -->
  <g class="child leaf" transform="translate(-110 -20)">
    <circle cx="391" cy="207" r="20" class="node active" />
    <text x="386" y="212" class="svgBalFac">7</text>
    <text x="407" y="235" class="svgBalFac">G</text>
  </g>
</svg></div>
<p>The distance to all adjacent and not previously visited vertices from vertex E must now be calculated, and updated if needed.</p>
<p>The calculated distance from D to vertex A, via E, is 2+4=6. But the current distance to vertex A is already 4, which is lower, so the distance to vertex A is not updated.</p>
<p>The distance to vertex C is calculated to be 2+4=6, which is less than infinity, so the distance to vertex C is updated.</p>
<p>Similarly, the distance to node G is calculated and updated to be 2+5=7.</p>
<p>The next vertex to be visited is vertex A because it has the shortest distance from D of all the unvisited vertices.</p>
<div id="svgDiv5" class="svgDiv"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 240" class="dsa_svg">

  <!-- 'F' node -->
  <g class="root parent" transform="translate(140 0)">
    <circle cx="170" cy="30" r="20" class="node" />
    <text x="156" y="37" class="svgBalFac">inf</text>
    <text x="184" y="58" class="svgBalFac">F</text>
  </g>

  <line x1="295" y1="43" x2="267" y2="68" class="directed FB" />
  <text x="269" y="55" class="svgBalFac">2</text>

  <path d="M 180 53 Q 212 -14 292 22" fill="none" stroke="black" stroke-width="1" class="CF" />
  <text x="227" y="26" class="svgBalFac" >5</text>

  <line x1="90" y1="70" x2="151" y2="70" class="directed connected AC thick" />
  <text x="120" y="67" class="svgBalFac connected">3</text>

  <line x1="121" y1="169" x2="163" y2="88" class="directed connected EC translucent" />
  <text x="125" y="140" class="svgBalFac connected translucent" >4</text>

  <line x1="131" y1="187" x2="265" y2="187" class="directed connected EG translucent" />
  <text x="180" y="183" class="svgBalFac connected translucent">5</text>

  <line x1="50" y1="187" x2="92" y2="187" class="directed connected DE translucent" />
  <text x="65" y="183" class="svgBalFac connected translucent" >2</text>
  <!-- 'B' node -->
  <g class="child leaf" transform="translate(80 -40)">
    <circle cx="170" cy="120" r="20" class="node" />
    <text x="156" y="126" class="svgBalFac">inf</text>
    <text x="175" y="153" class="svgBalFac">B</text>
  </g>
  <!-- 'C' node -->
  <g class="parent child" transform="translate(-100 -50)">
    <circle cx="271" cy="120" r="20" class="node" />
    <text x="266" y="125" class="svgBalFac">6</text>
    <text x="266" y="97" class="svgBalFac">C</text>
  </g>
  <line x1="266" y1="174" x2="184" y2="85" class="directed GC" />
  <text x="212" y="140" class="svgBalFac">5</text>

  <line x1="284" y1="167" x2="306" y2="50" class="directed cyclic GF" />
  <!--<line x1="308" y1="50" x2="285" y2="167" class="undirected cyclic FG" />-->
  <text x="293" y="140" class="svgBalFac cyclicWeight">5</text>

  <line x1="191" y1="72" x2="230" y2="78" class="directed CB" />
  <text x="208" y="72" class="svgBalFac">2</text>


  <!-- Nodes A, D, and E -->
  <g class="parent child" transform="translate(-10 -20)">
    <circle cx="80" cy="90" r="20" class="node thick visit" />
    <text x="75" y="95" class="svgBalFac">4</text>
    <text x="97" y="75" class="svgBalFac">A</text>

    <line x1="48" y1="187" x2="74" y2="109" class="directed DA translucent" />
    <text x="45" y="160" class="svgBalFac translucent">4</text>

    <line x1="86" y1="110" x2="113" y2="188" class="directed AE translucent" />
    <text x="89" y="160" class="svgBalFac translucent">4</text>

    <circle cx="121" cy="207" r="20" class="node translucent visit" />
    <text x="117" y="212" class="svgBalFac translucent">2</text>
    <text x="137" y="235" class="svgBalFac translucent">E</text>

    <circle cx="41" cy="207" r="20" class="node translucent visit" />
    <text x="36" y="212" class="svgBalFac translucent" >0</text>
    <text x="57" y="235" class="svgBalFac translucent" >D</text>
  </g>

  <!-- 'G' node -->
  <g class="child leaf" transform="translate(-110 -20)">
    <circle cx="391" cy="207" r="20" class="node" />
    <text x="386" y="212" class="svgBalFac">7</text>
    <text x="407" y="235" class="svgBalFac">G</text>
  </g>
</svg></div>
<p>The calculated distance to vertex C, via A, is 4+3=7, which is higher than the already set distance to vertex C, so the distance to vertex C is not updated.</p>
<p>Vertex A is now marked as visited, and the next current vertex is vertex C because that has the lowest distance from vertex D between the remaining unvisited vertices.</p>
<div id="svgDiv6" class="svgDiv"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 240" class="dsa_svg">

  <!-- 'F' node -->
  <g class="root parent" transform="translate(140 0)">
    <circle cx="170" cy="30" r="20" class="node active" />
    <text x="161" y="37" class="svgBalFac">11</text>
    <text x="184" y="58" class="svgBalFac">F</text>
  </g>

  <line x1="295" y1="43" x2="267" y2="68" class="directed FB" />
  <text x="269" y="55" class="svgBalFac">2</text>

  <path d="M 180 53 Q 212 -14 292 22" fill="none" stroke="black" stroke-width="1" class="CF thick" />
  <text x="227" y="26" class="svgBalFac" >5</text>

  <line x1="90" y1="70" x2="151" y2="70" class="directed connected AC translucent" />
  <text x="120" y="67" class="svgBalFac connected translucent">3</text>

  <line x1="121" y1="169" x2="163" y2="88" class="directed connected EC translucent" />
  <text x="125" y="140" class="svgBalFac connected translucent" >4</text>

  <line x1="131" y1="187" x2="265" y2="187" class="directed connected EG translucent" />
  <text x="180" y="183" class="svgBalFac connected translucent">5</text>

  <line x1="50" y1="187" x2="92" y2="187" class="directed connected DE translucent" />
  <text x="65" y="183" class="svgBalFac connected translucent" >2</text>
  <!-- 'B' node -->
  <g class="child leaf" transform="translate(80 -40)">
    <circle cx="170" cy="120" r="20" class="node active" />
    <text x="164" y="126" class="svgBalFac">8</text>
    <text x="175" y="153" class="svgBalFac">B</text>
  </g>
  <!-- 'C' node -->
  <g class="parent child" transform="translate(-100 -50)">
    <circle cx="271" cy="120" r="20" class="node thick visit" />
    <text x="266" y="125" class="svgBalFac">6</text>
    <text x="266" y="97" class="svgBalFac">C</text>
  </g>
  <line x1="266" y1="174" x2="184" y2="85" class="directed GC thick" />
  <text x="212" y="140" class="svgBalFac">5</text>

  <line x1="284" y1="167" x2="306" y2="50" class="directed cyclic GF" />
  <!--<line x1="308" y1="50" x2="285" y2="167" class="undirected cyclic FG" />-->
  <text x="293" y="140" class="svgBalFac cyclicWeight">5</text>

  <line x1="191" y1="72" x2="230" y2="78" class="directed CB thick" />
  <text x="208" y="72" class="svgBalFac">2</text>


  <!-- Nodes A, D, and E -->
  <g class="parent child" transform="translate(-10 -20)">
    <circle cx="80" cy="90" r="20" class="node translucent visit" />
    <text x="75" y="95" class="svgBalFac translucent">4</text>
    <text x="97" y="75" class="svgBalFac translucent">A</text>

    <line x1="48" y1="187" x2="74" y2="109" class="directed DA translucent" />
    <text x="45" y="160" class="svgBalFac translucent">4</text>

    <line x1="86" y1="110" x2="113" y2="188" class="directed AE translucent" />
    <text x="89" y="160" class="svgBalFac translucent">4</text>

    <circle cx="121" cy="207" r="20" class="node translucent visit" />
    <text x="117" y="212" class="svgBalFac translucent">2</text>
    <text x="137" y="235" class="svgBalFac translucent">E</text>

    <circle cx="41" cy="207" r="20" class="node translucent visit" />
    <text x="36" y="212" class="svgBalFac translucent" >0</text>
    <text x="57" y="235" class="svgBalFac translucent" >D</text>
  </g>

  <!-- 'G' node -->
  <g class="child leaf" transform="translate(-110 -20)">
    <circle cx="391" cy="207" r="20" class="node" />
    <text x="386" y="212" class="svgBalFac">7</text>
    <text x="407" y="235" class="svgBalFac">G</text>
  </g>
</svg></div>
<p>Vertex F gets updated distance 6+5=11, and vertex B gets updated distance 6+2=8.</p>
<p>Calculated distance to vertex G via vertex C is 6+5=11 which is higher than the already set distance of 7, so distance to vertex G is not updated.</p>
<p>Vertex C is marked as visited, and the next vertex to be visited is G because is has the lowest distance between the remaining unvisited vertices.</p>
<div id="svgDiv7" class="svgDiv"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 240" class="dsa_svg">

  <!-- 'F' node -->
  <g class="root parent" transform="translate(140 0)">
    <circle cx="170" cy="30" r="20" class="node" />
    <text x="161" y="37" class="svgBalFac">11</text>
    <text x="184" y="58" class="svgBalFac">F</text>
  </g>

  <line x1="295" y1="43" x2="267" y2="68" class="directed FB" />
  <text x="269" y="55" class="svgBalFac">2</text>

  <path d="M 180 53 Q 212 -14 292 22" fill="none" stroke="black" stroke-width="1" class="CF translucent" />
  <text x="227" y="26" class="svgBalFac translucent" >5</text>

  <line x1="90" y1="70" x2="151" y2="70" class="directed connected AC translucent" />
  <text x="120" y="67" class="svgBalFac connected translucent">3</text>

  <line x1="121" y1="169" x2="163" y2="88" class="directed connected EC translucent" />
  <text x="125" y="140" class="svgBalFac connected translucent" >4</text>

  <line x1="131" y1="187" x2="265" y2="187" class="directed connected EG translucent" />
  <text x="180" y="183" class="svgBalFac connected translucent">5</text>

  <line x1="50" y1="187" x2="92" y2="187" class="directed connected DE translucent" />
  <text x="65" y="183" class="svgBalFac connected translucent" >2</text>
  <!-- 'B' node -->
  <g class="child leaf" transform="translate(80 -40)">
    <circle cx="170" cy="120" r="20" class="node" />
    <text x="164" y="126" class="svgBalFac">8</text>
    <text x="175" y="153" class="svgBalFac">B</text>
  </g>
  <!-- 'C' node -->
  <g class="parent child" transform="translate(-100 -50)">
    <circle cx="271" cy="120" r="20" class="node translucent visit" />
    <text x="266" y="125" class="svgBalFac translucent">6</text>
    <text x="266" y="97" class="svgBalFac translucent">C</text>
  </g>
  <line x1="266" y1="174" x2="184" y2="85" class="directed GC translucent" />
  <text x="212" y="140" class="svgBalFac translucent">5</text>

  <line x1="284" y1="167" x2="306" y2="50" class="directed cyclic GF thick" />
  <!--<line x1="308" y1="50" x2="285" y2="167" class="undirected cyclic FG" />-->
  <text x="293" y="140" class="svgBalFac cyclicWeight">5</text>

  <line x1="191" y1="72" x2="230" y2="78" class="directed CB translucent" />
  <text x="208" y="72" class="svgBalFac translucent">2</text>


  <!-- Nodes A, D, and E -->
  <g class="parent child" transform="translate(-10 -20)">
    <circle cx="80" cy="90" r="20" class="node translucent visit" />
    <text x="75" y="95" class="svgBalFac translucent">4</text>
    <text x="97" y="75" class="svgBalFac translucent">A</text>

    <line x1="48" y1="187" x2="74" y2="109" class="directed DA translucent" />
    <text x="45" y="160" class="svgBalFac translucent">4</text>

    <line x1="86" y1="110" x2="113" y2="188" class="directed AE translucent" />
    <text x="89" y="160" class="svgBalFac translucent">4</text>

    <circle cx="121" cy="207" r="20" class="node translucent visit" />
    <text x="117" y="212" class="svgBalFac translucent">2</text>
    <text x="137" y="235" class="svgBalFac translucent">E</text>

    <circle cx="41" cy="207" r="20" class="node translucent visit" />
    <text x="36" y="212" class="svgBalFac translucent" >0</text>
    <text x="57" y="235" class="svgBalFac translucent" >D</text>
  </g>

  <!-- 'G' node -->
  <g class="child leaf" transform="translate(-110 -20)">
    <circle cx="391" cy="207" r="20" class="node thick visit" />
    <text x="386" y="212" class="svgBalFac">7</text>
    <text x="407" y="235" class="svgBalFac">G</text>
  </g>
</svg></div>
<p>Vertex F already has a distance of 11. This is lower than the calculated distance from G, which is 7+5=12, so the distance to vertex F is not updated.</p>
<p>Vertex G is marked as visited, and B becomes the current vertex because it has the lowest distance of the remaining unvisited vertices.</p>
<div id="svgDiv8" class="svgDiv"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 240" class="dsa_svg">

  <!-- 'F' node -->
  <g class="root parent" transform="translate(140 0)">
    <circle cx="170" cy="30" r="20" class="node active" />
    <text x="161" y="37" class="svgBalFac">10</text>
    <text x="184" y="58" class="svgBalFac">F</text>
  </g>

  <line x1="295" y1="43" x2="267" y2="68" class="directed FB thick" />
  <text x="269" y="55" class="svgBalFac">2</text>

  <path d="M 180 53 Q 212 -14 292 22" fill="none" stroke="black" stroke-width="1" class="CF translucent" />
  <text x="227" y="26" class="svgBalFac translucent" >5</text>

  <line x1="90" y1="70" x2="151" y2="70" class="directed connected AC translucent" />
  <text x="120" y="67" class="svgBalFac connected translucent">3</text>

  <line x1="121" y1="169" x2="163" y2="88" class="directed connected EC translucent" />
  <text x="125" y="140" class="svgBalFac connected translucent" >4</text>

  <line x1="131" y1="187" x2="262" y2="187" class="directed connected EG translucent" />
  <text x="180" y="183" class="svgBalFac connected translucent">5</text>

  <line x1="50" y1="187" x2="92" y2="187" class="directed connected DE translucent" />
  <text x="65" y="183" class="svgBalFac connected translucent" >2</text>
  <!-- 'B' node -->
  <g class="child leaf" transform="translate(80 -40)">
    <circle cx="170" cy="120" r="20" class="node thick visit" />
    <text x="164" y="126" class="svgBalFac">8</text>
    <text x="175" y="153" class="svgBalFac">B</text>
  </g>
  <!-- 'C' node -->
  <g class="parent child" transform="translate(-100 -50)">
    <circle cx="271" cy="120" r="20" class="node translucent visit" />
    <text x="266" y="125" class="svgBalFac translucent">6</text>
    <text x="266" y="97" class="svgBalFac translucent">C</text>
  </g>
  <line x1="266" y1="174" x2="184" y2="85" class="directed GC translucent" />
  <text x="212" y="140" class="svgBalFac translucent">5</text>

  <line x1="284" y1="167" x2="306" y2="50" class="directed cyclic GF translucent" />
  <!--<line x1="308" y1="50" x2="285" y2="167" class="undirected cyclic FG" />-->
  <text x="293" y="140" class="svgBalFac cyclicWeight translucent">5</text>

  <line x1="191" y1="72" x2="230" y2="78" class="directed CB translucent" />
  <text x="208" y="72" class="svgBalFac translucent">2</text>


  <!-- Nodes A, D, and E -->
  <g class="parent child" transform="translate(-10 -20)">
    <circle cx="80" cy="90" r="20" class="node translucent visit" />
    <text x="75" y="95" class="svgBalFac translucent">4</text>
    <text x="97" y="75" class="svgBalFac translucent">A</text>

    <line x1="48" y1="187" x2="74" y2="109" class="directed DA translucent" />
    <text x="45" y="160" class="svgBalFac translucent">4</text>

    <line x1="86" y1="110" x2="113" y2="188" class="directed AE translucent" />
    <text x="89" y="160" class="svgBalFac translucent">4</text>

    <circle cx="121" cy="207" r="20" class="node translucent visit" />
    <text x="117" y="212" class="svgBalFac translucent">2</text>
    <text x="137" y="235" class="svgBalFac translucent">E</text>

    <circle cx="41" cy="207" r="20" class="node translucent visit" />
    <text x="36" y="212" class="svgBalFac translucent" >0</text>
    <text x="57" y="235" class="svgBalFac translucent" >D</text>
  </g>

  <!-- 'G' node -->
  <g class="child leaf" transform="translate(-110 -20)">
    <circle cx="391" cy="207" r="20" class="node translucent visit" />
    <text x="386" y="212" class="svgBalFac translucent">7</text>
    <text x="407" y="235" class="svgBalFac translucent">G</text>
  </g>
</svg></div>
<p>The new distance to F via B is 8+2=10, because it is lower than F's existing distance of 11.</p>
<p>Vertex B is marked as visited, and there is nothing to check for the last unvisited vertex F, so Dijkstra's algorithm is finished.</p>
<p>Every vertex has been visited only once, and the result is the lowest distance from the source vertex D to every other vertex in the graph.</p>
<hr>

<a id="dijkstraImpl"></a>
<h2>Implementation of Dijkstra's Algorithm</h2>
<p>To implement Dijkstra's algorithm, we create a <code class="w3-codespan">Graph</code> class. The <code class="w3-codespan">Graph</code> represents the graph with its vertices and edges:</p>
<div class="w3-example">
<pre class="language-python notranslate w3-white line-numbers" data-line="3-5, 7-10, 12-14"><code>class Graph:
    def __init__(self, size):
        self.adj_matrix = [[0] * size for _ in range(size)]
        self.size = size
        self.vertex_data = [''] * size

    def add_edge(self, u, v, weight):
        if 0 <= u < self.size and 0 <= v < self.size:
            self.adj_matrix[u][v] = weight
            self.adj_matrix[v][u] = weight  # For undirected graph

    def add_vertex_data(self, vertex, data):
        if 0 <= vertex < self.size:
            self.vertex_data[vertex] = data</code></pre>
</div>
<p><strong>Line 3: </strong>We create the <code class="w3-codespan">adj_matrix</code> to hold all the edges and edge weights. Initial values are set to <code class="w3-codespan">0</code>.</p>
<p><strong>Line 4: </strong><code class="w3-codespan">size</code> is the number of vertices in the graph.</p>
<p><strong>Line 5: </strong>The <code class="w3-codespan">vertex_data</code> holds the names of all the vertices.</p>
<p><strong>Line 7-10: </strong>The <code class="w3-codespan">add_edge</code> method is used to add an edge from vertex <code class="w3-codespan">u</code> to vertex <code class="w3-codespan">v</code>, with edge weight <code class="w3-codespan">weight</code>.</p>
<p><strong>Line 12-14: </strong>The <code class="w3-codespan">add_vertex_data</code> method is used to add a vertex to the graph. The index where the vertex should belong is given with the <code class="w3-codespan">vertex</code> argument, and <code class="w3-codespan">data</code> is the name of the vertex.</p>
<p>The <code class="w3-codespan">Graph</code> class also contains the method that runs Dijkstra's algorithm:</p>
<div class="w3-example">
<pre class="language-python notranslate w3-white line-numbers" data-start="16" data-line-offset="16" data-line="18-20, 23-28, 30-31, 33, 35-39"><code>    def dijkstra(self, start_vertex_data):
        start_vertex = self.vertex_data.index(start_vertex_data)
        distances = [float('inf')] * self.size
        distances[start_vertex] = 0
        visited = [False] * self.size

        for _ in range(self.size):
            min_distance = float('inf')
            u = None
            for i in range(self.size):
                if not visited[i] and distances[i] < min_distance:
                    min_distance = distances[i]
                    u = i

            if u is None:
                break

            visited[u] = True

            for v in range(self.size):
                if self.adj_matrix[u][v] != 0 and not visited[v]:
                    alt = distances[u] + self.adj_matrix[u][v]
                    if alt < distances[v]:
                        distances[v] = alt

        return distances</code></pre>
</div>
<p><strong>Line 18-19: </strong>The initial distance is set to infinity for all vertices in the <code class="w3-codespan">distances</code> array, except for the start vertex, where the distance is 0.</p>
<p><strong>Line 20: </strong>All vertices are initially set to <code class="w3-codespan">False</code> to mark them as not visited in the <code class="w3-codespan">visited</code> array.</p>
<p><strong>Line 23-28: </strong>The next current vertex is found. Outgoing edges from this vertex will be checked to see if shorter distances can be found. It is the unvisited vertex with the lowest distance from the start.</p>
<p><strong>Line 30-31: </strong>If the next current vertex has not been found, the algorithm is finished. This means that all vertices that are reachable from the source have been visited.</p>
<p><strong>Line 33: </strong>The current vertex is set as visited before relaxing adjacent vertices. This is more effective because we avoid checking the distance to the current vertex itself.</p>
<p><strong>Line 35-39: </strong>Distances are calculated for not visited adjacent vertices, and updated if the new calculated distance is lower.</p>

<p>After defining the <code class="w3-codespan">Graph</code> class, the vertices and edges must be defined to initialize the specific graph, and the complete code for this Dijkstra's algorithm example looks like this:</p>
<div class="w3-example">
  <h3>Example</h3>
  <p>Python:</p>
<pre class="language-python notranslate w3-white line-numbers" data-line="" style="height: 400px; overflow: auto;"><code>class Graph:
    def __init__(self, size):
        self.adj_matrix = [[0] * size for _ in range(size)]
        self.size = size
        self.vertex_data = [''] * size

    def add_edge(self, u, v, weight):
        if 0 <= u < self.size and 0 <= v < self.size:
            self.adj_matrix[u][v] = weight
            self.adj_matrix[v][u] = weight  # For undirected graph

    def add_vertex_data(self, vertex, data):
        if 0 <= vertex < self.size:
            self.vertex_data[vertex] = data

    def dijkstra(self, start_vertex_data):
        start_vertex = self.vertex_data.index(start_vertex_data)
        distances = [float('inf')] * self.size
        distances[start_vertex] = 0
        visited = [False] * self.size

        for _ in range(self.size):
            min_distance = float('inf')
            u = None
            for i in range(self.size):
                if not visited[i] and distances[i] < min_distance:
                    min_distance = distances[i]
                    u = i

            if u is None:
                break

            visited[u] = True

            for v in range(self.size):
                if self.adj_matrix[u][v] != 0 and not visited[v]:
                    alt = distances[u] + self.adj_matrix[u][v]
                    if alt < distances[v]:
                        distances[v] = alt

        return distances

g = Graph(7)

g.add_vertex_data(0, 'A')
g.add_vertex_data(1, 'B')
g.add_vertex_data(2, 'C')
g.add_vertex_data(3, 'D')
g.add_vertex_data(4, 'E')
g.add_vertex_data(5, 'F')
g.add_vertex_data(6, 'G')

g.add_edge(3, 0, 4)  # D - A, weight 5
g.add_edge(3, 4, 2)  # D - E, weight 2
g.add_edge(0, 2, 3)  # A - C, weight 3
g.add_edge(0, 4, 4)  # A - E, weight 4
g.add_edge(4, 2, 4)  # E - C, weight 4
g.add_edge(4, 6, 5)  # E - G, weight 5
g.add_edge(2, 5, 5)  # C - F, weight 5
g.add_edge(2, 1, 2)  # C - B, weight 2
g.add_edge(1, 5, 2)  # B - F, weight 2
g.add_edge(6, 5, 5)  # G - F, weight 5

# Dijkstra's algorithm from D to all vertices
print("\nDijkstra's Algorithm starting from vertex D:")
distances = g.dijkstra('D')
for i, d in enumerate(distances):
    print(f"Distance from D to {g.vertex_data[i]}: {d}")</code></pre>
<a class="w3-btn w3-margin-bottom" href="trydsa.php?filename=demo_graphs_dijkstra" target="_blank">Try it Yourself &raquo;</a>
</div>
<hr>

<h2>Dijkstra's Algorithm on Directed Graphs</h2>
<p>To run Dijkstra's algorithm on directed graphs, very few changes are needed.</p>
<p>Similarly to the change we needed for <a href="dsa_algo_graphs_cycledetection.php#directed">cycle detection for directed graphs</a>, we just need to remove one line of code so that the adjacency matrix is not symmetric anymore.</p>
<p>Let's implement this directed graph and run Dijkstra's algorithm from vertex D.</p>
<div id="svgDiv9" class="svgDiv"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 220" class="dsa_svg">
<defs>
  <marker id="arrowhead" markerWidth="8" markerHeight="14" refX="0" refY="7" orient="auto" markerUnits="userSpaceOnUse">
      <line x1="0.5" y1="0.5" x2="7.5" y2="7.5" stroke-width="1.5"></line>
      <line x1="0" y1="7" x2="6" y2="7" stroke-width="1"></line>
      <line x1="0.5" y1="13.5" x2="7.5" y2="6.5" stroke-width="1.5"></line>
  </marker>
</defs>
<!-- 'F' node -->
<g class="root parent" transform="translate(140 0)">
    <circle cx="170" cy="30" r="20" class="node" />
    <text x="156" y="37" class="svgBalFac">inf</text>
    <text x="184" y="58" class="svgBalFac">F</text>
  </g>

  <line x1="266" y1="68" x2="289" y2="49" class="directed FB" marker-end="url(#arrowhead)"/>
  <text x="270" y="54" class="svgBalFac">2</text>

  <path d="M 180 53 Q 212 -14 284 19" fill="none" stroke="black" stroke-width="1" class="CF" marker-end="url(#arrowhead)"/>
  <text x="227" y="26" class="svgBalFac" >5</text>

  <line x1="90" y1="70" x2="143" y2="70" class="directed connected AC" marker-end="url(#arrowhead)" />
  <text x="120" y="67" class="svgBalFac connected">3</text>

  <line x1="121" y1="169" x2="159" y2="95" class="directed connected EC" marker-end="url(#arrowhead)" />
  <text x="125" y="140" class="svgBalFac connected" >4</text>

  <line x1="131" y1="187" x2="253" y2="187" class="directed connected EG" marker-end="url(#arrowhead)" />
  <text x="180" y="183" class="svgBalFac connected">5</text>

  <line x1="50" y1="187" x2="83" y2="187" class="directed connected DE" marker-end="url(#arrowhead)" />
  <text x="65" y="183" class="svgBalFac connected" >2</text>
  <!-- 'B' node -->
  <g class="child leaf" transform="translate(80 -40)">
    <circle cx="170" cy="120" r="20" class="node" />
    <text x="156" y="126" class="svgBalFac">inf</text>
    <text x="175" y="153" class="svgBalFac">B</text>
  </g>
  <!-- 'C' node -->
  <g class="parent child" transform="translate(-100 -50)">
    <circle cx="271" cy="120" r="20" class="node" />
    <text x="257" y="126" class="svgBalFac">inf</text>
    <text x="266" y="97" class="svgBalFac">C</text>
  </g>
  <line x1="266" y1="174" x2="189" y2="92" class="directed GC" marker-end="url(#arrowhead)" />
  <text x="212" y="140" class="svgBalFac">5</text>

  <line x1="284" y1="167" x2="306" y2="58" class="directed cyclic GF" marker-end="url(#arrowhead)" />
  <!--<line x1="308" y1="50" x2="285" y2="167" class="undirected cyclic FG" />-->
  <text x="293" y="140" class="svgBalFac cyclicWeight">5</text>

  <line x1="229" y1="80" x2="199" y2="74" class="directed CB" marker-end="url(#arrowhead)" />
  <text x="212" y="74" class="svgBalFac">2</text>


  <!-- Nodes A, D, and E -->
  <g class="parent child" transform="translate(-10 -20)">
    <circle cx="80" cy="90" r="20" class="node" />
    <text x="65" y="96" class="svgBalFac">inf</text>
    <text x="97" y="75" class="svgBalFac">A</text>
    <line x1="48" y1="187" x2="72" y2="117" class="directed DA" marker-end="url(#arrowhead)" />
    <text x="45" y="160" class="svgBalFac">4</text>

    <line x1="86" y1="110" x2="112" y2="180" class="directed AE" marker-end="url(#arrowhead)" />
    <text x="89" y="160" class="svgBalFac">4</text>

    <circle cx="121" cy="207" r="20" class="node" />
    <text x="107" y="213" class="svgBalFac">inf</text>
    <text x="137" y="235" class="svgBalFac">E</text>

    <circle cx="41" cy="207" r="20" class="node thick" />
    <text x="35" y="213" class="svgBalFac" >0</text>
    <text x="57" y="235" class="svgBalFac" >D</text>
  </g>

  <!-- 'G' node -->
  <g class="child leaf" transform="translate(-110 -20)">
    <circle cx="391" cy="207" r="20" class="node" />
    <text x="377" y="213" class="svgBalFac">inf</text>
    <text x="407" y="235" class="svgBalFac">G</text>
  </g>
</svg></div>
<p>Here is the implementation of Dijkstra's algorithm on the directed graph, with D as the source vertex:</p>
<div class="w3-example">
  <h3>Example</h3>
  <p>Python:</p>
<pre class="language-python notranslate w3-white line-numbers" data-line="10"><code>class Graph:
    def __init__(self, size):
        self.adj_matrix = [[0] * size for _ in range(size)]
        self.size = size
        self.vertex_data = [''] * size

    def add_edge(self, u, v, weight):
        if 0 <= u < self.size and 0 <= v < self.size:
            self.adj_matrix[u][v] = weight
            #self.adj_matrix[v][u] = weight   For undirected graph

    def add_vertex_data(self, vertex, data):
        if 0 <= vertex < self.size:
            self.vertex_data[vertex] = data

    def dijkstra(self, start_vertex_data):
        start_vertex = self.vertex_data.index(start_vertex_data)
        distances = [float('inf')] * self.size
        distances[start_vertex] = 0
        visited = [False] * self.size

        for _ in range(self.size):
            min_distance = float('inf')
            u = None
            for i in range(self.size):
                if not visited[i] and distances[i] < min_distance:
                    min_distance = distances[i]
                    u = i

            if u is None:
                break

            visited[u] = True

            for v in range(self.size):
                if self.adj_matrix[u][v] != 0 and not visited[v]:
                    alt = distances[u] + self.adj_matrix[u][v]
                    if alt < distances[v]:
                        distances[v] = alt

        return distances

g = Graph(7)

g.add_vertex_data(0, 'A')
g.add_vertex_data(1, 'B')
g.add_vertex_data(2, 'C')
g.add_vertex_data(3, 'D')
g.add_vertex_data(4, 'E')
g.add_vertex_data(5, 'F')
g.add_vertex_data(6, 'G')

g.add_edge(3, 0, 4)  # D -> A, weight 5
g.add_edge(3, 4, 2)  # D -> E, weight 2
g.add_edge(0, 2, 3)  # A -> C, weight 3
g.add_edge(0, 4, 4)  # A -> E, weight 4
g.add_edge(4, 2, 4)  # E -> C, weight 4
g.add_edge(4, 6, 5)  # E -> G, weight 5
g.add_edge(2, 5, 5)  # C -> F, weight 5
g.add_edge(1, 2, 2)  # B -> C, weight 2
g.add_edge(1, 5, 2)  # B -> F, weight 2
g.add_edge(6, 5, 5)  # G -> F, weight 5

# Dijkstra's algorithm from D to all vertices
print("Dijkstra's Algorithm starting from vertex D:\n")
distances = g.dijkstra('D')
for i, d in enumerate(distances):
    print(f"Shortest distance from D to {g.vertex_data[i]}: {d}")
</code></pre>
<a class="w3-btn w3-margin-bottom" href="trydsa.php?filename=demo_graphs_dijkstra_directed" target="_blank">Try it Yourself &raquo;</a>
</div>
<p>The image below shows us the shortest distances from vertex D as calculated by Dijkstra's algorithm.</p>
<div id="svgDiv10" class="svgDiv"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 220" class="dsa_svg">
<defs>
  <marker id="arrowhead" markerWidth="8" markerHeight="14" refX="0" refY="7" orient="auto" markerUnits="userSpaceOnUse">
      <line x1="0.5" y1="0.5" x2="7.5" y2="7.5" stroke-width="1.5"></line>
      <line x1="0" y1="7" x2="6" y2="7" stroke-width="1"></line>
      <line x1="0.5" y1="13.5" x2="7.5" y2="6.5" stroke-width="1.5"></line>
  </marker>
</defs>
<!-- 'F' node -->
<g class="root parent" transform="translate(140 0)">
    <circle cx="170" cy="30" r="20" class="node visit" />
    <text x="161" y="37" class="svgBalFac">11</text>
    <text x="184" y="58" class="svgBalFac">F</text>
  </g>

  <line x1="266" y1="68" x2="289" y2="49" class="directed FB" marker-end="url(#arrowhead)"/>
  <text x="270" y="54" class="svgBalFac">2</text>

  <path d="M 180 53 Q 212 -14 284 19" fill="none" stroke="black" stroke-width="1" class="CF" marker-end="url(#arrowhead)"/>
  <text x="227" y="26" class="svgBalFac" >5</text>

  <line x1="90" y1="70" x2="143" y2="70" class="directed connected AC" marker-end="url(#arrowhead)" />
  <text x="120" y="67" class="svgBalFac connected">3</text>

  <line x1="121" y1="169" x2="159" y2="95" class="directed connected EC" marker-end="url(#arrowhead)" />
  <text x="125" y="140" class="svgBalFac connected" >4</text>

  <line x1="131" y1="187" x2="253" y2="187" class="directed connected EG" marker-end="url(#arrowhead)" />
  <text x="180" y="183" class="svgBalFac connected">5</text>

  <line x1="50" y1="187" x2="83" y2="187" class="directed connected DE" marker-end="url(#arrowhead)" />
  <text x="65" y="183" class="svgBalFac connected" >2</text>
  <!-- 'B' node -->
  <g class="child leaf" transform="translate(80 -40)">
    <circle cx="170" cy="120" r="20" class="node visit" />
    <text x="156" y="126" class="svgBalFac">inf</text>
    <text x="175" y="153" class="svgBalFac">B</text>
  </g>
  <!-- 'C' node -->
  <g class="parent child" transform="translate(-100 -50)">
    <circle cx="271" cy="120" r="20" class="node visit" />
    <text x="267" y="126" class="svgBalFac">6</text>
    <text x="266" y="97" class="svgBalFac">C</text>
  </g>
  <line x1="266" y1="174" x2="189" y2="92" class="directed GC" marker-end="url(#arrowhead)" />
  <text x="212" y="140" class="svgBalFac">5</text>

  <line x1="284" y1="167" x2="306" y2="58" class="directed cyclic GF" marker-end="url(#arrowhead)" />
  <!--<line x1="308" y1="50" x2="285" y2="167" class="undirected cyclic FG" />-->
  <text x="293" y="140" class="svgBalFac cyclicWeight">5</text>

  <line x1="229" y1="80" x2="199" y2="74" class="directed CB" marker-end="url(#arrowhead)" />
  <text x="212" y="74" class="svgBalFac">2</text>


  <!-- Nodes A, D, and E -->
  <g class="parent child" transform="translate(-10 -20)">
    <circle cx="80" cy="90" r="20" class="node visit" />
    <text x="75" y="96" class="svgBalFac">4</text>
    <text x="97" y="75" class="svgBalFac">A</text>
    <line x1="48" y1="187" x2="72" y2="117" class="directed DA" marker-end="url(#arrowhead)" />
    <text x="45" y="160" class="svgBalFac">4</text>

    <line x1="86" y1="110" x2="112" y2="180" class="directed AE" marker-end="url(#arrowhead)" />
    <text x="89" y="160" class="svgBalFac">4</text>

    <circle cx="121" cy="207" r="20" class="node visit" />
    <text x="117" y="213" class="svgBalFac">2</text>
    <text x="137" y="235" class="svgBalFac">E</text>

    <circle cx="41" cy="207" r="20" class="node visit" />
    <text x="35" y="213" class="svgBalFac" >0</text>
    <text x="57" y="235" class="svgBalFac" >D</text>
  </g>

  <!-- 'G' node -->
  <g class="child leaf" transform="translate(-110 -20)">
    <circle cx="391" cy="207" r="20" class="node visit" />
    <text x="387" y="213" class="svgBalFac">7</text>
    <text x="407" y="235" class="svgBalFac">G</text>
  </g>
</svg></div>
<p>This result is similar to the previous example using Dijkstra's algorithm on the undirected graph. However, there's a key difference: in this case, vertex B cannot be visited from D, and this means that the shortest distance from D to F is now 11, not 10, because the path can no longer go through vertex B.</p>
<hr>

<h2>Returning The Paths from Dijkstra's Algorithm</h2>
<p>With a few adjustments, the actual shortest paths can also be returned by Dijkstra's algorithm, in addition to the shortest path values. So for example, instead of just returning that the shortest path value is 10 from vertex D to F, the algorithm can also return that the shortest path is "D->E->C->B->F".</p>
<div id="svgDiv13" class="svgDiv"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 240" class="dsa_svg">

  <!-- 'F' node -->
  <g class="root parent" transform="translate(140 0)">
    <circle cx="170" cy="30" r="20" class="node visit thick" />
    <text x="161" y="37" class="svgBalFac">10</text>
    <text x="184" y="58" class="svgBalFac">F</text>
  </g>

  <line x1="295" y1="43" x2="267" y2="68" class="directed FB thick" />
  <text x="269" y="55" class="svgBalFac">2</text>

  <path d="M 180 53 Q 212 -14 292 22" fill="none" stroke="black" stroke-width="1" class="CF" />
  <text x="227" y="26" class="svgBalFac" >5</text>

  <line x1="90" y1="70" x2="151" y2="70" class="directed connected AC" />
  <text x="120" y="67" class="svgBalFac connected">3</text>

  <line x1="121" y1="169" x2="163" y2="88" class="directed connected EC thick" />
  <text x="125" y="140" class="svgBalFac connected" >4</text>

  <line x1="131" y1="187" x2="262" y2="187" class="directed connected EG" />
  <text x="180" y="183" class="svgBalFac connected">5</text>

  <line x1="50" y1="187" x2="92" y2="187" class="directed connected DE thick" />
  <text x="65" y="183" class="svgBalFac connected" >2</text>
  <!-- 'B' node -->
  <g class="child leaf" transform="translate(80 -40)">
    <circle cx="170" cy="120" r="20" class="node thick visit" />
    <text x="164" y="126" class="svgBalFac">8</text>
    <text x="175" y="153" class="svgBalFac">B</text>
  </g>
  <!-- 'C' node -->
  <g class="parent child" transform="translate(-100 -50)">
    <circle cx="271" cy="120" r="20" class="node visit thick" />
    <text x="266" y="125" class="svgBalFac">6</text>
    <text x="266" y="97" class="svgBalFac">C</text>
  </g>
  <line x1="266" y1="174" x2="184" y2="85" class="directed GC" />
  <text x="212" y="140" class="svgBalFac">5</text>

  <line x1="284" y1="167" x2="306" y2="50" class="directed cyclic GF" />
  <!--<line x1="308" y1="50" x2="285" y2="167" class="undirected cyclic FG" />-->
  <text x="293" y="140" class="svgBalFac cyclicWeight">5</text>

  <line x1="191" y1="72" x2="230" y2="78" class="directed CB thick" />
  <text x="208" y="72" class="svgBalFac">2</text>


  <!-- Nodes A, D, and E -->
  <g class="parent child" transform="translate(-10 -20)">
    <circle cx="80" cy="90" r="20" class="node visit" />
    <text x="75" y="95" class="svgBalFac">4</text>
    <text x="97" y="75" class="svgBalFac">A</text>

    <line x1="48" y1="187" x2="74" y2="109" class="directed DA" />
    <text x="45" y="160" class="svgBalFac">4</text>

    <line x1="86" y1="110" x2="113" y2="188" class="directed AE" />
    <text x="89" y="160" class="svgBalFac">4</text>

    <circle cx="121" cy="207" r="20" class="node visit thick" />
    <text x="117" y="212" class="svgBalFac">2</text>
    <text x="137" y="235" class="svgBalFac">E</text>

    <circle cx="41" cy="207" r="20" class="node visit thick" />
    <text x="36" y="212" class="svgBalFac" >0</text>
    <text x="57" y="235" class="svgBalFac" >D</text>
  </g>

  <!-- 'G' node -->
  <g class="child leaf" transform="translate(-110 -20)">
    <circle cx="391" cy="207" r="20" class="node visit" />
    <text x="386" y="212" class="svgBalFac">7</text>
    <text x="407" y="235" class="svgBalFac">G</text>
  </g>
</svg></div>
<p>To return the path, we create a <code class="w3-codespan">predecessors</code> array to keep the previous vertex in the shortest path for each vertex. The <code class="w3-codespan">predecessors</code> array can be used to backtrack to find the shortest path for every vertex.</p>
<div class="w3-example">
  <h3>Example</h3>
  <p>Python:</p>
<pre class="language-python notranslate w3-white line-numbers" data-line="7, 29, 33-42"><code>class Graph:
    # ... (rest of the Graph class)

    def dijkstra(self, start_vertex_data):
        start_vertex = self.vertex_data.index(start_vertex_data)
        distances = [float('inf')] * self.size
        predecessors = [None] * self.size
        distances[start_vertex] = 0
        visited = [False] * self.size

        for _ in range(self.size):
            min_distance = float('inf')
            u = None
            for i in range(self.size):
                if not visited[i] and distances[i] < min_distance:
                    min_distance = distances[i]
                    u = i

            if u is None:
                break

            visited[u] = True

            for v in range(self.size):
                if self.adj_matrix[u][v] != 0 and not visited[v]:
                    alt = distances[u] + self.adj_matrix[u][v]
                    if alt < distances[v]:
                        distances[v] = alt
                        predecessors[v] = u

        return distances, predecessors

    def get_path(self, predecessors, start_vertex, end_vertex):
        path = []
        current = self.vertex_data.index(end_vertex)
        while current is not None:
            path.insert(0, self.vertex_data[current])
            current = predecessors[current]
            if current == self.vertex_data.index(start_vertex):
                path.insert(0, start_vertex)
                break
        return '->'.join(path)  # Join the vertices with '->'

g = Graph(7)

# ... (rest of the graph setup)

# Dijkstra's algorithm from D to all vertices
print("Dijkstra's Algorithm starting from vertex D:\n")
distances, predecessors = g.dijkstra('D')
for i, d in enumerate(distances):
    path = g.get_path(predecessors, 'D', g.vertex_data[i])
    print(f"{path}, Distance: {d}")
</code></pre>
<a class="w3-btn w3-margin-bottom" href="trydsa.php?filename=demo_graphs_dijkstra_path" target="_blank">Try it Yourself &raquo;</a>
</div>
<p><strong>Line 7 and 29: </strong>The <code class="w3-codespan">predecessors</code> array is first initialized with <code class="w3-codespan">None</code> values, then it is updated with the correct predecessor for each vertex as the shortest path values are updated.</p>
<p><strong>Line 33-42: </strong>The <code class="w3-codespan">get_path</code> method uses the <code class="w3-codespan">predecessors</code> array and returns a string with the shortest path from start to end vertex.</p>
<hr>

<h2>Dijkstra's Algorithm with a Single Destination Vertex</h2>
<p>Let's say we are only interested in finding the shortest path between two vertices, like finding the shortest distance between vertex D and vertex F in the graph below.</p>
<div id="svgDiv11" class="svgDiv"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 370 360" class="dsa_svg">
  <!-- 'F' node -->
  <g class="root parent" transform="translate(140 0)">
    <circle cx="170" cy="30" r="20" class="node thick" />
    <text x="156" y="37" class="svgBalFac">inf</text>
    <text x="185" y="59" class="svgBalFac">F</text>
  </g>

  <line x1="295" y1="43" x2="267" y2="68" class="directed FB" />
  <text x="269" y="55" class="svgBalFac">2</text>

  <path d="M 180 53 Q 212 -14 292 22" fill="none" stroke="black" stroke-width="1" class="CF" />
  <text x="227" y="26" class="svgBalFac" >5</text>

  <line x1="90" y1="70" x2="151" y2="70" class="directed connected AC" />
  <text x="120" y="67" class="svgBalFac connected">3</text>

  <line x1="121" y1="169" x2="163" y2="88" class="directed connected EC" />
  <text x="125" y="140" class="svgBalFac connected" >4</text>

  <line x1="131" y1="187" x2="265" y2="187" class="directed connected EG" />
  <text x="180" y="183" class="svgBalFac connected">5</text>

  <line x1="50" y1="187" x2="92" y2="187" class="directed connected DE" />
  <text x="65" y="183" class="svgBalFac connected" >2</text>
  <!-- 'B' node -->
  <g class="child leaf" transform="translate(80 -40)">
    <circle cx="170" cy="120" r="20" class="node" />
    <text x="156" y="126" class="svgBalFac">inf</text>
    <text x="175" y="153" class="svgBalFac">B</text>
  </g>
  <!-- 'C' node -->
  <g class="parent child" transform="translate(-100 -50)">
    <circle cx="271" cy="120" r="20" class="node" />
    <text x="257" y="126" class="svgBalFac">inf</text>
    <text x="266" y="97" class="svgBalFac">C</text>
  </g>
  <line x1="266" y1="174" x2="184" y2="85" class="directed GC" />
  <text x="212" y="140" class="svgBalFac">5</text>

  <line x1="284" y1="167" x2="306" y2="50" class="directed cyclic GF" />
  <!--<line x1="308" y1="50" x2="285" y2="167" class="undirected cyclic FG" />-->
  <text x="293" y="140" class="svgBalFac cyclicWeight">5</text>

  <line x1="191" y1="72" x2="230" y2="78" class="directed CB" />
  <text x="208" y="72" class="svgBalFac">2</text>


  <!-- Nodes A, D, and E -->
  <g class="parent child" transform="translate(-10 -20)">
    <circle cx="80" cy="90" r="20" class="node" />
    <text x="65" y="96" class="svgBalFac">inf</text>
    <text x="97" y="75" class="svgBalFac">A</text>
    <line x1="48" y1="187" x2="74" y2="109" class="directed DA" />
    <text x="45" y="160" class="svgBalFac">4</text>

    <line x1="86" y1="110" x2="113" y2="188" class="directed AE" />
    <text x="89" y="160" class="svgBalFac">4</text>

    <circle cx="121" cy="207" r="20" class="node" />
    <text x="107" y="213" class="svgBalFac">inf</text>
    <text x="137" y="235" class="svgBalFac">E</text>

    <circle cx="41" cy="207" r="20" class="node thick" />
    <text x="35" y="213" class="svgBalFac" >0</text>
    <text x="57" y="235" class="svgBalFac" >D</text>
  </g>

  <!-- 'G' node -->
  <g class="child leaf" transform="translate(-110 -20)">
    <circle cx="391" cy="207" r="20" class="node" />
    <text x="377" y="213" class="svgBalFac">inf</text>
    <text x="407" y="235" class="svgBalFac">G</text>
  </g>

  <line x1="288" y1="207" x2="328" y2="304" class="directed GH" />
  <text x="291" y="257" class="svgBalFac">5</text>
  <!-- 'H' node -->
  <g class="child leaf" transform="translate(-55 116)">
    <circle cx="391" cy="207" r="20" class="node" />
    <text x="377" y="213" class="svgBalFac">inf</text>
    <text x="408" y="236" class="svgBalFac">H</text>
  </g>

  <line x1="269" y1="204" x2="217" y2="260" class="directed GI" />
  <text x="236" y="227" class="svgBalFac">4</text>
  <!-- 'I' node -->
  <g class="child leaf" transform="translate(-188 68)">
    <circle cx="391" cy="207" r="20" class="node" />
    <text x="377" y="213" class="svgBalFac">inf</text>
    <text x="407" y="235" class="svgBalFac">I</text>
  </g>

  <line x1="183" y1="282" x2="147" y2="293" class="directed IJ" />
  <text x="158" y="283" class="svgBalFac">2</text>
  <!-- 'J' node -->
  <g class="child leaf" transform="translate(-264 88)">
    <circle cx="391" cy="207" r="20" class="node" />
    <text x="377" y="213" class="svgBalFac">inf</text>
    <text x="407" y="235" class="svgBalFac">J</text>
  </g>
</svg></div>
<p>Dijkstra's algorithm is normally used for finding the shortest path from one source vertex to all other vertices in the graph, but it can also be modified to only find the shortest path from the source to a single destination vertex, by just stopping the algorithm when the destination is reached (visited).</p>
<p>This means that for the specific graph in the image above, Dijkstra's algorithm will stop after visiting F (the destination vertex), before visiting vertices H, I and J because they are farther away from D than F is.</p>
<p>Below we can see the status of the calculated distances when Dijkstra's algorithm has found the shortest distance from D to F, and stops running.</p>
<div id="svgDiv12" class="svgDiv"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 370 360" class="dsa_svg">
  <!-- 'F' node -->
  <g class="root parent" transform="translate(140 0)">
    <circle cx="170" cy="30" r="20" class="node thick active" />
    <text x="160" y="37" class="svgBalFac">10</text>
    <text x="185" y="59" class="svgBalFac">F</text>
  </g>

  <line x1="295" y1="43" x2="267" y2="68" class="directed FB translucent thick" />
  <text x="269" y="55" class="svgBalFac translucent">2</text>

  <path d="M 180 53 Q 212 -14 292 22" fill="none" stroke="black" stroke-width="1" class="CF translucent" />
  <text x="227" y="26" class="svgBalFac translucent" >5</text>

  <line x1="90" y1="70" x2="151" y2="70" class="directed connected AC translucent" />
  <text x="120" y="67" class="svgBalFac connected translucent">3</text>

  <line x1="121" y1="169" x2="163" y2="88" class="directed connected EC translucent thick" />
  <text x="125" y="140" class="svgBalFac connected translucent" >4</text>

  <line x1="131" y1="187" x2="262" y2="187" class="directed connected EG translucent" />
  <text x="180" y="183" class="svgBalFac connected translucent">5</text>

  <line x1="50" y1="187" x2="92" y2="187" class="directed connected DE translucent thick" />
  <text x="65" y="183" class="svgBalFac connected translucent" >2</text>
  <!-- 'B' node -->
  <g class="child leaf" transform="translate(80 -40)">
    <circle cx="170" cy="120" r="20" class="node visit translucent thick" />
    <text x="164" y="126" class="svgBalFac translucent">8</text>
    <text x="175" y="153" class="svgBalFac translucent">B</text>
  </g>
  <!-- 'C' node -->
  <g class="parent child" transform="translate(-100 -50)">
    <circle cx="271" cy="120" r="20" class="node translucent visit thick" />
    <text x="266" y="126" class="svgBalFac translucent">6</text>
    <text x="266" y="97" class="svgBalFac translucent">C</text>
  </g>
  <line x1="266" y1="174" x2="184" y2="85" class="directed GC translucent" />
  <text x="212" y="140" class="svgBalFac translucent">5</text>

  <line x1="284" y1="167" x2="306" y2="50" class="directed cyclic GF translucent" />
  <!--<line x1="308" y1="50" x2="285" y2="167" class="undirected cyclic FG" />-->
  <text x="293" y="140" class="svgBalFac cyclicWeight translucent">5</text>

  <line x1="191" y1="72" x2="230" y2="78" class="directed CB translucent thick" />
  <text x="208" y="72" class="svgBalFac translucent">2</text>


  <!-- Nodes A, D, and E -->
  <g class="parent child" transform="translate(-10 -20)">
    <circle cx="80" cy="90" r="20" class="node translucent visit" />
    <text x="74" y="96" class="svgBalFac translucent">4</text>
    <text x="97" y="75" class="svgBalFac translucent">A</text>
    <line x1="48" y1="187" x2="74" y2="109" class="directed DA translucent" />
    <text x="45" y="160" class="svgBalFac translucent">4</text>

    <line x1="86" y1="110" x2="113" y2="188" class="directed AE translucent" />
    <text x="89" y="160" class="svgBalFac translucent">4</text>

    <circle cx="121" cy="207" r="20" class="node translucent visit thick" />
    <text x="116" y="213" class="svgBalFac translucent">2</text>
    <text x="137" y="235" class="svgBalFac translucent">E</text>

    <circle cx="41" cy="207" r="20" class="node thick translucent visit" />
    <text x="35" y="213" class="svgBalFac translucent" >0</text>
    <text x="57" y="235" class="svgBalFac translucent" >D</text>
  </g>

  <!-- 'G' node -->
  <g class="child leaf" transform="translate(-110 -20)">
    <circle cx="391" cy="207" r="20" class="node translucent visit" />
    <text x="386" y="213" class="svgBalFac translucent">7</text>
    <text x="407" y="235" class="svgBalFac translucent">G</text>
  </g>

  <line x1="288" y1="207" x2="328" y2="304" class="directed GH translucent" />
  <text x="291" y="257" class="svgBalFac translucent">5</text>
  <!-- 'H' node -->
  <g class="child leaf" transform="translate(-55 116)">
    <circle cx="391" cy="207" r="20" class="node" />
    <text x="381" y="213" class="svgBalFac">12</text>
    <text x="408" y="236" class="svgBalFac">H</text>
  </g>

  <line x1="269" y1="204" x2="217" y2="260" class="directed GI translucent" />
  <text x="236" y="227" class="svgBalFac translucent">4</text>
  <!-- 'I' node -->
  <g class="child leaf" transform="translate(-188 68)">
    <circle cx="391" cy="207" r="20" class="node" />
    <text x="381" y="213" class="svgBalFac">11</text>
    <text x="407" y="235" class="svgBalFac">I</text>
  </g>

  <line x1="183" y1="282" x2="147" y2="293" class="directed IJ" />
  <text x="158" y="283" class="svgBalFac">2</text>
  <!-- 'J' node -->
  <g class="child leaf" transform="translate(-264 88)">
    <circle cx="391" cy="207" r="20" class="node" />
    <text x="377" y="213" class="svgBalFac">inf</text>
    <text x="407" y="235" class="svgBalFac">J</text>
  </g>
</svg></div>
<p>In the image above, vertex F has just got updated with distance 10 from vertex B. Since F is the unvisited vertex with the lowest distance from D, it would normally be the next current vertex, but since it is the destination, the algorithm stops. If the algorithm did not stop, J would be the next vertex to get an updated distance 11+2=13, from vertex I.</p>
<p>The code below is Dijkstra's algorithm implemented to find the shortest path to a single destination vertex:</p>
<div class="w3-example">
  <h3>Example</h3>
  <p>Python:</p>
<pre class="language-python notranslate w3-white line-numbers" data-line="20-23"><code>class Graph:
    # ... (existing methods)

    def dijkstra(self, start_vertex_data, end_vertex_data):
        start_vertex = self.vertex_data.index(start_vertex_data)
        end_vertex = self.vertex_data.index(end_vertex_data)
        distances = [float('inf')] * self.size
        predecessors = [None] * self.size
        distances[start_vertex] = 0
        visited = [False] * self.size

        for _ in range(self.size):
            min_distance = float('inf')
            u = None
            for i in range(self.size):
                if not visited[i] and distances[i] < min_distance:
                    min_distance = distances[i]
                    u = i

            if u is None or u == end_vertex:
                print(f"Breaking out of loop. Current vertex: {self.vertex_data[u]}")
                print(f"Distances: {distances}")
                break

            visited[u] = True
            print(f"Visited vertex: {self.vertex_data[u]}")

            for v in range(self.size):
                if self.adj_matrix[u][v] != 0 and not visited[v]:
                    alt = distances[u] + self.adj_matrix[u][v]
                    if alt < distances[v]:
                        distances[v] = alt
                        predecessors[v] = u

        return distances[end_vertex], self.get_path(predecessors, start_vertex_data, end_vertex_data)

# Example usage
g = Graph(7)
# ... (rest of the graph setup)
distance, path = g.dijkstra('D', 'F')
print(f"Path: {path}, Distance: {distance}")
</code></pre>
<a class="w3-btn w3-margin-bottom" href="trydsa.php?filename=demo_graphs_dijkstra_singledestination" target="_blank">Try it Yourself &raquo;</a>
</div>
<p><strong>Line 20-23: </strong>If we are about to choose the destination vertex as the current vertex and mark it as visited, it means we have already calculated the shortest distance to the destination vertex, and Dijkstra's algorithm can be stopped in this single destination case.</p>
<hr>

<script src="https://cdnjs.cloudflare.com/polyfill/v3/polyfill.min.js?features=es6"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML"></script>
<h2>Time Complexity for Dijkstra's Algorithm</h2>
<p>With \(V\) as the number of vertices in our graph, the time complexity for Dijkstra's algorithm is</p>
<p><span class="math display">\[ O( V^2 ) \]</span></p>
<p>The reason why we get this time complexity is that the vertex with the lowest distance must to be search for to choose the next current vertex, and that takes \(O(V)\) time. And since this must to be done for every vertex connected to the source, we need to factor that in, and so we get time complexity \(O(V^2)\) for Dijkstra's algorithm.</p>
<p>By using a Min-heap or Fibonacci-heap data structure for the distances instead (not yet explained in this tutorial), the time needed to search for the minimum distance vertex is reduced from \(O(V)\) to \(O( \log{V})\), which results in an improved time complexity for Dijkstra's algorithm</p>
<p><span class="math display">\[ O( V \cdot \log{V} + E ) \]</span></p>
<p>Where \(V\) is the number of vertices in the graph, and \(E\) is the number of edges.</p>
<p>The improvement we get from using a Min-heap data structure for Dijkstra's algorithm is especially good if we have a large and sparse graph, which means a graph with a large number of vertices, but not as many edges.</p>
<p>The implementation of Dijkstra's algorithm with the Fibonacci-heap data structure is better for dense graphs, where each vertex has an edge to almost every other vertex.</p>
<hr>

<div>
<h2>DSA Exercises</h2>
<form autocomplete="off" spellcheck="false" id="w3-exerciseform" action="exercise.php?filename=exercise_algo_graphs_dijkstra1" method="post" target="_blank">
<h2>Test Yourself With Exercises</h2>
<div class="exercisewindow">
<h2>Exercise:</h2>
<p>Using Dijkstra's algorithm to find the shortest paths from vertex C in this graph:</p>
<img src="img_exercise_graph_undir.svg" alt="" style="max-width: 100%;">
<p>What is the next vertex to be visited after C is visited?</p>
<div class="exerciseprecontainer">
<pre style="overflow: auto;">
Using Dijkstra's algorithm,
the next vertex to be visited 
after vertex C is vertex <input name="ex1" maxlength="1" style="width: 2ch;">.
</pre>
</div>
<br>
<button type="submit" class="w3-btn w3-margin-bottom">Submit Answer &raquo;</button>
<p><a target="_blank" href="exercise.php?filename=exercise_algo_graphs_dijkstra1">Start the Exercise</a></p>
</div>
</form>
</div>
<hr>

<br>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn" href="dsa_algo_graphs_cycledetection.php">&#10094; Previous</a>
<a class="w3-right w3-btn" href="dsa_algo_graphs_bellmanford.php">Next &#10095;</a>
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
