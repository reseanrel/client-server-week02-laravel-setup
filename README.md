# client-server-week02-laravel-setup

1. Brief Overview of Laravel

Laravel is a free, open-source PHP web framework created by Taylor Otwell in 2011. It follows the Model-View-Controller (MVC) architecture, which separates application logic (Model), presentation (View), and request handling (Controller) into clean, distinct layers. Laravel is known for its elegant, expressive syntax and a large built-in toolset: the Eloquent ORM for database work, the Blade templating engine, a powerful routing system, built-in authentication, and migrations for managing database schemas. These features let developers build modern, secure, and scalable web applications with much less boilerplate code than writing raw PHP.

2. Importance of Client-Server Technologies

Client-server technologies are the foundation of virtually all modern web applications. In this model, a client — usually a web browser — sends an HTTP request to a server, which processes the request, fetches or stores data, and returns an HTTP response. This separation of responsibilities provides several critical benefits: data is centralized on the server (so it stays consistent and easy to back up), access can be controlled and secured server-side, and the same server can serve many different clients (browsers, mobile apps, other services) at scale. It is the architecture behind banking sites, e-commerce platforms, cloud services, and enterprise systems, making it essential knowledge for any developer.

3. Purpose of the Project

This project is a hands-on demonstration of building a web application with Laravel in the context of the Client/Server Technologies course. It applies the concepts taught in class — HTTP requests, routing, server-side rendering, and passing data from a route to a view — to create a functional, styled homepage that displays student information. In practice, when the browser (client) requests the homepage, Laravel (the server) receives that request through the route in `routes/web.php`, prepares the student data and the current date, renders the `welcome` Blade template, and sends the finished HTML back to the browser. The project's goal is to show how the client-server request/response cycle works end-to-end and how Laravel fits into that cycle.


At least five objectives achieved during this activity:__

1. Set up and run a Laravel development environment__ — launched the local server with `php artisan serve` and confirmed the application runs at [](http://127.0.0.1:8000,)<http://127.0.0.1:8000,> establishing the working client-server setup.

2. Understood the Laravel MVC project structure__ — explored how the framework organizes code into routes, controllers, views, and configuration, and identified where each part of the request lifecycle is handled.

3. Defined a route that passes data to a view__ — created the root route in `routes/web.php` that prepares structured data (a student array with name, number, course, section, and subject) plus the current date, and forwards it to the welcome view using `view('welcome', [...])`.

4. Used the Blade templating engine for server-side rendering__ — displayed the dynamic student data and the formatted current date through Blade's `{{ }}` directives, showing how the server renders content before sending the HTML response to the client.

5. Customized the homepage with a student profile design__ — replaced the default Laravel welcome page with a styled profile card (cartoon-brutalist design) displaying the student's name, student number, course, section, subject, and today's date.


