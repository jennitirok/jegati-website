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
# @views.route('/products')
# def products():
#     return render_template("products.html", title="Products")
@views.route('/products/cosmetic')
def cosmetics():
    return render_template("cosmetic.html", title="Cosmetic Product")
@views.route('/products/food-and-beverage')
def food():
    return render_template("food_beverage.html", title="Food Product")
@views.route('/products/pharmaceutical')
def medical():
    return render_template("pharmaceutical.html", title="Pharmaceutical Product")
@views.route('/products/veterinary')
def veterinary():
    return render_template("veterinary.html", title="Veterinary Product")

# Services Page
@views.route('/services')
def services():
    return render_template("services.html", title="Services")

# Career Page
@views.route('/career')
def career():
    return render_template("career.html", title="Career")

# Contact Us Page
@views.route('/contact-us')
def contact_us():
    return render_template("contact_us.html", title="Contact Us")