<html>
<head>
<title>게시판</title>
<style>

</style>
</head>
<body topmargin=0 leftmargin=0 text=#464646>
  <center>
    <br>
    <form action=insert.php method=post>
      <table width=580 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777>
        <tr>
          <td height=20 align=center bgcolor=#999999>
            <font color=white><b>Write</b></font>
          </td>
        </tr>
        <tr>
          <td bgcolor=white>&nbsp;
            <table>
              <tr>
                <td width=60 align=left>name</td>
                <td align=left>
                  <input type=text name=name size=20 maxlength=10>
                </td>
              </tr>
              <tr>
                <td width=60 align=left>email</td>
                <td align=left>
                  <input type=text name=email size=20 maxlength=25>
                </td>
              </tr>
              <tr>
                <td width=60 align=left>password</td>
                <td align=left>
                  <input type=password name=name size=8 maxlength=8>
                  (수정,삭제시 반드시 필요)
                </td>
              </tr>
              <tr>
                <td width=60 align=left>title</td>
                <td align=left>
                  <input type=text name=name size=60 maxlength=35>
                </td>
              </tr>
              <tr>
                <td width=60 align=left>description</td>
                <td align=left>
                  <TEXTAREA name=name cols=65 rows=15></TEXTAREA>
                </td>
              </tr>
              <tr>
                <td colspan=10 align=center>
                  &nbsp;&nbsp;
                  <input type=submit value="save">
                  &nbsp;&nbsp;
                  <input type=reset value="reset">
                  &nbsp;&nbsp;
                  <input type=button value="back" onclick="history.back(-1)">
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </form>
  </center>
</body>
</html>
