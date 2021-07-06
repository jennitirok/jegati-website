from flask import Blueprint, render_template

views = Blueprint('views', __name__)

# Home Page
@views.route('/')
def home():
    return render_template("home.html")

# About Us Page
@views.route('/about-us')
def about_us():
    return render_template("about_us.html", title="About Us")

# Products Page
@views.route('/products')
@views.route('/products/cosmetics')
@views.route('/products/food')
@views.route('/products/medical-devices')
def products():
    return render_template("products.html", title="Products")
def cosmetics():
    return render_template("cosmetics.html", title="Cosmetics")
def food():
    return render_template("food.html", title="Food")
def medical():
    return render_template("medical.html", title="Medical Devices")

# Services Page
@views.route('/services')
def services():
    return render_template("services.html", title="Services")

# Contact Us Page
@views.route('/contact-us')
def contact_us():
    return render_template("contact_us.html", title="Contact Us")