/**为提交按钮绑定监听函数**/
$('#bt-submit').click(function(){
  var uname = $('[id="uname"]').val();
  console.log(uname);
  var upwd = $('[id="upwd"]').val();
  //异步提交给服务器进行验证
  $.ajax({
    type: 'POST',
    url: 'data/login.php',
    data: {"uname":uname, "upwd":upwd},
    success: function(txt, msg, xhr){
      if(txt==='err'){  //用户名或密码错误
        $('.alert').html('用户名或密码错误！请重试！');
      }else if(txt==='ok'){   //登录成功
        $('.alert').html('登录成功！2秒钟跳转到sgsj主页...');
        setTimeout(function(){
          location.href = 'index.html';
        }, 2000);
        //loginName = uname; //把登录用户名保存到全局
        sessionStorage.setItem('LoginName', uname);
      }else { //其它错误
        $('.alert').html(txt);
      }
    }
  });
});
$('.btn-block').click(function(e){
  e.preventDefault();
  $('.form-1').css('display','none');
  $('.form-2').css('display','block');
  $('.welcome').html('欢迎注册');
});


var span=document.getElementById('sp');

//失去焦点时，提示验证错误消息
uname.onblur = function(){
  if(this.validity.valueMissing||uname.pattern===false){
    span.innerHTML=('用户名不能为空！');
    sp.style.backgroundColor=` #EE968D`;
  }else if(this.validity.tooShort){
    span.innerHTML=('用户名不能少于6位！');
    sp.style.backgroundColor=` #ff7c40`;
  }else if(this.validity.tooLong){
    span.innerHTML=('用户名不能大于6位！');
  }else{
    span.innerHTML=('输入正确');
    sp.style.backgroundColor=` #149C59`;
  }
};
