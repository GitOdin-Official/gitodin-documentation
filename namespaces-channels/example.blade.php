<b>Public Channel Example</b>
<pre>
@parsedown("```js
  var socket = io('https://lets.gitodin.com', {
    transports: ['websocket']
  });

  socket.emit('join', {
    channel: gitodin:gitodin_demo,
    auth: false
  });

  socket.on('debugger', function(data) {
    console.log(data);
  });
```")</pre>
<br>
<br>
<b>Authenication Channel Example</b>
<pre>
@parsedown("```js
  var socket = io('https://lets.gitodin.com', {
    transports: ['websocket']
  });

  var user = '{{ auth::user()->authSomething }}:{{ auth()->user()->authToken }}';
  var channel = 'gitodin:{{ auth::user()->username}}-demo';

  socket.emit('join', {
    channel: gitodin:gitodin_demo,
    auth: true,
    token: user
  });

  socket.on('debugger', function(data) {
    console.log(data);
  });
```")</pre>

