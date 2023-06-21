<!DOCTYPE html>
<html>
<head>
	<title>App Details</title>
	<style>
		body {
			font-family: sans-serif;
			width: 80%;
			margin: auto;
		}

		h2 {
			font-size: 24px;
			margin-bottom: 10px;
		}

		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 20px;
		}

		th, td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}

		th {
		    background-color: #f2f2f2;
		    font-weight: normal;
		}

		.highlight {
			font-weight: bold;
			color: #007bff;
		}
	</style>
</head>
<body>
	<h3>You have submitted following App</h3>

	<table>
		<tr>
			<th>App Id</th>
			<td>{{ $app->id }}</td>
		</tr>
		<tr>
			<th>App Name</th>
			<td>{{ $app->name }}</td>
		</tr>
		<tr>
			<th>Redirect URI</th>
			<td>{{ $app->redirect_uri }}</td>
		</tr>
		<tr>
			<th>Scopes</th>
			<td>{{ $app->scopes }}</td>
		</tr>
		<tr>
			<th>Client ID</th>
			<td><span class="highlight">{{ $app->client_id }}</span></td>
		</tr>
		<tr>
			<th>Client Secret</th>
			<td><span class="highlight">{{ $app->client_secret }}</span></td>
		</tr>
	</table>

	<p><a href="{{ url('/') }}">Back to our home page</a></p>
</body>
</html>
