<p>
  You can broadcast to a <b>Regional Tower</b>on the network in any language that allows you to cURL POST.<br>
  Here is an example POST request at its more basic form as a <a>chat application</a>.
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
	    }]
    }")
<p>
  Each message broadcasted to a <b>Regional Tower</b> must be under <b>12kb</b> of data, if you require more. Please contact us.
</p>