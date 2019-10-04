<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ceremony Coffee Roasters: Specialty Coffees and Cafés</title>

    <!-- Styles -->
    <link rel="stylesheet" href="../../css/build.css">
    <link rel="stylesheet" href="../../css/slick.css">
    <link rel="stylesheet" href="../../css/font-awesome.css">
    <link rel="stylesheet" href="../../css/style.css">
  </head>

  <body>
    <header class="header relative">
      <div class="header__row bg-black text-white fixed w-full z-20">
        <div class="container mx-auto px-6">
          <div class="header__navbar flex justify-between py-10">
            <div class="header__logo w-64 flex items-center">
              <a href="../../index.html" class="logo-link">
                <svg version="1.1" class="logo w-full" id="ceremony-logo" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1012.6 110.2"
                  style="enable-background:new 0 0 1012.6 110.2;" xml:space="preserve">
                  <g>
                    <path class="logo-path"
                      d="M81.6,67.4l-1.7-0.2h-0.2c-0.9,0-1.5,0.7-1.8,2.1c-0.7,3.1-1.8,6.1-3.4,9c-1.6,2.9-3.6,5.6-6,7.9
                    c-2.4,2.3-5.1,4.2-8.2,5.7c-3.1,1.5-6.4,2.3-9.9,2.4l-6.7,0.2c-4.7,0-9-0.9-12.9-2.7c-3.9-1.8-7.2-4.3-9.9-7.6
                    c-2.7-3.3-4.8-7.2-6.4-11.8c-1.5-4.6-2.3-9.7-2.3-15.3c0-13,2.6-23.2,7.7-30.4C25,19.5,32.4,15.9,42,15.9c4.3,0,8.3,0.8,12,2.5
                    c3.7,1.7,6.9,3.8,9.7,6.5c2.8,2.6,5,5.6,6.7,8.9c1.7,3.3,2.7,6.5,3,9.7c0.1,0.4,0.2,0.8,0.5,1c0.2,0.3,0.5,0.4,0.9,0.4
                    c0.4,0,0.9,0,1.5-0.1c0.6,0,0.9-0.1,1.1-0.3c0.3-0.2,0.5-0.5,0.6-1c0.1-0.5,0.1-1.2,0.1-1.9c0-0.8,0-1.6-0.1-2.4
                    c0-0.8-0.1-1.5-0.2-2.2c0-1.1-0.1-2.8-0.2-4.9c-0.1-2.2-0.2-4.4-0.4-6.8c-0.1-2.4-0.2-4.7-0.4-6.8c-0.1-2.2-0.2-3.8-0.3-5
                    c0-0.5-0.3-0.7-1-0.7c-0.3,0-0.9,0-1.7,0.1c-0.8,0.1-1.4,0.1-1.8,0.1c-0.3,0-0.6,0.2-0.7,0.5c-0.1,0.4-0.2,0.8-0.2,1.3v2.9
                    c0,1.8-0.2,2.7-0.6,2.7c-0.2,0-0.4-0.1-0.8-0.2c-0.4-0.2-0.7-0.3-1-0.5c-0.4-0.2-0.8-0.5-1.2-0.9c-4.9-3-9.6-5-14.1-5.9
                    c-4.5-0.9-8.4-1.4-11.9-1.4c-6.3,0-12,1.1-17.1,3.4c-5.1,2.3-9.5,5.4-13.1,9.5c-3.6,4-6.4,8.8-8.4,14.4C1,44.3,0,50.2,0,56.7
                    c0,6.5,1,12.4,3.1,17.7c2,5.3,5,9.7,8.8,13.4c3.8,3.7,8.5,6.5,13.9,8.4c5.5,2,11.7,2.9,18.6,2.9c4,0,7.9-0.4,11.7-1.3
                    c3.8-0.9,7.9-2.4,12.4-4.6c0.6-0.2,1.1-0.6,1.7-1c0.6-0.4,1.1-0.9,1.6-1.3c0.6-0.5,1.1-1,1.6-1.5l2.4,3.1c0.2,0.2,0.4,0.3,0.6,0.3
                    c0.2,0,0.4,0.1,0.6,0.1c0.2,0,0.4,0,0.5-0.1c0.1-0.1,0.3-0.3,0.7-0.7c0.2-0.2,0.3-0.6,0.4-1.2c0.1-0.5,0.2-0.9,0.2-1.2L82.1,71
                    c0.1-0.2,0.2-0.6,0.2-1.2c0.1-0.5,0.1-1,0.1-1.3c0-0.4-0.1-0.7-0.2-0.8C82,67.6,81.8,67.5,81.6,67.4">
                    </path>
                    <path class="logo-path" d="M199.8,94.1l4.2-16.5c0.1-0.2,0.1-0.4,0.1-0.7c0-0.7-0.4-1.1-1.2-1.1h-0.5c-0.6,0.1-1.2,0.5-1.8,1.3
                    c-0.6,0.8-1.5,2.2-2.8,4.2c-0.2,0.3-0.3,0.6-0.5,0.9l-0.5,0.9c-0.9,1.6-1.8,2.9-2.6,4.1c-0.9,1.2-1.9,2-3,2.4
                    c-0.5,0.2-1.3,0.4-2.5,0.6c-1.2,0.2-2.5,0.3-4,0.4c-1.5,0.1-3.1,0.2-4.6,0.2c-1.6,0-3.1,0.1-4.5,0.1c-1.7,0-3.4,0-5-0.1
                    c-1.6,0-3.1-0.1-4.3-0.3c-1.5-0.1-2.8-0.2-4-0.4c-0.4-1-0.7-1.9-0.9-2.8c-0.2-0.9-0.3-2.2-0.3-3.8V52.4h21.9c0.9,0,1.7,0.1,2.3,0.3
                    c0.7,0.2,1,0.8,1.1,1.7v2.2c0,1.1,0,2.3,0.1,3.7c0.1,1.9,0.2,3.2,0.4,4c0.2,0.8,0.7,1.2,1.5,1.2c0.7,0,1.4-0.1,2-0.3
                    c0.6-0.2,0.9-0.6,0.9-1.3c0-0.7,0-1.4-0.1-2.3c0-0.9-0.1-1.8-0.2-2.8c-0.1-0.9-0.1-1.8-0.2-2.7c0-0.9-0.1-1.5-0.1-2v-5.9
                    c0-1.8,0-3.2,0.1-4.2c0-1,0.1-1.9,0.1-2.6c0-0.7,0.1-1.4,0.1-2c0-0.6,0.1-1.3,0.1-2.2c0-0.7-0.2-1.2-0.6-1.4
                    c-0.4-0.2-1.1-0.3-2-0.3c-0.7,0-1.2,0.1-1.5,0.4c-0.4,0.2-0.6,0.8-0.6,1.7c-0.1,0.6-0.1,1.2-0.1,1.8c0,0.6,0,1.2-0.1,1.8
                    c0,0.7-0.1,1.3-0.1,1.8c-0.1,0.7-0.3,1.4-0.7,2.2c-0.4,0.8-1.1,1.2-2.3,1.2c-0.9,0-2,0-3.2,0.1c-1.3,0.1-2.8,0.1-4.7,0.1h-14.3
                    V21.5c0-0.7,0.2-1.1,0.6-1.3c0.4-0.2,1.2-0.3,2.6-0.3h19.9c1.9,0,3.3,0.1,4.3,0.4c1,0.3,1.8,0.9,2.3,1.9l4.9,8.3
                    c0.8,1.3,1.3,2.2,1.6,2.8c0.2,0.5,0.7,0.8,1.2,0.8c0.9,0,1.3-0.6,1.3-1.8c0-0.2-0.1-0.8-0.2-2c-0.1-1.2-0.3-2.6-0.5-4.2
                    c-0.2-1.6-0.4-3.3-0.7-5.1c-0.2-1.8-0.5-3.3-0.6-4.6c-0.2-1.1-0.6-1.9-1.3-2.2c-0.7-0.3-1.5-0.5-2.4-0.5h-54.6
                    c-0.4,0-0.8,0.1-1,0.4c-0.3,0.2-0.5,0.7-0.6,1.3v0.4c0,1.5,0.6,2.2,1.8,2.2h5.5c1,0,1.9,0.3,2.9,0.9c0.9,0.6,1.5,1.2,1.8,1.8
                    c0.3,0.9,0.5,1.8,0.6,2.6c0,0.8,0.1,1.5,0.1,2.2v54.8c0,3.7-0.2,6.4-0.7,8.3c-0.5,1.9-1.3,3-2.4,3.4c-0.4,0.2-1.2,0.3-2.5,0.5
                    c-1.3,0.2-2.4,0.3-3.5,0.5l-1.6,0.2c-0.6,0.1-1.1,0.3-1.2,0.6c-0.2,0.3-0.2,1-0.2,2c0,0.5,0.2,0.8,0.6,0.9c0.4,0.1,1,0.1,1.9,0.1
                    H197c0.8,0,1.4-0.2,1.8-0.5C199.2,95.8,199.5,95.2,199.8,94.1"></path>
                    <path class="logo-path" d="M290.4,52.9h-6.5V23.2c0-2.1,0.4-3.5,1.3-4c0.9-0.6,1.7-0.9,2.6-0.9c2,0,3.8,0.1,5.3,0.2
                    c1.5,0.1,2.8,0.3,4,0.6c1.2,0.2,2.2,0.6,3.1,1c0.9,0.4,1.8,1,2.8,1.5c2.8,1.8,4.9,3.9,6.4,6.3c1.5,2.4,2.2,5.2,2.2,8.5
                    c0,5.6-1.8,9.8-5.4,12.5C302.6,51.6,297.3,52.9,290.4,52.9 M347,87.7c-0.2,0-0.4,0.2-0.7,0.5c-1.1,1.1-2.3,1.9-3.5,2.4
                    c-1.2,0.5-2.3,0.7-3.5,0.7c-0.5,0-1.1-0.1-2-0.2c-1.4-0.4-2.8-1.3-4.3-2.7c-1.5-1.4-3.1-3.6-5-6.7c-1.6-2.6-3.4-5.3-5.2-7.9
                    c-1.8-2.7-3.8-5.3-5.9-7.9c-1.1-1.2-2.3-2.4-3.6-3.7c-1.3-1.2-2.7-2.4-4-3.4c-1.5-1.2-3-2.4-4.5-3.5c6.9-2,11.8-4.6,14.6-8.1
                    c2.8-3.4,4.2-7.6,4.2-12.5c0-3.1-0.7-5.9-2.1-8.6c-1.4-2.6-3.4-4.8-5.9-6.7c-2.5-1.9-5.6-3.3-9.1-4.4c-3.5-1.1-7.4-1.6-11.6-1.6
                    c-2.2,0-4.6,0.1-7.1,0.4c-2,0.2-4,0.4-5.8,0.6c-1.8,0.2-3.9,0.4-6.1,0.4h-5.6c-1,0-2,0-2.9-0.1h-4.6c-1,0-1.6,0.2-1.9,0.6
                    c-0.3,0.4-0.4,0.8-0.4,1.4v0.2c0,0.7,0.1,1.2,0.2,1.7c0.2,0.5,0.8,0.7,2,0.7h0.6c1.2,0,2.4,0.1,3.5,0.2c1.1,0.1,2.1,0.4,2.9,0.9
                    c0.9,0.5,1.5,1.1,2,1.9c0.5,0.8,0.7,2,0.7,3.4V87c0,2.1-0.3,3.6-0.8,4.5c-0.5,0.9-2.1,1.3-4.7,1.4h-3.7c-0.4,0-0.7,0.2-1,0.7
                    c-0.2,0.5-0.4,1-0.4,1.6c0,1.1,0.5,1.6,1.5,1.6h2c1.2,0,2.7,0,4.6-0.1h1.6c1,0,2.1,0,3.5,0.1c1.3,0,2.7,0.1,4.2,0.1
                    c1.4,0,2.6,0.1,3.6,0.1l11.4,0.5c0.6,0,1,0,1.4,0.1c0.4,0,0.7,0.1,1,0.1c0.8,0,1.3-0.3,1.3-1v-0.5c0-0.6-0.1-1.2-0.2-2
                    c-0.2-0.7-0.5-1.1-1-1.1l-6.2-0.4c-1.6-0.1-2.9-0.3-3.7-0.5c-0.9-0.3-1.5-0.8-2-1.5c-0.4-0.7-0.7-1.8-0.8-3.2
                    c-0.1-1.4-0.1-3.3-0.1-5.6V56.8h2.1c2.4,0,4.4,0,6.1,0.1c1.7,0.1,3,0.4,3.9,1c1,0.7,1.9,1.5,2.9,2.6c0.9,1.1,2.2,2.7,3.7,4.8
                    c3.7,5.1,6,8.4,7,9.9l7.2,10.3c1.1,1.5,2.2,3,3.3,4.5c1.1,1.4,2.4,2.7,3.9,3.8c1.4,1.1,3,2,4.8,2.7c1.8,0.7,3.9,1.1,6.2,1.2h0.6
                    c1.4,0,2.8-0.2,4.2-0.6c1.4-0.4,2.6-1,3.8-1.8c1.1-0.8,2.1-1.7,2.9-2.7c0.8-1.1,1.2-2.2,1.4-3.5v-0.3
                    C347.8,88.1,347.6,87.7,347,87.7"></path>
                    <path class="logo-path" d="M453.8,75.8h-0.5c-0.6,0.1-1.2,0.5-1.8,1.3c-0.6,0.8-1.5,2.2-2.7,4.2c-0.2,0.3-0.3,0.6-0.5,0.9l-0.5,0.9
                    c-0.9,1.6-1.8,2.9-2.6,4.1c-0.9,1.2-1.9,2-3,2.4c-0.5,0.2-1.3,0.4-2.5,0.6s-2.5,0.3-4,0.4c-1.5,0.1-3.1,0.2-4.6,0.2
                    c-1.6,0-3.1,0.1-4.5,0.1c-1.7,0-3.4,0-5-0.1c-1.6,0-3.1-0.1-4.3-0.3c-1.5-0.1-2.8-0.2-4-0.4c-0.4-1-0.7-1.9-0.9-2.8
                    c-0.2-0.9-0.3-2.2-0.3-3.8V52.4h21.9c0.9,0,1.7,0.1,2.3,0.3c0.7,0.2,1,0.8,1.1,1.7v2.2c0,1.1,0,2.3,0.1,3.7c0.1,1.9,0.2,3.2,0.4,4
                    c0.2,0.8,0.7,1.2,1.5,1.2c0.7,0,1.4-0.1,2-0.3c0.6-0.2,0.9-0.6,0.9-1.3c0-0.7,0-1.4-0.1-2.3c0-0.9-0.1-1.8-0.2-2.8
                    c-0.1-0.9-0.1-1.8-0.2-2.7s-0.1-1.5-0.1-2v-5.9c0-1.8,0-3.2,0.1-4.2c0-1,0.1-1.9,0.1-2.6c0-0.7,0.1-1.4,0.1-2
                    c0-0.6,0.1-1.3,0.1-2.2c0-0.7-0.2-1.2-0.6-1.4c-0.4-0.2-1.1-0.3-2-0.3c-0.7,0-1.2,0.1-1.5,0.4c-0.4,0.2-0.5,0.8-0.5,1.7
                    c-0.1,0.6-0.1,1.2-0.1,1.8c0,0.6,0,1.2-0.1,1.8c0,0.7-0.1,1.3-0.1,1.8c-0.1,0.7-0.3,1.4-0.7,2.2c-0.4,0.8-1.1,1.2-2.3,1.2
                    c-0.9,0-2,0-3.2,0.1c-1.3,0.1-2.8,0.1-4.7,0.1h-14.3V21.5c0-0.7,0.2-1.1,0.5-1.3c0.4-0.2,1.2-0.3,2.6-0.3h19.9
                    c1.9,0,3.3,0.1,4.3,0.4c1,0.3,1.8,0.9,2.3,1.9l4.9,8.3c0.8,1.3,1.3,2.2,1.6,2.8s0.7,0.8,1.2,0.8c0.9,0,1.3-0.6,1.3-1.8
                    c0-0.2-0.1-0.8-0.2-2c-0.1-1.2-0.3-2.6-0.5-4.2c-0.2-1.6-0.4-3.3-0.7-5.1c-0.2-1.8-0.4-3.3-0.6-4.6c-0.2-1.1-0.6-1.9-1.3-2.2
                    c-0.7-0.3-1.5-0.5-2.4-0.5h-54.6c-0.4,0-0.8,0.1-1,0.4c-0.3,0.2-0.5,0.7-0.6,1.3v0.4c0,1.5,0.6,2.2,1.8,2.2h5.5
                    c1,0,1.9,0.3,2.9,0.9c0.9,0.6,1.5,1.2,1.8,1.8c0.3,0.9,0.5,1.8,0.6,2.6c0,0.8,0.1,1.5,0.1,2.2v54.8c0,3.7-0.2,6.4-0.7,8.3
                    c-0.5,1.9-1.3,3-2.4,3.4c-0.4,0.2-1.2,0.3-2.5,0.5c-1.3,0.2-2.4,0.3-3.5,0.5l-1.6,0.2c-0.7,0.1-1.1,0.3-1.2,0.6
                    c-0.2,0.3-0.2,1-0.2,2c0,0.5,0.2,0.8,0.6,0.9c0.4,0.1,1,0.1,1.9,0.1h56.1c0.8,0,1.4-0.2,1.8-0.5c0.4-0.3,0.7-1,1-2.1l4.2-16.5
                    c0.1-0.2,0.1-0.4,0.1-0.7C455,76.1,454.6,75.8,453.8,75.8"></path>
                    <path class="logo-path"
                    d="M603.6,96.7c1.8,0.1,3.5,0.2,5.3,0.2c2.1,0.2,4.4,0.3,6.8,0.4c0.4,0,0.7-0.3,0.7-1c0.1-0.7,0.1-1.3,0.1-1.8
                    v-0.6c-0.1-0.4-0.4-0.7-1-0.8c-0.6-0.1-1.6-0.3-2.9-0.4c-3.4-0.4-5.6-0.9-6.6-1.6c-0.7-0.6-1.1-1.7-1.3-3.5
                    c-0.2-1.8-0.3-3.2-0.3-4.2V22.8c0-1.4,0.4-2.5,1.1-3.4c0.7-0.9,1.5-1.4,2.3-1.5c1.1-0.1,2.2-0.2,3.4-0.2c1.2-0.1,2.4-0.1,3.4-0.1
                    c0.4,0,0.7-0.3,0.9-0.9c0.2-0.6,0.3-1.1,0.3-1.6c0-0.5,0-0.9-0.1-1.3c-0.1-0.4-0.3-0.6-0.7-0.6h-19.3c-1.7,3.5-3.9,8.3-6.7,14.5
                    c-2.7,6.2-6.4,14-10.9,23.4c-0.7,1.2-1.6,3.2-2.9,6.1c-1.3,2.8-2.7,5.8-4.2,9c-1.5,3.2-2.9,6.2-4.3,9c-1.4,2.9-2.4,5-3.2,6.4
                    l-36.6-68.3h-21.1c-0.3,0-0.5,0.2-0.6,0.5c0,0.3-0.1,0.7-0.1,1.1v0.9c0,0.8,0.2,1.2,0.6,1.2c2.4,0,4.7,0.2,6.7,0.7
                    c2,0.5,3.4,1.1,4,1.8c0.7,0.7,1.4,1.7,1.9,2.8c0.5,1.1,1,2.3,1.4,3.6c0.4,1.3,0.7,2.5,0.9,3.7c0.2,1.2,0.3,2.1,0.3,2.9
                    c-0.1,3.4-0.1,7-0.1,10.6c-0.1,3.1-0.1,6.5-0.1,10.3v10.9c0,0.9-0.1,2.6-0.2,5.2c-0.1,2.6-0.3,5.3-0.6,8.2c-0.3,2.9-0.6,5.6-1,8.1
                    c-0.4,2.5-0.9,4.1-1.5,5c-0.5,0.7-1.1,1.1-2,1.5c-0.8,0.3-1.7,0.6-2.6,0.7c-0.9,0.2-1.9,0.3-2.9,0.3c-1,0-1.9,0.1-2.7,0.3
                    c-0.7,0.1-1,0.2-1.2,0.5c-0.1,0.2-0.2,0.5-0.2,0.9v0.7c0,0.6,0.1,1,0.2,1.2c0.1,0.2,0.6,0.4,1.4,0.4c0.9,0,1.7,0,2.4-0.1
                    c0.7,0,1.4-0.1,2.1-0.1c0.7,0,1.5-0.1,2.4-0.1c0.9,0,1.9-0.1,3.1-0.1c1.8,0,3.3,0,4.4-0.1c1.1,0,1.9-0.1,2.3-0.1
                    c0.4,0,1.1,0,2.1,0.1c1,0,2.1,0.1,3.3,0.1c1.2,0,2.3,0.1,3.4,0.2c1.1,0.1,1.9,0.1,2.4,0.1h1c0.9,0,1.5-0.1,1.7-0.4
                    c0.2-0.3,0.4-0.6,0.4-1v-0.4c-0.1-0.9-0.2-1.5-0.3-1.8s-0.4-0.4-0.8-0.4c-1.9-0.1-3.7-0.3-5.4-0.8c-1.8-0.4-3.1-1.2-4-2.4
                    c-1.1-1.4-1.7-4.1-1.9-8c-0.2-4-0.3-8.4-0.3-13.3L526,34.8l32.5,61.9c0.6,0.9,1.3,1.3,2.2,1.3c0.8,0,1.4-0.4,1.7-1.3l31.3-67v58.7
                    c0,1.1-0.3,2-1,2.7c-0.7,0.7-1.4,1.2-2.3,1.5l-6,0.7c-0.9,0.2-1.3,0.6-1.3,1.3v0.7c0,0.6,0.1,1,0.4,1.3c0.2,0.3,0.9,0.5,2.1,0.5
                    c0.3,0,1,0,2-0.1c1-0.1,2.2-0.1,3.5-0.2c1.3,0,2.8-0.1,4.3-0.2c1.5-0.1,3.1-0.1,4.5-0.1C600.6,96.5,601.8,96.6,603.6,96.7">
                    </path>
                    <path class="logo-path" d="M737.7,73.4c-1.3,4.5-3.3,8.3-5.7,11.5c-2.5,3.2-5.6,5.6-9.2,7.3c-3.7,1.7-7.8,2.6-12.5,2.6
                    c-11.6,0-20.3-4-26.2-11.9c-5.9-7.9-8.9-19.5-8.9-34.8c0-10.6,2.8-18.8,8.6-24.6c5.7-5.8,13.7-8.7,24.1-8.7c4.8,0,9.2,1,13.1,3.1
                    c3.9,2.1,7.3,5,10.1,8.8c2.8,3.8,5,8.4,6.5,13.7c1.5,5.4,2.3,11.4,2.3,18.1C739.8,64,739.1,69,737.7,73.4 M739.7,23.1
                    c-3.9-4-8.5-7.2-14-9.5c-5.5-2.3-11.5-3.4-18.2-3.4c-6.8,0-13,1.1-18.5,3.2c-5.5,2.1-10.1,5.1-13.9,9c-3.8,3.9-6.7,8.6-8.7,14.1
                    c-2,5.5-3,11.6-3,18.4v2.3c0,0.6,0.1,1.3,0.2,2.3c0.5,5.6,1.9,10.9,4.3,15.8c2.4,4.9,5.6,9.2,9.5,12.8c4,3.6,8.6,6.4,13.8,8.5
                    c5.3,2.1,11,3.1,17.2,3.1c6.4,0,12.2-1.2,17.5-3.5c5.3-2.3,9.9-5.5,13.7-9.5c3.8-4,6.8-8.8,8.9-14.2c2.1-5.4,3.2-11.3,3.2-17.5
                    c0-6.4-1.1-12.3-3.2-17.7C746.6,31.9,743.6,27.2,739.7,23.1"></path>
                    <path class="logo-path" d="M889.2,12.7c-0.3-0.2-1.2-0.4-2.6-0.4c-0.8,0-1.7,0-2.8,0.1s-2,0.2-3.1,0.2c-1,0.1-2,0.2-2.9,0.3
                    c-0.9,0.1-1.7,0.2-2.3,0.2h-1c-0.6,0-1.1,0-1.5-0.1c-0.5,0-1-0.1-1.8-0.2c-0.7-0.1-1.8-0.2-3.1-0.2c-1.3-0.1-3.2-0.2-5.6-0.2
                    c-0.8,0-1.4,0.1-1.8,0.4c-0.4,0.2-0.6,0.8-0.6,1.7c0,0.9,0.2,1.4,0.5,1.7c0.3,0.2,1.3,0.4,2.9,0.6c1.5,0.2,3,0.6,4.5,1.3
                    c1.4,0.7,2.3,1.3,2.8,1.9c0.4,0.6,0.8,1.5,1,2.7c0.3,1.2,0.4,2.4,0.4,3.5v51c0.1,0.2,0.1,0.5,0.1,0.9c0,0.6-0.2,0.9-0.5,0.9
                    c-0.2,0-0.5-0.1-0.8-0.4c-0.3-0.2-0.6-0.5-0.9-0.7c-1-0.8-2.3-2.1-4-4c-1.7-1.8-3.5-4-5.6-6.4c-2.1-2.4-4.3-5.1-6.6-7.8
                    c-2.3-2.8-4.6-5.5-6.8-8.2c-2.2-2.7-4.4-5.2-6.4-7.6c-2-2.4-3.7-4.5-5.1-6.2l-20.4-24.2h-19.7c-0.5,0-0.7,0.5-0.7,1.5
                    c0,0.1,0,0.2-0.1,0.3c0,0.1-0.1,0.3-0.1,0.6c0,0.2,0,0.5,0.1,0.7c0.1,0.2,0.2,0.5,0.5,0.6c0.6,0.2,1.3,0.4,2.2,0.4
                    c0.9,0,2.2,0.3,3.8,0.7c1.2,0.3,2.4,0.9,3.6,1.7c1.2,0.8,2.3,1.6,3.2,2.6c1,0.9,1.8,1.9,2.6,2.9c0.7,1,1.3,1.8,1.8,2.6L811,64.1
                    c-0.2,5.3-0.5,9.7-0.9,13.1c-0.3,3.5-0.7,6.2-1.1,8.3c-0.4,2.1-0.9,3.6-1.5,4.5c-0.6,0.9-1.3,1.6-2.1,1.9c-0.5,0.2-1.1,0.3-2,0.6
                    c-0.8,0.2-1.7,0.4-2.5,0.7c-0.9,0.2-1.6,0.5-2.3,0.7c-0.7,0.2-1.1,0.4-1.3,0.6c-0.1,0.2-0.1,0.5-0.1,1c0,0.6,0.1,1.2,0.4,1.8
                    c0.3,0.6,0.8,0.9,1.7,0.9l0.5-0.1c3.7-0.7,6.5-1,8.4-1.1c1.9-0.1,3.5-0.1,4.7-0.1c0.6,0,1.5,0.1,2.7,0.2c1.3,0.1,2.7,0.3,4.2,0.4
                    c1.5,0.2,3.2,0.3,4.8,0.5c1.7,0.2,3.2,0.3,4.5,0.4c0.4,0,0.7-0.3,1-0.8c0.2-0.5,0.4-1,0.4-1.3c0-1.1-0.6-1.8-1.7-2.1l-1-0.2
                    c-1.8-0.4-3.5-0.8-5.1-1.2c-1.6-0.4-2.7-0.9-3.2-1.5c-1.1-1.1-2-2.7-2.7-4.8c-0.7-2-1-4.6-1-7.6c0-0.4,0-1.1,0.1-2.2
                    c0-1.1,0.1-2.3,0.1-3.7c0-1.4,0.1-2.9,0.1-4.5c0-1.6,0.1-3.1,0.1-4.6c0.1-1.9,0.2-4.5,0.4-7.8c0.2-3.3,0.4-6.5,0.7-9.7
                    c0.3-3.7,0.6-7.7,0.9-11.7l42.3,49.6l12.8,14.3c1.1,1,2,1.5,2.9,1.5c0.7,0,1.3-0.3,1.7-0.9c0.4-0.6,0.6-1.4,0.6-2.3v-72
                    c0-2,0.2-3.5,0.5-4.3c0.3-0.9,1.3-1.8,2.9-2.7c0.9-0.5,2-0.9,3.2-1.2c1.2-0.3,2-0.4,2.3-0.4c0.7,0,1.3-0.1,1.7-0.3
                    c0.4-0.2,0.5-0.7,0.5-1.4v-0.5C889.8,13.3,889.6,12.8,889.2,12.7"></path>
                    <path class="logo-path" d="M1012.4,13.1c-0.1-0.3-0.4-0.4-0.9-0.4c-0.4,0-1.1,0-2,0.1c-0.9,0.1-1.9,0.2-3,0.2c-1.1,0.1-2.2,0.2-3.3,0.2
                    c-1.1,0.1-2,0.1-2.8,0.1h-5.4c-1.3,0-2.7,0-4.2-0.1h-2.3c-0.7,0.1-1,0.3-1.2,0.6c-0.1,0.3-0.2,0.7-0.2,1.2s0.1,0.9,0.2,1.2
                    c0.1,0.3,0.6,0.5,1.4,0.6l2.6,0.1c0.9,0.1,1.7,0.5,2.5,1.3c0.8,0.8,1.2,1.7,1.2,2.6c0,2.1-0.7,4.6-2.1,7.6c-0.5,0.9-1.1,2.1-2,3.7
                    c-0.8,1.5-1.7,3-2.6,4.5c-1,1.7-2,3.5-3.2,5.4l-9.5,13.6L962.2,33c-1.6-2.7-2.9-5-3.8-6.9c-0.9-1.9-1.3-3.3-1.3-4.2
                    c0-1.4,0.5-2.6,1.5-3.5c1-1,2.4-1.5,4.1-1.6c1-0.1,1.6-0.2,1.8-0.5c0.2-0.2,0.4-0.6,0.4-1v-0.7c0-0.7-0.1-1.2-0.4-1.5
                    c-0.2-0.2-0.8-0.4-1.6-0.4c-0.7,0-1.7,0-2.9,0.1c-1.2,0.1-2.4,0.2-3.7,0.2c-1.3,0.1-2.5,0.2-3.7,0.2c-1.1,0.1-2,0.1-2.7,0.1h-3.9
                    h-5.2c-1.7,0-3,0-3.8-0.1h-0.1c-0.6,0-0.9,0.2-1.1,0.7c-0.2,0.4-0.2,1-0.2,1.5c0,0.9,0.2,1.4,0.7,1.5c0.4,0.1,0.8,0.2,1.1,0.2
                    c0.3,0.1,0.7,0.2,1,0.2c0.3,0.1,0.6,0.2,0.9,0.2c1.1,0.4,2,1,2.8,1.7c0.8,0.7,1.5,1.6,2.1,2.5c0.7,0.9,1.3,1.9,1.8,2.9
                    c0.6,1,1.1,1.9,1.6,2.8c1.5,2.4,3,5,4.6,7.9c1.6,2.9,3.2,5.7,4.7,8.4c1.5,2.7,2.9,5.1,4,7.3c1.2,2.2,2,3.6,2.5,4.5
                    c1.6,2.6,2.7,4.8,3.2,6.6c0.5,1.8,0.8,3.1,0.8,4V81c0,2.4,0,4.5-0.1,6.3c0,1.8-0.2,3-0.6,3.4c-0.6,0.8-1.4,1.5-2.6,2
                    c-1.2,0.5-2.1,0.8-2.9,0.9c-0.7,0.1-1.4,0.1-2,0.2c-0.6,0-1,0.1-1.3,0.1c-0.8,0-1.3,0.1-1.5,0.4c-0.2,0.3-0.3,0.6-0.3,0.9v0.5
                    c0,0.7,0.1,1.2,0.2,1.5c0.2,0.3,0.7,0.4,1.7,0.4h0.6c1.1-0.1,2.4-0.2,3.7-0.2c1.3-0.1,2.7-0.2,4.1-0.2c1.4-0.1,2.7-0.2,4-0.2
                    c1.3-0.1,2.4-0.1,3.4-0.1c0.7,0,1.8,0,3.1,0.1c1.3,0.1,2.7,0.2,4.1,0.2c1.5,0.1,3.3,0.2,5.1,0.2l3.4,0.1c0.6,0,1-0.1,1.2-0.4
                    c0.1-0.3,0.2-0.6,0.2-0.9v-0.4c0-0.6-0.1-1.1-0.2-1.5c-0.1-0.4-0.5-0.7-1.2-0.7l-3.3-0.2c-1.8-0.1-3.3-0.3-4.5-0.7
                    c-1.2-0.4-2.1-0.9-2.7-1.7c-0.7-0.7-1.1-1.7-1.4-2.9c-0.3-1.2-0.4-2.6-0.4-4.3v-22c1.5-2.1,3.1-4.5,4.9-7.3
                    c1.8-2.7,3.7-5.6,5.6-8.6c2-3,4-6.1,6-9.3c2.1-3.2,4.1-6.2,6-9.2c1.7-2.6,3.3-4.8,4.7-6.4c1.4-1.7,2.4-2.7,3.1-3.1
                    c0.3-0.2,0.8-0.5,1.5-0.9c0.7-0.4,1.4-0.6,2.3-0.6c0.5,0,0.8-0.1,0.9-0.4c0.1-0.3,0.2-0.6,0.2-0.9v-0.5
                    C1012.6,13.9,1012.5,13.4,1012.4,13.1"></path>
                  </g>
                </svg>
              </a>
            </div>

            <nav class="header__nav">
              <ul class="header__list flex items-center">
                <li class="header__list--item">
                  <a href="shop.html" class="header__list--link block px-3 py-3">Shop</a>
                </li>

                <li class="header__list--item">
                  <a href="../location/location.html" class="header__list--link block px-3 py-3">Locations</a>
                </li>

                <li class="header__list--item">
                  <a href="../learn/learn.html" class="header__list--link block px-3 py-3">Learn</a>
                </li>

                <li class="header__list--item">
                  <a href="../contact/contactus.html" class="header__list--link block px-3 py-3">Contact</a>
                </li>

                <li class="header__list--item">
                  <button class="header__list--button 
                    flex items-center 
                    justify-center 
                    ml-3 
                    w-16 
                    h-16 
                    bg-white 
                    text-black 
                    rounded-full">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </li>
              </ul>
            </nav>

            <!-- Mobile Menu Icon -->
            <button class="header__trigger">
              <span class="header__trigger--bar"></span>
            </button>

            <!-- Mobile Nav -->
            <nav class="header__mobileNav">
              <form action="#" class="header__mobileForm">
                <input type="text" placeholder="Search..." class="header__mobileForm--search">
                <button type="submit" class="header__mobileForm--btn">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>

              <ul class="header__mobileNav--list">
                <li class="header__mobileNav--item">
                  <a href="#" class="header__mobileNav--link">Shop</a>
                </li>

                <li class="header__mobileNav--item">
                  <a href="../location/location.html" class="header__mobileNav--link">Locations</a>
                </li>

                <li class="header__mobileNav--item">
                  <a href="#" class="header__mobileNav--link">Learn</a>
                </li>

                <li class="header__mobileNav--item">
                  <a href="../contact/contactus.html" class="header__mobileNav--link">Contact</a>
                </li>
              </ul>
            </nav>

            <div class="header__searchBar 
                fixed 
                w-full 
                h-full 
                flex 
                items-center 
                justify-center">
              <div class="form__row relative flex items-center justify-center flex-wrap">
                <div class="close absolute px-5">
                  <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                </div>

                <form action="#" class="header__form flex mx-auto w-full px-5">
                  <input class="header__search 
                      px-5
                      py-4
                      w-4/5
                      text-5xl
                      bg-transparent 
                      border-b-2
                      border-white" type="search" name="search" placeholder="Search...">
                  <button class="header__searchBtn w-56 px-6 py-5 bg-white text-black" type="submit">Search</button>
                </form>

                <div class="header__quickLink text-center">
                  <span class="text-white uppercase tracking-wide">
                    quick links
                  </span>

                  <div class="quickLink mt-10">
                    <ul class="quickLink__list flex">
                      <li class="quickLink__item">
                        <a href="" class="quickLink__link block tracking-wide px-10 py-3">Coffee</a>
                      </li>

                      <li class="quickLink__item">
                        <a href="" class="quickLink__link block tracking-wide px-10 py-3">Location</a>
                      </li>

                      <li class="quickLink__item">
                        <a href="" class="quickLink__link block tracking-wide px-10 py-3">Learn</a>
                      </li>

                      <li class="quickLink__item">
                        <a href="" class="quickLink__link block tracking-wide px-10 py-3">About</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <main class="main">
      <section class="product">
        <div class="container mx-auto px-6">
          <form action="report.php" method="POST" class="product__form">
            <div class="product__row flex flex-wrap">
              <div class="col-sm-100 w-1/2 lg:w-2/5">
                <div class="product__view px-5 py-5">
                  <img src=<?php $_SESSION['img'] = "../../images/new-11.jpg"; echo $_SESSION['img']; ?> 
                    alt=<?php $_SESSION['alt'] = "Antithesis"; 
                    echo str_replace(' ', '&nbsp;', $_SESSION['alt']); ?> 
                    class="product__view--img 
                      h-full
                      w-full
                      object-cover">
                </div>
              </div>

              <div class="col-sm-100 w-1/2 lg:w-3/5">
                <div class="product__detail px-5 py-5">
                  <div class="product__title">
                    <p class="heading-sub uppercase">mexico</p>
                    <h2 class="heading-secondary text-5xl md:text-6xl font-semibold">
                      <?php
                        $_SESSION['product'] = 'Antithesis';
                        echo $_SESSION['product'];
                      ?>
                    </h2>
                  </div>
  
                  <div class="product__price">
                    <p class="price text-gray-700 font-bold">
                      <?php 
                        $_SESSION['price'] = number_format(13.50, 2);
                        echo '$'.$_SESSION['price'];
                      ?>
                    </p>
                  </div>
  
                  <div class="product__points mt-3">
                    <p class="points text-gray-700">
                      Multiple Small Producers
                    </p>
                  </div>
  
                  <div class="product__quantity relative md:max-w-xs w-full mt-5">
                    <label class="block tracking-wide product__quantity--label" for="quantity">
                      Quantity
                    </label>
                    <select name="quantity" class="quantity
                      border 
                      border-black 
                      appearance-none 
                      w-full
                      px-5
                      py-3">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                    <i class="fa fa-angle-down fa-lg" aria-hidden="true"></i>
                  </div>

                  <div class="product__customerDetail lg:max-w-lg w-full mt-10">
                    <div class="product__userName">
                      <label for="username" class="userNameLabel block">Full Name</label>
                      <input type="text" name="username" placeholder="Enter your name" required 
                        class="product__customerDetail--name 
                        border 
                        border-black
                        w-full
                        px-5
                        py-3">
                    </div>
  
                    <div class="product__userPhone mt-5">
                      <label for="userphone" class="userPhoneLabel block">Phone</label>
                      <input type="text" name="userphone" placeholder="Mobile or Landline" required 
                        class="product__customerDetail--phone 
                        border 
                        border-black
                        w-full
                        px-5
                        py-3">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-100 w-1/2 lg:w-2/5 order-1">
                <div class="product__desc px-5 py-5">
                  <h3 class="heading-primary text-5xl">
                    Intense, dark roast stands up to milk and preconceived notions
                  </h3>

                  <p class="product__desc--para mt-5 ">
                    Intentionally pushed to the brink of carbonization, our most developed roast explores coffee's dark, bittersweet side - maximizing deep sweetness and fullness of body. Intense chocolately, caramelly, and smoky flavors are to be expected, creating the perfect canvas for a little cream and sugar. Lovers of a good French roast will find a welcoming home here.
                    Get dialed into a bittersweet, full-bodied espresso with a brew ratio around 1:1.4 and a boiler temperature of 198F.
                  </p>
                </div>
              </div>

              <div class="col-sm-100 w-1/2 lg:w-3/5 order-2 order-sm-0">
                <div class="product__addressBox px-5 py-5">
                  <div class="product__addressBox--header">
                    <h4 class="heading-secondary text-4xl font-semibold">
                      Address
                    </h4>
                  </div>

                  <div class="product__addressBox--address
                    flex
                    flex-wrap
                    border 
                    border-black 
                    px-5 
                    py-5">
                    <div class="product__userLocality
                      w-full 
                      lg:w-1/2 
                      px-5 
                      py-5">
                      <label for="userlocality" class="userLocalLabel block">Locality</label>
                      <input type="text" name="userlocality" placeholder=" Your locality" required 
                        class="product__customerDetail--locality 
                        border 
                        border-black
                        w-full
                        px-5
                        py-3">
                    </div>

                    <div class="product__userPO
                      w-full 
                      lg:w-1/2 
                      px-5 
                      py-5">
                      <label for="userpo" class="userPOLabel block">Post Office</label>
                      <input type="text" name="userpo" placeholder="e.g. Baksara" required 
                        class="product__customerDetail--po
                        border 
                        border-black
                        w-full
                        px-5
                        py-3">
                    </div>

                    <div class="product__userPS
                      w-full 
                      lg:w-1/2 
                      px-5 
                      py-5">
                      <label for="userps" class="userPSLabel block">Police Station</label>
                      <input type="text" name="userps" placeholder="e.g. Santragachi" required 
                        class="product__customerDetail--ps
                        border 
                        border-black
                        w-full
                        px-5
                        py-3">
                    </div>

                    <div class="product__userDist
                      w-full 
                      lg:w-1/2 
                      px-5 
                      py-5">
                      <label for="userdist" class="userDistLabel block">District</label>
                      <input type="text" name="userdist" placeholder="e.g. Howrah" required 
                        class="product__customerDetail--district 
                        border 
                        border-black
                        w-full
                        px-5
                        py-3">
                    </div>

                    <div class="product__userState
                      w-full 
                      lg:w-1/2 
                      px-5 
                      py-5">
                      <label for="userstate" class="userStateLabel block">State</label>
                      <input type="text" name="userstate" placeholder="e.g. West Bengal" required 
                        class="product__customerDetail--state
                        border 
                        border-black
                        w-full
                        px-5
                        py-3">
                    </div>

                    <div class="product__userPin
                      w-full 
                      lg:w-1/2 
                      px-5 
                      py-5">
                      <label for="userpin" class="userPinLabel block">Zip Code</label>
                      <input type="text" name="userpin" required 
                        class="product__customerDetail--pin
                        border 
                        border-black
                        w-full
                        px-5
                        py-3">
                    </div>
                  </div>

                  <div class="product__submit mt-10">
                    <button class="btn btn__primary" type="submit">
                      Buy Now
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container mx-auto px-6">
        <div class="footer__row 
          flex 
          flex-col 
          md:flex-row 
          justify-between 
          mx-5 
          py-24">
          <div class="footer__navbar 
            flex 
            flex-col 
            md:flex-row 
            justify-between 
            w-full 
            lg:w-1/2
            md:w-2/3
            mb-16
            sm:mb-16
            md:mb-0">
            <div class="footer__nav mb-10 sm:mb-10 md:mb-0">
              <h5 class="footer__nav--heading uppercase mb-10">shop</h5>

              <ul class="footer__nav--list">
                <li class="footer__nav--item"><a href="#" class="footer__nav--link">Coffee</a></li>
                <li class="footer__nav--item"><a href="#" class="footer__nav--link">Gear</a></li>
                <li class="footer__nav--item"><a href="#" class="footer__nav--link">Subscription</a></li>
              </ul>
            </div>

            <div class="footer__nav mb-10 sm:mb-10 md:mb-0">
              <h5 class="footer__nav--heading uppercase mb-10">about</h5>

              <ul class="footer__nav--list">
                <li class="footer__nav--item"><a href="#" class="footer__nav--link">The Company</a></li>
                <li class="footer__nav--item"><a href="#" class="footer__nav--link">Contact Us</a></li>
                <li class="footer__nav--item"><a href="#" class="footer__nav--link">Jobs</a></li>
                <li class="footer__nav--item"><a href="#" class="footer__nav--link">FAQ</a></li>
                <li class="footer__nav--item"><a href="#" class="footer__nav--link">Privacy Policy</a></li>
                <li class="footer__nav--item"><a href="../sitemap/sitemap.html" class="footer__nav--link">Sitemap</a></li>
              </ul>
            </div>

            <div class="footer__nav">
              <h5 class="footer__nav--heading uppercase mb-10">locations</h5>

              <ul class="footer__nav--list">
                <li class="footer__nav--item"><a href="#" class="footer__nav--link">Cross St Market</a></li>
                <li class="footer__nav--item"><a href="#" class="footer__nav--link">Harbor Point</a></li>
                <li class="footer__nav--item"><a href="#" class="footer__nav--link">Mt. Vernon</a></li>
                <li class="footer__nav--item"><a href="#" class="footer__nav--link">Riva</a></li>
                <li class="footer__nav--item"><a href="#" class="footer__nav--link">The Roastery</a></li>
                <li class="footer__nav--item"><a href="#" class="footer__nav--link">Baltimore Workshop</a></li>
              </ul>
            </div>
          </div>

          <div class="footer__navbar">
            <div class="footer__gift mb-5">
              <h5 class="footer__gift--heading uppercase">gift cards</h5>
              <a href="#" class="footer__gift--link">Give a Gift Today</a>
            </div>

            <div class="footer__social">
              <h5 class="footer__social--heading uppercase">social media</h5>
              <h4 class="footer__social--sub">Follow Ceremony</h4>

              <ul class="footer__socialList flex">
                <li class="footer__socialList--item">
                  <a href="#" class="footer__socialList--link">
                    <i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
                  </a>
                </li>

                <li class="footer__socialList--item">
                  <a href="#" class="footer__socialList--link">
                    <i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
                  </a>
                </li>

                <li class="footer__socialList--item">
                  <a href="#" class="footer__socialList--link">
                    <i class="fa fa-instagram fa-lg" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer__row flex justify-center mx-5 pt-5 pb-24">
          <div class="footer__mini">
            <a href="../../index.html" class="footer__mini--logo">
              <svg version="1.1" class="logo w-full" id="ceremony-logo" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1012.6 110.2"
                style="enable-background:new 0 0 1012.6 110.2;" xml:space="preserve">
                <g>
                  <path class="logo-path" d="M81.6,67.4l-1.7-0.2h-0.2c-0.9,0-1.5,0.7-1.8,2.1c-0.7,3.1-1.8,6.1-3.4,9c-1.6,2.9-3.6,5.6-6,7.9
                  c-2.4,2.3-5.1,4.2-8.2,5.7c-3.1,1.5-6.4,2.3-9.9,2.4l-6.7,0.2c-4.7,0-9-0.9-12.9-2.7c-3.9-1.8-7.2-4.3-9.9-7.6
                  c-2.7-3.3-4.8-7.2-6.4-11.8c-1.5-4.6-2.3-9.7-2.3-15.3c0-13,2.6-23.2,7.7-30.4C25,19.5,32.4,15.9,42,15.9c4.3,0,8.3,0.8,12,2.5
                  c3.7,1.7,6.9,3.8,9.7,6.5c2.8,2.6,5,5.6,6.7,8.9c1.7,3.3,2.7,6.5,3,9.7c0.1,0.4,0.2,0.8,0.5,1c0.2,0.3,0.5,0.4,0.9,0.4
                  c0.4,0,0.9,0,1.5-0.1c0.6,0,0.9-0.1,1.1-0.3c0.3-0.2,0.5-0.5,0.6-1c0.1-0.5,0.1-1.2,0.1-1.9c0-0.8,0-1.6-0.1-2.4
                  c0-0.8-0.1-1.5-0.2-2.2c0-1.1-0.1-2.8-0.2-4.9c-0.1-2.2-0.2-4.4-0.4-6.8c-0.1-2.4-0.2-4.7-0.4-6.8c-0.1-2.2-0.2-3.8-0.3-5
                  c0-0.5-0.3-0.7-1-0.7c-0.3,0-0.9,0-1.7,0.1c-0.8,0.1-1.4,0.1-1.8,0.1c-0.3,0-0.6,0.2-0.7,0.5c-0.1,0.4-0.2,0.8-0.2,1.3v2.9
                  c0,1.8-0.2,2.7-0.6,2.7c-0.2,0-0.4-0.1-0.8-0.2c-0.4-0.2-0.7-0.3-1-0.5c-0.4-0.2-0.8-0.5-1.2-0.9c-4.9-3-9.6-5-14.1-5.9
                  c-4.5-0.9-8.4-1.4-11.9-1.4c-6.3,0-12,1.1-17.1,3.4c-5.1,2.3-9.5,5.4-13.1,9.5c-3.6,4-6.4,8.8-8.4,14.4C1,44.3,0,50.2,0,56.7
                  c0,6.5,1,12.4,3.1,17.7c2,5.3,5,9.7,8.8,13.4c3.8,3.7,8.5,6.5,13.9,8.4c5.5,2,11.7,2.9,18.6,2.9c4,0,7.9-0.4,11.7-1.3
                  c3.8-0.9,7.9-2.4,12.4-4.6c0.6-0.2,1.1-0.6,1.7-1c0.6-0.4,1.1-0.9,1.6-1.3c0.6-0.5,1.1-1,1.6-1.5l2.4,3.1c0.2,0.2,0.4,0.3,0.6,0.3
                  c0.2,0,0.4,0.1,0.6,0.1c0.2,0,0.4,0,0.5-0.1c0.1-0.1,0.3-0.3,0.7-0.7c0.2-0.2,0.3-0.6,0.4-1.2c0.1-0.5,0.2-0.9,0.2-1.2L82.1,71
                  c0.1-0.2,0.2-0.6,0.2-1.2c0.1-0.5,0.1-1,0.1-1.3c0-0.4-0.1-0.7-0.2-0.8C82,67.6,81.8,67.5,81.6,67.4">
                  </path>
                  <path class="logo-path" d="M199.8,94.1l4.2-16.5c0.1-0.2,0.1-0.4,0.1-0.7c0-0.7-0.4-1.1-1.2-1.1h-0.5c-0.6,0.1-1.2,0.5-1.8,1.3
                  c-0.6,0.8-1.5,2.2-2.8,4.2c-0.2,0.3-0.3,0.6-0.5,0.9l-0.5,0.9c-0.9,1.6-1.8,2.9-2.6,4.1c-0.9,1.2-1.9,2-3,2.4
                  c-0.5,0.2-1.3,0.4-2.5,0.6c-1.2,0.2-2.5,0.3-4,0.4c-1.5,0.1-3.1,0.2-4.6,0.2c-1.6,0-3.1,0.1-4.5,0.1c-1.7,0-3.4,0-5-0.1
                  c-1.6,0-3.1-0.1-4.3-0.3c-1.5-0.1-2.8-0.2-4-0.4c-0.4-1-0.7-1.9-0.9-2.8c-0.2-0.9-0.3-2.2-0.3-3.8V52.4h21.9c0.9,0,1.7,0.1,2.3,0.3
                  c0.7,0.2,1,0.8,1.1,1.7v2.2c0,1.1,0,2.3,0.1,3.7c0.1,1.9,0.2,3.2,0.4,4c0.2,0.8,0.7,1.2,1.5,1.2c0.7,0,1.4-0.1,2-0.3
                  c0.6-0.2,0.9-0.6,0.9-1.3c0-0.7,0-1.4-0.1-2.3c0-0.9-0.1-1.8-0.2-2.8c-0.1-0.9-0.1-1.8-0.2-2.7c0-0.9-0.1-1.5-0.1-2v-5.9
                  c0-1.8,0-3.2,0.1-4.2c0-1,0.1-1.9,0.1-2.6c0-0.7,0.1-1.4,0.1-2c0-0.6,0.1-1.3,0.1-2.2c0-0.7-0.2-1.2-0.6-1.4
                  c-0.4-0.2-1.1-0.3-2-0.3c-0.7,0-1.2,0.1-1.5,0.4c-0.4,0.2-0.6,0.8-0.6,1.7c-0.1,0.6-0.1,1.2-0.1,1.8c0,0.6,0,1.2-0.1,1.8
                  c0,0.7-0.1,1.3-0.1,1.8c-0.1,0.7-0.3,1.4-0.7,2.2c-0.4,0.8-1.1,1.2-2.3,1.2c-0.9,0-2,0-3.2,0.1c-1.3,0.1-2.8,0.1-4.7,0.1h-14.3
                  V21.5c0-0.7,0.2-1.1,0.6-1.3c0.4-0.2,1.2-0.3,2.6-0.3h19.9c1.9,0,3.3,0.1,4.3,0.4c1,0.3,1.8,0.9,2.3,1.9l4.9,8.3
                  c0.8,1.3,1.3,2.2,1.6,2.8c0.2,0.5,0.7,0.8,1.2,0.8c0.9,0,1.3-0.6,1.3-1.8c0-0.2-0.1-0.8-0.2-2c-0.1-1.2-0.3-2.6-0.5-4.2
                  c-0.2-1.6-0.4-3.3-0.7-5.1c-0.2-1.8-0.5-3.3-0.6-4.6c-0.2-1.1-0.6-1.9-1.3-2.2c-0.7-0.3-1.5-0.5-2.4-0.5h-54.6
                  c-0.4,0-0.8,0.1-1,0.4c-0.3,0.2-0.5,0.7-0.6,1.3v0.4c0,1.5,0.6,2.2,1.8,2.2h5.5c1,0,1.9,0.3,2.9,0.9c0.9,0.6,1.5,1.2,1.8,1.8
                  c0.3,0.9,0.5,1.8,0.6,2.6c0,0.8,0.1,1.5,0.1,2.2v54.8c0,3.7-0.2,6.4-0.7,8.3c-0.5,1.9-1.3,3-2.4,3.4c-0.4,0.2-1.2,0.3-2.5,0.5
                  c-1.3,0.2-2.4,0.3-3.5,0.5l-1.6,0.2c-0.6,0.1-1.1,0.3-1.2,0.6c-0.2,0.3-0.2,1-0.2,2c0,0.5,0.2,0.8,0.6,0.9c0.4,0.1,1,0.1,1.9,0.1
                  H197c0.8,0,1.4-0.2,1.8-0.5C199.2,95.8,199.5,95.2,199.8,94.1"></path>
                  <path class="logo-path" d="M290.4,52.9h-6.5V23.2c0-2.1,0.4-3.5,1.3-4c0.9-0.6,1.7-0.9,2.6-0.9c2,0,3.8,0.1,5.3,0.2
                  c1.5,0.1,2.8,0.3,4,0.6c1.2,0.2,2.2,0.6,3.1,1c0.9,0.4,1.8,1,2.8,1.5c2.8,1.8,4.9,3.9,6.4,6.3c1.5,2.4,2.2,5.2,2.2,8.5
                  c0,5.6-1.8,9.8-5.4,12.5C302.6,51.6,297.3,52.9,290.4,52.9 M347,87.7c-0.2,0-0.4,0.2-0.7,0.5c-1.1,1.1-2.3,1.9-3.5,2.4
                  c-1.2,0.5-2.3,0.7-3.5,0.7c-0.5,0-1.1-0.1-2-0.2c-1.4-0.4-2.8-1.3-4.3-2.7c-1.5-1.4-3.1-3.6-5-6.7c-1.6-2.6-3.4-5.3-5.2-7.9
                  c-1.8-2.7-3.8-5.3-5.9-7.9c-1.1-1.2-2.3-2.4-3.6-3.7c-1.3-1.2-2.7-2.4-4-3.4c-1.5-1.2-3-2.4-4.5-3.5c6.9-2,11.8-4.6,14.6-8.1
                  c2.8-3.4,4.2-7.6,4.2-12.5c0-3.1-0.7-5.9-2.1-8.6c-1.4-2.6-3.4-4.8-5.9-6.7c-2.5-1.9-5.6-3.3-9.1-4.4c-3.5-1.1-7.4-1.6-11.6-1.6
                  c-2.2,0-4.6,0.1-7.1,0.4c-2,0.2-4,0.4-5.8,0.6c-1.8,0.2-3.9,0.4-6.1,0.4h-5.6c-1,0-2,0-2.9-0.1h-4.6c-1,0-1.6,0.2-1.9,0.6
                  c-0.3,0.4-0.4,0.8-0.4,1.4v0.2c0,0.7,0.1,1.2,0.2,1.7c0.2,0.5,0.8,0.7,2,0.7h0.6c1.2,0,2.4,0.1,3.5,0.2c1.1,0.1,2.1,0.4,2.9,0.9
                  c0.9,0.5,1.5,1.1,2,1.9c0.5,0.8,0.7,2,0.7,3.4V87c0,2.1-0.3,3.6-0.8,4.5c-0.5,0.9-2.1,1.3-4.7,1.4h-3.7c-0.4,0-0.7,0.2-1,0.7
                  c-0.2,0.5-0.4,1-0.4,1.6c0,1.1,0.5,1.6,1.5,1.6h2c1.2,0,2.7,0,4.6-0.1h1.6c1,0,2.1,0,3.5,0.1c1.3,0,2.7,0.1,4.2,0.1
                  c1.4,0,2.6,0.1,3.6,0.1l11.4,0.5c0.6,0,1,0,1.4,0.1c0.4,0,0.7,0.1,1,0.1c0.8,0,1.3-0.3,1.3-1v-0.5c0-0.6-0.1-1.2-0.2-2
                  c-0.2-0.7-0.5-1.1-1-1.1l-6.2-0.4c-1.6-0.1-2.9-0.3-3.7-0.5c-0.9-0.3-1.5-0.8-2-1.5c-0.4-0.7-0.7-1.8-0.8-3.2
                  c-0.1-1.4-0.1-3.3-0.1-5.6V56.8h2.1c2.4,0,4.4,0,6.1,0.1c1.7,0.1,3,0.4,3.9,1c1,0.7,1.9,1.5,2.9,2.6c0.9,1.1,2.2,2.7,3.7,4.8
                  c3.7,5.1,6,8.4,7,9.9l7.2,10.3c1.1,1.5,2.2,3,3.3,4.5c1.1,1.4,2.4,2.7,3.9,3.8c1.4,1.1,3,2,4.8,2.7c1.8,0.7,3.9,1.1,6.2,1.2h0.6
                  c1.4,0,2.8-0.2,4.2-0.6c1.4-0.4,2.6-1,3.8-1.8c1.1-0.8,2.1-1.7,2.9-2.7c0.8-1.1,1.2-2.2,1.4-3.5v-0.3
                  C347.8,88.1,347.6,87.7,347,87.7"></path>
                  <path class="logo-path" d="M453.8,75.8h-0.5c-0.6,0.1-1.2,0.5-1.8,1.3c-0.6,0.8-1.5,2.2-2.7,4.2c-0.2,0.3-0.3,0.6-0.5,0.9l-0.5,0.9
                  c-0.9,1.6-1.8,2.9-2.6,4.1c-0.9,1.2-1.9,2-3,2.4c-0.5,0.2-1.3,0.4-2.5,0.6s-2.5,0.3-4,0.4c-1.5,0.1-3.1,0.2-4.6,0.2
                  c-1.6,0-3.1,0.1-4.5,0.1c-1.7,0-3.4,0-5-0.1c-1.6,0-3.1-0.1-4.3-0.3c-1.5-0.1-2.8-0.2-4-0.4c-0.4-1-0.7-1.9-0.9-2.8
                  c-0.2-0.9-0.3-2.2-0.3-3.8V52.4h21.9c0.9,0,1.7,0.1,2.3,0.3c0.7,0.2,1,0.8,1.1,1.7v2.2c0,1.1,0,2.3,0.1,3.7c0.1,1.9,0.2,3.2,0.4,4
                  c0.2,0.8,0.7,1.2,1.5,1.2c0.7,0,1.4-0.1,2-0.3c0.6-0.2,0.9-0.6,0.9-1.3c0-0.7,0-1.4-0.1-2.3c0-0.9-0.1-1.8-0.2-2.8
                  c-0.1-0.9-0.1-1.8-0.2-2.7s-0.1-1.5-0.1-2v-5.9c0-1.8,0-3.2,0.1-4.2c0-1,0.1-1.9,0.1-2.6c0-0.7,0.1-1.4,0.1-2
                  c0-0.6,0.1-1.3,0.1-2.2c0-0.7-0.2-1.2-0.6-1.4c-0.4-0.2-1.1-0.3-2-0.3c-0.7,0-1.2,0.1-1.5,0.4c-0.4,0.2-0.5,0.8-0.5,1.7
                  c-0.1,0.6-0.1,1.2-0.1,1.8c0,0.6,0,1.2-0.1,1.8c0,0.7-0.1,1.3-0.1,1.8c-0.1,0.7-0.3,1.4-0.7,2.2c-0.4,0.8-1.1,1.2-2.3,1.2
                  c-0.9,0-2,0-3.2,0.1c-1.3,0.1-2.8,0.1-4.7,0.1h-14.3V21.5c0-0.7,0.2-1.1,0.5-1.3c0.4-0.2,1.2-0.3,2.6-0.3h19.9
                  c1.9,0,3.3,0.1,4.3,0.4c1,0.3,1.8,0.9,2.3,1.9l4.9,8.3c0.8,1.3,1.3,2.2,1.6,2.8s0.7,0.8,1.2,0.8c0.9,0,1.3-0.6,1.3-1.8
                  c0-0.2-0.1-0.8-0.2-2c-0.1-1.2-0.3-2.6-0.5-4.2c-0.2-1.6-0.4-3.3-0.7-5.1c-0.2-1.8-0.4-3.3-0.6-4.6c-0.2-1.1-0.6-1.9-1.3-2.2
                  c-0.7-0.3-1.5-0.5-2.4-0.5h-54.6c-0.4,0-0.8,0.1-1,0.4c-0.3,0.2-0.5,0.7-0.6,1.3v0.4c0,1.5,0.6,2.2,1.8,2.2h5.5
                  c1,0,1.9,0.3,2.9,0.9c0.9,0.6,1.5,1.2,1.8,1.8c0.3,0.9,0.5,1.8,0.6,2.6c0,0.8,0.1,1.5,0.1,2.2v54.8c0,3.7-0.2,6.4-0.7,8.3
                  c-0.5,1.9-1.3,3-2.4,3.4c-0.4,0.2-1.2,0.3-2.5,0.5c-1.3,0.2-2.4,0.3-3.5,0.5l-1.6,0.2c-0.7,0.1-1.1,0.3-1.2,0.6
                  c-0.2,0.3-0.2,1-0.2,2c0,0.5,0.2,0.8,0.6,0.9c0.4,0.1,1,0.1,1.9,0.1h56.1c0.8,0,1.4-0.2,1.8-0.5c0.4-0.3,0.7-1,1-2.1l4.2-16.5
                  c0.1-0.2,0.1-0.4,0.1-0.7C455,76.1,454.6,75.8,453.8,75.8"></path>
                  <path class="logo-path"
                  d="M603.6,96.7c1.8,0.1,3.5,0.2,5.3,0.2c2.1,0.2,4.4,0.3,6.8,0.4c0.4,0,0.7-0.3,0.7-1c0.1-0.7,0.1-1.3,0.1-1.8
                  v-0.6c-0.1-0.4-0.4-0.7-1-0.8c-0.6-0.1-1.6-0.3-2.9-0.4c-3.4-0.4-5.6-0.9-6.6-1.6c-0.7-0.6-1.1-1.7-1.3-3.5
                  c-0.2-1.8-0.3-3.2-0.3-4.2V22.8c0-1.4,0.4-2.5,1.1-3.4c0.7-0.9,1.5-1.4,2.3-1.5c1.1-0.1,2.2-0.2,3.4-0.2c1.2-0.1,2.4-0.1,3.4-0.1
                  c0.4,0,0.7-0.3,0.9-0.9c0.2-0.6,0.3-1.1,0.3-1.6c0-0.5,0-0.9-0.1-1.3c-0.1-0.4-0.3-0.6-0.7-0.6h-19.3c-1.7,3.5-3.9,8.3-6.7,14.5
                  c-2.7,6.2-6.4,14-10.9,23.4c-0.7,1.2-1.6,3.2-2.9,6.1c-1.3,2.8-2.7,5.8-4.2,9c-1.5,3.2-2.9,6.2-4.3,9c-1.4,2.9-2.4,5-3.2,6.4
                  l-36.6-68.3h-21.1c-0.3,0-0.5,0.2-0.6,0.5c0,0.3-0.1,0.7-0.1,1.1v0.9c0,0.8,0.2,1.2,0.6,1.2c2.4,0,4.7,0.2,6.7,0.7
                  c2,0.5,3.4,1.1,4,1.8c0.7,0.7,1.4,1.7,1.9,2.8c0.5,1.1,1,2.3,1.4,3.6c0.4,1.3,0.7,2.5,0.9,3.7c0.2,1.2,0.3,2.1,0.3,2.9
                  c-0.1,3.4-0.1,7-0.1,10.6c-0.1,3.1-0.1,6.5-0.1,10.3v10.9c0,0.9-0.1,2.6-0.2,5.2c-0.1,2.6-0.3,5.3-0.6,8.2c-0.3,2.9-0.6,5.6-1,8.1
                  c-0.4,2.5-0.9,4.1-1.5,5c-0.5,0.7-1.1,1.1-2,1.5c-0.8,0.3-1.7,0.6-2.6,0.7c-0.9,0.2-1.9,0.3-2.9,0.3c-1,0-1.9,0.1-2.7,0.3
                  c-0.7,0.1-1,0.2-1.2,0.5c-0.1,0.2-0.2,0.5-0.2,0.9v0.7c0,0.6,0.1,1,0.2,1.2c0.1,0.2,0.6,0.4,1.4,0.4c0.9,0,1.7,0,2.4-0.1
                  c0.7,0,1.4-0.1,2.1-0.1c0.7,0,1.5-0.1,2.4-0.1c0.9,0,1.9-0.1,3.1-0.1c1.8,0,3.3,0,4.4-0.1c1.1,0,1.9-0.1,2.3-0.1
                  c0.4,0,1.1,0,2.1,0.1c1,0,2.1,0.1,3.3,0.1c1.2,0,2.3,0.1,3.4,0.2c1.1,0.1,1.9,0.1,2.4,0.1h1c0.9,0,1.5-0.1,1.7-0.4
                  c0.2-0.3,0.4-0.6,0.4-1v-0.4c-0.1-0.9-0.2-1.5-0.3-1.8s-0.4-0.4-0.8-0.4c-1.9-0.1-3.7-0.3-5.4-0.8c-1.8-0.4-3.1-1.2-4-2.4
                  c-1.1-1.4-1.7-4.1-1.9-8c-0.2-4-0.3-8.4-0.3-13.3L526,34.8l32.5,61.9c0.6,0.9,1.3,1.3,2.2,1.3c0.8,0,1.4-0.4,1.7-1.3l31.3-67v58.7
                  c0,1.1-0.3,2-1,2.7c-0.7,0.7-1.4,1.2-2.3,1.5l-6,0.7c-0.9,0.2-1.3,0.6-1.3,1.3v0.7c0,0.6,0.1,1,0.4,1.3c0.2,0.3,0.9,0.5,2.1,0.5
                  c0.3,0,1,0,2-0.1c1-0.1,2.2-0.1,3.5-0.2c1.3,0,2.8-0.1,4.3-0.2c1.5-0.1,3.1-0.1,4.5-0.1C600.6,96.5,601.8,96.6,603.6,96.7">
                  </path>
                  <path class="logo-path" d="M737.7,73.4c-1.3,4.5-3.3,8.3-5.7,11.5c-2.5,3.2-5.6,5.6-9.2,7.3c-3.7,1.7-7.8,2.6-12.5,2.6
                  c-11.6,0-20.3-4-26.2-11.9c-5.9-7.9-8.9-19.5-8.9-34.8c0-10.6,2.8-18.8,8.6-24.6c5.7-5.8,13.7-8.7,24.1-8.7c4.8,0,9.2,1,13.1,3.1
                  c3.9,2.1,7.3,5,10.1,8.8c2.8,3.8,5,8.4,6.5,13.7c1.5,5.4,2.3,11.4,2.3,18.1C739.8,64,739.1,69,737.7,73.4 M739.7,23.1
                  c-3.9-4-8.5-7.2-14-9.5c-5.5-2.3-11.5-3.4-18.2-3.4c-6.8,0-13,1.1-18.5,3.2c-5.5,2.1-10.1,5.1-13.9,9c-3.8,3.9-6.7,8.6-8.7,14.1
                  c-2,5.5-3,11.6-3,18.4v2.3c0,0.6,0.1,1.3,0.2,2.3c0.5,5.6,1.9,10.9,4.3,15.8c2.4,4.9,5.6,9.2,9.5,12.8c4,3.6,8.6,6.4,13.8,8.5
                  c5.3,2.1,11,3.1,17.2,3.1c6.4,0,12.2-1.2,17.5-3.5c5.3-2.3,9.9-5.5,13.7-9.5c3.8-4,6.8-8.8,8.9-14.2c2.1-5.4,3.2-11.3,3.2-17.5
                  c0-6.4-1.1-12.3-3.2-17.7C746.6,31.9,743.6,27.2,739.7,23.1"></path>
                  <path class="logo-path" d="M889.2,12.7c-0.3-0.2-1.2-0.4-2.6-0.4c-0.8,0-1.7,0-2.8,0.1s-2,0.2-3.1,0.2c-1,0.1-2,0.2-2.9,0.3
                  c-0.9,0.1-1.7,0.2-2.3,0.2h-1c-0.6,0-1.1,0-1.5-0.1c-0.5,0-1-0.1-1.8-0.2c-0.7-0.1-1.8-0.2-3.1-0.2c-1.3-0.1-3.2-0.2-5.6-0.2
                  c-0.8,0-1.4,0.1-1.8,0.4c-0.4,0.2-0.6,0.8-0.6,1.7c0,0.9,0.2,1.4,0.5,1.7c0.3,0.2,1.3,0.4,2.9,0.6c1.5,0.2,3,0.6,4.5,1.3
                  c1.4,0.7,2.3,1.3,2.8,1.9c0.4,0.6,0.8,1.5,1,2.7c0.3,1.2,0.4,2.4,0.4,3.5v51c0.1,0.2,0.1,0.5,0.1,0.9c0,0.6-0.2,0.9-0.5,0.9
                  c-0.2,0-0.5-0.1-0.8-0.4c-0.3-0.2-0.6-0.5-0.9-0.7c-1-0.8-2.3-2.1-4-4c-1.7-1.8-3.5-4-5.6-6.4c-2.1-2.4-4.3-5.1-6.6-7.8
                  c-2.3-2.8-4.6-5.5-6.8-8.2c-2.2-2.7-4.4-5.2-6.4-7.6c-2-2.4-3.7-4.5-5.1-6.2l-20.4-24.2h-19.7c-0.5,0-0.7,0.5-0.7,1.5
                  c0,0.1,0,0.2-0.1,0.3c0,0.1-0.1,0.3-0.1,0.6c0,0.2,0,0.5,0.1,0.7c0.1,0.2,0.2,0.5,0.5,0.6c0.6,0.2,1.3,0.4,2.2,0.4
                  c0.9,0,2.2,0.3,3.8,0.7c1.2,0.3,2.4,0.9,3.6,1.7c1.2,0.8,2.3,1.6,3.2,2.6c1,0.9,1.8,1.9,2.6,2.9c0.7,1,1.3,1.8,1.8,2.6L811,64.1
                  c-0.2,5.3-0.5,9.7-0.9,13.1c-0.3,3.5-0.7,6.2-1.1,8.3c-0.4,2.1-0.9,3.6-1.5,4.5c-0.6,0.9-1.3,1.6-2.1,1.9c-0.5,0.2-1.1,0.3-2,0.6
                  c-0.8,0.2-1.7,0.4-2.5,0.7c-0.9,0.2-1.6,0.5-2.3,0.7c-0.7,0.2-1.1,0.4-1.3,0.6c-0.1,0.2-0.1,0.5-0.1,1c0,0.6,0.1,1.2,0.4,1.8
                  c0.3,0.6,0.8,0.9,1.7,0.9l0.5-0.1c3.7-0.7,6.5-1,8.4-1.1c1.9-0.1,3.5-0.1,4.7-0.1c0.6,0,1.5,0.1,2.7,0.2c1.3,0.1,2.7,0.3,4.2,0.4
                  c1.5,0.2,3.2,0.3,4.8,0.5c1.7,0.2,3.2,0.3,4.5,0.4c0.4,0,0.7-0.3,1-0.8c0.2-0.5,0.4-1,0.4-1.3c0-1.1-0.6-1.8-1.7-2.1l-1-0.2
                  c-1.8-0.4-3.5-0.8-5.1-1.2c-1.6-0.4-2.7-0.9-3.2-1.5c-1.1-1.1-2-2.7-2.7-4.8c-0.7-2-1-4.6-1-7.6c0-0.4,0-1.1,0.1-2.2
                  c0-1.1,0.1-2.3,0.1-3.7c0-1.4,0.1-2.9,0.1-4.5c0-1.6,0.1-3.1,0.1-4.6c0.1-1.9,0.2-4.5,0.4-7.8c0.2-3.3,0.4-6.5,0.7-9.7
                  c0.3-3.7,0.6-7.7,0.9-11.7l42.3,49.6l12.8,14.3c1.1,1,2,1.5,2.9,1.5c0.7,0,1.3-0.3,1.7-0.9c0.4-0.6,0.6-1.4,0.6-2.3v-72
                  c0-2,0.2-3.5,0.5-4.3c0.3-0.9,1.3-1.8,2.9-2.7c0.9-0.5,2-0.9,3.2-1.2c1.2-0.3,2-0.4,2.3-0.4c0.7,0,1.3-0.1,1.7-0.3
                  c0.4-0.2,0.5-0.7,0.5-1.4v-0.5C889.8,13.3,889.6,12.8,889.2,12.7"></path>
                  <path class="logo-path" d="M1012.4,13.1c-0.1-0.3-0.4-0.4-0.9-0.4c-0.4,0-1.1,0-2,0.1c-0.9,0.1-1.9,0.2-3,0.2c-1.1,0.1-2.2,0.2-3.3,0.2
                  c-1.1,0.1-2,0.1-2.8,0.1h-5.4c-1.3,0-2.7,0-4.2-0.1h-2.3c-0.7,0.1-1,0.3-1.2,0.6c-0.1,0.3-0.2,0.7-0.2,1.2s0.1,0.9,0.2,1.2
                  c0.1,0.3,0.6,0.5,1.4,0.6l2.6,0.1c0.9,0.1,1.7,0.5,2.5,1.3c0.8,0.8,1.2,1.7,1.2,2.6c0,2.1-0.7,4.6-2.1,7.6c-0.5,0.9-1.1,2.1-2,3.7
                  c-0.8,1.5-1.7,3-2.6,4.5c-1,1.7-2,3.5-3.2,5.4l-9.5,13.6L962.2,33c-1.6-2.7-2.9-5-3.8-6.9c-0.9-1.9-1.3-3.3-1.3-4.2
                  c0-1.4,0.5-2.6,1.5-3.5c1-1,2.4-1.5,4.1-1.6c1-0.1,1.6-0.2,1.8-0.5c0.2-0.2,0.4-0.6,0.4-1v-0.7c0-0.7-0.1-1.2-0.4-1.5
                  c-0.2-0.2-0.8-0.4-1.6-0.4c-0.7,0-1.7,0-2.9,0.1c-1.2,0.1-2.4,0.2-3.7,0.2c-1.3,0.1-2.5,0.2-3.7,0.2c-1.1,0.1-2,0.1-2.7,0.1h-3.9
                  h-5.2c-1.7,0-3,0-3.8-0.1h-0.1c-0.6,0-0.9,0.2-1.1,0.7c-0.2,0.4-0.2,1-0.2,1.5c0,0.9,0.2,1.4,0.7,1.5c0.4,0.1,0.8,0.2,1.1,0.2
                  c0.3,0.1,0.7,0.2,1,0.2c0.3,0.1,0.6,0.2,0.9,0.2c1.1,0.4,2,1,2.8,1.7c0.8,0.7,1.5,1.6,2.1,2.5c0.7,0.9,1.3,1.9,1.8,2.9
                  c0.6,1,1.1,1.9,1.6,2.8c1.5,2.4,3,5,4.6,7.9c1.6,2.9,3.2,5.7,4.7,8.4c1.5,2.7,2.9,5.1,4,7.3c1.2,2.2,2,3.6,2.5,4.5
                  c1.6,2.6,2.7,4.8,3.2,6.6c0.5,1.8,0.8,3.1,0.8,4V81c0,2.4,0,4.5-0.1,6.3c0,1.8-0.2,3-0.6,3.4c-0.6,0.8-1.4,1.5-2.6,2
                  c-1.2,0.5-2.1,0.8-2.9,0.9c-0.7,0.1-1.4,0.1-2,0.2c-0.6,0-1,0.1-1.3,0.1c-0.8,0-1.3,0.1-1.5,0.4c-0.2,0.3-0.3,0.6-0.3,0.9v0.5
                  c0,0.7,0.1,1.2,0.2,1.5c0.2,0.3,0.7,0.4,1.7,0.4h0.6c1.1-0.1,2.4-0.2,3.7-0.2c1.3-0.1,2.7-0.2,4.1-0.2c1.4-0.1,2.7-0.2,4-0.2
                  c1.3-0.1,2.4-0.1,3.4-0.1c0.7,0,1.8,0,3.1,0.1c1.3,0.1,2.7,0.2,4.1,0.2c1.5,0.1,3.3,0.2,5.1,0.2l3.4,0.1c0.6,0,1-0.1,1.2-0.4
                  c0.1-0.3,0.2-0.6,0.2-0.9v-0.4c0-0.6-0.1-1.1-0.2-1.5c-0.1-0.4-0.5-0.7-1.2-0.7l-3.3-0.2c-1.8-0.1-3.3-0.3-4.5-0.7
                  c-1.2-0.4-2.1-0.9-2.7-1.7c-0.7-0.7-1.1-1.7-1.4-2.9c-0.3-1.2-0.4-2.6-0.4-4.3v-22c1.5-2.1,3.1-4.5,4.9-7.3
                  c1.8-2.7,3.7-5.6,5.6-8.6c2-3,4-6.1,6-9.3c2.1-3.2,4.1-6.2,6-9.2c1.7-2.6,3.3-4.8,4.7-6.4c1.4-1.7,2.4-2.7,3.1-3.1
                  c0.3-0.2,0.8-0.5,1.5-0.9c0.7-0.4,1.4-0.6,2.3-0.6c0.5,0,0.8-0.1,0.9-0.4c0.1-0.3,0.2-0.6,0.2-0.9v-0.5
                  C1012.6,13.9,1012.5,13.4,1012.4,13.1"></path>
                </g>
              </svg>

              <p class="uppercase text-center text-2xl tracking-wider mt-5 ">
                coffee roasters &copy; 2019
              </p>
            </a>
          </div>
        </div>
      </div>
    </footer>

    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../../node_modules/nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="../../js/slick.min.js"></script>
    <script src="../../js/main.js"></script>
  </body>
</html>