<!DOCTYPE html>
<html>
<head>
	<title>Teachers List</title>
	<style>
		li{
			color:red;
		}
	</style>
</head>
<body>
<ul>
	@foreach($teachers as $teacher)
	<li>{{ $teacher->name }}</li>
	@endforeach
</ul>
</body>
</html>
