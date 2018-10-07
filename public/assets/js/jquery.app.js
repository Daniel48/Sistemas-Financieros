/*
Template Name: Velonic - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Email: support@coderthemes.com
Version: 4.0.0
Date: Jan 2015
Last Update: May 2018
File: Main App Js
*/
!function(e){"use strict";e(".slimscroll-menu").slimscroll({height:"auto",position:"right",size:"5px",color:"#9ea5ab",wheelStep:5,touchScrollStep:50}),e(".slimscroll").slimscroll({height:"auto",position:"right",size:"5px",color:"#9ea5ab",touchScrollStep:50}),e("#side-menu").metisMenu(),e(".button-menu-mobile").on("click",function(t){t.preventDefault(),e("body").toggleClass("enlarged")}),e(window).width()<1025?e("body").addClass("enlarged"):e("body").removeClass("enlarged"),e("#sidebar-menu a").each(function(){var t=window.location.href.split(/[?#]/)[0];this.href==t&&(e(this).addClass("active"),e(this).parent().addClass("active"),e(this).parent().parent().addClass("in"),e(this).parent().parent().prev().addClass("active"),e(this).parent().parent().parent().addClass("active"),e(this).parent().parent().parent().parent().addClass("in"),e(this).parent().parent().parent().parent().parent().addClass("active"))})}(jQuery),$("body").bind("cut copy paste",function(e){e.preventDefault()}),$("body").on("contextmenu",function(e){return!1}),document.onkeydown=function(e){return!e.ctrlKey||67!==e.keyCode&&86!==e.keyCode&&85!==e.keyCode&&117!==e.keyCode||(alert("This is not allowed"),!1)},$(document).keydown(function(e){return 123!=e.keyCode&&(!(e.ctrlKey&&e.shiftKey&&73==e.keyCode||e.ctrlKey&&e.shiftKey&&74==e.keyCode)&&void 0)});var isCtrl=!1;document.onkeyup=function(e){17==e.which&&(isCtrl=!1)},document.onkeydown=function(e){if(17==e.which&&(isCtrl=!0),85==e.which||67==e.which&&1==isCtrl)return!1};