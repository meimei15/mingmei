/**为提交按钮绑定监听函数**/
$('#bt-submit').click(function(){
    var uname = $('[id="uname1"]').val();
    console.log(uname);
    var upwd = $('[id="upwd1"]').val();
  console.log(upwd);
  //异步提交用户名和密码，实现用户注册
  $.ajax({
    type: 'POST',
    url: 'data/user_add.php',
    data: {uname: uname, upwd: upwd},
    success: function(result){
      if(result.code==1){
        alert('注册成功！2秒钟跳转到产品列表页...');
        setTimeout(function(){
          location.href = 'index.html';
          sessionStorage.setItem('LoginName', uname);
        }, 2000);
      }else {
        alert('注册失败！错误原因：'+result.msg);
      }
    }
  })
});
