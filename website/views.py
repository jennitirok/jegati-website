from flask import Blueprint

views = Blueprint('views', __name__)

# Home Page
@views.route('/')
def home():
    return "<h1>Home</h1>"

# About Us Page
@views.route('/about-us')
def about_us():
    return "<h1>About Us</h1>"

# Products Page
@views.route('/products')
def products():
    return "<h1>Products</h1>"

# Services Page
@views.route('/services')
def services():
    return "<h1>Services</h1>"

# Contact Us Page
@views.route('/contact-us')
def contact_us():
    return "<h1>Contact Us</h1>"