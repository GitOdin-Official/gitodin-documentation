Note, we are using Javascript to demostrate how to join a channel. No matter the language, the concept is the same.<br><br>
First, before we can join a channel. We must connect to a <b>Regional Tower</b>.<Br>For this example, we are going to connect to the North American Regional Tower.
<br>
@parsedown("```var socket = io('https://lets.gitodin.com', {transports: ['websocket']});```")
Now that we have the connection in, lets add the part to join a channel and go over it.<br>
<br>
@parsedown("```socket.emit('join', { channel: domain:channel,  auth: false});```")
So we are simply emiting a <b>Join Event</b> with the <b>Channel</b> and <b>Auth</b>. It's that easy. From here, you can add as many or as little event listeners as you'd like.

      

    