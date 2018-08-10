<p>
  Here is an example POST request at its more basic form sending a multi payload message as a <a>chat application</a>.
</p>
@parsedown("```js
curl --request POST \
  --url https://na.gitodin.com/ \
  --header 'Content-Type: application/json' \
  --data '{
	'authorization': {
		'app_key': ''
	},
	'payload': [{
		'channel': 'gitodin:gitodin_chat',
		'event': 'message',
		'data': {
		    'username': 'yordaDev',
            'message': ' ** Screams ** ahh!'
		    }
	    },
        {
		'channel': 'gitodin:gitodin_notifications',
		'event': 'notifications',
		'data': {
            'user': 'yordadev',
            'type': 'new_message',
            'message': 'message sent!'
		    }
	    }]
    }")
<p>
  Each message broadcasted to a <b>Regional Tower</b> must be under <b>12kb</b> of data, if you require more. Please contact us.
</p>