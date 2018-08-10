<p>
  Inside of each namespace, you can have as many channels as you desire. You can arbitrarily define channels that sockets can join and leave.<br>
  Basically, they are to divide up your sockets in ways to determine what is or isn't broadcasted to anyone in said channel.<br>
  <br>
  There is no limit or creation method for channels. Simply have the client connect and you broadcast to it. <br>
  <br>
  <b>Public Channels</b> are simply that, open to the public. Anyone who comes onto your website, game or software that hits the listener and it's public will join the channel and start recieving broadcast from you.
  <br>
  <br>
  <b>Auth Channels</b> are channels that requires you to approve or deny the individual onto the channel. We achieve this by sending the information regarding the client to your callback. We will go over this in its own dedicated section of the documentation.
  <br>
</p>