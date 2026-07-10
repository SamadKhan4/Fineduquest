<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Register Your School | Fin Edu Quest</title>
<link rel="icon" type="image/png" href="../assets/images/logo-new.png">

<!-- Font -->
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<!-- Page CSS -->
<style>
    /*====================================
        REGISTER PAGE
====================================*/

.register-page{
    width:100%;
    min-height:100vh;
    padding:70px 20px;
    background:#ffffff;
}

.register-wrapper{
    max-width:1120px;
    margin:auto;
    display:grid;
    grid-template-columns:460px 1fr;
    gap:70px;
    align-items:center;
}

/*====================================
        LEFT
====================================*/

.register-tag{
    display:inline-block;
    padding:8px 18px;
    border-radius:50px;
    background:#EAF4FF;
    color:#007BFF;
    font-size:13px;
    font-weight:700;
}

.register-title{
    margin-top:25px;
    font-family:"Roketto",sans-serif;
    font-size:52px;
    line-height:1.15;
    color:#111;
}

.register-title span{
    display:block;
    color:#007BFF;
}

.register-description{
    margin-top:22px;
    max-width:430px;
    font-size:16px;
    line-height:1.75;
    color:#555;
}

.register-image{
    margin-top:45px;
}

.register-image img{
    width:260px;
    display:block;
    animation:floatTrophy 3s ease-in-out infinite;
}

/*====================================
        FORM
====================================*/

.register-right{
    background:#fff;
    border-radius:18px;
    padding:40px;
    box-shadow:0 20px 45px rgba(0,0,0,.08);
    border:1px solid #E7E7E7;
}

.form-group{
    margin-bottom:22px;
}

.form-group label{
    display:block;
    margin-bottom:8px;
    font-size:14px;
    font-weight:600;
    color:#111;
}

.form-group input{
    width:100%;
    height:48px;
    border:1px solid #CFD6DF;
    border-radius:8px;
    padding:0 16px;
    font-size:14px;
    transition:.3s;
    outline:none;
    font-family:"Red Hat Display",sans-serif;
}

.form-group input:focus{
    border-color:#007BFF;
    box-shadow:0 0 0 4px rgba(0,123,255,.08);
}

.error-text{
    display:block;
    margin-top:6px;
    color:#E53935;
    font-size:12px;
}

/*====================================
        BUTTON
====================================*/

.submit-btn{
    width:100%;
    height:54px;
    border:none;
    border-radius:999px;
    background:#FFC928;
    color:#111;
    font-size:15px;
    font-weight:600;
    cursor:pointer;
    transition:.3s;
    box-shadow:0 4px 0 #111;
}

.submit-btn:hover{
    transform:translateY(2px);
    box-shadow:0 2px 0 #111;
}

.submit-btn:disabled{
    opacity:.7;
    cursor:not-allowed;
}

/*====================================
        SUCCESS POPUP
====================================*/

.popup-overlay{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.82);
    display:none;
    justify-content:center;
    align-items:center;
    padding:20px;
    z-index:9999;
}

.popup-overlay.active{
    display:flex;
}

.popup-box{
    width:100%;
    max-width:500px;
    background:#fff;
    border-radius:18px;
    padding:45px 35px;
    text-align:center;
    animation:popupShow .35s ease;
}

.popup-box img{
    width:90px;
    margin:auto;
    display:block;
}

.popup-box h2{
    margin-top:24px;
    font-family:"Roketto",sans-serif;
    font-size:34px;
    color:#007BFF;
}

.popup-box p{
    margin-top:18px;
    font-size:15px;
    line-height:1.7;
    color:#555;
}

.popup-box button{
    margin-top:28px;
    border:none;
    background:#FFC928;
    color:#111;
    padding:14px 32px;
    border-radius:999px;
    cursor:pointer;
    font-size:15px;
    font-weight:600;
    transition:.3s;
    box-shadow:0 4px 0 #111;
}

.popup-box button:hover{
    transform:translateY(2px);
    box-shadow:0 2px 0 #111;
}

/*====================================
        ANIMATION
====================================*/

@keyframes floatTrophy{
    0%,100%{
        transform:translateY(0);
    }
    50%{
        transform:translateY(-12px);
    }
}

@keyframes popupShow{
    from{
        opacity:0;
        transform:scale(.9);
    }
    to{
        opacity:1;
        transform:scale(1);
    }
}

/*====================================
        TABLET
====================================*/

@media(max-width:991px){

.register-wrapper{
    grid-template-columns:1fr;
    gap:45px;
}

.register-left{
    text-align:center;
}

.register-description{
    margin-left:auto;
    margin-right:auto;
}

.register-image img{
    margin:auto;
}

.register-right{
    max-width:650px;
    margin:auto;
    width:100%;
}

}

/*====================================
        MOBILE
====================================*/

@media(max-width:576px){

.register-page{
    padding:40px 16px;
}

.register-title{
    font-size:36px;
}

.register-description{
    font-size:14px;
}

.register-right{
    padding:24px;
}

.form-group input{
    height:44px;
    font-size:13px;
}

.submit-btn{
    height:50px;
    font-size:14px;
}

.register-image img{
    width:170px;
}

.popup-box{
    padding:35px 22px;
}

.popup-box img{
    width:70px;
}

.popup-box h2{
    font-size:28px;
}

.popup-box p{
    font-size:14px;
}

.popup-box button{
    width:100%;
}

}
</style>
</head>
<body>

<div id="navbar"></div>

<main>

<section class="register-page">

<div class="register-wrapper">

    <!-- Left -->

    <div class="register-left">

        <span class="register-tag">
            School Registration
        </span>

        <h1 class="register-title">
            Register Your School for
            <span>Fin-Edu Quest</span>
        </h1>

        <p class="register-description">

            Fill out the form below to enroll your school
            in our Financial Literacy Program.

            Our team will contact you shortly after
            reviewing your request.

        </p>

        <div class="register-image">

            <img
            src="../assets/images/trophy.png"
            alt="Trophy">

        </div>

    </div>

    <!-- Right -->

    <div class="register-right">

        <form id="registerForm">

            <!-- School -->

            <div class="form-group">

                <label>
                    School Name*
                </label>

                <input
                type="text"
                id="schoolName"
                placeholder="School Name"
                required>

            </div>

            <!-- Contact -->

            <div class="form-group">

                <label>
                    Contact Person*
                </label>

                <input
                type="text"
                id="contactPerson"
                placeholder="Contact Person"
                required>

            </div>

            <!-- Designation -->

            <div class="form-group">

                <label>
                    Designation / Role*
                </label>

                <input
                type="text"
                id="designation"
                placeholder="Principal / Teacher"
                required>

            </div>

            <!-- Phone -->

            <div class="form-group">

                <label>
                    Phone Number*
                </label>

                <input
                type="tel"
                id="phone"
                maxlength="10"
                placeholder="10 Digit Number"
                required>

                <small
                id="phoneError"
                class="error-text"></small>

            </div>

            <!-- Button -->

            <button
            id="submitBtn"
            class="submit-btn"
            type="submit">

                Request a Callback

            </button>

        </form>

    </div>

</div>

</section>

</main>

<!-- ==========================
      SUCCESS POPUP
=========================== -->

<div
id="successPopup"
class="popup-overlay">

<div class="popup-box">

<img
src="../assets/images/trophy.png"
alt="Trophy">

<h2>

Congratulations!

</h2>

<p>

Your school has been successfully
registered for Fin-Edu Quest.

Our team will contact you shortly.

</p>

<button
id="closePopup">

Go To Home Page

</button>

</div>

</div>

<div id="footer"></div>

<script src="Components/footer-loader.js"></script>

<script src="Components/navbar-loader.js"></script>

<!-- Page JS -->
<script>
    const SCRIPT_URL =
"https://script.google.com/macros/s/AKfycbw8v1AoBaR3sHoRF8bc86YZtq2W8CvVyb0LiPEp6wS3gcuj1BdFLFI8hzeFpIL2BIifXA/exec";

const form = document.getElementById("registerForm");
const submitBtn = document.getElementById("submitBtn");
const phoneInput = document.getElementById("phone");
const phoneError = document.getElementById("phoneError");
const popup = document.getElementById("successPopup");
const closePopup = document.getElementById("closePopup");

/*==================================
        PHONE VALIDATION
==================================*/

phoneInput.addEventListener("input", function () {

    this.value = this.value.replace(/\D/g, "").slice(0, 10);

    if (this.value.length > 0 && this.value.length < 10) {

        phoneError.textContent =
            "Phone number must be exactly 10 digits";

    } else {

        phoneError.textContent = "";

    }

});

/*==================================
        FORM SUBMIT
==================================*/

form.addEventListener("submit", async function (e) {

    e.preventDefault();

    const schoolName =
        document.getElementById("schoolName").value.trim();

    const contactPerson =
        document.getElementById("contactPerson").value.trim();

    const designation =
        document.getElementById("designation").value.trim();

    const phone =
        phoneInput.value.trim();

    if (phone.length !== 10) {

        phoneError.textContent =
            "Phone number must be exactly 10 digits";

        return;

    }

    submitBtn.disabled = true;
    submitBtn.innerHTML = "Submitting...";

    try {

        const formBody = new URLSearchParams();

        formBody.append("schoolName", schoolName);
        formBody.append("contactPerson", contactPerson);
        formBody.append("designation", designation);
        formBody.append("phone", phone);

        await fetch(SCRIPT_URL, {

            method: "POST",
            mode: "no-cors",

            headers: {
                "Content-Type":
                "application/x-www-form-urlencoded"
            },

            body: formBody.toString()

        });

        form.reset();

        phoneError.textContent = "";

        popup.classList.add("active");

    }

    catch (err) {

        console.error(err);

        alert(
            "Something went wrong. Please try again."
        );

    }

    finally {

        submitBtn.disabled = false;

        submitBtn.innerHTML =
            "Request a Callback";

    }

});

/*==================================
        CLOSE POPUP
==================================*/

closePopup.addEventListener("click", function () {

    popup.classList.remove("active");

    window.location.href = "index.php";

});

/*==================================
        ESC KEY
==================================*/

document.addEventListener("keydown", function (e) {

    if (e.key === "Escape") {

        popup.classList.remove("active");

    }

});

/*==================================
    CLICK OUTSIDE POPUP
==================================*/

popup.addEventListener("click", function (e) {

    if (e.target === popup) {

        popup.classList.remove("active");

    }

});
</script>
</body>
</html>
