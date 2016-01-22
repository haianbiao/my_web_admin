<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin</title>
       <meta charset="utf-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>" />
        <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/head_title.css'; ?>" />
        <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/common.css'; ?>" />
         <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/dashboard.css'; ?>" />
         <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/css/footer.css'; ?>" />
         <link rel="stylesheet"  type="text/css"   href="<?php echo base_url().'assets/editor/plugins/code/prettify.css'; ?>" />
         
</head>
<body>
<div id = "container">
             <?php echo $header; ?>
             <div id = "content">
                    <div id = "left_content">
                          <div class="jumbotron">
                                   <p><a href="<?php echo site_url('add'); ?>" >新增文章</a></p>
                                    <p><a href="<?php echo site_url('tag');?>" >新增标签</a></p>
                                   <p><a href="#" >全部文章</a></p>
                          </div>
          </div>
                    <div  id = "right_content">
                            <form     action = "<?php  echo site_url('tag/add_tag')?>"method = "POST">
                                  <div>
                                            标签名:<span><input  type = "text"   name = "tag_name"  value = ""  placeholder = "标签名"/></span>
                                 </div>
                                  <div   style = "margin-top:30px">
                                          <input type = "submit"  name = "submit"   value = "确认"  class = "btn btn-success"/>
                                    </div>
                               </form>
                    </div>
         </div>
              <div  class = "clear">
              </div>
  <div id = "footer">
                 <span>H.A.B&copy;2015</span>
              </div>
</div>

<script charset="utf-8" src="<?php echo base_url(); ?>assets/editor/kindeditor.js"></script>
<script charset="utf-8" src="<?php echo base_url(); ?>assets/editor/plugins/code/prettify.js"></script>
<script charset="utf-8" src="<?php echo base_url(); ?>assets/editor/plugins/code/code.js"></script>
<script charset="utf-8" src="<?php echo base_url(); ?>assets/editor/lang/zh_CN.js"></script>
<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id',{
                     cssPath: '<?php echo base_url(); ?>assets/editor/plugins/code/prettify.css',
                     items:[
        'source', '|', 'undo', 'redo', '|', 'preview', 'print', 'template', 'code', 'cut', 'copy', 'paste',
        'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
        'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
        'superscript', 'clearhtml', 'quickformat', 'selectall', '/',
        'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
        'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image', 'multiimage',
        'flash', 'media', 'insertfile', 'table', 'hr', 'emoticons', 'baidumap', 'pagebreak',
        'anchor', 'link', 'unlink'
]
                });
                prettyPrint();
        });
</script>
</body>
</html>