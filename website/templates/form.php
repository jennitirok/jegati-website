<?php

if($_POST["submit"]) {
    $recipient="jennifer_tirok@yahoo.com";
    $subject="Form JGT Website Submitted";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $senderCompany=$_POST["senderCompany"];
    $senderPhone=$_POST["senderPhone"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\nCompany: $senderCompany\Phone Number: $senderPhone\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
}
?>

{% extends "base.html" %}
{% block content %}

<style>
    .fa-map-marker, .fa-phone, .fa-fax, .fa-envelope {
        margin-right: 8px;
    }
    #contact-us {
        justify-content: center;
    }
    .maps-responsive {
        position: relative;
        width: 100%;
        padding-bottom: 56.25%; /* Ratio 16:9 ( 100%/16*9 = 56.25% ) */
    }
    .maps-responsive > * {
        display: block;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
    }
    #submit-button {
        background: linear-gradient(to bottom right, #004d00, #001540, #deae36);
        border-width: 4px;
        border-color: black;
        border-radius: 20px;
        padding: 10px;
        border-style: solid;
        color: white;
        margin-bottom: 10px;
    }
    #submit-button:hover{
        background: linear-gradient(to bottom right, #004d00, #001540, #deae36);
        border:6px solid;
        color: white;
    }
</style>

<div class="container-fluid">
    <!-- Contact Info -->
    <div class="row px-5 pt-5 pb-5" id="contact-us">
        <h3>Contact Us</h3>
    </div>
    <div class="row px-5 pb-5">
        <div class="col-xl-3 no-gutters">
            <p><i class="fa fa-map-marker" aria-hidden="true"></i>Ruko Taman Modern</p>
            <p>Blok R4 No. 6,</p>
            <p>Ujung Menteng - Cakung,</p>
            <p>East Jakarta 13960</p>
            <p>Indonesia</p>
            <br>
        </div>
        <div class="col-xl-3 no-gutters">
            <p><i class="fa fa-phone" aria-hidden="true">
                <a href="tel:+62214612232" class="link"> Phone: +6221 4612232</a>
            </i></p>
            <p><i class="fa fa-fax" aria-hidden="true">
                <a href="tel:+622146820775" class="link"> Fax: +6221 46820775</a></i></p>
            <p><i class="fa fa-envelope" aria-hidden="true">
                <a href="mailto:info@jegati.com" class="link"> info@jegati.com</a>
            </i></p>
            <br><br>
        </div>
        <!-- Google Maps Location -->
        <div class="col-xl-6 no-gutters">
            <div class="maps-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.56895158196!2d106.94707151459808!3d-6.188391362354332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698be9bf14305f%3A0x98378498ba9d4921!2sPT.%20JEGATI%20GEMPITA%20TRIJAYA!5e0!3m2!1sid!2sid!4v1624510079852!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <!-- Form -->
    <form class="form-horizontal px-5 pb-5" action="form.php" method="POST">
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="sender" required="true">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" required="true">
        </div>
        <div class="form-group">       
          <label>Company Name</label>
          <input type="text" class="form-control" name="senderCompany" required="true">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="senderEmail" required="true">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="number" class="form-control" name="senderPhone" required="true">
        </div>
        <div class="form-group">
            <label for="message">Your Message</label>
            <textarea class="form-control" name="message" rows="6" required="true"></textarea>
        </div>
        <form action="#">
            <input id="submit-button" type="submit" name="submit" value="Submit" />
        </form>
    </form>
</div>

{% endblock %}