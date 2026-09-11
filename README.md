Mai-Ryl Milkshake — Responsive Product Landing Page
1. Project Title

Mai-Ryl Milkshake: Responsive Product Landing Page

2. Introduction

A Product Landing Page is a web page designed to introduce and promote a product, service, or business. It helps businesses present important information in a clear and attractive way while encouraging customers to explore their products or services.

Landing pages are important because they create a good first impression, improve customer engagement, and make information easier to access. A responsive landing page is also important because customers may visit the website using different devices such as desktop computers, tablets, and mobile phones.

This project was created for Mai-Ryl Milkshake, a real food and beverage business that offers milkshakes, refreshing drinks, fries, snacks, and affordable food combinations.

The purpose of this project is to transform the business information and products into a modern, responsive, and professional web landing page using Laravel, Tailwind CSS, and Blade Components.

3. Objectives

The following objectives were accomplished during this activity:

Develop a responsive product landing page using Tailwind CSS.
Create reusable Laravel Blade Components.
Apply responsive layouts for desktop, tablet, and mobile devices.
Use Flexbox and CSS Grid for organizing page content.
Create a consistent and modern user interface.
Improve code organization through reusable components.
Apply modern UI/UX principles to improve the user experience.
Build a professional project that can be included in a development portfolio.
4. Responsive Web Design

Responsive Web Design allows a website to adjust properly depending on the screen size and device being used.

Mobile-First Design

The landing page was designed to remain usable on smaller screens such as mobile phones. Tailwind CSS responsive utility classes were used to adjust layouts as the screen becomes larger.

For example, product cards that appear in multiple columns on desktop automatically adjust to fewer columns on tablets and mobile devices.

Responsive Breakpoints

Tailwind CSS breakpoints such as the following were used:

sm: for small devices
md: for tablets
lg: for laptops and desktop screens

These breakpoints helped the website adjust its navigation, grids, spacing, typography, and content layout.

Flexbox

Flexbox was used for layouts such as:

Navigation bar
Buttons
Product information
Footer content
Mobile and desktop alignment
CSS Grid

CSS Grid was used to organize:

Feature cards
Product cards
Pricing cards
Testimonials
Footer sections
User Experience (UX)

Responsive design is important because users access websites using different devices. A website should remain readable, organized, and easy to navigate whether it is viewed on a desktop computer, tablet, or mobile phone.

The Mai-Ryl landing page was tested in desktop, tablet, and mobile screen sizes to ensure that the layout remains functional and visually organized.

5. Tailwind CSS

Tailwind CSS is a utility-first CSS framework that allows developers to style websites using predefined utility classes.

Instead of writing large amounts of custom CSS, Tailwind CSS provides classes for:

Colors
Spacing
Typography
Flexbox
Grid
Responsive design
Borders
Shadows
Hover effects
Advantages of Tailwind CSS

Some advantages of using Tailwind CSS in this project include:

Faster interface development
Consistent design
Easy responsive styling
Less custom CSS
Flexible layout design
Responsive Utility Classes

Examples used in the project include:

sm:grid-cols-2
md:grid-cols-3
lg:grid-cols-4

These classes allow the number of columns to automatically change depending on the screen size.

Component Styling

Tailwind CSS was also used to style reusable components such as:

Navbar
Feature cards
Pricing cards
Testimonial cards
Buttons
Footer

This helped maintain a consistent visual design throughout the landing page.

6. Blade Components

Blade Components are reusable user interface elements in Laravel.

Instead of repeating the same HTML code multiple times, reusable components can be created and used throughout the project.

The project includes the following Blade Components:

resources/views/components/
├── navbar.blade.php
├── hero.blade.php
├── feature-card.blade.php
├── pricing-card.blade.php
├── testimonial-card.blade.php
├── button.blade.php
└── footer.blade.php
Benefits of Blade Components

Blade Components improve the project by providing:

Reusable code
Better organization
Easier maintenance
Consistent UI design
Less duplicated HTML

For example, the feature cards are displayed using the reusable feature-card component.

Example:

<x-feature-card
    title="Fresh Flavors"
    description="Enjoy delicious and refreshing flavors made for every craving."
/>

The same component can be reused while changing only the content.

7. User Interface Design

The Mai-Ryl Milkshake landing page uses a colorful but clean design inspired by the identity of the business.

Color Palette

The main colors used include:

Cream background
White and light beige sections
Cherry red accent color
Dark brown text
Warm yellow highlights

These colors create a warm, playful, and food-friendly appearance.

Typography

The project uses different typography styles to create visual hierarchy.

The Fraunces font style is used mainly for headings to give the website a more friendly and expressive appearance.

Clean sans-serif typography is used for body text to maintain readability.

Iconography

Simple icons are used in the feature section to visually represent the benefits and qualities of Mai-Ryl products.

Button Styles

Buttons use:

Rounded corners
Strong colors
Hover effects
Clear call-to-action text

Examples include:

Order Now
Explore Menu
Contact Us
Check Prices
Card Design

Cards are used for:

Features
Products
Pricing
Testimonials

Rounded corners, borders, spacing, and hover effects were used to create a modern and consistent interface.

Layout Consistency

Consistent spacing, colors, typography, and card styles were applied throughout the website to create a better user experience.

8. Folder Structure

The project follows Laravel's recommended folder structure.

resources/views/layouts

This folder contains the main application layout.

The app.blade.php file provides the common structure of the website.

resources/views/components

This folder contains reusable Blade Components such as the navbar, hero section, cards, buttons, and footer.

resources/views/pages

This folder contains the main page content.

The home.blade.php file contains the different sections of the Mai-Ryl landing page.

public

This folder contains publicly accessible files such as images and other assets.

screenshots

This folder contains screenshots of the completed project, including responsive views and individual website sections.

documentation

This folder is used for documentation materials, including the before-and-after comparison.

9. Features of the Landing Page

The Mai-Ryl Milkshake landing page includes the following sections:

Responsive Navigation Bar
Hero Section
Features Section
Product Menu Showcase
Pricing Section
Testimonials
Call-to-Action Section
Footer

The website also includes a functional mobile navigation menu for smaller devices.

10. Before-and-After Comparison

The project includes a comparison between the initial basic design and the final polished interface.

Before

The initial design used a simple layout with basic text and minimal styling. The structure was functional but did not yet include a strong visual hierarchy, reusable components, responsive layouts, or polished UI elements.

After

The final design was improved by adding:

Responsive layouts
Blade Components
Tailwind CSS styling
Modern cards
Improved typography
Consistent spacing
Product images
Hover effects
Responsive navigation
Mobile menu functionality

The final interface provides a more professional and user-friendly experience.

11. Screenshots
Before Design

After Design

Desktop View

Tablet View

Mobile View

Navigation Bar

Hero Section

Features Section

Menu Showcase

Pricing Section

Testimonials

Footer

VS Code Project Structure

Blade Components

GitHub Repository

12. Technologies Used

This project was developed using:

Laravel
PHP
Blade Templates
Blade Components
Tailwind CSS
JavaScript
Vite
HTML
13. Problems Encountered and Solutions
Problem 1: Creating reusable sections

Initially, repeating similar HTML structures could make the project harder to maintain.

Solution: Blade Components were used to create reusable cards, buttons, navigation, hero, and footer sections.

Problem 2: Responsive layouts

Some layouts needed to adjust properly across different screen sizes.

Solution: Tailwind CSS responsive utility classes and breakpoints were used to adjust the layout for mobile, tablet, and desktop screens.

Problem 3: Mobile Navigation

The hamburger menu initially displayed on mobile devices but did not have functionality.

Solution: Alpine.js was installed and used to make the mobile navigation menu interactive.

Problem 4: Maintaining consistent design

Different sections needed to maintain the same colors, spacing, typography, and card styles.

Solution: A consistent design system using Tailwind CSS utility classes was applied throughout the project.

14. Reflection

This activity helped me understand how modern frontend development can be organized using reusable components and responsive design principles.

Through Laravel Blade Components, I learned how reusable UI elements can make a project easier to maintain and organize. Tailwind CSS also made it easier to create responsive layouts and apply consistent styling without writing large amounts of custom CSS.

Creating the Mai-Ryl Milkshake landing page also helped me improve my understanding of UI/UX design. I learned how colors, spacing, typography, cards, and responsive layouts can improve the overall user experience.

Overall, this project helped me practice important frontend development skills that can be useful in future Laravel and web development projects.

15. Author

Dimple Melendrez
BSIT 3A
ITST 302 – Client-Server Technologies
Week 5 – Mini Project 04