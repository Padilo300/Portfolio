<?php 
  function sanitize_output($buffer) {

      $search = array(
          '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
          '/[^\S ]+\</s',     // strip whitespaces before tags, except space
          '/(\s)+/s',         // shorten multiple whitespace sequences
          '/<!--(.|\s)*?-->/' // Remove HTML comments
      );

      $replace = array(
          '>',
          '<',
          '\\1',
          ''
      );

      $buffer = preg_replace($search, $replace, $buffer);

      return $buffer;
  }
  ob_start("sanitize_output");
 ?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#000">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Падило Константин резюме</title>
    <meta name="description"  content="Резюме full stack developer Падило Констанин, разработка сайтов, веб приложений, landing page, посадка сайтов на wordpress." />
    <meta name="keywords" itemprop="keywords" content="Падило,Падило Констанин,Падило Констанин Русланович,Падило программист,Падило фрилансер" />
    <meta name="document-state" content="static" />
    <meta name="revisit" content="31" />
    <meta name="author" lang="ru" content="Падило Констанин Русланович" />
    <meta http-equiv="Cache-Control" content="public, max-age=864000, must-revalidate, 
max-age=864000, proxy-revalidate ">


	<link rel="shortcut icon" href="img/triangle.png" type="image/x-icon">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<style>
  		/*!
 * Bootstrap v3.3.2 (http://getbootstrap.com)
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */

/*! normalize.css v3.0.2 | MIT License | git.io/normalize */
html {
  font-family: sans-serif;
  -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
}
body {
  margin: 0;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block;
}
audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline;
}
audio:not([controls]) {
  display: none;
  height: 0;
}
[hidden],
template {
  display: none;
}
a {
  background-color: transparent;
}
a:active,
a:hover {
  outline: 0;
}
abbr[title] {
  border-bottom: 1px dotted;
}
b,
strong {
  font-weight: bold;
}
dfn {
  font-style: italic;
}
h1 {
  margin: .67em 0;
  font-size: 2em;
}
mark {
  color: #000;
  background: #ff0;
}
small {
  font-size: 80%;
}
sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}
sup {
  top: -.5em;
}
sub {
  bottom: -.25em;
}
img {
  border: 0;
}
svg:not(:root) {
  overflow: hidden;
}
figure {
  margin: 1em 40px;
}
hr {
  height: 0;
  -webkit-box-sizing: content-box;
     -moz-box-sizing: content-box;
          box-sizing: content-box;
}
pre {
  overflow: auto;
}
code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
button,
input,
optgroup,
select,
textarea {
  margin: 0;
  font: inherit;
  color: inherit;
}
button {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  padding: 0;
  border: 0;
}
input {
  line-height: normal;
}
input[type="checkbox"],
input[type="radio"] {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 0;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
input[type="search"] {
  -webkit-box-sizing: content-box;
     -moz-box-sizing: content-box;
          box-sizing: content-box;
  -webkit-appearance: textfield;
}
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
fieldset {
  padding: .35em .625em .75em;
  margin: 0 2px;
  border: 1px solid #c0c0c0;
}
legend {
  padding: 0;
  border: 0;
}
textarea {
  overflow: auto;
}
optgroup {
  font-weight: bold;
}
table {
  border-spacing: 0;
  border-collapse: collapse;
}
td,
th {
  padding: 0;
}
/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
@media print {
  *,
  *:before,
  *:after {
    color: #000 !important;
    text-shadow: none !important;
    background: transparent !important;
    -webkit-box-shadow: none !important;
            box-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  a[href]:after {
    content: " (" attr(href) ")";
  }
  abbr[title]:after {
    content: " (" attr(title) ")";
  }
  a[href^="#"]:after,
  a[href^="javascript:"]:after {
    content: "";
  }
  pre,
  blockquote {
    border: 1px solid #999;

    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  select {
    background: #fff !important;
  }
  .navbar {
    display: none;
  }
  .btn > .caret,
  .dropup > .btn > .caret {
    border-top-color: #000 !important;
  }
  .label {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
}
@font-face {
  font-family: 'Glyphicons Halflings';

  src: url('../fonts/glyphicons-halflings-regular.eot');
  src: url('../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../fonts/glyphicons-halflings-regular.woff2') format('woff2'), url('../fonts/glyphicons-halflings-regular.woff') format('woff'), url('../fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;

  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon-asterisk:before {
  content: "\2a";
}
.glyphicon-plus:before {
  content: "\2b";
}
.glyphicon-euro:before,
.glyphicon-eur:before {
  content: "\20ac";
}
.glyphicon-minus:before {
  content: "\2212";
}
.glyphicon-cloud:before {
  content: "\2601";
}
.glyphicon-envelope:before {
  content: "\2709";
}
.glyphicon-pencil:before {
  content: "\270f";
}
.glyphicon-glass:before {
  content: "\e001";
}
.glyphicon-music:before {
  content: "\e002";
}
.glyphicon-search:before {
  content: "\e003";
}
.glyphicon-heart:before {
  content: "\e005";
}
.glyphicon-star:before {
  content: "\e006";
}
.glyphicon-star-empty:before {
  content: "\e007";
}
.glyphicon-user:before {
  content: "\e008";
}
.glyphicon-film:before {
  content: "\e009";
}
.glyphicon-th-large:before {
  content: "\e010";
}
.glyphicon-th:before {
  content: "\e011";
}
.glyphicon-th-list:before {
  content: "\e012";
}
.glyphicon-ok:before {
  content: "\e013";
}
.glyphicon-remove:before {
  content: "\e014";
}
.glyphicon-zoom-in:before {
  content: "\e015";
}
.glyphicon-zoom-out:before {
  content: "\e016";
}
.glyphicon-off:before {
  content: "\e017";
}
.glyphicon-signal:before {
  content: "\e018";
}
.glyphicon-cog:before {
  content: "\e019";
}
.glyphicon-trash:before {
  content: "\e020";
}
.glyphicon-home:before {
  content: "\e021";
}
.glyphicon-file:before {
  content: "\e022";
}
.glyphicon-time:before {
  content: "\e023";
}
.glyphicon-road:before {
  content: "\e024";
}
.glyphicon-download-alt:before {
  content: "\e025";
}
.glyphicon-download:before {
  content: "\e026";
}
.glyphicon-upload:before {
  content: "\e027";
}
.glyphicon-inbox:before {
  content: "\e028";
}
.glyphicon-play-circle:before {
  content: "\e029";
}
.glyphicon-repeat:before {
  content: "\e030";
}
.glyphicon-refresh:before {
  content: "\e031";
}
.glyphicon-list-alt:before {
  content: "\e032";
}
.glyphicon-lock:before {
  content: "\e033";
}
.glyphicon-flag:before {
  content: "\e034";
}
.glyphicon-headphones:before {
  content: "\e035";
}
.glyphicon-volume-off:before {
  content: "\e036";
}
.glyphicon-volume-down:before {
  content: "\e037";
}
.glyphicon-volume-up:before {
  content: "\e038";
}
.glyphicon-qrcode:before {
  content: "\e039";
}
.glyphicon-barcode:before {
  content: "\e040";
}
.glyphicon-tag:before {
  content: "\e041";
}
.glyphicon-tags:before {
  content: "\e042";
}
.glyphicon-book:before {
  content: "\e043";
}
.glyphicon-bookmark:before {
  content: "\e044";
}
.glyphicon-print:before {
  content: "\e045";
}
.glyphicon-camera:before {
  content: "\e046";
}
.glyphicon-font:before {
  content: "\e047";
}
.glyphicon-bold:before {
  content: "\e048";
}
.glyphicon-italic:before {
  content: "\e049";
}
.glyphicon-text-height:before {
  content: "\e050";
}
.glyphicon-text-width:before {
  content: "\e051";
}
.glyphicon-align-left:before {
  content: "\e052";
}
.glyphicon-align-center:before {
  content: "\e053";
}
.glyphicon-align-right:before {
  content: "\e054";
}
.glyphicon-align-justify:before {
  content: "\e055";
}
.glyphicon-list:before {
  content: "\e056";
}
.glyphicon-indent-left:before {
  content: "\e057";
}
.glyphicon-indent-right:before {
  content: "\e058";
}
.glyphicon-facetime-video:before {
  content: "\e059";
}
.glyphicon-picture:before {
  content: "\e060";
}
.glyphicon-map-marker:before {
  content: "\e062";
}
.glyphicon-adjust:before {
  content: "\e063";
}
.glyphicon-tint:before {
  content: "\e064";
}
.glyphicon-edit:before {
  content: "\e065";
}
.glyphicon-share:before {
  content: "\e066";
}
.glyphicon-check:before {
  content: "\e067";
}
.glyphicon-move:before {
  content: "\e068";
}
.glyphicon-step-backward:before {
  content: "\e069";
}
.glyphicon-fast-backward:before {
  content: "\e070";
}
.glyphicon-backward:before {
  content: "\e071";
}
.glyphicon-play:before {
  content: "\e072";
}
.glyphicon-pause:before {
  content: "\e073";
}
.glyphicon-stop:before {
  content: "\e074";
}
.glyphicon-forward:before {
  content: "\e075";
}
.glyphicon-fast-forward:before {
  content: "\e076";
}
.glyphicon-step-forward:before {
  content: "\e077";
}
.glyphicon-eject:before {
  content: "\e078";
}
.glyphicon-chevron-left:before {
  content: "\e079";
}
.glyphicon-chevron-right:before {
  content: "\e080";
}
.glyphicon-plus-sign:before {
  content: "\e081";
}
.glyphicon-minus-sign:before {
  content: "\e082";
}
.glyphicon-remove-sign:before {
  content: "\e083";
}
.glyphicon-ok-sign:before {
  content: "\e084";
}
.glyphicon-question-sign:before {
  content: "\e085";
}
.glyphicon-info-sign:before {
  content: "\e086";
}
.glyphicon-screenshot:before {
  content: "\e087";
}
.glyphicon-remove-circle:before {
  content: "\e088";
}
.glyphicon-ok-circle:before {
  content: "\e089";
}
.glyphicon-ban-circle:before {
  content: "\e090";
}
.glyphicon-arrow-left:before {
  content: "\e091";
}
.glyphicon-arrow-right:before {
  content: "\e092";
}
.glyphicon-arrow-up:before {
  content: "\e093";
}
.glyphicon-arrow-down:before {
  content: "\e094";
}
.glyphicon-share-alt:before {
  content: "\e095";
}
.glyphicon-resize-full:before {
  content: "\e096";
}
.glyphicon-resize-small:before {
  content: "\e097";
}
.glyphicon-exclamation-sign:before {
  content: "\e101";
}
.glyphicon-gift:before {
  content: "\e102";
}
.glyphicon-leaf:before {
  content: "\e103";
}
.glyphicon-fire:before {
  content: "\e104";
}
.glyphicon-eye-open:before {
  content: "\e105";
}
.glyphicon-eye-close:before {
  content: "\e106";
}
.glyphicon-warning-sign:before {
  content: "\e107";
}
.glyphicon-plane:before {
  content: "\e108";
}
.glyphicon-calendar:before {
  content: "\e109";
}
.glyphicon-random:before {
  content: "\e110";
}
.glyphicon-comment:before {
  content: "\e111";
}
.glyphicon-magnet:before {
  content: "\e112";
}
.glyphicon-chevron-up:before {
  content: "\e113";
}
.glyphicon-chevron-down:before {
  content: "\e114";
}
.glyphicon-retweet:before {
  content: "\e115";
}
.glyphicon-shopping-cart:before {
  content: "\e116";
}
.glyphicon-folder-close:before {
  content: "\e117";
}
.glyphicon-folder-open:before {
  content: "\e118";
}
.glyphicon-resize-vertical:before {
  content: "\e119";
}
.glyphicon-resize-horizontal:before {
  content: "\e120";
}
.glyphicon-hdd:before {
  content: "\e121";
}
.glyphicon-bullhorn:before {
  content: "\e122";
}
.glyphicon-bell:before {
  content: "\e123";
}
.glyphicon-certificate:before {
  content: "\e124";
}
.glyphicon-thumbs-up:before {
  content: "\e125";
}
.glyphicon-thumbs-down:before {
  content: "\e126";
}
.glyphicon-hand-right:before {
  content: "\e127";
}
.glyphicon-hand-left:before {
  content: "\e128";
}
.glyphicon-hand-up:before {
  content: "\e129";
}
.glyphicon-hand-down:before {
  content: "\e130";
}
.glyphicon-circle-arrow-right:before {
  content: "\e131";
}
.glyphicon-circle-arrow-left:before {
  content: "\e132";
}
.glyphicon-circle-arrow-up:before {
  content: "\e133";
}
.glyphicon-circle-arrow-down:before {
  content: "\e134";
}
.glyphicon-globe:before {
  content: "\e135";
}
.glyphicon-wrench:before {
  content: "\e136";
}
.glyphicon-tasks:before {
  content: "\e137";
}
.glyphicon-filter:before {
  content: "\e138";
}
.glyphicon-briefcase:before {
  content: "\e139";
}
.glyphicon-fullscreen:before {
  content: "\e140";
}
.glyphicon-dashboard:before {
  content: "\e141";
}
.glyphicon-paperclip:before {
  content: "\e142";
}
.glyphicon-heart-empty:before {
  content: "\e143";
}
.glyphicon-link:before {
  content: "\e144";
}
.glyphicon-phone:before {
  content: "\e145";
}
.glyphicon-pushpin:before {
  content: "\e146";
}
.glyphicon-usd:before {
  content: "\e148";
}
.glyphicon-gbp:before {
  content: "\e149";
}
.glyphicon-sort:before {
  content: "\e150";
}
.glyphicon-sort-by-alphabet:before {
  content: "\e151";
}
.glyphicon-sort-by-alphabet-alt:before {
  content: "\e152";
}
.glyphicon-sort-by-order:before {
  content: "\e153";
}
.glyphicon-sort-by-order-alt:before {
  content: "\e154";
}
.glyphicon-sort-by-attributes:before {
  content: "\e155";
}
.glyphicon-sort-by-attributes-alt:before {
  content: "\e156";
}
.glyphicon-unchecked:before {
  content: "\e157";
}
.glyphicon-expand:before {
  content: "\e158";
}
.glyphicon-collapse-down:before {
  content: "\e159";
}
.glyphicon-collapse-up:before {
  content: "\e160";
}
.glyphicon-log-in:before {
  content: "\e161";
}
.glyphicon-flash:before {
  content: "\e162";
}
.glyphicon-log-out:before {
  content: "\e163";
}
.glyphicon-new-window:before {
  content: "\e164";
}
.glyphicon-record:before {
  content: "\e165";
}
.glyphicon-save:before {
  content: "\e166";
}
.glyphicon-open:before {
  content: "\e167";
}
.glyphicon-saved:before {
  content: "\e168";
}
.glyphicon-import:before {
  content: "\e169";
}
.glyphicon-export:before {
  content: "\e170";
}
.glyphicon-send:before {
  content: "\e171";
}
.glyphicon-floppy-disk:before {
  content: "\e172";
}
.glyphicon-floppy-saved:before {
  content: "\e173";
}
.glyphicon-floppy-remove:before {
  content: "\e174";
}
.glyphicon-floppy-save:before {
  content: "\e175";
}
.glyphicon-floppy-open:before {
  content: "\e176";
}
.glyphicon-credit-card:before {
  content: "\e177";
}
.glyphicon-transfer:before {
  content: "\e178";
}
.glyphicon-cutlery:before {
  content: "\e179";
}
.glyphicon-header:before {
  content: "\e180";
}
.glyphicon-compressed:before {
  content: "\e181";
}
.glyphicon-earphone:before {
  content: "\e182";
}
.glyphicon-phone-alt:before {
  content: "\e183";
}
.glyphicon-tower:before {
  content: "\e184";
}
.glyphicon-stats:before {
  content: "\e185";
}
.glyphicon-sd-video:before {
  content: "\e186";
}
.glyphicon-hd-video:before {
  content: "\e187";
}
.glyphicon-subtitles:before {
  content: "\e188";
}
.glyphicon-sound-stereo:before {
  content: "\e189";
}
.glyphicon-sound-dolby:before {
  content: "\e190";
}
.glyphicon-sound-5-1:before {
  content: "\e191";
}
.glyphicon-sound-6-1:before {
  content: "\e192";
}
.glyphicon-sound-7-1:before {
  content: "\e193";
}
.glyphicon-copyright-mark:before {
  content: "\e194";
}
.glyphicon-registration-mark:before {
  content: "\e195";
}
.glyphicon-cloud-download:before {
  content: "\e197";
}
.glyphicon-cloud-upload:before {
  content: "\e198";
}
.glyphicon-tree-conifer:before {
  content: "\e199";
}
.glyphicon-tree-deciduous:before {
  content: "\e200";
}
.glyphicon-cd:before {
  content: "\e201";
}
.glyphicon-save-file:before {
  content: "\e202";
}
.glyphicon-open-file:before {
  content: "\e203";
}
.glyphicon-level-up:before {
  content: "\e204";
}
.glyphicon-copy:before {
  content: "\e205";
}
.glyphicon-paste:before {
  content: "\e206";
}
.glyphicon-alert:before {
  content: "\e209";
}
.glyphicon-equalizer:before {
  content: "\e210";
}
.glyphicon-king:before {
  content: "\e211";
}
.glyphicon-queen:before {
  content: "\e212";
}
.glyphicon-pawn:before {
  content: "\e213";
}
.glyphicon-bishop:before {
  content: "\e214";
}
.glyphicon-knight:before {
  content: "\e215";
}
.glyphicon-baby-formula:before {
  content: "\e216";
}
.glyphicon-tent:before {
  content: "\26fa";
}
.glyphicon-blackboard:before {
  content: "\e218";
}
.glyphicon-bed:before {
  content: "\e219";
}
.glyphicon-apple:before {
  content: "\f8ff";
}
.glyphicon-erase:before {
  content: "\e221";
}
.glyphicon-hourglass:before {
  content: "\231b";
}
.glyphicon-lamp:before {
  content: "\e223";
}
.glyphicon-duplicate:before {
  content: "\e224";
}
.glyphicon-piggy-bank:before {
  content: "\e225";
}
.glyphicon-scissors:before {
  content: "\e226";
}
.glyphicon-bitcoin:before {
  content: "\e227";
}
.glyphicon-yen:before {
  content: "\00a5";
}
.glyphicon-ruble:before {
  content: "\20bd";
}
.glyphicon-scale:before {
  content: "\e230";
}
.glyphicon-ice-lolly:before {
  content: "\e231";
}
.glyphicon-ice-lolly-tasted:before {
  content: "\e232";
}
.glyphicon-education:before {
  content: "\e233";
}
.glyphicon-option-horizontal:before {
  content: "\e234";
}
.glyphicon-option-vertical:before {
  content: "\e235";
}
.glyphicon-menu-hamburger:before {
  content: "\e236";
}
.glyphicon-modal-window:before {
  content: "\e237";
}
.glyphicon-oil:before {
  content: "\e238";
}
.glyphicon-grain:before {
  content: "\e239";
}
.glyphicon-sunglasses:before {
  content: "\e240";
}
.glyphicon-text-size:before {
  content: "\e241";
}
.glyphicon-text-color:before {
  content: "\e242";
}
.glyphicon-text-background:before {
  content: "\e243";
}
.glyphicon-object-align-top:before {
  content: "\e244";
}
.glyphicon-object-align-bottom:before {
  content: "\e245";
}
.glyphicon-object-align-horizontal:before {
  content: "\e246";
}
.glyphicon-object-align-left:before {
  content: "\e247";
}
.glyphicon-object-align-vertical:before {
  content: "\e248";
}
.glyphicon-object-align-right:before {
  content: "\e249";
}
.glyphicon-triangle-right:before {
  content: "\e250";
}
.glyphicon-triangle-left:before {
  content: "\e251";
}
.glyphicon-triangle-bottom:before {
  content: "\e252";
}
.glyphicon-triangle-top:before {
  content: "\e253";
}
.glyphicon-console:before {
  content: "\e254";
}
.glyphicon-superscript:before {
  content: "\e255";
}
.glyphicon-subscript:before {
  content: "\e256";
}
.glyphicon-menu-left:before {
  content: "\e257";
}
.glyphicon-menu-right:before {
  content: "\e258";
}
.glyphicon-menu-down:before {
  content: "\e259";
}
.glyphicon-menu-up:before {
  content: "\e260";
}
* {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
*:before,
*:after {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
html {
  font-size: 10px;

  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  line-height: 1.42857143;
  color: #333;
  background-color: #fff;
}
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
a {
  color: #337ab7;
  text-decoration: none;
}
a:hover,
a:focus {
  color: #23527c;
  text-decoration: underline;
}
a:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
figure {
  margin: 0;
}
img {
  vertical-align: middle;
}
.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  max-width: 100%;
  height: auto;
}
.img-rounded {
  border-radius: 6px;
}
.img-thumbnail {
  display: inline-block;
  max-width: 100%;
  height: auto;
  padding: 4px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: all .2s ease-in-out;
       -o-transition: all .2s ease-in-out;
          transition: all .2s ease-in-out;
}
.img-circle {
  border-radius: 50%;
}
hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #eee;
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
  font-weight: normal;
  line-height: 1;
  color: #777;
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {
  margin-top: 20px;
  margin-bottom: 10px;
}
h1 small,
.h1 small,
h2 small,
.h2 small,
h3 small,
.h3 small,
h1 .small,
.h1 .small,
h2 .small,
.h2 .small,
h3 .small,
.h3 .small {
  font-size: 65%;
}
h4,
.h4,
h5,
.h5,
h6,
.h6 {
  margin-top: 10px;
  margin-bottom: 10px;
}
h4 small,
.h4 small,
h5 small,
.h5 small,
h6 small,
.h6 small,
h4 .small,
.h4 .small,
h5 .small,
.h5 .small,
h6 .small,
.h6 .small {
  font-size: 75%;
}
h1,
.h1 {
  font-size: 36px;
}
h2,
.h2 {
  font-size: 30px;
}
h3,
.h3 {
  font-size: 24px;
}
h4,
.h4 {
  font-size: 18px;
}
h5,
.h5 {
  font-size: 14px;
}
h6,
.h6 {
  font-size: 12px;
}
p {
  margin: 0 0 10px;
}
.lead {
  margin-bottom: 20px;
  font-size: 16px;
  font-weight: 300;
  line-height: 1.4;
}
@media (min-width: 768px) {
  .lead {
    font-size: 21px;
  }
}
small,
.small {
  font-size: 85%;
}
mark,
.mark {
  padding: .2em;
  background-color: #fcf8e3;
}
.text-left {
  text-align: left;
}
.text-right {
  text-align: right;
}
.text-center {
  text-align: center;
}
.text-justify {
  text-align: justify;
}
.text-nowrap {
  white-space: nowrap;
}
.text-lowercase {
  text-transform: lowercase;
}
.text-uppercase {
  text-transform: uppercase;
}
.text-capitalize {
  text-transform: capitalize;
}
.text-muted {
  color: #777;
}
.text-primary {
  color: #337ab7;
}
a.text-primary:hover {
  color: #286090;
}
.text-success {
  color: #3c763d;
}
a.text-success:hover {
  color: #2b542c;
}
.text-info {
  color: #31708f;
}
a.text-info:hover {
  color: #245269;
}
.text-warning {
  color: #8a6d3b;
}
a.text-warning:hover {
  color: #66512c;
}
.text-danger {
  color: #a94442;
}
a.text-danger:hover {
  color: #843534;
}
.bg-primary {
  color: #fff;
  background-color: #337ab7;
}
a.bg-primary:hover {
  background-color: #286090;
}
.bg-success {
  background-color: #dff0d8;
}
a.bg-success:hover {
  background-color: #c1e2b3;
}
.bg-info {
  background-color: #d9edf7;
}
a.bg-info:hover {
  background-color: #afd9ee;
}
.bg-warning {
  background-color: #fcf8e3;
}
a.bg-warning:hover {
  background-color: #f7ecb5;
}
.bg-danger {
  background-color: #f2dede;
}
a.bg-danger:hover {
  background-color: #e4b9b9;
}
.page-header {
  padding-bottom: 9px;
  margin: 40px 0 20px;
  border-bottom: 1px solid #eee;
}
ul,
ol {
  margin-top: 0;
  margin-bottom: 10px;
}
ul ul,
ol ul,
ul ol,
ol ol {
  margin-bottom: 0;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  margin-left: -5px;
  list-style: none;
}
.list-inline > li {
  display: inline-block;
  padding-right: 5px;
  padding-left: 5px;
}
dl {
  margin-top: 0;
  margin-bottom: 20px;
}
dt,
dd {
  line-height: 1.42857143;
}
dt {
  font-weight: bold;
}
dd {
  margin-left: 0;
}
@media (min-width: 768px) {
  .dl-horizontal dt {
    float: left;
    width: 160px;
    overflow: hidden;
    clear: left;
    text-align: right;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .dl-horizontal dd {
    margin-left: 180px;
  }
}
abbr[title],
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #777;
}
.initialism {
  font-size: 90%;
  text-transform: uppercase;
}
blockquote {
  padding: 10px 20px;
  margin: 0 0 20px;
  font-size: 17.5px;
  border-left: 5px solid #eee;
}
blockquote p:last-child,
blockquote ul:last-child,
blockquote ol:last-child {
  margin-bottom: 0;
}
blockquote footer,
blockquote small,
blockquote .small {
  display: block;
  font-size: 80%;
  line-height: 1.42857143;
  color: #777;
}
blockquote footer:before,
blockquote small:before,
blockquote .small:before {
  content: '\2014 \00A0';
}
.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  text-align: right;
  border-right: 5px solid #eee;
  border-left: 0;
}
.blockquote-reverse footer:before,
blockquote.pull-right footer:before,
.blockquote-reverse small:before,
blockquote.pull-right small:before,
.blockquote-reverse .small:before,
blockquote.pull-right .small:before {
  content: '';
}
.blockquote-reverse footer:after,
blockquote.pull-right footer:after,
.blockquote-reverse small:after,
blockquote.pull-right small:after,
.blockquote-reverse .small:after,
blockquote.pull-right .small:after {
  content: '\00A0 \2014';
}
address {
  margin-bottom: 20px;
  font-style: normal;
  line-height: 1.42857143;
}
code,
kbd,
pre,
samp {
  font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
}
code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  border-radius: 4px;
}
kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: #fff;
  background-color: #333;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
          box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
}
kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: bold;
  -webkit-box-shadow: none;
          box-shadow: none;
}
pre {
  display: block;
  padding: 9.5px;
  margin: 0 0 10px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #333;
  word-break: break-all;
  word-wrap: break-word;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 4px;
}
pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: 0;
}
.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}
.container-fluid {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
.row {
  margin-right: -15px;
  margin-left: -15px;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666667%;
}
.col-xs-10 {
  width: 83.33333333%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666667%;
}
.col-xs-7 {
  width: 58.33333333%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666667%;
}
.col-xs-4 {
  width: 33.33333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.66666667%;
}
.col-xs-1 {
  width: 8.33333333%;
}
.col-xs-pull-12 {
  right: 100%;
}
.col-xs-pull-11 {
  right: 91.66666667%;
}
.col-xs-pull-10 {
  right: 83.33333333%;
}
.col-xs-pull-9 {
  right: 75%;
}
.col-xs-pull-8 {
  right: 66.66666667%;
}
.col-xs-pull-7 {
  right: 58.33333333%;
}
.col-xs-pull-6 {
  right: 50%;
}
.col-xs-pull-5 {
  right: 41.66666667%;
}
.col-xs-pull-4 {
  right: 33.33333333%;
}
.col-xs-pull-3 {
  right: 25%;
}
.col-xs-pull-2 {
  right: 16.66666667%;
}
.col-xs-pull-1 {
  right: 8.33333333%;
}
.col-xs-pull-0 {
  right: auto;
}
.col-xs-push-12 {
  left: 100%;
}
.col-xs-push-11 {
  left: 91.66666667%;
}
.col-xs-push-10 {
  left: 83.33333333%;
}
.col-xs-push-9 {
  left: 75%;
}
.col-xs-push-8 {
  left: 66.66666667%;
}
.col-xs-push-7 {
  left: 58.33333333%;
}
.col-xs-push-6 {
  left: 50%;
}
.col-xs-push-5 {
  left: 41.66666667%;
}
.col-xs-push-4 {
  left: 33.33333333%;
}
.col-xs-push-3 {
  left: 25%;
}
.col-xs-push-2 {
  left: 16.66666667%;
}
.col-xs-push-1 {
  left: 8.33333333%;
}
.col-xs-push-0 {
  left: auto;
}
.col-xs-offset-12 {
  margin-left: 100%;
}
.col-xs-offset-11 {
  margin-left: 91.66666667%;
}
.col-xs-offset-10 {
  margin-left: 83.33333333%;
}
.col-xs-offset-9 {
  margin-left: 75%;
}
.col-xs-offset-8 {
  margin-left: 66.66666667%;
}
.col-xs-offset-7 {
  margin-left: 58.33333333%;
}
.col-xs-offset-6 {
  margin-left: 50%;
}
.col-xs-offset-5 {
  margin-left: 41.66666667%;
}
.col-xs-offset-4 {
  margin-left: 33.33333333%;
}
.col-xs-offset-3 {
  margin-left: 25%;
}
.col-xs-offset-2 {
  margin-left: 16.66666667%;
}
.col-xs-offset-1 {
  margin-left: 8.33333333%;
}
.col-xs-offset-0 {
  margin-left: 0;
}
@media (min-width: 768px) {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
  .col-sm-10 {
    width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }
  .col-sm-pull-12 {
    right: 100%;
  }
  .col-sm-pull-11 {
    right: 91.66666667%;
  }
  .col-sm-pull-10 {
    right: 83.33333333%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-8 {
    right: 66.66666667%;
  }
  .col-sm-pull-7 {
    right: 58.33333333%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-5 {
    right: 41.66666667%;
  }
  .col-sm-pull-4 {
    right: 33.33333333%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-2 {
    right: 16.66666667%;
  }
  .col-sm-pull-1 {
    right: 8.33333333%;
  }
  .col-sm-pull-0 {
    right: auto;
  }
  .col-sm-push-12 {
    left: 100%;
  }
  .col-sm-push-11 {
    left: 91.66666667%;
  }
  .col-sm-push-10 {
    left: 83.33333333%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-8 {
    left: 66.66666667%;
  }
  .col-sm-push-7 {
    left: 58.33333333%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-5 {
    left: 41.66666667%;
  }
  .col-sm-push-4 {
    left: 33.33333333%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-2 {
    left: 16.66666667%;
  }
  .col-sm-push-1 {
    left: 8.33333333%;
  }
  .col-sm-push-0 {
    left: auto;
  }
  .col-sm-offset-12 {
    margin-left: 100%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-sm-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-sm-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-sm-offset-0 {
    margin-left: 0;
  }
}
@media (min-width: 992px) {
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-md-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666667%;
  }
  .col-md-pull-10 {
    right: 83.33333333%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666667%;
  }
  .col-md-pull-7 {
    right: 58.33333333%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.66666667%;
  }
  .col-md-pull-1 {
    right: 8.33333333%;
  }
  .col-md-pull-0 {
    right: auto;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666667%;
  }
  .col-md-push-10 {
    left: 83.33333333%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666667%;
  }
  .col-md-push-7 {
    left: 58.33333333%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666667%;
  }
  .col-md-push-4 {
    left: 33.33333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.66666667%;
  }
  .col-md-push-1 {
    left: 8.33333333%;
  }
  .col-md-push-0 {
    left: auto;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-md-offset-0 {
    margin-left: 0;
  }
}
@media (min-width: 1200px) {
  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    float: left;
  }
  .col-lg-12 {
    width: 100%;
  }
  .col-lg-11 {
    width: 91.66666667%;
  }
  .col-lg-10 {
    width: 83.33333333%;
  }
  .col-lg-9 {
    width: 75%;
  }
  .col-lg-8 {
    width: 66.66666667%;
  }
  .col-lg-7 {
    width: 58.33333333%;
  }
  .col-lg-6 {
    width: 50%;
  }
  .col-lg-5 {
    width: 41.66666667%;
  }
  .col-lg-4 {
    width: 33.33333333%;
  }
  .col-lg-3 {
    width: 25%;
  }
  .col-lg-2 {
    width: 16.66666667%;
  }
  .col-lg-1 {
    width: 8.33333333%;
  }
  .col-lg-pull-12 {
    right: 100%;
  }
  .col-lg-pull-11 {
    right: 91.66666667%;
  }
  .col-lg-pull-10 {
    right: 83.33333333%;
  }
  .col-lg-pull-9 {
    right: 75%;
  }
  .col-lg-pull-8 {
    right: 66.66666667%;
  }
  .col-lg-pull-7 {
    right: 58.33333333%;
  }
  .col-lg-pull-6 {
    right: 50%;
  }
  .col-lg-pull-5 {
    right: 41.66666667%;
  }
  .col-lg-pull-4 {
    right: 33.33333333%;
  }
  .col-lg-pull-3 {
    right: 25%;
  }
  .col-lg-pull-2 {
    right: 16.66666667%;
  }
  .col-lg-pull-1 {
    right: 8.33333333%;
  }
  .col-lg-pull-0 {
    right: auto;
  }
  .col-lg-push-12 {
    left: 100%;
  }
  .col-lg-push-11 {
    left: 91.66666667%;
  }
  .col-lg-push-10 {
    left: 83.33333333%;
  }
  .col-lg-push-9 {
    left: 75%;
  }
  .col-lg-push-8 {
    left: 66.66666667%;
  }
  .col-lg-push-7 {
    left: 58.33333333%;
  }
  .col-lg-push-6 {
    left: 50%;
  }
  .col-lg-push-5 {
    left: 41.66666667%;
  }
  .col-lg-push-4 {
    left: 33.33333333%;
  }
  .col-lg-push-3 {
    left: 25%;
  }
  .col-lg-push-2 {
    left: 16.66666667%;
  }
  .col-lg-push-1 {
    left: 8.33333333%;
  }
  .col-lg-push-0 {
    left: auto;
  }
  .col-lg-offset-12 {
    margin-left: 100%;
  }
  .col-lg-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-lg-offset-9 {
    margin-left: 75%;
  }
  .col-lg-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-lg-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-lg-offset-6 {
    margin-left: 50%;
  }
  .col-lg-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-lg-offset-3 {
    margin-left: 25%;
  }
  .col-lg-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-lg-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-lg-offset-0 {
    margin-left: 0;
  }
}
table {
  background-color: transparent;
}
caption {
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777;
  text-align: left;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ddd;
}
.table .table {
  background-color: #fff;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  display: table-column;
  float: none;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  display: table-cell;
  float: none;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
.table-responsive {
  min-height: .01%;
  overflow-x: auto;
}
@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}
fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}
legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 20px;
  font-size: 21px;
  line-height: inherit;
  color: #333;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: bold;
}
input[type="search"] {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
input[type="radio"],
input[type="checkbox"] {
  margin: 4px 0 0;
  margin-top: 1px \9;
  line-height: normal;
}
input[type="file"] {
  display: block;
}
input[type="range"] {
  display: block;
  width: 100%;
}
select[multiple],
select[size] {
  height: auto;
}
input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
output {
  display: block;
  padding-top: 7px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
}
.form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
          box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
}
.form-control::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #999;
}
.form-control::-webkit-input-placeholder {
  color: #999;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  cursor: not-allowed;
  background-color: #eee;
  opacity: 1;
}
textarea.form-control {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: none;
}
@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type="date"],
  input[type="time"],
  input[type="datetime-local"],
  input[type="month"] {
    line-height: 34px;
  }
  input[type="date"].input-sm,
  input[type="time"].input-sm,
  input[type="datetime-local"].input-sm,
  input[type="month"].input-sm,
  .input-group-sm input[type="date"],
  .input-group-sm input[type="time"],
  .input-group-sm input[type="datetime-local"],
  .input-group-sm input[type="month"] {
    line-height: 30px;
  }
  input[type="date"].input-lg,
  input[type="time"].input-lg,
  input[type="datetime-local"].input-lg,
  input[type="month"].input-lg,
  .input-group-lg input[type="date"],
  .input-group-lg input[type="time"],
  .input-group-lg input[type="datetime-local"],
  .input-group-lg input[type="month"] {
    line-height: 46px;
  }
}
.form-group {
  margin-bottom: 15px;
}
.radio,
.checkbox {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
}
.radio label,
.checkbox label {
  min-height: 20px;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  cursor: pointer;
}
.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
  position: absolute;
  margin-top: 4px \9;
  margin-left: -20px;
}
.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px;
}
.radio-inline,
.checkbox-inline {
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  vertical-align: middle;
  cursor: pointer;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px;
}
input[type="radio"][disabled],
input[type="checkbox"][disabled],
input[type="radio"].disabled,
input[type="checkbox"].disabled,
fieldset[disabled] input[type="radio"],
fieldset[disabled] input[type="checkbox"] {
  cursor: not-allowed;
}
.radio-inline.disabled,
.checkbox-inline.disabled,
fieldset[disabled] .radio-inline,
fieldset[disabled] .checkbox-inline {
  cursor: not-allowed;
}
.radio.disabled label,
.checkbox.disabled label,
fieldset[disabled] .radio label,
fieldset[disabled] .checkbox label {
  cursor: not-allowed;
}
.form-control-static {
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0;
}
.form-control-static.input-lg,
.form-control-static.input-sm {
  padding-right: 0;
  padding-left: 0;
}
.input-sm {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
select.input-sm {
  height: 30px;
  line-height: 30px;
}
textarea.input-sm,
select[multiple].input-sm {
  height: auto;
}
.form-group-sm .form-control {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
select.form-group-sm .form-control {
  height: 30px;
  line-height: 30px;
}
textarea.form-group-sm .form-control,
select[multiple].form-group-sm .form-control {
  height: auto;
}
.form-group-sm .form-control-static {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
}
.input-lg {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
select.input-lg {
  height: 46px;
  line-height: 46px;
}
textarea.input-lg,
select[multiple].input-lg {
  height: auto;
}
.form-group-lg .form-control {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
select.form-group-lg .form-control {
  height: 46px;
  line-height: 46px;
}
textarea.form-group-lg .form-control,
select[multiple].form-group-lg .form-control {
  height: auto;
}
.form-group-lg .form-control-static {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
}
.has-feedback {
  position: relative;
}
.has-feedback .form-control {
  padding-right: 42.5px;
}
.form-control-feedback {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  pointer-events: none;
}
.input-lg + .form-control-feedback {
  width: 46px;
  height: 46px;
  line-height: 46px;
}
.input-sm + .form-control-feedback {
  width: 30px;
  height: 30px;
  line-height: 30px;
}
.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline,
.has-success.radio label,
.has-success.checkbox label,
.has-success.radio-inline label,
.has-success.checkbox-inline label {
  color: #3c763d;
}
.has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}
.has-success .form-control:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
}
.has-success .input-group-addon {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #3c763d;
}
.has-success .form-control-feedback {
  color: #3c763d;
}
.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline,
.has-warning.radio label,
.has-warning.checkbox label,
.has-warning.radio-inline label,
.has-warning.checkbox-inline label {
  color: #8a6d3b;
}
.has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}
.has-warning .form-control:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
}
.has-warning .input-group-addon {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #8a6d3b;
}
.has-warning .form-control-feedback {
  color: #8a6d3b;
}
.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline,
.has-error.radio label,
.has-error.checkbox label,
.has-error.radio-inline label,
.has-error.checkbox-inline label {
  color: #a94442;
}
.has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}
.has-error .form-control:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
}
.has-error .input-group-addon {
  color: #a94442;
  background-color: #f2dede;
  border-color: #a94442;
}
.has-error .form-control-feedback {
  color: #a94442;
}
.has-feedback label ~ .form-control-feedback {
  top: 25px;
}
.has-feedback label.sr-only ~ .form-control-feedback {
  top: 0;
}
.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #737373;
}
@media (min-width: 768px) {
  .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-static {
    display: inline-block;
  }
  .form-inline .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .form-inline .input-group .input-group-addon,
  .form-inline .input-group .input-group-btn,
  .form-inline .input-group .form-control {
    width: auto;
  }
  .form-inline .input-group > .form-control {
    width: 100%;
  }
  .form-inline .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio,
  .form-inline .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio label,
  .form-inline .checkbox label {
    padding-left: 0;
  }
  .form-inline .radio input[type="radio"],
  .form-inline .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .form-inline .has-feedback .form-control-feedback {
    top: 0;
  }
}
.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  padding-top: 7px;
  margin-top: 0;
  margin-bottom: 0;
}
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 27px;
}
.form-horizontal .form-group {
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    padding-top: 7px;
    margin-bottom: 0;
    text-align: right;
  }
}
.form-horizontal .has-feedback .form-control-feedback {
  right: 15px;
}
@media (min-width: 768px) {
  .form-horizontal .form-group-lg .control-label {
    padding-top: 14.333333px;
  }
}
@media (min-width: 768px) {
  .form-horizontal .form-group-sm .control-label {
    padding-top: 6px;
  }
}
.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -ms-touch-action: manipulation;
      touch-action: manipulation;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus,
.btn.focus,
.btn:active.focus,
.btn.active.focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn:hover,
.btn:focus,
.btn.focus {
  color: #333;
  text-decoration: none;
}
.btn:active,
.btn.active {
  background-image: none;
  outline: 0;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
          box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  pointer-events: none;
  cursor: not-allowed;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
          box-shadow: none;
  opacity: .65;
}
.btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.btn-default:hover,
.btn-default:focus,
.btn-default.focus,
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  background-image: none;
}
.btn-default.disabled,
.btn-default[disabled],
fieldset[disabled] .btn-default,
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled.focus,
.btn-default[disabled].focus,
fieldset[disabled] .btn-default.focus,
.btn-default.disabled:active,
.btn-default[disabled]:active,
fieldset[disabled] .btn-default:active,
.btn-default.disabled.active,
.btn-default[disabled].active,
fieldset[disabled] .btn-default.active {
  background-color: #fff;
  border-color: #ccc;
}
.btn-default .badge {
  color: #fff;
  background-color: #333;
}
.btn-primary {
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary.focus,
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  color: #fff;
  background-color: #286090;
  border-color: #204d74;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  background-image: none;
}
.btn-primary.disabled,
.btn-primary[disabled],
fieldset[disabled] .btn-primary,
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled.focus,
.btn-primary[disabled].focus,
fieldset[disabled] .btn-primary.focus,
.btn-primary.disabled:active,
.btn-primary[disabled]:active,
fieldset[disabled] .btn-primary:active,
.btn-primary.disabled.active,
.btn-primary[disabled].active,
fieldset[disabled] .btn-primary.active {
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-primary .badge {
  color: #337ab7;
  background-color: #fff;
}
.btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success:hover,
.btn-success:focus,
.btn-success.focus,
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled,
.btn-success[disabled],
fieldset[disabled] .btn-success,
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled.focus,
.btn-success[disabled].focus,
fieldset[disabled] .btn-success.focus,
.btn-success.disabled:active,
.btn-success[disabled]:active,
fieldset[disabled] .btn-success:active,
.btn-success.disabled.active,
.btn-success[disabled].active,
fieldset[disabled] .btn-success.active {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success .badge {
  color: #5cb85c;
  background-color: #fff;
}
.btn-info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info:hover,
.btn-info:focus,
.btn-info.focus,
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled,
.btn-info[disabled],
fieldset[disabled] .btn-info,
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled.focus,
.btn-info[disabled].focus,
fieldset[disabled] .btn-info.focus,
.btn-info.disabled:active,
.btn-info[disabled]:active,
fieldset[disabled] .btn-info:active,
.btn-info.disabled.active,
.btn-info[disabled].active,
fieldset[disabled] .btn-info.active {
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info .badge {
  color: #5bc0de;
  background-color: #fff;
}
.btn-warning {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning:hover,
.btn-warning:focus,
.btn-warning.focus,
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled,
.btn-warning[disabled],
fieldset[disabled] .btn-warning,
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled.focus,
.btn-warning[disabled].focus,
fieldset[disabled] .btn-warning.focus,
.btn-warning.disabled:active,
.btn-warning[disabled]:active,
fieldset[disabled] .btn-warning:active,
.btn-warning.disabled.active,
.btn-warning[disabled].active,
fieldset[disabled] .btn-warning.active {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning .badge {
  color: #f0ad4e;
  background-color: #fff;
}
.btn-danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger.focus,
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled,
.btn-danger[disabled],
fieldset[disabled] .btn-danger,
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled.focus,
.btn-danger[disabled].focus,
fieldset[disabled] .btn-danger.focus,
.btn-danger.disabled:active,
.btn-danger[disabled]:active,
fieldset[disabled] .btn-danger:active,
.btn-danger.disabled.active,
.btn-danger[disabled].active,
fieldset[disabled] .btn-danger.active {
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger .badge {
  color: #d9534f;
  background-color: #fff;
}
.btn-link {
  font-weight: normal;
  color: #337ab7;
  border-radius: 0;
}
.btn-link,
.btn-link:active,
.btn-link.active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent;
  -webkit-box-shadow: none;
          box-shadow: none;
}
.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
  border-color: transparent;
}
.btn-link:hover,
.btn-link:focus {
  color: #23527c;
  text-decoration: underline;
  background-color: transparent;
}
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: #777;
  text-decoration: none;
}
.btn-lg,
.btn-group-lg > .btn {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
.btn-sm,
.btn-group-sm > .btn {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-xs,
.btn-group-xs > .btn {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 5px;
}
input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}
.fade {
  opacity: 0;
  -webkit-transition: opacity .15s linear;
       -o-transition: opacity .15s linear;
          transition: opacity .15s linear;
}
.fade.in {
  opacity: 1;
}
.collapse {
  display: none;
  visibility: hidden;
}
.collapse.in {
  display: block;
  visibility: visible;
}
tr.collapse.in {
  display: table-row;
}
tbody.collapse.in {
  display: table-row-group;
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition-timing-function: ease;
       -o-transition-timing-function: ease;
          transition-timing-function: ease;
  -webkit-transition-duration: .35s;
       -o-transition-duration: .35s;
          transition-duration: .35s;
  -webkit-transition-property: height, visibility;
       -o-transition-property: height, visibility;
          transition-property: height, visibility;
}
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px solid;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}
.dropup,
.dropdown {
  position: relative;
}
.dropdown-toggle:focus {
  outline: 0;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  font-size: 14px;
  text-align: left;
  list-style: none;
  background-color: #fff;
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, .15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
          box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
}
.dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.dropdown-menu .divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333;
  white-space: nowrap;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  color: #262626;
  text-decoration: none;
  background-color: #f5f5f5;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: #fff;
  text-decoration: none;
  background-color: #337ab7;
  outline: 0;
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  color: #777;
}
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  cursor: not-allowed;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.open > .dropdown-menu {
  display: block;
}
.open > a {
  outline: 0;
}
.dropdown-menu-right {
  right: 0;
  left: auto;
}
.dropdown-menu-left {
  right: auto;
  left: 0;
}
.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 12px;
  line-height: 1.42857143;
  color: #777;
  white-space: nowrap;
}
.dropdown-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 990;
}
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  content: "";
  border-top: 0;
  border-bottom: 4px solid;
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 2px;
}
@media (min-width: 768px) {
  .navbar-right .dropdown-menu {
    right: 0;
    left: auto;
  }
  .navbar-right .dropdown-menu-left {
    right: auto;
    left: 0;
  }
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  float: left;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover,
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus,
.btn-group > .btn:active,
.btn-group-vertical > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn.active {
  z-index: 2;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
  margin-left: -1px;
}
.btn-toolbar {
  margin-left: -5px;
}
.btn-toolbar .btn-group,
.btn-toolbar .input-group {
  float: left;
}
.btn-toolbar > .btn,
.btn-toolbar > .btn-group,
.btn-toolbar > .input-group {
  margin-left: 5px;
}
.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}
.btn-group > .btn:first-child {
  margin-left: 0;
}
.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group > .btn-group {
  float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}
.btn-group > .btn + .dropdown-toggle {
  padding-right: 8px;
  padding-left: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
  padding-right: 12px;
  padding-left: 12px;
}
.btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
          box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
}
.btn-group.open .dropdown-toggle.btn-link {
  -webkit-box-shadow: none;
          box-shadow: none;
}
.btn .caret {
  margin-left: 0;
}
.btn-lg .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0;
}
.dropup .btn-lg .caret {
  border-width: 0 5px 5px;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group,
.btn-group-vertical > .btn-group > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
}
.btn-group-vertical > .btn-group > .btn {
  float: none;
}
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}
.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-left-radius: 4px;
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
}
.btn-group-justified > .btn,
.btn-group-justified > .btn-group {
  display: table-cell;
  float: none;
  width: 1%;
}
.btn-group-justified > .btn-group .btn {
  width: 100%;
}
.btn-group-justified > .btn-group .dropdown-menu {
  left: auto;
}
[data-toggle="buttons"] > .btn input[type="radio"],
[data-toggle="buttons"] > .btn-group > .btn input[type="radio"],
[data-toggle="buttons"] > .btn input[type="checkbox"],
[data-toggle="buttons"] > .btn-group > .btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}
.input-group[class*="col-"] {
  float: none;
  padding-right: 0;
  padding-left: 0;
}
.input-group .form-control {
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
  margin-bottom: 0;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
select.input-group-lg > .form-control,
select.input-group-lg > .input-group-addon,
select.input-group-lg > .input-group-btn > .btn {
  height: 46px;
  line-height: 46px;
}
textarea.input-group-lg > .form-control,
textarea.input-group-lg > .input-group-addon,
textarea.input-group-lg > .input-group-btn > .btn,
select[multiple].input-group-lg > .form-control,
select[multiple].input-group-lg > .input-group-addon,
select[multiple].input-group-lg > .input-group-btn > .btn {
  height: auto;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
select.input-group-sm > .form-control,
select.input-group-sm > .input-group-addon,
select.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  line-height: 30px;
}
textarea.input-group-sm > .form-control,
textarea.input-group-sm > .input-group-addon,
textarea.input-group-sm > .input-group-btn > .btn,
select[multiple].input-group-sm > .form-control,
select[multiple].input-group-sm > .input-group-addon,
select[multiple].input-group-sm > .input-group-btn > .btn {
  height: auto;
}
.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell;
}
.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}
.input-group-addon {
  padding: 6px 12px;
  font-size: 14px;
  font-weight: normal;
  line-height: 1;
  color: #555;
  text-align: center;
  background-color: #eee;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.input-group-addon.input-sm {
  padding: 5px 10px;
  font-size: 12px;
  border-radius: 3px;
}
.input-group-addon.input-lg {
  padding: 10px 16px;
  font-size: 18px;
  border-radius: 6px;
}
.input-group-addon input[type="radio"],
.input-group-addon input[type="checkbox"] {
  margin-top: 0;
}
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group-addon:first-child {
  border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child),
.input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group-addon:last-child {
  border-left: 0;
}
.input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap;
}
.input-group-btn > .btn {
  position: relative;
}
.input-group-btn > .btn + .btn {
  margin-left: -1px;
}
.input-group-btn > .btn:hover,
.input-group-btn > .btn:focus,
.input-group-btn > .btn:active {
  z-index: 2;
}
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group {
  margin-right: -1px;
}
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group {
  margin-left: -1px;
}
.nav {
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.nav > li {
  position: relative;
  display: block;
}
.nav > li > a {
  position: relative;
  display: block;
  padding: 10px 15px;
}
.nav > li > a:hover,
.nav > li > a:focus {
  text-decoration: none;
  background-color: #eee;
}
.nav > li.disabled > a {
  color: #777;
}
.nav > li.disabled > a:hover,
.nav > li.disabled > a:focus {
  color: #777;
  text-decoration: none;
  cursor: not-allowed;
  background-color: transparent;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus {
  background-color: #eee;
  border-color: #337ab7;
}
.nav .nav-divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.nav > li > a > img {
  max-width: none;
}
.nav-tabs {
  border-bottom: 1px solid #ddd;
}
.nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
.nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.42857143;
  border: 1px solid transparent;
  border-radius: 4px 4px 0 0;
}
.nav-tabs > li > a:hover {
  border-color: #eee #eee #ddd;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  color: #555;
  cursor: default;
  background-color: #fff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
}
.nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0;
}
.nav-tabs.nav-justified > li {
  float: none;
}
.nav-tabs.nav-justified > li > a {
  margin-bottom: 5px;
  text-align: center;
}
.nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-tabs.nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 4px 4px 0 0;
  }
  .nav-tabs.nav-justified > .active > a,
  .nav-tabs.nav-justified > .active > a:hover,
  .nav-tabs.nav-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.nav-pills > li {
  float: left;
}
.nav-pills > li > a {
  border-radius: 4px;
}
.nav-pills > li + li {
  margin-left: 2px;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  color: #fff;
  background-color: #337ab7;
}
.nav-stacked > li {
  float: none;
}
.nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0;
}
.nav-justified {
  width: 100%;
}
.nav-justified > li {
  float: none;
}
.nav-justified > li > a {
  margin-bottom: 5px;
  text-align: center;
}
.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs-justified {
  border-bottom: 0;
}
.nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:hover,
.nav-tabs-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 4px 4px 0 0;
  }
  .nav-tabs-justified > .active > a,
  .nav-tabs-justified > .active > a:hover,
  .nav-tabs-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.tab-content > .tab-pane {
  display: none;
  visibility: hidden;
}
.tab-content > .active {
  display: block;
  visibility: visible;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 20px;
  border: 1px solid transparent;
}
@media (min-width: 768px) {
  .navbar {
    border-radius: 4px;
  }
}
@media (min-width: 768px) {
  .navbar-header {
    float: left;
  }
}
.navbar-collapse {
  padding-right: 15px;
  padding-left: 15px;
  overflow-x: visible;
  -webkit-overflow-scrolling: touch;
  border-top: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
          box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
}
.navbar-collapse.in {
  overflow-y: auto;
}
@media (min-width: 768px) {
  .navbar-collapse {
    width: auto;
    border-top: 0;
    -webkit-box-shadow: none;
            box-shadow: none;
  }
  .navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
    visibility: visible !important;
  }
  .navbar-collapse.in {
    overflow-y: visible;
  }
  .navbar-fixed-top .navbar-collapse,
  .navbar-static-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    padding-right: 0;
    padding-left: 0;
  }
}
.navbar-fixed-top .navbar-collapse,
.navbar-fixed-bottom .navbar-collapse {
  max-height: 340px;
}
@media (max-device-width: 480px) and (orientation: landscape) {
  .navbar-fixed-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    max-height: 200px;
  }
}
.container > .navbar-header,
.container-fluid > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-collapse {
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 768px) {
  .container > .navbar-header,
  .container-fluid > .navbar-header,
  .container > .navbar-collapse,
  .container-fluid > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}
.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px;
}
@media (min-width: 768px) {
  .navbar-static-top {
    border-radius: 0;
  }
}
.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
}
@media (min-width: 768px) {
  .navbar-fixed-top,
  .navbar-fixed-bottom {
    border-radius: 0;
  }
}
.navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px;
}
.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0;
}
.navbar-brand {
  float: left;
  height: 50px;
  padding: 15px 15px;
  font-size: 18px;
  line-height: 20px;
}
.navbar-brand:hover,
.navbar-brand:focus {
  text-decoration: none;
}
.navbar-brand > img {
  display: block;
}
@media (min-width: 768px) {
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
    margin-left: -15px;
  }
}
.navbar-toggle {
  position: relative;
  float: right;
  padding: 9px 10px;
  margin-top: 8px;
  margin-right: 15px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
.navbar-toggle:focus {
  outline: 0;
}
.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
}
.navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}
@media (min-width: 768px) {
  .navbar-toggle {
    display: none;
  }
}
.navbar-nav {
  margin: 7.5px -15px;
}
.navbar-nav > li > a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 20px;
}
@media (max-width: 767px) {
  .navbar-nav .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    -webkit-box-shadow: none;
            box-shadow: none;
  }
  .navbar-nav .open .dropdown-menu > li > a,
  .navbar-nav .open .dropdown-menu .dropdown-header {
    padding: 5px 15px 5px 25px;
  }
  .navbar-nav .open .dropdown-menu > li > a {
    line-height: 20px;
  }
  .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-nav .open .dropdown-menu > li > a:focus {
    background-image: none;
  }
}
@media (min-width: 768px) {
  .navbar-nav {
    float: left;
    margin: 0;
  }
  .navbar-nav > li {
    float: left;
  }
  .navbar-nav > li > a {
    padding-top: 15px;
    padding-bottom: 15px;
  }
}
.navbar-form {
  padding: 10px 15px;
  margin-top: 8px;
  margin-right: -15px;
  margin-bottom: 8px;
  margin-left: -15px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
          box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
}
@media (min-width: 768px) {
  .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .navbar-form .form-control-static {
    display: inline-block;
  }
  .navbar-form .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .navbar-form .input-group .input-group-addon,
  .navbar-form .input-group .input-group-btn,
  .navbar-form .input-group .form-control {
    width: auto;
  }
  .navbar-form .input-group > .form-control {
    width: 100%;
  }
  .navbar-form .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio,
  .navbar-form .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio label,
  .navbar-form .checkbox label {
    padding-left: 0;
  }
  .navbar-form .radio input[type="radio"],
  .navbar-form .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .navbar-form .has-feedback .form-control-feedback {
    top: 0;
  }
}
@media (max-width: 767px) {
  .navbar-form .form-group {
    margin-bottom: 5px;
  }
  .navbar-form .form-group:last-child {
    margin-bottom: 0;
  }
}
@media (min-width: 768px) {
  .navbar-form {
    width: auto;
    padding-top: 0;
    padding-bottom: 0;
    margin-right: 0;
    margin-left: 0;
    border: 0;
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  margin-bottom: 0;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.navbar-btn {
  margin-top: 8px;
  margin-bottom: 8px;
}
.navbar-btn.btn-sm {
  margin-top: 10px;
  margin-bottom: 10px;
}
.navbar-btn.btn-xs {
  margin-top: 14px;
  margin-bottom: 14px;
}
.navbar-text {
  margin-top: 15px;
  margin-bottom: 15px;
}
@media (min-width: 768px) {
  .navbar-text {
    float: left;
    margin-right: 15px;
    margin-left: 15px;
  }
}
@media (min-width: 768px) {
  .navbar-left {
    float: left !important;
  }
  .navbar-right {
    float: right !important;
    margin-right: -15px;
  }
  .navbar-right ~ .navbar-right {
    margin-right: 0;
  }
}
.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7;
}
.navbar-default .navbar-brand {
  color: #777;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #5e5e5e;
  background-color: transparent;
}
.navbar-default .navbar-text {
  color: #777;
}
.navbar-default .navbar-nav > li > a {
  color: #777;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #333;
  background-color: transparent;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #555;
  background-color: #e7e7e7;
}
.navbar-default .navbar-nav > .disabled > a,
.navbar-default .navbar-nav > .disabled > a:hover,
.navbar-default .navbar-nav > .disabled > a:focus {
  color: #ccc;
  background-color: transparent;
}
.navbar-default .navbar-toggle {
  border-color: #ddd;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #ddd;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #888;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #e7e7e7;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #555;
  background-color: #e7e7e7;
}
@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #777;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #333;
    background-color: transparent;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #555;
    background-color: #e7e7e7;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #ccc;
    background-color: transparent;
  }
}
.navbar-default .navbar-link {
  color: #777;
}
.navbar-default .navbar-link:hover {
  color: #333;
}
.navbar-default .btn-link {
  color: #777;
}
.navbar-default .btn-link:hover,
.navbar-default .btn-link:focus {
  color: #333;
}
.navbar-default .btn-link[disabled]:hover,
fieldset[disabled] .navbar-default .btn-link:hover,
.navbar-default .btn-link[disabled]:focus,
fieldset[disabled] .navbar-default .btn-link:focus {
  color: #ccc;
}
.navbar-inverse {
  background-color: #222;
  border-color: #080808;
}
.navbar-inverse .navbar-brand {
  color: #9d9d9d;
}
.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-text {
  color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a {
  color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
  color: #fff;
  background-color: #080808;
}
.navbar-inverse .navbar-nav > .disabled > a,
.navbar-inverse .navbar-nav > .disabled > a:hover,
.navbar-inverse .navbar-nav > .disabled > a:focus {
  color: #444;
  background-color: transparent;
}
.navbar-inverse .navbar-toggle {
  border-color: #333;
}
.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
  background-color: #333;
}
.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #fff;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: #101010;
}
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus {
  color: #fff;
  background-color: #080808;
}
@media (max-width: 767px) {
  .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #9d9d9d;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #fff;
    background-color: transparent;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #444;
    background-color: transparent;
  }
}
.navbar-inverse .navbar-link {
  color: #9d9d9d;
}
.navbar-inverse .navbar-link:hover {
  color: #fff;
}
.navbar-inverse .btn-link {
  color: #9d9d9d;
}
.navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link:focus {
  color: #fff;
}
.navbar-inverse .btn-link[disabled]:hover,
fieldset[disabled] .navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link[disabled]:focus,
fieldset[disabled] .navbar-inverse .btn-link:focus {
  color: #444;
}
.breadcrumb {
  padding: 8px 15px;
  margin-bottom: 20px;
  list-style: none;
  background-color: #f5f5f5;
  border-radius: 4px;
}
.breadcrumb > li {
  display: inline-block;
}
.breadcrumb > li + li:before {
  padding: 0 5px;
  color: #ccc;
  content: "/\00a0";
}
.breadcrumb > .active {
  color: #777;
}
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 20px 0;
  border-radius: 4px;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  margin-left: -1px;
  line-height: 1.42857143;
  color: #337ab7;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #ddd;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  color: #23527c;
  background-color: #eee;
  border-color: #ddd;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 2;
  color: #fff;
  cursor: default;
  background-color: #337ab7;
  border-color: #337ab7;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #777;
  cursor: not-allowed;
  background-color: #fff;
  border-color: #ddd;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 18px;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-top-left-radius: 6px;
  border-bottom-left-radius: 6px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
.pager {
  padding-left: 0;
  margin: 20px 0;
  text-align: center;
  list-style: none;
}
.pager li {
  display: inline;
}
.pager li > a,
.pager li > span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 15px;
}
.pager li > a:hover,
.pager li > a:focus {
  text-decoration: none;
  background-color: #eee;
}
.pager .next > a,
.pager .next > span {
  float: right;
}
.pager .previous > a,
.pager .previous > span {
  float: left;
}
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
  color: #777;
  cursor: not-allowed;
  background-color: #fff;
}
.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}
a.label:hover,
a.label:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.label:empty {
  display: none;
}
.btn .label {
  position: relative;
  top: -1px;
}
.label-default {
  background-color: #777;
}
.label-default[href]:hover,
.label-default[href]:focus {
  background-color: #5e5e5e;
}
.label-primary {
  background-color: #337ab7;
}
.label-primary[href]:hover,
.label-primary[href]:focus {
  background-color: #286090;
}
.label-success {
  background-color: #5cb85c;
}
.label-success[href]:hover,
.label-success[href]:focus {
  background-color: #449d44;
}
.label-info {
  background-color: #5bc0de;
}
.label-info[href]:hover,
.label-info[href]:focus {
  background-color: #31b0d5;
}
.label-warning {
  background-color: #f0ad4e;
}
.label-warning[href]:hover,
.label-warning[href]:focus {
  background-color: #ec971f;
}
.label-danger {
  background-color: #d9534f;
}
.label-danger[href]:hover,
.label-danger[href]:focus {
  background-color: #c9302c;
}
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  background-color: #777;
  border-radius: 10px;
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.btn-xs .badge {
  top: 0;
  padding: 1px 5px;
}
a.badge:hover,
a.badge:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: #337ab7;
  background-color: #fff;
}
.list-group-item > .badge {
  float: right;
}
.list-group-item > .badge + .badge {
  margin-right: 5px;
}
.nav-pills > li > a > .badge {
  margin-left: 3px;
}
.jumbotron {
  padding: 30px 15px;
  margin-bottom: 30px;
  color: inherit;
  background-color: #eee;
}
.jumbotron h1,
.jumbotron .h1 {
  color: inherit;
}
.jumbotron p {
  margin-bottom: 15px;
  font-size: 21px;
  font-weight: 200;
}
.jumbotron > hr {
  border-top-color: #d5d5d5;
}
.container .jumbotron,
.container-fluid .jumbotron {
  border-radius: 6px;
}
.jumbotron .container {
  max-width: 100%;
}
@media screen and (min-width: 768px) {
  .jumbotron {
    padding: 48px 0;
  }
  .container .jumbotron,
  .container-fluid .jumbotron {
    padding-right: 60px;
    padding-left: 60px;
  }
  .jumbotron h1,
  .jumbotron .h1 {
    font-size: 63px;
  }
}
.thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: border .2s ease-in-out;
       -o-transition: border .2s ease-in-out;
          transition: border .2s ease-in-out;
}
.thumbnail > img,
.thumbnail a > img {
  margin-right: auto;
  margin-left: auto;
}
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: #337ab7;
}
.thumbnail .caption {
  padding: 9px;
  color: #333;
}
.alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 4px;
}
.alert h4 {
  margin-top: 0;
  color: inherit;
}
.alert .alert-link {
  font-weight: bold;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: 5px;
}
.alert-dismissable,
.alert-dismissible {
  padding-right: 35px;
}
.alert-dismissable .close,
.alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.alert-success hr {
  border-top-color: #c9e2b3;
}
.alert-success .alert-link {
  color: #2b542c;
}
.alert-info {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.alert-info hr {
  border-top-color: #a6e1ec;
}
.alert-info .alert-link {
  color: #245269;
}
.alert-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.alert-warning hr {
  border-top-color: #f7e1b5;
}
.alert-warning .alert-link {
  color: #66512c;
}
.alert-danger {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.alert-danger hr {
  border-top-color: #e4b9c0;
}
.alert-danger .alert-link {
  color: #843534;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@-o-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  height: 20px;
  margin-bottom: 20px;
  overflow: hidden;
  background-color: #f5f5f5;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
          box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
}
.progress-bar {
  float: left;
  width: 0;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: #fff;
  text-align: center;
  background-color: #337ab7;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
          box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
  -webkit-transition: width .6s ease;
       -o-transition: width .6s ease;
          transition: width .6s ease;
}
.progress-striped .progress-bar,
.progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  -webkit-background-size: 40px 40px;
          background-size: 40px 40px;
}
.progress.active .progress-bar,
.progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
       -o-animation: progress-bar-stripes 2s linear infinite;
          animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar-success {
  background-color: #5cb85c;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
  background-color: #5bc0de;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
  background-color: #f0ad4e;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
  background-color: #d9534f;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.media {
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}
.media,
.media-body {
  overflow: hidden;
  zoom: 1;
}
.media-body {
  width: 10000px;
}
.media-object {
  display: block;
}
.media-right,
.media > .pull-right {
  padding-left: 10px;
}
.media-left,
.media > .pull-left {
  padding-right: 10px;
}
.media-left,
.media-right,
.media-body {
  display: table-cell;
  vertical-align: top;
}
.media-middle {
  vertical-align: middle;
}
.media-bottom {
  vertical-align: bottom;
}
.media-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.media-list {
  padding-left: 0;
  list-style: none;
}
.list-group {
  padding-left: 0;
  margin-bottom: 20px;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid #ddd;
}
.list-group-item:first-child {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}
.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
a.list-group-item {
  color: #555;
}
a.list-group-item .list-group-item-heading {
  color: #333;
}
a.list-group-item:hover,
a.list-group-item:focus {
  color: #555;
  text-decoration: none;
  background-color: #f5f5f5;
}
.list-group-item.disabled,
.list-group-item.disabled:hover,
.list-group-item.disabled:focus {
  color: #777;
  cursor: not-allowed;
  background-color: #eee;
}
.list-group-item.disabled .list-group-item-heading,
.list-group-item.disabled:hover .list-group-item-heading,
.list-group-item.disabled:focus .list-group-item-heading {
  color: inherit;
}
.list-group-item.disabled .list-group-item-text,
.list-group-item.disabled:hover .list-group-item-text,
.list-group-item.disabled:focus .list-group-item-text {
  color: #777;
}
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  z-index: 2;
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.list-group-item.active .list-group-item-heading,
.list-group-item.active:hover .list-group-item-heading,
.list-group-item.active:focus .list-group-item-heading,
.list-group-item.active .list-group-item-heading > small,
.list-group-item.active:hover .list-group-item-heading > small,
.list-group-item.active:focus .list-group-item-heading > small,
.list-group-item.active .list-group-item-heading > .small,
.list-group-item.active:hover .list-group-item-heading > .small,
.list-group-item.active:focus .list-group-item-heading > .small {
  color: inherit;
}
.list-group-item.active .list-group-item-text,
.list-group-item.active:hover .list-group-item-text,
.list-group-item.active:focus .list-group-item-text {
  color: #c7ddef;
}
.list-group-item-success {
  color: #3c763d;
  background-color: #dff0d8;
}
a.list-group-item-success {
  color: #3c763d;
}
a.list-group-item-success .list-group-item-heading {
  color: inherit;
}
a.list-group-item-success:hover,
a.list-group-item-success:focus {
  color: #3c763d;
  background-color: #d0e9c6;
}
a.list-group-item-success.active,
a.list-group-item-success.active:hover,
a.list-group-item-success.active:focus {
  color: #fff;
  background-color: #3c763d;
  border-color: #3c763d;
}
.list-group-item-info {
  color: #31708f;
  background-color: #d9edf7;
}
a.list-group-item-info {
  color: #31708f;
}
a.list-group-item-info .list-group-item-heading {
  color: inherit;
}
a.list-group-item-info:hover,
a.list-group-item-info:focus {
  color: #31708f;
  background-color: #c4e3f3;
}
a.list-group-item-info.active,
a.list-group-item-info.active:hover,
a.list-group-item-info.active:focus {
  color: #fff;
  background-color: #31708f;
  border-color: #31708f;
}
.list-group-item-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
}
a.list-group-item-warning {
  color: #8a6d3b;
}
a.list-group-item-warning .list-group-item-heading {
  color: inherit;
}
a.list-group-item-warning:hover,
a.list-group-item-warning:focus {
  color: #8a6d3b;
  background-color: #faf2cc;
}
a.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus {
  color: #fff;
  background-color: #8a6d3b;
  border-color: #8a6d3b;
}
.list-group-item-danger {
  color: #a94442;
  background-color: #f2dede;
}
a.list-group-item-danger {
  color: #a94442;
}
a.list-group-item-danger .list-group-item-heading {
  color: inherit;
}
a.list-group-item-danger:hover,
a.list-group-item-danger:focus {
  color: #a94442;
  background-color: #ebcccc;
}
a.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus {
  color: #fff;
  background-color: #a94442;
  border-color: #a94442;
}
.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
.panel {
  margin-bottom: 20px;
  background-color: #fff;
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
          box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}
.panel-body {
  padding: 15px;
}
.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 16px;
  color: inherit;
}
.panel-title > a,
.panel-title > small,
.panel-title > .small,
.panel-title > small > a,
.panel-title > .small > a {
  color: inherit;
}
.panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .list-group,
.panel > .panel-collapse > .list-group {
  margin-bottom: 0;
}
.panel > .list-group .list-group-item,
.panel > .panel-collapse > .list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0;
}
.panel > .list-group:first-child .list-group-item:first-child,
.panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
  border-top: 0;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel > .list-group:last-child .list-group-item:last-child,
.panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
  border-bottom: 0;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.list-group + .panel-footer {
  border-top-width: 0;
}
.panel > .table,
.panel > .table-responsive > .table,
.panel > .panel-collapse > .table {
  margin-bottom: 0;
}
.panel > .table caption,
.panel > .table-responsive > .table caption,
.panel > .panel-collapse > .table caption {
  padding-right: 15px;
  padding-left: 15px;
}
.panel > .table:first-child,
.panel > .table-responsive:first-child > .table:first-child {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
  border-top-left-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
  border-top-right-radius: 3px;
}
.panel > .table:last-child,
.panel > .table-responsive:last-child > .table:last-child {
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: 3px;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive,
.panel > .table + .panel-body,
.panel > .table-responsive + .panel-body {
  border-top: 1px solid #ddd;
}
.panel > .table > tbody:first-child > tr:first-child th,
.panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0;
}
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
  border-bottom: 0;
}
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0;
}
.panel > .table-responsive {
  margin-bottom: 0;
  border: 0;
}
.panel-group {
  margin-bottom: 20px;
}
.panel-group .panel {
  margin-bottom: 0;
  border-radius: 4px;
}
.panel-group .panel + .panel {
  margin-top: 5px;
}
.panel-group .panel-heading {
  border-bottom: 0;
}
.panel-group .panel-heading + .panel-collapse > .panel-body,
.panel-group .panel-heading + .panel-collapse > .list-group {
  border-top: 1px solid #ddd;
}
.panel-group .panel-footer {
  border-top: 0;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #ddd;
}
.panel-default {
  border-color: #ddd;
}
.panel-default > .panel-heading {
  color: #333;
  background-color: #f5f5f5;
  border-color: #ddd;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ddd;
}
.panel-default > .panel-heading .badge {
  color: #f5f5f5;
  background-color: #333;
}
.panel-default > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ddd;
}
.panel-primary {
  border-color: #337ab7;
}
.panel-primary > .panel-heading {
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.panel-primary > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #337ab7;
}
.panel-primary > .panel-heading .badge {
  color: #337ab7;
  background-color: #fff;
}
.panel-primary > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #337ab7;
}
.panel-success {
  border-color: #d6e9c6;
}
.panel-success > .panel-heading {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.panel-success > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #d6e9c6;
}
.panel-success > .panel-heading .badge {
  color: #dff0d8;
  background-color: #3c763d;
}
.panel-success > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #d6e9c6;
}
.panel-info {
  border-color: #bce8f1;
}
.panel-info > .panel-heading {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.panel-info > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #bce8f1;
}
.panel-info > .panel-heading .badge {
  color: #d9edf7;
  background-color: #31708f;
}
.panel-info > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #bce8f1;
}
.panel-warning {
  border-color: #faebcc;
}
.panel-warning > .panel-heading {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.panel-warning > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #faebcc;
}
.panel-warning > .panel-heading .badge {
  color: #fcf8e3;
  background-color: #8a6d3b;
}
.panel-warning > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #faebcc;
}
.panel-danger {
  border-color: #ebccd1;
}
.panel-danger > .panel-heading {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.panel-danger > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ebccd1;
}
.panel-danger > .panel-heading .badge {
  color: #f2dede;
  background-color: #a94442;
}
.panel-danger > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ebccd1;
}
.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}
.embed-responsive.embed-responsive-16by9 {
  padding-bottom: 56.25%;
}
.embed-responsive.embed-responsive-4by3 {
  padding-bottom: 75%;
}
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
}
.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, .15);
}
.well-lg {
  padding: 24px;
  border-radius: 6px;
}
.well-sm {
  padding: 9px;
  border-radius: 3px;
}
.close {
  float: right;
  font-size: 21px;
  font-weight: bold;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  filter: alpha(opacity=20);
  opacity: .2;
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
  filter: alpha(opacity=50);
  opacity: .5;
}
button.close {
  -webkit-appearance: none;
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
}
.modal-open {
  overflow: hidden;
}
.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  display: none;
  overflow: hidden;
  -webkit-overflow-scrolling: touch;
  outline: 0;
}
.modal.fade .modal-dialog {
  -webkit-transition: -webkit-transform .3s ease-out;
       -o-transition:      -o-transform .3s ease-out;
          transition:         transform .3s ease-out;
  -webkit-transform: translate(0, -25%);
      -ms-transform: translate(0, -25%);
       -o-transform: translate(0, -25%);
          transform: translate(0, -25%);
}
.modal.in .modal-dialog {
  -webkit-transform: translate(0, 0);
      -ms-transform: translate(0, 0);
       -o-transform: translate(0, 0);
          transform: translate(0, 0);
}
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
}
.modal-content {
  position: relative;
  background-color: #fff;
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, .2);
  border-radius: 6px;
  outline: 0;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
          box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
}
.modal-backdrop {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  background-color: #000;
}
.modal-backdrop.fade {
  filter: alpha(opacity=0);
  opacity: 0;
}
.modal-backdrop.in {
  filter: alpha(opacity=50);
  opacity: .5;
}
.modal-header {
  min-height: 16.42857143px;
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
}
.modal-header .close {
  margin-top: -2px;
}
.modal-title {
  margin: 0;
  line-height: 1.42857143;
}
.modal-body {
  position: relative;
  padding: 15px;
}
.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
  margin-bottom: 0;
  margin-left: 5px;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}
@media (min-width: 768px) {
  .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
            box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
  }
  .modal-sm {
    width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg {
    width: 900px;
  }
}
.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-weight: normal;
  line-height: 1.4;
  visibility: visible;
  filter: alpha(opacity=0);
  opacity: 0;
}
.tooltip.in {
  filter: alpha(opacity=90);
  opacity: .9;
}
.tooltip.top {
  padding: 5px 0;
  margin-top: -3px;
}
.tooltip.right {
  padding: 0 5px;
  margin-left: 3px;
}
.tooltip.bottom {
  padding: 5px 0;
  margin-top: 3px;
}
.tooltip.left {
  padding: 0 5px;
  margin-left: -3px;
}
.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #fff;
  text-align: center;
  text-decoration: none;
  background-color: #000;
  border-radius: 4px;
}
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-left .tooltip-arrow {
  right: 5px;
  bottom: 0;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-right .tooltip-arrow {
  bottom: 0;
  left: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-left .tooltip-arrow {
  top: 0;
  right: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-right .tooltip-arrow {
  top: 0;
  left: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: none;
  max-width: 276px;
  padding: 1px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: left;
  white-space: normal;
  background-color: #fff;
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, .2);
  border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
          box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
}
.popover.top {
  margin-top: -10px;
}
.popover.right {
  margin-left: 10px;
}
.popover.bottom {
  margin-top: 10px;
}
.popover.left {
  margin-left: -10px;
}
.popover-title {
  padding: 8px 14px;
  margin: 0;
  font-size: 14px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 5px 5px 0 0;
}
.popover-content {
  padding: 9px 14px;
}
.popover > .arrow,
.popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.popover > .arrow {
  border-width: 11px;
}
.popover > .arrow:after {
  content: "";
  border-width: 10px;
}
.popover.top > .arrow {
  bottom: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-color: #999;
  border-top-color: rgba(0, 0, 0, .25);
  border-bottom-width: 0;
}
.popover.top > .arrow:after {
  bottom: 1px;
  margin-left: -10px;
  content: " ";
  border-top-color: #fff;
  border-bottom-width: 0;
}
.popover.right > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-right-color: #999;
  border-right-color: rgba(0, 0, 0, .25);
  border-left-width: 0;
}
.popover.right > .arrow:after {
  bottom: -10px;
  left: 1px;
  content: " ";
  border-right-color: #fff;
  border-left-width: 0;
}
.popover.bottom > .arrow {
  top: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999;
  border-bottom-color: rgba(0, 0, 0, .25);
}
.popover.bottom > .arrow:after {
  top: 1px;
  margin-left: -10px;
  content: " ";
  border-top-width: 0;
  border-bottom-color: #fff;
}
.popover.left > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999;
  border-left-color: rgba(0, 0, 0, .25);
}
.popover.left > .arrow:after {
  right: 1px;
  bottom: -10px;
  content: " ";
  border-right-width: 0;
  border-left-color: #fff;
}
.carousel {
  position: relative;
}
.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner > .item {
  position: relative;
  display: none;
  -webkit-transition: .6s ease-in-out left;
       -o-transition: .6s ease-in-out left;
          transition: .6s ease-in-out left;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  line-height: 1;
}
@media all and (transform-3d), (-webkit-transform-3d) {
  .carousel-inner > .item {
    -webkit-transition: -webkit-transform .6s ease-in-out;
         -o-transition:      -o-transform .6s ease-in-out;
            transition:         transform .6s ease-in-out;

    -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
    -webkit-perspective: 1000;
            perspective: 1000;
  }
  .carousel-inner > .item.next,
  .carousel-inner > .item.active.right {
    left: 0;
    -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
  }
  .carousel-inner > .item.prev,
  .carousel-inner > .item.active.left {
    left: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
  }
  .carousel-inner > .item.next.left,
  .carousel-inner > .item.prev.right,
  .carousel-inner > .item.active {
    left: 0;
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
  display: block;
}
.carousel-inner > .active {
  left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.carousel-inner > .next {
  left: 100%;
}
.carousel-inner > .prev {
  left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
  left: 0;
}
.carousel-inner > .active.left {
  left: -100%;
}
.carousel-inner > .active.right {
  left: 100%;
}
.carousel-control {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 15%;
  font-size: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
  filter: alpha(opacity=50);
  opacity: .5;
}
.carousel-control.left {
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
  background-image:      -o-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
  background-image:         linear-gradient(to right, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
  background-repeat: repeat-x;
}
.carousel-control.right {
  right: 0;
  left: auto;
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
  background-image:      -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
  background-image:         linear-gradient(to right, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
  background-repeat: repeat-x;
}
.carousel-control:hover,
.carousel-control:focus {
  color: #fff;
  text-decoration: none;
  filter: alpha(opacity=90);
  outline: 0;
  opacity: .9;
}
.carousel-control .icon-prev,
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 50%;
  z-index: 5;
  display: inline-block;
}
.carousel-control .icon-prev,
.carousel-control .glyphicon-chevron-left {
  left: 50%;
  margin-left: -10px;
}
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-right {
  right: 50%;
  margin-right: -10px;
}
.carousel-control .icon-prev,
.carousel-control .icon-next {
  width: 20px;
  height: 20px;
  margin-top: -10px;
  font-family: serif;
  line-height: 1;
}
.carousel-control .icon-prev:before {
  content: '\2039';
}
.carousel-control .icon-next:before {
  content: '\203a';
}
.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  padding-left: 0;
  margin-left: -30%;
  text-align: center;
  list-style: none;
}
.carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #000 \9;
  background-color: rgba(0, 0, 0, 0);
  border: 1px solid #fff;
  border-radius: 10px;
}
.carousel-indicators .active {
  width: 12px;
  height: 12px;
  margin: 0;
  background-color: #fff;
}
.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
}
.carousel-caption .btn {
  text-shadow: none;
}
@media screen and (min-width: 768px) {
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -15px;
    font-size: 30px;
  }
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .icon-prev {
    margin-left: -15px;
  }
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-next {
    margin-right: -15px;
  }
  .carousel-caption {
    right: 20%;
    left: 20%;
    padding-bottom: 30px;
  }
  .carousel-indicators {
    bottom: 20px;
  }
}
.clearfix:before,
.clearfix:after,
.dl-horizontal dd:before,
.dl-horizontal dd:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after,
.form-horizontal .form-group:before,
.form-horizontal .form-group:after,
.btn-toolbar:before,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after,
.nav:before,
.nav:after,
.navbar:before,
.navbar:after,
.navbar-header:before,
.navbar-header:after,
.navbar-collapse:before,
.navbar-collapse:after,
.pager:before,
.pager:after,
.panel-body:before,
.panel-body:after,
.modal-footer:before,
.modal-footer:after {
  display: table;
  content: " ";
}
.clearfix:after,
.dl-horizontal dd:after,
.container:after,
.container-fluid:after,
.row:after,
.form-horizontal .form-group:after,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:after,
.nav:after,
.navbar:after,
.navbar-header:after,
.navbar-collapse:after,
.pager:after,
.panel-body:after,
.modal-footer:after {
  clear: both;
}
.center-block {
  display: block;
  margin-right: auto;
  margin-left: auto;
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.hidden {
  display: none !important;
  visibility: hidden !important;
}
.affix {
  position: fixed;
}
@-ms-viewport {
  width: device-width;
}
.visible-xs,
.visible-sm,
.visible-md,
.visible-lg {
  display: none !important;
}
.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block {
  display: none !important;
}
@media (max-width: 767px) {
  .visible-xs {
    display: block !important;
  }
  table.visible-xs {
    display: table;
  }
  tr.visible-xs {
    display: table-row !important;
  }
  th.visible-xs,
  td.visible-xs {
    display: table-cell !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-block {
    display: block !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline {
    display: inline !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block !important;
  }
  table.visible-sm {
    display: table;
  }
  tr.visible-sm {
    display: table-row !important;
  }
  th.visible-sm,
  td.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-block {
    display: block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline {
    display: inline !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block !important;
  }
  table.visible-md {
    display: table;
  }
  tr.visible-md {
    display: table-row !important;
  }
  th.visible-md,
  td.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-block {
    display: block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline {
    display: inline !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg {
    display: block !important;
  }
  table.visible-lg {
    display: table;
  }
  tr.visible-lg {
    display: table-row !important;
  }
  th.visible-lg,
  td.visible-lg {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-block {
    display: block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline {
    display: inline !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline-block {
    display: inline-block !important;
  }
}
@media (max-width: 767px) {
  .hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .hidden-lg {
    display: none !important;
  }
}
.visible-print {
  display: none !important;
}
@media print {
  .visible-print {
    display: block !important;
  }
  table.visible-print {
    display: table;
  }
  tr.visible-print {
    display: table-row !important;
  }
  th.visible-print,
  td.visible-print {
    display: table-cell !important;
  }
}
.visible-print-block {
  display: none !important;
}
@media print {
  .visible-print-block {
    display: block !important;
  }
}
.visible-print-inline {
  display: none !important;
}
@media print {
  .visible-print-inline {
    display: inline !important;
  }
}
.visible-print-inline-block {
  display: none !important;
}
@media print {
  .visible-print-inline-block {
    display: inline-block !important;
  }
}
@media print {
  .hidden-print {
    display: none !important;
  }
}
/*# sourceMappingURL=bootstrap.css.map */

/*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */@font-face{font-family:'FontAwesome';src:url('../fonts/fontawesome-webfont.eot?v=4.7.0');src:url('../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'),url('../fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'),url('../fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'),url('../fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'),url('../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');font-weight:normal;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-lg{font-size:1.33333333em;line-height:.75em;vertical-align:-15%}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-fw{width:1.28571429em;text-align:center}.fa-ul{padding-left:0;margin-left:2.14285714em;list-style-type:none}.fa-ul>li{position:relative}.fa-li{position:absolute;left:-2.14285714em;width:2.14285714em;top:.14285714em;text-align:center}.fa-li.fa-lg{left:-1.85714286em}.fa-border{padding:.2em .25em .15em;border:solid .08em #eee;border-radius:.1em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left{margin-right:.3em}.fa.fa-pull-right{margin-left:.3em}.pull-right{float:right}.pull-left{float:left}.fa.pull-left{margin-right:.3em}.fa.pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}.fa-rotate-90{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";-webkit-transform:rotate(270deg);-ms-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";-webkit-transform:scale(-1, 1);-ms-transform:scale(-1, 1);transform:scale(-1, 1)}.fa-flip-vertical{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";-webkit-transform:scale(1, -1);-ms-transform:scale(1, -1);transform:scale(1, -1)}:root .fa-rotate-90,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-flip-horizontal,:root .fa-flip-vertical{filter:none}.fa-stack{position:relative;display:inline-block;width:2em;height:2em;line-height:2em;vertical-align:middle}.fa-stack-1x,.fa-stack-2x{position:absolute;left:0;width:100%;text-align:center}.fa-stack-1x{line-height:inherit}.fa-stack-2x{font-size:2em}.fa-inverse{color:#fff}.fa-glass:before{content:"\f000"}.fa-music:before{content:"\f001"}.fa-search:before{content:"\f002"}.fa-envelope-o:before{content:"\f003"}.fa-heart:before{content:"\f004"}.fa-star:before{content:"\f005"}.fa-star-o:before{content:"\f006"}.fa-user:before{content:"\f007"}.fa-film:before{content:"\f008"}.fa-th-large:before{content:"\f009"}.fa-th:before{content:"\f00a"}.fa-th-list:before{content:"\f00b"}.fa-check:before{content:"\f00c"}.fa-remove:before,.fa-close:before,.fa-times:before{content:"\f00d"}.fa-search-plus:before{content:"\f00e"}.fa-search-minus:before{content:"\f010"}.fa-power-off:before{content:"\f011"}.fa-signal:before{content:"\f012"}.fa-gear:before,.fa-cog:before{content:"\f013"}.fa-trash-o:before{content:"\f014"}.fa-home:before{content:"\f015"}.fa-file-o:before{content:"\f016"}.fa-clock-o:before{content:"\f017"}.fa-road:before{content:"\f018"}.fa-download:before{content:"\f019"}.fa-arrow-circle-o-down:before{content:"\f01a"}.fa-arrow-circle-o-up:before{content:"\f01b"}.fa-inbox:before{content:"\f01c"}.fa-play-circle-o:before{content:"\f01d"}.fa-rotate-right:before,.fa-repeat:before{content:"\f01e"}.fa-refresh:before{content:"\f021"}.fa-list-alt:before{content:"\f022"}.fa-lock:before{content:"\f023"}.fa-flag:before{content:"\f024"}.fa-headphones:before{content:"\f025"}.fa-volume-off:before{content:"\f026"}.fa-volume-down:before{content:"\f027"}.fa-volume-up:before{content:"\f028"}.fa-qrcode:before{content:"\f029"}.fa-barcode:before{content:"\f02a"}.fa-tag:before{content:"\f02b"}.fa-tags:before{content:"\f02c"}.fa-book:before{content:"\f02d"}.fa-bookmark:before{content:"\f02e"}.fa-print:before{content:"\f02f"}.fa-camera:before{content:"\f030"}.fa-font:before{content:"\f031"}.fa-bold:before{content:"\f032"}.fa-italic:before{content:"\f033"}.fa-text-height:before{content:"\f034"}.fa-text-width:before{content:"\f035"}.fa-align-left:before{content:"\f036"}.fa-align-center:before{content:"\f037"}.fa-align-right:before{content:"\f038"}.fa-align-justify:before{content:"\f039"}.fa-list:before{content:"\f03a"}.fa-dedent:before,.fa-outdent:before{content:"\f03b"}.fa-indent:before{content:"\f03c"}.fa-video-camera:before{content:"\f03d"}.fa-photo:before,.fa-image:before,.fa-picture-o:before{content:"\f03e"}.fa-pencil:before{content:"\f040"}.fa-map-marker:before{content:"\f041"}.fa-adjust:before{content:"\f042"}.fa-tint:before{content:"\f043"}.fa-edit:before,.fa-pencil-square-o:before{content:"\f044"}.fa-share-square-o:before{content:"\f045"}.fa-check-square-o:before{content:"\f046"}.fa-arrows:before{content:"\f047"}.fa-step-backward:before{content:"\f048"}.fa-fast-backward:before{content:"\f049"}.fa-backward:before{content:"\f04a"}.fa-play:before{content:"\f04b"}.fa-pause:before{content:"\f04c"}.fa-stop:before{content:"\f04d"}.fa-forward:before{content:"\f04e"}.fa-fast-forward:before{content:"\f050"}.fa-step-forward:before{content:"\f051"}.fa-eject:before{content:"\f052"}.fa-chevron-left:before{content:"\f053"}.fa-chevron-right:before{content:"\f054"}.fa-plus-circle:before{content:"\f055"}.fa-minus-circle:before{content:"\f056"}.fa-times-circle:before{content:"\f057"}.fa-check-circle:before{content:"\f058"}.fa-question-circle:before{content:"\f059"}.fa-info-circle:before{content:"\f05a"}.fa-crosshairs:before{content:"\f05b"}.fa-times-circle-o:before{content:"\f05c"}.fa-check-circle-o:before{content:"\f05d"}.fa-ban:before{content:"\f05e"}.fa-arrow-left:before{content:"\f060"}.fa-arrow-right:before{content:"\f061"}.fa-arrow-up:before{content:"\f062"}.fa-arrow-down:before{content:"\f063"}.fa-mail-forward:before,.fa-share:before{content:"\f064"}.fa-expand:before{content:"\f065"}.fa-compress:before{content:"\f066"}.fa-plus:before{content:"\f067"}.fa-minus:before{content:"\f068"}.fa-asterisk:before{content:"\f069"}.fa-exclamation-circle:before{content:"\f06a"}.fa-gift:before{content:"\f06b"}.fa-leaf:before{content:"\f06c"}.fa-fire:before{content:"\f06d"}.fa-eye:before{content:"\f06e"}.fa-eye-slash:before{content:"\f070"}.fa-warning:before,.fa-exclamation-triangle:before{content:"\f071"}.fa-plane:before{content:"\f072"}.fa-calendar:before{content:"\f073"}.fa-random:before{content:"\f074"}.fa-comment:before{content:"\f075"}.fa-magnet:before{content:"\f076"}.fa-chevron-up:before{content:"\f077"}.fa-chevron-down:before{content:"\f078"}.fa-retweet:before{content:"\f079"}.fa-shopping-cart:before{content:"\f07a"}.fa-folder:before{content:"\f07b"}.fa-folder-open:before{content:"\f07c"}.fa-arrows-v:before{content:"\f07d"}.fa-arrows-h:before{content:"\f07e"}.fa-bar-chart-o:before,.fa-bar-chart:before{content:"\f080"}.fa-twitter-square:before{content:"\f081"}.fa-facebook-square:before{content:"\f082"}.fa-camera-retro:before{content:"\f083"}.fa-key:before{content:"\f084"}.fa-gears:before,.fa-cogs:before{content:"\f085"}.fa-comments:before{content:"\f086"}.fa-thumbs-o-up:before{content:"\f087"}.fa-thumbs-o-down:before{content:"\f088"}.fa-star-half:before{content:"\f089"}.fa-heart-o:before{content:"\f08a"}.fa-sign-out:before{content:"\f08b"}.fa-linkedin-square:before{content:"\f08c"}.fa-thumb-tack:before{content:"\f08d"}.fa-external-link:before{content:"\f08e"}.fa-sign-in:before{content:"\f090"}.fa-trophy:before{content:"\f091"}.fa-github-square:before{content:"\f092"}.fa-upload:before{content:"\f093"}.fa-lemon-o:before{content:"\f094"}.fa-phone:before{content:"\f095"}.fa-square-o:before{content:"\f096"}.fa-bookmark-o:before{content:"\f097"}.fa-phone-square:before{content:"\f098"}.fa-twitter:before{content:"\f099"}.fa-facebook-f:before,.fa-facebook:before{content:"\f09a"}.fa-github:before{content:"\f09b"}.fa-unlock:before{content:"\f09c"}.fa-credit-card:before{content:"\f09d"}.fa-feed:before,.fa-rss:before{content:"\f09e"}.fa-hdd-o:before{content:"\f0a0"}.fa-bullhorn:before{content:"\f0a1"}.fa-bell:before{content:"\f0f3"}.fa-certificate:before{content:"\f0a3"}.fa-hand-o-right:before{content:"\f0a4"}.fa-hand-o-left:before{content:"\f0a5"}.fa-hand-o-up:before{content:"\f0a6"}.fa-hand-o-down:before{content:"\f0a7"}.fa-arrow-circle-left:before{content:"\f0a8"}.fa-arrow-circle-right:before{content:"\f0a9"}.fa-arrow-circle-up:before{content:"\f0aa"}.fa-arrow-circle-down:before{content:"\f0ab"}.fa-globe:before{content:"\f0ac"}.fa-wrench:before{content:"\f0ad"}.fa-tasks:before{content:"\f0ae"}.fa-filter:before{content:"\f0b0"}.fa-briefcase:before{content:"\f0b1"}.fa-arrows-alt:before{content:"\f0b2"}.fa-group:before,.fa-users:before{content:"\f0c0"}.fa-chain:before,.fa-link:before{content:"\f0c1"}.fa-cloud:before{content:"\f0c2"}.fa-flask:before{content:"\f0c3"}.fa-cut:before,.fa-scissors:before{content:"\f0c4"}.fa-copy:before,.fa-files-o:before{content:"\f0c5"}.fa-paperclip:before{content:"\f0c6"}.fa-save:before,.fa-floppy-o:before{content:"\f0c7"}.fa-square:before{content:"\f0c8"}.fa-navicon:before,.fa-reorder:before,.fa-bars:before{content:"\f0c9"}.fa-list-ul:before{content:"\f0ca"}.fa-list-ol:before{content:"\f0cb"}.fa-strikethrough:before{content:"\f0cc"}.fa-underline:before{content:"\f0cd"}.fa-table:before{content:"\f0ce"}.fa-magic:before{content:"\f0d0"}.fa-truck:before{content:"\f0d1"}.fa-pinterest:before{content:"\f0d2"}.fa-pinterest-square:before{content:"\f0d3"}.fa-google-plus-square:before{content:"\f0d4"}.fa-google-plus:before{content:"\f0d5"}.fa-money:before{content:"\f0d6"}.fa-caret-down:before{content:"\f0d7"}.fa-caret-up:before{content:"\f0d8"}.fa-caret-left:before{content:"\f0d9"}.fa-caret-right:before{content:"\f0da"}.fa-columns:before{content:"\f0db"}.fa-unsorted:before,.fa-sort:before{content:"\f0dc"}.fa-sort-down:before,.fa-sort-desc:before{content:"\f0dd"}.fa-sort-up:before,.fa-sort-asc:before{content:"\f0de"}.fa-envelope:before{content:"\f0e0"}.fa-linkedin:before{content:"\f0e1"}.fa-rotate-left:before,.fa-undo:before{content:"\f0e2"}.fa-legal:before,.fa-gavel:before{content:"\f0e3"}.fa-dashboard:before,.fa-tachometer:before{content:"\f0e4"}.fa-comment-o:before{content:"\f0e5"}.fa-comments-o:before{content:"\f0e6"}.fa-flash:before,.fa-bolt:before{content:"\f0e7"}.fa-sitemap:before{content:"\f0e8"}.fa-umbrella:before{content:"\f0e9"}.fa-paste:before,.fa-clipboard:before{content:"\f0ea"}.fa-lightbulb-o:before{content:"\f0eb"}.fa-exchange:before{content:"\f0ec"}.fa-cloud-download:before{content:"\f0ed"}.fa-cloud-upload:before{content:"\f0ee"}.fa-user-md:before{content:"\f0f0"}.fa-stethoscope:before{content:"\f0f1"}.fa-suitcase:before{content:"\f0f2"}.fa-bell-o:before{content:"\f0a2"}.fa-coffee:before{content:"\f0f4"}.fa-cutlery:before{content:"\f0f5"}.fa-file-text-o:before{content:"\f0f6"}.fa-building-o:before{content:"\f0f7"}.fa-hospital-o:before{content:"\f0f8"}.fa-ambulance:before{content:"\f0f9"}.fa-medkit:before{content:"\f0fa"}.fa-fighter-jet:before{content:"\f0fb"}.fa-beer:before{content:"\f0fc"}.fa-h-square:before{content:"\f0fd"}.fa-plus-square:before{content:"\f0fe"}.fa-angle-double-left:before{content:"\f100"}.fa-angle-double-right:before{content:"\f101"}.fa-angle-double-up:before{content:"\f102"}.fa-angle-double-down:before{content:"\f103"}.fa-angle-left:before{content:"\f104"}.fa-angle-right:before{content:"\f105"}.fa-angle-up:before{content:"\f106"}.fa-angle-down:before{content:"\f107"}.fa-desktop:before{content:"\f108"}.fa-laptop:before{content:"\f109"}.fa-tablet:before{content:"\f10a"}.fa-mobile-phone:before,.fa-mobile:before{content:"\f10b"}.fa-circle-o:before{content:"\f10c"}.fa-quote-left:before{content:"\f10d"}.fa-quote-right:before{content:"\f10e"}.fa-spinner:before{content:"\f110"}.fa-circle:before{content:"\f111"}.fa-mail-reply:before,.fa-reply:before{content:"\f112"}.fa-github-alt:before{content:"\f113"}.fa-folder-o:before{content:"\f114"}.fa-folder-open-o:before{content:"\f115"}.fa-smile-o:before{content:"\f118"}.fa-frown-o:before{content:"\f119"}.fa-meh-o:before{content:"\f11a"}.fa-gamepad:before{content:"\f11b"}.fa-keyboard-o:before{content:"\f11c"}.fa-flag-o:before{content:"\f11d"}.fa-flag-checkered:before{content:"\f11e"}.fa-terminal:before{content:"\f120"}.fa-code:before{content:"\f121"}.fa-mail-reply-all:before,.fa-reply-all:before{content:"\f122"}.fa-star-half-empty:before,.fa-star-half-full:before,.fa-star-half-o:before{content:"\f123"}.fa-location-arrow:before{content:"\f124"}.fa-crop:before{content:"\f125"}.fa-code-fork:before{content:"\f126"}.fa-unlink:before,.fa-chain-broken:before{content:"\f127"}.fa-question:before{content:"\f128"}.fa-info:before{content:"\f129"}.fa-exclamation:before{content:"\f12a"}.fa-superscript:before{content:"\f12b"}.fa-subscript:before{content:"\f12c"}.fa-eraser:before{content:"\f12d"}.fa-puzzle-piece:before{content:"\f12e"}.fa-microphone:before{content:"\f130"}.fa-microphone-slash:before{content:"\f131"}.fa-shield:before{content:"\f132"}.fa-calendar-o:before{content:"\f133"}.fa-fire-extinguisher:before{content:"\f134"}.fa-rocket:before{content:"\f135"}.fa-maxcdn:before{content:"\f136"}.fa-chevron-circle-left:before{content:"\f137"}.fa-chevron-circle-right:before{content:"\f138"}.fa-chevron-circle-up:before{content:"\f139"}.fa-chevron-circle-down:before{content:"\f13a"}.fa-html5:before{content:"\f13b"}.fa-css3:before{content:"\f13c"}.fa-anchor:before{content:"\f13d"}.fa-unlock-alt:before{content:"\f13e"}.fa-bullseye:before{content:"\f140"}.fa-ellipsis-h:before{content:"\f141"}.fa-ellipsis-v:before{content:"\f142"}.fa-rss-square:before{content:"\f143"}.fa-play-circle:before{content:"\f144"}.fa-ticket:before{content:"\f145"}.fa-minus-square:before{content:"\f146"}.fa-minus-square-o:before{content:"\f147"}.fa-level-up:before{content:"\f148"}.fa-level-down:before{content:"\f149"}.fa-check-square:before{content:"\f14a"}.fa-pencil-square:before{content:"\f14b"}.fa-external-link-square:before{content:"\f14c"}.fa-share-square:before{content:"\f14d"}.fa-compass:before{content:"\f14e"}.fa-toggle-down:before,.fa-caret-square-o-down:before{content:"\f150"}.fa-toggle-up:before,.fa-caret-square-o-up:before{content:"\f151"}.fa-toggle-right:before,.fa-caret-square-o-right:before{content:"\f152"}.fa-euro:before,.fa-eur:before{content:"\f153"}.fa-gbp:before{content:"\f154"}.fa-dollar:before,.fa-usd:before{content:"\f155"}.fa-rupee:before,.fa-inr:before{content:"\f156"}.fa-cny:before,.fa-rmb:before,.fa-yen:before,.fa-jpy:before{content:"\f157"}.fa-ruble:before,.fa-rouble:before,.fa-rub:before{content:"\f158"}.fa-won:before,.fa-krw:before{content:"\f159"}.fa-bitcoin:before,.fa-btc:before{content:"\f15a"}.fa-file:before{content:"\f15b"}.fa-file-text:before{content:"\f15c"}.fa-sort-alpha-asc:before{content:"\f15d"}.fa-sort-alpha-desc:before{content:"\f15e"}.fa-sort-amount-asc:before{content:"\f160"}.fa-sort-amount-desc:before{content:"\f161"}.fa-sort-numeric-asc:before{content:"\f162"}.fa-sort-numeric-desc:before{content:"\f163"}.fa-thumbs-up:before{content:"\f164"}.fa-thumbs-down:before{content:"\f165"}.fa-youtube-square:before{content:"\f166"}.fa-youtube:before{content:"\f167"}.fa-xing:before{content:"\f168"}.fa-xing-square:before{content:"\f169"}.fa-youtube-play:before{content:"\f16a"}.fa-dropbox:before{content:"\f16b"}.fa-stack-overflow:before{content:"\f16c"}.fa-instagram:before{content:"\f16d"}.fa-flickr:before{content:"\f16e"}.fa-adn:before{content:"\f170"}.fa-bitbucket:before{content:"\f171"}.fa-bitbucket-square:before{content:"\f172"}.fa-tumblr:before{content:"\f173"}.fa-tumblr-square:before{content:"\f174"}.fa-long-arrow-down:before{content:"\f175"}.fa-long-arrow-up:before{content:"\f176"}.fa-long-arrow-left:before{content:"\f177"}.fa-long-arrow-right:before{content:"\f178"}.fa-apple:before{content:"\f179"}.fa-windows:before{content:"\f17a"}.fa-android:before{content:"\f17b"}.fa-linux:before{content:"\f17c"}.fa-dribbble:before{content:"\f17d"}.fa-skype:before{content:"\f17e"}.fa-foursquare:before{content:"\f180"}.fa-trello:before{content:"\f181"}.fa-female:before{content:"\f182"}.fa-male:before{content:"\f183"}.fa-gittip:before,.fa-gratipay:before{content:"\f184"}.fa-sun-o:before{content:"\f185"}.fa-moon-o:before{content:"\f186"}.fa-archive:before{content:"\f187"}.fa-bug:before{content:"\f188"}.fa-vk:before{content:"\f189"}.fa-weibo:before{content:"\f18a"}.fa-renren:before{content:"\f18b"}.fa-pagelines:before{content:"\f18c"}.fa-stack-exchange:before{content:"\f18d"}.fa-arrow-circle-o-right:before{content:"\f18e"}.fa-arrow-circle-o-left:before{content:"\f190"}.fa-toggle-left:before,.fa-caret-square-o-left:before{content:"\f191"}.fa-dot-circle-o:before{content:"\f192"}.fa-wheelchair:before{content:"\f193"}.fa-vimeo-square:before{content:"\f194"}.fa-turkish-lira:before,.fa-try:before{content:"\f195"}.fa-plus-square-o:before{content:"\f196"}.fa-space-shuttle:before{content:"\f197"}.fa-slack:before{content:"\f198"}.fa-envelope-square:before{content:"\f199"}.fa-wordpress:before{content:"\f19a"}.fa-openid:before{content:"\f19b"}.fa-institution:before,.fa-bank:before,.fa-university:before{content:"\f19c"}.fa-mortar-board:before,.fa-graduation-cap:before{content:"\f19d"}.fa-yahoo:before{content:"\f19e"}.fa-google:before{content:"\f1a0"}.fa-reddit:before{content:"\f1a1"}.fa-reddit-square:before{content:"\f1a2"}.fa-stumbleupon-circle:before{content:"\f1a3"}.fa-stumbleupon:before{content:"\f1a4"}.fa-delicious:before{content:"\f1a5"}.fa-digg:before{content:"\f1a6"}.fa-pied-piper-pp:before{content:"\f1a7"}.fa-pied-piper-alt:before{content:"\f1a8"}.fa-drupal:before{content:"\f1a9"}.fa-joomla:before{content:"\f1aa"}.fa-language:before{content:"\f1ab"}.fa-fax:before{content:"\f1ac"}.fa-building:before{content:"\f1ad"}.fa-child:before{content:"\f1ae"}.fa-paw:before{content:"\f1b0"}.fa-spoon:before{content:"\f1b1"}.fa-cube:before{content:"\f1b2"}.fa-cubes:before{content:"\f1b3"}.fa-behance:before{content:"\f1b4"}.fa-behance-square:before{content:"\f1b5"}.fa-steam:before{content:"\f1b6"}.fa-steam-square:before{content:"\f1b7"}.fa-recycle:before{content:"\f1b8"}.fa-automobile:before,.fa-car:before{content:"\f1b9"}.fa-cab:before,.fa-taxi:before{content:"\f1ba"}.fa-tree:before{content:"\f1bb"}.fa-spotify:before{content:"\f1bc"}.fa-deviantart:before{content:"\f1bd"}.fa-soundcloud:before{content:"\f1be"}.fa-database:before{content:"\f1c0"}.fa-file-pdf-o:before{content:"\f1c1"}.fa-file-word-o:before{content:"\f1c2"}.fa-file-excel-o:before{content:"\f1c3"}.fa-file-powerpoint-o:before{content:"\f1c4"}.fa-file-photo-o:before,.fa-file-picture-o:before,.fa-file-image-o:before{content:"\f1c5"}.fa-file-zip-o:before,.fa-file-archive-o:before{content:"\f1c6"}.fa-file-sound-o:before,.fa-file-audio-o:before{content:"\f1c7"}.fa-file-movie-o:before,.fa-file-video-o:before{content:"\f1c8"}.fa-file-code-o:before{content:"\f1c9"}.fa-vine:before{content:"\f1ca"}.fa-codepen:before{content:"\f1cb"}.fa-jsfiddle:before{content:"\f1cc"}.fa-life-bouy:before,.fa-life-buoy:before,.fa-life-saver:before,.fa-support:before,.fa-life-ring:before{content:"\f1cd"}.fa-circle-o-notch:before{content:"\f1ce"}.fa-ra:before,.fa-resistance:before,.fa-rebel:before{content:"\f1d0"}.fa-ge:before,.fa-empire:before{content:"\f1d1"}.fa-git-square:before{content:"\f1d2"}.fa-git:before{content:"\f1d3"}.fa-y-combinator-square:before,.fa-yc-square:before,.fa-hacker-news:before{content:"\f1d4"}.fa-tencent-weibo:before{content:"\f1d5"}.fa-qq:before{content:"\f1d6"}.fa-wechat:before,.fa-weixin:before{content:"\f1d7"}.fa-send:before,.fa-paper-plane:before{content:"\f1d8"}.fa-send-o:before,.fa-paper-plane-o:before{content:"\f1d9"}.fa-history:before{content:"\f1da"}.fa-circle-thin:before{content:"\f1db"}.fa-header:before{content:"\f1dc"}.fa-paragraph:before{content:"\f1dd"}.fa-sliders:before{content:"\f1de"}.fa-share-alt:before{content:"\f1e0"}.fa-share-alt-square:before{content:"\f1e1"}.fa-bomb:before{content:"\f1e2"}.fa-soccer-ball-o:before,.fa-futbol-o:before{content:"\f1e3"}.fa-tty:before{content:"\f1e4"}.fa-binoculars:before{content:"\f1e5"}.fa-plug:before{content:"\f1e6"}.fa-slideshare:before{content:"\f1e7"}.fa-twitch:before{content:"\f1e8"}.fa-yelp:before{content:"\f1e9"}.fa-newspaper-o:before{content:"\f1ea"}.fa-wifi:before{content:"\f1eb"}.fa-calculator:before{content:"\f1ec"}.fa-paypal:before{content:"\f1ed"}.fa-google-wallet:before{content:"\f1ee"}.fa-cc-visa:before{content:"\f1f0"}.fa-cc-mastercard:before{content:"\f1f1"}.fa-cc-discover:before{content:"\f1f2"}.fa-cc-amex:before{content:"\f1f3"}.fa-cc-paypal:before{content:"\f1f4"}.fa-cc-stripe:before{content:"\f1f5"}.fa-bell-slash:before{content:"\f1f6"}.fa-bell-slash-o:before{content:"\f1f7"}.fa-trash:before{content:"\f1f8"}.fa-copyright:before{content:"\f1f9"}.fa-at:before{content:"\f1fa"}.fa-eyedropper:before{content:"\f1fb"}.fa-paint-brush:before{content:"\f1fc"}.fa-birthday-cake:before{content:"\f1fd"}.fa-area-chart:before{content:"\f1fe"}.fa-pie-chart:before{content:"\f200"}.fa-line-chart:before{content:"\f201"}.fa-lastfm:before{content:"\f202"}.fa-lastfm-square:before{content:"\f203"}.fa-toggle-off:before{content:"\f204"}.fa-toggle-on:before{content:"\f205"}.fa-bicycle:before{content:"\f206"}.fa-bus:before{content:"\f207"}.fa-ioxhost:before{content:"\f208"}.fa-angellist:before{content:"\f209"}.fa-cc:before{content:"\f20a"}.fa-shekel:before,.fa-sheqel:before,.fa-ils:before{content:"\f20b"}.fa-meanpath:before{content:"\f20c"}.fa-buysellads:before{content:"\f20d"}.fa-connectdevelop:before{content:"\f20e"}.fa-dashcube:before{content:"\f210"}.fa-forumbee:before{content:"\f211"}.fa-leanpub:before{content:"\f212"}.fa-sellsy:before{content:"\f213"}.fa-shirtsinbulk:before{content:"\f214"}.fa-simplybuilt:before{content:"\f215"}.fa-skyatlas:before{content:"\f216"}.fa-cart-plus:before{content:"\f217"}.fa-cart-arrow-down:before{content:"\f218"}.fa-diamond:before{content:"\f219"}.fa-ship:before{content:"\f21a"}.fa-user-secret:before{content:"\f21b"}.fa-motorcycle:before{content:"\f21c"}.fa-street-view:before{content:"\f21d"}.fa-heartbeat:before{content:"\f21e"}.fa-venus:before{content:"\f221"}.fa-mars:before{content:"\f222"}.fa-mercury:before{content:"\f223"}.fa-intersex:before,.fa-transgender:before{content:"\f224"}.fa-transgender-alt:before{content:"\f225"}.fa-venus-double:before{content:"\f226"}.fa-mars-double:before{content:"\f227"}.fa-venus-mars:before{content:"\f228"}.fa-mars-stroke:before{content:"\f229"}.fa-mars-stroke-v:before{content:"\f22a"}.fa-mars-stroke-h:before{content:"\f22b"}.fa-neuter:before{content:"\f22c"}.fa-genderless:before{content:"\f22d"}.fa-facebook-official:before{content:"\f230"}.fa-pinterest-p:before{content:"\f231"}.fa-whatsapp:before{content:"\f232"}.fa-server:before{content:"\f233"}.fa-user-plus:before{content:"\f234"}.fa-user-times:before{content:"\f235"}.fa-hotel:before,.fa-bed:before{content:"\f236"}.fa-viacoin:before{content:"\f237"}.fa-train:before{content:"\f238"}.fa-subway:before{content:"\f239"}.fa-medium:before{content:"\f23a"}.fa-yc:before,.fa-y-combinator:before{content:"\f23b"}.fa-optin-monster:before{content:"\f23c"}.fa-opencart:before{content:"\f23d"}.fa-expeditedssl:before{content:"\f23e"}.fa-battery-4:before,.fa-battery:before,.fa-battery-full:before{content:"\f240"}.fa-battery-3:before,.fa-battery-three-quarters:before{content:"\f241"}.fa-battery-2:before,.fa-battery-half:before{content:"\f242"}.fa-battery-1:before,.fa-battery-quarter:before{content:"\f243"}.fa-battery-0:before,.fa-battery-empty:before{content:"\f244"}.fa-mouse-pointer:before{content:"\f245"}.fa-i-cursor:before{content:"\f246"}.fa-object-group:before{content:"\f247"}.fa-object-ungroup:before{content:"\f248"}.fa-sticky-note:before{content:"\f249"}.fa-sticky-note-o:before{content:"\f24a"}.fa-cc-jcb:before{content:"\f24b"}.fa-cc-diners-club:before{content:"\f24c"}.fa-clone:before{content:"\f24d"}.fa-balance-scale:before{content:"\f24e"}.fa-hourglass-o:before{content:"\f250"}.fa-hourglass-1:before,.fa-hourglass-start:before{content:"\f251"}.fa-hourglass-2:before,.fa-hourglass-half:before{content:"\f252"}.fa-hourglass-3:before,.fa-hourglass-end:before{content:"\f253"}.fa-hourglass:before{content:"\f254"}.fa-hand-grab-o:before,.fa-hand-rock-o:before{content:"\f255"}.fa-hand-stop-o:before,.fa-hand-paper-o:before{content:"\f256"}.fa-hand-scissors-o:before{content:"\f257"}.fa-hand-lizard-o:before{content:"\f258"}.fa-hand-spock-o:before{content:"\f259"}.fa-hand-pointer-o:before{content:"\f25a"}.fa-hand-peace-o:before{content:"\f25b"}.fa-trademark:before{content:"\f25c"}.fa-registered:before{content:"\f25d"}.fa-creative-commons:before{content:"\f25e"}.fa-gg:before{content:"\f260"}.fa-gg-circle:before{content:"\f261"}.fa-tripadvisor:before{content:"\f262"}.fa-odnoklassniki:before{content:"\f263"}.fa-odnoklassniki-square:before{content:"\f264"}.fa-get-pocket:before{content:"\f265"}.fa-wikipedia-w:before{content:"\f266"}.fa-safari:before{content:"\f267"}.fa-chrome:before{content:"\f268"}.fa-firefox:before{content:"\f269"}.fa-opera:before{content:"\f26a"}.fa-internet-explorer:before{content:"\f26b"}.fa-tv:before,.fa-television:before{content:"\f26c"}.fa-contao:before{content:"\f26d"}.fa-500px:before{content:"\f26e"}.fa-amazon:before{content:"\f270"}.fa-calendar-plus-o:before{content:"\f271"}.fa-calendar-minus-o:before{content:"\f272"}.fa-calendar-times-o:before{content:"\f273"}.fa-calendar-check-o:before{content:"\f274"}.fa-industry:before{content:"\f275"}.fa-map-pin:before{content:"\f276"}.fa-map-signs:before{content:"\f277"}.fa-map-o:before{content:"\f278"}.fa-map:before{content:"\f279"}.fa-commenting:before{content:"\f27a"}.fa-commenting-o:before{content:"\f27b"}.fa-houzz:before{content:"\f27c"}.fa-vimeo:before{content:"\f27d"}.fa-black-tie:before{content:"\f27e"}.fa-fonticons:before{content:"\f280"}.fa-reddit-alien:before{content:"\f281"}.fa-edge:before{content:"\f282"}.fa-credit-card-alt:before{content:"\f283"}.fa-codiepie:before{content:"\f284"}.fa-modx:before{content:"\f285"}.fa-fort-awesome:before{content:"\f286"}.fa-usb:before{content:"\f287"}.fa-product-hunt:before{content:"\f288"}.fa-mixcloud:before{content:"\f289"}.fa-scribd:before{content:"\f28a"}.fa-pause-circle:before{content:"\f28b"}.fa-pause-circle-o:before{content:"\f28c"}.fa-stop-circle:before{content:"\f28d"}.fa-stop-circle-o:before{content:"\f28e"}.fa-shopping-bag:before{content:"\f290"}.fa-shopping-basket:before{content:"\f291"}.fa-hashtag:before{content:"\f292"}.fa-bluetooth:before{content:"\f293"}.fa-bluetooth-b:before{content:"\f294"}.fa-percent:before{content:"\f295"}.fa-gitlab:before{content:"\f296"}.fa-wpbeginner:before{content:"\f297"}.fa-wpforms:before{content:"\f298"}.fa-envira:before{content:"\f299"}.fa-universal-access:before{content:"\f29a"}.fa-wheelchair-alt:before{content:"\f29b"}.fa-question-circle-o:before{content:"\f29c"}.fa-blind:before{content:"\f29d"}.fa-audio-description:before{content:"\f29e"}.fa-volume-control-phone:before{content:"\f2a0"}.fa-braille:before{content:"\f2a1"}.fa-assistive-listening-systems:before{content:"\f2a2"}.fa-asl-interpreting:before,.fa-american-sign-language-interpreting:before{content:"\f2a3"}.fa-deafness:before,.fa-hard-of-hearing:before,.fa-deaf:before{content:"\f2a4"}.fa-glide:before{content:"\f2a5"}.fa-glide-g:before{content:"\f2a6"}.fa-signing:before,.fa-sign-language:before{content:"\f2a7"}.fa-low-vision:before{content:"\f2a8"}.fa-viadeo:before{content:"\f2a9"}.fa-viadeo-square:before{content:"\f2aa"}.fa-snapchat:before{content:"\f2ab"}.fa-snapchat-ghost:before{content:"\f2ac"}.fa-snapchat-square:before{content:"\f2ad"}.fa-pied-piper:before{content:"\f2ae"}.fa-first-order:before{content:"\f2b0"}.fa-yoast:before{content:"\f2b1"}.fa-themeisle:before{content:"\f2b2"}.fa-google-plus-circle:before,.fa-google-plus-official:before{content:"\f2b3"}.fa-fa:before,.fa-font-awesome:before{content:"\f2b4"}.fa-handshake-o:before{content:"\f2b5"}.fa-envelope-open:before{content:"\f2b6"}.fa-envelope-open-o:before{content:"\f2b7"}.fa-linode:before{content:"\f2b8"}.fa-address-book:before{content:"\f2b9"}.fa-address-book-o:before{content:"\f2ba"}.fa-vcard:before,.fa-address-card:before{content:"\f2bb"}.fa-vcard-o:before,.fa-address-card-o:before{content:"\f2bc"}.fa-user-circle:before{content:"\f2bd"}.fa-user-circle-o:before{content:"\f2be"}.fa-user-o:before{content:"\f2c0"}.fa-id-badge:before{content:"\f2c1"}.fa-drivers-license:before,.fa-id-card:before{content:"\f2c2"}.fa-drivers-license-o:before,.fa-id-card-o:before{content:"\f2c3"}.fa-quora:before{content:"\f2c4"}.fa-free-code-camp:before{content:"\f2c5"}.fa-telegram:before{content:"\f2c6"}.fa-thermometer-4:before,.fa-thermometer:before,.fa-thermometer-full:before{content:"\f2c7"}.fa-thermometer-3:before,.fa-thermometer-three-quarters:before{content:"\f2c8"}.fa-thermometer-2:before,.fa-thermometer-half:before{content:"\f2c9"}.fa-thermometer-1:before,.fa-thermometer-quarter:before{content:"\f2ca"}.fa-thermometer-0:before,.fa-thermometer-empty:before{content:"\f2cb"}.fa-shower:before{content:"\f2cc"}.fa-bathtub:before,.fa-s15:before,.fa-bath:before{content:"\f2cd"}.fa-podcast:before{content:"\f2ce"}.fa-window-maximize:before{content:"\f2d0"}.fa-window-minimize:before{content:"\f2d1"}.fa-window-restore:before{content:"\f2d2"}.fa-times-rectangle:before,.fa-window-close:before{content:"\f2d3"}.fa-times-rectangle-o:before,.fa-window-close-o:before{content:"\f2d4"}.fa-bandcamp:before{content:"\f2d5"}.fa-grav:before{content:"\f2d6"}.fa-etsy:before{content:"\f2d7"}.fa-imdb:before{content:"\f2d8"}.fa-ravelry:before{content:"\f2d9"}.fa-eercast:before{content:"\f2da"}.fa-microchip:before{content:"\f2db"}.fa-snowflake-o:before{content:"\f2dc"}.fa-superpowers:before{content:"\f2dd"}.fa-wpexplorer:before{content:"\f2de"}.fa-meetup:before{content:"\f2e0"}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}

.demo-3 {
  --color-text: #454847;
  --color-bg: #1d2121;
  --color-link: #454847;
  --color-link-hover: #fff;
  --color-info: #454847;
  --glitch-width: 40vmax;
  --glitch-height: calc(40vmax * 1.25);
  --color-title: #fff;
  --color-subtitle: #30efbf;
}

.glitch--style-1 {
  --gap-horizontal: 20px;
  --gap-vertical: 2px;
  --time-anim: 2.25s;
  --blend-mode-1: none;
  --blend-mode-2: none;
  --blend-mode-3: none;
  --blend-mode-4: none;
  --blend-mode-5: none;
  --blend-color-1: transparent;
  --blend-color-2: transparent;
  --blend-color-3: transparent;
  --blend-color-4: transparent;
  --blend-color-5: transparent;
}

.glitch--style-2 {
  --gap-horizontal: 5px;
  --gap-vertical: 10px;
  --time-anim: 2s;
  --blend-mode-1: none;
  --blend-mode-2: none;
  --blend-mode-3: luminosity;
  --blend-mode-4: none;
  --blend-mode-5: none;
  --blend-color-1: transparent;
  --blend-color-2: transparent;
  --blend-color-3: #4d8c60;
  --blend-color-4: transparent;
  --blend-color-5: #c9b09a;
}

.glitch--style-3 {
  --gap-horizontal: 20px;
  --gap-vertical: 2px;
  --time-anim: 2.25s;
  --blend-mode-1: none;
  --blend-mode-2: none;
  --blend-mode-3: multiply;
  --blend-mode-4: none;
  --blend-mode-5: none;
  --blend-color-1: transparent;
  --blend-color-2: transparent;
  --blend-color-3: #af4563;
  --blend-color-4: transparent;
  --blend-color-5: transparent;
}

.glitch--style-4 {
  --gap-horizontal: 5px;
  --gap-vertical: 20px;
  --time-anim: 5s;
  --blend-mode-1: none;
  --blend-mode-2: exclusion;
  --blend-mode-3: hard-light;
  --blend-mode-4: overlay;
  --blend-mode-5: none;
  --blend-color-1: transparent;
  --blend-color-2: #52f1cd;
  --blend-color-3: #525df1;
  --blend-color-4: #f19b52;
  --blend-color-5: transparent;
}

.glitch--style-5 {
  --gap-horizontal: 50px;
  --gap-vertical: 100px;
  --time-anim: 2.25s;
  --blend-mode-1: none;
  --blend-mode-2: none;
  --blend-mode-3: none;
  --blend-mode-4: overlay;
  --blend-mode-5: overlay;
  --blend-color-1: transparent;
  --blend-color-2: transparent;
  --blend-color-3: transparent;
  --blend-color-4: #000;
  --blend-color-5: #8d16f2;
}

.glitch--style-6 {
  --gap-horizontal: 3px;
  --gap-vertical: 70px;
  --time-anim: 2.25s;
  --blend-mode-1: none;
  --blend-mode-2: none;
  --blend-mode-3: overlay;
  --blend-mode-4: none;
  --blend-mode-5: none;
  --blend-color-1: transparent;
  --blend-color-2: transparent;
  --blend-color-3: rgba(255,255,255,0.2);
  --blend-color-4: transparent;
  --blend-color-5: transparent;
}

.grid {
  margin: 50vh auto 0;
    position: relative;
    padding: 0 1em;
    width: 100%;
    display: grid;
    max-width: 1200px;
    grid-template-columns: repeat(2, 1fr);
}

.grid__item {
    margin: 0 0 40vh;
    position: relative;
}

.grid__item:nth-child(odd) {
  margin-top: -40vh;
}

.grid__item-title {
  position: absolute;
  margin: 0;
  font-size: 6vw;
  color: var(--color-title);
  font-family: 'Barlow', sans-serif;
  font-weight: 800;
  padding: 30vh 0.5em 0;
  top: 0;
  pointer-events: none;
  line-height: 1;
}

.grid__item:nth-child(odd) .grid__item-title {
  right: 0;
  text-align: right;
  padding-top: 10vh;
}

.grid__item-title span {
  display: block;
  position: relative;
  font-size: 50%;
  font-weight: 500;
  opacity: 0;
  color: var(--color-subtitle);
}

.glitch:hover + .grid__item-title span {
  opacity: 1;
  animation: glitch-anim-text 0.5s linear;
}

@media screen and (max-width: 55em) {
  .grid { grid-template-columns: 100%; margin-top: 3em; }
  .grid__item { margin: 0 0 3em; }
  .grid__item:nth-child(odd) { margin-top: 0; }
  .grid__item-title, .grid__item:nth-child(odd) .grid__item-title { font-size: 2em; text-align: center; width: 100%; padding: 0; top: 20%; }
}

/* Glitch styles */
.glitch {
  position: relative;
  width: var(--glitch-width);
  max-width: 400px;
  height: 478px;
  max-height: calc(400px * 1.25);
  overflow: hidden;
  margin: 0 auto;
}

.glitch:hover {
  cursor: pointer;
}

.glitch__img {
  position: absolute;
  top: calc(-1 * var(--gap-vertical));
  left: calc(-1 * var(--gap-horizontal));
  width: calc(100% + var(--gap-horizontal) * 2);
  height: calc(100% + var(--gap-vertical) * 2);
  background: url(../img/1.jpg) no-repeat 50% 0;
  background-color: var(--blend-color-1);
  background-size: cover;
  transform: translate3d(0,0,0);
  background-blend-mode: var(--blend-mode-1);
}

.glitch--style-2 .glitch__img {
  background-image: url(../img/2.jpg);
}

.glitch--style-3 .glitch__img {
  background-image: url(../img/3.jpg);
}

.glitch--style-4 .glitch__img {
  background-image: url(../img/4.jpg);
}

.glitch--style-5 .glitch__img {
  background-image: url(../img/5.jpg);
}

.glitch--style-6 .glitch__img {
  background-image: url(../img/i.jpg);
  filter: grayscale(70%)
}

/* Set the background colors for the glitch images*/
.glitch__img:nth-child(2) {
  background-color: var(--blend-color-2);
  background-blend-mode: var(--blend-mode-2);
}

.glitch__img:nth-child(3) {
  background-color: var(--blend-color-3);
  background-blend-mode: var(--blend-mode-3);
}

.glitch__img:nth-child(4) {
  background-color: var(--blend-color-4);
  background-blend-mode: var(--blend-mode-4);
}

.glitch__img:nth-child(5) {
  background-color: var(--blend-color-5);
  background-blend-mode: var(--blend-mode-5);
}

/* Hide all images except the first one */
.glitch__img:nth-child(n+2) {
  opacity: 0;
}

/* Hovers */

/* On hover we show the 2nd, 3rd, 4th and 5th image*/
.glitch:hover .glitch__img:nth-child(n+2) {
  opacity: 1;
}

/* Hover animations for horizontal case */
.glitch:hover .glitch__img:nth-child(2) {
  transform: translate3d(var(--gap-horizontal),0,0);
  animation: glitch-anim-1-horizontal var(--time-anim) infinite linear alternate;
}

.glitch:hover > .glitch__img:nth-child(3) {
  transform: translate3d(calc(-1 * var(--gap-horizontal)),0,0);
  animation: glitch-anim-2-horizontal var(--time-anim) infinite linear alternate;
}

.glitch:hover > .glitch__img:nth-child(4) {
  transform: translate3d(0, calc(-1 * var(--gap-vertical)), 0) scale3d(-1,-1,1);
  animation: glitch-anim-3-horizontal var(--time-anim) infinite linear alternate;
}

/* Hover animations for vertical case */
.glitch--vertical:hover .glitch__img:nth-child(2) {
  transform: translate3d(0, var(--gap-vertical), 0);
  animation: glitch-anim-1-vertical var(--time-anim) infinite linear alternate;
}

.glitch--vertical:hover > .glitch__img:nth-child(3) {
  transform: translate3d(0, calc(-1 * var(--gap-vertical)), 0);
  animation: glitch-anim-2-vertical var(--time-anim) infinite linear alternate;
}

.glitch--vertical:hover > .glitch__img:nth-child(4) {
  transform: translate3d(calc(-1 * var(--gap-horizontal)), 0, 0) scale3d(-1,-1,1);
  animation: glitch-anim-3-vertical var(--time-anim) infinite linear alternate;
}

/* Hover flash animation on last image */
.glitch:hover > .glitch__img:nth-child(5) {
  animation: glitch-anim-flash 0.5s steps(1,end) infinite;
}

/* Animations */

/* Horizontal */
@keyframes glitch-anim-1-horizontal {
  0% { 
    -webkit-clip-path: polygon(0 2%, 100% 2%, 100% 5%, 0 5%);
    clip-path: polygon(0 2%, 100% 2%, 100% 5%, 0 5%);
  }
  10% {
    -webkit-clip-path: polygon(0 15%, 100% 15%, 100% 15%, 0 15%);
    clip-path: polygon(0 15%, 100% 15%, 100% 15%, 0 15%);
  }
  20% {
    -webkit-clip-path: polygon(0 10%, 100% 10%, 100% 20%, 0 20%);
    clip-path: polygon(0 10%, 100% 10%, 100% 20%, 0 20%);
  }
  30% {
    -webkit-clip-path: polygon(0 1%, 100% 1%, 100% 2%, 0 2%);
    clip-path: polygon(0 1%, 100% 1%, 100% 2%, 0 2%);
  }
  40% {
    -webkit-clip-path: polygon(0 33%, 100% 33%, 100% 33%, 0 33%);
    clip-path: polygon(0 33%, 100% 33%, 100% 33%, 0 33%);
  }
  50% {
    -webkit-clip-path: polygon(0 44%, 100% 44%, 100% 44%, 0 44%);
    clip-path: polygon(0 44%, 100% 44%, 100% 44%, 0 44%);
  }
  60% {
    -webkit-clip-path: polygon(0 50%, 100% 50%, 100% 20%, 0 20%);
    clip-path: polygon(0 50%, 100% 50%, 100% 20%, 0 20%);
  }
  70% {
    -webkit-clip-path: polygon(0 70%, 100% 70%, 100% 70%, 0 70%);
    clip-path: polygon(0 70%, 100% 70%, 100% 70%, 0 70%);
  }
  80% {
    -webkit-clip-path: polygon(0 80%, 100% 80%, 100% 80%, 0 80%);
    clip-path: polygon(0 80%, 100% 80%, 100% 80%, 0 80%);
  }
  90% {
    -webkit-clip-path: polygon(0 50%, 100% 50%, 100% 55%, 0 55%);
    clip-path: polygon(0 50%, 100% 50%, 100% 55%, 0 55%);
  }
  100% {
    -webkit-clip-path: polygon(0 70%, 100% 70%, 100% 80%, 0 80%);
    clip-path: polygon(0 70%, 100% 70%, 100% 80%, 0 80%);
  }
}

@keyframes glitch-anim-2-horizontal {
  0% { 
    -webkit-clip-path: polygon(0 25%, 100% 25%, 100% 30%, 0 30%);
    clip-path: polygon(0 25%, 100% 25%, 100% 30%, 0 30%);
  }
  15% {
    -webkit-clip-path: polygon(0 3%, 100% 3%, 100% 3%, 0 3%);
    clip-path: polygon(0 3%, 100% 3%, 100% 3%, 0 3%);
  }
  22% {
    -webkit-clip-path: polygon(0 5%, 100% 5%, 100% 20%, 0 20%);
    clip-path: polygon(0 5%, 100% 5%, 100% 20%, 0 20%);
  }
  31% {
    -webkit-clip-path: polygon(0 20%, 100% 20%, 100% 20%, 0 20%);
    clip-path: polygon(0 20%, 100% 20%, 100% 20%, 0 20%);
  }
  45% {
    -webkit-clip-path: polygon(0 40%, 100% 40%, 100% 40%, 0 40%);
    clip-path: polygon(0 40%, 100% 40%, 100% 40%, 0 40%);
  }
  51% {
    -webkit-clip-path: polygon(0 52%, 100% 52%, 100% 59%, 0 59%);
    clip-path: polygon(0 52%, 100% 52%, 100% 59%, 0 59%);
  }
  63% {
    -webkit-clip-path: polygon(0 60%, 100% 60%, 100% 60%, 0 60%);
    clip-path: polygon(0 60%, 100% 60%, 100% 60%, 0 60%);
  }
  76% {
    -webkit-clip-path: polygon(0 75%, 100% 75%, 100% 75%, 0 75%);
    clip-path: polygon(0 75%, 100% 75%, 100% 75%, 0 75%);
  }
  81% {
    -webkit-clip-path: polygon(0 65%, 100% 65%, 100% 40%, 0 40%);
    clip-path: polygon(0 65%, 100% 65%, 100% 40%, 0 40%);
  }
  94% {
    -webkit-clip-path: polygon(0 45%, 100% 45%, 100% 50%, 0 50%);
    clip-path: polygon(0 45%, 100% 45%, 100% 50%, 0 50%);
  }
  100% {
    -webkit-clip-path: polygon(0 14%, 100% 14%, 100% 33%, 0 33%);
    clip-path: polygon(0 14%, 100% 14%, 100% 33%, 0 33%);
  }
}

@keyframes glitch-anim-3-horizontal {
  0% { 
    -webkit-clip-path: polygon(0 1%, 100% 1%, 100% 3%, 0 3%);
    clip-path: polygon(0 1%, 100% 1%, 100% 3%, 0 3%);
  }
  5% {
    -webkit-clip-path: polygon(0 10%, 100% 10%, 100% 9%, 0 9%);
    clip-path: polygon(0 10%, 100% 10%, 100% 9%, 0 9%);
  }
  10% {
    -webkit-clip-path: polygon(0 5%, 100% 5%, 100% 6%, 0 6%);
    clip-path: polygon(0 5%, 100% 5%, 100% 6%, 0 6%);
  }
  25% {
    -webkit-clip-path: polygon(0 20%, 100% 20%, 100% 20%, 0 20%);
    clip-path: polygon(0 20%, 100% 20%, 100% 20%, 0 20%);
  }
  27% {
    -webkit-clip-path: polygon(0 10%, 100% 10%, 100% 10%, 0 10%);
    clip-path: polygon(0 10%, 100% 10%, 100% 10%, 0 10%);
  }
  30% {
    -webkit-clip-path: polygon(0 30%, 100% 30%, 100% 25%, 0 25%);
    clip-path: polygon(0 30%, 100% 30%, 100% 25%, 0 25%);
  }
  33% {
    -webkit-clip-path: polygon(0 15%, 100% 15%, 100% 16%, 0 16%);
    clip-path: polygon(0 15%, 100% 15%, 100% 16%, 0 16%);
  }
  37% {
    -webkit-clip-path: polygon(0 40%, 100% 40%, 100% 39%, 0 39%);
    clip-path: polygon(0 40%, 100% 40%, 100% 39%, 0 39%);
  }
  40% {
    -webkit-clip-path: polygon(0 20%, 100% 20%, 100% 21%, 0 21%);
    clip-path: polygon(0 20%, 100% 20%, 100% 21%, 0 21%);
  }
  45% {
    -webkit-clip-path: polygon(0 60%, 100% 60%, 100% 55%, 0 55%);
    clip-path: polygon(0 60%, 100% 60%, 100% 55%, 0 55%);
  }
  50% {
    -webkit-clip-path: polygon(0 30%, 100% 30%, 100% 31%, 0 31%);
    clip-path: polygon(0 30%, 100% 30%, 100% 31%, 0 31%);
  }
  53% {
    -webkit-clip-path: polygon(0 70%, 100% 70%, 100% 69%, 0 69%);
    clip-path: polygon(0 70%, 100% 70%, 100% 69%, 0 69%);
  }
  57% {
    -webkit-clip-path: polygon(0 40%, 100% 40%, 100% 41%, 0 41%);
    clip-path: polygon(0 40%, 100% 40%, 100% 41%, 0 41%);
  }
  60% {
    -webkit-clip-path: polygon(0 80%, 100% 80%, 100% 75%, 0 75%);
    clip-path: polygon(0 80%, 100% 80%, 100% 75%, 0 75%);
  }
  65% {
    -webkit-clip-path: polygon(0 50%, 100% 50%, 100% 51%, 0 51%);
    clip-path: polygon(0 50%, 100% 50%, 100% 51%, 0 51%);
  }
  70% {
    -webkit-clip-path: polygon(0 90%, 100% 90%, 100% 90%, 0 90%);
    clip-path: polygon(0 90%, 100% 90%, 100% 90%, 0 90%);
  }
  73% {
    -webkit-clip-path: polygon(0 60%, 100% 60%, 100% 60%, 0 60%);
    clip-path: polygon(0 60%, 100% 60%, 100% 60%, 0 60%);
  }
  80% {
    -webkit-clip-path: polygon(0 100%, 100% 100%, 100% 99%, 0 99%);
    clip-path: polygon(0 100%, 100% 100%, 100% 99%, 0 99%);
  }
  100% {
    -webkit-clip-path: polygon(0 70%, 100% 70%, 100% 71%, 0 71%);
    clip-path: polygon(0 70%, 100% 70%, 100% 71%, 0 71%);
  }
}

/* Vertical */
@keyframes glitch-anim-1-vertical {
  0% { 
    -webkit-clip-path: polygon(2% 0, 5% 0, 5% 100%, 2% 100%);
    clip-path: polygon(2% 0, 5% 0, 5% 100%, 2% 100%);
  }
  10% {
    -webkit-clip-path: polygon(15% 0, 15% 0, 15% 100%, 15% 100%);
    clip-path: polygon(15% 0, 15% 0, 15% 100%, 15% 100%);
  }
  20% {
    -webkit-clip-path: polygon(10% 0, 20% 0, 20% 100%, 10% 100%);
    clip-path: polygon(10% 0, 20% 0, 20% 100%, 10% 100%);
  }
  30% {
    -webkit-clip-path: polygon(1% 0, 2% 0, 2% 100%, 1% 100%);
    clip-path: polygon(1% 0, 2% 0, 2% 100%, 1% 100%);
  }
  40% {
    -webkit-clip-path: polygon(33% 0, 33% 0, 33% 100%, 33% 100%);
    clip-path: polygon(33% 0, 33% 0, 33% 100%, 33% 100%);
  }
  50% {
    -webkit-clip-path: polygon(44% 0, 44% 0, 44% 100%, 44% 100%);
    clip-path: polygon(44% 0, 44% 0, 44% 100%, 44% 100%);
  }
  60% {
    -webkit-clip-path: polygon(50% 0, 20% 0, 20% 100%, 50% 100%);
    clip-path: polygon(50% 0, 20% 0, 20% 100%, 50% 100%);
  }
  70% {
    -webkit-clip-path: polygon(70% 0, 70% 0, 70% 100% 70%, 70% 100%);
    clip-path: polygon(70% 0, 70% 0, 70% 100% 70%, 70% 100%);
  }
  80% {
    -webkit-clip-path: polygon(80% 0, 80% 0, 80% 100% 80%, 80% 100%);
    clip-path: polygon(80% 0, 80% 0, 80% 100% 80%, 80% 100%);
  }
  90% {
    -webkit-clip-path: polygon(50% 0, 55% 0, 55% 100%, 50% 100%);
    clip-path: polygon(50% 0, 55% 0, 55% 100%, 50% 100%);
  }
  100% {
    -webkit-clip-path: polygon(70% 0, 80% 0, 80% 100%, 70% 100%);
    clip-path: polygon(70% 0, 80% 0, 80% 100%, 70% 100%);
  }
}

@keyframes glitch-anim-2-vertical {
  0% { 
    -webkit-clip-path: polygon(25% 0, 30% 0, 30% 100%, 25% 100%);
    clip-path: polygon(25% 0, 30% 0, 30% 100%, 25% 100%);
  }
  15% {
    -webkit-clip-path: polygon(3% 0, 3% 0, 3% 100%, 3% 100%);
    clip-path: polygon(3% 0, 3% 0, 3% 100%, 3% 100%);
  }
  22% {
    -webkit-clip-path: polygon(5% 0, 20% 0, 20% 100%, 5% 100%);
    clip-path: polygon(5% 0, 20% 0, 20% 100%, 5% 100%);
  }
  31% {
    -webkit-clip-path: polygon(20% 0, 20% 0, 20% 100%, 20% 100%);
    clip-path: polygon(20% 0, 20% 0, 20% 100%, 20% 100%);
  }
  45% {
    -webkit-clip-path: polygon(40% 0, 40% 0, 40% 100%, 40% 100%);
    clip-path: polygon(40% 0, 40% 0, 40% 100%, 40% 100%);
  }
  51% {
    -webkit-clip-path: polygon(52% 0, 59% 0, 59% 100%, 52% 100%);
    clip-path: polygon(52% 0, 59% 0, 59% 100%, 52% 100%);
  }
  63% {
    -webkit-clip-path: polygon(60% 0, 60% 0, 60% 100%, 60% 100%);
    clip-path: polygon(60% 0, 60% 0, 60% 100%, 60% 100%);
  }
  76% {
    -webkit-clip-path: polygon(75% 0, 75% 0, 75% 100%, 75% 100%);
    clip-path: polygon(75% 0, 75% 0, 75% 100%, 75% 100%);
  }
  81% {
    -webkit-clip-path: polygon(65% 0, 40% 0, 40% 100%, 65% 100%);
    clip-path: polygon(65% 0, 40% 0, 40% 100%, 65% 100%);
  }
  94% {
    -webkit-clip-path: polygon(45% 0, 50% 0, 50% 100%, 45% 100%);
    clip-path: polygon(45% 0, 50% 0, 50% 100%, 45% 100%);
  }
  100% {
    -webkit-clip-path: polygon(14% 0, 33% 0, 33% 100%, 14% 100%);
    clip-path: polygon(14% 0, 33% 0, 33% 100%, 14% 100%);
  }
}

@keyframes glitch-anim-3-vertical {
  0% { 
    -webkit-clip-path: polygon(1% 0, 3% 0, 3% 100%, 1% 100%);
    clip-path: polygon(1% 0, 3% 0, 3% 100%, 1% 100%);
  }
  5% {
    -webkit-clip-path: polygon(10% 0, 9% 0, 9% 100%, 10% 100%);
    clip-path: polygon(10% 0, 9% 0, 9% 100%, 10% 100%);
  }
  10% {
    -webkit-clip-path: polygon(5% 0, 6% 0 6% 100%, 5% 100%);
    clip-path: polygon(5% 0, 6% 0 6% 100%, 5% 100%);
  }
  25% {
    -webkit-clip-path: polygon(20% 0, 20% 0, 20% 100%, 20% 100%);
    clip-path: polygon(20% 0, 20% 0, 20% 100%, 20% 100%);
  }
  27% {
    -webkit-clip-path: polygon(10% 0, 10% 0, 10% 100%, 10% 100%);
    clip-path: polygon(10% 0, 10% 0, 10% 100%, 10% 100%);
  }
  30% {
    -webkit-clip-path: polygon(30% 0, 25% 0, 25% 100%, 30% 100%);
    clip-path: polygon(30% 0, 25% 0, 25% 100%, 30% 100%);
  }
  33% {
    -webkit-clip-path: polygon(15% 0, 16% 0, 16% 100%, 15% 100%);;
    clip-path: polygon(15% 0, 16% 0, 16% 100%, 15% 100%);
  }
  37% {
    -webkit-clip-path: polygon(40% 0, 39% 0, 39% 100%, 40% 100%);;
    clip-path: polygon(40% 0, 39% 0, 39% 100%, 40% 100%);
  }
  40% {
    -webkit-clip-path: polygon(20% 0, 21% 0, 21% 100%, 20% 100%);
    clip-path: polygon(20% 0, 21% 0, 21% 100%, 20% 100%); 
  }
  45% {
    -webkit-clip-path: polygon(60% 0, 55% 0, 55% 100%, 60% 100%);
    clip-path: polygon(60% 0, 55% 0, 55% 100%, 60% 100%);
  }
  50% {
    -webkit-clip-path: polygon(30% 0, 31% 0, 31% 100%, 30% 100%);
    clip-path: polygon(30% 0, 31% 0, 31% 100%, 30% 100%);
  }
  53% {
    -webkit-clip-path: polygon(70% 0, 69% 0, 69% 100%, 70% 100%);
    clip-path: polygon(70% 0, 69% 0, 69% 100%, 70% 100%);
  }
  57% {
    -webkit-clip-path: polygon(40% 0, 41% 0, 41% 100%, 40% 100%);
    clip-path: polygon(40% 0, 41% 0, 41% 100%, 40% 100%);
  }
  60% {
    -webkit-clip-path: polygon(80% 0, 75% 0, 75% 100%, 80% 100%);
    clip-path: polygon(80% 0, 75% 0, 75% 100%, 80% 100%);
  }
  65% {
    -webkit-clip-path: polygon(50% 0, 51% 0, 51% 100%, 50% 100%);
    clip-path: polygon(50% 0, 51% 0, 51% 100%, 50% 100%);
  }
  70% {
    -webkit-clip-path: polygon(90% 0, 90% 0, 90% 100%, 90% 100%);
    clip-path: polygon(90% 0, 90% 0, 90% 100%, 90% 100%);
  }
  73% {
    -webkit-clip-path: polygon(60% 0, 60% 0, 60% 100%, 60% 100%);
    clip-path: polygon(60% 0, 60% 0, 60% 100%, 60% 100%);
  }
  80% {
    -webkit-clip-path: polygon(100% 0, 99% 0, 99% 100%, 100% 100%);
    clip-path: polygon(100% 0, 99% 0, 99% 100%, 100% 100%);
  }
  100% {
    -webkit-clip-path: polygon(70% 0, 71% 0, 71% 100%, 70% 100%);
    clip-path: polygon(70% 0, 71% 0, 71% 100%, 70% 100%);
  }
}

@keyframes glitch-anim-text {
  0% { 
    opacity: 1;
    transform: translate3d(-10px,0,0) scale3d(-1,-1,1);
    -webkit-clip-path: polygon(0 20%, 100% 20%, 100% 21%, 0 21%);
    clip-path: polygon(0 20%, 100% 20%, 100% 21%, 0 21%);
  }
  10% {
    -webkit-clip-path: polygon(0 33%, 100% 33%, 100% 33%, 0 33%);
    clip-path: polygon(0 33%, 100% 33%, 100% 33%, 0 33%);
  }
  20% {
    -webkit-clip-path: polygon(0 44%, 100% 44%, 100% 44%, 0 44%);
    clip-path: polygon(0 44%, 100% 44%, 100% 44%, 0 44%);
  }
  35% {
    -webkit-clip-path: polygon(0 50%, 100% 50%, 100% 20%, 0 20%);
    clip-path: polygon(0 50%, 100% 50%, 100% 20%, 0 20%);
  }
  50% {
    -webkit-clip-path: polygon(0 70%, 100% 70%, 100% 70%, 0 70%);
    clip-path: polygon(0 70%, 100% 70%, 100% 70%, 0 70%);
  }
  60% {
    -webkit-clip-path: polygon(0 80%, 100% 80%, 100% 80%, 0 80%);
    clip-path: polygon(0 80%, 100% 80%, 100% 80%, 0 80%);
  }
  70% {
    -webkit-clip-path: polygon(0 50%, 100% 50%, 100% 55%, 0 55%);
    clip-path: polygon(0 50%, 100% 50%, 100% 55%, 0 55%);
  }
  80% {
    -webkit-clip-path: polygon(0 70%, 100% 70%, 100% 80%, 0 80%);
    clip-path: polygon(0 70%, 100% 70%, 100% 80%, 0 80%);
  }
  90% {
    transform: translate3d(-10px,0,0) scale3d(-1,-1,1);
  }
  100% {
    opacity: 1;
    transform: translate3d(0,0,0) scale3d(1,1,1);
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
  }
}

/* Flash */
@keyframes glitch-anim-flash {
  0% { 
    opacity: 0.2; 
    transform: translate3d(var(--gap-horizontal), var(--gap-vertical), 0);
  }
  33%, 100% { 
    opacity: 0;
    transform: translate3d(0,0,0);
  }
}


body{
  background:
  radial-gradient(black 15%, transparent 16%) 0 0,
  radial-gradient(black 15%, transparent 16%) 8px 8px,
  radial-gradient(rgba(255,255,255,.1) 15%, transparent 20%) 0 1px,
  radial-gradient(rgba(255,255,255,.1) 15%, transparent 20%) 8px 9px;
  background-color:#1b1a1a;
  background-size:16px 16px;
}
.xoverlay-data{
  /*background: url('../img/pattern4.png');*/
  background: #000;
}
@keyframes main-shadow {
  from {box-shadow: 0 0 25px 5px #760096;}
  50% {box-shadow: 0 0 15px 5px #009696;}
  to {box-shadow: 0 0 10px 5px #300036;}
}

@keyframes main-text-shadow {
  from {text-shadow: 0 0 10px #760096;}
  50% {text-shadow: 0 0 10px #009696;}
  to {text-shadow: 0 0 10px #300036;}
}
@keyframes progress-90{
  from {width:0%;}
  to {width:90%;} 
}
@keyframes progress-85{
  from {width:0%;}
  to {width:85%;} 
}
@keyframes progress-80{
  from {width:0%;}
  to {width:80%;} 
}
@keyframes progress-75{
  from {width:0%;}
  to {width:75%;} 
}
@keyframes progress-70{
  from {width:0%;}
  to {width:70%;} 
}
@keyframes progress-65{
  from {width:0%;}
  to {width:65%;} 
}
@keyframes progress-60{
  from {width:0%;}
  to {width:60%;} 
}
@keyframes progress-55{
  from {width:0%;}
  to {width:55%;} 
}
@keyframes progress-50{
  from {width:0%;}
  to {width:50%;} 
}
/*.shadow-conteiner{
  animation: main-shadow  5s infinite alternate linear;
}*/
.main-text-shadow{
  translate3d(0, 0, 0);
  animation: main-text-shadow  5s infinite alternate linear;  
}
.text-shadow-blue{
  text-shadow: 0 0 10px #00f;
}

.triangle-bottomleft::after {
    content: ''; 
    position: absolute; /* Абсолютное позиционирование */
    left: auto; /* Положение треугольника */
    bottom: 0; /* Положение треугольника */
    right: -20px;
    border: 10px solid transparent; 
    border-bottom: 10px solid #00f;
    border-left: 10px solid #00f;
   }

.bg_aqva{
  background-color: #56b3b8;
}
.triangle-bottomleft-c_aqva::after {
    content: ''; 
    position: absolute; /* Абсолютное позиционирование */
    left: auto; /* Положение треугольника */
    bottom: 0; /* Положение треугольника */
    right: -20px;
    border: 10px solid transparent; 
    border-bottom: 10px solid #56b3b8;
    border-left: 10px solid #56b3b8;
 }
.bg_yellow::after{
  
  border-bottom-color: #fadf1c;
  border-left-color: #fadf1c;
}
.bg_yellow{
  background-color: #fadf1c;
}
 .bg_ligth-blue::after{
  
  border-bottom-color: #1b75bb;
  border-left-color: #1b75bb;
}
.bg_ligth-blue{
  background-color: #1b75bb;
}
 .bg_ligth-red::after{
  
  border-bottom-color: #e84c50;
  border-left-color: #e84c50;
}
.bg_ligth-red{
  background-color: #e84c50;
}
.bg_pink::after{
  
  border-bottom-color: #cf649a;
  border-left-color: #cf649a;
}
.bg_pink{
  background-color: #cf649a;
}
 .bg_strong-blue::after{
  
  border-bottom-color: #777bb3;
  border-left-color: #777bb3;
}
.bg_strong-blue{
  background-color: #777bb3;
}
.bg_silver::after{
  
  border-bottom-color: #bfcbd2;
  border-left-color: #bfcbd2;
}
.bg_silver{
  background-color: #bfcbd2;
}
 .bg_krem-blue::after{
  
  border-bottom-color: #5f3f8b;
  border-left-color: #5f3f8b;
}
.bg_krem-blue{
  background-color: #5f3f8b;
}
.bg_green::after{
  
  border-bottom-color: #00FF00;
  border-left-color: #00FF00;
}
.bg_green{
  background-color: #00FF00;
}
body {
  padding-top: 1.5%;
  color: #ffffff;
  font-size: 1.5em;
  font-family: 'Jura', sans-serif; }

ul {
  list-style-type: none;
  padding: 0; }

a {
  -webkit-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out; }

a.navbar-brand {
  color: #ffffff !important;
  font-size: 2em;
  text-transform: uppercase; }
  @media screen and  (max-width: 768px) {
    a.navbar-brand {
      padding: 0;
      font-size: 1.8em;
      line-height: 260%;
      text-align: center;
      width: 100%; 
    } 
    .shadow-conteiner{
      animation: none;
      animation-name: none;
      /*CSS transitions*/
    -o-transition-property: none !important;
    -moz-transition-property: none !important;
    -ms-transition-property: none !important;
    -webkit-transition-property: none !important;
    transition-property: none !important;
    /*CSS transforms*/
    -o-transform: none !important;
    -moz-transform: none !important;
    -ms-transform: none !important;
    -webkit-transform: none !important;
    transform: none !important;
    /*CSS animations*/
    -webkit-animation: none !important;
    -moz-animation: none !important;
    -o-animation: none !important;
    -ms-animation: none !important;
    animation: none !important;
    }
    }
  a.navbar-brand .fa-circle-o-notch {
    font-size: 0.85em;
    text-shadow: 0 0 10px #00f; }
.shadow-conteiner {
  -webkit-border-radius: 5px 5px 5px 5px;
          border-radius: 5px 5px 5px 5px;
  min-height: 170vh;
  position: relative;
  translate3d(0, 0, 0);
  animation: main-shadow 5s infinite alternate linear;
   }

.navbar-default {
  border: none;
  background-color: transparent;
  border-bottom: 2px solid #fff;
  -webkit-border-radius: 0;
          border-radius: 0; }

.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus, .dropdown-menu, .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus, .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus, .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a {
  background-color: transparent;
  color: #ffffff; }

.navbar-default .navbar-nav li > a {
  color: #828c8a; }

.dropdown-menu > li > a {
  color: #ffffff; }

.shadow-conteiner {
  background: rgba(0, 0, 0, 0.5); }

html body .navbar-default .navbar-nav > .active > a {
  color: #ffffff; }

.aboute-me {
  -webkit-transition: all 1s ease-out;
  -o-transition: all 1s ease-out;
  transition: all 1s ease-out;
  border: 2px solid rgba(255, 255, 255, 0.75);
  color: #444343; }
  @media (max-width: 768px) {
    .aboute-me {
      color: #fff;
      margin: 10px 0 0 0; } }
  .aboute-me:hover {
    color: #bfb7b7;
    -webkit-border-radius: 0;
            border-radius: 0; }

.navbar-nav > li > .dropdown-menu {
  background: #121212; }

.my-foto {
  -webkit-box-shadow: 0 0 20px 2px #fff;
          box-shadow: 0 0 20px 2px #fff; }

.skils li {
  border: 1px solid #333;
  width: 70%;
  margin: 2px 0 2px 0;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex; }
  @media (max-width: 768px) {
    .skils li {
      width: 100%; } }
  .skils li .progress-skils {
    height: 20px;
    -webkit-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    position: relative;
    padding: 0 0 0 2%;
    color: #000;
    font-weight: 600; }
  .skils li .progress-skils[data-lavel="90"] {
    -webkit-animation: progress-90  5s  alternate linear;
            animation: progress-90  5s  alternate linear;
    width: 90%; }
  .skils li .progress-skils[data-lavel="85"] {
    -webkit-animation: progress-85  5s  alternate linear;
            animation: progress-85  5s  alternate linear;
    width: 85%; }
  .skils li .progress-skils[data-lavel="80"] {
    -webkit-animation: progress-80  5s  alternate linear;
            animation: progress-80  5s  alternate linear;
    width: 80%; }
  .skils li .progress-skils[data-lavel="75"] {
    -webkit-animation: progress-75  5s  alternate linear;
            animation: progress-75  5s  alternate linear;
    width: 75%; }
  .skils li .progress-skils[data-lavel="70"] {
    -webkit-animation: progress-70  5s  alternate linear;
            animation: progress-70  5s  alternate linear;
    width: 70%; }
  .skils li .progress-skils[data-lavel="65"] {
    -webkit-animation: progress-65  5s  alternate linear;
            animation: progress-65  5s  alternate linear;
    width: 65%; }
  .skils li .progress-skils[data-lavel="60"] {
    -webkit-animation: progress-60  5s  alternate linear;
            animation: progress-60  5s  alternate linear;
    width: 60%; }
  .skils li .progress-skils[data-lavel="50"] {
    -webkit-animation: progress-50  5s  alternate linear;
            animation: progress-50  5s  alternate linear;
    width: 50%; }
  .skils li .progress-skils:hover {
    width: 95%; }

#footer {
  position: absolute;
  bottom: 0;
  width: 100%; }
  #footer a {
    color: #fff; }

.xoverlay-box ul {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-justify-content: space-around;
      -ms-flex-pack: distribute;
          justify-content: space-around; }
  .xoverlay-box ul li > img {
    max-width: 50px; }

.xoverlay-box .xoverlay-data {
  position: relative;
  color: #04af02;
  overflow: auto; }
  .xoverlay-box .xoverlay-data table {
    width: 100%;
    position: absolute;
    bottom: 20px;
    left: 0;
    right: 0; }
  .xoverlay-box .xoverlay-data p {
    color: #04af02;
    font-size: 1.2em; }

/* 
Xoverlay
--------------------------------------------------------
Author: Echothemes
Author UI: http://echothemes.ehungers.com
Item Name: Xoverlay
Description: CSS Hover Effects
Version: 1.0
*/

/*===== general css =====*/ .xoverlay{ position:relative; overflow:hidden; perspective: 300px; -webkit-perspective: 300px; -ms-perspective: 300px; -o-perspective: 300px; } .xoverlay .x-img-main{ width:100%; } .xoverlay-data{ width:100%; height:100%; text-align:center; } .xoverlay-data p{ color:#fff; text-align:left; padding:10px; margin:0; float:left; font-size:13px; } .xoverlay h2{ font-size:16px; margin:0; float:left; display:block; padding:10px 10px 0 10px; color:#f1c40f; } .xoverlay span{ display: inline-block; position: relative; top: 33%; margin:0 3%; } .xoverlay span i{ text-align:center; font-size:40px; width:50px; height:50px; padding:5%; } @media(max-width:530px) { .xoverlay span i{ text-align:center; font-size:27px; width:35px; height:35px; padding:5%; } } @media(max-width:530px) { .xoverlay span i{ text-align:center; font-size:19px; width:25px; height:25px; padding:5%; } } @media(max-width:302px) { .xoverlay span i{ text-align:center; font-size:10px; width:15px; height:15px; padding:5%;} } .x-more,.x-more:hover{ background: #ffffff; border-radius: 2px; clear: both; color: #858585; padding: 3px 7px; float:left; margin:0 10px; text-decoration:none; } /*===== Icon style =====*/ .xoverlay .x-circle i{ border-radius:50%; border:2px solid; } .xoverlay .x-square i{ border:2px solid; } .xoverlay .x-lemon  i{ border:2px solid; border-radius:50% 0; } .xoverlay .x-balloon  i{ border:2px solid; border-radius:50% 0 50% 50%; } .xoverlay .x-smooth  i{ border:2px solid; border-radius:10%; } .x-white i{ color:#ffffff; border-color:#ffffff; } .x-yellow i{ color:#f1c40f; border-color:#f1c40f; } .x-green i{ color:#2ecc71; border-color:#2ecc71; } .x-blue i{ color:#1abc9c; border-color:#1abc9c; } .x-red i{ color:#e74c3c; border-color:#e74c3c; } .x-orange i{ color:#e67e22; border-color:#e67e22; } /*===== Simple Opacity =====*/ .x-simple .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; bottom:0; top:0; opacity:0; background:rgba(27,27,27,.7); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-simple:hover .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; bottom:0; top:0; opacity:1; background:rgba(27,27,27,.7); } /*===== Slide Up =====*/ .x-bottom .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; bottom:-500px; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-bottom:hover .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; bottom:0; background:#444444; } /*===== Slide Down =====*/ .x-top .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; top:-500px; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-top:hover .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; top:0; background:#444444; } /*===== Slide Left =====*/ .x-left .xoverlay-box{ width:100%; height:100%; position:absolute; top:0; bottom:0; right:0; left:-500px; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-left:hover .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; top:0; bottom:0; background:#444444; } /*===== Slide Right =====*/ .x-right .xoverlay-box{ width:100%; height:100%; position:absolute; top:0; bottom:0; right:-500px; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-right:hover .xoverlay-box{ width:100%; height:100%; position:absolute; right:0; top:0; bottom:0; background:#444444; } /*===== Slide Top Left =====*/ .x-top-left .xoverlay-box{ width:100%; height:100%; position:absolute; top:-500px; left:-500px; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-top-left:hover .xoverlay-box{ width:100%; height:100%; position:absolute; top:0; left:0; background:#444444; } /*===== Slide Top Right =====*/ .x-top-right .xoverlay-box{ width:100%; height:100%; position:absolute; top:-500px; right:-500px; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-top-right:hover .xoverlay-box{ width:100%; height:100%; position:absolute; top:0; right:0; background:#444444; } /*===== Slide Bottom Left =====*/ .x-bottom-left .xoverlay-box{ width:100%; height:100%; position:absolute; bottom:-500px; left:-500px; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-bottom-left:hover .xoverlay-box{ width:100%; height:100%; position:absolute; bottom:0; left:0; background:#444444; } /*===== Slide Bottom Right =====*/ .x-bottom-right .xoverlay-box{ width:100%; height:100%; position:absolute; bottom:-500px; right:-500px; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-bottom-right:hover .xoverlay-box{ width:100%; height:100%; position:absolute; bottom:0; right:0; background:#444444; } /*===== Flip Left =====*/ .x-flip-left .xoverlay-box{ transform-origin: center left; -ms-transform-origin: center left; -webkit-transform-origin: center left; transform:rotateY(131deg); -ms-transform:rotateY(131deg); -webkit-transform:rotateY(131deg); width:100%; height:100%; position:absolute; top:0; bottom:0; left:0; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-flip-left:hover .xoverlay-box{ transform-origin: center left; -ms-transform-origin: center left; -webkit-transform-origin: center left; transform:rotateY(0deg); -ms-transform:rotateY(0deg); -webkit-transform:rotateY(0deg); width:100%; height:100%; position:absolute; top:0; bottom:0; left:0; right:0; background:#444444; } /*===== Flip Right =====*/ .x-flip-right .xoverlay-box{ transform-origin: center right; -ms-transform-origin: center right; -webkit-transform-origin: center right; transform:rotateY(-133deg); -ms-transform:rotateY(-133deg); -webkit-transform:rotateY(-133deg); width:100%; height:100%; position:absolute; top:0; bottom:0; right:0; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-flip-right:hover .xoverlay-box{ transform-origin: center right; -ms-transform-origin: center right; -webkit-transform-origin: center right; transform:rotateY(0deg); -ms-transform:rotateY(0deg); -webkit-transform:rotateY(0deg); width:100%; height:100%; position:absolute; top:0; bottom:0; left:0; right:0; background:#444444; } /*===== Flip Top =====*/ .x-flip-top .xoverlay-box{ transform-origin: center top; -ms-transform-origin: center top; -webkit-transform-origin: center top; transform:rotateX(-125deg); -ms-transform:rotateX(-125deg); -webkit-transform:rotateX(-125deg); width:100%; height:100%; position:absolute; top:0; bottom:0; right:0; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-flip-top:hover .xoverlay-box{ transform-origin: center top; -ms-transform-origin: center top; -webkit-transform-origin: center top; transform:rotateX(0deg); -ms-transform:rotateX(0deg); -webkit-transform:rotateX(0deg); width:100%; height:100%; position:absolute; top:0; bottom:0; left:0; right:0; background:#444444; } /*===== Flip Bottom =====*/ .x-flip-bottom .xoverlay-box{ transform-origin: center bottom; -ms-transform-origin: center bottom; -webkit-transform-origin: center bottom; transform:rotateX(131deg); -ms-transform:rotateX(131deg); -webkit-transform:rotateX(131deg); width:100%; height:100%; position:absolute; top:0; bottom:0; right:0; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-flip-bottom:hover .xoverlay-box{ transform-origin: center bottom; -ms-transform-origin: center bottom; -webkit-transform-origin: center bottom; transform:rotateX(0deg); -ms-transform:rotateX(0deg); -webkit-transform:rotateX(0deg); width:100%; height:100%; position:absolute; top:0; bottom:0; left:0; right:0; background:#444444; } /*===== Wobble Left =====*/ .x-wobble-left .xoverlay-box{ transform-origin: center left; -ms-transform-origin: center left; -webkit-transform-origin: center left; transform:rotateY(131deg); -ms-transform:rotateY(131deg); -webkit-transform:rotateY(131deg); width:100%; height:100%; position:absolute; top:0; bottom:0; left:0; background:#444444; -webkit-transition: all .5s; -moz-transition: all .5s; transition: all .5s; } .x-wobble-left:hover .xoverlay-box{ transform-origin: center right; -ms-transform-origin: center right; -webkit-transform-origin: center right; transform:rotateY(0deg); -ms-transform:rotateY(0deg); -webkit-transform:rotateY(0deg); width:100%; height:100%; position:absolute; top:0; bottom:0; left:0; right:0; background:#444444; } /*===== Wobble Right =====*/ .x-wobble-right .xoverlay-box{ transform-origin: center right; -ms-transform-origin: center right; -webkit-transform-origin: center right; transform:rotateY(-133deg); -ms-transform:rotateY(-133deg); -webkit-transform:rotateY(-133deg); width:100%; height:100%; position:absolute; top:0; bottom:0; left:0; background:#444444; -webkit-transition: all .5s; -moz-transition: all .5s; transition: all .5s; } .x-wobble-right:hover .xoverlay-box{ transform-origin: center left; -ms-transform-origin: center left; -webkit-transform-origin: center left; transform:rotateY(0deg); -ms-transform:rotateY(0deg); -webkit-transform:rotateY(0deg); width:100%; height:100%; position:absolute; top:0; bottom:0; left:0; right:0; background:#444444; } /*===== Wobble Top =====*/ .x-wobble-top .xoverlay-box{ transform-origin: center top; -ms-transform-origin: center top; -webkit-transform-origin: center top; transform:rotateX(-131deg); -ms-transform:rotateX(-131deg); -webkit-transform:rotateX(-131deg); width:100%; height:100%; position:absolute; top:0; bottom:0; right:0; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-wobble-top:hover .xoverlay-box{ transform-origin: center bottom; -ms-transform-origin: center bottom; -webkit-transform-origin: center bottom; transform:rotateX(0deg); -ms-transform:rotateX(0deg); -webkit-transform:rotateX(0deg); width:100%; height:100%; position:absolute; top:0; bottom:0; left:0; right:0; background:#444444; } /*===== Wobble Bottom =====*/ .x-wobble-bottom .xoverlay-box{ transform-origin: center bottom; -ms-transform-origin: center bottom; -webkit-transform-origin: center bottom; transform:rotateX(131deg); -ms-transform:rotateX(131deg); -webkit-transform:rotateX(131deg); width:100%; height:100%; position:absolute; top:0; bottom:0; right:0; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-wobble-bottom:hover .xoverlay-box{ transform-origin: center top; -ms-transform-origin: center top; -webkit-transform-origin: center top; transform:rotateX(0deg); -ms-transform:rotateX(0deg); -webkit-transform:rotateX(0deg); width:100%; height:100%; position:absolute; top:0; bottom:0; left:0; right:0; background:#444444; } /*===== Push Left =====*/ .x-fpush-left .xoverlay-box{ transform-origin: center left; -ms-transform-origin: center left; -webkit-transform-origin: center left; transform:rotateY(131deg); -ms-transform:rotateY(131deg); -webkit-transform:rotateY(131deg); width:50%; height:100%; position:absolute; top:0; bottom:0; left:0; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-fpush-left:hover .xoverlay-box{ transform-origin: center left; -ms-transform-origin: center left; -webkit-transform-origin: center left; transform:rotateY(0deg); -ms-transform:rotateY(0deg); -webkit-transform:rotateY(0deg); width:50%; height:100%; position:absolute; top:0; bottom:0; left:0; right:0; background:#444444; } .x-fpush-left .x-img-main{ -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-fpush-left:hover .x-img-main{ transform:translateX(20%); -ms-transform:translateX(20%); -webkit-transform:translateX(20%); }/*===== Push Right =====*/ .x-fpush-right .xoverlay-box{ transform-origin: center right; -ms-transform-origin: center right; -webkit-transform-origin: center right; transform:rotateY(-132deg); -ms-transform:rotateY(-132deg); -webkit-transform:rotateY(-132deg); width:50%; height:100%; position:absolute; top:0; bottom:0; right:0; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-fpush-right:hover .xoverlay-box{ transform-origin: center right; -ms-transform-origin: center right; -webkit-transform-origin: center right; transform:rotateY(0deg); -ms-transform:rotateY(0deg); -webkit-transform:rotateY(0deg); width:50%; height:100%; position:absolute; top:0; bottom:0; right:0; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-fpush-right .x-img-main{ -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-fpush-right:hover .x-img-main{ transform:translateX(-20%); -ms-transform:translateX(-20%); -webkit-transform:translateX(-20%); }/*===== Push Top =====*/ .x-fpush-top .xoverlay-box{ transform-origin: center top; -ms-transform-origin: center top; -webkit-transform-origin: center top; transform:rotateX(-125deg); -ms-transform:rotateX(-125deg); -webkit-transform:rotateX(-125deg); width:100%; height:70%; position:absolute; top:0; bottom:0; right:0; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-fpush-top:hover .xoverlay-box{ transform-origin: center top; -ms-transform-origin: center top; -webkit-transform-origin: center top; transform:rotateX(0deg); -ms-transform:rotateX(0deg); -webkit-transform:rotateX(0deg); width:100%; height:70%; position:absolute; top:0; bottom:0; right:0; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-fpush-top .x-img-main{ -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-fpush-top:hover .x-img-main{ transform:translateY(20%); -ms-transform:translateY(20%); -webkit-transform:translateY(20%); }/*===== Push Bottom =====*/ .x-fpush-bottom .xoverlay-box{ transform-origin: center bottom; -ms-transform-origin: center bottom; -webkit-transform-origin: center bottom; transform:rotateX(131deg); -ms-transform:rotateX(131deg); -webkit-transform:rotateX(131deg); width:100%; height:70%; position:absolute; bottom:0; right:0; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-fpush-bottom:hover .xoverlay-box{ transform-origin: center bottom; -ms-transform-origin: center bottom; -webkit-transform-origin: center bottom; transform:rotateX(0deg); -ms-transform:rotateX(0deg); -webkit-transform:rotateX(0deg); width:100%; height:70%; position:absolute; bottom:0; right:0; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-fpush-bottom .x-img-main{ -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-fpush-bottom:hover .x-img-main{ transform:translateY(-20%); -ms-transform:translateY(-20%); -webkit-transform:translateY(-20%); }/*===== Push Full Left =====*/ .x-pushfull-left .xoverlay-box{ width:100%; height:100%; position:absolute; top:0; bottom:0; right:0; left:-100%; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-pushfull-left:hover .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; top:0; bottom:0; background:#444444; } .x-pushfull-left .x-img-main{ -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-pushfull-left:hover .x-img-main{ transform:translateX(100%); -ms-transform:translateX(100%); -webkit-transform:translateX(100%); }/*===== Push Full Right =====*/ .x-pushfull-right .xoverlay-box{ width:100%; height:100%; position:absolute; top:0; bottom:0; right:-100%; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-pushfull-right:hover .xoverlay-box{ width:100%; height:100%; position:absolute; right:0; top:0; bottom:0; background:#444444; } .x-pushfull-right .x-img-main{ -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-pushfull-right:hover .x-img-main{ transform:translateX(-100%); -ms-transform:translateX(-100%); -webkit-transform:translateX(-100%); }/*===== Push Full Top =====*/ .x-pushfull-top .xoverlay-box{ width:100%; height:100%; position:absolute; top:-100%; right:0; left:0; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-pushfull-top:hover .xoverlay-box{ width:100%; height:100%; position:absolute; right:0; top:0; left:0; background:#444444; } .x-pushfull-top .x-img-main{ -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-pushfull-top:hover .x-img-main{ transform:translateY(100%); -ms-transform:translateY(100%); -webkit-transform:translateY(100%); }/*===== Push Full Bottom =====*/ .x-pushfull-bottom .xoverlay-box{ width:100%; height:100%; position:absolute; bottom:-100%; right:0; left:0; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-pushfull-bottom:hover .xoverlay-box{ width:100%; height:100%; position:absolute; right:0; bottom:0; left:0; background:#444444; } .x-pushfull-bottom .x-img-main{ -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-pushfull-bottom:hover .x-img-main{ transform:translateY(-100%); -ms-transform:translateY(-100%); -webkit-transform:translateY(-100%); }/*===== Image Rotate Left =====*/ .x-imgrotate-left .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; bottom:0; top:0; opacity:0; background:rgba(27,27,27,0.7); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-imgrotate-left:hover .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; bottom:0; top:0; opacity:1; background:rgba(27,27,27,0.7); } .x-imgrotate-left .x-img-main{ -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-imgrotate-left:hover .x-img-main{ -ms-transform: rotate(30deg) scale(1.5,1.5); -webkit-transform: rotate(30deg) scale(1.5,1.5); transform: rotate(30deg) scale(1.5,1.5); }/*===== Image Rotate Right =====*/ .x-imgrotate-right .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; bottom:0; top:0; opacity:0; background:rgba(27,27,27,0.7); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-imgrotate-right:hover .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; bottom:0; top:0; opacity:1; background:rgba(27,27,27,0.7); } .x-imgrotate-right .x-img-main{ -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-imgrotate-right:hover .x-img-main{ -ms-transform: rotate(-30deg) scale(1.5,1.5); -webkit-transform: rotate(-30deg) scale(1.5,1.5); transform: rotate(-30deg) scale(1.5,1.5); }/*===== Zoom =====*/ .x-zoom .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; bottom:0; top:0; overflow:hidden; -ms-transform:scale(0,0); -webkit-transform:scale(0,0); transform:scale(0,0); background:#444444; background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-zoom:hover .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; bottom:0; top:0; overflow:hidden; background:#444444; -ms-transform:scale(1,1); -webkit-transform:scale(1,1); transform:scale(1,1); }/*===== Zoom In Out =====*/ .x-zoom-inout .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; bottom:0; top:0; overflow:hidden; -ms-transform:scale(0,0); -webkit-transform:scale(0,0); transform:scale(0,0); background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-zoom-inout:hover .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; bottom:0; top:0; overflow:hidden; background:#444444; -ms-transform:scale(1,1); -webkit-transform:scale(1,1); transform:scale(1,1); }.x-zoom-inout .x-img-main{ -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-zoom-inout:hover .x-img-main{ -ms-transform:scale(0,0); -webkit-transform:scale(0,0); transform:scale(0,0); }/*===== Zoom Rotate =====*/ .x-zoom-rotate .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; bottom:0; top:0; overflow:hidden; ms-transform:rotate(0deg) scale(0,0); -webkit-transform:rotate(0deg) scale(0,0); transform:rotate(0deg) scale(0,0); background:#444444; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .x-zoom-rotate:hover .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; bottom:0; top:0; overflow:hidden; background:#444444; -ms-transform:rotate(360deg) scale(1,1); -webkit-transform:rotate(360deg) scale(1,1); transform:rotate(360deg) scale(1,1); }/*===== Zoom RotateY =====*/ .x-zoom-rotatey .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; bottom:0; top:0; overflow:hidden; ms-transform:rotateY(0deg) scale(0,0); -webkit-transform:rotateY(0deg) scale(0,0); transform:rotateY(0deg) scale(0,0); background:#444444; -webkit-transition: all .5s; -moz-transition: all .5s; transition: all .5s; } .x-zoom-rotatey:hover .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; bottom:0; top:0; overflow:hidden; background:#444444; -ms-transform:rotateY(360deg) scale(1,1); -webkit-transform:rotateY(360deg) scale(1,1); transform:rotateY(360deg) scale(1,1); }/*===== Zoom RotateX =====*/ .x-zoom-rotatex .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; bottom:0; top:0; overflow:hidden; ms-transform:rotateX(0deg) scale(0,0); -webkit-transform:rotateX(0deg) scale(0,0); transform:rotateX(0deg) scale(0,0); background:#444444; -webkit-transition: all .5s; -moz-transition: all .5s; transition: all .5s; } .x-zoom-rotatex:hover .xoverlay-box{ width:100%; height:100%; position:absolute; left:0; right:0; bottom:0; top:0; overflow:hidden; background:#444444; -ms-transform:rotateX(360deg) scale(1,1); -webkit-transform:rotateX(360deg) scale(1,1); transform:rotateX(360deg) scale(1,1); }/*===== Slide Icon Top Bottom =====*/ .xoverlay .x-icon-top-bottom span:nth-of-type(1){ opacity:0; transform:translateY(-500%); -ms-transform:translateY(-500%); -webkit-transform:translateY(-500%); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-top-bottom span:nth-of-type(1){ opacity:1; transform:translateY(0%); -ms-transform:translateY(0%); -webkit-transform:translateY(0%); }.xoverlay .x-icon-top-bottom span:nth-of-type(2){ opacity:0; transform:scale(0,0); -ms-transform:scale(0,0); -webkit-transform:scale(0,0); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-top-bottom span:nth-of-type(2){ opacity:1; transform:scale(1,1); -ms-transform:scale(1,1); -webkit-transform:scale(1,1); }.xoverlay .x-icon-top-bottom span:nth-of-type(3){ opacity:0; transform:translateY(300%); -ms-transform:translateY(300%); -webkit-transform:translateY(300%); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-top-bottom span:nth-of-type(3){ opacity:1; transform:translateY(0%); -ms-transform:translateY(0%); -webkit-transform:translateY(0%); }/*===== Slide Icon Left Right =====*/ .xoverlay .x-icon-left-right span:nth-of-type(1){ opacity:0; transform:translateX(-500%); -ms-transform:translateX(-500%); -webkit-transform:translateX(-500%); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-left-right span:nth-of-type(1){ opacity:1; transform:translateX(0%); -ms-transform:translateX(0%); -webkit-transform:translateX(0%); }.xoverlay .x-icon-left-right span:nth-of-type(2){ opacity:0; transform:scale(0,0); -ms-transform:scale(0,0); -webkit-transform:scale(0,0); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-left-right span:nth-of-type(2){ opacity:1; transform:scale(1,1); -ms-transform:scale(1,1); -webkit-transform:scale(1,1); }.xoverlay .x-icon-left-right span:nth-of-type(3){ opacity:0; transform:translateX(300%); -ms-transform:translateX(300%); -webkit-transform:translateX(300%); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-left-right span:nth-of-type(3){ opacity:1; transform:translateX(0%); -ms-transform:translateX(0%); -webkit-transform:translateX(0%); }/*===== Zoom Icon =====*/ .xoverlay .x-icon-zoom span{ opacity:0; transform:scale(0,0); -ms-transform:scale(0,0); -webkit-transform:scale(0,0); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-zoom span{ opacity:1; transform:scale(1,1); -ms-transform:scale(1,1); -webkit-transform:scale(1,1); }/*===== Icon Left =====*/ .xoverlay .x-icon-left span{ opacity:0; transform:translateX(-500%); -ms-transform:translateX(-500%); -webkit-transform:translateX(-500%); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-left span{ opacity:1; transform:translateX(0%); -ms-transform:translateX(0%); -webkit-transform:translateX(0%); }/*===== Icon Right =====*/ .xoverlay .x-icon-right span{ opacity:0; transform:translateX(300%); -ms-transform:translateX(300%); -webkit-transform:translateX(300%); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-right span{ opacity:1; transform:translateX(0%); -ms-transform:translateX(0%); -webkit-transform:translateX(0%); }/*===== Icon Top =====*/ .xoverlay .x-icon-top span{ opacity:0; transform:translateY(-500%); -ms-transform:translateY(-500%); -webkit-transform:translateY(-500%); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-top span{ opacity:1; transform:translateY(0%); -ms-transform:translateY(0%); -webkit-transform:translateY(0%); }/*===== Icon Bottom =====*/ .xoverlay .x-icon-bottom span{ opacity:0; transform:translateY(300%); -ms-transform:translateY(300%); -webkit-transform:translateY(300%); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-bottom span{ opacity:1; transform:translateY(0%); -ms-transform:translateY(0%); -webkit-transform:translateY(0%); }/*===== Slide Up Icon zoom =====*/ .xoverlay .x-icon-zoomup span:nth-of-type(1){ transform:scale(0,0) translateY(300%); -ms-transform:scale(0,0) translateX(300%); -webkit-transform:scale(0,0) translateX(300%); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-zoomup span:nth-of-type(1){ transform:scale(1,1) translateX(0%); -ms-transform:scale(1,1) translateX(0%); -webkit-transform:scale(1,1) translateX(0%); }.xoverlay .x-icon-zoomup span:nth-of-type(2){ transform:scale(2,2); -ms-transform:scale(2,2); -webkit-transform:scale(2,2); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-zoomup span:nth-of-type(2){ transform:scale(1,1); -ms-transform:scale(1,1); -webkit-transform:scale(1,1); }.xoverlay .x-icon-zoomup span:nth-of-type(3){ transform:scale(0,0) translateY(300%); -ms-transform:scale(0,0) translateX(300%); -webkit-transform:scale(0,0) translateX(300%); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-zoomup span:nth-of-type(3){ transform:scale(1,1) translateX(0%); -ms-transform:scale(1,1) translateX(0%); -webkit-transform:scale(1,1) translateX(0%); }/*===== Slide Down Icon zoom =====*/ .xoverlay .x-icon-zoomdown span:nth-of-type(1){ transform:scale(0,0) translateY(-500%); -ms-transform:scale(0,0) translateX(-500%); -webkit-transform:scale(0,0) translateX(-500%); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-zoomdown span:nth-of-type(1){ transform:scale(1,1) translateX(0%); -ms-transform:scale(1,1) translateX(0%); -webkit-transform:scale(1,1) translateX(0%); }.xoverlay .x-icon-zoomdown span:nth-of-type(2){ transform:scale(2,2); -ms-transform:scale(2,2); -webkit-transform:scale(2,2); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-zoomdown span:nth-of-type(2){ transform:scale(1,1); -ms-transform:scale(1,1); -webkit-transform:scale(1,1); }.xoverlay .x-icon-zoomdown span:nth-of-type(3){ transform:scale(0,0) translateY(-500%); -ms-transform:scale(0,0) translateX(-500%); -webkit-transform:scale(0,0) translateX(-500%); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-zoomdown span:nth-of-type(3){ transform:scale(1,1) translateX(0%); -ms-transform:scale(1,1) translateX(0%); -webkit-transform:scale(1,1) translateX(0%); }/*===== Icon Rotate Zoom =====*/ .xoverlay .x-icon-rotatezoom span{ opacity:0; transform:scale(0,0) rotate(180deg); -ms-transform:scale(0,0) rotate(180deg); -webkit-transform:scale(0,0) rotate(180deg); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-rotatezoom span{ opacity:1; transform:scale(1,1) rotate(0deg); -ms-transform:scale(1,1) rotate(0deg); -webkit-transform:scale(1,1) rotate(0deg); }/*===== Icon Zoom Out To In =====*/ .xoverlay .x-icon-zoomoutin span:nth-of-type(1){ transform:scale(2,2); -ms-transform:scale(2,2); -webkit-transform:scale(2,2); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-zoomoutin span:nth-of-type(1){ transform:scale(1,1); -ms-transform:scale(1,1); -webkit-transform:scale(1,1); }.xoverlay .x-icon-zoomoutin span:nth-of-type(2){ transform:scale(2,2); -ms-transform:scale(2,2); -webkit-transform:scale(2,2); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-zoomoutin span:nth-of-type(2){ transform:scale(1,1); -ms-transform:scale(1,1); -webkit-transform:scale(1,1); }.xoverlay .x-icon-zoomoutin span:nth-of-type(3){ transform:scale(2,2); -ms-transform:scale(2,2); -webkit-transform:scale(2,2); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-zoomoutin span:nth-of-type(3){ transform:scale(1,1); -ms-transform:scale(1,1); -webkit-transform:scale(1,1); }/*===== Icon All Rotate Zoom In =====*/ .xoverlay .x-icon-allzoomin{ transform:scale(0,0) rotate(180deg); -ms-transform:scale(0,0) rotate(180deg); -webkit-transform:scale(0,0) rotate(180deg); -webkit-transition: all .5s; -moz-transition: all .5s; transition: all .5s; } .xoverlay:hover .x-icon-allzoomin{ transform:scale(1,1) rotate(0deg); -ms-transform:scale(1,1) rotate(0deg); -webkit-transform:scale(1,1) rotate(0deg); }/*===== Icon All Rotate Zoom Out =====*/ .xoverlay .x-icon-allzoomout{ transform:scale(2,2) rotate(180deg); -ms-transform:scale(2,2) rotate(180deg); -webkit-transform:scale(2,2) rotate(180deg); -webkit-transition: all .5s; -moz-transition: all .5s; transition: all .5s; } .xoverlay:hover .x-icon-allzoomout{ transform:scale(1,1) rotate(0deg); -ms-transform:scale(1,1) rotate(0deg); -webkit-transform:scale(1,1) rotate(0deg); }/*===== Slide Icon Left Top Right =====*/ .xoverlay .x-icon-left-top-right span:nth-of-type(1){ opacity:0; transform:translateX(-500%); -ms-transform:translateX(-500%); -webkit-transform:translateX(-500%); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-left-top-right span:nth-of-type(1){ opacity:1; transform:translateX(0%); -ms-transform:translateX(0%); -webkit-transform:translateX(0%); }.xoverlay .x-icon-left-top-right span:nth-of-type(2){ opacity:0; transform:translateY(-500%); -ms-transform:translateY(-500%); -webkit-transform:translateY(-500%); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-left-top-right span:nth-of-type(2){ opacity:1; transform:translateY(0%); -ms-transform:translateY(0%); -webkit-transform:translateY(0%); }.xoverlay .x-icon-left-top-right span:nth-of-type(3){ opacity:0; transform:translateX(300%); -ms-transform:translateX(300%); -webkit-transform:translateX(300%); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-left-top-right span:nth-of-type(3){ opacity:1; transform:translateY(0%); -ms-transform:translateY(0%); -webkit-transform:translateY(0%); }/*===== Slide Icon Left Bottom Right =====*/ .xoverlay .x-icon-left-bottom-right span:nth-of-type(1){ opacity:0; transform:translateX(-500%); -ms-transform:translateX(-500%); -webkit-transform:translateX(-500%); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-left-bottom-right span:nth-of-type(1){ opacity:1; transform:translateX(0%); -ms-transform:translateX(0%); -webkit-transform:translateX(0%); }.xoverlay .x-icon-left-bottom-right span:nth-of-type(2){ opacity:0; transform:translateY(300%); -ms-transform:translateY(300%); -webkit-transform:translateY(300%); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-left-bottom-right span:nth-of-type(2){ opacity:1; transform:translateY(0%); -ms-transform:translateY(0%); -webkit-transform:translateY(0%); }.xoverlay .x-icon-left-bottom-right span:nth-of-type(3){ opacity:0; transform:translateX(300%); -ms-transform:translateX(300%); -webkit-transform:translateX(300%); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-left-bottom-right span:nth-of-type(3){ opacity:1; transform:translateY(0%); -ms-transform:translateY(0%); -webkit-transform:translateY(0%); }/*===== Flip Icon ZoomIn Individual =====*/ .xoverlay .x-icon-flip-zoomind span:nth-of-type(1){ transform:scale(0,0) rotateX(360deg); -ms-transform:scale(0,0) rotateX(360deg); -webkit-transform:scale(0,0) rotateX(360deg); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-flip-zoomind span:nth-of-type(1){ transform:scale(1,1) rotateX(0deg); -ms-transform:scale(1,1) rotateX(0deg); -webkit-transform:scale(1,1) rotateX(0deg); }.xoverlay .x-icon-flip-zoomind span:nth-of-type(2){ transform:scale(2,2) rotateX(360deg); -ms-transform:scale(2,2) rotateX(360deg); -webkit-transform:scale(2,2) rotateX(360deg); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-flip-zoomind span:nth-of-type(2){ transform:scale(1,1) rotateX(0deg); -ms-transform:scale(1,1) rotateX(0deg); -webkit-transform:scale(1,1) rotateX(0deg); }.xoverlay .x-icon-flip-zoomind span:nth-of-type(3){ transform:scale(0,0) rotateX(360deg); -ms-transform:scale(0,0) rotateX(360deg); -webkit-transform:scale(0,0) rotateX(360deg); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-flip-zoomind span:nth-of-type(3){ transform:scale(1,1) rotateX(0deg); -ms-transform:scale(1,1) rotateX(0deg); -webkit-transform:scale(1,1) rotateX(0deg); }/*===== Flip Icon Zoom Individual 2 =====*/ .xoverlay .x-icon-flip-zoomind2 span:nth-of-type(1){ transform:scale(2,2) rotateX(360deg); -ms-transform:scale(2,2) rotateX(360deg); -webkit-transform:scale(2,2) rotateX(360deg); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-flip-zoomind2 span:nth-of-type(1){ transform:scale(1,1) rotateX(0deg); -ms-transform:scale(1,1) rotateX(0deg); -webkit-transform:scale(1,1) rotateX(0deg); }.xoverlay .x-icon-flip-zoomind2 span:nth-of-type(2){ transform:scale(0,0) rotateX(360deg); -ms-transform:scale(0,0) rotateX(360deg); -webkit-transform:scale(0,0) rotateX(360deg); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-flip-zoomind2 span:nth-of-type(2){ transform:scale(1,1) rotateX(0deg); -ms-transform:scale(1,1) rotateX(0deg); -webkit-transform:scale(1,1) rotateX(0deg); }.xoverlay .x-icon-flip-zoomind2 span:nth-of-type(3){ transform:scale(2,2) rotateX(360deg); -ms-transform:scale(2,2) rotateX(360deg); -webkit-transform:scale(2,2) rotateX(360deg); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-flip-zoomind2 span:nth-of-type(3){ transform:scale(1,1) rotateX(0deg); -ms-transform:scale(1,1) rotateX(0deg); -webkit-transform:scale(1,1) rotateX(0deg); }/*===== Icon All Slide Down =====*/ .xoverlay .x-icon-all-slidedown{ transform:translateY(-100%) rotate(180deg); -ms-transform:translateY(-100%) rotate(180deg); -webkit-transform:translateY(-100%) rotate(180deg); -webkit-transition: all .5s; -moz-transition: all .5s; transition: all .5s; } .xoverlay:hover .x-icon-all-slidedown{ transform:translateY(0%) rotate(0deg); -ms-transform:translateY(0%) rotate(0deg); -webkit-transform:translateY(0%) rotate(0deg); }/*===== Icon All Slide Top =====*/ .xoverlay .x-icon-all-slidetop{ transform:translateY(100%) rotate(180deg); -ms-transform:translateY(100%) rotate(180deg); -webkit-transform:translateY(100%) rotate(180deg); -webkit-transition: all .5s; -moz-transition: all .5s; transition: all .5s; } .xoverlay:hover .x-icon-all-slidetop{ transform:translateY(0%) rotate(0deg); -ms-transform:translateY(0%) rotate(0deg); -webkit-transform:translateY(0%) rotate(0deg); }/*===== Icon All Slide Left =====*/ .xoverlay .x-icon-all-slideleft{ transform:translateX(-100%) rotate(180deg); -ms-transform:translateX(-100%) rotate(180deg); -webkit-transform:translateX(-100%) rotate(180deg); -webkit-transition: all .5s; -moz-transition: all .5s; transition: all .5s; } .xoverlay:hover .x-icon-all-slideleft{ transform:translateX(0%) rotate(0deg); -ms-transform:translateX(0%) rotate(0deg); -webkit-transform:translateX(0%) rotate(0deg); }/*===== Icon All Slide Right =====*/ .xoverlay .x-icon-all-slideright{ transform:translateX(100%) rotate(180deg); -ms-transform:translateX(100%) rotate(180deg); -webkit-transform:translateX(100%) rotate(180deg); -webkit-transition: all .5s; -moz-transition: all .5s; transition: all .5s; } .xoverlay:hover .x-icon-all-slideright{ transform:translateX(0%) rotate(0deg); -ms-transform:translateX(0%) rotate(0deg); -webkit-transform:translateX(0%) rotate(0deg); }/*===== Zoom Icon Left Right =====*/ .xoverlay .x-icon-lr-zoom span:nth-of-type(1){ opacity:0; transform:scale(2,2); -ms-transform:scale(2,2); -webkit-transform:scale(2,2); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-lr-zoom span:nth-of-type(1){ opacity:1; transform:scale(1,1); -ms-transform:scale(1,1); -webkit-transform:scale(1,1); }.xoverlay .x-icon-lr-zoom span:nth-of-type(2){ opacity:0; transform:scale(0,0); -ms-transform:scale(0,0); -webkit-transform:scale(0,0); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-lr-zoom span:nth-of-type(2){ opacity:1; transform:scale(1,1); -ms-transform:scale(1,1); -webkit-transform:scale(1,1); }.xoverlay .x-icon-lr-zoom span:nth-of-type(3){ opacity:0; transform:scale(2,2); -ms-transform:scale(2,2); -webkit-transform:scale(2,2); -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; } .xoverlay:hover .x-icon-lr-zoom span:nth-of-type(3){ opacity:1; transform:scale(1,1); -ms-transform:scale(1,1); -webkit-transform:scale(1,1); }
  	</style>
  	<div class="wrap-main container-fluid">
  		<div class="row">
  			<div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 shadow-conteiner gradient-demo">
  				<nav class="navbar navbar-default" role="navigation">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				            <span class="sr-only">Toggle navigation</span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				          </button>
				      <a class="navbar-brand text-shadow-blue" href="index.html" id="brend">
				      	Padilo K<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>nstantin
				      </a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li class="active">
				        	<a href="/index.html" id="index"><i class="fa fa-user-circle" aria-hidden="true"></i> Резюме</a>
				        </li>
				        <li>
				        	<a href="summary.html" id="summary">
							<i class="fa fa-server" aria-hidden="true"></i>
				        	Портфолио
				        	</a>
				        </li>
				       <!--  <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Действие</a></li>
				            <li><a href="#">Другое действие</a></li>
				            <li><a href="#">Что-то еще</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Отдельная ссылка</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Еще одна отдельная ссылка</a></li>
				          </ul>
				        </li> -->
				      </ul>
				     <!--  <form class="navbar-form navbar-left" role="search">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Search">
				        </div>
				        <button type="submit" class="btn btn-default">Отправить</button>
				      </form> -->
				      <ul class="nav navbar-nav navbar-right">
				        <!-- <li><a href="#">Ссылка</a></li> -->
						<li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				          	Контакты <b class="caret"></b></a>
				          <ul class="dropdown-menu">
				            <li>
				            	<a href="https://github.com/Padilo300" target="_blank">
				            		<i class="fa fa-github" aria-hidden="true"></i> GitHab
				            	</a>
				            </li>
				            <li>
				            	<a href="https://www.facebook.com/profile.php?id=100005729088750" target="_blank">
				            		<i class="fa fa-facebook-official" aria-hidden="true"></i>	Facebook
				            	</a>
				            </li>
				            <li>
				            	<a href="https://plus.google.com/u/0/+%D0%9A%D0%BE%D1%81%D1%82%D1%8F%D0%9F%D0%B0%D0%B4%D0%B8%D0%BB%D0%BE" target="_blank">
				            		<i class="fa fa-google-plus-official" aria-hidden="true"></i> Gmail
				            	</a>
				            </li>
				            <li>
				            	<a href="https://www.instagram.com/konstantin_padilo/?hl=ru" target="_blank">
				            		<i class="fa fa-instagram" aria-hidden="true"></i> Instagram
				            	</a>
				            </li>
				            <li class="divider"></li>
				            <li>
				            	<a href=":tel">
				            		<i class="fa fa-phone" aria-hidden="true"></i> +380966979966
				            	</a>
				            </li>
				          </ul>
				        </li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
				<div id="wrap-conteiner">
					<div id="conteiner-ajax" data-class="summary" class="row">
		  				<div class="col-lg-12">
		  					<div class="row">
		  						<div class="col-lg-4">
		  							<div class="my-foto">
		  								<div class="glitch glitch--style-6">
											<div class="glitch__img"></div>
											<div class="glitch__img"></div>
											<div class="glitch__img"></div>
											<div class="glitch__img"></div>
											<div class="glitch__img"></div>
										</div>
		  							</div>
		  						</div>
		  						<div class="col-lg-7 aboute-me">
		  							<article>
			  							<h1 class="text-center">Падило Константин Русланович</h1>
			  							<h2 class="text-center">Full Stack Developer</h2>
			  							<ul>
			  								<li>Дата рождения: 06.11.1994 (23 года)</li>
			  								<li>Регион: Украина г.Днепр</li>
											<li>Телефон: <a href="tel:0677969966">+380677969966</a></li>
											<li>
												Эл.почта: 
												<a href="mailto:padilo300@gmail.com">
													padilo300@gmail.com
												</a>
											</li>
			  							</ul>
			  							<p class="text-justyfy">
			  								<h4 class="text-center">
                          <i>
                            Моя цель - стать лучшим в своем деле. 
                          </i>
                        </h4>
			  							</p>
                      <p class="text-justify">
                        Администрирую <a target="_blank" href="https://ru.wikipedia.org/wiki/Linux">Linux</a>, имею опыт сборки системы с "нуля", разграничения прав пользователей, и групп.
                        Также имею опыт создания сервера в связке (<a href="https://ru.wikipedia.org/wiki/LAMP" target="_blank">LAMP</a>) и организации доступа к серверу по SSH, и SFTP.
                        Владею bash, пишу скрипты для решения простых задач.
                        В качестве домашней ОС использую дистрибутив Debian9 (окружение LXDE).
                        <br>
                        <br>
                        Обладаю опытом решения задач программирования, и эффективного конструирования базы данных, 
                        для динамических web-сайтов, и web-приложений. 
                        <br>
                        <br>
                        В качестве серверного языка использую PHP, придерживаюсь ООП, соблюдаю чистоту кода, и оставляю максимально комментариев.
                        <br>
                        <br>
                        Клиентскую часть собираю в GULP, хорошо владею SASS синтаксисом,  большое количество заготовок протестированного кода, для типовых задач. 
                        Особое внимание уделяю показателю google pagespeed, мои проекты не получают оценку ниже 80/100.
                        <br>
                        Опыт web разработки более года - фриланс.
                      </p>
		  							</article>
		  					</div><!--col-lg-7-->
		  					<div class="col-lg-12">
		  						<h2 class="text-center">Мой стэк</h2>
		  						<p class="text-center">Навыки и инструменты которыми, Я владею и использую на практике:</p>
		  						<ul class="skils" id="skils">
		  							<li>
		  								<div class="progress-skils bg_aqva triangle-bottomleft-c_aqva" data-lavel="90" data-bg_color="#00f" >
		  									HTML5, CSS3
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_yellow triangle-bottomleft" data-lavel="70" data-bg_color="#00f" >
		  									JavaScript
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_ligth-blue triangle-bottomleft" data-lavel="80" data-bg_color="#00f" >
		  									jQuery
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_ligth-blue triangle-bottomleft" data-lavel="90" data-bg_color="#00f" >
		  									JSON
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_ligth-red triangle-bottomleft" data-lavel="90" data-bg_color="#00f" >
		  									GULP
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_pink triangle-bottomleft" data-lavel="70" data-bg_color="#00f" >
		  									SASS
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_strong-blue triangle-bottomleft" data-lavel="60" data-bg_color="#00f" >
		  									PHP-5/7
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_silver triangle-bottomleft" data-lavel="75" data-bg_color="#00f" >
		  									SQL
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_krem-blue triangle-bottomleft" data-lavel="85" data-bg_color="#00f" >
		  									Bootstrap 3
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_ligth-blue triangle-bottomleft" data-lavel="90" data-bg_color="#00f" >
		  									PSD
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_strong-blue triangle-bottomleft" data-lavel="65" data-bg_color="#00f" >
		  									WordPress
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_aqva triangle-bottomleft-c_aqva" data-lavel="65" data-bg_color="#00f" >
		  									Opencart
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils bg_green triangle-bottomleft" data-lavel="50" data-bg_color="#00f" >
		  									Linux
		  								</div>
		  							</li>
		  							<li>
		  								<div class="progress-skils  bg_ligth-red triangle-bottomleft" data-lavel="60" data-bg_color="#00f">
		  									Git
		  								</div>
		  							</li>
		  						</ul>
		  					</div>
		  				</div>
		  			</div>
	  			</div><!--end #conteiner-ajax-->
  			</div><!--end #wrap-conteiner-->
  			<br>
  			<br>
  			<br>
  		<footer id="footer">
		    <p class="text-center">
		      <a  target="_blank" href="#" class="text-center" title="Дизайн и программирование - Падило Константин.">Padilo
			     <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI1NiwzNC4yOTdMMCw0NzcuNzAzaDUxMkwyNTYsMzQuMjk3eiBNMjU2LDc2Ljk2OWwyMTkuMDQ3LDM3OS40MDZIMzYuOTUzTDI1Niw3Ni45Njl6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
		      </a>
		    </p>
  		</footer>
  		</div>
  	</div>
  </div>

    
    <!-- <script src="js/jquery-3.3.1.min.js"></script> -->
    <!-- <script src="js/bootstrap.js"></script>
  	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/user_script.js"></script> -->
	<script>
    	if(function(t,e){"use strict";"object"==typeof module&&"object"==typeof module.exports?module.exports=t.document?e(t,!0):function(t){if(!t.document)throw new Error("jQuery requires a window with a document");return e(t)}:e(t)}("undefined"!=typeof window?window:this,function(t,e){"use strict";function n(t,e,n){var i,o=(e=e||st).createElement("script");if(o.text=t,n)for(i in xt)n[i]&&(o[i]=n[i]);e.head.appendChild(o).parentNode.removeChild(o)}function i(t){return null==t?t+"":"object"==typeof t||"function"==typeof t?pt[dt.call(t)]||"object":typeof t}function o(t){var e=!!t&&"length"in t&&t.length,n=i(t);return!yt(t)&&!bt(t)&&("array"===n||0===e||"number"==typeof e&&e>0&&e-1 in t)}function r(t,e){return t.nodeName&&t.nodeName.toLowerCase()===e.toLowerCase()}function s(t,e,n){return yt(e)?wt.grep(t,function(t,i){return!!e.call(t,i,t)!==n}):e.nodeType?wt.grep(t,function(t){return t===e!==n}):"string"!=typeof e?wt.grep(t,function(t){return ft.call(e,t)>-1!==n}):wt.filter(e,t,n)}function a(t,e){for(;(t=t[e])&&1!==t.nodeType;);return t}function l(t){var e={};return wt.each(t.match(It)||[],function(t,n){e[n]=!0}),e}function u(t){return t}function c(t){throw t}function f(t,e,n,i){var o;try{t&&yt(o=t.promise)?o.call(t).done(e).fail(n):t&&yt(o=t.then)?o.call(t,e,n):e.apply(void 0,[t].slice(i))}catch(t){n.apply(void 0,[t])}}function p(){st.removeEventListener("DOMContentLoaded",p),t.removeEventListener("load",p),wt.ready()}function d(t,e){return e.toUpperCase()}function h(t){return t.replace(Rt,"ms-").replace(Pt,d)}function g(){this.expando=wt.expando+g.uid++}function v(t){return"true"===t||"false"!==t&&("null"===t?null:t===+t+""?+t:Bt.test(t)?JSON.parse(t):t)}function m(t,e,n){var i;if(void 0===n&&1===t.nodeType)if(i="data-"+e.replace(Ft,"-$&").toLowerCase(),"string"==typeof(n=t.getAttribute(i))){try{n=v(n)}catch(t){}Mt.set(t,e,n)}else n=void 0;return n}function y(t,e,n,i){var o,r,s=20,a=i?function(){return i.cur()}:function(){return wt.css(t,e,"")},l=a(),u=n&&n[3]||(wt.cssNumber[e]?"":"px"),c=(wt.cssNumber[e]||"px"!==u&&+l)&&Ut.exec(wt.css(t,e));if(c&&c[3]!==u){for(l/=2,u=u||c[3],c=+l||1;s--;)wt.style(t,e,c+u),(1-r)*(1-(r=a()/l||.5))<=0&&(s=0),c/=r;c*=2,wt.style(t,e,c+u),n=n||[]}return n&&(c=+c||+l||0,o=n[1]?c+(n[1]+1)*n[2]:+n[2],i&&(i.unit=u,i.start=c,i.end=o)),o}function b(t){var e,n=t.ownerDocument,i=t.nodeName,o=Xt[i];return o||(e=n.body.appendChild(n.createElement(i)),o=wt.css(e,"display"),e.parentNode.removeChild(e),"none"===o&&(o="block"),Xt[i]=o,o)}function x(t,e){for(var n,i,o=[],r=0,s=t.length;r<s;r++)(i=t[r]).style&&(n=i.style.display,e?("none"===n&&(o[r]=Wt.get(i,"display")||null,o[r]||(i.style.display="")),""===i.style.display&&Qt(i)&&(o[r]=b(i))):"none"!==n&&(o[r]="none",Wt.set(i,"display",n)));for(r=0;r<s;r++)null!=o[r]&&(t[r].style.display=o[r]);return t}function w(t,e){var n;return n=void 0!==t.getElementsByTagName?t.getElementsByTagName(e||"*"):void 0!==t.querySelectorAll?t.querySelectorAll(e||"*"):[],void 0===e||e&&r(t,e)?wt.merge([t],n):n}function T(t,e){for(var n=0,i=t.length;n<i;n++)Wt.set(t[n],"globalEval",!e||Wt.get(e[n],"globalEval"))}function C(t,e,n,o,r){for(var s,a,l,u,c,f,p=e.createDocumentFragment(),d=[],h=0,g=t.length;h<g;h++)if((s=t[h])||0===s)if("object"===i(s))wt.merge(d,s.nodeType?[s]:s);else if(Zt.test(s)){for(a=a||p.appendChild(e.createElement("div")),l=(Yt.exec(s)||["",""])[1].toLowerCase(),u=Kt[l]||Kt._default,a.innerHTML=u[1]+wt.htmlPrefilter(s)+u[2],f=u[0];f--;)a=a.lastChild;wt.merge(d,a.childNodes),(a=p.firstChild).textContent=""}else d.push(e.createTextNode(s));for(p.textContent="",h=0;s=d[h++];)if(o&&wt.inArray(s,o)>-1)r&&r.push(s);else if(c=wt.contains(s.ownerDocument,s),a=w(p.appendChild(s),"script"),c&&T(a),n)for(f=0;s=a[f++];)Jt.test(s.type||"")&&n.push(s);return p}function E(){return!0}function k(){return!1}function S(){try{return st.activeElement}catch(t){}}function D(t,e,n,i,o,r){var s,a;if("object"==typeof e){"string"!=typeof n&&(i=i||n,n=void 0);for(a in e)D(t,a,n,i,e[a],r);return t}if(null==i&&null==o?(o=n,i=n=void 0):null==o&&("string"==typeof n?(o=i,i=void 0):(o=i,i=n,n=void 0)),!1===o)o=k;else if(!o)return t;return 1===r&&(s=o,(o=function(t){return wt().off(t),s.apply(this,arguments)}).guid=s.guid||(s.guid=wt.guid++)),t.each(function(){wt.event.add(this,e,o,i,n)})}function $(t,e){return r(t,"table")&&r(11!==e.nodeType?e:e.firstChild,"tr")?wt(t).children("tbody")[0]||t:t}function A(t){return t.type=(null!==t.getAttribute("type"))+"/"+t.type,t}function N(t){return"true/"===(t.type||"").slice(0,5)?t.type=t.type.slice(5):t.removeAttribute("type"),t}function j(t,e){var n,i,o,r,s,a,l,u;if(1===e.nodeType){if(Wt.hasData(t)&&(r=Wt.access(t),s=Wt.set(e,r),u=r.events)){delete s.handle,s.events={};for(o in u)for(n=0,i=u[o].length;n<i;n++)wt.event.add(e,o,u[o][n])}Mt.hasData(t)&&(a=Mt.access(t),l=wt.extend({},a),Mt.set(e,l))}}function I(t,e){var n=e.nodeName.toLowerCase();"input"===n&&Gt.test(t.type)?e.checked=t.checked:"input"!==n&&"textarea"!==n||(e.defaultValue=t.defaultValue)}function O(t,e,i,o){e=ut.apply([],e);var r,s,a,l,u,c,f=0,p=t.length,d=p-1,h=e[0],g=yt(h);if(g||p>1&&"string"==typeof h&&!mt.checkClone&&se.test(h))return t.each(function(n){var r=t.eq(n);g&&(e[0]=h.call(this,n,r.html())),O(r,e,i,o)});if(p&&(r=C(e,t[0].ownerDocument,!1,t,o),s=r.firstChild,1===r.childNodes.length&&(r=s),s||o)){for(l=(a=wt.map(w(r,"script"),A)).length;f<p;f++)u=r,f!==d&&(u=wt.clone(u,!0,!0),l&&wt.merge(a,w(u,"script"))),i.call(t[f],u,f);if(l)for(c=a[a.length-1].ownerDocument,wt.map(a,N),f=0;f<l;f++)u=a[f],Jt.test(u.type||"")&&!Wt.access(u,"globalEval")&&wt.contains(c,u)&&(u.src&&"module"!==(u.type||"").toLowerCase()?wt._evalUrl&&wt._evalUrl(u.src):n(u.textContent.replace(ae,""),c,u))}return t}function L(t,e,n){for(var i,o=e?wt.filter(e,t):t,r=0;null!=(i=o[r]);r++)n||1!==i.nodeType||wt.cleanData(w(i)),i.parentNode&&(n&&wt.contains(i.ownerDocument,i)&&T(w(i,"script")),i.parentNode.removeChild(i));return t}function q(t,e,n){var i,o,r,s,a=t.style;return(n=n||ue(t))&&(""!==(s=n.getPropertyValue(e)||n[e])||wt.contains(t.ownerDocument,t)||(s=wt.style(t,e)),!mt.pixelBoxStyles()&&le.test(s)&&ce.test(e)&&(i=a.width,o=a.minWidth,r=a.maxWidth,a.minWidth=a.maxWidth=a.width=s,s=n.width,a.width=i,a.minWidth=o,a.maxWidth=r)),void 0!==s?s+"":s}function R(t,e){return{get:function(){if(!t())return(this.get=e).apply(this,arguments);delete this.get}}}function P(t){if(t in ve)return t;for(var e=t[0].toUpperCase()+t.slice(1),n=ge.length;n--;)if((t=ge[n]+e)in ve)return t}function H(t){var e=wt.cssProps[t];return e||(e=wt.cssProps[t]=P(t)||t),e}function W(t,e,n){var i=Ut.exec(e);return i?Math.max(0,i[2]-(n||0))+(i[3]||"px"):e}function M(t,e,n,i,o,r){var s="width"===e?1:0,a=0,l=0;if(n===(i?"border":"content"))return 0;for(;s<4;s+=2)"margin"===n&&(l+=wt.css(t,n+zt[s],!0,o)),i?("content"===n&&(l-=wt.css(t,"padding"+zt[s],!0,o)),"margin"!==n&&(l-=wt.css(t,"border"+zt[s]+"Width",!0,o))):(l+=wt.css(t,"padding"+zt[s],!0,o),"padding"!==n?l+=wt.css(t,"border"+zt[s]+"Width",!0,o):a+=wt.css(t,"border"+zt[s]+"Width",!0,o));return!i&&r>=0&&(l+=Math.max(0,Math.ceil(t["offset"+e[0].toUpperCase()+e.slice(1)]-r-l-a-.5))),l}function B(t,e,n){var i=ue(t),o=q(t,e,i),r="border-box"===wt.css(t,"boxSizing",!1,i),s=r;if(le.test(o)){if(!n)return o;o="auto"}return s=s&&(mt.boxSizingReliable()||o===t.style[e]),("auto"===o||!parseFloat(o)&&"inline"===wt.css(t,"display",!1,i))&&(o=t["offset"+e[0].toUpperCase()+e.slice(1)],s=!0),(o=parseFloat(o)||0)+M(t,e,n||(r?"border":"content"),s,i,o)+"px"}function F(t,e,n,i,o){return new F.prototype.init(t,e,n,i,o)}function _(){ye&&(!1===st.hidden&&t.requestAnimationFrame?t.requestAnimationFrame(_):t.setTimeout(_,wt.fx.interval),wt.fx.tick())}function U(){return t.setTimeout(function(){me=void 0}),me=Date.now()}function z(t,e){var n,i=0,o={height:t};for(e=e?1:0;i<4;i+=2-e)o["margin"+(n=zt[i])]=o["padding"+n]=t;return e&&(o.opacity=o.width=t),o}function Q(t,e,n){for(var i,o=(G.tweeners[e]||[]).concat(G.tweeners["*"]),r=0,s=o.length;r<s;r++)if(i=o[r].call(n,e,t))return i}function V(t,e,n){var i,o,r,s,a,l,u,c,f="width"in e||"height"in e,p=this,d={},h=t.style,g=t.nodeType&&Qt(t),v=Wt.get(t,"fxshow");n.queue||(null==(s=wt._queueHooks(t,"fx")).unqueued&&(s.unqueued=0,a=s.empty.fire,s.empty.fire=function(){s.unqueued||a()}),s.unqueued++,p.always(function(){p.always(function(){s.unqueued--,wt.queue(t,"fx").length||s.empty.fire()})}));for(i in e)if(o=e[i],be.test(o)){if(delete e[i],r=r||"toggle"===o,o===(g?"hide":"show")){if("show"!==o||!v||void 0===v[i])continue;g=!0}d[i]=v&&v[i]||wt.style(t,i)}if((l=!wt.isEmptyObject(e))||!wt.isEmptyObject(d)){f&&1===t.nodeType&&(n.overflow=[h.overflow,h.overflowX,h.overflowY],null==(u=v&&v.display)&&(u=Wt.get(t,"display")),"none"===(c=wt.css(t,"display"))&&(u?c=u:(x([t],!0),u=t.style.display||u,c=wt.css(t,"display"),x([t]))),("inline"===c||"inline-block"===c&&null!=u)&&"none"===wt.css(t,"float")&&(l||(p.done(function(){h.display=u}),null==u&&(c=h.display,u="none"===c?"":c)),h.display="inline-block")),n.overflow&&(h.overflow="hidden",p.always(function(){h.overflow=n.overflow[0],h.overflowX=n.overflow[1],h.overflowY=n.overflow[2]})),l=!1;for(i in d)l||(v?"hidden"in v&&(g=v.hidden):v=Wt.access(t,"fxshow",{display:u}),r&&(v.hidden=!g),g&&x([t],!0),p.done(function(){g||x([t]),Wt.remove(t,"fxshow");for(i in d)wt.style(t,i,d[i])})),l=Q(g?v[i]:0,i,p),i in v||(v[i]=l.start,g&&(l.end=l.start,l.start=0))}}function X(t,e){var n,i,o,r,s;for(n in t)if(i=h(n),o=e[i],r=t[n],Array.isArray(r)&&(o=r[1],r=t[n]=r[0]),n!==i&&(t[i]=r,delete t[n]),(s=wt.cssHooks[i])&&"expand"in s){r=s.expand(r),delete t[i];for(n in r)n in t||(t[n]=r[n],e[n]=o)}else e[i]=o}function G(t,e,n){var i,o,r=0,s=G.prefilters.length,a=wt.Deferred().always(function(){delete l.elem}),l=function(){if(o)return!1;for(var e=me||U(),n=Math.max(0,u.startTime+u.duration-e),i=1-(n/u.duration||0),r=0,s=u.tweens.length;r<s;r++)u.tweens[r].run(i);return a.notifyWith(t,[u,i,n]),i<1&&s?n:(s||a.notifyWith(t,[u,1,0]),a.resolveWith(t,[u]),!1)},u=a.promise({elem:t,props:wt.extend({},e),opts:wt.extend(!0,{specialEasing:{},easing:wt.easing._default},n),originalProperties:e,originalOptions:n,startTime:me||U(),duration:n.duration,tweens:[],createTween:function(e,n){var i=wt.Tween(t,u.opts,e,n,u.opts.specialEasing[e]||u.opts.easing);return u.tweens.push(i),i},stop:function(e){var n=0,i=e?u.tweens.length:0;if(o)return this;for(o=!0;n<i;n++)u.tweens[n].run(1);return e?(a.notifyWith(t,[u,1,0]),a.resolveWith(t,[u,e])):a.rejectWith(t,[u,e]),this}}),c=u.props;for(X(c,u.opts.specialEasing);r<s;r++)if(i=G.prefilters[r].call(u,t,c,u.opts))return yt(i.stop)&&(wt._queueHooks(u.elem,u.opts.queue).stop=i.stop.bind(i)),i;return wt.map(c,Q,u),yt(u.opts.start)&&u.opts.start.call(t,u),u.progress(u.opts.progress).done(u.opts.done,u.opts.complete).fail(u.opts.fail).always(u.opts.always),wt.fx.timer(wt.extend(l,{elem:t,anim:u,queue:u.opts.queue})),u}function Y(t){return(t.match(It)||[]).join(" ")}function J(t){return t.getAttribute&&t.getAttribute("class")||""}function K(t){return Array.isArray(t)?t:"string"==typeof t?t.match(It)||[]:[]}function Z(t,e,n,o){var r;if(Array.isArray(e))wt.each(e,function(e,i){n||je.test(t)?o(t,i):Z(t+"["+("object"==typeof i&&null!=i?e:"")+"]",i,n,o)});else if(n||"object"!==i(e))o(t,e);else for(r in e)Z(t+"["+r+"]",e[r],n,o)}function tt(t){return function(e,n){"string"!=typeof e&&(n=e,e="*");var i,o=0,r=e.toLowerCase().match(It)||[];if(yt(n))for(;i=r[o++];)"+"===i[0]?(i=i.slice(1)||"*",(t[i]=t[i]||[]).unshift(n)):(t[i]=t[i]||[]).push(n)}}function et(t,e,n,i){function o(a){var l;return r[a]=!0,wt.each(t[a]||[],function(t,a){var u=a(e,n,i);return"string"!=typeof u||s||r[u]?s?!(l=u):void 0:(e.dataTypes.unshift(u),o(u),!1)}),l}var r={},s=t===_e;return o(e.dataTypes[0])||!r["*"]&&o("*")}function nt(t,e){var n,i,o=wt.ajaxSettings.flatOptions||{};for(n in e)void 0!==e[n]&&((o[n]?t:i||(i={}))[n]=e[n]);return i&&wt.extend(!0,t,i),t}function it(t,e,n){for(var i,o,r,s,a=t.contents,l=t.dataTypes;"*"===l[0];)l.shift(),void 0===i&&(i=t.mimeType||e.getResponseHeader("Content-Type"));if(i)for(o in a)if(a[o]&&a[o].test(i)){l.unshift(o);break}if(l[0]in n)r=l[0];else{for(o in n){if(!l[0]||t.converters[o+" "+l[0]]){r=o;break}s||(s=o)}r=r||s}if(r)return r!==l[0]&&l.unshift(r),n[r]}function ot(t,e,n,i){var o,r,s,a,l,u={},c=t.dataTypes.slice();if(c[1])for(s in t.converters)u[s.toLowerCase()]=t.converters[s];for(r=c.shift();r;)if(t.responseFields[r]&&(n[t.responseFields[r]]=e),!l&&i&&t.dataFilter&&(e=t.dataFilter(e,t.dataType)),l=r,r=c.shift())if("*"===r)r=l;else if("*"!==l&&l!==r){if(!(s=u[l+" "+r]||u["* "+r]))for(o in u)if((a=o.split(" "))[1]===r&&(s=u[l+" "+a[0]]||u["* "+a[0]])){!0===s?s=u[o]:!0!==u[o]&&(r=a[0],c.unshift(a[1]));break}if(!0!==s)if(s&&t.throws)e=s(e);else try{e=s(e)}catch(t){return{state:"parsererror",error:s?t:"No conversion from "+l+" to "+r}}}return{state:"success",data:e}}var rt=[],st=t.document,at=Object.getPrototypeOf,lt=rt.slice,ut=rt.concat,ct=rt.push,ft=rt.indexOf,pt={},dt=pt.toString,ht=pt.hasOwnProperty,gt=ht.toString,vt=gt.call(Object),mt={},yt=function(t){return"function"==typeof t&&"number"!=typeof t.nodeType},bt=function(t){return null!=t&&t===t.window},xt={type:!0,src:!0,noModule:!0},wt=function(t,e){return new wt.fn.init(t,e)},Tt=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;wt.fn=wt.prototype={jquery:"3.3.1",constructor:wt,length:0,toArray:function(){return lt.call(this)},get:function(t){return null==t?lt.call(this):t<0?this[t+this.length]:this[t]},pushStack:function(t){var e=wt.merge(this.constructor(),t);return e.prevObject=this,e},each:function(t){return wt.each(this,t)},map:function(t){return this.pushStack(wt.map(this,function(e,n){return t.call(e,n,e)}))},slice:function(){return this.pushStack(lt.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(t){var e=this.length,n=+t+(t<0?e:0);return this.pushStack(n>=0&&n<e?[this[n]]:[])},end:function(){return this.prevObject||this.constructor()},push:ct,sort:rt.sort,splice:rt.splice},wt.extend=wt.fn.extend=function(){var t,e,n,i,o,r,s=arguments[0]||{},a=1,l=arguments.length,u=!1;for("boolean"==typeof s&&(u=s,s=arguments[a]||{},a++),"object"==typeof s||yt(s)||(s={}),a===l&&(s=this,a--);a<l;a++)if(null!=(t=arguments[a]))for(e in t)n=s[e],s!==(i=t[e])&&(u&&i&&(wt.isPlainObject(i)||(o=Array.isArray(i)))?(o?(o=!1,r=n&&Array.isArray(n)?n:[]):r=n&&wt.isPlainObject(n)?n:{},s[e]=wt.extend(u,r,i)):void 0!==i&&(s[e]=i));return s},wt.extend({expando:"jQuery"+("3.3.1"+Math.random()).replace(/\D/g,""),isReady:!0,error:function(t){throw new Error(t)},noop:function(){},isPlainObject:function(t){var e,n;return!(!t||"[object Object]"!==dt.call(t)||(e=at(t))&&("function"!=typeof(n=ht.call(e,"constructor")&&e.constructor)||gt.call(n)!==vt))},isEmptyObject:function(t){var e;for(e in t)return!1;return!0},globalEval:function(t){n(t)},each:function(t,e){var n,i=0;if(o(t))for(n=t.length;i<n&&!1!==e.call(t[i],i,t[i]);i++);else for(i in t)if(!1===e.call(t[i],i,t[i]))break;return t},trim:function(t){return null==t?"":(t+"").replace(Tt,"")},makeArray:function(t,e){var n=e||[];return null!=t&&(o(Object(t))?wt.merge(n,"string"==typeof t?[t]:t):ct.call(n,t)),n},inArray:function(t,e,n){return null==e?-1:ft.call(e,t,n)},merge:function(t,e){for(var n=+e.length,i=0,o=t.length;i<n;i++)t[o++]=e[i];return t.length=o,t},grep:function(t,e,n){for(var i=[],o=0,r=t.length,s=!n;o<r;o++)!e(t[o],o)!==s&&i.push(t[o]);return i},map:function(t,e,n){var i,r,s=0,a=[];if(o(t))for(i=t.length;s<i;s++)null!=(r=e(t[s],s,n))&&a.push(r);else for(s in t)null!=(r=e(t[s],s,n))&&a.push(r);return ut.apply([],a)},guid:1,support:mt}),"function"==typeof Symbol&&(wt.fn[Symbol.iterator]=rt[Symbol.iterator]),wt.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),function(t,e){pt["[object "+e+"]"]=e.toLowerCase()});var Ct=function(t){function e(t,e,n,i){var o,r,s,a,l,u,c,p=e&&e.ownerDocument,h=e?e.nodeType:9;if(n=n||[],"string"!=typeof t||!t||1!==h&&9!==h&&11!==h)return n;if(!i&&((e?e.ownerDocument||e:B)!==O&&I(e),e=e||O,q)){if(11!==h&&(l=mt.exec(t)))if(o=l[1]){if(9===h){if(!(s=e.getElementById(o)))return n;if(s.id===o)return n.push(s),n}else if(p&&(s=p.getElementById(o))&&W(e,s)&&s.id===o)return n.push(s),n}else{if(l[2])return K.apply(n,e.getElementsByTagName(t)),n;if((o=l[3])&&T.getElementsByClassName&&e.getElementsByClassName)return K.apply(n,e.getElementsByClassName(o)),n}if(T.qsa&&!Q[t+" "]&&(!R||!R.test(t))){if(1!==h)p=e,c=t;else if("object"!==e.nodeName.toLowerCase()){for((a=e.getAttribute("id"))?a=a.replace(wt,Tt):e.setAttribute("id",a=M),r=(u=S(t)).length;r--;)u[r]="#"+a+" "+d(u[r]);c=u.join(","),p=yt.test(t)&&f(e.parentNode)||e}if(c)try{return K.apply(n,p.querySelectorAll(c)),n}catch(t){}finally{a===M&&e.removeAttribute("id")}}}return $(t.replace(at,"$1"),e,n,i)}function n(){function t(n,i){return e.push(n+" ")>C.cacheLength&&delete t[e.shift()],t[n+" "]=i}var e=[];return t}function i(t){return t[M]=!0,t}function o(t){var e=O.createElement("fieldset");try{return!!t(e)}catch(t){return!1}finally{e.parentNode&&e.parentNode.removeChild(e),e=null}}function r(t,e){for(var n=t.split("|"),i=n.length;i--;)C.attrHandle[n[i]]=e}function s(t,e){var n=e&&t,i=n&&1===t.nodeType&&1===e.nodeType&&t.sourceIndex-e.sourceIndex;if(i)return i;if(n)for(;n=n.nextSibling;)if(n===e)return-1;return t?1:-1}function a(t){return function(e){return"input"===e.nodeName.toLowerCase()&&e.type===t}}function l(t){return function(e){var n=e.nodeName.toLowerCase();return("input"===n||"button"===n)&&e.type===t}}function u(t){return function(e){return"form"in e?e.parentNode&&!1===e.disabled?"label"in e?"label"in e.parentNode?e.parentNode.disabled===t:e.disabled===t:e.isDisabled===t||e.isDisabled!==!t&&Et(e)===t:e.disabled===t:"label"in e&&e.disabled===t}}function c(t){return i(function(e){return e=+e,i(function(n,i){for(var o,r=t([],n.length,e),s=r.length;s--;)n[o=r[s]]&&(n[o]=!(i[o]=n[o]))})})}function f(t){return t&&void 0!==t.getElementsByTagName&&t}function p(){}function d(t){for(var e=0,n=t.length,i="";e<n;e++)i+=t[e].value;return i}function h(t,e,n){var i=e.dir,o=e.next,r=o||i,s=n&&"parentNode"===r,a=_++;return e.first?function(e,n,o){for(;e=e[i];)if(1===e.nodeType||s)return t(e,n,o);return!1}:function(e,n,l){var u,c,f,p=[F,a];if(l){for(;e=e[i];)if((1===e.nodeType||s)&&t(e,n,l))return!0}else for(;e=e[i];)if(1===e.nodeType||s)if(f=e[M]||(e[M]={}),c=f[e.uniqueID]||(f[e.uniqueID]={}),o&&o===e.nodeName.toLowerCase())e=e[i]||e;else{if((u=c[r])&&u[0]===F&&u[1]===a)return p[2]=u[2];if(c[r]=p,p[2]=t(e,n,l))return!0}return!1}}function g(t){return t.length>1?function(e,n,i){for(var o=t.length;o--;)if(!t[o](e,n,i))return!1;return!0}:t[0]}function v(t,n,i){for(var o=0,r=n.length;o<r;o++)e(t,n[o],i);return i}function m(t,e,n,i,o){for(var r,s=[],a=0,l=t.length,u=null!=e;a<l;a++)(r=t[a])&&(n&&!n(r,i,o)||(s.push(r),u&&e.push(a)));return s}function y(t,e,n,o,r,s){return o&&!o[M]&&(o=y(o)),r&&!r[M]&&(r=y(r,s)),i(function(i,s,a,l){var u,c,f,p=[],d=[],h=s.length,g=i||v(e||"*",a.nodeType?[a]:a,[]),y=!t||!i&&e?g:m(g,p,t,a,l),b=n?r||(i?t:h||o)?[]:s:y;if(n&&n(y,b,a,l),o)for(u=m(b,d),o(u,[],a,l),c=u.length;c--;)(f=u[c])&&(b[d[c]]=!(y[d[c]]=f));if(i){if(r||t){if(r){for(u=[],c=b.length;c--;)(f=b[c])&&u.push(y[c]=f);r(null,b=[],u,l)}for(c=b.length;c--;)(f=b[c])&&(u=r?tt(i,f):p[c])>-1&&(i[u]=!(s[u]=f))}}else b=m(b===s?b.splice(h,b.length):b),r?r(null,s,b,l):K.apply(s,b)})}function b(t){for(var e,n,i,o=t.length,r=C.relative[t[0].type],s=r||C.relative[" "],a=r?1:0,l=h(function(t){return t===e},s,!0),u=h(function(t){return tt(e,t)>-1},s,!0),c=[function(t,n,i){var o=!r&&(i||n!==A)||((e=n).nodeType?l(t,n,i):u(t,n,i));return e=null,o}];a<o;a++)if(n=C.relative[t[a].type])c=[h(g(c),n)];else{if((n=C.filter[t[a].type].apply(null,t[a].matches))[M]){for(i=++a;i<o&&!C.relative[t[i].type];i++);return y(a>1&&g(c),a>1&&d(t.slice(0,a-1).concat({value:" "===t[a-2].type?"*":""})).replace(at,"$1"),n,a<i&&b(t.slice(a,i)),i<o&&b(t=t.slice(i)),i<o&&d(t))}c.push(n)}return g(c)}function x(t,n){var o=n.length>0,r=t.length>0,s=function(i,s,a,l,u){var c,f,p,d=0,h="0",g=i&&[],v=[],y=A,b=i||r&&C.find.TAG("*",u),x=F+=null==y?1:Math.random()||.1,w=b.length;for(u&&(A=s===O||s||u);h!==w&&null!=(c=b[h]);h++){if(r&&c){for(f=0,s||c.ownerDocument===O||(I(c),a=!q);p=t[f++];)if(p(c,s||O,a)){l.push(c);break}u&&(F=x)}o&&((c=!p&&c)&&d--,i&&g.push(c))}if(d+=h,o&&h!==d){for(f=0;p=n[f++];)p(g,v,s,a);if(i){if(d>0)for(;h--;)g[h]||v[h]||(v[h]=Y.call(l));v=m(v)}K.apply(l,v),u&&!i&&v.length>0&&d+n.length>1&&e.uniqueSort(l)}return u&&(F=x,A=y),g};return o?i(s):s}var w,T,C,E,k,S,D,$,A,N,j,I,O,L,q,R,P,H,W,M="sizzle"+1*new Date,B=t.document,F=0,_=0,U=n(),z=n(),Q=n(),V=function(t,e){return t===e&&(j=!0),0},X={}.hasOwnProperty,G=[],Y=G.pop,J=G.push,K=G.push,Z=G.slice,tt=function(t,e){for(var n=0,i=t.length;n<i;n++)if(t[n]===e)return n;return-1},et="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",nt="[\\x20\\t\\r\\n\\f]",it="(?:\\\\.|[\\w-]|[^\0-\\xa0])+",ot="\\["+nt+"*("+it+")(?:"+nt+"*([*^$|!~]?=)"+nt+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+it+"))|)"+nt+"*\\]",rt=":("+it+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+ot+")*)|.*)\\)|)",st=new RegExp(nt+"+","g"),at=new RegExp("^"+nt+"+|((?:^|[^\\\\])(?:\\\\.)*)"+nt+"+$","g"),lt=new RegExp("^"+nt+"*,"+nt+"*"),ut=new RegExp("^"+nt+"*([>+~]|"+nt+")"+nt+"*"),ct=new RegExp("="+nt+"*([^\\]'\"]*?)"+nt+"*\\]","g"),ft=new RegExp(rt),pt=new RegExp("^"+it+"$"),dt={ID:new RegExp("^#("+it+")"),CLASS:new RegExp("^\\.("+it+")"),TAG:new RegExp("^("+it+"|[*])"),ATTR:new RegExp("^"+ot),PSEUDO:new RegExp("^"+rt),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+nt+"*(even|odd|(([+-]|)(\\d*)n|)"+nt+"*(?:([+-]|)"+nt+"*(\\d+)|))"+nt+"*\\)|)","i"),bool:new RegExp("^(?:"+et+")$","i"),needsContext:new RegExp("^"+nt+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+nt+"*((?:-\\d)?\\d*)"+nt+"*\\)|)(?=[^-]|$)","i")},ht=/^(?:input|select|textarea|button)$/i,gt=/^h\d$/i,vt=/^[^{]+\{\s*\[native \w/,mt=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,yt=/[+~]/,bt=new RegExp("\\\\([\\da-f]{1,6}"+nt+"?|("+nt+")|.)","ig"),xt=function(t,e,n){var i="0x"+e-65536;return i!==i||n?e:i<0?String.fromCharCode(i+65536):String.fromCharCode(i>>10|55296,1023&i|56320)},wt=/([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,Tt=function(t,e){return e?"\0"===t?"�":t.slice(0,-1)+"\\"+t.charCodeAt(t.length-1).toString(16)+" ":"\\"+t},Ct=function(){I()},Et=h(function(t){return!0===t.disabled&&("form"in t||"label"in t)},{dir:"parentNode",next:"legend"});try{K.apply(G=Z.call(B.childNodes),B.childNodes),G[B.childNodes.length].nodeType}catch(t){K={apply:G.length?function(t,e){J.apply(t,Z.call(e))}:function(t,e){for(var n=t.length,i=0;t[n++]=e[i++];);t.length=n-1}}}T=e.support={},k=e.isXML=function(t){var e=t&&(t.ownerDocument||t).documentElement;return!!e&&"HTML"!==e.nodeName},I=e.setDocument=function(t){var e,n,i=t?t.ownerDocument||t:B;return i!==O&&9===i.nodeType&&i.documentElement?(O=i,L=O.documentElement,q=!k(O),B!==O&&(n=O.defaultView)&&n.top!==n&&(n.addEventListener?n.addEventListener("unload",Ct,!1):n.attachEvent&&n.attachEvent("onunload",Ct)),T.attributes=o(function(t){return t.className="i",!t.getAttribute("className")}),T.getElementsByTagName=o(function(t){return t.appendChild(O.createComment("")),!t.getElementsByTagName("*").length}),T.getElementsByClassName=vt.test(O.getElementsByClassName),T.getById=o(function(t){return L.appendChild(t).id=M,!O.getElementsByName||!O.getElementsByName(M).length}),T.getById?(C.filter.ID=function(t){var e=t.replace(bt,xt);return function(t){return t.getAttribute("id")===e}},C.find.ID=function(t,e){if(void 0!==e.getElementById&&q){var n=e.getElementById(t);return n?[n]:[]}}):(C.filter.ID=function(t){var e=t.replace(bt,xt);return function(t){var n=void 0!==t.getAttributeNode&&t.getAttributeNode("id");return n&&n.value===e}},C.find.ID=function(t,e){if(void 0!==e.getElementById&&q){var n,i,o,r=e.getElementById(t);if(r){if((n=r.getAttributeNode("id"))&&n.value===t)return[r];for(o=e.getElementsByName(t),i=0;r=o[i++];)if((n=r.getAttributeNode("id"))&&n.value===t)return[r]}return[]}}),C.find.TAG=T.getElementsByTagName?function(t,e){return void 0!==e.getElementsByTagName?e.getElementsByTagName(t):T.qsa?e.querySelectorAll(t):void 0}:function(t,e){var n,i=[],o=0,r=e.getElementsByTagName(t);if("*"===t){for(;n=r[o++];)1===n.nodeType&&i.push(n);return i}return r},C.find.CLASS=T.getElementsByClassName&&function(t,e){if(void 0!==e.getElementsByClassName&&q)return e.getElementsByClassName(t)},P=[],R=[],(T.qsa=vt.test(O.querySelectorAll))&&(o(function(t){L.appendChild(t).innerHTML="<a id='"+M+"'></a><select id='"+M+"-\r\\' msallowcapture=''><option selected=''></option></select>",t.querySelectorAll("[msallowcapture^='']").length&&R.push("[*^$]="+nt+"*(?:''|\"\")"),t.querySelectorAll("[selected]").length||R.push("\\["+nt+"*(?:value|"+et+")"),t.querySelectorAll("[id~="+M+"-]").length||R.push("~="),t.querySelectorAll(":checked").length||R.push(":checked"),t.querySelectorAll("a#"+M+"+*").length||R.push(".#.+[+~]")}),o(function(t){t.innerHTML="<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";var e=O.createElement("input");e.setAttribute("type","hidden"),t.appendChild(e).setAttribute("name","D"),t.querySelectorAll("[name=d]").length&&R.push("name"+nt+"*[*^$|!~]?="),2!==t.querySelectorAll(":enabled").length&&R.push(":enabled",":disabled"),L.appendChild(t).disabled=!0,2!==t.querySelectorAll(":disabled").length&&R.push(":enabled",":disabled"),t.querySelectorAll("*,:x"),R.push(",.*:")})),(T.matchesSelector=vt.test(H=L.matches||L.webkitMatchesSelector||L.mozMatchesSelector||L.oMatchesSelector||L.msMatchesSelector))&&o(function(t){T.disconnectedMatch=H.call(t,"*"),H.call(t,"[s!='']:x"),P.push("!=",rt)}),R=R.length&&new RegExp(R.join("|")),P=P.length&&new RegExp(P.join("|")),e=vt.test(L.compareDocumentPosition),W=e||vt.test(L.contains)?function(t,e){var n=9===t.nodeType?t.documentElement:t,i=e&&e.parentNode;return t===i||!(!i||1!==i.nodeType||!(n.contains?n.contains(i):t.compareDocumentPosition&&16&t.compareDocumentPosition(i)))}:function(t,e){if(e)for(;e=e.parentNode;)if(e===t)return!0;return!1},V=e?function(t,e){if(t===e)return j=!0,0;var n=!t.compareDocumentPosition-!e.compareDocumentPosition;return n||(1&(n=(t.ownerDocument||t)===(e.ownerDocument||e)?t.compareDocumentPosition(e):1)||!T.sortDetached&&e.compareDocumentPosition(t)===n?t===O||t.ownerDocument===B&&W(B,t)?-1:e===O||e.ownerDocument===B&&W(B,e)?1:N?tt(N,t)-tt(N,e):0:4&n?-1:1)}:function(t,e){if(t===e)return j=!0,0;var n,i=0,o=t.parentNode,r=e.parentNode,a=[t],l=[e];if(!o||!r)return t===O?-1:e===O?1:o?-1:r?1:N?tt(N,t)-tt(N,e):0;if(o===r)return s(t,e);for(n=t;n=n.parentNode;)a.unshift(n);for(n=e;n=n.parentNode;)l.unshift(n);for(;a[i]===l[i];)i++;return i?s(a[i],l[i]):a[i]===B?-1:l[i]===B?1:0},O):O},e.matches=function(t,n){return e(t,null,null,n)},e.matchesSelector=function(t,n){if((t.ownerDocument||t)!==O&&I(t),n=n.replace(ct,"='$1']"),T.matchesSelector&&q&&!Q[n+" "]&&(!P||!P.test(n))&&(!R||!R.test(n)))try{var i=H.call(t,n);if(i||T.disconnectedMatch||t.document&&11!==t.document.nodeType)return i}catch(t){}return e(n,O,null,[t]).length>0},e.contains=function(t,e){return(t.ownerDocument||t)!==O&&I(t),W(t,e)},e.attr=function(t,e){(t.ownerDocument||t)!==O&&I(t);var n=C.attrHandle[e.toLowerCase()],i=n&&X.call(C.attrHandle,e.toLowerCase())?n(t,e,!q):void 0;return void 0!==i?i:T.attributes||!q?t.getAttribute(e):(i=t.getAttributeNode(e))&&i.specified?i.value:null},e.escape=function(t){return(t+"").replace(wt,Tt)},e.error=function(t){throw new Error("Syntax error, unrecognized expression: "+t)},e.uniqueSort=function(t){var e,n=[],i=0,o=0;if(j=!T.detectDuplicates,N=!T.sortStable&&t.slice(0),t.sort(V),j){for(;e=t[o++];)e===t[o]&&(i=n.push(o));for(;i--;)t.splice(n[i],1)}return N=null,t},E=e.getText=function(t){var e,n="",i=0,o=t.nodeType;if(o){if(1===o||9===o||11===o){if("string"==typeof t.textContent)return t.textContent;for(t=t.firstChild;t;t=t.nextSibling)n+=E(t)}else if(3===o||4===o)return t.nodeValue}else for(;e=t[i++];)n+=E(e);return n},(C=e.selectors={cacheLength:50,createPseudo:i,match:dt,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(t){return t[1]=t[1].replace(bt,xt),t[3]=(t[3]||t[4]||t[5]||"").replace(bt,xt),"~="===t[2]&&(t[3]=" "+t[3]+" "),t.slice(0,4)},CHILD:function(t){return t[1]=t[1].toLowerCase(),"nth"===t[1].slice(0,3)?(t[3]||e.error(t[0]),t[4]=+(t[4]?t[5]+(t[6]||1):2*("even"===t[3]||"odd"===t[3])),t[5]=+(t[7]+t[8]||"odd"===t[3])):t[3]&&e.error(t[0]),t},PSEUDO:function(t){var e,n=!t[6]&&t[2];return dt.CHILD.test(t[0])?null:(t[3]?t[2]=t[4]||t[5]||"":n&&ft.test(n)&&(e=S(n,!0))&&(e=n.indexOf(")",n.length-e)-n.length)&&(t[0]=t[0].slice(0,e),t[2]=n.slice(0,e)),t.slice(0,3))}},filter:{TAG:function(t){var e=t.replace(bt,xt).toLowerCase();return"*"===t?function(){return!0}:function(t){return t.nodeName&&t.nodeName.toLowerCase()===e}},CLASS:function(t){var e=U[t+" "];return e||(e=new RegExp("(^|"+nt+")"+t+"("+nt+"|$)"))&&U(t,function(t){return e.test("string"==typeof t.className&&t.className||void 0!==t.getAttribute&&t.getAttribute("class")||"")})},ATTR:function(t,n,i){return function(o){var r=e.attr(o,t);return null==r?"!="===n:!n||(r+="","="===n?r===i:"!="===n?r!==i:"^="===n?i&&0===r.indexOf(i):"*="===n?i&&r.indexOf(i)>-1:"$="===n?i&&r.slice(-i.length)===i:"~="===n?(" "+r.replace(st," ")+" ").indexOf(i)>-1:"|="===n&&(r===i||r.slice(0,i.length+1)===i+"-"))}},CHILD:function(t,e,n,i,o){var r="nth"!==t.slice(0,3),s="last"!==t.slice(-4),a="of-type"===e;return 1===i&&0===o?function(t){return!!t.parentNode}:function(e,n,l){var u,c,f,p,d,h,g=r!==s?"nextSibling":"previousSibling",v=e.parentNode,m=a&&e.nodeName.toLowerCase(),y=!l&&!a,b=!1;if(v){if(r){for(;g;){for(p=e;p=p[g];)if(a?p.nodeName.toLowerCase()===m:1===p.nodeType)return!1;h=g="only"===t&&!h&&"nextSibling"}return!0}if(h=[s?v.firstChild:v.lastChild],s&&y){for(b=(d=(u=(c=(f=(p=v)[M]||(p[M]={}))[p.uniqueID]||(f[p.uniqueID]={}))[t]||[])[0]===F&&u[1])&&u[2],p=d&&v.childNodes[d];p=++d&&p&&p[g]||(b=d=0)||h.pop();)if(1===p.nodeType&&++b&&p===e){c[t]=[F,d,b];break}}else if(y&&(b=d=(u=(c=(f=(p=e)[M]||(p[M]={}))[p.uniqueID]||(f[p.uniqueID]={}))[t]||[])[0]===F&&u[1]),!1===b)for(;(p=++d&&p&&p[g]||(b=d=0)||h.pop())&&((a?p.nodeName.toLowerCase()!==m:1!==p.nodeType)||!++b||(y&&((c=(f=p[M]||(p[M]={}))[p.uniqueID]||(f[p.uniqueID]={}))[t]=[F,b]),p!==e)););return(b-=o)===i||b%i==0&&b/i>=0}}},PSEUDO:function(t,n){var o,r=C.pseudos[t]||C.setFilters[t.toLowerCase()]||e.error("unsupported pseudo: "+t);return r[M]?r(n):r.length>1?(o=[t,t,"",n],C.setFilters.hasOwnProperty(t.toLowerCase())?i(function(t,e){for(var i,o=r(t,n),s=o.length;s--;)t[i=tt(t,o[s])]=!(e[i]=o[s])}):function(t){return r(t,0,o)}):r}},pseudos:{not:i(function(t){var e=[],n=[],o=D(t.replace(at,"$1"));return o[M]?i(function(t,e,n,i){for(var r,s=o(t,null,i,[]),a=t.length;a--;)(r=s[a])&&(t[a]=!(e[a]=r))}):function(t,i,r){return e[0]=t,o(e,null,r,n),e[0]=null,!n.pop()}}),has:i(function(t){return function(n){return e(t,n).length>0}}),contains:i(function(t){return t=t.replace(bt,xt),function(e){return(e.textContent||e.innerText||E(e)).indexOf(t)>-1}}),lang:i(function(t){return pt.test(t||"")||e.error("unsupported lang: "+t),t=t.replace(bt,xt).toLowerCase(),function(e){var n;do{if(n=q?e.lang:e.getAttribute("xml:lang")||e.getAttribute("lang"))return(n=n.toLowerCase())===t||0===n.indexOf(t+"-")}while((e=e.parentNode)&&1===e.nodeType);return!1}}),target:function(e){var n=t.location&&t.location.hash;return n&&n.slice(1)===e.id},root:function(t){return t===L},focus:function(t){return t===O.activeElement&&(!O.hasFocus||O.hasFocus())&&!!(t.type||t.href||~t.tabIndex)},enabled:u(!1),disabled:u(!0),checked:function(t){var e=t.nodeName.toLowerCase();return"input"===e&&!!t.checked||"option"===e&&!!t.selected},selected:function(t){return t.parentNode&&t.parentNode.selectedIndex,!0===t.selected},empty:function(t){for(t=t.firstChild;t;t=t.nextSibling)if(t.nodeType<6)return!1;return!0},parent:function(t){return!C.pseudos.empty(t)},header:function(t){return gt.test(t.nodeName)},input:function(t){return ht.test(t.nodeName)},button:function(t){var e=t.nodeName.toLowerCase();return"input"===e&&"button"===t.type||"button"===e},text:function(t){var e;return"input"===t.nodeName.toLowerCase()&&"text"===t.type&&(null==(e=t.getAttribute("type"))||"text"===e.toLowerCase())},first:c(function(){return[0]}),last:c(function(t,e){return[e-1]}),eq:c(function(t,e,n){return[n<0?n+e:n]}),even:c(function(t,e){for(var n=0;n<e;n+=2)t.push(n);return t}),odd:c(function(t,e){for(var n=1;n<e;n+=2)t.push(n);return t}),lt:c(function(t,e,n){for(var i=n<0?n+e:n;--i>=0;)t.push(i);return t}),gt:c(function(t,e,n){for(var i=n<0?n+e:n;++i<e;)t.push(i);return t})}}).pseudos.nth=C.pseudos.eq;for(w in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})C.pseudos[w]=a(w);for(w in{submit:!0,reset:!0})C.pseudos[w]=l(w);return p.prototype=C.filters=C.pseudos,C.setFilters=new p,S=e.tokenize=function(t,n){var i,o,r,s,a,l,u,c=z[t+" "];if(c)return n?0:c.slice(0);for(a=t,l=[],u=C.preFilter;a;){i&&!(o=lt.exec(a))||(o&&(a=a.slice(o[0].length)||a),l.push(r=[])),i=!1,(o=ut.exec(a))&&(i=o.shift(),r.push({value:i,type:o[0].replace(at," ")}),a=a.slice(i.length));for(s in C.filter)!(o=dt[s].exec(a))||u[s]&&!(o=u[s](o))||(i=o.shift(),r.push({value:i,type:s,matches:o}),a=a.slice(i.length));if(!i)break}return n?a.length:a?e.error(t):z(t,l).slice(0)},D=e.compile=function(t,e){var n,i=[],o=[],r=Q[t+" "];if(!r){for(e||(e=S(t)),n=e.length;n--;)(r=b(e[n]))[M]?i.push(r):o.push(r);(r=Q(t,x(o,i))).selector=t}return r},$=e.select=function(t,e,n,i){var o,r,s,a,l,u="function"==typeof t&&t,c=!i&&S(t=u.selector||t);if(n=n||[],1===c.length){if((r=c[0]=c[0].slice(0)).length>2&&"ID"===(s=r[0]).type&&9===e.nodeType&&q&&C.relative[r[1].type]){if(!(e=(C.find.ID(s.matches[0].replace(bt,xt),e)||[])[0]))return n;u&&(e=e.parentNode),t=t.slice(r.shift().value.length)}for(o=dt.needsContext.test(t)?0:r.length;o--&&(s=r[o],!C.relative[a=s.type]);)if((l=C.find[a])&&(i=l(s.matches[0].replace(bt,xt),yt.test(r[0].type)&&f(e.parentNode)||e))){if(r.splice(o,1),!(t=i.length&&d(r)))return K.apply(n,i),n;break}}return(u||D(t,c))(i,e,!q,n,!e||yt.test(t)&&f(e.parentNode)||e),n},T.sortStable=M.split("").sort(V).join("")===M,T.detectDuplicates=!!j,I(),T.sortDetached=o(function(t){return 1&t.compareDocumentPosition(O.createElement("fieldset"))}),o(function(t){return t.innerHTML="<a href='#'></a>","#"===t.firstChild.getAttribute("href")})||r("type|href|height|width",function(t,e,n){if(!n)return t.getAttribute(e,"type"===e.toLowerCase()?1:2)}),T.attributes&&o(function(t){return t.innerHTML="<input/>",t.firstChild.setAttribute("value",""),""===t.firstChild.getAttribute("value")})||r("value",function(t,e,n){if(!n&&"input"===t.nodeName.toLowerCase())return t.defaultValue}),o(function(t){return null==t.getAttribute("disabled")})||r(et,function(t,e,n){var i;if(!n)return!0===t[e]?e.toLowerCase():(i=t.getAttributeNode(e))&&i.specified?i.value:null}),e}(t);wt.find=Ct,wt.expr=Ct.selectors,wt.expr[":"]=wt.expr.pseudos,wt.uniqueSort=wt.unique=Ct.uniqueSort,wt.text=Ct.getText,wt.isXMLDoc=Ct.isXML,wt.contains=Ct.contains,wt.escapeSelector=Ct.escape;var Et=function(t,e,n){for(var i=[],o=void 0!==n;(t=t[e])&&9!==t.nodeType;)if(1===t.nodeType){if(o&&wt(t).is(n))break;i.push(t)}return i},kt=function(t,e){for(var n=[];t;t=t.nextSibling)1===t.nodeType&&t!==e&&n.push(t);return n},St=wt.expr.match.needsContext,Dt=/^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;wt.filter=function(t,e,n){var i=e[0];return n&&(t=":not("+t+")"),1===e.length&&1===i.nodeType?wt.find.matchesSelector(i,t)?[i]:[]:wt.find.matches(t,wt.grep(e,function(t){return 1===t.nodeType}))},wt.fn.extend({find:function(t){var e,n,i=this.length,o=this;if("string"!=typeof t)return this.pushStack(wt(t).filter(function(){for(e=0;e<i;e++)if(wt.contains(o[e],this))return!0}));for(n=this.pushStack([]),e=0;e<i;e++)wt.find(t,o[e],n);return i>1?wt.uniqueSort(n):n},filter:function(t){return this.pushStack(s(this,t||[],!1))},not:function(t){return this.pushStack(s(this,t||[],!0))},is:function(t){return!!s(this,"string"==typeof t&&St.test(t)?wt(t):t||[],!1).length}});var $t,At=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;(wt.fn.init=function(t,e,n){var i,o;if(!t)return this;if(n=n||$t,"string"==typeof t){if(!(i="<"===t[0]&&">"===t[t.length-1]&&t.length>=3?[null,t,null]:At.exec(t))||!i[1]&&e)return!e||e.jquery?(e||n).find(t):this.constructor(e).find(t);if(i[1]){if(e=e instanceof wt?e[0]:e,wt.merge(this,wt.parseHTML(i[1],e&&e.nodeType?e.ownerDocument||e:st,!0)),Dt.test(i[1])&&wt.isPlainObject(e))for(i in e)yt(this[i])?this[i](e[i]):this.attr(i,e[i]);return this}return(o=st.getElementById(i[2]))&&(this[0]=o,this.length=1),this}return t.nodeType?(this[0]=t,this.length=1,this):yt(t)?void 0!==n.ready?n.ready(t):t(wt):wt.makeArray(t,this)}).prototype=wt.fn,$t=wt(st);var Nt=/^(?:parents|prev(?:Until|All))/,jt={children:!0,contents:!0,next:!0,prev:!0};wt.fn.extend({has:function(t){var e=wt(t,this),n=e.length;return this.filter(function(){for(var t=0;t<n;t++)if(wt.contains(this,e[t]))return!0})},closest:function(t,e){var n,i=0,o=this.length,r=[],s="string"!=typeof t&&wt(t);if(!St.test(t))for(;i<o;i++)for(n=this[i];n&&n!==e;n=n.parentNode)if(n.nodeType<11&&(s?s.index(n)>-1:1===n.nodeType&&wt.find.matchesSelector(n,t))){r.push(n);break}return this.pushStack(r.length>1?wt.uniqueSort(r):r)},index:function(t){return t?"string"==typeof t?ft.call(wt(t),this[0]):ft.call(this,t.jquery?t[0]:t):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(t,e){return this.pushStack(wt.uniqueSort(wt.merge(this.get(),wt(t,e))))},addBack:function(t){return this.add(null==t?this.prevObject:this.prevObject.filter(t))}}),wt.each({parent:function(t){var e=t.parentNode;return e&&11!==e.nodeType?e:null},parents:function(t){return Et(t,"parentNode")},parentsUntil:function(t,e,n){return Et(t,"parentNode",n)},next:function(t){return a(t,"nextSibling")},prev:function(t){return a(t,"previousSibling")},nextAll:function(t){return Et(t,"nextSibling")},prevAll:function(t){return Et(t,"previousSibling")},nextUntil:function(t,e,n){return Et(t,"nextSibling",n)},prevUntil:function(t,e,n){return Et(t,"previousSibling",n)},siblings:function(t){return kt((t.parentNode||{}).firstChild,t)},children:function(t){return kt(t.firstChild)},contents:function(t){return r(t,"iframe")?t.contentDocument:(r(t,"template")&&(t=t.content||t),wt.merge([],t.childNodes))}},function(t,e){wt.fn[t]=function(n,i){var o=wt.map(this,e,n);return"Until"!==t.slice(-5)&&(i=n),i&&"string"==typeof i&&(o=wt.filter(i,o)),this.length>1&&(jt[t]||wt.uniqueSort(o),Nt.test(t)&&o.reverse()),this.pushStack(o)}});var It=/[^\x20\t\r\n\f]+/g;wt.Callbacks=function(t){t="string"==typeof t?l(t):wt.extend({},t);var e,n,o,r,s=[],a=[],u=-1,c=function(){for(r=r||t.once,o=e=!0;a.length;u=-1)for(n=a.shift();++u<s.length;)!1===s[u].apply(n[0],n[1])&&t.stopOnFalse&&(u=s.length,n=!1);t.memory||(n=!1),e=!1,r&&(s=n?[]:"")},f={add:function(){return s&&(n&&!e&&(u=s.length-1,a.push(n)),function e(n){wt.each(n,function(n,o){yt(o)?t.unique&&f.has(o)||s.push(o):o&&o.length&&"string"!==i(o)&&e(o)})}(arguments),n&&!e&&c()),this},remove:function(){return wt.each(arguments,function(t,e){for(var n;(n=wt.inArray(e,s,n))>-1;)s.splice(n,1),n<=u&&u--}),this},has:function(t){return t?wt.inArray(t,s)>-1:s.length>0},empty:function(){return s&&(s=[]),this},disable:function(){return r=a=[],s=n="",this},disabled:function(){return!s},lock:function(){return r=a=[],n||e||(s=n=""),this},locked:function(){return!!r},fireWith:function(t,n){return r||(n=[t,(n=n||[]).slice?n.slice():n],a.push(n),e||c()),this},fire:function(){return f.fireWith(this,arguments),this},fired:function(){return!!o}};return f},wt.extend({Deferred:function(e){var n=[["notify","progress",wt.Callbacks("memory"),wt.Callbacks("memory"),2],["resolve","done",wt.Callbacks("once memory"),wt.Callbacks("once memory"),0,"resolved"],["reject","fail",wt.Callbacks("once memory"),wt.Callbacks("once memory"),1,"rejected"]],i="pending",o={state:function(){return i},always:function(){return r.done(arguments).fail(arguments),this},catch:function(t){return o.then(null,t)},pipe:function(){var t=arguments;return wt.Deferred(function(e){wt.each(n,function(n,i){var o=yt(t[i[4]])&&t[i[4]];r[i[1]](function(){var t=o&&o.apply(this,arguments);t&&yt(t.promise)?t.promise().progress(e.notify).done(e.resolve).fail(e.reject):e[i[0]+"With"](this,o?[t]:arguments)})}),t=null}).promise()},then:function(e,i,o){function r(e,n,i,o){return function(){var a=this,l=arguments,f=function(){var t,f;if(!(e<s)){if((t=i.apply(a,l))===n.promise())throw new TypeError("Thenable self-resolution");f=t&&("object"==typeof t||"function"==typeof t)&&t.then,yt(f)?o?f.call(t,r(s,n,u,o),r(s,n,c,o)):(s++,f.call(t,r(s,n,u,o),r(s,n,c,o),r(s,n,u,n.notifyWith))):(i!==u&&(a=void 0,l=[t]),(o||n.resolveWith)(a,l))}},p=o?f:function(){try{f()}catch(t){wt.Deferred.exceptionHook&&wt.Deferred.exceptionHook(t,p.stackTrace),e+1>=s&&(i!==c&&(a=void 0,l=[t]),n.rejectWith(a,l))}};e?p():(wt.Deferred.getStackHook&&(p.stackTrace=wt.Deferred.getStackHook()),t.setTimeout(p))}}var s=0;return wt.Deferred(function(t){n[0][3].add(r(0,t,yt(o)?o:u,t.notifyWith)),n[1][3].add(r(0,t,yt(e)?e:u)),n[2][3].add(r(0,t,yt(i)?i:c))}).promise()},promise:function(t){return null!=t?wt.extend(t,o):o}},r={};return wt.each(n,function(t,e){var s=e[2],a=e[5];o[e[1]]=s.add,a&&s.add(function(){i=a},n[3-t][2].disable,n[3-t][3].disable,n[0][2].lock,n[0][3].lock),s.add(e[3].fire),r[e[0]]=function(){return r[e[0]+"With"](this===r?void 0:this,arguments),this},r[e[0]+"With"]=s.fireWith}),o.promise(r),e&&e.call(r,r),r},when:function(t){var e=arguments.length,n=e,i=Array(n),o=lt.call(arguments),r=wt.Deferred(),s=function(t){return function(n){i[t]=this,o[t]=arguments.length>1?lt.call(arguments):n,--e||r.resolveWith(i,o)}};if(e<=1&&(f(t,r.done(s(n)).resolve,r.reject,!e),"pending"===r.state()||yt(o[n]&&o[n].then)))return r.then();for(;n--;)f(o[n],s(n),r.reject);return r.promise()}});var Ot=/^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;wt.Deferred.exceptionHook=function(e,n){t.console&&t.console.warn&&e&&Ot.test(e.name)&&t.console.warn("jQuery.Deferred exception: "+e.message,e.stack,n)},wt.readyException=function(e){t.setTimeout(function(){throw e})};var Lt=wt.Deferred();wt.fn.ready=function(t){return Lt.then(t).catch(function(t){wt.readyException(t)}),this},wt.extend({isReady:!1,readyWait:1,ready:function(t){(!0===t?--wt.readyWait:wt.isReady)||(wt.isReady=!0,!0!==t&&--wt.readyWait>0||Lt.resolveWith(st,[wt]))}}),wt.ready.then=Lt.then,"complete"===st.readyState||"loading"!==st.readyState&&!st.documentElement.doScroll?t.setTimeout(wt.ready):(st.addEventListener("DOMContentLoaded",p),t.addEventListener("load",p));var qt=function(t,e,n,o,r,s,a){var l=0,u=t.length,c=null==n;if("object"===i(n)){r=!0;for(l in n)qt(t,e,l,n[l],!0,s,a)}else if(void 0!==o&&(r=!0,yt(o)||(a=!0),c&&(a?(e.call(t,o),e=null):(c=e,e=function(t,e,n){return c.call(wt(t),n)})),e))for(;l<u;l++)e(t[l],n,a?o:o.call(t[l],l,e(t[l],n)));return r?t:c?e.call(t):u?e(t[0],n):s},Rt=/^-ms-/,Pt=/-([a-z])/g,Ht=function(t){return 1===t.nodeType||9===t.nodeType||!+t.nodeType};g.uid=1,g.prototype={cache:function(t){var e=t[this.expando];return e||(e={},Ht(t)&&(t.nodeType?t[this.expando]=e:Object.defineProperty(t,this.expando,{value:e,configurable:!0}))),e},set:function(t,e,n){var i,o=this.cache(t);if("string"==typeof e)o[h(e)]=n;else for(i in e)o[h(i)]=e[i];return o},get:function(t,e){return void 0===e?this.cache(t):t[this.expando]&&t[this.expando][h(e)]},access:function(t,e,n){return void 0===e||e&&"string"==typeof e&&void 0===n?this.get(t,e):(this.set(t,e,n),void 0!==n?n:e)},remove:function(t,e){var n,i=t[this.expando];if(void 0!==i){if(void 0!==e){n=(e=Array.isArray(e)?e.map(h):(e=h(e))in i?[e]:e.match(It)||[]).length;for(;n--;)delete i[e[n]]}(void 0===e||wt.isEmptyObject(i))&&(t.nodeType?t[this.expando]=void 0:delete t[this.expando])}},hasData:function(t){var e=t[this.expando];return void 0!==e&&!wt.isEmptyObject(e)}};var Wt=new g,Mt=new g,Bt=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,Ft=/[A-Z]/g;wt.extend({hasData:function(t){return Mt.hasData(t)||Wt.hasData(t)},data:function(t,e,n){return Mt.access(t,e,n)},removeData:function(t,e){Mt.remove(t,e)},_data:function(t,e,n){return Wt.access(t,e,n)},_removeData:function(t,e){Wt.remove(t,e)}}),wt.fn.extend({data:function(t,e){var n,i,o,r=this[0],s=r&&r.attributes;if(void 0===t){if(this.length&&(o=Mt.get(r),1===r.nodeType&&!Wt.get(r,"hasDataAttrs"))){for(n=s.length;n--;)s[n]&&0===(i=s[n].name).indexOf("data-")&&(i=h(i.slice(5)),m(r,i,o[i]));Wt.set(r,"hasDataAttrs",!0)}return o}return"object"==typeof t?this.each(function(){Mt.set(this,t)}):qt(this,function(e){var n;if(r&&void 0===e){if(void 0!==(n=Mt.get(r,t)))return n;if(void 0!==(n=m(r,t)))return n}else this.each(function(){Mt.set(this,t,e)})},null,e,arguments.length>1,null,!0)},removeData:function(t){return this.each(function(){Mt.remove(this,t)})}}),wt.extend({queue:function(t,e,n){var i;if(t)return e=(e||"fx")+"queue",i=Wt.get(t,e),n&&(!i||Array.isArray(n)?i=Wt.access(t,e,wt.makeArray(n)):i.push(n)),i||[]},dequeue:function(t,e){e=e||"fx";var n=wt.queue(t,e),i=n.length,o=n.shift(),r=wt._queueHooks(t,e),s=function(){wt.dequeue(t,e)};"inprogress"===o&&(o=n.shift(),i--),o&&("fx"===e&&n.unshift("inprogress"),delete r.stop,o.call(t,s,r)),!i&&r&&r.empty.fire()},_queueHooks:function(t,e){var n=e+"queueHooks";return Wt.get(t,n)||Wt.access(t,n,{empty:wt.Callbacks("once memory").add(function(){Wt.remove(t,[e+"queue",n])})})}}),wt.fn.extend({queue:function(t,e){var n=2;return"string"!=typeof t&&(e=t,t="fx",n--),arguments.length<n?wt.queue(this[0],t):void 0===e?this:this.each(function(){var n=wt.queue(this,t,e);wt._queueHooks(this,t),"fx"===t&&"inprogress"!==n[0]&&wt.dequeue(this,t)})},dequeue:function(t){return this.each(function(){wt.dequeue(this,t)})},clearQueue:function(t){return this.queue(t||"fx",[])},promise:function(t,e){var n,i=1,o=wt.Deferred(),r=this,s=this.length,a=function(){--i||o.resolveWith(r,[r])};for("string"!=typeof t&&(e=t,t=void 0),t=t||"fx";s--;)(n=Wt.get(r[s],t+"queueHooks"))&&n.empty&&(i++,n.empty.add(a));return a(),o.promise(e)}});var _t=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,Ut=new RegExp("^(?:([+-])=|)("+_t+")([a-z%]*)$","i"),zt=["Top","Right","Bottom","Left"],Qt=function(t,e){return"none"===(t=e||t).style.display||""===t.style.display&&wt.contains(t.ownerDocument,t)&&"none"===wt.css(t,"display")},Vt=function(t,e,n,i){var o,r,s={};for(r in e)s[r]=t.style[r],t.style[r]=e[r];o=n.apply(t,i||[]);for(r in e)t.style[r]=s[r];return o},Xt={};wt.fn.extend({show:function(){return x(this,!0)},hide:function(){return x(this)},toggle:function(t){return"boolean"==typeof t?t?this.show():this.hide():this.each(function(){Qt(this)?wt(this).show():wt(this).hide()})}});var Gt=/^(?:checkbox|radio)$/i,Yt=/<([a-z][^\/\0>\x20\t\r\n\f]+)/i,Jt=/^$|^module$|\/(?:java|ecma)script/i,Kt={option:[1,"<select multiple='multiple'>","</select>"],thead:[1,"<table>","</table>"],col:[2,"<table><colgroup>","</colgroup></table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:[0,"",""]};Kt.optgroup=Kt.option,Kt.tbody=Kt.tfoot=Kt.colgroup=Kt.caption=Kt.thead,Kt.th=Kt.td;var Zt=/<|&#?\w+;/;!function(){var t=st.createDocumentFragment().appendChild(st.createElement("div")),e=st.createElement("input");e.setAttribute("type","radio"),e.setAttribute("checked","checked"),e.setAttribute("name","t"),t.appendChild(e),mt.checkClone=t.cloneNode(!0).cloneNode(!0).lastChild.checked,t.innerHTML="<textarea>x</textarea>",mt.noCloneChecked=!!t.cloneNode(!0).lastChild.defaultValue}();var te=st.documentElement,ee=/^key/,ne=/^(?:mouse|pointer|contextmenu|drag|drop)|click/,ie=/^([^.]*)(?:\.(.+)|)/;wt.event={global:{},add:function(t,e,n,i,o){var r,s,a,l,u,c,f,p,d,h,g,v=Wt.get(t);if(v)for(n.handler&&(n=(r=n).handler,o=r.selector),o&&wt.find.matchesSelector(te,o),n.guid||(n.guid=wt.guid++),(l=v.events)||(l=v.events={}),(s=v.handle)||(s=v.handle=function(e){return void 0!==wt&&wt.event.triggered!==e.type?wt.event.dispatch.apply(t,arguments):void 0}),u=(e=(e||"").match(It)||[""]).length;u--;)d=g=(a=ie.exec(e[u])||[])[1],h=(a[2]||"").split(".").sort(),d&&(f=wt.event.special[d]||{},d=(o?f.delegateType:f.bindType)||d,f=wt.event.special[d]||{},c=wt.extend({type:d,origType:g,data:i,handler:n,guid:n.guid,selector:o,needsContext:o&&wt.expr.match.needsContext.test(o),namespace:h.join(".")},r),(p=l[d])||((p=l[d]=[]).delegateCount=0,f.setup&&!1!==f.setup.call(t,i,h,s)||t.addEventListener&&t.addEventListener(d,s)),f.add&&(f.add.call(t,c),c.handler.guid||(c.handler.guid=n.guid)),o?p.splice(p.delegateCount++,0,c):p.push(c),wt.event.global[d]=!0)},remove:function(t,e,n,i,o){var r,s,a,l,u,c,f,p,d,h,g,v=Wt.hasData(t)&&Wt.get(t);if(v&&(l=v.events)){for(u=(e=(e||"").match(It)||[""]).length;u--;)if(a=ie.exec(e[u])||[],d=g=a[1],h=(a[2]||"").split(".").sort(),d){for(f=wt.event.special[d]||{},p=l[d=(i?f.delegateType:f.bindType)||d]||[],a=a[2]&&new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"),s=r=p.length;r--;)c=p[r],!o&&g!==c.origType||n&&n.guid!==c.guid||a&&!a.test(c.namespace)||i&&i!==c.selector&&("**"!==i||!c.selector)||(p.splice(r,1),c.selector&&p.delegateCount--,f.remove&&f.remove.call(t,c));s&&!p.length&&(f.teardown&&!1!==f.teardown.call(t,h,v.handle)||wt.removeEvent(t,d,v.handle),delete l[d])}else for(d in l)wt.event.remove(t,d+e[u],n,i,!0);wt.isEmptyObject(l)&&Wt.remove(t,"handle events")}},dispatch:function(t){var e,n,i,o,r,s,a=wt.event.fix(t),l=new Array(arguments.length),u=(Wt.get(this,"events")||{})[a.type]||[],c=wt.event.special[a.type]||{};for(l[0]=a,e=1;e<arguments.length;e++)l[e]=arguments[e];if(a.delegateTarget=this,!c.preDispatch||!1!==c.preDispatch.call(this,a)){for(s=wt.event.handlers.call(this,a,u),e=0;(o=s[e++])&&!a.isPropagationStopped();)for(a.currentTarget=o.elem,n=0;(r=o.handlers[n++])&&!a.isImmediatePropagationStopped();)a.rnamespace&&!a.rnamespace.test(r.namespace)||(a.handleObj=r,a.data=r.data,void 0!==(i=((wt.event.special[r.origType]||{}).handle||r.handler).apply(o.elem,l))&&!1===(a.result=i)&&(a.preventDefault(),a.stopPropagation()));return c.postDispatch&&c.postDispatch.call(this,a),a.result}},handlers:function(t,e){var n,i,o,r,s,a=[],l=e.delegateCount,u=t.target;if(l&&u.nodeType&&!("click"===t.type&&t.button>=1))for(;u!==this;u=u.parentNode||this)if(1===u.nodeType&&("click"!==t.type||!0!==u.disabled)){for(r=[],s={},n=0;n<l;n++)void 0===s[o=(i=e[n]).selector+" "]&&(s[o]=i.needsContext?wt(o,this).index(u)>-1:wt.find(o,this,null,[u]).length),s[o]&&r.push(i);r.length&&a.push({elem:u,handlers:r})}return u=this,l<e.length&&a.push({elem:u,handlers:e.slice(l)}),a},addProp:function(t,e){Object.defineProperty(wt.Event.prototype,t,{enumerable:!0,configurable:!0,get:yt(e)?function(){if(this.originalEvent)return e(this.originalEvent)}:function(){if(this.originalEvent)return this.originalEvent[t]},set:function(e){Object.defineProperty(this,t,{enumerable:!0,configurable:!0,writable:!0,value:e})}})},fix:function(t){return t[wt.expando]?t:new wt.Event(t)},special:{load:{noBubble:!0},focus:{trigger:function(){if(this!==S()&&this.focus)return this.focus(),!1},delegateType:"focusin"},blur:{trigger:function(){if(this===S()&&this.blur)return this.blur(),!1},delegateType:"focusout"},click:{trigger:function(){if("checkbox"===this.type&&this.click&&r(this,"input"))return this.click(),!1},_default:function(t){return r(t.target,"a")}},beforeunload:{postDispatch:function(t){void 0!==t.result&&t.originalEvent&&(t.originalEvent.returnValue=t.result)}}}},wt.removeEvent=function(t,e,n){t.removeEventListener&&t.removeEventListener(e,n)},wt.Event=function(t,e){if(!(this instanceof wt.Event))return new wt.Event(t,e);t&&t.type?(this.originalEvent=t,this.type=t.type,this.isDefaultPrevented=t.defaultPrevented||void 0===t.defaultPrevented&&!1===t.returnValue?E:k,this.target=t.target&&3===t.target.nodeType?t.target.parentNode:t.target,this.currentTarget=t.currentTarget,this.relatedTarget=t.relatedTarget):this.type=t,e&&wt.extend(this,e),this.timeStamp=t&&t.timeStamp||Date.now(),this[wt.expando]=!0},wt.Event.prototype={constructor:wt.Event,isDefaultPrevented:k,isPropagationStopped:k,isImmediatePropagationStopped:k,isSimulated:!1,preventDefault:function(){var t=this.originalEvent;this.isDefaultPrevented=E,t&&!this.isSimulated&&t.preventDefault()},stopPropagation:function(){var t=this.originalEvent;this.isPropagationStopped=E,t&&!this.isSimulated&&t.stopPropagation()},stopImmediatePropagation:function(){var t=this.originalEvent;this.isImmediatePropagationStopped=E,t&&!this.isSimulated&&t.stopImmediatePropagation(),this.stopPropagation()}},wt.each({altKey:!0,bubbles:!0,cancelable:!0,changedTouches:!0,ctrlKey:!0,detail:!0,eventPhase:!0,metaKey:!0,pageX:!0,pageY:!0,shiftKey:!0,view:!0,char:!0,charCode:!0,key:!0,keyCode:!0,button:!0,buttons:!0,clientX:!0,clientY:!0,offsetX:!0,offsetY:!0,pointerId:!0,pointerType:!0,screenX:!0,screenY:!0,targetTouches:!0,toElement:!0,touches:!0,which:function(t){var e=t.button;return null==t.which&&ee.test(t.type)?null!=t.charCode?t.charCode:t.keyCode:!t.which&&void 0!==e&&ne.test(t.type)?1&e?1:2&e?3:4&e?2:0:t.which}},wt.event.addProp),wt.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(t,e){wt.event.special[t]={delegateType:e,bindType:e,handle:function(t){var n,i=this,o=t.relatedTarget,r=t.handleObj;return o&&(o===i||wt.contains(i,o))||(t.type=r.origType,n=r.handler.apply(this,arguments),t.type=e),n}}}),wt.fn.extend({on:function(t,e,n,i){return D(this,t,e,n,i)},one:function(t,e,n,i){return D(this,t,e,n,i,1)},off:function(t,e,n){var i,o;if(t&&t.preventDefault&&t.handleObj)return i=t.handleObj,wt(t.delegateTarget).off(i.namespace?i.origType+"."+i.namespace:i.origType,i.selector,i.handler),this;if("object"==typeof t){for(o in t)this.off(o,e,t[o]);return this}return!1!==e&&"function"!=typeof e||(n=e,e=void 0),!1===n&&(n=k),this.each(function(){wt.event.remove(this,t,n,e)})}});var oe=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,re=/<script|<style|<link/i,se=/checked\s*(?:[^=]|=\s*.checked.)/i,ae=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;wt.extend({htmlPrefilter:function(t){return t.replace(oe,"<$1></$2>")},clone:function(t,e,n){var i,o,r,s,a=t.cloneNode(!0),l=wt.contains(t.ownerDocument,t);if(!(mt.noCloneChecked||1!==t.nodeType&&11!==t.nodeType||wt.isXMLDoc(t)))for(s=w(a),i=0,o=(r=w(t)).length;i<o;i++)I(r[i],s[i]);if(e)if(n)for(r=r||w(t),s=s||w(a),i=0,o=r.length;i<o;i++)j(r[i],s[i]);else j(t,a);return(s=w(a,"script")).length>0&&T(s,!l&&w(t,"script")),a},cleanData:function(t){for(var e,n,i,o=wt.event.special,r=0;void 0!==(n=t[r]);r++)if(Ht(n)){if(e=n[Wt.expando]){if(e.events)for(i in e.events)o[i]?wt.event.remove(n,i):wt.removeEvent(n,i,e.handle);n[Wt.expando]=void 0}n[Mt.expando]&&(n[Mt.expando]=void 0)}}}),wt.fn.extend({detach:function(t){return L(this,t,!0)},remove:function(t){return L(this,t)},text:function(t){return qt(this,function(t){return void 0===t?wt.text(this):this.empty().each(function(){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||(this.textContent=t)})},null,t,arguments.length)},append:function(){return O(this,arguments,function(t){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||$(this,t).appendChild(t)})},prepend:function(){return O(this,arguments,function(t){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var e=$(this,t);e.insertBefore(t,e.firstChild)}})},before:function(){return O(this,arguments,function(t){this.parentNode&&this.parentNode.insertBefore(t,this)})},after:function(){return O(this,arguments,function(t){this.parentNode&&this.parentNode.insertBefore(t,this.nextSibling)})},empty:function(){for(var t,e=0;null!=(t=this[e]);e++)1===t.nodeType&&(wt.cleanData(w(t,!1)),t.textContent="");return this},clone:function(t,e){return t=null!=t&&t,e=null==e?t:e,this.map(function(){return wt.clone(this,t,e)})},html:function(t){return qt(this,function(t){var e=this[0]||{},n=0,i=this.length;if(void 0===t&&1===e.nodeType)return e.innerHTML;if("string"==typeof t&&!re.test(t)&&!Kt[(Yt.exec(t)||["",""])[1].toLowerCase()]){t=wt.htmlPrefilter(t);try{for(;n<i;n++)1===(e=this[n]||{}).nodeType&&(wt.cleanData(w(e,!1)),e.innerHTML=t);e=0}catch(t){}}e&&this.empty().append(t)},null,t,arguments.length)},replaceWith:function(){var t=[];return O(this,arguments,function(e){var n=this.parentNode;wt.inArray(this,t)<0&&(wt.cleanData(w(this)),n&&n.replaceChild(e,this))},t)}}),wt.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(t,e){wt.fn[t]=function(t){for(var n,i=[],o=wt(t),r=o.length-1,s=0;s<=r;s++)n=s===r?this:this.clone(!0),wt(o[s])[e](n),ct.apply(i,n.get());return this.pushStack(i)}});var le=new RegExp("^("+_t+")(?!px)[a-z%]+$","i"),ue=function(e){var n=e.ownerDocument.defaultView;return n&&n.opener||(n=t),n.getComputedStyle(e)},ce=new RegExp(zt.join("|"),"i");!function(){function e(){if(u){l.style.cssText="position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0",u.style.cssText="position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%",te.appendChild(l).appendChild(u);var e=t.getComputedStyle(u);i="1%"!==e.top,a=12===n(e.marginLeft),u.style.right="60%",s=36===n(e.right),o=36===n(e.width),u.style.position="absolute",r=36===u.offsetWidth||"absolute",te.removeChild(l),u=null}}function n(t){return Math.round(parseFloat(t))}var i,o,r,s,a,l=st.createElement("div"),u=st.createElement("div");u.style&&(u.style.backgroundClip="content-box",u.cloneNode(!0).style.backgroundClip="",mt.clearCloneStyle="content-box"===u.style.backgroundClip,wt.extend(mt,{boxSizingReliable:function(){return e(),o},pixelBoxStyles:function(){return e(),s},pixelPosition:function(){return e(),i},reliableMarginLeft:function(){return e(),a},scrollboxSize:function(){return e(),r}}))}();var fe=/^(none|table(?!-c[ea]).+)/,pe=/^--/,de={position:"absolute",visibility:"hidden",display:"block"},he={letterSpacing:"0",fontWeight:"400"},ge=["Webkit","Moz","ms"],ve=st.createElement("div").style;wt.extend({cssHooks:{opacity:{get:function(t,e){if(e){var n=q(t,"opacity");return""===n?"1":n}}}},cssNumber:{animationIterationCount:!0,columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{},style:function(t,e,n,i){if(t&&3!==t.nodeType&&8!==t.nodeType&&t.style){var o,r,s,a=h(e),l=pe.test(e),u=t.style;if(l||(e=H(a)),s=wt.cssHooks[e]||wt.cssHooks[a],void 0===n)return s&&"get"in s&&void 0!==(o=s.get(t,!1,i))?o:u[e];"string"==(r=typeof n)&&(o=Ut.exec(n))&&o[1]&&(n=y(t,e,o),r="number"),null!=n&&n===n&&("number"===r&&(n+=o&&o[3]||(wt.cssNumber[a]?"":"px")),mt.clearCloneStyle||""!==n||0!==e.indexOf("background")||(u[e]="inherit"),s&&"set"in s&&void 0===(n=s.set(t,n,i))||(l?u.setProperty(e,n):u[e]=n))}},css:function(t,e,n,i){var o,r,s,a=h(e);return pe.test(e)||(e=H(a)),(s=wt.cssHooks[e]||wt.cssHooks[a])&&"get"in s&&(o=s.get(t,!0,n)),void 0===o&&(o=q(t,e,i)),"normal"===o&&e in he&&(o=he[e]),""===n||n?(r=parseFloat(o),!0===n||isFinite(r)?r||0:o):o}}),wt.each(["height","width"],function(t,e){wt.cssHooks[e]={get:function(t,n,i){if(n)return!fe.test(wt.css(t,"display"))||t.getClientRects().length&&t.getBoundingClientRect().width?B(t,e,i):Vt(t,de,function(){return B(t,e,i)})},set:function(t,n,i){var o,r=ue(t),s="border-box"===wt.css(t,"boxSizing",!1,r),a=i&&M(t,e,i,s,r);return s&&mt.scrollboxSize()===r.position&&(a-=Math.ceil(t["offset"+e[0].toUpperCase()+e.slice(1)]-parseFloat(r[e])-M(t,e,"border",!1,r)-.5)),a&&(o=Ut.exec(n))&&"px"!==(o[3]||"px")&&(t.style[e]=n,n=wt.css(t,e)),W(t,n,a)}}}),wt.cssHooks.marginLeft=R(mt.reliableMarginLeft,function(t,e){if(e)return(parseFloat(q(t,"marginLeft"))||t.getBoundingClientRect().left-Vt(t,{marginLeft:0},function(){return t.getBoundingClientRect().left}))+"px"}),wt.each({margin:"",padding:"",border:"Width"},function(t,e){wt.cssHooks[t+e]={expand:function(n){for(var i=0,o={},r="string"==typeof n?n.split(" "):[n];i<4;i++)o[t+zt[i]+e]=r[i]||r[i-2]||r[0];return o}},"margin"!==t&&(wt.cssHooks[t+e].set=W)}),wt.fn.extend({css:function(t,e){return qt(this,function(t,e,n){var i,o,r={},s=0;if(Array.isArray(e)){for(i=ue(t),o=e.length;s<o;s++)r[e[s]]=wt.css(t,e[s],!1,i);return r}return void 0!==n?wt.style(t,e,n):wt.css(t,e)},t,e,arguments.length>1)}}),wt.Tween=F,F.prototype={constructor:F,init:function(t,e,n,i,o,r){this.elem=t,this.prop=n,this.easing=o||wt.easing._default,this.options=e,this.start=this.now=this.cur(),this.end=i,this.unit=r||(wt.cssNumber[n]?"":"px")},cur:function(){var t=F.propHooks[this.prop];return t&&t.get?t.get(this):F.propHooks._default.get(this)},run:function(t){var e,n=F.propHooks[this.prop];return this.options.duration?this.pos=e=wt.easing[this.easing](t,this.options.duration*t,0,1,this.options.duration):this.pos=e=t,this.now=(this.end-this.start)*e+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),n&&n.set?n.set(this):F.propHooks._default.set(this),this}},F.prototype.init.prototype=F.prototype,F.propHooks={_default:{get:function(t){var e;return 1!==t.elem.nodeType||null!=t.elem[t.prop]&&null==t.elem.style[t.prop]?t.elem[t.prop]:(e=wt.css(t.elem,t.prop,""))&&"auto"!==e?e:0},set:function(t){wt.fx.step[t.prop]?wt.fx.step[t.prop](t):1!==t.elem.nodeType||null==t.elem.style[wt.cssProps[t.prop]]&&!wt.cssHooks[t.prop]?t.elem[t.prop]=t.now:wt.style(t.elem,t.prop,t.now+t.unit)}}},F.propHooks.scrollTop=F.propHooks.scrollLeft={set:function(t){t.elem.nodeType&&t.elem.parentNode&&(t.elem[t.prop]=t.now)}},wt.easing={linear:function(t){return t},swing:function(t){return.5-Math.cos(t*Math.PI)/2},_default:"swing"},wt.fx=F.prototype.init,wt.fx.step={};var me,ye,be=/^(?:toggle|show|hide)$/,xe=/queueHooks$/;wt.Animation=wt.extend(G,{tweeners:{"*":[function(t,e){var n=this.createTween(t,e);return y(n.elem,t,Ut.exec(e),n),n}]},tweener:function(t,e){yt(t)?(e=t,t=["*"]):t=t.match(It);for(var n,i=0,o=t.length;i<o;i++)n=t[i],G.tweeners[n]=G.tweeners[n]||[],G.tweeners[n].unshift(e)},prefilters:[V],prefilter:function(t,e){e?G.prefilters.unshift(t):G.prefilters.push(t)}}),wt.speed=function(t,e,n){var i=t&&"object"==typeof t?wt.extend({},t):{complete:n||!n&&e||yt(t)&&t,duration:t,easing:n&&e||e&&!yt(e)&&e};return wt.fx.off?i.duration=0:"number"!=typeof i.duration&&(i.duration in wt.fx.speeds?i.duration=wt.fx.speeds[i.duration]:i.duration=wt.fx.speeds._default),null!=i.queue&&!0!==i.queue||(i.queue="fx"),i.old=i.complete,i.complete=function(){yt(i.old)&&i.old.call(this),i.queue&&wt.dequeue(this,i.queue)},i},wt.fn.extend({fadeTo:function(t,e,n,i){return this.filter(Qt).css("opacity",0).show().end().animate({opacity:e},t,n,i)},animate:function(t,e,n,i){var o=wt.isEmptyObject(t),r=wt.speed(e,n,i),s=function(){var e=G(this,wt.extend({},t),r);(o||Wt.get(this,"finish"))&&e.stop(!0)};return s.finish=s,o||!1===r.queue?this.each(s):this.queue(r.queue,s)},stop:function(t,e,n){var i=function(t){var e=t.stop;delete t.stop,e(n)};return"string"!=typeof t&&(n=e,e=t,t=void 0),e&&!1!==t&&this.queue(t||"fx",[]),this.each(function(){var e=!0,o=null!=t&&t+"queueHooks",r=wt.timers,s=Wt.get(this);if(o)s[o]&&s[o].stop&&i(s[o]);else for(o in s)s[o]&&s[o].stop&&xe.test(o)&&i(s[o]);for(o=r.length;o--;)r[o].elem!==this||null!=t&&r[o].queue!==t||(r[o].anim.stop(n),e=!1,r.splice(o,1));!e&&n||wt.dequeue(this,t)})},finish:function(t){return!1!==t&&(t=t||"fx"),this.each(function(){var e,n=Wt.get(this),i=n[t+"queue"],o=n[t+"queueHooks"],r=wt.timers,s=i?i.length:0;for(n.finish=!0,wt.queue(this,t,[]),o&&o.stop&&o.stop.call(this,!0),e=r.length;e--;)r[e].elem===this&&r[e].queue===t&&(r[e].anim.stop(!0),r.splice(e,1));for(e=0;e<s;e++)i[e]&&i[e].finish&&i[e].finish.call(this);delete n.finish})}}),wt.each(["toggle","show","hide"],function(t,e){var n=wt.fn[e];wt.fn[e]=function(t,i,o){return null==t||"boolean"==typeof t?n.apply(this,arguments):this.animate(z(e,!0),t,i,o)}}),wt.each({slideDown:z("show"),slideUp:z("hide"),slideToggle:z("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(t,e){wt.fn[t]=function(t,n,i){return this.animate(e,t,n,i)}}),wt.timers=[],wt.fx.tick=function(){var t,e=0,n=wt.timers;for(me=Date.now();e<n.length;e++)(t=n[e])()||n[e]!==t||n.splice(e--,1);n.length||wt.fx.stop(),me=void 0},wt.fx.timer=function(t){wt.timers.push(t),wt.fx.start()},wt.fx.interval=13,wt.fx.start=function(){ye||(ye=!0,_())},wt.fx.stop=function(){ye=null},wt.fx.speeds={slow:600,fast:200,_default:400},wt.fn.delay=function(e,n){return e=wt.fx?wt.fx.speeds[e]||e:e,n=n||"fx",this.queue(n,function(n,i){var o=t.setTimeout(n,e);i.stop=function(){t.clearTimeout(o)}})},function(){var t=st.createElement("input"),e=st.createElement("select").appendChild(st.createElement("option"));t.type="checkbox",mt.checkOn=""!==t.value,mt.optSelected=e.selected,(t=st.createElement("input")).value="t",t.type="radio",mt.radioValue="t"===t.value}();var we,Te=wt.expr.attrHandle;wt.fn.extend({attr:function(t,e){return qt(this,wt.attr,t,e,arguments.length>1)},removeAttr:function(t){return this.each(function(){wt.removeAttr(this,t)})}}),wt.extend({attr:function(t,e,n){var i,o,r=t.nodeType;if(3!==r&&8!==r&&2!==r)return void 0===t.getAttribute?wt.prop(t,e,n):(1===r&&wt.isXMLDoc(t)||(o=wt.attrHooks[e.toLowerCase()]||(wt.expr.match.bool.test(e)?we:void 0)),void 0!==n?null===n?void wt.removeAttr(t,e):o&&"set"in o&&void 0!==(i=o.set(t,n,e))?i:(t.setAttribute(e,n+""),n):o&&"get"in o&&null!==(i=o.get(t,e))?i:null==(i=wt.find.attr(t,e))?void 0:i)},attrHooks:{type:{set:function(t,e){if(!mt.radioValue&&"radio"===e&&r(t,"input")){var n=t.value;return t.setAttribute("type",e),n&&(t.value=n),e}}}},removeAttr:function(t,e){var n,i=0,o=e&&e.match(It);if(o&&1===t.nodeType)for(;n=o[i++];)t.removeAttribute(n)}}),we={set:function(t,e,n){return!1===e?wt.removeAttr(t,n):t.setAttribute(n,n),n}},wt.each(wt.expr.match.bool.source.match(/\w+/g),function(t,e){var n=Te[e]||wt.find.attr;Te[e]=function(t,e,i){var o,r,s=e.toLowerCase();return i||(r=Te[s],Te[s]=o,o=null!=n(t,e,i)?s:null,Te[s]=r),o}});var Ce=/^(?:input|select|textarea|button)$/i,Ee=/^(?:a|area)$/i;wt.fn.extend({prop:function(t,e){return qt(this,wt.prop,t,e,arguments.length>1)},removeProp:function(t){return this.each(function(){delete this[wt.propFix[t]||t]})}}),wt.extend({prop:function(t,e,n){var i,o,r=t.nodeType;if(3!==r&&8!==r&&2!==r)return 1===r&&wt.isXMLDoc(t)||(e=wt.propFix[e]||e,o=wt.propHooks[e]),void 0!==n?o&&"set"in o&&void 0!==(i=o.set(t,n,e))?i:t[e]=n:o&&"get"in o&&null!==(i=o.get(t,e))?i:t[e]},propHooks:{tabIndex:{get:function(t){var e=wt.find.attr(t,"tabindex");return e?parseInt(e,10):Ce.test(t.nodeName)||Ee.test(t.nodeName)&&t.href?0:-1}}},propFix:{for:"htmlFor",class:"className"}}),mt.optSelected||(wt.propHooks.selected={get:function(t){var e=t.parentNode;return e&&e.parentNode&&e.parentNode.selectedIndex,null},set:function(t){var e=t.parentNode;e&&(e.selectedIndex,e.parentNode&&e.parentNode.selectedIndex)}}),wt.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){wt.propFix[this.toLowerCase()]=this}),wt.fn.extend({addClass:function(t){var e,n,i,o,r,s,a,l=0;if(yt(t))return this.each(function(e){wt(this).addClass(t.call(this,e,J(this)))});if((e=K(t)).length)for(;n=this[l++];)if(o=J(n),i=1===n.nodeType&&" "+Y(o)+" "){for(s=0;r=e[s++];)i.indexOf(" "+r+" ")<0&&(i+=r+" ");o!==(a=Y(i))&&n.setAttribute("class",a)}return this},removeClass:function(t){var e,n,i,o,r,s,a,l=0;if(yt(t))return this.each(function(e){wt(this).removeClass(t.call(this,e,J(this)))});if(!arguments.length)return this.attr("class","");if((e=K(t)).length)for(;n=this[l++];)if(o=J(n),i=1===n.nodeType&&" "+Y(o)+" "){for(s=0;r=e[s++];)for(;i.indexOf(" "+r+" ")>-1;)i=i.replace(" "+r+" "," ");o!==(a=Y(i))&&n.setAttribute("class",a)}return this},toggleClass:function(t,e){var n=typeof t,i="string"===n||Array.isArray(t);return"boolean"==typeof e&&i?e?this.addClass(t):this.removeClass(t):yt(t)?this.each(function(n){wt(this).toggleClass(t.call(this,n,J(this),e),e)}):this.each(function(){var e,o,r,s;if(i)for(o=0,r=wt(this),s=K(t);e=s[o++];)r.hasClass(e)?r.removeClass(e):r.addClass(e);else void 0!==t&&"boolean"!==n||((e=J(this))&&Wt.set(this,"__className__",e),this.setAttribute&&this.setAttribute("class",e||!1===t?"":Wt.get(this,"__className__")||""))})},hasClass:function(t){var e,n,i=0;for(e=" "+t+" ";n=this[i++];)if(1===n.nodeType&&(" "+Y(J(n))+" ").indexOf(e)>-1)return!0;return!1}});var ke=/\r/g;wt.fn.extend({val:function(t){var e,n,i,o=this[0];return arguments.length?(i=yt(t),this.each(function(n){var o;1===this.nodeType&&(null==(o=i?t.call(this,n,wt(this).val()):t)?o="":"number"==typeof o?o+="":Array.isArray(o)&&(o=wt.map(o,function(t){return null==t?"":t+""})),(e=wt.valHooks[this.type]||wt.valHooks[this.nodeName.toLowerCase()])&&"set"in e&&void 0!==e.set(this,o,"value")||(this.value=o))})):o?(e=wt.valHooks[o.type]||wt.valHooks[o.nodeName.toLowerCase()])&&"get"in e&&void 0!==(n=e.get(o,"value"))?n:"string"==typeof(n=o.value)?n.replace(ke,""):null==n?"":n:void 0}}),wt.extend({valHooks:{option:{get:function(t){var e=wt.find.attr(t,"value");return null!=e?e:Y(wt.text(t))}},select:{get:function(t){var e,n,i,o=t.options,s=t.selectedIndex,a="select-one"===t.type,l=a?null:[],u=a?s+1:o.length;for(i=s<0?u:a?s:0;i<u;i++)if(((n=o[i]).selected||i===s)&&!n.disabled&&(!n.parentNode.disabled||!r(n.parentNode,"optgroup"))){if(e=wt(n).val(),a)return e;l.push(e)}return l},set:function(t,e){for(var n,i,o=t.options,r=wt.makeArray(e),s=o.length;s--;)((i=o[s]).selected=wt.inArray(wt.valHooks.option.get(i),r)>-1)&&(n=!0);return n||(t.selectedIndex=-1),r}}}}),wt.each(["radio","checkbox"],function(){wt.valHooks[this]={set:function(t,e){if(Array.isArray(e))return t.checked=wt.inArray(wt(t).val(),e)>-1}},mt.checkOn||(wt.valHooks[this].get=function(t){return null===t.getAttribute("value")?"on":t.value})}),mt.focusin="onfocusin"in t;var Se=/^(?:focusinfocus|focusoutblur)$/,De=function(t){t.stopPropagation()};wt.extend(wt.event,{trigger:function(e,n,i,o){var r,s,a,l,u,c,f,p,d=[i||st],h=ht.call(e,"type")?e.type:e,g=ht.call(e,"namespace")?e.namespace.split("."):[];if(s=p=a=i=i||st,3!==i.nodeType&&8!==i.nodeType&&!Se.test(h+wt.event.triggered)&&(h.indexOf(".")>-1&&(h=(g=h.split(".")).shift(),g.sort()),u=h.indexOf(":")<0&&"on"+h,e=e[wt.expando]?e:new wt.Event(h,"object"==typeof e&&e),e.isTrigger=o?2:3,e.namespace=g.join("."),e.rnamespace=e.namespace?new RegExp("(^|\\.)"+g.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,e.result=void 0,e.target||(e.target=i),n=null==n?[e]:wt.makeArray(n,[e]),f=wt.event.special[h]||{},o||!f.trigger||!1!==f.trigger.apply(i,n))){if(!o&&!f.noBubble&&!bt(i)){for(l=f.delegateType||h,Se.test(l+h)||(s=s.parentNode);s;s=s.parentNode)d.push(s),a=s;a===(i.ownerDocument||st)&&d.push(a.defaultView||a.parentWindow||t)}for(r=0;(s=d[r++])&&!e.isPropagationStopped();)p=s,e.type=r>1?l:f.bindType||h,(c=(Wt.get(s,"events")||{})[e.type]&&Wt.get(s,"handle"))&&c.apply(s,n),(c=u&&s[u])&&c.apply&&Ht(s)&&(e.result=c.apply(s,n),!1===e.result&&e.preventDefault());return e.type=h,o||e.isDefaultPrevented()||f._default&&!1!==f._default.apply(d.pop(),n)||!Ht(i)||u&&yt(i[h])&&!bt(i)&&((a=i[u])&&(i[u]=null),wt.event.triggered=h,e.isPropagationStopped()&&p.addEventListener(h,De),i[h](),e.isPropagationStopped()&&p.removeEventListener(h,De),wt.event.triggered=void 0,a&&(i[u]=a)),e.result}},simulate:function(t,e,n){var i=wt.extend(new wt.Event,n,{type:t,isSimulated:!0});wt.event.trigger(i,null,e)}}),wt.fn.extend({trigger:function(t,e){return this.each(function(){wt.event.trigger(t,e,this)})},triggerHandler:function(t,e){var n=this[0];if(n)return wt.event.trigger(t,e,n,!0)}}),mt.focusin||wt.each({focus:"focusin",blur:"focusout"},function(t,e){var n=function(t){wt.event.simulate(e,t.target,wt.event.fix(t))};wt.event.special[e]={setup:function(){var i=this.ownerDocument||this,o=Wt.access(i,e);o||i.addEventListener(t,n,!0),Wt.access(i,e,(o||0)+1)},teardown:function(){var i=this.ownerDocument||this,o=Wt.access(i,e)-1;o?Wt.access(i,e,o):(i.removeEventListener(t,n,!0),Wt.remove(i,e))}}});var $e=t.location,Ae=Date.now(),Ne=/\?/;wt.parseXML=function(e){var n;if(!e||"string"!=typeof e)return null;try{n=(new t.DOMParser).parseFromString(e,"text/xml")}catch(t){n=void 0}return n&&!n.getElementsByTagName("parsererror").length||wt.error("Invalid XML: "+e),n};var je=/\[\]$/,Ie=/\r?\n/g,Oe=/^(?:submit|button|image|reset|file)$/i,Le=/^(?:input|select|textarea|keygen)/i;wt.param=function(t,e){var n,i=[],o=function(t,e){var n=yt(e)?e():e;i[i.length]=encodeURIComponent(t)+"="+encodeURIComponent(null==n?"":n)};if(Array.isArray(t)||t.jquery&&!wt.isPlainObject(t))wt.each(t,function(){o(this.name,this.value)});else for(n in t)Z(n,t[n],e,o);return i.join("&")},wt.fn.extend({serialize:function(){return wt.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var t=wt.prop(this,"elements");return t?wt.makeArray(t):this}).filter(function(){var t=this.type;return this.name&&!wt(this).is(":disabled")&&Le.test(this.nodeName)&&!Oe.test(t)&&(this.checked||!Gt.test(t))}).map(function(t,e){var n=wt(this).val();return null==n?null:Array.isArray(n)?wt.map(n,function(t){return{name:e.name,value:t.replace(Ie,"\r\n")}}):{name:e.name,value:n.replace(Ie,"\r\n")}}).get()}});var qe=/%20/g,Re=/#.*$/,Pe=/([?&])_=[^&]*/,He=/^(.*?):[ \t]*([^\r\n]*)$/gm,We=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,Me=/^(?:GET|HEAD)$/,Be=/^\/\//,Fe={},_e={},Ue="*/".concat("*"),ze=st.createElement("a");ze.href=$e.href,wt.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:$e.href,type:"GET",isLocal:We.test($e.protocol),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":Ue,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/\bxml\b/,html:/\bhtml/,json:/\bjson\b/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":JSON.parse,"text xml":wt.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(t,e){return e?nt(nt(t,wt.ajaxSettings),e):nt(wt.ajaxSettings,t)},ajaxPrefilter:tt(Fe),ajaxTransport:tt(_e),ajax:function(e,n){function i(e,n,i,a){var u,p,d,x,w,T=n;c||(c=!0,l&&t.clearTimeout(l),o=void 0,s=a||"",C.readyState=e>0?4:0,u=e>=200&&e<300||304===e,i&&(x=it(h,C,i)),x=ot(h,x,C,u),u?(h.ifModified&&((w=C.getResponseHeader("Last-Modified"))&&(wt.lastModified[r]=w),(w=C.getResponseHeader("etag"))&&(wt.etag[r]=w)),204===e||"HEAD"===h.type?T="nocontent":304===e?T="notmodified":(T=x.state,p=x.data,u=!(d=x.error))):(d=T,!e&&T||(T="error",e<0&&(e=0))),C.status=e,C.statusText=(n||T)+"",u?m.resolveWith(g,[p,T,C]):m.rejectWith(g,[C,T,d]),C.statusCode(b),b=void 0,f&&v.trigger(u?"ajaxSuccess":"ajaxError",[C,h,u?p:d]),y.fireWith(g,[C,T]),f&&(v.trigger("ajaxComplete",[C,h]),--wt.active||wt.event.trigger("ajaxStop")))}"object"==typeof e&&(n=e,e=void 0),n=n||{};var o,r,s,a,l,u,c,f,p,d,h=wt.ajaxSetup({},n),g=h.context||h,v=h.context&&(g.nodeType||g.jquery)?wt(g):wt.event,m=wt.Deferred(),y=wt.Callbacks("once memory"),b=h.statusCode||{},x={},w={},T="canceled",C={readyState:0,getResponseHeader:function(t){var e;if(c){if(!a)for(a={};e=He.exec(s);)a[e[1].toLowerCase()]=e[2];e=a[t.toLowerCase()]}return null==e?null:e},getAllResponseHeaders:function(){return c?s:null},setRequestHeader:function(t,e){return null==c&&(t=w[t.toLowerCase()]=w[t.toLowerCase()]||t,x[t]=e),this},overrideMimeType:function(t){return null==c&&(h.mimeType=t),this},statusCode:function(t){var e;if(t)if(c)C.always(t[C.status]);else for(e in t)b[e]=[b[e],t[e]];return this},abort:function(t){var e=t||T;return o&&o.abort(e),i(0,e),this}};if(m.promise(C),h.url=((e||h.url||$e.href)+"").replace(Be,$e.protocol+"//"),h.type=n.method||n.type||h.method||h.type,h.dataTypes=(h.dataType||"*").toLowerCase().match(It)||[""],null==h.crossDomain){u=st.createElement("a");try{u.href=h.url,u.href=u.href,h.crossDomain=ze.protocol+"//"+ze.host!=u.protocol+"//"+u.host}catch(t){h.crossDomain=!0}}if(h.data&&h.processData&&"string"!=typeof h.data&&(h.data=wt.param(h.data,h.traditional)),et(Fe,h,n,C),c)return C;(f=wt.event&&h.global)&&0==wt.active++&&wt.event.trigger("ajaxStart"),h.type=h.type.toUpperCase(),h.hasContent=!Me.test(h.type),r=h.url.replace(Re,""),h.hasContent?h.data&&h.processData&&0===(h.contentType||"").indexOf("application/x-www-form-urlencoded")&&(h.data=h.data.replace(qe,"+")):(d=h.url.slice(r.length),h.data&&(h.processData||"string"==typeof h.data)&&(r+=(Ne.test(r)?"&":"?")+h.data,delete h.data),!1===h.cache&&(r=r.replace(Pe,"$1"),d=(Ne.test(r)?"&":"?")+"_="+Ae+++d),h.url=r+d),h.ifModified&&(wt.lastModified[r]&&C.setRequestHeader("If-Modified-Since",wt.lastModified[r]),wt.etag[r]&&C.setRequestHeader("If-None-Match",wt.etag[r])),(h.data&&h.hasContent&&!1!==h.contentType||n.contentType)&&C.setRequestHeader("Content-Type",h.contentType),C.setRequestHeader("Accept",h.dataTypes[0]&&h.accepts[h.dataTypes[0]]?h.accepts[h.dataTypes[0]]+("*"!==h.dataTypes[0]?", "+Ue+"; q=0.01":""):h.accepts["*"]);for(p in h.headers)C.setRequestHeader(p,h.headers[p]);if(h.beforeSend&&(!1===h.beforeSend.call(g,C,h)||c))return C.abort();if(T="abort",y.add(h.complete),C.done(h.success),C.fail(h.error),o=et(_e,h,n,C)){if(C.readyState=1,f&&v.trigger("ajaxSend",[C,h]),c)return C;h.async&&h.timeout>0&&(l=t.setTimeout(function(){C.abort("timeout")},h.timeout));try{c=!1,o.send(x,i)}catch(t){if(c)throw t;i(-1,t)}}else i(-1,"No Transport");return C},getJSON:function(t,e,n){return wt.get(t,e,n,"json")},getScript:function(t,e){return wt.get(t,void 0,e,"script")}}),wt.each(["get","post"],function(t,e){wt[e]=function(t,n,i,o){return yt(n)&&(o=o||i,i=n,n=void 0),wt.ajax(wt.extend({url:t,type:e,dataType:o,data:n,success:i},wt.isPlainObject(t)&&t))}}),wt._evalUrl=function(t){return wt.ajax({url:t,type:"GET",dataType:"script",cache:!0,async:!1,global:!1,throws:!0})},wt.fn.extend({wrapAll:function(t){var e;return this[0]&&(yt(t)&&(t=t.call(this[0])),e=wt(t,this[0].ownerDocument).eq(0).clone(!0),this[0].parentNode&&e.insertBefore(this[0]),e.map(function(){for(var t=this;t.firstElementChild;)t=t.firstElementChild;return t}).append(this)),this},wrapInner:function(t){return yt(t)?this.each(function(e){wt(this).wrapInner(t.call(this,e))}):this.each(function(){var e=wt(this),n=e.contents();n.length?n.wrapAll(t):e.append(t)})},wrap:function(t){var e=yt(t);return this.each(function(n){wt(this).wrapAll(e?t.call(this,n):t)})},unwrap:function(t){return this.parent(t).not("body").each(function(){wt(this).replaceWith(this.childNodes)}),this}}),wt.expr.pseudos.hidden=function(t){return!wt.expr.pseudos.visible(t)},wt.expr.pseudos.visible=function(t){return!!(t.offsetWidth||t.offsetHeight||t.getClientRects().length)},wt.ajaxSettings.xhr=function(){try{return new t.XMLHttpRequest}catch(t){}};var Qe={0:200,1223:204},Ve=wt.ajaxSettings.xhr();mt.cors=!!Ve&&"withCredentials"in Ve,mt.ajax=Ve=!!Ve,wt.ajaxTransport(function(e){var n,i;if(mt.cors||Ve&&!e.crossDomain)return{send:function(o,r){var s,a=e.xhr();if(a.open(e.type,e.url,e.async,e.username,e.password),e.xhrFields)for(s in e.xhrFields)a[s]=e.xhrFields[s];e.mimeType&&a.overrideMimeType&&a.overrideMimeType(e.mimeType),e.crossDomain||o["X-Requested-With"]||(o["X-Requested-With"]="XMLHttpRequest");for(s in o)a.setRequestHeader(s,o[s]);n=function(t){return function(){n&&(n=i=a.onload=a.onerror=a.onabort=a.ontimeout=a.onreadystatechange=null,"abort"===t?a.abort():"error"===t?"number"!=typeof a.status?r(0,"error"):r(a.status,a.statusText):r(Qe[a.status]||a.status,a.statusText,"text"!==(a.responseType||"text")||"string"!=typeof a.responseText?{binary:a.response}:{text:a.responseText},a.getAllResponseHeaders()))}},a.onload=n(),i=a.onerror=a.ontimeout=n("error"),void 0!==a.onabort?a.onabort=i:a.onreadystatechange=function(){4===a.readyState&&t.setTimeout(function(){n&&i()})},n=n("abort");try{a.send(e.hasContent&&e.data||null)}catch(t){if(n)throw t}},abort:function(){n&&n()}}}),wt.ajaxPrefilter(function(t){t.crossDomain&&(t.contents.script=!1)}),wt.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/\b(?:java|ecma)script\b/},converters:{"text script":function(t){return wt.globalEval(t),t}}}),wt.ajaxPrefilter("script",function(t){void 0===t.cache&&(t.cache=!1),t.crossDomain&&(t.type="GET")}),wt.ajaxTransport("script",function(t){if(t.crossDomain){var e,n;return{send:function(i,o){e=wt("<script>").prop({charset:t.scriptCharset,src:t.url}).on("load error",n=function(t){e.remove(),n=null,t&&o("error"===t.type?404:200,t.type)}),st.head.appendChild(e[0])},abort:function(){n&&n()}}}});var Xe=[],Ge=/(=)\?(?=&|$)|\?\?/;wt.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var t=Xe.pop()||wt.expando+"_"+Ae++;return this[t]=!0,t}}),wt.ajaxPrefilter("json jsonp",function(e,n,i){var o,r,s,a=!1!==e.jsonp&&(Ge.test(e.url)?"url":"string"==typeof e.data&&0===(e.contentType||"").indexOf("application/x-www-form-urlencoded")&&Ge.test(e.data)&&"data");if(a||"jsonp"===e.dataTypes[0])return o=e.jsonpCallback=yt(e.jsonpCallback)?e.jsonpCallback():e.jsonpCallback,a?e[a]=e[a].replace(Ge,"$1"+o):!1!==e.jsonp&&(e.url+=(Ne.test(e.url)?"&":"?")+e.jsonp+"="+o),e.converters["script json"]=function(){return s||wt.error(o+" was not called"),s[0]},e.dataTypes[0]="json",r=t[o],t[o]=function(){s=arguments},i.always(function(){void 0===r?wt(t).removeProp(o):t[o]=r,e[o]&&(e.jsonpCallback=n.jsonpCallback,Xe.push(o)),s&&yt(r)&&r(s[0]),s=r=void 0}),"script"}),mt.createHTMLDocument=function(){var t=st.implementation.createHTMLDocument("").body;return t.innerHTML="<form></form><form></form>",2===t.childNodes.length}(),wt.parseHTML=function(t,e,n){if("string"!=typeof t)return[];"boolean"==typeof e&&(n=e,e=!1);var i,o,r;return e||(mt.createHTMLDocument?((i=(e=st.implementation.createHTMLDocument("")).createElement("base")).href=st.location.href,e.head.appendChild(i)):e=st),o=Dt.exec(t),r=!n&&[],o?[e.createElement(o[1])]:(o=C([t],e,r),r&&r.length&&wt(r).remove(),wt.merge([],o.childNodes))},wt.fn.load=function(t,e,n){var i,o,r,s=this,a=t.indexOf(" ");return a>-1&&(i=Y(t.slice(a)),t=t.slice(0,a)),yt(e)?(n=e,e=void 0):e&&"object"==typeof e&&(o="POST"),s.length>0&&wt.ajax({url:t,type:o||"GET",dataType:"html",data:e}).done(function(t){r=arguments,s.html(i?wt("<div>").append(wt.parseHTML(t)).find(i):t)}).always(n&&function(t,e){s.each(function(){n.apply(this,r||[t.responseText,e,t])})}),this},wt.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(t,e){wt.fn[e]=function(t){return this.on(e,t)}}),wt.expr.pseudos.animated=function(t){return wt.grep(wt.timers,function(e){return t===e.elem}).length},wt.offset={setOffset:function(t,e,n){var i,o,r,s,a,l,u=wt.css(t,"position"),c=wt(t),f={};"static"===u&&(t.style.position="relative"),a=c.offset(),r=wt.css(t,"top"),l=wt.css(t,"left"),("absolute"===u||"fixed"===u)&&(r+l).indexOf("auto")>-1?(s=(i=c.position()).top,o=i.left):(s=parseFloat(r)||0,o=parseFloat(l)||0),yt(e)&&(e=e.call(t,n,wt.extend({},a))),null!=e.top&&(f.top=e.top-a.top+s),null!=e.left&&(f.left=e.left-a.left+o),"using"in e?e.using.call(t,f):c.css(f)}},wt.fn.extend({offset:function(t){if(arguments.length)return void 0===t?this:this.each(function(e){wt.offset.setOffset(this,t,e)});var e,n,i=this[0];return i?i.getClientRects().length?(e=i.getBoundingClientRect(),n=i.ownerDocument.defaultView,{top:e.top+n.pageYOffset,left:e.left+n.pageXOffset}):{top:0,left:0}:void 0},position:function(){if(this[0]){var t,e,n,i=this[0],o={top:0,left:0};if("fixed"===wt.css(i,"position"))e=i.getBoundingClientRect();else{for(e=this.offset(),n=i.ownerDocument,t=i.offsetParent||n.documentElement;t&&(t===n.body||t===n.documentElement)&&"static"===wt.css(t,"position");)t=t.parentNode;t&&t!==i&&1===t.nodeType&&((o=wt(t).offset()).top+=wt.css(t,"borderTopWidth",!0),o.left+=wt.css(t,"borderLeftWidth",!0))}return{top:e.top-o.top-wt.css(i,"marginTop",!0),left:e.left-o.left-wt.css(i,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){for(var t=this.offsetParent;t&&"static"===wt.css(t,"position");)t=t.offsetParent;return t||te})}}),wt.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(t,e){var n="pageYOffset"===e;wt.fn[t]=function(i){return qt(this,function(t,i,o){var r;if(bt(t)?r=t:9===t.nodeType&&(r=t.defaultView),void 0===o)return r?r[e]:t[i];r?r.scrollTo(n?r.pageXOffset:o,n?o:r.pageYOffset):t[i]=o},t,i,arguments.length)}}),wt.each(["top","left"],function(t,e){wt.cssHooks[e]=R(mt.pixelPosition,function(t,n){if(n)return n=q(t,e),le.test(n)?wt(t).position()[e]+"px":n})}),wt.each({Height:"height",Width:"width"},function(t,e){wt.each({padding:"inner"+t,content:e,"":"outer"+t},function(n,i){wt.fn[i]=function(o,r){var s=arguments.length&&(n||"boolean"!=typeof o),a=n||(!0===o||!0===r?"margin":"border");return qt(this,function(e,n,o){var r;return bt(e)?0===i.indexOf("outer")?e["inner"+t]:e.document.documentElement["client"+t]:9===e.nodeType?(r=e.documentElement,Math.max(e.body["scroll"+t],r["scroll"+t],e.body["offset"+t],r["offset"+t],r["client"+t])):void 0===o?wt.css(e,n,a):wt.style(e,n,o,a)},e,s?o:void 0,s)}})}),wt.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "),function(t,e){wt.fn[e]=function(t,n){return arguments.length>0?this.on(e,null,t,n):this.trigger(e)}}),wt.fn.extend({hover:function(t,e){return this.mouseenter(t).mouseleave(e||t)}}),wt.fn.extend({bind:function(t,e,n){return this.on(t,null,e,n)},unbind:function(t,e){return this.off(t,null,e)},delegate:function(t,e,n,i){return this.on(e,t,n,i)},undelegate:function(t,e,n){return 1===arguments.length?this.off(t,"**"):this.off(e,t||"**",n)}}),wt.proxy=function(t,e){var n,i,o;if("string"==typeof e&&(n=t[e],e=t,t=n),yt(t))return i=lt.call(arguments,2),o=function(){return t.apply(e||this,i.concat(lt.call(arguments)))},o.guid=t.guid=t.guid||wt.guid++,o},wt.holdReady=function(t){t?wt.readyWait++:wt.ready(!0)},wt.isArray=Array.isArray,wt.parseJSON=JSON.parse,wt.nodeName=r,wt.isFunction=yt,wt.isWindow=bt,wt.camelCase=h,wt.type=i,wt.now=Date.now,wt.isNumeric=function(t){var e=wt.type(t);return("number"===e||"string"===e)&&!isNaN(t-parseFloat(t))},"function"==typeof define&&define.amd&&define("jquery",[],function(){return wt});var Ye=t.jQuery,Je=t.$;return wt.noConflict=function(e){return t.$===wt&&(t.$=Je),e&&t.jQuery===wt&&(t.jQuery=Ye),wt},e||(t.jQuery=t.$=wt),wt}),"undefined"==typeof jQuery)throw new Error("Bootstrap's JavaScript requires jQuery");+function(t){"use strict";var e=t.fn.jquery.split(" ")[0].split(".");if(e[0]<2&&e[1]<9||1==e[0]&&9==e[1]&&e[2]<1)throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher")}(jQuery),function(t){"use strict";function e(){var t=document.createElement("bootstrap"),e={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(var n in e)if(void 0!==t.style[n])return{end:e[n]};return!1}t.fn.emulateTransitionEnd=function(e){var n=!1,i=this;t(this).one("bsTransitionEnd",function(){n=!0});var o=function(){n||t(i).trigger(t.support.transition.end)};return setTimeout(o,e),this},t(function(){t.support.transition=e(),t.support.transition&&(t.event.special.bsTransitionEnd={bindType:t.support.transition.end,delegateType:t.support.transition.end,handle:function(e){if(t(e.target).is(this))return e.handleObj.handler.apply(this,arguments)}})})}(jQuery),function(t){"use strict";function e(e){return this.each(function(){var n=t(this),o=n.data("bs.alert");o||n.data("bs.alert",o=new i(this)),"string"==typeof e&&o[e].call(n)})}var n='[data-dismiss="alert"]',i=function(e){t(e).on("click",n,this.close)};i.VERSION="3.3.2",i.TRANSITION_DURATION=150,i.prototype.close=function(e){function n(){s.detach().trigger("closed.bs.alert").remove()}var o=t(this),r=o.attr("data-target");r||(r=o.attr("href"),r=r&&r.replace(/.*(?=#[^\s]*$)/,""));var s=t(r);e&&e.preventDefault(),s.length||(s=o.closest(".alert")),s.trigger(e=t.Event("close.bs.alert")),e.isDefaultPrevented()||(s.removeClass("in"),t.support.transition&&s.hasClass("fade")?s.one("bsTransitionEnd",n).emulateTransitionEnd(i.TRANSITION_DURATION):n())};var o=t.fn.alert;t.fn.alert=e,t.fn.alert.Constructor=i,t.fn.alert.noConflict=function(){return t.fn.alert=o,this},t(document).on("click.bs.alert.data-api",n,i.prototype.close)}(jQuery),function(t){"use strict";function e(e){return this.each(function(){var i=t(this),o=i.data("bs.button"),r="object"==typeof e&&e;o||i.data("bs.button",o=new n(this,r)),"toggle"==e?o.toggle():e&&o.setState(e)})}var n=function(e,i){this.$element=t(e),this.options=t.extend({},n.DEFAULTS,i),this.isLoading=!1};n.VERSION="3.3.2",n.DEFAULTS={loadingText:"loading..."},n.prototype.setState=function(e){var n="disabled",i=this.$element,o=i.is("input")?"val":"html",r=i.data();e+="Text",null==r.resetText&&i.data("resetText",i[o]()),setTimeout(t.proxy(function(){i[o](null==r[e]?this.options[e]:r[e]),"loadingText"==e?(this.isLoading=!0,i.addClass(n).attr(n,n)):this.isLoading&&(this.isLoading=!1,i.removeClass(n).removeAttr(n))},this),0)},n.prototype.toggle=function(){var t=!0,e=this.$element.closest('[data-toggle="buttons"]');if(e.length){var n=this.$element.find("input");"radio"==n.prop("type")&&(n.prop("checked")&&this.$element.hasClass("active")?t=!1:e.find(".active").removeClass("active")),t&&n.prop("checked",!this.$element.hasClass("active")).trigger("change")}else this.$element.attr("aria-pressed",!this.$element.hasClass("active"));t&&this.$element.toggleClass("active")};var i=t.fn.button;t.fn.button=e,t.fn.button.Constructor=n,t.fn.button.noConflict=function(){return t.fn.button=i,this},t(document).on("click.bs.button.data-api",'[data-toggle^="button"]',function(n){var i=t(n.target);i.hasClass("btn")||(i=i.closest(".btn")),e.call(i,"toggle"),n.preventDefault()}).on("focus.bs.button.data-api blur.bs.button.data-api",'[data-toggle^="button"]',function(e){t(e.target).closest(".btn").toggleClass("focus",/^focus(in)?$/.test(e.type))})}(jQuery),function(t){"use strict";function e(e){return this.each(function(){var i=t(this),o=i.data("bs.carousel"),r=t.extend({},n.DEFAULTS,i.data(),"object"==typeof e&&e),s="string"==typeof e?e:r.slide;o||i.data("bs.carousel",o=new n(this,r)),"number"==typeof e?o.to(e):s?o[s]():r.interval&&o.pause().cycle()})}var n=function(e,n){this.$element=t(e),this.$indicators=this.$element.find(".carousel-indicators"),this.options=n,this.paused=this.sliding=this.interval=this.$active=this.$items=null,this.options.keyboard&&this.$element.on("keydown.bs.carousel",t.proxy(this.keydown,this)),"hover"==this.options.pause&&!("ontouchstart"in document.documentElement)&&this.$element.on("mouseenter.bs.carousel",t.proxy(this.pause,this)).on("mouseleave.bs.carousel",t.proxy(this.cycle,this))};n.VERSION="3.3.2",n.TRANSITION_DURATION=600,n.DEFAULTS={interval:5e3,pause:"hover",wrap:!0,keyboard:!0},n.prototype.keydown=function(t){if(!/input|textarea/i.test(t.target.tagName)){switch(t.which){case 37:this.prev();break;case 39:this.next();break;default:return}t.preventDefault()}},n.prototype.cycle=function(e){return e||(this.paused=!1),this.interval&&clearInterval(this.interval),this.options.interval&&!this.paused&&(this.interval=setInterval(t.proxy(this.next,this),this.options.interval)),this},n.prototype.getItemIndex=function(t){return this.$items=t.parent().children(".item"),this.$items.index(t||this.$active)},n.prototype.getItemForDirection=function(t,e){var n=this.getItemIndex(e);if(("prev"==t&&0===n||"next"==t&&n==this.$items.length-1)&&!this.options.wrap)return e;var i="prev"==t?-1:1,o=(n+i)%this.$items.length;return this.$items.eq(o)},n.prototype.to=function(t){var e=this,n=this.getItemIndex(this.$active=this.$element.find(".item.active"));if(!(t>this.$items.length-1||t<0))return this.sliding?this.$element.one("slid.bs.carousel",function(){e.to(t)}):n==t?this.pause().cycle():this.slide(t>n?"next":"prev",this.$items.eq(t))},n.prototype.pause=function(e){return e||(this.paused=!0),this.$element.find(".next, .prev").length&&t.support.transition&&(this.$element.trigger(t.support.transition.end),this.cycle(!0)),this.interval=clearInterval(this.interval),this},n.prototype.next=function(){if(!this.sliding)return this.slide("next")},n.prototype.prev=function(){if(!this.sliding)return this.slide("prev")},n.prototype.slide=function(e,i){var o=this.$element.find(".item.active"),r=i||this.getItemForDirection(e,o),s=this.interval,a="next"==e?"left":"right",l=this;if(r.hasClass("active"))return this.sliding=!1;var u=r[0],c=t.Event("slide.bs.carousel",{relatedTarget:u,direction:a});if(this.$element.trigger(c),!c.isDefaultPrevented()){if(this.sliding=!0,s&&this.pause(),this.$indicators.length){this.$indicators.find(".active").removeClass("active");var f=t(this.$indicators.children()[this.getItemIndex(r)]);f&&f.addClass("active")}var p=t.Event("slid.bs.carousel",{relatedTarget:u,direction:a});return t.support.transition&&this.$element.hasClass("slide")?(r.addClass(e),r[0].offsetWidth,o.addClass(a),r.addClass(a),o.one("bsTransitionEnd",function(){r.removeClass([e,a].join(" ")).addClass("active"),o.removeClass(["active",a].join(" ")),l.sliding=!1,setTimeout(function(){l.$element.trigger(p)},0)}).emulateTransitionEnd(n.TRANSITION_DURATION)):(o.removeClass("active"),r.addClass("active"),this.sliding=!1,this.$element.trigger(p)),s&&this.cycle(),this}};var i=t.fn.carousel;t.fn.carousel=e,t.fn.carousel.Constructor=n,t.fn.carousel.noConflict=function(){return t.fn.carousel=i,this};var o=function(n){var i,o=t(this),r=t(o.attr("data-target")||(i=o.attr("href"))&&i.replace(/.*(?=#[^\s]+$)/,""));if(r.hasClass("carousel")){var s=t.extend({},r.data(),o.data()),a=o.attr("data-slide-to");a&&(s.interval=!1),e.call(r,s),a&&r.data("bs.carousel").to(a),n.preventDefault()}};t(document).on("click.bs.carousel.data-api","[data-slide]",o).on("click.bs.carousel.data-api","[data-slide-to]",o),t(window).on("load",function(){t('[data-ride="carousel"]').each(function(){var n=t(this);e.call(n,n.data())})})}(jQuery),function(t){"use strict";function e(e){var n,i=e.attr("data-target")||(n=e.attr("href"))&&n.replace(/.*(?=#[^\s]+$)/,"");return t(i)}function n(e){return this.each(function(){var n=t(this),o=n.data("bs.collapse"),r=t.extend({},i.DEFAULTS,n.data(),"object"==typeof e&&e);!o&&r.toggle&&"show"==e&&(r.toggle=!1),o||n.data("bs.collapse",o=new i(this,r)),"string"==typeof e&&o[e]()})}var i=function(e,n){this.$element=t(e),this.options=t.extend({},i.DEFAULTS,n),this.$trigger=t(this.options.trigger).filter('[href="#'+e.id+'"], [data-target="#'+e.id+'"]'),this.transitioning=null,this.options.parent?this.$parent=this.getParent():this.addAriaAndCollapsedClass(this.$element,this.$trigger),this.options.toggle&&this.toggle()};i.VERSION="3.3.2",i.TRANSITION_DURATION=350,i.DEFAULTS={toggle:!0,trigger:'[data-toggle="collapse"]'},i.prototype.dimension=function(){return this.$element.hasClass("width")?"width":"height"},i.prototype.show=function(){if(!this.transitioning&&!this.$element.hasClass("in")){var e,o=this.$parent&&this.$parent.children(".panel").children(".in, .collapsing");if(!(o&&o.length&&(e=o.data("bs.collapse"))&&e.transitioning)){var r=t.Event("show.bs.collapse");if(this.$element.trigger(r),!r.isDefaultPrevented()){o&&o.length&&(n.call(o,"hide"),e||o.data("bs.collapse",null));var s=this.dimension();this.$element.removeClass("collapse").addClass("collapsing")[s](0).attr("aria-expanded",!0),this.$trigger.removeClass("collapsed").attr("aria-expanded",!0),this.transitioning=1;var a=function(){this.$element.removeClass("collapsing").addClass("collapse in")[s](""),this.transitioning=0,this.$element.trigger("shown.bs.collapse")};if(!t.support.transition)return a.call(this);var l=t.camelCase(["scroll",s].join("-"));this.$element.one("bsTransitionEnd",t.proxy(a,this)).emulateTransitionEnd(i.TRANSITION_DURATION)[s](this.$element[0][l])}}}},i.prototype.hide=function(){if(!this.transitioning&&this.$element.hasClass("in")){var e=t.Event("hide.bs.collapse");if(this.$element.trigger(e),!e.isDefaultPrevented()){var n=this.dimension();this.$element[n](this.$element[n]())[0].offsetHeight,this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded",!1),this.$trigger.addClass("collapsed").attr("aria-expanded",!1),this.transitioning=1;var o=function(){this.transitioning=0,this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")};if(!t.support.transition)return o.call(this);this.$element[n](0).one("bsTransitionEnd",t.proxy(o,this)).emulateTransitionEnd(i.TRANSITION_DURATION)}}},i.prototype.toggle=function(){this[this.$element.hasClass("in")?"hide":"show"]()},i.prototype.getParent=function(){return t(this.options.parent).find('[data-toggle="collapse"][data-parent="'+this.options.parent+'"]').each(t.proxy(function(n,i){var o=t(i);this.addAriaAndCollapsedClass(e(o),o)},this)).end()},i.prototype.addAriaAndCollapsedClass=function(t,e){var n=t.hasClass("in");t.attr("aria-expanded",n),e.toggleClass("collapsed",!n).attr("aria-expanded",n)};var o=t.fn.collapse;t.fn.collapse=n,t.fn.collapse.Constructor=i,t.fn.collapse.noConflict=function(){return t.fn.collapse=o,this},t(document).on("click.bs.collapse.data-api",'[data-toggle="collapse"]',function(i){var o=t(this);o.attr("data-target")||i.preventDefault();var r=e(o),s=r.data("bs.collapse"),a=s?"toggle":t.extend({},o.data(),{trigger:this});n.call(r,a)})}(jQuery),function(t){"use strict";function e(e){e&&3===e.which||(t(o).remove(),t(r).each(function(){var i=t(this),o=n(i),r={relatedTarget:this};o.hasClass("open")&&(o.trigger(e=t.Event("hide.bs.dropdown",r)),e.isDefaultPrevented()||(i.attr("aria-expanded","false"),o.removeClass("open").trigger("hidden.bs.dropdown",r)))}))}function n(e){var n=e.attr("data-target");n||(n=e.attr("href"),n=n&&/#[A-Za-z]/.test(n)&&n.replace(/.*(?=#[^\s]*$)/,""));var i=n&&t(n);return i&&i.length?i:e.parent()}function i(e){return this.each(function(){var n=t(this),i=n.data("bs.dropdown");i||n.data("bs.dropdown",i=new s(this)),"string"==typeof e&&i[e].call(n)})}var o=".dropdown-backdrop",r='[data-toggle="dropdown"]',s=function(e){t(e).on("click.bs.dropdown",this.toggle)};s.VERSION="3.3.2",s.prototype.toggle=function(i){var o=t(this);if(!o.is(".disabled, :disabled")){var r=n(o),s=r.hasClass("open");if(e(),!s){"ontouchstart"in document.documentElement&&!r.closest(".navbar-nav").length&&t('<div class="dropdown-backdrop"/>').insertAfter(t(this)).on("click",e);var a={relatedTarget:this};if(r.trigger(i=t.Event("show.bs.dropdown",a)),i.isDefaultPrevented())return;o.trigger("focus").attr("aria-expanded","true"),r.toggleClass("open").trigger("shown.bs.dropdown",a)}return!1}},s.prototype.keydown=function(e){if(/(38|40|27|32)/.test(e.which)&&!/input|textarea/i.test(e.target.tagName)){var i=t(this);if(e.preventDefault(),e.stopPropagation(),!i.is(".disabled, :disabled")){var o=n(i),s=o.hasClass("open");if(!s&&27!=e.which||s&&27==e.which)return 27==e.which&&o.find(r).trigger("focus"),i.trigger("click");var a=" li:not(.divider):visible a",l=o.find('[role="menu"]'+a+', [role="listbox"]'+a);if(l.length){var u=l.index(e.target);38==e.which&&u>0&&u--,40==e.which&&u<l.length-1&&u++,~u||(u=0),l.eq(u).trigger("focus")}}}};var a=t.fn.dropdown;t.fn.dropdown=i,t.fn.dropdown.Constructor=s,t.fn.dropdown.noConflict=function(){return t.fn.dropdown=a,this},t(document).on("click.bs.dropdown.data-api",e).on("click.bs.dropdown.data-api",".dropdown form",function(t){t.stopPropagation()}).on("click.bs.dropdown.data-api",r,s.prototype.toggle).on("keydown.bs.dropdown.data-api",r,s.prototype.keydown).on("keydown.bs.dropdown.data-api",'[role="menu"]',s.prototype.keydown).on("keydown.bs.dropdown.data-api",'[role="listbox"]',s.prototype.keydown)}(jQuery),function(t){"use strict";function e(e,i){return this.each(function(){var o=t(this),r=o.data("bs.modal"),s=t.extend({},n.DEFAULTS,o.data(),"object"==typeof e&&e);r||o.data("bs.modal",r=new n(this,s)),"string"==typeof e?r[e](i):s.show&&r.show(i)})}var n=function(e,n){this.options=n,this.$body=t(document.body),this.$element=t(e),this.$backdrop=this.isShown=null,this.scrollbarWidth=0,this.options.remote&&this.$element.find(".modal-content").load(this.options.remote,t.proxy(function(){this.$element.trigger("loaded.bs.modal")},this))};n.VERSION="3.3.2",n.TRANSITION_DURATION=300,n.BACKDROP_TRANSITION_DURATION=150,n.DEFAULTS={backdrop:!0,keyboard:!0,show:!0},n.prototype.toggle=function(t){return this.isShown?this.hide():this.show(t)},n.prototype.show=function(e){var i=this,o=t.Event("show.bs.modal",{relatedTarget:e});this.$element.trigger(o),this.isShown||o.isDefaultPrevented()||(this.isShown=!0,this.checkScrollbar(),this.setScrollbar(),this.$body.addClass("modal-open"),this.escape(),this.resize(),this.$element.on("click.dismiss.bs.modal",'[data-dismiss="modal"]',t.proxy(this.hide,this)),this.backdrop(function(){var o=t.support.transition&&i.$element.hasClass("fade");i.$element.parent().length||i.$element.appendTo(i.$body),i.$element.show().scrollTop(0),i.options.backdrop&&i.adjustBackdrop(),i.adjustDialog(),o&&i.$element[0].offsetWidth,i.$element.addClass("in").attr("aria-hidden",!1),i.enforceFocus();var r=t.Event("shown.bs.modal",{relatedTarget:e});o?i.$element.find(".modal-dialog").one("bsTransitionEnd",function(){i.$element.trigger("focus").trigger(r)}).emulateTransitionEnd(n.TRANSITION_DURATION):i.$element.trigger("focus").trigger(r)}))},n.prototype.hide=function(e){e&&e.preventDefault(),e=t.Event("hide.bs.modal"),this.$element.trigger(e),this.isShown&&!e.isDefaultPrevented()&&(this.isShown=!1,this.escape(),this.resize(),t(document).off("focusin.bs.modal"),this.$element.removeClass("in").attr("aria-hidden",!0).off("click.dismiss.bs.modal"),t.support.transition&&this.$element.hasClass("fade")?this.$element.one("bsTransitionEnd",t.proxy(this.hideModal,this)).emulateTransitionEnd(n.TRANSITION_DURATION):this.hideModal())},n.prototype.enforceFocus=function(){t(document).off("focusin.bs.modal").on("focusin.bs.modal",t.proxy(function(t){this.$element[0]===t.target||this.$element.has(t.target).length||this.$element.trigger("focus")},this))},n.prototype.escape=function(){this.isShown&&this.options.keyboard?this.$element.on("keydown.dismiss.bs.modal",t.proxy(function(t){27==t.which&&this.hide()},this)):this.isShown||this.$element.off("keydown.dismiss.bs.modal")},n.prototype.resize=function(){this.isShown?t(window).on("resize.bs.modal",t.proxy(this.handleUpdate,this)):t(window).off("resize.bs.modal")},n.prototype.hideModal=function(){var t=this;this.$element.hide(),this.backdrop(function(){t.$body.removeClass("modal-open"),t.resetAdjustments(),t.resetScrollbar(),t.$element.trigger("hidden.bs.modal")})},n.prototype.removeBackdrop=function(){this.$backdrop&&this.$backdrop.remove(),this.$backdrop=null},n.prototype.backdrop=function(e){var i=this,o=this.$element.hasClass("fade")?"fade":"";if(this.isShown&&this.options.backdrop){var r=t.support.transition&&o;if(this.$backdrop=t('<div class="modal-backdrop '+o+'" />').prependTo(this.$element).on("click.dismiss.bs.modal",t.proxy(function(t){t.target===t.currentTarget&&("static"==this.options.backdrop?this.$element[0].focus.call(this.$element[0]):this.hide.call(this))},this)),r&&this.$backdrop[0].offsetWidth,this.$backdrop.addClass("in"),!e)return;r?this.$backdrop.one("bsTransitionEnd",e).emulateTransitionEnd(n.BACKDROP_TRANSITION_DURATION):e()}else if(!this.isShown&&this.$backdrop){this.$backdrop.removeClass("in");var s=function(){i.removeBackdrop(),e&&e()};t.support.transition&&this.$element.hasClass("fade")?this.$backdrop.one("bsTransitionEnd",s).emulateTransitionEnd(n.BACKDROP_TRANSITION_DURATION):s()}else e&&e()},n.prototype.handleUpdate=function(){this.options.backdrop&&this.adjustBackdrop(),this.adjustDialog()},n.prototype.adjustBackdrop=function(){this.$backdrop.css("height",0).css("height",this.$element[0].scrollHeight)},n.prototype.adjustDialog=function(){var t=this.$element[0].scrollHeight>document.documentElement.clientHeight;this.$element.css({paddingLeft:!this.bodyIsOverflowing&&t?this.scrollbarWidth:"",paddingRight:this.bodyIsOverflowing&&!t?this.scrollbarWidth:""})},n.prototype.resetAdjustments=function(){this.$element.css({paddingLeft:"",paddingRight:""})},n.prototype.checkScrollbar=function(){this.bodyIsOverflowing=document.body.scrollHeight>document.documentElement.clientHeight,this.scrollbarWidth=this.measureScrollbar()},n.prototype.setScrollbar=function(){var t=parseInt(this.$body.css("padding-right")||0,10);this.bodyIsOverflowing&&this.$body.css("padding-right",t+this.scrollbarWidth)},n.prototype.resetScrollbar=function(){this.$body.css("padding-right","")},n.prototype.measureScrollbar=function(){var t=document.createElement("div");t.className="modal-scrollbar-measure",this.$body.append(t);var e=t.offsetWidth-t.clientWidth;return this.$body[0].removeChild(t),e};var i=t.fn.modal;t.fn.modal=e,t.fn.modal.Constructor=n,t.fn.modal.noConflict=function(){return t.fn.modal=i,this},t(document).on("click.bs.modal.data-api",'[data-toggle="modal"]',function(n){var i=t(this),o=i.attr("href"),r=t(i.attr("data-target")||o&&o.replace(/.*(?=#[^\s]+$)/,"")),s=r.data("bs.modal")?"toggle":t.extend({remote:!/#/.test(o)&&o},r.data(),i.data());i.is("a")&&n.preventDefault(),r.one("show.bs.modal",function(t){t.isDefaultPrevented()||r.one("hidden.bs.modal",function(){i.is(":visible")&&i.trigger("focus")})}),e.call(r,s,this)})}(jQuery),function(t){"use strict";function e(e){return this.each(function(){var i=t(this),o=i.data("bs.tooltip"),r="object"==typeof e&&e;(o||"destroy"!=e)&&(o||i.data("bs.tooltip",o=new n(this,r)),"string"==typeof e&&o[e]())})}var n=function(t,e){this.type=this.options=this.enabled=this.timeout=this.hoverState=this.$element=null,this.init("tooltip",t,e)};n.VERSION="3.3.2",n.TRANSITION_DURATION=150,n.DEFAULTS={animation:!0,placement:"top",selector:!1,template:'<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,container:!1,viewport:{selector:"body",padding:0}},n.prototype.init=function(e,n,i){this.enabled=!0,this.type=e,this.$element=t(n),this.options=this.getOptions(i),this.$viewport=this.options.viewport&&t(this.options.viewport.selector||this.options.viewport);for(var o=this.options.trigger.split(" "),r=o.length;r--;){var s=o[r];if("click"==s)this.$element.on("click."+this.type,this.options.selector,t.proxy(this.toggle,this));else if("manual"!=s){var a="hover"==s?"mouseenter":"focusin",l="hover"==s?"mouseleave":"focusout";this.$element.on(a+"."+this.type,this.options.selector,t.proxy(this.enter,this)),this.$element.on(l+"."+this.type,this.options.selector,t.proxy(this.leave,this))}}this.options.selector?this._options=t.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},n.prototype.getDefaults=function(){return n.DEFAULTS},n.prototype.getOptions=function(e){return e=t.extend({},this.getDefaults(),this.$element.data(),e),e.delay&&"number"==typeof e.delay&&(e.delay={show:e.delay,hide:e.delay}),e},n.prototype.getDelegateOptions=function(){var e={},n=this.getDefaults();return this._options&&t.each(this._options,function(t,i){n[t]!=i&&(e[t]=i)}),e},n.prototype.enter=function(e){var n=e instanceof this.constructor?e:t(e.currentTarget).data("bs."+this.type);return n&&n.$tip&&n.$tip.is(":visible")?void(n.hoverState="in"):(n||(n=new this.constructor(e.currentTarget,this.getDelegateOptions()),t(e.currentTarget).data("bs."+this.type,n)),clearTimeout(n.timeout),n.hoverState="in",n.options.delay&&n.options.delay.show?void(n.timeout=setTimeout(function(){"in"==n.hoverState&&n.show()},n.options.delay.show)):n.show())},n.prototype.leave=function(e){var n=e instanceof this.constructor?e:t(e.currentTarget).data("bs."+this.type);if(n||(n=new this.constructor(e.currentTarget,this.getDelegateOptions()),t(e.currentTarget).data("bs."+this.type,n)),clearTimeout(n.timeout),n.hoverState="out",!n.options.delay||!n.options.delay.hide)return n.hide();n.timeout=setTimeout(function(){"out"==n.hoverState&&n.hide()},n.options.delay.hide)},n.prototype.show=function(){var e=t.Event("show.bs."+this.type);if(this.hasContent()&&this.enabled){this.$element.trigger(e);var i=t.contains(this.$element[0].ownerDocument.documentElement,this.$element[0]);if(e.isDefaultPrevented()||!i)return;var o=this,r=this.tip(),s=this.getUID(this.type);this.setContent(),r.attr("id",s),this.$element.attr("aria-describedby",s),this.options.animation&&r.addClass("fade");var a="function"==typeof this.options.placement?this.options.placement.call(this,r[0],this.$element[0]):this.options.placement,l=/\s?auto?\s?/i,u=l.test(a);u&&(a=a.replace(l,"")||"top"),r.detach().css({top:0,left:0,display:"block"}).addClass(a).data("bs."+this.type,this),this.options.container?r.appendTo(this.options.container):r.insertAfter(this.$element);var c=this.getPosition(),f=r[0].offsetWidth,p=r[0].offsetHeight;if(u){var d=a,h=this.options.container?t(this.options.container):this.$element.parent(),g=this.getPosition(h);a="bottom"==a&&c.bottom+p>g.bottom?"top":"top"==a&&c.top-p<g.top?"bottom":"right"==a&&c.right+f>g.width?"left":"left"==a&&c.left-f<g.left?"right":a,r.removeClass(d).addClass(a)}var v=this.getCalculatedOffset(a,c,f,p);this.applyPlacement(v,a);var m=function(){var t=o.hoverState;o.$element.trigger("shown.bs."+o.type),o.hoverState=null,"out"==t&&o.leave(o)};t.support.transition&&this.$tip.hasClass("fade")?r.one("bsTransitionEnd",m).emulateTransitionEnd(n.TRANSITION_DURATION):m()}},n.prototype.applyPlacement=function(e,n){var i=this.tip(),o=i[0].offsetWidth,r=i[0].offsetHeight,s=parseInt(i.css("margin-top"),10),a=parseInt(i.css("margin-left"),10);isNaN(s)&&(s=0),isNaN(a)&&(a=0),e.top=e.top+s,e.left=e.left+a,t.offset.setOffset(i[0],t.extend({using:function(t){i.css({top:Math.round(t.top),left:Math.round(t.left)})}},e),0),i.addClass("in");var l=i[0].offsetWidth,u=i[0].offsetHeight;"top"==n&&u!=r&&(e.top=e.top+r-u);var c=this.getViewportAdjustedDelta(n,e,l,u);c.left?e.left+=c.left:e.top+=c.top;var f=/top|bottom/.test(n),p=f?2*c.left-o+l:2*c.top-r+u,d=f?"offsetWidth":"offsetHeight";i.offset(e),this.replaceArrow(p,i[0][d],f)},n.prototype.replaceArrow=function(t,e,n){this.arrow().css(n?"left":"top",50*(1-t/e)+"%").css(n?"top":"left","")},n.prototype.setContent=function(){var t=this.tip(),e=this.getTitle();t.find(".tooltip-inner")[this.options.html?"html":"text"](e),t.removeClass("fade in top bottom left right")},n.prototype.hide=function(e){function i(){"in"!=o.hoverState&&r.detach(),o.$element.removeAttr("aria-describedby").trigger("hidden.bs."+o.type),e&&e()}var o=this,r=this.tip(),s=t.Event("hide.bs."+this.type);if(this.$element.trigger(s),!s.isDefaultPrevented())return r.removeClass("in"),t.support.transition&&this.$tip.hasClass("fade")?r.one("bsTransitionEnd",i).emulateTransitionEnd(n.TRANSITION_DURATION):i(),this.hoverState=null,this},n.prototype.fixTitle=function(){var t=this.$element;(t.attr("title")||"string"!=typeof t.attr("data-original-title"))&&t.attr("data-original-title",t.attr("title")||"").attr("title","")},n.prototype.hasContent=function(){return this.getTitle()},n.prototype.getPosition=function(e){e=e||this.$element;var n=e[0],i="BODY"==n.tagName,o=n.getBoundingClientRect();null==o.width&&(o=t.extend({},o,{width:o.right-o.left,height:o.bottom-o.top}));var r=i?{top:0,left:0}:e.offset(),s={scroll:i?document.documentElement.scrollTop||document.body.scrollTop:e.scrollTop()},a=i?{width:t(window).width(),height:t(window).height()}:null;return t.extend({},o,s,a,r)},n.prototype.getCalculatedOffset=function(t,e,n,i){return"bottom"==t?{top:e.top+e.height,left:e.left+e.width/2-n/2}:"top"==t?{top:e.top-i,left:e.left+e.width/2-n/2}:"left"==t?{top:e.top+e.height/2-i/2,left:e.left-n}:{top:e.top+e.height/2-i/2,left:e.left+e.width}},n.prototype.getViewportAdjustedDelta=function(t,e,n,i){var o={top:0,left:0};if(!this.$viewport)return o;var r=this.options.viewport&&this.options.viewport.padding||0,s=this.getPosition(this.$viewport);if(/right|left/.test(t)){var a=e.top-r-s.scroll,l=e.top+r-s.scroll+i;a<s.top?o.top=s.top-a:l>s.top+s.height&&(o.top=s.top+s.height-l)}else{var u=e.left-r,c=e.left+r+n;u<s.left?o.left=s.left-u:c>s.width&&(o.left=s.left+s.width-c)}return o},n.prototype.getTitle=function(){var t=this.$element,e=this.options;return t.attr("data-original-title")||("function"==typeof e.title?e.title.call(t[0]):e.title)},n.prototype.getUID=function(t){do{t+=~~(1e6*Math.random())}while(document.getElementById(t));return t},n.prototype.tip=function(){return this.$tip=this.$tip||t(this.options.template)},n.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".tooltip-arrow")},n.prototype.enable=function(){this.enabled=!0},n.prototype.disable=function(){this.enabled=!1},n.prototype.toggleEnabled=function(){this.enabled=!this.enabled},n.prototype.toggle=function(e){var n=this;e&&((n=t(e.currentTarget).data("bs."+this.type))||(n=new this.constructor(e.currentTarget,this.getDelegateOptions()),t(e.currentTarget).data("bs."+this.type,n))),n.tip().hasClass("in")?n.leave(n):n.enter(n)},n.prototype.destroy=function(){var t=this;clearTimeout(this.timeout),this.hide(function(){t.$element.off("."+t.type).removeData("bs."+t.type)})};var i=t.fn.tooltip;t.fn.tooltip=e,t.fn.tooltip.Constructor=n,t.fn.tooltip.noConflict=function(){return t.fn.tooltip=i,this}}(jQuery),function(t){"use strict";function e(e){return this.each(function(){var i=t(this),o=i.data("bs.popover"),r="object"==typeof e&&e;(o||"destroy"!=e)&&(o||i.data("bs.popover",o=new n(this,r)),"string"==typeof e&&o[e]())})}var n=function(t,e){this.init("popover",t,e)};if(!t.fn.tooltip)throw new Error("Popover requires tooltip.js");n.VERSION="3.3.2",n.DEFAULTS=t.extend({},t.fn.tooltip.Constructor.DEFAULTS,{placement:"right",trigger:"click",content:"",template:'<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'}),n.prototype=t.extend({},t.fn.tooltip.Constructor.prototype),n.prototype.constructor=n,n.prototype.getDefaults=function(){return n.DEFAULTS},n.prototype.setContent=function(){var t=this.tip(),e=this.getTitle(),n=this.getContent();t.find(".popover-title")[this.options.html?"html":"text"](e),t.find(".popover-content").children().detach().end()[this.options.html?"string"==typeof n?"html":"append":"text"](n),t.removeClass("fade top bottom left right in"),t.find(".popover-title").html()||t.find(".popover-title").hide()},n.prototype.hasContent=function(){return this.getTitle()||this.getContent()},n.prototype.getContent=function(){var t=this.$element,e=this.options;return t.attr("data-content")||("function"==typeof e.content?e.content.call(t[0]):e.content)},n.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".arrow")},n.prototype.tip=function(){return this.$tip||(this.$tip=t(this.options.template)),this.$tip};var i=t.fn.popover;t.fn.popover=e,t.fn.popover.Constructor=n,t.fn.popover.noConflict=function(){return t.fn.popover=i,this}}(jQuery),function(t){"use strict";function e(n,i){var o=t.proxy(this.process,this);this.$body=t("body"),this.$scrollElement=t(t(n).is("body")?window:n),this.options=t.extend({},e.DEFAULTS,i),this.selector=(this.options.target||"")+" .nav li > a",this.offsets=[],this.targets=[],this.activeTarget=null,this.scrollHeight=0,this.$scrollElement.on("scroll.bs.scrollspy",o),this.refresh(),this.process()}function n(n){return this.each(function(){var i=t(this),o=i.data("bs.scrollspy"),r="object"==typeof n&&n;o||i.data("bs.scrollspy",o=new e(this,r)),"string"==typeof n&&o[n]()})}e.VERSION="3.3.2",e.DEFAULTS={offset:10},e.prototype.getScrollHeight=function(){return this.$scrollElement[0].scrollHeight||Math.max(this.$body[0].scrollHeight,document.documentElement.scrollHeight)},e.prototype.refresh=function(){var e="offset",n=0;t.isWindow(this.$scrollElement[0])||(e="position",n=this.$scrollElement.scrollTop()),this.offsets=[],this.targets=[],this.scrollHeight=this.getScrollHeight();var i=this;this.$body.find(this.selector).map(function(){var i=t(this),o=i.data("target")||i.attr("href"),r=/^#./.test(o)&&t(o);return r&&r.length&&r.is(":visible")&&[[r[e]().top+n,o]]||null}).sort(function(t,e){return t[0]-e[0]}).each(function(){i.offsets.push(this[0]),i.targets.push(this[1])})},e.prototype.process=function(){var t,e=this.$scrollElement.scrollTop()+this.options.offset,n=this.getScrollHeight(),i=this.options.offset+n-this.$scrollElement.height(),o=this.offsets,r=this.targets,s=this.activeTarget;if(this.scrollHeight!=n&&this.refresh(),e>=i)return s!=(t=r[r.length-1])&&this.activate(t);if(s&&e<o[0])return this.activeTarget=null,this.clear();for(t=o.length;t--;)s!=r[t]&&e>=o[t]&&(!o[t+1]||e<=o[t+1])&&this.activate(r[t])},e.prototype.activate=function(e){this.activeTarget=e,this.clear();var n=this.selector+'[data-target="'+e+'"],'+this.selector+'[href="'+e+'"]',i=t(n).parents("li").addClass("active");i.parent(".dropdown-menu").length&&(i=i.closest("li.dropdown").addClass("active")),i.trigger("activate.bs.scrollspy")},e.prototype.clear=function(){t(this.selector).parentsUntil(this.options.target,".active").removeClass("active")};var i=t.fn.scrollspy;t.fn.scrollspy=n,t.fn.scrollspy.Constructor=e,t.fn.scrollspy.noConflict=function(){return t.fn.scrollspy=i,this},t(window).on("load.bs.scrollspy.data-api",function(){t('[data-spy="scroll"]').each(function(){var e=t(this);n.call(e,e.data())})})}(jQuery),function(t){"use strict";function e(e){return this.each(function(){var i=t(this),o=i.data("bs.tab");o||i.data("bs.tab",o=new n(this)),"string"==typeof e&&o[e]()})}var n=function(e){this.element=t(e)};n.VERSION="3.3.2",n.TRANSITION_DURATION=150,n.prototype.show=function(){var e=this.element,n=e.closest("ul:not(.dropdown-menu)"),i=e.data("target");if(i||(i=e.attr("href"),i=i&&i.replace(/.*(?=#[^\s]*$)/,"")),!e.parent("li").hasClass("active")){var o=n.find(".active:last a"),r=t.Event("hide.bs.tab",{relatedTarget:e[0]}),s=t.Event("show.bs.tab",{relatedTarget:o[0]});if(o.trigger(r),e.trigger(s),!s.isDefaultPrevented()&&!r.isDefaultPrevented()){var a=t(i);this.activate(e.closest("li"),n),this.activate(a,a.parent(),function(){o.trigger({type:"hidden.bs.tab",relatedTarget:e[0]}),e.trigger({type:"shown.bs.tab",relatedTarget:o[0]})})}}},n.prototype.activate=function(e,i,o){function r(){s.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!1),e.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded",!0),a?(e[0].offsetWidth,e.addClass("in")):e.removeClass("fade"),e.parent(".dropdown-menu")&&e.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!0),o&&o()}var s=i.find("> .active"),a=o&&t.support.transition&&(s.length&&s.hasClass("fade")||!!i.find("> .fade").length);s.length&&a?s.one("bsTransitionEnd",r).emulateTransitionEnd(n.TRANSITION_DURATION):r(),s.removeClass("in")};var i=t.fn.tab;t.fn.tab=e,t.fn.tab.Constructor=n,t.fn.tab.noConflict=function(){return t.fn.tab=i,this};var o=function(n){n.preventDefault(),e.call(t(this),"show")};t(document).on("click.bs.tab.data-api",'[data-toggle="tab"]',o).on("click.bs.tab.data-api",'[data-toggle="pill"]',o)}(jQuery),function(t){"use strict";function e(e){return this.each(function(){var i=t(this),o=i.data("bs.affix"),r="object"==typeof e&&e;o||i.data("bs.affix",o=new n(this,r)),"string"==typeof e&&o[e]()})}var n=function(e,i){this.options=t.extend({},n.DEFAULTS,i),this.$target=t(this.options.target).on("scroll.bs.affix.data-api",t.proxy(this.checkPosition,this)).on("click.bs.affix.data-api",t.proxy(this.checkPositionWithEventLoop,this)),this.$element=t(e),this.affixed=this.unpin=this.pinnedOffset=null,this.checkPosition()};n.VERSION="3.3.2",n.RESET="affix affix-top affix-bottom",n.DEFAULTS={offset:0,target:window},n.prototype.getState=function(t,e,n,i){var o=this.$target.scrollTop(),r=this.$element.offset(),s=this.$target.height();if(null!=n&&"top"==this.affixed)return o<n&&"top";if("bottom"==this.affixed)return null!=n?!(o+this.unpin<=r.top)&&"bottom":!(o+s<=t-i)&&"bottom";var a=null==this.affixed,l=a?o:r.top,u=a?s:e;return null!=n&&o<=n?"top":null!=i&&l+u>=t-i&&"bottom"},n.prototype.getPinnedOffset=function(){if(this.pinnedOffset)return this.pinnedOffset;this.$element.removeClass(n.RESET).addClass("affix");var t=this.$target.scrollTop(),e=this.$element.offset();return this.pinnedOffset=e.top-t},n.prototype.checkPositionWithEventLoop=function(){setTimeout(t.proxy(this.checkPosition,this),1)},n.prototype.checkPosition=function(){if(this.$element.is(":visible")){var e=this.$element.height(),i=this.options.offset,o=i.top,r=i.bottom,s=t("body").height();"object"!=typeof i&&(r=o=i),"function"==typeof o&&(o=i.top(this.$element)),"function"==typeof r&&(r=i.bottom(this.$element));var a=this.getState(s,e,o,r);if(this.affixed!=a){null!=this.unpin&&this.$element.css("top","");var l="affix"+(a?"-"+a:""),u=t.Event(l+".bs.affix");if(this.$element.trigger(u),u.isDefaultPrevented())return;this.affixed=a,this.unpin="bottom"==a?this.getPinnedOffset():null,this.$element.removeClass(n.RESET).addClass(l).trigger(l.replace("affix","affixed")+".bs.affix")}"bottom"==a&&this.$element.offset({top:s-e-r})}};var i=t.fn.affix;t.fn.affix=e,t.fn.affix.Constructor=n,t.fn.affix.noConflict=function(){return t.fn.affix=i,this},t(window).on("load",function(){t('[data-spy="affix"]').each(function(){var n=t(this),i=n.data();i.offset=i.offset||{},null!=i.offsetBottom&&(i.offset.bottom=i.offsetBottom),null!=i.offsetTop&&(i.offset.top=i.offsetTop),e.call(n,i)})})}(jQuery),function(t,e){"function"==typeof define&&define.amd?define("ev-emitter/ev-emitter",e):"object"==typeof module&&module.exports?module.exports=e():t.EvEmitter=e()}("undefined"!=typeof window?window:this,function(){function t(){}var e=t.prototype;return e.on=function(t,e){if(t&&e){var n=this._events=this._events||{},i=n[t]=n[t]||[];return-1==i.indexOf(e)&&i.push(e),this}},e.once=function(t,e){if(t&&e){this.on(t,e);var n=this._onceEvents=this._onceEvents||{};return(n[t]=n[t]||{})[e]=!0,this}},e.off=function(t,e){var n=this._events&&this._events[t];if(n&&n.length){var i=n.indexOf(e);return-1!=i&&n.splice(i,1),this}},e.emitEvent=function(t,e){var n=this._events&&this._events[t];if(n&&n.length){var i=0,o=n[i];e=e||[];for(var r=this._onceEvents&&this._onceEvents[t];o;){var s=r&&r[o];s&&(this.off(t,o),delete r[o]),o.apply(this,e),i+=s?0:1,o=n[i]}return this}},e.allOff=e.removeAllListeners=function(){delete this._events,delete this._onceEvents},t}),function(t,e){"use strict";"function"==typeof define&&define.amd?define(["ev-emitter/ev-emitter"],function(n){return e(t,n)}):"object"==typeof module&&module.exports?module.exports=e(t,require("ev-emitter")):t.imagesLoaded=e(t,t.EvEmitter)}("undefined"!=typeof window?window:this,function(t,e){function n(t,e){for(var n in e)t[n]=e[n];return t}function i(t){var e=[];if(Array.isArray(t))e=t;else if("number"==typeof t.length)for(var n=0;n<t.length;n++)e.push(t[n]);else e.push(t);return e}function o(t,e,r){return this instanceof o?("string"==typeof t&&(t=document.querySelectorAll(t)),this.elements=i(t),this.options=n({},this.options),"function"==typeof e?r=e:n(this.options,e),r&&this.on("always",r),this.getImages(),a&&(this.jqDeferred=new a.Deferred),void setTimeout(function(){this.check()}.bind(this))):new o(t,e,r)}function r(t){this.img=t}function s(t,e){this.url=t,this.element=e,this.img=new Image}var a=t.jQuery,l=t.console;o.prototype=Object.create(e.prototype),o.prototype.options={},o.prototype.getImages=function(){this.images=[],this.elements.forEach(this.addElementImages,this)},o.prototype.addElementImages=function(t){"IMG"==t.nodeName&&this.addImage(t),!0===this.options.background&&this.addElementBackgroundImages(t);var e=t.nodeType;if(e&&u[e]){for(var n=t.querySelectorAll("img"),i=0;i<n.length;i++){var o=n[i];this.addImage(o)}if("string"==typeof this.options.background){var r=t.querySelectorAll(this.options.background);for(i=0;i<r.length;i++){var s=r[i];this.addElementBackgroundImages(s)}}}};var u={1:!0,9:!0,11:!0};return o.prototype.addElementBackgroundImages=function(t){var e=getComputedStyle(t);if(e)for(var n=/url\((['"])?(.*?)\1\)/gi,i=n.exec(e.backgroundImage);null!==i;){var o=i&&i[2];o&&this.addBackground(o,t),i=n.exec(e.backgroundImage)}},o.prototype.addImage=function(t){var e=new r(t);this.images.push(e)},o.prototype.addBackground=function(t,e){var n=new s(t,e);this.images.push(n)},o.prototype.check=function(){function t(t,n,i){setTimeout(function(){e.progress(t,n,i)})}var e=this;return this.progressedCount=0,this.hasAnyBroken=!1,this.images.length?void this.images.forEach(function(e){e.once("progress",t),e.check()}):void this.complete()},o.prototype.progress=function(t,e,n){this.progressedCount++,this.hasAnyBroken=this.hasAnyBroken||!t.isLoaded,this.emitEvent("progress",[this,t,e]),this.jqDeferred&&this.jqDeferred.notify&&this.jqDeferred.notify(this,t),this.progressedCount==this.images.length&&this.complete(),this.options.debug&&l&&l.log("progress: "+n,t,e)},o.prototype.complete=function(){var t=this.hasAnyBroken?"fail":"done";if(this.isComplete=!0,this.emitEvent(t,[this]),this.emitEvent("always",[this]),this.jqDeferred){var e=this.hasAnyBroken?"reject":"resolve";this.jqDeferred[e](this)}},r.prototype=Object.create(e.prototype),r.prototype.check=function(){return this.getIsImageComplete()?void this.confirm(0!==this.img.naturalWidth,"naturalWidth"):(this.proxyImage=new Image,this.proxyImage.addEventListener("load",this),this.proxyImage.addEventListener("error",this),this.img.addEventListener("load",this),this.img.addEventListener("error",this),void(this.proxyImage.src=this.img.src))},r.prototype.getIsImageComplete=function(){return this.img.complete&&void 0!==this.img.naturalWidth},r.prototype.confirm=function(t,e){this.isLoaded=t,this.emitEvent("progress",[this,this.img,e])},r.prototype.handleEvent=function(t){var e="on"+t.type;this[e]&&this[e](t)},r.prototype.onload=function(){this.confirm(!0,"onload"),this.unbindEvents()},r.prototype.onerror=function(){this.confirm(!1,"onerror"),this.unbindEvents()},r.prototype.unbindEvents=function(){this.proxyImage.removeEventListener("load",this),this.proxyImage.removeEventListener("error",this),this.img.removeEventListener("load",this),this.img.removeEventListener("error",this)},s.prototype=Object.create(r.prototype),s.prototype.check=function(){this.img.addEventListener("load",this),this.img.addEventListener("error",this),this.img.src=this.url,this.getIsImageComplete()&&(this.confirm(0!==this.img.naturalWidth,"naturalWidth"),this.unbindEvents())},s.prototype.unbindEvents=function(){this.img.removeEventListener("load",this),this.img.removeEventListener("error",this)},s.prototype.confirm=function(t,e){this.isLoaded=t,this.emitEvent("progress",[this,this.element,e])},o.makeJQueryPlugin=function(e){(e=e||t.jQuery)&&(a=e,a.fn.imagesLoaded=function(t,e){return new o(this,t,e).jqDeferred.promise(a(this))})},o.makeJQueryPlugin(),o});
  		$(document).ready(function() {
		    $("head").append("<link href='https://fonts.googleapis.com/css?family=Jura' rel='stylesheet'>");

		    $('#summary').click(function () {
  				$('#wrap-conteiner').load('summary.php #conteiner-ajax');
  				return false;
  			});

        $('#brend').click(function () {
          $('#wrap-conteiner').load('index.php #conteiner-ajax');
          return false;
        });
        
			  $('#index').click(function () {
				  $('#wrap-conteiner').load('index.php #conteiner-ajax');
				  return false;
			  });
		});
    </script>
  </body>
</html>