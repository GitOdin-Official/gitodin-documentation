<p>
<b>Note, we are using Javascript to demostrate how to join a channel. No matter the language, the concept is the same.</b><br><br>
First, before we can join a channel. We must connect to a <b>Regional Tower</b>.<Br>For this example, we are going to connect to the North American Regional Tower.
<br>
@parsedown("```var socket = io('https://lets.gitodin.com', {transports: ['websocket']});```")
Now that we have the connection in, lets add the part to join a channel and go over it.<br>
<br>
@parsedown("```socket.emit('join', { channel: domain:channel,  auth: true, token: anything});```")
For auth channels, you must have a callback set up on your application for us to send you information to. When a client trys to join your Auth Channel,
it fires off the following information to your callback:
<br>
<br>
<ul class="fa-ul list-li-push-sm">
  <li>
    <i class="fa fa-check fa-li"></i> token
  </li>
  <li>
    <i class="fa fa-check fa-li"></i> socket_id
  </li>
  <li>
    <i class="fa fa-check fa-li"></i> channel
  </li>
</ul>
<br>
It's up to you to authorize or deny access based on the clients token and the channel on your backend. See Broadcasting Authorization to continue.
</p>
