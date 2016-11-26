# Example Strioe integration for Zesty.io
By using php on a heroku server, Zesty.io can post a Stripe form using Stripe.js to a remote server, and send that data to Stripe for processing. 

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)

## Example Zesty.io Stripe

```
<form enctype="multipart/form-data" action="INSERT_HEROKU_DOMAIN_HERE" method="POST">
			
	<!-- MAX_FILE_SIZE must precede the file input field -->
	<input type="hidden" name="MAX_FILE_SIZE" value="30000" />

	<br>
	<input type="text" name="name" value="" />
	
	<!-- RETURN_URL must precede the file input field, used after file is uploaded -->
	<input type="hidden" name="redirect_target" value="http://www.example.com/" />
	
	
	<!-- Name of input element determines name in $_FILES array -->
	<label>Send this file: <input name="resume" type="file" /></label>
	<br>
	<input type="submit" value="Send File" />
</form>		
```

This will post to an Airtable with a name, and single file