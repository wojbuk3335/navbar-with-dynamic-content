<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Switcher</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css" />
</head>
<body>
	<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto tabs">
				<li class="nav-item tab is-active">
					<a data-switcher data-tab="1" class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item tab">
					<a data-switcher data-tab="2" class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown tab">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<div class=" tab">
							<a data-switcher data-tab="3"class="dropdown-item" href="#">Action</a>
						</div>
						<div class=" tab">
							<a data-switcher data-tab="4"class="dropdown-item" href="#">Another action</a>
						</div>
						<div class="tab">
							<a data-switcher data-tab="5"class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
				</li>
				<li class="nav-item tab">
				<a data-switcher data-tab="6" class="nav-link disabled" href="#">Disabled</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
	</header>
    <main>
        <section class="pages">
            <div class="page is-active" data-page="1">
                <h2>Page 1</h2>
                <p>Welcome to the home page</p>
            </div>
            <div class="page" data-page="2">
                <h2>Page 2</h2>
                <p>Welcome to the about page</p>
            </div>
            <div class="page" data-page="3">
                <h2>Page 3</h2>
                <p>Welcome to the services page</p>
            </div>
            <div class="page" data-page="4">
                <h2>Page 4</h2>
                <p>Welcome to the contact page</p>
            </div>
			<div class="page" data-page="5">
                <h2>Page 5</h2>
                <p>Welcome to the contact page</p>
            </div>
			 <div class="page" data-page="6">
                <h2>Page 6</h2>
                <p>Welcome to the contact page</p>
            </div>
        </section>
    </main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>