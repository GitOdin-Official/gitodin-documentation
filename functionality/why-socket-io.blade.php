<ul class="fa-ul list-li-push-sm">
  <li>
    <i class="fa fa-times fa-li"></i> Socket.io is crap
  </li>
  <li>
    <i class="fa fa-times fa-li"></i> Lighting fast and socket.io should never be used in the same sentence.
  </li>
  <li>
    <i class="fa fa-times fa-li"></i> Why are you integrating socket.io?!
  </li>
</ul>
<p>
  Frankly, going to answer this once and for all!<br>
  <br> As of <b>13 May 2017</b>, SocketIO 2.0 was released with major core performance changes with it, that no body <b>seems</b> to have caught onto.</p>
<ul class="fa-ul list-li-push-sm">
  <li>
    <i class="fa fa-check fa-li"></i> <a href="https://github.com/uNetworking/uWebSockets">uws</a> is now the default Websocket engine. It should bring significant improvement in performance (particularly in terms of memory consumption)<br>(
    <a
      href="https://github.com/socketio/engine.io/releases/tag/2.0.0">release note of Engine.IO</a>)
  </li>
  <li>
    <i class="fa fa-check fa-li"></i> the Engine.IO and Socket.IO handshake packets were merged, reducing the number of roundtrips necessary to establish a connection..
  </li>
</ul>
This update, plus the fact that Socket.io has around 50,000 stars on their organization github means there is a massive support community and actively maintained.
</p>