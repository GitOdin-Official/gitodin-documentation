<p>
  Here is an example POST request at its more basic form sending a Auth Channel Authorization to allow a user onto a channel..
</p>
@parsedown("```js
curl --request POST \
  --url https://na.gitodin.com/auth \
  --header 'Content-Type: application/json' \
  --data '{
	'authorization': {
		'app_key': ''
	},
	'payload' : {
		'channel': 'we_gave_you_this',
		'authorized' : true/false,
		'socket_id' : 'we_gave_you_this'
	}
}'")
