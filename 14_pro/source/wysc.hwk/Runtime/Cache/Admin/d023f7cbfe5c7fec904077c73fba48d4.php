<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="__SKIN__plugin/ui/themes/__THEME__/easyui.css" />
<link rel="stylesheet" type="text/css" href="__SKIN__plugin/ui/themes/icon.css" />
<script src="__SKIN__plugin/ui/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="__SKIN__plugin/ui/jquery.easyui.min.js" type="text/javascript"></script>
<script src="__SKIN__plugin/ui/easyui-lang-zh_CN.js" type="text/javascript"></script>
<style type="text/css">
    *{margin:0; padding:0; color:#363636;}
    a{text-decoration:none; color:#000;}
</style>
        <title>添加商品属性列表</title>
        <link href="__SKIN__css/tableform.css" rel="stylesheet" type="text/css"/>
        <script>
            $(function () {
                $('input[name="inputtype"]').click(function () {
                    if (this.value == 1) {
                        $('#info').attr('disabled', true);
                    } else {
                        $('#info').attr('disabled', false);
                    }
                })
            })
        </script>
    </head>
    <body>
        <div class="easyui-panel" data-options="title:'添加商品属性列表',border:false,iconCls:'icon-chart_organisation_add'">       
            <div id="toolbar" style="margin-top:10px; margin-left:10px;">
                <a href="<?php echo U('Attrlist/manageattrlist',array(id=>$attrid));?>" class="easyui-linkbutton"data-options="
                   iconCls:'icon-chart_organisation'
                   ">返回商标属性列表</a>
            </div>
            <form name="f1" action="" method="POST" enctype="multipart/form-data">
                <table class="table-form" border="1" width="100%">
                    <tr>
                        <th>属性名称</th>
                        <td>
                            <input type="hidden" name="goodsattr_id" value="<?php echo ($attrid); ?>" />
                            <input type="text" name="name" class="ipt" />
                        </td>
                    </tr>
                    <tr>
                        <th>控件名称</th>
                        <td>
                            <input type="text" name="inputname" class="ipt" />
                        </td>
                    </tr>
                    <tr>
                        <th>输入类型</th><td>
                            <input type="radio" name="inputtype" checked="true" value="1"/>
                            &nbsp;文本框
                            <input type="radio" name="inputtype" value="2" />
                            &nbsp;单选按钮
                            <input type="radio" name="inputtype" value="3"/>
                            &nbsp;多选按钮
                        </td>
                    </tr>
                    <tr>
                        <th>选项值</th><td>
                            <textarea id="info" name="optionlist" rows="9" cols="60" disabled="false"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input name="s1" type="submit" value="提交" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input name="r1" type="reset" value="清除" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>