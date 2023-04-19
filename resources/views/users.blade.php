<!DOCTYPE html>
<html>
<head>
	<title>Home Maid Service</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* General Styling */
body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
}

/* Header Styling */
header {
	background-color: #333;
	color: #fff;
	padding: 20px;
}

header h1 {
	margin: 0;
}

nav ul {
	margin: 0;
	padding: 0;
	list-style-type: none;
	display: flex;
	justify-content: flex-end;
}

nav li {
	margin: 0 10px;
}

nav a {
	color: #fff;
	text-decoration: none;
}

nav a:hover {
	text-decoration: underline;
}

/* Main Content Styling */
main {
	margin: 20px;
}

section {
	margin-bottom: 20px;
}

section h2 {
	font-size: 24px;
}

ul {
	list-style-type: disc;
	margin-left: 20px;
}

form label {
	display: block;
	margin-bottom: 5px;
}

form input, form textarea {
	margin-bottom: 10px;
}

input[type="submit"] {
	background-color: #333;
	color: #fff;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

input[type="submit"]:hover {
	background-color: #444;
}

/* Footer Styling */
footer {
	background-color: #eee;
	padding: 10px;
	text-align: center;
}

    </style>
</head>
<body>
	<header>
		<h1>Home Maid Service</h1>
		<nav>
			<ul>
				<li><a href="#about">About Us</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#contact">Contact Us</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section id="about">
			<h2>About Us</h2>
			<p>Here we can provide a service like Home maid services</p>
		</section>

		<section id="services">
			<h2>Services</h2>
			<ul>
				<li>Home Cleaning</li>
				<li>Maid service</li>
				<li>Laundary service</li>
				<li>baby sitting</li>
			</ul>
		</section>

		<section id="contact">
			<h2>Contact Us</h2>
			<form>
				<label for="name">Name:</label>
				<input type="text" id="name" name="name"><br>

				<label for="email">Email:</label>
				<input type="email" id="email" name="email"><br>

				<label for="message">Message:</label>
				<textarea id="message" name="message"></textarea><br>

				<input type="submit" value="Submit">
			</form>
		</section>
	</main>

	<footer>
		<p>&copy; 2023 Home Maid Service</p>
	</footer>
</body>
</html>
