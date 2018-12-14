<!DOCTYPE html>
<html>
    <head>
        <title>WebSocket PHP Open Group Chat App</title>
        <link type="text/css" rel="stylesheet" href="bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="style.css" />        
        <script src="websocket_client.js?r=<?php echo rand();?>"></script>
    </head>
    <body onload="javascript:WebSocketSupport()">

                <div id="ws_support"></div>

                <div id="wrapper">
                    <div id="menu">
                        <h3 align="center">Welcome to WebSocket PHP Open Group Chat App v1</h3>
                    </div>

                    <div id="chatbox"></div>

                    <div id ="controls">

                        <div class="form-group row">
                            <div class="col-md-2"><label for="chatname">Name:</label></div>
                            <div class="col-md-8">
                                <input name="chatname" type="text" id="chatname" placeholder="Type your name here" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2"><label for="msg">Message:</label></div>
                            <div class="col-md-8">
                                <input name="msg" type="text" id="msg" placeholder="Type your message here" class="form-control" />        
                            </div>
                            <div class="col-md-2">
                                <input name="sendmsg" type="submit"  id="sendmsg" value="Send" onclick="doSend(document.getElementById('msg').value)" class="btn btn-primary" />
                            </div>
                        </div>

                        
                    </div>
                </div>

    </body>
</html>