<style>
    .rounded-circle {
    border-radius: 50%!important;
}
.reset-btn {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #0C5C99;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 17px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  text-decoration: none;
  font-weight: 500;
}
</style>
<div class="" style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:12px;font-weight:normal;line-height:18px;max-width:600px;margin:auto">

    <table style="background:#f7f7f7;border-color:#eee;border-style:solid;border-width:1px 1px 0 1px;color:#3e474c;font-size:12px;line-height:18px;max-height:40px;min-height:40px;height:40px;max-width:600px;width:100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#F7F7F7" align="center">
        <tbody>
        <tr style="background:#0C5C99;">
            <td style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-weight:normal;padding:30px 0 25px;text-align:center;vertical-align:middle" valign="middle" align="center">

                <img src="{{ asset('images/logo/logo.jpg') }}" alt="" class="rounded-circle" style="max-height:75px; background-color:#fff;">
               
            </td>
        </tr>
        </tbody>
    </table>

    <table style="background:#fff;font-size:12px;height:auto;line-height:18px;max-width:600px;overflow:hidden;width:100%;border-color:#eee;border-style:solid;border-width:1px 1px 0 1px" cellspacing="0" cellpadding="0" border="0" bgcolor="#FFF" align="center">
        <tbody>
        <tr >
            <td class="m_-6590733290487731973ecxconversation-part-spacer" style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:1px;font-weight:normal;height:25px;line-height:1;max-height:40px;padding:0">
            </td>
        </tr>
        <tr>
            <td style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-weight:normal;padding:0 20px">
                <div>
                    <table class="m_-6590733290487731973ecxconversation-part m_-6590733290487731973ecxuser" style="/*! /*! border-collapse:separate; */ */border-spacing:0;font-size:12px;line-height:18px" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tbody>

                        <tr>
                            <td style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:17px;color:#676767;padding:0;vertical-align:top;text-align:Left;line-height:40px" valign="top">
                                Hello <strong>{{ $data['name']}}</strong>,
                            </td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:17px;font-weight:normal;color:#676767;padding:0;vertical-align:top;text-align:Left;line-height:40px" valign="top">
                                You are recieving this email because we recieved a reset password request from your account

                            </td>
                        </tr>

                        <tr>
                            <td style="align-items:center; font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:17px;color:#676767;padding:0;vertical-align:top;text-align:Left;line-height:40px" valign="top">
                             
                                <a class="reset-btn" href="{{$data['link']}}/resetPassword/{{$data['token']}}/{{$data['email']}}">Reset Password</a>
                     
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:17px;font-weight:normal;color:#676767;padding:0;vertical-align:top;text-align:Left;line-height:40px" valign="top">
                                The password reset will expire in 60 minutes

                            </td>
                        </tr>
                   
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td class="" style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:1px;font-weight:normal;height:25px;line-height:1;max-height:40px;padding:0"></td>
        </tr>
        </tbody>
    </table>
    <table style="background:#F7941E;font-size:12px;height:70px;max-width:600px;width:100%;border-collapse:collapse" cellspacing="0" cellpadding="0" border="0" bgcolor="#333C41" align="center">
        <tbody>
        <tr>
            <td style="color:#0c0b0b;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-weight:normal;height:30px;padding:20px 0 20px 20px;vertical-align:middle;line-height:1.2" valign="middle">
                Made by
                <a href="http://nexcom.ke/" style="text-decoration:none" target="_blank">Nexcom</a>
            </td>
        </tr>
        </tbody>
    </table>
</div>
