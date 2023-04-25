<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>表单效果</title>
    <style type="text/css">
        *{
            margin:0;
            padding:0;
        }
        body{
            font-size:63%;
            color:#000;
        }

        .input_on{
            padding:2px 8px 0pt 3px;
            height:18px;
            border:1px solid #999;
            background-color:#FFFFCC;
        }
        .input_off{
            padding:2px 8px 0pt 3px;
            height:18px;
            border:1px solid #CCC;
            background-color:#FFF;
        }
        .input_move{
            padding:2px 8px 0pt 3px;
            height:18px;
            border:1px solid #999;
            background-color:#FFFFCC;
        }
        .input_out{

            padding:2px 8px 0pt 3px;
            height:18px;
            border:1px solid #CCC;
            background-color:#FFF;
        }

        ul.input_test{
            margin:20px auto 0 auto;
            width:500px;
            list-style-type:none;
        }
        ul.input_test li{
            width:500px;
            height:22px;
            margin-bottom:10px;
        }
        .input_test label{
            float:left;
            padding-right:10px;
            width:100px;
            line-height:22px;
            text-align:right;
            font-size:1.4em;
        }
        .input_test p{
            float:left;
            _margin-top:-1px;
        }
        .input_test span{
            float:left;
            padding-left:10px;
            line-height:22px;
            text-align:left;
            font-size:1.2em;
            color:#999;
        }
    </style>
</head>
<body>
<ul class="input_test">
    <li>
        <label for="inp_name">姓名：</label>
        <p><input id="inp_name" class="input_out" name="" type="text" οnfοcus="this.className='input_on';this.οnmοuseοut=''" οnblur="this.className='input_off';this.οnmοuseοut=function(){this.className='input_out'};" οnmοusemοve="this.className='input_move'" οnmοuseοut="this.className='input_out'" /></p>
        <span>请输入您的姓名</span>
    </li>
    <li>
        <label for="inp_email">Email：</label>
        <p><input id="inp_email" class="input_out" name="" type="text" οnfοcus="this.className='input_on';this.οnmοuseοut=''" οnblur="this.className='input_off';this.οnmοuseοut=function(){this.className='input_out'};" οnmοusemοve="this.className='input_move'" οnmοuseοut="this.className='input_out'" /></p>
        <span>请输入您的Email</span>
    </li>
    <li>
        <label for="inp_web">网站：</label>
        <p><input id="inp_web" class="input_out" name="" type="text" οnfοcus="this.className='input_on';this.οnmοuseοut=''" οnblur="this.className='input_off';this.οnmοuseοut=function(){this.className='input_out'};" οnmοusemοve="this.className='input_move'" οnmοuseοut="this.className='input_out'" /></p>
        <span>请输入您的网站</span>
    </li>
</ul>
</body>
</html>