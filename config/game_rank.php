<?php
header('Content-Type: text/html;charset=UTF-8');
?>

<div class="ost_rank">
<span class="before"></span>
<span class="after"></span>
<!-- new game -->
<div class="ost_rank_col" id="rank_control1">
  <div class="col-head">
    <h2 class="rank-title">新游排行榜</h2>
    <a href="1.php" target="_blank" class="rank-more" onclick="pgvSendClick({hottag:'gamerank.new.more'})">更多<i class="icon-font">&#187;</i></a>
  </div>
  <div class="col-body">
    <ul class="rank-list">
      <li class="rank-head"><span class="rank-order-hd">排名</span><span class="rank-name-hd">游戏</span></li>
      <li class="rank-item current">
        <span class="rank-order-color">1</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="1.php" target="_blank" onclick="pgvSendClick({hottag:'gamerank.new.top1.link'})">刀锋铁骑</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/t7-2.jpg" alt="" height="82" width="194">
            <p class="game-meta"><a href="1.php" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top1.official'})"><i class="icon-home"></i>进入官网</a><a href="1.php" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top1.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-color">2</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="1.php" target="_blank" onclick="pgvSendClick({hottag:'gamerank.new.top2.link'})">战争雷霆</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/wt-2.jpg" alt="" height="82" width="194">
            <p class="game-meta"><a href="1.php" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top2.official'})"><i class="icon-home"></i>进入官网</a><a href="1.php" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top2.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-color">3</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="1.php" target="_blank" onclick="pgvSendClick({hottag:'gamerank.new.top3.link'})">神之浩劫</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/szhj-2.jpg" alt="" height="82" width="194">
            <p class="game-meta"><a href="1.php" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top3.official'})"><i class="icon-home"></i>进入官网</a><a href="1.php" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top3.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-gray">4</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="#" target="_blank" onclick="pgvSendClick({hottag:'gamerank.new.top4.link'})">冒险岛2</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/mxd2-2.jpg" alt="" height="82" width="194">
            <p class="game-meta"><a href="#" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top4.official'})"><i class="icon-home"></i>进入官网</a><a href="#" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top4.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-gray">5</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="1.php" target="_blank" onclick="pgvSendClick({hottag:'gamerank.new.top5.link'})">勇者大冒险</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/mx-2.jpg" alt="" height="82" width="194">
            <p class="game-meta"><a href="1.php" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top5.official'})"><i class="icon-home"></i>进入官网</a><a href="#" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top5.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-gray">6</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="1.php" target="_blank" onclick="pgvSendClick({hottag:'gamerank.new.top6.link'})">兽人必须死</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/omd-2.jpg" alt="" height="82" width="194">
            <p class="game-meta"><a href="1.php" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top6.official'})"><i class="icon-home"></i>进入官网</a><a href="#" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top6.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-gray">7</span>

        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="1.php" target="_blank" onclick="pgvSendClick({hottag:'gamerank.new.top7.link'})">全职大师</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/qzds-2.jpg" alt="" height="82" width="194">
            <p class="game-meta"><a href="1.php" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top7.official'})"><i class="icon-home"></i>进入官网</a><a href="#" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top7.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-gray">8</span>

        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="1.php" target="_blank" onclick="pgvSendClick({hottag:'gamerank.new.top8.link'})">流放之路</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/lfzl-2.jpg" alt="" height="82" width="194">
            <p class="game-meta"><a href="1.php" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top8.official'})"><i class="icon-home"></i>进入官网</a><a href="#" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top8.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-gray">9</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="1.php" target="_blank" onclick="pgvSendClick({hottag:'gamerank.new.top9.link'})">捕鱼达人3D</a>
          <div class="rank-game-cover cover-top" style="">
            <img class="game-img" src="config/game_rank_data/bydr-2.jpg" alt="" height="82" width="194">
            <p class="game-meta"><a href="1.php" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top9.official'})"><i class="icon-home"></i>进入官网</a><a href="http://bydr.qq.com/act/a20151211web/index.htm?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top9.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-gray">10</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://hltk.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.new.top10.link'})">欢乐坦克</a>
          <div class="rank-game-cover cover-top" style="">
            <img class="game-img" src="config/game_rank_data/hltk-2.jpg" alt="" height="82" width="194">
            <p class="game-meta">
              <a href="http://hltk.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top10.official'})"><i class="icon-home"></i>进入官网</a>
              <a href="http://hltk.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.new.top10.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
<!-- hot game -->
<div class="ost_rank_col" id="rank_control2">
  <div class="col-head">
    <h2 class="rank-title">热门排行榜</h2>
    <a href="http://ossweb-img.qq.com/images/js/topfiles/ost1410/gmap.htm" target="_blank" class="rank-more" onclick="pgvSendClick({hottag:'gamerank.hot.more'})">更多<i class="icon-font">&#187;</i></a>
  </div>
  <div class="col-body">
    <ul class="rank-list">
      <li class="rank-head"><span class="rank-order-hd">排名</span><span class="rank-name-hd">游戏</span></li>
      <li class="rank-item current">
        <span class="rank-order-color">1</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://lol.qq.com/main.shtml?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.hot.top1.link'})">英雄联盟</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/lol-2.jpg" alt="" height="82" width="194">
            <p class="game-meta"><a href="http://lol.qq.com/main.shtml?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top1.official'})"><i class="icon-home"></i>进入官网</a><a href="http://lol.qq.com/download.shtml?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top1.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-color">2</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://dnf.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.hot.top2.link'})">地下城与勇士</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/dnf-2.jpg" alt="" height="82" width="194">
            <p class="game-meta"><a href="http://dnf.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top2.official'})"><i class="icon-home"></i>进入官网</a><a href="http://dnf.qq.com/web2013/down.shtml?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top2.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-color">3</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://cf.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.hot.top3.link'})">穿越火线</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/cf-2.jpg" alt="" height="82" width="194">
            <p class="game-meta"><a href="http://cf.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top3.official'})"><i class="icon-home"></i>进入官网</a><a href="http://cf.qq.com/web201105/download.shtml?ADTAG=index.btn.xzyx&amp;ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top3.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-gray">4</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://x5.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.hot.top4.link'})">QQ炫舞</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/x5-2.jpg" alt="" height="82" width="194">
            <p class="game-meta"><a href="http://x5.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top4.official'})"><i class="icon-home"></i>进入官网</a><a href="http://x5.qq.com/web201403/down.shtml?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top4.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-gray">5</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://eafifa.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.hot.top5.link'})">FIFA Online3 </a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/fifa-2.jpg" alt="" height="82" width="194">
            <p class="game-meta"><a href="http://eafifa.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top5.official'})"><i class="icon-home"></i>进入官网</a><a href="http://eafifa.qq.com/web201404/download.shtml?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top5.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-gray">6</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://nz.qq.com/main.shtml?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.hot.top6.link'})">逆战</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/nz-2.jpg" alt="" height="82" width="194">
            <p class="game-meta"><a href="http://nz.qq.com/main.shtml?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top6.official'})"><i class="icon-home"></i>进入官网</a><a href="http://nz.qq.com/download.shtml?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top6.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-gray">7</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://speed.qq.com/main.shtml?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.hot.top7.link'})">QQ飞车</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/speed-2.jpg" alt="" height="82" width="194">
            <p class="game-meta"><a href="http://speed.qq.com/main.shtml?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top7.official'})"><i class="icon-home"></i>进入官网</a><a href="http://speed.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top7.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-gray">8</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://wuxia.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.hot.top8.link'})">天涯明月刀</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/wuxia-2.jpg" alt="" height="82" width="194">
            <p class="game-meta"><a href="http://wuxia.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top8.official'})"><i class="icon-home"></i>进入官网</a><a href="http://wuxia.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top8.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-gray">9</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://cos.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.hot.top9.link'})">英魂之刃</a>
          <div class="rank-game-cover cover-top" style="">
            <img class="game-img" src="config/game_rank_data/cos-2.jpg" alt="" height="82" width="194">
            <p class="game-meta"><a href="http://cos.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top9.official'})"><i class="icon-home"></i>进入官网</a><a href="http://cos.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top9.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-gray">10</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://xysj.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.hot.top10.link'})">轩辕世界</a>
          <div class="rank-game-cover cover-top" style="">
            <img class="game-img" src="config/game_rank_data/xysj-2.jpg" alt="" height="82" width="194">
            <p class="game-meta"><a href="http://xysj.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top10.official'})"><i class="icon-home"></i>进入官网</a><a href="http://xysj.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hot.top10.download'})"><i class="icon-download"></i>下载游戏</a></p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
<!-- mobile game -->
<div class="ost_rank_col" id="rank_control3">
  <div class="col-head">
    <h2 class="rank-title">新品手游排行榜</h2>
    <a href="http://ossweb-img.qq.com/images/js/topfiles/ost1410/gmap.htm" target="_blank" class="rank-more" onclick="pgvSendClick({hottag:'gamerank.newm.more'})">更多<i class="icon-font">&#187;</i></a>
  </div>
  <div class="col-body">
    <ul class="rank-list">
      <li class="rank-head"><span class="rank-order-hd">排名</span><span class="rank-name-hd">游戏</span></li>
      <li class="rank-item">
        <span class="rank-order-color">1</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://ylzt.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.newm.top1.link'})">御龙在天手游</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/ylsy-2.jpg" alt="" height="82" width="194">
            <p class="game-meta2"><a href="http://ylzt.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.newm.top1.official'})"><i class="icon-home2"></i></a><a href="http://ylzt.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.newm.top1.ios'})"><i class="icon-ios"></i></a><a href="http://ylzt.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.newm.top1.android'})"><i class="icon-android"></i></a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-color">2</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://cr.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.newm.top2.link'})">皇室战争</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/hszz-2.jpg" alt="" height="82" width="194">
            <p class="game-meta2"><a href="http://cr.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.newm.top2.official'})"><i class="icon-home2"></i></a><a href="http://cr.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.newm.top2.ios'})"><i class="icon-ios"></i></a><a href="http://cr.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.newm.top2.android'})"><i class="icon-android"></i></a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-color">3</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://jxqy.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.newm.top3.link'})">剑侠情缘</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/jxqy-2.jpg" alt="" height="82" width="194">
            <p class="game-meta2"><a href="http://jxqy.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.newm.top3.official'})"><i class="icon-home2"></i></a><a href="http://jxqy.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.newm.top3.ios'})"><i class="icon-ios"></i></a><a href="http://jxqy.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.newm.top3.android'})"><i class="icon-android"></i></a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-gray">4</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://zt.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.newm.top4.link'})">征途</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/ztsy-2.jpg" alt="" height="82" width="194">
            <p class="game-meta2"><a href="http://zt.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.newm.top4.official'})"><i class="icon-home2"></i></a><a href="http://zt.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.newm.top4.ios'})"><i class="icon-ios"></i></a><a href="http://zt.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.newm.top4.android'})"><i class="icon-android"></i></a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-gray">5</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://cfm.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.newm.top5.link'})">穿越火线</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/cfsy-2.jpg" alt="" height="82" width="194">
            <p class="game-meta2"><a href="http://cfm.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.newm.top5.official'})"><i class="icon-home2"></i></a><a href="http://cfm.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.newm.top5.ios'})"><i class="icon-ios"></i></a><a href="http://cfm.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.newm.top5.android'})"><i class="icon-android"></i></a></p>
          </div>
        </div>
      </li>
    </ul>
  </div>
  <div class="col-head2">
    <h2 class="rank-title">热门手游排行榜</h2>
    <a href="http://ossweb-img.qq.com/images/js/topfiles/ost1410/gmap.htm" target="_blank" class="rank-more" onclick="pgvSendClick({hottag:'gamerank.hotm.more'})">更多<i class="icon-font">&#187;</i></a>
  </div>
  <div class="col-body">
    <ul class="rank-list">
      <li class="rank-item current">
        <span class="rank-order-color">1</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://pvp.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.hotm.top1.link'})">王者荣耀</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/sgame-22.jpg" alt="" height="82" width="194">
            <p class="game-meta2"><a href="http://pvp.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hotm.top1.official'})"><i class="icon-home2"></i></a><a href="http://pvp.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hotm.top1.ios'})"><i class="icon-ios"></i></a><a href="http://pvp.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hotm.top1.android'})"><i class="icon-android"></i></a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-color">2</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://pao.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.hotm.top2.link'})">天天酷跑</a>
          <div class="rank-game-cover cover-bottom" style="">
            <img class="game-img" src="config/game_rank_data/pao-2.jpg" alt="" height="82" width="194">
            <p class="game-meta2"><a href="http://pao.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hotm.top2.official'})"><i class="icon-home2"></i></a><a href="http://pao.qq.com/d/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hotm.top2.ios'})"><i class="icon-ios"></i></a><a href="http://pao.qq.com/d/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hotm.top2.android'})"><i class="icon-android"></i></a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-color">3</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://huanle.qq.com/mddz/index.shtml?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.hotm.top3.link'})">欢乐斗地主</a>
          <div class="rank-game-cover cover-top" style="">
            <img class="game-img" src="config/game_rank_data/huanle-2.jpg" alt="" height="82" width="194">
            <p class="game-meta2"><a href="http://huanle.qq.com/mddz/index.shtml?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hotm.top3.official'})"><i class="icon-home2"></i></a><a href="https://itunes.apple.com/cn/app/huan-le-dou-zhu-qq-you-xi/id446324234?mt=8&amp;ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hotm.top3.ios'})"><i class="icon-ios"></i></a><a href="http://android.myapp.com/myapp/detail.htm?apkName=com.qqgame.hlddz&amp;ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hotm.top3.android'})"><i class="icon-android"></i></a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-gray">4</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://hyrz.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.hotm.top4.link'})">火影忍者</a>
          <div class="rank-game-cover cover-top" style="">
            <img class="game-img" src="config/game_rank_data/hyrz-2.jpg" alt="" height="82" width="194">
            <p class="game-meta2"><a href="http://hyrz.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hotm.top4.official'})"><i class="icon-home2"></i></a><a href="http://hyrz.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hotm.top4.ios'})"><i class="icon-ios"></i></a><a href="http://hyrz.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hotm.top4.android'})"><i class="icon-android"></i></a></p>
          </div>
        </div>
      </li>
      <li class="rank-item">
        <span class="rank-order-gray">5</span>
        <div class="rank-name-game cover-tip">
          <a class="ctip-text" href="http://mir.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" onclick="pgvSendClick({hottag:'gamerank.hotm.top5.link'})">热血传奇</a>
          <div class="rank-game-cover cover-top" style="">
            <img class="game-img" src="config/game_rank_data/mir-2.jpg" alt="" height="82" width="194">
            <p class="game-meta2"><a href="http://mir.qq.com/?ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hotm.top5.official'})"><i class="icon-home2"></i></a><a href="http://mir.qq.com/d/index_down.html?device=iphone&amp;ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hotm.top2.ios'})"><i class="icon-ios"></i></a><a href="http://mir.qq.com/d/index_down.html?device=android&amp;ADTAG=media.innerenter.gameweb.gamelist" target="_blank" class="game-link" onclick="pgvSendClick({hottag:'gamerank.hotm.top2.android'})"><i class="icon-android"></i></a></p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
</div>