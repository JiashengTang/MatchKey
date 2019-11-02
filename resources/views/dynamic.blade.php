<!DOCTYPE html>
    <html>
      <head>
        <title>Welcome Email</title>
      </head>
      <body>
        <h2>Welcome to the Matchkey {{Session::get('registeruername')}}</h2>
        <br/>
        Your registered account on Matchkey, Please click on the below link to verify your email account
        <br/>
        <a href="{{url('user/verify', $data->token)}}">Verify Email</a>
      </body>
    </html>