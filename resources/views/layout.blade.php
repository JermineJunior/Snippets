<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
	<title>{{$title}}</title>
	  <link rel="stylesheet" href="{{asset('css/main.css')}}">
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
		<style>
			a:hover{
               text-decoration: none;
               color: teal;
			}
			.hero{
				background-image: url('{{asset('images/bg.jpg')}}');
                background-size:cover;
				height:20rem;

			}
		</style>
	</head>
	<body class="bg-gray-200">
		<section class="bg-teal-500 hero">
            <div class="body">
				<div class="container ml-12 py-20">
					<h1 class="text-5xl text-gray-300	">
                        <a href="{{ route('home') }}" class="hover:no-underline">Snippets</a>
					</h1>

					<h2 class="mx-2 text-gray-200 text-sm tracking-wide">
						A project from the friendly folks at Baka Team.
					</h2>

					<p class="mt-4 text-800">
						<a href="{{ route('snippet.add') }}" class="bg-gray-100 rounded p-3">
							create a snippet
						</a>
					</p>
				</div>
			</div>
		</section>
		<main>
			{{$slot}}
		</main>
	</body>
</html>
