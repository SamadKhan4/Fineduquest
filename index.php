<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home Page</title>
  <link rel="icon" type="image/png" href="assets/images/logo-new.png">

  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
/>
  <style>
    @font-face {
      font-family: "Roketto";
      src: url("assets/fonts/rocketto/Rocketto.ttf") format("truetype");
      font-weight: 400;
      font-style: normal;
      font-display: swap;
    }

    @font-face {
      font-family: "Roketto";
      src: url("assets/fonts/rocketto/Rocketto%20Bold.ttf") format("truetype");
      font-weight: 600 900;
      font-style: normal;
      font-display: swap;
    }

    /* ==============================
       Global Reset
    ============================== */
    * {
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      margin: 0;
      min-height: 100vh;
      background: #ffffff;
      font-family: Arial, Helvetica, sans-serif;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    button {
      border: 0;
      cursor: pointer;
      font-family: inherit;
    }

    img {
      display: block;
      max-width: 100%;
    }

    /* ==============================
       Navbar Component CSS
    ============================== */
:root {
      --dark-border: #20343B;
      --yellow: #F5BC18;
      --cyan: #67E8F2;
      --menu-bg: #2D2D2D;
      --text-dark: #26383F;
      --black: #101010;
      --soft-black: #1f1f1f;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      min-height: 100vh;
      background: #ffffff;
      font-family: Arial, Helvetica, sans-serif;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    button {
      border: 0;
      cursor: pointer;
      font-family: inherit;
    }

    img {
      display: block;
      max-width: 100%;
    }

    .site-header {
      position: fixed;
      left: 0;
      top: 0;
      z-index: 9997;
      width: 100%;
      border-top: 4px solid var(--dark-border);
      background: #ffffff;
      transition: all 300ms ease;
    }

    .site-nav {
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 95px;
      padding-inline: 20px;
      transition: all 300ms ease;
    }

    .site-header.is-scrolled .site-nav {
      height: 75px;
    }

    .logo-link {
      display: inline-block;
    }

    .logo-img {
      width: 125px;
      height: auto;
      object-fit: contain;
      padding: 20px;
      transition: all 300ms ease;
    }

    .site-header.is-scrolled .logo-img {
      width: 95px;
    }

    .menu-open-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 42px;
      height: 42px;
      border-radius: 999px;
      background: var(--yellow);
      color: var(--text-dark);
      box-shadow: 0 4px 0 var(--dark-border);
      transition: all 300ms ease;
    }

    .menu-open-btn:hover {
      transform: scale(1.05);
      box-shadow: 0 2px 0 var(--dark-border);
    }

    .menu-open-btn svg {
      width: 28px;
      height: 28px;
      transition: all 300ms ease;
    }

    .site-header.is-scrolled .menu-open-btn {
      width: 38px;
      height: 38px;
    }

    .site-header.is-scrolled .menu-open-btn svg {
      width: 25px;
      height: 25px;
    }

    .header-spacer {
      height: 95px;
      transition: all 300ms ease;
    }

    .header-spacer.is-scrolled {
      height: 75px;
    }

    .fullscreen-menu {
      position: fixed;
      left: 0;
      top: 0;
      z-index: 9998;
      width: 100%;
      height: 100dvh;
      overflow-x: hidden;
      overflow-y: auto;
      border-top: 4px solid var(--dark-border);
      background: var(--menu-bg);
      transform: translateY(-100%);
      transition: transform 850ms cubic-bezier(0.76, 0, 0.24, 1);
    }

    .fullscreen-menu.is-open {
      transform: translateY(0);
    }

    .menu-close-btn {
      position: absolute;
      right: 20px;
      top: 28px;
      z-index: 9999;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 46px;
      height: 46px;
      border-radius: 999px;
      background: var(--yellow);
      color: #000000;
      transition: all 300ms ease;
    }

    .menu-close-btn:hover {
      transform: rotate(90deg) scale(1.05);
    }

    .menu-close-btn svg {
      width: 38px;
      height: 38px;
    }

    .menu-inner {
      position: relative;
      display: flex;
      align-items: center;
      min-height: 100%;
      width: 100%;
      padding-block: 96px;
    }

    .menu-content {
      position: relative;
      z-index: 30;
      width: 100%;
      padding-inline: 24px;
    }

    .menu-list {
      list-style: none;
    }

    .menu-list li + li {
      margin-top: 16px;
    }

    .menu-link {
      display: block;
      overflow-wrap: anywhere;
      font-family: "Arial Black", Arial, Helvetica, sans-serif;
      font-size: 34px;
      font-weight: 900;
      line-height: 0.98;
      letter-spacing: 0;
      color: #ffffff;
      transition: all 300ms ease;
    }

    .menu-link:hover,
    .menu-link.is-active {
      color: var(--yellow);
    }

    .menu-link:hover {
      transform: translateX(8px);
    }

    .menu-actions {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 16px;
      margin-top: 32px;
    }

    .pill-btn {
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 44px;
      overflow: hidden;
      border-radius: 999px;
      padding-inline: 24px;
      color: var(--soft-black);
      box-shadow: 0 5px 0 var(--black);
      transition: all 300ms ease;
    }

    .pill-btn:hover {
      transform: translateY(2px);
      box-shadow: 0 3px 0 var(--black);
    }

    .pill-btn::before {
      content: "";
      position: absolute;
      inset: 0;
      background: #000000;
      transform: translateY(-100%);
      transition: transform 300ms ease-out;
    }

    .pill-btn:hover::before {
      transform: translateY(0);
    }

    .pill-btn span {
      position: relative;
      z-index: 1;
      font-size: 17px;
      font-weight: 500;
      transition: color 300ms ease;
    }

    .pill-btn.register-btn {
      background: var(--cyan);
    }

    .pill-btn.register-btn:hover span {
      color: var(--cyan);
    }

    .pill-btn.login-btn {
      background: var(--yellow);
    }

    .pill-btn.login-btn:hover span {
      color: var(--yellow);
    }

    .social-links {
      display: flex;
      align-items: center;
      gap: 16px;
      margin-top: 40px;
    }

    .social-link {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 42px;
      height: 42px;
      border-radius: 999px;
      background: #ffffff;
      color: #000000;
      transition: all 300ms ease;
    }

    .social-link:hover {
      transform: translateY(-4px);
      background: var(--yellow);
    }

    .social-link svg {
      width: 20px;
      height: 20px;
      fill: currentColor;
    }

    .vertical-marquee-wrap {
      pointer-events: auto;
      position: absolute;
      right: 30px;
      top: 50%;
      z-index: 10;
      display: none;
      width: 82px;
      height: 102vh;
      overflow: hidden;
      border-radius: 10px;
      transform: translateY(-50%);
      user-select: none;
    }

    @keyframes verticalMenuMarquee {
      from {
        transform: translateY(-50%);
      }
      to {
        transform: translateY(0);
      }
    }

    .side-menu-marquee-track {
      display: flex;
      min-height: 200%;
      flex-direction: column;
      justify-content: space-around;
      padding-block: 24px;
      animation: verticalMenuMarquee 18s linear infinite;
    }

    .marquee-word-item {
      display: flex;
      min-height: 220px;
      align-items: center;
      justify-content: center;
      gap: 20px;
    }

    .marquee-word-item span {
      white-space: nowrap;
      writing-mode: vertical-rl;
      transform: rotate(180deg);
      font-size: 24px;
      font-weight: 600;
      letter-spacing: 0.03em;
      color: #424242;
    }

    .marquee-word-item a {
      color: inherit;
      text-decoration: none;
    }

    .marquee-word-item a:hover span {
      color: #1671de;
    }

    .mascot-img {
      pointer-events: none;
      position: absolute;
      right: 28px;
      bottom: 118px;
      z-index: 20;
      display: none;
      width: 185px;
      user-select: none;
    }

    .decor-circle-yellow,
    .decor-circle-cyan {
      pointer-events: none;
      position: absolute;
      z-index: 0;
      width: 320px;
      height: 320px;
      border-radius: 999px;
      filter: blur(64px);
    }

    .decor-circle-yellow {
      right: -96px;
      bottom: -96px;
      background: rgba(245, 188, 24, 0.05);
    }

    .decor-circle-cyan {
      left: -112px;
      top: 80px;
      width: 300px;
      height: 300px;
      background: rgba(103, 232, 242, 0.05);
    }

    .register-popup {
      position: fixed;
      inset: 0;
      z-index: 10000;
      display: none;
      align-items: center;
      justify-content: center;
      padding: 20px;
      background: rgba(0, 0, 0, 0.58);
    }

    .register-popup.is-open {
      display: flex;
    }

    .popup-box {
      position: relative;
      width: min(520px, 100%);
      border-top: 4px solid var(--dark-border);
      border-radius: 22px;
      background: #ffffff;
      padding: 30px;
      box-shadow: 0 20px 0 rgba(16, 16, 16, 0.25);
      animation: popupIn 300ms ease both;
    }

    @keyframes popupIn {
      from {
        opacity: 0;
        transform: translateY(20px) scale(0.97);
      }
      to {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }

    .popup-close-btn {
      position: absolute;
      right: 18px;
      top: 18px;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 38px;
      height: 38px;
      border-radius: 999px;
      background: var(--yellow);
      color: #000000;
      transition: transform 300ms ease;
    }

    .popup-close-btn:hover {
      transform: rotate(90deg) scale(1.05);
    }

    .popup-box h2 {
      max-width: calc(100% - 50px);
      color: var(--dark-border);
      font-family: "Arial Black", Arial, Helvetica, sans-serif;
      font-size: 30px;
      line-height: 1;
    }

    .popup-box p {
      margin-top: 16px;
      color: #333333;
      font-size: 16px;
      line-height: 1.6;
    }

    .visually-hidden {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border: 0;
    }

    @media (prefers-reduced-motion: reduce) {
      .side-menu-marquee-track {
        animation: none;
      }
    }

    @media (min-width: 380px) {
      .menu-link {
        font-size: 38px;
      }
    }

    @media (min-width: 640px) {
      .site-nav {
        height: 105px;
        padding-inline: 40px;
      }

      .site-header.is-scrolled .site-nav {
        height: 82px;
      }

      .logo-img {
        width: 150px;
      }

      .site-header.is-scrolled .logo-img {
        width: 115px;
      }

      .menu-open-btn {
        width: 46px;
        height: 46px;
      }

      .menu-open-btn svg {
        width: 31px;
        height: 31px;
      }

      .site-header.is-scrolled .menu-open-btn {
        width: 42px;
        height: 42px;
      }

      .site-header.is-scrolled .menu-open-btn svg {
        width: 28px;
        height: 28px;
      }

      .header-spacer {
        height: 105px;
      }

      .header-spacer.is-scrolled {
        height: 82px;
      }

      .menu-close-btn {
        right: 36px;
      }

      .menu-content {
        padding-inline: 40px;
      }

      .menu-list li + li {
        margin-top: 24px;
      }

      .menu-link {
        font-size: 46px;
      }

      .menu-actions {
        gap: 20px;
        margin-top: 40px;
      }

      .pill-btn {
        padding-inline: 28px;
      }

      .pill-btn span {
        font-size: 18px;
      }
    }

    @media (min-width: 768px) {
      .site-nav {
        height: 120px;
        padding-inline: 64px;
      }

      .site-header.is-scrolled .site-nav {
        height: 90px;
      }

      .logo-img {
        width: 170px;
      }

      .site-header.is-scrolled .logo-img {
        width: 135px;
      }

      .header-spacer {
        height: 120px;
      }

      .header-spacer.is-scrolled {
        height: 90px;
      }

      .fullscreen-menu {
        height: 100vh;
        overflow: hidden;
      }

      .menu-close-btn {
        right: 78px;
      }

      .menu-inner {
        height: 100%;
        padding-block: 0;
      }

      .menu-content {
        width: auto;
        padding-inline: 0;
        padding-left: 80px;
      }

      .menu-list li + li {
        margin-top: 32px;
      }

      .menu-link {
        font-size: 50px;
        line-height: 0.95;
        letter-spacing: -1.5px;
      }

      .vertical-marquee-wrap,
      .mascot-img {
        display: block;
      }
    }

    @media (min-width: 1024px) {
      .site-nav {
        height: 135px;
        padding-inline: 78px;
      }

      .site-header.is-scrolled .site-nav {
        height: 95px;
      }

      .logo-img {
        width: 185px;
      }

      .site-header.is-scrolled .logo-img {
        width: 145px;
      }

      .header-spacer {
        height: 135px;
      }

      .header-spacer.is-scrolled {
        height: 95px;
      }

      .menu-content {
        padding-left: 78px;
      }

      .menu-link {
        font-size: 54px;
      }

      .vertical-marquee-wrap {
        right: 66px;
      }

      .mascot-img {
        right: 70px;
        width: 240px;
      }
    }

    @media (min-width: 1280px) {
      .menu-link {
        font-size: 58px;
      }

      .vertical-marquee-wrap {
        right: 82px;
      }

      .mascot-img {
        right: 95px;
        bottom: 150px;
        width: 255px;
      }
    }

    @media (min-width: 1536px) {
      .vertical-marquee-wrap {
        right: 180px;
      }

      .mascot-img {
        width: 285px;
      }
    }

    /* ==============================
       Hero Section Component CSS
    ============================== */
* {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background: #ffffff;
    }

    .hero-section-component {
      width: 100%;
      background: #ffffff;
      overflow: hidden;
    }

    .hero-wrapper {
      position: relative;
      width: 100%;
      min-height: 520px;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0.5rem 0.75rem 2rem;
    }

    .hero-stage {
      position: relative;
      width: 100%;
      max-width: 430px;
      aspect-ratio: 829 / 691;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .hero-main-bg {
      position: absolute;
      width: 100%;
      height: 100%;
      object-fit: contain;
      object-position: center;
      user-select: none;
      pointer-events: none;
    }

    .hero-decor {
      position: absolute;
      user-select: none;
      pointer-events: none;
    }

    .decor-star-left-top {
      left: 3%;
      top: 4%;
      width: 42px;
    }

    .decor-arrow-left-bottom {
      left: 5%;
      bottom: 9%;
      width: 38px;
      --hero-arrow-x: 0px;
      --hero-arrow-y: 0px;
      --hero-arrow-rotation: 0deg;
      will-change: transform;
    }

    .decor-arrow-left-bottom.is-cursor-following {
      position: fixed;
      left: 0;
      top: 0;
      bottom: auto;
      z-index: 9999;
    }

    .decor-light-right {
      right: 11%;
      top: 14%;
      width: 24px;
    }

    .decor-star-small-left {
      left: 13%;
      top: 25%;
      width: 14px;
    }

    .decor-star-right-top {
      right: 6%;
      top: 8%;
      width: 16px;
    }

    .hero-content {
      position: absolute;
      left: 8%;
      top: 22%;
      z-index: 20;
      max-width: 260px;
    }

    .hero-title-font {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      font-weight: 900;
      line-height: 0.95;
      letter-spacing: -1.5px;
    }

    .hero-title-font span {
      display: block;
      font-size: 22px;
    }

    .text-black {
      color: #000000;
    }

    .text-blue {
      color: #007BFF;
    }

    .hero-subtitle {
      margin: 0.5rem 0 0;
      max-width: 220px;
      font-size: 13px;
      line-height: 1.45;
      color: #000000;
    }

    .hero-subtitle strong {
      font-weight: 700;
    }

    .discover-btn {
      position: relative;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      margin-top: 1rem;
      min-height: 44px;
      border: 0;
      border-radius: 999px;
      background: #F5BC18;
      color: #1f1f1f;
      padding: 0 26px;
      cursor: pointer;
      overflow: hidden;
      box-shadow: 0 5px 0 #101010;
      transition: transform 300ms ease, box-shadow 300ms ease;
      font-family: Arial, Helvetica, sans-serif;
    }

    .discover-btn::before {
      content: "";
      position: absolute;
      inset: 0;
      background: #000000;
      transform: translateY(-100%);
      transition: transform 300ms ease-out;
    }

    .discover-btn:hover {
      transform: translateY(2px);
      box-shadow: 0 3px 0 #101010;
    }

    .discover-btn:hover::before {
      transform: translateY(0);
    }

    .discover-btn span,
    .discover-btn a {
      position: relative;
      z-index: 2;
      color: #1f1f1f;
      text-decoration: none;
      font-size: 17px;
      font-weight: 500;
      transition: color 300ms ease;
    }

    .discover-btn:hover span,
    .discover-btn:hover a {
      color: #F5BC18;
    }

    @keyframes spinSoft {
      0% {
        transform: rotate(0deg) scale(1);
      }
      50% {
        transform: rotate(180deg) scale(1.04);
      }
      100% {
        transform: rotate(360deg) scale(1);
      }
    }

    @keyframes floatReverse {
      0%, 100% {
        transform: translate(var(--hero-arrow-x, 0px), var(--hero-arrow-y, 0px)) translateY(0) translateX(0) rotate(var(--hero-arrow-rotation, 0deg));
      }
      50% {
        transform: translate(var(--hero-arrow-x, 0px), var(--hero-arrow-y, 0px)) translateY(12px) translateX(-6px) rotate(calc(var(--hero-arrow-rotation, 0deg) - 4deg));
      }
    }

    @keyframes pulsePop {
      0%, 100% {
        transform: scale(1);
        opacity: 1;
      }
      50% {
        transform: scale(1.18);
        opacity: 0.78;
      }
    }

    @keyframes twinkle {
      0%, 100% {
        opacity: 1;
        transform: scale(1) rotate(0deg);
      }
      50% {
        opacity: 0.55;
        transform: scale(0.82) rotate(12deg);
      }
    }

    @keyframes heroLeftIn {
      0% {
        opacity: 0;
        transform: translateX(-48px);
      }
      100% {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes heroRightIn {
      0% {
        opacity: 0;
        transform: translateX(48px);
      }
      100% {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes fadeUp {
      0% {
        opacity: 0;
        transform: translateY(22px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-spin-soft {
      animation: spinSoft 9s linear infinite;
    }

    .animate-float-reverse {
      animation: floatReverse 4.5s ease-in-out infinite;
    }

    .animate-pulse-pop {
      animation: pulsePop 2.8s ease-in-out infinite;
    }

    .animate-twinkle {
      animation: twinkle 2.4s ease-in-out infinite;
    }

    .hero-left-animate {
      opacity: 0;
      animation: heroLeftIn 700ms cubic-bezier(0.22, 1, 0.36, 1) forwards;
    }

    .hero-right-animate {
      opacity: 0;
      animation: heroRightIn 700ms cubic-bezier(0.22, 1, 0.36, 1) forwards;
    }

    .hero-delay-1 {
      animation-delay: 150ms;
    }

    .hero-delay-2 {
      animation-delay: 300ms;
    }

    .hero-delay-3 {
      animation-delay: 450ms;
    }

    .animate-fade-up-delay {
      opacity: 0;
      animation: fadeUp 700ms cubic-bezier(0.22, 1, 0.36, 1) 650ms forwards;
    }

    .discover-btn {
      opacity: 0;
      animation: fadeUp 700ms cubic-bezier(0.22, 1, 0.36, 1) 800ms forwards;
    }

    @media (prefers-reduced-motion: reduce) {
      .animate-spin-soft,
      .animate-float-reverse,
      .animate-pulse-pop,
      .animate-twinkle,
      .hero-left-animate,
      .hero-right-animate,
      .animate-fade-up-delay,
      .discover-btn {
        animation: none;
        opacity: 1;
      }
    }

    @media (min-width: 380px) {
      .hero-title-font span {
        font-size: 34px;
      }
    }

    @media (min-width: 480px) {
      .hero-stage {
        max-width: 560px;
      }

      .decor-star-left-top {
        width: 54px;
      }

      .decor-arrow-left-bottom {
        width: 48px;
      }

      .decor-light-right {
        width: 30px;
      }

      .decor-star-small-left {
        width: 17px;
      }

      .decor-star-right-top {
        width: 22px;
      }

      .hero-content {
        left: 9%;
        top: 21%;
        max-width: 330px;
      }

      .hero-title-font span {
        font-size: 42px;
      }

      .hero-subtitle {
        max-width: 280px;
        font-size: 15px;
      }
    }

    @media (min-width: 640px) {
      .hero-wrapper {
        min-height: 640px;
        padding: 2.5rem 1.5rem;
      }

      .hero-stage {
        max-width: 720px;
        aspect-ratio: 829 / 620;
      }

      .decor-star-left-top {
        left: 4%;
        top: 5%;
        width: 68px;
      }

      .decor-arrow-left-bottom {
        left: 7%;
        bottom: 7%;
        width: 62px;
      }

      .decor-light-right {
        right: 12%;
        top: 44%;
        width: 40px;
      }

      .decor-star-small-left {
        left: 12%;
        top: 23%;
        width: 22px;
      }

      .decor-star-right-top {
        right: 5%;
        top: 7%;
        width: 34px;
      }

      .hero-content {
        left: 12%;
        top: 19%;
        max-width: 430px;
      }

      .hero-title-font span {
        font-size: 48px;
      }

      .hero-subtitle {
        margin-top: 1rem;
        max-width: 430px;
        font-size: 16px;
      }

      .discover-btn {
        margin-top: 1.25rem;
      }
    }

    @media (min-width: 768px) {
      .hero-wrapper {
        min-height: 700px;
      }

      .hero-stage {
        max-width: 900px;
        aspect-ratio: 16 / 9;
      }

      .decor-star-left-top {
        left: 2%;
        top: 4%;
        width: 70px;
      }

      .decor-arrow-left-bottom {
        width: 78px;
      }

      .decor-light-right {
        width: 48px;
      }

      .decor-star-small-left {
        width: 26px;
      }

      .decor-star-right-top {
        right: 4%;
        top: 6%;
        width: 46px;
      }

      .hero-content {
        left: 10%;
        top: 18%;
        max-width: 520px;
      }

      .hero-title-font span {
        font-size: 56px;
      }

      .hero-subtitle {
        font-size: 18px;
      }
    }

    @media (min-width: 1024px) {
      .hero-wrapper {
        min-height: calc(100vh - 120px);
        padding: 0 2.5rem;
      }

      .hero-stage {
        max-width: 1050px;
        aspect-ratio: 16 / 8;
      }

      .decor-star-left-top {
        left: 1%;
        top: 2%;
      }

      .decor-arrow-left-bottom {
        left: 8%;
        bottom: 5%;
        width: 85px;
      }

      .decor-light-right {
        right: 12%;
        top: 42%;
        width: 52px;
      }

      .decor-star-small-left {
        left: 12%;
        top: 22%;
        width: 28px;
      }

      .decor-star-right-top {
        width: 55px;
      }

      .hero-content {
        left: 10%;
        top: 20%;
        max-width: 640px;
      }

      .hero-title-font span {
        font-size: 60px;
      }

      .hero-subtitle {
        max-width: 480px;
      }
    }

    @media (min-width: 769px) and (max-width: 1200px) {
      .hero-title-font span {
        font-size: 46px;
      }
    }

    @media (max-width: 480px) {
      .hero-title-font span {
        font-size: 36px;
      }
    }

    /* Mobile hero: keep the artwork compact and all copy inside the yellow panel. */
    @media (max-width: 639px) {
      .hero-wrapper {
        min-height: 0;
        padding: 16px 12px 28px;
      }

      .hero-stage {
        width: 100%;
        max-width: 460px;
        aspect-ratio: 829 / 691;
      }

      .hero-content {
        left: 9%;
        top: 30%;
        width: 64%;
        max-width: none;
      }

      .hero-title-font {
        line-height: 0.98;
        letter-spacing: -1px;
      }

      .hero-title-font span {
        font-size: clamp(20px, 6.5vw, 28px);
        white-space: nowrap;
      }

      .hero-subtitle {
        margin-top: clamp(7px, 2vw, 10px);
        max-width: 100%;
        font-size: clamp(12px, 3.5vw, 15px);
      }

      .discover-btn {
        min-height: 40px;
        max-width: 100%;
        margin-top: clamp(10px, 3vw, 14px);
        padding-inline: clamp(14px, 4vw, 20px);
      }

      .discover-btn span,
      .discover-btn a {
        font-size: clamp(13px, 3.8vw, 16px);
        white-space: nowrap;
      }
    }


    /* ================= PURPOSE SECTION CSS START ================= */

.purpose-section {
  width: 100%;
  background: #ffffff;
  padding: 56px 16px;
}

.purpose-container {
  max-width: 900px;
  margin: 0 auto;
  text-align: center;
}

.purpose-heading,
.purpose-subheading {
  font-family: var(--heading-font, inherit);
  font-weight: 800;
  line-height: 1.15;
  font-size: 30px;
}

.purpose-heading {
  color: #000000;
}

.purpose-subheading {
  color: #1671de;
  margin-top: 4px;
}

.purpose-description {
  max-width: 720px;
  margin: 28px auto 0;
  color: #000000;
  font-size: 14px;
  line-height: 24px;
  font-weight: 400;
}

.purpose-btn {
  position: relative;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 38px;
  margin-top: 20px;
  padding: 0 24px;
  border-radius: 999px;
  overflow: hidden;
  background: #f5bc18;
  color: #000000;
  text-decoration: none;
  box-shadow: 0 3px 0 #111111;
  transition: all 0.3s ease;
}

.purpose-btn:hover {
  transform: translateY(2px);
  box-shadow: 0 1px 0 #111111;
}

.purpose-btn-bg {
  position: absolute;
  inset: 0;
  background: #000000;
  transform: translateY(-100%);
  transition: transform 0.3s ease-out;
}

.purpose-btn:hover .purpose-btn-bg {
  transform: translateY(0);
}

.purpose-btn-text {
  position: relative;
  z-index: 10;
  font-size: 14px;
  font-weight: 500;
  color: #000000;
  transition: color 0.3s ease;
}

.purpose-btn:hover .purpose-btn-text {
  color: #f5bc18;
}

/* Responsive */
@media (min-width: 640px) {
  .purpose-section {
    padding-top: 64px;
    padding-bottom: 64px;
  }

  .purpose-heading,
  .purpose-subheading {
    font-size: 38px;
  }

  .purpose-description {
    font-size: 16px;
  }

  .purpose-btn-text {
    font-size: 15px;
  }
}

@media (min-width: 768px) {
  .purpose-section {
    padding-top: 80px;
    padding-bottom: 80px;
  }

  .purpose-heading,
  .purpose-subheading {
    font-size: 46px;
  }

  .purpose-description {
    font-size: 18px;
    line-height: 27px;
  }
}

@media (min-width: 1024px) {
  .purpose-heading,
  .purpose-subheading {
    font-size: 55px;
  }
}

/* ================= INITIATIVES SECTION CSS START ================= */

.initiatives-section {
  width: 100%;
  background: #ffffff;
  padding: 48px 16px;
}

.initiatives-wrapper {
  margin: 0 auto;
}

.initiatives-box {
  background: #2d2d2d;
  border-radius: 32px;
  padding: 48px 20px;
  overflow: hidden;
}

.initiatives-header {
  text-align: center;
  margin-bottom: 40px;
}

.initiatives-label {
  display: block;
  color: #67e8f2;
  font-size: 10px;
  font-weight: 600;
  margin-bottom: 8px;
}

.initiatives-title {
  font-family: var(--heading-font, inherit);
  font-weight: 800;
  color: #ffffff;
  font-size: 30px;
  line-height: 1.1;
  margin: 0;
}

.initiatives-title span {
  color: #67e8f2;
}

.initiatives-description {
  max-width: 620px;
  margin: 16px auto 0;
  color: rgba(255, 255, 255, 0.8);
  font-size: 13px;
  line-height: 22px;
}

.initiatives-card-list {
  max-width: 960px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.initiatives-card-row {
  width: 100%;
  display: flex;
  opacity: 0;
  color: inherit;
  text-decoration: none;
}

.initiatives-left {
  justify-content: flex-start;
}

.initiatives-right {
  justify-content: flex-end;
}

.initiatives-card-row.initiatives-card-animate {
  animation-name: initiativesCardFadeUp;
  animation-duration: 0.65s;
  animation-timing-function: ease-out;
  animation-fill-mode: forwards;
}

@keyframes initiativesCardFadeUp {
  from {
    opacity: 0;
    transform: translateY(35px);
  }

  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.initiatives-card {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 16px;
  min-height: 230px;
  width: 100%;
  max-width: 520px;
  overflow: hidden;
  border-radius: 20px;
  background: #ffffff;
  padding: 20px;
  transition: all 0.5s ease-out;
}

.initiatives-card:hover {
  background: #f4bf23;
}

.initiatives-main-img {
  position: relative;
  z-index: 10;
  width: 100%;
  height: 150px;
  flex-shrink: 0;
  object-fit: contain;
  transition: transform 0.5s ease-out;
  pointer-events: none;
  user-select: none;
}

.initiatives-card:hover .initiatives-main-img {
  transform: scale(1.03);
}

.initiatives-card-content {
  position: relative;
  z-index: 10;
  width: 100%;
  min-width: 0;
}

.initiatives-card-content h2 {
  font-family: var(--heading-font, inherit);
  font-weight: 800;
  color: #000000;
  font-size: 18px;
  line-height: 1.25;
  margin: 0;
  transition: color 0.5s ease;
}

.initiatives-card-content p {
  margin: 8px 0 0;
  text-align: left;
  color: #000000;
  font-size: 13px;
  line-height: 20px;
  transition: color 0.5s ease;
}

.initiatives-link {
  position: relative;
  display: inline-flex;
  margin-top: 12px;
  color: #000000;
  font-size: 11px;
  font-weight: 500;
  text-decoration: none;
  overflow: hidden;
  transition: color 0.5s ease;
  padding-bottom: 3px;
}

.initiatives-link-line-one,
.initiatives-link-line-two {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 2px;
}

.initiatives-link-line-one {
  background: #f5bc18;
  transition: background 0.5s ease;
}

.initiatives-card:hover .initiatives-link-line-one {
  background: #ffffff;
}

.initiatives-link-line-two {
  background: #67e8f2;
  transform: translateX(-100%);
  transition: transform 0.3s ease;
}

.initiatives-link:hover .initiatives-link-line-two {
  transform: translateX(0);
}

.initiatives-hover-img {
  pointer-events: none;
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: 0;
  width: 70px;
  opacity: 0;
  transform: translateY(100%);
  transition: all 0.5s ease-out;
}

.initiatives-card:hover .initiatives-hover-img {
  opacity: 1;
  transform: translateY(0);
}

/* Responsive */
@media (min-width: 640px) {
  .initiatives-section {
    padding: 64px 20px;
  }

  .initiatives-box {
    border-radius: 40px;
    padding: 56px 32px;
  }

  .initiatives-header {
    margin-bottom: 48px;
  }

  .initiatives-label {
    font-size: 15px;
  }

  .initiatives-title {
    font-size: 38px;
  }

  .initiatives-description {
    font-size: 15px;
  }

  .initiatives-card-list {
    gap: 24px;
  }

  .initiatives-card {
    min-height: 250px;
    flex-direction: row;
    align-items: center;
    gap: 24px;
    padding: 24px;
  }

  .initiatives-main-img {
    width: 170px;
    height: 185px;
  }

  .initiatives-card-content {
    flex: 1;
  }

  .initiatives-card-content h2 {
    font-size: 20px;
  }

  .initiatives-card-content p {
    font-size: 14px;
  }

  .initiatives-link {
    font-size: 12px;
  }

  .initiatives-hover-img {
    width: 82px;
  }
}

@media (min-width: 768px) {
  .initiatives-box {
    padding: 64px 48px;
  }

  .initiatives-title {
    font-size: 46px;
  }
}

@media (min-width: 1024px) {
  .initiatives-section {
    padding-left: 0;
    padding-right: 0;
  }

  .initiatives-box {
    padding-left: 64px;
    padding-right: 64px;
  }
}

@media (prefers-reduced-motion: reduce) {
  .initiatives-card-row.initiatives-card-animate {
    animation: none;
    opacity: 1;
    transform: none;
  }

  .initiatives-card,
  .initiatives-main-img,
  .initiatives-hover-img,
  .initiatives-link-line-one,
  .initiatives-link-line-two {
    transition: none;
  }
}
/* ================= PARTNER PURPOSE SECTION CSS START ================= */

.partner-purpose-section {
  width: 100%;
  background: #fdebbd;
  padding: 20px 0;
  overflow: hidden;
}

.partner-purpose-container {
  max-width: 1180px;
  margin: 0 auto;
  padding: 0 16px;
}

.partner-purpose-heading-box {
  text-align: center;
  margin-bottom: 20px;
}

.partner-purpose-heading {
  margin: 0;
  font-family: var(--heading-font, inherit);
  font-weight: 800;
  color: #000000;
  font-size: 28px;
  line-height: 1;
}

.partner-purpose-heading span {
  color: #1671de;
}

.partner-purpose-subtitle {
  margin: 8px 0 0;
  color: rgba(0, 0, 0, 0.6);
  font-size: 12px;
}

.partner-purpose-main-row {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 20px;
}

.partner-purpose-boy-box {
  display: none;
  flex-shrink: 0;
}

.partner-purpose-boy-img {
  width: 250px;
  display: block;
}

.partner-purpose-slider-wrapper {
  width: 100%;
  max-width: 720px;
  overflow: hidden;
}

.partner-purpose-slider {
  display: flex;
  align-items: flex-start;
  gap: 14px;
  overflow-x: auto;
  scroll-behavior: smooth;
  scroll-snap-type: x mandatory;
  padding-bottom: 8px;
  -ms-overflow-style: none;
  scrollbar-width: none;
}

.partner-purpose-slider::-webkit-scrollbar {
  display: none;
}

.partner-purpose-card {
  scroll-snap-align: start;
  flex-shrink: 0;
  width: 34%;
  min-width: 34%;
  min-height: 245px;
  background: #ffffff;
  border-radius: 14px;
  border: 2px dashed;
  padding: 18px;
  transition: all 0.5s ease-out;
}

.partner-purpose-card.is-expanded {
  width: 66%;
  min-width: 66%;
  min-height: 500px;
  padding: 20px;
}

.partner-card-blue {
  border-color: #2f80ed;
}

.partner-card-green {
  border-color: #3fa65c;
}

.partner-card-purple {
  border-color: #a66cff;
}

.partner-card-img {
  width: 95px;
  height: 72px;
  object-fit: cover;
  border-radius: 8px;
  margin-bottom: 16px;
  transition: all 0.5s ease;
}

.partner-purpose-card.is-expanded .partner-card-img {
  width: 100%;
  height: 190px;
  margin-bottom: 20px;
}

.partner-card-title {
  margin: 0;
  font-family: var(--heading-font, inherit);
  font-weight: 800;
  font-size: 15px;
  line-height: 1.25;
}

.partner-card-blue .partner-card-title,
.partner-card-blue .partner-impact-icon,
.partner-card-blue .partner-impact-box h4 {
  color: #004a9f;
}

.partner-card-green .partner-card-title,
.partner-card-green .partner-impact-icon,
.partner-card-green .partner-impact-box h4 {
  color: #16803b;
}

.partner-card-purple .partner-card-title,
.partner-card-purple .partner-impact-icon,
.partner-card-purple .partner-impact-box h4 {
  color: #5a35b8;
}

.partner-purpose-card.is-expanded .partner-card-title {
  font-size: 22px;
}

.partner-card-subtitle {
  margin: 4px 0 0;
  font-weight: 700;
  color: #000000;
  font-size: 10px;
}

.partner-purpose-card.is-expanded .partner-card-subtitle {
  font-size: 10px;
}

.partner-card-blue.is-expanded .partner-card-subtitle {
  color: #004a9f;
}

.partner-card-green.is-expanded .partner-card-subtitle {
  color: #16803b;
}

.partner-card-purple.is-expanded .partner-card-subtitle {
  color: #5a35b8;
}

.partner-card-description {
  margin: 16px 0 0;
  color: rgba(0, 0, 0, 0.7);
  text-align: left;
  font-size: 11px;
  line-height: 18px;
}

.partner-purpose-card.is-expanded .partner-card-description {
  font-size: 14px;
  line-height: 26px;
}

.partner-read-btn {
  border: 0;
  background: transparent;
  padding: 0;
  cursor: pointer;
  font: inherit;
  font-weight: 600;
  text-decoration: underline;
  text-underline-offset: 2px;
  color: #e85b8c;
}

.partner-impact-box {
  display: none;
  margin-top: 40px;
  border-top: 1px solid #c8ced8;
  padding-top: 20px;
}

.partner-purpose-card.is-expanded .partner-impact-box {
  display: block;
}

.partner-impact-inner {
  display: flex;
  align-items: center;
  gap: 12px;
}

.partner-impact-icon {
  font-size: 20px;
}

.partner-impact-box h4 {
  margin: 0;
  font-family: var(--heading-font, inherit);
  font-weight: 800;
  font-size: 14px;
  line-height: 1.15;
}

.partner-impact-box p {
  margin: 0;
  color: rgba(0, 0, 0, 0.55);
  font-size: 13px;
  line-height: 1.15;
}

/* Bottom Strip */
.partner-bottom-strip {
  margin-top: 20px;
  background: #ffffff;
  border-radius: 14px;
  border: 2px dashed #2f80ed;
  padding: 20px 16px;
}

.partner-bottom-inner {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 16px;
}

.partner-bottom-left {
  display: flex;
  align-items: center;
  gap: 12px;
  min-width: fit-content;
}

.partner-bottom-main-icon {
  width: 42px;
  height: 42px;
  border-radius: 999px;
  background: #004a9f;
  color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
}

.partner-bottom-left h4 {
  margin: 0;
  font-family: var(--heading-font, inherit);
  font-weight: 800;
  color: #004a9f;
  font-size: 13px;
  line-height: 1.15;
}

.partner-bottom-left p {
  margin: 0;
  color: #004a9f;
  font-size: 10px;
}

.partner-bottom-items {
  width: 100%;
  flex: 1;
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 12px;
}

.partner-bottom-item {
  display: flex;
  align-items: center;
  gap: 8px;
  color: #000000;
  font-size: 10px;
  font-weight: 600;
  white-space: nowrap;
}

.partner-bottom-icon {
  font-size: 14px;
}

.partner-bottom-icon.blue {
  color: #004a9f;
}

.partner-bottom-icon.green {
  color: #16803b;
}

.partner-bottom-icon.purple {
  color: #5a35b8;
}

/* Responsive */
@media (min-width: 640px) {
  .partner-purpose-section {
    padding: 32px 0;
  }

  .partner-purpose-heading {
    font-size: 34px;
  }

  .partner-purpose-subtitle {
    font-size: 13px;
  }

  .partner-card-title {
    font-size: 18px;
  }

  .partner-purpose-card.is-expanded .partner-card-title {
    font-size: 25px;
  }

  .partner-card-subtitle,
  .partner-purpose-card.is-expanded .partner-card-subtitle {
    font-size: 15px;
  }

  .partner-card-description {
    font-size: 15px;
  }

  .partner-purpose-card.is-expanded .partner-card-description {
    font-size: 15px;
  }

  .partner-bottom-left h4 {
    font-size: 15px;
  }

  .partner-bottom-left p {
    font-size: 11px;
  }

  .partner-bottom-items {
    grid-template-columns: repeat(4, minmax(0, 1fr));
  }

  .partner-bottom-item {
    font-size: 15px;
  }
}

@media (min-width: 641px) {
  .partner-purpose-card.is-expanded {
    width: 64%;
    min-width: 64%;
  }
}

@media (min-width: 768px) {
  .partner-purpose-boy-box {
    display: block;
  }
}

@media (min-width: 1024px) {
  .partner-purpose-heading {
    font-size: 38px;
  }

  .partner-purpose-main-row {
    gap: 32px;
  }

  .partner-purpose-boy-img {
    width: 390px;
  }

  .partner-bottom-inner {
    flex-direction: row;
    align-items: center;
  }

  .partner-bottom-items {
    gap: 20px;
  }
}

@media (max-width: 640px) {
  .partner-purpose-card,
  .partner-purpose-card.is-expanded {
    width: 100%;
    min-width: 100%;
  }
}

/* ================= PARTNER PURPOSE SECTION CSS END ================= */
/* ===========================
   Supported Institutions
=========================== */

.supported-section{
    width:100%;
    background:#fff;
    padding:64px 0;
    overflow:hidden;
}

.supported-container{
    max-width:1200px;
    margin:auto;
    padding:0 16px;
}

.supported-heading{
    text-align:center;
    margin-bottom:48px;
}

.supported-heading h1{
    margin:0;
    font-size:45px;
    line-height:1.2;
    font-weight:800;
    color:#000;
}

.supported-heading span{
    color:#1671DE;
}

/* Slider */

.logo-slider{
    width:100%;
    overflow:hidden;
    position:relative;
}

.logo-track{
    display:flex;
    align-items:center;
    width:max-content;
    animation:logoScroll 28s linear infinite;
}

.logo-track:hover{
    animation-play-state:paused;
}

.logo-item{
    flex-shrink:0;
    display:flex;
    align-items:center;
    justify-content:center;
    margin:0 32px;
}

.logo-item img{
    width:auto;
    object-fit:contain;
    display:block;
}

/* Same sizes as React */

.logo-small img{
    height:120px;
}

.logo-large img{
    height:185px;
}

/* Infinite Scroll */

@keyframes logoScroll{
    from{
        transform:translateX(0);
    }
    to{
        transform:translateX(-33.333%);
    }
}

/* ======================
      Responsive
====================== */

@media(max-width:992px){

    .supported-section{
        padding:60px 0;
    }

    .supported-heading h1{
        font-size:38px;
    }

    .logo-item{
        margin:0 28px;
    }

    .logo-small img{
        height:70px;
    }

    .logo-large img{
        height:95px;
    }

}

@media(max-width:768px){

    .supported-section{
        padding:56px 0;
    }

    .supported-heading{
        margin-bottom:42px;
    }

    .supported-heading h1{
        font-size:36px;
    }

    .logo-item{
        margin:0 20px;
    }

    .logo-small img{
        height:58px;
    }

    .logo-large img{
        height:75px;
    }

}

@media(max-width:576px){

    .supported-section{
        padding:48px 0;
    }

    .supported-heading{
        margin-bottom:38px;
    }

    .supported-heading h1{
        font-size:28px;
    }

    .logo-item{
        margin:0 16px;
    }

    .logo-small img{
        height:45px;
    }

    .logo-large img{
        height:60px;
    }

}

/*=========================
      IMPACT SECTION
=========================*/

.impact-section{
    width:100%;
    background:#fff;
    padding:72px 20px 76px;
    overflow:hidden;
}

.impact-container{
    max-width:1180px;
    margin:auto;
}

.impact-heading{
    text-align:center;
    margin-bottom:34px;
}

.impact-heading h2{
    font-size:clamp(34px, 3vw, 48px);
    font-weight:800;
    color:#000;
    line-height:1.12;
    margin:0;
}

.impact-heading h3{
    font-size:clamp(34px, 3vw, 48px);
    font-weight:800;
    color:#1671DE;
    line-height:1.12;
    margin-top:8px;
}

.impact-heading p{
    max-width:620px;
    margin:22px auto 0;
    color:rgba(0,0,0,.7);
    font-size:15px;
    line-height:22px;
}

/*=====================
        GRID
=====================*/

.impact-grid{
    display:grid;
    grid-template-columns:repeat(5,minmax(0,1fr));
    justify-content:center;
    gap:18px;
}

/*=====================
        CARD
=====================*/

.impact-card{
    min-height:380px;
    padding:24px 18px 28px;
    border-radius:12px;
    border:1px solid;
    text-align:center;
    display:flex;
    flex-direction:column;
    align-items:center;
    transition:.3s ease;
}

.impact-card:hover{
    transform:translateY(-6px);
    box-shadow:0 10px 24px rgba(0,0,0,.1);
}

.impact-card h4{
    font-size:18px;
    font-weight:800;
    line-height:1.2;
}

.impact-card h5{
    margin-top:16px;
    min-height:58px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:16px;
    font-weight:700;
    color:#000;
    line-height:22px;
}

.impact-logo{
    margin:28px 0 18px;
}

.impact-logo img{
    width:76px;
    height:auto;
    object-fit:contain;
}

.divider{
    width:40px;
    height:1px;
    margin-bottom:32px;
}

.impact-card p{
    max-width:170px;
    font-size:14px;
    line-height:17px;
    color:#000;
}

/*=====================
      CARD COLORS
=====================*/

.card1{
    background:#FCE9EA;
    border-color:#F2B7BD;
}

.card1 h4{
    color:#D83245;
}

.card1 .divider{
    background:#D83245;
}

.card2{
    background:#FBE8F1;
    border-color:#ECB1CD;
}

.card2 h4{
    color:#BF2B68;
}

.card2 .divider{
    background:#BF2B68;
}

.card3{
    background:#FFE6F0;
    border-color:#F4A8C7;
}

.card3 h4{
    color:#E01870;
}

.card3 .divider{
    background:#E01870;
}

.card4{
    background:#FBF2E3;
    border-color:#E4C994;
}

.card4 h4{
    color:#C99A32;
}

.card4 .divider{
    background:#C99A32;
}

.card5{
    background:#EAF4FA;
    border-color:#B8D5E5;
}

.card5 h4{
    color:#0D5B7D;
}

.card5 .divider{
    background:#0D5B7D;
}

/*=====================
      RESPONSIVE
=====================*/

@media(max-width:1100px){

    .impact-grid{
        grid-template-columns:repeat(3,minmax(180px,1fr));
    }

}

@media(max-width:768px){

    .impact-section{
        padding:60px 18px;
    }

    .impact-heading{
        margin-bottom:30px;
    }

    .impact-heading h2,
    .impact-heading h3{
        font-size:34px;
    }

    .impact-heading p{
        font-size:14px;
        line-height:21px;
    }

    .impact-card{
        min-height:350px;
        padding:22px 16px 26px;
    }

    .impact-card h4{
        font-size:17px;
    }

    .impact-card h5{
        font-size:15px;
        line-height:20px;
    }

    .impact-logo img{
        width:70px;
    }

    .impact-card p{
        font-size:13px;
        line-height:17px;
    }

}

@media(max-width:600px){

    .impact-grid{
        grid-template-columns:1fr;
        gap:16px;
    }

    .impact-section{
        padding:52px 16px;
    }

    .impact-heading{
        margin-bottom:28px;
    }

    .impact-heading h2,
    .impact-heading h3{
        font-size:30px;
    }

    .impact-heading p{
        font-size:14px;
        line-height:21px;
    }

    .impact-card{
        width:min(100%, 340px);
        min-height:330px;
        margin:0 auto;
        padding:22px 18px 26px;
    }

    .impact-card h5{
        min-height:auto;
    }

    .impact-logo img{
        width:68px;
    }

}

@media(max-width:320px){

    .impact-heading h2,
    .impact-heading h3{
        font-size:26px;
    }

}
/*==========================
    Partner Schools
==========================*/

.partner-schools{
    width:100%;
    background:#fff;
    padding:64px 0;
    overflow:hidden;
}

.partner-container{
    max-width:1200px;
    margin:auto;
    padding:0 16px;
}

/* Heading */

.partner-heading{
    text-align:center;
    margin-bottom:40px;
}

.partner-heading h2{
    margin:0;
    font-size:46px;
    font-weight:800;
    line-height:1.15;
    color:#000;
}

.partner-heading span{
    color:#1671DE;
}

/* Slider */

.partner-slider{
    width:100%;
    overflow:hidden;
    position:relative;
    margin-bottom:20px;
}

.partner-track{
    display:flex;
    align-items:center;
    width:max-content;
    animation:partnerScroll 30s linear infinite;
}

.partner-track:hover{
    animation-play-state:paused;
}

.partner-logo{
    width:180px;
    height:120px;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-shrink:0;
    margin:0 48px;
}

.partner-logo img{
    width:160px;
    height:95px;
    object-fit:contain;
    display:block;
}

/* Infinite Scroll */

@keyframes partnerScroll{

    from{
        transform:translateX(0);
    }

    to{
        transform:translateX(-33.333%);
    }

}

/*=========================
      Responsive
=========================*/

@media(max-width:992px){

    .partner-schools{
        padding:56px 0;
    }

    .partner-heading h2{
        font-size:42px;
    }

    .partner-logo{
        width:160px;
        height:105px;
        margin:0 40px;
    }

    .partner-logo img{
        width:140px;
        height:80px;
    }

}

@media(max-width:768px){

    .partner-schools{
        padding:48px 0;
    }

    .partner-heading{
        margin-bottom:32px;
    }

    .partner-heading h2{
        font-size:34px;
    }

    .partner-logo{
        width:140px;
        height:88px;
        margin:0 24px;
    }

    .partner-logo img{
        width:120px;
        height:65px;
    }

}

@media(max-width:480px){

    .partner-schools{
        padding:32px 0;
    }

    .partner-heading{
        margin-bottom:24px;
    }

    .partner-heading h2{
        font-size:28px;
        line-height:1.2;
    }

    .partner-logo{
        width:120px;
        height:74px;
        margin:0 16px;
    }

    .partner-logo img{
        width:104px;
        height:54px;
    }

}
.testimonials-section{
    position:relative;
    width:100%;
    background:#fff;
    height:220vh;
}

.testimonial-sticky{
    position:sticky;
    top:80px;
    display:flex;
    justify-content:center;
    align-items:flex-start;
    overflow:hidden;
}

.testimonial-wrapper{
    width:100%;
    background:#2D2D2D;
    border-radius:42px;
    padding:48px 64px;
    overflow:hidden;
}

.testimonial-heading{
    text-align:center;
    margin-bottom:36px;
}

.testimonial-heading h2{
    color:#fff;
    font-size:50px;
    font-weight:800;
    line-height:1.25;
}

.testimonial-heading span{
    color:#67E8F2;
}

.testimonial-cards{
    position:relative;
    width:100%;
    max-width:680px;
    height:400px;
    margin:auto;
    overflow:visible;
}

.testimonial-card{
    position:absolute;
    left:0;
    right:0;
    top:0;
    margin:auto;
    transition:all .15s ease-out;
}

.testimonial-inner{
    width:100%;
    min-height:290px;
    background:#141414;
    border-radius:22px;
    padding:48px 36px;
    box-shadow:0 18px 45px rgba(0,0,0,.35);
}

.testimonial-grid{
    display:grid;
    grid-template-columns:220px 1fr;
    gap:32px;
    align-items:center;
}

.testimonial-logo{
    display:flex;
    justify-content:flex-start;
}

.testimonial-logo img{
    width:185px;
    object-fit:contain;
}

.testimonial-content{
    text-align:left;
}

.testimonial-content p{
    color:#fff;
    font-size:14px;
    line-height:22px;
}

.testimonial-user{
    display:flex;
    align-items:center;
    margin-top:22px;
}

.testimonial-user h4{
    color:#fff;
    font-size:14px;
    font-weight:700;
}

.testimonial-user span{
    display:block;
    color:rgba(255,255,255,.7);
    font-size:12px;
    margin-top:5px;
}

@media(max-width:768px){

.testimonial-wrapper{
padding:40px 24px;
border-radius:32px;
}

.testimonial-heading h2{
font-size:36px;
}

.testimonial-cards{
height:380px;
}

.testimonial-inner{
padding:36px 28px;
min-height:260px;
}

.testimonial-grid{
grid-template-columns:1fr;
gap:22px;
}

.testimonial-logo{
justify-content:center;
}

.testimonial-logo img{
width:160px;
}

.testimonial-content{
text-align:center;
}

.testimonial-user{
justify-content:center;
}

}

@media(max-width:576px){

.testimonial-wrapper{
padding:32px 16px;
border-radius:26px;
}

.testimonial-heading h2{
font-size:26px;
}

.testimonial-cards{
height:380px;
}

.testimonial-inner{
padding:32px 20px;
min-height:230px;
border-radius:18px;
}

.testimonial-logo img{
width:135px;
}

.testimonial-content p{
font-size:12px;
line-height:20px;
}

.testimonial-user h4{
font-size:12px;
}

.testimonial-user span{
font-size:10px;
}

}
.blog-section{
padding:64px 0;
background:#fff;
}

.blog-container{
max-width:1080px;
margin:auto;
padding:0 20px;
}

.blog-heading{
text-align:center;
margin-bottom:40px;
}

.blog-heading p{
color:#0B78F0;
font-size:12px;
font-weight:600;
margin-bottom:10px;
}

.blog-heading h2{
font-size:40px;
font-weight:800;
line-height:1.2;
}

.blog-heading span{
color:#0877F2;
}

.blog-grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:36px;
align-items:flex-start;
}

.blog-card{
transition:.5s;
}

.blog-image{
height:155px;
overflow:hidden;
border-radius:12px;
margin-bottom:18px;
}

.blog-image img{
width:100%;
height:100%;
object-fit:cover;
transition:.5s;
}

.blog-card:hover img{
transform:scale(1.05);
}

.blog-card h3{
font-size:20px;
font-weight:600;
line-height:1.4;
margin-bottom:12px;
}

.blog-text{
font-size:15px;
line-height:1.8;
color:#555;
margin-bottom:20px;
}

.blog-text .full{
display:none;
}

.read-more{
display:inline-flex;
align-items:center;
gap:8px;
background:none;
border:none;
color:#FF2F64;
font-size:16px;
font-weight:500;
cursor:pointer;
transition:.3s;
}

.read-more:hover{
gap:12px;
}

.arrow{
font-size:18px;
transition:.3s;
}

.blog-card.active .full{
display:inline;
}

.blog-card.active .short{
display:none;
}

.blog-card.active .arrow{
transform:rotate(180deg);
}

@media(max-width:991px){

.blog-grid{
grid-template-columns:repeat(2,1fr);
}

.blog-heading h2{
font-size:34px;
}

}

@media(max-width:767px){

.blog-grid{
grid-template-columns:1fr;
}

.blog-heading h2{
font-size:28px;
}

.blog-image{
height:170px;
}

.blog-card h3{
font-size:20px;
}

.blog-text{
font-size:14px;
}

}
/* ================= INITIATIVES SECTION CSS END ================= */
/* ================= PURPOSE SECTION CSS END ================= */
  </style>
</head>
<body>
  <!-- Navbar Component Start -->
<header class="site-header" id="siteHeader">
    <nav class="site-nav">
      <a href="index.php" class="logo-link" aria-label="Home">
        <img src="assets/images/logo-new.png" alt="Logo" class="logo-img" />
      </a>

      <button type="button" class="menu-open-btn" id="openMenuBtn" aria-label="Open menu">
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <path d="M4 7h16M8 12h12M12 17h8" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" />
        </svg>
      </button>
    </nav>
  </header>

  <div class="header-spacer" id="headerSpacer"></div>

  <div class="fullscreen-menu" id="fullscreenMenu" aria-hidden="true">
    <button type="button" class="menu-close-btn" id="closeMenuBtn" aria-label="Close menu">
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path d="M6 6l12 12M18 6L6 18" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" />
      </svg>
    </button>

    <div class="menu-inner">
      <div class="menu-content">
        <ul class="menu-list" id="menuList">
          <li><a class="menu-link is-active" href="index.php" data-path="/">Home</a></li>
          <li><a class="menu-link" href="PHP-Fineduquest/About.php" data-path="/about">About Us</a></li>
          <li><a class="menu-link" href="PHP-Fineduquest/Program.php" data-path="/program">Program</a></li>
          <li><a class="menu-link" href="PHP-Fineduquest/Gallery.php" data-path="/gallery">Gallery</a></li>
          <li><a class="menu-link" href="PHP-Fineduquest/Blog.php" data-path="/blog">Blog</a></li>
        </ul>

        <div class="menu-actions">
          <a href="PHP-Fineduquest/Registeration.php" class="pill-btn register-btn" id="registerBtn">
            <span>Register School</span>
          </a>

          <a href="#" class="pill-btn login-btn" id="studentLoginLink">
            <span>Student Login</span>
          </a>
        </div>

        <div class="social-links">
          <a href="#" aria-label="Instagram" class="social-link">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="M7.8 2h8.4A5.8 5.8 0 0 1 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8A5.8 5.8 0 0 1 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2Zm0 2A3.8 3.8 0 0 0 4 7.8v8.4A3.8 3.8 0 0 0 7.8 20h8.4a3.8 3.8 0 0 0 3.8-3.8V7.8A3.8 3.8 0 0 0 16.2 4H7.8Zm8.7 2.5a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 0 1 0-2.4ZM12 7.2a4.8 4.8 0 1 1 0 9.6 4.8 4.8 0 0 1 0-9.6Zm0 2a2.8 2.8 0 1 0 0 5.6 2.8 2.8 0 0 0 0-5.6Z" />
            </svg>
          </a>

          <a href="#" aria-label="Facebook" class="social-link">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="M14 8.5V6.8c0-.8.3-1.3 1.4-1.3H17V2.3c-.8-.1-1.6-.2-2.4-.2-2.4 0-4.1 1.5-4.1 4.2v2.2H7.8V12h2.7v9.9H14V12h2.8l.4-3.5H14Z" />
            </svg>
          </a>

          <a href="#" aria-label="YouTube" class="social-link">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="M21.6 7.2s-.2-1.5-.8-2.1c-.8-.8-1.7-.8-2.1-.9C15.7 4 12 4 12 4h-.1s-3.7 0-6.7.2c-.4 0-1.3.1-2.1.9-.6.6-.8 2.1-.8 2.1S2 9 2 10.8v1.7c0 1.8.2 3.6.2 3.6s.2 1.5.8 2.1c.8.8 1.9.8 2.4.9 1.7.2 6.6.2 6.6.2s3.7 0 6.7-.2c.4 0 1.3-.1 2.1-.9.6-.6.8-2.1.8-2.1s.2-1.8.2-3.6v-1.7c0-1.8-.2-3.6-.2-3.6ZM10 14.8V8.6l5.8 3.1L10 14.8Z" />
            </svg>
          </a>
        </div>
      </div>

<div class="vertical-marquee-wrap">
        <div class="side-menu-marquee-track">
          <div class="marquee-word-item"><a href="PHP-Fineduquest/Program.php"><span>Business &amp; Impact Initiatives</span></a></div>
          <div class="marquee-word-item"><a href="PHP-Fineduquest/Financials.php"><span>Financial-Literacy Publications</span></a></div>
          <div class="marquee-word-item"><a href="PHP-Fineduquest/Fineduquest.php"><span>Fin-Edu Quest</span></a></div>
          <div class="marquee-word-item"><a href="PHP-Fineduquest/MoneyMastrey.php"><span>Money-Mastery Program</span></a></div>
          <div class="marquee-word-item"><a href="PHP-Fineduquest/Awarness.php"><span>Awareness &amp; Outreach</span></a></div>
          <div class="marquee-word-item"><a href="PHP-Fineduquest/Program.php"><span>Business &amp; Impact Initiatives</span></a></div>
          <div class="marquee-word-item"><a href="PHP-Fineduquest/Financials.php"><span>Financial-Literacy Publications</span></a></div>
          <div class="marquee-word-item"><a href="PHP-Fineduquest/Fineduquest.php"><span>Fin-Edu Quest</span></a></div>
          <div class="marquee-word-item"><a href="PHP-Fineduquest/MoneyMastrey.php"><span>Money-Mastery Program</span></a></div>
          <div class="marquee-word-item"><a href="PHP-Fineduquest/Awarness.php"><span>Awareness &amp; Outreach</span></a></div>
        </div>
      </div>
      <img src="assets/images/Navbar-new.png" alt="Student mascot" class="mascot-img" />

      <div class="decor-circle-yellow"></div>
      <div class="decor-circle-cyan"></div>
    </div>
  </div>

  <div class="register-popup" id="registerPopup" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="registerPopupTitle">
    <div class="popup-box">
      <button type="button" class="popup-close-btn" id="closeRegisterPopup" aria-label="Close register popup">
        <svg viewBox="0 0 24 24" width="28" height="28" aria-hidden="true">
          <path d="M6 6l12 12M18 6L6 18" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" />
        </svg>
      </button>
      <h2 id="registerPopupTitle">Register School</h2>
      <p>This is the one-page replacement area for your original RegisterSchoolPopup component.</p>
    </div>
  </div>
  <!-- Navbar Component End -->

  <!-- Home Page Main Content Start -->
  <main>
<!-- Hero Section Component Start -->
  <section class="hero-section-component">
    <div class="hero-wrapper">
      <div class="hero-stage">
        <!-- Main Background Image -->
        <img
          src="assets/images/hero-bg.png"
          alt="Financial education hero"
          class="hero-main-bg"
        />

        <!-- Animated Decorative Images -->
        <img
          src="assets/images/hero-star.png"
          alt=""
          class="hero-decor decor-star-left-top animate-spin-soft"
        />

        <img
          src="assets/images/heo-arrow.png"
          alt=""
          class="hero-decor decor-arrow-left-bottom animate-float-reverse"
        />

        <img
          src="assets/images/hero-light.png"
          alt=""
          class="hero-decor decor-light-right animate-pulse-pop"
        />

        <img
          src="assets/images/hero-star.png"
          alt=""
          class="hero-decor decor-star-small-left animate-spin-soft"
        />

        <img
          src="assets/images/hero-star.png"
          alt=""
          class="hero-decor decor-star-right-top animate-twinkle"
        />

        <!-- Text Content -->
        <div class="hero-content">
          <h1 class="hero-title-font">
            <span class="hero-left-animate hero-delay-1 text-black">India's first</span>
            <span class="hero-left-animate hero-delay-2 text-black">financial Literacy</span>
            <span class="hero-right-animate hero-delay-3 text-blue">Olympiad</span>
          </h1>

          <h2 class="hero-subtitle animate-fade-up-delay">
            Right from <strong>Class 1</strong>
          </h2>

          <a class="discover-btn" href="PHP-Fineduquest/Fineduquest.php">
            <span>Discover what we do</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= PURPOSE SECTION START ================= -->
<section class="purpose-section" id="purpose-section">
  <div class="purpose-container">

    <!-- Heading -->
    <h2 class="purpose-heading">
      Higher Purpose of
    </h2>

    <h3 class="purpose-subheading">
      FLQ Knowledge Foundation
    </h3>

    <!-- Description -->
    <p class="purpose-description">
      Building stronger families, stronger societies, and a stronger nation by
      nurturing a financially disciplined generation.
    </p>

    <!-- Button -->
    <a href="PHP-Fineduquest/About.php" class="purpose-btn">
      <span class="purpose-btn-bg"></span>
      <span class="purpose-btn-text">
        About FLQ Knowledge Foundation
      </span>
    </a>

  </div>
</section>
<!-- ================= PURPOSE SECTION END ================= -->
  <!-- Hero Section Component End -->

  <!-- ================= INITIATIVES SECTION START ================= -->
<section class="initiatives-section" id="initiatives-section">
  <div class="initiatives-wrapper">
    <div class="initiatives-box">

      <div class="initiatives-header">
        <span class="initiatives-label">
          Program Highlights
        </span>

        <h2 class="initiatives-title">
          Our <span>Initiatives</span>
        </h2>

        <p class="initiatives-description">
          A comprehensive, NEP 2020-aligned Financial Literacy Program for
          all age groups, designed for easy implementation with minimal
          teacher burden.
        </p>
      </div>

      <div class="initiatives-card-list">

        <!-- Card 1 -->
        <a href="PHP-Fineduquest/Fineduquest.php" class="initiatives-card-row initiatives-left" style="animation-delay: 0s;" aria-label="Learn more about Fin-Edu Quest">
          <div class="initiatives-card">
            <img
              src="assets/images/1.png"
              alt="Fin-Edu Quest"
              class="initiatives-main-img"
            />

            <div class="initiatives-card-content">
              <h2>Fin-Edu Quest</h2>

              <p>
                A Financial Literacy Olympiad
              </p>

              <span class="initiatives-link">
                <span>Learn More</span>
                <span class="initiatives-link-line-one"></span>
                <span class="initiatives-link-line-two"></span>
              </span>
            </div>

            <img
              src="assets/images/card-hover1.png"
              alt=""
              class="initiatives-hover-img"
            />
          </div>
        </a>

        <!-- Card 2 -->
        <a href="PHP-Fineduquest/MoneyMastrey.php" class="initiatives-card-row initiatives-right" style="animation-delay: 0.12s;" aria-label="Learn more about Money-Mastery Program">
          <div class="initiatives-card">
            <img
              src="assets/images/2.png"
              alt="Money-Mastery Program"
              class="initiatives-main-img"
            />

            <div class="initiatives-card-content">
              <h2>Money-Mastery Program</h2>

              <p>
                Experiential Learning Activity Kit
              </p>

              <span class="initiatives-link">
                <span>Learn More</span>
                <span class="initiatives-link-line-one"></span>
                <span class="initiatives-link-line-two"></span>
              </span>
            </div>

            <img
              src="assets/images/card-hover2.png"
              alt=""
              class="initiatives-hover-img"
            />
          </div>
        </a>

        <!-- Card 3 -->
        <a href="PHP-Fineduquest/Awarness.php" class="initiatives-card-row initiatives-left" style="animation-delay: 0.24s;" aria-label="Learn more about Awareness and Impact Initiatives">
          <div class="initiatives-card">
            <img
              src="assets/images/3.png"
              alt="Awareness & Impact Initiatives"
              class="initiatives-main-img"
            />

            <div class="initiatives-card-content">
              <h2>Awareness & Impact Initiatives</h2>

              <p>
                Workshops, Campaigns & Community Outreach
              </p>

              <span class="initiatives-link">
                <span>Learn More</span>
                <span class="initiatives-link-line-one"></span>
                <span class="initiatives-link-line-two"></span>
              </span>
            </div>

            <img
              src="assets/images/card-hover3.png"
              alt=""
              class="initiatives-hover-img"
            />
          </div>
        </a>
        <!-- Card 4 -->
        <a href="PHP-Fineduquest/Financials.php" class="initiatives-card-row initiatives-right" style="animation-delay: 0.36s;" aria-label="Learn more about Financial-Literacy Publications">
          <div class="initiatives-card">
            <img
              src="assets/images/4.png"
              alt="Financial-Literacy Publications"
              class="initiatives-main-img"
            />

            <div class="initiatives-card-content">
              <h2>Financial-Literacy Publications</h2>

              <p>
                Professionally Designed NEP-Aligned Books
              </p>

              <span class="initiatives-link">
                <span>Learn More</span>
                <span class="initiatives-link-line-one"></span>
                <span class="initiatives-link-line-two"></span>
              </span>
            </div>

            <img
              src="assets/images/card-hover4.png"
              alt=""
              class="initiatives-hover-img"
            />
          </div>
        </a>

      </div>

    </div>
  </div>
</section>

<!-- ================= INITIATIVES SECTION END ================= -->
 <!-- ================= PARTNER PURPOSE SECTION START ================= -->
<section class="partner-purpose-section" id="partner-purpose-section">
  <div class="partner-purpose-container">

    <!-- Heading -->
    <div class="partner-purpose-heading-box">
      <h2 class="partner-purpose-heading">
        Partner with <span>our purpose</span>
      </h2>

      <p class="partner-purpose-subtitle">
        Different roles. One mission. Lasting impact.
      </p>
    </div>

    <!-- Main Row -->
    <div class="partner-purpose-main-row">

      <!-- Left Boy Image -->
      <div class="partner-purpose-boy-box">
        <img
          src="assets/images/boy.png"
          alt="Partner purpose"
          class="partner-purpose-boy-img"
        />
      </div>

      <!-- Cards Slider -->
      <div class="partner-purpose-slider-wrapper">
        <div class="partner-purpose-slider" id="partnerPurposeSlider">

          <!-- Card 1 -->
          <div
            class="partner-purpose-card partner-card-blue"
            data-card
            data-index="0"
            data-short="Empower students with financial wisdom, healthy money habits"
            data-full="Empower students with financial wisdom, healthy money habits, and future-ready life skills through engaging, experiential, and NEP 2020 aligned learning experiences. Together, we nurture responsible, confident, and financially aware young minds."
          >
            <img
              src="assets/images/e1.png"
              alt="Education Catalysts"
              class="partner-card-img"
            />

            <h2 class="partner-card-title">
              Education Catalysts
            </h2>

            <p class="partner-card-subtitle">
              (Schools & Educators)
            </p>

            <p class="partner-card-description">
              <span class="partner-card-description-text">
                Empower students with financial wisdom, healthy money habits
              </span>
              <
            </p>

            <div class="partner-impact-box">
              <div class="partner-impact-inner">
                <i class="fa-solid fa-users partner-impact-icon"></i>

                <div>
                  <h4>Shaping informed minds.</h4>
                  <p>Building a brighter tomorrow.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div
            class="partner-purpose-card partner-card-green"
            data-card
            data-index="1"
            data-short="Create meaningful and measurable social impact by supporting"
            data-full="Create meaningful and measurable social impact by supporting financial literacy programs that reach young learners, families, and communities with practical money skills for everyday life."
          >
            <img
              src="assets/images/e2.png"
              alt="Impact Enablers"
              class="partner-card-img"
            />

            <h2 class="partner-card-title">
              Impact Enablers
            </h2>

            <p class="partner-card-subtitle">
              (CSR & Corporate Partners)
            </p>

            <p class="partner-card-description">
              <span class="partner-card-description-text">
                Create meaningful and measurable social impact by supporting
              </span>
              
            </p>

            <div class="partner-impact-box">
              <div class="partner-impact-inner">
                <i class="fa-solid fa-users partner-impact-icon"></i>

                <div>
                  <h4>Enabling measurable impact.</h4>
                  <p>Supporting stronger communities.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div
            class="partner-purpose-card partner-card-purple"
            data-card
            data-index="2"
            data-short="Join hands to bring financial education to every child and family"
            data-full="Join hands to bring financial education to every child and family through community-led programs, outreach initiatives, and accessible learning experiences built for lasting change."
          >
            <img
              src="assets/images/e3.png"
              alt="Community Partners"
              class="partner-card-img"
            />

            <h2 class="partner-card-title">
              Community Partners
            </h2>

            <p class="partner-card-subtitle">
              (NGOs & Social Groups)
            </p>

            <p class="partner-card-description">
              <span class="partner-card-description-text">
                Join hands to bring financial education to every child and family
              </span>
             
            </p>

            <div class="partner-impact-box">
              <div class="partner-impact-inner">
                <i class="fa-solid fa-users partner-impact-icon"></i>

                <div>
                  <h4>Connecting communities.</h4>
                  <p>Creating sustainable change.</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Bottom Strip -->
    <div class="partner-bottom-strip">
      <div class="partner-bottom-inner">

        <div class="partner-bottom-left">
          <div class="partner-bottom-main-icon">
            <i class="fa-solid fa-handshake"></i>
          </div>

          <div>
            <h4>
              When we partner with purpose,
            </h4>

            <p>
              We empower generations.
            </p>
          </div>
        </div>

        <div class="partner-bottom-items">

          <div class="partner-bottom-item">
            <span class="partner-bottom-icon blue">
              <i class="fa-solid fa-earth-americas"></i>
            </span>
            Greater Reach
          </div>

          <div class="partner-bottom-item">
            <span class="partner-bottom-icon green">
              <i class="fa-solid fa-leaf"></i>
            </span>
            Deeper Impact
          </div>

          <div class="partner-bottom-item">
            <span class="partner-bottom-icon purple">
              <i class="fa-solid fa-shield-halved"></i>
            </span>
            Stronger Institutions
          </div>

          <div class="partner-bottom-item">
            <span class="partner-bottom-icon blue">
              <i class="fa-solid fa-people-arrows"></i>
            </span>
            Sustainable Change
          </div>

        </div>

      </div>
    </div>

  </div>
</section>
<!-- ================= PARTNER PURPOSE SECTION END ================= -->
 <!-- =========================
     Supported Institutions Section
     Replace image paths with your own.
========================= -->
<section class="supported-section">
    <div class="supported-container">

        <div class="supported-heading">
            <h1>
                Supported by Major <br>
                <span>Financial</span> <span>Institutions</span> of India
            </h1>
        </div>

        <div class="logo-slider">

            <div class="logo-track">

                <!-- Original Logos -->
                <div class="logo-item logo-small">
                    <img src="assets/images/logo1.png" alt="IIDA">
                </div>

                <div class="logo-item logo-large">
                    <img src="assets/images/logo2.png" alt="SEBI">
                </div>

                <div class="logo-item logo-large">
                    <img src="assets/images/logo3.png" alt="NSE">
                </div>

                <div class="logo-item logo-small">
                    <img src="assets/images/logo4.png" alt="Reserve Bank of India">
                </div>

                <div class="logo-item logo-small">
                    <img src="assets/images/logo5.png" alt="PFRDA">
                </div>

                <!-- Duplicate 1 -->
                <div class="logo-item logo-small">
                    <img src="assets/images/logo1.png" alt="IIDA">
                </div>

                <div class="logo-item logo-large">
                    <img src="assets/images/logo2.png" alt="SEBI">
                </div>

                <div class="logo-item logo-large">
                    <img src="assets/images/logo3.png" alt="NSE">
                </div>

                <div class="logo-item logo-small">
                    <img src="assets/images/logo4.png" alt="Reserve Bank of India">
                </div>

                <div class="logo-item logo-small">
                    <img src="assets/images/logo5.png" alt="PFRDA">
                </div>

                <!-- Duplicate 2 -->
                <div class="logo-item logo-small">
                    <img src="assets/images/logo1.png" alt="IIDA">
                </div>

                <div class="logo-item logo-large">
                    <img src="assets/images/logo2.png" alt="SEBI">
                </div>

                <div class="logo-item logo-large">
                    <img src="assets/images/logo3.png" alt="NSE">
                </div>

                <div class="logo-item logo-small">
                    <img src="assets/images/logo4.png" alt="Reserve Bank of India">
                </div>

                <div class="logo-item logo-small">
                    <img src="assets/images/logo5.png" alt="PFRDA">
                </div>

            </div>

        </div>

    </div>
</section>
<!-- =========================
      IMPACT SECTION
========================= -->
<section class="impact-section">
    <div class="impact-container">

        <!-- Heading -->
        <div class="impact-heading">

            

            <h2>
                Education Today.
            </h2>

            <h3>
                Financially Strong Tomorrow.
            </h3>

            <p>
                Our work in financial literacy and life skills education contributes
                to key UN Sustainable Development Goals (SDGs):
            </p>

        </div>

        <!-- Cards -->
        <div class="impact-grid">

            <!-- Card 1 -->
            <div class="impact-card card1">
                <h4>SDG 4</h4>

                <h5>
                    Quality Education
                </h5>

                <div class="impact-logo">
                    <img src="assets/images/sdg1.png" alt="Quality Education">
                </div>


                <p>
                    Making financial literacy a practical and engaging life skill for students.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="impact-card card2">
                <h4>SDG 8</h4>

                <h5>
                    Decent Work & Economic Growth
                </h5>

                <div class="impact-logo">
                    <img src="assets/images/sdg2.png" alt="">
                </div>


                <p>
                    Equipping children with money management and responsible decision-making skills.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="impact-card card3">
                <h4>SDG 10</h4>

                <h5>
                    Reduced Inequalities
                </h5>

                <div class="impact-logo">
                    <img src="assets/images/sdg3.png" alt="">
                </div>


                <p>
                    Providing early access to financial knowledge for children from all backgrounds.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="impact-card card4">
                <h4>SDG 12</h4>

                <h5>
                    Responsible Consumption & Production
                </h5>

                <div class="impact-logo">
                    <img src="assets/images/sdg4.png" alt="">
                </div>


                <p>
                    Encouraging mindful spending, saving, and planning from a young age.
                </p>
            </div>

            <!-- Card 5 -->
            <div class="impact-card card5">
                <h4>SDG 17</h4>

                <h5>
                    Partnerships for the Goals
                </h5>

                <div class="impact-logo">
                    <img src="assets/images/sdg5.png" alt="">
                </div>


                <p>
                    Collaborating with educators and institutions to scale financial literacy initiatives.
                </p>
            </div>

        </div>

    </div>
</section>
<!-- =========================
      Partner Schools Section
========================= -->
<section class="partner-schools">
    <div class="partner-container">

        <!-- Heading -->
        <div class="partner-heading">
            <h2>
                Proudly Partnered <br>
                With <span>Leading Schools</span>
            </h2>
        </div>

        <!-- Logo Slider -->
        <div class="partner-slider">

            <div class="partner-track">

                <!-- ===== Original Logos ===== -->

                <div class="partner-logo logo1">
                    <img src="assets/images/n11.png" alt="Podar Education Network">
                </div>

                <div class="partner-logo logo2">
                    <img src="assets/images/n2.png" alt="Partner School">
                </div>

                <div class="partner-logo logo3">
                    <img src="assets/images/n11.png" alt="Partner School">
                </div>

                <div class="partner-logo logo4">
                    <img src="assets/images/n4.png" alt="Birla Open Minds International School">
                </div>

                <div class="partner-logo logo5">
                    <img src="assets/images/n5.png" alt="Partner School">
                </div>

                <div class="partner-logo logo6">
                    <img src="assets/images/n6.png" alt="St. Vincent Pallotti College">
                </div>

                <div class="partner-logo logo7">
                    <img src="assets/images/n7.png" alt="Birla Open Minds International School">
                </div>

                <div class="partner-logo logo8">
                    <img src="assets/images/n8.png" alt="Partner School">
                </div>

                <div class="partner-logo logo9">
                    <img src="assets/images/n9.png" alt="St. Vincent Pallotti College">
                </div>

                <!-- ===== Duplicate 1 ===== -->

                <div class="partner-logo logo1"><img src="assets/images/n11.png" alt=""></div>
                <div class="partner-logo logo2"><img src="assets/images/n2.png" alt=""></div>
                <div class="partner-logo logo3"><img src="assets/images/n11.png" alt=""></div>
                <div class="partner-logo logo4"><img src="assets/images/n4.png" alt=""></div>
                <div class="partner-logo logo5"><img src="assets/images/n5.png" alt=""></div>
                <div class="partner-logo logo6"><img src="assets/images/n6.png" alt=""></div>
                <div class="partner-logo logo7"><img src="assets/images/n7.png" alt=""></div>
                <div class="partner-logo logo8"><img src="assets/images/n8.png" alt=""></div>
                <div class="partner-logo logo9"><img src="assets/images/n9.png" alt=""></div>

                <!-- ===== Duplicate 2 ===== -->

                <div class="partner-logo logo1"><img src="assets/images/n11.png" alt=""></div>
                <div class="partner-logo logo2"><img src="assets/images/n2.png" alt=""></div>
                <div class="partner-logo logo3"><img src="assets/images/n11.png" alt=""></div>
                <div class="partner-logo logo4"><img src="assets/images/n4.png" alt=""></div>
                <div class="partner-logo logo5"><img src="assets/images/n5.png" alt=""></div>
                <div class="partner-logo logo6"><img src="assets/images/n6.png" alt=""></div>
                <div class="partner-logo logo7"><img src="assets/images/n7.png" alt=""></div>
                <div class="partner-logo logo8"><img src="assets/images/n8.png" alt=""></div>
                <div class="partner-logo logo9"><img src="assets/images/n9.png" alt=""></div>

            </div>

        </div>

    </div>
</section>
<section class="testimonials-section" id="testimonialsSection">

    <div class="testimonial-sticky">

        <div class="testimonial-wrapper">

            <div class="testimonial-heading">

                <h2>
                    What Parents
                    <br>
                    <span>Say About Us</span>
                </h2>

            </div>

            <div class="testimonial-cards">

                <!-- Card 1 -->

                <div class="testimonial-card" id="card0">

                    <div class="testimonial-inner">

                        <div class="testimonial-grid">

                            <div class="testimonial-logo">

                                <img src="assets/images/podar.png" alt="">

                            </div>

                            <div class="testimonial-content">

                                <p>
                                    She is very clear about 50 30 20 rule and she do it now with her pocket money.
                                </p>

                                <div class="testimonial-user">

                                    <div>

                                        <h4>Kunal Shah</h4>

                                        <span>Parent</span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Card 2 -->

                <div class="testimonial-card" id="card1">

                    <div class="testimonial-inner">

                        <div class="testimonial-grid">

                            <div class="testimonial-logo">

                                <img src="assets/images/t22.png" alt="">

                            </div>

                            <div class="testimonial-content">

                                <p>
                                    She started using money carefully and started explaining the importance of financial management to everyone
                                </p>

                                <div class="testimonial-user">

                                    <div>

                                        <h4>Nikhil Joshi</h4>

                                        <span>Parent</span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Card 3 -->

                <div class="testimonial-card" id="card2">

                    <div class="testimonial-inner">

                        <div class="testimonial-grid">

                            <div class="testimonial-logo">

                                <img src="assets/images/t33.jpg" alt="">

                            </div>

                            <div class="testimonial-content">

                                <p>
                                    We sincerely thank the school for introducing Fin Edu Quest to our children. It is by far one of the most meaningful, useful, and practical assessments my child has taken. Beyond academics, it helps children develop essential financial life skills and money management habits that will benefit them throughout their lives.
                                </p>

                                <div class="testimonial-user">

                                    <div>

                                        <h4>Yash Thakur</h4>

                                        <span>Parent</span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="blog-section">

    <div class="blog-container">

        <div class="blog-heading">

            <p>Blog</p>

            <h2>
                Little Readers,
                <span>Big Money Lessons</span>
            </h2>

        </div>

        <div class="blog-grid">

            <!-- Blog 1 -->

            <div class="blog-card">

                <div class="blog-image">

                    <img src="assets/images/b1n.jpeg" alt="">

                </div>

                <h3>Why financial literacy matters in early education</h3>

                <p class="blog-text">
                    <span class="short">
                        Discover how introducing money concepts early can shape a child's financial future.
                    </span>

                    <span class="full">
                        Discover how introducing money concepts early can shape a child's financial future. Financial literacy at a young age helps children understand saving, spending, budgeting, and making thoughtful choices. When kids learn these habits early, they grow with confidence and become more responsible decision-makers in everyday life.
                    </span>
                </p>

                <button class="read-more">

                    <span class="btn-text">Read More</span>

                    <span class="arrow">
                        <i class="fas fa-chevron-right"></i>
                    </span>

                </button>

            </div>

            <!-- Blog 2 -->

            <div class="blog-card">

                <div class="blog-image">

                    <img src="assets/images/b2n.jpeg" alt="">

                </div>

                <h3>5 Money habits every child should learn</h3>

                <p class="blog-text">

                    <span class="short">
                        Practical tips for parents and education to instill smart saving and spending habits.
                    </span>

                    <span class="full">
                        Practical tips for parents and educators to instill smart saving and spending habits. Children should learn how to save regularly, understand the value of money, avoid unnecessary spending, set small financial goals, and make careful choices before buying. These simple habits can create a strong foundation for lifelong financial confidence.
                    </span>

                </p>

                <button class="read-more">

                    <span class="btn-text">Read More</span>

                    <span class="arrow">
                        <i class="fas fa-chevron-right"></i>
                    </span>

                </button>

            </div>

            <!-- Blog 3 -->

            <div class="blog-card">

                <div class="blog-image">

                    <img src="assets/images/b3n.jpeg" alt="">

                </div>

                <h3>Benefits of financial education in school</h3>

                <p class="blog-text">

                    <span class="short">
                        How school are transforming student outcomes by integrating financial literacy.
                    </span>

                    <span class="full">
                        How schools are transforming student outcomes by integrating financial literacy. Financial education helps students understand real-life money decisions, improves confidence, supports responsible habits, and prepares them for future challenges. When schools include money lessons early, students become better prepared for personal and professional life.
                    </span>

                </p>

                <button class="read-more">

                    <span class="btn-text">Read More</span>

                    <span class="arrow">
                      <i class="fas fa-chevron-right"></i>
                    </span>

                </button>

            </div>

        </div>

    </div>

</section>

  </main>
  <div id="footer"></div>

  <!-- Home Page Main Content End -->

<script src="PHP-Fineduquest/Components/footer-loader.js"></script>

  <script>
    /* ==============================
       Navbar Component JS
    ============================== */
const header = document.getElementById("siteHeader");
    const headerSpacer = document.getElementById("headerSpacer");
    const fullscreenMenu = document.getElementById("fullscreenMenu");
    const openMenuBtn = document.getElementById("openMenuBtn");
    const closeMenuBtn = document.getElementById("closeMenuBtn");
    const registerBtn = document.getElementById("registerBtn");
    const registerPopup = document.getElementById("registerPopup");
    const closeRegisterPopup = document.getElementById("closeRegisterPopup");
    const menuLinks = document.querySelectorAll(".menu-link");
    const studentLoginLink = document.getElementById("studentLoginLink");

    let isMenuOpen = false;
    let isRegisterOpen = false;

    function updateBodyOverflow() {
      document.body.style.overflow = isMenuOpen || isRegisterOpen ? "hidden" : "auto";
    }

    function handleScroll() {
      const scrolled = window.scrollY > 50;
      header.classList.toggle("is-scrolled", scrolled);
      headerSpacer.classList.toggle("is-scrolled", scrolled);
    }

    function openMenu() {
      isMenuOpen = true;
      fullscreenMenu.classList.add("is-open");
      fullscreenMenu.setAttribute("aria-hidden", "false");
      updateBodyOverflow();
    }

    function closeMenu() {
      isMenuOpen = false;
      fullscreenMenu.classList.remove("is-open");
      fullscreenMenu.setAttribute("aria-hidden", "true");
      updateBodyOverflow();
    }

    function openRegisterPopup() {
      window.location.href = "Registeration.php";
    }

    function closePopup() {
      isRegisterOpen = false;
      registerPopup.classList.remove("is-open");
      registerPopup.setAttribute("aria-hidden", "true");
      updateBodyOverflow();
    }

    function setActiveLink() {
      const currentPath = window.location.pathname || "/";

      menuLinks.forEach((link) => {
        const linkPath = link.getAttribute("data-path");
        const isHome = linkPath === "/" && currentPath === "/";
        const isInnerPage = linkPath !== "/" && currentPath.startsWith(linkPath);
        link.classList.toggle("is-active", isHome || isInnerPage);
      });
    }

    openMenuBtn.addEventListener("click", openMenu);
    closeMenuBtn.addEventListener("click", closeMenu);

    menuLinks.forEach((link) => {
      link.addEventListener("click", () => {
        closeMenu();
      });
    });

    studentLoginLink.addEventListener("click", () => {
      closeMenu();
    });

    registerBtn.addEventListener("click", () => {
      closeMenu();
    });

    closeRegisterPopup.addEventListener("click", closePopup);

    registerPopup.addEventListener("click", (event) => {
      if (event.target === registerPopup) {
        closePopup();
      }
    });

    document.addEventListener("keydown", (event) => {
      if (event.key === "Escape") {
        if (isRegisterOpen) closePopup();
        if (isMenuOpen) closeMenu();
      }
    });

    window.addEventListener("scroll", handleScroll);

    handleScroll();
    setActiveLink();

    /* ==============================
       Hero Section Component JS
    ============================== */
document.addEventListener("DOMContentLoaded", function () {
      var discoverButton = document.querySelector(".discover-btn");
      var heroSection = document.querySelector(".hero-section-component");
      var heroArrow = document.querySelector(".decor-arrow-left-bottom");

      if (discoverButton) {
        discoverButton.addEventListener("click", function () {
          var targetLink = discoverButton.getAttribute("data-link");

          if (targetLink) {
            window.location.href = targetLink;
          }
        });
      }

      if (heroSection && heroArrow) {
        var targetX = 0;
        var targetY = 0;
        var currentX = 0;
        var currentY = 0;
        var targetRotation = 0;
        var currentRotation = 0;
        var previousMouseX = 0;
        var previousMouseY = 0;
        var isFollowingCursor = false;
        var followAnimationFrame = null;

        function renderCursorArrow() {
          var rotationDelta = ((targetRotation - currentRotation + 540) % 360) - 180;

          currentX += (targetX - currentX) * 0.13;
          currentY += (targetY - currentY) * 0.13;
          currentRotation += rotationDelta * 0.16;

          heroArrow.style.setProperty("--hero-arrow-x", currentX.toFixed(1) + "px");
          heroArrow.style.setProperty("--hero-arrow-y", currentY.toFixed(1) + "px");
          heroArrow.style.setProperty("--hero-arrow-rotation", currentRotation.toFixed(1) + "deg");

          followAnimationFrame = window.requestAnimationFrame(renderCursorArrow);
        }

        function stopCursorArrow() {
          isFollowingCursor = false;

          if (followAnimationFrame) {
            window.cancelAnimationFrame(followAnimationFrame);
            followAnimationFrame = null;
          }

          heroArrow.classList.remove("is-cursor-following");
          heroArrow.style.setProperty("--hero-arrow-x", "0px");
          heroArrow.style.setProperty("--hero-arrow-y", "0px");
          heroArrow.style.setProperty("--hero-arrow-rotation", "0deg");
          targetRotation = 0;
          currentRotation = 0;
        }

        heroSection.addEventListener("mousemove", function (event) {
          targetX = event.clientX + 20;
          targetY = event.clientY + 20;

          if (!isFollowingCursor) {
            currentX = targetX;
            currentY = targetY;
            previousMouseX = event.clientX;
            previousMouseY = event.clientY;
            isFollowingCursor = true;
            heroArrow.classList.add("is-cursor-following");
            renderCursorArrow();
            return;
          }

          var movementX = event.clientX - previousMouseX;
          var movementY = event.clientY - previousMouseY;

          if (Math.abs(movementX) + Math.abs(movementY) > 3) {
            targetRotation = Math.atan2(movementY, movementX) * (180 / Math.PI) - 45;
          }

          previousMouseX = event.clientX;
          previousMouseY = event.clientY;
        });

        heroSection.addEventListener("mouseleave", stopCursorArrow);
        window.addEventListener("blur", stopCursorArrow);
      }
    });

    // ================= PURPOSE SECTION JS START =================
// No JavaScript needed for PurposeSection.
// Button hover animation is handled with CSS.
// ================= PURPOSE SECTION JS END =================

// ================= INITIATIVES SECTION JS START =================

(function () {
  const initiativesSection = document.getElementById("initiatives-section");

  if (!initiativesSection) return;

  const initiativeCards = initiativesSection.querySelectorAll(".initiatives-card-row");

  function startInitiativesAnimation() {
    initiativeCards.forEach(function (card) {
      card.classList.add("initiatives-card-animate");
    });
  }

  if ("IntersectionObserver" in window) {
    const initiativesObserver = new IntersectionObserver(
      function (entries, observer) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            startInitiativesAnimation();
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.25
      }
    );

    initiativesObserver.observe(initiativesSection);
  } else {
    startInitiativesAnimation();
  }
})();
// ================= PARTNER PURPOSE SECTION JS START =================

(function () {
  const slider = document.getElementById("partnerPurposeSlider");

  if (!slider) return;

  const cards = Array.from(slider.querySelectorAll("[data-card]"));
  let currentIndex = 0;
  let isPaused = false;
  let expandedIndex = null;
  let isManualExpanded = false;
  let autoScrollTimer = null;

  function normalizeIndex(index) {
    if (!cards.length) return 0;

    if (index >= cards.length) return 0;
    if (index < 0) return cards.length - 1;

    return index;
  }

  function scrollToIndex(index) {
    if (!cards.length) return;

    currentIndex = normalizeIndex(index);

    slider.scrollTo({
      left: cards[currentIndex].offsetLeft - cards[0].offsetLeft,
      behavior: "smooth"
    });
  }

  function updateCurrentIndexOnScroll() {
    if (!cards.length) return;

    let nearestIndex = currentIndex;
    let nearestDistance = Infinity;

    cards.forEach(function (card, index) {
      const cardScrollLeft = card.offsetLeft - cards[0].offsetLeft;
      const distance = Math.abs(slider.scrollLeft - cardScrollLeft);

      if (distance < nearestDistance) {
        nearestDistance = distance;
        nearestIndex = index;
      }
    });

    currentIndex = nearestIndex;
  }

  function startAutoScroll() {
    stopAutoScroll();

    if (isPaused || isManualExpanded) return;

    autoScrollTimer = setInterval(function () {
      expandCard(currentIndex + 1, false);
    }, 3600);
  }

  function stopAutoScroll() {
    if (autoScrollTimer) {
      clearInterval(autoScrollTimer);
      autoScrollTimer = null;
    }
  }

  function collapseAllCards() {
    cards.forEach(function (card) {
      const descText = card.querySelector(".partner-card-description-text");
      const readBtn = card.querySelector(".partner-read-btn");

      card.classList.remove("is-expanded");

      if (descText) {
        descText.textContent = card.dataset.short;
      }

      if (readBtn) {
        readBtn.textContent = "Read More";
      }
    });
  }

  function expandCard(index, isManual) {
    if (!cards.length) return;

    const normalizedIndex = normalizeIndex(index);
    const card = cards[normalizedIndex];
    const readBtn = card.querySelector(".partner-read-btn");
    const descText = card.querySelector(".partner-card-description-text");

    collapseAllCards();

    expandedIndex = normalizedIndex;
    currentIndex = normalizedIndex;
    isManualExpanded = isManual;

    card.classList.add("is-expanded");

    if (descText) {
      descText.textContent = card.dataset.full;
    }

    if (readBtn) {
      readBtn.textContent = "Read Less";
    }

    window.requestAnimationFrame(function () {
      window.requestAnimationFrame(function () {
        scrollToIndex(normalizedIndex);
      });
    });

    window.setTimeout(function () {
      scrollToIndex(normalizedIndex);
    }, 520);
  }

  cards.forEach(function (card, index) {
    const readBtn = card.querySelector(".partner-read-btn");
    const descText = card.querySelector(".partner-card-description-text");

    if (!readBtn || !descText) return;

    readBtn.addEventListener("click", function () {
      const isAlreadyExpanded = expandedIndex === index;

      if (isAlreadyExpanded && isManualExpanded) {
        collapseAllCards();
        expandedIndex = null;
        isManualExpanded = false;
        startAutoScroll();
        return;
      }

      expandCard(index, true);
      stopAutoScroll();
    });
  });

  slider.addEventListener(
    "wheel",
    function (event) {
      event.preventDefault();

      if (event.deltaY > 0) {
        expandCard(currentIndex + 1, false);
      } else {
        expandCard(currentIndex - 1, false);
      }
    },
    {
      passive: false
    }
  );

  slider.addEventListener("scroll", updateCurrentIndexOnScroll);

  slider.addEventListener("mouseenter", function () {
    isPaused = true;
    stopAutoScroll();
  });

  slider.addEventListener("mouseleave", function () {
    isPaused = false;
    startAutoScroll();
  });

  slider.addEventListener("touchstart", function () {
    isPaused = true;
    stopAutoScroll();
  });

  slider.addEventListener("touchend", function () {
    isPaused = false;
    startAutoScroll();
  });

  window.addEventListener("resize", function () {
    scrollToIndex(currentIndex);
  });

  expandCard(0, false);
  startAutoScroll();
})();

// ================= PARTNER PURPOSE SECTION JS END =================
// ================= INITIATIVES SECTION JS END =================

const section=document.getElementById("testimonialsSection");

const cards=[
document.getElementById("card0"),
document.getElementById("card1"),
document.getElementById("card2")
];

function clamp(value,min,max){
    return Math.min(Math.max(value,min),max);
}

function updateTestimonials(){

    const rect=section.getBoundingClientRect();

    const totalScroll=rect.height-window.innerHeight;

    const scrolled=-rect.top;

    const progress=clamp(scrolled/totalScroll,0,1);

    // Card 1
    cards[0].style.transform="translateY(0px) rotate(0deg)";
    cards[0].style.opacity="1";
    cards[0].style.zIndex="10";

    // Card 2
    let p=clamp((progress-0.15)/0.35,0,1);

    let y=520-(p*440);
    let rotate=-8+(p*3);

    cards[1].style.transform=`translateY(${y}px) rotate(${rotate}deg)`;
    cards[1].style.opacity=p;
    cards[1].style.zIndex="20";

    // Card 3
    p=clamp((progress-0.5)/0.35,0,1);

    y=620-(p*500);
    rotate=8-(p*3);

    cards[2].style.transform=`translateY(${y}px) rotate(${rotate}deg)`;
    cards[2].style.opacity=p;
    cards[2].style.zIndex="30";

}

window.addEventListener("scroll",updateTestimonials);
window.addEventListener("resize",updateTestimonials);
window.addEventListener("load",updateTestimonials);


document.querySelectorAll(".read-more").forEach(function(btn){

btn.addEventListener("click",function(){

const card=this.closest(".blog-card");

document.querySelectorAll(".blog-card").forEach(function(c){

if(c!==card){

c.classList.remove("active");

c.querySelector(".btn-text").innerHTML="Read More";

}

});

card.classList.toggle("active");

this.querySelector(".btn-text").innerHTML=
card.classList.contains("active")
?"Read Less"
:"Read More";

});

});
  </script>
</body>
</html>
